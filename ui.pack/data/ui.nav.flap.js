
//accordion
function flap(){

    //alert("avvio §accordion");

    //nascondi tutti gli espansi
    $(".§flap>div").hide();
    $(".§flap>div>div").hide();
    //Livello 1    
    $(".§flap>a.trig").click(function(){
            $(".§flap>a.focus").next().slideToggle();
            $(".§flap>a.focus").removeClass("focus");
            $(this).next().slideToggle(400, function(){
                $(this).prev(".trig").addClass("focus");
            });
        return false;
    });
    //sub livelli
    $(".§flap>div>a.trig").click(function(){
        $(this).next().slideToggle(400, function(){
            $(this).prev(".trig").addClass("focus");
        });
        return false;
    });

};
$(window).load(function(){
    setTimeout(function() {
        $('.§flap').each(function(){
            flap(); 
         });
    },20);
});