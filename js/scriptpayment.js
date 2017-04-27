	function subscribers(option)
		{
			//Get user input value
			var xhttp;
			if (window.XMLHttpRequest) {
				xhttp = new XMLHttpRequest();
				} else {
				// code for IE6, IE5
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
		    xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					console.log(this.responseText);
					document.getElementById("optionname").innerHTML=this.responseText;
				}
		  };
		  //Direct it to the page that you want the results to be displayed on
		  xhttp.open("GET", '../controller/paymentoptionscontroller.php?options=' + option, true);
		  xhttp.send();
		}
