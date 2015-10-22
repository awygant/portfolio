$(document).ready(function(){
    var lightbox = $("#lightbox");
    var lightboxImg = $("#lightboxImg");

    $('.card').click(function(){
        lightboxOpen($(this));
    });

    $('.portfolio-item .left-column img').click(function(){
        lightboxOpen(this);
    });

    lightbox.click(function(){
        lightboxClose();
        window.history.back();
    });

    function lightboxOpen(i){
        if(!lightbox.is(':visible')){

            // Save the original image
            var original = $(i).find('img');

            // Go one level up the DOM, look for child images
            iList = $(i).parent().find('img');

            var startPoint = 0;
            var current = 0;

            iList.each(function(){
                // Check to see if this is the original so we can jump to that point in the carousel
                if($(this).attr('src') == $(original).attr('src')){
                    startPoint = current;
                }
                lightboxImg.append($(this).clone());
                current++;
            });

            $(".owl-carousel").owlCarousel({
                singleItem:true,
                pagination:true
            });
            var owl = $(".owl-carousel").data('owlCarousel');
            owl.jumpTo(startPoint);
            lightbox.fadeIn('fast');
            $('body').css('overflow', 'hidden');
            window.history.pushState('null', null, '#');
        }

    }
    
    function lightboxClose(){
        $('body').css('overflow', 'auto');
        lightboxImg.html('');
        lightbox.fadeOut('fast');
        var owl = $(".owl-carousel").data('owlCarousel');
        owl.destroy();
    }

    if (window.history && window.history.pushState) {
        $(window).on('popstate', function() {
            lightboxClose();
        });
    }

});