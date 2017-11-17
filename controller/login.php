<?php
	session_start();
	include_once '../model/db.php';
	$phone_number=$_REQUEST['user_id'];
	$con=db_connect();
	$condition=" `phone_no` = '".$phone_number."'";
	$selected_row = select('*', 'login',$condition, $con);
	$echo_val[0] = $selected_row[0]['user_type'];
	if ($selected_row == 'empty') {
		echo "error";
	}else{
		$string = '0123456789';
		$string_shuffled = str_shuffle($string);
		$otp_code = substr($string_shuffled, 1, 4);
		$_SESSION['user_id'] = $selected_row[0];
		$echo_val[1] = $otp_code;
		echo json_encode($echo_val);
	}