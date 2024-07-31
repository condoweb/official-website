
//paginate
function paginate(){

    //alert("avvio §paginate");
    $('.§paginate').children(".pagelist").children().children().children('a').click(function(){
        $(this).parent().parent().parent().children().children().children('a').removeClass("active");
        $(this).addClass("active");
        paginate();
    });

    //paginate
    $('.§paginate').each(function(){
        //la paginazione deve farla amedeo!
        var winWid = $(window).outerWidth();    
        if(winWid < 992){
            $(this).find('.active').parent().prev().prev().prevUntil().fadeOut(300, function() { $(this).css("display","none"); });
            $(this).find('.active').parent().prev().prev().css("display","block").fadeIn();
            $(this).find('.active').parent().prev().fadeIn().css("display","block");
            $(this).find('.active').parent().next().fadeIn().css("display","block");
            $(this).find('.active').parent().next().next().css("display","block").fadeIn();
            $(this).find('.active').parent().next().next().nextUntil().fadeOut(300, function() { $(this).css("display","none"); });
        }
        else if(winWid > 992){
            $(this).find('.active').parent().prev().prev().prev().prevUntil().fadeOut(300).delay(330, function() { $(this).css("display","none"); }); 
            $(this).find('.active').parent().prev().prev().prev().prev().css("display","block").fadeIn();
            $(this).find('.active').parent().prev().prev().prev().css("display","block").fadeIn();
            $(this).find('.active').parent().prev().prev().css("display","block").fadeIn();
            $(this).find('.active').parent().prev().css("display","block").fadeIn();
            $(this).find('.active').parent().next().css("display","block").fadeIn();
            $(this).find('.active').parent().next().next().css("display","block").fadeIn();
            $(this).find('.active').parent().next().next().next().css("display","block").fadeIn();
            $(this).find('.active').parent().next().next().next().next().fadeIn().css("display","block").fadeIn();
            $(this).find('.active').parent().next().next().next().nextUntil().fadeOut(300).delay(330, function() { $(this).css("display","none"); });
        }

    });

};

//click function


$(document).ready(function(){
    paginate();
});
$(window).resize(function(){
    paginate();
});