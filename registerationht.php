<? php 
include("registeration.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registeration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<!--===============================================================================================-->
</head>
<body>
	<style>
	.registeration100-form-title{
		font-size:30px;
		background-color: #133b5c;
  		color: #f2a365;
		padding:25px;
		margin-top:20px;
		margin-bottom:20px;
		border-radius:15px;
		border-style: ridge;

	}
	.registeration100-form-title:hover{
		font-size: 25px;
		background-color:#333333;
	}
	.center {
  		display: block;
  		margin-left: 150px;
  		margin-right: auto;
  		margin-bottom:30px;
  		width: 100%;
	}
	.body{
		background-color: #133b5c;
	}
	.txt2{
		font-size:20px;
	}
	</style>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.jfif" class="center" alt="IMG">
				</div>

				<form class="registeration100-form validate-form" action="registeration.php" method="post">
					<div class="registeration100-form-title">

						Rental Company Portal Registeration

					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid  Id is required">
						<input class="input100" type="text" name="Id" placeholder="Id">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-badge" aria-hidden="true"></i>
						</span>
						
					</div>
                    
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="Name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book" aria-hidden="true"></i>
						</span>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="Password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "CNIC is required">
					<input class="input100" type="text"  data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X" max-length='15'  name="CNIC" required="" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="Email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid Address is required">
						<input class="input100" type="text" name="Address" placeholder="Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book" aria-hidden="true"></i>
						</span>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "ValidPhoneNumber is required">
						<input class="input100" type="tel" name="PhoneNumber" placeholder="PhoneNumber">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
						
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					

					<div class="text-center p-t-136">
						<a class="txt2" href="loginht.php">
							Already Have Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--===============================================================================================-->	
	<script>
    $(":input").inputmask();

   </script>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	

</body>
</html>