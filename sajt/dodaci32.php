<form action = "korpa.php" method = "post">

<?php
	//Skripta dodavanja forme za Dodatke za picu velicine 32 cm.
	
	include "../db/db_kontakt.php";
	
	$upit = "select naziv, cena from dodaci32";
	
	$rezultat = $db_admin -> query($upit);
	
	while(list($naziv, $cena) = $rezultat -> fetch_row()){

?>
	
	<table border = "0">
		<tr width = "400">
			<td width="200"><input type = "checkbox" name = "dodaci[]" value="<?=$naziv?>" /> <?=$naziv?></td>
			<td width="200"><?=$cena?> din.</td>
		</tr>
	</table>
<?php
	}
?>
	<input type = "hidden" name = "dodaci32" value = "dodaci32" />
	<br /><input type = "submit" name = "dodaj_u_korpu" value = "Dodaj u korpu" />

</form>