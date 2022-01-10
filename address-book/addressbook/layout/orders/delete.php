<?php
$order_id = $_GET['id'];

if(!empty($order_id)){
include '../dbcon.php';
    $delete_order = "delete from orders where O_id=$order_id";
    if(mysqli_query($connect,$delete_order))
    {
        $msg = "Operation Successful";
        header('location: ../../adminindex.php?msg='.$msg);
        exit();    
    }
    else{
        $msg = "Operation Unsuccessful";
        header('location: ../../adminindex.php?err='.$msg);
        exit();  
    }
}

else{
    $msg = "order id is Empty";
    header('location: ../../adminindex.php?err='.$msg);
    exit();
}