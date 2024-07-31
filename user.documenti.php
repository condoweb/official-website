<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/USER/DOCUMENTI CONDOMINIALI...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > untente condominio... i documenti del tuo condominio.</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>DOCUMENTI DI NOMECONDOMINIO</h2>
                <p style="margin-top: 2px;">Da qui puoi scaricare i documenti del tuo condominio...</p>

                <hr />
                    <div class="§grid gridSpace-10">
                        <div class="columnContent desktop-75 mombile-75 compact-100">
                            <input class="§button §fill-line" type="text" value="Inserisci qui l' ID del documento che cerchi">
                        </div>
                        <div class="columnContent desktop-25 mombile-25 compact-100">
                            <input class="§button §fill-line" type="submit" disabled="" value="Cerca ora">
                        </div>
                        <div class="clearAll"></div>
                    </div>
                <hr />

                <table class="§paginate maxpage-8 maxnumber-5 §table-simpleHorintal">
                    <thead>
                        <tr>
                            <th class="§text-left"> ID </th>
                            <th class="§text-left"> File </th>
                            <th class="§text-left"> Descrizione </th>
                            <th class="§text-left"> Opzioni </th>
                        </tr>
                    </thead>
                    <tbody class="pages">
                        <tr>
                            <td> <p class="§ellipsis" style="max-width: 50px;">203</p> </td>
                            <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                            <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                            <td width="100">
                                <div class="§button-group §radius-small">
                                    <a class="§button">Scarica ora</a>
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
        </div>
        <?php include "@.page.footer.php" ?>
        <a class="§totop-left"><i class="ico-up-circle-1"></i></a>

        <?php include "@.scriptsandcss.php" ?>

    </body>

</html>