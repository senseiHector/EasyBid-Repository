var won = false;
function loadItem(item_id,user_id){
  var x = new XMLHttpRequest();
  x.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var this_item = JSON.parse(this.responseText);
      var counter = setInterval(function(){ countdown(this_item,this_item.item_bid_starts,this_item.item_bid_ends) }, 1000);
        document.getElementById("thea").innerHTML = "<tr><th colspan=\"2\">"
        +this_item.item_name+"</th></tr>";

        document.getElementById("tbod").innerHTML ="<tr><td>Item Name:</td><td>"+
        this_item.item_name+"</td></tr><tr><td>Minimum Bid:</td><td>GHC "+
        this_item.item_min_price+"</td></tr><tr><td>Seller Username:</td><td>"+
        this_item.item_auctioneer+"</td></tr><tr><td>Start Time:</td><td>"+
        this_item.item_start_time+"</td></tr><tr><td>End Time:</td><td>"+
        this_item.item_end_time+"</td></tr><tr><td>Item Condition:</td><td>"+
        this_item.item_condition+"</td></tr>";

        document.getElementById("current_highest").innerHTML = "Current Bid: GHC "+ this_item.item_highest_bid;

        if(this_item.item_highest_bid == 0){
          document.getElementById("current_bid").innerHTML = "Minimum Bid: GHC "+ this_item.item_min_price;
          document.getElementById("your_bid").value = this_item.item_min_price;
        }
        else{
          document.getElementById("current_bid").innerHTML = "Current Bid: GHC "+ this_item.item_highest_bid;
          var new_min = parseFloat(this_item.item_highest_bid) +1;
          document.getElementById("your_bid").value = new_min;
        }

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

  function countdown(this_item,start_time,end_time){
    var date = new Date();
    var end_date = new Date(end_time * 1000);
    var start_date = new Date(start_time * 1000);
    var diff = start_date.getTime() - date.getTime();
    var d_t = new Date(diff);

    if(diff >= 0){
      document.getElementById("start_end").innerHTML = "Bid Starts In: ";
      document.getElementById("countdown_pre").innerHTML = "Hrs: "+d_t.getHours()+
      "    Mins: "+d_t.getMinutes()+"    Secs: "+d_t.getSeconds()+" ";
      document.getElementById("bid_btn").disabled = true;
    }
    else {
      var over = end_date.getTime() - date.getTime();
      if(over > 0){
        document.getElementById("start_end").innerHTML = "Bid Ends In: ";
        var diff_end = end_date.getTime() - date.getTime();
        var timeDiff_end = Math.abs(diff_end);
        var d_t_e = new Date(diff_end);
        document.getElementById("countdown_pre").innerHTML = "Hrs: "+d_t_e.getHours()+
        "    Mins: "+d_t_e.getMinutes()+"    Secs: "+d_t_e.getSeconds()+" ";
        if(this_item.auctioneer_id==user_id)
          document.getElementById("bid_btn").disabled = true;
        else
        document.getElementById("bid_btn").disabled = false;
      }
      else{
        document.getElementById("start_end").innerHTML = "Bid Has Ended ";
        document.getElementById("countdown_pre").innerHTML = "Hrs: 0    Mins: 0    Secs: 0 ";
        document.getElementById("current_highest").innerHTML = "Winning Bid: GHC "+ this_item.item_highest_bid;

        getWinner(item_id,this_item.item_bidder);
        document.getElementById('bid_s').hidden=true;
        document.getElementById('winner').innerHTML="";
        if(won){
          document.getElementById('winner').style.color="green";
          document.getElementById('winner').innerHTML="Congratulations! You won this Bid!";
          document.getElementById('won_s').hidden=false;
        }
        else{
          
        }
      }
    }
  }


  function getWinner(item_id, user_id){
    var x = new XMLHttpRequest();
    x.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        var winner_id = this.responseText;
        if(winner_id == user_id)
          won = true;
        else
          won = false;
      }
      else if(this.status == 403){
        document.write("Error 403. Forbidden!");
      }
      else if(this.status == 404){
        document.write("Error 404. Not Found!");
      }
    }
    x.open("GET","../controller/bid_controller.php?winner="+item_id, true);
    x.send();
  }
}
