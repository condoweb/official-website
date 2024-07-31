<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/ADMIN/GESTISCI SPESE...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > amministrazione condominio... gestisci le spese di questo condominio.</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>GESTIONE SPESE - NOMECONDOMINIO</h2>
                <p style="margin-top: 2px;">Da qui puoi gestire file, dati e clienti del condominio appena scelto...</p>

                <hr />

                <!--box accessori di amministrazione-->
                <div class="§grid gridSpace-20">
                    <div class="columnContent desktop-33 mombile-33 compact-100">
                        <div class="§panel pad-30 §radius-medium">
                            <h4><i class="ico-diamond" style="font-size:20px;"></i> AGGIUNTA SPESE</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p class="§text-justify">
                                Crea una nuova spesa cliccando il pulsante qui in basso.<br />
                                Potrai modificare ogni spesa tramite i pulsanti che appariranno in riepilogo.
                            </p>
                            <hr style="margin: 25px 0 25px 0;" />
                            <a class="§button §fill-line §overlay" rel="scale" href="admin.gestionespese.overlay.aggiungispesa.php">
                                Aggiungi nuova spesa
                            </a>
                        </div>                        
                    </div>
                    <div class="columnContent desktop-66 mombile-66 compact-100">
                    
                        <h4>Riepilogo spese caricate per questo condominio <!--<font class="§float-right">[<i class="ico-resize-full-2"> Expand</i> ]</font>--></h4>

                        <hr style="margin: 5px 0 25px 0;" />

                        <table class="§paginate maxpage-8 maxnumber-5 §table-simpleHorintal">
                            <thead>
                                <tr>
                                    <th class="§text-left"> ID </th>
                                    <th class="§text-left"> Tipologia </th>
                                    <th class="§text-left"> Causale </th>
                                    <th class="§text-left"> Opzioni </th>
                                </tr>
                            </thead>
                            <tbody class="pages">
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">1203</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Pagamento quota mensile</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">2213</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Ascensore</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Fattura riparazione ascensore scala B</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button disabled">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">2311</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Elettricità</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Fattura bollette di condominio</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">2132</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">2131</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button disabled">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">2050</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button disabled">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">2011</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">1899</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button disabled">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">1859</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">1848</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">1768</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">1602</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button disabled">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">1505</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">1504</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button disabled">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">1460</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button disabled">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 50px;">203</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button disabled">Allegati</a>
                                            <a class="§button §overlay" rel="scale" href="admin.gestionespese.overlay.eliminaspesa.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <div class='page_navigation'></div>
                                        <input type='hidden' class='current_page' />
                                        <input type='hidden' class='show_per_page' />
                                    </td>
                                </tr>
                            </tfoot>
                        </table>                    
                    </div>
                    <div class="clearAll"></div>
                </div>

                
            </div>
        </div>
        <?php include "@.page.footer.php" ?>
        <a class="§totop-left"><i class="ico-up-circle-1"></i></a>

        <?php include "@.scriptsandcss.php" ?>

    </body>

</html>