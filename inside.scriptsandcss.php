

        <!--/*/SCRIPTS & CSS OF PAGE/*/-->

        <!--ui.pack-->
        <script type="text/javascript" src="ui.pack/libs/jquery/Jquery.1.11.js"></script>
        <script type="text/javascript" src="ui.pack/ui.pack.js"></script>
        <link type="text/css" rel="stylesheet" media="screen" href="ui.pack/ui.pack.css" charset="utf-8" />
        <link type="text/css" rel="stylesheet" media="screen" href="ui.pack/ui.theme.css" charset="utf-8" />
        <link type="text/css" rel="stylesheet" media="screen" href="ui.pack/font/nexta/stylesheet.css" charset="utf-8" />

        <!--extra script-->
        <style>
            body{
                cursor:url(media/cursor/arrow.png), auto !important;
            }
            a{
                cursor:url(media/cursor/pointer.png), pointer !important; 
            }
            .§screen-height{}
        </style>
        <script type="text/javascript">
            function screenHeight(){
                var docHeight = $(window).height();
                $(".§screen-height").css("height",docHeight+"px");
            };
            $(document).ready(function(){
                    screenHeight();
            });
            $(window).resize(function(){ screenHeight(); });
        </script>