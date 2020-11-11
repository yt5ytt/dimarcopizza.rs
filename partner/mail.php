<?php

  $to = "yt5ytt@gmail.com";
  $from = 'dimarcopizza@gmail.com';
  $from_name = 'DiMarco picerija';
  $subject = 'Di Marco pizzeria - potvrda prijema porudzbine';

  $ime = 'Aleksandar';
  $datum = '10.06.2020.';
  $vreme = '17:06';
  $minuta = 30;

  // $body = "Ovo je probna poruka sa lokala. Sad cemo da probamo da napravimo HTML poruku, pa cemo videti da li ovo deluje.";

  $body = "
          <!DOCTYPE html>
          <html lang='en' dir='ltr'>
            <head>
              <meta charset='utf-8'>
              <style type='text/css' media='screen'>
                .poruka{
                  width: 98%;
                  max-width: 600px;
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
                  width: 95%;
                  margin: 0 auto;
                }
              </style>
            </head>
            <body>

              <div class='poruka'>

                <div class='naslov'>
                  <h1 style='color: black; font-weight: bolder'>Poštovani " . $ime . "</h1>
                </div>

                <div class='textPoruke'>
                  <h3>vaša porudžbina je uspešno primljena " . $datum . "godine u " . $vreme . " časova i biće vam dostavljena u najkraćem mogućem roku, a najkasnije za " . $minuta . " minuta</h3>
                </div>

                <div class='naslov'>
                  <h1 style='color: black; font-weight: bolder'>Vaš DiMarco!!!</h1>
                </div>

              </div>

            </body>
          </html>
  ";

  include("sendMail.php");

  smtpmailer($to, $from, $from_name, $subject, $body);
 ?>
