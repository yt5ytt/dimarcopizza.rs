<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Administrator - Pizzeria Di Marco</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="../css/animation.css" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="icon" type="img/png" href="img/favicon.png">
	</head>
	<body>
		<?php
			if(@$_POST["submit"]){
				if($_POST["korisnik"] == "superuser"){
					if($_POST["password"] == "rassa968"){
						$_SESSION["korisnik"] = "administrator";
						header("Location: porudzbine.php");
					}else{
						echo "Pogresili ste login podatke. Probajte ponovo";
					}
				}elseif($_POST["korisnik"] == "administrator"){
					if($_POST["password"] == "vladica12345"){
						$_SESSION["korisnik"] = "picerija";
						header("Location: porudzbine.php");
					}else{
						echo "Pogresili ste login podatke. Probajte ponovo";
					}
				}
			}else{
		?>
		
		<div id="login-container">
			<img src="img/favicon.png" />
			<h1>Administracija</h1>
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<section>
					<div class="label">Korisnik</div>
					<div class="input"><input type="text" name="korisnik" /></div>
				</section>
				<section>
					<div class="label">Lozinka</div>
					<div class="input"><input type="password" name="password" /></div>
				</section>
				<section>
					<div class="submit">
						<input type="submit" name="submit" value="Uloguj se" />
					</div>
				</section>
			</form>
			
		
		</div>
		<?php 
			}
		?>
	</body>



</html>