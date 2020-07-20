<?php

// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//  PDO MySQL database connection

function conn()
{
    $host = 'localhost';
    $db   = 'db_login';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}



// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//  PHP Mailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function email($to, $subject, $message, $output)
{
    require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
    $mail = new PHPMailer(true);

    try {
        //Server settings (usar os comentados para o localhost)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        //$mail->Host       = 'hosting63.serverhs.org';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'christianwork2010@gmail.com';
        //$mail->Username   = 'mail_teste@christianvr.pt';
        $mail->Password   = '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        //$mail->Port       = 21;

        //Recipients
        $mail->setFrom('christianwork2010@gmail.com', 'Madeiras');
        $mail->addAddress($to);
        $mail->addReplyTo('no-reply@app.com', 'Information');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        //$mail->AltBody = 'Copy-past this code somewhere: '.$token;

        $mail->send();
        echo $output;
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}


// ----------- Random password generator
function randomPassword() {
  $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
  for ($i = 0; $i < 8; $i++) {
      $num = rand(0, count($alphabet)-1);
      $pass[$i] = $alphabet[$n];
  }
  return $pass;
}