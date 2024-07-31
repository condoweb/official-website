<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/ADMIN/DATABASE AZIONI E FILE...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > amministrazione condominio... gestisci i file ed i backup della tua amministrazione.</h1>
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
                    
                        <h4>Opzioni sul materiale salvato, scaduto, cestinato <!--<font class="§float-right">[<i class="ico-resize-full-2"> Expand</i> ]</font>--></h4>

                        <hr style="margin: 5px 0 25px 0;" />

                        <table class="§table-simpleHorintal">
                            <tbody>
                                <tr>
                                    <th class="§ellipsis" style="max-width: 200px;">TIPO</th>
                                    <th class="§ellipsis" style="max-width: 200px;">DESCRIZIONE</th>
                                    <th class="§ellipsis" style="max-width: 200px;">SPAZIO</th>
                                    <th class="§ellipsis §text-center" style="max-width: 200px;">OPZIONI</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p>DOCUMENTI</p>
                                    </td>
                                    <td>
                                        <p class="§ellipsis" style="max-width: 200px;">FATTURE ASCENSORE CONDOMINIO VIALE ALEBERATO</p>
                                    </td>
                                    <td>
                                        <p>22Mb</p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§button-group §radius-small">
                                            <a class="§button §overlay" rel="scale" href="admin.profilo.cestino.overlay.recupera.php">RECUPERA</a>
                                            <a class="§button disabled">CANCELLA</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>UTENTE</p>
                                    </td>
                                    <td>
                                        <p class="§ellipsis" style="max-width: 200px;">RAGFAELLA MIRANTE</p>
                                    </td>
                                    <td>
                                        <p>1Mb</p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§button-group §radius-small">
                                            <a class="§button §overlay" rel="scale" href="admin.profilo.cestino.overlay.recupera.php">RECUPERA</a>
                                            <a class="§button §overlay" rel="scale" href="admin.profilo.cestino.overlay.elimina.php">CANCELLA</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>BACKUP</p>
                                    </td>
                                    <td>
                                        <p class="§ellipsis" style="max-width: 200px;">UTENZE MESE DICEMBRE - CONDOMINIO VIALE ALBERATO</p>
                                    </td>
                                    <td>
                                        <p>12 Mb</p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§button-group §radius-small">
                                            <a class="§button §overlay" rel="scale" href="admin.profilo.cestino.overlay.recupera.php">RECUPERA</a>
                                            <a class="§button §overlay" rel="scale" href="admin.profilo.cestino.overlay.elimina.php">CANCELLA</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>UTENTE</p>
                                    </td>
                                    <td>
                                        <p class="§ellipsis" style="max-width: 200px;">MARIO SARAGUSA</p>
                                    </td>
                                    <td>
                                        <p>1Mb</p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§button-group §radius-small">
                                            <a class="§button §overlay" rel="scale" href="admin.profilo.cestino.overlay.recupera.php">RECUPERA</a>
                                            <a class="§button §overlay" rel="scale" href="admin.profilo.cestino.overlay.elimina.php">CANCELLA</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>BACKUP</p>
                                    </td>
                                    <td>
                                        <p class="§ellipsis" style="max-width: 200px;">FILE CONDOMINIO VIALE ALEBERATO</p>
                                    </td>
                                    <td>
                                        <p>12Mb</p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§button-group §radius-small">
                                            <a class="§button §overlay" rel="scale" href="admin.profilo.cestino.overlay.recupera.php">RECUPERA</a>
                                            <a class="§button §overlay" rel="scale" href="admin.profilo.cestino.overlay.elimina.php">CANCELLA</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
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