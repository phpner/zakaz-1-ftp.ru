<?php

include_once 'common.php';
include_once 'vendor/autoload.php';
//Какую страницу будем пижеть ?
$file = file_get_contents("http://www.mebel-esloboda.ru/produkciya/myagkaya-mebel/");


//Процент из файла настройки
$proc = $settings["proc_mebel_price"];


/*$phpQuery = phpQuery::newDocumentHTML($file);

$all = [];


$data = $phpQuery->find('.col-lg-4 >.short_goods');
$i = 0;
foreach ($data as $table) {
		$good = pq($table);

		//Работа с ценой
		$price = $good->find(".good_price")->text();
		$all[$i]['old-price'] = $price = preg_replace("/[^0-9]/", '', $price);
		// высчитываем процент от числа
		$pr = $price / 100 * $proc;
		$result = $price + $pr;

		$all[$i]['income'] = $pr;

		$all[$i]['procent'] = $proc ;

		$all[$i]['price'] = round($result);

	//Добываем даннык
	$img = $good->find('img')->attr('src');
	//Добыавем больой размер картинок
	$all[$i]['img'] =  str_replace('_b.jpg','_c.jpg', $img );
	$all[$i]['title'] = $title = $good->find('.title')->text();


	$i++;

}


phpquery::unloadDocuments($phpQuery);*/

// Цепляем шаблон
include_once $Common->GetTemplatePath('mebel');


