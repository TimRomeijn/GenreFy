<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
//Check for empty fields
if(isset($_POST['submit'])){
    if(empty($_POST['email']) || empty($_POST['wachtwoord'])){
        $error = "Niet alle velden zijn ingevuld";
    }
    else
    {
        //database ingo
        $servername = "localhost";
        $username = "53206";
        $password = "to7eis";
        $dbname = "prj_2014_2015_spotify_mt1c_t5";

        //define $waardes
        $email=($_POST['email']);
        $wachtwoord=($_POST['wachtwoord']);

        //Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        //Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //Add to database
        $sql = "INSERT INTO genrefy_users (email, wachtwoord)
VALUES ('$email' , '$wachtwoord')";

        if ($conn->query($sql) === TRUE) {
            $error = "Je account is aangemaakt";
        } else {
            $error = "Dit email adres bestaat al";
        }

        $conn->close();
    }

}
?>