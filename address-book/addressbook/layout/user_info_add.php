<?php
if(isset($_POST['userinfo'])){

    session_start();

    if(isset($_SESSION["useremail"])){

        $name = $_POST['username'];
        $email = $_POST['useremail'];
        $address = $_POST['useradd'];
        $work_phone = $_POST['userworkph'];
        $cell_no = $_POST['usercell'];
        $dateofbirth = $_POST['userdate'];
        $uid = $_SESSION['userid']; 
            if(!empty($name) && !empty($email) && !empty($address) && !empty($work_phone) && !empty($cell_no) && !empty($dateofbirth)){

                    require 'dbcon.php';
                    if(!mysqli_num_rows(mysqli_query($connect,"select * from user_info where ui_userid=$uid")) > 0)
                    {
                    $user_info_insert = "insert into user_info(ui_userid,ui_name,ui_address,ui_email,ui_work_phone,ui_cellnum,ui_dateofbirth) values($uid,'$name','$address','$email','$work_phone','$cell_no','$dateofbirth')";
                    if(mysqli_query($connect,$user_info_insert)){

                        header('location: ../user_info.php?msg=User Info Updated');
                        exit(); 

                    }
                    else
                    {

                        header('location: ../user_info.php?err=Something Went Wrong');
                        exit();

                    }
                }
                else
                {
                    header('location: ../user_info.php?err=Info Already Exists');
                    exit(); 
                }
            }
            else
            {
                header('location: ../user_info.php?err=Field The Input Fields Properly');
                exit(); 
            }

    }
    else
    {
        header('location: ../user_info.php?err=Login To Send Form');
        exit();    
    }

}
else{
    header('location: ../index.php');
    exit();
}