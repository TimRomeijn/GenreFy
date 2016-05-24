<?php
include('custom/session.php'); // Includes Login Script
?>
<!DOCTYPE html>
<html>
<head>
    <title>Genrefy</title>
    <!-- Display mobile on mobile, desktop on desktop etc -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="custom/style.css" rel="stylesheet" media="screen">
</head>
<body>
    <!-- Navigatie balk boven aan de pagina-->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">

            <!--Logo-->
            <a href="#" class="navbar-brand"><img src="img/logo.png" id="logo" /></a>

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Mobile vieuw mode -->
            <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="pages/Genre-fy.php"><img src="img/Menu_Icons/1.png" class="menu_icon">Genre-Fy!</a></li>
                    <li><a href="pages/last_session.php"><img src="img/Menu_Icons/2.png" class="menu_icon">Last Session</a></li>
                    <li><a href="pages/Around_me.php"><img src="img/Menu_Icons/3.png" class="menu_icon">Around Me</a></li>
                    <li><a href="pages/Statistics.php"><img src="img/Menu_Icons/4.png" class="menu_icon">Statistics</a></li>
                    <li><a href="pages/logout.php"><img src="img/Menu_Icons/5.png" class="menu_icon">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- HomePage-->
    <div class="container">
        <div class="col-md-1"></div>
        <div class="col-md-12">
            
            <!--Header-->
            <div class="page-header">
                <h1 id="header">Genre-Fy<br />
                    <small>You can't date music, but we will match you</small></h1>
            </div>
            <p>
                Welcome to the homepage of "Genre-Fy" the newest addition to the Spotify App family.
                With our new App you will be able to learn more about your music taste, more then you ever knew before.
                <br /><br />
                With our easy system you can go through music in a organised matter and like or dislike the songs you hear. 
            At the end of every session you will be informed through a Pie-chart with your favorite music genre.
            </p>
                <img src="img/Index/1_start.png" id="frame">
                <img src="img/Index/1_app.png" id="frame">
                <img src="img/Index/chart.png" id="frame">
         </div>
    </div>
     <div class="col-md-1"></div>
    <!-- Navigatie balk onder aan de pagina-->
    <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text pull-left">Made by Team 5</p>
            <a href="http://project.cmi.hr.nl/2014_2015/spotify_mt1c_t5/" class="navbar-btn btn-danger btn pull-right">Team Blog</a>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>