<?php

require 'menu.php';
require 'sms.php';

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
                $menu->orders($phoneNumber);
                break;
            case '3':
                $menu->aboutus();

                break;
                default:

                break;
            }
}

        // header('Content-type: text/plain');
