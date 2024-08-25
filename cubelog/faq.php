<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CUBE LOG</title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php
    include "link.php";
    ?>
</head>

<body>
<div class="page-wrapper">
    <?php
    include "header.php";
    ?>
    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">FAQ</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/cubelog/index">Startseite</a></li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="accordion-box">
                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active"> Was bedeutet Reglementierter Beauftragter?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Den Status „Reglementierter Beauftragter“ verleiht das Lunffahrtbundesamt, wenn man gewisse
                                        Voraussetzungen erfüllt. Als RB kann man die sichere Lieferkette in der Luftfracht aufrecht halten und nicht
                                        unterbrechen. Damit kann weitere Verzögerungen und Komplikationen vermeiden.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"> Wie schnell bekomme ich eine Antwort auf meine Anfrage?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Die durchschnittliche Beantwortungsquote unserer Mails betragen ungefähr 10 Minuten.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">Mit welchem Transportmittel ist meine Sendung am schnellsten bei dem Kunden?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Das Flugzeug gilt immer als der schnellte und sicherste Transportmittel für die Beförderung der Güter. Wir
                                        würden Ihnen für die optimale Schnelligkeit, empfehlen Ihre Sendung in der Luft zu verfrachten.</div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

</div>
<?php
include "footer.php";
include "script.php";
?>
</body>
</html>
