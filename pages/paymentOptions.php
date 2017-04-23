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
		 <nav class="navbar navbar-default navbar-fixed-top">
		 <div class="container-fluid">
			 <!-- Brand and toggle get grouped for better mobile display -->
			 <div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								 data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				 </button>
				 <a class="navbar-brand" style = "padding:0" href="#">
           <img src="../image/rsz_logo.png" alt="EasyBid Logo">
         </a>
			 </div>

			 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <form class="navbar-form navbar-left">
					 <div class="form-group">
						 <input type="text" class="form-control" placeholder="Search">
					 </div>
					 <button type="submit" class="btn btn-default">Submit</button>
				 </form>
				 <ul class="nav navbar-nav navbar-right">
					 <li><a href="home.php">Home</a></li>
					 <li><a href="items.php">Buy</a></li>
					 <li><a href="sellerUpload.php">Sell</a></li>
					 <li><a href="account.php">Account</a></li>
					 <li><a href="../index.php">Logout</a></li>
				 </ul>
			 </div>
		 </div>
		 </nav>

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
