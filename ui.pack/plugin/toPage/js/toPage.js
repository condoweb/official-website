$(document).ready(function(){
        //Puntiamo a tutti i link
        $('.toPage').click(function(){
            //recupera il linkg
            var thePage = $(this).attr('href');
            //diamo il fadeOut
            $("body").fadeOut(2000);
            setTimeout('goLink("'+thePage+'")',2100);
            return false;
        });
});
function goLink(thePage){
        location.href = thePage;	
};

/* OLD VERSION
 $(document).ready(function(){
        //Puntiamo a tutti i link
        $('.toPage').click(function(){
                //diamo il fadeOut
                $('body').fadeOut('slow');
                thePage = $(this).attr('href');
                $('body').fadeOut('slow');
                setTimeout('goLink("'+thePage+'")',3800);
                return false;
        });

    function goLink(thePage){
            location.href = thePage;	
    };

});
*/
