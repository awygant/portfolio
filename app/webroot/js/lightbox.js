$(document).ready(function(){
    var lightbox = $("#lightbox");
    var lightboxImg = $("#lightboxImg");

    $('.card').click(function(){
        lightboxOpen($(this).find('img'));
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
            iList = $(i).parents('.gallery').find('img');
            lightboxImg.append($(i).clone());
            iList.each(function(){
                lightboxImg.append($(this).clone());
            });
            $(".owl-carousel").owlCarousel({
                singleItem:true
            });
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