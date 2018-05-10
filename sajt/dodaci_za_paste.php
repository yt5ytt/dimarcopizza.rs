<form action = "korpa.php" method = "post">

<?php
	//Skripta dodavanja forme za Dodatke za paste.
	
	include "db/db_kontakt.php";
	
	$upit = "select naziv, cena from dodaci_za_paste";
	
	$rezultat = $db_admin -> query($upit);
	
	while(list($naziv, $cena) = $rezultat -> fetch_row()){

?>
	<input type = "checkbox" name = "<?=$cena;?>" /> <?=$naziv?> <?=$cena?> din.<br />
<?php
	}
?>
	<br /><input type = "submit" name = "submit" value = "Dodaj u korpu" />

</form>