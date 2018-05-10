<?php
	session_start();
	include "../db/db_kontakt.php";
	
	if(@$_GET["naziv"]){
		$dodatak = $_GET["naziv"];
		$stanje = $_GET["stanje"];
		$tabela = $_GET["tabela"];
		
		$upit1 = "update dodaci28 set stanje='$stanje' where naziv='$dodatak'";
		$rez1 = $db_admin -> query($upit1);
		
		if($dodatak == "Jaje"){
			$upit2_1 = "update dodaci32 set stanje='$stanje' where naziv='Jaje'";
			$rez2_1 = $db_admin -> query($upit2_1);
			
			$upit2_2 = "update dodaci32 set stanje='$stanje' where naziv='Dva jajeta'";
			$rez2_2 = $db_admin -> query($upit2_2);
		}
		$upit2 = "update dodaci32 set stanje='$stanje' where naziv='$dodatak'";
		$rez2 = $db_admin -> query($upit2);
		
		if($dodatak == "Jaje"){
			$upit3_1 = "update dodaci42 set stanje='$stanje' where naziv='Jaje'";
			$rez3_1 = $db_admin -> query($upit3_1);
			while($obj3_1 = mysqli_fetch_object($rez3_1)){
				$stanje3_1 = $obj3_1 -> stanje;
			}
			$upit3_2 = "update dodaci42 set stanje='$stanje' where naziv='Dva jajeta'";
			$rez3_2 = $db_admin -> query($upit3_2);
		}
		$upit3 = "update dodaci42 set stanje='$stanje' where naziv='$dodatak'";
		$rez3 = $db_admin -> query($upit3);
		while($obj3 = mysqli_fetch_object($rez3)){
			$stanje3 = $obj3 -> stanje;
		}
		
		if($dodatak == "Jaje"){
			$upit4_1 = "update dodaci50 set stanje='$stanje' where naziv='Tri jajeta'";
			$rez4_1 = $db_admin -> query($upit4_1);
			
			$upit4_2 = "update dodaci50 set stanje='$stanje' where naziv='Dva jajeta'";
			$rez4_2 = $db_admin -> query($upit4_2);			
		}
		$upit4 = "update dodaci50 set stanje='$stanje' where naziv='$dodatak'";
		$rez4 = $db_admin -> query($upit4);
				
		$upit5 = "update dodaci_za_paste set stanje='$stanje' where naziv='$dodatak'";
		$rez5 = $db_admin -> query($upit5);
		while($obj5 = mysqli_fetch_object($rez5)){
			$stanje5 = $obj5 -> stanje;										
		}
		
		if($dodatak == "Kačkavalj"){
			$dodatak = "Ekstra kačkavalj";
		}
		$upit6 = "update dodaci_za_sendvice set stanje='$stanje' where naziv='$dodatak'";
		$rez6 = $db_admin -> query($upit6);
		while($obj6 = mysqli_fetch_object($rez6)){
			$stanje6 = $obj6 -> stanje;										
		}
		
		$upit7 = "update rostilj_prilozi set stanje='$stanje' where naziv='$dodatak'";
		$rez7 = $db_admin -> query($upit7);
		while($obj7 = mysqli_fetch_object($rez7)){
			$stanje7 = $obj7 -> stanje;
		}
		
		$upit8 = "update dodaci_za_palacinke set stanje='$stanje' where naziv='$dodatak'";
		$rez8 = $db_admin -> query($upit8);
		while($obj8 = mysqli_fetch_object($rez8)){
			$stanje8 = $obj8 -> stanje;
		}
		
	}else{
	
		$stanje = $_GET["stanje"];
		$id = $_GET["id"];
		$tabela = $_GET["tabela"];
	
		$query = "update $tabela set stanje='$stanje' where id='$id'";
		$db_admin -> query($query);
	
	}
	
	header("Location: pauziranje.php?tabela=$tabela");
?>