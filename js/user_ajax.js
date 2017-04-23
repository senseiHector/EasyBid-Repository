function loadUser(user_id){
  var x = new XMLHttpRequest();
  x.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var this_user = JSON.parse(this.responseText);
      document.getElementById('user_full').innerHTML=this_user.firstname + " " + this_user.lastname;

      document.getElementById('user_info').innerHTML="Username: "+this_user.username+
      "<br>E-Mail: "+this_user.email+"<br>Phone Number: "+this_user.phone;
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
