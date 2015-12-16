<?php

namespace Suppliercheck\SupplierBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//         		->add('campaign', 'entity', array(
//     				'class' => 'SuppliercheckSupplierBundle:Campaign'
// 				))
// 			->add("campaign", new CampaignType())
// 			        	->add('campaign', 'collection', array('type' => new CampaignType(),
// 			        			'allow_add' => true,
// 			        			'by_reference' => false,
// 			        			'prototype' => true,
// 			        	))
		

// 				->add ( 'campaign', 'entity', array (
//         		'class' => 'SuppliercheckSupplierBundle:Campaign',
//         		'multiple' => true,
//         		'property' => 'supplier'
//        				 )
//        				 )
            ->add('idCatalogSimple')
            ->add('config')
            ->add('import')
            ->add('sku')
            ->add('createdAtExternal')
            ->add('updatedAtExternal')
            ->add('price')
            ->add('specialPrice')
            ->add('specialFromDate')
            ->add('specialToDate')
            ->add('taxClass')
            ->add('taxClass2')
            ->add('originalPrice')
            ->add('basePrice')
            ->add('barcodeEan')
            ->add('skuSupplierSimple')
            ->add('supplierSimpleName')
            ->add('shipmentType')
            ->add('transportType')
            ->add('isGlobal')
            ->add('shipmentCost')
            ->add('shipmentCostComment')
            ->add('dreamroomShowInImageMap')
            ->add('dreamroomImageMapX')
            ->add('dreamroomImageMapY')
            ->add('xcartSku')
            ->add('deliveryDateStart')
            ->add('deliveryDateEnd')
            ->add('docdataEan')
            ->add('docdataDescription')
            ->add('docdataWeight')
            ->add('customIdentifier')
            ->add('expectedDeliveryDateStart')
            ->add('expectedDeliveryDateEnd')
            ->add('navisionFlag')
            ->add('deliveryDayMin')
            ->add('deliveryDayMax')
            ->add('additionalInboundInfo')
            ->add('expectedGm1')
            ->add('expectedGm2')
            ->add('expectedGm3')
            ->add('sumGrossWeight')
            ->add('numberSeparatePackages')
            ->add('delayReasons')
            ->add('hideOriginalPrice')
            ->add('producerName')
            ->add('producerAddress')
            ->add('additional2mhService')
            ->add('additional2mhServicePrice')
            ->add('isBundle')
            ->add('idCatalogConfigWestwing')
            ->add('designScout')
            ->add('logisticLead')
            ->add('idCatalogSimpleWestwing')
            ->add('simple')
            ->add('variation')
            ->add('brand')
            ->add('supplier')
            ->add('supplierIdentifier')
            ->add('configGroup')
            ->add('attributeSet')
            ->add('categories')
            ->add('idCatalogConfig')
            ->add('skuConfig')
            ->add('statusConfig')
            ->add('name')
            ->add('nameOther')
            ->add('description')
            ->add('editorOpinion')
            ->add('choiceOfDescription')
            ->add('displayAsOutOfStock')
            ->add('petStatus')
            ->add('petApproved')
            ->add('activatedAt')
            ->add('skuSupplierConfig')
            ->add('nameSupplier')
            ->add('origin')
            ->add('deliveryPeriod')
            ->add('note')
            ->add('designer')
            ->add('color')
            ->add('mainMaterial')
            ->add('finish')
            ->add('measures')
            ->add('weight')
            ->add('details')
            ->add('packageHeight')
            ->add('packageLength')
            ->add('packageWidth')
            ->add('packageWeight')
            ->add('shortDescription')
            ->add('careLabel')
            ->add('nextSimpleNr')
            ->add('brandNameForThemeCampaigns')
            ->add('adventDay')
            ->add('adventUrl')
            ->add('adventPath')
            ->add('overwriteDeliveryPeriod')
            ->add('isSeoRelevant')
            ->add('exportStatic')
            ->add('isHybrisProduct')
            ->add('hasDeliveryGuarantee')
            ->add('netPurchasePrice')
            ->add('netPurchasePriceDiscounted')
            ->add('supplierProductNumber')
            ->add('supplierProductName')
            ->add('localStock')
            ->add('globalStock')
            ->add('package1Length')
            ->add('package1Height')
            ->add('package1Width')
            ->add('package1Weight')
            ->add('package2Length')
            ->add('package2Height')
            ->add('package2Width')
            ->add('package2Weight')
            ->add('package3Length')
            ->add('package3Height')
            ->add('package3Width')
            ->add('package3Weight')
            ->add('color1')
            ->add('color2')
            ->add('color3')
            ->add('colorCharacteristic')
            ->add('position')
            ->add('additionalCampaigns')
            ->add('statusSimple')
            ->add('expectedLogisticsCost')
            ->add('discountLevel')
            ->add('blowoutRound')
            ->add('allowMultiplePo')
            ->add('campaign_id')
            ->add('expires_at')
            ->add('created_at')
            ->add('updated_at')
            ->add('campaign')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Suppliercheck\SupplierBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'suppliercheck_supplierbundle_product';
    }
}
