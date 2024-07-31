<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <?php include "inside.metataghead.php" ?>

    <body style="background: url(media/image/design/bkgHome.jpg); background-size: cover;">

        <!--SITE CONTENT/-->

        <?php include "inside.topBar.php" ?>

        <div class="§fill-limits" style="margin-top:10%;">
            <div class="homeLogo">
                <img style="width: 726px;" src="media/image/design/logoBig.png" alt="Condoweb - benvenuti sul sito ufficiale per amministrare i condomini" />
                <p class="homeSlogan">Dritti a ciò che bisogna fare e con pochi click! Prova subito il sistema condoweb e scopri come gestire, ricevere, trasmettere ed aiutare il tuo condominio e gli altri tuoi condòmini</p>
            </div>
            <div class="§grid gridSpace-20">
                <div class="columnContent desktop-33 mobile-33 compact-100">
                    <a href="scoprici.php" class="button-big §radius-small">SCOPRI DI PIU’</a>
                </div>
                <div class="columnContent desktop-33 mobile-33 compact-100">
                    <a href="PAGINA_ACCESSO"  class="button-big §radius-small">INIZIA ORA</a>
                </div>
                <div class="columnContent desktop-33 mobile-33 compact-100 mobiLast">
                    <a href="PAGINA_CONDOMINI"  class="button-big §radius-small">CERCA CONDOMINIO</a>
                </div>
                <div class="columnContent desktop-off mobile-off compact-100">
                    <div class="footerHomeMOBILE">
                        <p>CONDOWEB ® - p.iva 1234567890</p>
                    </div>
                </div>
                <div class="clearAll"></div>
            </div>
        </div>
        <div class="footerHome desktop-on mobile-on compact-off">
            <p>CONDOWEB ® - p.iva 1234567890 - è un marchio registrato - Il logo, il sito ed ogni suo elemento è di esclusiva proprietà degli autori - Ogni utlizzo improprio sarà punito secondo i termini di legge vigenti.</p>
        </div>
        
        <style>
            
            .homeSlogan{
                color: #fff !important;
                font-size: 22px;
                font-style: italic;
            }
            a.button-big{
                width: 100%;
                margin: 0;
                display: block;
                color: #fff !important;
                font-weight: bold;
                background-color: #323E46;
                padding: 20px 70px;
                font-size: 14px;
                border: 1px solid #323E46;
                background-image: linear-gradient(bottom, #00A79D 0%, #67CEC4 100%);
                background-image: -o-linear-gradient(bottom, #00A79D 0%, #67CEC4 100%);
                background-image: -moz-linear-gradient(bottom, #00A79D 0%, #67CEC4 100%);
                background-image: -webkit-linear-gradient(bottom, #00A79D 0%, #67CEC4 100%);
                background-image: -ms-linear-gradient(bottom, #00A79D 0%, #67CEC4 100%);

                background-image: -webkit-gradient(
                    linear,
                    left bottom,
                    left top,
                    color-stop(0, rgb(73,132,180)),
                    color-stop(1, #323E46)
                );
                text-shadow: 0px  -1px 0px rgba(0,0,0,.5);
                text-shadow: x-offset y-offset blur color;

                -webkit-box-shadow: 0px 6px 0px #323E46;
                -moz-box-shadow: 0px 6px 0px #323E46;
                box-shadow: 0px 6px 0px #323E46;

                -webkit-transition: all .07s ease-in-out;
                -moz-transition: all .07s ease-in-out;
                transition: all .07s ease-in-out;

                -webkit-box-shadow: 0px 6px 0px #323E46, 0px 3px 15px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
                -moz-box-shadow: 0px 6px 0px #323E46, 0px 3px 15px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
                box-shadow: 0px 6px 0px #323E46, 0px 3px 15px rgba(0,0,0,.4), inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
            }
            a.button-big:hover {
                color: #fff !important;
                background-image: linear-gradient(bottom, #00A79D 0%, #ADD8D4 100%);
                background-image: -o-linear-gradient(bottom, #00A79D 0%, #ADD8D4 100%);
                background-image: -moz-linear-gradient(bottom, #00A79D 0%, #ADD8D4 100%);
                background-image: -webkit-linear-gradient(bottom, #00A79D 0%, #ADD8D4 100%);
                background-image: -ms-linear-gradient(bottom, #00A79D 0%, #ADD8D4 100%);

                background-image: -webkit-gradient(
                    linear,
                    left bottom,
                    left top,
                    color-stop(0, rgb(79,142,191)),
                    color-stop(1, rgb(102,166,214))
                );
                
                -webkit-box-shadow: 0px 6px 0px #323E46, 0px 3px 15px #ADD8D4, inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
                -moz-box-shadow: 0px 6px 0px #323E46, 0px 3px 15px #ADD8D4, inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
                box-shadow: 0px 6px 0px #323E46, 0px 3px 15px #ADD8D4, inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 3px rgba(255,255,255,.5);
            }
            a.button-big:active {
                margin-top: 5px;
                margin-bottom: -5px;
                background-image: -o-linear-gradient(bottom, 00A79D 0%, rgb(90,150,199) 100%);
                background-image: -moz-linear-gradient(bottom, 00A79D 0%, rgb(90,150,199) 100%);
                background-image: -webkit-linear-gradient(bottom, 00A79D 0%, rgb(90,150,199) 100%);
                background-image: -ms-linear-gradient(bottom, 00A79D 0%, rgb(90,150,199) 100%);

                background-image: -webkit-gradient(
                    linear,
                    left bottom,
                    left top,
                    color-stop(0, rgb(88,154,204)),
                    color-stop(1, rgb(90,150,199))
                );
                -webkit-box-shadow: 0px 2px 0px #323E46, 0px 1px 6px #ADD8D4, inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 4px rgba(255,255,255,.5);
                -moz-box-shadow: 0px 2px 0px #323E46, 0px 1px 6px #ADD8D4, inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 4px rgba(255,255,255,.5);
                box-shadow: 0px 2px 0px #323E46, 0px 1px 6px #ADD8D4, inset 0px 1px 0px rgba(255,255,255,.3), inset 0px 0px 4px rgba(255,255,255,.5);
            }
            .footerHome{  background: black; text-align: center; color: white; position: fixed !important; bottom:0px !important; width: 100%; opacity: 0.5;}
            .footerHomeMOBILE{  background: black; text-align: center; color: white; width: 100%; opacity: 0.5;  margin: 0;}
            .footerHome>p,
            .footerHomeMOBILE>p{  font-size: 10px; margin: 0; padding: 5px; }
            
            
        </style>

        <!--/SITE CONTENT-->

        <?php include "inside.scriptsandcss.php" ?>
        <script type="text/javascript">
            //correggi loader con pannello bianco 
            $(window).load(function(){
                $(".fixedwhite").fadeOut();
            });
        </script>
            

    </body>

</html>