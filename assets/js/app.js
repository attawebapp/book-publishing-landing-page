$(".success_slider").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        arrows: false,
        dots: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        arrows: false,
        dots: true,
      }
    }
  ]
});
$(".comprehensive_slider").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        arrows: false,
        dots: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        arrows: false,
        dots: true,
      }
    }
  ]
});

$(".port_slider").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 6,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        arrows: false,
        dots: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        arrows: false,
        dots: true,
      }
    }
  ]
});


$('.nav-link').on('shown.bs.tab', function (e) {
  $('.port_slider').slick('setPosition');
})

// =============================================
// popup form js start  
// =============================================
function openPopup() {
  const popupForm = document.querySelector(".popup_form");
  popupForm.classList.add("active")
}

function closePopup() {
  const popupForm = document.querySelector(".popup_form");
  popupForm.classList.remove("active")
}
// =============================================
// popup form js end 
// =============================================

// =============================================
// Responsive js end 
// ============================================= 
$(document).ready(function () {
  $('.open_menu').click(function () {
    $('.side_menu').addClass('show')
    $('.responsive_overly').addClass('show')
  });
  $('.close_menu').click(function () {
    $('.side_menu').removeClass('show')
    $('.responsive_overly').removeClass('show')
  });
});
// =============================================
// Responsive js end 
// =============================================

// =============================================
// Pages Search Form js Start
// =============================================

document.addEventListener("DOMContentLoaded", function () {

  const searchInput = document.querySelector(".side_form input");
  const menuItems = document.querySelectorAll(".side_menu ul li");

  searchInput.addEventListener("keyup", function () {

    let filter = searchInput.value.toLowerCase();

    menuItems.forEach(function (item) {

      let text = item.textContent.toLowerCase();

      if (text.includes(filter)) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }

    });

  });

});

// =============================================
// Pages Search Form js end 
// ============================================= 