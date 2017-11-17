<?php 
	include_once '../model/db.php';
	include_once '../model/PHPExcel/PHPExcel.php';
	require_once '../model/PHPExcel/PHPExcel/IOFactory.php';
	$objPHPExcel = new PHPExcel();
	$conn = db_connect();
	$raw_data = $_POST;
	echo "<pre>";
	$i=1;
	foreach ($raw_data['columns'] as $value) {
		if ($i == 1) {
			$column = $value;	
			++$i;
		}
		else{
			$column = $column.",".$value;
		}
	}
	$final_data = select($column,'add_student','1',$conn);
	
	foreach ($final_data as $key => $value) {
		$where = array('id' => $value['refered_by']);
		$temp = select('name','refered',$where,$conn);
		if ($temp == 'empty') {
			$final_data[$key]['refered_by'] = 'empty';	
		}
		else{
			$final_data[$key]['refered_by'] = $temp[0]['name'];
		}
	}
	// print_r($final_data);
	$column_count = count($raw_data['columns']);
	$alphabet = 'A';
	$j=0;
	$i=1;
	$objPHPExcel->getActiveSheet()->getStyle($i
		)->getFont()->setBold(true);
		foreach ($raw_data['columns'] as $value) {
			$objPHPExcel->getActiveSheet()->getColumnDimension($alphabet)->setWidth(20);
			$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow($j, $i, $value);
			++$alphabet;
			++$j;
		}	
	++$i;
		foreach ($final_data as $value) {
			$j=0;
			foreach ($value as $value_1) {
				$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow($j, $i, $value_1);
				++$j;
			}
			++$i;
		}
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	ob_end_clean();
	header('Content-type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename="sscet.xlsx"');
	$objWriter->save('php://output');

	exit();

	header('Location:../view/queries.php');
