<?php
	session_start();
	include "../db/db_kontakt.php";
	if(@$_SESSION["korisnik"] == "administrator"){
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dodavanje proizvoda - Pizzeria Di Marco</title>
		<meta charset="utf-8" />
		<!--<meta http-equiv="refresh" content="10" />-->
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="../css/animation.css" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="icon" type="img/png" href="img/favicon.png">
	</head>
	<body>
	
		<div id="container">
			<header>			
				<div id="logo">
					<img src="img/favicon.png" /> <em>Dodavanje proizvoda</em>
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
			if($_SESSION["korisnik"] == "administrator"){
		?>
			<nav>
				<ul>
					<li><a href="porudzbine.php">Porudžbine</a></li>
					<li><a href="korisnici.php">Korisnici</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?selected=pice" class="stranica">Dodavanje proizvoda</a></li>
					<li><a href="promena.php">Promena cena</a></li>
					<li><a href="pauziranje.php">Pauziranje proizvoda</a></li>
					<li><a href="knjiga_utisaka.php">Knjiga utisaka</a></li>
					<li><a href="dodavanje_slika.php">Dodavanje slika</a></li>
				</ul>
			</nav>
		
		
		<?php
			}
		?>
			
			<div id="glavno">
			
				<select class="kateg" name="kategorija" onchange="location = this.value;">
					<option class="opcija" value="<?php echo $_SERVER['PHP_SELF']; ?>?selected=pice" <?php if(@$_GET["selected"] == "pice"){ echo "selected='selected'"; } ?>>Pice</option>
					<option class="opcija" value="<?php echo $_SERVER['PHP_SELF']; ?>?selected=paste" <?php if(@$_GET["selected"] == "paste"){ echo "selected='selected'"; } ?>>Paste</option>
					<option class="opcija" value="<?php echo $_SERVER['PHP_SELF']; ?>?selected=rostilj" <?php if(@$_GET["selected"] == "rostilj"){ echo "selected='selected'"; } ?>>Roštilj</option>
					<option class="opcija" value="<?php echo $_SERVER['PHP_SELF']; ?>?selected=salate" <?php if(@$_GET["selected"] == "salate"){ echo "selected='selected'"; } ?>>Salate</option>
					<option class="opcija" value="<?php echo $_SERVER['PHP_SELF']; ?>?selected=sendvici" <?php if(@$_GET["selected"] == "sendvici"){ echo "selected='selected'"; } ?>>Sendviči</option>
					<option class="opcija" value="<?php echo $_SERVER['PHP_SELF']; ?>?selected=pica_sendvic" <?php if(@$_GET["selected"] == "pica_sendvic"){ echo "selected='selected'"; } ?>>Pica sendviči</option>
					<option class="opcija" value="<?php echo $_SERVER['PHP_SELF']; ?>?selected=ostalo" <?php if(@$_GET["selected"] == "ostalo"){ echo "selected='selected'"; } ?>>Ostalo</option>
					<option class="opcija" value="<?php echo $_SERVER['PHP_SELF']; ?>?selected=deserti" <?php if(@$_GET["selected"] == "deserti"){ echo "selected='selected'"; } ?>>Deserti</option>
					<option class="opcija" value="<?php echo $_SERVER['PHP_SELF']; ?>?selected=napitci" <?php if(@$_GET["selected"] == "napitci"){ echo "selected='selected'"; } ?>>Pića</option>
				</select>
				
				<div id="dodavanje_forma">				
<?php
					if(@$_GET["selected"] == "pice"){
?>					
					<form action="update_dodavanje.php" method="post">
						<div class="naslov">
							<h2>Naziv</h2>
							<input class="naziv" type="text" name="naziv" />
						</div>
						<div class="podaci">
							<div class="opis">
								<h2>Opis</h2>
								<textarea name="opis"></textarea>
							</div>
							<div class="cene">
								<h2>Cene</h2>
								<section>
									<div class="velicina">28cm</div>
									<input class="cena" type="text" name="v28cm"/>
								</section>
								<section>
									<div class="velicina">32cm</div>
									<input class="cena" type="text" name="v32cm"/>
								</section>
								<section>
									<div class="velicina">42cm</div>
									<input class="cena" type="text" name="v42cm"/>
								</section>
								<section>
									<div class="velicina">50cm</div>
									<input class="cena" type="text" name="v50cm"/>
								</section>
							</div>
						</div>
						<input type="hidden" name="tabela" value="<?php echo $_GET["selected"]; ?>" />
						
						<div class="podaci"	>
							<div class="cene">
									<section>
										<input class="dugme" type="submit" name="submit" value="Dodaj" />
									</section>
							</div>
						</div>
					</form>
<?php
						if(@$_GET["potvrda"]){
							echo "<h2>" . $_GET["potvrda"] . "</h2>";
						}
						
					}elseif(@$_GET["selected"] == "napitci"){
?>
					<form action="update_dodavanje.php" method="post">
						<div class="naslov">
							<h2>Naziv</h2>
							<input class="naziv" type="text" name="naziv" />
						</div>
						<div class="podaci">
							<!--<div class="opis">
								<h2>Opis</h2>
								<textarea name="opis"></textarea>
							</div>-->
							<div class="cene">
								<h2>Cene</h2>
								<section>
									<div class="velicina">Limenka</div>
									<input class="cena" type="text" name="limenka"/>
								</section>
								<section>
									<div class="velicina">0.5 litar</div>
									<input class="cena" type="text" name="v0_5l"/>
								</section>
								<section>
									<div class="velicina">1 litar</div>
									<input class="cena" type="text" name="v1l"/>
								</section>
								<section>
									<div class="velicina">1.5 litara</div>
									<input class="cena" type="text" name="v1_5l"/>
								</section>
								<section>
									<div class="velicina">2 litra</div>
									<input class="cena" type="text" name="v2l"/>
								</section>
							</div>
						</div>
						<input type="hidden" name="tabela" value="<?php echo $_GET["selected"]; ?>" />
						
						<div class="podaci"	>
							<div class="cene">
									<section>
										<input class="dugme" type="submit" name="submit" value="Dodaj" />
									</section>
							</div>
						</div>
					</form>
<?php
						if(@$_GET["potvrda"]){
							echo "<h2>" . $_GET["potvrda"] . "</h2>";
						}
						
					}else{
?>
					<form action="update_dodavanje.php" method="post">
						<div class="naslov">
							<h2>Naziv</h2>
							<input class="naziv" type="text" name="naziv" />
						</div>
						<div class="podaci">
							<div class="opis">
								<h2>Opis</h2>
								<textarea name="opis"></textarea>
							</div>
							<div class="cene">
								<h2>Cene</h2>
								<section>
									<div class="velicina">Cena</div>
									<input class="cena" type="text" name="cena"/>
								</section>
							</div>
						</div>
						<input type="hidden" name="tabela" value="<?php echo $_GET["selected"]; ?>" />
						
						<div class="podaci"	>
							<div class="cene">
									<section>
										<input class="dugme" type="submit" name="submit" value="Dodaj" />
									</section>
							</div>
						</div>
					</form>
<?php
						if(@$_GET["potvrda"]){
							echo "<h2>" . $_GET["potvrda"] . "</h2>";
						}
						
					}
?>
				</div><!--kraj diva dodavanje_forma-->
				
			</div><!-- zavrsetak diva glavno-->
		</div><!--zavrsetak diva container-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
		 $('span.nav_btn').click(function (){
			 $('span.nav_btn').css("border-bottom", "1px dotted hsla(345, 100%, 16%, 0.8)");
			 $('ul.nav').toggle('fast');
		 })
		
		</script>
	
	</body>



</html>

	<?php }
	
	?>