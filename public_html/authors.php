<?php

include_once __DIR__ . '/../app/load.php';

$pageTitle = 'Аб аўтарах';

?>
{{#if @global.ios}}
<div class="navbar">
    <div class="navbar-inner">
        <div class="left sliding">
            <a href="#" class="link back icon-only">
                <i class="icon icon-back"></i>
            </a>
        </div>
        <div class="center sliding"><?= $pageTitle ?></div>
    </div>
</div>
{{/if}}

<div class="page" data-page="about">
    {{#if @global.android}}
    <div class="navbar">
        <div class="navbar-inner">
            <div class="left">
                <a href="#" class="link back icon-only">
                    <i class="icon icon-back"></i>
                </a>
            </div>
            <div class="center"><?= $pageTitle ?></div>
        </div>
    </div>
    {{/if}}

    <div class="page-content">
        <div class="content-block theme-red">
            <h2><?= $pageTitle ?></h2>
            <p>
                Багасловы спрачаюцца пра аўтарства псалмоў.
                Большасць псалмоў ранняя хрысціянская традыцыя прыпісвае аўтарства 
                цару Давіду. Хаця на многіх тэкстах відавочны сляды пазнейшага з'яўлення.
                Зрэшты, у тыя аддаленыя часы не існавала
                паняццяў аб аўтарскім праве ў сённяшнім сэнсе слова.
                Прагадванне імёнаў у надпісаннях псальмаў, напрыклад "Давід", магло
                азначаць не толькі аўтарства, але і пасвячэнне псальма Давіду; у некаторых
                выпадках гэтыя значэнні цяжка размежаваць.
            </p>

            <p>
                Ёсць псалмы, надпісаныя імем сыноў Карэевых з дынастыі храмавых
                спевакоў (10 псалмоў), а таксама сучаснікаў Давіда — лявітаў Асафа
                (12 псалмоў), ягонага брата Емана (псалом 87) і іншага спевака — Ефама
                (псалом 88). Псалом 89 прыпісаны Майсею, а псалом 126
                (паводле некаторых старажытных спісаў) — Саламону. Аўтары астатніх псалмоў
                невядомыя.
            </p>

            <p>
                І над усёй гэтай тугой па Богу, над усёй асабістай і жыццёвай журбою
                і духоўнай радасцю пануе адна запаветная існасць, адно нецярплівае чаканне
                — будучага Месіі, думка пра Якога напаўняе дух псалмаспеўцы прароцкім маўленнем.
            </p>

            <p>
                Псалтыр з'яўляецца кнігай паэзіі, спевам душы чалавека да Бога.
                Хрысціянства, якое прыйшло на нашыя землі, адкрыла для нашага
                народа гэтую найпрыгажэйшую паэтычную кнігу Бібліі.
            </p>

            <p>
                У самых тэкстах для некаторых псалмоў наўпрост пазначаны
                аўтары: галоўны Псалмаспевец Давіда Асаф (гл. 1Пар. 16: 5),
                храмавыя брамнікі сыны Карэевыя (Кораха) (1Пар. 09:19), Майсей і
                інш.
            </p>

<!--            <div class="list-block">-->
<!--                <ul>-->
<!--                    <li class="item-content">-->
<!--                        <div class="item-media"><i class="icon icon-f7"></i></div>-->
<!--                        <div class="item-inner">-->
<!--                            <div class="item-title">Дух Святы</div>-->
<!--                            <div class="item-after">Натхняльнік</div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="item-content">-->
<!--                        <div class="item-media"><i class="icon icon-f7"></i></div>-->
<!--                        <div class="item-inner">-->
<!--                            <div class="item-title">Бог Айцец</div>-->
<!--                            <div class="item-after">Стваральнік</div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->

            <p>
                Пераклад на беларускую: айцец <strong>Аляксандр Надсан</strong>.

                Крыніца перакладзенага тэксту: web-сайт chasaslovec.info:
                <a href="http://chasaslovec.info/index.php?newsid=717" class="external">Частка 1</a>,
                <a href="http://chasaslovec.info/index.php?newsid=718" class="external">Частка 2</a>.
            </p>

            <p>
                Прапановы, заўвагі можна дасылаць на
                <a href="mailto:i@juljan.by" class="external">пошту</a>
                вярстальшчыку.
            </p>

        </div>
    </div>
</div>
