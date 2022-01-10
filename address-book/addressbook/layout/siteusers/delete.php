<?php
$user_id = $_GET['id'];
$username = $_GET['nme'];

if(!empty($user_id) && !empty($username)){
include '../dbcon.php';
$user_find = "select * from users where User_id=$user_id and U_Name='$username'";
if(mysqli_num_rows(mysqli_query($connect,$user_find)) == 1 )
{
    $delete_user = "delete from users where User_id=$user_id and U_Name='$username'";
    if(mysqli_query($connect,$delete_user))
    {
        $msg = "User deleted Successful";
        header('location: ../../admin_users.php?msg='.$msg);
        exit();    
    }
    else{
        $msg = "User not deleted";
        header('location: ../../admin_users.php?err='.$msg);
        exit();  
    }
}
else{
    $msg = "User id and username is not found";
    header('location: ../../admin_users.php?err='.$msg);
    exit();
}
}
else{
    $msg = "User id and username is Empty";
    header('location: ../../admin_users.php?err='.$msg);
    exit();
}