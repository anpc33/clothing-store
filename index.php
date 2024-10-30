<?php
session_start();
include "./Model/pdo.php";
include "./Model/cartpro.php";
include "./dao/product.php";
include "./dao/category.php";
include "./user/view/header.php";
include "global.php";
include "./dao/user.php";
include "./dao/role.php";

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];


$newproducts = products_select_all_home();
$topproducts = products_select_all_topsp();
$listdm = category_select_dm();


if (isset($_GET["act"]) && ($_GET["act"] != "")) {
    $act = $_GET["act"];
    switch ($act) {
        case 'all':
            include "./user/layout/all.php";
            break;
        case 'sale':
            include "./user/layout/sale.php";
            break;
        case 'login':
            if (isset($_POST["dangnhap"])) {
                $User_name = $_POST["username"];
                $Password = $_POST["password"];
                $checkuser = getuser_one_select($User_name, $Password);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    echo "<script>
                            alert('Đăng nhập thành công!');
                            window.location.href = 'index.php';
                            </script>";
                } else {
                    echo  "<script>
                    alert('Vui lòng đăng ký tài khoản để đăng nhập!');
                    </script>";
                }
            }
            include "./user/layout/login.php";
            break;
        case 'register':
            if (isset($_POST["dangky"])) {
                $User_name = $_POST["username"];
                $Email = $_POST["email"];
                $Password = $_POST["password"];
                user_insert_oneall($User_name, $Email, $Password);
                $Notification = "Create account successfully or login";
            }

            include "./user/layout/register.php";
            break;

        case 'detal':
            if (isset($_GET["Products_id"]) && ($_GET["Products_id"] > 0)) {
                $Products_id = $_GET["Products_id"];
                $product_imgall = product_imgall($Products_id);
                $products_similar = prodduct_similar($Products_id);
                $oneproducts = products_one_select($Products_id);

                include "./user/layout/detal.php";
            } else {
                include "./user/view/main.php";
            }

            break;
        case 'topsanpham':
            include "./user/layout/topsanpham.php";
            break;
        case 'bill':
            include "./user/layout/bill.php";
            break;

        case 'Orders':
            include "./user/layout/order.php";
            break;
        case 'cart':
            if (isset($_POST['cart']) && ($_POST['cart'])) {
                $Products_price = $_POST['Products_price'];
                $Products_Sold = $_POST['Products_Sold'];
                $Products_name = $_POST['Products_name'];
                $Products_id = $_POST['Products_id'];
                $hinh = $_POST['hinh'];
                $quantity = 1;
                $total = $quantity * $Products_price;
                $productadd = [$Products_price, $Products_Sold, $Products_name, $Products_id, $hinh, $quantity, $total];
                array_push($_SESSION['cart'], $productadd);
            }
            include "./user/layout/cart.php";
            break;
        case 'productshow':

            if (isset($_POST["keyw"]) && ($_POST["keyw"] != "")) {
                $keyw = $_POST["keyw"];
            } else {
                $keyw = "";
            }

            if (isset($_GET["CategoryID"]) && ($_GET["CategoryID"] > 0)) {
                $CategoryID = $_GET["CategoryID"];
            } else {

                $CategoryID = 0;
            }
            $Catecute = products_select_all($keyw, $CategoryID);
            include "./user/layout/product_show.php";
            break;

        case 'profile':
            if (isset($_POST['capnhatpl']) && ($_POST['capnhatpl'])) {
                $User_name = $_POST['User_name'];
                $Email = $_POST['Email'];
                $User_id = $_POST['User_id'];
                $sql = "UPDATE `user` SET `User_name` = '" . $User_name . "', `Email` = '" . $Email . "'   WHERE  User_id = " . $User_id;
                pdo_execute($sql);
            }
            include "./user/layout/profile.php";
            break;

        case 'forgotpass':
            if (isset($_POST['guimail']) && ($_POST['guimail'])) {

                $Email = $_POST['Email'];
                $checkmail = checkmail($Email);
                if (is_array($checkmail)) {
                    $thongbao = "Mật khẩu của bạn là  : " . $checkmail['Password'];
                } else {
                    $thongbao = " Mail không chính xác";
                }
            }

            include "./user/layout/forgotpass.php";
            break;

        case 'logout':

            ob_start();
            session_unset();
            header("Location: index.php");
            ob_end_clean();
            break;

        case 'delcart':
           
            if (isset($_GET['idcart'])) {
                $idcart = (int) $_GET['idcart']; // Convert to integer for safety
                unset($_SESSION['cart'][$idcart]); // Remove the item by index
            } else {
                $_SESSION['cart'] = []; // Empty the cart if no idcart is provided
            }
            ob_start();
            header("Location: index.php?act=cart");
            ob_end_clean();
            break;



        default:
            include "./user/view/main.php";
            break;
    }
} else {
    include "./user/view/main.php";
}

include "./user/view/footer.php";
