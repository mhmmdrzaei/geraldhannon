$(function(){

	console.log("It's working");
	$('.menuSection ul.toggle').click(function(){
        $(this).toggleClass('active');
        $('.menuSection').toggleClass('mobileActive');
        $('ul.menu').toggleClass('mobileInnerActive');
        $('body').toggleClass('overflowHidden');
                });

});

$(document).ready(function(){
	$(".photosBox").colorbox({rel:'group1',width:"100%", height:"100%",next:"→",previous:"←", close:"X",current:false});

});