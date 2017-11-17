<?php 
	include_once '../model/db.php';
	
	$con = db_connect();
	$user_name = sanitize($_POST['user_name'], $con);
	$password = sanitize($_POST['password'], $con);
	$raw_data = get_raw_data($user_name, $password, $con);
	print_r($raw_data);
	if($raw_data!="empty"){
		create_session($raw_data);
		if ($raw_data[0]['user_type'] == 'admin') 
		{
			
			header('Location: ../admin/index.php');	
		}
		elseif ($raw_data[0]['user_type'] == 'user') 
		{
			header('Location: ../view/add_student.php');	
		}
	}else{
		
		header('Location: ../view/login.php?type=login_error');
	}

	
	function get_raw_data($user_name, $password, $con){
		$selected_row = select('*', 'login', array("userid"=>$user_name, "password"=>$password), $con);
		return $selected_row;
	}

	function create_session($data){
		session_start();
		$user_details = $data['0'];
		$_SESSION["user_details"] = $user_details;
		if(isset($_SESSION['user_details'])){
			return true;
		}
		return false;
	}


