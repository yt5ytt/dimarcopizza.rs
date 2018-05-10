<?php
	session_start();
	include "../db/db_kontakt.php";
	if(@$_SESSION["korisnik"] == "administrator"){
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Korisnici - Pizzeria Di Marco</title>
		<meta charset="utf-8" />
		<!--<meta http-equiv="refresh" content="10" />-->
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="../css/animation.css" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="icon" type="img/png" href="img/favicon.png">
	</head>
	<body>
		
		<?php
			if(@$_SESSION["korisnik"] == "administrator"){
		?>
		
		<div id="container">
			<header>			
				<div id="logo">
					<img src="img/favicon.png" /> <em>Korisnici</em>
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
		
			<nav>
				<ul>
					<li><a href="porudzbine.php">Porudžbine</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="stranica">Korisnici</a></li>
					<li><a href="dodavanje.php?selected=pice">Dodavanje proizvoda</a></li>
					<li><a href="promena.php">Promena cena</a></li>
					<li><a href="pauziranje.php">Pauziranje proizvoda</a></li>
					<li><a href="knjiga_utisaka.php">Knjiga utisaka</a></li>
					<li><a href="dodavanje_slika.php">Dodavanje slika</a></li>
				</ul>
			</nav>			
			
			<div id="glavno">
				
		<?php	
				if(@$_GET["id"]){
				
					$upit = "select * from users where id='$_GET[id]'";
					$rez = $db_admin -> query($upit);
					
					while($korisnik = mysqli_fetch_object($rez)){
						
						$id = $korisnik -> id;
						$ime = $korisnik -> ime;
						$prezime = $korisnik -> prezime;
						$email = $korisnik -> email;
						$brojnarucivanja = $korisnik -> brojnarucivanja;
					
						$upit_korisnik = "select * from user_podaci where id=$id";
						$rezultat = $db_admin -> query($upit_korisnik);
						
						while($ostalo = mysqli_fetch_object($rezultat)){
							
							$mobilni = $ostalo -> mobilni;
							$fiksni = $ostalo -> fiksni;
							$firma = $ostalo -> firma;
							$ulica = $ostalo -> ulica;
							$ulicnibroj = $ostalo -> ulicnibroj;
							$oblast = $ostalo -> oblast;
							$interfon = $ostalo -> interfon;
							$sprat = $ostalo -> sprat;
							$brojstana = $ostalo -> brojstana;
		?>
				
							<div id="detalji_korisnika">
								<div id="naslovna">
									<div class="korisnik"><?php echo $ime." ".$prezime; ?></div>
									<div class="brojnarucivanja">
										<?php echo "Broj naručivanja: ".$brojnarucivanja; ?>
									</div>
								</div>
								<div id="detalji">
									<div class="osnovni_podaci">
										<section class="abc">
											<div class="id"><?php echo "ID korisnika: <b>".$id."</b>";?></div>
											<div class="email"><?php echo "<b>".$email."</b>";?></div>
											<div class="mobilni"><?php echo "Mobilni: <b>".$mobilni."</b>";?></div>
											<div class="fiksni"><?php echo "Fiksni: <b>".$fiksni."</b>";?></div>											
										</section>
										<section class="abc">
											<div class="adresa">
												<?php echo "Adresa: <b>" . $ulica . " " . $ulicnibroj . "</b>"; ?>
											</div>
											<div class="oblast"><?php echo "Oblast: <b>" . $oblast . "</b>"; ?></div>
										</section>

										<section class="abc">
											<div class="interfon">
												<?php 
													echo "Interfon: <b>" . $interfon . "</b><br />";
													echo "Sprat: <b>" . $sprat . "</b><br />";
													echo "Broj stana: <b>" . $brojstana . "</b><br />";
												?>
											</div>
											<div class="firma"><?php echo "Firma: <b>" . $firma . "</b>"; ?></div>
										</section>										
									</div>
								</div>
							
							</div>
											
		<?php
						}
					}
		?>
		
							<div id="porudzbine">
							
								<section>
									<div class="id_naslov">ID</div>
									<div class="datum_naslov">Datum</div>
									<div class="vreme_porudzbine_naslov">Vreme</div>
									<div class="porudzbina_naslov">Porudžbina</div>
									<div class="cena_naslov">Cena</div>
								</section>
		<?php 
							$upit_porudzibne = "select * from porudzbine where korisnik='$_GET[id]' order by id desc";
							$rez_porudzbine = $db_admin -> query($upit_porudzibne);
							
							while($obj = mysqli_fetch_object($rez_porudzbine)){
								$id_porudzbine = $obj->id;
								$tmp = explode("-", $obj->datum);
								$datum = $tmp[2].".".$tmp[1].".".$tmp[0].".";
								$temp = explode(":", $obj->vreme);
								$vreme = $temp[0].":".$temp[1];
								$porudzbina = unserialize($obj -> porudzbina);
								$cena = $obj -> cena;
		?>
							
								<section>
									<div class="id"><?php echo $id_porudzbine; ?></div>
									<div class="datum"><?php echo $datum; ?></div>
									<div class="vreme_porudzbine"><?php echo $vreme; ?></div>
									<div class="porudzbina">
		<?php
										foreach($porudzbina as $cart_itm){
											echo "<ul>";
												echo "<li class='proizvod'>";
												echo "<h4>";
												echo "<b>". $cart_itm['kolicina']." &times; ".$cart_itm["naziv"]."</b>"; 
												if($cart_itm['vrsta_proizvoda'] == 'napitci'){
													echo ", ". $cart_itm["velicina_porcije"]."<br />";
												}
												echo "</h4>";
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
													echo "<b>Sos</b>: ".$cart_itm["vrsta_sosa"]." sos<br />";
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
		?>
									</div>
									<div class="cena"><?php echo $cena; ?></div>
								</section>
								
		<?php 
							}
		?>
								
							</div>
							
							<div id="back">
								<a href="korisnici.php">Nazad</a>
							</div>
		
		
		
		<?php
					
				}else{
		?>			
					<section id="korisnik">
						<div class="id_korisnika naslov">ID</div>
						<div class="korisnik_naslov">Ime i Prezime</div>
						<div class="mail_adresa naslov">Mail adresa</div>
						<div class="brojnarucivanja naslov">Broj naručivanja</div>
						<!--<div class="detalji naslov"></div>
						<div class="obrisi_korisnika naslov"></div>-->
					</section>
					
		<?php		
					$upit = "select * from users";
					$rez = $db_admin -> query($upit);
					
					while($korisnik = mysqli_fetch_object($rez)){
						
						$id = $korisnik -> id;
						$ime = $korisnik -> ime;
						$prezime = $korisnik -> prezime;
						$email = $korisnik -> email;
						$brojnarucivanja = $korisnik -> brojnarucivanja;
		?>
				
							<section id="korisnik">
								<div class="id_korisnika"><?php echo $id; ?></div>
								<div class="korisnik"><?php echo $ime." ".$prezime; ?></div>
								<div class="mail_adresa"><?php echo $email; ?></div>
								<div class="brojnarucivanja"><?php echo $brojnarucivanja; ?></div>
								<div class="detalji"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?
								id=<?php echo $id; ?>">Detalji</a></div>
								<!--<div class="obrisi_korisnika"><a href="obrisi_korisnika.php?
								id=<?php echo $id; ?>">Obriši</a></div>-->
							</section>
							
		<?php
					}
					
				}
		?>
										
			</div><!-- zavrsetak diva glavno-->
		</div><!--zavrsetak diva container-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
		 $('span.nav_btn').click(function (){
			 $('span.nav_btn').css("border-bottom", "1px dotted hsla(345, 100%, 16%, 0.8)");
			 $('ul.nav').toggle('fast');
		 })
		
		</script>
		
		<?php
			}
		?>
	
	</body>



</html>

	<?php }
	?>