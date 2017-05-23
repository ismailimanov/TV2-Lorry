<?php
include("inc/config.php");
?>
<!doctype html>
<html lang="da">
<head>
    <?php
        if($filNavn == "index"){
            echo "<title>Forside - FADBAMSEVALG17 - Kommunalvalg 2017</title>";
        } elseif($filNavn == "fadbamsevalg"){
            echo "<title>FADBAMSEVALG17 - Kommunalvalg 2017</title>";
        } elseif($filNavn == "omos"){
            echo "<title>Om Os - FADBAMSEVALG17 - Kommunalvalg 2017</title>";
        } elseif($filNavn == "kontaktos"){
            echo "<title>Kontakt Os - FADBAMSEVALG17 - Kommunalvalg 2017</title>";
        }
    ?>
    <title>FADBAMSEVALG17 - Kommunalvalg 2017</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php
    if($filNavn == "index"){
        echo '<meta name="description" content="Kommunalvalg bør interessere dig, hvis du ønsker flere billige ungdomsboliger i din kommune. Federe skaterbaner og flere mødesteder, hvor i kan hænge ud.">';
    } elseif($filNavn == "fadbamsevalg"){
        echo '<meta name="description" content="Deltag i konkurrencen hvor du skal hashtag FADBAMSEVALG17. Alle billeder der har dette hashtag er med i konkurrencen om at vinde gratis Grøn Koncert billetter.">';
    } elseif($filNavn == "omos"){
        echo '<meta name="description" content="Vi er et team på fire studerende, der i samarbejde med TV2 LORRY, CPH Business og Grøn koncert vil sætte mere fokus på at inddrage unge i demokratiet.">';
    } elseif($filNavn == "kontaktos"){
        echo '<meta name="description" content="Har du nogle spørgsmål angående kampagnen? Så kan du skrive til os her inde fra vores kontaktformular.">';
    }
    ?>

</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col s4 m4 l4">
                <a href="forside" class="logoLink">
                    <div class="logoHolder">
                        <img src="img/logo.svg" class="logo">
                        <div class="logoTekst">
                            FADBAMSEVALG
                        </div>
                    </div>
                </a>
            </div>
            <div class="col s8 m8 l8">
                <ul class="menu">
                    <li><a <?php if($filNavn == "index"){ echo 'class="active"'; } ?> href="forside">Forside</a></li>
                    <li><a <?php if($filNavn == "fadbamsevalg"){ echo 'class="active"'; } ?> href="fadbamsevalg">#FADBAMSEVALG17</a></li>
                    <li><a <?php if($filNavn == "omos"){ echo 'class="active"'; } ?> href="om-os">Om Os</a></li>
                    <li><a <?php if($filNavn == "kontaktos"){ echo 'class="active"'; } ?> href="kontakt-os">Kontakt Os</a></li>
                </ul>
                <ul class="resMenu">
                    <li id="menuKnap"><i class="material-icons">menu</i></li>
                </ul>
                <div class="responsivMenu">
                    <div onclick="location.href='forside'" class="menuPunkt<?php if($filNavn == "index"){ echo ' resActive'; } ?>">Forside</div>
                    <div onclick="location.href='fadbamsevalg'" class="menuPunkt<?php if($filNavn == "fadbamsevalg"){ echo ' resActive'; } ?>">#FADBAMSEVALG17</div>
                    <div onclick="location.href='om-os'" class="menuPunkt<?php if($filNavn == "omos"){ echo ' resActive'; } ?>">Om Os</div>
                    <div onclick="location.href='kontakt-os'" class="menuPunkt<?php if($filNavn == "kontaktos"){ echo ' resActive'; } ?>">Kontakt Os</div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="indhold">