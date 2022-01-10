<?php
$order_id = $_GET['id'];

if(!empty($order_id)){
include 'dbcon.php';
    $delete_order = "delete from liked_items where L_id=$order_id";
    if(mysqli_query($connect,$delete_order))
    {
        $msg = "Operation Successful";
        header('location: ../index.php?msg='.$msg);
        exit();    
    }
    else{
        $msg = "Operation Unsuccessful";
        header('location: ../index.php?err='.$msg);
        exit();  
    }
}

else{
    $msg = "id is Empty";
    header('location: ../index.php?err='.$msg);
    exit();
}