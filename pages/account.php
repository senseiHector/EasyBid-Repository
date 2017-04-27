<!DOCTYPE html>
<html>
  <!--Head-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ea$yBid | Account</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

  </head>
  <!--Body-->
  <?php include("../settings/core_ini.php"); ?>
  <body onload="loadUser(<?php echo $_SESSION['user_id'];?>)" style = "padding-top: 60px; padding-bottom: 150px;">
    <!--Navbar and Header-->
    <?php isLoggedIn(); ?>

    <!--Main Content-->
    <div class="container">
      <div class = "row">
        <div class="panel panel-default col-md-4">
          <div class="panel-body">
            <h3 class = "text-center">Account Info</h3>
            <div class="row">
              <div class="thumbnail">
                <a href= "paymentOptions.html"><img class="img" src="../image/man.png"></a>
              </div>
              <h3 id="user_full"></h3>
              <p id="user_info">
              </p>
              <p><a href="settings.php" class="btn btn-primary" role="button">Edit Account Info</a></p>
            </div>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
          </div>
        </div>
        <div class="panel panel-info col-md-offset-1 col-md-7">
          <h3 class = "text-center">Current Bids</h3>
          <div class="panel-body" id="cur_bids">
          </div>
        </div>
        <div class="panel panel-info col-md-offset-1 col-md-7">
          <h3 class = "text-center">Current Auctions</h3>
          <div class="panel-body" id="cur_aucs">
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
    <script src="../js/user_ajax.js"></script>
  </body>
</html>
