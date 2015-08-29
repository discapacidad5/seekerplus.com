<?php

namespace SeekerPlus\AdsmanagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use SeekerPlus\AdsmanagerBundle\Entity\AdsmanagerCategories;
use SeekerPlus\AdsmanagerBundle\Form\AdsmanagerAdsType;
use SeekerPlus\AdsmanagerBundle\Entity\AdsmanagerAds;
use SeekerPlus\AdsmanagerBundle\Models\Formdata;
use SeekerPlus\AdsmanagerBundle\Models\Message;
use SeekerPlus\AdsmanagerBundle\Models\Document;
use \DateTime;
use \DateInterval;
use Symfony\Component\HttpFoundation\File\File;
use SeekerPlus\AdsmanagerBundle\Entity\AdsmanagerCities;

class AdsSearchController extends Controller
{
	public function searchAction(Request $request)
    {
        if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
            return $this->redirectToRoute('fos_user_security_login');
        }
        //WHERE p.ad_keywords like :texto
        // ->setParameter('texto', $texto)
        $request = $this->container->get('request');
        $texto = $request->request->get('texto');
        $ciudad = $request->request->get('pais');
        $quantity_result = 10;
        
        $repo = $this->getDoctrine()->getManager();
        
        $query = $repo->createQuery('
               select a from AdsmanagerBundle:AdsmanagerCategories a 
               where a.metadataKeywords LIKE :title or a.name Like :name')
                ->setParameter('title', '%'.$texto.'%')
                ->setParameter('name', '%'.$texto.'%')
                ->setMaxResults($quantity_result);
        $categories = $query->getResult();

        $quantity_result = $quantity_result - count($categories);
        
        $query = $repo->createQuery('
               select a from AdsmanagerBundle:AdsmanagerAds a 
               where (a.adKeywords LIKE :key or a.adHeadline LIKE :title) and a.adLocation = :ciudad')
                ->setParameter('key', '%'.$texto.'%')
                ->setParameter('title', '%'.$texto.'%')
                ->setParameter('ciudad', $ciudad)
                ->setMaxResults($quantity_result);
        $ads = $query->getResult();
        
        $quantity_result = $quantity_result - count($ads);
        
        $query = $repo->createQuery('
               select a.id, a.name, a.description, a.price, a.images, a.idAd from AdsmanagerBundle:AdsmanagerProduct a, AdsmanagerBundle:AdsmanagerAds b
               where a.name LIKE :name and a.idAd = b.id and b.adLocation = :ciudad')
                ->setParameter('name', '%'.$texto.'%')
                ->setParameter('ciudad', $ciudad)
                ->setMaxResults($quantity_result);
        $products = $query->getResult();

        return $this->render('AdsmanagerBundle:AdsSearch:lista.html.twig', array("ads"=>$ads,"categories"=>$categories,"products"=>$products));
    }

    public function searchCategoryAction($idCategory,$idCity,$latitude,$longitude,$range,Request $request)
    {
        if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
            return $this->redirectToRoute('fos_user_security_login');
        }

        $category=$this->getDoctrine()
        ->getRepository("AdsmanagerBundle:AdsmanagerCategories")->findOneById($idCategory);

        $city=$this->getDoctrine()
        ->getRepository("AdsmanagerBundle:AdsmanagerCities")->findOneById($idCity);
        
        $ads = $this->getAdsCategory ($latitude,$longitude,$city,$idCategory,$range);

        $cities=new AdsmanagerCities();
         
        $adCities=$cities->getAllCities($this->getDoctrine()->getEntityManager());

        $locationCity=$cities->getAdCity($this->getDoctrine()->getEntityManager(),$city->getTitle(),$this);
        
        $categories=$this->getDoctrine()
        ->getRepository("AdsmanagerBundle:AdsmanagerCategories");
        $query = $categories->createQueryBuilder('a')
        ->addOrderBy('a.ordering', 'ASC')
        ->getQuery();
        
        $categories = $query->getResult();
        
        if(!$ads){
            return $this->render('AdsmanagerBundle:Categories:dontExits.html.twig',array("categories"=>$categories,"cities"=>$adCities,"location"=>$locationCity,"latitude"=>$latitude,"longitude"=>$longitude));
        }

        return $this->render('AdsmanagerBundle:Categories:show.html.twig',
                array("categories"=>$categories,"cities"=>$adCities,"location"=>$locationCity,"latitude"=>$latitude,"longitude"=>$longitude,"ads"=>$ads,"category"=>$category,"city"=>$city,"range"=>$range));
    }

    private function getAdsCategory($latitude,$longitude,$city,$idCategory,$range) {
     
 
     if($latitude==0&&$longitude==0){
     $em = $this->getDoctrine()->getManager();
     $query = $em->createQuery(
            'SELECT a,( 3959 * acos(cos(radians(4.34360))' .
            '* cos( radians( a.adLatitude ) )' .
            '* cos( radians( a.adLongitude )' .
            '- radians(-74.3619) )' .
            '+ sin( radians(4.34360) )' .
            '* sin( radians( a.adLatitude ) ) ) )
                    FROM AdsmanagerBundle:AdsmanagerAds a
                    INNER JOIN a.catid c
                    INNER JOIN AdsmanagerBundle:AdsmanagerCategories b
                    WHERE a.published = 1
                    AND a.expirationDate >= :date
                    AND a.adLocation = :location
                    AND b.id =:parent
                    AND b.id = c.id
                    ORDER BY a.adHeadline ASC
                 '
  
     )->setParameter('date',new DateTime())->setParameter('location',$city->getTitle())
     ->setParameter('parent',$idCategory)->setMaxResults(10)->setFirstResult($range);
    
     }else{
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT a,( 3959 * acos(cos(radians('.$latitude.'))' .
                '* cos( radians( a.adLatitude ) )' .
                '* cos( radians( a.adLongitude )' .
                '- radians('.$longitude.') )' .
                '+ sin( radians('.$latitude.') )' .
                '* sin( radians( a.adLatitude ) ) ) )*1000 AS distance
                    FROM AdsmanagerBundle:AdsmanagerAds a
                    INNER JOIN a.catid c
                    INNER JOIN AdsmanagerBundle:AdsmanagerCategories b
                    WHERE a.published = 1
                    AND a.expirationDate >= :date
                    AND a.adLocation = :location
                    AND b.id =:parent
                    AND b.id = c.id
                    ORDER BY distance ASC
                 '
        
        )->setParameter('date',new DateTime())->setParameter('location',$city->getTitle())
        ->setParameter('parent',$idCategory)->setMaxResults(10)->setFirstResult($range);
        
     }
     $ads = $query->getResult();
     return $ads;
    }
}
