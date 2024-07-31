<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <?php include "inside.metataghead.php" ?>

    <body>

        <!--SITE CONTENT/-->

        <?php include "inside.topBarBig.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>IL TUO PROFILO, LE TUE OPZIONI</h2>
                <p style="margin-top: 2px;">Da qui puoi gestire i tui dati e le opzioni che vuoi mantenere...</p>

                <hr />

                <!--box accessori di amministrazione-->
                <div class="§grid gridSpace-20">
                    <div class="columnContent desktop-33 mombile-33 compact-100">
                        <?php include "inside.admin.profilo.optionList.php" ?>
                    </div>
                    <div class="columnContent desktop-66 mombile-66 compact-100">
                    
                        <h4>Le opzioni del sito, del pagamento, delle sue schermate grafiche ed altro</h4>

                        <hr style="margin: 5px 0 25px 0;" />
                        <table class="§table-simpleHorintal">
                            <tbody>
                                <tr>
                                    <th colspan="2">OPZIONI PAGAMENTO E ABBONAMENTO</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            COUPON E VIP PASS
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <button style="width: 80%" class="§button §text-center" type="text">123456789</button>
                                        <button class="§button" type="submit"><i class="ico-right-open"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            SPAZIO DISPONIBILE ATTUALMENTE
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        250mb usati / 50mb disponibili&nbsp;&nbsp;<a class="§button" href="espandispazio.php">Espandi ora</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            TARIFFA ATTUALE
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        CONDOWEB SMALL PACK&nbsp;&nbsp;<a class="§button"  href="espandiabbonamento.php">Espandi ora</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            METODO PAGAMENTO SCELTO
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        PAYPAL - OGNI 15 DEL MESE&nbsp;&nbsp;<a class="§button"  href="metodopagamento.php">Cambia ora</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            RINNOVO AUTOMATICO
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        PAGAMENTI AUTOMATICI&nbsp;&nbsp;
                                        <div class="§checkbox-slide-big">
                                            <input id="payAuto" type="checkbox" name="check" value="None">
                                            <label for="payAuto"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br class="§br-small" />
                        <table class="§table-simpleHorintal">
                            <tbody>
                                <tr>
                                    <th>OPZIONI VISUALI E STILE</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            VISUALE MINIMALISTA ON/OFF (on = nascondi testata)
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="HeaderShow" type="checkbox" name="check" value="None">
                                            <label for="HeaderShow"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            VISUALE CONDOMINI:  GRIGLIA(ON) / BOX(OFF)
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="gridboxShow" type="checkbox" name="check" value="None">
                                            <label for="gridboxShow"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            SEZIONE "Ultimi utenti inseriti per questo condominio"
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="lastUser" type="checkbox" name="check" value="None" checked>
                                            <label for="lastUser"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            CONDOWEB MOBILE ON/OFF ( on = attiva l'accesso da cellulari completo)<br/>
                                            <i>L'uso di condoweb in mobile è sconsigliato</i>
                                        </p>
                                    </td>
                                    <td class="§text-right">
                                        <div class="§checkbox-slide-big">
                                            <input id="condomobile" type="checkbox" name="check" value="None">
                                            <label for="condomobile"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                                      
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