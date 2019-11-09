<?php
  include "../db/db_kontakt.php";

  if(@$_POST["submit"]){
    $id = $_POST["id"];
    $brojRedova = $_POST["brojRedova"] + 1;

    for($i=1; $i<$brojRedova; $i++){
      $novoOgranicenje = $_POST["ogranicenje$i"];
      $upis = "update novi_beograd set ogranicenje=" . $novoOgranicenje . " where id=" . $i;
      $db_admin -> query($upis);
    }

  }

  $upit = "select * from novi_beograd order by oblast asc";
  $rez = $db_admin -> query($upit);
  $brojRedova = $rez -> num_rows;
?>
<div style="width: 100%; margin: 0 auto; max-width: 1020px;">
  <div style="line-height: 2em; text-align: left; outline: 1px solid red;">
    <h1 style="line-height: 2em; margin-left: 1%; color: blue;">novi_beograd</h1>
  </div>
  <form action="oblastiPromena.php" method="post">
<?php
  $redniBroj = 1;
  while($obj = mysqli_fetch_object($rez)){
    $id = $obj -> id;
    $oblast = $obj -> oblast;
    $ogranicenje = $obj -> ogranicenje;

?>
  <div style="width: 98%; margin: 0 auto; line-height: 1.5em; overflow: hidden; border-top: 1px dotted grey; border-bottom: 1px dotted grey;">
    <div style="float: left; text-align: center; width: 5%; line-height: 1.5em; font-size: 1.5em;">
      <?php echo $redniBroj . "."; ?>
    </div>
    <div style="float: left; text-align: left; width: 50%; line-height: 1.5em; font-size: 1.5em;">
      <?php echo $oblast; ?>
    </div>
    <div style="float: right; text-align: left; width: 30%; line-height: 1.5em; font-size: 1.5em;">
      <input style="line-height: 1.5em; font-size: 1em;" type="text" name="ogranicenje<?php echo $id;?>" value="<?php echo $ogranicenje; ?>" />
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
  </div>

<?php
    $redniBroj++;
  }
?>
    <div style="width: 98%; margin: 1% auto; line-height: 1.5em;">
      <input type="hidden" name="brojRedova" value="<?php echo $brojRedova; ?>">
      <input style="float: right; width: 20%; background-color: blue; color: white; line-height: 1.5em;" type="submit" name="submit" value="Promeni" />

    </div>


  </form>

</div>
<?php
?>
