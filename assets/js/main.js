jQuery.noConflict();

function touchDevices() {
	if( !('ontouchstart' in document.documentElement) ) {
		jQuery('html').addClass('no-touch');
	} else {
		jQuery('html').addClass('touch');
	}
}

var wow = new WOW(
  {
    boxClass: 'wow',    
    animateClass: 'animated', 
    offset: 200,          
    mobile: false,      
    live: true,      
    scrollContainer: null 
  }
);
wow.init();


function wpVideo() {
	jQuery( ".entry iframe" ).each(function(index) {
		jQuery(this).wrap('<div class="media-container"></div>');
	});
}

function mobileNavigation() {
	jQuery('.menu-button').click(function(e) {
		e.preventDefault();
		jQuery(this).toggleClass('active');
		jQuery('.main-nav').fadeToggle(300);
	});
}

function dropdownNav() {
    if( jQuery('.nav-menu .menu-item-has-children ul').length > 0 ) {
            jQuery('.nav-menu .menu-item-has-children').append('<div class="dropdown-arrow"><span class="icon-dropdown-arrow"></span></div');
      }

    jQuery('.touch .nav-menu li.menu-item-has-children .dropdown-arrow').click(function() {
        jQuery(this).siblings('.sub-menu').slideToggle();
    });
}

function stickyHeader() {
  var windowScroll = jQuery(window).scrollTop();
  var header = jQuery('.main-header');
  if (windowScroll > 50) {
    header.addClass('sticky-header');
  } else {
    header.removeClass('sticky-header');
  }

}

function smoothScroll() {
  var hash;

  jQuery(".scroll-to").click(function() {
    var url = jQuery(this).attr('href');
    var hash = url.substring(url.indexOf('#'));
    return scrollto_with_hash(hash);
  });

  hash = window.location.hash.replace('#', '');
  if (hash != '') {
    hash = '#' + hash;
    scrollto_with_hash(hash);
  }
}


function scrollto_with_hash(hash) {
  var val = 88;

  if (jQuery(hash).length) {
    jQuery('html, body').animate({
      scrollTop: jQuery(hash).offset().top - val
    }, 600);
    return false;
  }
}

function mainSlider() {
    if(jQuery('.main-slider').length > 0){
        jQuery('.main-slider').slick({
            dots: true,
            dotsClass: 'main-slider-dots',
            adaptiveHeight: true,
            customPaging : function() {
                return '<i></i>';
            },
            nextArrow: '<button class="button-main-slider next-main-slide"><img src="'+WPURLS.assetUrl+'/assets/images/circle-arrow-right.svg" alt=""></button>',
            prevArrow: '<button class="button-main-slider prev-main-slide"><img src="'+WPURLS.assetUrl+'/assets/images/circle-arrow-left.svg" alt=""></button>',
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }
}

jQuery(document).ready(function() {
	touchDevices();
    wpVideo();
    mobileNavigation();
    dropdownNav();
    smoothScroll();
    mainSlider();
});
jQuery(window).scroll(function() {
	stickyHeader();
});
