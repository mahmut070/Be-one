
jQuery(document).ready(function($){
	$('.Slider-slider.bxslider').bxSlider({
	  mode: 'fade',
	  controls: false,
	  minSlides: 1,
	  maxSlides: 1,
	  startSlide: 1,
	  //slideWidth: 1200,
	  slideMargin: 0,
	  // captions: true,
	  pause: 3000,
	  auto: true, 
	  speed: 1500,
	  infiniteLoop: true,
	  hideControlOnEnd: true,
	  touchEnabled:false,
	  pager: false
	});
});