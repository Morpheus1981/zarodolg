<?php
//Kapcsolódás
$conn = mysqli_connect('localhost', 'root', '', 'gknyilvantarto');

//Ellenőrzés
if (!$conn) {
    die('Hiba a kapcsolódás során: ' . mysqli_connect_error()) ;
}

echo 'Sikeres kapcsolódás';

//Kapcsolat bezárása
mysqli_close($conn);
