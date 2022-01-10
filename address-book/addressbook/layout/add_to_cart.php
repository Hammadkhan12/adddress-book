<?php
if(isset($_GET['uid']) && isset($_GET['pid']) && isset($_GET['cat']))
{
   $uid = $_GET['uid'];
   $pid = $_GET['pid'];
   $cat = $_GET['cat'];

require 'dbcon.php';
$product_find = "select * from products where P_id=$pid and P_mainCategory='$cat'";
$result = mysqli_query($connect,$product_find);
if(mysqli_num_rows($result) > 0)
{
    if(!mysqli_num_rows(mysqli_query($connect,"select * from cart_items where C_productid =$pid and  C_productCategory='$cat' and C_userid=$uid")) > 0){
    while($row = mysqli_fetch_array($result)){
        $pname = $row['P_productName'];
        $pprice = $row['P_price'];
        $pscat = $row['P_subCategory'];
        $pimg = $row['P_imgpath'];
    }
$add_cart_query = "insert into cart_items(C_productid,C_userid,C_productCategory,C_productname,C_productprice,C_productimg,C_productsubcat) values('$pid','$uid','$cat','$pname',$pprice,'$pimg','$pscat')";
if(mysqli_query($connect,$add_cart_query))
{
    if(isset($_GET['rtn'])){
        $msg = "Item Added to Cart";
        header('location: ../index.php?msg='.$msg);
        exit();    
    }
    else{
    $msg = "Item Added to Cart";
    header('location: ../shop.php?msg='.$msg);
    exit();
    }
}
else
{
    if(isset($_GET['rtn'])){
    $msg = "Item Not Added to Cart";
    header('location: ../index.php?err='.$msg);
    exit();
    }
    else{
    $msg = "Item Not Added to Cart";
    header('location: ../shop.php?err='.$msg);
    exit();
    }
}
    }
    else
    {
    if(isset($_GET['rtn'])){
    $msg = "Item Already In The Cart";
    header('location: ../index.php?err='.$msg);
    exit();
    }
    else{
    $msg = "Item Already In The Cart";
    header('location: ../shop.php?err='.$msg);
    exit();
    }
    }
}
else{
    if(isset($_GET['rtn'])){
    $msg = "Product Not Found";
    header('location: ../index.php?err='.$msg);
    exit();
    }
    else{
    $msg = "Product Not Found";
    header('location: ../shop.php?err='.$msg);
    exit();
    }
}
}
else{
    header('location: ../shop.php');
    exit();
}