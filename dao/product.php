<?php
include_once 'D:/Workspace/yame_shop/Model/pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function product_insert($Products_id, $Products_name, $Products_description, $Products_price, $Products_category, $Products_quantity, $filename, $Products_sku, $Products_Sold, $Products_brand, $Products_Feedback, $Created_at, $Updated_at)
{
    $sql = "INSERT INTO products (Products_id,Products_name,Products_description,Products_price,Products_category ,Products_quantity,Products_img,Products_sku, Products_Sold,Products_brand ,Products_Feedback, Created_at,Updated_at) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $Products_id, $Products_name, $Products_description, $Products_price, $Products_category, $Products_quantity, $filename, $Products_sku, $Products_Sold, $Products_brand, $Products_Feedback, $Created_at, $Updated_at);
}

function products_select_all($keyw="", $Idcate=0)
{
    $sql = "SELECT * FROM products WHERE 1";
    if ($keyw != "") {
        $sql .= " and Products_name like '%" . $keyw . "%' ";
    }
    if ($Idcate > 0) {
        $sql .= " and Products_category= '" . $Idcate . "' ";
    }
    $sql .= " order by Products_id desc";

    $listpro = pdo_query($sql);
    return $listpro;
}


function products_select_all_home()
{
    $sql = "SELECT * FROM products WHERE 1 order by Products_id desc limit 0,8";
    $listpro = pdo_query($sql);
    return $listpro;
}

function products_select_all_topsp()
{
    $sql = "SELECT * FROM products WHERE 1 order by Products_Sold desc limit 0,8";
    $listpro = pdo_query($sql);
    return $listpro;
}

function products_one_select($Products_id)
{
    $sql = "SELECT * FROM products WHERE Products_id=" . $Products_id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function prodduct_similar($Products_id)
{
    $sql = "SELECT * FROM products WHERE  Products_id<>" . $Products_id;
    $sp = pdo_query($sql);
    return $sp;
}


function product_imgall($Products_id)
{
    $sql = "SELECT * FROM `images` WHERE  Products_id=". $Products_id;
    $sp = pdo_query($sql);
    return $sp;
}
function productssss_select_all(){
    $sql = "SELECT * FROM products";
    return pdo_query($sql);
}
