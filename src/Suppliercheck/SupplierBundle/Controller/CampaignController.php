<?php

namespace Suppliercheck\SupplierBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Ddeboer\DataImport\Reader\CsvReader;
use Ddeboer\DataImport\Source\StreamSource;
use Ddeboer\DataImport\Workflow;
use Ddeboer\DataImport\Writer\DoctrineWriter;
use Ddeboer\DataImport\ItemConverter\MappingItemConverter;
use Ddeboer\DataImport\ValueConverter\DateTimeValueConverter;
use Ddeboer\DataImport\Reader\DoctrineReader;
use Suppliercheck\SupplierBundle\Entity\Campaign;
use Suppliercheck\SupplierBundle\Form\CampaignType;
use Suppliercheck\SupplierBundle\Form\ConfirmCampaignType;
use Suppliercheck\SupplierBundle\Entity\Product;
use Suppliercheck\SupplierBundle\Entity\Import;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Campaign controller.
 *
 */
class CampaignController extends Controller
{
	
    /**
     * Lists all Campaign entities.
     *
     */
    public function indexAction()
    {        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SuppliercheckSupplierBundle:Campaign')->findAll();

        return $this->render('SuppliercheckSupplierBundle:Campaign:index.html.twig', array(
            'entities' => $entities,
        ));
        
    }
    /**
     * Creates a new Campaign entity.
     *
     */
    public function createAction(Request $request)
    {	
    	

        $entity = new Campaign();

        
//         $product = new \Suppliercheck\SupplierBundle\Entity\Product();
        
//         $product->setName('tag1');
//         $product->setCampaignId(1);
//         $entity->getProducts()->add($product);
        
        
//         $em1 = $this->getDoctrine()->getManager();
//         $em1->persist($product);
//         $em1->flush();
        
       // Original create form
       // $form = $this->createCreateForm($entity);
        	$request = $this->getRequest();
        	$form = $this->createCreateForm($entity);
//        	 $form->handleRequest($request);
       		 if ($request->isMethod('POST')) {
        	$form->handleRequest($request);
        	if ($form->isValid()) {
        		
//         	$form['file']->getData()->move($dir, $someNewFilename);
        	
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
        	$doctrineWriter = new DoctrineWriter ( $em, 'SuppliercheckSupplierBundle:Import' );
        	$workflow->addWriter ( $doctrineWriter );

        	$converter = new MappingItemConverter ();
        	$converter->addMapping ( 'id_catalog_simple', 'idCatalogSimple' )->addMapping ( 'created_at_external', 'createdAtExternal' )->addMapping ( 'updated_at_external', 'updatedAtExternal' )->addMapping ( 'created_at', 'createdAt' )->addMapping ( 'updated_at', 'updatedAt' )->addMapping ( 'special_price', 'specialPrice' )->addMapping ( 'special_from_date', 'specialFromDate' )->addMapping ( 'special_to_date', 'specialToDate' )->addMapping ( 'tax_class', 'taxClass' )->addMapping ( 'tax_class_2', 'taxClass2' )->addMapping ( 'original_price', 'originalPrice' )->addMapping ( 'base_price', 'basePrice' )->addMapping ( 'barcode_ean', 'barcodeEan' )->addMapping ( 'sku_supplier_simple', 'skuSupplierSimple' )->addMapping ( 'supplier_simple_name', 'supplierSimpleName' )->addMapping ( 'shipment_type', 'shipmentType' )->addMapping ( 'transport_type', 'transportType' )->addMapping ( 'is_global', 'isGlobal' )->addMapping ( 'shipment_cost', 'shipmentCost' )->addMapping ( 'shipment_cost_comment', 'shipmentCostComment' )->addMapping ( 'dreamroom_show_in_image_map', 'dreamroomShowInImageMap' )->addMapping ( 'dreamroom_image_map_x', 'dreamroomImageMapX' )->addMapping ( 'dreamroom_image_map_y', 'dreamroomImageMapY' )->addMapping ( 'xcart_sku', 'xcartSku' )->addMapping ( 'delivery_date_start', 'deliveryDateStart' )->addMapping ( 'delivery_date_end', 'deliveryDateEnd' )->addMapping ( 'docdata_ean', 'docdataEan' )->addMapping ( 'docdata_description', 'docdataDescription' )->addMapping ( 'docdata_weight', 'docdataWeight' )->addMapping ( 'custom_identifier', 'customIdentifier' )->addMapping ( 'expected_delivery_date_start', 'expectedDeliveryDateStart' )->addMapping ( 'expected_delivery_date_end', 'expectedDeliveryDateEnd' )->addMapping ( 'navision_flag', 'navisionFlag' )->addMapping ( 'delivery_day_min', 'deliveryDayMin' )->addMapping ( 'delivery_day_max', 'deliveryDayMax' )->addMapping ( 'additional_inbound_info', 'additionalInboundInfo' )->addMapping ( 'expected_gm1', 'expectedGm1' )->addMapping ( 'expected_gm2', 'expectedGm2' )->addMapping ( 'expected_gm3', 'expectedGm3' )->addMapping ( 'sum_gross_weight', 'sumGrossWeight' )->addMapping ( 'number_separate_packages', 'numberSeparatePackages' )->addMapping ( 'delay_reasons', 'delayReasons' )->addMapping ( 'hide_original_price', 'hideOriginalPrice' )->addMapping ( 'producer_name', 'producerName' )->addMapping ( 'producer_address', 'producerAddress' )->addMapping ( 'additional_2mh_service', 'additional2mhService' )->addMapping ( 'additional_2mh_service_price', 'additional2mhServicePrice' )->addMapping ( 'is_bundle', 'isBundle' )->addMapping ( 'id_catalog_config_westwing', 'idCatalogConfigWestwing' )->addMapping ( 'design_scout', 'designScout' )->addMapping ( 'logistic_lead', 'logisticLead' )->addMapping ( 'id_catalog_simple_westwing', 'idCatalogSimpleWestwing' )->addMapping ( 'supplier_identifier', 'supplierIdentifier' )->addMapping ( 'config_group', 'configGroup' )->addMapping ( 'attribute_set', 'attributeSet' )->addMapping ( 'id_catalog_config', 'idCatalogConfig' )->addMapping ( 'sku_config', 'skuConfig' )->addMapping ( 'status_config', 'statusConfig' )->addMapping ( 'name_other', 'nameOther' )->addMapping ( 'editor_opinion', 'editorOpinion' )->addMapping ( 'choice_of_description', 'choiceOfDescription' )->addMapping ( 'display_as_out_of_stock', 'displayAsOutOfStock' )->addMapping ( 'pet_status', 'petStatus' )->addMapping ( 'pet_approved', 'petApproved' )->addMapping ( 'activated_at', 'activatedAt' )->addMapping ( 'sku_supplier_config', 'skuSupplierConfig' )->addMapping ( 'name_supplier', 'nameSupplier' )->addMapping ( 'delivery_period', 'deliveryPeriod' )->addMapping ( 'main_material', 'mainMaterial' )->addMapping ( 'package_height', 'packageHeight' )->addMapping ( 'package_length', 'packageLength' )->addMapping ( 'package_width', 'packageWidth' )->addMapping ( 'package_weight', 'packageWeight' )->addMapping ( 'short_description', 'shortDescription' )->addMapping ( 'care_label', 'careLabel' )->addMapping ( 'next_simple_nr', 'nextSimpleNr' )->addMapping ( 'brand_name_for_theme_campaigns', 'brandNameForThemeCampaigns' )->addMapping ( 'advent_day', 'adventDay' )->addMapping ( 'advent_url', 'adventUrl' )->addMapping ( 'advent_path', 'adventPath' )->addMapping ( 'overwrite_delivery_period', 'overwriteDeliveryPeriod' )->addMapping ( 'is_seo_relevant', 'isSeoRelevant' )->addMapping ( 'export_static', 'exportStatic' )->addMapping ( 'is_hybris_product', 'isHybrisProduct' )->addMapping ( 'has_delivery_guarantee', 'hasDeliveryGuarantee' )->addMapping ( 'net_purchase_price', 'netPurchasePrice' )->addMapping ( 'net_purchase_price_discounted', 'netPurchasePriceDiscounted' )->addMapping ( 'supplier_product_number', 'supplierProductNumber' )->addMapping ( 'supplier_product_name', 'supplierProductName' )->addMapping ( 'local_stock', 'localStock' )->addMapping ( 'global_stock', 'globalStock' )->addMapping ( 'package1_length', 'package1Length' )->addMapping ( 'package1_height', 'package1Height' )->addMapping ( 'package1_width', 'package1Width' )->addMapping ( 'package1_weight', 'package1Weight' )->addMapping ( 'package2_length', 'package2Length' )->addMapping ( 'package2_height', 'package2Height' )->addMapping ( 'package2_width', 'package2Width' )->addMapping ( 'package2_weight', 'package2Weight' )->addMapping ( 'package3_length', 'package3Length' )->addMapping ( 'package3_height', 'package3Height' )->addMapping ( 'package3_width', 'package3Width' )->addMapping ( 'package3_weight', 'package3Weight' )->addMapping ( 'color_1', 'color1' )->addMapping ( 'color_2', 'color2' )->addMapping ( 'color_3', 'color3' )->addMapping ( 'color_characteristic', 'colorCharacteristic' )->addMapping ( 'additional_campaigns', 'additionalCampaigns' )->addMapping ( 'status_simple', 'statusSimple' )->addMapping ( 'expected_logistics_cost', 'expectedLogisticsCost' )->addMapping ( 'discount_level', 'discountLevel' )->addMapping ( 'blowout_round', 'blowoutRound' )->addMapping ( 'allow_multiple_po', 'allowMultiplePo' );

        	$workflow->addItemConverter ( $converter )->process ();
        	
        	//fin de l'import dans la table virtuelle IMPORT 
        	
        	//copie des données avec mise en place des relations One TO Many 
			$em1=$this->getDoctrine()->getManager();
			$getData = new ArrayCollection() ;
			$getData = $em1->getRepository('SuppliercheckSupplierBundle:Import');  
			
			
			$listData = $getData->findAll() ;
        	foreach ($listData as $value) {
        	$newProduct = new Product() ;
        	$newProduct->setCampaign($entity);
			$newProduct->createFromImport($value);
			$sku = $newProduct->getSku() ;
			$newProduct->setLink($sku);
        	$entity->getProducts()->add($newProduct);

        	$newProduct = $value ;

        	}
        	//         	$entity->addProducts($value);
        	//var_dump($entity);
        	//         	$user->getAuthoredComments()->add($newComment);
        	//         	$newComment->setAuthor($user);
   			$em = $this->getDoctrine()->getManager();
            $em->persist($entity);           
            $em->flush();     
     
             return $this->redirect($this->generateUrl('supplier_campaign_show', array('id' => $entity->getId())));
        	}
        }
        
//         if ($form->isValid()) {
//             $em = $this->getDoctrine()->getManager();
//             $em->persist($entity);
//             $em->flush();

//             return $this->redirect($this->generateUrl('supplier_campaign_show', array('id' => $entity->getId())));
//         }

        return $this->render('SuppliercheckSupplierBundle:Campaign:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Campaign entity.
     *
     * @param Campaign $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Campaign $entity)
    {
        $form = $this->createForm(new CampaignType(), $entity, array(
            'action' => $this->generateUrl('supplier_campaign_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Campaign entity.
     *
     */
    public function newAction()
    {
        $entity = new Campaign();
        
        //ajout de produits statiquement a une campaign
        //$entity->addProduct(new \Suppliercheck\SupplierBundle\Entity\Product());
      
//         $product = new Product();
        
//         $entity->addProduct($product);
        
        
        
        $form   = $this->createCreateForm($entity);

        return $this->render('SuppliercheckSupplierBundle:Campaign:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Campaign entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('SuppliercheckSupplierBundle:Campaign')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Campaign entity.');
        }


        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SuppliercheckSupplierBundle:Campaign:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Campaign entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuppliercheckSupplierBundle:Campaign')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Campaign entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SuppliercheckSupplierBundle:Campaign:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Campaign entity.
    *
    * @param Campaign $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Campaign $entity)
    {
        $form = $this->createForm(new CampaignType(), $entity, array(
            'action' => $this->generateUrl('supplier_campaign_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Campaign entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuppliercheckSupplierBundle:Campaign')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Campaign entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('supplier_campaign_edit', array('id' => $id)));
        }

        return $this->render('SuppliercheckSupplierBundle:Campaign:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Campaign entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SuppliercheckSupplierBundle:Campaign')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Campaign entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('supplier_campaign'));
    }

    /**
     * Creates a form to delete a Campaign entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('supplier_campaign_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
//     public function editAction($id)
//     {
//     	$em = $this->getDoctrine()->getManager();
    
//     	$entity = $em->getRepository('SuppliercheckSupplierBundle:Campaign')->find($id);
    
//     	if (!$entity) {
//     		throw $this->createNotFoundException('Unable to find Campaign entity.');
//     	}
    
//     	$editForm = $this->createEditForm($entity);
//     	$deleteForm = $this->createDeleteForm($id);
    
//     	return $this->render('SuppliercheckSupplierBundle:Campaign:edit.html.twig', array(
//     			'entity'      => $entity,
//     			'edit_form'   => $editForm->createView(),
//     			'delete_form' => $deleteForm->createView(),
//     	));
//     }
    
    public function confirmAction(Request $request, $id)
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$entity = $em->getRepository('SuppliercheckSupplierBundle:Campaign')->find($id);
    	
    	if (!$entity) {
    		throw $this->createNotFoundException('Unable to find Campaign entity.');
    	}
    	
    
    	
// 		$prod = $entity->getProducts();		
// 		foreach ($prod as $product)
// 		{
			
			
// 			echo $product->getsku();
// 			echo $product->getimport();
// 			echo $product->getsupplier();
// 			echo $product->getprice();
// 		}

    	$confirmForm = $this->createConfirmForm($entity);
//     	$confirmForm->handleRequest($request);
    
//     	if ($confirmForm->isValid()) {
//     		$em->flush();
    
//     		return $this->redirect($this->generateUrl('supplier_campaign_confirm', array('id' => $id)));
//     	}
    
    	return $this->render('SuppliercheckSupplierBundle:Campaign:confirm.html.twig', array(
    			'entity'      => $entity,
    			'products' => $entity->getProducts(),
//     			'products' => $products,
    			'confirm_form'   => $confirmForm->createView(),
    	));
    }
    
    private function createConfirmForm(Campaign $entity)
    {
        $form = $this->createForm(new ConfirmCampaignType(), $entity, array(
            'action' => $this->generateUrl('supplier_campaign_confirm', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'confirm'));

        return $form;
    }
}
