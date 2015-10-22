$(document).ready(function(){
    $('.galleryExpand').click(function(){
        $(this).parent().next('.gallery').slideToggle();
        if($(this).html() == 'See Gallery'){
            $(this).html('Collapse Gallery');
        }
        else{
            $(this).html('See Gallery');
        }
    });
});