$(document).ready(function() {
    $('.scrollPage').click(function() {
       
       var elementClicked = $(this).attr("href");
       var destination = $(elementClicked).offset().top;
       var time = 500;
       $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination + 1}, time, 'swing', function() { window.location.href = elementClicked;} );
       return false;
    }); 
    var elem = $('#_' + window.location.hash.replace('#', ''));
    if(elem) {
        var destination = elem.offset().top;
        var time = 500;
        $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination + 1}, time, 'swing' );
        return false;
    }
});