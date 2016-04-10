$(function() {
	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});

	$('#navigation ul li:first-child').addClass('first');
	$('.footer-nav ul li:first-child').addClass('first');

	mobile();

	$(window).on('resize', function() {
		mobile();
	});
	
	$('#navigation a.nav-btn').click(function(){
		$(this).closest('#navigation').find('ul').slideToggle()
		$(this).find('span').toggleClass('active');
		return false;
	});
});

//$(window).load(function() {
$(function () {
	$('.flexslider').flexslider({
	    animation: "fade",
		controlsContainer: ".slider-holder",
		slideshowSpeed: 3500,
		directionNav: false,
		controlNav: true,
		animationDuration: 700,
		before:function( slider ){
			$('.img-holder').animate({'bottom' : '-30px'},300)
		},
		after:function( slider ){
			$('.img-holder').animate({'bottom' : '0px'},300)
		}
	});
});

function mobile() {
	var winW = $(window).width();
	if (winW > 750) {
		$('#navigation ul').show()	
	}else{
		$('#navigation ul').hide()
		$('#navigation a.nav-btn span.arr').removeClass('active');
	}
}
 