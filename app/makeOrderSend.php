<?php
$siteMail = "service@ressa-service.ru";

$fio = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['mail'];
$msgDesc = $_POST['message'];

$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$msgDesc = htmlspecialchars($msgDesc);

$fio = urldecode($fio);
$phone = urldecode($phone);
$email = urldecode($email);
$msgDesc = urldecode($msgDesc);

$fio = trim($fio);
$phone = trim($phone);
$email = trim($email);
$msgDesc = trim($msgDesc);


$msg = $msgDesc."\nФИО: " . $fio . "\nТелефон: " . $phone . "\nE-mail: " . $email;
$msg = wordwrap($msg,70);

if (mail($siteMail, "Заказ с сайта", $msg))
 {
   $message = "Данные успешно отправлены";
echo "<script type='text/javascript'>alert('$message');location.href='http://zavodgm.ru/index.php';</script>";

} else {
  $message = "При отправке данных возникли неполадки, напишите на почту: ".$siteMail;
echo "<script type='text/javascript'>alert('$message');location.href='http://zavodgm.ru/index.php';</script>";
}
?>
