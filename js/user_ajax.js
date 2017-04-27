function loadUser(user_id){
  var x = new XMLHttpRequest();
  x.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var this_user = JSON.parse(this.responseText);
      document.getElementById('user_full').innerHTML=this_user.firstname + " " + this_user.lastname;

      document.getElementById('user_info').innerHTML="Username: "+this_user.username+
      "<br>E-Mail: "+this_user.email+"<br>Phone Number: "+this_user.phone;

      load_bids(user_id);
      load_aucs(user_id);
    }
    else if(this.status == 403){
      document.write("Error 403. Forbidden!");
    }
    else if(this.status == 404){
      document.write("Error 404. Not Found!");
    }
  }
  x.open("GET","../controller/user_controller.php?load="+user_id, true);
  x.send();
}

function load_bids(user_id){
  var x = new XMLHttpRequest();
  x.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var this_list = JSON.parse(this.responseText);
      var item_list = "<div class=\"row\">";
      var count = 0;

      this_list.forEach((elem)=>{
        item_list += "<div class=\"col-md-4 col-sm-4 col-xs-6\"><div class=\"thumbnail\"><a href=\"bidding.php?id="+
          elem.item_id+"\" ><img style= \"height:150px\"class=\"img\" src=\""+elem.item_icon_url+
            "\"></a><div class=\"caption\"><h6>"+elem.item_name+"</h6></div></div></div>";
        count++;
        if(count%3 == 0 ){
          item_list +="</div><div class=\"row\">";
        }
      });
        document.getElementById("cur_bids").innerHTML = item_list;
    }
    else if(this.status == 403){
      document.write("Error 403. Forbidden!");
    }
    else if(this.status == 404){
      document.write("Error 404. Not Found!");
    }
  }
  x.open("GET","../controller/user_controller.php?bid="+user_id, true);
  x.send();
}

function load_aucs(user_id){
  var x = new XMLHttpRequest();
  x.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      console.log(this.responseText);
      var this_list = JSON.parse(this.responseText);
      var item_list = "<div class=\"row\">";
      var count = 0;

      this_list.forEach((elem)=>{
        item_list += "<div class=\"col-md-4 col-sm-4 col-xs-6\"><div class=\"thumbnail\"><a href=\"bidding.php?id="+
          elem.item_id+"\" ><img style= \"height:150px\"class=\"img\" src=\""+elem.item_icon_url+
            "\"></a><div class=\"caption\"><h6>"+elem.item_name+"</h6></div></div></div>";
        count++;
        if(count%3 == 0 ){
          item_list +="</div><div class=\"row\">";
        }
      });
        document.getElementById("cur_aucs").innerHTML = item_list;
    }
    else if(this.status == 403){
      document.write("Error 403. Forbidden!");
    }
    else if(this.status == 404){
      document.write("Error 404. Not Found!");
    }
  }
  x.open("GET","../controller/user_controller.php?auc="+user_id, true);
  x.send();
}
