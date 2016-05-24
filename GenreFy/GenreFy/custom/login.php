<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
//If button is pressed
if (isset($_POST['submit'])) {
    //Check for empty fields
    if (empty($_POST['email']) || empty($_POST['wachtwoord'])) {
        $error = "Niet alle velden zijn ingevuld";
    }
    else
    {
        //Define username and password
        $username=$_POST['email'];
        $password=$_POST['wachtwoord'];
        //Connect to the database
        $connection = mysql_connect("localhost", "53206", "to7eis");
        //Security check
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        //Selecting Database
        $db = mysql_select_db("prj_2014_2015_spotify_mt1c_t5", $connection);
        //SQL query to fetch information of registerd users and finds user match.
        $query = mysql_query("SELECT * FROM genrefy_users WHERE wachtwoord='$password' AND email='$username'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$username;
            header("location: ../index.php"); // Redirecting To Other Page
        } else {
            $error = "Email of wachtwoord is onjuist";
        }
        mysql_close($connection); // Closing Connection
    }
}
?>