<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <?php include "inside.metataghead.php" ?>

    <body>

        <!--SITE CONTENT/-->

        <?php include "inside.topBarBig.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>GESTIONE CONDOMINIO - <a href="condoweb.condominio.php">NOMECONDOMINIO</a></h2>
                <p style="margin-top: 2px;">Da qui puoi gestire file, dati e clienti del condominio appena scelto...</p>

                <hr />

                <!--box accessori di amministrazione-->
                <div class="§grid gridSpace-10">
                    <div class="columnContent desktop-33 mombile-33 compact-50">
                        <div class="§panel pad-30 §radius-medium">
                            <h4><i class="ico-docs" style="font-size:20px;"></i> DOCUMENTI</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p style="height: 100px;" class="§text-justify">
                                Carica i tuoi documenti. Ad esempio lo statuto condominiale o i bollettini informativi, ma anche una serie di pagine da rilegare, ecc. 
                            </p>
                            <hr />
                            <a class="§button §fill-line" href="admin.gestionedocumenti.php">
                                Gestisci Documenti
                            </a>
                        </div>                        
                    </div>
                    <div class="columnContent desktop-33 mombile-33 compact-50">
                        <div class="§panel pad-30 §radius-medium">
                            <h4><i class="ico-diamond" style="font-size:20px;"></i> SPESE</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p style="height: 100px;" class="§text-justify">
                                Rimuovi, aggiungi, visualizza ed esamina tutte le spese condominiali e le loro fatture ed allegati. Ogni centesimo sotto il tuo controllo.
                            </p>
                            <hr />
                            <a class="§button §fill-line" href="admin.gestionespese.php">
                                Gestisci spese
                            </a>
                        </div>                        
                    </div>
                    <div class="columnContent desktop-33 mombile-33 compact-100">
                        <div class="§panel pad-30 §radius-medium">
                            <h4><i class="ico-paper-plane-2" style="font-size:18px;"></i> UTILITA'</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p style="height: 100px;" class="§text-justify">
                                Linka ai tuoi utenti il materiale che renderà tutto più semplice ed immediato. Carica qui i tuoi link utili, file e programmi da scaricare. 
                            </p>
                            <hr />
                            <a class="§button §fill-line" href="admin.gestioneutilita.php">
                                Gestisci utilità
                            </a>

                        </div>                        
                    </div>
                    <div class="clearAll"></div>
                </div>

                <hr/>

                <div class="§panel pad-30 §radius-medium">
                    <h4>GLI UTENTI DI QUESTO CONDOMINIO</h4>
                    
                    <hr style="margin-top: 15px;"/>

                    <p>
                        Cerca e aggiungi un utente direttamente dal riquadro qui in basso.
                    </p>
                    <div class="§grid gridSpace-10">
                        <div class="columnContent desktop-75 mombile-75 compact-100">
                            <input class="§button §fill-line" type="text" value="Inserisci qui la mail o il nome e cognome, o l' ID di chi cerchi" />
                        </div>
                        <div class="columnContent desktop-25 mombile-25 compact-100">
                            <input class="§button §fill-line" type="submit" value="Cerca ora" disabled />
                        </div>
                        <div class="clearAll"></div>
                    </div>

                    <hr/>
                    
                    <h4>Ultimi utenti inseriti per questo condominio</h4>

                    <table class="§table-simpleHorintal">
                        <tbody>
                            <tr>
                                <th class="§text-left"> Nome e cognome </th>
                                <th class="§text-left"> Mail </th>
                                <th class="§text-left" width="100">
                                </th>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Mario Rossi</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">Mariorossi@contatto.com</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Mario Rossi</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">Mariorossi@contatto.com</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Giuseppe Arduino</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">GiuseArdu@hotmail.com</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Ferdinando Massara</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">ferdi1980@gmail.com</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Francesca Fabrocini</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">killgirl@kataweb.com</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Fabio Serracino</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">Serracino.fabio84@gmail.com</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Nicoletta Tanosano</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">tanotano@facebook.com</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Fulvia Golia</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">fulviagolia1970@gmail.com</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Mariangela Miramare</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">mariangelamiramare1968@yahoo.com</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Michele Scanzano</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 460px;">ilmorellino@live.it</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button" href="admin.Visualizza profiloutente.php">Profilo</a>
                                        <a class="§button">Contatta</a>
                                        <a class="§button">Elimina</a>
                                    </div>
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
                                <td width="100">
                                    <a class="§button §fill-line" href="admin.listautenti.php"> <i class="ico-users"></i> <b>lista completa</b></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                
                <hr />

                <!-- utenze condominiali -->
                <div class="§panel pad-30 §radius-medium">
                    
                </div>

                
            </div>
        </div>

        <!--/SITE CONTENT-->

        <?php include "inside.scriptsandcss.php" ?>

            
    </body>

</html>