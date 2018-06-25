<?php

$template_title = "{$settings['site_name']} - Best goods from universe!";
$template_description = "{$settings['site_name']} - Best goods from universe! Free shipping, fast check out!";
$template_keywords = "china goods, best goods, phones, food, tablets, shirts";

include_once $Common->GetTemplatePath('_up');
?>
<div class="col-md-12" >
	<div class="panel panel-default">
		<div style="text-align: center" class="panel-heading">Мебель</div>
		<div class="panel-body text-center">
			<a class="main-top" href="/mebel/"><img src="../img/head.png" alt=""></a>
			<p class="top-mg"><a href="/mebel/"><img class="good-img" src="../img/layer_473.png"></a></p>
			<p class="top-mg"><a href="/mebel/"><img class="good-img" src="../img/layer_474.png"></a></p>
			<p class="top-mg"><a href="/mebel/"><img class="good-img" src="../img/layer_476.png"></a></p>
			<div class="btn-toolbar" role="toolbar">
				<div class="top_mebel">
					<div class="btn-group">
						<a class="btn btn-b" href="/mebel/" rel="nofollow">Купить</a>
					</div>
					<div class="wr-btn-more-info">
						<a class="btn btn-more-info" href="/mebel/">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<h1 class="text-center ubder-main-img">Best price</h1>
<?php
	foreach ($offers as $offer_info){
?>
	<div class="col-md-4 col-sm-6 col-xs-12 wr-good">
		<div class="panel panel-default">
			<div class="panel-heading name-good"><?php print htmlspecialchars($offer_info['name']); ?></div>
			<div class="panel-body text-center">
			<?php if ($offer_info['picture'] != '') { ?>
				<p class="wr-img"><a href="<?php print htmlspecialchars($offer_info['link']); ?>"><img class="good-img" src="<?php print htmlspecialchars($offer_info['picture']) ;?>" ></a></p>
			<?php } ?>
				<p class="text-left text-cat-price"><strong><?php print $Lang->GetString('Price'); ?></strong>: <span class="price-style"><?php print htmlspecialchars($offer_info['price'] . ' ' . $offer_info['currency']); ?></span>
				<?php if ($offer_info['category'] != '') { ?>
					<br />
					<strong><?php print $Lang->GetString('Category'); ?></strong>: <a href="<?php print htmlspecialchars($offer_info['category_link']); ?>"><?php print htmlspecialchars($offer_info['category']) ?></a>
				<?php } ?>
				</p>
				<div class="btn-toolbar" role="toolbar">
					<div class="btn-group">
						<a class="btn btn-b" href="<?php print htmlspecialchars($offer_info['url']); ?>" rel="nofollow"><?php print $Lang->GetString('Buy now!'); ?></a>
					</div>
					<div class="wr-btn-more-info">
						<a class="btn btn-more-info" href="<?php print htmlspecialchars($offer_info['link']); ?>"><?php print $Lang->GetString('More info'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	}

include_once $Common->GetTemplatePath('_down');

