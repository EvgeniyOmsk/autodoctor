<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

require '../vendor/PHPMailer/src/Exception.php';
require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';
$config = require __DIR__ . '/../config/main.php';

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

header('Content-type: application/json');

$result = ['result' => false];

$mail = new PHPMailer(true);

try {
    $name = clean($_POST['name']);
    $phone = clean($_POST['phone']);
    $email = clean($_POST['email']);
    $message = clean($_POST['message']);
    if(empty($name) || empty($phone) || empty($message)) {
        $result['message'] = $l['Sent_data_incorrect'];

        echo json_encode($result);

        return;
    }
} catch (Exception $e) {
    $result['message'] = $l['Sent_data_incorrect'];

    echo json_encode($result);

    return;
}

try {

//    $mail->SMTPDebug = 2; // режим отладки, уберите эту сточку после отладки
    $mail->isSMTP();
    $mail->Host = 'smtp.yandex.ru';
    $mail->SMTPAuth = true;
    $mail->Username = $config['mail']['yandex']['login']; // имя пользователя yandex
    $mail->Password = $config['mail']['yandex']['password']; // пароль на yandex
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom($config['mail']['yandex']['login'] . '@yandex.ru', 'Автодоктор');

    $mail->addAddress($config['mail']['recipient'], 'Автодоктор');

    $mail->Subject = 'Запрос на звонок';
    $text = "Вопрос с сайта Автодоктор<br><br>Имя: <b>{$name}</b><br>Телефон: <b>{$phone}</b><br>Email: <b>{$email}</b><br>Сообщение: <b>{$message}</b>";
    $mail->Body = $text;
    $mail->IsHTML(true);

    $mail->send();

    $result['result'] = true;

} catch (Exception $e) {}

echo json_encode($result);

return;

