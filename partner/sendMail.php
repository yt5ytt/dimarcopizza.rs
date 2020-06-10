<?php
require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body){
        $mail = new PHPMailer();
        $mail->SMTPAuth = true;

        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = 'dimarcopizza@gmail.com';
        $mail->Password = 'rassa968';

   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);

        $mail->IsHTML(true);
        $mail->From="dimarcopizza@gmail.com";
        $mail->FromName=$from_name;
        $mail->Sender="dimarcopizza@gmail.com";
        $mail->AddReplyTo("dimarcopizza@gmail.com", "DiMarco picerija");
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        $mail->Send();

        /*if(!$mail->Send())
        {
            $error = "Nije prosla poruka, nesto nije kako treba.....";
            return $error;
        }
        else
        {
            $error = "Poruka je uspesno poslata.";
            return $error;
        }*/
}
