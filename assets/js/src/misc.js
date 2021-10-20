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
