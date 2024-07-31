
// §pull centratura box
function pull(){
    
    //alert("avvio §pull-...");

    $(".§pull-center").each(function(){
        var obox_marTop = parseFloat( ($(this).outerHeight()/2)*-1 );
        var obox_marLeft = parseFloat( ($(this).outerWidth()/2)*-1 );
        $(this).css("margin-top",obox_marTop+"px");
        $(this).css("margin-left",obox_marLeft+"px");
    });
};
$(window).load(function(){
    setTimeout(function() {
        pull();
    },7);
});
$(window).resize(function(){ pull(); });