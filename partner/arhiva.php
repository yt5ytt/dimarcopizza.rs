<?php
	session_start();
	include "../db/db_kontakt.php";

	$db_admin -> query("delete from arhiva where datediff(now(), str_to_date(datum, '%Y-%m-%d'))>180");

	if(@$_GET["arhiva_id"]){

		$id = $_GET["arhiva_id"];
		$upit_arhiva = "select * from porudzbine where id='$id' limit 1";
		$rez_arhiva = $db_admin -> query($upit_arhiva);
		while($obj = mysqli_fetch_object($rez_arhiva)){
			$id_porudzbine = $obj->id;
			$datum = $obj->datum;
			$vreme = $obj->vreme;
			$korisnik = $obj->korisnik;
			$porudzbina = $obj->porudzbina;
			$cena = $obj->cena;
			$vreme_dostave = $obj->vreme_dostave;
			$broj_narucivanja_korisnika = $obj->broj_narucivanja_korisnika;
			$status = $obj->status;
		}

		$insertArhiva = "INSERT INTO arhiva(id, datum, vreme, korisnik, porudzbina, cena, vreme_dostave, broj_narucivanja_korisnika, status)
		VALUES ('$id_porudzbine', '$datum', '$vreme', '$korisnik', '$porudzbina', '$cena', '$vreme_dostave', '$broj_narucivanja_korisnika', '$status')";
		$db_admin -> query($insertArhiva);

		$db_admin -> query("delete from porudzbine where id='$id' limit 1");
		header("Location: porudzbine.php");

	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Arhiva - Pizzeria Di Marco</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="../css/animation.css" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="icon" type="img/png" href="img/favicon.png">
	</head>
	<body>

		<?php
			if(@$_SESSION["korisnik"]){
		?>

		<div id="container">
			<header>
				<div id="logo">
					<img src="img/favicon.png" /> <em>Porudžbine</em>
				</div><!--kraj diva logo-->

		<?php
			if(@$_SESSION["korisnik"]){
		?>
				<div id="izloguj">
					<a href="logoff.php">Izloguj se</a>
				</div><!--kraj diva izloguj-->
		<?php
			}
		?>
			</header>
		<?php
			if(@$_SESSION["korisnik"] == "administrator"){
		?>
			<nav>
				<ul>
					<li><a href="porudzbine.php">Porudžbine</a></li>
					<li><a href="korisnici.php">Korisnici</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>"class="stranica">Arhiva</a></li>
					<li><a href="dodavanje.php?selected=pice">Dodavanje</a></li>
					<li><a href="promena.php">Promena cena</a></li>
					<li><a href="pauziranje.php">Pauziranje</a></li>
					<li><a href="knjiga_utisaka.php">Knjiga utisaka</a></li>
					<li><a href="dodavanje_slika.php">Dodavanje slika</a></li>
				</ul>
			</nav>


		<?php
			}
		?>



			<div id="glavno">
					<?php

						if(@$_POST["submit"]){
							$mail_adresa  = $_POST["email"];
							$ime_korisnika = $_POST["ime"];
							$vreme_dostave = $_POST["vreme_dostave"];
							$subject = "Di Marco pizzeria - potvrda prijema porudžbine";
							$headers = "From:  dimarcopizza@gmail.com";
							$poruka = "Poštovani ".$ime_korisnika.",\n\n";
							$poruka .= "vaša porudžbina je uspešno primljena ".$_POST["datum"]."godine u "
										.$_POST["vreme"]." i biće vam dostavljena u najkraćem mogućem roku, a najkasnije za "
										.$vreme_dostave." minuta.\n\n";
							$poruka .= "Vaš Di Marco!\n\n";
							$poruka .= "Za sve dodatne informacije možete pozvati na telefone:\n011/29-94-706 i 065/85-85-550";

							mail($mail_adresa, $subject, $poruka, $headers);

							$upis_potvrde = "update porudzbine set potvrda='1' where id='$_POST[id_porudzbine]'";
							$db_admin -> query($upis_potvrde);
						}

				if(@$_SESSION["korisnik"]){

				?>

				<table width="100%" border="1">
					<tr>
						<th width="1%">Order<br />ID</th>
						<th width="1%">Datum<br />Vreme</th>
						<th width="15%">Korisnik</th>
						<th width="30%">Porudžbina</th>
						<th width="5%">Cena</th>
						<th width="5%">Vreme<br />dostave</th>
						<th width="5%">Potvrda</th>
					</tr>
					<?php
						$upit_porudzbine = "select * from arhiva order by id desc";
						$rez_porudzbine = $db_admin -> query($upit_porudzbine);
						while($obj = mysqli_fetch_object($rez_porudzbine)){
							echo "<tr>";
							$id = $obj->id;
							$tmp = explode("-", $obj->datum);
							$datum = $tmp[2].".".$tmp[1].".".$tmp[0].".";
							$temp = explode(":", $obj->vreme);
							$vreme = $temp[0].":".$temp[1];
							$licni_broj_narucivanja = $obj->broj_narucivanja_korisnika;
							$status = $obj->status;

							$upit_korisnik = "select * from users where id='$obj->korisnik' limit 1";
							$kor = $db_admin -> query($upit_korisnik);
							while($korisnik = mysqli_fetch_object($kor)){
								$email = $korisnik -> email;
								$ime = $korisnik -> ime;
								$prezime = $korisnik -> prezime;
								$brojnarucivanja = $korisnik -> brojnarucivanja;
							}

							$upit_podaci = "select * from user_podaci where id='$obj->korisnik' limit 1";
							$user_podaci = $db_admin -> query($upit_podaci);
							while ($podaci = mysqli_fetch_object($user_podaci)){
								$mobilni = $podaci -> mobilni;
								$fiksni = $podaci -> fiksni;
								$firma = $podaci -> firma;
								$ulica = $podaci -> ulica;
								$ulicnibroj = $podaci -> ulicnibroj;
								$oblast = $podaci -> oblast;
								$interfon = $podaci -> interfon;
								$sprat = $podaci -> sprat;
								$brojstana = $podaci -> brojstana;
							}
							$porudzbina = unserialize($obj -> porudzbina);
							$cena = $obj -> cena;

							echo "<td align='center'>$id</td>";
							echo "<td align='center'>$datum<br />$vreme</td>";
							echo "<td align='left' valign='top'>";
							echo "<b>$prezime $ime</b><br />
									 Mobilni: <b>$mobilni</b><br />
									 Fiksni: <b>$fiksni</b><br />
									 $ulica $ulicnibroj<br />";
							if($firma != ""){
								echo "Firma: $firma<br />";
							}
							echo "$oblast<br />";
							if($interfon != ""){
								echo "Interfon: $interfon<br />";
							}
							if($sprat != ""){
								echo "Sprat: $sprat ";
							}
							if($brojstana != ""){
								echo "Broj stana: $brojstana<br />";
							}
							echo "Broj naručivanja: <b>" . $licni_broj_narucivanja . "</b>";
							echo "</td>";
							echo "<td align='left' valign='top'>";
							foreach($porudzbina as $cart_itm){
							echo "<ul>";
							echo "<li class='proizvod'>";
								echo "<h3>";
								echo "<b>". $cart_itm['kolicina']." &times; ".$cart_itm["naziv"]."</b>";
								if($cart_itm['vrsta_proizvoda'] == 'napitci'){
									echo ", ". $cart_itm["velicina_porcije"]."<br />";
								}
								echo "</h3>";
								if($cart_itm["vrsta_proizvoda"] == "pice"){
									echo "<b>Veličina</b>: ".$cart_itm['velicina_pice']." cm<br />";
								}
								if($cart_itm['vrsta_proizvoda'] == "paste"){
									echo "<b>Pasta</b>: ".$cart_itm["vrsta_paste"]."<br />";
								}
								if($cart_itm['vrsta_proizvoda'] == "ostalo"){
									if(@$cart_itm["velicina_porcije"] != ""){
										echo "<b>Količina</b>: ".$cart_itm["velicina_porcije"]."<br />";
									}
								}
								if($cart_itm['vrsta_proizvoda'] == "deserti"){
									if(@$cart_itm["velicina_porcije"] != ""){
										echo "<b>Količina</b>:".$cart_itm["velicina_porcije"]."<br />";
									}
								}
								if(@$cart_itm["izbor_kackavalja"] != ""){
									echo "<b>Izbor kačkavalja</b>: ".$cart_itm["izbor_kackavalja"]."<br />";
								}
								if(@$cart_itm["pica_dodaci"] != ""){
									echo "<b>Dodaci</b>: ";
									foreach($cart_itm["pica_dodaci"] as $dodatak){
										$naziv_tabele = $cart_itm["tabela_dodaci"];
										$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
										$rez = $db_admin -> query($upit);
										while($odabrani_dodatak = mysqli_fetch_object($rez)){
											echo "+".$odabrani_dodatak -> naziv." ";
										}
									}
								echo "<br />";
								}
								if(@$cart_itm["izbor_sosa_paste"] != ""){
									echo "<b>Sos</b>: ".$cart_itm["izbor_sosa_paste"]."<br />";
								}
								if(@$cart_itm["pasta_dodaci"] != ""){
									echo "<b>Dodaci</b>: ";
									foreach($cart_itm["pasta_dodaci"] as $dodatak){
										$naziv_tabele = $cart_itm["tabela_dodaci"];
										$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
										$rez = $db_admin -> query($upit);
										while ($odabrani_dodatak = mysqli_fetch_object($rez)){
											echo "+".$odabrani_dodatak -> naziv." ";
										}
									}
								echo "<br />";
								}
								if(@$cart_itm["rostilj_prilozi"] != ""){
									echo "<b>Prilozi</b>: ";
									foreach($cart_itm["rostilj_prilozi"] as $dodatak){
										$naziv_tabele = $cart_itm["tabela_dodaci"];
										$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
										$rez = $db_admin -> query($upit);
										while ($odabrani_dodatak = mysqli_fetch_object($rez)){
											echo "+".$odabrani_dodatak -> naziv." ";
										}
									}
								echo "<br />";
								}
								if(@$cart_itm["nadev_sendvica"] != ""){
									echo "<b>Nadev</b>: ".$cart_itm["nadev_sendvica"]."<br />";
								}
								if(@$cart_itm["namazi_sendvica"] != ""){
									echo "<b>Namaz</b>: ".$cart_itm["namazi_sendvica"]."<br />";
								}
								if(@$cart_itm["sendvic_dodaci"] != ""){
									echo "<b>Dodaci</b>: ";
									foreach($cart_itm["sendvic_dodaci"] as $dodatak){
										$naziv_tabele = $cart_itm["tabela_dodaci"];
										$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
										$rez = $db_admin -> query($upit);
										while ($odabrani_dodatak = mysqli_fetch_object($rez)){
											echo "+".$odabrani_dodatak -> naziv." ";
										}
									}
								echo "<br />";
								}
								if(@$cart_itm["vrsta_sosa"] != ""){
									echo "<b>Sos</b>: ".$cart_itm["vrsta_sosa"]."<br />";
								}
								if(@$cart_itm["vrsta_nadeva"] != ""){
									echo "<b>Nadev</b>: ".$cart_itm["vrsta_nadeva"]."<br />";
								}
								if(@$cart_itm["vrsta_namaza"] != ""){
									echo "<b>Namaz</b>: ".$cart_itm["vrsta_namaza"]."<br />";
								}
								if(@$cart_itm["pomfrit_dodatak"] != ""){
									echo "<b>Dodaci</b>: ";
									foreach($cart_itm["pomfrit_dodatak"] as $dodatak){
										echo "+" . $dodatak . " ";
									}
								echo "<br />";
								}
								if(@$cart_itm["muskatni_orah"] != ""){
									echo "<b>Izbor</b>: ".$cart_itm["muskatni_orah"]."<br />";
								}
								if(@$cart_itm["palacinka_dodaci"] != ""){
									echo "<b>Dodaci</b>: ";
									foreach($cart_itm["palacinka_dodaci"] as $dodatak){
										$naziv_tabele = $cart_itm["tabela_dodaci"];
										$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
										$rez = $db_admin -> query($upit);
										while ($odabrani_dodatak = mysqli_fetch_object($rez)){
											echo "+" . $odabrani_dodatak -> naziv." ";
										}
									}
								echo "<br />";
								}
								if(@$cart_itm["napomena"] != ""){
									echo "<b>Napomena</b>: ".$cart_itm["napomena"];
								}
							echo "</li>";
							echo "</ul>";
							}
							echo "</td>";
							echo "<td align='center'>$cena</td>";
							echo "<td align='center'>";
							echo $obj -> vreme_dostave;
							echo "</td>";
							echo "<td align='center'>";

							if($status == "odbijeno"){
				?>
								<img class="odbijenaSlika" src="img/cross.png" />
				<?php
						}elseif($status == "prihvaceno"){
				?>
								<img class="odbijenaSlika" src="img/check.png" />
				<?php
							}

							echo "</td>";
							echo "</tr>";
						}

						/*$query = "select potvrda from porudzbine";
						$provera_potvrde = $db_admin -> query($query);
						while($provera = mysqli_fetch_object($provera_potvrde)){
							if($provera->potvrda == 0){
					?>
							<!--<audio src="alarm/alarm.wav" autoplay loop />-->
					<?php
							}
						}*/
					?>

				</table>
		<?php 	}
		?>
			</div>
		</div><!--zavrsetak diva container-->

		<?php 	}
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
		 $('span.nav_btn').click(function (){
			 $('span.nav_btn').css("border-bottom", "1px dotted hsla(345, 100%, 16%, 0.8)");
			 $('ul.nav').toggle('fast');
		 })

		</script>

	</body>
</html>
