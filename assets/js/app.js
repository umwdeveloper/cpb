$(".quote-slider").slick({
  slidesToShow: 3,
  infinite: true,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  // nav:false,
  dots: false,
  arrows: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$(".news-slick").slick({
  slidesToShow: 1,
  infinite: true,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 5000,
  // nav:false,
  dots: false,
  arrows: true,
prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">❮</button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button">❯</button>'
});
$(document).ready(function () {
  // Get the current URL path (e.g., 'index.php', 'about.php')
  var currentPage = window.location.pathname.split("/").pop();

  // If no file name in the path, default to index.php
  if (currentPage == "") {
    currentPage = "/";
  }

  // Add 'active' class to the corresponding link
  $('.nav-link').each(function () {
    var linkPage = $(this).attr('href');
    if (linkPage === currentPage) {
      $(this).addClass('active-nav');
    }
  });
});

