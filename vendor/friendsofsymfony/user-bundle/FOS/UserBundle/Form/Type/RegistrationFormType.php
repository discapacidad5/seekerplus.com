<?php
/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace FOS\UserBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SeekerPlus\AdsmanagerBundle\Entity\AdsmanagerCities;
class RegistrationFormType extends AbstractType
{
    private $class;
    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$cities=new AdsmanagerCities();
    	
        $builder
        	->add('location','choice', array(
        		'choices' =>$cities->getCities($GLOBALS['kernel']->getContainer()->get('doctrine.orm.entity_manager')),
        		'multiple' => false,'empty_value' => 'Choose an option','label' => 'form.location', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
        				'class'   => 'js-select','id' =>'categories','data-placeholder'=>'Seleccione Ciudad','style'=>'width: 13rem;')
        		))
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
                'class'   => 'userForm')))
            ->add('firstname', null, array('label' => 'form.firstname', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
                		'class'   => 'userForm')))
            ->add('lastname', null, array('label' => 'form.lastname', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
                				'class'   => 'userForm')))
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
                'class'   => 'userForm')))
			->add('birthday', 'date', array(
					'years' => range(1950,2010),
					'format' => 'MM/dd/yyyy',
					'label' => 'form.birthday', 'translation_domain' => 'FOSUserBundle','attr'=>  array(
							'class'   => 'userForm')
			))
                
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle','attr'=>  array(
							'class'   => 'userForm')),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
        ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'registration',
        ));
    }
    public function getName()
    {
        return 'fos_user_registration';
    }
}