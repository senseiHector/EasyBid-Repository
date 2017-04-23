<<<<<<< HEAD
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
    <a class="navbar-brand" style = "padding:0" href="home.php">
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
      <li><a href="../login/logout.php">Logout</a></li>
    </ul>
  </div>
</div>
</nav>
=======
<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Easy Bid</title>  
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<style type="text/css">
	nav>ul{list-style-type: none;}
	nav>ul>li{display: none;}
</style>
	<nav>
	
	<?php define("project","http://".$_SERVER["SERVER_NAME"]."/PUT PROJECT HERE") ?>


	/*REMEMBER TO PICK PAGES OVER HERE FOR STANDARD USER*/
		<li><a href= <?php echo project ?>/pages/manageusers.php> Manage Users </a></li>
		<li><a href= <?php echo project ?>/pages/managemajors.php> Manage Majors </a></li>
		<li><a href= <?php echo project ?>/login/logout.php> Logout </a></li>
	</nav>
</body>
</html>
>>>>>>> 31603683a123bd7d725f21369ae8b873607d28ed
