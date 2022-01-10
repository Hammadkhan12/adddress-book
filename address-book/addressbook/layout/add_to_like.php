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
    if(!mysqli_num_rows(mysqli_query($connect,"select * from liked_items where L_productid =$pid and  L_productCategory='$cat' and L_userid=$uid")) > 0){
    while($row = mysqli_fetch_array($result)){
        $pname = $row['P_productName'];
        $pprice = $row['P_price'];
        $pscat = $row['P_subCategory'];
        $pimg = $row['P_imgpath'];
    }
$add_cart_query = "insert into liked_items(L_productid,L_userid,L_productCategory,L_productname,L_productprice,L_productimg) values('$pid','$uid','$cat','$pname',$pprice,'$pimg')";
if(mysqli_query($connect,$add_cart_query))
{
    $msg = "Added to Liked Items";
    header('location: ../shop.php?msg='.$msg);
    exit();
}
else
{
    $msg = "Item Not Added to Liked Items";
    header('location: ../shop.php?err='.$msg);
    exit();
}
    }
    else
    {
    $msg = "You Already Liked This Item";
    header('location: ../shop.php?err='.$msg);
    exit();
    }
}
else{
    $msg = "Product Not Found";
    header('location: ../shop.php?err='.$msg);
    exit();
}
}
else{
    header('location: ../shop.php');
    exit();
}