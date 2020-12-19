<?php include('server.php')
 ?>
<?php include("getcar.php");?>
<?php
echo file_get_contents('templates/head.tpl');
echo file_get_contents('templates/index.tpl');
echo file_get_contents('templates/foot.tpl');
?>
