<?php
require 'vendor/autoload.php';

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

if((isset($_POST["submit"])) && (isset($_FILES['excel']))){
    $data=date('Y-m-d');
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
      if($fileExtension==="xlsx"){
			$newFileName = "test".date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory =  $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);


            

            $spreadsheet = IOFactory::load($targetDirectory);
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            print_r($sheetData);
            $columnCount = count($sheetData[0]);
			$reader = new Spreadsheet($targetDirectory);
            echo$columnCount;
			foreach($reader as $key => $row){
               
			}
			

        }

}
?>