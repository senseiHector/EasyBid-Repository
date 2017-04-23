<?php
/**
 *A controller page that gets informations about the items and then display them to the user
 *@author Gedeon Niyonkuru
 **/
include("../database/dbcredentials.php");
include("../database/dbconnection.php");

//instantiating the database class
 $database= new DBConnection();
 $db=$database->connect();
 //connecting to the database
 


function showitems($database)
{
    
 // making sure that the information gotten are secure and then querying the informations.
    $sql= "SELECT item_id, item_name, icon_url FROM items";
    $result=$database->query($sql)->fetch_all(MYSQLI_ASSOC);

    $num=0;
    foreach ($result as $r) {
        $num++;
        if ($num==6) {
            echo "<div class='col-lg-2 col-md-3 col-sm-4 col-xs-6'>
            <div class='thumbnail'>
              <a href='bidding.php? s={$r['icon_url']}&id={$r['item_id']}' > <img  src=".$r['icon_url']."> </a>
              <div class='caption'>
                <h3>".$r['item_name']."</h3>
              </div>
            </div>
          </div>"."</div>"."<div class='row'>";
        } else {
            echo "<div class='col-lg-2 col-md-3 col-sm-4 col-xs-6'>
            <div class='thumbnail'>
              <a href='bidding.php? s={$r['icon_url']}&id={$r['item_id']}' > <img  src=".$r['icon_url']."> </a>
              <div class='caption'>
                <h3>".$r['item_name']."</h3>
              </div>
            </div>
          </div>";
        }
    }
}

function showitemsb($database)
{
    

// making sure that the information gotten are secure and then querying the informations.
    $sql= "SELECT item_id, item_name, icon_url FROM items";
    $result=$database->query($sql)->fetch_all(MYSQLI_ASSOC);

    $num=0;
    foreach ($result as $r) {
        $num++;
        if ($num<7) {
            echo "<div class='col-lg-2 col-md-3 col-sm-4 col-xs-6'>
            <div class='thumbnail'>
              <a href='bidding.php? s={$r['icon_url']}&id={$r['item_id']}' > <img id=".$r['item_id']."  src=".$r['icon_url']."> </a>
              <div class='caption'>
                <h3>".$r['item_name']."</h3>
              </div>
            </div>
          </div>";
        }
    }





/*
 // making sure that the information gotten are secure and then querying the informations.
    $sql= "SELECT * FROM items";
    $result=$database->query($sql)->fetch_all(MYSQLI_ASSOC);

    $num=0;
    foreach ($result as $r) {
        $num++;
        if ($num<7) {
            echo "<div class='col-lg-2 col-md-3 col-sm-4 col-xs-6'>
            <div class='thumbnail'>
             <a href='bidding.php' > <img class='img' id=".$r['item_id']." src=".$r['icon_url']."> </a>
              <div class='caption'>
                <h3>".$r['item_name']."</h3>
              </div>
            </div>
          </div>";
        }
    }*/
}
