/**
 * __nisshinTop__
 *
 * @date 2020-03-30
 */

(function ($) {
  var __nisshin__ = window.__nisshin__ || {};

  __nisshin__.Top = function () {
    var _init = function _init() {
      _mvSlider();
      _tabSwitcher();
      _fireWorks();
      mySwiper();
    };

    var _mvSlider = function _mvSlider() {
      var mySwiper = new Swiper('.swiper-container', {
        on: {
          init: function init() {
            setTimeout(function () {
              $('.swiper-pagination-bullet:first-child').addClass('kp-carousel-pagination-current');
              $('.kp-carousel_slide_num:first-child').addClass('is-active').siblings().removeClass('is-active');
            }, 10);
          },
          slideChange: function slideChange() {
            $('.swiper-pagination-bullet-active').addClass('kp-carousel-pagination-current').siblings().removeClass('kp-carousel-pagination-current');
            setTimeout(function () {
              $('.swiper-slide').attr('data-swiper-autoplay', '3000');
            }, 6000);
          },
          slideChangeTransitionStart: function slideChangeTransitionStart() {
            var target = $('.swiper-slide-active').data('index');
            $('.kp-carousel_slide_num').removeClass('is-active');
            $('._num' + target).addClass('is-active');
          }
        },
        centeredSlides: true,
        speed: 1000,
        loopedSlides: 5,
        spaceBetween: -45,
        autoplay: {
          disableOnInteraction: false
        },
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        pagination: {
          el: '.kp-carousel-pagination'
        },
        breakpoints: {
          896: {
            slidesPerView: 1,
            spaceBetween: -30,
          }
        }
      });
    };

    return {
      init: _init
    };
  }();

  __nisshin__.Top.init();
})(jQuery);