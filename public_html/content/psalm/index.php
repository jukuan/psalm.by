<?php

include_once __DIR__ . '/../../app/functions.php';

$p = (int) (isset($_GET['p']) ? $_GET['p'] : 0);

$showUpdateBtn = false;
if ($p < 1 || $p > 150) {
    $p = rand(1, 150);
    $showUpdateBtn = true;
}

$filePath = __DIR__ . '/p' .$p . '.txt';
if (!$p || !file_exists($filePath)) {
    notFound();
}

$title = 'Псалoм ' . $p;
$content = file_get_contents($filePath);

$content = str_replace(PHP_EOL, "\n", $content);
$content = str_replace("\r", '', $content);
$content = str_replace('*', "\n", $content);
$content = explode("\n", $content);

if (isset($content[0][0])) {
    $content[0] = "<p class=\"text-center\"><em>$content[0]</em></p>";
}

$content = array_filter($content, function ($txt) {
    return isset($txt[0]);
});

$content = array_map(function ($txt) {
    $txt = trim($txt);
    if ('Слава... цяпер...' == $txt) {
        $txt = "<strong>$txt</strong>";
    } else if (strpos($txt, 'СТАЯНЬНЕ')) {
        $txt = "<h4 class=\"text-center\">$txt</h4>";
    }

    return $txt;
}, $content);

$content = implode('<br/>', $content);

?>
{{#if @global.ios}}
<div class="navbar">
    <div class="navbar-inner">
        <div class="left">
            <a href="#" class="link back icon-only">
                <i class="icon icon-back"></i>
            </a>
        </div>
        <div class="center"><?= $title ?></div>
    </div>
</div>
{{/if}}

<div data-page="psalm-<?= $i ?>" class="page">
    {{#if @global.android}}
    <div class="navbar">
        <div class="navbar-inner">
            <div class="left">
                <a href="#" class="link back icon-only">
                    <i class="icon icon-back"></i>
                </a>
            </div>
            <div class="center"><?= $title ?></div>
        </div>
    </div>
    {{/if}}

    <div class="page-content">
        <div class="content-block">
            <?php if ($showUpdateBtn): ?>
                <div class="row">
                    <div class="col-33"></div>
                    <div class="col-33">
                        <a href="/content/psalm/0?c=<?= uniqid() ?>" class="active button">Абнавіць</a>
                    </div>
                    <div class="col-33"></div>
                </div>
            <?php endif; ?>
            <h2><?= $title ?></h2>
            <?= $content ?>
        </div>
    </div>
</div>

