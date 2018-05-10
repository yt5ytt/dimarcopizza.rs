<form action = "korpa.php" method = "post">

<?php
	//Skripta dodavanja forme za Dodatke za picu velicine 28 cm.
	
	include "../db/db_kontakt.php";
	
	$upit = "select naziv, cena from dodaci28";
	
	$rezultat = $db_admin -> query($upit);
	
	while($dodatak = mysqli_fetch_object($rezultat)){

?>
	
	<table border = "0">
		<tr width = "400">
			<td width="200"><input type = "checkbox" name = "dodaci[]" value="<?php echo $dodatak -> naziv; ?>" /> <?php echo $dodatak -> naziv; ?></td>
			<td width="200"><?php echo $dodatak -> cena; ?> din.</td>
		</tr>
	</table>
<?php
	}
?>	
	<input type = "hidden" name = "dodaci28" value = "dodaci28" />
	<br /><input type = "submit" name = "dodaj_u_korpu" value = "Dodaj u korpu" />

</form>