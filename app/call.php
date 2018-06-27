<?php
$time = date("F j, Y, g:i a");
	if (isset($_POST['from-zakaz'])){
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$name_prod = htmlspecialchars($_POST['name-prod']);
		$new_price = htmlspecialchars($_POST['price']);
		$old_price = htmlspecialchars($_POST['old-price']);
		$procent = htmlspecialchars($_POST['procent']);
		$income = htmlspecialchars($_POST['income']);

		$message = "<div style='text-align:center;width:70%;margin:  auto;'>
				 <p>
					    <h1>Форма заказа : через кнопку 'Обратная связь!' </h1>
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
					      <b>Процент на нашем сайте 'VadShop'</b>: $procent%
					    </p>
					    <p>
					      <b>Цена на нашем сайте 'VadShop'</b>: $new_price руб.
					    </p>					  
					    <p>
					      <b>Цена на найте  mebel-esloboda.ru</b>: $old_price руб.
					    </p>
					     <p>
					      <b>Доход от $procent%</b>: $income руб.
					    </p>
					    <p>
					    <b> Время заказа</b> : $time 
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
	$to  = "phpner@gmail.com";

	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
	$headers .= "From: VadShop <info@vadshop.ru>\r\n"; //Наименование и почта
	$headers .= "Reply-To: vadshop.ru\r\n";
	$headers .= "reply-to: vadshop.ru\r\n";

	mail($to, $subject, $message, $headers);

	header('Location:'.$_SERVER['HTTP_REFERER']."#thanks");

	exit;
}
?>