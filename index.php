<?php
	session_start();
	include "db/db_kontakt.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Pizzeria Di Marco - online naručivanje</title>

		<meta name="keywords" content="dostava, donesi, pica, pizza, dimarco, di marco,
									   brza hrana, piće, pice, picerija, pizzeria, hrana" />
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
		<meta name="author" content="Aleksandar Šafranec, yt5ytt@gmail.com, +381605991001" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/animation.css" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="icon" type="img/png" href="img/favicon.png">

	</head>
	<body>
		<!-- <div class="snowing"> -->

		<div id="jelka">
			<img src="img/jelka.gif" />
		</div>

		<div id="dedaMraz">
			<img src="img/dedaMraz.gif" />
		</div>

		<div id="container">
			<header>
				<div id="login">
					<div id="naruci">

						<?php
							if(!@$_SESSION["email"]){

							echo "<h4>Da biste naručili, morate se ulogovati</h4>";

						}else{

							echo "<a href='sajt/dostava.php' class='naruci'>Naruči</a>";

						}

						?>

					</div><!--zavrsetak diva naruci-->
					<div id="reglog">

						<?php

							if(!@$_SESSION["email"]){

							echo "<ul>
									<li><a href='sajt/registracija-forma.php'>Registracija</a></li>
									<li><a href='sajt/login-forma.php'>Uloguj se</a></li>
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
											<a href='profil/index.php' class='plavodugme'>Profil</a>
											<a href='sajt/logout.php' class='crvenodugme'>Izloguj se</a><br />
										  </div><!--kraj diva dobrodosli-->";

								}

							}

						}

						?>
					</div><!--zavrsetak diva reglog-->
				</div><!--zavrsetak diva login-->
				<div id="headline"><img src="img/favicon.png" /><br />
					<h2>Pizzeria</h2>
					<h1>Di Marco</h1>
					<h3>Poručite telefonom <em>na brojeve</em></h3>
					<h3>011/29-94-706 i 065/85-85-550</h3><br />
					<p>Veliki izbor pica, špageta, sendviča, lazanja, salata, slanih i slatkih palačinki</p>
				</div><!--zavrsetak diva headline-->
				<nav>

					<span class="nav_btn">Glavni meni</span>

					<ul class="nav">
						<li><a href="#"><em>NASLOVNA<em></a></li>
						<li><a href="sajt/meni.php">MENI</a></li>
						<li><a href="sajt/dostava.php">DOSTAVA</a></li>
						<li><a href="sajt/galerija.php">GALERIJA</a></li>
						<li><a href="sajt/knjiga_utisaka.php">KNJIGA UTISAKA</a></li>
						<li><a href="sajt/posao.php">TRAŽITE POSAO?</a></li>
						<li><a href="sajt/kontakt.php">KONTAKT</a></li>
					</ul>
				</nav>
			</header>

			<div id="content" role="main">
			<!-- <div class="snowing"> -->

				<div class="opis">
					<h1>Pizzeria Di Marco</h1>

					<!--<div class="text">
						<h2 style="color: greenyellow">
					    Dragi naši,<br />
					    želimo vam da u zdravlju provedete predstojeće praznike<br />
					    Svima koji slavite, želimo srećan Uskrs<br />
					    <h1 style="color: red; text-shadow: 2px 2px black;">
					    ХРИСТОС ВОСКРЕСЕ!!!</h1><br />
						</h2>
					</div><!--kraj diva text-->

					<!--<div class="blink">
						<h2>O B A V E Š T E NJ E ! ! !<br />
					  Radno vreme picerije DiMarco<br />
					  31.12.2019. od 10.00 do 18.00 časova<br />
					  01.01.2020. od 17.00 do 02.00 časova<br />
					  06.01.2020. od 10.00 do 02.00 časova<br />
						07.01.2020. je NERADNI dan<br />
						Vaš DiMarco<br />
					</div><br /><!--kraj diva blink-->

					<h2>Dobrodošli na zvaničnu web prezentaciju</h2>
					<h3>Italijanska hrana na srpski način<h3>

					<div class="text">
						<p><img class="leftalign" src="img/di_marko.jpg" />Pizzerija Di Marco postoji dugi niz godina, od 2007. Kao renomirana picerija sa dugim postojanjem,
						možemo se pohvaliti kvalitetom naših proizvoda i velikim brojem zadovoljnih konzumera naše hrane.
						Da li smo zaista dobri, uverićete se nakon prvog zalogaja!
						O kvalitetu naših pica ne moramo mi govoriti, o tome pričaju oni koji su ih probali.<br /><br />
						Naši proizvodi su sveži i ukusni, o čemu se brine tim ljubaznih kuvarica.
						Trudimo se da ispoštujemo Vaše zahteve, molbe, vreme isporuke.</p><br />
						<p><img class="rightalign" src="img/capricoza.jpg" />U ponudi imamo veliki izbor pica, špageta, sendviča,
						lazanja, salata, slanih i slatkih palačinki, pića.<br />
						Ukoliko Vam je lakše, hranu možete poručiti <a class="online" href="sajt/dostava.php">on-line</a>
						ili pozivom brojeva telefona:<br /><span class="online">011/29-94-706 i 065/85-85-550</span><br />
						Vršimo besplatnu dostavu naše hrane do Vaših domova!</p>
					</div><!--kraj diva text-->


					<div class="blink">
						<h3>Za sve naše verne kupce, spremili smo iznenađenje!</h3>
					</div><!--kraj diva blink-->
					<div class="center">Radno vreme:<br />ponedeljak - nedelja od 10h do 02:00h<br />
						<h2>Vaš Di Marco</h2>
					</div><!--kraj diva center-->

				</div><!--zavrsetak diva opis-->

			<!-- </div><!--kraj diva .snowing-->
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

	<!-- </div><!--kraj diva .snowing-->

	</body>

</html>
