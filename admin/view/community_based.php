<?php 
	include_once 'header.php';
	include_once '../controller/community_based.php';
	$raw_data = overall_details();
	
	$final_data_bp = array_chunk($raw_data['B.PHARAM'],7);
	$final_data_dp = array_chunk($raw_data['D.PHARAM'],7);
	$final_data_hl = array_chunk($raw_data['DIPLOMA IN HEALTH INSPECTOR'],7);	
	$community = array('OC','BC','BCM','MBC','SC','SCA','ST' ,'OTHERS', 'TOTAL');

	//B.PHARAM TOTAL CODE
	$total_cse[0] = $final_data_bp[0][0]+$final_data_bp[1][0]+$final_data_bp[2][0]+$final_data_bp[3][0]+$final_data_bp[4][0]+$final_data_bp[5][0]+$final_data_bp[6][0]+$final_data_bp[7][0];
	$total_cse[1] = $final_data_bp[0][1]+$final_data_bp[1][1]+$final_data_bp[2][1]+$final_data_bp[3][1]+$final_data_bp[4][1]+$final_data_bp[5][1]+$final_data_bp[6][1]+$final_data_bp[7][1];
	$total_cse[2] = $final_data_bp[0][2]+$final_data_bp[1][2]+$final_data_bp[2][2]+$final_data_bp[3][2]+$final_data_bp[4][2]+$final_data_bp[5][2]+$final_data_bp[6][2]+$final_data_bp[7][2];
	$total_cse[3] = $final_data_bp[0][3]+$final_data_bp[1][3]+$final_data_bp[2][3]+$final_data_bp[3][3]+$final_data_bp[4][3]+$final_data_bp[5][3]+$final_data_bp[6][3]+$final_data_bp[7][3];
	$total_cse[4] = $final_data_bp[0][4]+$final_data_bp[1][4]+$final_data_bp[2][4]+$final_data_bp[3][4]+$final_data_bp[4][4]+$final_data_bp[5][4]+$final_data_bp[6][4]+$final_data_bp[7][4];
	$total_cse[5] = $final_data_bp[0][5]+$final_data_bp[1][5]+$final_data_bp[2][5]+$final_data_bp[3][5]+$final_data_bp[4][5]+$final_data_bp[5][5]+$final_data_bp[6][5]+$final_data_bp[7][5];
	$total_cse[6] = $final_data_bp[0][6]+$final_data_bp[1][6]+$final_data_bp[2][6]+$final_data_bp[3][6]+$final_data_bp[4][6]+$final_data_bp[5][6]+$final_data_bp[6][6]+$final_data_bp[7][6];

	$final_data_bp[] = $total_cse;

	//D.PHARAM TOTAL CODE
	$total_ece[0] = $final_data_dp[0][0]+$final_data_dp[1][0]+$final_data_dp[2][0]+$final_data_dp[3][0]+$final_data_dp[4][0]+$final_data_dp[5][0]+$final_data_dp[6][0]+$final_data_dp[7][0];
	$total_ece[1] = $final_data_dp[0][1]+$final_data_dp[1][1]+$final_data_dp[2][1]+$final_data_dp[3][1]+$final_data_dp[4][1]+$final_data_dp[5][1]+$final_data_dp[6][1]+$final_data_dp[7][1];
	$total_ece[2] = $final_data_dp[0][2]+$final_data_dp[1][2]+$final_data_dp[2][2]+$final_data_dp[3][2]+$final_data_dp[4][2]+$final_data_dp[5][2]+$final_data_dp[6][2]+$final_data_dp[7][2];
	$total_ece[3] = $final_data_dp[0][3]+$final_data_dp[1][3]+$final_data_dp[2][3]+$final_data_dp[3][3]+$final_data_dp[4][3]+$final_data_dp[5][3]+$final_data_dp[6][3]+$final_data_dp[7][3];
	$total_ece[4] = $final_data_dp[0][4]+$final_data_dp[1][4]+$final_data_dp[2][4]+$final_data_dp[3][4]+$final_data_dp[4][4]+$final_data_dp[5][4]+$final_data_dp[6][4]+$final_data_dp[7][4];
	$total_ece[5] = $final_data_dp[0][5]+$final_data_dp[1][5]+$final_data_dp[2][5]+$final_data_dp[3][5]+$final_data_dp[4][5]+$final_data_dp[5][5]+$final_data_dp[6][5]+$final_data_dp[7][5];
	$total_ece[6] = $final_data_dp[0][6]+$final_data_dp[1][6]+$final_data_dp[2][6]+$final_data_dp[3][6]+$final_data_dp[4][6]+$final_data_dp[5][6]+$final_data_dp[6][6]+$final_data_dp[7][6];
	$final_data_dp[] = $total_ece;

	//HEALTH INSPECTOR TOTAL CODE
	$total_agri[0] = $final_data_hl[0][0]+$final_data_hl[1][0]+$final_data_hl[2][0]+$final_data_hl[3][0]+$final_data_hl[4][0]+$final_data_hl[5][0]+$final_data_hl[6][0]+$final_data_hl[7][0];
	$total_agri[1] = $final_data_hl[0][1]+$final_data_hl[1][1]+$final_data_hl[2][1]+$final_data_hl[3][1]+$final_data_hl[4][1]+$final_data_hl[5][1]+$final_data_hl[6][1]+$final_data_hl[7][1];
	$total_agri[2] = $final_data_hl[0][2]+$final_data_hl[1][2]+$final_data_hl[2][2]+$final_data_hl[3][2]+$final_data_hl[4][2]+$final_data_hl[5][2]+$final_data_hl[6][2]+$final_data_hl[7][2];
	$total_agri[3] = $final_data_hl[0][3]+$final_data_hl[1][3]+$final_data_hl[2][3]+$final_data_hl[3][3]+$final_data_hl[4][3]+$final_data_hl[5][3]+$final_data_hl[6][3]+$final_data_hl[7][3];
	$total_agri[4] = $final_data_hl[0][4]+$final_data_hl[1][4]+$final_data_hl[2][4]+$final_data_hl[3][4]+$final_data_hl[4][4]+$final_data_hl[5][4]+$final_data_hl[6][4]+$final_data_hl[7][4];
	$total_agri[5] = $final_data_hl[0][5]+$final_data_hl[1][5]+$final_data_hl[2][5]+$final_data_hl[3][5]+$final_data_hl[4][5]+$final_data_hl[5][5]+$final_data_hl[6][5]+$final_data_hl[7][5];
	$total_agri[6] = $final_data_hl[0][6]+$final_data_hl[1][6]+$final_data_hl[2][6]+$final_data_hl[3][6]+$final_data_hl[4][6]+$final_data_hl[5][6]+$final_data_hl[6][6]+$final_data_hl[7][6];
	$final_data_hl[] = $total_agri;	

	//Community TOTAL B.PHARAM
	$final_data_bp[0][] = array_sum($final_data_bp[0]);
	$final_data_bp[1][] = array_sum($final_data_bp[1]);
	$final_data_bp[2][] = array_sum($final_data_bp[2]);
	$final_data_bp[3][] = array_sum($final_data_bp[3]);
	$final_data_bp[4][] = array_sum($final_data_bp[4]);
	$final_data_bp[5][] = array_sum($final_data_bp[5]);
	$final_data_bp[6][] = array_sum($final_data_bp[6]);
	$final_data_bp[7][] = array_sum($final_data_bp[7]);
	$final_data_bp[8][] = array_sum($final_data_bp[8]);

	//Community TOTAL D.PHARAM
	$final_data_dp[0][] = array_sum($final_data_dp[0]);
	$final_data_dp[1][] = array_sum($final_data_dp[1]);
	$final_data_dp[2][] = array_sum($final_data_dp[2]);
	$final_data_dp[3][] = array_sum($final_data_dp[3]);
	$final_data_dp[4][] = array_sum($final_data_dp[4]);
	$final_data_dp[5][] = array_sum($final_data_dp[5]);
	$final_data_dp[6][] = array_sum($final_data_dp[6]);
	$final_data_dp[7][] = array_sum($final_data_dp[7]);
	$final_data_dp[8][] = array_sum($final_data_dp[8]);

	//Community TOTAL HEALTH INSPECTOR
	$final_data_hl[0][] = array_sum($final_data_hl[0]);
	$final_data_hl[1][] = array_sum($final_data_hl[1]);
	$final_data_hl[2][] = array_sum($final_data_hl[2]);
	$final_data_hl[3][] = array_sum($final_data_hl[3]);
	$final_data_hl[4][] = array_sum($final_data_hl[4]);
	$final_data_hl[5][] = array_sum($final_data_hl[5]);
	$final_data_hl[6][] = array_sum($final_data_hl[6]);
	$final_data_hl[7][] = array_sum($final_data_hl[7]);
	$final_data_hl[8][] = array_sum($final_data_hl[8]);	
?>

	<button class="dpt_btn form-control btn">Over All</button><hr>
	<div id="DPT" class="row">
	    <div class="col-lg-12">
	        <section class="panel">
	            <header class="panel-heading">
	                Over All
	            </header>
	            <div class="panel-body">
	                <section id="no-more-tables">
	                    <table class="table table-bordered table-striped table-condensed cf">
	                        <thead class="cf">
	                            <tr>
	                                <th style="width: 3%;">S.no</th>
	                                <th>Course</th>
	                                <th><=100</th>
	                                <th>100.25 - 120.00</th>
	                                <th>120.25 - 140.00</th>
	                                <th>140.00 - 160.00</th>
	                                <th>160.25 - 170.00</th>
	                                <th>170.25 - 174.99</th>
	                                <th>175 +</th>
	                                <th>Total</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<tr>
	                                <td style="width: 3%;">1</td>
	                                <td>B.PHARAM</td>
	                                <td><?php echo $final_data_bp['8']['0']; ?></td>
	                                <td><?php echo $final_data_bp['8']['1']; ?></td>
	                                <td><?php echo $final_data_bp['8']['2']; ?></td>
	                                <td><?php echo $final_data_bp['8']['3']; ?></td>
	                                <td><?php echo $final_data_bp['8']['4']; ?></td>
	                                <td><?php echo $final_data_bp['8']['5']; ?></td>
	                                <td><?php echo $final_data_bp['8']['6']; ?></th>
	                                <td><?php echo $final_data_bp['8']['7']; ?></th>
	                            </tr>
	                            <tr>
	                                <td style="width: 3%;">2</td>
	                                <td>D.PHARAM</td>
	                                <td><?php echo $final_data_dp['8']['0']; ?></td>
	                                <td><?php echo $final_data_dp['8']['1']; ?></td>
	                                <td><?php echo $final_data_dp['8']['2']; ?></td>
	                                <td><?php echo $final_data_dp['8']['3']; ?></td>
	                                <td><?php echo $final_data_dp['8']['4']; ?></td>
	                                <td><?php echo $final_data_dp['8']['5']; ?></td>
	                                <td><?php echo $final_data_dp['8']['6']; ?></th>
	                                <td><?php echo $final_data_dp['8']['7']; ?></th>
	                            </tr>
	                            <tr>
	                                <td style="width: 3%;">3</td>
	                                <td>HEALTH INSPECTOR</td>
	                                <td><?php echo $final_data_hl['8']['0']; ?></td>
	                                <td><?php echo $final_data_hl['8']['1']; ?></td>
	                                <td><?php echo $final_data_hl['8']['2']; ?></td>
	                                <td><?php echo $final_data_hl['8']['3']; ?></td>
	                                <td><?php echo $final_data_hl['8']['4']; ?></td>
	                                <td><?php echo $final_data_hl['8']['5']; ?></td>
	                                <td><?php echo $final_data_hl['8']['6']; ?></th>
	                                <td><?php echo $final_data_hl['8']['7']; ?></th>
	                            </tr>	                            
	                            <tr>
	                                <td style="width: 3%;">4</td>
	                                <td>Total</td>
	                                <td><?php echo $final_data_bp['8']['0']+$final_data_dp['8']['0']+$final_data_hl['8']['0']; ?></td>
	                                <td><?php echo $final_data_bp['8']['1']+$final_data_dp['8']['1']+$final_data_hl['8']['1']; ?></td>
	                                <td><?php echo $final_data_bp['8']['2']+$final_data_dp['8']['2']+$final_data_hl['8']['2']; ?></td>
	                               	<td><?php echo $final_data_bp['8']['3']+$final_data_dp['8']['3']+$final_data_hl['8']['3']; ?></td>
	                                <td><?php echo $final_data_bp['8']['4']+$final_data_dp['8']['4']+$final_data_hl['8']['4']; ?></td>
	                                <td><?php echo $final_data_bp['8']['5']+$final_data_dp['8']['5']+$final_data_hl['8']['5']; ?></td>
	                                <td><?php echo $final_data_bp['8']['6']+$final_data_dp['8']['6']+$final_data_hl['8']['6']; ?></td>
	                                <td><?php echo $final_data_bp['8']['7']+$final_data_dp['8']['7']+$final_data_hl['8']['7']; ?></td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </section>
	            </div>
	        </section>
	    </div>
	</div>



	<button class="cse_btn form-control btn">B.PHARAM</button><hr>
	<div id="CSE" class="row">
	    <div class="col-lg-12">
	        <section class="panel">
	            <header class="panel-heading">
	                B.PHARAM
	            </header>
	            <div class="panel-body">
	                <section id="no-more-tables">
	                    <table class="table table-bordered table-striped table-condensed cf">
	                        <thead class="cf">
	                            <tr>
	                                <th style="width: 3%;">S.no</th>
	                                <th>Community</th>
	                                <th><=100</th>
	                                <th>100.25 - 120.00</th>
	                                <th>120.25 - 140.00</th>
	                                <th>140.00 - 160.00</th>
	                                <th>160.25 - 170.00</th>
	                                <th>170.25 - 174.99</th>
	                                <th>175 +</th>
	                                <th>Total</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php 
	                        		$i=1;
	                        		foreach ($final_data_bp as $value) {
	                        			echo "<tr>";
	                        				echo "<td>".$i."</td>";
	                        				echo "<td>".$community[$i-1]."</td>";	
	                        				echo "<td>".$value[0]."</td>";
	                        				echo "<td>".$value[1]."</td>";
	                        				echo "<td>".$value[2]."</td>";
	                        				echo "<td>".$value[3]."</td>";
	                        				echo "<td>".$value[4]."</td>";
	                        				echo "<td>".$value[5]."</td>";
	                        				echo "<td>".$value[6]."</td>";
	                        				echo "<td>".$value[7]."</td>";
	                        			echo "</tr>";
	                        			$i++;
	                        		}
	                        	 ?>
	                        </tbody>
	                    </table>
	                </section>
	            </div>
	        </section>
	    </div>
	</div>
	<button class="form-control btn" id="ece_btn" >D.PHARAM</button><hr>
	<div id="ECE" class="row">
	    <div class="col-lg-12">
	        <section class="panel">
	            <header class="panel-heading">
	                D.PHARAM
	            </header>
	            <div class="panel-body">
	                <section id="no-more-tables">
	                    <table class="table table-bordered table-striped table-condensed cf">
	                        <thead class="cf">
	                            <tr>
	                                <th>S.no</th>
	                                 <th>Community</th>
	                                <th><=100</th>
	                                <th>100.25 - 120.00</th>
	                                <th>120.25 - 140.00</th>
	                                <th>140.00 - 160.00</th>
	                                <th>160.25 - 170.00</th>
	                                <th>170.25 - 174.99</th>
	                                <th>175 +</th>
	                                <th>Total</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php 
	                        		$i=1;
	                        		foreach ($final_data_dp as $value) {
	                        			echo "<tr>";
	                        				echo "<td>".$i."</td>";
	                        				echo "<td>".$community[$i-1]."</td>";	
	                        				echo "<td>".$value[0]."</td>";
	                        				echo "<td>".$value[1]."</td>";
	                        				echo "<td>".$value[2]."</td>";
	                        				echo "<td>".$value[3]."</td>";
	                        				echo "<td>".$value[4]."</td>";
	                        				echo "<td>".$value[5]."</td>";
	                        				echo "<td>".$value[6]."</td>";
	                        				echo "<td>".$value[7]."</td>";
	                        			echo "</tr>";
	                        			$i++;
	                        		}
	                        	 ?>
	                        </tbody>
	                    </table>
	                </section>
	            </div>
	        </section>
	    </div>
	</div>
	<button class="form-control btn" id="agri_btn" >HEALTH INSPECTOR</button><hr>
	<div id="AGRI" class="row">
	    <div class="col-lg-12">
	        <section class="panel">
	            <header class="panel-heading">
	                HEALTH INSPECTOR
	            </header>
	            <div class="panel-body">
	                <section id="no-more-tables">
	                    <table class="table table-bordered table-striped table-condensed cf">
	                        <thead class="cf">
	                            <tr>
	                                <th>S.no</th>
	                                 <th>Community</th>
	                                <th><=100</th>
	                                <th>100.25 - 120.00</th>
	                                <th>120.25 - 140.00</th>
	                                <th>140.00 - 160.00</th>
	                                <th>160.25 - 170.00</th>
	                                <th>170.25 - 174.99</th>
	                                <th>175 +</th>
	                                <th>Total</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php 
	                        		$i=1;
	                        		foreach ($final_data_hl as $value) {
	                        			echo "<tr>";
	                        				echo "<td>".$i."</td>";
	                        				echo "<td>".$community[$i-1]."</td>";	
	                        				echo "<td>".$value[0]."</td>";
	                        				echo "<td>".$value[1]."</td>";
	                        				echo "<td>".$value[2]."</td>";
	                        				echo "<td>".$value[3]."</td>";
	                        				echo "<td>".$value[4]."</td>";
	                        				echo "<td>".$value[5]."</td>";
	                        				echo "<td>".$value[6]."</td>";
	                        				echo "<td>".$value[7]."</td>";
	                        			echo "</tr>";
	                        			$i++;
	                        		}
	                        	 ?>
	                        </tbody>
	                    </table>
	                </section>
	            </div>
	        </section>
	    </div>
	</div>
<?php include_once 'footer.php'; ?>