<?php
/* FADBAMSEVALG17 Funktioner Fil */

    function hentCitat($link){
        $hentData = mysqli_query($link, "SELECT * FROM citater ORDER BY RAND() LIMIT 1");

        while($data = mysqli_fetch_array($hentData)){
            ?>
            <img src="<?=$data["billedeLink"]?>"><br>
            <span><?=$data["fuldeNavn"]?></span>
            <p class="flow-text"><b>For at inddrage de unge bedre i demokratiet, skal der være</b> <?=$data["citat"]?></p>
            <?php
        }
    }

    function sendBesked($link, $fuldeNavn, $email, $emne, $besked){
        mysqli_query($link, "INSERT INTO kontakt (fuldeNavn, emailAdresse, emne, besked) VALUES ('{$fuldeNavn}', '{$email}', '{$emne}', '{$besked}')");
    }

    function hentBeskeder($link){
        $hentData = mysqli_query($link, "SELECT * FROM kontakt ORDER BY id DESC");

        while($data = mysqli_fetch_array($hentData)){
            ?>
            <div class="kontaktBoks">
                <b>Fulde Navn:</b> <?=$data["fuldeNavn"];?><br>
                <b>E-mail Adresse:</b> <a href="mailto:<?=$data["emailAdresse"];?>"><?=$data["emailAdresse"];?></a><br>
                <b>Emne:</b> <?=$data["emne"];?><br>
                <b>Besked:</b><br>
                <?=$data["besked"];?>
            </div>
            <?php
        }
    }
?>