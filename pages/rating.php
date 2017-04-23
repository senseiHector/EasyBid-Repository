<!DOCTYPE html>
<html>
  <!--Head-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ea$yBid | Rate Your Experience</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

  </head>
  <!--Body-->
  <body style = "padding-top: 50px; padding-bottom: 150px;">
   <!--Include the ratings.php -->
    <?php
     require_once('../classes/ratings.php');
    ?>

    <!--Navbar and Header-->
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
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Home</a></li>
          <li><a href="items.html">Buy</a></li>
          <li><a href="sellerUpload.html">Sell</a></li>
          <li><a href="account.html">Account</a></li>
          <li><a href="../index.html">Logout</a></li>
        </ul>
      </div>
    </div>
    </nav>
    <br><br>
    <div class = "container">
  		<div class = "row">
  			<div class="panel panel-default col-md-6 col-md-offset-3">
        <div style="color:red" class="text-center"><span><?php echo  $notice;?></span></div>
  			  <div class="panel-body">

            <h3 class = "text-center">Kindly Rate Your Seller's Performance</h3>
            <form method = "post" action = "">
              <div class = "row lead text-center">
                Rating
                <br>
                <div id="stars" class="starrr"></div>
                <span id = "userstar" name = "userstar" hidden></span>
                <input type = "number" id = "userstarin" name = "userstarin" hidden/>
              </div>
              <br>
              <div class = "form-group">
                <label for="usercomments">Comments</label>
                <textarea class="form-control" rows="3" name="usercomments" id="usercomments"></textarea>
              </div>
              <hr>
              <h3 class = "text-center">Kindly Rate the Site's Performance</h3>
              <div class = "row lead text-center">
                Rating
                <br>
                <div id="stars-existing" class="starrr" data-rating='0'></div>
                <span id = "sitestar" name = "sitestar" hidden></span>
                 <input type = "number" id = "sitestarin" name = "sitestarin" hidden/>
              </div>
              <br>
              <div class = "form-group">
                <label for="sitecomments">Comments</label>
                </br>
                <textarea class="form-control" rows="3" name="sitecomments" id="sitecomments"></textarea>
              </div>
              <div class = "row text-center">
                <input type = "submit" class = "btn btn-primary" name = "rate" value = "Rate">
                <input type = "submit" class = "btn btn-danger" name = "ignore" value = "No Thanks">
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
  <script src="../js/star.js"></script>
  </body>
</html>
