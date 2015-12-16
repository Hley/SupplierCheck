<?php
/**
 * @ORM\Table
 * @ORM\Entity
 */
class CampaignHasProducts
{
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var Campaign $campaign
	 *
	 * @ORM\ManyToOne(targetEntity="Campaign", inversedBy="campaignHasProducts")
	 */
	private $campaign;

	/**
	 * @var csv $csv
	 *
	 * @ORM\ManyToOne(targetEntity="Admin\AdminBundle\Entity\csv")
	 */
	private $csv;

	// SNIP
}