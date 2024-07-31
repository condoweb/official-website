
//centred
function centred(){

    //alert("avvio §Centred");

    $(".§centred").each(function(){

        //PER LE PROX VERSIONI va fatta una verfica
        //Se inline allora left e right sono padding, non margin
        //Se block, allora è tutto a margin

        var parent_height = parseFloat( $(this).parent().height() );
        var parent_width = parseFloat( $(this).parent().width() );
        var him_height = parseFloat( $(this).outerHeight() );
        var him_width = parseFloat( $(this).outerWidth() );

        var difference_height = parseFloat( (parent_height-him_height)/2 );
        var difference_width = parseFloat( (parent_width-him_width)/2 );

        $(this).css("margin-top", difference_height);
        $(this).css("margin-bottom", difference_height);
        $(this).css("margin-left", difference_width);
        $(this).css("margin-right", difference_width);

    });
};
$(window).load(function(){
    setTimeout(function() {
        centred();
    },6);
});
$(window).resize(function(){ centred(); });