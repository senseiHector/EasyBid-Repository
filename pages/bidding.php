<!DOCTYPE html>
<html>
  <?php include('../controller/items.php'); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ea$yBid | Bid on this Item</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/styleItems.css"/>
  </head>
  <body onload = "loadItem(1)" style = "padding-top: 50px; padding-bottom: 150px;">

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
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </div>
    </div>
    </nav>

    <br><br>

    <div class = "container">
      <div class="panel panel-default">
        <div class="panel-body">
          <h2>Bid Begins In: </h2>
          <pre>Days:     Hrs:     Mins:     Secs:    </pre>
        </div>
      </div>
      <div class = "row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
              <div class="caption">
                  <h3 id="item_name">Item 1</h3>
                  <p id="descr">Item Description</p>
                  <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
                </div>

        </div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <img id="active">
				</div>


        <div class="panel panel-default col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <div class="panel-body">
            <div class = "row">
              <div class = "table-responsive">
                <table class = "table table-striped">
                  <thead id = "thea">
                  </thead>
                  <tbody id ="tbod">
                  </tbody>
                </table>
              </div>
            </div>
            <div class = "row">
              <h3>Item Description</h3>
              <p id ="descrip">
              </p>
            </div>
            <div class = "row">
              <a href = "wonbid.php" class = "btn btn-primary">Place Bid</a>
              <a href = "items.php" class = "btn btn-danger">Return</a>
            </div>
          </div>
        </div>
      </div>

      <br>
      <hr>
      <br>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class = "text-center">Related Items</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <?php showitemsb($database);?>
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
<script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bid_ajax.js"></script>
    <script src="../js/scriptItems.js"></script>
  </body>
</html>
