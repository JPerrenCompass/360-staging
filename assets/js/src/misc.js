/* JS for everybody!!! */
$('.left-multislider').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: true,
 dots: true,
 fade: true,
 autoplay: true,
 asNavFor: '.right-multislider'
});
$('.right-multislider').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 asNavFor: '.left-multislider',
 dots: false,
 arrows: false,
 fade: true,
 focusOnSelect: true
});

$('.slider-gallery').slick({
slidesToShow: 5,
slidesToScroll: 1,
arrows: true,
dots: false,
autoplay:false
});


function MatchHeight() {
  $('.blog-row, .news-item, .nands-sidebar-item, .tw-match-row, .nandu-col-list')
    .matchHeight({})
  ;
}
//Functions that run when all HTML is loaded
$(document).ready(function() {
  MatchHeight();
});
