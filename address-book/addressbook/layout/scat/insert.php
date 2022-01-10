<?php
if(isset($_POST['scat_add_btn'])){

    $name = $_POST['sc_name'];
    $mc = $_POST['smc_name'];

    require '../dbcon.php';
    $result = mysqli_query($connect,"insert into products_sub_category(categoryName,mcat) values('$name','$mc')");

    if($result)
    {
        header('location: ../../admin_add_scat.php?msg=Category Upload Successfully');
        exit();
    }
    else{
        header('location: ../../admin_add_scat.php?err=Something Wennt Wrong');
        exit();
    }
}