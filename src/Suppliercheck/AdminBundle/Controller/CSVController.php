<?php

// src/Admin/AdminBundle/Controller/CSVController.php
namespace Suppliercheck\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Suppliercheck\AdminBundle\Helper\CSVTypes;
use Ddeboer\DataImport\Reader\CsvReader;
use Ddeboer\DataImport\Source\StreamSource;
use Ddeboer\DataImport\Workflow;
use Ddeboer\DataImport\Writer\DoctrineWriter;
use Ddeboer\DataImport\ItemConverter\MappingItemConverter;
use Ddeboer\DataImport\ValueConverter\DateTimeValueConverter;
use Suppliercheck\AdminBundle\Entity\Import;
use Ddeboer\DataImport\Reader\DoctrineReader;
use Suppliercheck\AdminBundle\Entity\Data;
use Suppliercheck\AdminBundle\Entity\csv;
use Suppliercheck\AdminBundle\Entity\Campaign;

class CSVController extends Controller {
	
	

	
	public function importFileAction(Request $request) {
		/*
		 * $import = new Import();
		 *
		 *
		 * $em2 = $this->getDoctrine()->getManager();
		 * $em2->persist($import);
		 * $em2->flush();
		 * $i = $import->getId();
		 * var_dump($i);
		 */
		// Get FileId to "import"
		$param = $request->request;
		$fileId = ( int ) trim ( $param->get ( "fileId" ) );
		
		$curType = trim ( $param->get ( "fileType" ) );
		$uploadedFile = $request->files->get ( "csvFile" );
		
		// if upload was not ok, just redirect to "AdminStatWrongPArameters"
		if (! CSVTypes::existsType ( $curType ) || $uploadedFile == null)
			return 0;
			// generate dummy dir
		$dummyImport = getcwd () . "/dummyImport";
		$fname = "directly.csv";
		$filename = $dummyImport . "/" . $fname;
		@mkdir ( $dummyImport );
		@unlink ( $filename );
		
		// move file to dummy filename
		$uploadedFile->move ( $dummyImport, $fname );
		
		// Create and configure the reader
		$file = new \SplFileObject ( 'dummyImport/directly.csv', "r" );
		
		// $file->setFlags(SplFileObject::READ_CSV);
		$csvReader = new CsvReader ( $file, ";" );
		// var_dump($csvReader);
		
		// Tell the reader that the first row in the CSV file contains column headers
		$csvReader->setHeaderRowNumber ( 0 );
// 		foreach ($csvReader as $row => $value) {
// 			$value['sku'] = '1' ;
// 		}
		// Create the workflow from the reader
		$workflow = new Workflow ( $csvReader );
		
		// Create a writer: you need Doctrine’s EntityManager.
		$em = $this->getDoctrine ()->getManager ();
		$doctrineWriter = new DoctrineWriter ( $em, 'SuppliercheckAdminBundle:Data' );
		// $doctrineWriter->writeItem(array ('import', 'test'));
		
		/*
		 * $em = $this->getDoctrine()->getManager();
		 * $query = $em->createQuery(
		 * 'SELECT p
		 * FROM AcmeStoreBundle:Product p
		 * WHERE p.price > :price
		 * ORDER BY p.price ASC'
		 * )->setParameter('price', '19.99');
		 *
		 * $products = $query->getResult();
		 */
		
		// $doctrineWriter->setTruncate(false);
		
		/*
		 * $doctrineWriter
		 * ->prepare()
		 * ->writeItem(
		 * array(
		 * 'voila' => $i,
		 *
		 * )
		 * );
		 */
		
		// $doctrineWriter->setTruncate(false);
		$workflow->addWriter ( $doctrineWriter );
		
		// $em3=$this->getDoctrine()->getManager();
		// $doctrineR = new DoctrineReader($em3, 'AdminAdminBundle:Data');
		// $fields =$doctrineR->getFields();
		// $workflow2 = new Workflow($doctrineR);
		
		// $entityMetadata=$em->getClassMetadata('AdminAdminBundle:Product');
		// $entityMetadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_AUTO);
		// $converter = new StringToDateTimeValueConverter();
		$converter = new MappingItemConverter ();
		$converter->addMapping ( 'id_catalog_simple', 'idCatalogSimple' )->addMapping ( 'created_at_external', 'createdAtExternal' )->addMapping ( 'updated_at_external', 'updatedAtExternal' )->addMapping ( 'created_at', 'createdAt' )->addMapping ( 'updated_at', 'updatedAt' )->addMapping ( 'special_price', 'specialPrice' )->addMapping ( 'special_from_date', 'specialFromDate' )->addMapping ( 'special_to_date', 'specialToDate' )->addMapping ( 'tax_class', 'taxClass' )->addMapping ( 'tax_class_2', 'taxClass2' )->addMapping ( 'original_price', 'originalPrice' )->addMapping ( 'base_price', 'basePrice' )->addMapping ( 'barcode_ean', 'barcodeEan' )->addMapping ( 'sku_supplier_simple', 'skuSupplierSimple' )->addMapping ( 'supplier_simple_name', 'supplierSimpleName' )->addMapping ( 'shipment_type', 'shipmentType' )->addMapping ( 'transport_type', 'transportType' )->addMapping ( 'is_global', 'isGlobal' )->addMapping ( 'shipment_cost', 'shipmentCost' )->addMapping ( 'shipment_cost_comment', 'shipmentCostComment' )->addMapping ( 'dreamroom_show_in_image_map', 'dreamroomShowInImageMap' )->addMapping ( 'dreamroom_image_map_x', 'dreamroomImageMapX' )->addMapping ( 'dreamroom_image_map_y', 'dreamroomImageMapY' )->addMapping ( 'xcart_sku', 'xcartSku' )->addMapping ( 'delivery_date_start', 'deliveryDateStart' )->addMapping ( 'delivery_date_end', 'deliveryDateEnd' )->addMapping ( 'docdata_ean', 'docdataEan' )->addMapping ( 'docdata_description', 'docdataDescription' )->addMapping ( 'docdata_weight', 'docdataWeight' )->addMapping ( 'custom_identifier', 'customIdentifier' )->addMapping ( 'expected_delivery_date_start', 'expectedDeliveryDateStart' )->addMapping ( 'expected_delivery_date_end', 'expectedDeliveryDateEnd' )->addMapping ( 'navision_flag', 'navisionFlag' )->addMapping ( 'delivery_day_min', 'deliveryDayMin' )->addMapping ( 'delivery_day_max', 'deliveryDayMax' )->addMapping ( 'additional_inbound_info', 'additionalInboundInfo' )->addMapping ( 'expected_gm1', 'expectedGm1' )->addMapping ( 'expected_gm2', 'expectedGm2' )->addMapping ( 'expected_gm3', 'expectedGm3' )->addMapping ( 'sum_gross_weight', 'sumGrossWeight' )->addMapping ( 'number_separate_packages', 'numberSeparatePackages' )->addMapping ( 'delay_reasons', 'delayReasons' )->addMapping ( 'hide_original_price', 'hideOriginalPrice' )->addMapping ( 'producer_name', 'producerName' )->addMapping ( 'producer_address', 'producerAddress' )->addMapping ( 'additional_2mh_service', 'additional2mhService' )->addMapping ( 'additional_2mh_service_price', 'additional2mhServicePrice' )->addMapping ( 'is_bundle', 'isBundle' )->addMapping ( 'id_catalog_config_westwing', 'idCatalogConfigWestwing' )->addMapping ( 'design_scout', 'designScout' )->addMapping ( 'logistic_lead', 'logisticLead' )->addMapping ( 'id_catalog_simple_westwing', 'idCatalogSimpleWestwing' )->addMapping ( 'supplier_identifier', 'supplierIdentifier' )->addMapping ( 'config_group', 'configGroup' )->addMapping ( 'attribute_set', 'attributeSet' )->addMapping ( 'id_catalog_config', 'idCatalogConfig' )->addMapping ( 'sku_config', 'skuConfig' )->addMapping ( 'status_config', 'statusConfig' )->addMapping ( 'name_other', 'nameOther' )->addMapping ( 'editor_opinion', 'editorOpinion' )->addMapping ( 'choice_of_description', 'choiceOfDescription' )->addMapping ( 'display_as_out_of_stock', 'displayAsOutOfStock' )->addMapping ( 'pet_status', 'petStatus' )->addMapping ( 'pet_approved', 'petApproved' )->addMapping ( 'activated_at', 'activatedAt' )->addMapping ( 'sku_supplier_config', 'skuSupplierConfig' )->addMapping ( 'name_supplier', 'nameSupplier' )->addMapping ( 'delivery_period', 'deliveryPeriod' )->addMapping ( 'main_material', 'mainMaterial' )->addMapping ( 'package_height', 'packageHeight' )->addMapping ( 'package_length', 'packageLength' )->addMapping ( 'package_width', 'packageWidth' )->addMapping ( 'package_weight', 'packageWeight' )->addMapping ( 'short_description', 'shortDescription' )->addMapping ( 'care_label', 'careLabel' )->addMapping ( 'next_simple_nr', 'nextSimpleNr' )->addMapping ( 'brand_name_for_theme_campaigns', 'brandNameForThemeCampaigns' )->addMapping ( 'advent_day', 'adventDay' )->addMapping ( 'advent_url', 'adventUrl' )->addMapping ( 'advent_path', 'adventPath' )->addMapping ( 'overwrite_delivery_period', 'overwriteDeliveryPeriod' )->addMapping ( 'is_seo_relevant', 'isSeoRelevant' )->addMapping ( 'export_static', 'exportStatic' )->addMapping ( 'is_hybris_product', 'isHybrisProduct' )->addMapping ( 'has_delivery_guarantee', 'hasDeliveryGuarantee' )->addMapping ( 'net_purchase_price', 'netPurchasePrice' )->addMapping ( 'net_purchase_price_discounted', 'netPurchasePriceDiscounted' )->addMapping ( 'supplier_product_number', 'supplierProductNumber' )->addMapping ( 'supplier_product_name', 'supplierProductName' )->addMapping ( 'local_stock', 'localStock' )->addMapping ( 'global_stock', 'globalStock' )->addMapping ( 'package1_length', 'package1Length' )->addMapping ( 'package1_height', 'package1Height' )->addMapping ( 'package1_width', 'package1Width' )->addMapping ( 'package1_weight', 'package1Weight' )->addMapping ( 'package2_length', 'package2Length' )->addMapping ( 'package2_height', 'package2Height' )->addMapping ( 'package2_width', 'package2Width' )->addMapping ( 'package2_weight', 'package2Weight' )->addMapping ( 'package3_length', 'package3Length' )->addMapping ( 'package3_height', 'package3Height' )->addMapping ( 'package3_width', 'package3Width' )->addMapping ( 'package3_weight', 'package3Weight' )->addMapping ( 'color_1', 'color1' )->addMapping ( 'color_2', 'color2' )->addMapping ( 'color_3', 'color3' )->addMapping ( 'color_characteristic', 'colorCharacteristic' )->addMapping ( 'additional_campaigns', 'additionalCampaigns' )->addMapping ( 'status_simple', 'statusSimple' )->addMapping ( 'expected_logistics_cost', 'expectedLogisticsCost' )->addMapping ( 'discount_level', 'discountLevel' )->addMapping ( 'blowout_round', 'blowoutRound' )->addMapping ( 'allow_multiple_po', 'allowMultiplePo' );
		
		// Process the workflow
		// $workflow->addValueConverter('import', $i);
		$workflow->addItemConverter ( $converter )->process ();
			
    	//$workflow2->process();
    	
  /*  	
    	$doctrineWriterId = new DoctrineWriter($em3, 'AdminAdminBundle:Data');
    	$doctrineWriterId
    	->prepare()
    	->writeItem(
    			array(
    					'importId' => '$i',
    	
    			)
    	)
    	->finish();*/

    	//$reader =$doctrineWriterId = new DoctrineWriter($em3, 'AdminAdminBundle:Data');
    /*	$em3=$this->getDoctrine()->getManager();
    	$doctrineWriterId = new DoctrineWriter($em3, 'AdminAdminBundle:Data');
    	$doctrineWriterId
    	->prepare()
    	->writeItem(
    			array(
    					'importId' => '$i',
    	
    			)
    	)
    	->finish();
    	$workflow2 = new Workflow($doctrineWriterId);
    	$workflow2->process();
		//var_dump($workflow);
		//$b = new csv() ;
		$em2 = $this->getDoctrine()->getManager();
		
		$em3 = $this->getDoctrine()->getManager();
		
		//$em2->persist($import);
		//$em2->flush();
		//$i = $import->getId();
		$A = $em2->getRepository('AdminAdminBundle:Data');
		//$B = new csv() ;
		$B = clone $A;
		//$B->setId(null);
		//$B = new csv() ;

		//$B->setIdCatalogConfig('11');
		//$em3->persist($B);
		$em3->flush();
		$em2->flush();
		var_dump($B);
		*/
		
        return $this->render('SuppliercheckAdminBundle:Default:csv_import.html.twig');
    }

}
