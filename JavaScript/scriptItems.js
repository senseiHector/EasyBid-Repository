//JAVASCRIPT FOR THE SLIDER

var currentIndex = 0,
  items = $('.container div'),
  itemAmt = items.length;

function cycleItems() {
  var item = $('.container div').eq(currentIndex);
  items.hide();
  item.css('display','inline-block');
}

var autoSlide = setInterval(function() {
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
}, 3000);

$('.next').click(function() {
  clearInterval(autoSlide);
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
});

$('.prev').click(function() {
  clearInterval(autoSlide);
  currentIndex -= 1;
  if (currentIndex < 0) {
    currentIndex = itemAmt - 1;
  }
  cycleItems();
});






$($('#descr').click(function(){
	  $('#product').fadeIn(1000);
 }
 ));

//Making sure the document is ready before executing jquery
$(document).ready(function() {  


 $('.img').click(
 
function(){
	
    $('#active').css('width','100px');
	var active=$(this).attr('src');
    ($('#active').attr('src',active)).animate({width:'100%'},1000);
	
}).mouseover($(this).animate({height:'400px'},2000));

 

 }); 

/*
    setInterval(
function timer(days){
	var x=0;
	var day=0;
	var sec=0;
	var min=0;
	var hours=0;
	
	var i= days*86400;
	while(i>0){
		i--;
		x++;
		alert(days);
		sec++;
	if(x%60==0){sec=0;}
		document.getElementById("day").innerHTML=day;
	document.getElementById("hour").innerHTML=hours;
	document.getElementById("min").innerHTML=min;
    document.getElementById("sec").innerHTML=sec;
	
	day=math.floor((days/1));
	if(day>=1) {hours=math.floor(i/3600);}
	if(hours>=1) {min=math.floor(hours/60);}
	
	//alert ("nigga what");
	}
},1000);
*/


  










