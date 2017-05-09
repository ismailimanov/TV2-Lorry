<?php
include("header.php");
?>
    <div class="topslider kontaktostop valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="sliderOverskrift">Kontakt os</h1>
                </div>
            </div>
        </div>
        <div class="oel oelAnim"></div>
    </div>
    <div class="skumBund"></div>
    <div class="container kontakt">
        <div class="row">
            <div class="col s12 m12 l8">
                <span class="kontaktOver">Har du et spørgsmål? Så skriv til os!</span>
                <form action="?send=1" method="post">
                    <input type="text" name="navn" placeholder="Dit navn">
                    <input type="email" name="email" placeholder="Din e-mail adresse">
                    <input type="text" name="emne" placeholder="Emne">
                    <textarea name="besked" placeholder="Din besked"></textarea>
                    <button><i class="fa fa-envelope-o"></i> Send Besked</button>
                </form>
            </div>
            <div class="col s12 m12 l4">
                Billede/info
            </div>
        </div>
    </div>
<?php
include("footer.php");
?>
