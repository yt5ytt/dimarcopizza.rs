<?php
	session_start();
	include "../db/db_kontakt.php";
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dovršite porudžbinu - Pizzeria Di Marco</title>
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
									<li><a href='registracija-forma.php'>Registracija</a></li>
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
<!--------------------->
<!--  K  O  R  P  A  -->
<!--------------------->
					<div id="velika_korpa">
					
						<div class="naslov_korpe">					
							<h2>Vaša korpa</h2>					
						</div>
					
						<div class="sadrzaj_korpe">
							<?php
								if(@$_SESSION["products"]){
									$total=0;
							?>
									
									<ol>
							<?php 
									foreach ($_SESSION["products"] as $cart_itm){
										$subtotal=0;
										$subtotal_1=0;
										$subtotal_2=0;
							?>
										<li class="proizvod">
											<span class="remove-itm">
												<a href="korpa.php?removep=<?php echo $cart_itm["id_proizvoda"];?>
												&return_url=<?php echo $current_url; ?>">&times;</a>
											</span>
										<div class="sadrzaj_proizvoda">
							<?php
											echo "<em>". $cart_itm['kolicina']." &times; ".$cart_itm["naziv"]."</em>"; 
											if($cart_itm['vrsta_proizvoda'] == 'napitci') echo " ". $cart_itm["velicina_porcije"];?>
											<br />
							<?php 
											if($cart_itm["vrsta_proizvoda"] == "pice"){?>
												<section>
													<div class="naziv_dodatka">
														<?php echo "Veličina: ".$cart_itm['velicina_pice']." cm"; ?>
													</div>
												</section>
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "paste"){?>
												<section>
													<div class="naziv_dodatka">
														<?php echo "Pasta: ".$cart_itm["vrsta_paste"]; ?>
													</div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "rostilj"){
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "salate"){
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}																								
											if($cart_itm['vrsta_proizvoda'] == "sendvici"){
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "pica_sendvici"){
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "ostalo"){?>
												<section>
													<div class="naziv_dodatka">
													<?php 
														if(@$cart_itm["velicina_porcije"] != ""){
															echo $cart_itm["velicina_porcije"];
														}
													?></div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "deserti"){?>
												<section>
													<div class="naziv_dodatka">
													<?php 
														if(@$cart_itm["velicina_porcije"] != ""){
															echo $cart_itm["velicina_porcije"];
														}
													?></div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}if($cart_itm['vrsta_proizvoda'] == "napitci"){
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if(@$cart_itm["izbor_kackavalja"] != "") echo "<br />".$cart_itm["izbor_kackavalja"];
											if(@$cart_itm["pica_dodaci"] != ""){
												echo "<br /><u>Dodaci</u>: ";
												foreach($cart_itm["pica_dodaci"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){
														echo "+".$odabrani_dodatak -> naziv." ";
														$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}
											}
										
											if(@$cart_itm["izbor_sosa_paste"] != "") echo "<br />Sos: ".$cart_itm["izbor_sosa_paste"];
											if(@$cart_itm["izbor_pribor"] != "") echo "<br />Pribor: Da<br />";
											if(@$cart_itm["pasta_dodaci"] != ""){
												echo "<br /><u>Dodaci</u>: ";
												foreach($cart_itm["pasta_dodaci"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){
														echo "+".$odabrani_dodatak -> naziv." ";
														$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}	
											}
											if(@$cart_itm["rostilj_prilozi"] != ""){
												echo "<u>Prilozi</u>: ";
												foreach($cart_itm["rostilj_prilozi"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){
														echo "+".$odabrani_dodatak -> naziv." ";
														$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}	
											}
											if(@$cart_itm["nadev_sendvica"] != "") echo "Nadev: ".$cart_itm["nadev_sendvica"]."<br />";
											if(@$cart_itm["namazi_sendvica"] != "") echo "Namazi: ".$cart_itm["namazi_sendvica"]."<br />";
											if(@$cart_itm["sendvic_dodaci"] != ""){
												echo "<u>Dodaci</u>: ";
												foreach($cart_itm["sendvic_dodaci"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){
														echo "+".$odabrani_dodatak -> naziv." ";
														$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}	
											}
											if(@$cart_itm["vrsta_sosa"] != "") echo "Sos: ".$cart_itm["vrsta_sosa"]."<br />";
											if(@$cart_itm["vrsta_nadeva"] != "") echo "Nadev: ".$cart_itm["vrsta_nadeva"]."<br />";
											if(@$cart_itm["vrsta_namaza"] != "") echo "Namaz: ".$cart_itm["vrsta_namaza"]."<br />";
											if(@$cart_itm["pomfrit_dodatak"] != ""){
												echo "<u>Dodaci</u>: ";
												foreach($cart_itm["pomfrit_dodatak"] as $dodatak){
													echo "+" . $dodatak . " ";
													$pomfrit_dodatak = 17;
													$subtotal_2 = $subtotal_2 + $pomfrit_dodatak;
												}	
											}
											if(@$cart_itm["muskatni_orah"] != "") echo "<br />Izbor: ".$cart_itm["muskatni_orah"]."<br />";
											if(@$cart_itm["palacinka_dodaci"] != ""){
												echo "<u>Dodaci</u>: ";
												foreach($cart_itm["palacinka_dodaci"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){
														echo "+" . $odabrani_dodatak -> naziv." ";
														$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}
											}
											$subtotal = ($subtotal_1 + $subtotal_2)*$cart_itm["kolicina"];
							?>
										</div><!--kraj diva sadrzaj_proizvoda-->
										<div class="zbir">
											<div class="iznos_zbira"><?php printf("%.2f", $subtotal); ?></div>
										</div>
										</li>
										
							<?php
									
										$total = $total + $subtotal;
										
										
									}
									if($total > 1500){?>
										<div class="medjuzbir">
											<div class="naziv_totala">MEĐUZBIR: </div>
											<div class="iznos_totala"><?php printf("%.2f", $total); ?></div>
										</div>
										<?php $total = $total-$total/10; ?>
										<p>Vaša porudžbina prelazi <nobr>1500 dinara,</nobr> imate pravo na popust 10%</p>
										<div class="total">
											<div class="naziv_totala">UKUPNO: </div>
											<div class="iznos_totala"><?php printf("%.2f", $total); ?></div>
										</div>
							<?php 		$_SESSION["total"] = $total;
									}else{
							?>
										<div class="total">
											<div class="naziv_totala">UKUPNO: </div>
											<div class="iznos_totala"><?php printf("%.2f", $total); ?></div>
										</div>
							<?php 		$_SESSION["total"] = $total;
									}
							?>
									</ol>
									
									<div class="naruci_dugmici">
							<?php 
										if(@$_SESSION["email"] and !@$_SESSION["products"] == null){
											$upit = "select oblast from user_podaci where email='$_SESSION[email]' limit 1";
											$rez = $db_admin -> query($upit);								
											$oblast = mysqli_fetch_object($rez);
							
											$upit_beograd = "select * from beograd where oblast='$oblast->oblast' limit 1";
											$rez_beograd = $db_admin -> query($upit_beograd);
											if($rez_beograd){
												while($ogranicenje = mysqli_fetch_object($rez_beograd)){
													$limit = $ogranicenje -> ogranicenje;
												}
											}
											
											$upit_novi_beograd = "select * from novi_beograd where oblast='$oblast->oblast' limit 1";
											$rez_novi_beograd = $db_admin -> query($upit_novi_beograd);
											if($rez_novi_beograd){
												while($ogranicenje = mysqli_fetch_object($rez_novi_beograd)){
													$limit = $ogranicenje -> ogranicenje;
												}
											}
											
											$upit_zemun = "select * from zemun where oblast='$oblast->oblast' limit 1";
											$rez_zemun = $db_admin -> query($upit_zemun);
											if($rez_zemun){
												while($ogranicenje = mysqli_fetch_object($rez_zemun)){
													$limit = $ogranicenje -> ogranicenje;
												}
											}
											
											if(@$_SESSION["email"] and $total>=$limit){?>
												<a href="zavrsetak.php">Naruči</a>
							<?php
											}
							?>
									</div>
							<?php 		}
							?>
						</div>
						
						<div class="footer_korpe">
							<?php 
								if(@$_SESSION["email"]){
								$upit = "select oblast from user_podaci where email='$_SESSION[email]' limit 1";
								$rez = $db_admin -> query($upit);							
								$oblast = mysqli_fetch_object($rez);
							
								$upit_beograd = "select * from beograd where oblast='$oblast->oblast' limit 1";
								$rez_beograd = $db_admin -> query($upit_beograd);
								if($rez_beograd){
									while($ogranicenje = mysqli_fetch_object($rez_beograd)){
										$limit = $ogranicenje -> ogranicenje;
									}
								}
											
								$upit_novi_beograd = "select * from novi_beograd where oblast='$oblast->oblast' limit 1";
								$rez_novi_beograd = $db_admin -> query($upit_novi_beograd);
								if($rez_novi_beograd){
									while($ogranicenje = mysqli_fetch_object($rez_novi_beograd)){
										$limit = $ogranicenje -> ogranicenje;
									}
								}
											
								$upit_zemun = "select * from zemun where oblast='$oblast->oblast' limit 1";
								$rez_zemun = $db_admin -> query($upit_zemun);
								if($rez_zemun){
									while($ogranicenje = mysqli_fetch_object($rez_zemun)){
										$limit = $ogranicenje -> ogranicenje;
									}
								}
								
								if($limit > $total){
							?>
									<div class="ogranicenje">
										<p>Minimalna porudžbina za vašu oblast je <?php echo $limit;?> dinara.</p>
									</div>
							<?php
								}
								}
								}else{									
									echo "Vaša korpa je prazna";								
								}									
							?>
							
						</div>
					
					</div><!--kraj diva korpa -->				
				
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