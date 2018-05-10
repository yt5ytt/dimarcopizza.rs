<?php
	session_start();
	include "../db/db_kontakt.php";
	if(@$_SESSION["korisnik"] == "administrator"){
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Knjiga utisaka - Pizzeria Di Marco</title>
		<meta charset="utf-8" />
		<!--<meta http-equiv="refresh" content="10" />-->
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
					<img src="img/favicon.png" /> <em>Knjiga utisaka</em>
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
					<li><a href="promena.php">Promena cena</a></li>
					<li><a href="pauziranje.php">Pauziranje proizvoda</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="stranica">Knjiga utisaka</a></li>
					<li><a href="dodavanje_slika.php">Dodavanje slika</a></li>
				</ul>
			</nav>
		
		
		<?php
			}
			
			$id_knjige = @$_GET["id"];
			
			$query = "delete from knjiga_utisaka where id=$id_knjige";
			
			$db_admin -> query($query);
		?>
			
			
			
			<div id="glavno">
				
				<div id="porudzbine">
					
					<section id="naslov">
						<div class="rb">Redni broj</div>
						<div class="date">Datum</div>
						<div class="ime">Ime</div>
						<div class="tekst">Tekst</div>
						<div class="obrisi"></div>
					</section>
					
		<?php 
					$rb = 0;
					$upit = "select * from knjiga_utisaka order by datum desc";
					$rez = $db_admin -> query($upit);
					
					while($obj = mysqli_fetch_object($rez)){
						$rb++;
						$tmp = explode("-", $obj -> datum);
						$datum = $tmp[2] . "." . $tmp[1] . "." . $tmp[0];
		?>
					
					
						<section id="ostatak">
							<div class="rb"><?php echo $rb; ?></div>
							<div class="date"><?php echo $datum; ?></div>
							<div class="ime"><?php echo $obj -> ime; ?></div>
							<div class="tekst"><?php echo $obj -> tekst; ?></div>
							<div class="obrisi">
								<a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $obj -> id; ?>">Obriši</a>
							</div>
						</section>
		
		<?php
					}
		?>
				
				</div><!--kraj diva porudzbine-->
			</div><!-- zavrsetak diva glavno-->
		</div><!--zavrsetak diva container-->
		
		<?php
			}
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

	<?php }
	?>