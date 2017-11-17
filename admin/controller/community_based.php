<?php 
	include_once '../model/db.php';
	function overall_details(){
			$conn = db_connect();
			$community = array('oc','bc','bcm','mbc','sc','sca','st' ,'others');
			$course_prefered = array('B.PHARAM','D.PHARAM','DIPLOMA IN HEALTH INSPECTOR' );
				$j=0;
			for ($i=0; $i < 3; $i++) { 
				$oc_100_bellow = 0;$oc_betw_100_120 = 0;$oc_betw_120_140 = 0;$oc_betw_140_160 = 0;$oc_betw_160_170 = 0;$oc_betw_170_175=0;$oc_abov_175 = 0;
				$bc_100_bellow = 0;$bc_betw_100_120 = 0;$bc_betw_120_140 = 0;$bc_betw_140_160 = 0;$bc_betw_160_170 = 0;$bc_betw_170_175=0;$bc_abov_175 = 0;
				$bcm_100_bellow = 0;$bcm_betw_100_120 = 0;$bcm_betw_120_140 = 0;$bcm_betw_140_160 = 0;$bcm_betw_160_170 = 0;$bcm_betw_170_175=0;$bcm_abov_175 = 0;
				$mbc_100_bellow = 0;$mbc_betw_100_120 = 0;$mbc_betw_120_140 = 0;$mbc_betw_140_160 = 0;$mbc_betw_160_170 = 0;$mbc_betw_170_175=0;$mbc_abov_175 = 0;
				$sc_100_bellow = 0;$sc_betw_100_120 = 0;$sc_betw_120_140 = 0;$sc_betw_140_160 = 0;$sc_betw_160_170 = 0;$sc_betw_170_175=0;$sc_abov_175 = 0;
				$sca_100_bellow = 0;$sca_betw_100_120 = 0;$sca_betw_120_140 = 0;$sca_betw_140_160 = 0;$sca_betw_160_170 = 0;$sca_betw_170_175=0;$sca_abov_175 = 0;
				$st_100_bellow = 0;$st_betw_100_120 = 0;$st_betw_120_140 = 0;$st_betw_140_160 = 0;$st_betw_160_170 = 0;$st_betw_170_175=0;$st_abov_175 = 0;
				$others_100_bellow = 0;$others_betw_100_120 = 0;$others_betw_120_140 = 0;$others_betw_140_160 = 0;$others_betw_160_170 = 0;$others_betw_170_175=0;$others_abov_175 = 0;
				$where = array('`course_prefered`' => $course_prefered[$i] );
				$raw_data = select('*','add_student',$where,$conn);
				if ($raw_data != 'empty') {
					foreach ($raw_data as $value) {
						if (!empty($value['cutoff'])) {
							if($value['community'] == 'OC'){
								if($value['cutoff'] <= 100 )
								{
									$oc_100_bellow += 1; 
								}
								elseif ($value['cutoff'] >= 100 && $value['cutoff'] <= 120) {
									$oc_betw_100_120 += 1;
								}
								elseif ($value['cutoff'] >= 120 && $value['cutoff'] <= 140) {
									$oc_betw_120_140 += 1;
								}
								elseif ($value['cutoff'] >= 140 && $value['cutoff'] <= 160) {
									$oc_betw_140_160 += 1;
								}
								elseif ($value['cutoff'] >= 160 && $value['cutoff'] <= 170) {
									$oc_betw_160_170 += 1;
								}
								elseif ($value['cutoff'] >= 170 && $value['cutoff'] <= 175) {
									$oc_betw_170_175 += 1;
								}
								elseif ($value['cutoff'] >= 175) {
									$oc_abov_175 += 1;
								}
							}
							elseif($value['community'] == 'BC'){
								if($value['cutoff'] <= 100 )
								{
									$bc_100_bellow += 1; 
								}
								elseif ($value['cutoff'] >= 100 && $value['cutoff'] <= 120) {
									$bc_betw_100_120 += 1;
								}
								elseif ($value['cutoff'] >= 120 && $value['cutoff'] <= 140) {
									$bc_betw_120_140 += 1;
								}
								elseif ($value['cutoff'] >= 140 && $value['cutoff'] <= 160) {
									$bc_betw_140_160 += 1;
								}
								elseif ($value['cutoff'] >= 160 && $value['cutoff'] <= 170) {
									$bc_betw_160_170 += 1;
								}
								elseif ($value['cutoff'] >= 170 && $value['cutoff'] <= 175) {
									$bc_betw_170_175 += 1;
								}
								elseif ($value['cutoff'] >= 175) {
									$bc_abov_175 += 1;
								}
							}
							elseif($value['community'] == 'BCM'){
								if($value['cutoff'] <= 100 )
								{
									$bcm_100_bellow += 1; 
								}
								elseif ($value['cutoff'] >= 100 && $value['cutoff'] <= 120) {
									$bcm_betw_100_120 += 1;
								}
								elseif ($value['cutoff'] >= 120 && $value['cutoff'] <= 140) {
									$bcm_betw_120_140 += 1;
								}
								elseif ($value['cutoff'] >= 140 && $value['cutoff'] <= 160) {
									$bcm_betw_140_160 += 1;
								}
								elseif ($value['cutoff'] >= 160 && $value['cutoff'] <= 170) {
									$bcm_betw_160_170 += 1;
								}
								elseif ($value['cutoff'] >= 170 && $value['cutoff'] <= 175) {
									$bcm_betw_170_175 += 1;
								}
								elseif ($value['cutoff'] >= 175) {
									$bcm_abov_175 += 1;
								}
							}
							elseif($value['community'] == 'MBC'){
								if($value['cutoff'] <= 100 )
								{
									$mbc_100_bellow += 1; 
								}
								elseif ($value['cutoff'] >= 100 && $value['cutoff'] <= 120) {
									$mbc_betw_100_120 += 1;
								}
								elseif ($value['cutoff'] >= 120 && $value['cutoff'] <= 140) {
									$mbc_betw_120_140 += 1;
								}
								elseif ($value['cutoff'] >= 140 && $value['cutoff'] <= 160) {
									$mbc_betw_140_160 += 1;
								}
								elseif ($value['cutoff'] >= 160 && $value['cutoff'] <= 170) {
									$mbc_betw_160_170 += 1;
								}
								elseif ($value['cutoff'] >= 170 && $value['cutoff'] <= 175) {
									$mbc_betw_170_175 += 1;
								}
								elseif ($value['cutoff'] >= 175) {
									$mbc_abov_175 += 1;
								}
							}
							elseif($value['community'] == 'SC'){
								if($value['cutoff'] <= 100 )
								{
									$sc_100_bellow += 1; 
								}
								elseif ($value['cutoff'] >= 100 && $value['cutoff'] <= 120) {
									$sc_betw_100_120 += 1;
								}
								elseif ($value['cutoff'] >= 120 && $value['cutoff'] <= 140) {
									$sc_betw_120_140 += 1;
								}
								elseif ($value['cutoff'] >= 140 && $value['cutoff'] <= 160) {
									$sc_betw_140_160 += 1;
								}
								elseif ($value['cutoff'] >= 160 && $value['cutoff'] <= 170) {
									$sc_betw_160_170 += 1;
								}
								elseif ($value['cutoff'] >= 170 && $value['cutoff'] <= 175) {
									$sc_betw_170_175 += 1;
								}
								elseif ($value['cutoff'] >= 175) {
									$sc_abov_175 += 1;
								}
							}
							elseif($value['community'] == 'SCA'){
								if($value['cutoff'] <= 100 )
								{
									$sca_100_bellow += 1; 
								}
								elseif ($value['cutoff'] >= 100 && $value['cutoff'] <= 120) {
									$sca_betw_100_120 += 1;
								}
								elseif ($value['cutoff'] >= 120 && $value['cutoff'] <= 140) {
									$sca_betw_120_140 += 1;
								}
								elseif ($value['cutoff'] >= 140 && $value['cutoff'] <= 160) {
									$sca_betw_140_160 += 1;
								}
								elseif ($value['cutoff'] >= 160 && $value['cutoff'] <= 170) {
									$sca_betw_160_170 += 1;
								}
								elseif ($value['cutoff'] >= 170 && $value['cutoff'] <= 175) {
									$sca_betw_170_175 += 1;
								}
								elseif ($value['cutoff'] >= 175) {
									$sca_abov_175 += 1;
								}
							}
							elseif($value['community'] == 'ST'){
								if($value['cutoff'] <= 100 )
								{
									$st_100_bellow += 1; 
								}
								elseif ($value['cutoff'] >= 100 && $value['cutoff'] <= 120) {
									$st_betw_100_120 += 1;
								}
								elseif ($value['cutoff'] >= 120 && $value['cutoff'] <= 140) {
									$st_betw_120_140 += 1;
								}
								elseif ($value['cutoff'] >= 140 && $value['cutoff'] <= 160) {
									$st_betw_140_160 += 1;
								}
								elseif ($value['cutoff'] >= 160 && $value['cutoff'] <= 170) {
									$st_betw_160_170 += 1;
								}
								elseif ($value['cutoff'] >= 170 && $value['cutoff'] <= 175) {
									$st_betw_170_175 += 1;
								}
								elseif ($value['cutoff'] >= 175) {
									$st_abov_175 += 1;
								}
							}
							elseif($value['community'] == 'others'){
								if($value['cutoff'] <= 100 )
								{
									$others_100_bellow += 1; 
								}
								elseif ($value['cutoff'] >= 100 && $value['cutoff'] <= 120) {
									$others_betw_100_120 += 1;
								}
								elseif ($value['cutoff'] >= 120 && $value['cutoff'] <= 140) {
									$others_betw_120_140 += 1;
								}
								elseif ($value['cutoff'] >= 140 && $value['cutoff'] <= 160) {
									$others_betw_140_160 += 1;
								}
								elseif ($value['cutoff'] >= 160 && $value['cutoff'] <= 170) {
									$others_betw_160_170 += 1;
								}
								elseif ($value['cutoff'] >= 170 && $value['cutoff'] <= 175) {
									$others_betw_170_175 += 1;
								}
								elseif ($value['cutoff'] >= 175) {
									$others_abov_175 += 1;
								}
							}
						}
					}
				}
				$final_array[$course_prefered[$i]] = array(
					$oc_100_bellow,$oc_betw_100_120,$oc_betw_120_140,$oc_betw_140_160,$oc_betw_160_170,$oc_betw_170_175,$oc_abov_175,
					$bc_100_bellow,$bc_betw_100_120,$bc_betw_120_140,$bc_betw_140_160,$bc_betw_160_170,$bc_betw_170_175,$bc_abov_175,
					$bcm_100_bellow,$bcm_betw_100_120,$bcm_betw_120_140,$bcm_betw_140_160,$bcm_betw_160_170,$bcm_betw_170_175,$bcm_abov_175,
					$mbc_100_bellow,$mbc_betw_100_120,$mbc_betw_120_140,$mbc_betw_140_160,$mbc_betw_160_170,$mbc_betw_170_175,$mbc_abov_175,
					$sc_100_bellow,$sc_betw_100_120,$sc_betw_120_140,$sc_betw_140_160,$sc_betw_160_170,$sc_betw_170_175,$sc_abov_175,
					$sca_100_bellow,$sca_betw_100_120,$sca_betw_120_140,$sca_betw_140_160,$sca_betw_160_170,$sca_betw_170_175,$sca_abov_175,
					$st_100_bellow,$st_betw_100_120,$st_betw_120_140,$st_betw_140_160,$st_betw_160_170,$st_betw_170_175,$st_abov_175,
					$others_100_bellow,$others_betw_100_120,$others_betw_120_140,$others_betw_140_160,$others_betw_160_170,$others_betw_170_175,$others_abov_175
				);
			}
			return $final_array;
			}