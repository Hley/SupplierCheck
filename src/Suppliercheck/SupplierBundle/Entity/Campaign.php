<?php

namespace Suppliercheck\SupplierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campaign
 */
class Campaign
{
	
	public $file;
	
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $checker;

    /**
     * @var string
     */
    private $supplierName;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $status;

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
     * @var integer
     */
    private $validatedItems;

    /**
     * @var string
     */
    private $Comments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set checker
     *
     * @param string $checker
     * @return Campaign
     */
    public function setChecker($checker)
    {
        $this->checker = $checker;
    
        return $this;
    }

    /**
     * Get checker
     *
     * @return string 
     */
    public function getChecker()
    {
        return $this->checker;
    }

    /**
     * Set supplierName
     *
     * @param string $supplierName
     * @return Campaign
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;
    
        return $this;
    }

    /**
     * Get supplierName
     *
     * @return string 
     */
    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Campaign
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
     * Set status
     *
     * @param boolean $status
     * @return Campaign
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set expires_at
     *
     * @param \DateTime $expiresAt
     * @return Campaign
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
     * @return Campaign
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
     * @return Campaign
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
     * Set validatedItems
     *
     * @param integer $validatedItems
     * @return Campaign
     */
    public function setValidatedItems($validatedItems)
    {
        $this->validatedItems = $validatedItems;
    
        return $this;
    }

    /**
     * Get validatedItems
     *
     * @return integer 
     */
    public function getValidatedItems()
    {
        return $this->validatedItems;
    }

    /**
     * Set Comments
     *
     * @param string $comments
     * @return Campaign
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;
    
        return $this;
    }

    /**
     * Get Comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * Add products
     *
     * @param \Suppliercheck\SupplierBundle\Entity\Product $products
     * @return Campaign
     */
    public function addProduct(\Suppliercheck\SupplierBundle\Entity\Product $products)
    {
        $this->products[] = $products;
    
        return $this;
    }

    /**
     * Remove products
     *
     * @param \Suppliercheck\SupplierBundle\Entity\Product $products
     */
    public function removeProduct(\Suppliercheck\SupplierBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }

    /**
     * @var integer
     */
    private $rejectedItems;


    /**
     * Set rejectedItems
     *
     * @param integer $rejectedItems
     * @return Campaign
     */
    public function setRejectedItems($rejectedItems)
    {
        $this->rejectedItems = $rejectedItems;
    
        return $this;
    }

    /**
     * Get rejectedItems
     *
     * @return integer 
     */
    public function getRejectedItems()
    {
        return $this->rejectedItems;
    }
    
    public function __toString()
    {
    	return $this->products;
    
    }
    
}