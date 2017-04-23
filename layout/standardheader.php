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