<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php
namespace Suppliercheck\AdminBundle\Admin;

use Sonata\AdminBundle\Show\ShowMapper;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CommentSupplier extends Admin {
	// Fields to be shown on create/edit forms
	
	public $supportsPreviewMode = true;
	
	protected $parentAssociationMapping = 'product';
	
	protected function configureFormFields(FormMapper $formMapper) {
	        $formMapper
                 ->add('name')
           
            ->add('netPurchasePrice')
            ->add('price')
            ->add('originalPrice')
            
			->add('supplier')
         ->add('mainMaterial')
         ->add('description')
         ->add('measures')
          
            ->add('color')
	        
	        ;                   

	}
		

	// Fields to be shown on lists
	protected function configureListFields(ListMapper $listMapper) {
		$listMapper
		
        	->add('color')
            ->add('price')
            ->add('weight')
            ->add('product.sku')
            ->add('product.color')
            ->add('product.price')
            
            
	        
// 		->add('products', 'sonata_type_model_list', array(), array(
// 				'link_parameters' => array('context' => 'default')
// 		))
// 		->add('products', 'sonata_type_model_list', array(), array(
// 						'edit' => 'inline',
// 						'inline' => 'table',
// 						'sortable'  => 'position'
// 				))
// 		->add('_action', 'actions', array(
// 						'actions' => array(
// 								'show' => array(),
// 								'edit' => array(),
// 								'delete' => array(),
// 						)
// 				))
				
		
// 		->add('products', 'sonata_type_collection', array(
// 						'required' => false,
// 						'cascade_validation' => true,
// 						'by_reference' => false,
// 				), array(
// 						'edit' => 'inline',
// 						'inline' => 'table',
// 				))
				
		;
//   			  ->add('products', null, array(), array(
//             'edit' => 'inline',
//             'inline' => 'table',
//             'sortable'  => 'position'
//         ));
	}
	
	// Fields to be shown on filter forms
	protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
		$datagridMapper
		->add('color')
		->add('price')
		->add('weight')
		 
		;
		
	/*
		 * ->add('campaignName')
		 * ->add('supplier')
		 * ->add('date')
		 * //->add('campaign', 'entity', array('class' => 'Admin\AdminBundle\Entity\campaign'))
		 * ;
		 */
	}
	
	   protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        $showMapper

// 		->add('name')
// 		->add('checker')
// 		->add('supplierName')
//          ->add('produits', 'sonata_type_collection', array(
//                 // Prevents the "Delete" option from being displayed
//                 'type_options' => array('delete' => false)
//             ), array(
//                 'edit' => 'inline',
//                 'inline' => 'table',
// //                 'sortable' => 'position',
// //             ))
//         ->end()
// 		->with('products')
// 		->add('products', 'sonata_type_model', array('expanded' => true, 'by_reference' => false, 'multiple' => true))
// 		->end()
        
//         ->add('products', 'sonata_type_collection', array(
//         		'required' => false,
//         		'cascade_validation' => true,
//         		'by_reference' => false,
//         ), array(
//         		'edit' => 'list',
//         		'inline' => 'table',
//         ))
        ->add('color')
        ->add('price')
        ->add('weight')
        ->add('product.color')
				;
        
	}
	
}