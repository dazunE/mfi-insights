// Google Fonts

 WebFontConfig = {
    google: { families: [ 'Anton::latin', 'Source+Sans+Pro:400,400italic,300,600:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 


 // Other jQuery

  $(document).ready(function() {

// 
        $('#responsive').lightSlider({
            item:4,
            loop:false,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
            ]
        });  


    //

    $( ".highlights-panel-paragraph-more" ).click(function() {
        $( ".highlights-panel-paragraph" ).toggleClass( "active" );
        $(".highlights-panel-paragraph-more").hide();
    });

    
 });