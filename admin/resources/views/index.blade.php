<!DOCTYPE html>
<html lang="ru">
<head lang="en">
    <meta charset="utf-8">
    <meta content="all" name="robots">
    <title>Главная</title>
    <meta content="Главная" name="description">
    <meta content="Главная" name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"><!-- LP requires -->
    <link href="/css/global_styles.css" rel="stylesheet" type="text/css">
    <link href="/css/slick.css" rel="stylesheet" type="text/css">
    <link href="/css/lp3.css" rel="stylesheet" type="text/css">
    <link href="/css/patch.css" rel="stylesheet" type="text/css">
    <link href="/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="/favicon.png" type="image/x-icon">
</head>
<body>
<div class="overlay_in" onclick="$('.overlay').fadeOut(200);">
    <div class="overlay__box">
        <div style="font-size:50px;font-family:'robotoblack';">Спасибо!</div>

        <div style="font-size:28px;">Заявка успешно отправлена! Наш оператор свяжется с Вами в течение 10-15 минут для подтверждения заказа!</div>
    </div>
</div>
<div class="mfp-hide white-popup-block" id="test-modal">
    <form action="/app/call.php" method="post" class="form-mod" id="form-1" name="form-1">
        <h2>
            заказать звонок: <br>
            <h4></h4>
            <span class="price-ti"></span><br><br>
        </h2>
        <input id="name" name="name" placeholder="Ваше имя" type="text">
        <input id="emal-1" name="email" placeholder="Ваша почта" type="text">
        <input class="phone-1" name="phone" placeholder="Ваш номер телефона" type="text">
        <span class="input-price"></span>
        <span class="input-name"></span>
        <input type="submit">
    </form>

    <p><a class="popup-modal-dismiss" href="#">X</a>
    </p>
</div>

<div class="header-six--theme9" data-block-layout="111041" id="_lp_block_14392641">
    <div class="header-six-wrapper">
        <div class="header-six-inner">
            <div class="left-part">
                <div class="site-name-wrapper">
                    <div class="site-name">VadShop</div>

                    <div class="site-activity">Мебельный магазин</div>
                </div>
            </div>

            <div class="right-part">
                <div class="phones-part">
                    <div class="work-time">Ежедневно: с 09-00 до 19-00</div>

                    <div class="phones">
                        <div>
                            <a class="csspatch-ignore" href="tel:+7-918-270-00-20">+7-918-270-00-20</a>
                        </div>
                        <br>

                        <div>
                            <a class="csspatch-ignore" href="tel:+7-918-879-99-55">+7-918-879-99-55</a>
                        </div>
                        <br>

                        <div>
                            <a class="csspatch-ignore" href="tel:+7-918-879-99-55">info@vadshop.ru</a>
                        </div>
                    </div>
                </div>
                <div class="button"><a class="popup-modal" href="#test-modal">Обратная связь!</a> </div>
            </div>
        </div>
    </div>
</div>
<div class="big-pic--theme9" data-block-layout="110241" id="_lp_block_14394441">
    <div class="big-pic-wrapper center-center" style="background-image: url('/img/head.png');">
        <div class="big-pic-inner">
            <div class="text-part">
                <div class="slogan"><h1>Производство и реализация мягкой и корпусной мебели</h1></div>

                <div class="slogan-inner">С ДОСТАВКОЙ НА ДОМ</div>
            </div>
        </div>
    </div>
</div>

<div class="products-with-pic--theme9" data-block-layout="118441" id="_lp_block_14394841">
    <div class="products-wrapper">
        <div class="products-inner">
            <div class="block-title lp6_title_text">Наша мебель</div>
            <ul class="categories_list">
                <li class="active" data-category="divan">Диваны</li>
                <li data-category="divan-ug">Угловые диваны</li>
                <li data-category="kreslo-krov">Кресла-кровати</li>
                <li data-category="kreslo-for-relax">Кресла для отдыха</li>
            </ul>
            <!--Раздел диван-->
            <div class="divan products_list">
                <div class="block-title lp6_title_text">Диваны</div>
                @foreach($date as $dat)
                    @if($dat->cate == "divan")
                        <div class="product">
                            <div class="product-inner">
                                <a href="{{$dat->file_url}}" class="pic">
                                    <img alt="{{$dat->title}}" src="{{$dat->file_url}}">
                                </a>
                                <div class="bottom-part">
                                    <div class="descr">
                                        <h2>{{$dat->title}}</h2>
                                    </div>
                                </div>
                                <div class="title lp6_subtitle_text">
                                    {!! $dat->descr !!}
                                </div>
                                <div class="price-in">
                                    <span class="price">
                                        Цена: {{$dat->price}} руб.
                                    </span>
                                    <a class="buy-cart popup-modal" href="#test-modal" data-price="17 175 руб" data-name="Диван Аккордеон 1,4м (без декоров)">
                                        Заказать
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!--Конец раздела диван-->

            <!--раздел угловые диваны-->
            <div class="divan-ug products_list hide">
                <div class="block-title lp6_title_text">Угловые диваны</div>
                @foreach($date as $dat)
                    @if($dat->cate == "ugl-divan")
                        <div class="product">
                            <div class="product-inner">
                                <a href="{{$dat->file_url}}" class="pic">
                                    <img alt="{{$dat->title}}" src="{{$dat->file_url}}">
                                </a>
                                <div class="bottom-part">
                                    <div class="descr">
                                        <h2>{{$dat->title}}</h2>
                                    </div>
                                </div>
                                <div class="title lp6_subtitle_text">
                                    {!! $dat->descr !!}
                                </div>
                                <div class="price-in">
                                    <span class="price">
                                        Цена: {{$dat->price}} руб.
                                    </span>
                                    <a class="buy-cart popup-modal" href="#test-modal" data-price="17 175 руб" data-name="Диван Аккордеон 1,4м (без декоров)">
                                        Заказать
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- конец раздела угловые диваны-->

            <!--раздел угловые кресла-кровати-->
            <div class="kreslo-krov products_list hide">
                <div class="block-title lp6_title_text">Кресла-кровати</div>
                @foreach($date as $dat)
                    @if($dat->cate == "kreslo-krovat")
                        <div class="product">
                            <div class="product-inner">
                                <a href="{{$dat->file_url}}" class="pic">
                                    <img alt="{{$dat->title}}" src="{{$dat->file_url}}">
                                </a>
                                <div class="bottom-part">
                                    <div class="descr">
                                        <h2>{{$dat->title}}</h2>
                                    </div>
                                </div>
                                <div class="title lp6_subtitle_text">
                                    {!! $dat->descr !!}
                                </div>
                                <div class="price-in">
                                    <span class="price">
                                        Цена: {{$dat->price}} руб.
                                    </span>
                                    <a class="buy-cart popup-modal" href="#test-modal" data-price="17 175 руб" data-name="Диван Аккордеон 1,4м (без декоров)">
                                        Заказать
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <!-- конец раздела угловые кресла-кровати-->
            <!--Раздел Кресло для отдыха-->
            <div class="kreslo-for-relax products_list hide">
                <div class="block-title lp6_title_text">Кресла для отдыха</div>
                @foreach($date as $dat)
                    @if($dat->cate == "kreslo-relax")
                        <div class="product">
                            <div class="product-inner">
                                <a href="{{$dat->file_url}}" class="pic">
                                    <img alt="{{$dat->title}}" src="{{$dat->file_url}}">
                                </a>
                                <div class="bottom-part">
                                    <div class="descr">
                                        <h2>{{$dat->title}}</h2>
                                    </div>
                                </div>
                                <div class="title lp6_subtitle_text">
                                    {!! $dat->descr !!}
                                </div>
                                <div class="price-in">
                                    <span class="price">
                                        Цена: {{$dat->price}} руб.
                                    </span>
                                    <a class="buy-cart popup-modal" href="#test-modal" data-price="17 175 руб" data-name="Диван Аккордеон 1,4м (без декоров)">
                                        Заказать
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="m_text_wrapper" data-block-layout="54041" id="_lp_block_14396841">
    <div class="m_text_wrap">
        <div class="text_block_title lp6_title_text">О компании</div>

        <div class="text_blocks">
            <div class="text_j right">
                <div class="title lp6_subtitle_text">При производстве мебели по индивидуальным эскиза</div>

                <div class="text_wrap clear-self">
                    <a href="/img/rectangle_1.png" class="pic"><img alt="При производстве мебели по индивидуальным эскиза" src="/img/rectangle_1.png">
                    </a>

                    <div class="text lp6_content_text">
                        <p>- "Во главу угла" мы ставим индивидуальный подход. Каждый предмет мебели мы изготавливаем по оригинальному эскизу или, если же эскиза нет, наши специалисты всегда готовы обсудить с заказчиком все
                            его пожелания и идеи, а затем воплотить это все в реальность.<br>
                            - Оперативность - вся мебель изготавливается в кратчайшие сроки, а при необходимости возможна реализация сверхсрочных заказов.<br>
                            - Возможность внесения корректировок в дизайн мебели на этапах до полного утверждения эскиза - еще один плюс сотрудничества с нами.</p>
                    </div>
                </div>
            </div>

            <div class="text_j left">
                <div class="title lp6_subtitle_text">Мы гарантируем, что заказанная у нас мебель</div>

                <div class="text_wrap clear-self">
                    <a href="/img/rectangle_2.png"" class="pic"><img alt="Мы гарантируем, что заказанная у нас мебель" src="/img/rectangle_2.png">
                    </a>

                    <div class="text lp6_content_text">
                        <p>Мы поможем реализовать Вам самые смелые задумки, при необходимости вместе спроектируем и составим эскиз, а также подберем материалы.</p>

                        <p>Наша компания вот уже более 5 лет работает на рынке кухонной мебели. Мы работаем по индивидуальным эскизам, а также предоставляем своим клиентам типовую качественную, прочную и удобную мебель по
                            выгодным ценам.<br>
                            <br>
                            Ждем Вас!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contacts-block--theme5 inverse" data-block-layout="28641" id="_lp_block_14400841">
    <div class="top-part">
        <div class="top-part-inner">
            <div class="block-title">Остались вопросы? Позвоните нам</div>

            <div class="phone">
                <div><a class="csspatch-ignore" href="tel:+7-918-270-00-20">+7-918-270-00-20</a>
                </div>
            </div>
            &nbsp;

            <div class="phone">
                <div><a class="csspatch-ignore" href="tel:+7-918-270-00-20">+7-918-879-99-55</a>
                </div>
            </div>

            <div class="after-text">Если есть вопросы, задайте их нашему менеджеру. Мы будем рады ответить на все вопросы</div></div>
    </div>

    <div class="bottom-part">
        <div class="bottom-part-inner">
            <div class="address-block">
                <div class="block-title">Наши контакты</div>

                <div class="block-inner">
                    <div class="address">г. Краснодар, ул. Калинина, 1</div>

                    <div class="work-timer">Мы работаем: с 9:00 до 19:00<br>
                        без выходных и праздников</div>

                    <div class="social-block"><a href="https://twitter.com/vadshopru" target="_blank"><img alt="Twitter" src="/img/fgs16_twitter_4.svg"></a> <a href="https://www.facebook.com/groups/vadshop.ru/" target=
                        "_blank"><img alt="Facebook" src="/img/fgs16_facebook_4.svg"></a> <a href="https://vk.com/vadshopru" target="_blank"><img alt="ВКонтакте" src="/img/fgs16_vkontakte_2_4.svg"></a> <a href=
                                                                                                                                                                                                             "https://ok.ru/group/vadshopru" target="_blank"><img alt="Одноклассники" src="/img/fgs16_odnoklassniki_4.svg"></a></div>
                </div>
            </div>
        </div>

        <div class="mapp"><iframe frameborder="0" height="100%" src="https://yandex.ua/map-widget/v1/?um=constructor%3Ae09d8a073fb8e3eb99fe2e89d4316445176880cc221b61da1ce6616e312e4994&amp;source=constructor"
                                  width="100%"></iframe>
        </div>
    </div>
</div>

<div class="footer--theme5" data-block-layout="29041" id="_lp_block_14401041">
    <div class="footer-wrapper">
        <div class="footer-inner">
            <div class="site-name-bottom">Copyright @ <?php echo date("Y")?> Мебельный магазин «VadShop»</div>
        </div>
    </div>
</div>
<script src="/js/jquery-1.11.1.min.js">
</script>
<script src="/js/jquery.validate.min.js">
</script>
<script src="/js/jquery.maskedinput.js">
</script>
<script src="/js/jquery.magnific-popup.min.js"></script>

<script src="/js/pagination.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>

<script>
    $(function () {

         $('.pic').magnificPopup({
               type: 'image',
               closeOnContentClick: true,
               mainClass: 'mfp-img-mobile',
               image: {
                   verticalFit: true
               }

           });


        /* categories */

        $(".categories_list li").click(function () {
            $(".categories_list li").removeClass("active");
            $(this).addClass("active");
            var category = $(this).attr("data-category");
            $(".products_list").addClass("hide");
            $("."+category).removeClass("hide");
        });

        var h = window.location.hash.replace(/\#/g, '');
        if (h == 'thanks'){
            $(".overlay_in").fadeIn(200);
            window.location.hash = '';
            setTimeout(function () {
                $(".overlay_in").fadeOut(200);
            },5000);
        }
        $(".phone-1").mask("+7(999) 999-9999");

        $('form').each(function() {  // attach to all form elements on page
            $(this).validate({
                rules : {
                    name:{required: true},
                    email: {
                        required: true,
                        email: true
                    },
                    phone:{
                        required: true
                    }
                },
                messages : {
                    name : "Имя обязательно!",
                    email : "Email обязательно!",
                    phone: "Телефон обязательно!",
                },
                errorClass: "error_message",
                errorElement : "div",
                highlight: function (element, errorClass, validClass) {
                    return false;  // ensure this function stops
                }
            });
        });

        $('.popup-modal,.buy-cart').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#username',
            modal: true,
            callbacks: {
                beforeOpen: function() {
                    var el = this.st.el;
                    var name = $(el).attr('data-name');
                    var price = $(el).attr('data-price');
                    console.log(name);
                    if(typeof name == "undefined"){
                        $(".form-mod .input-name").html('');
                        $(".form-mod .input-price").html('');
                        $(".form-mod h4").css('display','none');
                        $(".form-mod .price-ti").css('display','none');
                        return
                    }
                    $(".form-mod h4").css('display','block').text(name);
                    $(".form-mod .price-ti").css('display','block').text(price);
                    $(".form-mod .input-name").html(`<input type="hidden" name="name-pro" value="${name}">`);
                    $(".form-mod .input-price").html(`<input type="hidden" name="name-price" value="${price}">`);
                    console.log($(el).attr('data-name'));
                },
            }
        });
        $(document).on('click', '.popup-modal-dismiss', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });
</script>
</body>
</html>