<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = str_replace(BASE_PATH, '', $uri);

if ($uri === '' || $uri === '/') {
    $uri = '/home';
}

$page = __DIR__ . '/views/pages' . $uri . '.php';

if (!file_exists($page)) {
    http_response_code(404);
    $page = __DIR__ . '/views/pages/404.php';
}

ob_start();
require $page;
$content = ob_get_clean();

require __DIR__ . '/layout.php';