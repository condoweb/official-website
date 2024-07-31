            <div class="fixedwhite">&nbsp;</div>
            <div class="§grid gridSpace-10 homeTestata">
                <div class="columnContent desktop-75 mobile-65 compact-100">
                    <!--<a class="§float-left logLink" href="PAGINA_LOGIN" style="padding:0 10px 0 10px;"><span class="§radius-full" style="border: 2px solid #fff; "><i class="ico-user-5"></i></span>&nbsp;&nbsp;ACCEDI / REGISTRATI</a>-->
                    <p class="§float-left logLink">&nbsp;&nbsp;BENVENUTO: <a href="admin.profilo.dashboard.php">Mario Rossi</a></p>
                    <p class="§float-left desktop-on mobile-on compact-off">&nbsp;&nbsp;|&nbsp;&nbsp;www.condoweb.it - gestire online condomini e condomini</p>
                </div>
                <div class="columnContent desktop-25 mobile-35 compact-100 §text-right">
                    <ul class="areaLink">
                        <li class="§radius-medium-left"><a href="index.php" >HOME</a></li>
                        <!--<li href="faq.php" class="§radius-medium-left"><a>INFO</a></li>-->
                        <li><a href="PAGINA_CONTATTO">CONTATTO</a></li>
                        <li class="§radius-medium-right"><a href="condowiki.php">CONDOWIKI</a></li>
                    </ul>
                </div>
                <div class="clearAll"></div>
            </div>

            <style>
                .fixedwhite{
                    position: fixed;
                    top: 0; left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 99999;
                    background: #FFF;
                }
                .homeTestata
                {
                    color: white;
                    padding-top: 0px;
                    padding-bottom: 0px;
                    background: url(media/image/design/bkgTestataDark.png), repeat-x;
                    background: -moz-linear-gradient(top,  #000 1%, #141414 52%, #000000 100%);
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#000), color-stop(52%,#141414), color-stop(100%,#000000));
                    background: -webkit-linear-gradient(top,  #000 1%,#141414 52%,#000000 100%);
                    background: -o-linear-gradient(top,  #000 1%,#141414 52%,#000000 100%);
                    background: -ms-linear-gradient(top,  #000 1%,#141414 52%,#000000 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00A79D', endColorstr='#000000',GradientType=0 );
                }
                .logLink{
                    color: white;
                    padding: 0;
                }
                .logLink:hover{
                    color: white;
                    background: none;
                }
                .logLink.focus,a:focus{
                    color: white;
                    background: none;
                }
                .spazioUtente{
                    float: left
                }
                .areaLink{
                    padding: 0;
                    margin: 0;
                    list-style: none;
                }
                .areaLink li{
                    text-align: center;
                    width: 33.333333%;
                    padding-left: 15px;
                    padding-right: 15px;
                    border-right: 1px solid #ccc; 
                    float: left;
                    background: url(media/image/design/bkgTestataClear.png), repeat-x;
                }
                .areaLink li:last-child{
                    clear: right;
                    border-right: 0px solid; 
                }
                .areaLink a{
                    color: white !important;
                    background: none !important;
                }
                .areaLink a:hover{
                    color: #00A79D !important;
                    background: none !important;
                }
            </style>