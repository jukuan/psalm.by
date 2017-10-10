<?php

include_once __DIR__ . '/../app/load.php';

$pageTitle = 'Правапіс';

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
                У дадзеным выданні ў тэкстах выкарыстаны стары
                <strong>беларускі клясычны правапіс</strong>, або <strong>тарашкевіца</strong>.
                Такім правапісам карыстаўся перакладчык айцец Аляксандр Надсан.
                У прадмове Скарыны захаваны правапіс аргынінала.
            </p>
            <p>
                Тарашкевіца — правапіс беларускай мовы (у шырэйшым сэнсе — моўная
                норма), заснаваны на літаратурнай норме сучаснай
                беларускай мовы і яе правілах да палітычнай рэформы беларускай
                артаграфіі 1933 году і пэўных акадэмічных прапановах 1930, 1933
                і 1993 гадоў. Зьяўляецца першым унармаваным правапісам
                беларускай мовы і традыцыйным беларускім правапісам у
                сучасным разуменьні.

                Першая нармалізацыя беларускага клясычнага правапісу была
                зробленая Браніславам Тарашкевічам у 1918 годзе і знаходзілася ў
                афіцыйным ужытку да рэформы беларускага правапісу 1933
                году.
            </p>
        </div>
    </div>
</div>
