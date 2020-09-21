<?php
//(cols/line)
$i = 2; //Start the loop from line 2
//$extractedData
while ($PHPExcel_IOFactory->getActiveSheet()->getCellByColumnAndRow(0, $i)->getValue() != ""){
	$line = array(
	  'firstName'   => $PHPExcel_IOFactory->getActiveSheet()->getCellByColumnAndRow(0, $i)->getValue(),
	  'lastName'    => $PHPExcel_IOFactory->getActiveSheet()->getCellByColumnAndRow(1, $i)->getValue(),
	  'email'       => $PHPExcel_IOFactory->getActiveSheet()->getCellByColumnAndRow(2, $i)->getValue(),
	  'phoneNumber' => $PHPExcel_IOFactory->getActiveSheet()->getCellByColumnAndRow(3, $i)->getValue(),
	  'dateX'       => PHPExcel_Style_NumberFormat::toFormattedString($PHPExcel_IOFactory->getActiveSheet()->getCellByColumnAndRow(4, $i)->getValue(), 'yyyy-mm-dd'),
	);

    $extractedData[$i] = $line;
    $i++;
}

var_dump($extractedData);

if(is_array($extractedData) && count($extractedData)){
	/*$PDO = new PDO('mysql:host=localhost;dbname=YOUR_DB_NAME', 'root', '');
	$statement = "INSERT INTO studens (first_name, last_name, email, phone_number, date_x, file_name) VALUES ";
	$statementValues = array();
	foreach($extractedData as $line_key => $line){
		$statementValue			= "('".$line['firstName']."', '".$line['lastName']."', '".$line['email']."', '".$line['phoneNumber']."', '".$line['dateX']."', '".$sourceFileName."')";
		$PDO->exec($statement.' '.$statementValue);
	}*/
}
?>
