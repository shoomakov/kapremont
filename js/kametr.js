// change attr for <a> if width < 992
var windowWidth = $(window).width();
if (windowWidth < 992) {
  $("#gager-link").attr("href", "#change-to-gager");
}

// Other
$(".tick").hover(function() {
  $(this).addClass("animated pulse");
},
function() {
  $(this).removeClass("animated pulse");
});

$(".logo").hover(function() {
  $(this).addClass("animated pulse");
},
function() {
  $(this).removeClass("animated pulse");
});

$("#morph-button-action").hover(function() {
  $(this).addClass("animated pulse");
},
function() {
  $(this).removeClass("animated pulse");
});

$("#price-list").hover(function() {
  $(this).addClass("animated pulse");
},
function() {
  $(this).removeClass("animated pulse");
});

$("#gager").click(function() {
  $(".start-form-section").addClass("animated pulse");
  $("#change-to-gager").fadeOut(100);
  $("#change-to-gager").html("Вызвать замерщика").fadeIn(1000);
})

// setTimeout($("#change-to-gager").addClass("animated shake"),15000);
setInterval(function() {
  $("#change-to-gager").addClass("animated pulse");
}, 15000);
setInterval(function() {
  $("#change-to-gager").removeClass("animated pulse");
}, 16000);

// setInterval(function() {
//   $(".mad_title_style1").fadeOut(1000);
// }, 5000);
// setInterval(function() {
//   // $(".mad_title_style1").addClass("animated flash");
//   $(".mad_title_style1").addClass("animated slideInLeft").html("- загородных домов -");
//   setTimeout(function() {
//     $(".mad_title_style1").removeClass("animated slideInLeft").addClass("animated slideOutRight");
//   }, 4000);
// }, 17000);
// setInterval(function() {
//   // $(".mad_title_style1").addClass("animated flash");
//   $(".mad_title_style1").addClass("animated slideInLeft").html("- квартир и коттеджей -");
//   setTimeout(function() {
//     $(".mad_title_style1").removeClass("animated slideInLeft").addClass("animated slideOutRight");
//   }, 4000);
// }, 18000);
// var target = $("#change-to-gager");
// var targetPos = target.offset().top;
// var windowHeight = $(window).height();
// var scrollToElement = targetPos - windowHeight;
// $(window).scroll(function() {
//   var windowScrollTop = $(this).scrollTop();
//   if (windowScrollTop > scrollToElement) {
//     target.addClass("animated shake");
//   } else {
//     target.removeClass("animated shake");
//   }
// });

var leftBlock = $(".left-block").height();

console.log("windowWidth: " + windowWidth);

if (windowWidth > 1200) {
  // $(".start-form-section").css("margin-top", calculateHeight-238 + "px");
  $(".start-form-section").css("margin-top", leftBlock-460 + "px");
}

// if (windowWidth < 1200) {
//   $("#morph-button-action").hide();
// }

if (windowWidth > 770) {
  $("#about").css("margin-top", "-280px");
}

if (windowWidth < 975) {
  $(".page_coming_soon").css("padding-top", "10px");
  $(".advantages-margin-top").css({
    "margin-top": "5px"

  });
  $(".advantages-margin-bottom").css({
    "border": "1px solid #efbb20",
    "border-radius": "10px",
    "margin-bottom": "55px",
    "background": "rgba(0, 0, 0, 0.3)"
    // "margin-top": "35px"
  })
  $(".col-md-1").css("margin", "-35px 0px -10px -35px");
}

// Gifts in start sections
$("#gifts-start").click(function() {
  $(".home_title").fadeOut(100);
  $(".advantages").fadeOut(100);

  $("#all-gifts").append(
    "<div class='all-gifts'>" +
      "<div class='row'>" +
        "<div class='col-md-12'>" +
          "<h3 style='color: #fff'>В подарок вы можете выбрать:</h3>" +
        "</div>" +
        "<div class='col-md-6'>" +
          "<img src='img/gifts-start/ceilings.png' class='images-start-gifts img-circle animated slideInLeft' />" +
          "<span class='mad_title_style1'>Подвесные потолки</span>" +
        "</div>" +
        "<div class='col-md-6'>" +
          "<img src='img/gifts-start/air.png' class='images-start-gifts img-circle animated slideInRight' />" +
          "<span class='mad_title_style1'>Кондиционер</span>" +
        "</div>" +
        "<div class='col-md-6 padding-top-40'>" +
          "<span class='bonus-desc'><a class='back-to-advantages'>&#x02190; Назад</a></span>" +
        "</div>" +
        "<div class='col-md-6 padding-top-40'>" +
          "<span class='bonus-desc'><a href='#gifts'>+ Подарок от нас</a></span>" +
        "</div>" +
      "</div>" +
    "</div>" +
    "<script>$('.back-to-advantages').click(function() {$('.all-gifts').fadeOut(1000);$('.home_title').fadeIn(100);$('.advantages').fadeIn(1800);})</script>"
  );
}).css("cursor", "pointer");

// Back to advantages
$(".back-to-advantages").click(function() {
  $(".all-gifts").fadeOut(1000);
  $(".home_title").fadeIn(100);
  $(".advantages").fadeIn(1000);
})

// schema
// if (windowWidth < 400) {
//   $(".gift-banner").css("width", "669px");
// }
// if (windowWidth > 1300) {
//   $(".start-form-section").height(calculateHeight+15);
// }
