<?php

require 'menu.php';
$menu = new Menu();

$sessionId = $_POST['sesionId'];
$serviceCode = $_POST['serviceCode'];
$phoneNumer = $_POST['phoneNumer'];
$text = $_POST['text'];

if ($text == '') {
    echo 'CON '.$menu->mainmenu();
} else {
    $textlevel = explode('*', $text);
    switch ($textlevel[0]) {
        case '1':
            echo 'CON'.$menu->category($textlevel);
            break;
        case '2':
            echo 'END';
            break;
        default:
            echo 'END';
            break;
    }
}
