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


class CSVController extends Controller
{


    public function importFileAction(Request $request) {
    	

    	// Create and configure the reader
    	$file = new \SplFileObject('directly.csv',"r");
    	
    	//$file->setFlags(SplFileObject::READ_CSV);
    	$csvReader = new CsvReader($file, "," );
    	var_dump($csvReader);
    	
    	// Tell the reader that the first row in the CSV file contains column headers
    	$csvReader->setHeaderRowNumber(0);
    	
    	// Create the workflow from the reader
    	$workflow = new Workflow($csvReader);
    	
    	// Create a writer: you need Doctrine’s EntityManager.
    	$em=$this->getDoctrine()->getManager();
    	$doctrineWriter = new DoctrineWriter($em, 'SuppliercheckAdminBundle:Product');
    	$workflow->addWriter($doctrineWriter);
    	$doctrineWriter->setTruncate(false);
    	
    	
    	
    	//$entityMetadata=$em->getClassMetadata('AdminAdminBundle:Product');
    	//$entityMetadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_AUTO);
    	 
    	 
    	
    	// Process the workflow
    	$workflow->process();

		//var_dump($workflow);
        return $this->render('SuppliercheckAdminBundle:Default:csv_import.html.twig');
    }

}
