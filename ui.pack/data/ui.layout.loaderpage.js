
//toBackground
$(document).ready(function(){    
    $("body").css("opacity","0");
    $("body").find(".§overbox").delay(1000).hide();
});
function Loader(){

    //alert("avvio LOADER");

    $("body").delay(1000).animate({
        opacity:1
    },700);

};
$(document).ready(function(){
    setTimeout(function() {
        Loader();
    },0);
});
