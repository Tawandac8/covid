(function ($) {
  "use strict";

  $(document).ready(function() {
    $('select').niceSelect();
  });
  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });

$(document).ready(function() {
  $('select').niceSelect();
});

var review = $('.client_review_part');
if (review.length) {
  review.owlCarousel({
    items: 1,
    loop: true,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: false,
    smartSpeed: 2000,
  });
}

//------- Mailchimp js --------//
function mailChimp() {
  $('#mc_embed_signup').find('form').ajaxChimp();
}
mailChimp();

$('.report').click(function(){
    $('.backdrop').fadeIn('slow','swing',function(){
        $('.reaction-modal').fadeIn('fast','swing')
    })
})

$('.vaccinated').click(function(){
    $('.backdrop').fadeIn('slow','swing',function(){
        $('.vac-modal').fadeIn('fast','swing')

        $('.vaccination select').change(function(){
            var _token = $('.vaccination input[name="_token"]').val()
            var city = $('.vaccination select').val()

            $('.vac-modal').fadeOut('fast','swing',function(){$('.vac-points').fadeIn('fast','swing')})

            $.ajax({
                type: "post",
                url: "/points",
                data: {'city':city,_token:_token},
                success: function (response) {
                    $('.vac-points').html(response)
                }
            });
        })
    })
})



}(jQuery));
