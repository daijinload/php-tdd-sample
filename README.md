# phptest

samples

~~~~
index.php
<?php

require 'vendor/autoload.php';

$hoge = new Daijinload\Phptest\Hoge();
echo $hoge->say();

$fuga = new Daijinload\Phptest\sub\Fuga();
echo $fuga->say();
~~~~

~~~~
composer.json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/daijinload/phptest"
        }
    ],
    "require": {
        "daijinload/phptest": "*"
    }
}
~~~~
