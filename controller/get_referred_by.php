<?php 
	include_once '../model/db.php';
	function referred_by(){
		return select('*','refered','1',db_connect());
	}
	function referred_by_ids(){
		return select('*','refered','1',db_connect());
	}
	function direct_count(){
		$where = '`refered_by` = "Direct"';
		$raw_data = select('*','add_student',$where,db_connect());
		return count($raw_data);
	}

