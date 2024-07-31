
/*§dropdown*/

function dropdown(){
 
    //alert("avvio §Dropdown");

    //nascondi i dropbox...
    $(".§dropbox-block, .§dropbox-line").hide();
    //dai al dropline la grandezza giusta...
    $(".§dropbox-line").each(function(){
        var droplinewidth = $(this).parent().parent().outerWidth();
        $(this).outerWidth(droplinewidth);
    });
    //centra i dropbox
    $(".§dropbox-block").each(function(){
        var marginCorrection = parseFloat( ( $(this).parent().outerWidth() - $(this).outerWidth() ) )/2 ;
        $(this).css("margin-left", marginCorrection);
    });

    $(".§dropbox-line").each(function(){
        var offset_parent = $(this).parent().parent().offset();
        var marginCorrection = (offset_parent.left)*-1;
        $(this).css("margin-left", marginCorrection);
    });
    
 
    //click
    $(".§dropdown-click").each(function(){
        $(this).children(".§button").addClass("§arrow");
        var status_dd = false;

        $(this).children("a").click(function(event){
            if(status_dd === false){
                //attiva distattiva il focus
                $(this).addClass("focus");
                status_dd = true;
                //mostra l'elemento successivo
                $(this).next().fadeIn();
            }
            else if(status_dd === true){
                //attiva distattiva il focus
                $(this).removeClass("focus");
                status_dd = false;
                //nascondi l'elemento successivo
                $(this).next().fadeOut(); 
            }            
            event.stopPropagation(event);  
        });
        $(".§dropbox-block,.§dropbox-line").click(function(event){
           event.stopPropagation(); 
        });

        //quando clicchi fuori chiudi i menu aperti
        $(document).click(function() {
            if(status_dd === true){
                //attiva distattiva il focus
                $(".§dropdown-click").children("a").removeClass("focus");
                status_dd = false;
                //nascondi l'elemento successivo
                $(".§dropdown-click").children("a").next().fadeOut();   
            }
        });
        
    });
     
    //hover
    $(".§dropdown-hover").each(function(){
        $(this).children(".§button").addClass("§arrow");
        $(this).hover(
            function () { $(this).children(".§dropbox-block, .§dropbox-line").fadeIn(); },
            function () { $(this).children(".§dropbox-block, .§dropbox-line").fadeOut(); }
        );
        $(".§dropbox-block, .§dropbox-line").click(function(event){
           event.stopPropagation(); 
        });
    });

};
$(window).load(function(){
    setTimeout(function() {
        dropdown();
    },20);
});
$(window).resize(function(){ dropdown(); });
