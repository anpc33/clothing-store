<?php 

// include "pdo.php";
function totalbill(){
    $tong = 0;
    foreach( $_SESSION['cart'] as $cart ){
             $tt = $cart[5] * $cart[0];
             $tong+=$tt;
            
            }
            return $tong;

    }




    function bill_insert($bill_name, $diachi, $tel, $email, $pttt,$ngaydat,$total ){
        $sql = "INSERT INTO billpro (bill_name ,diachi,tel,email ,pttt,ngaydat,total ) VALUES(?,?,?,?,?,?,?,?)";
        pdo_execute_last($sql,$bill_name, $diachi, $tel, $email, $pttt,$ngaydat,$total );
    }
             ?>