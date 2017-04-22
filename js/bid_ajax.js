function loadItem(item_id){
  var x = new XMLHttpRequest();
  x.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var this_item = JSON.parse(this.responseText);
        document.getElementById("thea").innerHTML = "<tr><th colspan=\"2\">"
        +this_item.item_name+"</th></tr>";

        document.getElementById("tbod").innerHTML ="<tr><td>Item Name:</td><td>"+
        this_item.item_name+"</td></tr><tr><td>Minimum Bid:</td><td>GHC "+
        this_item.item_min_price+"</td></tr><tr><td>Seller Username:</td><td>"+
        this_item.item_auctioneer+"</td></tr><tr><td>Start Time:</td><td>"+
        this_item.item_bid_starts+"</td></tr><tr><td>Duration:</td><td>5 hours</td></tr>";

        document.getElementById("descrip").innerHTML = this_item.item_description;

        document.getElementById("active").src = this_item.item_icon_url;
        document.getElementById("active").alt = this_item.item_name;
    }
    else if(this.status == 403){
      document.write("Error 403. Forbidden!");
    }
    else if(this.status == 404){
      document.write("Error 404. Not Found!");
    }
  }
  x.open("GET","../controller/bid_controller.php?load="+item_id, true);
  x.send();
}
