<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/ADMIN/SEGRETARIATO...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > Amministrazione condominio... aggiungi o rimuovi i segretari.</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>IL TUO PROFILO, LE TUE OPZIONI</h2>
                <p style="margin-top: 2px;">Da qui puoi gestire i tui dati e le opzioni che vuoi mantenere...</p>

                <hr />

                <!--box accessori di amministrazione-->
                <div class="§grid gridSpace-20">
                    <div class="columnContent desktop-33 mombile-33 compact-100">
                        <?php include "admin.profilo.optionList.php" ?>
                    </div>
                    <div class="columnContent desktop-66 mombile-66 compact-100">
                    
                        <h4>lista messaggi da parte degli altri utenti</h4>

                        <hr style="margin: 5px 0 25px 0;" />
                        <div class="§grid gridSpace-20">
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small">
                                        <img class="§toBkg-cover §radius-small-top" height="150" src="http://cdn-1.lavoroefinanza.it/o/j/come-diventare-segretario-scolastico_89c32cfe60d9672b1c7bf7ebd05e0bb8.jpg" />
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <h3>Ingamba Valeria</h3>
                                    </div>
                                    <div class="section-group">
                                        <div class="§button-group §radius-small-bottom §fill-full">
                                            <a class="§button §fill-full" style="display: block !important;" href="admin.profilo.segretario.php">Profilo utente</a>
                                            <a class="§button §fill-full" style="display: block !important;" >Condomini assegnati</a>
                                            <a class="§button §fill-full" style="display: block !important;">Licenzia dal segretariato</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50" style="opacity: 0.7;">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small">
                                        <img class="§toBkg-cover §radius-small-top" height="150" src="http://www.hbpblog.com/wp-content/uploads/2013/10/profile-picture-default.jpg" />
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <h3>----</h3>
                                    </div>
                                    <div class="section-group">
                                        <div class="§button-group §radius-small-bottom §fill-full">
                                            <a class="§button §fill-full" style="display: block !important;">Aggiungi segretario</a>
                                            <a class="§button §fill-full disabled" style="display: block !important;" href="admin.gestionecondominio.php">&nbsp;</a>
                                            <a class="§button §fill-full disabled" style="display: block !important;" href="admin.modificacondominio.php">&nbsp;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearAll"></div>
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