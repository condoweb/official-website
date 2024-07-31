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
                    
                        <h4>Archivio messaggi <font class="§float-right">[<i class="ico-resize-full-2"> Expand</i> ]</font></h4>

                        <hr style="margin: 5px 0 25px 0;" />
                        
                        <div class="§panel §radius-small pad-20">
                            <table class="§table-simpleHorintal">
                                <tbody>
                                    <tr>
                                        <th class="§text-left"> MITTENTE </th>
                                        <th class="§text-left"> DATA </th>
                                        <th class="§text-left"> DESCRIZIONE </th>
                                        <th class="§text-left"></th>
                                        <th class="§text-left" width="100"></th>
                                    </tr>
                                    <tr>
                                        <td> <p class="§ellipsis" style="max-width: 200px;">Mario Rossi</p> </td>
                                        <td> <p class="§ellipsis" style="max-width: 200px;">22/06/2014</p> </td>
                                        <td>
                                            <p class="§ellipsis" style="max-width: 100px;"
                                               title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                            </p>
                                        </td>
                                        <td> 2 </td>
                                        <td width="100">
                                            <div class="§button-group §radius-small">
                                                <a class="§button">Recupera</a>
                                                <a class="§button">Elimina</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <p class="§ellipsis" style="max-width: 200px;">Gennarino Stradivari</p> </td>
                                        <td> <p class="§ellipsis" style="max-width: 200px;">22/06/2014</p> </td>
                                        <td>
                                            <p class="§ellipsis" style="max-width: 100px;"
                                               title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                            </p>
                                        </td>
                                        <td> 2 </td>
                                        <td width="100">
                                            <div class="§button-group §radius-small">
                                                <a class="§button">Recupera</a>
                                                <a class="§button">Elimina</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                                      
                        </div>
                        <div class="clearAll"></div>
                    </div>
                    <style>
                        .hide{
                            display: none;
                        }
                    </style>

                <hr/>
                
                <hr />

                
            </div>
        </div>

        <!--/SITE CONTENT-->

        <?php include "inside.scriptsandcss.php" ?>

            
    </body>

</html>