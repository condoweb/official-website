
//just
function just(){

    //alert("avvio §Just");

    $('.§just').each(function() {

        //verifica la grandezza del monito
        var winWid = $(window).outerWidth();
        if(winWid > 992){
        //conta quanti figli flottati ci sono
            var numel = 0;
            $(this).children(".§float-left").each(function() {
             return numel++;
            });

            //recupera i valori e trasformali in percentuali
            var jwid = parseFloat( $(this).outerWidth() );
            var elva = parseFloat( jwid/numel );
            var elww = parseFloat( (elva/jwid)*100 );

            //applica le percentuali giustificando gli elenti
            $(this).children().outerWidth(elww+"%");
        }
        else if(winWid < 992){
            $(this).children(".§float-left").outerWidth(" ");
        };

    });
};
$(window).load(function(){
    setTimeout(function() {
        just();
    },4);
});
$(window).resize(function(){
    setTimeout(function() {
        just();
    },4);
});