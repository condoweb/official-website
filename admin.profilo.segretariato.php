<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <?php include "inside.metataghead.php" ?>

    <body>

        <!--SITE CONTENT/-->

        <?php include "inside.topBarBig.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>IL TUO PROFILO, LE TUE OPZIONI</h2>
                <p style="margin-top: 2px;">Da qui puoi gestire i tui dati e le opzioni che vuoi mantenere...</p>

                <hr />

                <!--box accessori di amministrazione-->
                <div class="§grid gridSpace-20">
                    <div class="columnContent desktop-33 mombile-33 compact-100">
                        <?php include "inside.admin.profilo.optionList.php" ?>
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

        <!--/SITE CONTENT-->

        <?php include "inside.scriptsandcss.php" ?>

            
    </body>

</html>