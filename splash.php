<?php
include("inc/config.php");
if($_SESSION["first_time"] == 0){
    $_SESSION["first_time"] = 1;
}
$sidensLink = $_GET["side"];
$sidensLink = str_replace("/TV2-Lorry/loading?side=", "", $sidensLink);
?>
<!doctype html>
<html lang="da">
    <head>
        <title>FADBAMSEVALG17 - Kommunalvalg 2017</title>
        <meta charset="utf-8">
        <link href="css/splashscreen.css" type="text/css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
    <div class="splashscreen">
        <div class="kop">
            <div class="oel"></div>
        </div>
        <div class="bobbler"></div>
        <div class="skum"></div>
    </div>
    <div class="procentBeholder">
        <div class="procent">100%</div>
    </div>
    <script type="text/javascript">
        $('.procent').animate(
            {width:'100%'},
            {
                duration:3500,
                step: function(now, fx) {
                    if(fx.prop == 'width') {
                        $(this).html(Math.floor(now * 100) / 100 + '%');
                        if(now == 100){
                            $(location).attr('href','<?=$sidensLink?>');
                        }
                    }
                }
            }
        );
    </script>
    </body>
</html>