<?php include("felvittautolista.php"); ?>


<?php
//$q = intval($_GET['id']);

$con = mysqli_connect('localhost','root','','gknyilvantarto');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
else ("minden ok");

mysqli_select_db($con,"gknyilvantarto");
//$sql="SELECT * FROM user WHERE id = '".$q."'";
//$result = mysqli_query($con,$sql);
$sql ="insert into gk (gkrendszam, gkszin, gkalvazszam, gkmuszakierv)values('$gkrendszam', '$gkszin', '$gkalvazszam', '$gkmuszakierv')";

function getDataArArray($conn){
    $viszatero = mysqli_query($con, $sql);

    for($datar = array();$row = mysqli_fetch_assoc($viszatero);$datar[] = $row);
   return $datar;
   echo ($datar);

}
/*
$sql =<<<EOT
select * from gk
EOT;

while($row = mysqli_fetch_array($res)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['gkrendszam'] . "</td>";
  echo "<td>" . $row['gkszin'] . "</td>";
  echo "<td>" . $row['gkalvazszam'] . "</td>";
  echo "<td>" . $row['gkmuszakierv'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
*/
?>
