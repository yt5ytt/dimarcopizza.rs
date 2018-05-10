<?php
	session_start();
	include '../db/db_kontakt.php';
	
	$upit = "delete from users where email='$_SESSION[email]'";
	
	if ($db_users -> query($upit)){
		
		$podaci = "delete from user_podaci where email='$_SESSION[email]'";
		
		if ($db_users -> query($podaci)){
			
			session_destroy();
			sleep(3);
			header("Location: ../index.php");
			
		}
		
	}
	
?>

