//phone number validation
const phone_number = (phone) => {
  const phone_regex = /^\d{10}$/;
  if(phone_regex.test(phone)) {
    return phone;
  } else {
    throw new Error('Invalid Phone Number!')
  }
};
//email address validation
const email_validation = (email) => {
  const email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if(email_regex.test(email)) {
    return email;
  } else {
    throw new Error('Invalid Email Address!');
  }
};

// banner slider
    var swiper1 = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      autoplay: {
        delay: 6000, // Delay between slides
        disableOnInteraction: false, // Allow interaction to enable autoplay again
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      on: {
        slideChangeTransitionStart: function() {
          // Fade out the previous slide
          var prevSlide = this.slides[this.previousIndex];
          if (prevSlide) {
            prevSlide.style.opacity = 0;
          }
        },
        slideChangeTransitionEnd: function() {
          // Fade in the current slide
          var activeSlide = this.slides[this.activeIndex];
          if (activeSlide) {
            activeSlide.style.opacity = 1;
          }
        },
      },
    });

    // Harmbarger menu
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    jQuery(document).ready(function($){
      $("img").on('click', function () {
        document.getElementById("mySidenav").style.width = "0";
      })
    })

  //   function openNavOnClickOutside(event) {
  //     const sidebar = document.getElementById("mySidenav");
  //     const targetElement = event.target;
  //     if (!sidebar.contains(targetElement)) {
  //         openNav();
  //     }
  // }

   
    
    // subdropdown

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
    


  //  faq section
var Accordion = function (el, multiple) {
  this.el = el || {};
  this.multiple = multiple || false;

  var links = this.el.find(".faq_question");
  links.on(
    "click",
    {
      el: this.el,
      multiple: this.multiple,
    },
    this.dropdown
  );
};

Accordion.prototype.dropdown = function (e) {
  var $el = e.data.el;
  ($this = $(this)), ($next = $this.next());

  $next.slideToggle();
  $this.parent().toggleClass("faq_open");

  if (!e.data.multiple) {
    $el
      .find(".faq_answer")
      .not($next)
      .slideUp()
      .parent()
      .removeClass("faq_open");
  }
};
var accordion = new Accordion($(".faq_section_page"), false);

var Accordion = function (el, multiple) {
  this.el = el || {};
  this.multiple = multiple || false;

  var links = this.el.find(".f_question");
  links.on(
    "click",
    {
      el: this.el,
      multiple: this.multiple,
    },
    this.dropdown
  );
};

Accordion.prototype.dropdown = function (e) {
  var $el = e.data.el;
  ($this = $(this)), ($next = $this.next());

  $next.slideToggle();
  $this.parent().toggleClass("faq_open");

  if (!e.data.multiple) {
    $el.find(".f_answer").not($next).slideUp().parent().removeClass("faq_open");
  }
};
var accordion = new Accordion($(".f_section_page"), false);



//Top gallery Slider
// var sliderThumbnail = new Swiper('.slider-thumbnail', {
//   slidesPerView: 4,
//   freeMode: true,
//   loop: true,
//   watchSlidesVisibility: true,
//   spaceBetween: 10,
//   freeMode: true,
//   watchSlidesProgress: true,
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
// });


// var slider = new Swiper('.slider', {
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
//   thumbs: {
//     swiper: sliderThumbnail
//   },
//   autoplay: {
//     delay: 2500,
//     disableOnInteraction: false,
//   },
// });
// // hover


var sliderThumbnail = new Swiper('.slider-thumbnail', {
  slidesPerView: 4,
  freeMode: true,
  loop: true,
  watchSlidesVisibility: true,
  spaceBetween: 10,
  watchSlidesProgress: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var slider = new Swiper('.slider', {
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
   
  },
  thumbs: {
    swiper: sliderThumbnail
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

var sliderContainer = document.querySelector('.slider');
var isSliderHovered = false;

sliderContainer.addEventListener('mouseenter', function() {
  isSliderHovered = true;
  slider.autoplay.stop();
});

sliderContainer.addEventListener('mouseleave', function() {
  isSliderHovered = false;
  slider.autoplay.start();
});

// Handle initial autoplay
if (!isSliderHovered) {
  slider.autoplay.start();
}



// about page flip slider
// var swiper = new Swiper(".mySwiperabout", {
//   effect: "flip",
//   grabCursor: true,
// //   pagination: {
// //     el: ".swiper-pagination",
// //   },
//   autoplay: {
// delay: 2500,
// disableOnInteraction: false,
// },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
// });

jQuery(document).ready(function ($) {
  //Form Validation Home Page Form

  $('#contactForm').on('submit', function (e) {
    e.preventDefault()
    const h_name = $('#h_name').val()
    const h_phone = $('#h_phone').val()
    const h_plan = $('#h_plan').val()
    const h_date = $('#h_date').val()
    const h_location = $('#h_location').val()

    var regex = ''
    var valid

    regex = '^[a-zA-Z][a-zA-Z. ]{2,40}$'
    valid = validateInputs(h_name, regex)

    if (!valid || h_name == '') {
      alert('Please enter valid name')
      return false
    }

    regex = '^[0-9 -]{10,20}$'
    valid = validateInputs(h_phone, regex)

    if (!valid || h_phone == '') {
      alert('Please enter valid phone number')
      return false
    }

    if (h_plan === '' || h_plan === null) {
      alert('Pleae select plan')
      return false
    }

    if (h_date === '' || h_date === null) {
      alert('Pleae select date')
      return false
    }

    if (h_location === '') {
      alert('Pleae enter Location')
      return false
    }

    if ($('#h_submit').hasClass('process')) {
      alert('Please wait while processing...')
    } else {
      $('#h_submit').addClass('process')
      $.ajax({
        url: 'contactmail.php',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
          var obj1 = $.parseJSON(data)
          if (obj1[0] === 'success') {
            $('#contactForm')[0].reset()
            $('#h_submit').removeClass('process')
            location.assign('thankyou.php')
          } else if (obj1[0] === 'validation') {
            alert('Fill all mandatory fields')
            $('#h_submit').removeClass('process')
          } else if (obj1[0] === 'plan') {
            alert('Please select plan.')
            $('#h_submit').removeClass('process')
          } else if (obj1[0] === 'date') {
            alert('Please select date.')
            $('#h_submit').removeClass('process')
          } else if (obj1[0] === 'location') {
            alert('Please select location.')
            $('#h_submit').removeClass('process')
          } else if (obj1[0] === 'tryagain') {
            alert('Please try again.')
            $('#h_submit').removeClass('process')
          }
        },
      })
      // $("#send_message_form").submit();
    }
  })

  function validateInputs(value, pattern) {
    var regexppattern
    regexppattern = new RegExp(pattern)
    var valid = regexppattern.test(value)
    return valid
  }
})


// sticky navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.header-section').addClass('sticky')
  } else {
    $('.header-section').removeClass('sticky')
  }
})



