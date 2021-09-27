
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:1,
  nav:true,
  autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:1
    }
  }
});




///


$('.owl-carousel_canho').owlCarousel({
  margin:0,
  autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  dot: true,
//   customPaging:
// function(slick,index) {
// return '<span>' + (index + 1) + '</span>'; }
responsive:{
  0:{
    items:1
  },
  600:{
    items:1
  },
  1000:{
    items:1
  }
}
});
////

$('.matbang_canho .owl-dot').each(function(){
  $(this).children('span').text($(this).index()+1);
});

$(document).ready(function() {
  var s = $(".navbar");
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

// slick slide
$('.slide-detail').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  focusOnSelect: true,
  infinite:true,
  swipeToSlide: true,
   asNavFor: '.slide-center-mode',
  cssEase: 'linear'
});

// 
$('.slide-center-mode').slick({
  centerMode: true,
  slidesToShow: 4,
  arrows:true,
  focusOnSelect: true,
  asNavFor: '.slide-detail',
  swipeToSlide: true,
  appendArrows: '.contron-pre-next',

  responsive: [
  {
    breakpoint: 768,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '10px',
      slidesToShow: 4
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '10px',
      slidesToShow: 1
    }
  }
  ]
})



