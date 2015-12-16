<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php
namespace Suppliercheck\AdminBundle\Admin;

use Sonata\AdminBundle\Show\ShowMapper;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;


class CampaignSupplier extends Admin {
	
	
protected $baseRouteName = 'admin_suppliercheck_admin_products_validation';

protected $baseRoutePattern = 'products-validation';



	// Fields to be shown on create/edit forms
	protected function configureFormFields(FormMapper $formMapper) {
	        $formMapper
        	->add('globalComment');

                   

	}
		

	// Fields to be shown on lists
	protected function configureListFields(ListMapper $listMapper) {
		$listMapper
               		->add('name')

		->add('checker')
		->add('supplierName')
		->add('status')

		->add('totalItems', null, array(
				'template' => 'SuppliercheckAdminBundle:campaign:list_files.html.twig'
		))
		->add('productsCountChecked', null, array('label' => 'Total Products Checked'))
		
		->add('productsCountValid', null, array('label' => 'Validated Products'))
		->add('productsCountRejected' , null, array('label' => 'Rejected Products'))
		->add('globalComment')
		
		->add('_action', 'actions', array(
				'actions' => array(
						'product' => array('template' => 'SuppliercheckAdminBundle:campaign:show_products_validation.html.twig'),
						'Comment' => array('template' => 'SuppliercheckAdminBundle:campaign:add_global_comment.html.twig')
// 						'edit' => array()
					
				)
		))
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
		
		
		->add('name')
		->add('checker')
		->add('supplierName')
		->add('status');
		
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

		->add('name')
		->add('checker')
		->add('supplierName')
         ->add('produits', 'sonata_type_collection', array(
                // Prevents the "Delete" option from being displayed
                'type_options' => array('delete' => false)
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
                'sortable' => 'position',
            ))
				;
	}
	
// 	protected function configureRoutes(RouteCollection $collection)
// 	{
// 		$collection->add('product', $this->getRouterIdParameter().'/product');
// 	}
     


	public function getBatchActions()
	{
		// retrieve the default batch actions (currently only delete)
		$actions = parent::getBatchActions();

		unset($actions['delete']);
		return $actions;
	}
	
	
}