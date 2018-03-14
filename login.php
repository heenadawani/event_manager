<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<style>
		body
		{
			background-size:cover;
			background-repeat:no-repeat;
			background:linear-gradient(135deg,#f91d5c,#b910ed);  
			background:-moz-linear-gradient(135deg,#f91d5c,#b910ed);
			background:-webkit-gradient(135deg,#f91d5c,#b910ed);
		}
		h2
		{
			top:0;
			width:100%;
			height:100px;
			text-align:center;

		}
		div
		{
			margin-top:0px;
			text-align:center;
		}

		#second{
			margin-left:25%;
			width:50%;
			height:50px;
		}
		#name
		{
			height:30px;
			width:250px;
			font-size:20px;
			text-align:center;
			border-radius:10px;
		}
		#password
		{
			height:30px;
			width:250px;
			font-size:20px;
			text-align:center;
			border-radius:10px;
		}
		#submit2
		{
			height:40px;
			width:250px;
			font-size:20px;
			text-align:center;
			border-radius:10px;
		}
		</style>
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
		<script>

			
			$(document).ready(function(){
				
			$("#login").validate({
				rules:{
					
					name:{
						required:true
					},
					password: {
						required: true
					}
					
				},
				messages:{
					
					name:{
						required:" please enter your name"

					},
					password: {
						required: " Please provide a password"
					}
					
				}
			});
			});
		</script>
	</head>
	<h2>Event Manager</h2>
	<body>
		<div id="second">
		<form id="login" method="post" action="firstpage.php">
		<fieldset>
			<legend>Login</legend>
			<br><br>
			<input type="text" id="name" placeholder="Enter username" name="name">
			<br><br>
			<input type="password" id="password" name="password" placeholder="Enter password">
			<br><br><br><br>
			<input type="submit" value="Login" name="submit2" id="submit2">
			<p>Haven't registered?<br><a href="register.php">Register</a></p>
		</fieldset>
		</form>
		</div>

	</body>
</html>

<?php
 include "connect.php";
?>