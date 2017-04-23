<!DOCTYPE html>
<html>
<?php include('../controller/items.php');?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ea$yBid | Catalog</title>

  <link type="text/css" rel="stylesheet" href="../css/styleItems.css" />
  <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="padding-top: 50px; padding-bottom: 100px;">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="padding:0" href="home.html">
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
          <li class="active"><a href="#">Buy</a></li>
          <li><a href="sellerUpload.html">Sell</a></li>
          <li><a href="account.html">Account</a></li>
          <li><a href="../index.html">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br>

  <div class="container">

    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="row">
          <div class="col-sm-offset-1 col-sm-10">
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
            <?php showitems($database);?>
      </div>
      <div class="panel-footer">
        <div class="row">
          <div class="col-sm-offset-1 col-sm-10">
            <nav aria-label="Page navigation">0
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">
        <p></p>
        <p class="text-center" style="color: #fff">Time is a-running</p>
      </div>
    </nav>


    <!--javascript-->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script src="../js/scriptItems.js"></script>
</body>

</html>
