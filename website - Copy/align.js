// JavaScript Document
jQuery(function($) {
var w = $(window).width();
	var h= $(window).height();
	$('#teamheader').css({"margin-left":((w/2)-100)+'px',"margin-top":((h/4)-75)+'px'});
	$('#sponsorheader').css({"margin-left":((w/2)-100)+'px',"margin-top":((h/4)-75)+'px'});
	$('#sponsorsupport').css({"margin-left":((w/2)-490)+'px'});
	$('#aboutheader').css({"margin-left":((w/2)-100)+'px',"margin-top":((h/4)-75)+'px'});
	$('#aboutheader2').css({"margin-left":((w/2)-100)+'px'});
	$('#aboutsupport').css({"margin-left":((w/2)-490)+'px'});
	$('#eventsupport').css({"margin-left":((w/2)-490)+'px'});
	$('#carheader').css({"margin-left":((w/2)-100)+'px',"margin-top":((h/4)-75)+'px'});
	$('#alumheader').css({"margin-left":((w/2)-100)+'px',"margin-top":((h/4)-75)+'px'});
	$('#eventheader').css({"margin-left":((w/2)-100)+'px',"margin-top":((h/4)-75)+'px'});
	$('#contactheader').css({"margin-left":((w/2)-100)+'px',"margin-top":((h/4)-75)+'px'});
	$('#carsupport').css({"margin-left":((w/2)-490)+'px'});
	$('.carlist').css({"margin-left":((w/2)-490)+'px'});
	/*$('#sponsor2').css({"margin-left":((w/2)-550)+'px'});
	$('#sponsor1').css({"margin-left":((w/2)-375)+'px'});*/
	$('.batches').css({"margin-left":((w/2)-250)+'px'});
	$('#alumini').css({"margin-left":((w/2)-350)+'px'});
	$('#years').css({"margin-left":((w/2)-360)+'px'});
	$('#years2').css({"margin-left":((w/2)-100)+'px'});
	$('#brakes').css({"margin-left":((w/2)-200)+'px'});
	$('#events').css({"margin-left":((w/2)-175)+'px'});
	$('.imgcont').css({"margin-left":((w/2)-275)+'px'});
	$('#steering').css({"margin-left":((w/2)-200)+'px'});
	$('#cad').css({"margin-left":((w/2)-370)+'px'});
	$('#suspension').css({"margin-left":((w/2)-500)+'px'});
	$('#carsmenu').css({"margin-left":((w/2)-350)+'px'});
	var trans=$('#transmission').find('.image-div').length;
	trans=trans*160;
	trans=trans/2;
	$('#electrical').css({"margin-left":((w/2)-130)+'px'});
	$('#transmission').css({"margin-left":((w/8)-trans-100)+'px'});
	 /*$('#intro1').animate({
opacity: '1.0'
}, {
duration: 800,
complete: function() {
$('#intro2').animate({
opacity: '1.0'
}, {
duration: 800,
complete: function() {
$('#intro3').animate({
opacity: '1.0'
}, {
duration: 800,
complete: function() {
$('#intro4').animate({
opacity: '1.0'
}, {
duration: 800,
});
}
});
}
});
}
});

<div class="introd" id="introdu">
<div id="intro1" class="boldtext">We</div><div id="intro2" class="boldtext">Are</div><div id="intro3" class="boldtext">Kshatriya</div><div id="intro4" class="boldtext">!</div>
</div>
*/
});