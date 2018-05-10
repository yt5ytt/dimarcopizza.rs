<?php
	session_start();
	include "../db/db_kontakt.php";	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Brisanje profila - Pizzeria Di Marco</title>
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
							<li class="brisanje"><a href="promena_podataka.php">OBRIŠI PROFIL</a></li>
						</ul>
					</nav>
				
					<div id="glavno">
					
						<div class="recenica">Da li ste sigurni da želite da obrišete vaš profil?<br /><br />
						<a href="obrisan.php" class="obrisan">Obriši</a></div>
					
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