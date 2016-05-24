<?php
include('../custom/session.php'); // Are you logged in?
include('../custom/db.php'); // File to load from dataBase

//Select data from the database
$result = "SELECT * FROM genrefy_session WHERE gebruiker = '$user_check'";
$scores = $con->query($result);
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
    <!-- Pie Diagram -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link href="../css/piechart.css" rel="stylesheet">

     <style>
      *:not(pre) {
            vertical-align: top;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

            a:hover {
                border-bottom-width: 2px;
            }

   
        #content {
            position: relative;
            padding-top: 1em;
        }

        @media(min-width:768px) {
            #content {
                margin-left: 8%;
            }
        }

        @media(min-width:920px) {
            #content {
                margin-left: 5%;
            }
        }

        @media(min-width:1240px) {
            #content {
                margin-left: 4%;
            }
        }
    </style>

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

                <!-- Menu balk-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../pages/Genre-fy.php"><img src="../img/Menu_Icons/1.png" class="menu_icon">Genre-Fy!</a></li>
                    <li><a href="../pages/last_session.php"><img src="../img/Menu_Icons/2.png" class="menu_icon">Last Session</a></li>
                    <li><a href="../pages/Around_me.php"><img src="../img/Menu_Icons/3.png" class="menu_icon">Around Me</a></li>
                    <li class="active"><a href="#"><img src="../img/Menu_Icons/4.png" class="menu_icon">Statistics</a></li>
                    <li><a href="../pages/logout.php"><img src="../img/Menu_Icons/5.png" class="menu_icon">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Total session grafiek-->
    <div class="container">
        <div class="row">
            <!--Load info from database-->
            <div class="col-md-1">

            <?php 
                $rock = 0;
                $hiphop = 0;
                $techno = 0;
                $jazz = 0;
                $classic = 0;
                $country = 0;
                
                $genres = array("Rock", "Hiphop", "Techno", "Jazz", "Classic", "Country");
                
                foreach($scores as $score) 
                { 
                    $rock += $score['rock'];
                    $hiphop += $score['hiphop'];
                    $techno += $score['techno'];
                    $jazz += $score['jazz'];
                    $classic += $score['classic'];
                    $country += $score['country'];
                }
                $values = array($rock, $hiphop, $techno, $jazz, $classic, $country);
                $highest_number = array_search(max($values), $values);
            ?>
                            
            <tr>     
                <h1 id="rock"><?php echo $rock; ?></h1>
                <h1 id="hiphop"><?php echo $hiphop;?></h1>
                <h1 id="techno"><?php echo $techno;?></h1>
                <h1 id="jazz"><?php echo $jazz;?></h1>
                <h1 id="classic"><?php echo $classic;?></h1>
                <h1 id="country"><?php echo $country;?></h1>
            </tr>

            </div>
            <div class="col-md-10">
                <div class="page-header">
                <h1 id="header">From all your sessions with Genre-fy we can tell you: <br />
                    <small>your favourite genre is <?php echo $genres[$highest_number] ?></small></h1>
                </div>
                <div id="content">
                   <div class="framework-container">
                    <div class="totalSession" onpagenavigation id="demo"></div>
                  </div>
               </div>
           </div>
        </div>
        <div class="col-md-1"></div>
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
    <script src="../js/piechart.js"></script>
</body>
</html>