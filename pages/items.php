<!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Ea$yBid | Catalog</title>

   <link type="text/css" rel="stylesheet" href="../css/styleItems.css" />
   <link href="../css/bootstrap.min.css" rel="stylesheet">
 </head>
<?php include("../settings/core_ini.php");?>
 <body onload="loadItems()" style="padding-top: 50px; padding-bottom: 100px;">

   <?php isLoggedIn();?>
<br>
   <div class = "container">
     <form>
        <div class="input-group">
          <input type="text" id="search_in" name="search_in" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" name="search" onclick="search()"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div>
     </form>
    </div>
<br>
   <div class="container">
     <div class="panel panel-info">
       <div class="panel-heading">
         <div class="row">
           <div class="col-sm-offset-1 col-sm-10">
             <nav aria-label="Page navigation">
               <!-- <ul class="pagination">
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
               </ul> -->
             </nav>
           </div>
         </div>
       </div>
       <div class="panel-body" id="items_body">

       </div>
       <div class="panel-footer">
         <div class="row">
           <div class="col-sm-offset-1 col-sm-10">
             <nav aria-label="Page navigation">
               <!-- <ul class="pagination">
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
               </ul> -->
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
     <script src="../js/scriptItems.js"></script>
     <script src="../js/item_ajax.js"></script>
 </body>

 </html>
