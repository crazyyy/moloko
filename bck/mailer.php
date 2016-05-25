<?php
$blocks['widgetu4630_input'] =  "Заказать звонок хедар";
$blocks['arendamd'] =  "Аренда";
$blocks['arenda2md'] =  "Аренда блок с расчетом стоимости";
$blocks['skidkamd'] =  "Получить скидку";
$blocks['zayavka1md'] =  "Заказать Фотобудку";
$blocks['zayavka2md'] =  "Заказать Фотостойку";
$blocks['zayavka3md'] =  "Заказать Инстапринтер";
$blocks['zayavka4md'] =  "Заказать Интерактивную фотолабораторию";
$blocks['question-form'] =  "Задать вопрос";
$blocks['calusfootermd'] =  "Заказать звонок футер";



$antispam = $_POST["suren"];
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$from = trim($_POST["from"]);
$to = trim($_POST["to"]);
$when = trim($_POST["when"]);
$desc= trim($_POST["desc"]);
$question= trim($_POST["question"]);
$mail= trim($_POST["mail"]);
$rewiews= trim($_POST["rewiews"]);





$from_ip = $_SERVER['REMOTE_ADDR'];
$from_browser = $_SERVER['HTTP_USER_AGENT'];


//$recipient = "vinnica1887@gmail.com";
//$recipient="bratkevich.e.a@gmail.com";
$recipient="info@photube.ru";




$subject = "Поступила заявка от $name";

$email_content .= '<table style="width: 100%;font-size: 16px;">';

$email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Имя:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$name.'</td></tr>';
$email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Телефон:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$phone.'</td></tr>';
$email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Блок:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$blocks[$_POST["id"]].'</td></tr>';
if (isset($_POST["from"])) $email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Откуда:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$from.'</td></tr>';
if (isset($_POST["to"])) $email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Куда:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$to.'</td></tr>';
if (isset($_POST["when"])) $email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Когда:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$when.'</td></tr>';
if (isset($_POST["desc"])) $email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Описание:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$desc.'</td></tr>';
if (isset($_POST["question"])) $email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Вопрос:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$question.'</td></tr>';
if (isset($_POST["mail"])) $email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Почта:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$mail.'</td></tr>';
if (isset($_POST["rewiews"])) $email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Отзыв:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$rewiews.'</td></tr>';
$email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">IP пользователя:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$from_ip.'</td></tr>';
//$email_content .= '<tr style="background: rgba(0,0,0,.1);"><th style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">Браузер пользователя:</th> <td style="padding: 10px 20px;text-align: left;color: rgba(0,0,0,.9);border: 1px solid #f9f9f9;">'.$from_browser.'</td></tr>';

$email_headers = "From: World delivery" . "\r\n";
$email_headers .= "MIME-Version: 1.0\r\n";
$email_headers .= "Content-Type: text/html; charset=utf-8\r\n";


if ($antispam == "") {
  if (mail($recipient, $subject, $email_content, $email_headers)) {
    http_response_code(200);

  }
}

?>