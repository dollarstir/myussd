<?php

// require 'sms.php';
class Menu
{
    public $conn;
    public $senderid;
    public $recipient;
    // public $apikey;
    public $message;
    public $client;

    public function __construct()
    {
        $this->client = 'https://apps.mnotify.net/smsapi';
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

    public function orders($phoneNumber)
    {
        $res = '';

        $sel = mysqli_query($this->conn, "SELECT * FROM orders WHERE  user ='$phoneNumber' ORDER BY id DESC ");
        while ($row = mysqli_fetch_array($sel)) {
            $res .= $row['ordno'].' - '.$row['product'].' - '.$row['status']."\n";
            // code...
        }
        echo 'END '.$res;
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
                $prod = '';
                $quant = $textlevel[4];
                $pr = 0;

                $category = $textlevel[1];
                $subcategory = $textlevel[2];
                $product = $textlevel[3];

                // Category 1*******************************************************************************************

                if ($category == 1) {
                    if ($subcategory == 1) {
                        switch ($product) {
                        case 1:
                            $prod = 'NASCO TV (GHS700)';
                            $pr = 700;

                            break;
                        case 2:
                            $prod = 'BRUHM TV (GH950)';
                            $_SESSION['itemprice'] = 950;

                            break;
                        case 3:
                            $prod = 'PANASONIC TV (GH1000)';
                            $pr = 1000;
                            break;
                        default:
                            // code...
                            break;
                    }
                    } elseif ($subcategory == 2) {
                        switch ($product) {
                        case 1:
                            $prod = 'Wireless keyboard (GHS40)';
                            $pr = 40;

                            break;
                        case 2:
                            $prod = 'Hp Pavillion(GHS2500)';
                            $pr = 2500;

                            break;
                        case 3:
                            $prod = 'Dell XPS (GHS7000)';
                            $pr = 7000;
                            break;
                        default:
                            // code...
                            break;
                    }
                    } elseif ($subcategory == 3) {
                        switch ($product) {
                        case 1:
                            $prod = 'Techo Spark 4 (GHS700)';
                            $pr = 700;

                            break;
                        case 2:
                            $prod = 'Huawei Y Prime (GH1000)';
                            $pr = 1000;

                            break;
                        case 3:
                            $prod = 'Iphone 13 Pro Max (GH6500)';
                            $pr = 6500;
                            break;
                        default:
                            // code...
                            break;
                    }
                    } elseif ($subcategory == 4) {
                        switch ($product) {
                        case 1:
                            $prod = 'Samsung Smart watch (GHS1200)';
                            $pr = 1200;

                            break;
                        case 2:
                            $prod = 'Apple series 3 Watch (GH1300)';
                            $pr = 1300;

                            break;
                        case 3:
                            $prod = 'Apple series 6 Watch (GH1600)';
                            $pr = 1600;
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
                            $prod = 'Frytol (GHS27)';
                            $pr = 27;

                            break;
                        case 2:
                            $prod = 'Bolgies (GHS32)';
                            $pr = 32;

                            break;
                        case 3:
                            $prod = 'Olive (GHS34)';
                            $pr = 34;
                            break;
                        default:
                            // code...
                            break;
                    }
                    } elseif ($subcategory == 2) {
                        switch ($product) {
                        case 1:
                            $prod = 'Royal Fist (GHS30)';
                            $pr = 30;

                            break;
                        case 2:
                            $prod = 'Royal Aroma (GHS36)';
                            $pr = 36;
                            break;
                        case 3:
                            $prod = 'Jasmine (GHS45)';
                            $pr = 45;
                            break;
                        default:
                            // code...
                            break;
                    }
                    } elseif ($subcategory == 3) {
                        switch ($product) {
                        case 1:
                            $prod = 'Oba Spaghetti(GHS2)';
                            $pr = 2;

                            break;
                        case 2:
                            $prod = 'Enapa Spaghetti (GHS3)';
                            $pr = 3;
                            break;
                        case 3:
                            $prod = 'Indomine (GHS4)';
                            $pr = 4;
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
                            $prod = 'Eye Lashes (GHS10)';
                            $pr = 10;

                            break;
                        case 2:
                            $prod = 'Nails (GHS30)';
                            $pr = 30;

                            break;
                        case 3:
                            $prod = 'Brush (GHS34)';
                            $pr = 34;
                            break;
                        default:
                            // code...
                            break;
                    }
                    } elseif ($subcategory == 2) {
                        switch ($product) {
                        case 1:
                            $prod = 'Color Me (GHS15)';
                            $pr = 15;

                            break;
                        case 2:
                            $prod = 'MJ Code (GHS60)';
                            $pr = 60;
                            break;
                        case 3:
                            $prod = 'Brown Orchide (GHS100)';
                            $pr = 100;
                            break;
                        default:
                            // code...
                            break;
                    }
                    } elseif ($subcategory == 3) {
                        switch ($product) {
                        case 1:
                            $prod = 'Mouthwash(GHS5)';
                            $pr = 5;

                            break;
                        case 2:
                            $prod = 'Colgate charcol (GHS10)';
                            $pr = 10;
                            break;
                        case 3:
                            $prod = 'Teeth whiteners (GHS100)';
                            $pr = 100;
                            break;
                        default:

                            break;
                    }
                    }
                }

                $ins = mysqli_query($this->conn, "INSERT INTO orders (ordno,product,price,quantity,user,status,dateadded) VALUES('$orderid','$prod','$pr','$quant','$phoneNumber','pending','$dateadded')");
                $message = "Order $orderid successful item will be deliverd to $phoneNumber when confirmed.";
                $this->sms('AV Mall', $phoneNumber, $message);
                $res = "Order successful, item will be deliverd to $phoneNumber when confirmed. \n";
                $res .= "Order No :$orderid. \n";

                echo 'END '.$res;
            } elseif ($comfirm == 2) {
                echo $this->shopping($textlevel, $phoneNumber);
            }
        }
    }

    // smsfunctions**************************************************************************

    public function sms($senderid, $recipient, $message)
    {
        $url = $this->client.'?key=7j4dvJq18adHHitlkBgLiHP9j&to='.$recipient.'&msg='.$message.'&sender_id='.$senderid;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $result = curl_exec($ch);
        $result = json_decode($result);
        // echo($result->code);
        curl_close($ch);

        return $this->responses($result->code);
        // return $status;
    }

    private function responses($response)
    {
        $status = '';
        switch ($response) {
            case '1000':
                $status = 'Messages has been sent successfully';

                return $status;
                break;
            case '1002':
                $status = 'SMS sending failed. Might be due to server error or other reason';

                return $status;
                break;
            case '1003':
                $status = 'Insufficient SMS credit balance';

                return $status;
                break;
            case '1004':
                $status = 'Invalid API Key';

                return $status;
                break;
            case '1005':
                $status = 'Invalid recipient\'s phone number';

                return $status;
                break;
            case '1006':
                $status = 'Invalid sender id. Sender id must not be more than 11 characters. Characters include white space';

                return $status;
                break;
            case '1007':
                $status = 'Message scheduled for later delivery';

                return $status;
                break;
            case '1008':
                $status = 'Empty Message';

                return $status;
                break;
            case '1012':
                    $status = 'Sender ID is not registered';

                    return $status;
                    break;
            case '1011':
                $status = 'Numeric Sender IDs are not allowed';

                return $status;
                break;
            default:
                return $status = 'failed';
                break;

        return $status;
        }
    }
}
