
//loader
function loader(){

    // 2.0 recupero le informazioni di plugin
    var status      = true;
    var packUrl     = "template/ui.pack";
    var spinnerType = "squareflip";
    var loaderIn    = "§fx-loader-"+"rotateSidesIn";
    var loaderOut   = "§fx-loader-"+"rotateSidesOut";

    if(status === true){

        // 1.0 controllo l'altezza se eccede e imposto l'overflow
        // questo passaggio garantisce a firefox ecc di non sbarellare
        var winHei = $(window).outerHeight();
        var docHei = $(document).outerHeight();
        if(winHei < docHei){
            $("html").css("overflow-y","scroll");
        }else{ null; }

        // 2 wrappo la pagina da caricare
        $(".loader").nextUntil().wrapAll('<div class="pageStand" />');

        // 1 aggiungo lo spinner alla pagina
        $(".loader").load( packUrl+"/data/spinner/"+spinnerType+".html", function(){

            // 3.1 centro e faccio abbassare lo spinner
            var windowHeight    = $(window).height();
            var spinnerHeight   = $("*[class^='spinner-']").height();
            var topMargin       = (windowHeight/2)-spinnerHeight;
            $("*[class^='spinner-']").delay(1500).animate({
                marginTop: topMargin
            },500,function(){
                // NB: non segue ancora il caricamento delle immagini
                //  3.2 al termine dello spinner...
                setTimeout(function(){
                    // Eseguo il loadOut e...
                    $(".loader").delay(0).addClass(loaderOut);
                    // Eseguo il loadIn della pagina
                    $(".pageStand").addClass(loaderIn);                    
                },0);
                setTimeout(function(){
                    $(".pageStand>*").unwrap();
                    $(".loader").hide();
                },6000);
            });
        });

    }
    else{
        null;
    };

    //LoaderOut al click
    $('.loaderOut').mouseup(function(){

        $(".loader").show();
        $(".spinnerContainer").hide();
        var thePage = $(this).attr('href');
        $(".loader").nextUntil().wrapAll('<div class="pageStand" />');
        $(".loader").removeClass(loaderOut).addClass(loaderIn);
        $(".pageStand").removeClass(loaderIn).addClass(loaderOut);
        setTimeout(function(){
            GoToLink(thePage);
        },2000);
        setTimeout(function(){
            return false;
        },2100);

    });

};

$(document).ready(function(){
   loader(); 
},0);

function GoToLink(thePage){
    location.href = thePage;
};             