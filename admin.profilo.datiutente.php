<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/ADMIN/DATI UTENTE...</title>
    </head>

    <body>

        <h1 class="hidden">Condoweb > amministrazione condominio... gestisci i tuoi dati.</h1>
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
                    
                        <h4>Riepilogo delle tue informazioni e opzioni sul tuo profilo</h4>

                        <hr style="margin: 5px 0 25px 0;" />


                        <div class="§panel §radius-medium">
                            <img class="§toBkg-cover §radius-medium-top §fill-ratio" src="http://news.attico.it/wp-content/uploads/2013/04/20130503-Amministratore-comunica-morosi.jpg" />
                            <a class="§button §fill-line §overlay" rel="scale" href="admin.profilo.datiutente.overlay.caricafoto.php" style="border-radius:0px 0px 5px 5px !important;"> CARICA UNA NUOVA FOTO </a>    
                        </div>
                            
                        <hr style="margin: 35px 0 15px 0;" />
                        
                        <table class="§table-simpleHorintal">
                            <tbody>
                                <tr>
                                    <th>DATI UTENTE</th>
                                    <th style="width: 50%;"></th>
                                </tr>
                                <tr>
                                    <td>
                                        NOME <i>(REALE)</i>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="MARIO" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        COGNOME <i>(REALE)</i>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="ROSSI" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        TELEFONO <i>(UFFICIO)</i>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="06 9876 876" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        TELEFONO <i>(CELLULARE)</i>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="328 1063 387" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MAIL REGISTRAZIONE <br /><i>(mail per l'accesso a condoweb)</i>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="mariorossi@gmail.com" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        CASELLA MAIL CONDOWEB <br /><i>(tutti i messaggi condoweb arriveranno qui)</i>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" disabled type="text" value="2899.mariorossi@condoweb.it" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br class="§br-small" />
                        <table class="§table-simpleHorintal">
                            <tbody>
                                <tr>
                                    <th>GESTIONE PASSWORD</th>
                                    <th style="width: 50%;"></th>
                                </tr>
                                <tr>
                                    <td>
                                        PASSWORD <i>(Attuale)</i>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" disabled type="text" value="Drittoperdritto" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        CAMBIA, CREA, RECUPERA PASSWORD
                                    </td>
                                    <td>
                                        <a class="§button §fill-line">gestisci password</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br class="§br-small" />
                        <table class="§table-simpleHorintal">
                            <tbody>
                                <tr>
                                    <th>SHARE E LINK PERSONALI</th>
                                    <th style="width: 50%;"></th>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            IL TUO SITO INTERNET
                                        </p>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="www.iltuosito.com" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            IL TUO FACEBOOK
                                        </p>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="www.facebook.com/ilmionome o la mia pagina" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            IL TUO GOOGLE PLUS
                                        </p>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="www.googleplus.com/ilmionome o la mia pagina" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            IL TUO TWITTER
                                        </p>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="www.Twitter.com/ilmionome o la mia pagina" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            IL TUO LINKEDIN
                                        </p>
                                    </td>
                                    <td>
                                        <input class="§button §fill-line" type="text" value="www.linkedin.com/ilmionome o la mia pagina" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br class="§br-small" />
                        <table class="§table-simpleHorintal">
                            <tbody>
                                <tr>
                                    <th>VISIBILITA' E PRIVACY</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            VISIBILITA' UTENZA SU GOOGLE (Sarai comunque rintracciabile su condoweb)
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="googleVisibility" type="checkbox" name="check" value="None" checked>
                                            <label for="googleVisibility"></label>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            VISIBILITA' MAIL DI CONTATTO (mail di registrazione visibile / nascosta è OFF)
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="mailContatto" type="checkbox" name="check" value="None" checked>
                                            <label for="mailContatto"></label>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            VISIBILITA' TELEFONO UFFICIO ( visibile / nascosto è OFF)
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="telOffice" type="checkbox" name="check" value="None" checked>
                                            <label for="telOffice"></label>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            VISIBILITA' TELEFONO CELLULARE ( visibile / nascosto è OFF)
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="telCel" type="checkbox" name="check" value="None" checked>
                                            <label for="telCel"></label>
                                        </div> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                           
                        <hr />
                        <div class="§grid">
                            <div class="columnContent desktop-50 mobile-50 compact-100">&nbsp;</div>
                            <div class="columnContent desktop-50 mobile-50 compact-100">
                                <a class="§button §fill-line" href="salvamodifiche.php"> SALVA MODIFICHE ADESSO </a>
                            </div>
                            <div class="clearAll"></div>
                        </div>


                        <br class="§br-big" />
                        <hr />

                        <h5>PRIVACY, USO E NORME CONDOWEB</h5>
                        <br class="§br-small" />
                        <div class="§grid gridSpace-4">
                            <div class="columnContent desktop-33 mobile-33 compact-100">
                                <a class="§button §fill-line"> NORME D'USO </a>
                            </div>
                            <div class="columnContent desktop-33 mobile-33 compact-100">
                                <a class="§button §fill-line"> PRIVACY DATI </a>
                            </div>
                            <div class="columnContent desktop-33 mobile-33 compact-100">
                                <a class="§button §fill-line" href="cancellaprofilocondoweb.php"> DISATTIVA PROFILO </a>
                            </div>
                            <div class="clearAll"></div>
                        </div>
                            
                        <hr />
                                      
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