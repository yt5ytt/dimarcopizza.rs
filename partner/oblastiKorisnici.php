<?php
  include "../db/db_kontakt.php";
?>
  <form action="oblastiKorisnici.php" method="post">
    <input type="text" name="oblast" />
    <input type="submit" name="submit" value="Potvrdi" />
  </form>

<?php
  if(@$_POST["submit"]){
    $oblast = $_POST["oblast"];

    $upit = "select * from user_podaci where oblast='$oblast'";
    $rez = $db_admin -> query($upit);
    $brojKorisnika = $rez -> num_rows;
    echo $brojKorisnika . "<br />";
    while($obj = mysqli_fetch_object($rez)){
      $id = $obj -> id;
      $oblast = $obj -> oblast;

      echo $id . ". " . $oblast . "<br />";
    }
  }
?>
