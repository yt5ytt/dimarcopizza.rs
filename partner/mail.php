<?php

  $to = "damjan.safranec@gmail.com";
  $from = 'dimarcopizza@gmail.com';
  $from_name = 'DiMarco picerija';
  $subject = 'Di Marco pizzeria - potvrda prijema porudzbine';
  $body = "Ovo je probna poruka sa live servera";

  include("sendMail.php");

  smtpmailer($to, $from, $from_name, $subject, $body);
 ?>
