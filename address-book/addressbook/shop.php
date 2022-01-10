<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php';?>
<style>
.banner1,.banner2{
  width: 100%;
  height: 250px;
  margin: 10px 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.banner1 h2,.banner2 h2{
  margin-bottom: 30px;
  font-weight: bold;
  color: #262626;
  text-shadow: 0px 2px 8px 0px rgba(0,0,0,0.1);
}
.banner1 h2 span,.banner2 h2 span{
color: #ffffff;
font-size: 3rem;
}
.banner1 a,.banner2 a{
  text-decoration: none;
  padding: 10px 20px;
  background-color: #ffffff;
  color: #000;
  border-radius: 50px;
  box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
}
.banner1{
  background-image: linear-gradient(rgba(224,129,215,0.5),rgba(224,129,215,0.5)),url('images/banner1.jpg');
}
.banner2{
  background-image: linear-gradient(rgba(224,129,215,0.5),rgba(224,129,215,0.5)),url('images/banner2.jpg');
}
.section_heading{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin:auto;
  margin-top: 50px;
  margin-bottom: 30px;
}
.section_heading p{
  color: #262626;
}
.al_active{
  background: var(--main-color)!important;
  color: #fff!important;
}
.single-product{text-align:center;margin-bottom:50px;width: 250px;}.single-product .product-img{position:relative;overflow:hidden}.single-product .product-img .p_icon{width:90%;padding:7px 30px;position:absolute;bottom:-100px;left:50%;-webkit-transform:translateX(-50%);-moz-transform:translateX(-50%);-o-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);background:rgba(224,129,215,0.4);transition:all 400ms ease}.single-product .product-img .p_icon a{display:inline-block;height:36px;line-height:40px;width:36px;text-align:center;background:#fff;border-radius:30px;color:#2a2a2a;margin-right:15px}.single-product .product-img .p_icon a:last-child{margin-right:0px}.single-product .product-img .p_icon a:hover{color:#fff;background:var(--main-color);}.single-product .product-btm{padding:22px 25px 18px;border:1px solid #f0f2f1;text-align:left}.single-product .product-btm h4{color:#4a4a4a;font-size:14px;font-weight:400;text-transform:uppercase;margin-bottom:0px;transition:all 300ms linear 0s}.single-product .product-btm h5{margin-bottom:0px;font-size:18px;color:#797979}.single-product .product-btm span{font-family:"Heebo",sans-serif;font-size:20px;font-weight:500;line-height:16px;color:#2a2a2a}.single-product:hover .product-img .p_icon{bottom:0px}.single-product:hover .product-btm h4{color:var(--main-color);}
.shop{
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/shopbg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 100px 0px;
  color: #ffffff!important;
}
.shop-content{
  display: flex;
  flex-direction: column;
  align-items: center;
  transform: translateY(20%);
}
.shop-content h1{
  font-size: 4.5rem;
}
.shop-content p{
  font-size: 1.5rem;
}
.poducts_and_categories{
  display: flex;
  justify-content: space-between;
}
.categories{
  width: 25%;
  background-color: #ffffff;
  padding: 30px 20px;
  box-shadow: 0px 2px 8px 0px rgba(0,0,0,0.1);
}
.products{
  width: 70%;
  background-color: #ffffff;
  padding: 30px 10px;
}
@media only screen and (max-width:756px) {
  .categories{
    width: 0;
    display: none;
  }
  .products{
    width: 100%;
  }
}
.infoin{
  margin-bottom: 20px;
  text-align: start;
}
.categories h1{
  letter-spacing: 1px;
  font-size: 1.5rem;
}
.categories ul{
  list-style: none;
}
.categories ul h4{
  font-size: 2rem;
  letter-spacing: 1px;
}
.categories ul li{
  display: block;
  margin: 10px 0;
}
.categories ul li a{
  text-decoration: none;
  color: #3e454c;
  letter-spacing: 1.5px;
  font-size: 1.1rem;
  transition: .2s;
}
.categories ul li a:hover{
  color: var(--main_theme_color);
}
.sort{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.sort_and_products_count{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.sort select{
outline: none;
padding: 10px;
background-color: #ffffff;
border-radius: 5px;
border: 1px solid #000000;
margin-left:5px;
}
.products_count{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-right: 10px;
}
.page-item{
  border: 1px solid #000000!important;
  border-radius: 0px!important;
  margin-right:10px;
  outline: none!important;
  transition: .2s!important;
}
.page-item:hover{
  border: 1px solid var(--main_theme_color)!important;
}
.page-link{
  margin-left: 0px!important;
  border: none!important;
  color: #000000!important;
  transition: .2s!important;
  border-radius: 0px!important;
}
.page-link:hover{
  background-color: var(--main_theme_color)!important;
  color: #ffffff!important;
}

.t_p{
  margin: 10px 0;
}
.t_products{
  margin-bottom: 20px;
}
</style>
<body>

<!-- Top Navbar -->
  <?php include 'layout/navbar.php';?>
  <?php include 'layout/cart.php';?>
  <?php include 'layout/like.php';?>

<section class="shop">
<div class="shop-content">
    <h1>Item Shop</h1>
    <p>Home - Shop</p>
</div>
</section> 

<section class="poducts_and_categories">
<div class="categories">
  <div class="infoin">
<h1>Top Products</h1>
<p>Cosmetics</p>
</div>

<div class="t_products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

    
  <div class="t_p">
    <div class="row">
      <div class="col-md-4">
    <div class="tp_img">
      <img src="images/b9.jfif" height="80" width="80" alt="">
    </div>
    </div>
  <div class="col-md-8">
    <div class="tp_info">
      <h4>Nail Paints</h4>
      <p>RS 1200</p>
    </div>
    </div>
  </div>
  </div>

  </div>

  <div class="col-md-12">

    
<div class="t_p">
  <div class="row">
    <div class="col-md-4">
  <div class="tp_img">
    <img src="images/b12.jpg" height="80" width="80" alt="">
  </div>
  </div>
<div class="col-md-8">
  <div class="tp_info">
    <h4>Make Up</h4>
    <p>RS 5500</p>
  </div>
  </div>
</div>
</div>

</div>

<div class="col-md-12">

    
<div class="t_p">
  <div class="row">
    <div class="col-md-4">
  <div class="tp_img">
    <img src="images/b10.jpg" height="80" width="80" alt="">
  </div>
  </div>
<div class="col-md-8">
  <div class="tp_info">
    <h4>Lip Sticks</h4>
    <p>RS 2999</p>
  </div>
  </div>
</div>
</div>

</div>
    </div>
  </div>

</div>




<div class="infoin">
<h1>Top Products</h1>
<p>Jewellery</p>
</div>

<div class="t_products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

    
  <div class="t_p">
    <div class="row">
      <div class="col-md-4">
    <div class="tp_img">
      <img src="images/b13.jpg" height="80" width="80" alt="">
    </div>
    </div>
  <div class="col-md-8">
    <div class="tp_info">
      <h4>Rings</h4>
      <p>RS 15000</p>
    </div>
    </div>
  </div>
  </div>

  </div>

  <div class="col-md-12">

    
<div class="t_p">
  <div class="row">
    <div class="col-md-4">
  <div class="tp_img">
    <img src="images/b14.jpg" height="80" width="80" alt="">
  </div>
  </div>
<div class="col-md-8">
  <div class="tp_info">
    <h4>Watch</h4>
    <p>RS 10500</p>
  </div>
  </div>
</div>
</div>

</div>

<div class="col-md-12">

    
<div class="t_p">
  <div class="row">
    <div class="col-md-4">
  <div class="tp_img">
    <img src="images/b15.jpg" height="80" width="80" alt="">
  </div>
  </div>
<div class="col-md-8">
  <div class="tp_info">
    <h4>Neck Less</h4>
    <p>RS 59999</p>
  </div>
  </div>
</div>
</div>

</div>
    </div>
  </div>

</div>


</div>
<div class="products">
<div class="all_products" style="padding-top: 20px;">
 <div class="row">
<?php
  require 'layout/dbcon.php';
  if(isset($_GET['mcat'])){
    $mcat = $_GET['mcat'];
    $Product_fetch_query = "select * from products where P_mainCategory='$mcat'";  
  }
  elseif(isset($_GET['mcat']) && isset($_GET['scat']))
  {
    $mcat = $_GET['mcat'];
    $scat = $_GET['scat'];
    $Product_fetch_query = "select * from products where P_mainCategory='$mcat' and P_subCategory='$scat'";
  }
  elseif(isset($_GET['search'])){
    $squery = $_GET['search'];
    $Product_fetch_query = "select * from products where 	P_productName LIKE '%$squery%'";
  }
  else{
  $Product_fetch_query = "select * from products";
  }
  $result = mysqli_query($connect,$Product_fetch_query);
  if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $product_id = $row['P_id'];
    $product_name = $row['P_productName'];
    $product_img_path = $row['P_imgpath'];
    $product_cat = $row['P_mainCategory'];
    $product_price = $row['P_price'];
    ?>
<div class="col-md-4 col-sm-12">
  <div class="single-product">
<div class="product-img">
<img class="img-fluid w-100" src="<?php echo $product_img_path;?>" alt="">
<div class="p_icon">

<?php
            if(isset($_SESSION["useremail"])){
              $userid=$_SESSION['userid'];
              $slq = "select * from liked_items where L_productid=$product_id and L_userid=$userid and L_productCategory='$product_cat'";
              if(mysqli_num_rows(mysqli_query($connect,$slq)) > 0){
                $already_liked = true;
              }
              else
              {
                $already_liked = false;
              }
            ?>
            <a <?php if($already_liked == true) echo "class='al_active'";?> href="layout/add_to_like.php?uid=<?php echo $_SESSION['userid'];?>&pid=<?php echo $product_id;?>&cat=<?php echo $product_cat;?>"><i class="far fa-heart"></i></a>    
            <?php
            }
            else
            {
            ?>
            <a href="Login.php?err=Login To Like The Item"><i class="far fa-heart"></i></a>
            <?php
            }
?>
<?php
            if(isset($_SESSION["useremail"])){
              $slq = "select * from cart_items where C_productid=$product_id and C_userid=$userid and C_productCategory='$product_cat'";
              if(mysqli_num_rows(mysqli_query($connect,$slq)) > 0){
                $already_cart = true;
              }
              else
              {
                $already_cart = false;
              }
            ?>
            <a <?php if($already_cart == true) echo "class='al_active'";?> href="layout/add_to_cart.php?uid=<?php echo $_SESSION['userid'];?>&pid=<?php echo $product_id;?>&cat=<?php echo $product_cat;?>"><i class="fas fa-cart-plus"></i></a>    
            <?php
            }
            else
            {
            ?>
            <a href="Login.php?err=Login To Add Item To Cart"><i class="fas fa-cart-plus"></i></a>
            <?php
            }
?>
</div>
</div>
<div class="product-btm">
<a href="#" class="d-block">
<h4><?php echo $product_name;?></h4>
</a>
<div class="mt-3">
<span class="mr-4">RS <?php echo $product_price; ?></span>

</div>
</div>
</div>
</div>
    <?php
  }
}
else
{
  ?>
  <center><h2 style="color: #797979;">No Products Found</h2></center>
  <?php
}
  ?>

</div> 
</div>

</div>
</section>

  
<?php include 'layout/footer.php';?>
  <?php include 'layout/script_files_links.php';?>
  <?php include 'layout/msg_modal.php';?>
</body>
</html>