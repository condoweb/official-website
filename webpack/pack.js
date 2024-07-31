/* LOADER FUNCTION */
window.onunload = function(){null;/*reset - fa in maniera che anche firefox prenda il tasto historyback e riesegua il tutto*/}; 
setTimeout(function(){
    //check doc loaded and start loader
    $(document).ready(function(){
        
        //creo il loader
        $("body").css("display","none");
        $("body").prepend("<div class='loader' />");
        $(".loader").show();
        $("body").css("display","block");

        //carico le opzioni del plug-in
        var packUrl     = "webpack";
        var spinnerType = "octacicled";

        // 1 aggiungo lo spinner alla pagina
        var windowHeight    = $(window).height();
        var spinner = packUrl+"/data/spinner/"+spinnerType+".html";
        $(".loader").load( spinner, function(){
            // 3.1 centro e faccio abbassare lo spinner
            var spinnerHeight   = $("*[class^='spinner-']").height();
            var topMargin       = (windowHeight/2)-spinnerHeight;
            $("*[class^='spinner-']").animate({
                marginTop: topMargin
            },500,function(){
                setTimeout(function(){
                    outnow();
                },1000);   
            });
        });
    });
},1);
//check image loaded
$(window).load(function(){
    window.statusImage = "loaded";
    return statusImage;
});
//check tobkg loaded
$(document).ready(function(){
    window.imgVal = 0;
    window.tobVal = 0;
    $('img[class^="§toBkg"]').each(function() {
        window.tobVal ++;
    });
    return window.imgVal;
    return window.tobVal;
});
//al completament Loader
function outnow(){
    //status ok? visualizza la pagina!
    if(imgVal >= tobVal){
        if(statusImage === "loaded"){
            $(".loader").fadeOut("slow");
        };
    }
    else if(imgVal < tobVal){
        if(statusImage === "loaded" && toBkgStatus === "loaded"){
            $(".loader").fadeOut("slow");
        };
    }
    else{
        alert("code");
        $(".loader").fadeOut("slow");
    };
};
//LoaderOut al click
$('.loaderOut').click(function(eventClick) {

    var thePage = $(this).attr('href');
    $(".spinnerContainer").hide();
    $(".loader").fadeIn(600,function(){
        location.href = thePage;
    });

    eventClick.stopPropagation();
    eventClick.preventDefault();
    eventClick.stopImmediatePropagation();
    return false;

});

/* FILL OF DOC LIMITS FUNCTION */
$(document).ready(function(){
    var docWidth =  $(document).outerWidth();
    $(".§fill-limitsOfDocument").css("width",docWidth);
    $(".§fill-limitsOfDocument").css("overflow","scroll");
});

/* FILL OF SCREEN RESOLUTION FUNCTION */
function fitscreen(){
    var docHeight = $(window).height();
    var docWidth = $(window).width();
    $(".§fitScreen, .§fitScreen-full").css("height",docHeight+"px").css("width",docWidth+"px");
    $(".§fitScreen-height").css("height",docHeight+"px");
    $(".§fitScreen-width").css("height",docWidth+"px");
};
$(document).ready(function(){
        fitscreen();
});
$(window).resize(function(){ fitscreen(); });

/* FILL RATIO FUNCTION */
function fill_ratio(){
    $(".§fill-ratio").each(function(){
        var wii_ratio = $(this).outerWidth();
        var aspect = wii_ratio/1.75555444333222111;
        $(this).css("height",aspect+"px");
    });
};
$(window).load(function(){
    setTimeout(function() {
        fill_ratio();
    },3);
});
$(window).resize(function(){
    fill_ratio();
});

/* ANCHOR PAGE FUNCTION */
function anchorSlide(){
    $('a[href*=#]').click(function() {
        var root = $('html, body');
        root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 900);
        return false;
    });
};
$(document).ready(function(){
    anchorSlide();
});

/* ANCHOR TOP OF PAGE FUNCTION */
function toTop() {
    $('.§totop, .§totop-left, .§totop-right').css("display","none");
    var offset      = $(document).height()/10;
    var duration    = $(document).height()/3;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset && offset > 900) {
            $('.§totop, .§totop-left, .§totop-right').fadeIn(500);
        }
        else {
            $('.§totop, .§totop-left, .§totop-right').fadeOut(500);
        };
    });
    $('.§totop, .§totop-left, .§totop-right').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0 }, duration);
        return false;
    });
};
$(window).load(function(){
    setTimeout(function() {
        toTop();
    },50);
});

/* FIX THE IFRAME & VIDEO FUNCTION */
//iframe anti-zindex
function ifimgextracorrection(){
    $('iframe').delay(20).each(function(){
        var url = $(this).attr("src");
        var char = "?";
        if(url.indexOf("?") !== -1){
            var char = "&";
        }
        $(this).attr("src",url+char+"wmode=transparent");
    });
};
$(window).load(function(){
    setTimeout(function() {
        ifimgextracorrection();
    },2);
});

/* TABLE OVERFLOW FUNCTION */
function tableAxis(){
    $('.scroll-x>*[class^="§table"]').each(function(){
        var pad = $(this).parent().css("padding-left");
        $(this).css("padding-right",pad);
    });
    $('.scroll-y>*[class^="§table"]').each(function(){
        var pad = $(this).parent().css("padding-top");
        $(this).css("padding-bottom",pad);
    });
};
$(window).load(function(){
    tableAxis();
});
/* CENTRED BOX FUNCTION*/
function centred(){
    $(".§centred").each(function(){

        //PER LE PROX VERSIONI va fatta una verfica
        //Se inline allora left e right sono padding, non margin
        //Se block, allora è tutto a margin

        var parent_height = parseFloat( $(this).parent().outerHeight() );
        var parent_width = parseFloat( $(this).parent().outerWidth() );
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
$(window).resize(function(){
    centred();
});

/* PULL-CENTER FUNCTION */
function pull(){
    $(".§pull-center").each(function(){
        var obox_marTop = parseFloat( ($(this).outerHeight()/2)*-1 );
        var obox_marLeft = parseFloat( ($(this).outerWidth()/2)*-1 );
        $(this).css("margin-top",obox_marTop+"px");
        $(this).css("margin-left",obox_marLeft+"px");
    });
};
$(window).load(function(){
    setTimeout(function() {
        pull();
    },7);
});
$(window).resize(function(){
    pull();
});

/* EQUALIZING BOX FUNCTION */
function equa(){
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
$(window).resize(function(){
    equa();
});

/* JUSTYFING BOX FUNCTION */
function just(){
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

/* FROM IMAGE TO BACKGROUND FUNCTION */
function tbkg() {
    function toBackground() {
       var ua = navigator.userAgent;
        if( ua.indexOf("Android") >= 0 )
        {
          var androidversion = parseFloat(ua.slice(ua.indexOf("Android")+8)); 
          if (androidversion < 2.3)
          { 
            var img_height = $(this).attr("height");
            var img_extraid = $(this).attr("id");
            var img_extraclass = $(this).attr("class");

            $(this).wrap("<div class='androidBox'></div>"); //overlflowed box
            $(this).parent().wrap("<div class='bkged-android'></div>"); //container

            //PER LE PROX VERSIONI vanno fatte le varianti
            $(this).parent().css( "height",img_height+"px" );
            $(this).parent().parent().css( "height",img_height+"px" );
            
            var wid = $(this).parent().parent().outerWidth();
            $(this).parent().css( "width", wid+"px");
            $(this).width(wid);
            
            var parhh = parseFloat( $(this).parent().parent().height());
            var thishh = parseFloat( $(this).height() );
            var centerized = parseFloat(( parhh-thishh )/2);
            $(this).css("margin-top",centerized+"px");

            var minHei = $(this).parent().parent().outerHeight();
            $(this).css("min-height", minHei+"px");
            $(this).css("height", "auto");

            $(this).parent().addClass(img_extraid);
            $(this).parent().addClass(img_extraclass);
            $(this).removeClass("§toBkg-cover");
          }
        }
        //IF A STANDARD BROWSER OR DEVICE
        else{
            // alert("avvio §toBkg");
            $('img[class^="§toBkg"]').each(function(){

                window.toBkgStatus = "UNLOAD";

                //recupero i dati dell'immagine
                var img_url         = $(this).attr("src");
                var img_height      = $(this).attr("height");
                var img_extraid     = $(this).attr("id");
                var img_extraclass  = $(this).attr("class");

                //recupero il nome dell'effetto
                var img_class       = $(this).attr("class").split(" ")[0];
                var img_fx          = img_class.split("-")[1];
                //alert("classe: "+img_class+" | con valore: "+img_fx);

                //creo un wrap sul nuovo contenuto
                $(this).wrap('<div class="imgBox-'+img_fx+'"></div>');
                //assegno a questo nuovo elemento i dati primari
                $(this).parent().css( "height",img_height+"px" );
                $(this).parent().addClass(img_extraid);
                $(this).parent().addClass(img_extraclass);
                $(this).parent().removeClass("§toBkg-"+img_fx);
                $(this).parent().removeClass("§toBkg");

                //creao il bkged
                $("<div class='bkged'></div>").insertAfter(this);
                //assegno a questo nuovo elemento l'immagine come bkg
                $(this).parent().children(".bkged").css( "height",img_height+"px" );
                $(this).parent().children(".bkged").css( "background-image","url("+img_url+")" );

                //elimino i temporanei e i vecchi design
                $(this).remove();

            });
        
        };
    }    
    $("img").each(function() {
        if( this.complete ) {
            toBackground.call( this );
        } else {
            $(this).one('load', toBackground);
        }
        
    });
    
    //quando hai finito... fallo sapere al loader
    window.toBkgStatus = "loaded";
    return toBkgStatus;
};
$(window).load(function(){
    tbkg();
});

/* FROM BOX ON THUMB BOX FUNCTION */
function thumbox(){
    $('.§thumbox').each(function(){
        
        //se prima del contenuto c'è un'immagine...
        var boxHeight = $(this).children(".tmbContent").prev().outerHeight();
        $(this).children(".tmbContent").outerHeight(boxHeight);
        $(this).children(".tmbContent").css("margin-top",boxHeight*-1);
        
        $(this).children(".tmbContent").prev().css("z-index","988");
        $(this).children(".tmbContent").css("z-index","999");
        
        //recupero il link
        if($(this).children(".tmbContent").next("*:last-child").is("a")){
            var boxLink = $(this).children(".tmbContent").next("*:last-child").attr("href");
            $(this).css("cursor","pointer");
            $(this).click(function(eventClick) {
                $(".spinnerContainer").hide();
                $(".loader").fadeIn(600,function(){
                    location.href = boxLink;
                });
                eventClick.stopPropagation();
                eventClick.preventDefault();
                eventClick.stopImmediatePropagation();
                return false;
            }); 
        }else{null;};

    });
};
$(window).load(function(){
    thumbox();
});

/* SELECTBOX FUNCTIONS */
function createSelect(){
   $(".§selectbox").each(function(){
        //addiziono le classi
        $(this).find('input[type="text"]').addClass("select");
        $(this).find('input[type="text"]').attr('readonly', true);
        $(this).find("ul").addClass("selector");        
    });
};
function arrangeSelect(){
   $(".§selectbox").each(function(){
        //posiziono gli elementi
        var goodWidth = $(this).outerWidth();
        $(this).find(".selectorContainer").outerWidth(goodWidth);
        $(this).find(".selector").outerWidth(goodWidth);
   });
};
function clickselect(){
    $(".§selectbox").each(function(){
         //al click recupero il valore scelto
         $(this).find("li").click(function(){
             var valueSelected = $(this).html();
             $(this).parent().parent().parent().children('.select').val(valueSelected);
         });
         $(this).click(function(){
            //al click rendo active
            $(this).find(".selector").addClass("focused");

            //calcolo se è scroll
            setTimeout(function() {
                var max_hh              = $(this).find(".selectorContainer").css("max-height");
                var qnt_element         = $(this).find(".selector").children().size();
                var hh_element          = $(this).find(".selector").children().outerHeight();
                var total_hh            = hh_element*qnt_element;
                    //alert("rilevati : "+qnt_element+" elementi");
                    //alert("altezza massima rilevata: "+max_hh+" | rispetto ad altezza reale : "+total_hh);
                if(total_hh>max_hh){
                    $(this).find(".selectorContainer").css("overflow-y","scoll");
                    $(this).find(".selector").css("padding-top","0px !important").css("padding-bottom","0px !important");
                }else{null;}
            },200);
         });
         //al mouse out levo l'active
         $(this).mouseleave(function(){
             $(this).find(".focused").removeClass("focused");
         });
     });
};
$(window).load(function(){
    setTimeout(function() {
        createSelect();
    },131);
    setTimeout(function() {
        arrangeSelect();
    },132);
    setTimeout(function() {
        clickselect();
    },133);
});
$(window).resize(function(){
    setTimeout(function() {
        arrangeSelect();
    },132);
});

/*DROP DOWN BUTTON FUNCTION*/
function dropdown(){
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
            };            
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
            };
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
$(window).resize(function(){
    dropdown();
});

/* NAV FUNCTION*/
function nav(){

        //verifica la grandezza del monito
        var winWid = $(window).outerWidth();
        if(winWid > 992){

            //alert("avvio §navTop");

            $(".§nav").each(function(event){

                //0) mostra il menu e nascondi il trigger...
                $(this).children("ul").show();
                $(this).find("a.nav_trigger").hide();

                //1)trova l'altezza automaticamente
                var theHeight = $(this).children("ul").children("li").children("a").outerHeight();
                $(this).outerHeight(theHeight);

                //centra i navbox-block
                $(".navbox-block").each(function(){
                    var marginCorrection = parseFloat( ( $(this).prev().outerWidth() - $(this).outerWidth() ) )/2 ;
                    $(this).css("margin-left", marginCorrection);
                });


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
                $(".§nav").click(function(event){
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
            $(".§nav").each(function(){

                //0) nascondi il menu...
                $(this).children("ul").hide();
                //visualizza il trigger
                $(this).find("a.nav_trigger").fadeIn();
                $("a.nav_trigger").click(function(){
                    alert("al momento non è prevista nessuna azione, completa le selectList e questa procedura.");
                });

            });
       };
};
$(window).load(function(){
    setTimeout(function() {
        nav();
    },30);
});
$(window).resize(function(){
    setTimeout(function() {
        nav();
    },30);
});


/* NAV SIDE FUNCTION */
$(".§nav-side").click(function(event) {

        event.preventDefault();

        var ScrollBarPosition = $(window).scrollTop();

        //$(window).scrollbarOff();

        //recupera i dati da inserire
        var fileLink             = $(this).attr("href");
        var animationtype        = $(this).attr("rel");

        var siteBlock            = "siteBlock-"+animationtype;
        var siteBlockOpen        = siteBlock+"-open";
        var siteBlockClosed      = siteBlock+"-closed";
        
        var menuBlock            = "menuBlock-"+animationtype;
        var menuBlockOpen        = menuBlock+"-open";
        var menuBlockClosed      = menuBlock+"-closed";

        
        //Incapsula per fixeddare il sito
        $("body").wrapInner('<div class="'+siteBlock+'" style="padding-right:'+scrollbarWidth+'px;" />');
        $("."+siteBlock).wrapInner('<div class="siteBox"/>');
        $('<div class="siteOver"/>').insertAfter("body");
        $("."+siteBlock).scrollTop(ScrollBarPosition);


        //Costruisci il menu
        $('\
            <div class="'+menuBlock+'">\n\
                <div class="menuBox"></div>\n\
            </div>\n\
        ').insertAfter("body>div:last-of-type");

        //carica il file, verifica se è da scrollare...
        var winHeight = $(window).height();
        $("div.menuBox").load(fileLink, function(){

            var contentHeight = $(".menuBox>div").height();
            var contentWidth = $(".menuBox>div").outerWidth();
            var bardif = contentWidth-scrollbarWidth;

            if( contentHeight > winHeight ){
                $(".menuBox").width(contentWidth).outerHeight(winHeight);
                $(".menuBox>div").addClass("scroll-y");
                $("."+menuBlock).outerWidth(bardif).outerHeight(winHeight);
            }
            else{
                $(".menuBox").width(contentWidth);
                $(".menuBox>*").css("height",winHeight);
            };

            //al click di chiudi...
            $("a.closeMenu,.siteOver, ."+siteBlock).click(function(){
                //a seconda dell'animazione chiudi i contenitori e l'verlay
                $("."+menuBlockOpen).removeClass().addClass(menuBlockClosed);
                $("."+siteBlockOpen).removeClass().addClass(siteBlockClosed);

                window.setTimeout( function(){
                    //distruggi i contenitori e l'overlay
                    $("."+menuBlockClosed).remove();                //elimina il box menu
                    $("."+siteBlockClosed+">*>*").unwrap();         //elimina siteBox
                    $("."+siteBlockClosed+">*").unwrap();           //elimina siteBlock  
                    //$(window).scrollbarOn();
                    $(window).scrollTop(ScrollBarPosition);         //rimetti la scollbar in posizione
                    $(".siteOver").remove();                        //riattiva il click alla pagina
                },900);
            });

        });
        //a seconda dell'effetto eseguilo aprendo tutto...
        window.setTimeout( function(){
            $("."+siteBlock).removeClass().addClass(siteBlockOpen);
            $("."+menuBlock).removeClass().addClass(menuBlockOpen);
        },500);
        return(false);

});

/* TABS FUNCTION */
function tabs(){
    $(".§tabs").each(function(){

        //recupera quel che serve
        var tabs_link       = $(this).children(".tabsList").children("li").children("a");
        var tabs_tab        = $(this).children(".tabsContent").children();

        var first_link      = $(this).children("ul").children("li").children("a:first");
        var first_tab       = $(this).children(".tabsContent").children("div:first");

        //nascondi tutti gli tab
        tabs_tab.hide();
        
        //visualizza solo il primo tab
        first_link.addClass("tab_active");
        first_tab.show();
        
        //gestisci i link in lista tabs
        tabs_link.click(function(){
            //nascondi i tab prima di visualizzare quello giusto
            tabs_tab.fadeOut(301);
            //gestisci il focus
            tabs_link.removeClass("tab_active");
            $(this).addClass("tab_active"),100;
            //recupera l'id del tab
            var id_Tab = $(this).attr("rel");
            $(""+id_Tab+"").children("§fill-ratio").each(function(){
                var wii_ratio = $(this).outerWidth();
                var aspect = wii_ratio/1.75555444333222111;
                $(this).css("height",aspect+"px");
            });
            $(""+id_Tab+"").delay(299).fadeIn(600);
        });
    });
};
$(window).load(function(){
    setTimeout(function() {
        tabs();
    },21);
});
$(window).resize(function(){
    setTimeout(function() {
        tabs();
    },20);
});

/* FLAPS FUNCTION */
function flap(){
    $('.§flaps').each(function(){
        //alert("avvio §accordion");

        //nascondi tutti gli espansi
        $(this).children("div").hide().slideUp();
        //Livello 1    
        $(this).children("a.trig").click(function(){
            //assegno l'attivo al 
            $(this).parent().children("a.trig").removeClass("flapActive");
            $(this).addClass("flapActive");
            //chiudo gli altri flap
            
            $(this).parent().children("a.trig").each(function(){
                if($(this).hasClass('flapActive')){
                    //apro il box del flap cliccato
                    $(this).next("div").delay(5).slideDown();
                }
                else if($(this).not('.flapActive')){
                    //chiudo il box del flap cliccato
                    $(this).next("div").delay(180).slideUp(); 
                };
            });
            return false;
        });
        
    });
};
$(window).load(function(){
    setTimeout(function() {
            flap(); 
    },20);
});

/* BREADCRUMPS FUNCTION */
function breadcrumps(){
    //verifica la grandezza del monito
    var winWid = $(window).outerWidth();
    if(winWid < 992){
        $('*[class^="§breadcrumbs"]').children("a.active").prev().prevAll().css("opacity","0");
        $('*[class^="§breadcrumbs"]').children("a.active").prev().prevAll().css("height","0");
        $('*[class^="§breadcrumbs"]').children("a.active").prev().css("opacity","0.3");
        $('*[class^="§breadcrumbs"]').children("a.active").next().css("opacity","0.6");
        $('*[class^="§breadcrumbs"]').children("a.active").next().nextAll().css("opacicy","0");
        $('*[class^="§breadcrumbs"]').children("a.active").next().nextAll().css("opacity","0");
    } else if(winWid > 992){
        $('*[class^="§breadcrumbs"]').children("a.active").prev().prevAll().css("opacity"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").prev().prevAll().css("height"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").prev().css("opacity"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").next().css("opacity"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").next().nextAll().css("opacicy"," ");
        $('*[class^="§breadcrumbs"]').children("a.active").next().nextAll().css("opacity"," ");
    };
};
$(document).ready(function(){
    breadcrumps();
});
$(window).resize(function(){
    breadcrumps();
});

/* PAGINATE FUNCTION */
function paginate(){
    $(".§paginate").each(function(){
        
        //Quanti elementi per pagina?
        var paginate_classMaxpage   = $(this).attr("class").split(" ")[1];
        var show_per_page           = parseInt(paginate_classMaxpage.split("-")[1]);
        
        //Calcola quanti elementi sono
        var number_of_items = $(this).find('.pages').children().size();
        //Calcola quante pagine saranno
        var number_of_pages = Math.ceil(number_of_items/show_per_page);

        //setta i value nascosti degli input
        $(this).find('.current_page').val(0);
        $(this).find('.show_per_page').val(show_per_page);

        //Crea e controlla il sistema di navigazione...
        var navigation_html = '<a class="previous_link">Prev</a>';
        var current_link = 0;
        while(number_of_pages > current_link){
                navigation_html += '<a class="page_link" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
                current_link++;
        };
        navigation_html += '<a class="next_link">Next</a>';

        $(this).find('.page_navigation').html(navigation_html);

        //aggiungi active_page al primo link ecc
        $(this).find('.page_navigation').children('.page_link:first').addClass('active_page');

        //nascondi gli altri che non sono selezionati
        $(this).find('.pages').children().css('display', 'none');

        //visualizza il primo "n" (show_per_page)
        $(this).find('.pages').children().slice(0, show_per_page).css('display', '');
        
        
        //Aggiorna gli elementi numerici hide e non...
        var paginate_classMaxnumber = $(this).attr("class").split(" ")[2];
        var max_number_showed       = parseInt(((paginate_classMaxnumber.split("-")[1])-1)/2);
        $(this).find(".active_page").prevAll("*:not(.previous_link)").css("display","none");
        $(this).find(".active_page").nextAll("*:not(.next_link)").css("display","none");
        $(this).find(".active_page").prevAll("*:lt("+max_number_showed+")").css("display","");
        $(this).find(".active_page").nextAll("*:lt("+max_number_showed+")").css("display","");

        //clear
        $('<div class="clearAll"></div>').insertAfter($(this).find(".page_navigation"));
    });

    //al click di previus
    $(".previous_link").click(function(){
        new_page = parseInt($(this).parent().parent().children('.current_page').val()) - 1;
        //SE è prima della pagina corrente allora...
        if($(this).parent().children('.active_page').prev('.page_link').length==true){
            
            //Quanti elementi per pagina?
            if($(this).parent().parent().is("td")){
                var paginate_classMaxpage   = $(this).parent().parent().parent().parent().parent().attr("class").split(" ")[1];
            }else{
                var paginate_classMaxpage   = $(this).parent().parent().attr("class").split(" ")[1];
            };
            var show_per_page           = parseInt(paginate_classMaxpage.split("-")[1]);  
        
            //recupera il longdesc del link di current page e aggiungi la classe active_page, rimuovi la classe agli altri active_page
            $(this).parent().children('.active_page').prev().addClass('active_page');
            $(this).parent().children('.active_page').next().removeClass('active_page');
            $(this).parent().parent().children('.current_page').val(page);

            var page = $(this).parent().children('.active_page').attr("longdesc");
            //calcola quanti mancano da questo alla fine e all'inizio
            var start_from = page * show_per_page;
            var end_on = start_from + show_per_page;

            //Nascondi tutti i figli di pages tranne quello da visualizzare
            if($(this).parent().parent().is("td")){
                $(this).parent().parent().parent().parent().parent().children('.pages').children().css('display', 'none').slice(start_from, end_on).css('display', '');
            }else{
                $(this).parent().parent().children('.pages').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
            };
            
            
            //Aggiorna gli elementi numerici hide e non...
            if($(this).parent().parent().is("td")){
                var paginate_classMaxnumber     = $(this).parent().parent().parent().parent().parent().attr("class").split(" ")[2];
            }else{
                var paginate_classMaxnumber     = $(this).parent().parent().attr("class").split(" ")[2];
            };
            var max_number_showed               =  parseInt(((paginate_classMaxnumber.split("-")[1])-1)/2);
            $(this).parent().children(".active_page").prevAll("*:not(.previous_link)").css("display","none");
            $(this).parent().children(".active_page").nextAll("*:not(.next_link)").css("display","none");
            $(this).parent().children(".active_page").prevAll("*:lt("+max_number_showed+")").css("display","");
            $(this).parent().children(".active_page").nextAll("*:lt("+max_number_showed+")").css("display","");

        };
    });
    //al click di next
    $(".next_link").click(function(){
        new_page = parseInt($(this).parent().parent().children('.current_page').val()) + 1;
        //SE è il prossimo dopo il corrente...
        if($(this).parent().children('.active_page').next('.page_link').length==true){
            
            //Quanti elementi per pagina?
            if($(this).parent().parent().is("td")){
                var paginate_classMaxpage   = $(this).parent().parent().parent().parent().parent().attr("class").split(" ")[1];
            }else{
                var paginate_classMaxpage   = $(this).parent().parent().attr("class").split(" ")[1];
            };
            var show_per_page           = parseInt(paginate_classMaxpage.split("-")[1]);            
            
            //recupera il longdesc del link di current page e aggiungi la classe active_page, rimuovi la classe agli altri active_page
            $(this).parent().children('.active_page').next().addClass('active_page');
            $(this).parent().children('.active_page').prev().removeClass('active_page');
            $(this).parent().parent().children('.current_page').val(page);

            var page = $(this).parent().children('.active_page').attr("longdesc");
            //calcola quanti mancano da questo alla fine e all'inizio
            var start_from = page * show_per_page;
            var end_on = start_from + show_per_page;

            //Nascondi tutti i figli di pages tranne quello da visualizzare
            if($(this).parent().parent().is("td")){
                $(this).parent().parent().parent().parent().parent().children('.pages').children().css('display', 'none').slice(start_from, end_on).css('display', '');
            }else{
                $(this).parent().parent().children('.pages').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
            };

            //Aggiorna gli elementi numerici hide e non...
            if($(this).parent().parent().is("td")){
                var paginate_classMaxnumber     = $(this).parent().parent().parent().parent().parent().attr("class").split(" ")[2];
            }else{
                var paginate_classMaxnumber     = $(this).parent().parent().attr("class").split(" ")[2];
            };
            var max_number_showed               =  parseInt(((paginate_classMaxnumber.split("-")[1])-1)/2);
            $(this).parent().children(".active_page").prevAll("*:not(.previous_link)").css("display","none");
            $(this).parent().children(".active_page").nextAll("*:not(.next_link)").css("display","none");
            $(this).parent().children(".active_page").prevAll("*:lt("+max_number_showed+")").css("display","");
            $(this).parent().children(".active_page").nextAll("*:lt("+max_number_showed+")").css("display","");

        };
    });
    //al click della pagina
    $(".page_link").click(function(){
        //get the number of items shown per page
        var show_per_page = parseInt($(this).parent().parent().children('.show_per_page').val());

        var page_num = $(this).attr("longdesc");

        //calcola quanti mancano da questo alla fine e all'inizio
        var start_from = page_num * show_per_page;
        var end_on = start_from + show_per_page;

        //Nascondi tutti i figli di pages tranne quello da visualizzare
        if($(this).parent().parent().is("td")){
            $(this).parent().parent().parent().parent().parent().find('.pages').children().css('display', 'none').slice(start_from, end_on).css('display', '');
        }else{
            $(this).parent().parent().find('.pages').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
        };

        //recupera il longdesc del link di current page e aggiungi la classe active_page, rimuovi la classe agli altri active_page
        $(this).parent().children().siblings('.active_page').removeClass('active_page');   
        $(this).addClass('active_page');

        //update the current page input field
        if($(this).parent().parent().is("td")){
            $(this).parent().parent().parent().parent().parent().children('.current_page').val(page_num);
        }else{
            $(this).parent().parent().children('.current_page').val(page_num);
        };
        

        //Aggiorna gli elementi numerici hide e non...
        if($(this).parent().parent().is("td")){
            var paginate_classMaxnumber     = $(this).parent().parent().parent().parent().parent().attr("class").split(" ")[2];
        }else{
            var paginate_classMaxnumber     = $(this).parent().parent().attr("class").split(" ")[2];
        };
        var max_number_showed               =  parseInt(((paginate_classMaxnumber.split("-")[1])-1)/2);
        $(this).parent().children(".active_page").prevAll("*:not(.previous_link)").css("display","none");
        $(this).parent().children(".active_page").nextAll("*:not(.next_link)").css("display","none");
        $(this).parent().children(".active_page").prevAll("*:lt("+max_number_showed+")").css("display","");
        $(this).parent().children(".active_page").nextAll("*:lt("+max_number_showed+")").css("display","");
    
    });

};
$(document).ready(function(){
    paginate();
});
$(window).resize(function(){
    paginate();
});

/* OVERLAY SYSTEM FUNCTION */
$("a.§overlay").click(function(eventClick) {
        
        eventClick.stopPropagation();
        eventClick.preventDefault();
        eventClick.stopImmediatePropagation();

        var ScrollBarPosition = $(window).scrollTop();

        //$("html").scrollbarOff();

        //recupera i dati da inserire
        var the_ID          = $(this).attr("id");
        var fileLink        = $(this).attr("href");
        var animationtype   = $(this).attr("rel");
        
        var overlay         = "overlay-"+animationtype;
        var overlayOpen     = overlay+"-open";
        var overlayClosed   = overlay+"-closed";

        
        var siteCage        = "siteCage-"+animationtype;
        var cageOpen        = siteCage+"-open";
        var cageClosed      = siteCage+"-closed";

       
        //Incapsula per fixeddare il sito
        
        $("body").wrapInner('<div class="'+siteCage+'" style="padding-right:'+scrollbarWidth+'px;"><div class="siteContent"/></div>');
        $('.siteContent').css("margin-top",ScrollBarPosition*-1);

        //Costruisci l'overlay
        $('\
            <div id="'+the_ID+'" class="'+overlay+'">\n\
                <a class="closeOverlay">CHIUDI</a>\n\
                <div class="overlayContent"></div>\n\
            </div>\n\
        ').insertAfter("body>div:last-of-type");

        //carica il file, verifica se è da scrollare...
        window.setTimeout( function(){
            var docHeight = $(document).height();
            var docWidth = $(document).width();
            $(".overlayContent").load(fileLink, function() 
            {
                var contentHeight = $(".overlayContent>*").outerHeight();
                var contentWidth = $(".overlayContent>*").outerWidth();
                if( contentHeight > docHeight ){
                    $(".overlayContent").addClass("scroll-y");
                }
                else if(contentWidth > docWidth){
                    $(".overlayContent").addClass("scroll-x");
                }
                else{
                    var overlayHei = $(".overlayContent").height();
                    var contentHei = $(".overlayContent>div").height();
                    var TheValueHei = (overlayHei-contentHei)/2;
                    $(".overlayContent>div").css("margin-top",TheValueHei);
                };
                
                anchorSlide();
                fill_ratio();
                ifimgextracorrection();
                tableAxis();
                centred();
                pull();
                equa();
                just();

                tbkg();
                thumbox();

                createSelect();
                arrangeSelect();
                clickselect();

                dropdown();
                tabs();
                flap();
                breadcrumps();
                
                    
            });

        },300);

        

        //a seconda dell'effetto apri l'overlay
        window.setTimeout( function(){
            window.setTimeout( function(){
                $("."+siteCage).removeClass().addClass(cageOpen);
            },100);
            window.setTimeout( function(){
                $("."+overlay).removeClass().addClass(overlayOpen);
            },200);
        },900);

        //al click di chiudi...
        $(".closeOverlay").bind("click", function() {

            //a seconda dellanimazione chiudi i contenitori e l'verlay
            $("."+overlayOpen).removeClass().addClass(overlayClosed);
            $("."+cageOpen).removeClass().addClass(cageClosed);

            window.setTimeout( function(){
                //distruggi i contenitori e l'overlay
                $(".siteContent>*").unwrap();
                $("."+cageClosed+">*").unwrap();
                $("."+overlayClosed).remove();
                //$("html").scrollbarOn();
               $(window).scrollTop(ScrollBarPosition); 
            },800);
        });
});

/* SCROLL BAR ON OFF FUNCTION */
// SCROLLBAR ON & OFF
$(window).load(function(){
    var $inner = jQuery('<div style="width: 100%; height:200px;">test</div>'),
        $outer = jQuery('<div style="width:200px;height:150px; position: absolute; top: 0; left: 0; visibility: hidden; overflow:hidden;"></div>').append($inner),
        inner = $inner[0],
        outer = $outer[0];
    jQuery('body').append(outer); var width1 = inner.offsetWidth; $outer.css('overflow', 'scroll');
    var width2 = outer.clientWidth;
    $outer.remove();
    scrollbarWidth = parseFloat(width1 - width2);
    return scrollbarWidth;
});
/*
(function($){
    $.fn.scrollbarOff = function() {
        return this.each(function(){
            $(this).attr("style","padding-right:"+thebarWidth+"px !important; overflow: hidden;");
        });
    };
}(jQuery));

(function($){
    $.fn.scrollbarOn = function() {
        return this.each(function(){
            $(this).attr("style","padding-right: ; overflow: auto;");  
        });
    };
}(jQuery));
*/