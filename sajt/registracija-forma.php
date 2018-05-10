<?php
	session_start();
	include "../db/db_kontakt.php";	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registracija - Pizzeria Di Marco</title>
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
					
						<?php
							if(!@$_SESSION["email"]){
							
							echo "<h4>Da biste naručili, morate se ulogovati</h4>";
						
						}else{
						
							echo "<a href='dostava.php' class='naruci'>Naruči</a>";						
						
						}
						
						?>
						
					</div><!--zavrsetak diva naruci-->
					<div id="reglog">
						
						<?php
							
							if(!@$_SESSION["email"]){
							
							echo "<ul>
									<li><a href='login-forma.php'>Uloguj se</a></li>
								</ul>";
						
						}else{
							
							$upit = "select * from users";
							
							$rez = $db_admin -> query($upit);
							
							while($ime = mysqli_fetch_object($rez)){
								
								if($ime -> email != $_SESSION["email"]){
									
									continue;
									
								}else{
									
									$order = $ime->brojnarucivanja + 1;
									
									echo "<div class='dobrodosli'>
											Dobrodošli <em>" . $ime -> ime . "</em> Ovo će biti vaša porudžbina broj <em>". $order ."</em><br />
											<a href='../profil/index.php' class='plavodugme'>Profil</a>
											<a href='logout.php' class='crvenodugme'>Izloguj se</a><br />											
										  </div><!--kraj diva dobrodosli-->";
																		
								}
																
							}
													
						}
						
						?>
					</div><!--zavrsetak diva reglog-->
				</div><!--zavrsetak diva login-->
				<div id="headline">
					<div id="logo">
						<a href="../index.php"><h3><img src="img/favicon.png" />Pizzeria Di Marco</h3></a>
					</div><!--kraj diva logo-->
					<div id="telefoni">
						<em>Telefoni za naručivanje:<br />011/29-94-706 i 065/85-85-550</em>
					</div><!--kraj diva telefoni-->
				</div><!--zavrsetak diva headline-->
				
			</header>

			<div id="content" role="main">
				<div class="okvir">
					<nav class="mali_meni">
					
						<span class="nav_btn">Glavni meni</span>
					
						<ul class="nav">
							<li><a href="../index.php">NASLOVNA</a></li>
							<li><a href="meni.php">MENI</a></li>
							<li><a href="dostava.php">DOSTAVA</a></li>
							<li><a href="galerija.php">GALERIJA</a></li>
							<li><a href="knjiga_utisaka.php">KNJIGA UTISAKA</a></li>
							<li><a href="posao.php">TRAŽITE POSAO?</a></li>
							<li><a href="kontakt.php">KONTAKT</a></li>
						</ul>
					</nav>
					
					<section class="side_pane">
					
					<nav class="veliki_meni">
					
						<span class="nav_btn">Glavni meni</span>
					
						<ul class="nav">
							<li><a href="../index.php">NASLOVNA</a></li>
							<li><a href="meni.php">MENI</a></li>
							<li><a href="dostava.php">DOSTAVA</a></li>
							<li><a href="galerija.php">GALERIJA</a></li>
							<li><a href="knjiga_utisaka.php">KNJIGA UTISAKA</a></li>
							<li><a href="posao.php">TRAŽITE POSAO?</a></li>
							<li><a href="kontakt.php">KONTAKT</a></li>
						</ul>
					</nav>
					
					</section>
				
					<div id="glavno">
						<h1>Registrujte se</h1><br />
							<form action="registracija.php" method="post">
								<div id="forma">
									<legend>Polja označena * su obavezna</legend>
											
									<section>
										<div class="label">* Email</div><!--kraj diva label-->
										<div class="unos"><input id="email" name="email" type="email" 
										placeholder="email@email.com" required aria-required="true">
										</div><!--kraj diva unos-->
									</section>
											
									<section>
										<div class="label">* Lozinka</div><!--kraj diva label-->
										<div class="unos"><input id="password" name="password" type="password" 
										required aria-required="true">
										</div><!--kraj diva unos-->
									</section>
											
									<section>
										<div class="label">* Potvrdi lozinku</div><!--kraj diva label-->
										<div class="unos"><input id="passrpt" name="passrpt" type="password" 
										required aria-required="true">
										</div><!--kraj diva unos-->
									</section>
											
									<section>
										<div class="label">* Ime</div><!--kraj diva label-->
										<div class="unos"><input id="name" name="name" type="text" 
										required aria-required="true">
										</div><!--kraj diva unos-->
									</section>
											
									<section>
										<div class="label">* Prezime</div><!--kraj diva label-->
										<div class="unos"><input id="lastname" name="lastname" type="text" 
										required aria-required="true">
										</div><!--kraj diva unos-->
									</section>
											
									<section>
										<div class="label">* Telefoni</div><!--kraj diva label-->
										<div class="unos">
											<div class="mobilni">
												<input id="mobilni" name="mobilni" type="text" 
												placeholder="mobilni" required aria-required="true">
											</div><!-- kraj diva mobilni-->
											<div class="fiksni">
												<input id="fiksni" name="fiksni" type="text" 
												placeholder="fiksni" required aria-required="true">
											</div><!-- kraj diva fiksni-->
										</div><!--kraj diva unos-->
									</section>
											
									<section>
										<div class="label">Firma</div><!--kraj diva label-->
										<div class="unos"><input id="firma" name="firma" type="text">
										</div><!--kraj diva unos-->
									</section>
											
									<section>
										<div class="label">* Adresa</div><!--kraj diva label-->
										<div class="unos">
											<div class="ulica">
												<input id="ulica" name="ulica" type="text" 
												placeholder="ulica" required aria-required="true">
											</div><!-- kraj diva ulica-->
											<div class="ulicnibroj">
												<input id="ulicnibroj" name="ulicnibroj" type="text" 
												placeholder="broj" required aria-required="true">
											</div><!-- kraj diva ulicnibroj-->
										</div><!--kraj diva unos-->
									</section>
											
									<section>
										<div class="label">* Oblast</div><!--kraj diva label-->
										<div class="unos">
											<select name="oblast">
												
												<option value="Izaberite oblast">--Izaberite oblast--</option>
												<optgroup label="Beograd">
														
												<?php															
													$upit = "select * from beograd";
													$rez = $db_admin -> query($upit);
														
													while ($beograd = mysqli_fetch_object($rez)){?>
															
													<option value="<?php echo $beograd -> oblast; ?>">
													<?php echo $beograd -> oblast; ?></option>
															
													<?php } ?>
												</optgroup>
														
												<optgroup label="Novi Beograd">
														
												<?php															
													$upit = "select * from novi_beograd";
													$rez = $db_admin -> query($upit);
															
													while ($novi_beograd = mysqli_fetch_object($rez)){?>
															
													<option value="<?php echo $novi_beograd -> oblast; ?>">
													<?php echo $novi_beograd -> oblast; ?></option>
															
													<?php } ?>
												</optgroup>
														
												<optgroup label="Zemun">
														
												<?php															
													$upit = "select * from zemun";
													$rez = $db_admin -> query($upit);
															
													while ($zemun = mysqli_fetch_object($rez)){?>
															
													<option value="<?php echo $zemun -> oblast; ?>">
													<?php echo $zemun -> oblast; ?></option>
															
													<?php } ?>
												</optgroup>
											</select>
										</div><!--kraj diva unos-->
									</section>
											
									<section>
										<div class="label">Interfon</div><!--kraj diva label-->
										<div class="unos">
											<div class="interfon">
												<input id="interfon" name="interfon" type="text" 
												placeholder="interfon">
											</div><!-- kraj diva interfon-->
											<div class="sprat">
												<input id="sprat" name="sprat" type="text" 
												placeholder="sprat">
											</div><!-- kraj diva sprat-->
											<div class="brojstana">
												<input id="brojstana" name="brojstana" type="text" 
												placeholder="Broj stana">
											</div><!-- kraj diva brojstana-->
										</div><!--kraj diva unos-->
									</section>
									
									<?php 
										$random = rand(100000, 999999);
									?>
									
									<section>
										<div class="label">* Upišite <?php echo $random; ?></div><!--kraj diva label-->
										<div class="unos"><input id="upisanRandom" name="upisanRandom" type="text" 
										required aria-required="true">
										</div><!--kraj diva unos-->
									</section>
									
									<input type="hidden" name="random" value="<?php echo $random; ?>">
									
											
									<input class="submit" type="submit" value="Registracija" />
					
								</div><!--kraj diva forma-->
					
				
							</form>
						
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
					Designed by <a href="http://yt5ytt.ddns.net/alexwebsoft.com"><b><em>@</em>lexsoft</b></a> &copy 2015. - All rights reserved.
				</footer>
			</div><!--kraj diva footer-->
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