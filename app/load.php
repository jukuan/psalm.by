<?php


function psalmMenuLink($i)
{
    return <<<_OUT
        <li class="item-content">
            <div class="item-media">
                <i class="f7-icons">bookmark</i>
            </div>
            <div class="item-inner">
                <div class="item-title">
                    <a href="/content/psalm/$i">
                        Псальм $i
                    </a>
                </div>
            </div>
        </li>
_OUT;

}

function notFound() {
    echo '<p>Адбылася памылка</p>';
    die();
}


function fileHash($path)
{
    $version = '0.1';
    $time = filemtime($path);

    return sprintf('%x', crc32($time . $version));
}
