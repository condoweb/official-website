<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <?php include "inside.metataghead.php" ?>

    <body>

        <!--SITE CONTENT/-->

        <?php include "inside.topBarBig.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                
                <h3>CONDOWEB</h3>
                <h2>IL TUO PROFILO, LE TUE OPZIONI</h2>
                <p style="margin-top: 2px;">Da qui puoi gestire i tui dati e le opzioni che vuoi mantenere...</p>

                <hr />

                <!--box accessori di amministrazione-->
                <div class="§grid gridSpace-20">
                    <div class="columnContent desktop-33 mombile-33 compact-100">
                        <div class="§panel §radius-medium">
                            <img class="§toBkg-cover §radius-medium §fill-ratio" src="http://news.attico.it/wp-content/uploads/2013/04/20130503-Amministratore-comunica-morosi.jpg" />
                        </div>
                        <hr />
                        <div class="§panel §radius-medium">
                            <a class="§button §fill-line §radius-medium"> CARICA UNA NUOVA FOTO </a>
                        </div>    
                    </div>
                    <div class="columnContent desktop-66 mombile-66 compact-100">
                    
                        <h4>Riepilogo delle tue informazioni e opzioni sul tuo profilo</h4>

                        <hr style="margin: 5px 0 25px 0;" />

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
                                        TELEFONO
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
                                            VISIBILITA' CONTATTO MAIL
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="userMailVisibility" type="checkbox" name="check" value="None" checked>
                                            <label for="userMailVisibility"></label>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            VISIBILITA' TELEFONO ( visibile / nascosto è OFF)
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="userTel" type="checkbox" name="check" value="None" checked>
                                            <label for="userTelVisibility"></label>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            VISIBILITA' SOCIAL ( visibile / nascosto è OFF)
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="userSocialVisibility" type="checkbox" name="check" value="None" checked>
                                            <label for="userSocialVisibility"></label>
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
                
                <hr />

                
            </div>
        </div>

        <!--/SITE CONTENT-->

        <?php include "inside.scriptsandcss.php" ?>

            
    </body>

</html>