<?php
include "../Model/pdo.php";
include "./shared/pop/header.php";
include "../dao/category.php";
include "../dao/product.php";
include "../dao/role.php";
include "../dao/user.php";
include "../dao/comment.php";
include "../dao/img.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    // Category;
    switch ($act) {
        case 'listimg':
            $sql = "SELECT * FROM `images`";
            $listimg = pdo_query($sql);
            include "./view/img/list.php";
            break;

        case 'createimg':
            if (isset($_POST['sos']) && ($_POST['sos'])) {
                $filename = $_FILES['Thumbnail']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["Thumbnail"]["name"]);

                if (move_uploaded_file($_FILES["Thumbnail"]["tmp_name"], $target_file)) {
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }

                # code...

                $Products_id = $_POST["Products_id"];

                img_insert($ImageID = null, $Products_id, $filename);
                $Notification = "Successfully Created";
                if ($Notification = "") {
                    echo "Error";
                } else {
                    header("location:index.php?act=listimg");
                }
            }
            $product_sle = productssss_select_all();
            include "./view/img/add.php";
            break;

        case 'deleteimg':
            if (isset($_GET['ImageID']) && $_GET['ImageID'] > 0) {
                $sql = "DELETE FROM images WHERE ImageID=" . $_GET["ImageID"];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM `images`";
            $listimg = pdo_query($sql);
            include "./view/img/list.php";
            break;










        case 'listcategory':
            $sql = "SELECT * FROM `category`";
            $listcante = pdo_query($sql);
            include "./view/category/listcategory.php";
            break;

        case 'createcategory':
            if (isset($_POST['save']) && ($_POST['save'])) {
                # code...
                $CategoryName = $_POST["CategoryName"];
                $Thumbnail = $_POST["Thumbnail"];
                $Description = $_POST["Thumbnail"];
                cate_insert($CategoryID = null, $CategoryName, $Thumbnail, $Description);
                $Notification = "Successfully Created";
                if ($Notification = "") {
                    echo "Error";
                } else {
                    header("location:index.php?act=listcategory");
                }
            }

            include "./view/category/creategory.php";
            break;

        case 'deletecategory':
            if (isset($_GET['CategoryID']) && $_GET['CategoryID'] > 0) {
                $sql = "DELETE FROM category WHERE CategoryID =" . $_GET["CategoryID"];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM `category`";
            $listcante = pdo_query($sql);
            include "./view/category/listcategory.php";
            break;



        case 'updatecategory':


            if (isset($_GET['CategoryID']) && $_GET['CategoryID'] > 0) {
                $sql = "SELECT * FROM category WHERE CategoryID=" . $_GET["CategoryID"];
                $cateup = pdo_query_one($sql);
            }
            include "./view/category/updatecate.php";
            break;

        case 'updatecate':
            if (isset($_POST['updatecatepro']) && ($_POST['updatecatepro'])) {
                $CategoryID = $_POST["CategoryID"];
                $CategoryName = $_POST["CategoryName"];
                $Thumbnail = $_POST["Thumbnail"];
                $Description = $_POST["Thumbnail"];
                $sql = "UPDATE `category` SET `CategoryName` = '" . $CategoryName . "', `Thumbnail` = '" . $Thumbnail . "', `Description` = '" . $Description . "' WHERE  CategoryID = " . $CategoryID;
                pdo_execute($sql);
                $Notification = "Successfully Update";
                if ($Notification = "") {
                    echo "Error";
                } else {
                    header("location:index.php?act=listcategory");
                }
            }

            $sql = "SELECT * FROM `category`";
            $listcante = pdo_query($sql);
            include "./view/category/listcategory.php";
            break;




            // Product 

        case 'listproduct':

            if (isset($_POST['search']) && ($_POST['search'])) {
                $keyw = $_POST["keyword"];
                $Idcate = $_POST["Products_category"];
            } else {
                $keyw = "";
                $Idcate = 0;
            }

            $listpro = products_select_all($keyw, $Idcate);
            $cateselect = cate_select_all();
            include "./view/product/list.php";
            break;

        case 'createproduct':
            if (isset($_POST['done']) && ($_POST['done'])) {
                $filename = $_FILES['Products_img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["Products_img"]["name"]);

                if (move_uploaded_file($_FILES["Products_img"]["tmp_name"], $target_file)) {
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }

                # code...
                $Products_name  = $_POST["Products_name"];
                $Products_description = $_POST["Products_description"];
                $Products_price = (int)$_POST["Products_price"];
                $Products_category  = $_POST["Products_category"];
                $Products_quantity = $_POST["Products_quantity"];

                $Products_sku  = $_POST["Products_sku"];
                $Products_Sold = $_POST["Products_Sold"];
                $Products_brand = $_POST["Products_brand"];
                $Products_Feedback = $_POST["Products_Feedback"];
                $Created_at = $_POST["Created_at"];
                $Updated_at = $_POST["Updated_at"];
                product_insert($Products_id = null, $Products_name, $Products_description, $Products_price, $Products_category, $Products_quantity, $filename, $Products_sku, $Products_Sold, $Products_brand, $Products_Feedback, $Created_at, $Updated_at);
                $Notification = "Successfully Created";
                if ($Notification = "") {
                    echo "Error";
                } else {
                    header("location:index.php?act=listproduct");
                }
            }
            $cateselect = cate_select_all();
            include "./view/product/create.php";
            break;


        case 'deleteproduct':
            if (isset($_GET['Products_id']) && $_GET['Products_id'] > 0) {
                $sql = "DELETE FROM products WHERE Products_id =" . $_GET["Products_id"];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM `products`";
            $listpro = pdo_query($sql);
            include "./view/product/list.php";
            break;


        case 'updateproduct':
            if (isset($_GET['Products_id']) && $_GET['Products_id'] > 0) {
                $sql = "SELECT * FROM products WHERE Products_id=" . $_GET["Products_id"];
                $productup = pdo_query_one($sql);
            }
            $cateselect = cate_select_all();
            include "./view/product/updatepro.php";
            break;

        case 'updatepro':
            if (isset($_POST['updatepro1']) && ($_POST['updatepro1'])) {

                $filename = $_FILES['Products_img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["Products_img"]["name"]);

                if (move_uploaded_file($_FILES["Products_img"]["tmp_name"], $target_file)) {
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }

                # code...

                $Products_id  = $_POST["Products_id"];
                $Products_name  = $_POST["Products_name"];
                $Products_description = $_POST["Products_description"];
                $Products_price = $_POST["Products_price"];
                $Products_category  = $_POST["Products_category"];
                $Products_quantity = $_POST["Products_quantity"];

                $Products_sku  = $_POST["Products_sku"];
                $Products_Sold = $_POST["Products_Sold"];
                $Products_brand = $_POST["Products_brand"];
                $Products_Feedback = $_POST["Products_Feedback"];
                $Created_at =  $_POST["Created_at"];
                $Updated_at = $_POST["Updated_at"];
                if (empty($Created_at)) {
                    $Created_at = date('Y-m-d H:i:s'); // Set default value
                }
                if (empty($Updated_at)) {
                    $Updated_at = date('Y-m-d H:i:s'); // Set default value
                }


                $sql = "UPDATE `products` SET `Products_name` = '" . $Products_name . "', `Products_description` = '" . $Products_description . "', `Products_price` = '" . $Products_price .  "' ,`Products_category` = '" . $Products_category .  "' , `Products_quantity` = '" . $Products_quantity .  "' , `Products_img` = '" . $filename .  "' , `Products_sku` = '" . $Products_sku .  "' , `Products_Sold` = '" . $Products_Sold .  "' , `Products_brand` = '" . $Products_brand .  "' , `Products_Feedback` = '" . $Products_Feedback .  "' , `Created_at` = '" . $Created_at .  "' , `Updated_at` = '" . $Updated_at .  "'  WHERE  Products_id = " . $Products_id;
                pdo_execute($sql);
                $Notification = "Successfully Update";
                if ($Notification = "") {
                    echo "Error";
                } else {
                    ob_start();
                    header("location:index.php?act=listproduct");
                    ob_end_clean();
                }
            }

            $sql = "SELECT * FROM `products`";
            $listpro = pdo_query($sql);
            include "./view/product/list.php";
            break;

            // User
        case 'listuser':
            $sql = "SELECT * FROM `user`";
            $listuser = pdo_query($sql);
            include "./view/user/list.php";
            break;

        case 'createuser':
            if (isset($_POST['done']) && ($_POST['done'])) {
                # code...
                $User_name  = $_POST["User_name"];
                $Email = $_POST["Email"];
                $Password  = $_POST["Password"];
                $Role_id   = $_POST["Role_id"];
                user_insert($User_id  = null, $User_name, $Email, $Password, $Role_id);
                $Notification = "Successfully Created";
                if ($Notification = "") {
                    echo "Error";
                } else {
                    header("location:index.php?act=listuser");
                }
            }
            $roleselect = role_select_all();
            include "./view/user/add.php";
            break;




        case 'deleteuser':
            if (isset($_GET['User_id']) && $_GET['User_id'] > 0) {
                $sql = "DELETE FROM user WHERE User_id =". $_GET['User_id'];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM `user`";
            $listuser = pdo_query($sql);
            $cateselect = cate_select_all();
            include "./view/user/list.php";
            break;

        case 'updateuser':
            if (isset($_GET['User_id']) && $_GET['User_id'] > 0) {
                $sql = "SELECT * FROM user WHERE User_id=" . $_GET["User_id"];
                $userup = pdo_query_one($sql);
            }
            include "./view/user/update.php";
            break;

        case 'updateuserpro':
            if (isset($_POST['doneabc']) && ($_POST['doneabc'])) {
                $User_id  = $_POST["User_id"];
                $User_name  = $_POST["User_name"];
                $Email = $_POST["Email"];
                $Password  = $_POST["Password"];
                $Role_id   = $_POST["Role_id"];
                if (empty($Created_at)) {
                    $Created_at = date('Y-m-d H:i:s'); // Set default value
                }
                if (empty($Updated_at)) {
                    $Updated_at = date('Y-m-d H:i:s'); // Set default value
                }
                $sql = "UPDATE `user` SET `User_name` = '" . $User_name . "', `Email` = '" . $Email . "' ,`Password` = '" . $Password .  "' , `Role_id` = '" . $Role_id .  "' WHERE  User_id = " . $User_id;
                pdo_execute($sql);
                $Notification = "Successfully Update";
                if ($Notification = "") {
                    echo "Error";
                } else {
                    header("location:index.php?act=listuser");
                }
            }

            $sql = "SELECT * FROM `user`";
            $listuser = pdo_query($sql);
            $cateselect = cate_select_all();
            include "./view/user/list.php";
            break;


            // Comment 
        case 'listcomment':
            $sql = "SELECT * FROM `feedback`";
            $listcomment = pdo_query($sql);
            include "./view/comment/list.php";
            break;

        case 'createcomment':
            if (isset($_POST['savecomment']) && ($_POST['savecomment'])) {
                # code...
                $Products_id   = $_POST["Products_id"];
                $User_id  = $_POST["User_id"];
                $Star = $_POST["Star"];
                $Reviews  = $_POST["Reviews"];
                $CreatedAt = $_POST["CreatedAt"];
                comment_insert($Feedback_id = null, $Products_id, $User_id, $Star, $Reviews, $CreatedAt);
                $Notification = "Successfully Created";
                if ($Notification = "") {
                    echo "Error";
                } else {
                    header("location:index.php?act=listcomment");
                }
            }
            $productselect  = products_select_all($keyw = "", $Idcate = 0);
            $userselect  = user_select_all();
            include "./view/comment/add.php";
            break;



        case 'deletecomment':
            if (isset($_GET['Feedback_id']) && $_GET['Feedback_id'] > 0) {
                $sql = "DELETE FROM feedback WHERE Feedback_id =" . $_GET["Feedback_id"];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM `feedback`";
            $listcomment = pdo_query($sql);
            include "./view/comment/list.php";
            break;

        case 'updatecomment':
            if (isset($_GET['Feedback_id']) && $_GET['Feedback_id'] > 0) {
                $sql = "SELECT * FROM feedback WHERE Feedback_id=" . $_GET["Feedback_id"];
                $commentup = pdo_query_one($sql);
            }
            $productselect  = products_select_all($keyw = "", $Idcate = 0);
            $userselect  = user_select_all();
            include "./view/comment/update.php";
            break;



        case 'updatecompro':
            if (isset($_POST['savecomment']) && ($_POST['savecomment'])) {
                $Feedback_id  = $_POST["Feedback_id"];
                $Products_id  = $_POST["Products_id"];
                $User_id  = $_POST["User_id"];
                $Star = $_POST["Star"];
                $Reviews  = $_POST["Reviews"];
                $CreatedAt = $_POST["CreatedAt"];

                if (empty($CreatedAt)) {
                    $CreatedAt = date('Y-m-d H:i:s'); // Set default value
                }


                $sql = "UPDATE `feedback` SET `Products_id` = '" . $Products_id . "', `User_id` = '" . $User_id . "', `Star` = '" . $Star .  "' ,`Reviews` = '" . $Reviews .  "' , `CreatedAt` = '" . $CreatedAt .  "'  WHERE  Feedback_id = " . $Feedback_id;
                pdo_execute($sql);
                $Notification = "Successfully Update";
                if ($Notification = "") {
                    echo "Error";
                } else {
                    header("location:index.php?act=listcomment");
                }
            }

            $sql = "SELECT * FROM `feedback`";
            $listcomment = pdo_query($sql);
            include "./view/comment/list.php";
            break;





        default:
            include "./shared/pop/main.php";
            break;
    }
} else {
    include "./shared/pop/main.php";
}








include "./shared/pop/footer.php";
