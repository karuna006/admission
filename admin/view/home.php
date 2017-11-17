<?php 
	include_once 'header.php'; 
	include_once '../controller/overall_controller.php';
	$course_prefered = array('B.PHARAM','D.PHARAM','DIPLOMA IN HEALTH INSPECTOR','Total');
	$raw_data = overall_details();
	$total_count = totalcount();
	$total_count_total = array_sum($total_count);
	$total_count['Total'] = $total_count_total;
	$management_total = 0;$govt_total = 0;$OC_total = 0;$BC_total = 0;$BCM_total = 0;$MBC_total = 0;$SC_total = 0;$SCA_total = 0;$ST_total = 0;$others_total = 0; $tamil_total = 0;$english_total = 0;
	// print_r($total_count);
	$i=1;
    foreach ($raw_data as $value) {
    	$management_total += $value[0];
    	$govt_total += $value[1];
    	$OC_total += $value[2];
    	$BC_total += $value[3];
    	$BCM_total += $value[4];
    	$MBC_total += $value[5];
    	$SC_total += $value[6];
    	$SCA_total += $value[7];
    	$ST_total += $value[8];
    	$others_total += $value[9];
    	$tamil_total += $value[10];
    	$english_total += $value[11];
			$i++;
        }
        $raw_data['Total'] = array($management_total,$govt_total,$OC_total,$BC_total,$BCM_total,$MBC_total,$SC_total,$SCA_total,$ST_total,$others_total, $tamil_total,$english_total); 
        // echo "<pre>";
        // print_r($raw_data);
        // echo "</pre>";    
?>

	<div class="row">
	    <div class="col-lg-12">
	        <section class="panel">
	            <header class="panel-heading">
	                <a href="dept_wise_view.php?dept=Overall">Overall</a>
	            </header>
	            <div class="panel-body">
	                <section id="no-more-tables">
	                    <table class="table table-bordered table-striped table-condensed cf">
	                        <thead class="cf">
	                            <tr>
	                                <th>S.no</th>
	                                <th>Course</th>
	                                <th>Total candidate</th>
	                                <th class="text-center">
	                                	<span>Quota</span><hr style="margin-top: 0;margin-bottom: 0">
	                                	<div class="row">
	                                		<div class="col-sm-6">Management Quota</div>
	                                		<div class="col-sm-6">Government Quota</div>
	                                	</div>
	                                </th>
	                                <th class="text-center">
	                                	<span>Community</span><hr style="margin-top: 0;margin-bottom: 0">
	                                	<div class="row">
	                                		<div class="col-sm-1">OC</div>
	                                		<div class="col-sm-1">BC</div>
	                                		<div class="col-sm-2">BCM</div>
	                                		<div class="col-sm-2">MBC</div>
	                                		<div class="col-sm-1">SC</div>
	                                		<div class="col-sm-2">SCA</div>
	                                		<div class="col-sm-1">ST</div>
	                                		<div class="col-sm-2">Others</div>
	                                	</div>
	                                </th>
	                                <th class="text-center">
	                                	<span>Medium</span><hr style="margin-top: 0;margin-bottom: 0">
	                                	<div class="row">
	                                		<div class="col-sm-6">Tamil</div>
	                                		<div class="col-sm-6">English</div>
	                                	</div>
	                                </th>                              
	                            </tr>
	                        </thead>
	                        <tbody>
	                        <?php 
	                        	$i=1;
		                        foreach ($raw_data as $value) {
		                        	echo "<tr>";
		                        	echo "<td>".$i."</td>";	
		                        	echo "<td><a href='dept_wise_view.php?dept=".$course_prefered[$i-1]."'>".$course_prefered[$i-1]."</a></td>";
		                        	echo "<td>".$total_count[$course_prefered[$i-1]]."</td>";
		                        	echo "<td class='text-center'><div class='row'>";
		                        	echo "<div class='col-sm-6'>".$value[0]."</div>";
		                        	echo "<div class='col-sm-6'>".$value[1]."</div>";
		                        	echo "</div></td>";
		                        	echo "<td class='text-center'><div class='row'>";
		                        	echo "<div class='col-sm-1'>".$value[2]."</div>";
		                        	echo "<div class='col-sm-1'>".$value[3]."</div>";
		                        	echo "<div class='col-sm-2'>".$value[4]."</div>";
		                        	echo "<div class='col-sm-2'>".$value[5]."</div>";
		                        	echo "<div class='col-sm-1'>".$value[6]."</div>";
		                        	echo "<div class='col-sm-2'>".$value[7]."</div>";
		                        	echo "<div class='col-sm-1'>".$value[8]."</div>";
		                        	echo "<div class='col-sm-2'>".$value[9]."</div>";
		                        	echo "</div></td>";
		                        	echo "<td class='text-center'><div class='row'>";
		                        	echo "<div class='col-sm-6'>".$value[10]."</div>";
		                        	echo "<div class='col-sm-6'>".$value[11]."</div>";
		                        	echo "</div></td>";
		                        	echo "</tr>";		                     
		                        	$i++;                    

		                        } 
		                    ?>
	                            
	                                
	                                
	                                
	                               
	                                		<!-- <div class="col-sm-6">Management Quota</div>
	                                		<div class="col-sm-6">Government Quota</div>
	                                	</div>
	                                </td>
	                                <td class="text-center">
	                                	<div class="row">
	                                		<div class="col-sm-1">OC</div>
	                                		<div class="col-sm-1">BC</div>
	                                		<div class="col-sm-2">BCM</div>
	                                		<div class="col-sm-2">MBC</div>
	                                		<div class="col-sm-1">SC</div>
	                                		<div class="col-sm-2">SCA</div>
	                                		<div class="col-sm-1">ST</div>
	                                		<div class="col-sm-2">Others</div>
	                                	</div>
	                                </td>	                               
	                                <td class="text-center">
	                                	<div class="row">
	                                		<div class="col-sm-6">Tamil</div>
	                                		<div class="col-sm-6">English</div>
	                                	</div>
	                                </td>
	                            </tr> -->
	                        </tbody>
	                    </table>
	                </section>
	            </div>
	        </section>
	    </div>
	</div>

	<div class="row">
	    <div class="col-lg-4">
	        <section class="panel">
	            <header class="panel-heading">
	               Bus and Hostel
	            </header>
	            <div class="panel-body">
	                <section id="no-more-tables">
	                    <table class="table table-bordered table-striped table-condensed cf">
	                        <thead class="cf">
	                            <tr>
	                               
	                                <th style="text-align: center;">Bus</th>
	                                <th class="text-center">
	                                	<span>Hostel</span><hr style="margin-top: 0;margin-bottom: 0">
	                                	<div class="row">
	                                		<div class="col-sm-6">Girls</div>
	                                		<div class="col-sm-6">Boys</div>
	                                	</div>
	                                </th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                          <tr>
	                               
	                                <td style="text-align: center;"><?php total_bus_count(); ?></td>
	                                <td class="text-center">
	                                	<div class="row">
	                                		<div class="col-sm-6"><?php total_hostal_girls(); ?></div>
	                                		<div class="col-sm-6"><?php total_hostal_boys(); ?></div>
	                                	</div>
	                                </td>
	                            </tr>
	                      
	                        </tbody>
	                    </table>
	                </section>
	            </div>
	        </section>
	    </div>
	</div>



<?php include_once 'footer.php'; ?>
