<?php include("../unsecure/processunsecure.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ea$yBid | Sign Up</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style = "padding-top: 50px; padding-bottom: 150px;">
	<div class = "container">
		<div class = "row">
			<div class="panel panel-default col-md-6 col-md-offset-3">
			  <div class="panel-body">
					<h1 class = "text-center">Sign Up</h1>
					<img class="img-responsive" style ="margin: auto" src="../image/Logo.png" alt="EasyBid Logo">
					<form method="post" action="">
						<span style = "color:red"><?php echo $register_notice; ?></span>
						<div class="row">
							<!-- Field for first name -->
							<div class="form-group col-md-6">
						    <label for="fname">First Name<span style = "color:red">
									<?php echo $firstname_err; ?></span></label>
						    <input type="text" class="form-control" name="fname" id="fname"
								placeholder="First Name"  autofocus>
								<span style = "color:red"><?php echo $firstname_error; ?></span>
						  </div>
							<!-- Field for last name -->
							<div class="form-group col-md-6">
								<label for="lname">Last Name<span style = "color:red">
									<?php echo $lastname_err; ?></span></label>
								<input type="text" class="form-control" name="lname" id="lname"
								placeholder="Last Name"  autofocus>
								<span style = "color:red"><?php echo $lastname_error; ?></span>
							</div>
						</div>
						<!-- Field for email -->
						<div class="form-group">
							<label for="email">Email<span style = "color:red">
								<?php echo $email_err; ?></span></label>
							<input type="email" class="form-control" name="email" id="email"
							placeholder="Email"  autofocus>
							<span style = "color:red"><?php echo $email_error; ?></span>
						</div>
						<!-- Field for username -->
						<div class="form-group">
					    <label for="username">Username<span style = "color:red">
								<?php echo $username_err; ?></span></label>
					    <input type="text" class="form-control" name="username" id="username"
							maxlength="20" placeholder="Username" onchange="checkUsername()" autofocus>
							<span id = "checkUsername"></span>
							<span style = "color:red"><?php echo $username_error; ?></span>
							<input type="text" name="userStat" hidden id="userStat">
					  </div>
						<!-- Field for password -->
						<div class="form-group">
					    <label for="passwd">Password<span style = "color:red">
								<?php echo $password_err; ?></span></label>
					    <input type="password" class="form-control" name="passwd" id="passwd"
							placeholder="Password">
							<span style = "color:red"><?php echo $password_error; ?></span>
					  </div>
						<!-- Field for phone number -->
						<div class="form-group">
					    <label for="phone">Phone Number<span style = "color:red">
								<?php echo $phone_err; ?></span></label>
					    <input type="text" class="form-control" name="phone" id="phone"
							placeholder="Phone Number">
							<span style = "color:red"><?php echo $phone_error; ?></span>
					  </div>

						<!-- Register Button -->
						<div class="form-group text-center">
							<button type="submit" name="register" class="btn btn-primary">Sign Up</button>
						</div>
						<p class="text-center">Already Have An Account? <a href="../login/index.php">Login</a></p>
					</form>
			  </div>
			</div>
		</div>
	</div>

	<!--Footer-->
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container">
			<p></p>
			<p class="text-center" style = "color: #fff">Time is a-running</p>
		</div>
	</nav>

	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/processunsecure.js"></script>
</body>
</html>
