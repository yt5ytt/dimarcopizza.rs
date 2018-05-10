<?php
	session_start();
	include "../db/db_kontakt.php";
	
	$tabela = $_POST["tabela"];
	
	if($tabela == "dodaci28" or 
	$tabela == "dodaci32" or 
	$tabela == "dodaci42" or 
	$tabela == "dodaci50" or 
	$tabela == "dodaci_za_palacinke" or 
	$tabela == "dodaci_za_sendvice" or 
	$tabela == "dodaci_za_paste" or 
	$tabela == "rostilj_prilozi"){
	
		foreach($_POST["id"] as $id){
		
			if($_POST["nova_cena"][$id] == ""){
			
				continue;
			
			}else{
			
				$tabela = $_POST["tabela"];
				$naziv = $_POST["naziv"];
				$proizvod = $_POST["proizvod"][$id];
				$nova_cena = $_POST["nova_cena"][$id];
			
				$upis = "UPDATE $tabela SET cena='$nova_cena' WHERE id='$id'";
				$db_admin -> query($upis);
	
				header("Location: promena.php?tabela=$tabela&naziv=$naziv");
			}
		}
	
	}elseif($tabela == "pice"){
		
		$naziv = $_POST["naziv"];
		
		if(@$_POST["opis"] != ""){			
			$upis = "update $tabela set opis='$_POST[opis]' where id=$_POST[id]";
			$db_admin -> query($upis);
		}
		if(@$_POST["v28cm"] != ""){			
			$upis28 = "update $tabela set v28cm='$_POST[v28cm]' where id=$_POST[id]";
			$db_admin -> query($upis28);
		}
		if(@$_POST["v32cm"] != ""){			
			$upis32 = "update $tabela set v32cm='$_POST[v32cm]' where id=$_POST[id]";
			$db_admin -> query($upis32);
		}
		if(@$_POST["v42cm"] != ""){			
			$upis42 = "update $tabela set v42cm='$_POST[v42cm]' where id=$_POST[id]";
			$db_admin -> query($upis42);
		}
		if(@$_POST["v50cm"] != ""){			
			$upis50 = "update $tabela set v50cm='$_POST[v50cm]' where id=$_POST[id]";
			$db_admin -> query($upis50);
		}
		
		header("Location: promena.php?tabela=pice&naziv=$naziv");
		
	}elseif($tabela == "paste" or
			$tabela == "salate" or
			$tabela == "rostilj" or
			$tabela == "sendvici" or
			$tabela == "pica_sendvic"){
		
		$tabela = $_POST["tabela"];
		$naziv = $_POST["naziv"];
		
		if(@$_POST["opis"] != ""){			
			$upis = "update $tabela set opis='$_POST[opis]' where id=$_POST[id]";
			$db_admin -> query($upis);
		}
		if(@$_POST["cena"] != ""){			
			$upis_cena = "update $tabela set cena=$_POST[cena] where id=$_POST[id]";
			$db_admin -> query($upis_cena);
		}
		
		header("Location: promena.php?tabela=$tabela&naziv=$naziv");
		
	}elseif($tabela == "ostalo"){
		
		$naziv = $_POST["naziv"];
		
		if(@$_POST["opis"] != ""){			
			$upis = "update $tabela set opis='$_POST[opis]' where id=$_POST[id]";
			$db_admin -> query($upis);
		}
		if(@$_POST["v200g"] != ""){			
			$upis200 = "update $tabela set v200g='$_POST[v200g]' where id=$_POST[id]";
			$db_admin -> query($upis200);
		}
		if(@$_POST["v350g"] != ""){			
			$upis350 = "update $tabela set v350g='$_POST[v350g]' where id=$_POST[id]";
			$db_admin -> query($upis350);
		}
		if(@$_POST["v400g"] != ""){			
			$upis400 = "update $tabela set v400g='$_POST[v400g]' where id=$_POST[id]";
			$db_admin -> query($upis400);
		}
		if(@$_POST["v550g"] != ""){			
			$upis550 = "update $tabela set v550g='$_POST[v550g]' where id=$_POST[id]";
			$db_admin -> query($upis550);
		}
		if(@$_POST["v600g"] != ""){			
			$upis600 = "update $tabela set v600g='$_POST[v600g]' where id=$_POST[id]";
			$db_admin -> query($upis600);
		}
		if(@$_POST["v1000g"] != ""){			
			$upis1000 = "update $tabela set v1000g='$_POST[v1000g]' where id=$_POST[id]";
			$db_admin -> query($upis1000);
		}
		if(@$_POST["cena"] != ""){			
			$upis_cena = "update $tabela set cena='$_POST[cena]' where id=$_POST[id]";
			$db_admin -> query($upis_cena);
		}
		
		header("Location: promena.php?tabela=$tabela&naziv=$naziv");
		
	}elseif($tabela == "deserti"){
		
		$naziv = $_POST["naziv"];
		
		if(@$_POST["opis"] != ""){			
			$upis = "update $tabela set opis='$_POST[opis]' where id=$_POST[id]";
			$db_admin -> query($upis);
		}
		if(@$_POST["v250g"] != ""){			
			$upis250 = "update $tabela set v250g='$_POST[v250g]' where id=$_POST[id]";
			$db_admin -> query($upis250);
		}
		if(@$_POST["v300g"] != ""){			
			$upis300 = "update $tabela set v300g='$_POST[v300g]' where id=$_POST[id]";
			$db_admin -> query($upis300);
		}
		if(@$_POST["v400g"] != ""){			
			$upis400 = "update $tabela set v400g='$_POST[v400g]' where id=$_POST[id]";
			$db_admin -> query($upis400);
		}
		if(@$_POST["v500g"] != ""){			
			$upis500 = "update $tabela set v500g='$_POST[v500g]' where id=$_POST[id]";
			$db_admin -> query($upis500);
		}
		if(@$_POST["cena"] != ""){			
			$upis_cena = "update $tabela set cena='$_POST[cena]' where id=$_POST[id]";
			$db_admin -> query($upis_cena);
		}
		
		header("Location: promena.php?tabela=$tabela&naziv=$naziv");
		
	}elseif($tabela == "napitci"){
		
		$naziv = $_POST["naziv"];
		
		if(@$_POST["limenka"] != ""){			
			$upis_limenka = "update $tabela set limenka='$_POST[limenka]' where id=$_POST[id]";
			$db_admin -> query($upis_limenka);
		}
		if(@$_POST["v0_5l"] != ""){			
			$upis_v0_5l = "update $tabela set v0_5l='$_POST[v0_5l]' where id=$_POST[id]";
			$db_admin -> query($upis_v0_5l);
		}
		if(@$_POST["v1l"] != ""){			
			$upis_v1l = "update $tabela set v1l='$_POST[v1l]' where id=$_POST[id]";
			$db_admin -> query($upis_v1l);
		}
		if(@$_POST["v1_5l"] != ""){			
			$upis_v1_5l = "update $tabela set v1_5l='$_POST[v1_5l]' where id=$_POST[id]";
			$db_admin -> query($upis_v1_5l);
		}
		if(@$_POST["v2l"] != ""){			
			$upis_v2l = "update $tabela set v2l='$_POST[v2l]' where id=$_POST[id]";
			$db_admin -> query($upis_v2l);
		}
		
		header("Location: promena.php?tabela=$tabela&naziv=$naziv");
		
	}
?>