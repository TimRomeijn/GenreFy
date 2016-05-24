<?php

require_once 'db.php';

//het posten van gegevens in het registratieform
if(isset($_POST['submit']) && $_POST['email']){
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    // het uitvoeren van de query zodat de data in de database komt
    $result = mysqli_query($con,"INSERT INTO genrefy_users (email,wachtwoord) VALUES ('".$email."', '".$wachtwoord."')");

    // de verwijzing naar de inlogpagina als registreren is gelukt en de foutmelding als registreren is mislukt
    if(isset($result)){
        header('Location: index.php');
    }else{
        echo "Er is iets mis gegaan.";
    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Genre-fy!</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="genrefy.css">

</head>
<body>





    <p>
        Vul beneden al uw gegevens in om te kunnen registreren voor de Genre-fy applicatie.
    </p>
    <form method="post" action="">
        <div id="registratieform">

            <input type="email" placeholder="E-mail" id="email" name="email" required="Dit veld is verplicht">
            <input type="password" placeholder="Wachtwoord" id="wachtwoord" name="wachtwoord" required="Dit veld is verplicht">
            <input type="submit"  value="Invoeren" id="submit" name="submit">
        </div>


    </form>






</body>
</html>