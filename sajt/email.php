<?php
/*
   * Enable error reporting
   */
  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );

  /*
   * Setup email addresses and change it to your own
   */
  $to = "yt5ytt@gmail.com";
  $subject = "Proba slanja poruke";
  $poruka = "Poštovani Aleksandre,<br /><br />";
  $poruka .= "vaša porudžbina je uspešno primljena 18.04.2019.godine u 20.18 časova i biće vam dostavljena u najkraćem mogućem roku, a najkasnije za 90 minuta.<br /><br />";
  $poruka .= "Vaš Di Marco!<br /><br />";
  $poruka .= "Za sve dodatne informacije možete pozvati na telefone:<br />011/29-94-706 i 065/85-85-550";
  // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: DiMarco<dimarcopizza@gmail.com>' . "\r\n";

  /*
   * Test php mail function to see if it returns "true" or "false"
   * Remember that if mail returns true does not guarantee
   * that you will also receive the email
   */
  if(mail("yt5ytt@gmail.com, alexwebsoft.net@gmail.com", "Potvrda porudzbine", $poruka, $headers))
  {
      echo "Test email send.";
  }
  else
  {
      echo "Failed to send.";
  }

 ?>
