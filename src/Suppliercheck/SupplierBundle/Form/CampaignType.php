<?php

namespace Suppliercheck\SupplierBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Suppliercheck\AdminBundle\Entity\Product;
use Suppliercheck\AdminBundle\Entity\Import;
use Suppliercheck\SupplierBundle\SuppliercheckSupplierBundle;
use Doctrine\ORM\Mapping\Entity;


class CampaignType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('name')
            ->add('checker')
            ->add('supplierName') 
        	->add('file', 'file') ;
//         	->add('products', 'collection', array('type' => new ProductType(),
//         			'allow_add' => true,
//         			'by_reference' => false,
//         			'prototype' => true,
//         	));

            

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Suppliercheck\SupplierBundle\Entity\Campaign'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'suppliercheck_supplierbundle_campaign';
    }
    
    public function getId($id)
    {
    	return $id;
    }
}
