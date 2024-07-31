
//toBackground
function toBackground(){

   // alert("avvio §toBkg");

    $(".§toBkg-cover").each(function(){

        var img_url = $(this).attr("src");
        var img_height = $(this).attr("height");
        var img_extraid = $(this).attr("id");
        var img_extraclass = $(this).attr("class");
        
        $(this).wrap("<div class='tempdivtobkg'></div>");
        
        //PER LE PROX VERSIONI vanno fatte le varianti
        $("<div class='bkged'></div>").insertAfter(this);
        $(this).parent().find(".bkged").css( "height",img_height+"px" );
        $(this).parent().find(".bkged").css( "width","100%" );
        $(this).parent().find(".bkged").css( "display","block" );
        $(this).parent().find(".bkged").css( "background-image","url("+img_url+")" );
        $(this).parent().find(".bkged").css( "background-size","cover" );
        $(this).parent().find(".bkged").css( "background-repeat","no-repeat" );
        $(this).parent().find(".bkged").css( "background-position","center" );
        $(this).parent().find(".bkged").addClass(img_extraid);
        $(this).parent().find(".bkged").addClass(img_extraclass);
        $(this).parent().find(".bkged").removeClass("§toBkg-cover");

        $(this).unwrap();
        $(this).remove();
    });
};
$(document).ready(function(){
    setTimeout(function() {
        toBackground();
    },1);
});
$(window).resize(function(){ toBackground(); });