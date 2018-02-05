$(document).ready(function() {
    $('.partners-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        animationLoop: true,
        directionNav: true,
        itemWidth: 140,
        itemMargin: 30,
        controlNav: false
    });
    
     $('.testimonials-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        animationLoop: true,
        directionNav: false,
        minItems: 1,
        maxItems: 2,
        itemWidth: 500,
        itemMargin: 100,
        controlNav: true
    });
    
    
    /* Mobile Nav */
    $(".open-nav").click(function() {
          $(".main-nav").addClass("open");              
    });

    $(".close-nav").click(function() {
          $(".main-nav").removeClass("open");              
    });

    /*$(".main-nav .lnk-training-programs").hover(function() {
        $(".main-nav .dropdown").removeClass("hidden");
    });*/
    var drop;
    function responsiveMenu(){
        if($( window ).width()>990){
            $("header").addClass("menu-desktop");
            $("header").removeClass("menu-mobile");
        }

        else{
            $("header").addClass("menu-mobile");
            $("header").removeClass("menu-desktop");
        }
    }
    responsiveMenu();
    $( window ).resize(function() {
        responsiveMenu();
    });
    
     $(".menu-desktop .main-nav .lnk-training-programs").hover(function() {
         $(".main-nav .dropdown").removeClass("hidden"); 
         
     }, function(){
         drop = setTimeout(function(){$(".main-nav .dropdown").addClass("hidden")}, 100); 
     });
                                                             
    $(".menu-desktop  .dropdown").hover(function() {
         $(".main-nav .dropdown").removeClass("hidden"); 
        clearTimeout(drop);
     }, function(){
         $(".main-nav .dropdown").addClass("hidden");
     });
    
    $(".menu-mobile .main-nav .lnk-training-programs a").click(function( event ) {
        if($(this).parent().hasClass('prevent')){
            $(this).parent().removeClass('prevent');
            event.preventDefault();
            $(".main-nav .dropdown").removeClass("hidden");      
        } else {
            return true;
        }
    });
                          
    function ScrollTo(id){
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $(id).offset().top - 108
        }, 800);
    }
    
    $(".l-whos-for").click( function(){
        ScrollTo("#whos-for");
    });
    $(".l-org-benefits").click( function(){
        ScrollTo("#org-benefits");
    });
    $(".l-how-work").click( function(){
        ScrollTo("#how-work");
    });
    $(".l-how-long").click( function(){
        ScrollTo("#how-long");
    });
    $(".l-how-much").click( function(){
        ScrollTo("#how-much");
    });
    $(".l-comparison").click( function(){
        ScrollTo("#comparison");
    });
    $(".l-faqs").click( function(){
        ScrollTo("#faqs");
    });
    
    $(".l-find-out").click( function(){
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("#find-out").offset().top
        }, 800);
    });

    function menuSelected(element, menu){
        var top_of_object =  $(element).offset().top - 150;
        var top_of_window = $(window).scrollTop();
        var bottom_of_object =  $(element).offset().top + $(element).outerHeight() - 150;
        $(menu).removeClass('selected');
        
        if( top_of_window > top_of_object){
            $(menu).addClass('selected');
        }
        
        if( bottom_of_object < top_of_window ){
           $(menu).removeClass('selected');
        }
    }
    
    /* Fixed Inner Menu*/
    $(window).scroll( function(){

        $('.inner-menu').each( function(i){
            var top_of_object =  $(this).offset().top;
            var top_of_window = $(window).scrollTop();
            
            if( top_of_window < top_of_object ){
                $(".inner-menu .menu").removeClass('fixed');
            }
            else{
                $(".inner-menu .menu").addClass('fixed');
            }
            
        });
        
        menuSelected("#whos-for", ".l-whos-for");
        menuSelected("#org-benefits", ".l-org-benefits");
        menuSelected("#how-work", ".l-how-work");
        menuSelected("#how-long", ".l-how-long");
        menuSelected("#how-much", ".l-how-much");
        menuSelected("#comparison", ".l-comparison");
        menuSelected("#faqs", ".l-faqs");
				
    });
    
});



