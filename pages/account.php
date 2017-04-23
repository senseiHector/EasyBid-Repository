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
  <body style = "padding-top: 60px; padding-bottom: 150px;">
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
        <a class="navbar-brand" style = "padding:0" href="home.html">
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
          <li><a href="home.html">Home</a></li>
          <li><a href="items.html">Buy</a></li>
          <li><a href="sellerUpload.html">Sell</a></li>
          <li class = "active"><a href="#">Account</a></li>
          <li><a href="../index.html">Logout</a></li>
        </ul>
      </div>
    </div>
    </nav>

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
              <h3>User 1</h3>
              <p>
                User Info User Info User Info</br>
                User Info User Info User Info</br>
                User Info User Info User Info</br>
                User Info User Info User Info</br>
              </p>
              <p><a href="#" class="btn btn-primary" role="button">Edit Account Info</a></p>
            </div>
            <div class="row">
              <h3>User Rating</h3>
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
          <div class="panel-body">
            <h3 class = "text-center">Current Bids</h3>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="thumbnail">
                  <a href= "paymentOptions.html"><img class="img" src="../image/items/1a.jpg"></a>
                  <div class="caption">
                    <h3>Item 1</h3>
                    <p>Item Description</p>
                    <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="thumbnail">
                  <a href= "paymentOptions.html"><img class="img" src="../image/items/1b.jpg"></a>
                  <div class="caption">
                    <h3>Item 2</h3>
                    <p>Item Description</p>
                    <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="thumbnail">
                  <a href= "paymentOptions.html"><img class="img" src="../image/items/2.jpg"></a>
                  <div class="caption">
                    <h3>Item 3</h3>
                    <p>Item Description</p>
                    <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-info col-md-offset-1 col-md-7">
          <div class="panel-body">
            <h3 class = "text-center">Current Auctions</h3>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="thumbnail">
                  <a href= "paymentOptions.html"><img class="img" src="../image/items/1a.jpg"></a>
                  <div class="caption">
                    <h3>Item 1</h3>
                    <p>Item Description</p>
                    <p><a href="#" class="btn btn-primary" role="button">Monitor Bids</a></p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="thumbnail">
                  <a href= "paymentOptions.html"><img class="img" src="../image/items/1b.jpg"></a>
                  <div class="caption">
                    <h3>Item 2</h3>
                    <p>Item Description</p>
                    <p><a href="#" class="btn btn-primary" role="button">Monitor Bids</a></p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="thumbnail">
                  <a href= "paymentOptions.html"><img class="img" src="../image/items/2.jpg"></a>
                  <div class="caption">
                    <h3>Item 3</h3>
                    <p>Item Description</p>
                    <p><a href="#" class="btn btn-primary" role="button">Monitor Bids</a></p>
                  </div>
                </div>
              </div>
            </div>
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
  </body>
</html>