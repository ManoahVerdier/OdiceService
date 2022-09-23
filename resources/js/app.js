
import.meta.glob([
  '../img/**',
  '../fonts/**',
]);
"use strict";

import 'jquery-nice-select';  
import 'bootstrap';

  



import 'bootstrap';
import 'magnific-popup';
import AOS from 'aos';
import simpleParallax from  'simple-parallax-js';




// scroll
function scroll() {
  // header
  const header = $('.js-header'),
        post = $('.js-post'),
        link = post.find('.js-post-link'),
        anchor = post.find('.js-post-anchor'),
        postHeight = post.height(),
        scrollTop = $(window).scrollTop(),
        windowHeight = $(window).height();

  if (scrollTop > 2) {
    header.addClass('visible');
  } else {
    header.removeClass('visible');
  }

  anchor.each(function () {
    let _this = $(this),
        posTop = _this.offset().top;

    if (scrollTop + 120 >= posTop) {
      link.removeClass('active');
      post.find('.js-post-link[href="#' + $(this).attr('id') + '"]').addClass('active');
    }
  });
}

scroll();
$(window).scroll(function () {
  scroll();
}); // post link scroll

(function () {
  const link = $('.js-post-link'),
        header = $('.js-header'),
        headerHeight = header.outerHeight();
  link.on('click', function (e) {
    e.preventDefault();
    let id = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({
      scrollTop: top - headerHeight
    }, 1000);
  });
})(); // magnificPopup


(function () {
  const link = $('.js-popup-open');

  if (link.length) {
    link.each(function () {
      const _this = $(this),
            type = _this.data('type');

      _this.magnificPopup({
        type: type,
        fixedContentPos: true,
        removalDelay: 200,
        closeMarkup: '<button title="%title%" type="button" class="mfp-close"><svg width="24" height="24" viewBox="0 0 24 24"><path d="M6.451 5.31l.084.073L12 10.93l5.466-5.546a.75.75 0 0 1 1.141.968l-.072.085L13.053 12l5.481 5.564a.75.75 0 0 1-.985 1.126l-.084-.073L12 13.069l-5.466 5.547a.75.75 0 0 1-1.141-.968l.072-.085L10.946 12l-5.48-5.564a.75.75 0 0 1 .985-1.126z"></path></svg></button>',
        callbacks: {
          beforeOpen: function () {
            this.st.mainClass = this.st.el.attr('data-effect');
          }
        },
        iframe: {
          markup: '<div class="mfp-iframe-scaler">' + '<div class="mfp-close"></div>' + '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' + '</div>',
          patterns: {
            youtube: {
              index: 'youtube.com/',
              id: 'v=',
              src: 'https://www.youtube.com/embed/%id%?autoplay=1'
            }
          }
        }
      });
    });
  }
})(); // Temp fix for magnific popup close issue


$(document).on('click', '.mfp-close', function (e) {
  e.preventDefault();
  $.magnificPopup.close();
}); // nice select

$(document).ready(function () {
  $('.select').niceSelect();
}); // tabs

(function () {
  let tabs = $('.js-tabs');
  tabs.each(function () {
    let thisTabs = $(this),
        nav = thisTabs.find('.js-tabs-link'),
        option = thisTabs.find('.option'),
        item = thisTabs.find('.js-tabs-item');
    nav.on('click', function () {
      let thisNav = $(this),
          indexNav = thisNav.index();
      nav.removeClass('active');
      thisNav.addClass('active');
      item.hide();
      item.eq(indexNav).fadeIn();
      return false;
    }).first().trigger('click');
    $(document).ready(function () {
      let option = $('.js-tabs-select .option');
      option.on('click', function () {
        let thisOption = $(this),
            indexOption = thisOption.index();
        console.log(indexOption);
        item.hide();
        item.eq(indexOption).fadeIn();
      });
    });
  });
})(); // scroll to


$(".js-scroll").on('click', function (e) {
  e.preventDefault();
  window.scrollTo({
    top: $($(this).attr('href')).offset().top,
    behavior: "smooth"
  });
}); // aos animation

var nbApp = 0, nbChaud = 0, nbFroid = 0, nbAutres = 0, nbUnivers = 0;

$('.nbApp').on('change', function () {
  nbApp = 0;
  nbChaud = 0;
  nbFroid = 0;
  nbAutres = 0;
  nbUnivers = 0;
  $('.nbApp').each(function (index) {
    if ($(this).is('.chaud')) {
      nbChaud += parseInt($(this).val());  
    }
    if ($(this).is('.froid')) {
      nbFroid += parseInt($(this).val());  
    }
    if ($(this).is('.autre')) {
      nbAutres += parseInt($(this).val());  
    }
  });

  nbApp = nbChaud + nbFroid + nbAutres;

  if (nbChaud > 0) {
    nbUnivers++;
  }

  if (nbFroid > 0) {
    nbUnivers++;
  }

  if (nbAutres > 0) {
    nbUnivers++;
  }

  $('.pricing__plan').removeClass("pricing__plan_premium").addClass("disabled");

  $('.pricing__line .pricing__recommended').remove();

  $('.button.pricing__button').removeClass("button pricing__button").addClass("button-gray pricing__button");
  let prix1 = 79.99 * nbApp;
  let prix2 = 89.99 * nbApp;
  let prix3 = 99.99 * nbApp;
  if (nbUnivers == 0) {
    $('.univers3').addClass("pricing__plan_premium").removeClass("disabled");
    $('.univers3 .pricing__line').append('<div class="pricing__recommended">Recommandé</div>');
    $('.univers3 .amount').text(prix3.toFixed(2) + "€");

    $('.univers1 .amount').text(prix1.toFixed(2) + "€");
    $('.univers2 .amount').text(prix2.toFixed(2) + "€");

    $('.univers3 .pricing__button').removeClass("button-gray pricing__button").addClass("button pricing__button");

    $('#prix').val(prix3.toFixed(2));
  } else if (nbUnivers == 1) {
    $('.univers1').addClass("pricing__plan_premium").removeClass("disabled");
    $('.univers1 .pricing__line').append('<div class="pricing__recommended">Recommandé</div>');
    $('.univers1 .amount').text(prix1.toFixed(2) + "€");

    $('.univers2 .amount').text(prix2.toFixed(2) + "€");
    $('.univers3 .amount').text(prix3.toFixed(2) + "€");

    $('.univers1 .pricing__button').removeClass("button-gray pricing__button").addClass("button pricing__button");
    $('#prix').val(prix1.toFixed(2));
  } else if (nbUnivers == 2) {
    $('.univers2').addClass("pricing__plan_premium").removeClass("disabled");
    $('.univers2 .pricing__line').append('<div class="pricing__recommended">Recommandé</div>');
    $('.univers2 .amount').text(prix2.toFixed(2) + "€");

    $('.univers1 .amount').text(prix1.toFixed(2) + "€");
    $('.univers3 .amount').text(prix3.toFixed(2) + "€");
    
    $('.univers2 .pricing__button').removeClass("button-gray pricing__button").addClass("button pricing__button");

    $('#prix').val(prix2.toFixed(2));
  } else if (nbUnivers == 3) {
    $('.univers3').addClass("pricing__plan_premium").removeClass("disabled");
    $('.univers3 .pricing__line').append('<div class="pricing__recommended">Recommandé</div>');
    $('.univers3 .amount').text(prix3.toFixed(2) + "€");

    $('.univers1 .amount').text(prix1.toFixed(2) + "€");
    $('.univers2 .amount').text(prix2.toFixed(2) + "€");

    $('.univers3 .pricing__button').removeClass("button-gray pricing__button").addClass("button pricing__button");
    $('#prix').val(prix3.toFixed(2));
  }

  $('.button-gray.pricing__button').addClass("disabled").prop("disabled", true).prop("href","#");
  $('.button.pricing__button').removeClass("disabled").prop("disabled", false).prop("href","#subscribePart");
  if (nbApp > 1 && !$('.pricing__plans').hasClass('changed_once')) {
    $('.pricing__plans').addClass('changed_once')
  } else if(nbApp<=1){
    $('.pricing__plans').removeClass('changed_once')
  }
  console.log('App ' + nbApp);
  $('#nbAppTot').val(nbApp);
  console.log('Chaud ' + nbChaud);
  $('#nbChaud').val(nbChaud);
  console.log('Froid ' + nbFroid);
  $('#nbFroid').val(nbFroid);
  console.log('Autre ' + nbAutres);
  $('#nbAutres').val(nbAutres);
  console.log('Univers ' + nbUnivers);
  $('#nbUnivers').val(nbUnivers);

  $('#formule').val(nbUnivers);
  
  
  $('.nbApp').text(nbApp);
})

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});

AOS.init({
  once: true
}); // parallax effect

(function () {
  const parallax = $('.js-parallax');

  if (parallax.length) {
    parallax.each(function () {
      const _this = $(this),
            scale = _this.data('scale'),
            orientation = _this.data('orientation');

      new simpleParallax(_this[0], {
        scale: scale,
        orientation: orientation,
        overflow: true,
        delay: .6,
        transition: 'cubic-bezier(0,0,0,1)'
      });
    });
  }
})(); // accordeon


(function () {
  const item = $('.js-accordeon-item'),
        head = item.find('.js-accordeon-head'),
        body = item.find('.js-accordeon-body');
  head.on('click', function () {
    let thisHead = $(this);
    thisHead.parents('.js-accordeon-item').toggleClass('active');
    thisHead.parents('.js-accordeon-item').find('.js-accordeon-body').slideToggle();
  });
})(); // height windows for ios


let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

var Device = {
  isMobile: function () {
      return $(".ismobile").is(":visible");
  },
};

$(".btn-mobile").on('click',function () {
  $(".main-nav").toggleClass("main-nav--open");
});