<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <?php include "inside.metataghead.php" ?>

    <body>

        <!--SITE CONTENT/-->

        <?php include "inside.topBarBig.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                
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

                <table class="§table-simpleHorintal">
                    <tbody>
                        <tr>
                            <th class="§text-left"> ID </th>
                            <th class="§text-left"> Data </th>
                            <th class="§text-left"> Somma </th>
                            <th class="§text-left"> Tipologia </th>
                            <th class="§text-left"> Causale </th>
                            <th class="§text-left"> Opzioni </th>
                        </tr>
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
                        <tr>
                            <td colspan="2">
                                <div class="§paginate">
                                    <div class="pagelist">
                                      <div class="controlleft">
                                        <a>First</a>
                                        <a><</a>
                                      </div>
                                      <ul>
                                        <li><a>1</a></li>
                                        <li><a>2</a></li>
                                        <li><a>3</a></li>
                                        loop...
                                      </ul>
                                      <div class="controlright">
                                        <a>></a>
                                        <a>Last</a>
                                      </div>
                                    </div>
                              </div> 
                            </td>
                        </tr>
                    </tbody>
                </table>

                <hr />
                
            </div>
        </div>

        <!--/SITE CONTENT-->

        <?php include "inside.scriptsandcss.php" ?>

            
    </body>

</html>