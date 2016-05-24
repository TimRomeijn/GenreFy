<?php
include "db.php";
include "session.php";
    
$rock = $_POST["rock"];
$hiphop = $_POST["hiphop"];
$techno = $_POST["techno"];
$jazz = $_POST["jazz"];
$classic = $_POST["classic"];
$country = $_POST["country"];

$query = "INSERT INTO genrefy_session VALUES('', '". $_SESSION['login_user'] . "', '" . $rock . "', '" . $hiphop . "', '" . $techno . "', '" . $jazz . "', '" . $classic . "', '" . $country . "');";

doQuery($query, $db);

?>