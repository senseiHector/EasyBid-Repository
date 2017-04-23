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
  <body onload = "loadItem(<?php echo $_GET['id']; ?>)" style = "padding-top: 50px; padding-bottom: 150px;">
    <?php include("../layout/standardheader.php"); session_start();?>
    <br><br>
    <div class = "container">
      <div class="panel panel-default">
        <div class="panel-body">
          <h2 id = "start_end"></h2>
          <pre id = "countdown_pre">Days: 0    Hrs: 0    Mins: 0    Secs: 0    </pre>
        </div>
      </div>
      <div class = "row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <img id="active">
				</div>


        <div class="panel panel-default col-lg-7 col-md-7 col-sm-7 col-xs-7">
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
              <div>
                <h2 class="text-center" id="current_highest"></h2>
              </div>
            </div>
            <div class = "row">
              <h3>Item Description</h3>
              <p id ="descrip">
              </p>
            </div>
            <div class = "row">
              <button type="button" id="bid_btn" class="btn btn-primary" data-toggle="modal" data-target="#bid_modal"/>Place Bid</button>
              <a href = "items.php" class = "btn btn-danger">Return</a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="modal fade" id="bid_modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">Place New Bid</h4>
          </div>
          <div class="modal-body">
            <form method = "post" action="../controller/bid_controller.php">
              <div class="text-center">
                <span id="current_bid"></span>
              </div>
              <div class="form-group">
                <label for="your_bid">Your Bid</label>
                <input type="number" class="form-control" name="your_bid" id="your_bid"
                maxlength="20" placeholder="Your Bid" autofocus>
              </div>
              <input hidden name="item_id" value="<?php echo $_GET['id']; ?>"/>
              <input hidden name="bidder_id" value="<?php echo $_SESSION['user_id']; ?>"/>
              <div class="text-center">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" name="bid_mod" class="btn btn-primary">Place Bid</button>
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
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bid_ajax.js"></script>
    <!-- <script src="../js/scriptItems.js"></script> -->
  </body>
</html>
