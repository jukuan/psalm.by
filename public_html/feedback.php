<?php

include_once __DIR__ . '/../app/load.php';

$pageTitle = 'Зваротная сувязь';

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
                Вы можаце даслаць водгук ці параду. Будзем удзячныя вам і адкажам, калі зварот таго вымагае.
            </p>
            <p>
                Дзякуй!
            </p>

            <div class="list-block form">
                <ul>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon f7-icons">person</i></div>
                            <div class="item-inner">
                                <div class="item-title label">Імя</div>
                                <div class="item-input">
                                    <input name="name" type="text" placeholder="Назавіце сябе">
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon f7-icons">email</i></div>
                            <div class="item-inner">
                                <div class="item-title label">Email</div>
                                <div class="item-input">
                                    <input name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="align-top">
                        <div class="item-content">
                            <div class="item-media"><i class="icon f7-icons">chat</i></div>
                            <div class="item-inner">
                                <div class="item-title label">Тэкст</div>
                                <div class="item-input">
                                    <textarea name="text"></textarea>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <a href="#" class="button active form-to-data">Даслаць</a>
            </div>

        </div>
    </div>
</div>
