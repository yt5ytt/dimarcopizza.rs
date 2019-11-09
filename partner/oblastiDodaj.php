<?php
  include "../db/db_kontakt.php";

  if(@$_POST["dodajOblast"]){
    $oblast = $_POST["oblast"];
    $ogranicenje = $_POST["ogranicenje"];

    $upis = "insert into novi_beograd (oblast, ogranicenje) values ('$oblast', '$ogranicenje')";
    $db_admin -> query($upis);
  }elseif(@$_POST["obrisiOblast"]){
    $id = $_POST["id"];

    $upis = "delete from novi_beograd where id='$id'";
    $db_admin -> query($upis);
  }

  $upit = "select * from novi_beograd order by oblast asc";
  $rez = $db_admin -> query($upit);
  $brojRedova = $rez -> num_rows;
?>
<div style="width: 100%; margin: 0 auto; max-width: 1020px;">
  <div style="line-height: 2em; text-align: left; outline: 1px solid red;">
    <h1 style="line-height: 2em; margin-left: 1%; color: blue;">novi_beograd</h1>
  </div>

  <form action="oblastiDodaj.php" method="post">
    <div style="width: 98%; margin: 0 auto; line-height: 1.5em; overflow: hidden; border-top: 1px dotted grey; border-bottom: 1px dotted grey;">
      <div style="float: left; text-align: left; margin-left: 5%; width: 50%; line-height: 1.5em; font-size: 1.5em;">
        <input style="line-height: 1.5em; font-size: 1em;" type="text" name="oblast" />
      </div>
      <div style="float: left; text-align: left; width: 10%; line-height: 1.5em; font-size: 1.5em;">
        <input style="line-height: 1.5em; font-size: 1em;" type="text" name="ogranicenje" />
      </div>
      <div style="float: right; text-align: right; width: 30%; line-height: 1.5em; font-size: 1.5em;">
        <input style="line-height: 1.5em; font-size: 1em; color: green; background-color: white;" type="submit" name="dodajOblast" value="+" />
      </div>
    </div>
  </form>

<?php
  $redniBroj = 1;
  while($obj = mysqli_fetch_object($rez)){
    $id = $obj -> id;
    $oblast = $obj -> oblast;
    $ogranicenje = $obj -> ogranicenje;

?>
  <form action="oblastiDodaj.php" method="post">

    <div style="width: 98%; margin: 0 auto; line-height: 1.5em; overflow: hidden; border-top: 1px dotted grey; border-bottom: 1px dotted grey;">
      <div style="float: left; text-align: center; width: 5%; line-height: 1.5em; font-size: 1.5em;">
        <?php echo $redniBroj . "."; ?>
      </div>
      <div style="float: left; text-align: left; width: 50%; line-height: 1.5em; font-size: 1.5em;">
        <?php echo $oblast; ?>
      </div>
      <div style="float: left; text-align: left; width: 10%; line-height: 1.5em; font-size: 1.5em;">
        <?php echo $ogranicenje; ?>
      </div>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div style="float: right; text-align: right; width: 30%; line-height: 1.5em; font-size: 1.5em;">
        <input style="line-height: 1.5em; font-size: 1em; color: red; background-color: white;" type="submit" name="obrisiOblast" value="-" />
      </div>
    </div>

  </form>

<?php
    $redniBroj++;
  }
?>

</div>
<?php
?>
