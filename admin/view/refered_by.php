<?php 
	include_once 'header.php'; 
	include_once '../../controller/get_referred_by.php';
	include_once '../model/db.php';
	$conn = db_connect();
	$raw_data = referred_by();
	// print_r($raw_data);
?>
	<div class="container">
		<!-- <form method="post" action="../controller/add_referer.php">
			<div id="add_referer">
				<h3>Add Referer</h3>
				<div class="form-group col-sm-4">
					<input type="text" name="name" class="form-control" placeholder="Name">
				</div>
				<div class="form-group col-sm-4">
					<input type="text" name="company_name" class="form-control" placeholder="Company Name">
				</div>
				<div class="form-group col-sm-3">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</div>
		</form> -->
		<h1 class="text-center">Referrals</h1>
		<table class="table table-striped">
			<tr>
				<td>Name</td>
				<td>Company Name</td>
				<td>Refered_count</td>
				<td>option</td>
			</tr>
			<?php 
				if ($raw_data == 'empty') {
					echo "No Data Found";
				}
				else{
					foreach ($raw_data as $value) {
						$count_refer = select('`refered_by`','add_student',array('refered_by' => $value['id']),$conn);
						if ($count_refer == 'empty') {
							$count = "Empty";
						}
						else{
							$count = count($count_refer);
						}
						echo "<tr>";
						echo "<td><a href='../view/show_refer_student.php?id=".$value['id']."'>".$value['name']."</a></td>";
						echo "<td>".$value['company_name']."</td>";
						echo "<td>".$count."</td>";
						echo "<td><a href='../controller/delete_refer.php?id=".$value['id']."'>Delete</a></td>";
						echo "</tr>";
					}
				}
			 ?>
		</table>
	</div>
<?php include_once 'footer.php'; ?>