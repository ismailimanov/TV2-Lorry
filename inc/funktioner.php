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
?>