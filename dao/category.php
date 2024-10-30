<?php
include_once 'D:/Workspace/yame_shop/Model/pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function cate_insert($CategoryID ,$CategoryName, $Thumbnail, $Description=null){
    $sql = "INSERT INTO category (CategoryID,CategoryName,Thumbnail,Description) VALUES(?,?,?,?)";
    pdo_execute($sql,$CategoryID, $CategoryName, $Thumbnail,$Description );
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function cate_update($CategoryID ,$CategoryName, $Thumbnail, $Description){
    $sql = "UPDATE category SET  CategoryName=? , Thumbnail=? , Description=?  WHERE CategoryID=?";
    pdo_execute($sql, $CategoryName, $Thumbnail,$Description ,$CategoryID );
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function cate_delete($CategoryID){
    $sql = "DELETE FROM CategoryID WHERE CategoryID=?";
    if(is_array($CategoryID)){
        foreach ($CategoryID as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $CategoryID);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function cate_select_all(){
    $sql = "SELECT * FROM category";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function category_select_by_id($CategoryID){
    $sql = "SELECT * FROM CategoryID WHERE CategoryID=?";
    return pdo_query_one($sql, $CategoryID);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function cate_exist($CategoryID){
    $sql = "SELECT count(*) FROM category WHERE CategoryID=?";
    return pdo_query_value($sql, $CategoryID) > 0;
}


function category_select_dm(){
    $sql = "SELECT * FROM category WHERE 1 order by CategoryID desc limit 0,8";
    $listcatego= pdo_query($sql);
    return $listcatego;
}