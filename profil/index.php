<?php
	session_start();
	include "../db/db_kontakt.php";	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Korisnicki profil - Pizzeria Di Marco</title>
		<meta charset="utf-8" />
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="../css/animation.css" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="icon" type="img/png" href="img/favicon.png">
	</head>
	<body>
		<div id="container">
			<header>
				<div id="login">
					<div id="naruci">
						<a href="../sajt/dostava.php" class="naruci">Naruči</a>
					</div><!--zavrsetak diva naruci-->
					<div id="reglog">
						<a href="../sajt/logout.php" class="crvenodugme">Izloguj se</a>
					</div><!--kraj diva reglog-->
					
				</div><!--zavrsetak diva login-->
				<div id="headline">
					<div id="logo">
						<a href="../index.php"><h3><img src="img/favicon.png" />Pizzeria Di Marco</h3></a>
					</div><!--kraj diva logo-->
					<div id="telefoni">
						<em>Telefoni za naručivanje: 011/29-94-706 i 065/85-85-550</em>
					</div><!--kraj diva telefoni-->
				</div><!--zavrsetak diva headline-->
				
			</header>

			<div id="content" role="main">
				<div class="okvir">
					<nav>
						<ul>
							<li><a href="../index.php">NASLOVNA</a></li>
							<li><a href="promena_lozinke_forma.php">PROMENA LOZINKE</a></li>
							<li><a href="promena_podataka.php">PROMENA PODATAKA</a></li>
							<li class="brisanje"><a href="brisanje_profila.php">OBRIŠI PROFIL</a></li>
						</ul>
					</nav>
				
					<div id="glavno">
						<h1>Profil</h1><br />
						
						<?php
							$upit = "select * from users";
							
							$rez = $db_users -> query($upit);
							
							while($user = mysqli_fetch_object($rez)){
								
								if($user -> email != $_SESSION["email"]){
									
									continue;
									
								}else{
									
									$id = $user -> id;
									$ime = $user -> ime;
									$prezime = $user -> prezime;
									$brojnarucivanja = $user -> brojnarucivanja;
									
									$podaci = "select * from user_podaci where id=$id";
									
									$rezultat = $db_users -> query($podaci);
									
									while($userpodaci = mysqli_fetch_object($rezultat)){
										
										$mobilni = $userpodaci -> mobilni;
										$fiksni = $userpodaci -> fiksni;
										$firma = $userpodaci -> firma;
										$ulica = $userpodaci -> ulica;
										$ulicnibroj = $userpodaci -> ulicnibroj;
										$oblast = $userpodaci -> oblast;
										$interfon = $userpodaci -> interfon;
										$sprat = $userpodaci -> sprat;
										$brojstana = $userpodaci -> brojstana;
										
										goto kraj;
										
									}
																		
								}
								
							}
						kraj: 
						
						?>
						
						<div id="kontejner">
						
							<div class="zaglavlje">
							
								<div class="naziv">
									<?php echo $ime . " " . $prezime; ?>
								</div><!--kraj diva naziv-->
							
							</div><!--kraj diva zaglavlje-->
							
							<div class="tekst">
							
								<div class="levo">
									<h3>Adresa</h3><br />
									<?php
										echo $ulica . " " . $ulicnibroj . "<br />";
											
											if ($interfon != ""){
												echo "Interfon: " . $interfon . "<br />";
											}
											
											if($sprat != ""){
												echo "Sprat: " . $sprat . "<br />";
											}
											
											if($brojstana != ""){
												echo "Broj stana: " . $brojstana . "<br />";
											}
											
										echo "Oblast: " . $oblast . "<br /><br />";
									?>
									
									<h3>Kontakt telefoni</h3><br />
									<?php
										echo "Mobilni: " . $mobilni . "<br />";
										echo "Fiksni: " . $fiksni;
									?>								
								</div><!--kraj diva levo-->
								
								<div class="desno">
									<?php
										if ($firma != ""){
												echo "<h3>Firma</h3><br />" . $firma . "<br /><br />";
											}
										
										echo "<h3>Dosadašnji broj naručivanja:</h3> <br />" . $brojnarucivanja;
									?>
								</div><!--kraj diva levo-->
							
							</div><!--kraj diva tekst-->
						
						</div><!--kraj diva kontejner-->
						
					</div><!--kraj diva glavno-->
				
				</div><!--kraj diva okvir-->
			
			</div><!--zavrsetak diva content-->
			
			<div id="footer">
				<div id="drustveno">					
					<h1>Ostanimo u kontaktu</h1>
					<ul>
						<li><a href="https://www.facebook.com/di.marcopizza" class="facebook" target="_blank"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="mailto: dimarcopizza@gmail.com" class="mail"></a></li>
					</ul>
				</div><!--kraj diva drustveno-->
				<footer>
					Designed by <b><em>@</em>lexsoft</b> &copy 2015. - All rights reserved.
				</footer>
			</div><!--kraj diva footer-->
		</div><!--zavrsetak diva container-->
	
	</body>



</html>