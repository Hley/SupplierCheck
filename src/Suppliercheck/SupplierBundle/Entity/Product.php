<?php

namespace Suppliercheck\SupplierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $idCatalogSimple;

    /**
     * @var string
     */
    private $config;

    /**
     * @var string
     */
    private $import;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $createdAtExternal;

    /**
     * @var string
     */
    private $updatedAtExternal;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $specialPrice;

    /**
     * @var string
     */
    private $specialFromDate;

    /**
     * @var string
     */
    private $specialToDate;

    /**
     * @var string
     */
    private $taxClass;

    /**
     * @var string
     */
    private $taxClass2;

    /**
     * @var string
     */
    private $originalPrice;

    /**
     * @var string
     */
    private $basePrice;

    /**
     * @var string
     */
    private $barcodeEan;

    /**
     * @var string
     */
    private $skuSupplierSimple;

    /**
     * @var string
     */
    private $supplierSimpleName;

    /**
     * @var string
     */
    private $shipmentType;

    /**
     * @var string
     */
    private $transportType;

    /**
     * @var string
     */
    private $isGlobal;

    /**
     * @var string
     */
    private $shipmentCost;

    /**
     * @var string
     */
    private $shipmentCostComment;

    /**
     * @var string
     */
    private $dreamroomShowInImageMap;

    /**
     * @var string
     */
    private $dreamroomImageMapX;

    /**
     * @var string
     */
    private $dreamroomImageMapY;

    /**
     * @var string
     */
    private $xcartSku;

    /**
     * @var string
     */
    private $deliveryDateStart;

    /**
     * @var string
     */
    private $deliveryDateEnd;

    /**
     * @var string
     */
    private $docdataEan;

    /**
     * @var string
     */
    private $docdataDescription;

    /**
     * @var string
     */
    private $docdataWeight;

    /**
     * @var string
     */
    private $customIdentifier;

    /**
     * @var string
     */
    private $expectedDeliveryDateStart;

    /**
     * @var string
     */
    private $expectedDeliveryDateEnd;

    /**
     * @var string
     */
    private $navisionFlag;

    /**
     * @var string
     */
    private $deliveryDayMin;

    /**
     * @var string
     */
    private $deliveryDayMax;

    /**
     * @var string
     */
    private $additionalInboundInfo;

    /**
     * @var string
     */
    private $expectedGm1;

    /**
     * @var string
     */
    private $expectedGm2;

    /**
     * @var string
     */
    private $expectedGm3;

    /**
     * @var string
     */
    private $sumGrossWeight;

    /**
     * @var string
     */
    private $numberSeparatePackages;

    /**
     * @var string
     */
    private $delayReasons;

    /**
     * @var string
     */
    private $hideOriginalPrice;

    /**
     * @var string
     */
    private $producerName;

    /**
     * @var string
     */
    private $producerAddress;

    /**
     * @var string
     */
    private $additional2mhService;

    /**
     * @var string
     */
    private $additional2mhServicePrice;

    /**
     * @var string
     */
    private $isBundle;

    /**
     * @var string
     */
    private $idCatalogConfigWestwing;

    /**
     * @var string
     */
    private $designScout;

    /**
     * @var string
     */
    private $logisticLead;

    /**
     * @var string
     */
    private $idCatalogSimpleWestwing;

    /**
     * @var string
     */
    private $simple;

    /**
     * @var string
     */
    private $variation;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $supplier;

    /**
     * @var string
     */
    private $supplierIdentifier;

    /**
     * @var string
     */
    private $configGroup;

    /**
     * @var string
     */
    private $attributeSet;

    /**
     * @var string
     */
    private $categories;

    /**
     * @var string
     */
    private $idCatalogConfig;

    /**
     * @var string
     */
    private $skuConfig;

    /**
     * @var string
     */
    private $statusConfig;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nameOther;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $editorOpinion;

    /**
     * @var string
     */
    private $choiceOfDescription;

    /**
     * @var string
     */
    private $displayAsOutOfStock;

    /**
     * @var string
     */
    private $petStatus;

    /**
     * @var string
     */
    private $petApproved;

    /**
     * @var string
     */
    private $activatedAt;

    /**
     * @var string
     */
    private $skuSupplierConfig;

    /**
     * @var string
     */
    private $nameSupplier;

    /**
     * @var string
     */
    private $origin;

    /**
     * @var string
     */
    private $deliveryPeriod;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $designer;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $mainMaterial;

    /**
     * @var string
     */
    private $finish;

    /**
     * @var string
     */
    private $measures;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $details;

    /**
     * @var string
     */
    private $packageHeight;

    /**
     * @var string
     */
    private $packageLength;

    /**
     * @var string
     */
    private $packageWidth;

    /**
     * @var string
     */
    private $packageWeight;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @var string
     */
    private $careLabel;

    /**
     * @var string
     */
    private $nextSimpleNr;

    /**
     * @var string
     */
    private $brandNameForThemeCampaigns;

    /**
     * @var string
     */
    private $adventDay;

    /**
     * @var string
     */
    private $adventUrl;

    /**
     * @var string
     */
    private $adventPath;

    /**
     * @var string
     */
    private $overwriteDeliveryPeriod;

    /**
     * @var string
     */
    private $isSeoRelevant;

    /**
     * @var string
     */
    private $exportStatic;

    /**
     * @var string
     */
    private $isHybrisProduct;

    /**
     * @var string
     */
    private $hasDeliveryGuarantee;

    /**
     * @var string
     */
    private $netPurchasePrice;

    /**
     * @var string
     */
    private $netPurchasePriceDiscounted;

    /**
     * @var string
     */
    private $supplierProductNumber;

    /**
     * @var string
     */
    private $supplierProductName;

    /**
     * @var string
     */
    private $localStock;

    /**
     * @var string
     */
    private $globalStock;

    /**
     * @var string
     */
    private $package1Length;

    /**
     * @var string
     */
    private $package1Height;

    /**
     * @var string
     */
    private $package1Width;

    /**
     * @var string
     */
    private $package1Weight;

    /**
     * @var string
     */
    private $package2Length;

    /**
     * @var string
     */
    private $package2Height;

    /**
     * @var string
     */
    private $package2Width;

    /**
     * @var string
     */
    private $package2Weight;

    /**
     * @var string
     */
    private $package3Length;

    /**
     * @var string
     */
    private $package3Height;

    /**
     * @var string
     */
    private $package3Width;

    /**
     * @var string
     */
    private $package3Weight;

    /**
     * @var string
     */
    private $color1;

    /**
     * @var string
     */
    private $color2;

    /**
     * @var string
     */
    private $color3;

    /**
     * @var string
     */
    private $colorCharacteristic;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $additionalCampaigns;

    /**
     * @var string
     */
    private $statusSimple;

    /**
     * @var string
     */
    private $expectedLogisticsCost;

    /**
     * @var string
     */
    private $discountLevel;

    /**
     * @var string
     */
    private $blowoutRound;

    /**
     * @var string
     */
    private $allowMultiplePo;

    /**
     * @see Entity/Campaign
     * 
     * @ORM\ManyToOne(targetEntity="Campaign", inversedBy="products")
     * @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     *
     */    

    private $campaign_id;

    /**
     * @var \DateTime
     */
    private $expires_at;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Suppliercheck\SupplierBundle\Entity\Campaign
     */
    private $campaign;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCatalogSimple
     *
     * @param string $idCatalogSimple
     * @return Product
     */
    public function setIdCatalogSimple($idCatalogSimple)
    {
        $this->idCatalogSimple = $idCatalogSimple;
    
        return $this;
    }

    /**
     * Get idCatalogSimple
     *
     * @return string 
     */
    public function getIdCatalogSimple()
    {
        return $this->idCatalogSimple;
    }

    /**
     * Set config
     *
     * @param string $config
     * @return Product
     */
    public function setConfig($config)
    {
        $this->config = $config;
    
        return $this;
    }

    /**
     * Get config
     *
     * @return string 
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Set import
     *
     * @param string $import
     * @return Product
     */
    public function setImport($import)
    {
        $this->import = $import;
    
        return $this;
    }

    /**
     * Get import
     *
     * @return string 
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * Set sku
     *
     * @param string $sku
     * @return Product
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    
        return $this;
    }

    /**
     * Get sku
     *
     * @return string 
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set createdAtExternal
     *
     * @param string $createdAtExternal
     * @return Product
     */
    public function setCreatedAtExternal($createdAtExternal)
    {
        $this->createdAtExternal = $createdAtExternal;
    
        return $this;
    }

    /**
     * Get createdAtExternal
     *
     * @return string 
     */
    public function getCreatedAtExternal()
    {
        return $this->createdAtExternal;
    }

    /**
     * Set updatedAtExternal
     *
     * @param string $updatedAtExternal
     * @return Product
     */
    public function setUpdatedAtExternal($updatedAtExternal)
    {
        $this->updatedAtExternal = $updatedAtExternal;
    
        return $this;
    }

    /**
     * Get updatedAtExternal
     *
     * @return string 
     */
    public function getUpdatedAtExternal()
    {
        return $this->updatedAtExternal;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set specialPrice
     *
     * @param string $specialPrice
     * @return Product
     */
    public function setSpecialPrice($specialPrice)
    {
        $this->specialPrice = $specialPrice;
    
        return $this;
    }

    /**
     * Get specialPrice
     *
     * @return string 
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * Set specialFromDate
     *
     * @param string $specialFromDate
     * @return Product
     */
    public function setSpecialFromDate($specialFromDate)
    {
        $this->specialFromDate = $specialFromDate;
    
        return $this;
    }

    /**
     * Get specialFromDate
     *
     * @return string 
     */
    public function getSpecialFromDate()
    {
        return $this->specialFromDate;
    }

    /**
     * Set specialToDate
     *
     * @param string $specialToDate
     * @return Product
     */
    public function setSpecialToDate($specialToDate)
    {
        $this->specialToDate = $specialToDate;
    
        return $this;
    }

    /**
     * Get specialToDate
     *
     * @return string 
     */
    public function getSpecialToDate()
    {
        return $this->specialToDate;
    }

    /**
     * Set taxClass
     *
     * @param string $taxClass
     * @return Product
     */
    public function setTaxClass($taxClass)
    {
        $this->taxClass = $taxClass;
    
        return $this;
    }

    /**
     * Get taxClass
     *
     * @return string 
     */
    public function getTaxClass()
    {
        return $this->taxClass;
    }

    /**
     * Set taxClass2
     *
     * @param string $taxClass2
     * @return Product
     */
    public function setTaxClass2($taxClass2)
    {
        $this->taxClass2 = $taxClass2;
    
        return $this;
    }

    /**
     * Get taxClass2
     *
     * @return string 
     */
    public function getTaxClass2()
    {
        return $this->taxClass2;
    }

    /**
     * Set originalPrice
     *
     * @param string $originalPrice
     * @return Product
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->originalPrice = $originalPrice;
    
        return $this;
    }

    /**
     * Get originalPrice
     *
     * @return string 
     */
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    /**
     * Set basePrice
     *
     * @param string $basePrice
     * @return Product
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
    
        return $this;
    }

    /**
     * Get basePrice
     *
     * @return string 
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * Set barcodeEan
     *
     * @param string $barcodeEan
     * @return Product
     */
    public function setBarcodeEan($barcodeEan)
    {
        $this->barcodeEan = $barcodeEan;
    
        return $this;
    }

    /**
     * Get barcodeEan
     *
     * @return string 
     */
    public function getBarcodeEan()
    {
        return $this->barcodeEan;
    }

    /**
     * Set skuSupplierSimple
     *
     * @param string $skuSupplierSimple
     * @return Product
     */
    public function setSkuSupplierSimple($skuSupplierSimple)
    {
        $this->skuSupplierSimple = $skuSupplierSimple;
    
        return $this;
    }

    /**
     * Get skuSupplierSimple
     *
     * @return string 
     */
    public function getSkuSupplierSimple()
    {
        return $this->skuSupplierSimple;
    }

    /**
     * Set supplierSimpleName
     *
     * @param string $supplierSimpleName
     * @return Product
     */
    public function setSupplierSimpleName($supplierSimpleName)
    {
        $this->supplierSimpleName = $supplierSimpleName;
    
        return $this;
    }

    /**
     * Get supplierSimpleName
     *
     * @return string 
     */
    public function getSupplierSimpleName()
    {
        return $this->supplierSimpleName;
    }

    /**
     * Set shipmentType
     *
     * @param string $shipmentType
     * @return Product
     */
    public function setShipmentType($shipmentType)
    {
        $this->shipmentType = $shipmentType;
    
        return $this;
    }

    /**
     * Get shipmentType
     *
     * @return string 
     */
    public function getShipmentType()
    {
        return $this->shipmentType;
    }

    /**
     * Set transportType
     *
     * @param string $transportType
     * @return Product
     */
    public function setTransportType($transportType)
    {
        $this->transportType = $transportType;
    
        return $this;
    }

    /**
     * Get transportType
     *
     * @return string 
     */
    public function getTransportType()
    {
        return $this->transportType;
    }

    /**
     * Set isGlobal
     *
     * @param string $isGlobal
     * @return Product
     */
    public function setIsGlobal($isGlobal)
    {
        $this->isGlobal = $isGlobal;
    
        return $this;
    }

    /**
     * Get isGlobal
     *
     * @return string 
     */
    public function getIsGlobal()
    {
        return $this->isGlobal;
    }

    /**
     * Set shipmentCost
     *
     * @param string $shipmentCost
     * @return Product
     */
    public function setShipmentCost($shipmentCost)
    {
        $this->shipmentCost = $shipmentCost;
    
        return $this;
    }

    /**
     * Get shipmentCost
     *
     * @return string 
     */
    public function getShipmentCost()
    {
        return $this->shipmentCost;
    }

    /**
     * Set shipmentCostComment
     *
     * @param string $shipmentCostComment
     * @return Product
     */
    public function setShipmentCostComment($shipmentCostComment)
    {
        $this->shipmentCostComment = $shipmentCostComment;
    
        return $this;
    }

    /**
     * Get shipmentCostComment
     *
     * @return string 
     */
    public function getShipmentCostComment()
    {
        return $this->shipmentCostComment;
    }

    /**
     * Set dreamroomShowInImageMap
     *
     * @param string $dreamroomShowInImageMap
     * @return Product
     */
    public function setDreamroomShowInImageMap($dreamroomShowInImageMap)
    {
        $this->dreamroomShowInImageMap = $dreamroomShowInImageMap;
    
        return $this;
    }

    /**
     * Get dreamroomShowInImageMap
     *
     * @return string 
     */
    public function getDreamroomShowInImageMap()
    {
        return $this->dreamroomShowInImageMap;
    }

    /**
     * Set dreamroomImageMapX
     *
     * @param string $dreamroomImageMapX
     * @return Product
     */
    public function setDreamroomImageMapX($dreamroomImageMapX)
    {
        $this->dreamroomImageMapX = $dreamroomImageMapX;
    
        return $this;
    }

    /**
     * Get dreamroomImageMapX
     *
     * @return string 
     */
    public function getDreamroomImageMapX()
    {
        return $this->dreamroomImageMapX;
    }

    /**
     * Set dreamroomImageMapY
     *
     * @param string $dreamroomImageMapY
     * @return Product
     */
    public function setDreamroomImageMapY($dreamroomImageMapY)
    {
        $this->dreamroomImageMapY = $dreamroomImageMapY;
    
        return $this;
    }

    /**
     * Get dreamroomImageMapY
     *
     * @return string 
     */
    public function getDreamroomImageMapY()
    {
        return $this->dreamroomImageMapY;
    }

    /**
     * Set xcartSku
     *
     * @param string $xcartSku
     * @return Product
     */
    public function setXcartSku($xcartSku)
    {
        $this->xcartSku = $xcartSku;
    
        return $this;
    }

    /**
     * Get xcartSku
     *
     * @return string 
     */
    public function getXcartSku()
    {
        return $this->xcartSku;
    }

    /**
     * Set deliveryDateStart
     *
     * @param string $deliveryDateStart
     * @return Product
     */
    public function setDeliveryDateStart($deliveryDateStart)
    {
        $this->deliveryDateStart = $deliveryDateStart;
    
        return $this;
    }

    /**
     * Get deliveryDateStart
     *
     * @return string 
     */
    public function getDeliveryDateStart()
    {
        return $this->deliveryDateStart;
    }

    /**
     * Set deliveryDateEnd
     *
     * @param string $deliveryDateEnd
     * @return Product
     */
    public function setDeliveryDateEnd($deliveryDateEnd)
    {
        $this->deliveryDateEnd = $deliveryDateEnd;
    
        return $this;
    }

    /**
     * Get deliveryDateEnd
     *
     * @return string 
     */
    public function getDeliveryDateEnd()
    {
        return $this->deliveryDateEnd;
    }

    /**
     * Set docdataEan
     *
     * @param string $docdataEan
     * @return Product
     */
    public function setDocdataEan($docdataEan)
    {
        $this->docdataEan = $docdataEan;
    
        return $this;
    }

    /**
     * Get docdataEan
     *
     * @return string 
     */
    public function getDocdataEan()
    {
        return $this->docdataEan;
    }

    /**
     * Set docdataDescription
     *
     * @param string $docdataDescription
     * @return Product
     */
    public function setDocdataDescription($docdataDescription)
    {
        $this->docdataDescription = $docdataDescription;
    
        return $this;
    }

    /**
     * Get docdataDescription
     *
     * @return string 
     */
    public function getDocdataDescription()
    {
        return $this->docdataDescription;
    }

    /**
     * Set docdataWeight
     *
     * @param string $docdataWeight
     * @return Product
     */
    public function setDocdataWeight($docdataWeight)
    {
        $this->docdataWeight = $docdataWeight;
    
        return $this;
    }

    /**
     * Get docdataWeight
     *
     * @return string 
     */
    public function getDocdataWeight()
    {
        return $this->docdataWeight;
    }

    /**
     * Set customIdentifier
     *
     * @param string $customIdentifier
     * @return Product
     */
    public function setCustomIdentifier($customIdentifier)
    {
        $this->customIdentifier = $customIdentifier;
    
        return $this;
    }

    /**
     * Get customIdentifier
     *
     * @return string 
     */
    public function getCustomIdentifier()
    {
        return $this->customIdentifier;
    }

    /**
     * Set expectedDeliveryDateStart
     *
     * @param string $expectedDeliveryDateStart
     * @return Product
     */
    public function setExpectedDeliveryDateStart($expectedDeliveryDateStart)
    {
        $this->expectedDeliveryDateStart = $expectedDeliveryDateStart;
    
        return $this;
    }

    /**
     * Get expectedDeliveryDateStart
     *
     * @return string 
     */
    public function getExpectedDeliveryDateStart()
    {
        return $this->expectedDeliveryDateStart;
    }

    /**
     * Set expectedDeliveryDateEnd
     *
     * @param string $expectedDeliveryDateEnd
     * @return Product
     */
    public function setExpectedDeliveryDateEnd($expectedDeliveryDateEnd)
    {
        $this->expectedDeliveryDateEnd = $expectedDeliveryDateEnd;
    
        return $this;
    }

    /**
     * Get expectedDeliveryDateEnd
     *
     * @return string 
     */
    public function getExpectedDeliveryDateEnd()
    {
        return $this->expectedDeliveryDateEnd;
    }

    /**
     * Set navisionFlag
     *
     * @param string $navisionFlag
     * @return Product
     */
    public function setNavisionFlag($navisionFlag)
    {
        $this->navisionFlag = $navisionFlag;
    
        return $this;
    }

    /**
     * Get navisionFlag
     *
     * @return string 
     */
    public function getNavisionFlag()
    {
        return $this->navisionFlag;
    }

    /**
     * Set deliveryDayMin
     *
     * @param string $deliveryDayMin
     * @return Product
     */
    public function setDeliveryDayMin($deliveryDayMin)
    {
        $this->deliveryDayMin = $deliveryDayMin;
    
        return $this;
    }

    /**
     * Get deliveryDayMin
     *
     * @return string 
     */
    public function getDeliveryDayMin()
    {
        return $this->deliveryDayMin;
    }

    /**
     * Set deliveryDayMax
     *
     * @param string $deliveryDayMax
     * @return Product
     */
    public function setDeliveryDayMax($deliveryDayMax)
    {
        $this->deliveryDayMax = $deliveryDayMax;
    
        return $this;
    }

    /**
     * Get deliveryDayMax
     *
     * @return string 
     */
    public function getDeliveryDayMax()
    {
        return $this->deliveryDayMax;
    }

    /**
     * Set additionalInboundInfo
     *
     * @param string $additionalInboundInfo
     * @return Product
     */
    public function setAdditionalInboundInfo($additionalInboundInfo)
    {
        $this->additionalInboundInfo = $additionalInboundInfo;
    
        return $this;
    }

    /**
     * Get additionalInboundInfo
     *
     * @return string 
     */
    public function getAdditionalInboundInfo()
    {
        return $this->additionalInboundInfo;
    }

    /**
     * Set expectedGm1
     *
     * @param string $expectedGm1
     * @return Product
     */
    public function setExpectedGm1($expectedGm1)
    {
        $this->expectedGm1 = $expectedGm1;
    
        return $this;
    }

    /**
     * Get expectedGm1
     *
     * @return string 
     */
    public function getExpectedGm1()
    {
        return $this->expectedGm1;
    }

    /**
     * Set expectedGm2
     *
     * @param string $expectedGm2
     * @return Product
     */
    public function setExpectedGm2($expectedGm2)
    {
        $this->expectedGm2 = $expectedGm2;
    
        return $this;
    }

    /**
     * Get expectedGm2
     *
     * @return string 
     */
    public function getExpectedGm2()
    {
        return $this->expectedGm2;
    }

    /**
     * Set expectedGm3
     *
     * @param string $expectedGm3
     * @return Product
     */
    public function setExpectedGm3($expectedGm3)
    {
        $this->expectedGm3 = $expectedGm3;
    
        return $this;
    }

    /**
     * Get expectedGm3
     *
     * @return string 
     */
    public function getExpectedGm3()
    {
        return $this->expectedGm3;
    }

    /**
     * Set sumGrossWeight
     *
     * @param string $sumGrossWeight
     * @return Product
     */
    public function setSumGrossWeight($sumGrossWeight)
    {
        $this->sumGrossWeight = $sumGrossWeight;
    
        return $this;
    }

    /**
     * Get sumGrossWeight
     *
     * @return string 
     */
    public function getSumGrossWeight()
    {
        return $this->sumGrossWeight;
    }

    /**
     * Set numberSeparatePackages
     *
     * @param string $numberSeparatePackages
     * @return Product
     */
    public function setNumberSeparatePackages($numberSeparatePackages)
    {
        $this->numberSeparatePackages = $numberSeparatePackages;
    
        return $this;
    }

    /**
     * Get numberSeparatePackages
     *
     * @return string 
     */
    public function getNumberSeparatePackages()
    {
        return $this->numberSeparatePackages;
    }

    /**
     * Set delayReasons
     *
     * @param string $delayReasons
     * @return Product
     */
    public function setDelayReasons($delayReasons)
    {
        $this->delayReasons = $delayReasons;
    
        return $this;
    }

    /**
     * Get delayReasons
     *
     * @return string 
     */
    public function getDelayReasons()
    {
        return $this->delayReasons;
    }

    /**
     * Set hideOriginalPrice
     *
     * @param string $hideOriginalPrice
     * @return Product
     */
    public function setHideOriginalPrice($hideOriginalPrice)
    {
        $this->hideOriginalPrice = $hideOriginalPrice;
    
        return $this;
    }

    /**
     * Get hideOriginalPrice
     *
     * @return string 
     */
    public function getHideOriginalPrice()
    {
        return $this->hideOriginalPrice;
    }

    /**
     * Set producerName
     *
     * @param string $producerName
     * @return Product
     */
    public function setProducerName($producerName)
    {
        $this->producerName = $producerName;
    
        return $this;
    }

    /**
     * Get producerName
     *
     * @return string 
     */
    public function getProducerName()
    {
        return $this->producerName;
    }

    /**
     * Set producerAddress
     *
     * @param string $producerAddress
     * @return Product
     */
    public function setProducerAddress($producerAddress)
    {
        $this->producerAddress = $producerAddress;
    
        return $this;
    }

    /**
     * Get producerAddress
     *
     * @return string 
     */
    public function getProducerAddress()
    {
        return $this->producerAddress;
    }

    /**
     * Set additional2mhService
     *
     * @param string $additional2mhService
     * @return Product
     */
    public function setAdditional2mhService($additional2mhService)
    {
        $this->additional2mhService = $additional2mhService;
    
        return $this;
    }

    /**
     * Get additional2mhService
     *
     * @return string 
     */
    public function getAdditional2mhService()
    {
        return $this->additional2mhService;
    }

    /**
     * Set additional2mhServicePrice
     *
     * @param string $additional2mhServicePrice
     * @return Product
     */
    public function setAdditional2mhServicePrice($additional2mhServicePrice)
    {
        $this->additional2mhServicePrice = $additional2mhServicePrice;
    
        return $this;
    }

    /**
     * Get additional2mhServicePrice
     *
     * @return string 
     */
    public function getAdditional2mhServicePrice()
    {
        return $this->additional2mhServicePrice;
    }

    /**
     * Set isBundle
     *
     * @param string $isBundle
     * @return Product
     */
    public function setIsBundle($isBundle)
    {
        $this->isBundle = $isBundle;
    
        return $this;
    }

    /**
     * Get isBundle
     *
     * @return string 
     */
    public function getIsBundle()
    {
        return $this->isBundle;
    }

    /**
     * Set idCatalogConfigWestwing
     *
     * @param string $idCatalogConfigWestwing
     * @return Product
     */
    public function setIdCatalogConfigWestwing($idCatalogConfigWestwing)
    {
        $this->idCatalogConfigWestwing = $idCatalogConfigWestwing;
    
        return $this;
    }

    /**
     * Get idCatalogConfigWestwing
     *
     * @return string 
     */
    public function getIdCatalogConfigWestwing()
    {
        return $this->idCatalogConfigWestwing;
    }

    /**
     * Set designScout
     *
     * @param string $designScout
     * @return Product
     */
    public function setDesignScout($designScout)
    {
        $this->designScout = $designScout;
    
        return $this;
    }

    /**
     * Get designScout
     *
     * @return string 
     */
    public function getDesignScout()
    {
        return $this->designScout;
    }

    /**
     * Set logisticLead
     *
     * @param string $logisticLead
     * @return Product
     */
    public function setLogisticLead($logisticLead)
    {
        $this->logisticLead = $logisticLead;
    
        return $this;
    }

    /**
     * Get logisticLead
     *
     * @return string 
     */
    public function getLogisticLead()
    {
        return $this->logisticLead;
    }

    /**
     * Set idCatalogSimpleWestwing
     *
     * @param string $idCatalogSimpleWestwing
     * @return Product
     */
    public function setIdCatalogSimpleWestwing($idCatalogSimpleWestwing)
    {
        $this->idCatalogSimpleWestwing = $idCatalogSimpleWestwing;
    
        return $this;
    }

    /**
     * Get idCatalogSimpleWestwing
     *
     * @return string 
     */
    public function getIdCatalogSimpleWestwing()
    {
        return $this->idCatalogSimpleWestwing;
    }

    /**
     * Set simple
     *
     * @param string $simple
     * @return Product
     */
    public function setSimple($simple)
    {
        $this->simple = $simple;
    
        return $this;
    }

    /**
     * Get simple
     *
     * @return string 
     */
    public function getSimple()
    {
        return $this->simple;
    }

    /**
     * Set variation
     *
     * @param string $variation
     * @return Product
     */
    public function setVariation($variation)
    {
        $this->variation = $variation;
    
        return $this;
    }

    /**
     * Get variation
     *
     * @return string 
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Product
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set supplier
     *
     * @param string $supplier
     * @return Product
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    
        return $this;
    }

    /**
     * Get supplier
     *
     * @return string 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set supplierIdentifier
     *
     * @param string $supplierIdentifier
     * @return Product
     */
    public function setSupplierIdentifier($supplierIdentifier)
    {
        $this->supplierIdentifier = $supplierIdentifier;
    
        return $this;
    }

    /**
     * Get supplierIdentifier
     *
     * @return string 
     */
    public function getSupplierIdentifier()
    {
        return $this->supplierIdentifier;
    }

    /**
     * Set configGroup
     *
     * @param string $configGroup
     * @return Product
     */
    public function setConfigGroup($configGroup)
    {
        $this->configGroup = $configGroup;
    
        return $this;
    }

    /**
     * Get configGroup
     *
     * @return string 
     */
    public function getConfigGroup()
    {
        return $this->configGroup;
    }

    /**
     * Set attributeSet
     *
     * @param string $attributeSet
     * @return Product
     */
    public function setAttributeSet($attributeSet)
    {
        $this->attributeSet = $attributeSet;
    
        return $this;
    }

    /**
     * Get attributeSet
     *
     * @return string 
     */
    public function getAttributeSet()
    {
        return $this->attributeSet;
    }

    /**
     * Set categories
     *
     * @param string $categories
     * @return Product
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    
        return $this;
    }

    /**
     * Get categories
     *
     * @return string 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set idCatalogConfig
     *
     * @param string $idCatalogConfig
     * @return Product
     */
    public function setIdCatalogConfig($idCatalogConfig)
    {
        $this->idCatalogConfig = $idCatalogConfig;
    
        return $this;
    }

    /**
     * Get idCatalogConfig
     *
     * @return string 
     */
    public function getIdCatalogConfig()
    {
        return $this->idCatalogConfig;
    }

    /**
     * Set skuConfig
     *
     * @param string $skuConfig
     * @return Product
     */
    public function setSkuConfig($skuConfig)
    {
        $this->skuConfig = $skuConfig;
    
        return $this;
    }

    /**
     * Get skuConfig
     *
     * @return string 
     */
    public function getSkuConfig()
    {
        return $this->skuConfig;
    }

    /**
     * Set statusConfig
     *
     * @param string $statusConfig
     * @return Product
     */
    public function setStatusConfig($statusConfig)
    {
        $this->statusConfig = $statusConfig;
    
        return $this;
    }

    /**
     * Get statusConfig
     *
     * @return string 
     */
    public function getStatusConfig()
    {
        return $this->statusConfig;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nameOther
     *
     * @param string $nameOther
     * @return Product
     */
    public function setNameOther($nameOther)
    {
        $this->nameOther = $nameOther;
    
        return $this;
    }

    /**
     * Get nameOther
     *
     * @return string 
     */
    public function getNameOther()
    {
        return $this->nameOther;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set editorOpinion
     *
     * @param string $editorOpinion
     * @return Product
     */
    public function setEditorOpinion($editorOpinion)
    {
        $this->editorOpinion = $editorOpinion;
    
        return $this;
    }

    /**
     * Get editorOpinion
     *
     * @return string 
     */
    public function getEditorOpinion()
    {
        return $this->editorOpinion;
    }

    /**
     * Set choiceOfDescription
     *
     * @param string $choiceOfDescription
     * @return Product
     */
    public function setChoiceOfDescription($choiceOfDescription)
    {
        $this->choiceOfDescription = $choiceOfDescription;
    
        return $this;
    }

    /**
     * Get choiceOfDescription
     *
     * @return string 
     */
    public function getChoiceOfDescription()
    {
        return $this->choiceOfDescription;
    }

    /**
     * Set displayAsOutOfStock
     *
     * @param string $displayAsOutOfStock
     * @return Product
     */
    public function setDisplayAsOutOfStock($displayAsOutOfStock)
    {
        $this->displayAsOutOfStock = $displayAsOutOfStock;
    
        return $this;
    }

    /**
     * Get displayAsOutOfStock
     *
     * @return string 
     */
    public function getDisplayAsOutOfStock()
    {
        return $this->displayAsOutOfStock;
    }

    /**
     * Set petStatus
     *
     * @param string $petStatus
     * @return Product
     */
    public function setPetStatus($petStatus)
    {
        $this->petStatus = $petStatus;
    
        return $this;
    }

    /**
     * Get petStatus
     *
     * @return string 
     */
    public function getPetStatus()
    {
        return $this->petStatus;
    }

    /**
     * Set petApproved
     *
     * @param string $petApproved
     * @return Product
     */
    public function setPetApproved($petApproved)
    {
        $this->petApproved = $petApproved;
    
        return $this;
    }

    /**
     * Get petApproved
     *
     * @return string 
     */
    public function getPetApproved()
    {
        return $this->petApproved;
    }

    /**
     * Set activatedAt
     *
     * @param string $activatedAt
     * @return Product
     */
    public function setActivatedAt($activatedAt)
    {
        $this->activatedAt = $activatedAt;
    
        return $this;
    }

    /**
     * Get activatedAt
     *
     * @return string 
     */
    public function getActivatedAt()
    {
        return $this->activatedAt;
    }

    /**
     * Set skuSupplierConfig
     *
     * @param string $skuSupplierConfig
     * @return Product
     */
    public function setSkuSupplierConfig($skuSupplierConfig)
    {
        $this->skuSupplierConfig = $skuSupplierConfig;
    
        return $this;
    }

    /**
     * Get skuSupplierConfig
     *
     * @return string 
     */
    public function getSkuSupplierConfig()
    {
        return $this->skuSupplierConfig;
    }

    /**
     * Set nameSupplier
     *
     * @param string $nameSupplier
     * @return Product
     */
    public function setNameSupplier($nameSupplier)
    {
        $this->nameSupplier = $nameSupplier;
    
        return $this;
    }

    /**
     * Get nameSupplier
     *
     * @return string 
     */
    public function getNameSupplier()
    {
        return $this->nameSupplier;
    }

    /**
     * Set origin
     *
     * @param string $origin
     * @return Product
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    
        return $this;
    }

    /**
     * Get origin
     *
     * @return string 
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set deliveryPeriod
     *
     * @param string $deliveryPeriod
     * @return Product
     */
    public function setDeliveryPeriod($deliveryPeriod)
    {
        $this->deliveryPeriod = $deliveryPeriod;
    
        return $this;
    }

    /**
     * Get deliveryPeriod
     *
     * @return string 
     */
    public function getDeliveryPeriod()
    {
        return $this->deliveryPeriod;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Product
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set designer
     *
     * @param string $designer
     * @return Product
     */
    public function setDesigner($designer)
    {
        $this->designer = $designer;
    
        return $this;
    }

    /**
     * Get designer
     *
     * @return string 
     */
    public function getDesigner()
    {
        return $this->designer;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Product
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set mainMaterial
     *
     * @param string $mainMaterial
     * @return Product
     */
    public function setMainMaterial($mainMaterial)
    {
        $this->mainMaterial = $mainMaterial;
    
        return $this;
    }

    /**
     * Get mainMaterial
     *
     * @return string 
     */
    public function getMainMaterial()
    {
        return $this->mainMaterial;
    }

    /**
     * Set finish
     *
     * @param string $finish
     * @return Product
     */
    public function setFinish($finish)
    {
        $this->finish = $finish;
    
        return $this;
    }

    /**
     * Get finish
     *
     * @return string 
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * Set measures
     *
     * @param string $measures
     * @return Product
     */
    public function setMeasures($measures)
    {
        $this->measures = $measures;
    
        return $this;
    }

    /**
     * Get measures
     *
     * @return string 
     */
    public function getMeasures()
    {
        return $this->measures;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return Product
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Product
     */
    public function setDetails($details)
    {
        $this->details = $details;
    
        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set packageHeight
     *
     * @param string $packageHeight
     * @return Product
     */
    public function setPackageHeight($packageHeight)
    {
        $this->packageHeight = $packageHeight;
    
        return $this;
    }

    /**
     * Get packageHeight
     *
     * @return string 
     */
    public function getPackageHeight()
    {
        return $this->packageHeight;
    }

    /**
     * Set packageLength
     *
     * @param string $packageLength
     * @return Product
     */
    public function setPackageLength($packageLength)
    {
        $this->packageLength = $packageLength;
    
        return $this;
    }

    /**
     * Get packageLength
     *
     * @return string 
     */
    public function getPackageLength()
    {
        return $this->packageLength;
    }

    /**
     * Set packageWidth
     *
     * @param string $packageWidth
     * @return Product
     */
    public function setPackageWidth($packageWidth)
    {
        $this->packageWidth = $packageWidth;
    
        return $this;
    }

    /**
     * Get packageWidth
     *
     * @return string 
     */
    public function getPackageWidth()
    {
        return $this->packageWidth;
    }

    /**
     * Set packageWeight
     *
     * @param string $packageWeight
     * @return Product
     */
    public function setPackageWeight($packageWeight)
    {
        $this->packageWeight = $packageWeight;
    
        return $this;
    }

    /**
     * Get packageWeight
     *
     * @return string 
     */
    public function getPackageWeight()
    {
        return $this->packageWeight;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    
        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string 
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set careLabel
     *
     * @param string $careLabel
     * @return Product
     */
    public function setCareLabel($careLabel)
    {
        $this->careLabel = $careLabel;
    
        return $this;
    }

    /**
     * Get careLabel
     *
     * @return string 
     */
    public function getCareLabel()
    {
        return $this->careLabel;
    }

    /**
     * Set nextSimpleNr
     *
     * @param string $nextSimpleNr
     * @return Product
     */
    public function setNextSimpleNr($nextSimpleNr)
    {
        $this->nextSimpleNr = $nextSimpleNr;
    
        return $this;
    }

    /**
     * Get nextSimpleNr
     *
     * @return string 
     */
    public function getNextSimpleNr()
    {
        return $this->nextSimpleNr;
    }

    /**
     * Set brandNameForThemeCampaigns
     *
     * @param string $brandNameForThemeCampaigns
     * @return Product
     */
    public function setBrandNameForThemeCampaigns($brandNameForThemeCampaigns)
    {
        $this->brandNameForThemeCampaigns = $brandNameForThemeCampaigns;
    
        return $this;
    }

    /**
     * Get brandNameForThemeCampaigns
     *
     * @return string 
     */
    public function getBrandNameForThemeCampaigns()
    {
        return $this->brandNameForThemeCampaigns;
    }

    /**
     * Set adventDay
     *
     * @param string $adventDay
     * @return Product
     */
    public function setAdventDay($adventDay)
    {
        $this->adventDay = $adventDay;
    
        return $this;
    }

    /**
     * Get adventDay
     *
     * @return string 
     */
    public function getAdventDay()
    {
        return $this->adventDay;
    }

    /**
     * Set adventUrl
     *
     * @param string $adventUrl
     * @return Product
     */
    public function setAdventUrl($adventUrl)
    {
        $this->adventUrl = $adventUrl;
    
        return $this;
    }

    /**
     * Get adventUrl
     *
     * @return string 
     */
    public function getAdventUrl()
    {
        return $this->adventUrl;
    }

    /**
     * Set adventPath
     *
     * @param string $adventPath
     * @return Product
     */
    public function setAdventPath($adventPath)
    {
        $this->adventPath = $adventPath;
    
        return $this;
    }

    /**
     * Get adventPath
     *
     * @return string 
     */
    public function getAdventPath()
    {
        return $this->adventPath;
    }

    /**
     * Set overwriteDeliveryPeriod
     *
     * @param string $overwriteDeliveryPeriod
     * @return Product
     */
    public function setOverwriteDeliveryPeriod($overwriteDeliveryPeriod)
    {
        $this->overwriteDeliveryPeriod = $overwriteDeliveryPeriod;
    
        return $this;
    }

    /**
     * Get overwriteDeliveryPeriod
     *
     * @return string 
     */
    public function getOverwriteDeliveryPeriod()
    {
        return $this->overwriteDeliveryPeriod;
    }

    /**
     * Set isSeoRelevant
     *
     * @param string $isSeoRelevant
     * @return Product
     */
    public function setIsSeoRelevant($isSeoRelevant)
    {
        $this->isSeoRelevant = $isSeoRelevant;
    
        return $this;
    }

    /**
     * Get isSeoRelevant
     *
     * @return string 
     */
    public function getIsSeoRelevant()
    {
        return $this->isSeoRelevant;
    }

    /**
     * Set exportStatic
     *
     * @param string $exportStatic
     * @return Product
     */
    public function setExportStatic($exportStatic)
    {
        $this->exportStatic = $exportStatic;
    
        return $this;
    }

    /**
     * Get exportStatic
     *
     * @return string 
     */
    public function getExportStatic()
    {
        return $this->exportStatic;
    }

    /**
     * Set isHybrisProduct
     *
     * @param string $isHybrisProduct
     * @return Product
     */
    public function setIsHybrisProduct($isHybrisProduct)
    {
        $this->isHybrisProduct = $isHybrisProduct;
    
        return $this;
    }

    /**
     * Get isHybrisProduct
     *
     * @return string 
     */
    public function getIsHybrisProduct()
    {
        return $this->isHybrisProduct;
    }

    /**
     * Set hasDeliveryGuarantee
     *
     * @param string $hasDeliveryGuarantee
     * @return Product
     */
    public function setHasDeliveryGuarantee($hasDeliveryGuarantee)
    {
        $this->hasDeliveryGuarantee = $hasDeliveryGuarantee;
    
        return $this;
    }

    /**
     * Get hasDeliveryGuarantee
     *
     * @return string 
     */
    public function getHasDeliveryGuarantee()
    {
        return $this->hasDeliveryGuarantee;
    }

    /**
     * Set netPurchasePrice
     *
     * @param string $netPurchasePrice
     * @return Product
     */
    public function setNetPurchasePrice($netPurchasePrice)
    {
        $this->netPurchasePrice = $netPurchasePrice;
    
        return $this;
    }

    /**
     * Get netPurchasePrice
     *
     * @return string 
     */
    public function getNetPurchasePrice()
    {
        return $this->netPurchasePrice;
    }

    /**
     * Set netPurchasePriceDiscounted
     *
     * @param string $netPurchasePriceDiscounted
     * @return Product
     */
    public function setNetPurchasePriceDiscounted($netPurchasePriceDiscounted)
    {
        $this->netPurchasePriceDiscounted = $netPurchasePriceDiscounted;
    
        return $this;
    }

    /**
     * Get netPurchasePriceDiscounted
     *
     * @return string 
     */
    public function getNetPurchasePriceDiscounted()
    {
        return $this->netPurchasePriceDiscounted;
    }

    /**
     * Set supplierProductNumber
     *
     * @param string $supplierProductNumber
     * @return Product
     */
    public function setSupplierProductNumber($supplierProductNumber)
    {
        $this->supplierProductNumber = $supplierProductNumber;
    
        return $this;
    }

    /**
     * Get supplierProductNumber
     *
     * @return string 
     */
    public function getSupplierProductNumber()
    {
        return $this->supplierProductNumber;
    }

    /**
     * Set supplierProductName
     *
     * @param string $supplierProductName
     * @return Product
     */
    public function setSupplierProductName($supplierProductName)
    {
        $this->supplierProductName = $supplierProductName;
    
        return $this;
    }

    /**
     * Get supplierProductName
     *
     * @return string 
     */
    public function getSupplierProductName()
    {
        return $this->supplierProductName;
    }

    /**
     * Set localStock
     *
     * @param string $localStock
     * @return Product
     */
    public function setLocalStock($localStock)
    {
        $this->localStock = $localStock;
    
        return $this;
    }

    /**
     * Get localStock
     *
     * @return string 
     */
    public function getLocalStock()
    {
        return $this->localStock;
    }

    /**
     * Set globalStock
     *
     * @param string $globalStock
     * @return Product
     */
    public function setGlobalStock($globalStock)
    {
        $this->globalStock = $globalStock;
    
        return $this;
    }

    /**
     * Get globalStock
     *
     * @return string 
     */
    public function getGlobalStock()
    {
        return $this->globalStock;
    }

    /**
     * Set package1Length
     *
     * @param string $package1Length
     * @return Product
     */
    public function setPackage1Length($package1Length)
    {
        $this->package1Length = $package1Length;
    
        return $this;
    }

    /**
     * Get package1Length
     *
     * @return string 
     */
    public function getPackage1Length()
    {
        return $this->package1Length;
    }

    /**
     * Set package1Height
     *
     * @param string $package1Height
     * @return Product
     */
    public function setPackage1Height($package1Height)
    {
        $this->package1Height = $package1Height;
    
        return $this;
    }

    /**
     * Get package1Height
     *
     * @return string 
     */
    public function getPackage1Height()
    {
        return $this->package1Height;
    }

    /**
     * Set package1Width
     *
     * @param string $package1Width
     * @return Product
     */
    public function setPackage1Width($package1Width)
    {
        $this->package1Width = $package1Width;
    
        return $this;
    }

    /**
     * Get package1Width
     *
     * @return string 
     */
    public function getPackage1Width()
    {
        return $this->package1Width;
    }

    /**
     * Set package1Weight
     *
     * @param string $package1Weight
     * @return Product
     */
    public function setPackage1Weight($package1Weight)
    {
        $this->package1Weight = $package1Weight;
    
        return $this;
    }

    /**
     * Get package1Weight
     *
     * @return string 
     */
    public function getPackage1Weight()
    {
        return $this->package1Weight;
    }

    /**
     * Set package2Length
     *
     * @param string $package2Length
     * @return Product
     */
    public function setPackage2Length($package2Length)
    {
        $this->package2Length = $package2Length;
    
        return $this;
    }

    /**
     * Get package2Length
     *
     * @return string 
     */
    public function getPackage2Length()
    {
        return $this->package2Length;
    }

    /**
     * Set package2Height
     *
     * @param string $package2Height
     * @return Product
     */
    public function setPackage2Height($package2Height)
    {
        $this->package2Height = $package2Height;
    
        return $this;
    }

    /**
     * Get package2Height
     *
     * @return string 
     */
    public function getPackage2Height()
    {
        return $this->package2Height;
    }

    /**
     * Set package2Width
     *
     * @param string $package2Width
     * @return Product
     */
    public function setPackage2Width($package2Width)
    {
        $this->package2Width = $package2Width;
    
        return $this;
    }

    /**
     * Get package2Width
     *
     * @return string 
     */
    public function getPackage2Width()
    {
        return $this->package2Width;
    }

    /**
     * Set package2Weight
     *
     * @param string $package2Weight
     * @return Product
     */
    public function setPackage2Weight($package2Weight)
    {
        $this->package2Weight = $package2Weight;
    
        return $this;
    }

    /**
     * Get package2Weight
     *
     * @return string 
     */
    public function getPackage2Weight()
    {
        return $this->package2Weight;
    }

    /**
     * Set package3Length
     *
     * @param string $package3Length
     * @return Product
     */
    public function setPackage3Length($package3Length)
    {
        $this->package3Length = $package3Length;
    
        return $this;
    }

    /**
     * Get package3Length
     *
     * @return string 
     */
    public function getPackage3Length()
    {
        return $this->package3Length;
    }

    /**
     * Set package3Height
     *
     * @param string $package3Height
     * @return Product
     */
    public function setPackage3Height($package3Height)
    {
        $this->package3Height = $package3Height;
    
        return $this;
    }

    /**
     * Get package3Height
     *
     * @return string 
     */
    public function getPackage3Height()
    {
        return $this->package3Height;
    }

    /**
     * Set package3Width
     *
     * @param string $package3Width
     * @return Product
     */
    public function setPackage3Width($package3Width)
    {
        $this->package3Width = $package3Width;
    
        return $this;
    }

    /**
     * Get package3Width
     *
     * @return string 
     */
    public function getPackage3Width()
    {
        return $this->package3Width;
    }

    /**
     * Set package3Weight
     *
     * @param string $package3Weight
     * @return Product
     */
    public function setPackage3Weight($package3Weight)
    {
        $this->package3Weight = $package3Weight;
    
        return $this;
    }

    /**
     * Get package3Weight
     *
     * @return string 
     */
    public function getPackage3Weight()
    {
        return $this->package3Weight;
    }

    /**
     * Set color1
     *
     * @param string $color1
     * @return Product
     */
    public function setColor1($color1)
    {
        $this->color1 = $color1;
    
        return $this;
    }

    /**
     * Get color1
     *
     * @return string 
     */
    public function getColor1()
    {
        return $this->color1;
    }

    /**
     * Set color2
     *
     * @param string $color2
     * @return Product
     */
    public function setColor2($color2)
    {
        $this->color2 = $color2;
    
        return $this;
    }

    /**
     * Get color2
     *
     * @return string 
     */
    public function getColor2()
    {
        return $this->color2;
    }

    /**
     * Set color3
     *
     * @param string $color3
     * @return Product
     */
    public function setColor3($color3)
    {
        $this->color3 = $color3;
    
        return $this;
    }

    /**
     * Get color3
     *
     * @return string 
     */
    public function getColor3()
    {
        return $this->color3;
    }

    /**
     * Set colorCharacteristic
     *
     * @param string $colorCharacteristic
     * @return Product
     */
    public function setColorCharacteristic($colorCharacteristic)
    {
        $this->colorCharacteristic = $colorCharacteristic;
    
        return $this;
    }

    /**
     * Get colorCharacteristic
     *
     * @return string 
     */
    public function getColorCharacteristic()
    {
        return $this->colorCharacteristic;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Product
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set additionalCampaigns
     *
     * @param string $additionalCampaigns
     * @return Product
     */
    public function setAdditionalCampaigns($additionalCampaigns)
    {
        $this->additionalCampaigns = $additionalCampaigns;
    
        return $this;
    }

    /**
     * Get additionalCampaigns
     *
     * @return string 
     */
    public function getAdditionalCampaigns()
    {
        return $this->additionalCampaigns;
    }

    /**
     * Set statusSimple
     *
     * @param string $statusSimple
     * @return Product
     */
    public function setStatusSimple($statusSimple)
    {
        $this->statusSimple = $statusSimple;
    
        return $this;
    }

    /**
     * Get statusSimple
     *
     * @return string 
     */
    public function getStatusSimple()
    {
        return $this->statusSimple;
    }

    /**
     * Set expectedLogisticsCost
     *
     * @param string $expectedLogisticsCost
     * @return Product
     */
    public function setExpectedLogisticsCost($expectedLogisticsCost)
    {
        $this->expectedLogisticsCost = $expectedLogisticsCost;
    
        return $this;
    }

    /**
     * Get expectedLogisticsCost
     *
     * @return string 
     */
    public function getExpectedLogisticsCost()
    {
        return $this->expectedLogisticsCost;
    }

    /**
     * Set discountLevel
     *
     * @param string $discountLevel
     * @return Product
     */
    public function setDiscountLevel($discountLevel)
    {
        $this->discountLevel = $discountLevel;
    
        return $this;
    }

    /**
     * Get discountLevel
     *
     * @return string 
     */
    public function getDiscountLevel()
    {
        return $this->discountLevel;
    }

    /**
     * Set blowoutRound
     *
     * @param string $blowoutRound
     * @return Product
     */
    public function setBlowoutRound($blowoutRound)
    {
        $this->blowoutRound = $blowoutRound;
    
        return $this;
    }

    /**
     * Get blowoutRound
     *
     * @return string 
     */
    public function getBlowoutRound()
    {
        return $this->blowoutRound;
    }

    /**
     * Set allowMultiplePo
     *
     * @param string $allowMultiplePo
     * @return Product
     */
    public function setAllowMultiplePo($allowMultiplePo)
    {
        $this->allowMultiplePo = $allowMultiplePo;
    
        return $this;
    }

    /**
     * Get allowMultiplePo
     *
     * @return string 
     */
    public function getAllowMultiplePo()
    {
        return $this->allowMultiplePo;
    }

    /**
     * Set -        +
     *
     * @param integer $campaignId
     * @return Product
     */
    public function setCampaignId($campaignId)
    {
        $this->campaign_id = $campaignId;
    
        return $this;
    }

    /**
     * Get campaign_id
     *
     * @return integer 
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * Set expires_at
     *
     * @param \DateTime $expiresAt
     * @return Product
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expires_at = $expiresAt;
    
        return $this;
    }

    /**
     * Get expires_at
     *
     * @return \DateTime 
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Product
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Product
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set campaign
     *
     * @param \Suppliercheck\SupplierBundle\Entity\Campaign $campaign
     * @return Product
     */
    public function setCampaign(\Suppliercheck\SupplierBundle\Entity\Campaign $campaign = null)
    {
        $this->campaign = $campaign;
    
//         return $this;
    }

    /**
     * Get campaign
     *
     * @return \Suppliercheck\SupplierBundle\Entity\Campaign 
     */
    public function getCampaign()
    {
        return $this->campaign;
    }
    /**
     * @ORM\PrePersist
     */
public function setCreatedAtValue()
{
  if(!$this->getCreatedAt())
  {
    $this->created_at = new \DateTime();
  }
}
// ...
public function setUpdatedAtValue()
{
  $this->updated_at = new \DateTime();
}
    /**
     * @var integer
     */
//     private $campaignId;

    public function addCampaign(Campaign $campaign)
    {
    	if (!$this->campaigns->contains($campaign)) {
    		$this->campaigns->add($campaign);
    		$campaign->addCampaign($this);
    	}
    }

    public function createFromImport(Import $import)
    {
    	$this->idCatalogSimple  = $import->getIdCatalogConfig();

    	// ... All the fields need to be assigned manually.
    	$this->idCatalogSimple= $import->getIdCatalogSimple();
    	$this->config= $import->getConfig();
    	$this->import= $import->getImport();
    	$this->sku= $import->getSku();
    	$this->createdAtExternal = $import->getCreatedAtExternal ();
    	$this->updatedAtExternal = $import->getUpdatedAtExternal ();
    	$this->price = $import->getPrice ();
    	$this->specialPrice= $import->getSpecialPrice();
    	$this->specialFromDate= $import->getSpecialFromDate();
    	$this->specialToDate= $import->getSpecialToDate();
    	$this->taxClass= $import->getTaxClass();
    	$this->taxClass2= $import->getTaxClass2();
    	$this->originalPrice= $import->getOriginalPrice();
    	$this->basePrice= $import->getBasePrice();
    	$this->barcodeEan= $import->getBarcodeEan();
    	$this->skuSupplierSimple = $import->getSkuSupplierSimple ();
    	$this->supplierSimpleName= $import->getSupplierSimpleName();
    	$this->shipmentType= $import->getShipmentType();
    	$this->transportType= $import->getTransportType();
    	$this->isGlobal= $import->getIsGlobal();
    	$this->shipmentCost= $import->getShipmentCost();
    	$this->shipmentCostComment= $import->getShipmentCostComment();
    	$this->dreamroomShowInImageMap = $import->getDreamroomShowInImageMap ();
    	$this->dreamroomImageMapX= $import->getDreamroomImageMapX();
    	$this->dreamroomImageMapY= $import->getDreamroomImageMapY();
    	$this->xcartSku= $import->getXcartSku();
    	$this->deliveryDateStart = $import->getDeliveryDateStart ();
    	$this->deliveryDateEnd= $import->getDeliveryDateEnd();
    	$this->docdataEan= $import->getDocdataEan();
    	$this->docdataDescription= $import->getDocdataDescription();
    	$this->docdataWeight= $import->getDocdataWeight();
    	$this->customIdentifier= $import->getCustomIdentifier();
    	$this->expectedDeliveryDateStart= $import->getExpectedDeliveryDateStart();
    	$this->expectedDeliveryDateEnd = $import->getExpectedDeliveryDateEnd ();
    	$this->navisionFlag= $import->getNavisionFlag();
    	$this->deliveryDayMin= $import->getDeliveryDayMin();
    	$this->deliveryDayMax= $import->getDeliveryDayMax();
    	$this->additionalInboundInfo= $import->getAdditionalInboundInfo();
    	$this->expectedGm1 = $import->getExpectedGm1 ();
    	$this->expectedGm2 = $import->getExpectedGm2 ();
    	$this->expectedGm3 = $import->getExpectedGm3 ();
    	$this->sumGrossWeight= $import->getSumGrossWeight();
    	$this->numberSeparatePackages= $import->getNumberSeparatePackages();
    	$this->delayReasons= $import->getDelayReasons();
    	$this->hideOriginalPrice = $import->getHideOriginalPrice ();
    	$this->producerName= $import->getProducerName();
    	$this->producerAddress= $import->getProducerAddress();
    	$this->additional2mhService= $import->getAdditional2mhService();
    	$this->additional2mhServicePrice= $import->getAdditional2mhServicePrice();
    	$this->isBundle= $import->getIsBundle();
    	$this->idCatalogConfigWestwing = $import->getIdCatalogConfigWestwing ();
    	$this->designScout = $import->getDesignScout ();
    	$this->logisticLead= $import->getLogisticLead();
    	$this->idCatalogSimpleWestwing = $import->getIdCatalogSimpleWestwing ();
    	$this->simple= $import->getsimple();
    	$this->variation= $import->getVariation();
    	$this->brand = $import->getBrand ();
    	$this->supplier= $import->getSupplier();
    	$this->supplierIdentifier= $import->getSupplierIdentifier();
    	$this->configGroup = $import->getConfigGroup ();
    	$this->attributeSet= $import->getAttributeSet();
    	$this->categories= $import->getCategories();
    	$this->idCatalogConfig= $import->getIdCatalogConfig();
    	$this->skuConfig= $import->getSkuConfig();
    	$this->statusConfig= $import->getStatusConfig();
    	$this->name= $import->getName();
    	$this->nameOther= $import->getNameOther();
    	$this->description = $import->getDescription ();
    	$this->editorOpinion= $import->getEditorOpinion();
    	$this->choiceOfDescription= $import->getChoiceOfDescription();
    	$this->displayAsOutOfStock= $import->getDisplayAsOutOfStock();
    	$this->petStatus= $import->getPetStatus();
    	$this->petApproved = $import->getPetApproved ();
    	$this->activatedAt = $import->getActivatedAt ();
    	$this->skuSupplierConfig = $import->getSkuSupplierConfig ();
    	$this->nameSupplier= $import->getNameSupplier();
    	$this->origin= $import->getOrigin();
    	$this->deliveryPeriod= $import->getDeliveryPeriod();
    	$this->note= $import->getNote();
    	$this->designer= $import->getDesigner();
    	$this->color = $import->getColor ();
    	$this->mainMaterial= $import->getMainMaterial();
    	$this->finish= $import->getFinish();
    	$this->measures= $import->getMeasures();
    	$this->weight= $import->getWeight();
    	$this->details= $import->getDetails();
    	$this->packageHeight= $import->getPackageHeight();
    	$this->packageLength= $import->getPackageLength();
    	$this->packageWidth= $import->getPackageWidth();
    	$this->packageWeight= $import->getPackageWeight();
    	$this->shortDescription= $import->getShortDescription();
    	$this->careLabel= $import->getCareLabel();
    	$this->nextSimpleNr= $import->getNextSimpleNr();
    	$this->brandNameForThemeCampaigns= $import->getBrandNameForThemeCampaigns();
    	$this->adventDay= $import->getAdventDay();
    	$this->adventUrl= $import->getAdventUrl();
    	$this->adventPath= $import->getAdventPath();
    	$this->overwriteDeliveryPeriod = $import->getOverwriteDeliveryPeriod ();
    	$this->isSeoRelevant= $import->getIsSeoRelevant();
    	$this->exportStatic= $import->getExportStatic();
    	$this->isHybrisProduct= $import->getIsHybrisProduct();
    	$this->hasDeliveryGuarantee= $import->getHasDeliveryGuarantee();
    	$this->netPurchasePrice= $import->getNetPurchasePrice();
    	$this->netPurchasePriceDiscounted= $import->getNetPurchasePriceDiscounted();
    	$this->supplierProductNumber= $import->getSupplierProductNumber();
    	$this->supplierProductName= $import->getSupplierProductName();
    	$this->localStock= $import->getLocalStock();
    	$this->globalStock = $import->getGlobalStock ();
    	$this->package1Length= $import->getPackage1Length();
    	$this->package1Height= $import->getPackage1Height();
    	$this->package1Width= $import->getPackage1Width();
    	$this->package1Weight= $import->getPackage1Weight();
    	$this->package2Length= $import->getPackage2Length();
    	$this->package2Height= $import->getPackage2Height();
    	$this->package2Width= $import->getPackage2Width();
    	$this->package2Weight= $import->getPackage2Weight();
    	$this->package3Length= $import->getPackage3Length();
    	$this->package3Height= $import->getPackage3Height();
    	$this->package3Width= $import->getPackage3Width();
    	$this->package3Weight= $import->getPackage3Weight();
    	$this->color1= $import->getColor1();
    	$this->color2= $import->getColor2();
    	$this->color3= $import->getColor3();
    	$this->colorCharacteristic= $import->getColorCharacteristic();
    	$this->position= $import->getPosition();
    	$this->additionalCampaigns= $import->getAdditionalCampaigns();
    	$this->statusSimple= $import->getStatusSimple();
    	$this->expectedLogisticsCost= $import->getExpectedLogisticsCost();
    	$this->discountLevel= $import->getDiscountLevel();
    	$this->blowoutRound= $import->getBlowoutRound();
    	$this->allowMultiplePo= $import->getAllowMultiplePo();
//     	$this->campaign_id = $import->getCampaign_id();
//     	$this->expires_at= $import->getExpires_at();
//     	$this->created_at= $import->getCreated_at();
//     	$this->updated_at= $import->getUpdated_at();
//     	$this->campaign= $import->getCampaign();
    	 
    }

    
    /**
     * @var boolean
     */
    private $cheked;


    /**
     * Set cheked
     *
     * @param boolean $cheked
     * @return Product
     */
    public function setCheked($cheked)
    {
        $this->cheked = $cheked;
    
        return $this;
    }

    /**
     * Get cheked
     *
     * @return boolean 
     */
    public function getCheked()
    {
        return $this->cheked;
    }
    
    public function __toString()
    {
    	//return $this->xcartSku;
    	return $this->supplier;
    	return $this->sku;
    	 
    	 
    }
    /**
     * @var string
     */
    private $comment;


    /**
     * Set comment
     *
     * @param string $comment
     * @return Product
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * @var boolean
     */
    private $validated;


    /**
     * Set validated
     *
     * @param boolean $validated
     * @return Product
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;
    
        return $this;
    }

    /**
     * Get validated
     *
     * @return boolean 
     */
    public function getValidated()
    {
        return $this->validated;
    }
    /**
     * @var boolean
     */
    private $checked;


    /**
     * Set checked
     *
     * @param boolean $checked
     * @return Product
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;
    
        return $this;
    }

    /**
     * Get checked
     *
     * @return boolean 
     */
    public function getChecked()
    {
        return $this->checked;
    }
    
    
    /**
     * @var string
     */
    private $link;


    /**
     * Set link
     *
     * @param string $link
     * @return Product
     */
    public function setLink($link)
    {
   //     	http://static.westwing.fr/i/8471/FR-CT761WWAQT17FR-1-newproduct.jpg
  		$this->link = "http://static.westwing.fr/i/8471/FR-".$link."-newproduct.jpg" ;
      // $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
}