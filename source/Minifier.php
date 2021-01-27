<?php

/**
 * CSS
 */
$minCss = new MatthiasMullie\Minify\CSS();
//$minCss->add(dirname(__DIR__, 1) . "/public/assets/css/erro.css");
$minCss->add(dirname(__DIR__, 1) . "/public/assets/css/home.css");
$minCss->minify(dirname(__DIR__, 1) . "/public/assets/css/home.min.css");

/**
 * js
 */
$minJs = new MatthiasMullie\Minify\JS();
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/menu.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/scroll.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/whatsapp.js");
$minJs->minify(dirname(__DIR__, 1) . "/public/assets/js/main.min.js");
