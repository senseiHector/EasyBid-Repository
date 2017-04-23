<?php include("../unsecure/processunsecure.php"); 
include("../controller/settings_controller.php");
session_start();
$userID=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ea$yBid | Change User Details</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style = "padding-top: 50px; padding-bottom: 150px;">
	<?php include("../layout/standardheader.php"); ?>
	<div class = "container">
		<div class = "row">
			<div class="panel panel-default col-md-4 col-md-offset-4">
			  <div class="panel-body">
					<h1 class = "text-center">Change User Details</h1>
					<img class="img-responsive" src="../image/Logo.png" alt="EasyBid Logo">
					<form method="post" action="" onsubmit="return updateDetails(this)">
						<!-- Field for first name -->
						<div class="form-group">
					    <label for="fname">First Name</label>
					    <input type="text" class="form-control" name="fname" id="fname" value = <?php getFirstName($userID) ?>  >
					  </div>
						<!-- Field for last name -->
						<div class="form-group">
							<label for="lname">Last Name</label>
							<input type="text" class="form-control" name="lname" id="lname"  value = <?php getLastName($userID) ?> > 
						</div>
						<!-- Field for email -->
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email"  value = <?php getEmail($userID) ?> >
						</div>
						<!-- Field for username -->
						<div class="form-group">
					    <label for="username">Username</label>
					    <input type="text" class="form-control" name="username" id="username" maxlength="20"  value = <?php getUsername($userID) ?> >
					  </div>
						<!-- Field for password -->
						<div class="form-group">
					    <label for="passwd">Password</label>
					    <input type="password" class="form-control" name="passwd" id="passwd" value = <?php getPassword($userID) ?> >
					  </div>
						<!-- Field for phone number -->
						<div class="form-group">
					    <label for="phone">Phone Number</label>
					    <input type="text" class="form-control" name="phone" id="phone" value = <?php getPhoneNum($userID) ?> >
					  </div>

						<!-- Register Button -->
						<div class="form-group text-center">
							<button type="submit" name="changeDetails" class="btn btn-primary">Change Details</button>
						</div>
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
