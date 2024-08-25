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
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">ON BOARD COURİER</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/cubelog/index">Startseite</a></li>
                    <li>On Board Courier</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Start Services Details-->
    <section class="services-details">
        <div class="container">
            <div class="row">
                <!--Start Services Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <div class="service-sidebar">
                        <!--Start Services Details Sidebar Single-->
                        <div class="sidebar-widget service-sidebar-single">
                            <div class="service-sidebar-single-services wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1200m">
                                <div class="title">
                                    <h3>Leistungen</h3>
                                </div>
                                <ul>
                                    <li><a href="/cubelog/luftfracht">LUFTFRACHT <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="/cubelog/seefracht">SEEFRACHT <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="/cubelog/landfracht">LANDFRACHT <i class="fa fa-angle-right"></i></a></li>
                                    <li class="current"><a href="/cubelog/on-coard-courier">ON BOARD COURİER <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Services Details Sidebar Single-->
                    </div>
                </div>
                <!--End Services Details Sidebar-->

                <!--Start Services Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <img src="images/resource/service-details-4.jpg" alt="">
                        <h2 class="mt-4">ON BOARD COURİER</h2>
                        <p>Der On-Board-Courier ist die Verbindung aus Schnelligkeit, Kompetenz, Service und
                            Erfahrung. Notfälle, Bandstillstand, extrem zeitkritische Lieferungen - so etwas kann immer
                            vorkommen. In solchen Situationen stehen unsere Spezialisten für Sie bereit, und zwar rund um
                            die Uhr.Ob Charter, On Board Courier oder Direktfahrten in aller Art.</p>
                    </div>
                </div>
                <!--End Services Details Content-->
            </div>
        </div>
    </section>
    <!--End Services Details-->
</div>
<?php
include "footer.php";
include "script.php";
?>
</body>
</html>
