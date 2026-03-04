<?php

define('BASE_PATH', '/tempaweb');

function url($path = '') {
    return BASE_PATH . '/' . ltrim($path, '/');
}

function layout($file) {
    include __DIR__ . "/../views/layout/$file.php";
}

function component($file, $data = []) {
    extract($data);
    include __DIR__ . "/../views/components/$file.php";
}

function asset($path = '') {
    return BASE_PATH . '/assets/' . ltrim($path, '/');
}
?>