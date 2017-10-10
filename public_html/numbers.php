<?php

include_once __DIR__ . '/../app/load.php';

$items = [
    'Нумары 1-30' => range(1, 30),
    'Нумары 31-60' => range(31, 60),
    'Нумары 61-90' => range(61, 90),
    'Нумары 91-120' => range(91, 120),
    'Нумары 121-150' => range(121, 150),
];

$pageTitle = 'Псальмы па нумарацыі';

?>
{{#if @global.ios}}
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

<div class="page" data-page="page-numbers">
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
            <div class="list-block">
                <ul>
                    <?php foreach($items as $title => $list): ?>
                        <li class="accordion-item">
                            <a href="" class="item-link item-content">
                                <div class="item-inner">
                                    <div class="item-title"><?= $title ?></div>
                                </div>
                            </a>
                            <div class="accordion-item-content">
                                <ul>
                                    <?php foreach ($list as $i) {
                                        echo psalmMenuLink($i);
                                    } ?>
                                </ul>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <p class="text-center">
                <img data-src="/asset/img/Jesus_gen_tree.jpg"
                     class="lazy lazy-fadeIn in-centre promo-img">
            </p>
        </div>
    </div>
</div>
