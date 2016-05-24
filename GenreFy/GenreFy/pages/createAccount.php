<?php
include('../custom/create.php'); // Include create page
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
            <a href="#" class="navbar-brand"><img src="../img/logo.png" id="logo" /></a>

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
                    <li><a href="Around_me.php"><img src="../img/Menu_Icons/3.png" class="menu_icon">Around Me</a></li>
                    <li><a href="Statistics.php"><img src="../img/Menu_Icons/4.png" class="menu_icon">Statistics</a></li>
                    <li class="active"><a href="#"><img src="../img/Menu_Icons/5.png" class="menu_icon">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Login form-->
    <div class="container">
        <p><br /></p>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <h3>Create Account</h3>
                        </div>
                        <!--The login form-->
                        <form action="" method="post">
                            <!--Email Register part-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <!--Password Register part-->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                                    <input type="password" name="wachtwoord" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            <!--Submit button-->
                            </div>
                            <hr />
                            <button type="submit" name="submit" class="btn btn-primary">Register</button>
                            <button type="button" name="submit" class="btn btn-success" onclick="location.href = 'loginPage.php'">Back to Login</button>
                            <!---Error message-->
                            <?php 
                            echo $error;?>
                            <p><br /></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

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