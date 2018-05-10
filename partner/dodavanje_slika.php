<?php
	session_start();
	include "../db/db_kontakt.php";
	if(@$_SESSION["korisnik"] == "administrator"){
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dodavanje slika - Pizzeria Di Marco</title>
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
					<img src="img/favicon.png" /> <em>Dodavanje slika</em>
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
					<li><a href="knjiga_utisaka.php">Knjiga utisaka</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="stranica">Dodavanje slika</a></li>
				</ul>
			</nav>
		
		
		<?php
			}
		?>
			
			
			
			<div id="glavno">
				
<?php 
			if(@$_POST["dodaj_sliku"]){
				
				$file_name = @$_FILES["slika"]["name"];
				$velicina = @$_FILES["slika"]["size"];
				$temp_name = @$_FILES["slika"]["tmp_name"];
				
				if(@$file_name){
					
					move_uploaded_file($temp_name, "img/galerija/$file_name");
					
					$query = "insert into galerija (naziv, velicina) values ('$file_name', '$velicina')";
					$rez = $db_admin -> query($query);
					
				}
			}
?>				
				<form id="dodavanje_slike" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
				
					<input class="dodaj_sliku" type="file" name="slika" />
					<input class="submit" type="submit" name="dodaj_sliku" value="Dodaj sliku" />				
				
				</form>
<?php 
				
				if(@$rez){
?>
				<div id="potvrda">
					<h3>Slika uspešno dodata</h3>
				</div>

<?php
				}
?>
				<div id="gallery">

<?php
				$upit = "select * from galerija";
				$rezultat = $db_admin -> query($upit);
				
?>
					<a name="gallery"></a>
<?php
				
				while($obj = mysqli_fetch_object($rezultat)){

?>		
					<ul>
						<li>
							<a class="obrisi_sliku"href="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $obj -> id; ?>"> &times </a>
							<a class="fancybox" rel="group" href="img/galerija/<?php echo $obj -> naziv; ?>" 
							title="Pizzeria Di Marco"><img src="img/galerija/<?php echo $obj -> naziv; ?>" /></a>
						</li>
					</ul>	
<?php 
				}
				
				if(@$_GET["id"]){
					
					$podatak = $db_admin -> query("select * from galerija where id='$_GET[id]'");
					
					while($delete = mysqli_fetch_object($podatak)){
						
						$id = $delete -> id;
						$ime_fajla = $delete -> naziv;
						$db_admin -> query("delete from galerija where id=$id");
						
						unlink("img/galerija/$ime_fajla");
						header("Location: dodavanje_slika.php");
					}
				}
?>					
				</div>
				
			</div><!-- zavrsetak diva glavno-->
		</div><!--zavrsetak diva container-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
		 $('span.nav_btn').click(function (){
			 $('span.nav_btn').css("border-bottom", "1px dotted hsla(345, 100%, 16%, 0.8)");
			 $('ul.nav').toggle('fast');
		 })
		
		</script>
		
		<!-- Add jQuery library -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

		<!-- Add fancyBox -->
		<link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		</script>
	
	</body>



</html>

	<?php }
	?>