<?php


if (isset($_GET['options'])){
	subscribers($_GET['options']);
}

function subscribers($option){
	if($option==1){
     echo '<div class = "row" id="mobile" name="mobileMoney">
	         <h3 class = "text-center">Mobile Money</h3>
		     	<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
						    <a href="ship.php">
						      <img src="../image/airtelmoney.jpg" alt="Airtel Money">
						    </a>
						  <div class="caption">
						    <h4>Airtel Money</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
						    <a href="ship.php">
						      <img src="../image/mtn.jpg" alt="MTN">
						    </a>
						  <div class="caption">
						    <h4>MTN</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="ship.php">
					      <img src="../image/togo.jpg" alt="Tigo">
					    </a>
						  <div class="caption">
						    <h4>Tigo</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="ship.php">
					      <img src="../image/vodafone.jpg" alt="Vodafone Cash">
					    </a>
						  <div class="caption">
						    <h4>Vodafone Cash</h4>
						  </div>
						</div>
					</div>
				</div>';
	}else if($option==2){
		echo '<div class = "row">
					<h3 class = "text-center">Credit Cards</h3>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="ship.php">
					      <img src="../image/visa.png" alt="Visa">
					    </a>
						  <div class="caption">
						    <h4>Visa</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="ship.php">
					      <img src="../image/mastercard.png" alt="Mastercard">
					    </a>
						  <div class="caption">
						    <h4>Mastercard</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="ship.php">
					      <img src="../image/american.jpg" alt="American Express">
					    </a>
						  <div class="caption">
						    <h4>American Express</h4>
						  </div>
						</div>
					</div>
					<div class = "col-lg-3 col-md-3">
						<div class="thumbnail">
					    <a href="ship.php">
					      <img src="../image/paypal.png" alt="Paypal">
					    </a>
						  <div class="caption">
						    <h4>Paypal</h4>
						  </div>
						</div>
					</div>
				 </div>';
	}
}
?>
