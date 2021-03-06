function loadItems(){
  var x = new XMLHttpRequest();
  x.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var this_list = JSON.parse(this.responseText);
      var item_list = "<div class=\"row\">";
      var count = 0;

      this_list.forEach((elem)=>{
        item_list += "<div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\"><div class=\"thumbnail\"><a href=\"bidding.php?id="+
          elem.item_id+"\" ><img style= \"height:150px\"class=\"img\" src=\""+elem.item_icon_url+
            "\"></a><div class=\"caption\"><h6>"+elem.item_name+"</h6></div></div></div>";
        count++;
        if(count%6 == 0 ){
          item_list +="</div><div class=\"row\">";
        }
      });
        document.getElementById("items_body").innerHTML = item_list;
    }
    else if(this.status == 403){
      document.write("Error 403. Forbidden!");
    }
    else if(this.status == 404){
      document.write("Error 404. Not Found!");
    }
  }

  var searchString="../controller/item_controller.php?load=1";

  x.open("GET",searchString, true);
  x.send();
}

function search(){
  var x = new XMLHttpRequest();
  x.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var this_list = JSON.parse(this.responseText);
      var item_list = "<div class=\"row\">";
      var count = 0;

      this_list.forEach((elem)=>{
        item_list += "<div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\"><div class=\"thumbnail\"><a href=\"bidding.php?id="+
          elem.item_id+"\" ><img style= \"height:150px\"class=\"img\" src=\""+elem.item_icon_url+
            "\"></a><div class=\"caption\"><h6>"+elem.item_name+"</h6></div></div></div>";
        count++;
        if(count%6 == 0 ){
          item_list +="</div><div class=\"row\">";
        }
      });
        document.getElementById("items_body").innerHTML = item_list;
    }
    else if(this.status == 403){
      document.write("Error 403. Forbidden!");
    }
    else if(this.status == 404){
      document.write("Error 404. Not Found!");
    }
  }
  var search = document.getElementBy("search_in").value;
  var searchString="../controller/item_controller.php?search="+search;

  x.open("GET",searchString, true);
  x.send();
}
