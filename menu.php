<?php

class Menu
{
    public function mainmenu()
    {
        $response = 'Welcome to my shop  \n';
        $response .= '1. Products';
        $response .= '2. Orders ';
        $response .= '3. About Us';

        return $response;
    }

    public function category($textlevel)
    {
        $level = count($textlevel);
        if ($level == 1) {
            $res = 'Choose a category \n';
            $res .= '1. Food';
            $res .= '2. Drinks';
            $res .= '3. Back';
        }
    }
}
