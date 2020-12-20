<?php include('server.php');
 ?>
<?php include('getcar.php');?>
<?php echo file_get_contents('templates/head.tpl');?>
<section class="kep">
  <p><img src="kep1.jpg" alt=""></p>
  <p><img src="kep2.jpg" alt=""></p>
  <p><img src="kep3.jpg" alt=""></p>
</section>
<article class="tartalom">

  <section class="carRegister">
    <fieldset>
    <legend>Regisztráció:</legend>
      <form method="post" action="index.php">
      <div class = "input-group">
        <label>Rendszám: </label>
        <input type="text" name="gkrendszam" value ="">
      </div>
      <div class="input-group">
        <label>Szín: </label>
        <input type="text" name="gkszin" value="">
      </div>
      <div class="input-group">
        <label>Alvazszam</label>
        <input type="text" name="gkalvazszam" value="">
      </div>
      <div class="input-group">
        <label for="date">Muszakierv</label>
        <input type="date" name="gkmuszakierv">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="reg_car">Regisztráció</button>
      </div>

      </form>
    </fieldset>

  </section>
  <section class="carRegister">
    <h3>Nyilvántartott autok</h3>
    <p class="lista"><?php auto();?></p>
</table>
  </section>
</article>
<!-- </section>
</div>
</section>  -->

<?php
echo file_get_contents('templates/foot.tpl');
?>
