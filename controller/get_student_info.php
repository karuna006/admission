<?php 
include_once '../model/db.php';
function student_details()
{
	return select('*','add_student','1',db_connect());
}


