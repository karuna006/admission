<?php 
	function get_student_data()
	{
		return select('*','add_student',"",db_connect());
	}









 ?>