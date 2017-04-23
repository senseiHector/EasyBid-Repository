<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Ea$yBid | Payment Options</title>

		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="../js/scriptpayment.js"></script>

	</head>
	<body style = "padding-top: 50px; padding-bottom: 150px;">
	 <?php require_once("../controller/paymentoptionscontroller.php");?>
	   <!--The navigation bar of the links-->
		 <?php include("../layout/standardheader.php"); ?>

		 <br><br>
		<div class="container">
			<h1 class = "text-center">Choose Your Desired Mode of Payment</h1>
			<form method="post" action="">
			<select class="form-control" name="options" id="options">
				<option value="" disabled selected>Choose a mode of payment...</option>
				<option name="mobile" value="1"<?php if(isset($_POST["mobile"])&& $_POST["mobile"]=="1") echo ("selected");?> onclick="subscribers(1)" >Mobile Money</option>
				<option name="credit" value="2"<?php if(isset($_POST["credit"])&& $_POST["credit"]=="2") echo ("selected");?> onclick="subscribers(2)" >Credit cards</option>
		  </select>
		</form>
		  <form>
                 <div class="placeholder" id="optionname" name="mobile"></div>
		  </form>
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
  	<script type="text/javascript" src="./../js/script.js"></script>
 
	</body>
</html>
