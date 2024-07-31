
     /* UI CONTROLLER */

     $(document).ready(function() {
	  
        var guipath = "ui.pack/data/";

        $.getScript(guipath+"ui.layout.loaderpage.js");
        $.getScript(guipath+"ui.layout.ancor.js");

        $.getScript(guipath+"ui.layout.filldocument.js");
        $.getScript(guipath+"ui.layout.toBackground.js");
        $.getScript(guipath+"ui.layout.iframe.js");
        $.getScript(guipath+"ui.layout.fillratio.js");
        $.getScript(guipath+"ui.layout.just.js");
        $.getScript(guipath+"ui.layout.equa.js");
        $.getScript(guipath+"ui.layout.centred.js");
        $.getScript(guipath+"ui.layout.pull.js");

        $.getScript(guipath+"ui.nav.flap.js");
        $.getScript(guipath+"ui.hideshow.js");
        $.getScript(guipath+"ui.nav.tabs.js");
        $.getScript(guipath+"ui.dropdown.js");
        $.getScript(guipath+"ui.nav.breadcrumps.js");
        //$.getScript(guipath+"ui.nav.paginate.js"); DA FINIRE E FIXARE CON AMEDEO
        $.getScript(guipath+"ui.overlay.js");

        $.getScript(guipath+"ui.nav.totop.js");
        //$.getScript(guipath+"ui.nav.paginate.js"); da fare
        $.getScript(guipath+"ui.nav.navside.js");
        $.getScript(guipath+"ui.nav.navtop.js");

     });