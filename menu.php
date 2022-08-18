<?php

class Menu
{
    public function mainmenu()
    {
        $response = "Welcome to my shop  \n";
        $response .= "1. Products\n";
        $response .= "2. Orders \n ";
        $response .= "3. About Us \n";

        return $response;
    }

    public function category($textlevel)
    {
        $level = count($textlevel);
        if ($level == 1) {
            $res = "Choose a category \n";
            $res .= "1. Food\n";
            $res .= "2. Drinks\n";
            $res .= "3. Back\n";
            echo 'CON '.$res;
        }
    }
}
