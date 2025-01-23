/*=================================
      mega menu
  =================================*/
  $(document).ready(function () {
    $('.navbar-toggler-mega').click(function () {
      $('.navbar-collapse-mega').slideToggle(300);
    });
  
    smallScreenMenu();
    let temp;
  
    function resizeEnd() {
      smallScreenMenu();
    }
  
    $(window).resize(function () {
      clearTimeout(temp);
      temp = setTimeout(resizeEnd, 100);
      resetMenu();
    });
  });

/*=================================
      related product Carousel
  =================================*/

$( document ).ready( function() {
    
        $( '.mx-product-slider' ).relatedProducts( {
    
          'dots': false,
          'autoplay'	: true,			
    
          // banners
          'bannerInfiniteAnimation': true,
          'bannerPosition': 'topRight',
          'bannerEachAnimated': ['slideInDown', 'slideInRight', 'rotateInUpLeft'],
    
          // products
          'productNumberVisible'  	: 3,
          'productPositionSlider' 	: 'bottomRight',
          'productSlideSpeed'			: 900,
          'productWidthSlider'		: 1100,
          'productInfiniteAnimation' 	: true,
          'productEachSliderAnimated'	: ['slideInUp', 'slideInRight', 'rotateInUpLeft'],
    
          // responsive
          'responsive': 	{
    
            0	: 	{
    
              'nav'	: false,
    
              // banners
              'bannerWrapWidth'		: 0,
              'bannerWrapHeight'		: 180,
              'bannerSpaceAround'		: 20,
              'bannerPosition'		: 'bottomCenter',
    
              // products
              'productHeightSlider'  	: 200,
              'productWidthSlider'	: 0,
              'productNumberVisible'  : 1,
              'productPositionSlider'	: 'topCenter'
              
            },
            400	: 	{
    
              'nav'	: false,
    
              // banners
              'bannerWrapWidth'		: 0,
              'bannerWrapHeight'		: 250,
              'bannerSpaceAround'		: 20,
              'bannerPosition'		: 'bottomCenter',
    
              // products
              'productHeightSlider'  	: 250,
              'productWidthSlider'	: 0,
              'productNumberVisible'  : 1,
              'productPositionSlider'	: 'topCenter'
    
            },
            500	: 	{
    
              'nav'	: false,
    
              // banners
              'bannerWrapWidth'		: 0,
              'bannerWrapHeight'		: 350,
              'bannerSpaceAround'		: 20,
              'bannerPosition'		: 'bottomCenter',
    
              // products
              'productHeightSlider'  	: 300,
              'productWidthSlider'	: 0,
              'productNumberVisible'  : 1,
              'productPositionSlider'	: 'topCenter'
    
            },
            600	: 	{
    
              'nav'	: false,
    
              // banners
              'bannerWrapWidth'		: 0,
              'bannerWrapHeight'		: 450,
              'bannerSpaceAround'		: 20,
              'bannerPosition'		: 'bottomCenter',
    
              // products
              'productHeightSlider'  	: 350,
              'productWidthSlider'	: 0,
              'productNumberVisible'  : 2,
              'productPositionSlider'	: 'topCenter'
    
            },
            768	: 	{
    
              // banners
              'bannerWrapWidth'		: 540,
              'bannerWrapHeight'		: 260,
              'bannerSpaceAround'		: 20,
    
              // products
              'productHeightSlider'  	: 190,
              'productWidthSlider'	: 400,
              'productNumberVisible'  : 2
              
            },
            992	: 	{
    
              // banners
              'bannerWrapWidth'		: 700,
              'bannerWrapHeight'		: 300,
              'bannerSpaceAround'		: 30,
    
              // products
              'productHeightSlider'  	: 200,
              'productWidthSlider'	: 700
              
            },
            1170: 	{
    
              // banners
              'bannerWrapWidth'		: 800,
              'bannerWrapHeight'		: 400,
              'bannerSpaceAround'		: 40,
    
              // products
              'productHeightSlider'  	: 250,
              'productWidthSlider'	: 700
              
            },
            1366: 	{
              
              // banners
              'bannerWrapWidth'		: 700,
              'bannerWrapHeight'		: 400,
              'bannerSpaceAround'		: 30,
    
              // products
              'productHeightSlider'  	: 250,
              'productWidthSlider'	: 800
    
            },
            1500: 	{
    
              // banners
              'bannerWrapWidth'		: 1200,
              'bannerWrapHeight'		: 500,
              'bannerSpaceAround'		: 60,
    
              // products
              'productHeightSlider'  	: 350,
              'productWidthSlider'	: 1000
              
            },
            1660: 	{
    
              // banners
              'bannerWrapWidth'		: 1200,
              'bannerWrapHeight'		: 564,
              'bannerSpaceAround'		: 80,
    
              // products					
              'productHeightSlider'  	: 330,
              'productNumberVisible'  : 4
              
            }
    
          }
    
        } );
    
      } );

/*=================================
            category-1 owl Carousel
  =================================*/
  $(document).ready(function() {
    var owl = $('#category-1-carousel');
    owl.owlCarousel({
      margin: 20,
      nav: false,
      dots:false,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  })




/*=================================
            Owl Carousel
  =================================*/

      $(document).ready(function(){

        // Adding scrollspy to
        $('body').scrollspy({target: ".navbar-nav", offset: 67})
    
        // Product Carousel
        $('#product-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            autoplay:true,
            smartSpeed:1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })
    
            // Testimonial Carousel
            $('#testimonial-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots:false,
                autoplay:true,
                smartSpeed:1000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:2
                    }
                }
            })
    
    });

/*=================================
            category-2 owl Carousel
  =================================*/
  $(document).ready(function() {
    var owl = $('#category-2-carousel');
    owl.owlCarousel({
      margin: 20,
      nav: false,
      dots:false,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  })


/*=================================
            lory Carousel
  =================================*/

  document.addEventListener('DOMContentLoaded', function () {
    var ease = document.querySelector('.js_ease2');

    lory(ease, {
        infinite: 4,
        slidesToScroll: 1,
        slideSpeed: 1000,
        ease: 'cubic-bezier(0.455, 0.03, 0.515, 0.955)'
    });
});

/*=================================
            basic Carousel
  =================================*/
  $(function() {
    carouseller = new carousel('.carouseller');
  });

  /*=================================
            services owl Carousel
  =================================*/
 
  $(document).ready(function() {
    var owl = $('#services-carousel');
    owl.owlCarousel({
      margin: 25,
      nav: true,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  })


  /*=================================
          inspiration  owl Carousel
  =================================*/
  $('#inspiration-carousel').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:true,
    items:5,
    nav:true
})


 /*=================================
          favourites owl Carousel
  =================================*/

  $('#favourites-carousel').owlCarousel({
    margin:10,
    autoplay:true,
    loop:true,
    autoWidth:true,
    items:5,
    nav:true
})


/*=================================
      Recommended owl Carousel
  =================================*/
  $(document).ready(function() {
    var owl = $('#recommended-carousel');
    owl.owlCarousel({
      margin: 35,
      nav:true,
      dots:false,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  })

/*=================================
      xzoom
  =================================*/

  $(document).ready(function () {
    $('.xzoom, .xzoom-gallery').xzoom({
        tint: '#333',
        Xoffset: 15
    });
});