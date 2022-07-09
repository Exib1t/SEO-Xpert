// Authors: %Author Name%

$(function() {
  sliderInit();
});

$(window).on('resize', function() {

});

$(window).on('load', function() {

});

function sliderInit() {
  $('.js-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    appendArrows: $('.js-sliderNav'),
    prevArrow: `<button type="button" class="slick-prev"><svg width="30" height="14" viewBox="0 0 30 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 7H29" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6 1L1 7L6 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</button>`,
    nextArrow: `<button type="button" class="slick-next"><svg width="30" height="14" viewBox="0 0 30 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M29 7L1 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M24 13L29 7L24 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</button>`,
  });
}
