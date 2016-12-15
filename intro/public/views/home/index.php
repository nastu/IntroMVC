<!DOCTYPE html>
<html>
<head>
    <title>Creative Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>


    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.css"/>
</head>

<body>

<!--  Navigation Bar -->

<nav id="nav" class="navbar navbar-default navbar-fixed-top noBorder" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brandStyle" href="#">Intro</a>
        </div>

        <div class="collapse navbar-collapse noPadding" id="myNavbar">
            <div class="navbar-right menustyle">
                <ul class="nav navbar-nav">
                    <li><a href=""><p><i class="fa fa-home"></i> home</p></a></li>
                    <li><a href="#gallery"><p><i class="fa fa-picture-o"></i> galeria</p></a></li>
                    <li><a href="#contact"><p><i class="fa fa-envelope-o"></i> kontakt</p></a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>

<!-- Main Page -->

<div class="container-fluid noPadding">

    <div class="container-fluid headpicture"></div>

    <div class="container text-center">

        <h1>Słowem o nas</h1>

        <p class="textStyle">
            Hey there! This is a <a href="http://tutorialzine.com/2014/04/creative-company-bootstrap-template/">responsive
                template made by Tutorialzine</a>. It uses the bootstrap framework from twitter. Try resizing your
            browser window, or open the page on your smartphone. We hope you find our little template useful! <br><br>Feel
            free to share it with your friends, or, if possible, include a back link to our site if you use it. Thanks!
        </p>

        <h1 id="gallery">Galeria</h1>

    </div>
    <div class="container">
        <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#galleryCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#galleryCarousel" data-slide-to="1"></li>
                <li data-target="#galleryCarousel" data-slide-to="2"></li>
            </ol>
            <?php
            $files = glob('pictures/*.{jpg,png,gif}', GLOB_BRACE); ?>

            <!--        Wrapper for slides -->
            <div class="carousel-inner gallery main-gallery" role="listbox">
                <div class="item active">
                    <img src="<?php $files[0];?>" alt="Chania">
                </div>

                <?php

                foreach ($files as $file) {
                    $src = '';
                    echo $file . ' ';
                    echo '<img style="max-width: 150px; max-height: 100px;" src="../' . $file . '"></br>';
                }
                ?>
                <!---->
                <!--                <div class="item">-->
                <!--                    <img src="image/img2.jpg" alt="Chania">-->
                <!--                </div>-->
                <!---->
                <!--                <div class="item">-->
                <!--                    <img src="image/img3.jpg" alt="Chania">-->
                <!--                </div>-->
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#galleryCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#galleryCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container textstyle">
        <div class="row text-center latestProjects">

            <div class="col-md-4 col-sm-6">
                <a href="http://dribbble.com/shots/1210363-Weather-App-Washing-Machine-iOS7">
                    <img class="imgsize" src="image/1.jpg" alt="weather app">
                </a>
                <p>Weather app design <a href="http://dribbble.com/shots/1210363-Weather-App-Washing-Machine-iOS7">learn
                        more →</a></p>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="http://dribbble.com/shots/202313-British-Tea-Cup">
                    <img class="imgsize" src="image/2.jpg" alt="british tea cup">
                </a>
                <p>3D modeling and rendering <a href="http://dribbble.com/shots/202313-British-Tea-Cup">learn more →</a>
                </p>
            </div>

            <div class="col-md-4 col-sm-12">
                <a href="http://dribbble.com/shots/606745-In-app-Visual-Data">
                    <img class="imgsize" src="image/3.jpg" alt="app visualization data">
                </a>
                <p>Mobile web application <a href="http://dribbble.com/shots/606745-In-app-Visual-Data">learn more →</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container footer">
        <div class="col-xs-12 col-md-8 noPadding">
            <p id="footerLogoText">Intro Joanna Grzędowska © 2016</p>
        </div>
        <div class="col-xs-12 col-md-4 noPadding">
            <div class="socialButtons responsiveAlign">
                <a href="#" class="noPadding">
                    <img src="image/twitter.svg" alt="image1">
                </a>
                <a href="#" class="noPadding">
                    <img src="image/facebook.svg" alt="image1">
                </a>
                <a href="#" class="noPadding">
                    <img src="image/behance.svg" alt="image1">
                </a>
            </div>
        </div>
    </div>

</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>