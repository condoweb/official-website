
/*§dropdown*/

function breadcrumps(){

    //verifica la grandezza del monito
    var winWid = $(window).outerWidth();
    if(winWid < 992){
        $('*[class^="§breadcrumbs"]').children("a.active").prev().prevAll().css("opacity","0");
        $('*[class^="§breadcrumbs"]').children("a.active").prev().prevAll().css("height","0");
        $('*[class^="§breadcrumbs"]').children("a.active").prev().css("opacity","0.3");
        $('*[class^="§breadcrumbs"]').children("a.active").next().css("opacity","0.6");
        $('*[class^="§breadcrumbs"]').children("a.active").next().nextAll().css("opacicy","0");
        $('*[class^="§breadcrumbs"]').children("a.active").next().nextAll().css("opacity","0");
    } else if(winWid > 992){
        $('*[class^="§breadcrumbs"]').children("a.active").prev().prevAll().css("opacity"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").prev().prevAll().css("height"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").prev().css("opacity"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").next().css("opacity"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").next().nextAll().css("opacicy"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").next().nextAll().css("opacity"," ");
    }  

};
$(document).ready(function(){
    breadcrumps();
});
$(window).resize(function(){ breadcrumps(); });
