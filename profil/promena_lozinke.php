<?php
	session_start();
	include "../db/db_kontakt.php";	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Promena lozinke - Pizzeria Di Marco</title>
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
									$password = $user -> lozinka;
									
									goto kraj;
																		
								}
								
							}
						kraj: 
						
						if($_POST["submit"]){
							
							if($_POST["password"] == $password){
								
								if($_POST["newpassword"] == $_POST["passrpt"]){
									
									$sql = "update users set lozinka='$_POST[newpassword]' where id='$id'";
									
									if($db_users -> query($sql)){?>
		
										<div class="recenica">Vaša lozinka je uspešno promenjena.
										<br /><br />
										<a href="../sajt/dostava.php">Naruči</a></div>
		
									<?php goto footer;}else{?>
		
										<div class="recenica">Došlo je do greške pri promeni lozinke.
										<br /><br />
										<a href="promena_lozinke_forma.php">Probajte ponovo</a></div>
		
									<?php goto footer;}
									
								}else{?>
		
									<div class="recenica">Vaša potvrda lozinke nije uspela.
									<br /><br />
									<a href="promena_lozinke_forma.php">Probajte ponovo</a></div>
		
								<?php goto footer;}
								
							}else{?>
		
								<div class="recenica">Pogrešili ste staru lozinku.
								<br /><br />
								<a href="promena_lozinke_forma.php">Probajte ponovo</a></div>
		
							<?php goto footer;}
							
						}
						footer: ?>
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