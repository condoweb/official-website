<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB</title>
    </head>

    <body>

        <h1 class="hidden">Benvenuti in condoweb!</h1>
        <?php include "@.index.topbar.php" ?>

        <div class="§fitScreen"
             style="background:          url(media/image/design/bkgHome.jpg);
                    background-position: center;
                    background-size:     cover;
                    display:             inline-block;
        ">
            <div class="§centred pad-12">
                <div class="§fill-line">
                    <div style="width:      100%;
                                max-width:  750px;
                                margin:     0 auto;
                    ">
                        <img style="max-width:700px;" src="media/image/design/logoBig.png" alt="Condoweb, il sistema più usato per fare condominio online!" />
                        <p>
                            <i style="color: #FFF !important; font-size: 19px;">
                                Dritti a ciò che bisogna fare e con pochi click! Prova subito il sistema condoweb e scopri come gestire, ricevere, trasmettere ed aiutare il tuo condominio e gli altri tuoi condòmini.
                            </i>
                        </p>
                    </div>
                </div>
                <div class="§button-group §btn-compact"
                     style="max-width:  632px;
                            margin:     0 auto;
                ">
                   <a href="condoweb.scopritutto.php" class="§button loaderOut" style="width:200px;">SCOPRI DI PIU’</a>
                   <a href="condoweb.accesso.php"  class="§button loaderOut" style="width:200px;">INIZIA ORA</a>
                   <a href="condoweb.cerca.php"  class="§button loaderOut" style="width:200px;">CERCA CONDOMINIO</a>
               </div>
            </div>
        </div>
        <?php include "@.index.footer.php" ?>
        
        <?php include "@.scriptsandcss.php" ?>

    </body>

</html>