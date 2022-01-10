<?php
if(isset($_POST['product_update_btn'])){

    if(empty($_FILES['product_img'])){
        $msg= "plz select a image";
        header('location: ../../admin_products.php?err='.$msg);
        exit();
    }

    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["product_img"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      $msg = "File is not an image.";
      $uploadOk = 0;
      header('location: ../../admin_products.php?err='.$msg);
      exit();
    }



  // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  header('location: ../../admin_products.php?err='.$msg);
  exit();
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg =  "Sorry, your file was not uploaded.";
    header('location: ../../admin_products.php?err='.$msg);
    exit();
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) 
    {
        require '../dbcon.php';
        $pid = $_POST['P_id'];
        $main_cat = $_POST['m_category'];
        $sub_cat = $_POST['s_category'];
        $imgpath = "images/".basename($_FILES["product_img"]["name"]);
        $Productname =$_POST['P_name'];
        $product_price = $_POST['P_price'];

        $product_insert_query = "UPDATE `products` SET `P_imgpath`='$imgpath',`P_mainCategory`='$main_cat',`P_subCategory`='$sub_cat',`P_productName`='$Productname',`P_price`=$product_price WHERE P_id=$pid";

        if(mysqli_query($connect,$product_insert_query))
        {
            $msg = "Product Updated";
            header('location: ../../admin_products.php?msg='.$msg);
            exit();
        }
        else{
            $msg = "Product not Updated";
            header('location: ../../admin_products.php?err='.$msg);
            exit();
        }
    } 
    else 
    {
    $msg = "Sorry, there was an error uploading your file.";
    header('location: ../../admin_products.php?err='.$msg);
    exit();
    }
  }
}