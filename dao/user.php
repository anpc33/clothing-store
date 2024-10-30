<?php
include_once 'D:/Workspace/yame_shop/Model/pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function user_insert($User_id, $User_name, $Email, $Password, $Role_id){
    $sql = "INSERT INTO user (User_id ,User_name,Email,Password ,Role_id ) VALUES(?,?,?,?,?)";
    pdo_execute($sql,$User_id  ,$User_name, $Email ,$Password  , $Role_id  );
}


function user_insert_oneall($User_name,$Email,$Password){
    $sql = "INSERT INTO user (User_name,Email,Password) VALUES(?,?,?)";
    pdo_execute($sql,$User_name,$Email,$Password);
}

function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function getuser_one_select($User_name,$Password)
{
    $sql = "SELECT * FROM user WHERE User_name='".$User_name."' AND Password='".$Password."' " ;
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkmail($Email)
{
    $sql = "SELECT * FROM user WHERE Email='".$Email."' " ;
    $sp = pdo_query_one($sql);
    return $sp;
}