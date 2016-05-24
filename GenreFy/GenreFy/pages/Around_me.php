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

                    <li><a href="Genre-fy.php"><img src="../img/Menu_Icons/1.png" class="menu_icon">Genre-Fy!</a></li>
                    <li><a href="last_session.php"><img src="../img/Menu_Icons/2.png" class="menu_icon">Last Session</a></li>
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Google+</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </li>-->
                    <li class="active"><a href="Around_me.php"><img src="../img/Menu_Icons/3.png" class="menu_icon">Around Me</a></li>
                    <li><a href="Statistics.php"><img src="../img/Menu_Icons/4.png" class="menu_icon">Statistics</a></li>
                    <li><a href="logout.php"><img src="../img/Menu_Icons/5.png" class="menu_icon">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Around me-->
    <div class="container">
        <img src="../img/construction.png" id="construction" />
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
</body>
</html>