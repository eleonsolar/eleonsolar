<?php

  require '../vendor/PHPMailer/PHPMailerAutoload.php';

  class Utilities{

    public function validateMail($email)
    {
      if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){

          return false;
      } else {

          return true;
      }
    }

    public function sendMail($data)
    {
      $mail = new PHPMailer;

      $mail->isSMTP();
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'ssl';
      $mail->Host = 'server';
      $mail->Port = 465;

      // Enable SMTP authentication
      $mail->Username = 'correo@dominio.com';                 // SMTP username
      $mail->Password = 'password';                           // SMTP password

      $mail->CharSet="UTF-8";
      $mail->setFrom($data->email, $data->name);
      $mail->addAddress('eleonsolar@gmail.com', 'Edward Esteban León Solar');     // Add a recipient

      $mail->Subject = $ata->name.' te quiere contactar';
      $mail->MsgHTML($data->message.' #Mail:'.$data->email);

      if(!$mail->send())  $result = 'Mailer Error: ' . $mail->ErrorInfo; else $result = 1;

      return $result;
    }

  }
