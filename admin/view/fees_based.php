<?php 
	include_once 'header.php';
	include_once '../controller/overall_controller.php';
	$raw_data = fees_based_count();
?>
	<div class="row">
	    <div class="col-lg-12">
	        <section class="panel">
	            <header class="panel-heading">
	                Fees Based Count
	            </header>
	            <div class="panel-body">
	                <section id="no-more-tables">
	                    <table class="table table-bordered table-striped table-condensed cf">
	                        <thead class="cf">
	                            <tr>
	                                <th>S.no</th>
	                                <th>Course</th>
	                                <th><=2000</th>
	                                <th>2001 - 4999</th>
	                                <th>5000 - 9999</th>
	                                <th>10K and Above</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php 
	                        		$i=1;
	                        		$course_prefered = array('B.PHARAM','D.PHARAM','DIPLOMA IN HEALTH INSPECTOR','Total' );
	                        		foreach ($raw_data as $value) {
		                        		echo "<tr>";
		                        			echo "<td>".$i."</td>";
		                        			echo "<td>".$course_prefered[$i-1]."</td>";
		                        			echo "<td>".$value[0]."</td>";
		                        			echo "<td>".$value[1]."</td>";
		                        			echo "<td>".$value[2]."</td>";
		                        			echo "<td>".$value[3]."</td>";
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


<?php include_once 'header.php'; ?>