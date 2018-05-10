<?php
	
	session_start();
	include ("../db/db_kontakt.php");
	include "klasa/klasa_proizvod.php";
	
	if(isset($_GET["empty"]) && $_GET["empty"]==1){
		unset($_SESSION["products"]);
		$return_url = base64_decode($_GET["return_url"]);
		header('Location:'.$return_url);
	}
	
	// Provera da li je kliknuto na drugme 'Dodaj u korpu'
	
	if (isset($_POST['submit'])){
		
		$return_url = base64_decode($_POST["return_url"]);
		
		$random = rand(1111111, 9999999);
		$vrsta_proizvoda = $_POST['vrsta_proizvoda'];
		$id_proizvoda = $_POST['vrsta_proizvoda'].$random;
		$id = $_POST['id'];
		$naziv = $_POST['naziv'];
		$cena = $_POST['cena'];
		$kolicina = $_POST['kolicina'];
		if(@$_POST['napomena'] != ""){
			$napomena = $_POST['napomena'];
		}
		if(@$_POST['velicina_pice'] != ""){
			$velicina_pice = $_POST['velicina_pice'];
		}		
		if(@$_POST['izbor_kackavalja'] != ""){
			$izbor_kackavalja = $_POST['izbor_kackavalja'];
		}
		if(@$_POST['pica_dodaci'] != ""){
			$pica_dodaci = $_POST['pica_dodaci'];
		}
		if(@$_POST['tabela_dodaci'] != ""){
			$tabela_dodaci = $_POST['tabela_dodaci'];
		}		
		if(@$_POST['vrsta_paste'] != ""){
			$vrsta_paste = $_POST['vrsta_paste'];
		}
		if(@$_POST['pasta_dodaci'] != ""){
			$pasta_dodaci = $_POST['pasta_dodaci'];
		}
		if(@$_POST['izbor_sosa_paste'] != ""){
			$izbor_sosa_paste = $_POST['izbor_sosa_paste'];
		}
		if(@$_POST['izbor_pribor'] != ""){
			$izbor_pribor = $_POST['izbor_pribor'];
		}
		if(@$_POST['sendvic_dodaci'] != ""){
			$sendvic_dodaci = $_POST['sendvic_dodaci'];
		}
		if(@$_POST['rostilj_prilozi'] != ""){
			$rostilj_prilozi = $_POST['rostilj_prilozi'];
		}
		if(@$_POST['nadev_sendvica'] != ""){
			$nadev_sendvica = $_POST['nadev_sendvica'];
		}
		if(@$_POST['namazi_sendvica'] != ""){
			$namazi_sendvica = $_POST['namazi_sendvica'];
		}
		if(@$_POST['vrsta_sosa'] != ""){
			$vrsta_sosa = $_POST['vrsta_sosa'];
		}
		if(@$_POST['pomfrit_dodatak'] != ""){
			$pomfrit_dodatak = $_POST['pomfrit_dodatak'];
		}
		if(@$_POST['vrsta_nadeva'] != ""){
			$vrsta_nadeva = $_POST['vrsta_nadeva'];
		}
		if(@$_POST['vrsta_namaza'] != ""){
			$vrsta_namaza = $_POST['vrsta_namaza'];
		}
		if(@$_POST['velicina_porcije'] != ""){
			$velicina_porcije = $_POST['velicina_porcije'];
		}
		if(@$_POST['palacinka_dodaci'] != ""){
			$palacinka_dodaci = $_POST['palacinka_dodaci'];
		}
		if(@$_POST['muskatni_orah'] != ""){
			$muskatni_orah = $_POST['muskatni_orah'];
		}
		if(@$_POST['naziv_napitka'] != ""){
			$naziv_napitka = $_POST['naziv_napitka'];
		}
		
		//prepare array for the session variable
		$proizvod = array('id_proizvoda'=>$id_proizvoda, 'vrsta_proizvoda'=>$vrsta_proizvoda, 'naziv'=>$naziv, 'kolicina'=>$kolicina, 'cena'=>$cena);
		
		if(@$napomena != ""){
			$proizvod["napomena"] = $napomena;
		}
		if(@$velicina_pice != ""){
			$proizvod["velicina_pice"] = $velicina_pice;
		}
		if(@$izbor_kackavalja != ""){
			$proizvod["izbor_kackavalja"] = $izbor_kackavalja;
		}
		if(@$pica_dodaci != ""){
			$proizvod["pica_dodaci"] = $pica_dodaci;
		}
		if(@$tabela_dodaci != ""){
			$proizvod["tabela_dodaci"] = $tabela_dodaci;
		}
		if(@$vrsta_paste != ""){
			$proizvod["vrsta_paste"] = $vrsta_paste;
		}
		if(@$pasta_dodaci != ""){
			$proizvod["pasta_dodaci"] = $pasta_dodaci;
		}
		if(@$izbor_sosa_paste != ""){
			$proizvod["izbor_sosa_paste"] = $izbor_sosa_paste;
		}
		if(@$izbor_pribor != ""){
			$proizvod["izbor_pribor"] = $izbor_pribor;
		}
		if(@$sendvic_dodaci != ""){
			$proizvod["sendvic_dodaci"] = $sendvic_dodaci;
		}
		if(@$rostilj_prilozi != ""){
			$proizvod["rostilj_prilozi"] = $rostilj_prilozi;
		}
		if(@$nadev_sendvica != ""){
			$proizvod["nadev_sendvica"] = $nadev_sendvica;
		}
		if(@$namazi_sendvica != ""){
			$proizvod["namazi_sendvica"] = $namazi_sendvica;
		}
		if(@$vrsta_sosa != ""){
			$proizvod["vrsta_sosa"] = $vrsta_sosa;
		}
		if(@$pomfrit_dodatak != ""){
			$proizvod["pomfrit_dodatak"] = $pomfrit_dodatak;
		}
		if(@$vrsta_nadeva != ""){
			$proizvod["vrsta_nadeva"] = $vrsta_nadeva;
		}
		if(@$vrsta_namaza != ""){
			$proizvod["vrsta_namaza"] = $vrsta_namaza;
		}
		if(@$velicina_porcije != ""){
			$proizvod["velicina_porcije"] = $velicina_porcije;
		}
		if(@$palacinka_dodaci != ""){
			$proizvod["palacinka_dodaci"] = $palacinka_dodaci;
		}
		if(@$muskatni_orah != ""){
			$proizvod["muskatni_orah"] = $muskatni_orah;
		}
		if(@$naziv_napitka != ""){
			$proizvod["naziv_napitka"] = $naziv_napitka;
		}
				
		$new_product["$id_proizvoda"] = $proizvod;
				
		if(isset($_SESSION["products"])) //if we have the session
		{
			$_SESSION["products"]["$id_proizvoda"] = $proizvod;			
		}else{
			//create a new session var if does not exist
			$_SESSION["products"] = $new_product;
		}
		
		header('Location:'.$return_url);
		
	}// Zavrsetak if za $_POST['dodaj u korpu']

if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
	$id_proizvoda = $_GET["removep"]; //get the product code to remove
	$return_url = base64_decode($_GET["return_url"]); //get return url
	
	unset($_SESSION["products"]["$id_proizvoda"]);
		
	header('Location:'.$return_url);
}	
?>