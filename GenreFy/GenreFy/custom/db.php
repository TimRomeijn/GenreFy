<?php
// de gegevens die nodig zijn om  met de database te kunnen connecten
$db_host ='sql.media.hro.nl';
$db_user = '53206';
$db_password = 'to7eis';
$db_database = 'prj_2014_2015_spotify_mt1c_t5';

// het connecten met de database zelf voor variabele db
$db = mysqli_connect($db_host,$db_user,$db_password,$db_database)
or die(mysqli_connect_error());

// het connecten van de database voor variabele con
$con = mysqli_connect("sql.media.hro.nl", "53206", "to7eis", "prj_2014_2015_spotify_mt1c_t5");

// de functie waarmee selectquerys uitgevoerd kunnen worden
function doSelectQuery($db, $query){

    $arrayResults = false;

    if($result = mysqli_query($db, $query)){
        $arrayResults = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($arrayResults, $row);
        }
    }
    else{
        echo mysqli_error($db) . 'QUERY' . $query;
    }
    return $arrayResults;
}
// de functie waarmee de data in de database gestopt kan worden
function doQuery($query,$db){
    mysqli_query($db,$query);
}
?>