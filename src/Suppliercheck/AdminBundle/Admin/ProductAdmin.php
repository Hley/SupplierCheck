<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Suppliercheck\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\AdminBundle\Show\ShowMapper;


class ProductAdmin extends Admin
{
	
	
// 	protected $baseRouteName = 'admin_suppliercheck_admin_campaign_product';
	
	protected $parentAssociationMapping = 'campaign';
	
	// Fields to be shown on create/edit forms
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
            ->add('name')
            
            //->add('comment.color')
//             ->add('campaign.supplierName')    
//             ->add('comment.color')
//             ->add('comment.price',null,array('label'=>'Label'))
            ->add('netPurchasePrice')
            ->add('price')
            ->add('originalPrice')
            
         ->add('mainMaterial')
         ->add('description')
         ->add('measures')
          
            ->add('color')
		//->add('campaign')
// 		->add('comment', 'sonata_type_model')
		
// 		->add('name', null, array('label' => 'name'));
// 		->add('category_id', null, array('label' => 'Category'))
// 		->add('url', null, array('label' => 'Url'));
		
		// only show the child form if this is not itself a child form
// 		if (!is_numeric($formMapper->getFormBuilder()->getForm()->getName())) {
// 			$formMapper
// ->add('comment', 'sonata_type_model', array('expanded' => true, 'by_reference' => false, 'multiple' => true))	;	
// // 		}

// 		->add('comment', 'sonata_type_model_list',
// 			        		array('by_reference' => false),
// 			        		array(
// 			        				'edit' => 'inline',
// 			        				'sortable' => 'pos',
// 			        				'inline' => 'table',
// 			        		));
		
// 		->add('comment');
;
	}

	// Fields to be shown on filter forms
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
		
				->add('checked')
				->add('validated')
		
	
		//->add('campaign', 'entity', array('class' => 'Admin\AdminBundle\Entity\campaign'))
		;
	}

	// Fields to be shown on lists
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		
		->add('link', null, array( 'template' => 'SuppliercheckAdminBundle:campaign:picture.html.twig'))
		
// 		->addIdentifier('idCatalogSimple')
		->add('config', null, array('editable' => true))
           
            ->add('import')
            ->add('sku')
            
            //->add('comment.color')
//             ->add('campaign.supplierName')    
//             ->add('comment.color')
//             ->add('comment.price',null,array('label'=>'Label'))
			->add('supplier')
//          ->add('expires_at')
            ->add('supplierIdentifier')
            //->add('updated_at')
//           ->add('campaign.supplierName')
//             ->add('campaign.id')
//             ->add('product_comment', 'sonata_type_model_list', array(
//                     'btn_add'       => 'Add comment',      //Specify a custom label
//                     'btn_list'      => 'button.list',     //which will be translated
//                     'btn_delete'    => true,             //or hide the button.
//                    // 'btn_catalogue' => 'SonataNewsBundle' //Custom translation domain for buttons
//                 ), array(
//                     'placeholder' => 'No author selected'
//                 ))		
				->add('campaign.name')
		->add('checked','boolean',array('editable' => true))
				
// 				->add('validated','boolean', array(
//             'choices' => array(
//                 'null' => 'Yes and No',
//                 '0' => 'No',
//                 '1' => 'Yes',
//             ))
	
						->add('isValid')
						->add('isRejected')
				->add('_action', 'actions', array(
						'actions' => array(
// 								'Add comment' => array('template' => 'SuppliercheckAdminBundle:comment:add_comment.html.twig'),
								'Show comment' => array('template' => 'SuppliercheckAdminBundle:comment:show_comment.html.twig'),	
								'edit' => array(),
								'delete' => array()
						)
				))
				
// 				  ->addIdentifier('field', null, array(
//                  'route' => array(
//                      'name' => 'show'
//                  )
//              ))
           ;
	}
	
	
	protected function configureShowFields(ShowMapper $showMapper)
	{
		// Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
		$showMapper
		->with('General')

		->add('color')
		->add('price')
		// 		->add('checker')
		// 		->add('supplierName')
		//          ->add('produits', 'sonata_type_collection', array(
				//                 // Prevents the "Delete" option from being displayed
				//                 'type_options' => array('delete' => false)
				//             ), array(
						//                 'edit' => 'inline',
						//                 'inline' => 'table',
						//                 'sortable' => 'position',
						//             ))

// 		->add('comment.color')
				// 		->add('products', 'sonata_type_model', array('expanded' => true, 'by_reference' => false, 'multiple' => true))
				// 		->add('comment', 'entity',
						// 				array(
								// 						'label' => 'Some post',
								// 						'read_only' => true,
								// 						'disabled'  => true,
								// 						'class' => 'Acme\DemoBundle\Entity\Comment'
								// 				))

	
	
								//         ->add('products', 'sonata_type_collection', array(
										//         		'required' => false,
										//         		'cascade_validation' => true,
										//         		'by_reference' => false,
										//         ), array(
												//         		'edit' => 'list',
												//         		'inline' => 'table',
												//         ))
		->end()
		
		;
		
	
	}
}