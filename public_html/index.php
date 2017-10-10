<?php

include_once __DIR__ . '/../app/load.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Псалтыр</title>
    <link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAR0dHAAGAAAABgAAAAYAAAAGAAAABgAAAAYAAAAGAAAABgAAAAYAAAAGAAAAf+AAAH/gAAAGAAAABgAAAAYAAAAGAAAD+fwAA/n8AAP5/AAD+fwAA/n8AAP5/AAD+fwAA/n8AAP5/AAD+fwAA4AcAAOAHAAD+fwAA/n8AAP5/AAD+fwAA" rel="icon" type="image/x-icon"/>
</head>
<body>
<div class="statusbar-overlay"></div>

<div class="panel panel-left panel-cover">
    <div class="content-block">
        <h2>
            <a href="#" class="close-panel pull-right">
                <i class="f7-icons">close_round</i>
            </a>
            Змест
        </h2>
        <p class="text-center">
            <img src="/asset/img/litara_p.jpg">
        </p>
    </div>
    <div>
        <div class="list-block accordion-list">
            <ul>
                <li class="item-content">
                    <div class="item-media">
                        <i class="f7-icons">sort</i>
                    </div>
                    <div class="item-inner">
                        <div class="item-title">
                            <a href="/themes.html" class="close-panel">
                                Па тэмам
                            </a>
                        </div>
                    </div>
                </li>

                <li class="item-content">
                    <div class="item-media">
                        <i class="f7-icons">list</i>
                    </div>
                    <div class="item-inner">
                        <div class="item-title">
                            <a href="/numbers.html" class="close-panel">
                                Па нумарацыі
                            </a>
                        </div>
                    </div>
                </li>

                <li class="item-content">
                    <div class="item-media">
                        <i class="f7-icons">reload_round</i>
                    </div>
                    <div class="item-inner">
                        <div class="item-title">
                            <a href="/content/psalm/0" class="close-panel">
                                Выпадковы
                            </a>
                        </div>
                    </div>
                </li>

                <li class="item-content">
                    <div class="item-media">
                        <i class="f7-icons">collection</i>
                    </div>
                    <div class="item-inner">
                        <div class="item-title">
                            <a href="/about.html" class="panel-close">
                                Пра Псальмы
                            </a>
                        </div>
                    </div>
                </li>

                <li class="item-content">
                    <div class="item-media">
                        <i class="f7-icons">person</i>
                    </div>
                    <div class="item-inner">
                        <div class="item-title">
                            <a href="/authors.html" class="panel-close">
                                Аб аўтарах
                            </a>
                        </div>
                    </div>
                </li>

                <li class="item-content">
                    <div class="item-media">
                        <i class="f7-icons">book_fill</i>
                    </div>
                    <div class="item-inner">
                        <div class="item-title">
                            <a href="/Francisek_foreword.html" class="panel-close">
                                Прадмова Скарыны
                            </a>
                        </div>
                    </div>
                </li>

                <li class="item-content">
                    <div class="item-media">
                        <i class="f7-icons">at</i>
                    </div>
                    <div class="item-inner">
                        <div class="item-title">
                            <a href="/spelling.html" class="panel-close">
                                Правапіс
                            </a>
                        </div>
                    </div>
                </li>

                <li class="item-content">
                    <div class="item-media">
                        <i class="f7-icons">chat</i>
                    </div>
                    <div class="item-inner">
                        <div class="item-title">
                            <a href="/feedback.html" class="panel-close">
                                Водгук
                            </a>
                        </div>
                    </div>
                </li>


            </ul>
        </div>

    </div>
</div>

<section class="views theme-deeporange">
    <!--
    We use Through-type Navbar layout for dynamic navbar.
    So we keep Navbar as the child of View, and have "navbar-through" class on View
    -->
    <div class="view view-main navbar-through">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="left sliding">
                    <a href="#" class="link icon-only open-panel">
                        <i class="icon icon-bars"></i>
                    </a>
                </div>
                <div class="center sliding">Псалтыр</div>
            </div>
        </div>
        <div class="pages">
            <div data-page="index" class="page">
                <div class="page-content">
                    <p class="text-center">
                        <img data-src="/asset/img/car_David.jpg"
                             class="lazy lazy-fadeIn in-centre promo-img">
                    </p>
                    <div class="content-block theme-red">
                        <h2>Прадмова да псалтыра</h2>
                        <p class="lead">
                            Выданне змяшчае традыцыйна Псалтыр и выбраныя біблейныя песні
                            ў сучасным перакладзе з старагрэцкай мовы айца Аляксандра Надсана.
                            Прызначана для асабістай малітвы хрысціянаў розных канфесій.
                        </p>
                        <p>
                            Псалтыр — адна з кніг Старога Запавету, якая ўяўляе з сябе
                            зборнік з 150 псальмаў.
                            Змест псальмоў вельмі разнастайны. Псалмаспеўцаў натхнялі
                            і гістарычныя падзеі, і асабістыя зменлівасці, што
                            накіроўвалі чалавека да Адзінай Крыніцы спадзеваў, і туга
                            душы па Богу, прасякнутая пакаяннем, падзяка душы невычэрпнай Божай дабрыні,
                            захапленне душы веліччу Творцы, Яго ўсёмагутнасцю і мудрасцю,
                            дасканаласцю Яго стварэння. Ціхія ўздыхі і трыўмфальныя слаўленні ці
                            то гучаць нібы ў самоце, ці то іх падхоплівае розгалас сабранага на малітве народа.
                        </p>

                        <hr/>

                        <blockquote>
                            Всяко писание Богом водъхненое полезно ест ко учению и ко
                            обличению, исправлению и ко наказанию правды. «Да совершен будеть
                            человек Божий и на всяко дело добро уготован», — яко святы и апостол
                            Павел пишеть. И сего ради светые писма уставлена суть к нашему
                            навчению, исправлению, духовному и телесному, различными обычаи:
                            едины законом Ветхым и Новым, другые светыми пророки даны суть нам,
                            иные деянием светых отець, а некые притчами премудрых учителей,
                            некоторые теже песнями и псалмы, от царя Давыда и от иных Божиих
                            певцев сложеными, яко ест Псальтырь.
                        </blockquote>
                        <p class="text-right">
                            <em>Францишек, Скоринин сын с Полоцька</em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/vendors/framework7/dist/js/framework7.min.js"></script>
<script>
    (function () {
        if (Framework7.prototype.device.android) {
            Dom7('head').append(
                    '<link rel="stylesheet" href="/vendors/framework7/dist/css/framework7.material.min.css">' +
                    '<link rel="stylesheet" href="/vendors/framework7/dist/css/framework7.material.colors.min.css">' +
                    '<link rel="stylesheet" href="/asset/css/main.material.css?v=<?= fileHash('asset/css/main.material.css') ?>">'
            );
        }
        else {
            Dom7('head').append(
                    '<link rel="stylesheet" href="/vendors/framework7/dist/css/framework7.ios.min.css">' +
                    '<link rel="stylesheet" href="/vendors/framework7/dist/css/framework7.ios.colors.min.css">' +
                    '<link rel="stylesheet" href="/asset/css/main.ios.css?v=<?= fileHash('asset/css/main.ios.css') ?>">'
            );
        }
    })();
</script>
<script src="/asset/js/main.js?v=<?= fileHash('asset/js/main.js') ?>"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107345674-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-107345674-1');
</script>
</body>
</html>
