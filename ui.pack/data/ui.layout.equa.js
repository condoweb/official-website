
//§equa
function equa(){

    //alert("avvio §equa");

    $(".§equamax,.§equamin").each(function(index, element) {

        //SE.. § targettata cerca il (figlio) target e imposta le altezze come quest'ultimo a tutti
        if( $(this).children().hasClass("§equatarget") ){
                var equaqui = $(this).children(".§equatarget").height();
                $(this).children(".§float-left,.§float-right").css("height",equaqui);
        }
        //ALTRIMENTI.. non è targettata e procedi come descritto
        else{
            //resetta le immagini interne da trasformare in background devono esse 0px | FIX 4 TOBKG + §GRID
            $(".§equamin>.§float-left,.§equamin>.§float-right,.§equamax>.§float-left,.§equamax>.§float-right").find("img.§tobkg").css("height","0px !important");
            $(".§equamin>.§float-left,.§equamin>.§float-right,.§equamax>.§float-left,.§equamax>.§float-right").find("img.§tobkg").css("height","0px !important");
            //trova il div più alto
            $.fn.equamaxHeight = function() {
                var maxheight = this.map(function( i, x ) {
                        return $( x ).outerHeight();
                }).get();
                return this.outerHeight( Math.max.apply( $(".§equamax>.§float-left,.§equamax>.§float-right"), maxheight ) );
            };
            //rendi tutti i div (solo §float) uguali
            $(".§equamax>.§float-left,.§equamax>.§float-right").equamaxHeight();
            //trova il div più basso e rendi tutti gli altri uguali
            $.fn.equaminHeight = function() {
                    var minheight = this.map(function( i, x ) {
                            return $( x ).outerHeight();
                    }).get();
                    return this.outerHeight( Math.min.apply( $(".§equamin>.§float-left,.§equamin>.§float-right"), minheight ) );
            };
            //rendi tutti i div (solo §float) uguali
            $(".§equamin>.§float-left,.§equamin>.§float-right").equaminHeight();
        };

    });
};
$(window).load(function(){
    setTimeout(function() {
        equa();
    },5);
});
$(window).resize(function(){ equa(); });