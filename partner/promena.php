<?php
	session_start();
	include "../db/db_kontakt.php";
	if(@$_SESSION["korisnik"] == "administrator"){
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Promena cena - Pizzeria Di Marco</title>
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
					<img src="img/favicon.png" /> <em>Promena cena</em>
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
					<li><a href="dodavanje.php?selected=pice">Dodavanje proizvoda</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="stranica">Promena cena</a></li>
					<li><a href="pauziranje.php">Pauziranje proizvoda</a></li>
					<li><a href="knjiga_utisaka.php">Knjiga utisaka</a></li>
					<li><a href="dodavanje_slika.php">Dodavanje slika</a></li>
				</ul>
			</nav>
		
		
		<?php
			}
		?>
			
			
			
			<div id="glavno">
				<section id="sidebar">
					<ul class="podmeni">
						<li><a>Pice</a>
<?php 
							$upit = "select * from pice";
							$rez = $db_admin -> query($upit);
							while($pice = mysqli_fetch_object($rez)){
?>
								<ul class="submeni">
									<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=pice
												&naziv=<?php echo $pice -> naziv; ?>">
										<?php echo $pice -> naziv; ?></a></li>
								</ul>
<?php
							}
?>
						</li>
						<li><a>Paste</a>
<?php 
							$upit = "select * from paste";
							$rez = $db_admin -> query($upit);
							while($paste = mysqli_fetch_object($rez)){
?>
								<ul class="submeni">
									<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=paste
												&naziv=<?php echo $paste -> naziv; ?>">
										<?php echo $paste -> naziv; ?></a></li>
								</ul>
<?php
							}
?>
						</li>
						<li><a>Roštilj</a>
<?php 
							$upit = "select * from rostilj";
							$rez = $db_admin -> query($upit);
							while($rostilj = mysqli_fetch_object($rez)){
?>
								<ul class="submeni">
									<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=rostilj
												&naziv=<?php echo $rostilj -> naziv; ?>">
										<?php echo $rostilj -> naziv; ?></a></li>
								</ul>
<?php
							}
?>
						</li>
						<li><a>Salate</a>
<?php 
							$upit = "select * from salate";
							$rez = $db_admin -> query($upit);
							while($salate = mysqli_fetch_object($rez)){
?>
								<ul class="submeni">
									<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=salate
												&naziv=<?php echo $salate -> naziv; ?>">
										<?php echo $salate -> naziv; ?></a></li>
								</ul>
<?php
							}
?>
						</li>
						<li><a>Sendviči</a>
<?php 
							$upit = "select * from sendvici";
							$rez = $db_admin -> query($upit);
							while($sendvici = mysqli_fetch_object($rez)){
?>
								<ul class="submeni">
									<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=sendvici
												&naziv=<?php echo $sendvici -> naziv; ?>">
										<?php echo $sendvici -> naziv; ?></a></li>
								</ul>
<?php
							}
?>
						</li>
						<li><a>Pica sendviči</a>
<?php 
							$upit = "select * from pica_sendvic";
							$rez = $db_admin -> query($upit);
							while($pica_sendvic = mysqli_fetch_object($rez)){
?>
								<ul class="submeni">
									<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=pica_sendvic
												&naziv=<?php echo $pica_sendvic -> naziv; ?>">
										<?php echo $pica_sendvic -> naziv; ?></a></li>
								</ul>
<?php
							}
?>
						</li>
						<li><a>Ostalo</a>
<?php 
							$upit = "select * from ostalo";
							$rez = $db_admin -> query($upit);
							while($ostalo = mysqli_fetch_object($rez)){
?>
								<ul class="submeni">
									<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=ostalo
												&naziv=<?php echo $ostalo -> naziv; ?>">
										<?php echo $ostalo -> naziv; ?></a></li>
								</ul>
<?php
							}
?>						
						</li>
						<li><a>Deserti</a>
<?php 
							$upit = "select * from deserti";
							$rez = $db_admin -> query($upit);
							while($deserti = mysqli_fetch_object($rez)){
?>
								<ul class="submeni">
									<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=deserti
												&naziv=<?php echo $deserti -> naziv; ?>">
										<?php echo $deserti -> naziv; ?></a></li>
								</ul>
<?php
							}
?>						
						</li>
						<li><a>Dodaci</a>
							<ul class="submeni">
								<li>
									<a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=dodaci28&naziv=Dodaci za picu 28cm">
										Dodaci za pice 28cm</a>
								</li>
								<li>
									<a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=dodaci32&naziv=Dodaci za picu 32cm">
										Dodaci za pice 32cm</a>
								</li>
								<li>
									<a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=dodaci42&naziv=Dodaci za picu 42cm">
										Dodaci za pice 42cm</a>
								</li>
								<li>
									<a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=dodaci50&naziv=Dodaci za picu 50cm">
										Dodaci za pice 50cm</a>
								</li>
								<li>
									<a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=dodaci_za_paste&naziv=Dodaci za paste">
										Dodaci za paste</a>
								</li>
								<li>
									<a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=dodaci_za_sendvice&naziv=Dodaci za sendviče">
										Dodaci za sendviče</a>
								</li>
								<li>
									<a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=rostilj_prilozi&naziv=Prilozi za roštilj">
										Prilozi za roštilj</a>
								</li>
								<li>
									<a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=dodaci_za_palacinke&naziv=Dodaci za palačinke">
										Dodaci za palačinke</a>
								</li>
							</ul>
						</li>
						<li><a>Pića</a>
<?php 
							$upit = "select * from napitci";
							$rez = $db_admin -> query($upit);
							while($napitci = mysqli_fetch_object($rez)){
?>
								<ul class="submeni">
									<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=napitci
												&naziv=<?php echo $napitci -> naziv; ?>">
										<?php echo $napitci -> naziv; ?></a></li>
								</ul>
<?php
							}
?>						
						</li>
					</ul>
				</section><!--kraj sekcije sidebar-->
				
				<section id="wrapper">
<?php
				if(@$_GET["tabela"] == "dodaci28" or 
				@$_GET["tabela"] == "dodaci32" or 
				@$_GET["tabela"] == "dodaci42" or 
				@$_GET["tabela"] == "dodaci50" or 
				@$_GET["tabela"] == "dodaci_za_paste" or 
				@$_GET["tabela"] == "dodaci_za_palacinke" or 
				@$_GET["tabela"] == "dodaci_za_sendvice" or 
				@$_GET["tabela"] == "rostilj_prilozi"){
					
					$tabela = $_GET["tabela"];
					$naziv = $_GET["naziv"];
?>
					<div class="naslov">
<?php					
						echo "<h1>" . $naziv . "</h1>";
?>
					</div>
					
					<div class="proizvodi">
						<form action="update_cena.php" method="post">
						<table>
							<tr>
								<th width="40%">Proizvod</th>
								<th width="20%">Trenutna cena</th>
								<th width="20%">Nova cena</th>
							</tr>
<?php
						$upit = "select * from $tabela";
						$rez = $db_admin -> query($upit);
						while($obj = mysqli_fetch_object($rez)){
?>
							<tr>
								<td><?php echo $obj -> naziv; ?></td>
								<td align="center"><?php echo $obj -> cena; ?></td>
								<input type="hidden" name="id[]" value="<?php echo $obj -> id; ?>" />
								<input type="hidden" name="proizvod[<?php echo $obj -> id; ?>]" value="<?php echo $obj -> naziv; ?>" />
								<td align="center"><input class="nova_cena" type="text" 
													name="nova_cena[<?php echo $obj -> id; ?>]"/></td>
								<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
								<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
							</tr>
<?php					
						}?>
						
						</table>
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						</form>
					</div>
<?php
				}elseif(@$_GET["tabela"] == "pice"){
					
					$tabela = "pice";
					$naziv = $_GET["naziv"];
					
					$upit = "select * from pice where naziv='$naziv'";
					$rez = $db_admin -> query($upit);
?>
					<div class="naslov">
<?php					
						echo "<h1>" . $naziv . "</h1>";
?>					
					</div>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="35%">OPIS</th>
								<th width="10%">28cm</th>
								<th width="10%">32cm</th>
								<th width="10%">42cm</th>
								<th width="10%">50cm</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td><?php echo $obj -> opis; ?></td>
								<td align="center"><?php echo $obj -> v28cm; ?></td>
								<td align="center"><?php echo $obj -> v32cm; ?></td>
								<td align="center"><?php echo $obj -> v42cm; ?></td>
								<td align="center"><?php echo $obj -> v50cm; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><textarea class="opis" type="textarea" name="opis"></textarea></td>
								<td><input class="nova_cena" type="text" name="v28cm" /></td>
								<td><input class="nova_cena" type="text" name="v32cm" /></td>
								<td><input class="nova_cena" type="text" name="v42cm" /></td>
								<td><input class="nova_cena" type="text" name="v50cm" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
					
				}elseif(@$_GET["tabela"] == "paste" or
						@$_GET["tabela"] == "salate" or
						@$_GET["tabela"] == "rostilj" or
						@$_GET["tabela"] == "sendvici" or
						@$_GET["tabela"] == "pica_sendvic"){
					
					$tabela = $_GET["tabela"];
					$naziv = $_GET["naziv"];
					
					$upit = "select * from $tabela where naziv='$naziv'";
					$rez = $db_admin -> query($upit);
?>
					<div class="naslov">
<?php					
						echo "<h1>" . $naziv . "</h1>";
?>					
					</div>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="35%">OPIS</th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%">CENA</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td><?php echo $obj -> opis; ?></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"><?php echo $obj -> cena; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><textarea class="opis" type="textarea" name="opis"></textarea></td>
								<td></td>
								<td></td>
								<td></td>
								<td><input class="nova_cena" type="text" name="cena" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
					
				}elseif(@$_GET["tabela"] == "ostalo"){
					
					$tabela = $_GET["tabela"];
					$naziv = $_GET["naziv"];
					
					$upit = "select * from $tabela where naziv='$naziv'";
					$rez = $db_admin -> query($upit);
?>
					<div class="naslov">
<?php					
						echo "<h1>" . $naziv . "</h1>";
?>					
					</div>
<?php 
					if($naziv == "Italijanski đevrek"){
?>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="35%">OPIS</th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%">550g</th>
								<th width="10%">1000g</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td><?php echo $obj -> opis; ?></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"><?php echo $obj -> v550g; ?></td>
								<td align="center"><?php echo $obj -> v1000g; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><textarea class="opis" type="textarea" name="opis"></textarea></td>
								<td></td>
								<td></td>
								<td><input class="nova_cena" type="text" name="v550g" /></td>
								<td><input class="nova_cena" type="text" name="v1000g" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
					}elseif($naziv == "Lazanje Bolognese"){
?>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="35%">OPIS</th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%">400g</th>
								<th width="10%">600g</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td><?php echo $obj -> opis; ?></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"><?php echo $obj -> v400g; ?></td>
								<td align="center"><?php echo $obj -> v600g; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><textarea class="opis" type="textarea" name="opis"></textarea></td>
								<td></td>
								<td></td>
								<td><input class="nova_cena" type="text" name="v400g" /></td>
								<td><input class="nova_cena" type="text" name="v600g" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
					}elseif($naziv == "Pohovani kačkavalj"){
?>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="35%">OPIS</th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%">200g</th>
								<th width="10%">350g</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td><?php echo $obj -> opis; ?></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"><?php echo $obj -> v200g; ?></td>
								<td align="center"><?php echo $obj -> v350g; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><textarea class="opis" type="textarea" name="opis"></textarea></td>
								<td></td>
								<td></td>
								<td><input class="nova_cena" type="text" name="v200g" /></td>
								<td><input class="nova_cena" type="text" name="v350g" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
					}else{
?>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="35%">OPIS</th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%">CENA</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td><?php echo $obj -> opis; ?></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"><?php echo $obj -> cena; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><textarea class="opis" type="textarea" name="opis"></textarea></td>
								<td></td>
								<td></td>
								<td></td>
								<td><input class="nova_cena" type="text" name="cena" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
					}
					
				}elseif(@$_GET["tabela"] == "deserti"){
					
					$tabela = $_GET["tabela"];
					$naziv = $_GET["naziv"];
					
					$upit = "select * from $tabela where naziv='$naziv'";
					$rez = $db_admin -> query($upit);
?>
					<div class="naslov">
<?php					
						echo "<h1>" . $naziv . "</h1>";
?>					
					</div>
<?php 
					if($naziv == "Voćna salata"){
?>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="35%">OPIS</th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%">250g</th>
								<th width="10%">400g</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td><?php echo $obj -> opis; ?></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"><?php echo $obj -> v250g; ?></td>
								<td align="center"><?php echo $obj -> v400g; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><textarea class="opis" type="textarea" name="opis"></textarea></td>
								<td></td>
								<td></td>
								<td><input class="nova_cena" type="text" name="v250g" /></td>
								<td><input class="nova_cena" type="text" name="v400g" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
					}elseif($naziv == "Žito sa šlagom i orasima"){
?>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="35%">OPIS</th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%">300g</th>
								<th width="10%">500g</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td><?php echo $obj -> opis; ?></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"><?php echo $obj -> v300g; ?></td>
								<td align="center"><?php echo $obj -> v500g; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><textarea class="opis" type="textarea" name="opis"></textarea></td>
								<td></td>
								<td></td>
								<td><input class="nova_cena" type="text" name="v300g" /></td>
								<td><input class="nova_cena" type="text" name="v500g" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
					}else{
?>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="35%">OPIS</th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%"></th>
								<th width="10%">CENA</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td><?php echo $obj -> opis; ?></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"></td>
								<td align="center"><?php echo $obj -> cena; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><textarea class="opis" type="textarea" name="opis"></textarea></td>
								<td></td>
								<td></td>
								<td></td>
								<td><input class="nova_cena" type="text" name="cena" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
					}
					
				}elseif(@$_GET["tabela"] == "napitci"){
					
					$tabela = $_GET["tabela"];
					$naziv = $_GET["naziv"];
					
					$upit = "select * from $tabela where naziv='$naziv'";
					$rez = $db_admin -> query($upit);
?>
					<div class="naslov">
<?php					
						echo "<h1>" . $naziv . "</h1>";
?>					
					</div>
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="10%">Limenka</th>
								<th width="10%">0,5l</th>
								<th width="10%">1l</th>
								<th width="10%">1,5l</th>
								<th width="10%">2l</th>						
							</tr>
<?php					
					while($obj = mysqli_fetch_object($rez)){
						
						$id = $obj -> id;
?>
							<tr>
								<td align="center"><?php echo $obj -> limenka; ?></td>
								<td align="center"><?php echo $obj -> v0_5l; ?></td>
								<td align="center"><?php echo $obj -> v1l; ?></td>
								<td align="center"><?php echo $obj -> v1_5l; ?></td>
								<td align="center"><?php echo $obj -> v2l; ?></td>
							</tr>
<?php						
					}
?>
							<form action="update_cena.php" method="post">
							
								<tr>
								<td><input class="nova_cena" type="text" name="limenka" /></td>
								<td><input class="nova_cena" type="text" name="v0_5l" /></td>
								<td><input class="nova_cena" type="text" name="v1l" /></td>
								<td><input class="nova_cena" type="text" name="v1_5l" /></td>
								<td><input class="nova_cena" type="text" name="v2l" /></td>								
								</tr>
								
						</table>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						<input type="hidden" name="tabela" value="<?php echo $tabela; ?>" />								
						<input type="hidden" name="naziv" value="<?php echo $naziv; ?>" />
						
						<input class="promeni" type="submit" name="submit" value="Promeni" />
						
						</form>
					</div><!--kraj diva proizvodi-->
<?php
				}
?>				
				</section><!--kraj sekcije wrapper-->
										
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

<?php 
	}
?>