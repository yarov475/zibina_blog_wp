<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("ya.yarochkin@yandex.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: webmaster@artzibina.ru \r\n"))
 {     echo " Cпасибо!!! сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>