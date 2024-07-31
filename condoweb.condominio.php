<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/CONDOMINI...</title>
    </head>

    <body>

        <h1 class="hidden">Condominio Trovato</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>CONDOWEB</h3>
                <h2>CONDOMINIO "VILLA CESARE" ...</h2>
                <p style="margin-top: 2px;">tutti i dati di questo condominio...</p>

                <hr />
                <div class="§panel §radius-medium §shadow-outside">
                    <div class="section-group pad-small §text-center desktop-off mobile-off compact-on">
                        <h2>Villa Cesare</h2>
                        <i>Via Dodecaneso 3, 00144, ROMA</i>     
                    </div>
                    <div class="§grid §radius-small-top">
                        <div class="columnContent desktop-50 mobile-50 compact-100">
                            <div class="§radius-small-top-left">
                                <img class="§toBkg-cover §radius-small-top" height="250" src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/media/image/demo/democondominio.jpeg" />
                                <p class="§radius-small pad-4" style="position:absolute; top:0; margin: 20px 0 0 20px; background-color: rgba(110, 155, 153, 0.5); background: rgba(110, 155, 153, 0.5); color: white;">&nbsp;ID&nbsp;208&nbsp;</p>
                            </div>
                        </div>
                        <div class="columnContent desktop-50 mobile-50 compact-100">
                            <div class="§radius-small-top-right">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2970.3243547380102!2d12.505672999999998!3d41.885881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61bf7fcaab73%3A0x130be9f915490f8!2sBasilica+di+San+Giovanni+in+Laterano!5e0!3m2!1sit!2sit!4v1405310235993" frameborder="0" style="border:0; width: 100%; height: 250px; display: block;"></iframe>
                            </div>
                        </div>
                        <div class="clearAll"></div>
                    </div>
                    <div class="section-group pad-small §text-center desktop-on mobile-on compact-off">
                        <h2>Villa Cesare</h2>
                        <i>Via Dodecaneso 3, 00144, ROMA</i>   
                    </div>
                    <div class="section-group pad-small §text-center">
                        Amministrato da: <a class="loaderOut" href="condoweb.profiloutente.php">NOME COGNOME</a> - <a class="§overlay" rel="scale" href="condoweb.condominio.overaly.contatto.php">CONTATTALO</a>
                    </div>
                    <div class="section-group">
                        <div class="§button-group §radius-small-bottom §fill-full">
                            <a class="§button §fill-full §overlay" rel="scale" href="condoweb.condominio.overaly.entraincondominio.php" style="display: block !important;">Entra nel condominio</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php include "@.page.footer.php" ?>
        <a class="§totop-left"><i class="ico-up-circle-1"></i></a>

        <?php include "@.scriptsandcss.php" ?>

    </body>

</html>