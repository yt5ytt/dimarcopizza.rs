<?php
	session_start();
	include "../db/db_kontakt.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Promena podataka - Pizzeria Di Marco</title>
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
						<h1>Promena podataka</h1><br />
						
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
										
										//goto kraj;
										
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
						
						<form action="promena_podataka.php" method="post">
							<div id="forma">
								<legend>Unesite sve potrebne podatke.</legend>
											
								<section>
									<div class="label">Ime</div><!--kraj diva label-->
									<div class="unos"><input id="name" name="name" type="text" 
									value="<?php echo $ime ?>" required aria-required="true">
									</div><!--kraj diva unos-->
								</section>
											
								<section>
									<div class="label">Prezime</div><!--kraj diva label-->
									<div class="unos"><input id="lastname" name="lastname" type="text"
									value="<?php echo $prezime ?>" required aria-required="true">
									</div><!--kraj diva unos-->
								</section>
											
								<section>
									<div class="label">Telefoni</div><!--kraj diva label-->
									<div class="unos">
										<div class="mobilni">
											<input id="mobilni" name="mobilni" type="text" 
											value="<?php echo $mobilni ?>" placeholder="mobilni" required aria-required="true">
										</div><!-- kraj diva mobilni-->
										<div class="fiksni">
											<input id="fiksni" name="fiksni" type="text" 
											value="<?php echo $fiksni ?>" placeholder="fiksni" required aria-required="true">
										</div><!-- kraj diva fiksni-->
									</div><!--kraj diva unos-->
								</section>
											
								<section>
									<div class="label">Firma</div><!--kraj diva label-->
									<div class="unos"><input id="firma" name="firma" type="text"
									value="<?php echo $firma ?>">
									</div><!--kraj diva unos-->
								</section>
											
								<section>
									<div class="label">Adresa</div><!--kraj diva label-->
									<div class="unos">
										<div class="ulica">
											<input id="ulica" name="ulica" type="text" 
											value="<?php echo $ulica ?>" placeholder="ulica" required aria-required="true">
										</div><!-- kraj diva ulica-->
										<div class="ulicnibroj">
											<input id="ulicnibroj" name="ulicnibroj" type="text" 
											value="<?php echo $ulicnibroj ?>" placeholder="ulični broj" required aria-required="true">
										</div><!-- kraj diva ulicnibroj-->
									</div><!--kraj diva unos-->
								</section>
											
								<section>
									<div class="label">Oblast</div><!--kraj diva label-->
									<div class="unos">
										<select name="oblast">
											
											<option value="Izaberite oblast">--Izaberite oblast--</option>
											
											<optgroup label="Beograd">
											<?php
												$upit = "select * from beograd";
												$rez = $db_admin -> query($upit);
													
												while ($beograd = mysqli_fetch_object($rez)){?>
												<option value="<?php echo $beograd -> oblast;?>">
												<?php echo $beograd -> oblast;?></option>
														
												<?php }?>
											</optgroup>
														
											<optgroup label="Novi Beograd">
														
											<?php															
												$upit = "select * from novi_beograd";
												$rez = $db_admin -> query($upit);
															
												while ($novi_beograd = mysqli_fetch_object($rez)){?>
															
												<option value="<?php echo $novi_beograd -> oblast;?>">
												<?php echo $novi_beograd -> oblast;?></option>
															
												<?php }?>
											</optgroup>
														
											<optgroup label="Zemun">
														
											<?php															
												$upit = "select * from zemun";
												$rez = $db_admin -> query($upit);
															
												while ($zemun = mysqli_fetch_object($rez)){?>
														
												<option value="<?php echo $zemun -> oblast;?>">
												<?php echo $zemun -> oblast;?></option>
															
												<?php }?>
											</optgroup>
										</select>
									</div><!--kraj diva unos-->
								</section>
											
								<section>
									<div class="label">Interfon</div><!--kraj diva label-->
									<div class="unos">
										<div class="interfon">
											<input id="interfon" name="interfon" type="text" 
											value="<?php echo $interfon ?>" placeholder="interfon">
										</div><!-- kraj diva interfon-->
										<div class="sprat">
											<input id="sprat" name="sprat" type="text" 
											value="<?php echo $sprat ?>" placeholder="sprat">
										</div><!-- kraj diva sprat-->
										<div class="brojstana">
											<input id="brojstana" name="brojstana" type="text" 
											value="<?php echo $brojstana ?>" placeholder="brojstana">
										</div><!-- kraj diva brojstana-->
									</div><!--kraj diva unos-->
								</section>
											
								<input class="submit" type="submit" name="submit" value="Promeni podatke" />
					
							</div><!--kraj diva forma-->
									
						</form>
						
						<?php
							if(@$_POST["submit"]){
								
								//ime:
								if($_POST["name"] != ""){
									$db_users -> query("update users set ime='$_POST[name]' where id='$id'");
								}								
								//prezime:
								if($_POST["lastname"] != ""){
									$db_users -> query("update users set prezime='$_POST[lastname]' where id='$id'");
								}
								//mobilni:
								if($_POST["mobilni"] != ""){
									$db_users -> query("update user_podaci set mobilni='$_POST[mobilni]' where id='$id'");
								}
								//fiksni:
								if($_POST["fiksni"] != ""){
									$db_users -> query("update user_podaci set fiksni='$_POST[fiksni]' where id='$id'");
								}
								//firma:
								$db_users -> query("update user_podaci set firma='$_POST[firma]' where id='$id'");
								//ulica:
								if($_POST["ulica"] != ""){
									$db_users -> query("update user_podaci set ulica='$_POST[ulica]' where id='$id'");
								}
								//ulicnibroj:
								if($_POST["ulicnibroj"] != ""){
									$db_users -> query("update user_podaci set ulicnibroj='$_POST[ulicnibroj]' where id='$id'");
								}								
								//oblast:
								if($_POST["oblast"] != "Izaberite oblast"){
									$db_users -> query("update user_podaci set oblast='$_POST[oblast]' where id='$id'");
								}								
								//interfon:
								$db_users -> query("update user_podaci set interfon='$_POST[interfon]' where id='$id'");
								//sprat:
								$db_users -> query("update user_podaci set sprat='$_POST[sprat]' where id='$id'");
								//brojstana:
								$db_users -> query("update user_podaci set brojstana='$_POST[brojstana]' where id='$id'");
						?>
								
								<script>location.replace("index.php");</script>
								
						<?php }
						?>
						
						
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