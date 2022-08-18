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

            return $res;
        } elseif ($level == 2) {
            $category = $textlevel[1];
            if ($category == 1) {
                $res = "Choose a product \n";
                $res .= "1. Pizza\n";
                $res .= "2. Burger\n";
                $res .= "3. Back\n";

                return $res;
            } elseif ($category == 2) {
                $res = "Choose a product \n";
                $res .= "1. Coke\n";
                $res .= "2. Pepsi\n";
                $res .= "3. Back\n";

                return $res;
            } elseif ($category == 3) {
                return $this->mainmenu();
            }
        }
    }
}
