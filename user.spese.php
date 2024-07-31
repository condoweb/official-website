<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/USER/SPESE CONDOMINIALI...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > utente condominio... osserva le spese del tuo condiminio.</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>SPESE PER NOMECONDOMINIO</h2>
                <p style="margin-top: 2px;">Da qui puoi consultare e scaricare le spese effettuate dal tuo condominio...</p>

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
                            <th class="§text-left"> Data </th>
                            <th class="§text-left"> Somma </th>
                            <th class="§text-left"> Tipologia </th>
                            <th class="§text-left"> Causale </th>
                            <th class="§text-left"> Opzioni </th>
                        </tr>
                    </thead>
                    <tbody class="pages">
                        <tr>
                            <td width="50"> <p class="§ellipsis" style="max-width: 50px;">1203</p> </td>
                            <td width="100"> <p class="§ellipsis" style="max-width: 200px;">02/09/2104</p> </td>
                            <td width="100"> <p class="§ellipsis" style="max-width: 200px;">37,50 €</p> </td>
                            <td width="100"> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                            <td> <p class="§ellipsis" style="max-width: 400px;">Pagamento quota mensile del sito web</p> </td>
                            <td width="150">
                                <a class="§button">Scarica allegati</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
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