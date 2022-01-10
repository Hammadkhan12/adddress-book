<?php
if(isset($_POST['mcat_add_btn'])){

    $name = $_POST['mc_name'];

    require '../dbcon.php';
    $result = mysqli_query($connect,"insert into products_main_category(categoryName) values('$name')");

    if($result)
    {
        header('location: ../../admin_add_mcat.php?msg=Category Upload Successfully');
        exit();
    }
    else{
        header('location: ../../admin_add_mcat.php?err=Something Wennt Wrong');
        exit();
    }
}