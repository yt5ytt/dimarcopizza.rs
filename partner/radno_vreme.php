<?php 
	session_start();
	include "../db/db_kontakt.php";
	
	if($_GET["radno_vreme"]){
		
		$radno_vreme = $_GET["radno_vreme"];
		$upis = "update radno_vreme set radno_vreme='$radno_vreme' where id=1";
		$db_admin -> query($upis);
	}
	
	header("Location: porudzbine.php");

?>