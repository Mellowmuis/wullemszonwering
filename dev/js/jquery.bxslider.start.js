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
    speed: 1000,
    infiniteLoop: true,
    hideControlOnEnd: true,
    touchEnabled: false,
    pager: false,
    controls: false,
    onSliderLoad: function() {
      $('.Slider').css('visibility', 'visible');

    }
  });
});
