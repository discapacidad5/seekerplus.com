<?php

namespace SeekerPlus\AdsmanagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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

class AdsController extends Controller
{
	public function myAdsAction(Request $request)
	{
		if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
			return $this->redirectToRoute('fos_user_security_login');
		}

		$userId = $this->get('security.context')->getToken()->getUser()->getId();
		
		$ads= $this->getDoctrine()
		->getRepository("AdsmanagerBundle:AdsmanagerAds")
		->findByUserid($userId);
		
		foreach ($ads as $ad){
			$products= $this->getDoctrine()
			->getRepository("AdsmanagerBundle:AdsmanagerProduct")
			->findByIdAd($ad->getId());
			foreach ($products as $product){
				
				$ad->setProducts (array('id' => $product->getId(),
						             'name' => $product->getName(),
									 'description' => $product->getDescription(),
						             'price' => $product->getPrice(),
						             'images' => $product->getImages()
				));
				
			}
			
		}
		
		$userEmail = $this->get('security.context')->getToken()->getUser()->getEmail();
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
					'SELECT b
				    FROM BannerBundle:Banner b,BannerBundle:BannerClient c
				    WHERE c.email = :email'
				
		)->setParameter('email',$userEmail);
		
		$banners = $query->getResult();
		$image="";
		foreach($banners as $banner) {
			$obj = json_decode($banner->getParams());
			$image=$obj->{'imageurl'};
			$banner->setParams($image);
		}
	
		return $this->render('AdsmanagerBundle:Ads:myAds.html.twig',
				array("ads"=>$ads,"banners"=>$banners));

	}

    public function newAdsAction(Request $request)
    {
    	
    	if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
    		return $this->redirectToRoute('fos_user_security_login');
    	}
    	
    	$formData=new Formdata();
    	$ad=new AdsmanagerAds();
    	$message=new Message();
    	
    	$categories=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerCategories");
    	$query = $categories->createQueryBuilder('a')
    	->addOrderBy('a.name', 'ASC')
    	->getQuery();
    	
    	$categories = $query->getResult();
    	
    	$cities=new AdsmanagerCities();
    	$userLocation = $this->get('security.context')->getToken()->getUser()->getLocation();
    	$locationCity=$cities->getAdCity($this->getDoctrine()->getEntityManager(),$userLocation);
    	
    	    	
    	$form=$this->createForm(new AdsmanagerAdsType($this->getDoctrine()->getEntityManager()),$ad,array('validation_groups'=>'add'));
    	if(!$formData->isSetFormat($request))
    	{
			return $this->render('AdsmanagerBundle:Ads:newAds.html.twig',array("form"=>$form->createView(),"categories"=>$categories,"location"=>$locationCity));
    	}

    	if(!$formData->isValidFormat($request,$form,$message))
    	{
    		$message->show($this);
    		return $this->render('AdsmanagerBundle:Ads:newAds.html.twig',array("form"=>$form->createView(),"categories"=>$categories,"location"=>$locationCity));
    	
    	}

    	$image = $request->files->get('imagen');

    	if(!$formData->isValidImage($image,$form,$ad,$message,'adHeadline')){
    		$message->show($this);
    		return $this->render('AdsmanagerBundle:Ads:newAds.html.twig',array("form"=>$form->createView(),"categories"=>$categories,"location"=>$locationCity));
     		
    	}
    	$userId = $this->get('security.context')->getToken()->getUser()->getId();
    	$ad->setUserid($userId);
    	$date = new DateTime();
    	$ad->setDateCreated($date);
    	$createDate = new DateTime();
    	$ad->setExpirationDate($createDate->add(new DateInterval('P1Y')));
    	
    	$formData->insertData($this,$ad);
    	$message->setSuccessMessages("El anuncio ha sido Ingresado Exitosamente.")->show($this);
    	$this->setNameIdImages ( $formData, $ad, $image );
    	
    	if($image){
    	$formData->uploadImages($image,'images/ids/'.$ad->getId(),$ad);
    	$this->resizeImages($ad->getId(),$ad->getImages());
    	}
    	
    	return $this->redirectToRoute('my_ads');
    }

    public function editAdsAction($id,Request $request)
    {
    	 
    	if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
    		return $this->redirectToRoute('fos_user_security_login');
    	}
    	
    	$ad=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerAds")
    	->find($id);
    	
    	if(!$ad){
    		return $this->redirectToRoute('my_ads');
    	} 

    	if(!$this->isAnUserOwner ( $ad->getUserId() )){
    		return $this->redirectToRoute('my_ads');
    	}
    	
    	$formData=new Formdata();
    	$message=new Message();
    	 
    	$categories=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerCategories");
    	$query = $categories->createQueryBuilder('a')
    	->addOrderBy('a.name', 'ASC')
    	->getQuery();
    	
    	$categories = $query->getResult();
    	
    	$cities=new AdsmanagerCities();
    	$userLocation = $this->get('security.context')->getToken()->getUser()->getLocation();
    	$locationCity=$cities->getAdCity($this->getDoctrine()->getEntityManager(),$userLocation);
     
    	$form=$this->createForm(new AdsmanagerAdsType($this->getDoctrine()->getEntityManager()),$ad,array('validation_groups'=>'add'));
    	if(!$formData->isSetFormat($request))
    	{
    		$form->handleRequest($request);
    		return $this->render('AdsmanagerBundle:Ads:editAds.html.twig',array("form"=>$form->createView(),"categories"=>$categories,"location"=>$locationCity,"image"=>$ad->getImages(),"id"=>$ad->getId()));
    	}
    
    	if(!$formData->isValidFormat($request,$form,$message))
    	{
    		$message->show($this);
    		return $this->render('AdsmanagerBundle:Ads:editAds.html.twig',array("form"=>$form->createView(),"categories"=>$categories,"location"=>$locationCity,"image"=>$ad->getImages(),"id"=>$ad->getId()));
    		 
    	}

    	$image = $request->files->get('imagen');
    
    	if(!$formData->isValidImageUpdate($image,$form,$ad,$message,'adHeadline')){
    		$message->show($this);
    		return $this->render('AdsmanagerBundle:Ads:editAds.html.twig',array("form"=>$form->createView(),"categories"=>$categories,"location"=>$locationCity,"image"=>$ad->getImages(),"id"=>$ad->getId()));
    		 
    	}
    	
    	$userId = $this->get('security.context')->getToken()->getUser()->getId();
    	$ad->setUserid($userId);
    	$ad->setPublished(0);
    	$date = new DateTime();
    	$ad->setDateModified($date);

   	    $formData->updateData($this);
    	$message->setSuccessMessages("El anuncio ha sido Modificado Exitosamente.")->show($this);
    	
    	if($image){
    	$formData->uploadImages($image,'images/ids/'.$ad->getId(),$ad);
    	$this->resizeImages($ad->getId(),$ad->getImages());
    	}
    	return $this->redirectToRoute('my_ads');
    }

    public function deleteAdsAction($id,Request $request)
    {
    	if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
    		return $this->redirectToRoute('fos_user_security_login');
    	}
    	
    	$ad=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerAds")
    	->find($id);
    	
        if(!$ad){
    		return $this->redirectToRoute('my_ads');
    	} 
    	
    	if(!$this->isAnUserOwner ( $ad->getUserId() )){
    		return $this->redirectToRoute('my_ads');
    	}
    	
    	$adProducts=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerProduct")
    	->findByIdAd($id);
    	
    	$formData=new Formdata();
    	foreach ($adProducts as $product){
    		$formData->deleteData($this,$product);
    	}

    	$message=new Message();
    	$document = new Document();
    	$document->deleteDir("/images/ids/".$ad->getId());
    	$formData->deleteData($this,$ad);

    	$message->setSuccessMessages("El anuncio ha sido Eliminado Exitosamente.")->show($this);

    	return $this->redirectToRoute('my_ads');
   
    }
    public function renewAdsAction($id,Request $request)
    {
    	if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
    		return $this->redirectToRoute('fos_user_security_login');
    	}
    	 
    	$ad=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerAds")
    	->find($id);
    	 
    	if(!$ad){
    		return $this->redirectToRoute('my_ads');
    	}
    	
    	if(!$this->isAnUserOwner ( $ad->getUserId() )){
    		return $this->redirectToRoute('my_ads');
    	}
    	
    	$formData=new Formdata();
    	$message=new Message();

    	$date = new DateTime();
    	$ad->setExpirationDate($date->add(new DateInterval('P1Y')));
    	$formData->updateData($this);
    	$message->setSuccessMessages("El anuncio ha sido Renovado Exitosamente.")->show($this);
    
    	return $this->redirectToRoute('my_ads');
    	 
    }

    public function showAction($idAd,$idCity,Request $request){
    	
    	if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
    		return $this->redirectToRoute('fos_user_security_login');
    	}
    	
    	$ad=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerAds")->findOneById($idAd);
    	
    	$products= $this->getDoctrine()
    		->getRepository("AdsmanagerBundle:AdsmanagerProduct")
    		->findByIdAd($ad->getId());
    		foreach ($products as $product){
    	
    			$ad->setProducts (array('id' => $product->getId(),
    					'name' => $product->getName(),
    					'description' => $product->getDescription(),
    					'price' => $product->getPrice(),
    					'images' => $product->getImages()
    			));
    	
    		}
    	
    	$city=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerCities")->findOneById($idCity);
    	
    	$cities=new AdsmanagerCities();
    	
    		
    	$adCities=$cities->getAllCities($this->getDoctrine()->getEntityManager());
    	
    	$locationCity=$cities->getAdCity($this->getDoctrine()->getEntityManager(),$city->getTitle(),$this);
    	
    	$categories=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerCategories");
    	$query = $categories->createQueryBuilder('a')
    	->addOrderBy('a.ordering', 'ASC')
    	->getQuery();
    	
    	$categories = $query->getResult();
    	
    	if(!$ad){
    		return $this->render('AdsmanagerBundle:Ads:dontExits.html.twig',array("categories"=>$categories,"cities"=>$adCities,"location"=>$locationCity));
    	}
    	
    	return $this->render('AdsmanagerBundle:Ads:show.html.twig',
    			array("categories"=>$categories,"cities"=>$adCities,"location"=>$locationCity,"ad"=>$ad));
    	 
    }

    public function showMapAction($idAd,$idCity,Request $request)
    {
    	if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){
    		return $this->redirectToRoute('fos_user_security_login');
    	}
    
    	$city=$this->getDoctrine()
    	->getRepository("AdsmanagerBundle:AdsmanagerCities")->findOneById($idCity);
    
    	$em = $this->getDoctrine()->getManager();
    	$query = $em->createQuery(
    			'SELECT a
				    FROM AdsmanagerBundle:AdsmanagerAds a
				    INNER JOIN a.catid c
				    INNER JOIN AdsmanagerBundle:AdsmanagerCategories b
				    WHERE a.published = 1
    				AND a.expirationDate >= :date
    			    AND a.adLocation = :location
				    AND a.id =:id
				    AND b.id = c.id
				    ORDER BY a.adHeadline ASC
				 '
    
    	)->setParameter('date',new DateTime())->setParameter('location',$city->getTitle())
    	->setParameter('id',$idAd);
    
    	$ads = $query->getResult();
    
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
    		return $this->render('AdsmanagerBundle:Ads:dontExits.html.twig',array("categories"=>$categories,"cities"=>$adCities,"location"=>$locationCity,"latitude"=>0,"longitude"=>0));
    	}
    
    	return $this->render('AdsmanagerBundle:Map:ads.html.twig',array("categories"=>$categories,"ads"=>$ads,"location"=>$locationCity,"cities"=>$adCities));
    
    }
    private function setNameIdImages($formData, $ads, $image) {
    	if($image){
	    	$originalName = $image->getClientOriginalName();
	    	$name_array = explode('.', $originalName);
	    	$file_type = $name_array[sizeof($name_array) - 1];
	    	$ads->setImages($ads->getId().".".$file_type);
    	}else {
    		$ads->setImages('noImages.jpg');
    		
    	}
    	$formData->updateData($this);
    }
    
    private function resizeImages($dir,$image){
    
    	
    	$container = $this->container;
    
    	$imagemanagerResponse = $container->get('liip_imagine.controller');
    
    	$filterConfiguration = $container->get('liip_imagine.filter.configuration');
    
    	$configuracion = $filterConfiguration->get('my_thumb');

    	$filterConfiguration->set('my_thumb', $configuracion);
    
    	$imagemanagerResponse->filterAction($this->getRequest(),'/images/ids/'.$dir.'/'.$image,'my_thumb');
    
    	$fileTemporal = new File('media/cache/my_thumb/images/ids/'.$dir.'/'.$image);
    
    	$fileTemporal->move('images/ids/'.$dir.'/',$image);
    	$document = new Document();
    	$document->deleteDir("/media/cache/my_thumb/images/ids/".$dir);

    }

    private function isAnUserOwner($adUserId) {
     $userId = $this->get('security.context')->getToken()->getUser()->getId();
     if($userId!=$adUserId){
     	return false;
     }
     	return true;
    }
    
}
