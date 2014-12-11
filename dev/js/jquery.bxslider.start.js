jQuery(document).ready(function($) {


  $('.Slider').bxSlider({
    mode: 'fade',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 0,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    pause: 4000,
    auto: true,
    speed: 500,
    infiniteLoop: false,
    hideControlOnEnd: true,
    touchEnabled: false,
    pager: false,
    controls: false,
    onSliderLoad: function() {
      $('.Slider').css('visibility', 'visible');

    }
  });
});
