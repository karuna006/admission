$(document).ready(function() {
	
	$('#consortium_div').hide();
	$('#search_user').on( "click", function(){
		// console.log("I am clicked");
		search_string = $('#admission_id').val();
		if(search_string == ""){
			// console.log("empty string");
			$('#final_content').html('<div class="alert alert-warning">  <strong>Warning!</strong> Fill the data and give search!</div>');
		}else{
			$.ajax({
				type: "POST",
				url: "../controller/search.php",
				data: {admission_id : search_string},
				success: function(data) {  
					$('#final_content').html(data);
				}
			});
		}
	});
	$('#counselling_div').hide();
	$('#bus').click(function(e){
		$('#bus_stop').show();
		$('#hostel_title').hide();
		$('#hostel_data').hide();
		$('#bus_title').show();
		$('#bus_data').show();
	});
	$('#hostel').click(function(e){
		$('#bus_stop').hide();
		$('#hostel_title').show();
		$('#hostel_data').show();
		$('#bus_title').hide();
		$('#bus_data').hide();
		get_fees_details();
	});
	$('#consortium').click(function(e){
		$('#consortium_div').show();
		$('#counselling_div').hide();
	});
	$('#counselling').click(function(e){
		$('#counselling_div').show();
		$('#consortium_div').hide();
	});
	get_fees_details();
	$('#phy').keyup(function(e){
		get_pcm_details();
	});
	$('#che').keyup(function(e){
		get_pcm_details();
	});
	$('#mat').keyup(function(e){
		get_pcm_details();
	});
	$('#tution_fees').keyup(function(e){
		get_fees_details();
	});
	$('#accessory_fees').keyup(function(e){
		get_fees_details();
	});
	$('#hostel_fees').keyup(function(e){
		get_fees_details();
	});
	$('#bus_fees').keyup(function(e){
		get_fees_details();
	});
	$('#advance_paid').keyup(function(e){
		get_fees_details();
	});
	$('#firstgraduate_amount').keyup(function(e){
		get_fees_details();
	});
	$('#special_relaxation').keyup(function(e){
		get_fees_details();
	});


});
function get_pcm_details(){
	phy = parseInt(document.getElementById('phy').value);
	che = parseInt(document.getElementById('che').value); 
	mat = parseInt(document.getElementById('mat').value); 
	console.log(phy);
	console.log(che);
	console.log(mat);
	pcm_result = ((phy+che+mat)/6);
	if(pcm_result < 40){
		alert('PCM is less than 40');
		// document.getElementById('response').innerHTML = '<div class="alert alert-success"><strong>PCM!</strong> value should be greater then 40%.</div>';
		// $("form").trigger("reset");
	}
	else{
		document.getElementById('perc_of_pcm').value = pcm_result;
	}

	document.getElementById('cutoff').value = ((phy+che)/4)+(mat/2);
}
function get_fees_details(){
	tution_fees = parseInt(document.getElementById('tution_fees').value);
	accessory_fees = parseInt(document.getElementById('accessory_fees').value);
	hostel_fees = parseInt(document.getElementById('hostel_fees').value);
	bus_fees = parseInt(document.getElementById('bus_fees').value);
	advance_paid = parseInt(document.getElementById('advance_paid').value);	
	fa = parseInt(document.getElementById('firstgraduate_amount').value);	
	sr = parseInt(document.getElementById('special_relaxation').value);		
	total = (tution_fees+accessory_fees+hostel_fees+bus_fees);
	total1 =(total-fa-sr);
	quota = $("#quota").val();
	console.log(quota);
	community = $("#community").val();
	console.log(community);
	hostel = $('input[name=bus_hostel]:checked', '#myForm').val();
	console.log(hostel);
	if (quota == "management" && community == 'SC' && hostel == 'Hostel') {
		console.log("hostal&sc");
		total =15000;
		total1 =(total-fa-sr);
		document.getElementById('total_fees').value = total;	
	}
	else if(quota == "management" && community == 'SC' && hostel == 'Bus'){
		total = 0;
		total1 =(total-fa-sr);
		document.getElementById('total_fees').value = total;	
	}
	else if (quota == "management" && community == 'SCA' && hostel == 'Hostel') {
		console.log("hostal&sc");
		total =15000;
		total1 =(total-fa-sr);
		document.getElementById('total_fees').value = total;	
	}
	else if(quota == "management" && community == 'SCA' && hostel == 'Bus'){
		total = 0;
		total1 =(total-fa-sr);
		document.getElementById('total_fees').value = total;	
	}
	else if (quota == "management" && community == 'ST' && hostel == 'Hostel') {
		console.log("hostal&sc");
		total =15000;
		total1 =(total-fa-sr);
		document.getElementById('total_fees').value = total;	
	}
	else if(quota == "management" && community == 'ST' && hostel == 'Bus'){
		total = 0;
		total1 =(total-fa-sr);
		document.getElementById('total_fees').value = total;	
	}
	else{
		document.getElementById('total_fees').value = (tution_fees+accessory_fees+hostel_fees+bus_fees);
	}
	document.getElementById("Balance").value = (total1-advance_paid);
}