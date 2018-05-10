<?php
	session_start();
	include "../db/db_kontakt.php";
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$total=0;
	$subtotal=0;
	$subtotal_1=0;
	$subtotal_2=0;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Naručite online - Pizzeria Di Marco</title>
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
					<nav class="mali_meni">
					
						<span class="nav_btn">Glavni meni</span>
					
						<ul class="nav">
							<li><a href="../index.php">NASLOVNA</a></li>
							<li><a href="meni.php">MENI</a></li>
							<li><a href="dostava.php"><em>DOSTAVA</em></a></li>
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
							<li><a href="dostava.php"><em>DOSTAVA</em></a></li>
							<li><a href="galerija.php">GALERIJA</a></li>
							<li><a href="knjiga_utisaka.php">KNJIGA UTISAKA</a></li>
							<li><a href="posao.php">TRAŽITE POSAO?</a></li>
							<li><a href="kontakt.php">KONTAKT</a></li>
						</ul>
					</nav>

<!--------------------->
<!--  K  O  R  P  A  -->
<!--------------------->
					<?php if(@$_SESSION["email"]){?>
					<div id="korpa_ikonica">
						<a href="velika_korpa.php"><img src="img/korpa.png" ?></a>
					</div>
					<?php }?>
					
					<div id="korpa">
					
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
							<?php
											echo $cart_itm['kolicina']." &times; <em>".$cart_itm["naziv"]; ?></em>
											<br /><br />
							<?php 
											if($cart_itm["vrsta_proizvoda"] == "pice"){?>
												<section>
													<div class="naziv_dodatka">
														<?php echo "Veličina: ".$cart_itm['velicina_pice']." cm"; ?>
													</div>
													<div class="cena"><?php echo $cart_itm['cena']; ?></div>
												</section>
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "paste"){?>
												<section>
													<div class="naziv_dodatka">
														<?php echo "Pasta: ".$cart_itm["vrsta_paste"]; ?>
													</div>
													<div class="cena"><?php echo $cart_itm['cena']; ?></div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "rostilj"){?>
												<section>
													<div class="naziv_dodatka"><?php echo "Cena: "; ?></div>
													<div class="cena"><?php echo $cart_itm['cena']; ?></div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "salate"){?>
												<section>
													<div class="naziv_dodatka">Cena</div>
													<div class="cena"><?php echo $cart_itm['cena']; ?></div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}																								
											if($cart_itm['vrsta_proizvoda'] == "sendvici"){?>
												<section>
													<div class="naziv_dodatka"><?php echo "Cena: "; ?></div>
													<div class="cena"><?php echo $cart_itm['cena']; ?></div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "pica_sendvici"){?>
												<section>
													<div class="naziv_dodatka"><?php echo "Cena: "; ?></div>
													<div class="cena"><?php echo $cart_itm['cena']; ?></div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "ostalo"){?>
												<section>
													<div class="naziv_dodatka">
													<?php 
														if(@$cart_itm["velicina_porcije"] != ""){
															echo $cart_itm["velicina_porcije"];
														}else echo "Cena: "; 
													?></div>
													<div class="cena"><?php echo $cart_itm['cena']; ?></div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
											if($cart_itm['vrsta_proizvoda'] == "deserti" 
											or $cart_itm['vrsta_proizvoda'] == "napitci"){?>
												<section>
													<div class="naziv_dodatka">
													<?php 
														if(@$cart_itm["velicina_porcije"] != ""){
															echo $cart_itm["velicina_porcije"];
														}else echo "Cena: "; 
													?></div>
													<div class="cena"><?php echo $cart_itm['cena']; ?></div>
												</section>													
							<?php
												$subtotal_1 =  $subtotal_1 + $cart_itm['cena'];
											}
							?>
											
							<?php
											if(@$cart_itm["izbor_kackavalja"] != "") echo "Stavite ".$cart_itm["izbor_kackavalja"]."<br />";
											if(@$cart_itm["pica_dodaci"] != ""){
												echo "<u>Dodaci</u>:";
												foreach($cart_itm["pica_dodaci"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){?>
														<section>
															<div class="naziv_dodatka"><?php echo "+ " . $odabrani_dodatak -> naziv; ?></div>
															<div class="cena"><?php echo $odabrani_dodatak -> cena; ?></div>
														</section>
							<?php 
													$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}
											}
										
											if(@$cart_itm["izbor_sosa_paste"] != "") echo "Sos: ".$cart_itm["izbor_sosa_paste"]."<br />";
											if(@$cart_itm["izbor_pribor"] != "") echo "Pribor: Da<br />";
											if(@$cart_itm["pasta_dodaci"] != ""){
												echo "<u>Dodaci</u>:";
												foreach($cart_itm["pasta_dodaci"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){?>
														<section>
															<div class="naziv_dodatka"><?php echo "+ " . $odabrani_dodatak -> naziv; ?></div>
															<div class="cena"><?php echo $odabrani_dodatak -> cena; ?></div>
														</section>
							<?php 
													$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}	
											}
											if(@$cart_itm["rostilj_prilozi"] != ""){
												echo "<u>Prilozi</u>:";
												foreach($cart_itm["rostilj_prilozi"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){?>
														<section>
															<div class="naziv_dodatka"><?php echo "+ " . $odabrani_dodatak -> naziv; ?></div>
															<div class="cena">
							<?php 
															if($odabrani_dodatak -> cena != 0){
																echo $odabrani_dodatak -> cena;
															}
							?>
															</div>
														</section>
							<?php 
													$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}	
											}
											if(@$cart_itm["nadev_sendvica"] != "") echo "Nadev: ".$cart_itm["nadev_sendvica"]."<br />";
											if(@$cart_itm["namazi_sendvica"] != "") echo "Namazi: ".$cart_itm["namazi_sendvica"]."<br />";
											if(@$cart_itm["sendvic_dodaci"] != ""){
												echo "<u>Dodaci</u>:";
												foreach($cart_itm["sendvic_dodaci"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){?>
														<section>
															<div class="naziv_dodatka"><?php echo "+ " . $odabrani_dodatak -> naziv; ?></div>
															<div class="cena">
							<?php 
															if($odabrani_dodatak -> cena != 0){
																echo $odabrani_dodatak -> cena;
															}
							?>
															</div>
														</section>
							<?php 
													$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}	
											}
											if(@$cart_itm["vrsta_sosa"] != "") echo "Sos: ".$cart_itm["vrsta_sosa"]."<br />";
											if(@$cart_itm["vrsta_nadeva"] != "") echo "Nadev: ".$cart_itm["vrsta_nadeva"]."<br />";
											if(@$cart_itm["vrsta_namaza"] != "") echo "Namaz: ".$cart_itm["vrsta_namaza"]."<br />";
											if(@$cart_itm["pomfrit_dodatak"] != ""){
												echo "<u>Dodaci</u>:";
												foreach($cart_itm["pomfrit_dodatak"] as $dodatak){?>
													<section>
														<div class="naziv_dodatka"><?php echo "+ " . $dodatak; ?></div>
														<div class="cena">17.00</div>
														<input type="hidden" name="cena_pomfrit_dodatak" value="17" />
													</section>
							<?php 
												$pomfrit_dodatak = 17;
												$subtotal_2 = $subtotal_2 + $pomfrit_dodatak;
												}	
											}
											if(@$cart_itm["muskatni_orah"] != "") echo "Izbor: ".$cart_itm["muskatni_orah"]."<br />";
											if(@$cart_itm["palacinka_dodaci"] != ""){
												echo "<u>Dodaci</u>:";
												foreach($cart_itm["palacinka_dodaci"] as $dodatak){
													$naziv_tabele = $cart_itm["tabela_dodaci"];
													$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
													$rez = $db_admin -> query($upit);
													while ($odabrani_dodatak = mysqli_fetch_object($rez)){?>
														<section>
															<div class="naziv_dodatka"><?php echo "+ " . $odabrani_dodatak -> naziv; ?></div>
															<div class="cena"><?php echo $odabrani_dodatak -> cena; ?></div>
														</section>
							<?php 
													$subtotal_2 = $subtotal_2 + $odabrani_dodatak -> cena;
													}												
												}
											}
											$subtotal = ($subtotal_1 + $subtotal_2)*$cart_itm["kolicina"];
							?>
										</li>
										
										<li>
										<div class="zbir">
											<div class="naziv_zbira">Zbir: </div>
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
							<?php 
									}else{
							?>
										<div class="total">
											<div class="naziv_totala">UKUPNO: </div>
											<div class="iznos_totala"><?php printf("%.2f", $total); ?></div>
										</div>
							<?php 
									}
							?>
									</ol>
									
									<ul class="naruci_dugmici">
										<li><a href="korpa.php?empty=1&return_url=
										<?php echo $current_url;?>">Isprazni korpu</a></li>
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
												<li><a href="velika_korpa.php">Naruči</a></li>
												
							<?php
											}
							?>
							<?php 		}
							?>
							</ul>
						</div>
						
						<div class="footer_korpe">
							<?php 
								if(!@$_SESSION["products"] == null and !@$_SESSION["email"]){
							?>
									<div class="potrebno_logovanje">
										<p>Da biste naručili, morate se ulogovati</p>
									</div>	
							<?php
								}
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
					
					</section>
				
					<div id="glavno">
						<h1>Naručite online</h1><br />

<?php 
							$ne_radi = date("H");
							$ne_radi_minuti = date("i");
							
							$upit_radno_vreme = "select radno_vreme from radno_vreme";
							$rez_radno_vreme = $db_admin -> query($upit_radno_vreme);
							while($obj_radno_vreme = mysqli_fetch_object($rez_radno_vreme)){
								$radno_vreme = $obj_radno_vreme -> radno_vreme;
							}
							
							
							if($radno_vreme == "zatvoreno"){
?>
								<div class="radno_vreme">
									<h2>Pizzeria Di Marco trenutno ne prima porudžbine</h2>
								</div>
<?php								
							}elseif($ne_radi > 4 and $ne_radi < 10){
								
?>
								<div class="radno_vreme">
									<h2>Pizzeria Di Marco je trenutno zatvorena</h2>
									<h3>Radno vreme: ponedeljak - nedelja od 10h do 04:30h</h3>
								</div>
<?php							
							}elseif($ne_radi == 4 and $ne_radi_minuti > 30){								
?>
								<div class="radno_vreme">
									<h2>Pizzeria Di Marco je trenutno zatvorena</h2>
									<h3>Radno vreme: ponedeljak - nedelja od 10h do 04:30h</h3>
								</div>
<?php							
							}else{
?>
						
<!---------------->
<!---P  I  C  E--->
<!---------------->
						<div id="wrapper">
							<div class="naslov"><em>Pice</em></div><!--kraj diva naslov-->
							
							<?php
								$upit = "select * from pice";
								
								$rez = $db_admin -> query($upit);
								
								While($pice = mysqli_fetch_object($rez)){
								if($pice -> stanje == 1){
							?>
							
							<div id="kutija">
								
								<div class="glava">
									
									<div class="naziv">
										<?php echo $pice -> naziv; ?>
									</div><!--kraj diva naziv-->
									
									<div class="cene">
										<ul>
											<li><?php echo "28cm - " . $pice -> v28cm;?></li>
											<li><?php echo "32cm - " . $pice -> v32cm;?></li>
											<li><?php echo "42cm - " . $pice -> v42cm;?></li>
											<li><?php echo "50cm - " . $pice -> v50cm;?></li>
										</ul>
									</div><!--kraj diva cene-->
								
								</div><!--kraj diva glava-->
								
								<div class="sadrzaj">
									
									<?php if($pice -> image == ""){
										
										echo "<img src='img/no_image.jpg' />";
									 
									 }else
										
										echo "<img src='img/slike/pice/" . $pice -> image . ".jpg' />";
									
									?>
									 
									<div class="opis">
										
										<?php echo $pice -> opis; ?>
									
									</div>
									
									<ul class="dugmici">
										<li><span class="pica_btn28" rel=".dodaci28_<?php echo $pice -> id; ?>">Naruči 28cm</span></li>
										<li><span class="pica_btn32" rel=".dodaci32_<?php echo $pice -> id; ?>">Naruči 32cm</span></li>
										<li><span class="pica_btn42" rel=".dodaci42_<?php echo $pice -> id; ?>">Naruči 42cm</span></li>
										<li><span class="pica_btn50" rel=".dodaci50_<?php echo $pice -> id; ?>">Naruči 50cm</span></li>										
									</ul>
								
								</div>
								
								<div class="dodaci">
								
									<div class="dodaci28 dodaci28_<?php echo $pice -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina pice 28cm"; ?></div>
											<div class="cena_proizvoda"><?php echo $pice -> v28cm . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="pice" />
										<input type="hidden" name="id" value="<?php echo $pice -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $pice -> naziv; ?>" />
										<input type="hidden" name="velicina_pice" value="28" />
										<input type="hidden" name="cena" value="<?php echo $pice -> v28cm; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
										
										
										<?php 
											$upit28 = "select * from dodaci28";
											$rez28 = $db_admin -> query($upit28);?>
											
											<input type="hidden" name="tabela_dodaci" value="dodaci28" />
											
											<div class="dodatak28">
												<?php if ($pice -> posno != Null){?>
												
												<h4>Izbor kačkavalja:</h4>
													<ul class="dodatak">
														<li><input class="pasta_radio" type="radio" name="izbor_kackavalja" value="Kačkavalj" /> Kačkavalj</li>
														<li><input class="pasta_radio" type="radio" name="izbor_kackavalja" value="Posni kačkavalj" /> Posni kačkavalj</li>
													</ul><br /><br />
												<?php }?>
												
												<h4>Dodaci:</h4>
											<?php while ($dodatak28 = mysqli_fetch_object($rez28)){
												
												if($pice->naziv == "VULKAN - punjena ivica" AND $dodatak28->naziv == "Punjena ivica"){
													
													continue;
													
												}else{
													if($dodatak28 -> stanje == 1){
													
													?>
														
														<ul class="dodatak">
															<li>
																<div class="naziv_dodatka">
																	<input type = "checkbox" name = "pica_dodaci[]" 
																	value="<?php echo $dodatak28 -> naziv; ?>" />
																	<?php echo " + " . $dodatak28 -> naziv; ?>
																</div>
																<div class="cena_dodatka">
																	<?php echo $dodatak28 -> cena; ?> din.
																</div>
															</li>
														</ul>
													<?php 
													}
														
												}
											}
													?>
													
												<div class="nastavak">
													
													<section>
														<div class="label">Napomena:</div><!--kraj diva label-->
														<div class="unos"><textarea name = "napomena"></textarea>
														</div><!--kraj diva unos-->
													</section>
													
													<section>
														<div class="label">Količina:</div><!--kraj diva label-->
														<div class="unos"><input id="kolicina" name="kolicina" type="number" 
														value="1" min="1" required aria-required="true">
														</div><!--kraj diva unos-->
													</section>
														
													<input class="submit" type="submit" name="submit" value="Naruči" />
													
												</div>
											
											</div>
										
										</form>
									</div>
									
									<div class="dodaci32 dodaci32_<?php echo $pice -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina pice 32cm"; ?></div>
											<div class="cena_proizvoda"><?php echo $pice -> v32cm . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="pice" />
										<input type="hidden" name="id" value="<?php echo $pice -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $pice -> naziv; ?>" />
										<input type="hidden" name="velicina_pice" value="32" />
										<input type="hidden" name="cena" value="<?php echo $pice -> v32cm; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
																				
										<?php 
											$upit32 = "select * from dodaci32";
											$rez32 = $db_admin -> query($upit32);?>
											
											<input type="hidden" name="tabela_dodaci" value="dodaci32" />
											
											<div class="dodatak32">
												<?php if ($pice -> posno != Null){?>
												
												<h4>Izbor kačkavalja:</h4>
													<ul class="dodatak">
														<li><input class="pasta_radio" type="radio" name="izbor_kackavalja" value="Kačkavalj" /> Kačkavalj</li>
														<li><input class="pasta_radio" type="radio" name="izbor_kackavalja" value="Posni kačkavalj" /> Posni kačkavalj</li>
													</ul><br /><br />
												<?php }?>	
													
												<h4>Dodaci:</h4>
											<?php while ($dodatak32 = mysqli_fetch_object($rez32)){
												
												if($pice->naziv == "VULKAN - punjena ivica" AND $dodatak32->naziv == "Punjena ivica"){
													
													continue;
													
												}else{
													
													if($dodatak32 -> stanje == 1){
													?>
														
														<ul class="dodatak">
															<li>
																<div class="naziv_dodatka">
																	<input type = "checkbox" name = "pica_dodaci[]" 
																	value="<?php echo $dodatak32 -> naziv; ?>" />
																	<?php echo " + " . $dodatak32 -> naziv; ?>
																</div>
																<div class="cena_dodatka">
																	<?php echo $dodatak32 -> cena; ?> din.
																</div>
															</li>
														</ul>
														
													<?php 
													}
														
												}
											}
													?>
													
												<div class="nastavak">
													
													<section>
														<div class="label">Napomena:</div><!--kraj diva label-->
														<div class="unos"><textarea name = "napomena"></textarea>
														</div><!--kraj diva unos-->
													</section>
													
													<section>
														<div class="label">Količina:</div><!--kraj diva label-->
														<div class="unos"><input id="kolicina" name="kolicina" type="number" 
														value="1" min="1" required aria-required="true">
														</div><!--kraj diva unos-->
													</section>
														
													<input class="submit" type="submit" name="submit" value="Naruči" />		
													
													
													
												</div>
											
											</div>
										
										</form>
									</div>
									
									<div class="dodaci42 dodaci42_<?php echo $pice -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina pice 42cm"; ?></div>
											<div class="cena_proizvoda"><?php echo $pice -> v42cm . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="pice" />
										<input type="hidden" name="id" value="<?php echo $pice -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $pice -> naziv; ?>" />
										<input type="hidden" name="velicina_pice" value="42" />
										<input type="hidden" name="cena" value="<?php echo $pice -> v42cm; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
										
										
										<?php 
											$upit42 = "select * from dodaci42";
											$rez42 = $db_admin -> query($upit42);?>
											
											<input type="hidden" name="tabela_dodaci" value="dodaci42" />
											
											<div class="dodatak42">
												
												<?php if ($pice -> posno != Null){?>
												
												<h4>Izbor kačkavalja:</h4>
													<ul class="dodatak">
														<li><input class="pasta_radio" type="radio" name="izbor_kackavalja" value="Kačkavalj" /> Kačkavalj</li>
														<li><input class="pasta_radio" type="radio" name="izbor_kackavalja" value="Posni kačkavalj" /> Posni kačkavalj</li>
													</ul><br /><br />
												<?php }?>
												
												<h4>Dodaci:</h4>
											<?php 
											
											while ($dodatak42 = mysqli_fetch_object($rez42)){
												
												if($pice->naziv == "VULKAN - punjena ivica" AND $dodatak42->naziv == "Punjena ivica"){
													
													continue;
													
												}else{
													if($dodatak42 -> stanje == 1){
													?>
														
														<ul class="dodatak">
															<li>
																<div class="naziv_dodatka">
																	<input type = "checkbox" name = "pica_dodaci[]" 
																	value="<?php echo $dodatak42 -> naziv; ?>" />
																	<?php echo " + " . $dodatak42 -> naziv; ?>
																</div>
																<div class="cena_dodatka">
																	<?php echo $dodatak42 -> cena; ?> din.
																</div>
															</li>
														</ul>
														
											<?php 
													}	
												}
											}?>
													
												<div class="nastavak">
													
													<section>
														<div class="label">Napomena:</div><!--kraj diva label-->
														<div class="unos"><textarea name = "napomena"></textarea>
														</div><!--kraj diva unos-->
													</section>
													
													<section>
														<div class="label">Količina:</div><!--kraj diva label-->
														<div class="unos"><input id="kolicina" name="kolicina" type="number" 
														value="1" min="1" required aria-required="true">
														</div><!--kraj diva unos-->
													</section>
														
													<input class="submit" type="submit" name="submit" value="Naruči" />		
													
													
													
												</div>
											
											</div>
										
										</form>
									</div>
																		
									<div class="dodaci50 dodaci50_<?php echo $pice -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina pice 50cm"; ?></div>
											<div class="cena_proizvoda"><?php echo $pice -> v50cm . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="pice" />
										<input type="hidden" name="id" value="<?php echo $pice -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $pice -> naziv; ?>" />
										<input type="hidden" name="velicina_pice" value="50" />
										<input type="hidden" name="cena" value="<?php echo $pice -> v50cm; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
										
										
										<?php 
											$upit50 = "select * from dodaci50";
											$rez50 = $db_admin -> query($upit50);?>
											
											<input type="hidden" name="tabela_dodaci" value="dodaci50" />
											
											<div class="dodatak50">
												
												<?php if ($pice -> posno != Null){?>
												
												<h4>Izbor kačkavalja:</h4>
													<ul class="dodatak">
														<li><input class="pasta_radio" type="radio" name="izbor_kackavalja" value="Kačkavalj" /> Kačkavalj</li>
														<li><input class="pasta_radio" type="radio" name="izbor_kackavalja" value="Posni kačkavalj" /> Posni kačkavalj</li>
													</ul><br /><br />
												<?php }?>
												
												<h4>Dodaci:</h4>
											<?php 
											
											while ($dodatak50 = mysqli_fetch_object($rez50)){
												
												if($pice->naziv == "VULKAN - punjena ivica" AND $dodatak50->naziv == "Punjena ivica"){
													
													continue;
													
												}else{
													if($dodatak50 -> stanje == 1){
													?>
														
														<ul class="dodatak">
															<li>
																<div class="naziv_dodatka">
																	<input type = "checkbox" name = "pica_dodaci[]" 
																	value="<?php echo $dodatak50 -> naziv; ?>" />
																	<?php echo " + " . $dodatak50 -> naziv; ?>
																</div>
																<div class="cena_dodatka">
																	<?php echo $dodatak50 -> cena; ?> din.
																</div>
															</li>
														</ul>
														
											<?php 
													}	
												}
											}?>
													
												<div class="nastavak">
													
													<section>
														<div class="label">Napomena:</div><!--kraj diva label-->
														<div class="unos"><textarea name = "napomena"></textarea>
														</div><!--kraj diva unos-->
													</section>
													
													<section>
														<div class="label">Količina:</div><!--kraj diva label-->
														<div class="unos"><input id="kolicina" name="kolicina" type="number" 
														value="1" min="1" required aria-required="true">
														</div><!--kraj diva unos-->
													</section>
														
													<input class="submit" type="submit" name="submit" value="Naruči" />		
													
													
													
												</div>
											
											</div>
										
										</form>
									</div>
									 
								</div><!--kraj diva dodaci-->
								
							</div><!--Kraj diva kontejner-->
							
								<?php } 
								} ?>
						
						</div><!--kraj diva wrapper-->

<!------------------->
<!---P  A  S  T  E--->
<!------------------->
						
						<div id="wrapper">
							<div class="naslov"><em>Paste</em></div><!--kraj diva naslov-->
							
							<?php
								$upit = "select * from paste";
								
								$rez = $db_admin -> query($upit);
								
								While($paste = mysqli_fetch_object($rez)){
									if($paste -> stanje == 1){
							?>
							
							<div id="kutija">
								
								<div class="glava">
									
									<div class="naziv">
										<em><?php echo $paste -> naziv; ?></em>
									</div><!--kraj diva naziv-->
									
									<div class="cene">
										<ul>
											<li class="paste"><?php echo "600g - " . $paste -> cena;?></li>
										</ul>
									</div><!--kraj diva cene-->
								
								</div><!--kraj diva glava-->
								
								<div class="sadrzaj">
									
									<?php
										
										echo "<img src='img/slike/paste/" . $paste -> image . ".jpg' />";
									
									?>
									
									<div class="opis">
										
										<?php echo $paste -> opis; ?>
									
									</div>
									
									<ul class="dugmici dugmici_ostali">
										<li><span class="paste" rel=".paste_<?php echo $paste -> id; ?>">Naruči</span></li>
									</ul>
									 
								</div><!--kraj diva sadrzaj-->
								
								<div class="dodaci">
								
									<div class="dodaci_za_paste paste_<?php echo $paste -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<input type="hidden" name="vrsta_proizvoda" value="paste" />
										<input type="hidden" name="id" value="<?php echo $paste -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $paste -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $paste -> cena; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
										
										
										<?php 
											$upit_paste = "select * from dodaci_za_paste";
											$rez_paste = $db_admin -> query($upit_paste);?>
											
											<input type="hidden" name="tabela_dodaci" value="dodaci_za_paste" />
											
											<div class="dodatak_za_paste">
												
												<section class="vrsta_paste">
													<h4>Vrsta paste:</h4>
														<ul class="dodatak">
															<li><input class="pasta_radio" type="radio" name="vrsta_paste" value="Pene" /> Pene</li>
															<li><input class="pasta_radio" type="radio" name="vrsta_paste" value="Fusili" /> Fusili</li>
															<li><input class="pasta_radio" type="radio" name="vrsta_paste" value="Špagete" /> Špagete</li>
														</ul><br /><br />
												</section>
												
										<?php if($paste -> naziv == "Pasta Frutti di mare"){?>

												<section class="vrsta_paste">
													<h4>Izbor sosa:</h4>
														<ul class="dodatak">
															<li><input class="pasta_radio" type="radio" name="izbor_sosa_paste" value="Paradajz" /> Paradajz sos</li>
															<li><input class="pasta_radio" type="radio" name="izbor_sosa_paste" value="Neutralna pavlaka" /> Neutralna pavlaka sos</li>
														</ul><br /><br />
												</section>
												
										<?php }?>
												
												<section class="vrsta_paste">
													<h4>Izbor pribor:</h4>
														<ul class="dodatak">
															<li><input class="pasta_radio" type="radio" name="izbor_pribor" value="Pribor" /> Pribor</li>
														</ul><br /><br />
												</section>
												
												<h4><em>Dodaci:</em></h4>
												
												<?php 
													$upit_dodaci_za_paste = "select * from dodaci_za_paste";
													$rez_dodaci_za_paste = $db_admin -> query ($upit_dodaci_za_paste);
													
													while ($dodatak = mysqli_fetch_object($rez_dodaci_za_paste)){
														if($dodatak -> stanje == 1){
														?>
														<ul class="dodatak">
															<li>
																<div class="naziv_dodatka">
																	<input type = "checkbox" name = "pasta_dodaci[]" 
																	value="<?php echo $dodatak -> naziv; ?>" />
																	<?php echo " + " . $dodatak -> naziv; ?>
																</div>
																<div class="cena_dodatka">
																	<?php echo $dodatak -> cena; ?> din.
																</div>
															</li>
														</ul>
														
												<?php
														}
													}
												?>
												
												
												
												
												
												<div class="nastavak">
													
													<section>
														<div class="label">Napomena:</div><!--kraj diva label-->
														<div class="unos"><textarea name = "napomena"></textarea>
														</div><!--kraj diva unos-->
													</section>
													
													<section>
														<div class="label">Količina:</div><!--kraj diva label-->
														<div class="unos"><input id="kolicina" name="kolicina" type="number" 
														value="1" min="1" required aria-required="true">
														</div><!--kraj diva unos-->
													</section>
														
													<input class="submit" type="submit" name="submit" value="Naruči" />		
													
													
													
												</div>
											
											</div>
										
										</form>
										
									</div>
									 
								</div><!--kraj diva dodaci-->
								
							</div><!--Kraj diva kontejner-->
							
								<?php }
								} ?>
						
						</div><!--kraj diva wrapper-->
						
<!------------------------------->
<!---R   O   S   T   I   L   J--->
<!------------------------------->
						
						<div id="wrapper">
							<div class="naslov"><em>Roštilj</em></div><!--kraj diva naslov-->
							
							<?php
								$upit = "select * from rostilj";
								
								$rez = $db_admin -> query($upit);
								
								While($rostilj = mysqli_fetch_object($rez)){
									if($rostilj -> stanje == 1){
							?>
							
							<div id="kutija">
								
								<div class="glava">
									
									<div class="naziv">
										<em><?php echo $rostilj -> naziv; ?></em>
									</div><!--kraj diva naziv-->
									
									<div class="cene">
										<ul>
											<li class="paste"><?php echo $rostilj -> cena;?></li>
										</ul>
									</div><!--kraj diva cene-->
								
								</div><!--kraj diva glava-->
								
								<div class="sadrzaj">
									
									<?php
										
										echo "<img src='img/slike/rostilj/" . $rostilj -> image . ".jpg' />";
									
									?>
									
									<div class="opis">
										
										<?php echo $rostilj -> opis; ?>
									
									</div>
									
									<ul class="dugmici dugmici_ostali">
										<li><span class="rostilj" rel=".rostilj_<?php echo $rostilj -> id; ?>">Naruči</span></li>
									</ul>
									 
								</div><!--kraj diva sadrzaj-->
								
								<div class="dodaci">
								
									<div class="rostilj_prilozi rostilj_<?php echo $rostilj -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<input type="hidden" name="vrsta_proizvoda" value="rostilj" />
										<input type="hidden" name="id" value="<?php echo $rostilj -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $rostilj -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $rostilj -> cena; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
										
										<h4><em>Dodaci:</em></h4>
												
										<?php 
											$upit_rostilj_prilozi = "select * from rostilj_prilozi order by cena desc";
											$rez_rostilj_prilozi = $db_admin -> query ($upit_rostilj_prilozi);?>
											
											<input type="hidden" name="tabela_dodaci" value="rostilj_prilozi" />
											
										<?php 					
											while ($dodatak = mysqli_fetch_object($rez_rostilj_prilozi)){
												if($dodatak -> stanje == 1){
												?>
												<ul class="dodatak">
													<li>
														<div class="naziv_dodatka">
															<input type = "checkbox" name = "rostilj_prilozi[]" 
															value="<?php echo $dodatak -> naziv; ?>" />
															<?php echo " + " . $dodatak -> naziv; ?>
														</div>
														<div class="cena_dodatka">
															<?php 
																if($dodatak -> cena != 0){
																	echo $dodatak -> cena." din.";
																} 
															?>
														</div>
													</li>
												</ul>
														
										<?php	
												}
											}
										?>
										<div class="nastavak">
													
											<section>
												<div class="label">Napomena:</div><!--kraj diva label-->
												<div class="unos"><textarea name = "napomena"></textarea>
												</div><!--kraj diva unos-->
											</section>
													
											<section>
												<div class="label">Količina:</div><!--kraj diva label-->
												<div class="unos"><input id="kolicina" name="kolicina" type="number" 
												value="1" min="1" required aria-required="true">
												</div><!--kraj diva unos-->
											</section>
														
											<input class="submit" type="submit" name="submit" value="Naruči" />		
													
													
													
										</div>
										
										</form>
										
									</div>
									 
								</div><!--kraj diva dodaci-->
								
							</div><!--Kraj diva kontejner-->
							
								<?php }
								} ?>
						
						</div><!--kraj diva wrapper-->

<!---------------------->
<!---S  A  L  A  T  E--->
<!---------------------->
						
						<div id="wrapper">
							<div class="naslov"><em>Salate</em></div><!--kraj diva naslov-->
							
							<?php
								$upit = "select * from salate";
								
								$rez = $db_admin -> query($upit);
								
								While($salate = mysqli_fetch_object($rez)){
									if($salate -> stanje == 1){
							?>
							
							<div id="kutija">
								
								<div class="glava">
									
									<div class="naziv">
										<em><?php echo $salate -> naziv; ?></em>
									</div><!--kraj diva naziv-->
									
									<div class="cene">
										<ul>
											<li class="paste"><?php echo $salate -> cena;?></li>
										</ul>
									</div><!--kraj diva cene-->
								
								</div><!--kraj diva glava-->
								
								<div class="sadrzaj">
								
									<?php
										
										echo "<img src='img/slike/salate/" . $salate -> image . ".jpg' />";
									
									?>
									
									<div class="opis">
										
										<?php echo $salate -> opis; ?>
									
									</div>
									
									<ul class="dugmici dugmici_ostali">
										<li><span class="salate" rel=".salate_<?php echo $salate -> id; ?>">Naruči</span></li>
									</ul>
									 
								</div><!--kraj diva sadrzaj-->
								
								<div class="dodaci">
								
									<div class="dodaci_za_salate salate_<?php echo $salate -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<input type="hidden" name="vrsta_proizvoda" value="salate" />
										<input type="hidden" name="id" value="<?php echo $salate -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $salate -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $salate -> cena; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
										
										<section class="vrsta_paste">
											<h4>Izbor pribor:</h4>
												<ul class="dodatak">
													<li><input class="pasta_radio" type="radio" name="izbor_pribor" value="Pribor" /> Pribor</li>
												</ul><br /><br />
										</section>										
										
										<div class="nastavak">
													
											<section>
												<div class="label">Napomena:</div><!--kraj diva label-->
												<div class="unos"><textarea name = "napomena"></textarea>
												</div><!--kraj diva unos-->
											</section>
													
											<section>
												<div class="label">Količina:</div><!--kraj diva label-->
												<div class="unos"><input id="kolicina" name="kolicina" type="number" 
												value="1" min="1" required aria-required="true">
												</div><!--kraj diva unos-->
											</section>
														
											<input class="submit" type="submit" name="submit" value="Naruči" />													
													
										</div>
										
										</form>
										
									</div>
									 
								</div><!--kraj diva dodaci-->
								
							</div><!--Kraj diva kontejner-->
							
								<?php }
								} ?>
						
						</div><!--kraj diva wrapper-->

<!---------------------------->
<!---S  E  N  D  V  I  C  I--->
<!---------------------------->
						
						<div id="wrapper">
							<div class="naslov"><em>Sendviči</em></div><!--kraj diva naslov-->
							
							<?php
								$upit = "select * from sendvici";
								
								$rez = $db_admin -> query($upit);
								
								While($sendvici = mysqli_fetch_object($rez)){
									if($sendvici -> stanje == 1){
							?>
							
							<div id="kutija">
								
								<div class="glava">
									
									<div class="naziv">
										<em><?php echo $sendvici -> naziv; ?></em>
									</div><!--kraj diva naziv-->
									
									<div class="cene">
										<ul>
											<li class="paste"><?php echo $sendvici -> cena;?></li>
										</ul>
									</div><!--kraj diva cene-->
								
								</div><!--kraj diva glava-->
								
								<div class="sadrzaj">
									
									<?php
										
										echo "<img src='img/slike/sendvici/" . $sendvici -> image . ".jpg' />";
									
									?>
									
									<div class="opis">
										
										<?php echo $sendvici -> opis; ?>
									
									</div>
									
									<ul class="dugmici dugmici_ostali">
										<li><span class="sendvici" rel=".sendvici_<?php echo $sendvici -> id; ?>">Naruči</span></li>
									</ul>
									 
								</div><!--kraj diva sadrzaj-->
								
								<div class="dodaci">
								
									<div class="sendvici_dodaci sendvici_<?php echo $sendvici -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<input type="hidden" name="vrsta_proizvoda" value="sendvici" />
										<input type="hidden" name="id" value="<?php echo $sendvici -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $sendvici -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $sendvici -> cena; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
											
											<div class="dodatak_za_sendvice">
											
												<?php if ($sendvici -> naziv == "Sendvič - lepinja" or $sendvici -> naziv == "Classic sendvič"){?>
												
												<section class="vrsta_paste">
													<h4>Nadev:</h4>
														<ul class="dodatak">
															<li><input class="pasta_radio" type="radio" name="nadev_sendvica" value="Kulen" /> Kulen</li>
															<li><input class="pasta_radio" type="radio" name="nadev_sendvica" value="Suvi vrat" /> Suvi vrat</li>
															<li><input class="pasta_radio" type="radio" name="nadev_sendvica" value="Pečenica" /> Pečenica</li>
															<li><input class="pasta_radio" type="radio" name="nadev_sendvica" value="Šunka" /> Šunka</li>
														</ul><br /><br /><br />
													<h4>Namazi:</h4>
												</section>												
												
												<ul class="dodatak">
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Kečap" /> Kečap
													</li>
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Kajmak" /> Kajmak
													</li>
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Pavlaka" /> Pavlaka
													</li>
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Majonez" /> Majonez
													</li>
												</ul><br />
												
												<?php 
												}else{?>
												
												<section class="vrsta_paste">
													<h4>Namazi:</h4>
												</section>												
												
												<ul class="dodatak">
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Kečap" /> Kečap
													</li>
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Kajmak" /> Kajmak
													</li>
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Pavlaka" /> Pavlaka
													</li>
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Majonez" /> Majonez
													</li>
												</ul>
												
												
												<?php 
												}
												?>
												<br /><br /><br />
												<?php if($sendvici -> naziv != "Pršut sendvič") echo "<h4><em>Dodaci:</em></h4>"?>
												
												<?php 
													$upit_dodaci_za_sendvice = "select * from dodaci_za_sendvice";
													$rez_dodaci_za_sendvice = $db_admin -> query ($upit_dodaci_za_sendvice);?>
													
													<input type="hidden" name="tabela_dodaci" value="dodaci_za_sendvice" />
													
												<?php 	
													while ($dodatak = mysqli_fetch_object($rez_dodaci_za_sendvice)){
														if($dodatak -> stanje == 1){
														if($sendvici -> naziv != "Pršut sendvič"){
															if($sendvici -> naziv == "Posni sendvič"){
																if($dodatak -> posno != null){?>
																	<ul class="dodatak">
																<li>
																	<div class="naziv_dodatka">
																		<input type = "checkbox" name = "sendvic_dodaci[]" 
																		value="<?php echo $dodatak -> naziv; ?>" />
																		<?php echo " + " . $dodatak -> naziv; ?>
																	</div>
																	<div class="cena_dodatka">
																		<?php 
																			if($dodatak -> cena != 0){
																				echo $dodatak -> cena." din.";
																			}
																		?>
																	</div>
																</li>
															</ul>
													<?php		}else continue;
															
															}else{
															?>
															<ul class="dodatak">
																<li>
																	<div class="naziv_dodatka">
																		<input type = "checkbox" name = "sendvic_dodaci[]" 
																		value="<?php echo $dodatak -> naziv; ?>" />
																		<?php echo " + " . $dodatak -> naziv; ?>
																	</div>
																	<div class="cena_dodatka">
																		<?php 
																			if($dodatak -> cena != 0){
																				echo $dodatak -> cena." din.";
																			} 
																		?>
																	</div>
																</li>
															</ul>
														
													<?php	}
														}
														}
													}
												?>
												
												<div class="nastavak">
													
													<section>
														<div class="label">Napomena:</div><!--kraj diva label-->
														<div class="unos"><textarea name = "napomena"></textarea>
														</div><!--kraj diva unos-->
													</section>
													
													<section>
														<div class="label">Količina:</div><!--kraj diva label-->
														<div class="unos"><input id="kolicina" name="kolicina" type="number" 
														value="1" min="1" required aria-required="true">
														</div><!--kraj diva unos-->
													</section>
														
													<input class="submit" type="submit" name="submit" value="Naruči" />		
													
													
													
												</div>
											
											</div>
										
										</form>
										
									</div>
									 
								</div><!--kraj diva dodaci-->
								
							</div><!--Kraj diva kontejner-->
							
								<?php }
								} ?>
						
						</div><!--kraj diva wrapper-->
						
<!-------------------------------------------->
<!---P  I  C  A      S  E  N  D  V  I  C  I--->
<!-------------------------------------------->
						
						<div id="wrapper">
							<div class="naslov"><em>Pica sendviči</em></div><!--kraj diva naslov-->
							
							<?php
								$upit = "select * from pica_sendvic";
								
								$rez = $db_admin -> query($upit);
								
								While($pica_sendvic = mysqli_fetch_object($rez)){
									if($pica_sendvic -> stanje == 1){
							?>
							
							<div id="kutija">
								
								<div class="glava">
									
									<div class="naziv">
										<em><?php echo $pica_sendvic -> naziv; ?></em>
									</div><!--kraj diva naziv-->
									
									<div class="cene">
										<ul>
											<li class="paste"><?php echo $pica_sendvic -> cena;?></li>
										</ul>
									</div><!--kraj diva cene-->
								
								</div><!--kraj diva glava-->
								
								<div class="sadrzaj">
									
									<?php
										
										echo "<img src='img/slike/pica_sendvici/" . $pica_sendvic -> image . ".jpg' />";
									
									?>
									
									<div class="opis">
										
										<?php echo $pica_sendvic -> opis; ?>
									
									</div>
									
									<ul class="dugmici dugmici_ostali">
										<li><span class="pica_sendvic" rel=".pica_sendvic_<?php echo $pica_sendvic -> id; ?>">Naruči</span></li>
									</ul>
									 
								</div><!--kraj diva sadrzaj-->
								
								<div class="dodaci">
								
									<div class="pica_sendvic_dodaci pica_sendvic_<?php echo $pica_sendvic -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<input type="hidden" name="vrsta_proizvoda" value="pica_sendvici" />
										<input type="hidden" name="id" value="<?php echo $pica_sendvic -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $pica_sendvic -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $pica_sendvic -> cena; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
										
										<h4><em>Dodaci:</em></h4>
												
										<?php 
											$upit_dodaci_za_sendvice = "select * from dodaci_za_sendvice";
											$rez_dodaci_za_sendvice = $db_admin -> query ($upit_dodaci_za_sendvice);?>
											
											<input type="hidden" name="tabela_dodaci" value="dodaci_za_sendvice" />
											
										<?php 					
											while ($dodatak = mysqli_fetch_object($rez_dodaci_za_sendvice)){
												if($dodatak -> stanje == 1){
												?>
												<ul class="dodatak">
													<li>
														<div class="naziv_dodatka">
															<input type = "checkbox" name = "sendvic_dodaci[]" 
															value="<?php echo $dodatak -> naziv; ?>" />
															<?php echo " + " . $dodatak -> naziv; ?>
														</div>
														<div class="cena_dodatka">
															<?php 
																if($dodatak -> cena != 0){
																	echo $dodatak -> cena." din.";
																} 
															?>
														</div>
													</li>
												</ul>
														
										<?php	
												}
											}
										?>
										<div class="nastavak">
													
											<section>
												<div class="label">Napomena:</div><!--kraj diva label-->
												<div class="unos"><textarea name = "napomena"></textarea>
												</div><!--kraj diva unos-->
											</section>
													
											<section>
												<div class="label">Količina:</div><!--kraj diva label-->
												<div class="unos"><input id="kolicina" name="kolicina" type="number" 
												value="1" min="1" required aria-required="true">
												</div><!--kraj diva unos-->
											</section>
														
											<input class="submit" type="submit" name="submit" value="Naruči" />		
													
													
													
										</div>
										
										</form>
										
									</div>
									 
								</div><!--kraj diva dodaci-->
								
							</div><!--Kraj diva kontejner-->
							
								<?php }
								} ?>
						
						</div><!--kraj diva wrapper-->
						
<!---------------------->
<!---O  S  T  A  L  O--->
<!---------------------->
						
						<div id="wrapper">
							<div class="naslov"><em>Ostalo</em></div><!--kraj diva naslov-->
							
							<?php
								$upit = "select * from ostalo";
								
								$rez = $db_admin -> query($upit);
								
								While($ostalo = mysqli_fetch_object($rez)){
									if($ostalo -> stanje == 1){
							?>
							
							<div id="kutija">
								
								<div class="glava">
									
									<div class="naziv">
										<em><?php echo $ostalo -> naziv; ?></em>
									</div><!--kraj diva naziv-->
									
									<div class="cene">
										
										<?php
											if($ostalo -> cena != 0){?>
												<ul>
													<li class="paste"><?php echo $ostalo -> cena; ?></li>
												</ul>
											<?php }else{
												if($ostalo -> v200g != 0 AND $ostalo -> v350g != 0){
													echo "
														<ul class='dva_elementa'>
															<li class='dvaelementa'> 200g - " . $ostalo -> v200g . "</li>
															<li class='dvaelementa'> 350g - " . $ostalo -> v350g . "</li>
														</ul>";
												}
												
												if($ostalo -> v400g != 0 AND $ostalo -> v600g != 0){
													echo "
														<ul class='dva_elementa'>
															<li class='dvaelementa'> 400g - " . $ostalo -> v400g . "</li>
															<li class='dvaelementa'> 600g - " . $ostalo -> v600g . "</li>
														</ul>";
												}
												
												if($ostalo -> v550g != 0 AND $ostalo -> v1000g != 0){
													echo "
														<ul class='dva_elementa'>
															<li class='dvaelementa'> 550g - " . $ostalo -> v550g . "</li>
															<li class='dvaelementa'> 1000g - " . $ostalo -> v1000g . "</li>
														</ul>";
												}
												
											}
										?>
									
									
									</div><!--kraj diva cene-->
									
								</div><!--kraj diva glava-->
								
								<div class="sadrzaj">
									
									<?php
										
										echo "<img src='img/slike/ostalo/" . $ostalo -> image . ".jpg' />";
									
									?>
									
									<div class="opis">
										
										<?php echo $ostalo -> opis; ?>
									
									</div>
									
									<ul class="dugmici dugmici_ostali">
										<?php if ($ostalo -> cena != 0) echo "<li><span class='ostalo' rel='.ostalo_" . $ostalo -> id . "'>Naruči</span></li>";?>
										<?php if ($ostalo -> v200g != 0) echo "<li><span class='ostalo' rel='.ostalo200g_" . $ostalo -> id . "'>Naruči 200g</span></li>";?>
										<?php if ($ostalo -> v350g != 0) echo "<li><span class='ostalo' rel='.ostalo350g_" . $ostalo -> id . "'>Naruči 350g</span></li>";?>
										<?php if ($ostalo -> v400g != 0) echo "<li><span class='ostalo' rel='.ostalo400g_" . $ostalo -> id . "'>Naruči 400g</span></li>";?>
										<?php if ($ostalo -> v550g != 0) echo "<li><span class='ostalo' rel='.ostalo550g_" . $ostalo -> id . "'>Naruči 550g</span></li>";?>
										<?php if ($ostalo -> v600g != 0) echo "<li><span class='ostalo' rel='.ostalo600g_" . $ostalo -> id . "'>Naruči 600g</span></li>";?>
										<?php if ($ostalo -> v1000g != 0) echo "<li><span class='ostalo' rel='.ostalo1000g_" . $ostalo -> id . "'>Naruči 1000g</span></li>";?>
									</ul>
									 
								</div><!--kraj diva sadrzaj-->
								
								<div class="dodaci">
								
									<div class="ostalo_dodaci ostalo_<?php echo $ostalo -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<input type="hidden" name="vrsta_proizvoda" value="ostalo" />
										<input type="hidden" name="id" value="<?php echo $ostalo -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $ostalo -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $ostalo -> cena; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
										
													
											<?php if ($ostalo -> naziv == "Slane zapečene palačinke"){?>
												
												<section class="vrsta_paste">
													<h4>Nadev:</h4>
														<ul class="dodatak">
															<li><input class="pasta_radio" type="radio" name="nadev_sendvica" value="Kulen" /> Kulen</li>
															<li><input class="pasta_radio" type="radio" name="nadev_sendvica" value="Suvi vrat" /> Suvi vrat</li>
															<li><input class="pasta_radio" type="radio" name="nadev_sendvica" value="Pečenica" /> Pečenica</li>
															<li><input class="pasta_radio" type="radio" name="nadev_sendvica" value="Šunka" /> Šunka</li>
														</ul><br /><br /><br />
													<h4>Namazi:</h4>
												</section>												
												
												<ul class="dodatak">
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Urnebes" /> Urnebes
													</li>
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Pavlaka" /> Pavlaka
													</li>
													<li class="naziv_dodatka">
														<input class="pasta_radio" type="radio" name = "namazi_sendvica" value="Majonez" /> Majonez
													</li>
												</ul><br />
												
												<?php 
												}elseif ($ostalo -> naziv == "Piletina u sosu"){?>
												
												<section class="vrsta_sosa">
													<h4>Izbor sosa:</h4>
														<ul class="dodatak">
															<li><input class="sos_radio" type="radio" name="vrsta_sosa" value="Gorgonzola sos" /> Gorgonzola sos</li>
															<li><input class="sos_radio" type="radio" name="vrsta_sosa" value="Kari sos" /> Kari sos</li>
															<li><input class="sos_radio" type="radio" name="vrsta_sosa" value="Pečurke sos" /> Pečurke sos</li>
															<li><input class="sos_radio" type="radio" name="vrsta_sosa" value="Četiri vrste sira" /> Četiri vrste sira</li>
														</ul>
												</section>
												
											<?php }elseif($ostalo -> naziv == "Pomfrit"){?>
												
												<section class="vrsta_sosa">
													<h4>Prilozi:</h4>
														<ul class="dodatak">
															<li>
																<div class="naziv_dodatka">
																	<input type = "checkbox" name = "pomfrit_dodatak[]" 
																	value="Kečap" /> Kečap</div>
																<div class="cena_dodatka">17.00 din.</div>
															</li>
															
															<li>
																<div class="naziv_dodatka">
																	<input type = "checkbox" name = "pomfrit_dodatak[]" 
																	value="Majonez" /> Majonez</div>
																<div class="cena_dodatka">17.00 din.</div>
															</li>
														</ul>
												</section>
												
											<?php }elseif($ostalo -> naziv == "Slane zapečene palačinke - 2 kom"){?>
												
												<section class="vrsta_sosa">
													<h4>Nadev:</h4>
														<ul class="dodatak">
															<li><input class="sos_radio" type="radio" name="vrsta_nadeva" value="Kulen" /> Kulen</li>
															<li><input class="sos_radio" type="radio" name="vrsta_nadeva" value="Suvi vrat" /> Suvi vrat</li>
															<li><input class="sos_radio" type="radio" name="vrsta_nadeva" value="Pečenica" /> Pečenica</li>
															<li><input class="sos_radio" type="radio" name="vrsta_nadeva" value="Šunka" /> Šunka</li>
														</ul><br /><br />
												</section>
												
												<section class="vrsta_sosa">
													<h4>Namaz:</h4>
														<ul class="dodatak">
															<li><input class="sos_radio" type="radio" name="vrsta_namaza" value="Urnebes" /> Urnebes</li>
															<li><input class="sos_radio" type="radio" name="vrsta_namaza" value="Pavlaka" /> Pavlaka</li>
														</ul>
												</section>
												
											<?php }?>
											
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									
									<div class="ostalo_dodaci ostalo200g_<?php echo $ostalo -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 200g"; ?></div>
											<div class="cena_proizvoda"><?php echo $ostalo -> v200g . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="ostalo" />
										<input type="hidden" name="velicina_porcije" value="200 grama" />
										<input type="hidden" name="id" value="<?php echo $ostalo -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $ostalo -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $ostalo -> v200g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									
									<div class="ostalo_dodaci ostalo350g_<?php echo $ostalo -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 350g"; ?></div>
											<div class="cena_proizvoda"><?php echo $ostalo -> v350g . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="ostalo" />
										<input type="hidden" name="velicina_porcije" value="350 grama" />
										<input type="hidden" name="id" value="<?php echo $ostalo -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $ostalo -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $ostalo -> v350g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									
									<div class="ostalo_dodaci ostalo400g_<?php echo $ostalo -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 400g"; ?></div>
											<div class="cena_proizvoda"><?php echo $ostalo -> v400g . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="ostalo" />
										<input type="hidden" name="velicina_porcije" value="400 grama" />
										<input type="hidden" name="id" value="<?php echo $ostalo -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $ostalo -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $ostalo -> v400g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									
									<div class="ostalo_dodaci ostalo550g_<?php echo $ostalo -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 550g"; ?></div>
											<div class="cena_proizvoda"><?php echo $ostalo -> v550g . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="ostalo" />
										<input type="hidden" name="velicina_porcije" value="550 grama" />
										<input type="hidden" name="id" value="<?php echo $ostalo -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $ostalo -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $ostalo -> v550g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									
									<div class="ostalo_dodaci ostalo600g_<?php echo $ostalo -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 600g"; ?></div>
											<div class="cena_proizvoda"><?php echo $ostalo -> v600g . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="ostalo" />
										<input type="hidden" name="velicina_porcije" value="600 grama" />
										<input type="hidden" name="id" value="<?php echo $ostalo -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $ostalo -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $ostalo -> v600g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									
									<div class="ostalo_dodaci ostalo1000g_<?php echo $ostalo -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 1000g"; ?></div>
											<div class="cena_proizvoda"><?php echo $ostalo -> v1000g . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="ostalo" />
										<input type="hidden" name="velicina_porcije" value="1000 grama" />
										<input type="hidden" name="id" value="<?php echo $ostalo -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $ostalo -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $ostalo -> v1000g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									 
								</div><!--kraj diva dodaci-->
								
							</div><!--Kraj diva kontejner-->
							
								<?php }
								} ?>
						
						</div><!--kraj diva wrapper-->
						
<!------------------------->
<!---D  E  S  E  R  T  I--->
<!------------------------->
						
						<div id="wrapper">
							<div class="naslov"><em>Deserti</em></div><!--kraj diva naslov-->
							
							<?php
								$upit = "select * from deserti";
								
								$rez = $db_admin -> query($upit);
								
								While($deserti = mysqli_fetch_object($rez)){
									if($deserti -> stanje == 1){
							?>
							
							<div id="kutija">
							
								<div class="glava">
									
									<div class="naziv">
										<em><?php echo $deserti -> naziv; ?></em>
									</div><!--kraj diva naziv-->
									
									<div class="cene">
										<?php
											if($deserti -> cena != 0){?>
												<ul>
													<li class="paste"><?php echo $deserti -> cena; ?></li>
												</ul>
											<?php }else{
												if($deserti -> v250g != 0 AND $deserti -> v400g != 0){
													echo "
														<ul class='dva_elementa'>
															<li class='dvaelementa'> 250g - " . $deserti -> v250g . "</li>
															<li class='dvaelementa'> 400g - " . $deserti -> v400g . "</li>
														</ul>";
												}
												
												if($deserti -> v300g != 0 AND $deserti -> v500g != 0){
													echo "
														<ul class='dva_elementa'>
															<li class='dvaelementa'> 300g - " . $deserti -> v300g . "</li>
															<li class='dvaelementa'> 500g - " . $deserti -> v500g . "</li>
														</ul>";
												}
												
											}
										?>
									
									</div><!--kraj diva cene-->
								
								</div><!--kraj diva glava-->
								
								<div class="sadrzaj">
									
									<?php
										
										echo "<img src='img/slike/deserti/" . $deserti -> image . ".jpg' />";
									
									?>
									
									<div class="opis">
										
										<?php echo $deserti -> opis; ?>
									
									</div>
									
									<ul class="dugmici dugmici_ostali">
										<?php if ($deserti -> cena != 0) echo "<li><span class='deserti' rel='.deserti_" . $deserti -> id . "'>Naruči</span></li>";?>
										<?php if ($deserti -> v250g != 0) echo "<li><span class='deserti' rel='.deserti250g_" . $deserti -> id . "'>Naruči 250g</span></li>";?>
										<?php if ($deserti -> v300g != 0) echo "<li><span class='deserti' rel='.deserti300g_" . $deserti -> id . "'>Naruči 300g</span></li>";?>
										<?php if ($deserti -> v400g != 0) echo "<li><span class='deserti' rel='.deserti400g_" . $deserti -> id . "'>Naruči 400g</span></li>";?>
										<?php if ($deserti -> v500g != 0) echo "<li><span class='deserti' rel='.deserti500g_" . $deserti -> id . "'>Naruči 500g</span></li>";?>
									</ul>
									 
								</div><!--kraj diva sadrzaj-->
								
								<div class="dodaci">
								
									<div class="deserti_dodaci deserti_<?php echo $deserti -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<input type="hidden" name="vrsta_proizvoda" value="deserti" />
										<input type="hidden" name="id" value="<?php echo $deserti -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $deserti -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $deserti -> cena; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<?php if(strpos($deserti -> naziv, "Palačinka") === False){?>
											
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
											
											<?php }else{?>
												<section class="vrsta_sosa">
													<h4>Dodaci za palačinke:</h4>
												</section>
												
												<?php 
												
												$upit_palacinke = "select * from dodaci_za_palacinke";
												$rez_palacinke = $db_admin -> query($upit_palacinke);
												
												?>
												
												<input type="hidden" name="tabela_dodaci" value="dodaci_za_palacinke" />
												
												<?php
												
												while($palacinka = mysqli_fetch_object($rez_palacinke)){
													if($palacinka -> stanje == 1){
													?>
													
												<div class="dodaci_za_palacinke">
												
													<ul class="dodatak">
														<li>
															<div class="naziv_dodatka">
																<input type = "checkbox" name = "palacinka_dodaci[]" 
																value="<?php echo $palacinka -> naziv; ?>" />
																<?php echo " + " . $palacinka -> naziv; ?>
															</div>
															<div class="cena_dodatka">
																<?php echo $palacinka -> cena; ?> din.
															</div>
														</li>
													</ul>
												</div>			
													
												<?php 
													}
												}?>
												
												<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
												
												
											<?php }?>
										
										</form>
									</div>
									
									<div class="deserti_dodaci deserti250g_<?php echo $deserti -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 250g"; ?></div>
											<div class="cena_proizvoda"><?php echo $deserti -> v250g . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="deserti" />
										<input type="hidden" name="velicina_porcije" value="250 grama" />
										<input type="hidden" name="id" value="<?php echo $deserti -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $deserti -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $deserti -> v250g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									
									<div class="deserti_dodaci deserti300g_<?php echo $deserti -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 300g"; ?></div>
											<div class="cena_proizvoda"><?php echo $deserti -> v300g . " din."; ?></div>
										</section>
										
										<section class="vrsta_sosa">
											<h4>Zahtev:</h4>
											<ul class="dodatak">
												<li><input class="sos_radio" type="checkbox" name="muskatni_orah" value="Muskatni orah" /> Muskatni orah</li>
											</ul>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="deserti" />
										<input type="hidden" name="velicina_porcije" value="300 grama" />
										<input type="hidden" name="id" value="<?php echo $deserti -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $deserti -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $deserti -> v300g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									
									<div class="deserti_dodaci deserti400g_<?php echo $deserti -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 400g"; ?></div>
											<div class="cena_proizvoda"><?php echo $deserti -> v400g . " din."; ?></div>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="deserti" />
										<input type="hidden" name="velicina_porcije" value="400 grama" />
										<input type="hidden" name="id" value="<?php echo $deserti -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $deserti -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $deserti -> v400g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />		
														
											</div>
										
										</form>
									</div>
									
									<div class="deserti_dodaci deserti500g_<?php echo $deserti -> id; ?>">
										
										<form action="korpa.php" method="post">
										
										<section class="proizvod">
											<div class="naziv_proizvoda"><?php echo "Odabrana veličina porcije 500g"; ?></div>
											<div class="cena_proizvoda"><?php echo $deserti -> v500g . " din."; ?></div>
										</section>
										
										<section class="vrsta_sosa">
											<h4>Zahtev:</h4>
											<ul class="dodatak">
												<li><input class="sos_radio" type="checkbox" name="muskatni_orah" value="Muskatni orah" /> Muskatni orah</li>
											</ul>
										</section>
										
										<input type="hidden" name="vrsta_proizvoda" value="deserti" />
										<input type="hidden" name="velicina_porcije" value="500 grama" />
										<input type="hidden" name="id" value="<?php echo $deserti -> id; ?>" />
										<input type="hidden" name="naziv" value="<?php echo $deserti -> naziv; ?>" />
										<input type="hidden" name="cena" value="<?php echo $deserti -> v500g; ?>" />
										<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													
											<div class="nastavak">
													
												<section>
													<div class="label">Napomena:</div><!--kraj diva label-->
													<div class="unos"><textarea name = "napomena"></textarea>
													</div><!--kraj diva unos-->
												</section>
													
												<section>
													<div class="label">Količina:</div><!--kraj diva label-->
													<div class="unos"><input id="kolicina" name="kolicina" type="number" 
													value="1" min="1" required aria-required="true">
													</div><!--kraj diva unos-->
												</section>
														
												<input class="submit" type="submit" name="submit" value="Naruči" />
														
											</div>
										
										</form>
									</div>
									 
								</div><!--kraj diva dodaci-->
								
							</div><!--Kraj diva kontejner-->
							
								<?php }
								} ?>
						
						</div><!--kraj diva wrapper-->

<!------------------------->
<!---N  A  P  I  T  C  I--->
<!------------------------->
						
						<div id="wrapper">
							<div class="naslov"><em>Pića</em></div><!--kraj diva naslov-->
							
							<?php
								$upit = "select * from napitci";
								
								$rez = $db_admin -> query($upit);
								
								While($napitci = mysqli_fetch_object($rez)){
									
									if($napitci -> stanje == 1){
							?>
							
							<div id="kutija">
							
								<div class="glava">
									
									<div class="naziv">
										<em><?php echo $napitci -> naziv; ?></em>
									</div><!--kraj diva naziv-->
								
								</div><!--kraj diva glava-->
								
								<div class="sadrzaj_napitka">
									
									<?php

									if($napitci -> naziv != "Nektar sok"){
										if($napitci -> limenka != 0){?>
											<form action="korpa.php" method="post">
											
												<div class="napitak">	
													<input type="hidden" name="vrsta_proizvoda" value="napitci" />
													<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />												
													<?php if($napitci -> naziv != "Guarana"){?>
													<section class="velicina_napitka">Limenka</section>
													<input type="hidden" name="naziv" value="<?php echo $napitci -> naziv;?>" />
													<input type="hidden" name="velicina_porcije" value="Limenka" />
													<?php }else{?>
													<section class="velicina_napitka">Limenka 0,25l</section>
													<input type="hidden" name="naziv" value="<?php echo $napitci -> naziv;?>" />
													<input type="hidden" name="velicina_porcije" value="Limenka 0,25l" />
													<?php }?>
													<section class="cena_napitka"><?php echo $napitci -> limenka . " din."; ?></section>
													<input type="hidden" name="cena" value="<?php echo $napitci -> limenka; ?>" />
													<section class="kolicina">Količina: <input type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
													<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
												</div><!--kraj diva napitak-->
											</form>	
										<?php
										}
										
										if ($napitci -> v0_5l != 0){?>
											<form action="korpa.php" method="post">
											
												<div class="napitak">
													<input type="hidden" name="vrsta_proizvoda" value="napitci" />
													<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													<input type="hidden" name="naziv" value="<?php echo $napitci -> naziv;?>" />
													<input type="hidden" name="velicina_porcije" value="0,5l" />
													<input type="hidden" name="cena" value="<?php echo $napitci -> v0_5l; ?>" />
													<section class="velicina_napitka">0.5l</section>
													<section class="cena_napitka"><?php echo $napitci -> v0_5l . " din."; ?></section>
													<section class="kolicina">Količina: <input type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
													<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
												</div><!--kraj diva napitak-->
											</form>	
										<?php
										}
										
										if ($napitci -> v1l != 0){?>
											<form action="korpa.php" method="post">
											
												<div class="napitak">
													<input type="hidden" name="vrsta_proizvoda" value="napitci" />
													<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													<input type="hidden" name="naziv" value="<?php echo $napitci -> naziv;?>" />
													<input type="hidden" name="velicina_porcije" value="1l" />
													<input type="hidden" name="cena" value="<?php echo $napitci -> v1l; ?>" />
													<section class="velicina_napitka">1l</section>
													<section class="cena_napitka"><?php echo $napitci -> v1l . " din."; ?></section>
													<section class="kolicina">Količina: <input type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
													<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
												</div><!--kraj diva napitak-->
											</form>	
										<?php
										}
										
										if ($napitci -> v1_5l != 0){?>
											<form action="korpa.php" method="post">
											
												<div class="napitak">
													<input type="hidden" name="vrsta_proizvoda" value="napitci" />
													<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													<input type="hidden" name="naziv" value="<?php echo $napitci -> naziv;?>" />
													<input type="hidden" name="velicina_porcije" value="1,5l" />
													<input type="hidden" name="cena" value="<?php echo $napitci -> v1_5l; ?>" />
													<section class="velicina_napitka">1.5l</section>
													<section class="cena_napitka"><?php echo $napitci -> v1_5l . " din."; ?></section>
													<section class="kolicina">Količina: <input type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
													<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
												</div><!--kraj diva napitak-->
											</form>
										<?php
										}
										
										if ($napitci -> v2l != 0){?>
											<form action="korpa.php" method="post">
											
												<div class="napitak">
													<input type="hidden" name="vrsta_proizvoda" value="napitci" />
													<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
													<input type="hidden" name="naziv" value="<?php echo $napitci -> naziv;?>" />
													<input type="hidden" name="velicina_porcije" value="2l" />
													<input type="hidden" name="cena" value="<?php echo $napitci -> v2l; ?>" />
													<section class="velicina_napitka">2l</section>
													<section class="cena_napitka"><?php echo $napitci -> v2l . " din."; ?></section>
													<section class="kolicina">Količina: <input class="kolicina" 
													type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
													<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
												</div><!--kraj diva napitak-->
											</form>	
										<?php
										}
									}else{?>
										<form action="korpa.php" method="post">
											<div class="napitak">
												<input type="hidden" name="vrsta_proizvoda" value="napitci" />
												<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
												<input type="hidden" name="naziv" value="Nektar - jabuka" />
												<input type="hidden" name="velicina_porcije" value="1l" />
												<input type="hidden" name="cena" value="<?php echo $napitci -> v1l; ?>" />
												<section class="velicina_napitka">Jabuka 1l</section>
												<section class="cena_napitka"><?php echo $napitci -> v1l . " din."; ?></section>
												<section class="kolicina">Količina: <input type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
												<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
											</div><!--kraj diva napitak-->
										</form>
										
										<form action="korpa.php" method="post">
											<div class="napitak">
												<input type="hidden" name="vrsta_proizvoda" value="napitci" />
												<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
												<input type="hidden" name="naziv" value="Nektar - jagoda" />
												<input type="hidden" name="velicina_porcije" value="1l" />
												<input type="hidden" name="cena" value="<?php echo $napitci -> v1l; ?>" />
												<section class="velicina_napitka">Jagoda 1l</section>
												<section class="cena_napitka"><?php echo $napitci -> v1l . " din."; ?></section>
												<section class="kolicina">Količina: <input type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
												<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
											</div><!--kraj diva napitak-->
										</form>
										
										<form action="korpa.php" method="post">
											<div class="napitak">
												<input type="hidden" name="vrsta_proizvoda" value="napitci" />
												<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
												<input type="hidden" name="naziv" value="Nektar - kajsija" />
												<input type="hidden" name="velicina_porcije" value="1l" />
												<input type="hidden" name="cena" value="<?php echo $napitci -> v1l; ?>" />
												<section class="velicina_napitka">Kajsija 1l</section>
												<section class="cena_napitka"><?php echo $napitci -> v1l . " din."; ?></section>
												<section class="kolicina">Količina: <input type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
												<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
											</div><!--kraj diva napitak-->
										</form>
										
										<form action="korpa.php" method="post">
											<div class="napitak">
												<input type="hidden" name="vrsta_proizvoda" value="napitci" />
												<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
												<input type="hidden" name="naziv" value="Nektar - breskva" />
												<input type="hidden" name="velicina_porcije" value="1l" />
												<input type="hidden" name="cena" value="<?php echo $napitci -> v1l; ?>" />
												<section class="velicina_napitka">Breskva 1l</section>
												<section class="cena_napitka"><?php echo $napitci -> v1l . " din."; ?></section>
												<section class="kolicina">Količina: <input type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
												<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
											</div><!--kraj diva napitak-->
										</form>
										
										<form action="korpa.php" method="post">
											<div class="napitak">
												<input type="hidden" name="vrsta_proizvoda" value="napitci" />
												<input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
												<input type="hidden" name="naziv" value="Nektar - pomorandža" />
												<input type="hidden" name="velicina_porcije" value="1l" />
												<input type="hidden" name="cena" value="<?php echo $napitci -> v1l; ?>" />
												<section class="velicina_napitka">Pomorandža 1l</section>
												<section class="cena_napitka"><?php echo $napitci -> v1l . " din."; ?></section>
												<section class="kolicina">Količina: <input type="number" name="kolicina" value="1" min="1" required aria-required="true"/></section>
												<section class="potvrdi"><input class="submit" type="submit" name="submit" value="Naruči" /></section>
											</div><!--kraj diva napitak-->
										</form>
										
										
									<?php 
									}
										?>
									
									 
								</div><!--kraj diva sadrzaj_napitka-->
								
							</div><!--Kraj diva kutija-->
							
								<?php 
								}
								} 
								
								?>
						
						</div><!--kraj diva wrapper-->
<?php 
					}
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
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('.dodaci>div').hide();
				$('.dugmici span').click(function(){
					var target = $(this).attr("rel");
					$(target).slideToggle('slow');					
					$('.dodaci>div').not(target).hide('slow');
				});
			});
		</script>

	</body>
</html>