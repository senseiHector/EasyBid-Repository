<?php include("../unsecure/processunsecure.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ea$yBid | Login</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style = "padding-top: 50px; padding-bottom: 150px;">
	<div class = "container">
		<div class = "row">
			<div class="panel panel-default col-md-4 col-md-offset-4">
			  <div class="panel-body">
					<h1 class = "text-center">Login</h1>
					<img class="img-responsive" src="../image/Logo.png" alt="EasyBid Logo">
					<form method="post" action="" onsubmit="return loginValidate(this)">
						<!-- User enters username -->
						<div class="form-group">
					    <label for="username">Username</label>
					    <input type="text" class="form-control" name="username" id="username" maxlength="20" placeholder="Username" required autofocus>
					  </div>
						<!-- User enters password -->
						<div class="form-group">
					    <label for="passwd">Password</label>
					    <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password">
					  </div>
						<!-- Login Button -->
						<div class="form-group text-center">
							<button type="submit" name="login" class="btn btn-primary">Login</button>
						</div>
						</br>
						<p class="text-center">Don't Have An Account? <a href="../register/index.php">Sign Up</a></p>
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
