
//fillratio
function fill_ratio(){

    //alert("avvio §fill-ration");

    $(".§fill-ratio").each(function(){
        var wii_ratio = $(this).outerWidth();
        var aspect = wii_ratio/1.75555444333222111;
        $(this).css("height",aspect+"px");
    });

};
$(window).load(function(){
    setTimeout(function() {
        fill_ratio();
    },3);
});
$(window).resize(function(){ fill_ratio(); });