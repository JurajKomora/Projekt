<?php

$server="localhost";
$username="root";
$password="";
$Baza="turnir_u_malom_nogometu";

$db=mysqli_connect ($server,$username,$password);
$db = mysqli_connect($server, $username, $password);
if($db)
{
    $db_selected = mysqli_select_db($db, $database);
    if(!$db_selected){
        echo 'Doslo je do pogreske kod odabira baze';
    }
    else{
        //echo 'Baza uspjesno odabrana';
    }
}
else{
echo 'Doslo je do pogreske prilikom spajanja';
}
?>