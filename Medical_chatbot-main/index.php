<?php
 include('header.php'); 
?>

<div class="container-fluid p-0">
	<div class="col-md-12 p-0">
		<img src="images/bg.png" class="img-fluid " />
	</div>
	<div id="about" class="col-md-12 pt-4 pb-4">
		<div class="col-md-8 mx-auto mt-4 text-center pt-4 pb-4">
			<h2 class="text-info">About us</h2>
			<p class="mt-4 text-dark">Many individuals have difficulty accessing reliable and timely medical information, leading to confusion, anxiety, and potential harm. Traditional medical resources, such as doctor visits and web searches, can be time-consuming, costly, and unreliable. As a result, there is a need for a more accessible and convenient method for individuals to receive accurate and personalized medical information. A medical chat bot can provide a solution to this problem by offering a user-friendly and responsive interface for individuals to ask questions, receive information, and get personalized recommendations for their specific medical needs.</p>
		</div>
	</div>
	<div id="contact" class="col-md-12 pt-4 pb-4 bgsection">
		<div class="col-md-8 mx-auto mt-4 text-center pt-4 pb-4">
			<h2 class="text-white">Contact us</h2>
			<p class="mt-4 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
	</div>
	<div id="a_login" class="col-md-12">
		<div class="col-md-4 mx-auto shadow-lg p-3 mb-5 bg-white rounded lgndiv">
			<div class="col-md-12 text-center">
				<h4 class="text-info">Admin Login</h4>
			</div>
			<form id="admin_form" method="post">
				<div class="form-group">
					<label for="email">Admin Id:</label>
					<input type="text" class="form-control" name="admin_email"  required />
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" name="admin_pwd" required />
				</div> 
				<button type="submit" id="adminLogin" class="btn btn-info bg-info text-white" >Login</button>
			</form>
		</div>
	</div>
	<div id="u_login" class="col-md-12 pt-4 pb-4 bgsection">
		<div class="col-md-4 mx-auto border p-3 mb-5 rounded lgndiv">
			<div class="col-md-12 text-center">
				<h4 class="text-white">User Login</h4>
			</div>
			<form id="user_form" method="post">
				<div class="form-group">
					<label class="text-white" for="email">Email address:</label>
					<input type="email" class="form-control" name="user_email" />
				</div>
				<div class="form-group">
					<label class="text-white" for="pwd">Password:</label>
					<input type="password" class="form-control" name="user_pwd" />
				</div> 
				<button type="submit" id="userLogin" class="btn btn-secondary bg-white text-info">Login</button>
				<label class="text-white">Not Registered? <u><a href="register.php" class="text-white"> Create An Acccount</a></u></label>
			</form>
		</div>
	</div>
</div>
</div>

<?php include('Footer.php'); ?>

<script>
$(document).on('submit', '#admin_form', function(event){
	event.preventDefault();
	$.ajax({
		url:"login.php",
		method:"POST",
		data:new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success:function(data)
		{
			if(data == "successfull")
			{
				window.location.href = "Managehospital.php";
			}
			else
			{
				swal(data);
			}	
		}
	});
});

$(document).on('submit', '#user_form', function(event){
	event.preventDefault();
	$.ajax({
			url:"login.php",
			method:"POST",
			data:new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success:function(data)
			{
				if(data == "successfull")
				{
					window.location.href = "user/UserHome.php";
				}
				else
				{
					swal(data);
				}	
			}
		});
});
</script>

</body>
</html>