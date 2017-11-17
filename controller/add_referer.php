<?php 
include_once '../model/db.php';
			$conn = db_connect();
	// echo "<pre>";
		$raw_data = $_POST;
	// print_r($raw_data);
	$result = insert('`refered`',$raw_data , $conn);
 	if ($result) {
		// echo "inserted";
	 header('Location:../view/refered_by.php?status=inserted');	
		}else
		// echo "not inserted";
	 header('Location:../view/refered_by.php?status=not_inserted');
