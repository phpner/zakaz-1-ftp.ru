<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
	if (!isset($template_title) || $template_title == '') {
		$template_title = $settings['site_name'];
	}
	print "<title>" . htmlspecialchars($template_title) . "</title>\n";

	if (!isset($template_description) || $template_description == '') {
		$template_description = '';
	}
	print "<meta name=\"description\" content=\"" . htmlspecialchars($template_description) . "\">\n";
	
	if (!isset($template_keywords) || $template_keywords == '') {
		$template_keywords = '';
	}
	print "<meta name=\"keywords\" content=\"" . htmlspecialchars($template_keywords) . "\">\n";
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/bootstrap-spacelab.min.css">
<link rel="stylesheet" href="/css/main.css">
<link rel="alternate" title="<?php print htmlspecialchars($settings['site_name']) ?>" href="<?php print htmlspecialchars($Path->Rss()); ?>" type="application/rss+xml">
<link rel="icon" href=​"http://vadshop.ru/favicon.png" type="image/png">
<link rel="shortcut icon" href="http://vadshop.ru/favicon.png" type="image/png">
<!-- <link rel="stylesheet" href="/css/bootstrap-theme.min.css"> -->
<!--[if lt IE 9]>
	<script src="/js/html5shiv.min.js"></script>
	<script src="/js/respond.min.js"></script>
<![endif]-->
<script   src="/js/jquery-1.11.1.min.js"></script>
<script  src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="/js/jquery.nice-select.js"></script>
<script>

	//работа с куками через js

    $(document).ready(function(){

        console.log($.cookie('language'));

		(!$.cookie('language')) ?  $.cookie('language', "ru", { expires: 7, path: '/' }) : "";

		( $.cookie('language') === "ru") ? $("#myonoffswitch").prop('checked', true)  : $("#myonoffswitch").prop('checked', false);

    $("#myonoffswitch").on('change',function(){
			if($("#myonoffswitch").prop('checked')){
                $.cookie('language', 'ru', { expires: 7, path: '/'});
				location.reload();
			}else{
                $.cookie('language', "en", { expires: 7, path: '/' });
                location.reload();
			}
    });
    });
	
</script>
</head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47896529 = new Ya.Metrika({
                    id:47896529,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47896529" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<body>
<nav class="navbar navbar-default new-navbar" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav">
			<li>
				<div class="onoffswitch">
					<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked="checked">
					<label class="onoffswitch-label" for="myonoffswitch">
						<span class="onoffswitch-inner"></span>
						<span class="onoffswitch-switch"></span>
					</label>
				</div>
			</li>
			<li><a href="/"><?php print $Lang->GetString('Main page'); ?></a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print $Lang->GetString('Categories'); ?><span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
<?php
	foreach ($categories_list as $category) {
		if (isset($category['current']) && $category['current']) {
			print "<li class=\"active\"><a href=\"" . htmlspecialchars($category['link']) . "\">" . htmlspecialchars($category['title']) . "</a></li>\n";
		}
		else {
			print "<li><a href=\"" . htmlspecialchars($category['link']) . "\">" . htmlspecialchars($category['title']) . "</a></li>\n";
		}
	}
?>
				</ul>
			</li>
		</ul>
		<form class="navbar-form navbar-right" role="search" method="get" action="<?php print htmlspecialchars($Path->Search()); ?>">
			<div class="form-group">
				<input type="text" name="q" class="form-control form-control-new-style" placeholder="<?php print $Lang->GetString('Search'); ?>" value="<?php if (isset($search_query)) print htmlspecialchars($search_query); ?>">
			</div>
			<button type="submit" class="btn btn-default btn-search"><?php print $Lang->GetString('Search'); ?></button>
		</form>
      </div>
</nav>
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3">
				<h1 class="h1-head-logo"><a href="/"><img src="/img/vadshop.png" class="logo-img"><div class="clearfix"></div></a></h1>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-9">
				<h1 class="header-text">
					<?php print $Lang->GetString('Best goods from universe!'); ?><br />
					<small><?php print $Lang->GetString('Free shipping, fast check out'); ?></small>
				</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-default hidden-xs hidden-sm">
				<div class="panel-heading panel-heading-new-style"><?php print $Lang->GetString('Categories'); ?></div>
				<div class="">
					<div class="list-group">
<?php
	foreach ($categories_list as $category) {
		if (isset($category['current']) && $category['current']) {
			print "<a class=\"list-group-item link-cat-search active\" href=\"" . htmlspecialchars($category['link']) . "\">" . htmlspecialchars($category['title']) . "</a>\n";
		}
		else {
			print "<a class=\"list-group-item link-cat-search\" href=\"" . htmlspecialchars($category['link']) . "\">" . htmlspecialchars($category['title']) . "</a>\n";
		}
	}
?>
					</div>
				</div>
			</div>
			
			<div class="panel panel-default hidden-xs">
				<div class="panel-heading"><?php print $Lang->GetString('Powered by:'); ?></div>
				<div class="panel-body text-center">
			        <a href="http://vadtaxi.ru" target="_blank"><img class="reklama" src="/img/reklama.png"></a>
                                </div>
                        </div>

                        <center = center center = 50% 50%>
                        <p><iframe width="267" height="150" src="https://www.youtube.com/embed/gNqEbGz73YE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
	                <a href="http://vadshopru.blogspot.com" target="_blank"><img class="icon_blogger" src="/img/icon_blogger.png"></a>
                        <a href="https://facebook.com/groups/vadshop.ru/" target="_blank"><img class="icon_facebook" src="/img/icon_facebook.png"></a>
                        <a href="https://plus.google.com/communities/108739949733322655782" target="_blank"><img class="icon_googl+" src="/img/icon_googl+.png"></a>
                        <a href="https://instagram.com/vadshopru" target="_blank"><img class="icon_instagram" src="/img/icon_instagram.png"></a>
                        <a href="https://linkedin.com/groups/8660395" target="_blank"><img class="icon_linkedin" src="/img/icon_linkedin.png"></a>
                        <a href="https://my.mail.ru/community/vadshop.ru/" target="_blank"><img class="icon_moimir" src="/img/icon_moimir.png"></a>
                        <a href="https://ok.ru/group/vadshopru" target="_blank"><img class="icon_ok" src="/img/icon_ok.png"></a>
                        <a href="https://ru.pinterest.com/artvad/магазин-лучших-товаров-vadshopru/" target="_blank"><img class="icon_pinterest" src="/img/icon_pinterest.png"></a>
                        <a href="http://vadshop.pulscen.ru" target="_blank"><img class="icon_pulscen" src="/img/icon_pulscen.png"></a>
                        <a href="https://vadshopru.tumblr.com" target="_blank"><img class="icon_tumblr" src="/img/icon_tumblr.png"></a>
                        <a href="https://twitter.com/vadshopru" target="_blank"><img class="icon_twitter" src="/img/icon_twitter.png"></a>
                        <a href="https://vk.com/vadshopru" target="_blank"><img class="icon_vk" src="/img/icon_vk.png"></a>
                        <a href="https://www.youtube.com/channel/UCrMhCQTCdOFlVF6WjUIv-Jw" target="_blank"><img class="icon_youtube" src="/img/icon_youtube.png"></a>
                        </div>
		<div class="col-md-9">
