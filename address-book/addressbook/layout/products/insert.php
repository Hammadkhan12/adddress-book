<?php
if(isset($_POST['product_upload_btn'])){

    if(empty($_FILES['product_img'])){
        $msg= "plz select a image";
        header('location: ../../admin_add_products.php?err='.$msg);
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
      header('location: ../../admin_add_products.php?err='.$msg);
      exit();
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    $msg = "Sorry, file already exists.";
    $uploadOk = 0;
    header('location: ../../admin_add_products.php?err='.$msg);
    exit();
  }

  // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  header('location: ../../admin_add_products.php?err='.$msg);
  exit();
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg =  "Sorry, your file was not uploaded.";
    header('location: ../../admin_add_products.php?err='.$msg);
    exit();
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) 
    {
        require '../dbcon.php';
        $main_cat = $_POST['m_category'];
        $sub_cat = $_POST['s_category'];
        $imgpath = "images/".basename($_FILES["product_img"]["name"]);
        $Productname =$_POST['P_name'];
        $product_price = $_POST['P_price'];

        $product_insert_query = "insert into products(P_imgpath,P_mainCategory,P_subCategory,P_productName,P_price) values('$imgpath','$main_cat','$sub_cat','$Productname',$product_price)";

        if(mysqli_query($connect,$product_insert_query))
        {
            $msg = "Product Uploaded";
            header('location: ../../admin_add_products.php?msg='.$msg);
            exit();
        }
        else{
            $msg = "Product not Uploaded";
            header('location: ../../admin_add_products.php?err='.$msg);
            exit();
        }
    } 
    else 
    {
    $msg = "Sorry, there was an error uploading your file.";
    header('location: ../../admin_add_products.php?err='.$msg);
    exit();
    }
  }
}