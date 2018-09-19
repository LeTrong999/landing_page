jQuery(document).ready(function($) {
  $('.slide_first .lt_left').click(function(event){
  	event.preventDefault();
  	var flag = $(this);
  	flag.css('pointer-events', 'none');
  	setTimeout(function () {
        flag.css('pointer-events', 'unset');
    }, 300);
  	slide_right('slide_first');
  });

  $('.slide_first .lt_right').click(function(event){
  	event.preventDefault();
  	var flag = $(this);
  	flag.css('pointer-events', 'none');

  	setTimeout(function () {
        flag.css('pointer-events', 'unset');
    }, 300);
  	slide_left('slide_first');
  });
 /*=============================================================*/
  $('.slide_two .lt_left').click(function(event){
  	event.preventDefault();
  	var flag = $(this);
  	flag.css('pointer-events', 'none');
  	setTimeout(function () {
        flag.css('pointer-events', 'unset');
    }, 300);
  	slide_right('slide_two');
  });

  $('.slide_two .lt_right').click(function(event){
  	event.preventDefault();
  	var flag = $(this);
  	flag.css('pointer-events', 'none');

  	setTimeout(function () {
        flag.css('pointer-events', 'unset');
    }, 300);
  	slide_left('slide_two');
  });
/*=============================================================*/
$('.slide_three .lt_left').click(function(event){
  	event.preventDefault();
  	var flag = $(this);
  	flag.css('pointer-events', 'none');
  	setTimeout(function () {
        flag.css('pointer-events', 'unset');
    }, 300);
  	slide_right('slide_three');
  });

  $('.slide_three .lt_right').click(function(event){
  	event.preventDefault();
  	var flag = $(this);
  	flag.css('pointer-events', 'none');

  	setTimeout(function () {
        flag.css('pointer-events', 'unset');
    }, 300);
  	slide_left('slide_three');
  });
/*=============================================================*/

  $(window).resize(function(){
	 $('#slide_first,#slide_two,#slide_three').css('left','0');
   $('.lt_left').css('display','none')
  });
});
function slide_left(id){
	$('.'+id+' .lt_left').css('display','block')
	var item = $('#'+id+" > div");
	var big_width = $('#'+id).outerWidth();
	var width_item = item.outerWidth(true);
	var number_item = item.length;
	var number_item_current = Math.floor(big_width / width_item);
	var left_current = parseInt($('#'+id).css('left'));
	var max_width_item = width_item * number_item;
	var set_left = left_current - (width_item * number_item_current);
	var flag_last = max_width_item - Math.abs(set_left);
	if( flag_last - big_width < 0){
		set_left = -(max_width_item - big_width);
		$('.'+id+' .lt_right').css('display','none')
	}
	$('#'+id).css('left', set_left)
}

function slide_right(id){
	$('.'+id+' .lt_right').css('display','block')
	var item = $('#'+id+" > div");
	var big_width = $('#'+id).outerWidth();
	var width_item = item.outerWidth(true);
	var number_item = item.length;
	var number_item_current = Math.floor(big_width / width_item);
	var left_current = parseInt($('#'+id).css('left'));
	var max_width_item = width_item * number_item;
	var set_left = left_current + (width_item * number_item_current);
	var flag_last = max_width_item - Math.abs(set_left);
	if( set_left > 0){
		set_left = 0;
		$('.'+ id+' .lt_left').css('display','none')	
	}
	$('#'+id).css('left', set_left)
}