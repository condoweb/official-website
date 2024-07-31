
//anchor
$('a[href*=#]').click(function() {

    var root = $('html, body');
    root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 900);
    return false;

});