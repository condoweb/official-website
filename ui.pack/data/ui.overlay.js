
//overlay and overbox
function overlay(the_overbox){

    //attiva lo screen
    $("body").append('<div class="§screen"/>');  

    //wrappa il figlio per centrarlo
    $(the_overbox).children(".§close").nextAll().wrapAll("<div class='overcontent'></div>");
    $(the_overbox).wrapAll("<div class='overboxScrollableBox'></div>");

    //recupera le dimensioni e centralo ( CENTRATURA ORIZZONTALE )
    var oveWidth = parseFloat( $(the_overbox).outerWidth() );
    var winWidth = parseFloat(  $(window).outerWidth() );
    var realMarginW = parseFloat( winWidth-oveWidth );
    $(the_overbox).css("margin-left",(realMarginW/2)+"px");

    //recupera le dimensioni e centralo ( CENTRATURA VERTICALE )
    var oveHeight = parseFloat( $(the_overbox).outerHeight() );
    var winHeight = parseFloat(  $(window).outerHeight() );
    if(winHeight>oveHeight){
        var realMarginH = parseFloat( winHeight-oveHeight );
        $(the_overbox).css("margin-top",(realMarginH/2)-20+"px");
        $(the_overbox).css("margin-left",(realMarginW/2)-10+"px");
    }else{
        null;
    };


    //mostra gli elementi
    $(".§screen").hide().fadeIn(200),100;
    $(the_overbox).hide().fadeIn(1600),700;

    //al click del close
    $(the_overbox).children(".§close").click(function(){
        //nascondi gli elementi
        $(the_overbox).fadeOut(300);
        //attiva distattiva il focus
        $(".§screen").fadeOut(500, function(){
            $(this).remove();
        });
        //resetta l'ambaradam
        $(the_overbox).hide();
        $(the_overbox).unwrap();
    });
 
};   

//overaly button
$(".§overlay").each(function(){
    $(this).click(function(){
        //recupera l'attrubuto e di che l'ID
        var iD_rel = $(this).attr("rel");
        var the_overbox = "#"+iD_rel;
        overlay(the_overbox);
    });
    //Nascondi gli overlay in assolutezza (TUTTI, per sicurezza)
    $("body").find(".§overbox").hide();
});

/*
//overlay reset
$(window).resize(function(){
    //nascondi gli elementi
    $(the_overbox).fadeOut(300);
    //attiva distattiva il focus
    $(".§screen").fadeOut(500, function(){
        $(this).remove();
    });
    //resetta l'ambaradam
    $(the_overbox).hide();
    $(the_overbox).unwrap();
});
*/