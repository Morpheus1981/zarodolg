
<?php function tablazat(){?>
  <?php include('server.php')?>
<?php


$db = mysqli_connect('localhost', 'root', '', 'gknyilvantarto');

// if (!$db) {
//     die('Hiba a kapcsolódás során: ' . mysqli_connect_error()) ;
// }
//
// echo 'Sikeres kapcsolódás';
//
// //Kapcsolat bezárása
// mysqli_close($conn);



$sql ="insert into gk (gkrendszam, gkszin, gkalvazszam, gkmuszakierv)values('$gkrendszam', '$gkszin', '$gkalvazszam', '$gkmuszakierv')";
$sql = <<<EOT
select * from gk
EOT;

$res = mysqli_query($db, $sql);

if(mysqli_num_rows($res)>0) {
  while($sor = mysqli_fetch_assoc($res)) {

echo "<table border=1>";
echo "<tr><th>No</th><th>Gk rendszám</th><th>Gk szín</th><th>Gk alvazszam</th><th>GK muszakierv</th></tr>";

  echo  "<tr>";
  echo  "<td>".$sor['id']. "</td>";
  echo  "<td>".$sor['gkrendszam']. "</td>";
  echo  "<td>".$sor['gkszin']. "</td>";
  echo  "<td>".$sor['gkalvazszam']. "</td>";
  echo  "<td>".$sor['gkmuszakierv']. "</td>";
}
  }
}
