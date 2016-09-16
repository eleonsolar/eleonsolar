<?php

    require '../libs/PHPMailer/PHPMailerAutoload.php';

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;

    // Enable SMTP authentication
    $mail->Username = 'name@gmail.com';                 // SMTP username
    $mail->Password = 'password';                       // SMTP password

    $mail->CharSet="UTF-8";
    $mail->setFrom($email, $name);
    $mail->addAddress('eleonsolar@gmail.com', 'Edward Esteban León Solar');     // Add a recipient

    $mail->Subject = $name.' te quiere contactar';
    $mail->MsgHTML($message);

    if(!$mail->send()) echo 'Mailer Error: ' . $mail->ErrorInfo; else echo 1;
