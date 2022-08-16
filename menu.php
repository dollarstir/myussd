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

    public function category()
    {
    }
}
