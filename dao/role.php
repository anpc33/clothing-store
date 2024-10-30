<?php
include_once 'D:/Workspace/yame_shop/Model/pdo.php';


function role_select_all(){
    $sql = "SELECT * FROM `role`";
    return pdo_query($sql);
}
?>