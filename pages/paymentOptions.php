<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Ea$yBid | Payment Options</title>

		<link href="../css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body style = "padding-top: 50px; padding-bottom: 150px;">
	 <?php require_once("../controller/paymentoptionscontroller.php");?>
	   <!--The navigation bar of the links-->
		 <?php include("../layout/standardheader.php"); ?>

		 <br><br>


		<div class="container">
			<h1 class = "text-center">Choose Your Desired Mode of Payment</h1>
		  <form>
				<div class = "row">
          <h3 class = "text-center">Mobile Money</h3>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
						    <a href="bidding.php">
						      <img src="../image/airtelmoney.jpg" alt="Airtel Money">
						    </a>
						  <div class="caption">
						    <h4>Airtel Money</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
						    <a href="bidding.php">
						      <img src="../image/mtn.jpg" alt="MTN">
						    </a>
						  <div class="caption">
						    <h4>MTN</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="bidding.php">
					      <img src="../image/togo.jpg" alt="Tigo">
					    </a>
						  <div class="caption">
						    <h4>Tigo</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="bidding.php">
					      <img src="../image/vodafone.jpg" alt="Vodafone Cash">
					    </a>
						  <div class="caption">
						    <h4>Vodafone Cash</h4>
						  </div>
						</div>
					</div>
				</div>
				<div class = "row">
					<h3 class = "text-center">Credit Cards</h3>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="bidding.php">
					      <img src="../image/visa.png" alt="Visa">
					    </a>
						  <div class="caption">
						    <h4>Visa</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="bidding.php">
					      <img src="../image/mastercard.png" alt="Mastercard">
					    </a>
						  <div class="caption">
						    <h4>Mastercard</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="bidding.php">
					      <img src="../image/american.jpg" alt="American Express">
					    </a>
						  <div class="caption">
						    <h4>American Express</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="bidding.php">
					      <img src="../image/paypal.png" alt="Paypal">
					    </a>
						  <div class="caption">
						    <h4>Paypal</h4>
						  </div>
						</div>
					</div>
				</div>
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
  	<script src="../js/scriptItems.js"></script>
	</body>
</html>
