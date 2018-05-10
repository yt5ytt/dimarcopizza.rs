<?php
	session_start();
	include "../db/db_kontakt.php";
	if(@$_SESSION["korisnik"] == "administrator"){
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pauziranje proizvoda - Pizzeria Di Marco</title>
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
					<img src="img/favicon.png" /> <em>Pauziranje proizvoda</em>
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
					<li><a href="korisnici.php">Korisnici</a></li>
					<li><a href="dodavanje.php?selected=pice">Dodavanje proizvoda</a></li>
					<li><a href="promena.php">Promena cena</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="stranica">Pauziranje proizvoda</a></li>
					<li><a href="knjiga_utisaka.php">Knjiga utisaka</a></li>
					<li><a href="dodavanje_slika.php">Dodavanje slika</a></li>
				</ul>
			</nav>			
			
			<div id="glavno">
				
				<section id="sidebar">
					<ul class="podmeni">
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=pice">Pice</a></li>
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=paste">Paste</a></li>
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=rostilj">Roštilj</a></li>
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=salate">Salate</a></li>
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=sendvici">Sendviči</a></li>
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=pica_sendvic">Pica sendviči</a></li>
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=ostalo">Ostalo</a></li>
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=deserti">Deserti</a></li>
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=dodaci">Dodaci</a></li>
						<li><a href="<?php echo $_SERVER["PHP_SELF"]?>?tabela=napitci">Pića</a></li>
					</ul>
				</section><!--kraj sekcije sidebar-->
				
				<section id="wrapper">
					
					<div class="kategorija">
					
					<div class="naslov">
			<?php		if(@$_GET['tabela'] == "paste")	{
							echo "<h1>P A S T E</h1>";
						}elseif(@$_GET['tabela'] == "rostilj")	{
							echo "<h1>R O Š T I Lj</h1>";
						}elseif(@$_GET['tabela'] == "salate")	{
							echo "<h1>S A L A T E</h1>";
						}elseif(@$_GET['tabela'] == "sendvici")	{
							echo "<h1>S E N D V I Č I</h1>";
						}elseif(@$_GET['tabela'] == "pica_sendvic")	{
							echo "<h1>P I C A &nbsp S E N D V I Č I</h1>";
						}elseif(@$_GET['tabela'] == "ostalo")	{
							echo "<h1>O S T A L O</h1>";
						}elseif(@$_GET['tabela'] == "deserti")	{
							echo "<h1>D E S E R T I</h1>";
						}elseif(@$_GET['tabela'] == "dodaci")	{
							echo "<h1>D O D A C I</h1>";
						}elseif(@$_GET['tabela'] == "napitci")	{
							echo "<h1>P I Ć A</h1>";
						}else{
							echo "<h1>P I C E</h1>";
						}
			?>
					</div><!--kraj diva naslov-->
					
					<div class="proizvodi">
						<table>
							<tr>
								<th width="60%">Proizvod</th>
								<th width="10%"></th>
							</tr>
							
		<?php
					if(@$_GET['tabela'] == "dodaci"){
						
						$upit1 = "select * from dodaci28";
						$rez1 = $db_admin -> query($upit1);
						$niz1 = array();	
						while($obj1 = mysqli_fetch_object($rez1)){		
							array_push($niz1, $obj1 -> naziv);				
						}
	
						$upit2 = "select * from dodaci32";
						$rez2 = $db_admin -> query($upit2);	
						$niz2 = array();	
						while($obj2 = mysqli_fetch_object($rez2)){		
							if($obj2 -> naziv == "Dva jajeta"){
								$obj2 -> naziv = "Jaje";
							}elseif($obj2 -> naziv == "Tri jajeta"){
								$obj2 -> naziv = "Jaje";
							}		
							array_push($niz2, $obj2 -> naziv);				
						}
	
						$upit3 = "select * from dodaci42";
						$rez3 = $db_admin -> query($upit3);	
						$niz3 = array();	
						while($obj3 = mysqli_fetch_object($rez3)){		
							if($obj3 -> naziv == "Dva jajeta"){
								$obj3 -> naziv = "Jaje";
							}elseif($obj3 -> naziv == "Tri jajeta"){
								$obj3 -> naziv = "Jaje";
							}		
							array_push($niz3, $obj3 -> naziv);				
						}
	
						$upit4 = "select * from dodaci50";
						$rez4 = $db_admin -> query($upit4);	
						$niz4 = array();	
						while($obj4 = mysqli_fetch_object($rez4)){		
							if($obj4 -> naziv == "Dva jajeta"){
								$obj4 -> naziv = "Jaje";
							}elseif($obj4 -> naziv == "Tri jajeta"){
								$obj4 -> naziv = "Jaje";
							}		
							array_push($niz4, $obj4 -> naziv);				
						}
	
						$upit5 = "select * from dodaci_za_paste";
						$rez5 = $db_admin -> query($upit5);	
						$niz5 = array();	
						while($obj5 = mysqli_fetch_object($rez5)){		
							array_push($niz5, $obj5 -> naziv);				
						}
	
						$upit6 = "select * from dodaci_za_sendvice";
						$rez6 = $db_admin -> query($upit6);	
						$niz6 = array();	
						while($obj6 = mysqli_fetch_object($rez6)){		
							if($obj6 -> naziv == "Ekstra kačkavalj"){			
								$obj6 -> naziv = "Kačkavalj";			
							}		
							array_push($niz6, $obj6 -> naziv);				
						}
	
						$upit7 = "select * from rostilj_prilozi";
						$rez7 = $db_admin -> query($upit7);	
						$niz7 = array();	
						while($obj7 = mysqli_fetch_object($rez7)){		
							array_push($niz7, $obj7 -> naziv);				
						}
	
						$upit8 = "select * from dodaci_za_palacinke";
						$rez8 = $db_admin -> query($upit8);	
						$niz8 = array();	
						while($obj8 = mysqli_fetch_object($rez8)){		
							array_push($niz8, $obj8 -> naziv);				
						}
	
						$jedinstveni_niz = array_unique(array_merge($niz1, $niz2, $niz3, $niz4, $niz5, $niz6, $niz7, $niz8));
						
						foreach($jedinstveni_niz as $dodatak){
		?>							
							<tr>
								<td><?php echo $dodatak; ?></td>
		<?php
									$upit1 = "select * from dodaci28 where naziv='$dodatak'";
									$rez1 = $db_admin -> query($upit1);
									while($obj1 = mysqli_fetch_object($rez1)){
										$stanje1 = $obj1 -> stanje;
										$stanje = $stanje1;
									}
									
									if($dodatak == "Jaje"){
										$upit2_1 = "select * from dodaci32 where naziv='Jaje'";
										$rez2_1 = $db_admin -> query($upit2_1);
										while($obj2_1 = mysqli_fetch_object($rez2_1)){
											$stanje2_1 = $obj2_1 -> stanje;
										}
										$upit2_2 = "select * from dodaci32 where naziv='Dva jajeta'";
										$rez2_2 = $db_admin -> query($upit2_2);
										while($obj2_2 = mysqli_fetch_object($rez2_2)){
											$stanje2_2 = $obj2_2 -> stanje;
										}
										if($stanje2_1 == $stanje2_2){
											$stanje2 = $stanje2_1;
											$stanje = $stanje2;
										}
									}
									$upit2 = "select * from dodaci32 where naziv='$dodatak'";
									$rez2 = $db_admin -> query($upit2);
									while($obj2 = mysqli_fetch_object($rez2)){
										$stanje2 = $obj2 -> stanje;
										$stanje = $stanje2;
									}
									
									if($dodatak == "Jaje"){
										$upit3_1 = "select * from dodaci42 where naziv='Jaje'";
										$rez3_1 = $db_admin -> query($upit3_1);
										while($obj3_1 = mysqli_fetch_object($rez3_1)){
											$stanje3_1 = $obj3_1 -> stanje;
										}
										$upit3_2 = "select * from dodaci42 where naziv='Dva jajeta'";
										$rez3_2 = $db_admin -> query($upit3_2);
										while($obj3_2 = mysqli_fetch_object($rez3_2)){
											$stanje3_2 = $obj3_2 -> stanje;
										}
										if($stanje3_1 == $stanje3_2){
											$stanje3 = $stanje3_1;
											$stanje = $stanje3;
										}
									}
									$upit3 = "select * from dodaci42 where naziv='$dodatak'";
									$rez3 = $db_admin -> query($upit3);
									while($obj3 = mysqli_fetch_object($rez3)){
										$stanje3 = $obj3 -> stanje;
										$stanje = $stanje3;
									}
									
									if($dodatak == "Jaje"){
										$upit4_1 = "select * from dodaci50 where naziv='Tri jajeta'";
										$rez4_1 = $db_admin -> query($upit4_1);
										while($obj4_1 = mysqli_fetch_object($rez4_1)){
											$stanje4_1 = $obj4_1 -> stanje;
										}
										$upit4_2 = "select * from dodaci50 where naziv='Dva jajeta'";
										$rez4_2 = $db_admin -> query($upit4_2);
										while($obj4_2 = mysqli_fetch_object($rez4_2)){
											$stanje4_2 = $obj4_2 -> stanje;
										}
										if($stanje4_1 == $stanje4_2){
											$stanje4 = $stanje4_1;
											$stanje = $stanje4;
										}
									}
									$upit4 = "select * from dodaci50 where naziv='$dodatak'";
									$rez4 = $db_admin -> query($upit4);
									while($obj4 = mysqli_fetch_object($rez4)){
										$stanje4 = $obj4 -> stanje;
										$stanje = $stanje4;
									}
									
									$upit5 = "select * from dodaci_za_paste where naziv='$dodatak'";
									$rez5 = $db_admin -> query($upit5);
									while($obj5 = mysqli_fetch_object($rez5)){
										$stanje5 = $obj5 -> stanje;
										$stanje = $stanje5;
									}
									
									if($dodatak == "Kačkavalj"){
										$dodatak = "Ekstra kačkavalj";
									}
									$upit6 = "select * from dodaci_za_sendvice where naziv='$dodatak'";
									$rez6 = $db_admin -> query($upit6);
									while($obj6 = mysqli_fetch_object($rez6)){
										$stanje6 = $obj6 -> stanje;
										$stanje = $stanje6;
									}
									
									$upit7 = "select * from rostilj_prilozi where naziv='$dodatak'";
									$rez7 = $db_admin -> query($upit7);
									while($obj7 = mysqli_fetch_object($rez7)){
										$stanje7 = $obj7 -> stanje;
										$stanje = $stanje7;
									}
									
									$upit8 = "select * from dodaci_za_palacinke where naziv='$dodatak'";
									$rez8 = $db_admin -> query($upit8);
									while($obj8 = mysqli_fetch_object($rez8)){
										$stanje8 = $obj8 -> stanje;
										$stanje = $stanje8;
									}
									
									if($stanje == 1){
		?>
										<td class="dugme">
											<a class="iskljuci" href="update_pauza.php?stanje=0&
											naziv=<?php echo $dodatak; ?>&tabela=dodaci">Isključi</a>
										</td>
		<?php	
									}else{
		?>
										<td class="dugme">
											<a class="ukljuci" href="update_pauza.php?stanje=1&
											naziv=<?php echo $dodatak; ?>&tabela=dodaci">Uključi</a>
										</td>
		<?php	
									}
		?>
							</tr>
		<?php					
						}
					}else{
						
						if(@$_GET['tabela'] == ""){
							$_GET['tabela'] = "pice";
						}
						
						$tabela = $_GET['tabela'];
						
						$upit = "select * from $tabela";
						$rezultat = $db_admin -> query($upit);
						while($rez = mysqli_fetch_object($rezultat)){
		?>							
							<tr>
								<td><?php echo $rez -> naziv; ?></td>
		<?php
									if($rez -> stanje == 1){
		?>
										<td class="dugme">
											<a class="iskljuci" href="update_pauza.php?stanje=0&
											id=<?php echo $rez -> id; ?>&tabela=<?php echo $tabela?>">Isključi</a>
										</td>
		<?php	
									}else{
		?>
										<td class="dugme">
											<a class="ukljuci" href="update_pauza.php?stanje=1&
											id=<?php echo $rez -> id; ?>&tabela=<?php echo $tabela?>">Uključi</a>
										</td>
		<?php	
									}
		?>
							</tr>
		<?php
								}
					}
		?>
							
						</table>
					</div><!--kraj diva proizvodi-->
				</div><!--kraj diva kategorija-->
					
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
		
		<?php
			}
		?>
	
	</body>



</html>

	<?php }
	?>