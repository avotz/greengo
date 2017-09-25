;(function($){

  var btnMenu = $('#btn-menu'),
      menu = $('.header-menu');
     
    new WOW().init();
    // $('.masonry-gallery').masonry({
    //   // options
    //   itemSelector: '.woocommerce-product-gallery__image',
    //   columnWidth: 100
    // });
   
    $('#menu-item-133 > a').click(function(e) {
      e.preventDefault();
     
    });
    //view more
    $('.view-more').click(function(e) {
      e.preventDefault();
      $('.content-description').css({
          'height': 'auto'
      });
      $('.view-less').show();
      $('.view-more').hide();
  });
  $('.view-less').click(function(e) {
     e.preventDefault();
      $('.content-description').css({
          'height': '150px'
      });
      $('.view-more').show();
      $('.view-less').hide();
  });
    
    $('.ui-state-default').on('click', function(e){
            e.preventDefault();
           
        });
    /*$('.masonry-gallery').isotope({
      layoutMode: 'masonry',
      itemSelector: '.woocommerce-product-gallery__image'
    });*/

    $('.woocommerce-product-gallery__image a').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });
     $('.page-carousel a').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });

      
       btnMenu.on('click', function(){
            menu.toggle();
           
        });

       menu.find(".menu-item-has-children").hoverIntent({
          over: function() {

                $(this).find(">.sub-menu").slideDown(200 );
              },
          out:  function() {
                
                $(this).find(">.sub-menu").slideUp(200);
              },
          timeout: 200

           });
        
           $('.related-panel').hoverIntent({
            over: function() {
                if(!isMobile.any())
                  $(this).toggleClass('open');
                },
            out:  function() {
                if(!isMobile.any())
                  $(this).toggleClass('open');
                },
            timeout: 200
  
             });

             var isMobile = {
                Android: function() {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function() {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function() {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function() {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function() {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function() {
                    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                }
            };
        
            $('.related-panel .btn-more-tours').on('click', function(e) {
                if(!isMobile.any())
                 e.preventDefault();
        
           });

            
      
      $(".date").flatpickr({
      minDate: "today",
      onChange: function(selectedDates, dateStr, instance) {
           //$('.filters').find('form').submit();
        },
    });
       $('select').select2();

    // SMOOTH ANCHOR SCROLLING
    var $root = $('html, body');
    $('a.anchor').click(function(e) {
        var href = $.attr(this, 'href');
        if (typeof($(href)) != 'undefined' && $(href).length > 0) {
            var anchor = '';

            if (href.indexOf("#") != -1) {
                anchor = href.substring(href.lastIndexOf("#"));
            }

            if (anchor.length > 0) {
                console.log($(anchor).offset().top);
                console.log(anchor);
                $root.animate({
                    scrollTop: $(anchor).offset().top
                }, 500, function() {
                    window.location.hash = anchor;
                });
                e.preventDefault();
            }
        }
    });

    // mini-contact form
  /*$('.mini-contact__btn').on('click', function (e) {
      
      $(this).toggleClass('open');
      $('.mini-contact').toggleClass('open');;    
  });
  
  $('.mini-contact__close').on('click', function (e) {
      
      $('.mini-contact__btn').removeClass('open');
      $('.mini-contact').removeClass('open');    
  });*/

   // Forms with ajax process
    $('form[data-remote]').on('submit', function(e){
        var form =$(this);
        var method = form.find('input[name="_method"]').val() || 'POST';
        var url = form.prop('action');
        form.find('.loader').show();
        $.ajax({
            type: method,
            url: url,
            data: form.serialize(),
            success: function(){
                var message = form.data('remote-success-message');
                form.find('.loader').hide();
                if(message)
                {

                    $('.response').removeClass('message-error').addClass('message-success').html(message).fadeIn(300).delay(4500).fadeOut(300);
                }
            },
            error:function(){
                form.find('.loader').hide();
                $('.response').removeClass('message-success').addClass('message-error').html('Whoops, looks like something went wrong.').fadeIn(300).delay(4500).fadeOut(300);

            }
        });

        limpiaForm(form);

        e.preventDefault();
    });

    $('input[data-confirm], button[data-confirm]').on('click', function(e){
       var input = $(this);

        input.prop('disabled','disabled');

        if(! confirm(input.data('confirm'))){
            e.preventDefault();
        }
    });

    function limpiaForm(miForm) {

        // recorremos todos los campos que tiene el formulario
        $(":input", miForm).each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase();
            //limpiamos los valores de los campos…
            if (type == 'text' || type == 'password'  || type == 'email' || tag == 'textarea')
                this.value = "";
            // excepto de los checkboxes y radios, le quitamos el checked
            // pero su valor no debe ser cambiado
            else if (type == 'checkbox' || type == 'radio')
                this.checked = false;
            // los selects le ponesmos el indice a -
            else if (tag == 'select')
                this.selectedIndex = -1;
        });
    }
      
      
      

    //$(".chosen-select").chosen();
    
    //SCROLL WINDOW FUNCTIONALITY
    function isHome(){
      return $('body').hasClass('home');
    }
    
    $(window).scroll(function () {

          if(isHome()){
              if ($(this).scrollTop() > ($('.banner').height()-$('.header').height())) {
                  $('.header').addClass("header--fixed");
              } else {
                  $('.header').removeClass("header--fixed");
              }
          }
      });

    
    $('.intro__video').css('opacity', '0');
    $(window).load(function() {
       

       
      
      $('.preloader').addClass('animated fadeOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $('.preloader').hide();
        $('.intro__video').addClass('animated fadeIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
          //$('.intro-tables').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
        });
      });

      var $w = $(window),
      $background = $('.banner.banner-page .item');

        // Fix background image jump on mobile
        if ((/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
            $background.css({'top': 'auto', 'bottom': 0});

            $w.resize(sizeBackground);
            sizeBackground();
        }

        function sizeBackground() {
            $background.height(screen.height);
        }

     

      resizes();

    });
   



   
    $(window).resize(resizes);
    //$(window).scroll(resizes);

    function resizes()
     {
       
      
       var footerHeight = 0,
           footerTop = 0,
           $footer = $(".footer");
           
       positionFooter();
       
       function positionFooter() {
       
                footerHeight = $footer.height()+16;
                footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
       
               if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                   $footer.css({
                        position: "absolute"
                    })
                //    }).animate({
                //         top: footerTop
                //    })
               } else {
                   $footer.css({
                        position: "relative"
                   })
               }
               
       }

     }

// FUNCTION FOR More info

    var btnIncludes = $('.product-description-accordion-button');
    var IncludesContent = $('.product-description-accordion-content');
    
    IncludesContent.addClass('hidden');

    btnIncludes.on('click', function (e) {
        $(this)
            .next()
            .slideToggle(200);
            /*.siblings('.product-description-accordion-content')
            .slideUp(200);*/

    });
    $(".page-carousel").owlCarousel({
      animateOut: 'fadeOut',
      items : 1,
      autoplay : true,
      autoplayTimeout: 5000,
      loop : true,
      nav : true,
      navText : ['','']
      /*onChange : function (e) {
        console.log(e.target);
        $('.owl-item.active span').addClass('animated');
        $('.owl-item.active h1').addClass('animated');
      }*/
      /*slideSpeed : 300,
      paginationSpeed : 400,*/
      /*singleItem:true*/
  });

    $(".banner-carousel").owlCarousel({
      animateOut: 'fadeOut',
      items : 1,
      autoplay : true,
      autoplayTimeout: 5000,
      loop : true,
      nav : true,
      navText : ['','']
      /*onChange : function (e) {
        console.log(e.target);
        $('.owl-item.active span').addClass('animated');
        $('.owl-item.active h1').addClass('animated');
      }*/
      /*slideSpeed : 300,
      paginationSpeed : 400,*/
      /*singleItem:true*/
  });

    $(".gallery-carousel").owlCarousel({
      animateOut: 'fadeOut',
      items : 1,
      autoplay : true,
      autoplayTimeout: 5000,
      loop : true,
      nav : true,
      mouseDrag :false,
      navText : ['','']
      /*onChange : function (e) {
        console.log(e.target);
        $('.owl-item.active span').addClass('animated');
        $('.owl-item.active h1').addClass('animated');
      }*/
      /*slideSpeed : 300,
      paginationSpeed : 400,*/
      /*singleItem:true*/
  });

$('.fishing-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
     $('.tour-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

      $('.accommodation-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

     $('.transportation-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

     fillSelectTour();

  function fillSelectTour(){
         
        
          $.ajax({
                type: 'GET',
                url: '/api/taxonomy/get_taxonomy_posts/?taxonomy=product_cat&slug=tour&count=-1',//'/api/get_posts/?post_type=product&count=-1',
                
                success: function(data){
                   

                    var items = [];

                var select = $('select[name="tours[]"]').empty();
                $.each(data.posts, function(i,item) {
                  select.append( '<option value="'
                                       + $.trim(item.slug) + '">'
                                       + item.title
                                       + '</option>' ); 


           
                });
          

                //select.prepend('<option value="" selected><span style="color:red;">--</span></option>');
                    
                },
                error:function(){
                    console.log('error cargando los tours')
                }
            });
          
    }

    $('.tour-popup-link').on('click',function (e) {
      
    
      //console.log($(this).data('activitie'))
      //$('#tour-popup').find('select[name="tour[]"] option[value="'+ $(this).attr('data-title') +'"]').attr("selected",true).change();
      $('#tour-popup').find('select[name="tours[]"] option[value="'+ $(this).attr('data-title') +'"]').attr("selected",true).change();
      
      console.log($('#tour-popup').find('select[name="tours[]"] option[value="'+ $(this).attr('data-title') +'"]'))
      

      });

     fillSelectAccommodation();

  function fillSelectAccommodation(){
         
        
          $.ajax({
                type: 'GET',
                url: '/api/taxonomy/get_taxonomy_posts/?taxonomy=product_cat&slug=luxury-accommodation&count=-1',//'/api/get_post/?id='+ post_id +'&post_type=tour',
                
                success: function(data){
                  

                    var items = [];

                var select = $('select[name="accommodations[]"]').empty();
                $.each(data.posts, function(i,item) {
                  select.append( '<option value="'
                                       + $.trim(item.slug) + '">'
                                       + item.title
                                       + '</option>' ); 


           
                });
          

                //select.prepend('<option value="" selected><span style="color:red;">--</span></option>');
                    
                },
                error:function(){
                    console.log('error cargando los accommodations')
                }
            });
          
    }

     $('.accommodation-popup-link').on('click',function (e) {
      
    
      //console.log($(this).data('activitie'))
      //$('#tour-popup').find('select[name="tour[]"] option[value="'+ $(this).attr('data-title') +'"]').attr("selected",true).change();
      $('#accommodation-popup').find('select[name="accommodations[]"] option[value="'+ $(this).attr('data-title') +'"]').attr("selected",true).change();
      
   

      });

     $('.fishing-popup-link').on('click',function (e) {
      
    
     
      $('#fishing-popup').find('input[name="your-subject"]').val( $(this).attr('data-title') );
      
      

      });






})(jQuery);


function getScrollerWidth() {
  var scr = null;
  var inn = null;
  var wNoScroll = 0;
  var wScroll = 0;

  // Outer scrolling div
  scr = document.createElement('div');
  scr.style.position = 'absolute';
  scr.style.top = '-1000px';
  scr.style.left = '-1000px';
  scr.style.width = '100px';
  scr.style.height = '50px';
  // Start with no scrollbar
  scr.style.overflow = 'hidden';

  // Inner content div
  inn = document.createElement('div');
  inn.style.width = '100%';
  inn.style.height = '200px';

  // Put the inner div in the scrolling div
  scr.appendChild(inn);
  // Append the scrolling div to the doc
  document.body.appendChild(scr);

  // Width of the inner div sans scrollbar
  wNoScroll = inn.offsetWidth;
  // Add the scrollbar
  scr.style.overflow = 'auto';
  // Width of the inner div width scrollbar
  wScroll = inn.offsetWidth;

  // Remove the scrolling div from the doc
  document.body.removeChild(
    document.body.lastChild);

  // Pixel width of the scroller
  return (wNoScroll - wScroll);
}

function getWindowHeight() {
  var windowHeight=0;
  if (typeof(window.innerHeight)=='number') {
    windowHeight=window.innerHeight;
  } else {
    if (document.documentElement && document.documentElement.clientHeight) {
      windowHeight = document.documentElement.clientHeight;
    } else {
      if (document.body && document.body.clientHeight) {
        windowHeight=document.body.clientHeight;
      }
    }
  }
  return windowHeight;
}

function getWindowWidth() {
  var windowWidth=0;
  if (typeof(window.innerWidth)=='number') {
    windowWidth=window.innerWidth;
  } else {
    if (document.documentElement && document.documentElement.clientWidth) {
      windowWidth = document.documentElement.clientWidth;
    } else {
      if (document.body && document.body.clientWidth) {
        windowWidth=document.body.clientWidth;
      }
    }
  }
  return windowWidth;
}

