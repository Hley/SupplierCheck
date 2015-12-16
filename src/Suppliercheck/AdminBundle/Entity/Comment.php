<?php

namespace Suppliercheck\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 */
class Comment
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $quantity;


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
     * Set name
     *
     * @param string $name
     * @return Comment
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
     * Set description
     *
     * @param string $description
     * @return Comment
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
     * Set quantity
     *
     * @param integer $quantity
     * @return Comment
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
//     /**
//      * @ORM\OneToOne(targetEntity="Product", inversedBy="comment")
//      * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
//      */
    
//     private $product;


//     /**
//      * Set product
//      *
//      * @param integer $product
//      * @return Comment
//      */
//     public function setProduct($product)
//     {
//         $this->product = $product;
    
//         return $this;
//     }

//     /**
//      * Get product
//      *
//      * @return integer 
//      */
//     public function getProduct()
//     {
//         return $this->product;
//     }
    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $weight;


    /**
     * Set color
     *
     * @param string $color
     * @return Comment
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
     * Set price
     *
     * @param string $price
     * @return Comment
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
     * Set weight
     *
     * @param string $weight
     * @return Comment
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
    
    public function __toString()
    {
//     	return ($this->color . ' ' . $this->price);
    }
    /**
     * @var string
     */
    private $product;


    /**
     * Set product
     *
     * @param string $product
     * @return Comment
     */
    public function setProduct($product)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return string 
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * @var string
     */
    private $measures;

    /**
     * @var string
     */
    private $mainMaterial;

    /**
     * @var string
     */
    private $originalPrice;

    /**
     * @var string
     */
    private $netPurchasePrice;


    /**
     * Set measures
     *
     * @param string $measures
     * @return Comment
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
     * Set mainMaterial
     *
     * @param string $mainMaterial
     * @return Comment
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
     * Set originalPrice
     *
     * @param string $originalPrice
     * @return Comment
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
     * Set netPurchasePrice
     *
     * @param string $netPurchasePrice
     * @return Comment
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
}