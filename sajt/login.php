<?php
	session_start();
	include "../db/db_kontakt.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login - Pizzeria Di Marco</title>
		<meta charset="utf-8" />
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="../css/animation.css" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="icon" type="img/png" href="img/favicon.png">
	</head>
	<body>
	<div class="snowing">
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

						<?php

							$email = $_POST["email"];
							$password = $_POST["password"];

							$upit = "select * from users";

							$rez = $db_admin -> query($upit);

							while ($login = mysqli_fetch_object($rez)){

								if($email != $login -> email){

									continue;

								}elseif($email == $login -> email){

									if($password == $login -> lozinka){

										$_SESSION["email"] = $login -> email;?>

										<div class="recenica">Dobrodošli <em><?php echo $login -> ime;?></em>.
										Uspešno ste se ulogovali.<br /><br />
										<a href="dostava.php">Naručite</a></div>

									<?php
										goto footer;
									}else{?>

										<div class="recenica">Uneli ste pogrešnu lozinku<br /><br />
										<a href="login-forma.php">Probajte ponovo</a></div>

									<?php

										goto footer;
									}?>

							<?php }

							}?>

							<div class="recenica">Ne postoji korisnik sa tom email adresom.
							<br /><br />
							<a href="login-forma.php">Probajte ponovo</a></div>

							<?php footer:;?>

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
	</div>
	</body>



</html>
