<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ea$yBid | Congratulations!</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style = "padding-top: 50px; padding-bottom: 850px;">
    <?php include("../layout/standardheader.php"); ?>

    <br><br>

    <div class = "container col-sm-offset-2 col-sm-8">
      <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h2>Congratulations!</h2>
          <h2>You have Succesfully Acquired this Item!</h2>
        </div>
        <div class = "panel-body">
          <h3 class ="text-center">Item 1</h3>
        </div>
        <div class = "row">
          <div class = "table-responsive col-sm-offset-1 col-sm-10">
            <table class = "table">
              <tr>
                <td rowspan="4">
                  <div class = "item"><img alt = "Item 1" src = "../image/item.png"></div>
                </td>
                <td>
                    Item Name:
                </td>
                <td>
                    Item 1
                </td>
              </tr>
              <tr>
                <td>
                  Final Bid:
                </td>
                <td>
                  $500
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
                  Payment Method:
                </td>
                <td>
                  Visa
                </td>
              </tr>
              <tr>
                <th colspan="3">Item Description</th>
              </tr>
              <tr>
                <td colspan="3">
                  <p>
                    Item Description Item Description Item Description</br>
                    Item Description Item Description Item Description</br>
                    Item Description Item Description Item Description</br>
                  </p>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class = "panel-body col-md-offset-4">
          <a href = "ship.html" class = "btn btn-primary">Shipment Details</a>
          <a href = "rating.html" class = "btn btn-primary">Rate Your Experience</a>
          <a href = "items.html" class = "btn btn-danger">Return</a>
        </div>
      </div>
    </div>
    <br>


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
