<?php 
	include_once 'header.php';
	include_once '../model/db.php';
	$conn = db_connect();
	$get_data = $_GET;
	if ($get_data['dept'] != 'Overall') {
		$where = array('course_prefered' => $get_data['dept']);
		$raw_data = select('*','add_student', $where,$conn);
		$total_count = count($raw_data);
	}
	else{
		$raw_data = select('*','add_student','1',$conn);
		$total_count = count($raw_data);
	}
?>
	<div class="container">
		<h1 class="text-center"><?php echo $get_data['dept']; ?> Department..</h1>
		<hr>
		<h3 class="text-center">Total count:<?php echo $total_count; ?></h3>
		<table class="table table-hover" style="background: white">
			<tr>
				<td>Name</td>
				<td>Community</td>
				<td>Cut Off</td>
				<td>Bus/Hostel</td>
				<td>Total Fees</td>
				<td>Fees to pay</td>
			</tr>
			<?php 
				foreach ($raw_data as $value) {
					echo "<tr>";
					echo "<td>".$value['candidate_name']."</td>";
					echo "<td>".$value['community']."</td>";
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
