function checkUsername(){
  var checkUsername = document.getElementById('checkUsername');
  var checkU = document.getElementById('username').value;
  var userStat = document.getElementById('userStat');

  if(checkU != ""){
    var x = new XMLHttpRequest();
    x.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
          var myResult = this.responseText;
          if(myResult== 1){
            checkUsername.style.color="red";
            checkUsername.innerHTML = "Username Unavailabe";
            userStat.value = "n";
          }
          else{
            checkUsername.style.color="green";
            checkUsername.innerHTML = "Username Availabe";
            userStat.value = "y";
          }
      }
      else if(this.status == 403){
        document.write("Error 403. Forbidden!");
      }
      else if(this.status == 404){
        document.write("Error 404. Not Found!");
      }
    }
    x.open("GET","../unsecure/processunsecure.php?checkU="+ checkU, true);
    x.send();
  }
  else
    checkUsername.innerHTML = "";
}
