document.documentElement.className = 'js';

jQuery(function($) {
  function getSliderSettings() {
    return {
      dots: false,
      infinite: true,
      arrows: false,
      speed: 600,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2500,
      fade: true,
      cssEase: 'linear'
    }
  }

  // Assuming this is not needed
  // if ($('#psySlider').length && $('#TherproSlideShow').length) {
  //   var isVisible = false;
  //   $(window).scroll(function() {
  //     var top_of_element = $("#TherproSlideShow").offset().top;
  //     var bottom_of_element = $("#TherproSlideShow").offset().top + $("#TherproSlideShow").outerHeight();
  //     var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
  //     var top_of_screen = $(window).scrollTop();

  //     if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
  //       if(!isVisible) {
  //         isVisible = true;
  //         $('#psySlider').slick(getSliderSettings());
  //       }
  //     }
  //   });
  // }

  // Assuming this is not needed
  // if($("#psySliderrt").length) {
  //   $("#psySliderrt").slick({
  //     dots: false,
  //     infinite: true,
  //     arrows: false,
  //     speed: 600,
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     //autoplay: true,
  //     autoplaySpeed: 3000,
  //     fade: true,
  //     cssEase: 'linear',
  //   });
  // }
  // Assuming this is not needed
  // if($("#RandomSlider").length) {
  //   $("#RandomSlider").slick({
  //     dots: false,
  //     infinite: true,
  //     arrows: false,
  //     speed: 600,
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     autoplay: true,
  //     autoplaySpeed: 3000,
  //     fade: true,
  //     cssEase: 'linear',
  //   });
  // }

  // Assuming this is not needed
  // $('#AnxietyList').hide();
  // $('#DepressionList').hide();
  // $('#RelationshipList').hide();
  // $('#CulturalList').hide();
  // $('#SleepList').hide();
  // $('#IdentityList').hide();
  // $('#MAnxietyList').hide();
  // $('#MDepressionList').hide();
  // $('#MRelationshipList').hide();
  // $('#MCulturalList').hide();
  // $('#MSleepList').hide();
  // $('#MIdentityList').hide();

  // Assuming this is not needed
  // $('.TretmentSlider .slick-arrow').click(function() {
  //   $('#MAnxietyList').hide();
  //   $('#MDepressionList').hide();
  //   $('#MRelationshipList').hide();
  //   $('#MCulturalList').hide();
  //   $('#MSleepList').hide();
  //   $('#MIdentityList').hide();
  // });

  // Assuming this is not needed
  // $('.sb1 a').click(function(e) {
  //   e.preventDefault();
  //   $('#MAnxietyList').slideDown(300);
  // });

  // Assuming this is not needed
  // $('.sb2 a').click(function(e) {
  //   e.preventDefault();
  //   $('#MDepressionList').slideDown(300);
  // });

  // Assuming this is not needed
  // $('.sb3 a').click(function(e) {
  //   e.preventDefault();
  //   $('#MRelationshipList').slideDown(300);
  // });

  // Assuming this is not needed
  // $('.sb4 a').click(function(e) {
  //   e.preventDefault();
  //   $('#MIdentityList').slideDown(300);
  // });

  // Assuming this is not needed
  // $('.sb5 a').click(function(e) {
  //   e.preventDefault();
  //   $('#MCulturalList').slideDown(300);
  // });

  // Assuming this is not needed
  // $('.sb6 a').click(function(e) {
  //   e.preventDefault();
  //   $('#MSleepList').slideDown(300);
  // });

  // Assuming this is not needed
  // $(".ColorList-circle ul li:nth-child(1)").mouseenter(function() {
  //   $('#AnxietyList').slideDown(300);
  //   $('#DepressionList').slideUp(300);
  //   $('#RelationshipList').slideUp(300);
  //   $('#CulturalList').slideUp(300);
  //   $('#SleepList').slideUp(300);
  //   $('#IdentityList').slideUp(300);
  // }).mouseleave(function() {
  //   //$('#AnxietyList').slideUp(300);
  // });

  // Assuming this is not needed
  // $(".ColorList-circle ul li:nth-child(2)").mouseenter(function() {
  //   $('#AnxietyList').slideUp(300);
  //   $('#DepressionList').slideDown(300);
  //   $('#RelationshipList').slideUp(300);
  //   $('#CulturalList').slideUp(300);
  //   $('#SleepList').slideUp(300);
  //   $('#IdentityList').slideUp(300);
  // }).mouseleave(function() {
  //   //$('#DepressionList').slideUp(300);
  // });

  // Assuming this is not needed
  // $(".ColorList-circle ul li:nth-child(3)").mouseenter(function() {
  //   $('#AnxietyList').slideUp(300);
  //   $('#DepressionList').slideUp(300);
  //   $('#RelationshipList').slideDown(300);
  //   $('#CulturalList').slideUp(300);
  //   $('#SleepList').slideUp(300);
  //   $('#IdentityList').slideUp(300);
  // }).mouseleave(function() {
  //   //$('#RelationshipList').slideUp(300);
  // });

  // Assuming this is not needed
  // $(".ColorList-circle ul li:nth-child(4)").mouseenter(function() {
  //   $('#AnxietyList').slideUp(300);
  //   $('#DepressionList').slideUp(300);
  //   $('#RelationshipList').slideUp(300);
  //   $('#CulturalList').slideUp(300);
  //   $('#SleepList').slideUp(300);
  //   $('#IdentityList').slideDown(300);

  // }).mouseleave(function() {
  //   //$('#IdentityList').slideUp(300);
  // });

  // Assuming this is not needed
  // $(".ColorList-circle ul li:nth-child(5)").mouseenter(function() {
  //   $('#AnxietyList').slideUp(300);
  //   $('#DepressionList').slideUp(300);
  //   $('#RelationshipList').slideUp(300);
  //   $('#CulturalList').slideDown(300);
  //   $('#SleepList').slideUp(300);
  //   $('#IdentityList').slideUp(300);
  // }).mouseleave(function() {
  //   //$('#CulturalList').slideUp(300);
  // });

  // Assuming this is not needed
  // $(".ColorList-circle ul li:nth-child(6)").mouseenter(function() {
  //   $('#AnxietyList').slideUp(300);
  //   $('#DepressionList').slideUp(300);
  //   $('#RelationshipList').slideUp(300);
  //   $('#CulturalList').slideUp(300);
  //   $('#SleepList').slideDown(300);
  //   $('#IdentityList').slideUp(300);
  // }).mouseleave(function() {
  //   //$('#SleepList').slideUp(300);
  // });

  // Assuming this is not needed
  // $(".ImgHover a").hover(function() {
  //   var s = $(this).attr('href');
  //   console.log(s);
  //   $("#ImgHdiv img").attr("src", s);
  //   $("#ImgHdiv img").attr("srcset", s);
  //   $("#ImgHdiv a").attr("href", s);
  // });

  // Assuming this is not needed
  // if($('.AwardSlider').length) {
  //   $('.AwardSlider').slick({
  //     dots: false,
  //     infinite: true,
  //     speed: 600,
  //     slidesToShow: 5,
  //     slidesToScroll: 1,
  //     nextArrow: '<img src="'+window.stylesheet_directory_uri + '/images/arrow-right.png" alt="arrow-right" class="slick-next" />',
  //     prevArrow: '<img src="'+window.stylesheet_directory_uri + '/images/arrow-left.png" alt="arrow-left" class="slick-prev" />',
  //     responsive: [

  //       {
  //         breakpoint: 1090,
  //         settings: {
  //           arrows: true,
  //           slidesToShow: 3
  //         }
  //       },
  //       {
  //         breakpoint: 768,
  //         settings: {
  //           arrows: true,
  //           slidesToShow: 2
  //         }
  //       },
  //       {
  //         breakpoint: 600,
  //         settings: {
  //           arrows: true,
  //           slidesToShow: 1
  //         }
  //       }
  //     ]
  //   });
  // }

  // Assuming this is not needed
  // if($('.TeamSlider').length) {
  //   $('.TeamSlider').slick({
  //     dots: false,
  //     infinite: true,
  //     speed: 600,
  //     slidesToShow: 5,
  //     slidesToScroll: 1,
  //     nextArrow: '<img src="'+window.stylesheet_directory_uri + '/images/arrow-right.png" alt="arrow-right" class="slick-next" />',
  //     prevArrow: '<img src="'+window.stylesheet_directory_uri + '/images/arrow-left.png" alt="arrow-left" class="slick-prev" />',
  //     responsive: [

  //       {
  //         breakpoint: 1215,
  //         settings: {
  //           arrows: true,
  //           slidesToShow: 4
  //         }
  //       },

  //       {
  //         breakpoint: 1090,
  //         settings: {
  //           arrows: true,
  //           slidesToShow: 3
  //         }
  //       },
  //       {
  //         breakpoint: 768,
  //         settings: {
  //           arrows: true,
  //           slidesToShow: 2
  //         }
  //       },
  //       {
  //         breakpoint: 600,
  //         settings: {
  //           arrows: true,
  //           slidesToShow: 1
  //         }
  //       }
  //     ]
  //   });
  // }

  if($('.Testimonials-slider').length) {
    $('.Testimonials-slider').slick({
      dots: true,
      infinite: true,
      speed: 600,
      slidesToShow: 3,
      slidesToScroll: 1,
      rows: 0,
      nextArrow: '<img src="'+window.stylesheet_directory_uri + '/images/play-right.png" alt="arrow-right" class="slick-next" />',
      prevArrow: '<img src="'+window.stylesheet_directory_uri + '/images/play-left.png" alt="arrow-left" class="slick-prev" />',
      responsive: [

        {
          breakpoint: 1090,
          settings: {
            arrows: true,
            slidesToShow: 3
          }
        },
        {
          breakpoint: 767,
          settings: {
            arrows: true,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 580,
          settings: {
            arrows: true,
            slidesToShow: 1
          }
        }
      ]
    });
  }

  // Assuming this is not needed
  // if($('.TretmentSlider').length) {
  //   $('.TretmentSlider').slick({
  //     dots: false,
  //     infinite: true,
  //     speed: 600,
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     nextArrow: '<img src="'+window.stylesheet_directory_uri + '/images/arrow-right.png" alt="arrow-right" class="slick-next" />',
  //     prevArrow: '<img src="'+window.stylesheet_directory_uri + '/images/arrow-left.png" alt="arrow-left" class="slick-prev" />',
  //   });
  // }

  if($('.Testimonials-slider2').length) {
    $('.Testimonials-slider2').slick({
      dots: true,
      infinite: true,
      speed: 600,
      slidesToShow: 2,
      slidesToScroll: 1,
      rows: 0,
      nextArrow: '<img src="'+window.stylesheet_directory_uri + '/images/play-right.png" alt="arrow-right" class="slick-next" />',
      prevArrow: '<img src="'+window.stylesheet_directory_uri + '/images/play-left.png" alt="arrow-left" class="slick-prev" />',
      responsive: [

        {
          breakpoint: 1090,
          settings: {
            arrows: true,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            arrows: true,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 580,
          settings: {
            arrows: true,
            slidesToShow: 1
          }
        }
      ]
    });
  }

  if($('.Testimonials11').length) {
    $('.Testimonials11').slick({
      dots: true,
      arrows: false,
      infinite: true,
      speed: 600,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000
    });
  }

  const urlSearchParams = new URLSearchParams(window.location.search);
  $('#input_2_7').val(urlSearchParams.get('ctitle'));

  $('.ClinicTestMore>div>p a').click(function(e) {
    e.preventDefault();
    var newText = $(this).text() == "Close" ? "MORE" : "Close";

    $(this).parent().siblings('.ClinicTestMore>div>div:nth-child(2)').toggleClass("showmore");
    $(this).text(newText);
  });

  $('.iframelink a').click(function(e) {
    e.preventDefault();
    var ft = $(this).attr('href');
    $.fancybox({
      //settings
      'type': 'iframe',
      'width': '90%',
      'height': '85%',
      //You don't need your thisElement var, see below :
      'href': $(this).attr('href')
    });
  });

  $('.trdmore').click(function(e) {
    e.preventDefault();
    if ($("body").hasClass("fanline")) {
      //$("body").removeClass("fanline");
    } else {
      $('body').addClass("fanline");
    }
    var addressValue = $(this).attr("href");
    var addressValue1 = "#" + addressValue;
    $.fancybox({
      'type': 'inline',
      'content': addressValue1
    });
    return false;
  });

  // Assuming this is not needed
  // $('.AwardSlider a').click(function(e) {
  //   $("body").removeClass("fanline");
  // });

  if(window.Macy) {
    var macyInstance = Macy({
      container: '.AllTestimonials',
      trueOrder: false,
      waitForImages: false,
      margin: 16,
      columns: 3,
      breakAt: {
        1200: 3,
        940: 2,
        700: 1,
        400: 1
      }
    });
  }

  $(document).on('yith_infs_adding_elem', function() {
    macyInstance.recalculate();
  });
});