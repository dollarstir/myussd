<?php

class Menu
{
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'tucevmlk_av', 'Teamwork@2019', 'tucevmlk_av') or die('connection to database failed ');
    }

    public function mainmenu()
    {
        $response = "Welcome to AV Enterprise  \n";
        $response .= "1. Products\n";
        $response .= "2. Orders \n ";
        $response .= "3. About Us \n";

        return $response;
    }

    public function aboutus()
    {
        $response = "Welcome to AV Enterprise . \n";
        $response .= "We are fast growing and also the first USSD based shop accross the globe  \n";

        echo 'END '.$response;
    }

    public function shopping($textlevel, $phoneNumber)
    {
        session_start();
        $level = count($textlevel);
        // displaying Main Category***********************************************************
        if ($level == 1) {
            $res = "Choose a category \n";
            $res .= "1. Electronics\n";
            $res .= "2. Grocery\n";
            $res .= "3. Health & Beauty\n";
            $res .= "4. Fashion\n";
            $res .= "5. Back\n";

            echo 'CON '.$res;
        }
        // displaying Sub Categories********************************************************
        elseif ($level == 2) {
            $category = $textlevel[1];
            if ($category == 1) {
                $res = "Electronics \n";
                $res .= "1. Televison\n";
                $res .= "2. Computer & Accessories\n";
                $res .= "3. Phones\n";
                $res .= "4. Smart Watches\n";
                $res .= "5. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 2) {
                $res = "Grocery \n";
                $res .= "1. Oil\n";
                $res .= "2. Rice\n";
                $res .= "3. Noodle \n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 3) {
                $res = "Health & Beauty \n";
                $res .= "1. Makeup tools\n";
                $res .= "2. Perfumes\n";
                $res .= "3. Oral care\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 4) {
                $res = "Fashion \n";
                $res .= "1. Men Wear\n";
                $res .= "2. Woman Wear\n";

                $res .= "3. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 5) {
                echo 'CON '.$this->mainmenu();
            }
        }

        // Checking users Sub Category & Product under each category***********************************************************
        elseif ($level == 3) {
            $category = $textlevel[1];
            $subcategory = $textlevel[2];
            if ($category == 1 && $subcategory == 1) {
                $res = "Choose a product \n";
                $res .= "1. NASCO TV (GHS700) \n";
                $res .= "2. BRUHM TV (GH950)\n";
                $res .= "3. PANASONIC TV (GH1000)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 1 && $subcategory == 2) {
                $res = "Choose a product \n";
                $res .= "1. Wireless keyboard (GHS40)\n";
                $res .= "2. Hp Pavillion(GHS2500)\n";
                $res .= "3. Dell XPS (GHS7000)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 1 && $subcategory == 3) {
                $res = "Choose a product \n";
                $res .= "1. Techo Spark 4 (GHS700)\n";
                $res .= "2. Huawei Y Prime (GH1000)\n";
                $res .= "3. Iphone 13 Pro Max (GH6500)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 1 && $subcategory == 4) {
                $res = "Choose a product \n";
                $res .= "1. Samsung Smart watch (GHS1200)\n";
                $res .= "2. Apple series 3 Watch (GHS1300)\n";
                $res .= "3. Apple series 6 Watch (GHS1600)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 2 && $subcategory == 1) {
                $res = "Choose a product \n";
                $res .= "1. Frytol (GHS27)\n";
                $res .= "2. Bolgies (GHS32)\n";
                $res .= "3. Olive (GHS34)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 2 && $subcategory == 2) {
                $res = "Choose a product \n";
                $res .= "1. Royal Fist (GHS30)\n";
                $res .= "2. Royal Aroma (GHS36)\n";
                $res .= "3. Jasmine (GHS45)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 2 && $subcategory == 3) {
                $res = "Choose a product \n";
                $res .= "1. Oba Spaghetti(GHS2)\n";
                $res .= "2. Enapa Spaghetti (GHS3)\n";
                $res .= "3.  Indomine (GHS4)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 3 && $subcategory == 1) {
                $res = "Choose a product \n";
                $res .= "1. Eye Lashes (GHS10)\n";
                $res .= "2. Nails (GHS30)\n";
                $res .= "3. Brush (GHS34)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 3 && $subcategory == 2) {
                $res = "Choose a product \n";
                $res .= "1. Color Me (GHS15)\n";
                $res .= "2. MJ Code (GHS60)\n";
                $res .= "3. Brown Orchide (GHS100)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($category == 3 && $subcategory == 3) {
                $res = "Choose a product \n";
                $res .= "1. Mouthwash(GHS5)\n";
                $res .= "2. Colgate charcol (GHS10)\n";
                $res .= "3.  Teeth whiteners (GHS100)\n";
                $res .= "4. Back\n";

                echo 'CON '.$res;
            } elseif ($subcategory == 4) {
                $level == 1;
            }
        }
        // taking the product Quantity from user   ***************************************************************
        elseif ($level == 4) {
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
                return $this->shopping($textlevel, $phoneNumber);
            }
        } elseif ($level == 5) {
            $category = $textlevel[1];
            $subcategory = $textlevel[2];
            $product = $textlevel[3];
            $_SESSION['itemprice'] = 0;
            $_SESSION['itemname'] = '';
            // Category 1*******************************************************************************************

            if ($category == 1) {
                if ($subcategory == 1) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'NASCO TV (GHS700)';
                            $_SESSION['itemprice'] = 700;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'BRUHM TV (GH950)';
                            $_SESSION['itemprice'] = 950;

                            break;
                        case 3:
                            $_SESSION['itemname'] = 'PANASONIC TV (GH1000)';
                            $_SESSION['itemprice'] = 1000;
                            break;
                        default:
                            // code...
                            break;
                    }
                } elseif ($subcategory == 2) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'Wireless keyboard (GHS40)';
                            $_SESSION['itemprice'] = 40;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'Hp Pavillion(GHS2500)';
                            $_SESSION['itemprice'] = 2500;

                            break;
                        case 3:
                            $_SESSION['itemname'] = 'Dell XPS (GHS7000)';
                            $_SESSION['itemprice'] = 7000;
                            break;
                        default:
                            // code...
                            break;
                    }
                } elseif ($subcategory == 3) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'Techo Spark 4 (GHS700)';
                            $_SESSION['itemprice'] = 700;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'Huawei Y Prime (GH1000)';
                            $_SESSION['itemprice'] = 1000;

                            break;
                        case 3:
                            $_SESSION['itemname'] = 'Iphone 13 Pro Max (GH6500)';
                            $_SESSION['itemprice'] = 6500;
                            break;
                        default:
                            // code...
                            break;
                    }
                } elseif ($subcategory == 4) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'Samsung Smart watch (GHS1200)';
                            $_SESSION['itemprice'] = 1200;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'Apple series 3 Watch (GH1300)';
                            $_SESSION['itemprice'] = 1300;

                            break;
                        case 3:
                            $_SESSION['itemname'] = 'Apple series 6 Watch (GH1600)';
                            $_SESSION['itemprice'] = 1600;
                            break;
                        default:
                            // code...
                            break;
                    }
                }
            }
            // Category 2*********************************************************************************************
            elseif ($category == 2) {
                if ($subcategory == 1) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'Frytol (GHS27)';
                            $_SESSION['itemprice'] = 27;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'Bolgies (GHS32)';
                            $_SESSION['itemprice'] = 32;

                            break;
                        case 3:
                            $_SESSION['itemname'] = 'Olive (GHS34)';
                            $_SESSION['itemprice'] = 34;
                            break;
                        default:
                            // code...
                            break;
                    }
                } elseif ($subcategory == 2) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'Royal Fist (GHS30)';
                            $_SESSION['itemprice'] = 30;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'Royal Aroma (GHS36)';
                            $_SESSION['itemprice'] = 36;
                            break;
                        case 3:
                            $_SESSION['itemname'] = 'Jasmine (GHS45)';
                            $_SESSION['itemprice'] = 45;
                            break;
                        default:
                            // code...
                            break;
                    }
                } elseif ($subcategory == 3) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'Oba Spaghetti(GHS2)';
                            $_SESSION['itemprice'] = 2;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'Enapa Spaghetti (GHS3)';
                            $_SESSION['itemprice'] = 3;
                            break;
                        case 3:
                            $_SESSION['itemname'] = 'Indomine (GHS4)';
                            $_SESSION['itemprice'] = 4;
                            break;
                        default:

                            break;
                    }
                }
            }
            // CATEGORY 3*********************************************************************************************

            elseif ($category == 3) {
                if ($subcategory == 1) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'Eye Lashes (GHS10)';
                            $_SESSION['itemprice'] = 10;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'Nails (GHS30)';
                            $_SESSION['itemprice'] = 30;

                            break;
                        case 3:
                            $_SESSION['itemname'] = 'Brush (GHS34)';
                            $_SESSION['itemprice'] = 34;
                            break;
                        default:
                            // code...
                            break;
                    }
                } elseif ($subcategory == 2) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'Color Me (GHS15)';
                            $_SESSION['itemprice'] = 15;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'MJ Code (GHS60)';
                            $_SESSION['itemprice'] = 60;
                            break;
                        case 3:
                            $_SESSION['itemname'] = 'Brown Orchide (GHS100)';
                            $_SESSION['itemprice'] = 100;
                            break;
                        default:
                            // code...
                            break;
                    }
                } elseif ($subcategory == 3) {
                    switch ($product) {
                        case 1:
                            $_SESSION['itemname'] = 'Mouthwash(GHS5)';
                            $_SESSION['itemprice'] = 5;

                            break;
                        case 2:
                            $_SESSION['itemname'] = 'Colgate charcol (GHS10)';
                            $_SESSION['itemprice'] = 10;
                            break;
                        case 3:
                            $_SESSION['itemname'] = 'Teeth whiteners (GHS100)';
                            $_SESSION['itemprice'] = 100;
                            break;
                        default:

                            break;
                    }
                }
            }

            $_SESSION['quantity'] = $textlevel[4];
            $_SESSION['totalprice'] = $_SESSION['itemprice'] * $_SESSION['quantity'];
            $res = 'You have ordered '.$_SESSION['quantity'].' of '.$_SESSION['itemname']."\n";
            $res .= 'Unit Price = '.$_SESSION['itemprice']." \n ";
            $res .= 'Total Price = '.$_SESSION['totalprice']." \n ";
            $res .= "1. Confirm Order\n";
            $res .= "2. Back\n";
            echo 'CON '.$res;
        } elseif ($level == 6) {
            $comfirm = $textlevel[5];
            if ($comfirm == 1) {
                $orderid = rand('111111', '999999');
                $dateadded = date('jS F, Y');

                $ins = mysqli_query($this->conn, "INSERT INTO orders (orderno,product,price,quantity,user,status,dateadded) VALUES('$orderid','".$_SESSION['itemname']."','".$_SESSION['itemprice']."','".$_SESSION['quantity']."','$phoneNumber','pending','$dateadded')");

                $res = "Order confirmed item will be deliverd to $phoneNumber \n";
                $res .= "Order No :$orderid. \n";

                echo 'END '.$res;
            } elseif ($comfirm == 2) {
                echo $this->shopping($textlevel, $phoneNumber);
            }
        }
    }
}
