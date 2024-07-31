<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php include "@.metataghead.php" ?>
        <title>CONDOWEB/CERCA...</title>
    </head>

    <body>

        <h1 class="hidden">Benvenuti cerca condominio</h1>
        <?php include "@.page.topbar.big.php" ?>

        <div class="§fill-full" style="background:white;" >
            <div class="§fill-limits pad-40 §text-left">
                <div class="desktop-off mobile-on compact-on" style="margin-top: 80px;"></div>
                
                <h3>CONDOWEB</h3>
                <h2>RICERCA CONDOMINIO / AMMINISTRATORE / ALTRO</h2>
                <p style="margin-top: 2px;">Trova quello che ti interessa, dal condominio al tuo amministratore ad altro, con il suo nome o il suo ID</p>

                <hr />

                <div class="§fill-full §radius-small" style="background: url(http://www.juzaphoto.com/shared_files/uploads/158457.jpg); background-position: center; background-size: cover;">
                    <div style="height:400px;">
                        <div class="pad-6 §radius-small" style=" bottom: 10px; right: 10px; position: absolute; background-color: rgba(255, 255, 255, 0.4); ">
                            <div class="desktop-on mobile-on compact-off">                            
                                <form id="" action="" method="">
                                    <input type="text" class="§button §float-left" style="width:600px; display: block !important;"  value="INSERISCI QUI IL NOME O L'ID DI QUEL CHE STAI CERCANDO..." />
                                    <input type="submit" class="§button §float-left" style="width:100px; margin-left: 10px; display: block !important;"  value="CERCA" />
                                </form>
                            </div>
                            <div class="desktop-off mobile-off compact-on">
                                <form id="" action="" method="">
                                    <input type="text" class="§button §float-left" style="width:200px; display: block !important;"  value="NOME O ID..." />
                                    <input type="submit" class="§button §float-left" style="width:100px; margin-left: 10px; display: block !important;"  value="CERCA" />
                                </form>
                            </div>
                            <div class="clearAll"></div>
                        </div>
                    </div>
                </div>

                <br class="§br-medium" />
                <h3>Risultati trovati:</h3>
                <hr />
                <p>Attualmente non è stata effettuata nessuna ricerca.</p>
                <br class="§br-small" />

            </div>
        </div>
        <?php include "@.page.footer.php" ?>
        <a class="§totop-left"><i class="ico-up-circle-1"></i></a>

        <?php include "@.scriptsandcss.php" ?>

    </body>

</html>