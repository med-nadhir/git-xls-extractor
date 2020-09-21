<?php
require('libs/PHPExcel.php');
$PHPExcel					= new PHPExcel();
$PHPExcel_Reader_Excel2007	= new PHPExcel_Reader_Excel2007();
$PHPExcel_Reader_Excel2007->setReadDataOnly(true);
$sourceFileName 			= "sources/01.xls";
$PHPExcel_IOFactory 		= PHPExcel_IOFactory::load($sourceFileName);

//Model d'extraction:
$model = 'model-1';
$extractedData = array();
if(file_exists('inc/extract-models/'.$model.'.php')){
	require_once 'inc/extract-models/'.$model.'.php';
}
var_dump($extractedData);
exit;
