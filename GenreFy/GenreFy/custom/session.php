<?php
//Define currentPage
$current_page = basename($_SERVER['PHP_SELF']);

//Make connection to the database
$connection = mysql_connect("localhost", "53206", "to7eis");
// Selecting Database
$dbsession = mysql_select_db("prj_2014_2015_spotify_mt1c_t5", $connection);
session_start();

//If current page is Genre-fy.php
if($current_page == 'Genre-fy.php' OR $current_page ==  'Around_me.php' OR $current_page ==  'last_session.php' OR
    $current_page == 'Statistics.php' OR $current_page == 'index.php'){
    //Storing Session
    $user_check=$_SESSION['login_user'];
    //SQL Query To Fetch Complete Information Of User
    $ses_sql=mysql_query("SELECT email FROM genrefy_users WHERE email='$user_check'", $connection);
    $row = mysql_fetch_assoc($ses_sql);
    $login_session =$row['email'];
    if(!isset($login_session)){
        if($current_page == 'index.php'){
            header('Location: pages/loginPage.php'); // Redirecting To loginPage
        }
        else{
            mysql_close($connection); // Closing Connection
            header('Location: loginPage.php'); // Redirecting To loginPage
        }
    }
   
}
?>