<?php 
include_once '../model/db.php';
include_once 'get_referred_by.php';
$raw_data = referred_by_ids();
$final_data = search_data($_POST);
if($final_data == "empty"){
	echo '<div class="alert alert-danger"><strong>Sorry!</strong> No data found.</div>';
}else{
	// echo "<pre>";
	// print_r($final_data);
	// print_r($raw_data);
	// echo "</pre>";
	?>

	<form id="myForm" class="form-group" action="../controller/update_user.php" method="post">
		<input type="hidden" name="id" value="<?php echo $final_data[0]['id'];?>">
		<h4>Refered By</h4>
		<blockquote>
			<select type="text" name="refered_by" class="form-control" placeholder="Refered By(Enter id)" >
				<option>Direct</option>
				<?php 
					foreach ($raw_data as $value) {
						if($value['id'] == $final_data['0']['refered_by'])
						{
							$selected = 'selected="selected"';
						}else{
							$selected = " ";
						}
						echo "<option $selected  value='".$value['id']."'>".$value['name']."</option>";
					}
				 ?>
			</select>
		</blockquote>
		<h4>Name of the candidate</h4>
		<blockquote>
			<input  name="candidate_name" class="form-control" id="disabledInput" type="text" value='<?php echo $final_data[0]['candidate_name'];?>'	 >
		</blockquote>
		<h4>Gender</h4>
		<blockquote>
			<select name="gender" class="form-control" >
				<option value="male" <?php if($final_data[0]['gender'] == "male"){echo 'selected';}else{echo " ";} ?> >Male</option>
				<option value="female" <?php if($final_data[0]['gender'] == "female"){echo 'selected';}else{echo " ";} ?> >Female</option>
			</select>
		</blockquote>
		<h4>Quota</h4>
		<blockquote>
			<select name="quota" id="quota" class="form-control" >
				<option value="management" <?php if($final_data[0]['quota'] == "management"){echo 'selected';}else{echo " ";}?> >Management</option>
				<option value="govt_with_fg" <?php if($final_data[0]['quota'] == "govt_with_fg"){echo 'selected';}else{echo " ";} ?> >Govt With FG</option>
				<option value="govt_without_fg" <?php if($final_data[0]['quota'] == "govt_without_fg"){echo 'selected';}else{echo " ";} ?> >Govt Without FG</option>
			</select>
		</blockquote>
		<h4>Community</h4>
		<blockquote>
			<select id="community" name="community" class="form-control" >
				<option value="OC" <?php if($final_data[0]['community'] == "OC"){echo 'selected';}else{echo " ";} ?>  >OC</option>
				<option value="BC" <?php if($final_data[0]['community'] == "BC"){echo 'selected';}else{echo " ";} ?>  >BC</option>
				<option value="BCM" <?php if($final_data[0]['community'] == "BCM"){echo 'selected';}else{echo " ";} ?>  >BCM</option>
				<option value="MBC" <?php if($final_data[0]['community'] == "MBC"){echo 'selected';}else{echo " ";} ?>  >MBC</option>
				<option value="SC" <?php if($final_data[0]['community'] == "SC"){echo 'selected';}else{echo " ";} ?>  >SC</option>
				<option value="ST" <?php if($final_data[0]['community'] == "ST"){echo 'selected';}else{echo " ";} ?>  >ST</option>
				<option value="SCA" <?php if($final_data[0]['community'] == "SCA"){echo 'selected';}else{echo " ";} ?>  >SCA</option>
				<option value="others" <?php if($final_data[0]['community'] == "others"){echo 'selected';}else{echo " ";} ?> >Others</option>
			</select>
		</blockquote>
		<h4>12<sup>th</sup> Group</h4>
		<blockquote>
			<select name="12th" class="form-control" >
			<option value="Biology" <?php if($final_data[0]['12th'] == "Biology"){echo 'selected';}else{echo " ";} ?> >Biology</option>
			<option value="Computer_Science" <?php if($final_data[0]['12th'] == "Computer_Science"){echo 'selected';}else{echo " ";} ?> >Computer Science</option>
			<option value="Vocational" <?php if($final_data[0]['12th'] == "Vocational"){echo 'selected';}else{echo " ";} ?> >Vocational</option>
			<option value="EM" <?php if($final_data[0]['12th'] == "EM"){echo 'selected';}else{echo " ";} ?> >EM</option>
			</select>
		</blockquote>
		<h4>Course Prefered</h4>
		<blockquote>
			<select name="course_prefered" class="form-control" >
			<option value="B.PHARAM" <?php if($final_data[0]['course_prefered'] == "B.PHARAM"){echo 'selected';}else{echo " ";} ?> >B.PHARAM</option>
			<option value="D.PHARAM" <?php if($final_data[0]['course_prefered'] == "D.PHARAM"){echo 'selected';}else{echo " ";} ?> >D.PHARAM</option>
			<option value="DIPLOMA IN HEALTH INSPECTOR" <?php if($final_data[0]['course_prefered'] == "DIPLOMA IN HEALTH INSPECTOR"){echo 'selected';}else{echo " ";} ?> >DIPLOMA IN HEALTH INSPECTOR</option>
			</select>
		</blockquote>
		<h4>Father's Mobile Number</h4>
		<blockquote>
			<input type="number" name="fathers_mobile" class="form-control" value="<?php echo $final_data[0]['fathers_mobile']; ?>">
		</blockquote>
		<h4>Mother's Mobile Number</h4>
		<blockquote>
			<input type="number" name="mothers_mobile" class="form-control" value="<?php echo $final_data[0]['mothers_mobile']; ?>">
		</blockquote>
		<h4>E-Mail ID</h4>
		<blockquote>
			<input type="email" name="candidate_email" value="<?php echo $final_data[0]['candidate_email']; ?>"  class="form-control">
		</blockquote>
		<h4>Mark Details</h4>
		<blockquote>
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
						<td><input type="number" name="biology" id="mat" value="<?php echo $final_data[0]['biology']; ?>" class="form-control"></td>
						<td><input type="number" name="physics" id="phy" value="<?php echo $final_data[0]['physics']; ?>" class="form-control"></td>
						<td><input type="number" name="chemistry" id="che" value="<?php echo $final_data[0]['chemistry']; ?>" class="form-control"></td>
						<td><input type="text" name="perc_of_pcm" id="perc_of_pcm" value="<?php echo $final_data[0]['perc_of_pcm']; ?>" class="form-control"></td>
						<td><input type="text" name="cutoff" id="cutoff" value="<?php echo $final_data[0]['cutoff']; ?>" class="form-control"></td>
						<td><input type="number" name="twelth_total" value="<?php echo $final_data[0]['twelth_total']; ?>" class="form-control"></td>
						<td><input type="number" name="tenth_total" value="<?php echo $final_data[0]['tenth_total']; ?>" class="form-control"></td>
					</tr>
				</table>
		</blockquote>
		<h4>Bus/Hostel</h4>
		<blockquote>
			<label><input type="radio" name="bus_hostel" value="Hostel" <?php if($final_data[0]['bus_hostel'] == "Hostel"){echo 'checked';}else{echo " ";} ?> id="hostel">Hostel</label><br>
			<label><input type="radio" name="bus_hostel" value="Bus" <?php if($final_data[0]['bus_hostel'] == "Bus"){echo 'checked';}else{echo " ";} ?> id="bus">Bus</label>
			<div id="bus_stop">
				<h4>Bus Stop</h4>
				<input type="text" name="bus_stop" value="<?php echo $final_data[0]['bus_stop']; ?>" class="form-control">
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
					<td><input type="number" id="tution_fees" name="tution_fees" value="<?php echo $final_data[0]['tution_fees']; ?>" class="form-control"></td>
					<td><input type="number" id="accessory_fees" name="accessory_fees" value="<?php echo $final_data[0]['accessory_fees']; ?>" class="form-control"></td>
					<td id="hostel_data"><input id="hostel_fees" type="number" name="hostel_fees" value="<?php echo $final_data[0]['hostel_fees']; ?>" class="form-control"></td>
					<td id="bus_data"><input id="bus_fees" type="number" name="bus_fees" value="<?php echo $final_data[0]['bus_fees']; ?>" class="form-control"></td>
					<td><input type="number" id="total_fees" name="total_fees" value="<?php echo $final_data[0]['total_fees']; ?>"  class="form-control"></td>
				</tr>
			</table>
			<label>First Graduate Amount Concession</label>
			<input class="form-control" value="<?php echo $final_data[0]['firstgraduate_amount']; ?>" type="number" id="firstgraduate_amount" name="firstgraduate_amount" placeholder="First Graduate Amount">
			<label>Special Relaxation</label>
			<input class="form-control" value="<?php echo $final_data[0]['special_relaxation']; ?>" type="number" id="special_relaxation" name="special_relaxation" placeholder="Special Relaxation">
			<label>Advance Paid</label>
			<input class="form-control" value="<?php echo $final_data[0]['advance_paid']; ?>" type="number" id="advance_paid" name="advance_paid" placeholder="Advance Paid">
			<label>Balance to be Paid</label>
			<input class="form-control" type="number" value="<?php echo $final_data[0]['bal_to_pay']; ?>" id="Balance" name="bal_to_pay" placeholder="Balance to be Paid">
		</blockquote>
		<label>Others</label>
		<blockquote>
			<label><input type="radio"  name="counselling_consortium" value="Hostel" id="consortium" <?php if($final_data[0]['counselling_consortium'] == "Hostel"){echo 'checked';}else{echo " ";} ?> >Consortium</label><br>
			<label><input type="radio"  name="counselling_consortium" value="Bus" id="counselling"  <?php if($final_data[0]['counselling_consortium'] == "Bus"){echo 'checked';}else{echo " ";} ?> >Counselling</label>
			<div id="consortium_div">
			<label>Consortium</label>
				<input class="form-control" type="text" value="<?php echo $final_data[0]['consortium']; ?>" name="consortium">
			</div>
			<div id="counselling_div">
				<label>Counselling Date</label>
					<input class="form-control" type="date" value="<?php echo $final_data[0]['counselling_date']; ?>" name="counselling_date">
				<label>Counselling Time</label>
					<input class="form-control" type="time" value="<?php echo $final_data[0]['counselling_time']; ?>" name="counselling_time">
				<label>Counselling Batch</label>
					<input class="form-control" type="text" value="<?php echo $final_data[0]['counselling_batch']; ?>" name="counselling_batch">
			</div>
		</blockquote>
		<blockquote>
			<label>Documents To be Submitted</label>
			<?php $seperate_values = explode(",", $final_data[0]['documents_submitted']);?>
			<select name="documents_submitted[]" class="form-control" multiple>

						<option value="application" <?php if (in_array("application", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >Application</option>
						<option value="allotment/rank" <?php if (in_array("allotment/rank", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >Allotment/Rank </option>
						<option value="medical" <?php if (in_array("medical", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >Medical</option>
						<option value="fg" <?php if (in_array("fg", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >FG</option>
						<option value="10th" <?php if (in_array("10th", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >10TH</option>
						<option value="12th" <?php if (in_array("12th", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >12TH</option>
						<option value="tc" <?php if (in_array("tc", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >TC</option>
						<option value="cc" <?php if (in_array("cc", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >CC</option>
						<option value="nc" <?php if (in_array("nc", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >NC</option>
						<option value="ic" <?php if (in_array("ic", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >IC</option>
						<option value="aadhar" <?php if (in_array("aadhar", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >Aadhar</option>
						<option value="bank_pb" <?php if (in_array("bank_pb", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >Bank Passbook</option>
						<option value="photo" <?php if (in_array("photo", $seperate_values)){ echo "selected"; }else{ echo " "; } ?> >Photo</option>
			</select>
		</blockquote>
		<div class="row">
			<div class="col-sm-6"><input class="form-control" type="submit"></div>
			<div class="col-sm-6"><a href="../controller/drop_user.php?id=<?php echo $final_data[0]['id'];; ?>"><input class="form-control btn btn-danger" value="Drop" style="color: white;"></div>
		</div>
		
	</form>
	<br>


	<?php
}

function search_data($raw_data)
{
	return select('*','add_student',$raw_data, db_connect());
}


