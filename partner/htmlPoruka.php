<?php
  $ime = 'Aleksandar';
  $datum = '10.06.2020.';
  $vreme = '17:06';
  $minuta = 30;

?>

<!DOCTYPE html>
<html lang='en' dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <style type='text/css' media='screen'>

      .poruka{
        width: 60%;
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
      }

      .naslov{
        width: 100%;
        line-height: 4em;
        background-color: lightgrey;
      }

      .textPoruke{
        text-align: left;
        width: 80%;
        margin: 0 auto;
      }

    </style>
  </head>
  <body>

    <div class='poruka'>

      <div class='naslov' style='width: 100%; line-height: 4em; background-color: lightgrey;'>
        <h1 style='color: black; font-weight: bolder'>Poštovani <?php echo $ime; ?></h1>
      </div>

      <div class='textPoruke'>
        <h3>vaša porudžbina je uspešno primljena <?php echo $datum; ?>godine u <?php echo $vreme; ?> časova i biće vam dostavljena u najkraćem mogućem roku, a najkasnije za <?php echo $minuta; ?> minuta</h3>
      </div>

      <div class='naslov'>
        <h1 style='color: black; font-weight: bolder'>Vaš DiMarco!!!</h1>
      </div>

    </div>

  </body>
</html>
