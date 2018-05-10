<?php
	session_start();
	include "../db/db_kontakt.php";
	if(@$_SESSION["korisnik"] == "administrator"){
		
		if(@$_POST["submit"]){
			
			$tabela = $_POST["tabela"];
			$naziv = $_POST["naziv"];
			
			if(@$_POST["opis"] != ""){
				$opis = $_POST["opis"];
			}
			if(@$_POST["cena"] != ""){
				$cena = $_POST["cena"];
			}
			if(@$_POST["v28cm"] != ""){
				$v28cm = $_POST["v28cm"];
			}
			if(@$_POST["v32cm"] != ""){
				$v32cm = $_POST["v32cm"];
			}
			if(@$_POST["v42cm"] != ""){
				$v42cm = $_POST["v42cm"];
			}
			if(@$_POST["v50cm"] != ""){
				$v50cm = $_POST["v50cm"];
			}
			if(@$_POST["limenka"] != ""){
				$limenka = $_POST["limenka"];
			}
			if(@$_POST["v0_5l"] != ""){
				$v0_5l = $_POST["v0_5l"];
			}
			if(@$_POST["v1l"] != ""){
				$v1l = $_POST["v1l"];
			}
			if(@$_POST["v1_5l"] != ""){
				$v1_5l = $_POST["v1_5l"];
			}
			if(@$_POST["v2l"] != ""){
				$v2l = $_POST["v2l"];
			}
			
			if($tabela == "pice"){
				
				$upis = "insert into $tabela (naziv, opis, v28cm, v32cm, v42cm, v50cm) 
						values ('$naziv', '$opis', '$v28cm', '$v32cm', '$v42cm', '$v50cm')";
				$rez = $db_admin -> query($upis);
				$potvrda = "Proizvod " . $naziv . " uspešno dodat!";
				header("Location: dodavanje.php?selected=$tabela&potvrda=$potvrda");
				
			}elseif($tabela == "napitci"){
				
				$upis = "insert into $tabela (naziv, limenka, v0_5l, v1l, v1_5l, v2l) 
						values ('$naziv', '$limenka', '$v0_5l', '$v1l', '$v1_5l', '$v2l')";
				$rez = $db_admin -> query($upis);
				$potvrda = "Proizvod " . $naziv . " uspešno dodat!";
				header("Location: dodavanje.php?selected=$tabela&potvrda=$potvrda");
				
			}else{
				
				$upis = "insert into $tabela (naziv, opis, cena) 
						values ('$naziv', '$opis', '$cena')";
				$rez = $db_admin -> query($upis);
				$potvrda = "Proizvod " . $naziv . " uspešno dodat!";
				header("Location: dodavanje.php?selected=$tabela&potvrda=$potvrda");
				
			}
			
		}
	}
	
	?>