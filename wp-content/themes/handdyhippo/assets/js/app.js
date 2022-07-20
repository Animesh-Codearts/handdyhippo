
jQuery('.mobile-menu').slicknav({
    label: '',
    prependTo: '.header_navs .container',
    closedSymbol: '+',
    openedSymbol: '-',
    init: function () {}
});

var scroll = window.requestAnimationFrame ||
// IE Fallback
function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.show-on-scroll'); 

function loop() {

    elementsToShow.forEach(function (element) {
      if (isElementInViewport(element)) {
        element.classList.add('is-visible');
      } else {
        element.classList.remove('is-visible');
      }
    });

    scroll(loop);
}

// Call the loop for the first time
loop();
// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
      el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
      (rect.top <= 0
        && rect.bottom >= 0)
      ||
      (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.top <= (window.innerHeight || document.documentElement.clientHeight))
      ||
      (rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
  }

jQuery(".tab_content_area").hide(); 
jQuery("ul.tabs li:first").addClass("active").show(); 
jQuery(".tab_content_area:first").show(); 

jQuery("ul.tabs li").click(function () {
    jQuery("ul.tabs li").removeClass("active"); 
    jQuery(this).addClass("active"); 
    jQuery(".tab_content_area").hide(); 
    setTimeout(() => {
        var activeTab = jQuery(this).find("a").attr("href"); 
        jQuery(activeTab).fadeIn(); 
    }, 500);
    
    return false;
   
});


jQuery('.tab-slider').owlCarousel({
    loop:false,
    margin:40,
    nav:false,
	dots:true,
    autoplay:true,
    navText: ['<i class="bi bi-arrow-left"></i>', '<i class="bi bi-arrow-right"></i>'],	
    responsive:{
        0:{
            items:1,
            dots: false,
            nav: true
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});


jQuery('.blogsection').owlCarousel({
  loop:false,
  margin:15,
  nav:true,
  dots:false,
  autoplay:true,
  navText: ['<i class="bi bi-arrow-left"></i>', '<i class="bi bi-arrow-right"></i>'],	
  responsive:{
      0:{
          items:1,
          dots: false,
          nav: true
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});

jQuery('.teamsection').owlCarousel({
  loop:false,
  margin:15,
  nav:true,
  dots:false,
  autoplay:true,
  navText: ['<i class="bi bi-arrow-left"></i>', '<i class="bi bi-arrow-right"></i>'],	
  responsive:{
      0:{
          items:1,
          dots: false,
          nav: true
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});

jQuery('.testimonialsection').owlCarousel({
  loop:false,
  margin:40,
  nav:false,
  dots:true,
  autoplay:true,
  navText: ['<i class="bi bi-arrow-left"></i>', '<i class="bi bi-arrow-right"></i>'],	
  responsive:{
      0:{
          items:1,
          dots: false,
          nav: true
      },
      600:{
          items:2
      },
      1000:{
          items:2
      }
  }
});






