<?php
if(isset($_POST['placeorder']))
{
    session_start();
    $uid = $_SESSION['userid'];
    require 'dbcon.php';
    if(!mysqli_num_rows(mysqli_query($connect,"select * from user_info where ui_userid=$uid")) > 0)
    {
        header('location: ../user_info.php?err=User Info Requried');
        exit(); 
    }
    else
    {
        $result = mysqli_query($connect,"select * from cart_items where C_userid=$uid");
        if($result)
        {
            while($row = mysqli_fetch_array($result)){
                $pid = $row['C_productid'];
                $pcat = $row['C_productCategory'];
                $pname = $row['C_productname'];
                $pprice = $row['C_productprice'];
                $pimg = $row['C_productimg'];

                $result = mysqli_query($connect,"insert into orders(O_userid,O_productid,O_pcat,O_pprice,O_pname,O_pimg) values($uid,$pid,'$pcat',$pprice,'$pname','$pimg')");

                if(!$result){
                    header('location: ../index.php?err=some thing went wrong');
                    echo $result;
                    exit();
                }
            }
            $cart_del = mysqli_query($connect,"DELETE FROM `cart_items` WHERE C_userid=$uid");
            header('location: ../index.php?msg=Order Place Successfully');
            exit();
        }
    }
}