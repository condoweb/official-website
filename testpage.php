<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

    <?php include "inside.metataghead.php" ?>

    <body>

        <!--SITE CONTENT/-->

        <?php include "inside.topBarBig.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">

                <hr />

                <h2>h1 - tag default hidden</h1>
                <h2>h2 - this is a lorem ipsum</h2>

                <hr />

                <h3>h3 - this is a lorem ipsum</h3>
                <p>
                    <b class="§tooltip" title="Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa ed è considerato il testo segnaposto standard sin dal sedicesimo secolo.">Lorem ipsum</b> dolor <a>sit amet</a>, consectetur adipisicing elit, <b class="§tooltip" title="I versi del Lorem Ipsum sono molti ed al contrario di quanto si pensi, Lorem Ipsum non è semplicemente una sequenza casuale di caratteri. Risale ad un classico della letteratura latina del 45 AC, cosa che lo rende vecchio di 2000 anni.">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</b>. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, <strong>sunt in culpa qui</strong> officia deserunt mollit anim id est laborum.
                </p>

                <hr />

                <h4>h4 - this is a lorem ipsum</h4>
                <h5>h5 - this is a lorem ipsum</h5>
                <h6>h6 - this is a lorem ipsum</h6>
                <h7>h7 - this is a lorem ipsum</h7>

                <hr />
                
                <div class="§panel pad-30 §radius-medium">
                    <table class="§table-simpleHorintal">
                        <tbody>
                            <tr>
                                <th> User </th>
                                <th> Role </th>
                                <th> Reference </th>
                                <th>  </th>
                            </tr>
                            <tr>
                                <td> Alberto Marà </td>
                                <td> Art Direction </td>
                                <td> albertomara.contatto@gmail.com </td>
                                <td class="§text-right">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Contact</a>
                                        <a class="§button">Eresing</a>
                                        <a class="§button">Modify</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Andrea Tantimonaco </td>
                                <td> Developers Group </td>
                                <td> andrea.tantimonaco@gmail.com </td>
                                <td class="§text-right">
                                    <div class="§button-group §radius-small">
                                        <a class="§button">Contact</a>
                                        <a class="§button">Eresing</a>
                                        <a class="§button">Modify</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr />

                <div class="§breadcrumbs-classic">
                    <a class="active">Frist</a>
                    <a>Second</a>
                    <a>Third</a>
                    <a>Fourth</a>
                </div> 
                
                <hr />

                <input class="§button §fill-line" type="text" value="mytext" />

                <br/><br class="§br-small" />
                
                <input class="§button §fill-line" type="button" value="button fill-line" />

                <br/><br class="§br-small"/>
                
                <a class="§button §fill-line">link  fill-line</a>

                <br/><br class="§br-small"/>

                <input class="§button" type="button" value="button" />
                <input class="§button" type="submit" value="submit" />
                <a class="§button">buttonlink</a>
                <a class="§button buttonLoading"><i class="ico-spin5 animate-spin"></i> Load</a>
                <a class="§button"><i class="ico-doc"></i> upload file</a>
                <a class="§button"><i class="ico-docs"></i> upload pack</a>
                <div class="§btn-separator"></div>
                <input class="§button disabled" disabled type="submit" value="disabled" />
                <a class="§button disabled">link disabled</a>

                <br/><br class="§br-small"/>

                <div class="§button-group §radius-small">
                    <a class="§button">Creation</a>
                    <a class="§button">Eresing</a>
                    <a class="§button">Modify</a>
                </div>
                <div class="§btn-separator"></div>
                <div class="§dropdown-click">
                    <a class="§button §arrow §radius-small"> Other </a>
                    <div class="§dropbox-block" style="margin-left: 0px; display: none; margin-top: 10px;">
                        <div class="§panel pad-20" style="width:200px;">
                            <a class="§button §fill-line">option one</a>
                            <a class="§button §fill-line">option two</a>
                            <a class="§button §fill-line">option tree</a>
                        </div>
                    </div>
                </div>

                <hr />

                <textarea class=" §radius-medium" style="height: 190px;">
Test text area

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </textarea>

                <hr />


            </div>
        </div>

        <!--/SITE CONTENT-->

        <?php include "inside.scriptsandcss.php" ?>

            
    </body>

</html>