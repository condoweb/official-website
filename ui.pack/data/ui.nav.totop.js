
//toTop
function toTop() {

    //alert("avvio §toTop");

    $('.§totop, .§totop-left, .§totop-right').css("display","none");
    var offset = $(document).height()/10;
    var duration = $(document).height()/5;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset && offset > 900) {
            $('.§totop, .§totop-left, .§totop-right').fadeIn(500);
        } else {
            $('.§totop, .§totop-left, .§totop-right').fadeOut(500);
        }
    });

    $('.§totop, .§totop-left, .§totop-right').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0 }, duration);
        return false;
    });
};

$(window).load(function(){
    setTimeout(function() {
        toTop();
    },50);
});
