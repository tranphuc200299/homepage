
$('.slide-to').slick({
  dots: true,
  infinite: true,
  speed: 500,
  dot: true,
  fade: true,
  autoplay: true,
  autoplaySpeed: 1000,
  cssEase: 'linear',
  pauseOnDotsHover: true,
  draggable: true,
  responsive: [
  {
    breakpoint: 768,
    settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
    }
},
{
    breakpoint: 480,
    settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
    }} ]

});
/////////

$('.slide-about-2').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
  {
    breakpoint: 768,
    settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 1
    }
},
{
    breakpoint: 480,
    settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 1
    }} ]

});
//
$('.slide-buding-2').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
    responsive: [
  {
    breakpoint: 768,
    settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
    }
},
{
    breakpoint: 480,
    settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
    }} ]
});



$(document).ready(function() {
    var s = $(".header-content");
    var pos = s.position();                    
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();
        if (windowpos >= pos.top & windowpos >5) {
            s.addClass("stick");
        } else {
            s.removeClass("stick"); 
        }
    });

});

//toger
$(document).ready(function(){
    $(".a1").hide();
    $(".a2").hide();
    $(".select-option").click(function(){
        $(".a1").toggle();
        $(".a2").toggle();
    });
});

//////////////////////////
 ////////////////////
function myFunction() {
  var x = document.getElementById("menu-show");
  if (x.style.display === "block") {
    x.style.display = "none";
    
  } else {
    x.style.display = "block";
  }
}
/////////////////

///
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

