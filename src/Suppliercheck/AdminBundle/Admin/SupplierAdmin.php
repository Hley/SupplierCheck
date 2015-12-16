// <?php
// // src/Acme/DemoBundle/Admin/PostAdmin.php
// namespace Suppliercheck\AdminBundle\Admin;

// use Sonata\AdminBundle\Show\ShowMapper;


// use Sonata\AdminBundle\Admin\Admin;
// use Sonata\AdminBundle\Datagrid\ListMapper;
// use Sonata\AdminBundle\Datagrid\DatagridMapper;
// use Sonata\AdminBundle\Form\FormMapper;

// class SupplierAdmin extends Admin {
// 	// Fields to be shown on create/edit forms
	
// 	public $supportsPreviewMode = true;
	
// // 	private $context;
	
// // 	public function getNewInstance()
// // 	{
// // 		return new Object($this->getUser());
// // 	}
	
// // 	public function setSecurityContext($context)
// // 	{
// // 		$this->context = $context;
// // 	}
	
// // 	public function getUser()
// // 	{
// // 		$token = $this->context->getToken();
// // 		if (null !== $token) {
// // 			return $token->getUser();
// // 		}
// // 		return null;
// // 	}
	
// // 	protected function configureFormFields(FormMapper $formMapper) {
// // 	        $formMapper
// //         	->add('name')
// //             ->add('checker')
// //             ->add('supplierName') 
// //         	->add('file', 'file')
	        
// // 	        ;
// // // 	        ->add('products', 'sonata_type_collection',
// // // 	        		array('by_reference' => false),
// // // 	        		array(
// // // 	        				'edit' => 'inline',
// // // 	        				'sortable' => 'pos',
// // // 	        				'inline' => 'table',
// // // 	        		));
// // // 			->add('_action', 'actions', array(
// // //                 'actions' => array(
// // //                     'show' => array(),
// // //                     'edit' => array(),
// // //                 )
// // //             ))                        

// // 	}
		

// 	// Fields to be shown on lists
// 	protected function configureListFields(ListMapper $listMapper) {
// 		$listMapper
		
// 		->add('name')
// 		->add('checker')
// 		->add('supplierName')
// 		->add('status')
// 		->add('created_at')
// 		->add('validatedItems')
// 		->add('rejectedItems')
// 		->add('globalComment')
// // 		->add('products', 'sonata_type_model_list', array(), array(
// // 				'link_parameters' => array('context' => 'default')
// // 		))
// // 		->add('products', 'sonata_type_model_list', array(), array(
// // 						'edit' => 'inline',
// // 						'inline' => 'table',
// // 						'sortable'  => 'position'
// // 				))
// // 		->add('_action', 'actions', array(
// // 						'actions' => array(
// // 								'show' => array(),
// // 								'edit' => array(),
// // 								'delete' => array(),
// // 						)
// // 				))
// 	->add('_action', 'actions', array(
// 						'actions' => array(
// 								'Show Produtcs' => array('template' => 'SuppliercheckAdminBundle:campaign:show_products_validation.html.twig')
// // 								'edit' => array(),
// // 								'delete' => array()
// 						)
// 				))
		
// // 		->add('products', 'sonata_type_collection', array(
// // 						'required' => false,
// // 						'cascade_validation' => true,
// // 						'by_reference' => false,
// // 				), array(
// // 						'edit' => 'inline',
// // 						'inline' => 'table',
// // 				))
				
// 		;
// //   			  ->add('products', null, array(), array(
// //             'edit' => 'inline',
// //             'inline' => 'table',
// //             'sortable'  => 'position'
// //         ));
// 	}
	
// 	// Fields to be shown on filter forms
// 	protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
// 		$datagridMapper
		
		
// 		->add('name')
// 		->add('checker')
// 		->add('supplierName')
// 		->add('status')
// 		;
		
// 	/*
// 		 * ->add('campaignName')
// 		 * ->add('supplier')
// 		 * ->add('date')
// 		 * //->add('campaign', 'entity', array('class' => 'Admin\AdminBundle\Entity\campaign'))
// 		 * ;
// 		 */
// 	}
	
// 	   protected function configureShowFields(ShowMapper $showMapper)
//     {
//         // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
//         $showMapper

// 		->add('name')
// 		->add('products.sku',null,array('label'=>'Label'))
		

// // 		->add('checker')
// // 		->add('supplierName')
// //          ->add('produits', 'sonata_type_collection', array(
// //                 // Prevents the "Delete" option from being displayed
// //                 'type_options' => array('delete' => false)
// //             ), array(
// //                 'edit' => 'inline',
// //                 'inline' => 'table',
// //                 'sortable' => 'position',
// //             ))
//         ->end()
// 		->with('products')

// // 		->add('products', 'sonata_type_collection', array(), array(
// // 				'edit' => 'inline',
// // 				'inline' => 'table',
// // 				'sortable' => 'position'
// // 		))

//             ->add('products', 'sonata_type_collection', array('required' => true,
//                                                            'by_reference' => false,
//                                                            ),
//                                                      array('edit' => 'inline',
//                                                            'inline' => 'table',))
		
// // 		->add('products', 'sonata_type_colection')
// // 		->add('products', 'sonata_type_model', array('expanded' => true, 'by_reference' => false, 'multiple' => true))
// // 		->add('comment', 'entity',
// // 				array(
// // 						'label' => 'Some post',
// // 						'read_only' => true,
// // 						'disabled'  => true,
// // 						'class' => 'Acme\DemoBundle\Entity\Comment'
// // 				))
// 		->end()
		
        
// //         ->add('products', 'sonata_type_collection', array(
// //         		'required' => false,
// //         		'cascade_validation' => true,
// //         		'by_reference' => false,
// //         ), array(
// //         		'edit' => 'list',
// //         		'inline' => 'table',
// //         ))
// 				;
        
// 	}
	
// }