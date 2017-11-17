<?php 

	include_once '../model/db.php';
	echo "<pre>";
	print_r($_REQUEST);
	$conn = db_connect();
	$condition = "`id` = '".$_REQUEST['id']."'";
	unset($_REQUEST['id']);
	$documents_submitted = $_REQUEST['documents_submitted'];
	$_REQUEST['documents_submitted'] = implode(",", $documents_submitted);
	if(update($_REQUEST, '`add_student`', $condition, $conn)){
		header('Location:../view/search.php?status=updated');
	}else{
		header('Location:../view/search.php?status=not_updated');
	}

 ?>