
//nav-side
function navSide(){

    //alert("avvio navSide");

    var checkWidth = parseFloat( $(window).outerWidth() );
    if(checkWidth <= 992){ 
        //è mobile quindi:

        //PANNELLI SINISTRI
        var csl = $(".compact-navSideLeft").outerWidth()+30;
        var cslStatus = "closed";
        $(".compact-navSideLeft").css("margin-left","-"+csl+"px");
        //trasforma in mobile il contenitore del menu
        $(".§navleft-trigger").click(function(){
            if( cslStatus === "closed" ){
                //apri il menu mobile
                $(".compact-navSideLeft").animate({
                    marginLeft: "0"
                });
                $(".§navleft-trigger").animate({
                    marginLeft: csl-30
                });
                cslStatus = "opened";
            }else{
                //apri il menu mobile
                $(".compact-navSideLeft").animate({
                    marginLeft: -csl
                });
                $(".§navleft-trigger").animate({
                    marginLeft: "0"
                });
                cslStatus = "closed";
            };
         });

        //PANNELLI DESTRI
        var csr = $(".compact-navSideRight").outerWidth()+30;
        var csrStatus = "closed";
        $(".compact-navSideRight").css("margin-right","-"+csr+"px");
        //trasforma in mobile il contenitore del menu
        $(".§navright-trigger").click(function(){
            if( csrStatus === "closed" ){
                //apri il menu mobile
                $(".compact-navSideRight").animate({
                    marginRight: "0"
                });
                $(".§navright-trigger").animate({
                    marginRight: csr-30
                });
                csrStatus = "opened";
            }else{
                //apri il menu mobile
                $(".compact-navSideRight").animate({
                    marginRight: -csr
                });
                $(".§navright-trigger").animate({
                    marginRight: "0"
                });
                csrStatus = "closed";
            };
         });

    }else{ 
        csrStatus = "opened";
        cslStatus = "opened";
        $(".compact-navSideLeft").animate({
            marginLeft: 0
        });
        $(".compact-navSideRight").animate({
            marginRight: 0
        });
    }

};
$(window).load(function(){
    setTimeout(function() {
        navSide();
    },30);
});
$(window).resize(function(){ navSide(); });