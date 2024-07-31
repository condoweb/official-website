<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <?php include "inside.metataghead.php" ?>

    <body>

        <!--SITE CONTENT/-->

        <?php include "inside.topBarBig.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>GESTIONE UTILITA' - NOMECONDOMINIO</h2>
                <p style="margin-top: 2px;">Da qui puoi gestire file, dati e clienti del condominio appena scelto...</p>

                <hr />

                <!--box accessori di amministrazione-->
                <div class="§grid gridSpace-20">
                    <div class="columnContent desktop-33 mombile-33 compact-100">
                        <div class="§panel pad-30 §radius-medium">
                            <h4><i class="ico-link-1" style="font-size:20px;"></i> CREA LINK UTILI</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p class="§text-justify">
                                Crea un link utile che può essere utilizzato dai tuoi utenti, ad esempio il link al tuo sito o quello delle agenzie delle imposte. 
                            </p>
                            <hr style="margin: 25px 0 25px 0;" />
                            <a class="§button §fill-line">
                                Crea un link utile
                            </a>
                            <hr style="margin: 25px 0 25px 0;" />
                            <h4><i class="ico-floppy" style="font-size:20px;"></i> CARICA PROGRAMMI</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p class="§text-justify">
                                Carica più file da eseguire su un altro pc, ad esempio il programma per il calcolo dell'imu, o delle imposte.
                            </p>
                            <hr style="margin: 25px 0 25px 0;" />
                            <a class="§button §fill-line">
                                Carica programma utile
                            </a>
                        </div>                        
                    </div>
                    <div class="columnContent desktop-66 mombile-66 compact-100">
                        <h4>Link e programmi utili caricati <font class="§float-right">[<i class="ico-resize-full-2"> Expand</i> ]</font></h4>
                        <hr style="margin: 5px 0 25px 0;" />
                        <table class="§table-simpleHorintal">
                            <tbody>
                                <tr>
                                    <th class="§text-left"> Nome </th>
                                    <th class="§text-left"> Descrizione </th>
                                    <th class="§text-left"> Opzioni </th>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 200px;"><i class="ico-floppy" style="font-size:20px;"></i> Calcolo Imu</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Calcola l'imu direttamente a casa tua</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Scarica</a>
                                            <a class="§button">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <p class="§ellipsis" style="max-width: 200px;"><i class="ico-link-1" style="font-size:20px;"></i> Angenzia Entrate</p> </td>
                                    <td> <p class="§ellipsis" style="max-width: 400px;">Sito della agenzia delle entrate</p> </td>
                                    <td width="100">
                                        <div class="§button-group §radius-small">
                                            <a class="§button">Apri link</a>
                                            <a class="§button">Elimina</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
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

                <hr/>
                
                <hr />

                
            </div>
        </div>

        <!--/SITE CONTENT-->

        <?php include "inside.scriptsandcss.php" ?>

            
    </body>

</html>