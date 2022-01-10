<?php
if(isset($_POST['userres'])){
    include 'dbcon.php';
    $username =mysqli_real_escape_string($connect,$_POST['username']);
    $useremail =mysqli_real_escape_string($connect,$_POST['useremail']);
    $userpassword =sha1(mysqli_real_escape_string($connect,$_POST['userpass']));

    $user_chk = "select * from users where U_email='$useremail'";
    if(mysqli_num_rows(mysqli_query($connect,$user_chk)) > 0){
        header('Location: ../Registration.php?msg=Email Already Exists');
    }
    else{
        $user_create = "insert into users(U_Name,U_Email,Password) values('$username','$useremail','$userpassword')";
        if(mysqli_query($connect,$user_create)){
            header('Location: ../Registration.php?msg=User Created');
        }
        else{
            header('Location: ../Registration.php?msg=Something Went Wrong');
        }
    }
}
?>