<!DOCTYPE html>
<html>
<head>
    <title>Intro Joanna Grzędowski</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>


    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css"/>
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

        <h1>O firmie</h1>

        <p class="textStyle">
            Intro Joanna Grzedowska zakład oferujący usługi z zakresu poligrafii i introligatorstwa
        </p>

        <h1 id="gallery">Galeria</h1>

    </div>

    <!--Carouzel gallery-->

    <?php include_once 'gallery.php' ?>

    <!--    Contact-->

    

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