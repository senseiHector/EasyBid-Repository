/**
*@author Frances Antwi-Donkor
**/

var slide = 0;
carousel();

function carousel(){
	var i;
	var x = document.getElementsByClassName("slide");
	for(i=0; i< x.length; i++){
		x[i].style.display="none";
	}

	slide++;
	if(slide >x.length){
		slide =1
	}

	x[slide-1].style.display ="block";
	setTimeout(carousel,5000);
}


function displayBid(){
	var bidamount = document.forms["Bidding"]["amount"].value;
	if(bidamount == ""){
		alert("Please place bid");
		return false;
	}
	else{
		alert("You placed a bid of " + bidamount + "." );
	}
}

function tryid(){
	alert("hey");
}