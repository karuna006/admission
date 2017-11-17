<?php 

	include_once '../model/db.php';
	$con = db_connect();
	$final_array =search_data($_REQUEST);
	unset($final_array['0']['id']);
	$url_slug = send_values_to_drop_table($final_array['0'],$con);
	header($url_slug);
	


	function search_data($raw_data)
	{
		return select('*','add_student',$raw_data, db_connect());
	}

	function send_values_to_drop_table($old_values, $con){
		if(insert('`droped_student`', $old_values, $con))
		{
			if(delete('add_student', $_REQUEST, $con))
			{
				return 'Location:../view/search.php?status=deleted';
			}
			else
			{
				echo("Error description: " . mysqli_error($con));

				return 'Location:../view/search.php?status=not_deleted';
			}
		}	
		else
		{
				echo("Error description: " . mysqli_error($con));	
			return 'Location:../view/search.php?status=not_deleted';
		}
		}
 ?>