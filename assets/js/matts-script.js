function menu_scroll_change(){
	if($(window).scrollTop() > 200) {
		$('nav.header-navigation').addClass('shade-down');
        $('.nav-logo-scrolling').addClass('scrolling-logo-show');
        $('.nav-logo').addClass('logo-hide');
	}else{
		$('nav.header-navigation').removeClass('shade-down');
        $('.nav-logo-scrolling').removeClass('scrolling-logo-show');
        $('.nav-logo').removeClass('logo-hide');
    }
}

$(function(){
	menu_scroll_change();
	$('i.fas.fa-bars.responsive-menu-button').click(function(){
		$('.menu-primary-menu-container').fadeIn(300, function(){
			$('.menu-primary-menu-container').addClass('active');
			$('body').addClass('no-scroll');
			$('html').addClass('no-scroll');
		});
	});


	// Count Up - Counters
	$('.count-up-num').each(function() {
		var $this = $(this),
		countTo = $this.attr('data-count');

		$({countNum: $this.text()}).animate({
			countNum: countTo
			},{
			duration: 3000,
			easing:'linear',
			step: function() {
				$this.text(Math.floor(this.countNum));
			},
			complete: function() {
				$this.text(this.countNum);
			}
		});
	});



});

$(window).scroll(function(){
	menu_scroll_change();
});
