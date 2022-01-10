<?php
if(isset($_POST['feedbtn'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    require 'dbcon.php';
    $result = mysqli_query($connect,"insert into feedback(f_name,f_mail,f_gender,f_message) values('$name','$email','$gender','$message')");

    if($result)
    {
        header('location: ../Feedback.php?msg=Feedback Sent Successfully');
        exit();
    }
    else{
        header('location: ../Feedback.php?err=Something Wennt Wrong');
        exit();
    }
}