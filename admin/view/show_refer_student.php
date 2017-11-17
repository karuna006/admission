<?php 
	include_once 'header.php';
	include_once '../model/db.php';
	$conn = db_connect();
	$get_data = $_GET;
	$raw_data = select('*','refered',$get_data,$conn);
	$where = array('refered_by' => $get_data['id']);
	$student_refered_by = select('*','add_student', $where,$conn);
	$total_count = count($student_refered_by);
?>
	<div class="container">
		<h1><?php echo $raw_data[0]['name']." has referred ".$total_count." students"; ?></h1>
		<table class="table table-stripped">
			<tr>
				<td>Name</td>
				<td>Department</td>
				<td>Cut Off</td>
				<td>Bus/Hostel</td>
				<td>Total Fees</td>
				<td>Fees to pay</td>
			</tr>
			<?php 
				foreach ($student_refered_by as $value) {
					echo "<tr>";
					echo "<td>".$value['candidate_name']."</td>";
					echo "<td>".$value['course_prefered']."</td>";
					echo "<td>".$value['cutoff']."</td>";
					echo "<td>".$value['bus_hostel']."</td>";
					echo "<td>".$value['total_fees']."</td>";
					echo "<td>".$value['bal_to_pay']."</td>";
					echo "</tr>";
				}
			 ?>
		</table>
	</div>
<?php include_once 'footer.php'; ?>
