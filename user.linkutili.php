<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/USER/LINK CONDOMINIALI...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > untente condominio... i link utili per il tuo condominio.</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>LINK UTILI PRONTI PER TE...</h2>
                <p style="margin-top: 2px;">Da qui puoi usare una serie di link messi par facilitarti la vita...</p>

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
                            <td width="200"><p class="§ellipsis" style="max-width: 200px;">Agenzia delle entrate</p></td>
                            <td>
                                <p class="§ellipsis" style="width: auto; max-width: 600px; padding-right: 20px;" title= "Il sito ufficiale dell'agenzia delle entrate, può essere usato per tantissimi scopi come, ad esempio, scaricare il regolamento standard per i condomini.">
                                    Il sito ufficiale dell'agenzia delle entrate, può essere usato per tantissimi scopi come, ad esempio, scaricare il regolamento standard per i condomini.
                                </p>
                            </td>
                            <td width="120">
                                <a class="§button §fill-line" title="il sito verrà aperto in una nuova pagina" href="http://www.agenziaentrate.gov.it/wps/portal/entrate/home" target="_blank">APRI ORA</a>
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