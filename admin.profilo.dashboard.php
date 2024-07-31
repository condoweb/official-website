<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/ADMIN/DASHBOARD...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > amministrazione condominio... riassunto della situazione.</h1>
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
                    
                        <h4>Riepilogo delle attività di tutti i tuoi condomini</h4>

                        <hr style="margin: 5px 0 25px 0;" />
                        <div class="§grid gridSpace-10">
                            <div class="columnContent desktop-100 mobile-100 compact-0">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>SPOTLIGHT</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <img  class="§toBkg-cover §radius-small-top" height="350" src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/media/image/demo/demorendimento.jpeg" />
                                        <!--GRAFICO SPESE/UTENZETOTALI/MESSAGGI RICEVUTI/KBUSATI-->
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-100 mobile-100 compact-100">
                                <hr />
                            </div>
                            <div class="columnContent desktop-33 mobile-33 compact-33">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>Utenti attivi oggi</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <p style="font-size: 40px;">12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-33 mobile-33 compact-33">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>Visite nel mese</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <p style="font-size: 40px;">42</p>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-33 mobile-33 compact-33">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>Totale accessi</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <p style="font-size: 40px;">253</p>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>Condomini Totali</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <p style="font-size: 40px;">8 su 15</p>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>Utenti Totali</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <p style="font-size: 40px;">24 su 25</p>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>Messaggi Ricevuti</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <p style="font-size: 40px;">2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>Utenti in attesa di risposta</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <p style="font-size: 40px;">1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>Traffico dati totali</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <p style="font-size: 40px;">450Mb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small §text-center pad-4">
                                        <h5>Mb Usati( su 250Mb disponibili )</h5>
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <p style="font-size: 40px;">150Mb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-100 mobile-100 compact-100">
                                <hr />
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <div class="§fill-line §radius-small §text-center pad-4">
                                    <a class="§button §fill-line">Espandi spazio</a>
                                </div>
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <div class="§fill-line §radius-small §text-center pad-4">
                                    <a class="§button §fill-line">Espandi abbonamento</a>
                                </div>
                            </div>   
                        </div>
                        <div class="clearAll"></div>
                    </div>

                <hr/>
                
                <hr />

                
            </div>
        </div>
        <?php include "@.page.footer.php" ?>
        <a class="§totop-left"><i class="ico-up-circle-1"></i></a>

        <?php include "@.scriptsandcss.php" ?>

    </body>

</html>