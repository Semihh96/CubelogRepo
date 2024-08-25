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
                <h1 class="title">Team Details</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/cubelog/index">Startseite</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Team Details Start-->
    <section class="team-details">
        <div class="container pb-100">
            <div class="team-details__top pb-70">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__top-left">
                            <div class="team-details__top-img"> <img src="images/resource/team-details.jpg" alt="">
                                <div class="team-details__big-text">Aleesha</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__top-right">
                            <div class="team-details__top-content">
                                <h3 class="team-details__top-name">Aleesha Brown</h3>
                                <p class="team-details__top-title">Managing Director & CEO</p>
                                <div class="team-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                <p class="team-details__top-text-1">I help my clients stand out and <br> they help me grow.</p>
                                <p class="team-details__top-text-3">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae </p>
                                <p class="team-details__top-text-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-details__bottom pt-100">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-left">
                            <h4 class="team-details__bottom-left-title">Personal Experience</h4>
                            <p class="team-details__bottom-left-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-right">
                            <div class="team-details__progress">
                                <div class="team-details__progress-single">
                                    <h4 class="team-details__progress-title">Marketing</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%">
                                            <div class="count-text">90%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-details__progress-single">
                                    <h4 class="team-details__progress-title">Analytical ability</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="76%">
                                            <div class="count-text">76%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-details__progress-single">
                                    <h4 class="team-details__progress-title">Business</h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="60%">
                                            <div class="count-text">60%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team Details End-->

</div>
<?php
include "footer.php";
include "script.php";
?>
</body>
</html>

