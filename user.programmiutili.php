<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/USER/UTILITA' PER TE...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > utente condominio... alcune utilità messe a disposizione per te.</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>UTILITA' & PROGRAMMI PRONTI PER TE...</h2>
                <p style="margin-top: 2px;">Scarica da qui tutti i programmi che il tuo amministratore mette a disposizione per te.</p>

                <hr />

                <table class="§paginate maxpage-8 maxnumber-5 §table-simpleHorintal">
                    <thead>
                        <tr>
                            <th class="§text-left"> Nome </th>
                            <th class="§text-left"> Descrizione </th>
                            <th class="§text-left"> Opzioni </th>
                        </tr>
                    </thead>
                    <tbody class="pages">
                        <tr>
                            <td width="150"> <p class="§ellipsis" style="max-width: 150px;">Calcolo IMU</p> </td>
                            <td>
                                <p class="§ellipsis" style="width: auto; max-width: 600px; padding-right: 20px;"
                                    title=
                                    "Scarica il programma sul pc o sul mac. Installalo dove vuoi ed avvialo per calcolare la tua imu in pochi click.">
                                    Scarica il programma sul pc o sul mac. Installalo dove vuoi ed avvialo per calcolare la tua imu in pochi click.
                                </p>
                            </td>
                            <td width="150">
                                <a title="il programma verrà scaricato sul tuo pc" class="§button §fill-line" href="mimu.softonic.it/universaldownloader-launch">SCARICA ORA</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
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