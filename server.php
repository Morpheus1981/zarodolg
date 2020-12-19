
<?php
session_start();

//változók létrehozása
$gkrendszam = "";
$gkszin = "";
$gkalvazszam = "";
$gkmuszakierv = "";
$errors = array();

// adatbázishoz kapcsolódás
$db = mysqli_connect('localhost', 'root', '', 'gknyilvantarto');

// regisztrált kocsik

if(isset($_POST['reg_car'])) {

  $gkrendszam   = mysqli_real_escape_string($db, $_POST['gkrendszam']);
  $gkszin       = mysqli_real_escape_string($db, $_POST['gkszin']);
  $gkalvazszam  = mysqli_real_escape_string($db, $_POST['gkalvazszam']);
  $gkmuszakierv = mysqli_real_escape_string($db, $_POST['gkmuszakierv']);

  if (empty($gkrendszam)) {
    array_push($errors, "Gépjármű rendszáma nincs megadva"); }
  if (empty($gkszin)) {
    array_push($errors, "Gépjármű színe nincs megadva"); }
  if (empty($gkalvazszam)) {
    array_push($errors, "Gépjármű alvázszáma nincs megadva"); }
  if (empty($gkmuszakierv)) {
    array_push($errors, "Nincs megadva a műszaki érvényesség"); }
}

//adatbázis ellenőrzése felvitel indításakor, hogy a regisztrálandó gépkocsi az adatbázisban van e már
$gk_check_query = "SELECT * FROM gk WHERE gkrendszam='$gkrendszam' LIMIT 1";
$result = mysqli_query($db, $gk_check_query);
$gk = mysqli_fetch_assoc($result);

if ($gk) {
  if($gk['gkrendszam'] === $gkrendszam){
    array_push($errors, "A Gépkocsi rendszám alapján már az adatbázisban van");
  }
}

// a gépjármű regisztrálása ha minden rendben van és nincs ütközés
if(count($errors)== 0) {
  $query = "INSERT INTO gk ( gkrendszam, gkszin, gkalvazszam, gkmuszakierv)
          VALUES('$gkrendszam', '$gkszin', '$gkalvazszam', '$gkmuszakierv')";
  mysqli_query($db, $query);
  $_SESSION['gkrendszam'] = $gkrendszam;
  $_SESSION['success'] ="A gépkocsi felvitelre került";
  header('location:index.php');
}
 ?>
