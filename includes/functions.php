<?php

function layout($file) {
    include __DIR__ . "/../views/layout/$file.php";
}

function component($file, $data = []) {
    extract($data);
    include __DIR__ . "/../views/components/$file.php";
}

?>