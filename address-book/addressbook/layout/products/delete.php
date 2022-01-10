<?php
$product_id = $_GET['id'];
$category = $_GET['cat'];

if(!empty($product_id) && !empty($category)){
include '../dbcon.php';
$product_find = "select * from products where P_id=$product_id and P_subCategory='$category'";
if(mysqli_num_rows(mysqli_query($connect,$product_find)) == 1 )
{
    $delete_from_cart = "delete from cart_items where C_productid=$product_id";
    if(mysqli_query($connect,$delete_from_cart))
    {
        $delete_product = "delete from products where P_id=$product_id and P_subCategory='$category'";
        if(mysqli_query($connect,$delete_product)){
        $msg = "Product deleted Successful";
        header('location: ../../admin_products.php?msg='.$msg);
        exit();    
        }
    }
    else{
        $msg = "Product not deleted";
        header('location: ../../admin_products.php?err='.$msg);
        exit();  
    }
}
else{
    $msg = "Product id and Category is not found";
    header('location: ../../admin_products.php?err='.$msg);
    exit();
}
}
else{
    $msg = "Product id and Category is Empty";
    header('location: ../../admin_products.php?err='.$msg);
    exit();
}