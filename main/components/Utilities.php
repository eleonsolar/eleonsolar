<?php

  class Utilities{

    private $lang = array();

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
       $to = 'eleonsolar@gmail.com';
     
       $content = $data->message;
  
       $subject =  $data->name.' te quiere contactar';

       $headers = "From:Web site official  <webmaster@eleonsolar.com> \r\n";

       return (mail($to, $subject, $content, $headers))? 1:0;
    }

    public function lang($key)
    {
      return $this->lang[$key];
    }

    public function setLang($lang = null)
    {
      if($lang != null)
        $this->lang = $lang;
    }

  }
