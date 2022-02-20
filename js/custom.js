//megadropdown show hide
var windowWidth = $(window).width();
if (windowWidth > 911){
  $(".mega-dropdown").hover(function(){
    $(".mega-menu").addClass("show-megamenu");
  },
    function(){
    $(".mega-menu").removeClass("show-megamenu");
  });
  
} else if(windowWidth <= 911){
  $('.mega-dropdown').click(function(){
    $(".mega-menu").toggleClass("show-megamenu");
  })
}

//goto top button
$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    $('.goto-top').addClass('goto-show');
  }
  if ($(window).scrollTop() < 301) {
    $('.goto-top').removeClass('goto-show');
  }
});
//animate to top 
$("#goto-top").click(function () {
  $('html, body').animate({
    scrollTop: $("header").offset().top
  }, 0);
});
// STICKY HEADER
$(window).scroll(function(){
  var sticky = $('header'),
      scroll = $(window).scrollTop();
      var windowWidth = $(window).width();
  if (scroll >= 130 && windowWidth > 525) sticky.addClass('sticky-header');
  else sticky.removeClass('sticky-header');
});
// logoos slider
$('.main-slider').owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  autoplay: true,
  autoplayTimeout: 3500,
  dots: true,
  responsive: {
    0: {
      items: 1
    },
    1000: {
      items: 1,
    }
  }
})
$('.reviews-slider').owlCarousel({
  loop: true,
  margin: 10,
  center: true,
  nav: false,
  dots: true,
  autoplay: true,
  autoplayTimeout: 2000,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 3
    }
  }
})
//venue detail slider
// $('.vd-slider').owlCarousel({
//   loop: true,
//   margin: 0,
//   nav: false,
//   dots: true,
//   responsive: {
//     0: {
//       items: 1
//     },
//     1000: {
//       items: 1
//     }
//   }
// })

// responsive navigation  starts
$(document).ready(function () {
  var windowWidth = $(window).width();
  if (windowWidth <= 911) {
    $(".menu-wrap").addClass("mobileMenu");
  };
});
$(window).resize(function () {
  var windowWidth = $(window).width();
  if (windowWidth <= 911) {
    $(".menu-wrap").addClass("mobileMenu");
  } else {
    $(".menu-wrap").removeClass("mobileMenu");
  }
});
$(document).ready(function () {
  $("#navbar").on("click", function () {
    $(".mobileMenu").addClass("is-opened");
    $(".overlay").addClass("is-on");
  });
  $(".overlay").on("click", function () {
    $(this).removeClass("is-on");
    $(".mobileMenu").removeClass("is-opened");
  });
});
// responsive navigation ends





// appointment page stuff
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});


$('#daily').change(function() {
  $(".for-daily").show();
  $(".for-once-only").hide()
  $(".for-weekly").hide()
  $(".for-biweekly").hide()
});

$('#once').change(function() {
  $(".for-daily").hide();
  $(".for-once-only").show()
  $(".for-weekly").hide()
  $(".for-biweekly").hide()
});

$('#weekly').change(function() {
  $(".for-daily").hide();
  $(".for-once-only").hide()
  $(".for-weekly").show()
  $(".for-biweekly").hide()
});

$('#biweekly').change(function() {
  $(".for-daily").hide();
  $(".for-once-only").hide()
  $(".for-weekly").hide()
  $(".for-biweekly").show()
});