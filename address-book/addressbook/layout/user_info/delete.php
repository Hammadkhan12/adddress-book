<?php
$user_id = $_GET['id'];

if(!empty($user_id)){
include '../dbcon.php';
$user_find = "select * from user_info where ui_id=$user_id";
if(mysqli_num_rows(mysqli_query($connect,$user_find)) == 1 )
{
    $delete_user = "delete from user_info where ui_id=$user_id";
    if(mysqli_query($connect,$delete_user))
    {
        $msg = "User deleted Successful";
        header('location: ../../admin_user_info.php?msg='.$msg);
        exit();    
    }
    else{
        $msg = "User not deleted";
        header('location: ../../admin_user_info.php?err='.$msg);
        exit();  
    }
}
else{
    $msg = "User id and username is not found";
    header('location: ../../admin_user_info.php?err='.$msg);
    exit();
}
}
else{
    $msg = "User id and username is Empty";
    header('location: ../../admin_user_info.php?err='.$msg);
    exit();
}