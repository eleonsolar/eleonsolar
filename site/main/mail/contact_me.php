<?php
    
    require '../components/Utilities.php';

    $data = (object)array();

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $utilities = new Utilities();

    if(!empty($name)){

      if(!empty($email)){

        if(!empty($message)){

          if($utilities->validate_mail($email)){

            $data->name = $name;
            $data->email = $email;
            $data->message = $message;

            echo $utilities->send_mail($data);
          }else{
            echo "Debe ingresar una dirección de correo válida";
          }
        }else {
          echo "Todos los campos son obligatorios";
        }
      }else {
        echo "Todos los campos son obligatorios";
      }
    }else {
      echo "Todos los campos son obligatorios";
    }
