<?php include_once 'header.php'; ?>
	
	<div class="container">
		<form method="post" action="../controller/to_excel.php">
			<h2 style="text-align: center;">Queries</h2>
			<select class="form-control" name="columns[]" multiple>
				 <option>visited_date</option>
				 <option>admitted_date</option>
				 <option>admission_id</option>
				 <option>candidate_name</option>
				 <option>quota</option>
				 <option>community</option>
				 <option>12th</option>
				 <option>course_prefered</option>	
				 <option>dob</option>	
				 <option>fathers_name</option>	
				 <option>fathers_mobile</option>	
				 <option>mothers_name</option>	
				 <option>mothers_mobile</option>	
				 <option>candidate_email</option>	
				 <option>permanent_address</option>	
				 <option>parent_occupation</option>
				 <option>mark_details</option>
				 <option>name_of_school</option>
				 <option>medium_of_instruction</option>	
				 <option>perc_of_pcm</option>	
				 <option>cutoff</option>
				 <option>twelth_total</option>	
				 <option>tenth_total</option>	
				 <option>bus_hostel</option>
				 <option>tution_fees</option>
				 <option>accessory_fees</option>
				 <option>total_fees</option>
				 <option>special_relaxation</option> 
				 <option>advance_paid</option>
				 <option>refered_by</option>
			</select><br>
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-primary col-sm-12">Export</button>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</form>
	</div>

<?php include_once 'footer.php'; ?>