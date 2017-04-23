<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ea$yBid | Rate Your Experience</title>

    <link href="../css/css.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <!--Include the ratings.php -->
    <?php
     require_once('../unsecure/ratings.php');
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
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
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
      <h1>Kindly Rate Your Seller's Performance</h1>
    <form method = "post" action = "">
      Rating<br>

       <div class="rate">
  <input type="radio" id="star5" name="rate" value="5" />

  <label for="star5" title="text"></label>
  <input type="radio" id="star4" name="rate" value="4" />
  <label for="star4" title="text"></label>
  <input type="radio" id="star3" name="rate" value="3" />
  <label for="star3" title="text"></label>
  <input type="radio" id="star2" name="rate" value="2" />
  <label for="star2" title="text"></label>
  <input type="radio" id="star1" name="rate" value="1" />
  <label for="star1" title="text"></label>
</div><br>
      Comments</br>
      <textarea name = "usercomments"></textarea>

      <h1>Kindly Rate the Site's Performance</h1>
      Rating<br>

       <div class="rate">
  <input type="radio" id="star5" name="rate" value="5" />

  <label for="star5" title="text"></label>
  <input type="radio" id="star4" name="rate" value="4" />
  <label for="star4" title="text"></label>
  <input type="radio" id="star3" name="rate" value="3" />
  <label for="star3" title="text"></label>
  <input type="radio" id="star2" name="rate" value="2" />
  <label for="star2" title="text"></label>
  <input type="radio" id="star1" name="rate" value="1" />
  <label for="star1" title="text"></label>
</div><br>
      Comments</br>
      <textarea name = "sitecomments"></textarea><br>
      <input type = "submit" class = "btn-def" name = "rate" value = "Rate">
      <input type = "submit" class = "btn-del" name = "ignore" value = "No Thanks">
    </form>
  </div>




  <footer class="foot">
    <p>Time is a-running</p>
  </footer>

  <!--javascript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
