<?php
 
namespace Suppliercheck\AdminBundle\Controller;
 
 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Ddeboer\DataImport\Reader\CsvReader;
use Ddeboer\DataImport\Workflow;
use Ddeboer\DataImport\Writer\DoctrineWriter;
use Ddeboer\DataImport\ItemConverter\MappingItemConverter;
use Ddeboer\DataImport\ValueConverter\DateTimeValueConverter;
use Ddeboer\DataImport\Reader\DoctrineReader;
use Suppliercheck\AdminBundle\Entity\Product;
use Suppliercheck\AdminBundle\Entity\Comment;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sonata\DoctrineORMAdminBundle\Datagrid\ProxyQuery as ProxyQueryInterface; 

use Sonata\AdminBundle\Controller\CRUDController as Controller;


class ProductController extends Controller {
	
		public function validateAction()
	{
		$object = $this->admin->getSubject();

		if (!$object) {
			throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
		}
		$object->setIsValid(true);
		$object->setChecked(true);
		$object->setIsRejected(false);
		$object = $this->admin->update($object);
		
		
		$this->addFlash('sonata_flash_success', 'Validated successfully');
	
		return new RedirectResponse($this->admin->generateUrl('list'));
	}
	
	
	public function refuseAction()
	{
		$object = $this->admin->getSubject();
	
		if (!$object) {
			throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
		}
	
		$object->setIsRejected(true);
		$object->setChecked(true);
		$object->setIsValid(false);
		
		$object = $this->admin->update($object);
		$this->addFlash('sonata_flash_error', 'refused successfully');
	
		return new RedirectResponse($this->admin->generateUrl('list'));
	}
	
	
	public function batchActionValidate(ProxyQueryInterface $selectedModelQuery)
	{
// 		if (!$this->admin->isGranted('EDIT') || !$this->admin->isGranted('DELETE'))
// 		{
// 			throw new AccessDeniedException();
// 		}
	
		$request = $this->get('request');
		$modelManager = $this->admin->getModelManager();
	
// 		$target = $modelManager->find($this->admin->getClass(), $request->get('value'));
	
// 		if( $target === null){
// 			$this->addFlash('sonata_flash_info', 'flash_batch_merge_no_target');
	
// 			return new RedirectResponse(
// 					$this->admin->generateUrl('list',$this->admin->getFilterParameters())
// 			);
// 		}
	
		$selectedModels = $selectedModelQuery->execute();
	
		// do the merge work here
	
		try {
			foreach ($selectedModels as $selectedModel) {
// 				$modelManager->delete($selectedModel);

					$selectedModel->setIsRejected(false);
					$selectedModel->setChecked(true);
					$selectedModel->setIsValid(true);
// 				$modelManager = $this->admin->update($object);
				
			}
	
			$modelManager->update($selectedModel);
		} catch (\Exception $e) {
			$this->addFlash('sonata_flash_error', 'Error: Please select all products');
	
			return new RedirectResponse(
					$this->admin->generateUrl('list',$this->admin->getFilterParameters())
			);
		}
	
		$this->addFlash('sonata_flash_success', 'All products are validated');
	
// 		return new RedirectResponse(
// 				$this->admin->generateUrl('list',$this->admin->getFilterParameters())
// 		);
		return new RedirectResponse($this->container->get('router')->generate('admin_suppliercheck_admin_products_validation_list'));
		
	}
	

	public function batchActionRefuse(ProxyQueryInterface $selectedModelQuery)
	{
		// 		if (!$this->admin->isGranted('EDIT') || !$this->admin->isGranted('DELETE'))
			// 		{
			// 			throw new AccessDeniedException();
			// 		}
	
			$request = $this->get('request');
			$modelManager = $this->admin->getModelManager();
	
			// 		$target = $modelManager->find($this->admin->getClass(), $request->get('value'));
	
			// 		if( $target === null){
			// 			$this->addFlash('sonata_flash_info', 'flash_batch_merge_no_target');
	
			// 			return new RedirectResponse(
			// 					$this->admin->generateUrl('list',$this->admin->getFilterParameters())
			// 			);
			// 		}
	
			$selectedModels = $selectedModelQuery->execute();
	
			// do the merge work here
	
			try {
				foreach ($selectedModels as $selectedModel) {
					// 				$modelManager->delete($selectedModel);
	
					$selectedModel->setIsRejected(true);
					$selectedModel->setChecked(true);
					$selectedModel->setIsValidated(false);
					// 				$modelManager = $this->admin->update($object);
	
				}
	
				$modelManager->update($selectedModel);
			} catch (\Exception $e) {
				$this->addFlash('sonata_flash_error', 'Error: Please select all products');
	
				return new RedirectResponse(
						$this->admin->generateUrl('list',$this->admin->getFilterParameters())
				);
			}
	
			$this->addFlash('sonata_flash_error', 'All products are validated');
	
			// 		return new RedirectResponse(
			// 				$this->admin->generateUrl('list',$this->admin->getFilterParameters())
			// 		);
			return new RedirectResponse($this->container->get('router')->generate('admin_suppliercheck_admin_products_validation_list'));
	
	}
	
}