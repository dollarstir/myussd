<?php

require 'menu.php';
$menu = new Menu();

$sessionId = $_POST['sessionId'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber = $_POST['phoneNumber'];
$text = $_POST['text'];

if ($text == '') {
    echo 'CON '.$menu->mainmenu();
} else {
    $textlevel = explode('*', $text);
    switch ($textlevel[0]) {
        case '1':
            $menu->shopping($textlevel, $phoneNumber);
            break;
            case '2':
                echo 'END';
                break;
                default:
                echo 'END'.$menu->aboutus();
                break;
            }
}

        // header('Content-type: text/plain');
