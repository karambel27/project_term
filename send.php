<?php
$to = "@mail.ru";
$subject = "Новая заявка с сайта ВОСТОК";

$name = htmlspecialchars($_POST["name"] ?? "");
$phone = htmlspecialchars($_POST["phone"] ?? "");
$company = htmlspecialchars($_POST["company"] ?? "");
$region = htmlspecialchars($_POST["region"] ?? "");
$tech = htmlspecialchars($_POST["tech"] ?? "");
$message = htmlspecialchars($_POST["message"] ?? "");

$body = "
Новая заявка с сайта ВОСТОК

Имя: $name
Телефон: $phone
Компания: $company
Объект / Регион: $region
Техника: $tech
Комментарий: $message
";

$headers = "From: website@vostok-logistic.ru\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

mail($to, $subject, $body, $headers);

header("Location: thanks.html");
exit;
?>