<?php

namespace Suppliercheck\UserBundle\Entity;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /*
     * Modification Ashley 
     */
    
     /**
     * @ORM\ManyToMany(targetEntity="Suppliercheck\UserBundle\Entity\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;
    
    
    
    
   
    
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    #protected $groups;

    /**
     * Constructor
     *//*
    public function __construct()
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }*/
    
    /**
     * Add groups
     *
     * @param \Suppliercheck\UserBundle\Entity\Group $groups
     * @return User
     */
    /*public function addGroup(\Suppliercheck\UserBundle\Entity\Group $groups)
    {
        $this->groups[] = $groups;
    
        return $this;
    }*/

    /**
     * Remove groups
     *
     * @param \Suppliercheck\UserBundle\Entity\Group $groups
     *//*
    public function removeGroup(\Suppliercheck\UserBundle\Entity\Group $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     *//*
    public function getGroups()
    {
        return $this->groups;
    }*/

 
}