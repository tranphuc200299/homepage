
$('.slide-to').slick({
  infinite: true,
  speed: 500,
  arrows:false,
  fade: true,
  autoplay: true,
appendDots: '.dot',
  autoplaySpeed: 5000,
  cssEase: 'linear',
  pauseOnDotsHover: true,
  draggable: true,
  responsive: [
  {
    breakpoint: 768,
    settings: {
      dots: true,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
    }
},
{
    breakpoint: 480,
    settings: {
      dots: true,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
    }} ]

});
//////////

$('.slick-cart').slick({
  slidesToShow: 1,
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
////////////////////
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
/////////////
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginRight = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginRight= "0";
  document.body.style.backgroundColor = "white";
}

