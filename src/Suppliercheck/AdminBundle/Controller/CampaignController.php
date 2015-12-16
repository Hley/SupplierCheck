<?php

namespace Suppliercheck\AdminBundle\Controller;

// use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Ddeboer\DataImport\Reader\CsvReader;
use Ddeboer\DataImport\Workflow;
use Ddeboer\DataImport\Writer\DoctrineWriter;
use Ddeboer\DataImport\ItemConverter\MappingItemConverter;
use Ddeboer\DataImport\ValueConverter\DateTimeValueConverter;
use Ddeboer\DataImport\Reader\DoctrineReader;
use Suppliercheck\AdminBundle\Entity\Campaign;
use Suppliercheck\AdminBundle\Entity\Product;
use Suppliercheck\AdminBundle\Entity\Import;
use Suppliercheck\AdminBundle\Entity\Comment;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

 use Sonata\AdminBundle\Controller\CRUDController as Controller;
/**
 * Campaign controller.
 *
 */
class CampaignController extends Controller
{
	
	
    public function createAction(Request $request = null)
    {
        // the key used to lookup the template
        $templateKey = 'edit';

        if (false === $this->admin->isGranted('CREATE')) {
            throw new AccessDeniedException();
        }

        $object = $this->admin->getNewInstance();

        $this->admin->setSubject($object);

        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $form->setData($object);

        if ($this->getRestMethod()== 'POST') {
            $form->submit($this->get('request'));

            $isFormValid = $form->isValid();

            // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {

                if (false === $this->admin->isGranted('CREATE', $object)) {
                    throw new AccessDeniedException();
                }

                try {

                	$dummyImport = getcwd () . "/dummyImport";
                	$fname = "directly.csv";
                	$filename = $dummyImport . "/" . $fname;
                	@mkdir ( $dummyImport );
                	@unlink ( $filename );
                	 
                	// move file to dummy filename
                	$form['file']->getData()->move ( $dummyImport, $fname );
                	 
                	// Create and configure the reader
                	$file = new \SplFileObject ( 'dummyImport/directly.csv', "r" );
                	 
                	// $file->setFlags(SplFileObject::READ_CSV);
                	$csvReader = new CsvReader ( $file, ";" );
                	
                	$csvReader->setHeaderRowNumber ( 0 );
                	
                	// Create the workflow from the reader
                	$workflow = new Workflow ( $csvReader );
                	 
                	// Create a writer: you need Doctrine’s EntityManager.
                	$em = $this->getDoctrine ()->getManager ();
                	$doctrineWriter = new DoctrineWriter ( $em, 'SuppliercheckAdminBundle:Import' );
                	$workflow->addWriter ( $doctrineWriter );
                	
                	$converter = new MappingItemConverter ();
                	$converter->addMapping ( 'id_catalog_simple', 'idCatalogSimple' )->addMapping ( 'created_at_external', 'createdAtExternal' )->addMapping ( 'updated_at_external', 'updatedAtExternal' )->addMapping ( 'created_at', 'createdAt' )->addMapping ( 'updated_at', 'updatedAt' )->addMapping ( 'special_price', 'specialPrice' )->addMapping ( 'special_from_date', 'specialFromDate' )->addMapping ( 'special_to_date', 'specialToDate' )->addMapping ( 'tax_class', 'taxClass' )->addMapping ( 'tax_class_2', 'taxClass2' )->addMapping ( 'original_price', 'originalPrice' )->addMapping ( 'base_price', 'basePrice' )->addMapping ( 'barcode_ean', 'barcodeEan' )->addMapping ( 'sku_supplier_simple', 'skuSupplierSimple' )->addMapping ( 'supplier_simple_name', 'supplierSimpleName' )->addMapping ( 'shipment_type', 'shipmentType' )->addMapping ( 'transport_type', 'transportType' )->addMapping ( 'is_global', 'isGlobal' )->addMapping ( 'shipment_cost', 'shipmentCost' )->addMapping ( 'shipment_cost_comment', 'shipmentCostComment' )->addMapping ( 'dreamroom_show_in_image_map', 'dreamroomShowInImageMap' )->addMapping ( 'dreamroom_image_map_x', 'dreamroomImageMapX' )->addMapping ( 'dreamroom_image_map_y', 'dreamroomImageMapY' )->addMapping ( 'xcart_sku', 'xcartSku' )->addMapping ( 'delivery_date_start', 'deliveryDateStart' )->addMapping ( 'delivery_date_end', 'deliveryDateEnd' )->addMapping ( 'docdata_ean', 'docdataEan' )->addMapping ( 'docdata_description', 'docdataDescription' )->addMapping ( 'docdata_weight', 'docdataWeight' )->addMapping ( 'custom_identifier', 'customIdentifier' )->addMapping ( 'expected_delivery_date_start', 'expectedDeliveryDateStart' )->addMapping ( 'expected_delivery_date_end', 'expectedDeliveryDateEnd' )->addMapping ( 'navision_flag', 'navisionFlag' )->addMapping ( 'delivery_day_min', 'deliveryDayMin' )->addMapping ( 'delivery_day_max', 'deliveryDayMax' )->addMapping ( 'additional_inbound_info', 'additionalInboundInfo' )->addMapping ( 'expected_gm1', 'expectedGm1' )->addMapping ( 'expected_gm2', 'expectedGm2' )->addMapping ( 'expected_gm3', 'expectedGm3' )->addMapping ( 'sum_gross_weight', 'sumGrossWeight' )->addMapping ( 'number_separate_packages', 'numberSeparatePackages' )->addMapping ( 'delay_reasons', 'delayReasons' )->addMapping ( 'hide_original_price', 'hideOriginalPrice' )->addMapping ( 'producer_name', 'producerName' )->addMapping ( 'producer_address', 'producerAddress' )->addMapping ( 'additional_2mh_service', 'additional2mhService' )->addMapping ( 'additional_2mh_service_price', 'additional2mhServicePrice' )->addMapping ( 'is_bundle', 'isBundle' )->addMapping ( 'id_catalog_config_westwing', 'idCatalogConfigWestwing' )->addMapping ( 'design_scout', 'designScout' )->addMapping ( 'logistic_lead', 'logisticLead' )->addMapping ( 'id_catalog_simple_westwing', 'idCatalogSimpleWestwing' )->addMapping ( 'supplier_identifier', 'supplierIdentifier' )->addMapping ( 'config_group', 'configGroup' )->addMapping ( 'attribute_set', 'attributeSet' )->addMapping ( 'id_catalog_config', 'idCatalogConfig' )->addMapping ( 'sku_config', 'skuConfig' )->addMapping ( 'status_config', 'statusConfig' )->addMapping ( 'name_other', 'nameOther' )->addMapping ( 'editor_opinion', 'editorOpinion' )->addMapping ( 'choice_of_description', 'choiceOfDescription' )->addMapping ( 'display_as_out_of_stock', 'displayAsOutOfStock' )->addMapping ( 'pet_status', 'petStatus' )->addMapping ( 'pet_approved', 'petApproved' )->addMapping ( 'activated_at', 'activatedAt' )->addMapping ( 'sku_supplier_config', 'skuSupplierConfig' )->addMapping ( 'name_supplier', 'nameSupplier' )->addMapping ( 'delivery_period', 'deliveryPeriod' )->addMapping ( 'main_material', 'mainMaterial' )->addMapping ( 'package_height', 'packageHeight' )->addMapping ( 'package_length', 'packageLength' )->addMapping ( 'package_width', 'packageWidth' )->addMapping ( 'package_weight', 'packageWeight' )->addMapping ( 'short_description', 'shortDescription' )->addMapping ( 'care_label', 'careLabel' )->addMapping ( 'next_simple_nr', 'nextSimpleNr' )->addMapping ( 'brand_name_for_theme_campaigns', 'brandNameForThemeCampaigns' )->addMapping ( 'advent_day', 'adventDay' )->addMapping ( 'advent_url', 'adventUrl' )->addMapping ( 'advent_path', 'adventPath' )->addMapping ( 'overwrite_delivery_period', 'overwriteDeliveryPeriod' )->addMapping ( 'is_seo_relevant', 'isSeoRelevant' )->addMapping ( 'export_static', 'exportStatic' )->addMapping ( 'is_hybris_product', 'isHybrisProduct' )->addMapping ( 'has_delivery_guarantee', 'hasDeliveryGuarantee' )->addMapping ( 'net_purchase_price', 'netPurchasePrice' )->addMapping ( 'net_purchase_price_discounted', 'netPurchasePriceDiscounted' )->addMapping ( 'supplier_product_number', 'supplierProductNumber' )->addMapping ( 'supplier_product_name', 'supplierProductName' )->addMapping ( 'local_stock', 'localStock' )->addMapping ( 'global_stock', 'globalStock' )->addMapping ( 'package1_length', 'package1Length' )->addMapping ( 'package1_height', 'package1Height' )->addMapping ( 'package1_width', 'package1Width' )->addMapping ( 'package1_weight', 'package1Weight' )->addMapping ( 'package2_length', 'package2Length' )->addMapping ( 'package2_height', 'package2Height' )->addMapping ( 'package2_width', 'package2Width' )->addMapping ( 'package2_weight', 'package2Weight' )->addMapping ( 'package3_length', 'package3Length' )->addMapping ( 'package3_height', 'package3Height' )->addMapping ( 'package3_width', 'package3Width' )->addMapping ( 'package3_weight', 'package3Weight' )->addMapping ( 'color_1', 'color1' )->addMapping ( 'color_2', 'color2' )->addMapping ( 'color_3', 'color3' )->addMapping ( 'color_characteristic', 'colorCharacteristic' )->addMapping ( 'additional_campaigns', 'additionalCampaigns' )->addMapping ( 'status_simple', 'statusSimple' )->addMapping ( 'expected_logistics_cost', 'expectedLogisticsCost' )->addMapping ( 'discount_level', 'discountLevel' )->addMapping ( 'blowout_round', 'blowoutRound' )->addMapping ( 'allow_multiple_po', 'allowMultiplePo' );
                	
                	$workflow->addItemConverter ( $converter )->process ();
                	 
                	//fin de l'import dans la table virtuelle IMPORT
                	 
                	//copie des données avec mise en place des relations One TO Many
                	$em1=$this->getDoctrine()->getManager();
                	$getData = new ArrayCollection() ;
                	$getData = $em1->getRepository('SuppliercheckAdminBundle:Import');
		
		
								$listData = $getData->findAll() ;
                				foreach ($listData as $value) {
                				$newProduct = new Product() ;
                					$newProduct->setCampaign($object);
                					$newProduct->createFromImport($value);
                					
                					$sku = $newProduct->getSku() ;
                					$newProduct->setLink($sku);
                					$newProduct->setValidated(false);
                					
                					$newProduct->setComments(null);
                					$object->getProducts()->add($newProduct);
                	
                					$newProduct = $value ;
                	
                				}                                                                                                   
 
//                    $object1 = $this->admin->create($object);                                            
//                    $id = $this->admin->getNormalizedIdentifier($object);  
//                    $o = $object1->getId();
//                    $idencode = md5($o);
//                    $object1->setUrlencode($idencode);
//                    $this->admin->create($object);  
                                                
                    $object = $this->admin->create($object);                                                             
                    $id = $object->getId();
                    $idencode = md5($id);
                    $object->setUrlencode($idencode);
                    $this->admin->create($object);                           
               
                                                   
                    if ($this->isXmlHttpRequest()) {                                 
                        return $this->renderJson(array(
                            'result' => 'ok',
                            'objectId' => $this->admin->getNormalizedIdentifier($object)
                        ));
                    }

                    $this->addFlash(
                        'sonata_flash_success',
                        $this->admin->trans(
                            'flash_create_success',
                            array('%name%' => $this->escapeHtml($this->admin->toString($object))),
                            'SonataAdminBundle'
                        )
                    );

                    // redirect to edit mode
                    return $this->redirectTo($object);

                } catch (ModelManagerException $e) {
                    $this->logModelManagerException($e);

                    $isFormValid = false;
                }
            }

            // show an error message if the form failed validation
            if (!$isFormValid) {
                if (!$this->isXmlHttpRequest()) {
                    $this->addFlash(
                        'sonata_flash_error',
                        $this->admin->trans(
                            'flash_create_error',
                            array('%name%' => $this->escapeHtml($this->admin->toString($object))),
                            'SonataAdminBundle'
                        )
                    );
                }
            } elseif ($this->isPreviewRequested()) {
                // pick the preview template if the form was valid and preview was requested
                $templateKey = 'preview';
                $this->admin->getShow();
            }
        }

        $view = $form->createView();

        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());

        return $this->render($this->admin->getTemplate($templateKey), array(
            'action' => 'create',
            'form'   => $view,
            'object' => $object,
        ));
    }
  
    
    
    
//     /**
//      * Edit action.
//      *
//      * @param int|string|null $id
//      * @param Request         $request
//      *
//      * @return Response|RedirectResponse
//      *
//      * @throws NotFoundHttpException If the object does not exist
//      * @throws AccessDeniedException If access is not granted
//      */
//     public function validateAction($id = null, Request $request = null)
//     {
//     	$request = $this->resolveRequest($request);
//     	// the key used to lookup the template
//     	$templateKey = 'edit';
    
//     	$id = $request->get($this->admin->getIdParameter());
//     	$object = $this->admin->getObject($id);
    
//     	if (!$object) {
//     		throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
//     	}
    
//     	if (false === $this->admin->isGranted('EDIT', $object)) {
//     		throw new AccessDeniedException();
//     	}
    
//     	$preResponse = $this->preEdit($request, $object);
//     	if ($preResponse !== null) {
//     		return $preResponse;
//     	}
    
//     	$this->admin->setSubject($object);
    
//     	/** @var $form \Symfony\Component\Form\Form */
//     	$form = $this->admin->getForm();
//     	$form->setData($object);
//     	$form->handleRequest($request);
    
//     	if ($form->isSubmitted()) {
//     		$isFormValid = $form->isValid();
    
//     		// persist if the form was valid and if in preview mode the preview was approved
//     		if ($isFormValid && (!$this->isInPreviewMode($request) || $this->isPreviewApproved($request))) {
//     			try {
//     				$object = $this->admin->update($object);
    
//     				if ($this->isXmlHttpRequest($request)) {
//     					return $this->renderJson(array(
//     							'result'     => 'ok',
//     							'objectId'   => $this->admin->getNormalizedIdentifier($object),
//     							'objectName' => $this->escapeHtml($this->admin->toString($object)),
//     					), 200, array(), $request);
//     				}
    
//     				$this->addFlash(
//     						'sonata_flash_success',
//     						$this->admin->trans(
//     								'flash_edit_success',
//     								array('%name%' => $this->escapeHtml($this->admin->toString($object))),
//     								'SonataAdminBundle'
//     						)
//     				);
    
//     				// redirect to edit mode
//     				return $this->redirectTo($object, $request);
//     			} catch (ModelManagerException $e) {
//     				$this->handleModelManagerException($e);
    
//     				$isFormValid = false;
//     			} catch (LockException $e) {
//     				$this->addFlash('sonata_flash_error', $this->admin->trans('flash_lock_error', array(
//     						'%name%'       => $this->escapeHtml($this->admin->toString($object)),
//     						'%link_start%' => '<a href="'.$this->admin->generateObjectUrl('edit', $object).'">',
//     						'%link_end%'   => '</a>',
//     				), 'SonataAdminBundle'));
//     			}
//     		}
    
//     		// show an error message if the form failed validation
//     		if (!$isFormValid) {
//     			if (!$this->isXmlHttpRequest($request)) {
//     				$this->addFlash(
//     						'sonata_flash_error',
//     						$this->admin->trans(
//     								'flash_edit_error',
//     								array('%name%' => $this->escapeHtml($this->admin->toString($object))),
//     								'SonataAdminBundle'
//     						)
//     				);
//     			}
//     		} elseif ($this->isPreviewRequested($request)) {
//     			// enable the preview template if the form was valid and preview was requested
//     			$templateKey = 'preview';
//     			$this->admin->getShow();
//     		}
//     	}
    
//     	$view = $form->createView();
    
//     	// set the theme for the current Admin Form
//     	$this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());
    
//     	return $this->render($this->admin->getTemplate($templateKey), array(
//     			'action' => 'edit',
//     			'form'   => $view,
//     			'object' => $object,
//     	), null, $request);
//     }

    
    public function sendAction()
    {
    	$object = $this->admin->getSubject();
   		 $campaignName=	$object->getName();
   		 $checker= $object->getChecker();
   		 $supplierName =$object->getSupplierName();
   		 $supplierEmail =$object->getSupplierEmail();
   		 $id= $object->getUrlencode();                 
   		 $link= $this->container->get('router')->generate('admin_suppliercheck_admin_products_validation_product_list', array('urlencode' => $id));
//     	if (!$object) {
//     		throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
//     	}
//     	$object->setIsValid(true);
//     	$object->setValidated(true);
//     	$object = $this->admin->update($object);
    
    
//     	$this->addFlash('sonata_flash_success', 'Validated successfully');
    
//     	return new RedirectResponse($this->admin->generateUrl('list'));

    	try {
    	
    $message = \Swift_Message::newInstance()
        ->setSubject($campaignName)
        ->setFrom($checker)
        ->setTo($supplierEmail)
        ->setBody('Hello '.$supplierName.' Team Please click on the link below to check the products : http://symfony.dev'.$link
//             $this->renderView(
//                 // app/Resources/views/Emails/registration.html.twig
//                 'Emails/registration.html.twig',
//                 array('name' => $name)
//             ),
//             'text/html'
        );
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    //;  
    
    $this->get('mailer')->send($message);
        }   			 
     catch (\Doctrine\ORM\EntityNotFoundException $ex) {
        echo "Exception Found - " . $ex->getMessage() . "<br/>";
    }       
        	return new RedirectResponse($this->admin->generateUrl('list'));     
    }
    
    
    
}
