<?php
include('../custom/session.php'); // Are you logged in?
?>
<!DOCTYPE html>
<html>
<head>
    <title>Genrefy</title>
    <!-- Display mobile on mobile, desktop on desktop etc -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- CustomeStyle + spotify-->
    <link href="../custom/style.css" rel="stylesheet" media="screen">
</head>
<body>
    <!-- Navigatie balk boven aan de pagina-->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">

            <!--Logo-->
            <a href="../index.php" class="navbar-brand"><img src="../img/logo.png" id="logo" /></a>

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Mobile vieuw mode -->
            <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-right">

                    <li class="active"><a href="#"><img src="../img/Menu_Icons/1.png" class="menu_icon">Genre-Fy!</a></li>
                    <li><a href="last_session.php"><img src="../img/Menu_Icons/2.png" class="menu_icon">Last Session</a></li>
                    <li><a href="Around_me.php"><img src="../img/Menu_Icons/3.png" class="menu_icon">Around Me</a></li>
                    <li><a href="Statistics.php"><img src="../img/Menu_Icons/4.png" class="menu_icon">Statistics</a></li>
                    <li><a href="logout.php"><img src="../img/Menu_Icons/5.png" class="menu_icon">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Genre-fy-->
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            
            <!--Header-->
            <div class="page-header">
                <h1 id="header">Genre-Fy<br />
                    <small>You can't date music, but we will match you</small></h1>
            </div>

            <form id="start-form">
                <button type="submit" id="start_button" class="btn btn-success">Start New Session</button>
            </form>

            <marquee behavior="scroll" scrollamount="8" direction="left" id ="currentSong"></marquee>

            <!--Album cover-->
            <div id="preview"></div>

            <!--Dislike button-->
            <form id="decline-form">
                <button type="submit" id="decline_button" class="btn btn-danger">X</button>
            </form>
            <!--Like button-->
            <form id="accept-form">
                <button type="submit" id="accept_button" class="btn btn-success">Like</button>
            </form>
        </div>
         <div class="col-md-4"></div>
        </div>

    <!-- Navigatie balk onder aan de pagina-->
    <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text pull-left">Made by Team 5</p>
            <a href="http://project.cmi.hr.nl/2014_2015/spotify_mt1c_t5/" class="navbar-btn btn-danger btn pull-right">Team Blog</a>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!--Needed for play-->
    <script src="../js/jquery-2.1.3.js"></script>
    <script src="../js/spotify.js"></script>
        </div>
</body>
</html>