<?php
include('smtp-func.php');
//список месяцев с названиями для замены
$_monthsList = array(".01." => "января", ".02." => "февраля",
	".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня",
	".07." => "июля", ".08." => "августа", ".09." => "сентября",
	".10." => "октября", ".11." => "ноября", ".12." => "декабря");

//текущая дата
$currentDate = date("d.m.Y, g:i a");

//заменяем число месяца на название:
$_mD = date(".m."); //для замены
$time = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);

	if (isset($_POST['name-pro'])){
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$name_prod = htmlspecialchars($_POST['name-pro']);
		$name_price = htmlspecialchars($_POST['name-price']);

		$message = "<div style='text-align:center;width:70%;margin:  auto;'>
				 <p>
					    <h1>Форма заказа : через кнопку 'заказать' на сайте VadShop</h1>
					    <h2> <b>Название товара</b>: $name_prod </h2>
					    </p>
					    <p>
					    <b>Имя покупателя </b> $name
					    </p> 
					    <p>
					    <b>Почта</b> $email
					    </p> 
					    <p>
					    <b>Телефон</b>: $phone
					    </p>					    
					     <p>
					      <b>Цена на нашем сайте 'VadShop'</b>: $name_price
					    </p>
					    <p>
					      <b>Время</b>: $time 
					    </p>
				    </p>
				    </div>";

		emailTo($message, "Форма заказа : через кнопку 'заказать' на сайте VadShop");
	}else {
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);

		$message = "<div style='text-align:center;width:70%;margin:  auto;'>
				 <p>
					    <h1>Форма заказа : через кнопку 'Обратная связь!' </h1>
					    </p>
					    <p>
					    <b>Имя покупателя </b> $name
					    </p> 
					    <p>
					    <b>Почта</b> $email
					    </p> 
					    <p>
					    <b>Телефон</b>: $phone
					    </p>	   
					    <p>
					    <b> Время заказа</b> : $time 
				    </p>
				    </div>";
		emailTo($message, "Форма заказа : через кнопку 'Обратная связь!' на сайте VadShop");
	}



function emailTo($message, $subject){
	$to  = "info@vadshop.ru";

	 smtpmail($to, $subject, $message);

	header('Location:'.$_SERVER['HTTP_REFERER']."#thanks");

	exit;
}
