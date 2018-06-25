<?php
// Настройки
$settings = array(
	// Ключ для доступа к API
	'user_api_key' => '8fa5527a2c9c66953eaae01c8f2a81be',
	// Хэш для построения диплинков
	'user_deep_link_hash' => 'p4tp3ldytxdjsosdirvz1frj2gy7362p',
	
	// Количество товаров на странице
	'items_per_page' => 18,
	
	// Количество товаров в RSS-ленте
	'rss_items_count' => 18,
	
	// Минимальная комиссия (в процентах)
	'rate_min' => 5,
	// Максимальная комиссия (в процентах)
	'rate_max' => 22,
	
	// Минимальная цена товара
	'price_min' => 0.0,
	// Максимальная цена товара
	'price_max' => 700000.0,
	
	// Название нашего сайта
	'site_name' => '2018 Магазин лучших товаров «VadShop»',
	
	// Язык описаний товаров (может быть en или ru)
	'lang' => 'ru',
	
	// Желаемая валюта
	// Поддерживаются как минимум USD, EUR, RUR, UAH, KZT. Подробнее - в документации
	'currency' => 'RUR',
	
	// Используемая библиотека кэширования
	// Если есть поддержка на хостинге то крайне рекоммендуется включить
	// Возможные значения: none, apc, xcache, memcache, memcached, wincache
	'cache_library' => 'none',
	
	// Только если в качестве кэша выбран memcache или memcached
	'memcached_host' => 'localhost',
	'memcached_port' => 11211,
	'memcached_pconnect' => TRUE,
	
	// Настройки MySQL. Используются если в качестве кэша указан mysql
	'mysql_host' => 'localhost',
	'mysql_user' => 'user78973_vadshop',
	'mysql_pass' => '10080810',
	'mysql_base' => 'user78973_vadshop',
	'mysql_persist' => TRUE,
);

