<?php 

include_once 'D:/Workspace/yame_shop/Model/pdo.php';
function img_insert($ImageID , $Products_id , $filename)
{
    $sql = "INSERT INTO images (ImageID , Products_id , Thumbnail) VALUES(?,?,?)";
    pdo_execute($sql, $ImageID , $Products_id , $filename, );
}
?>