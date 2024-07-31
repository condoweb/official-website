<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/ADMIN/LISTA CONDOMINI...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > amministrazione condominio... gestisci uno di questi condomini.</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>LA LISTA DI TUTTI I TUOI CONDOMINI</h2>
                <p style="margin-top: 2px;">Da qui puoi creare, modificare, ed amministrare i tuoi comdomini...</p>

                <hr />

                <!-- Vista a box
                <div class="vistagriglia">
                    <div class="§grid gridSpace-10">
                        <div class="columnContent desktop-75 mobile-66 compact-0">                        
                            &nbsp;
                        </div>
                        <div class="columnContent desktop-25 mobile-33 compact-100">
                            <div class="§panel §text-center">
                                <a class="pad-4 §tooltips-simple" rel="Puoi scegliere di mantenere questa visualizzazione spuntandola tra le opzioni del tuo profilo"><i class="ico-eye"></i> stile tabulato</a>
                            </div>
                        </div>
                        <div class="clearAll"></div>
                    </div>
                    <br class="§br-small" />
                    
                    <div class="§paginate maxpage-16 maxnumber-5">
                        <div class="§grid gridSpace-10 pages">
                            <div class="columnContent desktop-25 mobile-33 compact-100">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small">
                                        <img class="§toBkg-cover §radius-small-top" height="150" src="https://monte.files.wordpress.com/2008/02/palazzo_prefettura.jpg" />
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <h3>Villa Cesare</h3>
                                        <i>Via Dodecaneso 3, 00144, ROMA</i>
                                    </div>
                                    <div class="section-group">
                                        <div class="§button-group §radius-small-bottom §fill-full">
                                            <a class="§button §fill-full loaderOut" style="display: block !important;" href="admin.gestionecondominio.php">Gestisci</a>
                                            <a class="§button §fill-full §overlay" rel="scale" href="admin.listacondomini.overlay.modificacondominio.php" style="display: block !important;">Modifica</a>
                                            <a class="§button §fill-full §overlay" rel="scale" href="admin.listacondomini.overlay.eliminacondominio.php" style="display: block !important;">Elimina</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-25 mobile-33 compact-100">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small">
                                        <img class="§toBkg-cover §radius-small-top" height="150" src="http://4.bp.blogspot.com/-Q-afB7LSVkQ/UX_EF4hhKnI/AAAAAAAAfu4/--ogB6EwXq0/s1600/2013-04-25+Terraggio+1.jpg" />
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <h3>Palazzo Alberati</h3>
                                        <i>Via Dei Castelli Romani, 41 B/6, 00040, POMEZIA</i>
                                    </div>
                                    <div class="section-group">
                                        <div class="§button-group §radius-small-bottom §fill-full">
                                            <a class="§button §fill-full loaderOut" style="display: block !important;" href="admin.gestionecondominio.php">Gestisci</a>
                                            <a class="§button §fill-full §overlay" rel="scale" href="admin.listacondomini.overlay.modificacondominio.php" style="display: block !important;">Modifica</a>
                                            <a class="§button §fill-full §overlay" rel="scale" href="admin.listacondomini.overlay.eliminacondominio.php" style="display: block !important;">Elimina</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-25 mobile-33 compact-100">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small">
                                        <img class="§toBkg-cover §radius-small-top" height="150" src="http://www.scattidigusto.it/wp-content/uploads/2013/03/Ratan%C3%A0-Milano-palazzina-ph-Barbara-Torresan-640x432.jpg" />
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <h3>Palazzo Narcisi</h3>
                                        <i>Piazza Duomo, 20, 00040, Milano</i>
                                    </div>
                                    <div class="section-group">
                                        <div class="§button-group §radius-small-bottom §fill-full">
                                            <a class="§button §fill-full loaderOut" style="display: block !important;" href="admin.gestionecondominio.php">Gestisci</a>
                                            <a class="§button §fill-full §overlay" rel="scale" href="admin.listacondomini.overlay.modificacondominio.php" style="display: block !important;">Modifica</a>
                                            <a class="§button §fill-full §overlay" rel="scale" href="admin.listacondomini.overlay.eliminacondominio.php" style="display: block !important;">Elimina</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columnContent desktop-25 mobile-33 compact-100">
                                <div class="§panel §radius-medium">
                                    <div class="§fill-line §radius-small">
                                        <img class="§toBkg-cover §radius-small-top" height="150" src="http://lacasadinina.it/onewebmedia/FOTO%20AMBIENTI/COMUNE%20DI%20NETTUNO%201.jpg" />
                                    </div>
                                    <div class="section-group pad-small §text-center">
                                        <h3>Villa Maltesi</h3>
                                        <i>Via angelita, 10, 00040, Anzio</i>
                                    </div>
                                    <div class="section-group">
                                        <div class="§button-group §radius-small-bottom §fill-full">
                                            <a class="§button §fill-full loaderOut" style="display: block !important;" href="admin.gestionecondominio.php">Gestisci</a>
                                            <a class="§button §fill-full §overlay" rel="scale" href="admin.listacondomini.overlay.modificacondominio.php" style="display: block !important;">Modifica</a>
                                            <a class="§button §fill-full §overlay" rel="scale" href="admin.listacondomini.overlay.eliminacondominio.php" style="display: block !important;">Elimina</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearAll"></div>
                        <hr />
                        <div class='page_navigation'></div>
                        <input type='hidden' class='current_page' />
                        <input type='hidden' class='show_per_page' />
                    </div>
                    <hr/>
                    <a class="§button §fill-line §overlay" rel="scale" href="admin.listacondomini.overlay.creacondominio.php"><i class="ico-home"></i> <b>crea nuovo condominio</b></a>
                </div>
                 -->

                <!-- Vista in tabella -->
                <div class="vistaTabulato">
                    <div class="§panel pad-30 §radius-medium">
                        <table class="§paginate maxpage-16 maxnumber-5 §table-simpleHorintal">
                            <thead>
                                <tr>
                                    <th class="§text-left"> <i class="ico-sort-number-up"></i> </th>
                                    <th class="§text-left"> Appellativo </th>
                                    <th class="§text-left"> Recapito / Posizione </th>
                                    <th class="§text-left" width="100">
                                        <div class="§panel §text-center ">
                                            <a class="pad-4 §tooltips-simple" rel="Puoi scegliere di mantenere questa visualizzazione spuntandola tra le opzioni del tuo profilo"><i class="ico-eye"></i> visuale a box</a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="pages">
                                <tr>
                                    <td style="max-width: 2%;"> <i class="ico-cd-1 grab"></i> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Villa Cesare</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 460px;">Via Dodecaneso 3, 00144, ROMA</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button loaderOut" href="admin.gestionecondominio.php">Gestisci</a>
                                            <a class="§button §overlay" rel="scale" href="admin.listacondomini.overlay.modificacondominio.php">Modifica</a>
                                            <a class="§button §overlay" rel="scale" href="admin.listacondomini.overlay.eliminacondominio.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="max-width: 2%;"> <i class="ico-cd-1 grab"></i> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Palazzo Alberati</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 460px;">Via Dei Castelli Romani, 21 B/6, 00100, POMEZIA</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button loaderOut" href="admin.gestionecondominio.php">Gestisci</a>
                                            <a class="§button §overlay" rel="scale" href="admin.listacondomini.overlay.modificacondominio.php">Modifica</a>
                                            <a class="§button §overlay" rel="scale" href="admin.listacondomini.overlay.eliminacondominio.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="max-width: 2%;"> <i class="ico-cd-1 grab"></i> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Palazzo Narcisi</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 460px;">Piazza Duomo, 60, 00210, Milano</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button loaderOut" href="admin.gestionecondominio.php">Gestisci</a>
                                            <a class="§button §overlay" rel="scale" href="admin.listacondomini.overlay.modificacondominio.php">Modifica</a>
                                            <a class="§button §overlay" rel="scale" href="admin.listacondomini.overlay.eliminacondominio.php">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="max-width: 2%;"> <i class="ico-cd-1 grab"></i> </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Villa Maltesi</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 460px;">Via angelita, 10, 00040, Anzio</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button loaderOut" href="admin.gestionecondominio.php">Gestisci</a>
                                            <a class="§button §overlay" rel="scale" href="admin.listacondomini.overlay.modificacondominio.php">Modifica</a>
                                            <a class="§button §overlay" rel="scale" href="admin.listacondomini.overlay.eliminacondominio.php">Elimina</a>
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
                                <tr>
                                    <td colspan="3">
                                        <i style="margin: 0;">Puoi creare un condominio cliccando qui a destra.</i><br/>
                                        <i style="margin: 0;">Una volta creato, potrai gestirlo e modificarlo con i pulsanti in dotazione che appariranno.</i>
                                    </td>
                                    <td width="100">
                                        <a class="§button §fill-line §overlay" rel="scale" href="admin.listacondomini.overlay.creacondominio.php"> <i class="ico-home"></i> <b>crea nuovo condominio</b></a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <?php include "@.page.footer.php" ?>
        <a class="§totop-left"><i class="ico-up-circle-1"></i></a>

        <?php include "@.scriptsandcss.php" ?>

    </body>

</html>