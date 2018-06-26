<?php
	$time = date("F j, Y, g:i a");

	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);

	$message = " <p><h3>Форма заказа : через кнопку 'Обратная связь!' </h3></p></br><p><b>Имя покупателя </b> $name </p> </br><p><b>Почта</b> $email</p> </br><p><b>Телефон</b>: $phone</p><br><p><b> Время заказа</b> : $time </p>";

	emailTo($message,"Форма заказа : через кнопку 'ЗАКАЗ'  ");

function emailTo($message, $subject){
	$to  = "info@vadshop.ru";

	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
	$headers .= "From: Отправитель vadshop.ru\r\n"; //Наименование и почта
	$headers .= "Reply-To: reply-to: form@example.com\r\n";

	mail($to, $subject, $message, $headers);

	header('Location:'.$_SERVER['HTTP_REFERER']."#thanks");

	exit;
}
?>