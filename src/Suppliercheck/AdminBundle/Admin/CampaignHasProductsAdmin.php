<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CampaignHasProductsAdmin extends Admin
{
	/**
	 * @param \Sonata\AdminBundle\Form\FormMapper $form
	 */
	protected function configureFormFields(FormMapper $form)
	{
		$form
		->add('csv', 'sonata_type_model_list', array(), array(
				'link_parameters' => array('context' => 'default')
		))
		;
	}

	/**
	 * {@inheritdoc}
	 */
	protected function configureListFields(ListMapper $list)
	{
		$list
		->add('client')
		->add('media')
		;
	}
}