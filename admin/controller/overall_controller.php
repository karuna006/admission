<?php 
	include_once '../model/db.php';
	
		function overall_details(){
			$conn = db_connect();
			
			$course_prefered = array('B.PHARAM','D.PHARAM','DIPLOMA IN HEALTH INSPECTOR' );
			for ($i=0; $i < 3; $i++) { 
					$management = 0;$govt = 0;$OC = 0;$BC = 0;$BCM = 0;$MBC = 0;$SC = 0;$SCA = 0;$ST = 0;$others = 0; $tamil = 0;$english = 0; 
					$where = array('`course_prefered`' => $course_prefered[$i] );
					$course_prefered_count[$course_prefered[$i]] = count(select( '*', 'add_student', $where, $conn));
					$raw_data = select('*','add_student',$where,$conn);
					if ($raw_data != 'empty') {
						foreach ($raw_data as $value) {
							if($value['quota'] == 'management')
							{
								$management += 1; 
							}
							elseif ($value['quota'] == 'govt_with_fg' || $value['quota'] == 'govt_without_fg') {
								$govt += 1;
							}
							if($value['community'] == 'OC'){
								$OC += 1;
							}
							elseif($value['community'] == 'BC'){
								$BC += 1;
							}
							elseif($value['community'] == 'BCM'){
								$BCM += 1;
							}
							elseif($value['community'] == 'MBC'){
								$MBC += 1;
							}
							elseif($value['community'] == 'SC'){
								$SC += 1;
							}
							elseif($value['community'] == 'SCA'){
								$SCA += 1;
							}
							elseif($value['community'] == 'ST'){
								$ST += 1;
							}
							elseif($value['community'] == 'others'){
								$others += 1;
							}
							if ($value['medium_of_instruction'] == 'Tamil') {
									$tamil +=1;
							}	
							elseif ($value['medium_of_instruction'] == 'English') {
								$english +=1;
							}
						}
					}
					$final_array[$course_prefered[$i]] = array($management, $govt, $OC, $BC,$BCM,$MBC,$SC,$SCA,$ST,$others,$tamil,$english);
			}
			return $final_array;
		}
		function totalcount()
		{
			$conn = db_connect();
			$management = 0;$govt = 0;$OC = 0;$BC = 0;$BCM = 0;$MBC = 0;$SC = 0;$SCA = 0;$ST = 0;$others = 0; $tamil = 0;$english =0; 
			$course_prefered = array('B.PHARAM','D.PHARAM','DIPLOMA IN HEALTH INSPECTOR' );
			for ($i=0; $i < 3; $i++) 
			{ 
				$where = array('`course_prefered`' => $course_prefered[$i] );
				$raw_data = select( '*', 'add_student', $where, $conn);
				if ($raw_data == 'empty') {
					$course_prefered_count[$course_prefered[$i]] = 0;	
				}
				else{
					$course_prefered_count[$course_prefered[$i]] = count($raw_data);
				}
			}
			return $course_prefered_count;
			
		}
		function fees_based_count()
		{
			$conn = db_connect();
			$course_prefered = array('B.PHARAM','D.PHARAM','DIPLOMA IN HEALTH INSPECTOR' );
			for ($i=0; $i < 3; $i++) { 
				$less_then_two=0;$less_then_five=0;$less_then_ten=0;$greater_then_ten=0;
				$where = array('`course_prefered`' => $course_prefered[$i] );
				$course_prefered_count[$course_prefered[$i]] = count(select( '*', 'add_student', $where, $conn));
				$raw_data = select('*','add_student',$where,$conn);
				if ($raw_data != 'empty') {
					foreach ($raw_data as $value) {
						if($value['advance_paid'] <= 2000 )
						{
							$less_then_two += 1; 
						}
						elseif ($value['advance_paid'] > 2000 && $value['advance_paid'] < 5000) {
							$less_then_five += 1;
						}
						elseif ($value['advance_paid'] >= 5000 && $value['advance_paid'] < 10000) {
							$less_then_ten += 1;
						}elseif ($value['advance_paid'] >= 10000) {
							$greater_then_ten += 1;
						}
					}
				}
				$final_fees_count[$course_prefered[$i]] = array($less_then_two,$less_then_five,$less_then_ten,$greater_then_ten);
			}
			$total[0] = $final_fees_count['B.PHARAM'][0]+$final_fees_count['D.PHARAM'][0]+$final_fees_count['DIPLOMA IN HEALTH INSPECTOR'][0];
			$total[1] = $final_fees_count['B.PHARAM'][1]+$final_fees_count['D.PHARAM'][1]+$final_fees_count['DIPLOMA IN HEALTH INSPECTOR'][1];
			$total[2] = $final_fees_count['B.PHARAM'][2]+$final_fees_count['D.PHARAM'][2]+$final_fees_count['DIPLOMA IN HEALTH INSPECTOR'][2];
			$total[3] = $final_fees_count['B.PHARAM'][3]+$final_fees_count['D.PHARAM'][3]+$final_fees_count['DIPLOMA IN HEALTH INSPECTOR'][3];
			$final_fees_count['TOTAL'] = $total;

			return $final_fees_count;
		}

		function total_bus_count(){
			$conn = db_connect();
			$total_value = select('count(*)','`add_student`','`bus_hostel` = "bus"', $conn);
			echo $total_value[0]['count(*)'];
		}

		function total_hostal_girls(){
			$conn = db_connect();
			$total_value = select('count(*)','`add_student`','`bus_hostel` = "hostel" and `gender`="female"', $conn);
			echo $total_value[0]['count(*)'];
		}
		function total_hostal_boys(){
			$conn = db_connect();
			$total_value = select('count(*)','`add_student`','`bus_hostel` = "hostel" and `gender`="male"', $conn);
			echo $total_value[0]['count(*)'];
		}