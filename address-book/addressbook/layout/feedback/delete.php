<?php
$user_id = $_GET['id'];

if(!empty($user_id)){
include '../dbcon.php';
$user_find = "select * from feedback where f_id=$user_id";
if(mysqli_num_rows(mysqli_query($connect,$user_find)) == 1 )
{
    $delete_user = "delete from feedback where f_id=$user_id";
    if(mysqli_query($connect,$delete_user))
    {
        $msg = "Feedback deleted Successful";
        header('location: ../../admin_feedback.php?msg='.$msg);
        exit();    
    }
    else{
        $msg = "Feedback not deleted";
        header('location: ../../admin_feedback.php?err='.$msg);
        exit();  
    }
}
else{
    $msg = "Feedback id not found";
    header('location: ../../admin_feedback.php?err='.$msg);
    exit();
}
}
else{
    $msg = "Feedback id is Empty";
    header('location: ../../admin_feedback.php?err='.$msg);
    exit();
}