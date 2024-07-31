
//navtop
function navTop(){

        //verifica la grandezza del monito
        var winWid = $(window).outerWidth();
        if(winWid > 992){

            //alert("avvio §navTop");

            $(".§nav-top").each(function(event){

                //0) mostra il menu e nascondi il trigger...
                $(this).children("ul").show();
                $(this).find("a.navtop_trigger").hide();

                //1)trova l'altezza automaticamente
                var theHeight = $(this).children("ul").children("li").children("a").outerHeight();
                $(this).outerHeight(theHeight);

                //centra i navbox-block
                $(".navbox-block").each(function(){
                    var marginCorrection = parseFloat( ( $(this).prev().outerWidth() - $(this).outerWidth() ) )/2 ;
                    $(this).css("margin-left", marginCorrection);
                });

                //nascondi il trigger
                $(this).find("a.navtop_trigger").parent("li").hide();

                //gestisci i link//
                //2) nascondi i loro contenuti overbox
                $(this).find(".navbox-line, .navbox-block").hide();

                //3)attiva al click
                $(this).find(".navvoice-click").click(function(){
                    //se era gia attivo, chiudi tutto e riattivalo
                    if($(this).hasClass("active")){
                        $(".navvoice-click").removeClass("active");                
                        $(this).next("div").fadeToggle();
                        $(this).addClass("active");
                    }
                    //se non lo era aprilo
                    else{
                        $(".navvoice-click").removeClass("active");
                        $(".navbox-line, .navbox-block").hide();
                        $(this).addClass("active");
                        $(this).next("div").fadeToggle();
                    };
                    event.stopPropagation();             
                });
                //se clicchi all'esterno chiudi il pannello
                $(document).click(function(){
                    $(".navvoice-click").removeClass("active");
                    $(".navbox-line, .navbox-block").fadeOut("slow");
                });
                //ferma la propagazione di chiusura per tutto quello che è dentro al pannello
                $(".§nav-top").click(function(event){
                    event.stopPropagation(); 
                });
                //apri i pannelli hover... chiudendo quelli click
                $(this).find(".navvoice-hover").mouseenter(function(){
                    //se eri su altro chiudilo (click compresi)
                    $(".navvoice-click").removeClass("active");
                    $(".navvoice-click").next("div").fadeOut("slow");
                    //e quindi poi attiva questo su cui stai sopra
                    $(".navvoice-hover").next("div").hide();
                    $(this).next("div").fadeIn("slow");
                });
                $(this).find(".navvoice-hover").parent("li").mouseleave(function(){
                    $(this).children("a.navvoice-hover").next("div").fadeOut("slow");
                });

            });

        }
        else {
            $(".§nav-top").each(function(){

                //0) nascondi il menu...
                $(this).children("ul").hide();
                //visualizza il trigger
                $(this).find("a.navtop_trigger").fadeIn();

            });
       };
};
$(window).load(function(){
    setTimeout(function() {
        navTop();
    },30);
});
$(window).resize(function(){
    setTimeout(function() {
        navTop();
    },30);
});