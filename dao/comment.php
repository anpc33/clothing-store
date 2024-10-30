<?php 


include_once 'D:/Workspace/yame_shop/Model/pdo.php';


function comment_insert($Feedback_id  ,$Products_id, $User_id , $Star ,$Reviews ,$current_date ){
    $sql = "INSERT INTO feedback (Feedback_id ,Products_id,User_id ,Star,Reviews,CreatedAt) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql,$Feedback_id , $Products_id, $User_id ,$Star ,$Reviews ,$current_date);
}




function comment_select_all(){
    $sql = "SELECT * FROM feedback";
    return pdo_query($sql);
}
?>