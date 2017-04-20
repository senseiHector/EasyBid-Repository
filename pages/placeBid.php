<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ea$yBid | Bid on this Item</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/styleItems.css"/>
  </head>
  <body style = "padding-top: 50px; padding-bottom: 150px;">

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
          <li><a href="account.html">Account</a></li>
          <li><a href="../index.html">Logout</a></li>
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
          <div class="thumbnails">
						<div><a class="thumbnail"><img class="img" src="../image/items/1a.jpg"></a></div>
						<div><a class="thumbnail"><img class="img" src="../image/items/1b.jpg"></a></div>
						<div><a class="thumbnail"><img class="img" src="../image/items/1c.jpg"></a></div>
				  </div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <img id="active" src="../image/items/1a.jpg" alt="Ghana made bags">
				</div>

        <div class="panel panel-default col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <div class="panel-body">
            <div class = "row">
              <div class = "table-responsive">
                <table class = "table table-striped">
                  <thead>
                    <tr>
                      <th colspan="2">
                        Item 1
                      </th>
                    </tr>
                  </thead>
                  <tr>
                    <td>
                        Item Name:
                    </td>
                    <td>
                        Item 1
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Minimum Bid:
                    </td>
                    <td>
                      $50
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Seller Username:
                    </td>
                    <td>
                      easybidder123
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Start Time:
                    </td>
                    <td>
                      dd/MM/yyyy hh:mm
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Duration:
                    </td>
                    <td>
                      5 hours
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class = "row">
              <h3>Item Description</h3>
              <p>
                Item Description Item Description</br>
                Item Description Item Description</br>
                Item Description Item Description</br>
                Item Description Item Description</br>
              </p>
              
            </div>
            <form name="Bidding">
            <h3> Place maximum bid: </h3>
              <input name="amount" type="number"><button onclick="tryid();" name="bid" type="submit">Bid</button>
            </form>

              
            <!-- <div class = "row">
              <a href = "wonbid.html" class = "btn btn-primary">Place Bid</a>
              <a href = "items.html" class = "btn btn-danger">Return</a>
            </div> -->
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
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
              <div class="thumbnail">
                <a href= "paymentOptions.html"><img class="img" src="../image/items/1a.jpg"></a>
                <div class="caption">
                  <h3>Item 1</h3>
                  <p>Item Description</p>
                  <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
              <div class="thumbnail">
                <a href= "paymentOptions.html"><img class="img" src="../image/items/1b.jpg"></a>
                <div class="caption">
                  <h3>Item 2</h3>
                  <p>Item Description</p>
                  <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
              <div class="thumbnail">
                <a href= "paymentOptions.html"><img class="img" src="../image/items/2.jpg"></a>
                <div class="caption">
                  <h3>Item 3</h3>
                  <p>Item Description</p>
                  <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
              <div class="thumbnail">
                <a href= "paymentOptions.html"><img class="img" src="../image/items/3.jpg"></a>
                <div class="caption">
                  <h3>Item 4</h3>
                  <p>Item Description</p>
                  <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
              <div class="thumbnail">
                <a href= "paymentOptions.html"><img class="img" src="../image/items/4.jpg"></a>
                <div class="caption">
                  <h3>Item 5</h3>
                  <p>Item Description</p>
                  <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
              <div class="thumbnail">
                <a href= "paymentOptions.html"><img class="img" src="../image/items/5.jpg"></a>
                <div class="caption">
                  <h3>Item 6</h3>
                  <p>Item Description</p>
                  <p><a href="#" class="btn btn-primary" role="button">Place Bid</a></p>
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
    <script type="text/javascript" src="../js/script.js"></script>
  	<script src="../js/scriptItems.js"></script>
  </body>
</html>
