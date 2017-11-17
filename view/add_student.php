	<?php 
	include_once 'header.php'; 
	include_once '../controller/get_referred_by.php';
	$raw_data = referred_by_ids();
	if (isset($_GET['status'])) {
		if ($_GET['status'] == 'inserted') {
			echo '<div class="alert alert-success"><strong>Success!</strong> Data Inserted.And the admission id is <strong>'.$_GET['admit_id'].'</strong></div>';
		}
		else if ($_GET['status'] == 'not_inserted') {
			echo '<div class="alert alert-danger"><strong>Something went wrong!</strong> Data not Inserted.</div>';
		}
	}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<div id='response'>
	
</div>
<div class="container">
	<form id="myForm" class="form-group" action="../controller/add_student_controller.php" method="post">
		<table width="100%">
			<tr>
				<td>
					<h4>Visited Date</h4>
					<input type="date" class="form-control" name="visited_date">
				</td>
				<td>
					<h4>Admitted Date</h4>
					<input type="date" class="form-control" name="admitted_date">
				</td>
			</tr>
		</table>
		<h4>Refered By</h4>
		<blockquote>
			<select type="text" name="refered_by" class="form-control" placeholder="Refered By(Enter id)" >
				<option>Direct</option>
				<?php 
					foreach ($raw_data as $value) 
					{
						echo "<option>".$value['name']."</option>";
					}
				 ?>
			</select>
		</blockquote>

		<h4>Name of the candidate</h4>
		<blockquote>
			<input type="text" name="candidate_name" class="form-control" placeholder="Name of the Candidate" >
		</blockquote>

		<h4>Gender</h4>
		<blockquote>
			<select name="gender" id="quota" class="form-control" >
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
		</blockquote>

		<h4>Quota</h4>
		<blockquote>
			<select name="quota" id="quota" class="form-control" >
				<option value="management">Management</option>
				<option value="govt_with_fg">Govt With FG</option>
				<option value="govt_without_fg">Govt Without FG</option>
			</select>
		</blockquote>

		<h4>Community</h4>
		<blockquote>
			<select id="community" name="community" class="form-control" >
				<option value="OC">OC</option>
				<option value="BC">BC</option>
				<option value="BCM">BCM</option>
				<option value="MBC">MBC</option>
				<option value="SC">SC</option>
				<option value="ST">ST</option>
				<option value="SCA">SCA</option>
				<option value="others">Others</option>
			</select>
		</blockquote>

		<h4>Course Prefered</h4>
		<blockquote>
			<select id="course_prefered" name="course_prefered" class="form-control" onchange="change_group()">
			<option value="B.PHARAM">B.PHARAM</option>	
			<option value="D.PHARAM">D.PHARAM</option>
			<option value="DIPLOMA IN HEALTH INSPECTOR">DIPLOMA IN HEALTH INSPECTOR</option>	
			</select>			
		</blockquote>

		<div id="group">
		<h4>12<sup>th</sup> Group</h4>
		<blockquote>
			<select name="12th" class="form-control" >
			<option value="Biology">Biology</option>			
			<option value="PURE SCIENCE">PURE SCIENCE</option>
			<option value="Degree">DEGREE</option>
			</select>
		</blockquote>
		</div>

		<div id="group1">
		<h4>12<sup>th</sup> Group / DEGREE</h4>
		<blockquote>
			<input type="text" name="12th1" class="form-control" placeholder="DEGREE">
		</blockquote>
		</div>

		<h4>Date of Birth</h4>
		<blockquote>
			<input type="date" name="dob" class="form-control" >
		</blockquote>

		<h4>Father's Name</h4>
		<blockquote>
			<input type="text" name="fathers_name" class="form-control"  placeholder="Father's Name">
		</blockquote>

		<h4>Father's Mobile Number</h4>
		<blockquote>
			<input type="number" name="fathers_mobile" class="form-control" placeholder="Mobile Number">
		</blockquote>

		<h4>Mother's Name</h4>
		<blockquote>
			<input type="text" name="mothers_name" class="form-control"  placeholder="Mother's Name">
		</blockquote>

		<h4>Mother's Mobile Number</h4>
		<blockquote>
			<input type="number" name="mothers_mobile" class="form-control" placeholder="Mobile Number">
		</blockquote>

		<h4>E-Mail ID</h4>
		<blockquote>
			<input type="email" name="candidate_email" placeholder="E - Mail"  class="form-control">
		</blockquote>

		<h4>Permanent Address</h4>
		<blockquote>
			<textarea class="form-control" rows="5" name="permanent_address" ></textarea>
		</blockquote>

		<h4>Parent's Occupation</h4>
		<blockquote>
			<input type="text" name="parent_occupation" class="form-control" placeholder="Parent's Occupation">
		</blockquote>

		<h4>Higher Secondary Details</h4>
		<blockquote>
			<select name="mark_details" class="form-control" >
				<option  value="TN-stateboard">TN-stateboard</option>
				<option value="CBSE">CBSE</option>
				<option value="others">Others</option>
			</select>
			<label>Name of School</label>
				<input type="text" name="name_of_school" class="form-control" placeholder="Name of School">
			<label>Medium of INstruction</label>
				<select name="medium_of_instruction" class="form-control" >
					<option value="English">English</option>
					<option value="Tamil">Tamil</option>
					<option value="others">Others</option>
				</select>		
			<label>Mark Details</label>
				<table class="table">
					<tr>
						<td>Biology</td>
						<td>Physics</td>
						<td>Chemistry</td>
						<td>% of PCM</td>
						<td>Cutoff(PCM)</td>
						<td>12<sup>th</sup>Total</td>
						<td>10<sup>th</sup>Total</td>
					</tr>
					<tr>
						<td><input type="number" name="biology" id="mat" class="form-control"></td>
						<td><input type="number" name="physics" id="phy" class="form-control"></td>
						<td><input type="number" name="chemistry" id="che" class="form-control"></td>
						<td><input type="text" name="perc_of_pcm" id="perc_of_pcm" class="form-control"></td>
						<td><input type="text" name="cutoff" id="cutoff" class="form-control"></td>
						<td><input type="number" name="twelth_total" class="form-control"></td>
						<td><input type="number" name="tenth_total" class="form-control"></td>
					</tr>
				</table>
		</blockquote>

		<h4>Bus/Hostel</h4>
		<blockquote>
			<label><input type="radio"  name="bus_hostel" value="Hostel" id="hostel">Hostel</label><br>
			<label><input type="radio"  name="bus_hostel" value="Bus" id="bus">Bus</label>
			<div id="bus_stop">
				<h4>Bus Stop</h4>
				<input type="text" name="bus_stop" class="form-control" placeholder="Bus Stop">
			</div>
		</blockquote>

		<h4>Fees Details</h4>
		<blockquote>
			<table class="table">
				<tr>
					<td>Tution Fees</td>
					<td>Registration Fees</td>
					<td id="hostel_title">Hostel Fees</td>
					<td id="bus_title">Bus Fees</td>
					<td>Total Fees</td>
				</tr>
				<tr>
					<td><input type="number" value="0" id="tution_fees" name="tution_fees" class="form-control"></td>
					<td><input type="number" value="0" id="accessory_fees" name="accessory_fees" class="form-control"></td>
					<td id="hostel_data"><input value="0" id="hostel_fees" type="number" name="hostel_fees" class="form-control"></td>
					<td id="bus_data"><input value="0" id="bus_fees" type="number" name="bus_fees" class="form-control"></td>
					<td><input style="background-color:#fff" type="number" value="0" id="total_fees" name="total_fees" class="form-control" readonly></td>
				</tr>
			</table>
			<label>First Graduate Amount Concession</label>
			<input class="form-control" value="0" type="number" id="firstgraduate_amount" name="firstgraduate_amount" placeholder="First Graduate Amount">
			<label>Special Relaxation</label>
			<input class="form-control" value="0" type="number" id="special_relaxation" name="special_relaxation" placeholder="Special Relaxation">
			<label>Advance Paid</label>
			<input class="form-control" value="0" type="number" id="advance_paid" name="advance_paid" placeholder="Advance Paid">
			<label>Balance to be Paid</label>
			<input style="background-color:#fff" class="form-control" type="number" id="Balance" name="bal_to_pay" placeholder="Balance to be Paid" readonly>
		</blockquote>

		<label>Others</label>
		<blockquote>
			<label><input type="radio"  name="counselling_consortium" value="Hostel" id="consortium">Consortium</label><br>
			<label><input type="radio"  name="counselling_consortium" value="Bus" id="counselling">Counselling</label>
			<div id="consortium_div">
			<label>Consortium</label>
				<input class="form-control" type="text" name="consortium">
			</div>
			<div id="counselling_div">
				<label>Counselling Date</label>
					<input class="form-control" type="date" name="counselling_date">
				<label>Counselling Time</label>
					<input class="form-control" type="time" name="counselling_time">
				<label>Counselling Batch</label>
					<input class="form-control" type="text" name="counselling_batch">
			</div>
		</blockquote>

		<blockquote>
			<label>Documents To be Submitted</label>
			<select name="documents_submitted[]" class="form-control" multiple>
						<option value="application">Application</option>
						<option value="allotment/rank">Allotment/Rank </option>
						<option value="medical">Medical</option>
						<option value="fg">FG</option>
						<option value="10th">10TH</option>
						<option value="12th">12TH</option>
						<option value="tc">TC</option>
						<option value="cc">CC</option>
						<option value="nc">NC</option>
						<option value="ic">IC</option>
						<option value="aadhar">Aadhar</option>
						<option value="bank_pb">Bank Passbook</option>
						<option value="photo">Photo</option>
			</select>
		</blockquote>

		<input class="form-control"  type="submit">
	</form>
	<br>
</div>
<script type="text/javascript">
	$(document).ready(function () {
  		$('#group1').hide();
	});
	function change_group()
	{
		var group = document.getElementById("course_prefered").value;
		if (group == 'DIPLOMA IN HEALTH INSPECTOR') 
		{
			$('#group').hide();
			$('#group1').show();
		}
		else
		{
			$('#group').show();
			$('#group1').hide();	
		}
	}	
</script>
<?php include_once 'footer.php'; ?>