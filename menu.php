<?php

class Menu
{
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'myussd') or die('connection to database failed ');
    }

    public function mainmenu()
    {
        $response = "Welcome to my shop  \n";
        $response .= "1. Products\n";
        $response .= "2. Orders \n ";
        $response .= "3. About Us \n";

        return $response;
    }

    public function category($textlevel, $phoneNumber)
    {
        $level = count($textlevel);
        if ($level == 1) {
            $res = "Choose a category \n";
            $res .= "1. Electtronics\n";
            $res .= "2. Grocery\n";
            $res .= "3. Health & Beauty\n";
            $res .= "4. Fashion\n";
            $res .= "5. Back\n";

            echo 'CON '.$res;
        } elseif ($level == 2) {
            $category = $textlevel[1];
            if ($category == 1) {
                $res = "Choose Sub Category \n";
                $res .= "1. Televison\n";
                $res .= "2. Computer & Accessories\n";
                $res .= "3. Phones\n";
                $res .= "4. Smart Watches\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 2) {
                $res = "Choose a product \n";
                $res .= "1. Coke\n";
                $res .= "2. Pepsi\n";
                $res .= "3. Beta Mult\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 3) {
                return $this->mainmenu();
            }
        } elseif ($level == 3) {
            $product = $textlevel[2];
            if ($product == 1) {
                $res = "Choose a size \n";
                $res .= "1. Small (GH10) \n";
                $res .= "2. Medium (GH20)\n";
                $res .= "3. Large (GH40)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($product == 2) {
                $res = "Choose a size \n";
                $res .= "1. Small (GH20)\n";
                $res .= "2. Medium (GH40)\n";
                $res .= "3. Large (GH50)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($product == 3) {
                $res = "Choose a size \n";
                $res .= "1. Small (GH30)\n";
                $res .= "2. Medium (GH40)\n";
                $res .= "3. Large (GH50)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($product == 4) {
                return $this->category($textlevel, $phoneNumber);
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
                return $this->category($textlevel, $phoneNumber);
            }
        } elseif ($level == 5) {
            $product = $textlevel[2];
            $size = $textlevel[3];

            switch ($product) {
                case '1':
                    $productname = 'Pizza';
                    if ($size == 1) {
                        $productsize = 'Small';
                        $productprice = 10;
                    } elseif ($size == 2) {
                        $productsize = 'Medium';
                        $productprice = 20;
                    } elseif ($size == 3) {
                        $productsize = 'Large';
                        $productprice = 40;
                    }
                    break;

                case '2':
                    $productname = 'Burger';
                    if ($size == 1) {
                        $productsize = 'Small';
                        $productprice = 20;
                    } elseif ($size == 2) {
                        $productsize = 'Medium';
                        $productprice = 40;
                    } elseif ($size == 3) {
                        $productsize = 'Large';
                        $productprice = 50;
                    }
                    break;

                default:
                    // code...
                    break;
            }

            $quantity = $textlevel[4];
            $totalprice = $productprice * $quantity;
            $res = 'You have ordered '.$quantity.' of '.$productname."\n";
            $res .= "Unit Price = $productprice \n ";
            $res .= "Total Price = $totalprice \n ";
            $res .= "1. Confirm Order\n";
            $res .= "2. Back\n";
            echo 'CON '.$res;
        } elseif ($level == 6) {
            $comfirm = $textlevel[5];
            if ($comfirm == 1) {
                $product = $textlevel[2];
                $size = $textlevel[3];

                switch ($product) {
                case '1':
                    $productname = 'Pizza';
                    if ($size == 1) {
                        $productsize = 'Small';
                        $productprice = 10;
                    } elseif ($size == 2) {
                        $productsize = 'Medium';
                        $productprice = 20;
                    } elseif ($size == 3) {
                        $productsize = 'Large';
                        $productprice = 40;
                    }
                    break;

                case '2':
                    $productname = 'Burger';
                    if ($size == 1) {
                        $productsize = 'Small';
                        $productprice = 20;
                    } elseif ($size == 2) {
                        $productsize = 'Medium';
                        $productprice = 40;
                    } elseif ($size == 3) {
                        $productsize = 'Large';
                        $productprice = 50;
                    }
                    break;

                default:
                    // code...
                    break;
            }

                $quantity = $textlevel[4];
                $totalprice = $productprice * $quantity;

                $orderid = rand('111111', '999999');

                $res = "Order confirmed item will be deliverd to $phoneNumber \n";

                echo 'END '.$res;
            } elseif ($comfirm == 2) {
                return $this->category($textlevel, $phoneNumber);
            }
        }
    }
}
