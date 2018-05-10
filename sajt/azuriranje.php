<?php
session_start();
include "../db/db_kontakt.php";

	if($_POST['password']!=$_POST['passrpt']){
		echo "Vaša potvrda lozinke nije uspela. Probajte ponovo.";
	}else{
		$unos = "insert into users(email, lozinka, ime, prezime) 
		values ('$_POST[email]', '$_POST[password]', '$_POST[name]', '$_POST[lastname]')";
											
		$podaci = "insert into user_podaci(email, mobilni, fiksni, firma, ulica, ulicnibroj, 
		oblast, interfon, sprat, brojstana) values ('$_POST[email]', '$_POST[mobilni]', 
		'$_POST[fiksni]', '$_POST[firma]', '$_POST[ulica]', '$_POST[ulicnibroj]', '$_POST[oblast]', 
		'$_POST[interfon]', '$_POST[sprat]', '$_POST[brojstana]')";
										
		if ($db_admin -> query($unos) and $db_admin -> query($podaci)){
			
			echo "Vasi podaci su uspesno uneseni";
			
		}else{
			
			echo "Doslo je do greske pri unosu vasih podataka. " . $db_admin -> error;
			
		}
	}