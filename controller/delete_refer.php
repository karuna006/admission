<?php 
	include_once '../model/db.php';
	$conn = db_connect();
	$raw_data = $_GET;
	// print_r($raw_data);
		delete('refered', $raw_data,$conn);
		header('Location:..//view/refered_by.php');