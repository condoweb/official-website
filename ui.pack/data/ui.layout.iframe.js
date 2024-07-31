//iframe anti-zindex
function ifimgextracorrection(){

    //alert("avvio CORREZIONE IFRAME E VIDEO");

    $('iframe').delay(20).each(function(){
        var url = $(this).attr("src");
        var char = "?";
        if(url.indexOf("?") !== -1){
            var char = "&";
        }
        $(this).attr("src",url+char+"wmode=transparent");
    });

};
$(window).load(function(){
    setTimeout(function() {
        ifimgextracorrection();
    },2);
});