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
                    
                        <h4>lista messaggi da parte degli altri utenti <font class="§float-right">[<i class="ico-resize-full-2"> Expand</i> ]</font></h4>

                        <hr style="margin: 5px 0 25px 0;" />
                        <div class="§grid gridSpace-10">
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <a class="§button §fill-line"><i class="ico-comment-7"></i>&nbsp;CREA NUOVO</a>
                            </div>
                            <div class="columnContent desktop-50 mobile-50 compact-50">
                                <a href="admin.profilo.messaggi.archivio.php" class="§button §fill-line">ARCHIVI&nbsp;<i class="ico-archive-2"></i></a>
                            </div>
                            <div class="clearAll"></div>
                        </div>
                        
                        <hr />
                        
                        <div class="§panel §radius-small pad-20">
                            <table class="§table-simpleHorintal">
                                <tbody>
                                    <tr>
                                        <th colspan="2" class="§ellipsis" style="max-width: 200px;">DISCUSSIONE</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="§ellipsis" style="max-width: 400px;">
                                               INVIATO DA: <a href="user.profileMaster" class="§ellipsis" style="max-width: 200px;">ALBERTO MARA'</a>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="§ellipsis §text-right" style="max-width: 200px;">09/06/2014</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/>
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br/><br/><br/>
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br/>
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="§button §fill-line" href="rispMessage.php"> Rispondi </a> 
                                        </td>
                                        <td>
                                            <a class="§button §fill-line" href="delMessage.php"> Archivia </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <hr />
                        
                        <div class="§panel §radius-small pad-20 ">
                            <table class="§table-simpleHorintal">
                                <tbody>
                                    <tr>
                                        <th colspan="2" class="§ellipsis" style="max-width: 200px;">DISCUSSIONE</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="§ellipsis" style="max-width: 400px;">
                                               INVIATO DA: <a href="user.profileMaster" class="§ellipsis" style="max-width: 200px;">GABRIELE PONTE - CONDOMINIO VILLAMARE</a>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="§ellipsis §text-right" style="max-width: 200px;">31/05/2014</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>
                                                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="§ellipsis" style="max-width: 400px;">
                                               INVIATO DA: <a href="user.profileMaster" class="§ellipsis" style="max-width: 200px;">ALBERTO MARA'</a>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="§ellipsis §text-right" style="max-width: 200px;">01/06/2014</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>
                                                Certamente... Ho capito le sue esigenze e mi metterò immediatamente all'opera. Cordiali saluti.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="§button §fill-line" href="rispMessage.php"> Rispondi </a> 
                                        </td>
                                        <td>
                                            <a class="§button §fill-line" href="delMessage.php"> Archivia </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                                      
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