<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <?php include "inside.metataghead.php" ?>

    <body>

        <!--SITE CONTENT/-->

        <?php include "inside.topBarBig.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>LISTA UTENTI - NOMECONDOMINIO</h2>
                <p style="margin-top: 2px;">Da qui puoi gestire tutti gli utenti del condominio appena scelto...</p>

                <hr />

                <div class="§grid gridSpace-20">
                    <div class="columnContent desktop-33 mombile-33 compact-100">
                        <div class="§panel pad-30 §radius-medium">
                            <h4><i class="ico-cancel-7" style="font-size:20px;"></i> Elimina utenti</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p class="§text-justify">
                                Elimina tutti gli utenti che hai spuntato.
                            </p>
                            <hr style="margin: 25px 0 25px 0;" />
                            <a class="§button §fill-line">
                                Cancella ora
                            </a>
                            <hr style="margin: 25px 0 25px 0;" />
                            <h4><i class="ico-reply-all-2" style="font-size:20px;"></i>&nbsp; Sposta utenti</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p class="§text-justify">
                                Sposta gli utenti che hai spuntato in un altro condominio.
                            </p>
                            <hr style="margin: 25px 0 25px 0;" />
                            <a class="§button §fill-line">
                                Sposta ora in..
                            </a>
                            <hr style="margin: 25px 0 25px 0;" />
                            <h4><i class="ico-comment-7" style="font-size:18px;"></i> Contatta Utenti</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p class="§text-justify">
                                Contatta tutti gli utenti che hai spuntato.
                            </p>
                            <hr style="margin: 25px 0 25px 0;" />
                            <a class="§button §fill-line">
                                Invia messaggio
                            </a>
                        </div>                        
                    </div>
                    <div class="columnContent desktop-66 mombile-66 compact-100">
                    
                        <h4>Lista utenti completa per questo condominio <font class="§float-right">[<i class="ico-resize-full-2"> Expand</i> ]</font></h4>

                        <hr style="margin: 5px 0 25px 0;" />

                        <div class="§grid gridSpace-10">
                            <div class="columnContent desktop-75 mombile-75 compact-100">
                                <input class="§button §fill-line" type="text" value="Inserisci qui la mail o il nome e cognome, o l' ID di chi cerchi" />
                            </div>
                            <div class="columnContent desktop-25 mombile-25 compact-100">
                                <input class="§button §fill-line" type="submit" value="Cerca ora" disabled />
                            </div>
                            <div class="clearAll"></div>
                        </div>

                        <hr style="margin: 5px 0 25px 0;" />

                        <table class="§table-simpleHorintal">
                            <tbody>
                                <tr>
                                    <th class="§text-left"><i class="ico-check-2" style="padding-left:1px;"></i> </th>
                                    <th class="§text-left"> Nome e cognome </th>
                                    <th class="§text-left"> Mail </th>
                                    <th class="§text-left" width="100">
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="§checkbox-square-check">
                                            <input id="unID_dd" type="checkbox" name="squarecheck" value="None">
                                            <label for="unID_dd"></label>
                                        </div>
                                    </td>
                                    <td> <p class="§ellipsis" style="max-width: 200px;">Nicole Martini</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 460px;">nicolemartini@gmail.com</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button" href="user.profilo.php">Profilo</a>
                                            <a class="§button">Contatta</a>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td colspan="4">
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