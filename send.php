<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];

if (empty($email)) {
    $title = "New application Best Tour Plan";
    $body = "
    <h2>New message</h2>
    <b>Name:</b> $name<br>
    <b>Phone:</b> $phone<br><br>
    <b>Message:</b><br>$message
";
} 
else {
     $title = "New subscription";
     $body = "
     <h2>New subscription</h2>
     <b>Email:</b> $email<br>
";

}

// Формирование самого письма
// $title = "New application Best Tour Plan";
// $body = "
// <h2>New message</h2>
// <b>Name:</b> $name<br>
// <b>Phone:</b> $phone<br><br>
// <b>Message:</b><br>$message
// ";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'elizad586@gmail.com'; // Логин на почте
    $mail->Password   = 'Elizabeths97'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('elizad586@gmail.com', 'Eliza Dunaeva'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('elizabeths97@mail.ru');  

    // Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
// header('Location: thankyou.html');

if (empty($email)){
    header('Location: thankyou.html');

}
else {
    header('Location: subscription.html');
}

// // Переменные, которые отправляет пользователь
// $email = $_POST['email'];

// // Формирование самого письма
// $title = "New subscription";
// $body = "
// <h2>New subscription</h2>
// <b>Email:</b> $email<br>
// ";

// // Настройки PHPMailer
// $mail = new PHPMailer\PHPMailer\PHPMailer();
// try {
//     $mail->isSMTP();   
//     $mail->CharSet = "UTF-8";
//     $mail->SMTPAuth   = true;
//     // $mail->SMTPDebug = 2;
//     $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

//     // Настройки вашей почты
//     $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
//     $mail->Username   = 'elizad586@gmail.com'; // Логин на почте
//     $mail->Password   = 'Elizabeths97'; // Пароль на почте
//     $mail->SMTPSecure = 'ssl';
//     $mail->Port       = 465;
//     $mail->setFrom('elizad586@gmail.com', 'Eliza Dunaeva'); // Адрес самой почты и имя отправителя

//     // Получатель письма
//     $mail->addAddress('elizabeths97@mail.ru');  

//     // Отправка сообщения
// $mail->isHTML(true);
// $mail->Subject = $title;
// $mail->Body = $body;    

// // Проверяем отравленность сообщения
// if ($mail->send()) {$result = "success";} 
// else {$result = "error";}

// } catch (Exception $e) {
//     $result = "error";
//     $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
// }

// // Отображение результата
// header('Location: subscription.html');
