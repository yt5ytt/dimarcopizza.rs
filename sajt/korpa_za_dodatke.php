<?php
	
	include ("../db/db_kontakt.php");
	$subtotal = 0;
	
	// Provera da li je kliknuto na drugme 'Dodaj u korpu'
	
	if (isset($_POST['dodaj_u_korpu'])){

		// foreach funkcija za izdvajanje kliknutih dodataka
		
		foreach ($_POST['dodaci'] as $dodatak){
			
			/*  Serija if i elseif funkcija za proveru o kojim dodacima se radi
			i dodeljivanje odgovarajuce tabele za mysql upit  */
			
			if (@$_POST['dodaci28']){
				$naziv_tabele = $_POST['dodaci28'];
			}elseif (@$_POST['dodaci32']){
				$naziv_tabele = $_POST['dodaci32'];
			}elseif (@$_POST['dodaci42']){
				$naziv_tabele = $_POST['dodaci42'];
			}elseif(@$_POST['dodaci50']){
				$naziv_tabele = $_POST['dodaci50'];
			}
			
			/*  mysql upit  */
			
			$upit = "select naziv, cena from $naziv_tabele where naziv = '$dodatak'";
			
			$rez = $db_users -> query($upit);
			
			/*  Provera da li mysql upit radi  */
			if ($db_users -> query($upit)){
				
			/*  Ako mysql upit radi, while petlja za selektovanje reda iz tabele
			i pridruzivanje odgovarajuce cene iz tabele  */
			
				while ($odabrani_dodatak = mysqli_fetch_object($rez)){?>
				
					<table>
						<tr>
							<td width = "200"><?php echo $dodatak;?></td>
							<td width = "200"><?php echo $odabrani_dodatak -> cena;?> din.</td>
						</tr>					
					
				
				
				
<?php			
				
				$subtotal = $subtotal + $odabrani_dodatak -> cena;

				}  //Zavrsetak while petlje
			

			}// Zavrsetak if naredbe za citanje db-a
			
			else{
				echo "Doslo je do greske prilikom citanja baze podataka" . $db_users -> error;
			}
			
		}  // Zavrsetak foreach petlje
?>
				
				<tr>
					<td>Ukupno</td>
					<td><?php printf("%.2f din.", $subtotal) ;?></td>
				</tr>
				</table>

<?php

	} // Zavrsetak if za $_POST['dodaj u korpu']
	
	else{
		
		echo "Vasa korpa je prazna.";
		
	}	

?>