
//tabs
function tabs(){

    //alert("avvio §tabs");

    $(".§tabs").each(function(){
        //recupera quel che serve
        tabs_link = $(this).children(".tabsList").children("li").children("a");
        tabs_container = $(this).children(".tabsContent");
        tabs_tab = $(this).children(".tabsContent").children();

        first_link = $(this).children("ul").children("li").children("a:first");
        first_tab = $(this).children(".tabsContent").children("div:first");

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

/* FOR NEXT VERSION

;(function ( $, window, document, undefined ) {

    var pluginName = "tabbed",
        defaults = {
            effect: 'fade'
        };

       // $('<style>body { background-color: red; color: white; }</style>').appendTo('head');

    function Plugin( element, options ) {
        this.element = element;
        this.$elem = $(this.element);
        this.options = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype = {

        init: function() {

            var links = this.$elem.find('a');
            var firstchild = this.$elem.find('li:first-child').find('a');
            var lastchild = this.$elem.find('li:last-child').after('<span class="clearedtablist"></span>');

            if (this.options.effect === 'scale') {
                tab_content = this.$elem.find('div').not(':first').not(':nth-child(1)').addClass('hidescale');
            } else if (this.options.effect === 'slideLeft') {
                tab_content = this.$elem.find('div').not(':first').not(':nth-child(1)').addClass('hideleft');
            } else if (this.options.effect === 'scaleUp') {
                tab_content = this.$elem.find('div').not(':first').not(':nth-child(1)').addClass('hidescaleup');
            } else if (this.options.effect === 'flip') {
                tab_content = this.$elem.find('div').not(':first').not(':nth-child(1)').addClass('hideflip');
            }
            
            //trova l'altezza del tab
            var firstdiv = this.$elem.find('.tabs_container');
            var firstdivheight = firstdiv.find('*:first').outerHeight();
            firstdiv.css("height",firstdivheight+"px");

            //fai partire il primo tab come active
            firstchild.addClass('tab_active');

            // prendi i div e recuperali in una variabile
            var alldivs = this.$elem.find('div:first>*');

            //al click avvia il sistema
            links.bind('click', {myOptions: this.options}, function(e) {
                e.preventDefault();

                var $options = e.data.myOptions;
                var effect = $options.effect;

                var mythis = $(this);
                var thisform = mythis.parent().parent().parent();
                var thislink = mythis.attr('href');

                firstdiv.addClass('transition');

                links.removeClass('tab_active');
                mythis.addClass('tab_active');
                //trova la giusta altezza del div
                var thisdivheight = thisform.find('*'+thislink).outerHeight();
                firstdiv.height(thisdivheight);

                if (effect === 'fade') {
                    alldivs.removeClass('fadein').addClass('make_transist').addClass('fadeout');
                    thisform.find('div'+thislink).addClass('make_transist').addClass('fadein');
                } else if (effect === 'slideLeft') {
                    alldivs.removeClass('showleft').addClass('make_transist').addClass('hideleft');
                    thisform.find('div'+thislink).addClass('make_transist').addClass('showleft');
                } else if (effect === 'scaleUp') {
                    alldivs.removeClass('showscaleup').addClass('make_transist').addClass('hidescaleup');
                    thisform.find('div'+thislink).addClass('make_transist').addClass('showscaleup');
                } else if (effect === 'flip') {
                    alldivs.removeClass('showflip').addClass('make_transist').addClass('hideflip');
                    thisform.find('div'+thislink).addClass('make_transist').addClass('showflip');
                } else if (effect === 'scale') {
                    alldivs.removeClass('showscale').addClass('make_transist').addClass('hidescale');
                    thisform.find('div'+thislink).addClass('make_transist').addClass('showscale');
                }

            });

        },

        yourOtherFunction: function(el, options) {
            // some logic
        }
    };

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            new Plugin( this, options );
        });
    };

})( jQuery, window, document );

$(document).ready(function(){ 
    
    $('.§tabs,.§tabs-fade').each(function(){
       $(this).tabbed({ effect: 'fade' }); 
    });

    $('.§tabs-scale').each(function(){
       $(this).tabbed({ effect: 'scale' }); 
    });

    $('.§tabs-slideLeft').each(function(){
       $(this).tabbed({ effect: 'slideLeft' }); 
    });

    $('.§tabs-scaleUp').each(function(){
       $(this).tabbed({ effect: 'scaleUp' }); 
    });

    $('.§tabs-flip').each(function(){
       $(this).tabbed({ effect: 'flip' }); 
    });

});
$(window).resize(function(){ 
    
    $('.§tabs,.§tabs-fade').each(function(){
       $(this).tabbed({ effect: 'fade' }); 
    });

    $('.§tabs-scale').each(function(){
       $(this).tabbed({ effect: 'scale' }); 
    });

    $('.§tabs-slideLeft').each(function(){
       $(this).tabbed({ effect: 'slideLeft' }); 
    });

    $('.§tabs-scaleUp').each(function(){
       $(this).tabbed({ effect: 'scaleUp' }); 
    });

    $('.§tabs-flip').each(function(){
       $(this).tabbed({ effect: 'flip' }); 
    });

});
*/