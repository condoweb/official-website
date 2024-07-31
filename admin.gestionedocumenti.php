<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/ADMIN/GESTISCI DOCUMENTI...</title>
    </head>

    <body>

        <h1 class="hidden">Benvenuti cerca condominio</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>AREA AMMINISTRAZIONE</h3>
                <h2>GESTIONE DOCUMENTI - NOMECONDOMINIO</h2>
                <p style="margin-top: 2px;">Da qui puoi gestire file, dati e clienti del condominio appena scelto...</p>

                <hr />

                <!--box accessori di amministrazione-->
                <div class="§grid gridSpace-20">
                    <div class="columnContent desktop-33 mombile-33 compact-100">
                        <div class="§panel pad-30 §radius-medium">
                            <h4><i class="ico-doc" style="font-size:20px;"></i> CARICA UN DOCUMENTO</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p class="§text-justify">
                                Carica un singolo file, ad esempio un'immagine, un documento scannerrizzato, un file zip o rar. 
                            </p>
                            <hr style="margin: 25px 0 25px 0;" />
                            <a class="§button §fill-line §overlay" rel="scale" href="admin.gestionedocumenti.overlay.upsingolo.php">
                                Carica file singolo
                            </a>
                            <hr style="margin: 25px 0 25px 0;" />
                            <h4><i class="ico-docs" style="font-size:20px;"></i> CARICA PIU' DOCUMENTI</h4>
                            <hr style="margin: 5px 0 25px 0;" />
                            <p class="§text-justify">
                                Carica più file insieme, ad esempio una serie di pagine da rilegare. <br />
                                Diventerà tutto un unico file da scaricare, direttame qui. 
                            </p>
                            <hr style="margin: 25px 0 25px 0;" />
                            <a class="§button §fill-line §overlay" rel="scale" href="admin.gestionedocumenti.overlay.upmultiplo.php">
                                Carica molti file
                            </a>
                        </div>                        
                    </div>
                    <div class="columnContent desktop-66 mombile-66 compact-100">
                    
                    <h4>Documenti caricati per questo condominio <!--<font class="§float-right">[<i class="ico-resize-full-2"> Espandi</i> ]</font>--></h4>

                    <hr style="margin: 5px 0 25px 0;" />

                    <table class="§paginate maxpage-8 maxnumber-5 §table-simpleHorintal">
                        <thead>
                            <tr>
                                <th class="§text-left"> ID </th>
                                <th class="§text-left"> File </th>
                                <th class="§text-left"> Descrizione </th>
                                <th class="§text-left"> Opzioni </th>
                            </tr>
                        </thead>
                        <tbody class="pages">
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">201</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">202</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">203</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">204</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">205</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">206</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">207</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">208</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">209</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">210</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">211</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">212</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">213</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">214</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">215</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">216</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">217</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">218</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">219</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> <p class="§ellipsis" style="max-width: 50px;">220</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 200px;">Condoweb</p> </td>
                                <td> <p class="§ellipsis" style="max-width: 400px;">Guida all'uso del sito internet per i condomini</p> </td>
                                <td width="100">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Scarica</a>
                                        <a class="§button §overlay" rel="scale" href="admin.gestionedocumenti.overlay.eliminafile.php">Elimina</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                    <div class='page_navigation'></div>
                                    <input type='hidden' class='current_page' />
                                    <input type='hidden' class='show_per_page' />
                                </td>
                            </tr>
                        </tfoot>
                    </table>                    
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