/**
 *Javascript that control the magic behing the item and bidding page
 *@author Gedeon Niyonkuru
 **/

$(document).ready(function () {
	//Getting the id of the item clicked 
	var id = $('#active').attr('class');

	//using ajax in order to retrieve the information of the item clicked
	$.post(
		'../controller/bidding.php', {
			itid: id
		},
		function (item) {
			//	item = $.parseJSON(data);

			$('#item_name').html(item['item_name']);
			$('tr #item_n').html(item['item_name']);
			$('#descr').html(item['description']);
			$('tr #seller').html(item['0']);
			$('tr #curr_bid').html(item['list_price'] + "GHS");
			$('tr #min_bid').html(item['min_price'] + "GHS");
			$('tr #cond').html(item['item_condition']);
			$('tr #status').html(item['status']);
		},
		'json'
	);


});

$('.thumbnail img').on({
	mouseover: function () {
		$(this).css("border", "1px solid black");
	},

	mouseout: function () {
		$(this).css("border", "none");
	}
});



//Making sure the document is ready before executing jquery
$(document).ready(function () {
	var item, item_name, descr, curr_bid, min_bid, seller, cond, status;
	$('.img').click(
		function () {
			//Showing the clicked image
			var active = $(this).attr('src');
			var id = $(this).attr('id');

			($('#active').attr({
				'src': active,
				'class': id
			})).animate({
				width: '100%'
			}, 1000);
			alert($('#active').attr('class'));
			//using ajax to get the information of the item clicked					
			$.post(
				'../controller/bidding.php', {
					itid: id
				},
				function (item) {
					$('#item_name').html(item['item_name']);
					$('tr #item_n').html(item['item_name']);
					$('#descr').html(item['description']);
					$('tr #seller').html(item['0']);
					$('tr #curr_bid').html(item['list_price'] + "GHS");
					$('tr #min_bid').html(item['min_price'] + "GHS");
					$('tr #cond').html(item['item_condition'] + "GHS");
					$('tr #status').html(item['status']);
				},
				'json'
			);

			$('html, body').animate({
				scrollTop: 0
			}, 'fast');

		}).mouseover($(this).animate({
		height: '400px'
	}, 2000));



});