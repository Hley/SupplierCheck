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
    	

        // Get FileId to "import"
        $param=$request->request;
        $fileId=(int)trim($param->get("fileId"));

        $curType=trim($param->get("fileType"));
        $uploadedFile=$request->files->get("csvFile");

        // if upload was not ok, just redirect to "AdminStatWrongPArameters"
        if (!CSVTypes::existsType($curType) || $uploadedFile==null) return 0;
        // generate dummy dir
        $dummyImport=getcwd()."/dummyImport";
        $fname="directly.csv";
        $filename=$dummyImport."/".$fname;
        @mkdir($dummyImport);
        @unlink($filename);

        // move file to dummy filename
        $uploadedFile->move($dummyImport,$fname);            

        echo "Starting to Import ".$filename.", Type: ".CSVTypes::getNameOfType($curType)."<br/>";

        // open file
        $source = new StreamSource($filename);
        if ($source===false) die("Can't open filestream $filename");
        $file = $source->getFile();
        if ($file===false)   die("Can't open file $filename");

        // Create and configure the reader
        $csvReader = new CsvReader($file,";");
        if ($csvReader===false) die("Can't create csvReader $filename");
        $csvReader->setHeaderRowNumber(1);
        var_dump($csvReader);
                
            // this must be done to import CSVs where one of the data-field has CRs within!
       		$file->setFlags(\SplFileObject::READ_CSV  |
            \SplFileObject::SKIP_EMPTY |
            \SplFileObject::READ_AHEAD);
			echo "etape" ;
       		var_dump($file);
        // Set Database into "nonchecking Foreign Keys"
        $em=$this->getDoctrine()->getManager();
        $em->getConnection()->exec("SET FOREIGN_KEY_CHECKS=0;");

        // Create the workflow
        $workflow = new Workflow($csvReader);
        if ($workflow===false) die("Can't create workflow $filename");
        $curEntityClass=CSVTypes::getEntityClass($curType);
        $writer = new DoctrineWriter($em, $curEntityClass);
        $writer->setTruncate(false);

        $entityMetadata=$em->getClassMetadata($curEntityClass);
        $entityMetadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_AUTO);
       // $entityMetadata->setIdGeneratorType(Doctrine\ORM\Mapping\::GENERATOR_TYPE_NONE);

        $workflow->addWriter($writer);
		
        $workflow->process();
     
        // RESetting Database Check Status        
        $em->getConnection()->exec("SET FOREIGN_KEY_CHECKS=1;");

        // After successfully import, some files need special treatment --> Reset some DB fields
      /* if ($curType==CSVTypes::STOCK) {
          $q=$em->createQuery("UPDATE AdminAdminBundle:Product s
                            SET s.description = false");
            $q->execute();
        }*/
       // var_dump($workflow);
        return $this->render('SuppliercheckAdminBundle:Default:csv_import.html.twig');
    }

}
