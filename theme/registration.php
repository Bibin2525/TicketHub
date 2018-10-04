<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					USER REGISTERATION
				</span>
				<form name="fome1" action="#" method="POST" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter your name">
						<input class="input100" type="text" name="name" placeholder="name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

				
					<div class="wrap-input100 validate-input" data-validate = "Enter your DOB">
						<input class="input100" type="date" name="dob" placeholder="Date of birth">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Addtress">
						<input class="input100" type="text" name="address" placeholder="address">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter your phonenumber">
						<input class="input100" type="text" name="phone" placeholder="Phone Numbeer">
						<script src="phone.js"></script>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter your email">
						<input class="input100" type="email" name="email" placeholder="email">
						<script src="email-validation.js"></script>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter password">
						<input class="input100" type="password" name="password" placeholder="your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						<script src="passvali.js"></script>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Conform password">
						<input class="input100" type="password" name="cpassword" placeholder="conform password">
						<script src="passvali.js"></script>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>


					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="submit">
							Register
						</button>
					</div>
					
					<?php
					$succ=0;
					if(isset($_POST['submit']))
					{
						include("C:\wamp\www\miniproject\dbconnect.php");
						

						
						$uname=$_POST['name'];
						$gender=$_POST['gender'];
					    $date=$_POST['dob'];
						$addr=$_POST['address'];
						$mobile=$_POST['phone'];
						$mail=$_POST['email'];
						$pass=$_POST['password'];
						$cpass=$_POST['cpassword'];
			
			
						$suc =mysql_query("insert into login(uname,password,type,status) values('$mail','$pass','1','1')") or die (mysql_error());
							$succ =mysql_query("insert into registration(name,gender,dob,address,phone,email,password,confirm_password) values('$uname','$gender','$date','$addr','$mobile','$mail','$pass','$cpass')") or die (mysql_error());

							if($succ == 1)
							{
								header('location:index.php');
								session_start();
								$_SESSION['r'] = $mail;
								
								
							
							}
					}


					?>

					
					

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
</body>
</html>