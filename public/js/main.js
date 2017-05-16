$(document).ready(function(){

	//initializing plugins
	 $(".button-collapse").sideNav();
	 $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false,
      hover: false,
      gutter: -25,
      belowOrigin: true,
      alignment: 'left',
      stopPropagation: false
    }
  );
	$('.carousel.carousel-slider').carousel({fullWidth: true});
	autoplay();
	$('.scrollspy').scrollSpy();
	$('.ajax').click(function(event) {
		event.preventDefault();

		$('.termek-content').load($(this).attr('href'));
	});

	$(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
							$('.button-collapse').addClass('show-on-large fixed btn-floating btn-large orange accent-3');


            } else {

							 $('.button-collapse').removeClass('show-on-large fixed btn-floating btn-large orange accent-3');


            }
						if($(this).scrollTop() > 280) {

							$('.show-table').addClass('visible');
						} else {

							$('.show-table').removeClass('visible');
						}

        });
		$('.next').click(function() {
			$('.carousel').carousel('next');
		})
		$('.prev').click(function() {
			$('.carousel').carousel('prev');
		});

		let cw = $('.carousel-slider').width();
		$('.carousel-slider').css({
		'height': (cw * 0.364) + 'px'
		});


});


function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 5500);
}

$(window).resize(function onResize() {
		let cw = $('.carousel-slider').width();
		$('.carousel-slider').css({
		'height': (cw * 0.364) + 'px'
		});
	});
