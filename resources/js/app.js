(function($){

    var app = {
        onReady: function(){
            app.customDropdown();
        },	
        onLoad: function(){
            $(document).foundation();
            app.utils();
        },


		utils: function(){
            
            $('.navbar .btn-user').click(function(){
                $('#header').toggleClass('show-account');
                $('#header').removeClass('show-classes');
                $('#header').removeClass('show-menu');
            });
            
            $('.navbar .btn-classes').click(function(){
                $('#header').toggleClass('show-classes');
                $('#header').removeClass('show-account');
                $('#header').removeClass('show-menu');
            });

            $(window).scroll(function() {                
                
                var sticky = false;
                var top = $(window).scrollTop();
                    
                if ( top > 0 ) {
                    $('.sticky').addClass('is-stuck');
                    $('.sticky').removeClass('is-anchored');
                    sticky = true;
                } else {
                        $('.sticky').addClass('is-anchored');
                        $('.sticky').removeClass('is-stuck');
                }      

            });

            $('.testi_slick').slick({ 
                arrows: true,                  
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [
                    {
                      breakpoint: 1440,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 610,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                  ]
              });
                    
              

              var $windowWidth = $(window).width();

            //   $('.switch_btns .tab-title span').click(function(e){
            //         e.preventDefault();
            //         var target = this.hash;
            //         console.log( tab_parent );
            //   });

              if ($windowWidth <= 1023) {
                  $('.switch_btns').slick({  
                      draggable: false,    
                      swipe: false,                     
                      dots: false,
                      arrow: false,
                      speed: 300,
                      slidesToShow: 2,
                      infinite: false,
                      variableWidth: true,
                      prevArrow: false,
                      nextArrow: false,
                      asNavFor: '.diff_boxes',
                      focusOnSelect: true
                  });

                  $('.diff_boxes').slick({  
                      centerMode: true,
                      swipe: false,
                      draggable: false,                     
                      dots: false,
                      arrow: false,
                      speed: 300,
                      slidesToShow: 1,
                      infinite: false,
                      variableWidth: true,
                      prevArrow: false,
                      nextArrow: false,
                      asNavFor: '.switch_btns',
                  });
              }


        },

        customDropdown: function() {
            $('.custom_dropdown > li').hover(function(){
                $(this).addClass('hover');
            }, function(){
                $(this).removeClass('hover');
            })

            $('.custom_dropdown > li').click(function(){
                $(this).toggleClass('hover');
            });

            
        }
        
        
    }


    document.addEventListener('DOMContentLoaded', app.onReady);
    window.addEventListener('load', app.onLoad);

})(jQuery);
