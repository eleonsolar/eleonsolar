<?php

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
      //Destination address
      $to = 'eleonsolar@gmail.com';
      //Mail content
      $content = $data->message;
      //Subject
      $subject =  $data->name.' te quiere contactar';
      //Headers
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $headers .= "From: Web site eleonsolar \r\n";
      //Send mail
      return (mail($to, $subject, $content, $headers))? 1:0;
    }

  }
