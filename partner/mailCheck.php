<?php
  $mail_adresa  = "yt5ytt@gmail.com";
  $ime_korisnika = "Aleksandar";
  $subject = "Di Marco pizzeria - potvrda prijema porudzbine";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "From: DiMarco<dimarcopizza@gmail.com>" . "\r\n";
  $headers .= "Content-type: text; charset=utf-8" . "\r\n";
  //$headers .= "X-Mailer: PHP/" . phpversion();
  $poruka = "Poštovani ".$ime_korisnika.",\r\n\r\n";
  $poruka .= "vaša porudžbina je uspešno primljena i biće vam dostavljena u najkraćem mogućem roku.\r\n\r\n";
  $poruka .= "Vaš Di Marco!\r\n\r\n";
  $poruka .= "Za sve dodatne informacije možete pozvati na telefone:\r\n011/29-94-706 i 065/85-85-550";

  $admin_poruka = "Porudžbina je uspešno potvrđena i email potvrda uspešno poslata korisniku\r\n\r\nDiMarco Admin";

mail($mail_adresa, $subject, $poruka, $headers);
 ?>
