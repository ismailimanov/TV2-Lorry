<?php
$filNavn = basename(__FILE__, '.php');
include("header.php");
?>
            <div class="topslider valign-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h1 class="sliderOverskrift">Kommunalvalg '17</h1>
                        </div>
                    </div>
                </div>
                <div class="oel oelAnim"></div>
            </div>
            <div class="skumBund"></div>
            <div class="container top">
                <div class="row">
                    <div class="col s12 m8 l8 hvad">
                        <h1>Hvad fuck er valg?</h1>
                        <p class="flow-text">Kommunalvalg bør interessere dig, hvis du ønsker flere billige ungdomsboliger i din kommune. Federe skaterbaner, sportsmuligheder og flere mødesteder, hvor i kan hænge ud. Bedre og større parkeringspladser til din øse, og ikke mindst flottere cykelstier, så turen bliver meget federe. Hvis du er træt af for lidt busforbindelser og for høje priser, og hvis du mangler et fritidsjob tæt på dit hjem! Hvis du uheldigvis står uden hjem eller har været igennem misbrug eller et liv i kriminalitet, så vil din indflydelse på kommunevalget kunne gøre en forskel på de her ting ud af mange mange flere!</p>
                    </div>
                    <div class="col s12 m4 l4 info">
                        <?php
                            hentCitat($link);
                        ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12 seneste">
                        <h2>#FADBAMSEVALG17</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l4 insta">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BTHRY71hRkB/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Ingen bør tvinges til at betale for noget de ikke bruger.</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Et opslag delt af Anders Samuelsen (@anderssamuelsen1) den <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-04-20T16:19:22+00:00">20. Apr 2017 kl. 9:19 PDT</time></p></div></blockquote>
                        <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>
                    <div class="col s12 m12 l4 insta">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/3x-ptcwJfA/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#stempådanskfolkeparti</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Et opslag delt af Dansk Folkeparti (@danskfolkeparti) den <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-06-11T07:43:57+00:00">11. Jun 2015 kl. 12:43 PDT</time></p></div></blockquote>
                        <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>
                    <div class="col s12 m12 l4 insta">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/3x-ptcwJfA/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#stempådanskfolkeparti</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Et opslag delt af Dansk Folkeparti (@danskfolkeparti) den <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-06-11T07:43:57+00:00">11. Jun 2015 kl. 12:43 PDT</time></p></div></blockquote>
                        <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>
                </div>
            </div>
<?php
include("footer.php");
?>