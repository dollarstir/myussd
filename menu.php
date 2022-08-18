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
        } elseif ($level == 2) {
            $category = $textlevel[1];
            if ($category == 1) {
                $res = "Choose a product \n";
                $res .= "1. Pizza\n";
                $res .= "2. Burger\n";
                $res .= "3. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 2) {
                $res = "Choose a product \n";
                $res .= "1. Coke\n";
                $res .= "2. Pepsi\n";
                $res .= "3. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 3) {
                return $this->mainmenu();
            }
        } elseif ($level == 3) {
            $product = $textlevel[2];
            if ($product == 1) {
                $res = "Choose a size \n";
                $res .= "1. Small\n";
                $res .= "2. Medium\n";
                $res .= "3. Large\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($product == 2) {
                $res = "Choose a size \n";
                $res .= "1. Small\n";
                $res .= "2. Medium\n";
                $res .= "3. Large\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($product == 3) {
                $res = "Choose a size \n";
                $res .= "1. Small\n";
                $res .= "2. Medium\n";
                $res .= "3. Large\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($product == 4) {
                return $this->category($textlevel);
            }
        } elseif ($level == 4) {
            $size = $textlevel[3];
            if ($size == 1) {
                $res = "Enter Quantity \n";

                echo 'CON '.$res;
            } elseif ($size == 2) {
                $res = "Enter Quantity \n";

                echo 'CON '.$res;
            } elseif ($size == 3) {
                $res = "Enter Quantity \n";

                echo 'CON '.$res;
            } elseif ($size == 4) {
                return $this->category($textlevel);
            }
        }
    }
}
