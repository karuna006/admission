$(document).ready(function(){
	$('.otp').hide();
	$('.otp_slug').hide();
	$('#login').css({'font-weight':'bold','color':'black'});
	$("#login").click(function() {
		$('.signup').hide();
		$('.login').show();
		$('.email').hide();
		$('#login').css({'font-weight':'bold','color':'black'});
		$('#signup').css({'font-weight':'normal','color':'black'});
		$('#email').css({'font-weight':'normal','color':'black'});
	});
	$(document).on('submit','#login_form',function(e){
		e.preventDefault();
		console.log("i am in login");
		phone_no = document.getElementById('user_id').value;  
		console.log(phone_no);
		$.ajax({
			type : "POST",
			url : "../controller/login.php",
			data : {user_id : phone_no},
			success: function(data){
				if(data == "error"){
					document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong> Signup your Account </div>' ;
				}else{
					result = JSON.parse(data);
					otp_res = result[1];
					user_type = result[0];
					console.log(otp_res);
	 				$('.otp').show();
	 				$('.login').hide();
	 				$('.otp_slug').show();
					$("#otp_form").submit(function(e){
						e.preventDefault();
						otp = $("#otp_content").val();
						if(otp_res == otp){
							console.log("i am in");
							if (user_type == 'admin') {
								window.location = "../admin";
							}else{
								window.location = "home.php";
							}
						}else{
							document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>Invalid OTP</div>' ; 
						}
					});
				}
			}
		});
	});	
});
function insert_user(data , otp){
	name = document.getElementById('name').value;
	phonenumber = document.getElementById('phone_no').value;
	email_id = document.getElementById('mail_id').value;
	password = document.getElementById('password').value;
	if(data == otp){
		$.ajax({
			type : "POST",
			url : "../controller/register.php",
			data : { user_name : name,user_id : phonenumber,email_id : email_id,password : password},
			success: function(data){
				console.log(data);
				if(data == "error"){
					document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>Invalid OTP</div>' ;
				}else if (data == "inserted"){
					 window.location = "../home";
				}else{
					document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry! </strong>Something Went wrong</div>' ; 
				}
			}
		});
	}else{
		document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>Invalid OTP</div>' ; 
	}
}