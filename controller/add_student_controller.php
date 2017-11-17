<?php 
		include_once '../model/db.php';
		$conn = db_connect();
		if ($_POST['course_prefered'] !='DIPLOMA IN HEALTH INSPECTOR') 
		{
			unset($_POST['12th1']);
		}
		else
		{
			$_POST['12th'] = $_POST['12th1'];
			unset($_POST['12th1']);
		}		
		$raw_data = $_POST;
		$documents_submitted='';
		// print_r($raw_data['documents_submitted']);
		if (!empty($raw_data['documents_submitted'])) 
		{
			foreach ($raw_data['documents_submitted'] as $value) 
			{
				$documents_submitted = $value.','.$documents_submitted;
			}	
		}
		$raw_data['documents_submitted'] = $documents_submitted;

		if ($raw_data['refered_by'] != 'Direct') 
		{
			$refer_id = select('id','refered',array('name' => $raw_data['refered_by']),$conn);
			$raw_data['refered_by'] = $refer_id[0]['id'];
		}
		$admission_id = get_admission_id($raw_data['course_prefered']);
		$raw_data['admission_id'] = $admission_id;
		$result = insert('`add_student`',$raw_data , $conn);
	 	if ($result) 
	 	{
			header('Location:../view/add_student.php?status=inserted&admit_id='.$admission_id.'');	
		}
		else
		{
			header('Location:../view/add_student.php?status=not_inserted');
		}
	


	function get_admission_id($course){
		$department = array('B.PHARAM','D.PHARAM','DIPLOMA IN HEALTH INSPECTOR' );
		$dept_code = array('BP','DP','HL');
			for ($i=0; $i < count($department); $i++) { 
				if($course == $department[$i]){
		 			$dept = $dept_code[$i];
		 		}
			}
	 	$where = "admission_id LIKE '17".$dept."%' ORDER BY id DESC LIMIT 1";
	 	$raw_data = select('admission_id','add_student', $where,db_connect());
	 	if ($raw_data != 'empty') {
	 		$inc_ad_id = 0;
			$explode_ad_id = explode('-', $raw_data[0]['admission_id']);
			$inc_ad_id = $explode_ad_id[1] + 1;
			$final_admission_id = implode('-',array($explode_ad_id[0] , $inc_ad_id));	
	 	}
	 	else{
	 		$final_admission_id = "17".$dept."1";
	 	}
	 	return $final_admission_id;
	 }