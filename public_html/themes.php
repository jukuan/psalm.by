<?php

include_once __DIR__ . '/../app/load.php';

$items = [
    'Праслаўленьне Бога' => [8, 17, 18, 23, 28, 33, 44, 45, 46, 47, 49, 65, 75, 76, 92, 94, 95, 96, 98, 103, 110, 112, 113, 133, 138, 141, 144, 148, 150],
    'Падзяка дабрадзейнасць народу' => [45, 47, 64, 65, 67, 75, 80, 84, 97, 104, 123, 125, 128, 134, 135, 149],
    'Падзяка дабрадзейнасць добрым' => [22, 33, 35, 90, 99, 102, 111, 117, 120, 144, 145],
    'Слаўленьне дабраты Бога' => [9, 17, 21, 29, 39, 74, 102, 107, 115, 117, 137, 143],
    'Прашэньне прабачэння грахоў' => [6, 24, 31, 37, 50, 101, 129, 142],
    'Спадзяваньне на Бога' => [3, 12, 15, 21, 26, 30, 53, 55, 56, 60, 61, 68,70, 76, 85, 87],
    'Зварот да Бога ў смутку' => [4, 5, 10, 27, 40, 54, 58, 63, 69, 108, 119, 136, 139, 140, 142],
    'Прашэньне дапамогі Божай' => [7, 16, 19, 25, 34, 43, 59, 66, 73, 78, 79, 82, 88, 93, 101, 121, 128, 131, 143],
];

$pageTitle = 'Псальмы па тэмам';

?>
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

<div class="page" data-page="page-themes">
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
