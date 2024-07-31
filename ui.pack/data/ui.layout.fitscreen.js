
// §fitscreen ingrandisce a seconda del window
function fitscreen(){
    var docHeight = $(window).height();
    var docWidth = $(window).width();
    $(".§fitScreen, .§fitScreen-full").css("height",docHeight+"px").css("width",docWidth+"px");
    $(".§fitScreen-height").css("height",docHeight+"px");
    $(".§fitScreen-width").css("height",docWidth+"px");
};
$(document).ready(function(){
        fitscreen();
});
$(window).resize(function(){ fitscreen(); });