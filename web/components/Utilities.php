<?php

  $docroot = getenv("DOCUMENT_ROOT");

  require $docroot.'/eleonsolar/web/libs/PHPMailer/PHPMailerAutoload.php';

  class Utilities{

    public function validate_mail($email)
    {
      if(preg_match("/^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/", $email)){

            return true;
        } else {

            return false;
        }

    }

    public function send_mail($data)
    {
      $mail = new PHPMailer;

      $mail->isSMTP();
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'ssl';
      $mail->Host = 'hostname';
      $mail->Port = 'port';

      // Enable SMTP authentication
      $mail->Username = 'username';           // SMTP username
      $mail->Password = 'password';           // SMTP password

      $mail->CharSet="UTF-8";
      $mail->setFrom($data->email, $data->name);
      $mail->addAddress('eleonsolar@gmail.com', 'Edward Esteban León Solar');     // Add a recipient

      $mail->Subject = $data->name.' te quiere contactar';
      $mail->MsgHTML($data->message.' #Mail:'.$data->email);

      if(!$mail->send())  $result = 'Mailer Error: ' . $mail->ErrorInfo; else $result = 1;

      return $result;
    }

  }
