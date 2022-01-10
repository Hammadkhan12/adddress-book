<!doctype html>
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
.product_card{
  width:200px;
}
.product_card .p_img{
  position: relative;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.product_card .p_img img{
  width: 100%;
  height: 100%;
  transition: .4s;
}

.product_info{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px 0;
}

.product_rating{
  display: flex;
  color: var(--main-color)!important;
}

.product_price{
  color: var(--main-color);
}

.product_overlay{
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.6);
  transition: .4s;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
}
.product_overlay .p_cart{
  padding: 20px;
  background: #ffffff;
  color: #000000;
  font-size: 1.5rem;
  cursor: pointer;
  transition: .4s;
  transform: scale(0);
}
.p_img:hover > img{
  transform: scale(1.4);
}
.p_img:hover > .product_overlay{
  opacity: 1;
}

.p_img:hover > .product_overlay .p_cart{
  transform: scale(1);
}
.product_overlay .p_cart:hover{
background: var(--main-color);
color: #ffffff;
}
.product_name h3{
  font-size: 1.2rem!important;
}
.carosel_video{
  width: 100%!important;
}
.register_plz{
  position: fixed;
  bottom: 2%;
  right: 1%;
  background: #ffffff;
  border-radius:10px;
  z-index: 999999;
  box-shadow: 0px 2px 16px 0px rgba(0, 0, 0, 0.5);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 30px 20px;
  text-align: center;
}
.register_plz img{
  width: 110px;
  height: auto;
}
.register_plz h1{
  margin-bottom: 20px;
  
  font-size: 2rem;
}
.testimony-wrap {
  display: block;
  position: relative;
  background: rgba(255, 255, 255, 0.1);
  color: rgba(0, 0, 0, 0.8);
  max-width: 350px;
  min-width: 180px; 
  }
  .testimony-wrap .user-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: relative;
    margin-top: -75px;
    margin: 0 auto;
    }
    .testimony-wrap .user-img img{
      height: 100%;
      width: 100%;
    }
    .testimony-wrap .user-img .quote {
      position: absolute;
      bottom: -10px;
      right: 0;
      width: 40px;
      height: 40px;
      background: #fff;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%; 
      }
      .testimony-wrap .user-img .quote i 
      {
        color: var(--main-color);   
      }
  .testimony-wrap .name {
    font-weight: 400;
    font-size: 18px;
    margin-bottom: 0;
    color: #000000; }
  .testimony-wrap .position {
    font-size: 12px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 2px; }
  .testimony-wrap .line {
    position: relative;
    border-left: 1px solid #e6e6e6; }
    .testimony-wrap .line:after {
      position: absolute;
      top: 50%;
      left: -2px;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      content: '';
      width: 3px;
      height: 30px;
      background: var(--main-color); 
      }

.counter{
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('images/countbg.jpg');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  width: 100%;
  padding: 100px 0;
  margin: 40px 0;
  color: #fff!important;
}
.counter i{
  font-size: 3rem;
  margin-bottom: 5px;
}
.single-product{text-align:center;margin-bottom:50px;width: 250px;}.single-product .product-img{position:relative;overflow:hidden}.single-product .product-img .p_icon{width:90%;padding:7px 30px;position:absolute;bottom:-100px;left:50%;-webkit-transform:translateX(-50%);-moz-transform:translateX(-50%);-o-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);background:rgba(224,129,215,0.4);transition:all 400ms ease}.single-product .product-img .p_icon a{display:inline-block;height:36px;line-height:40px;width:36px;text-align:center;background:#fff;border-radius:30px;color:#2a2a2a;margin-right:15px}.single-product .product-img .p_icon a:last-child{margin-right:0px}.single-product .product-img .p_icon a:hover{color:#fff;background:var(--main-color);}.single-product .product-btm{padding:22px 25px 18px;border:1px solid #f0f2f1;text-align:left}.single-product .product-btm h4{color:#4a4a4a;font-size:14px;font-weight:400;text-transform:uppercase;margin-bottom:0px;transition:all 300ms linear 0s}.single-product .product-btm h5{margin-bottom:0px;font-size:18px;color:#797979}.single-product .product-btm span{font-family:"Heebo",sans-serif;font-size:20px;font-weight:500;line-height:16px;color:#2a2a2a}.single-product:hover .product-img .p_icon{bottom:0px}.single-product:hover .product-btm h4{color:var(--main-color);}
.al_active{
  background: var(--main-color)!important;
  color: #fff!important;
}
</style>
  <body>
  <!-- Top Navbar -->
  <?php include 'layout/navbar.php';?>
  <?php include 'layout/cart.php';?>
  <?php include 'layout/like.php';?>
  <div id="header">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <video class="carosel_video" src="videos/jvideo.mp4" autoplay muted loop></video>
    </div>
    <!-- <div class="carousel-item">
    <video class="carosel_video" src="videos/cvideo.mp4" autoplay muted loop></video>
    </div> -->
  </div>
 
</div>
<div class="carousel_ovrlay">
      <div class="header_content animate__animated animate__slideInDown"> 
      <h1>Address Book</h1>
      <p>Best Sellers Of Cosmetics & Imitation Jewellery</p>
      <a href="#">Shop Now</a>
      </div>
</div>
  </div>
  
  <div style="display: none;" class="register_plz">
  <i style="position: absolute; right: 5%; top: 5%; font-size: 1.3rem; color: var(--main-color); cursor: pointer;" class="fas fa-times-circle"></i>
  <img src="images/giphy (1).gif" alt="">
  <h1 style="letter-spacing: 1px; text-transform: uppercase;">Plz Register Yourself</h1>
  <a href="" class="web_btn">Register Now</a>
  </div>

  <div class="section_heading">
  <h2>Special Discounts</h2>
  <p>For You</p>
  </div>
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-6 col-sm-12">
  <div class="banner1">
  <h2>Upto <span>50%</span> Off On Cosmetics</h2>
  <a href="shop.php?mcat=cosmetics">Shop Now</a>
  </div>
  </div>

  <div class="col-md-6 col-sm-12">
  <div class="banner2">
  <h2>Upto <span>70%</span> Off On Jewellery</h2>
  <a href="shop.php?mcat=jewellery">Shop Now</a>
  </div>
  </div>
  </div>
  </div>


  <div class="section_heading">
  <h2>Latest Products</h2>
  <p>Cosmetics</p>
  </div>

  <section class="cos_products">
  <div class="owl-carousel owl-theme product_carousel">

  <?php
  require 'layout/dbcon.php';
  $Product_fetch_query = "select * from products where P_mainCategory='cosmetics' ORDER BY P_id desc";
  $result = mysqli_query($connect,$Product_fetch_query);
  while($row = mysqli_fetch_assoc($result)){
    $product_id = $row['P_id'];
    $product_name = $row['P_productName'];
    $product_img_path = $row['P_imgpath'];
    $product_cat = $row['P_mainCategory'];
    $product_price = $row['P_price'];
    ?>

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
            <a <?php if($already_liked == true) echo "class='al_active'";?> href="layout/add_to_like.php?uid=<?php echo $_SESSION['userid'];?>&pid=<?php echo $product_id;?>&cat=<?php echo $product_cat;?>&rtn=home"><i class="far fa-heart"></i></a>    
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
            <a <?php if($already_cart == true) echo "class='al_active'";?> href="layout/add_to_cart.php?uid=<?php echo $_SESSION['userid'];?>&pid=<?php echo $product_id;?>&cat=<?php echo $product_cat;?>&rtn=home"><i class="fas fa-cart-plus"></i></a>    
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
  ?>

  </div>
  </section>

<section class="counter" id="counter">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-4 col-sm-12">
<div class="inner_col" style="display: flex; flex-direction: column; justify-content: center; align-items: center; border: 1px solid white; padding: 30px 0; margin:10px 20px;">
<i class="fas fa-users"></i>
<h2 class="count" data-count="300">0</h2>
<h5>Users</h5>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-12">
  <div class="inner_col" style="display: flex; flex-direction: column; justify-content: center; align-items: center; border: 1px solid white; padding: 30px 0; margin:10px 20px;">
<i class="fas fa-globe-americas"></i>
<h2 class="count" data-count="150">0</h2>
<h5>Countries</h5>
  </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-12">
  <div class="inner_col" style="display: flex; flex-direction: column; justify-content: center; align-items: center; border: 1px solid white; padding: 30px 0; margin:10px 20px;">
<i class="fas fa-shopping-cart"></i>
<h2 class="count" data-count="500">0</h2>
<h5>Products</h5>
  </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-12">
  <div class="inner_col" style="display: flex; flex-direction: column; justify-content: center; align-items: center; border: 1px solid white; padding: 30px 0; margin:10px 20px;">
<i class="fas fa-users"></i>
<h2 class="count" data-count="300">0</h2>
<h5>Users</h5>
  </div>
</div>
</div>
</div>
</section>
  <div class="section_heading">
  <h2>Latest Products</h2>
  <p>Jewellery</p>
  </div>

  <section class="cos_products">
  <div class="owl-carousel owl-theme product_carousel">

  <?php
  require 'layout/dbcon.php';
  $Product_fetch_query = "select * from products where P_mainCategory='jewellery' ORDER BY 	P_id  desc";
  $result = mysqli_query($connect,$Product_fetch_query);
  while($row = mysqli_fetch_assoc($result)){
    $product_id = $row['P_id'];
    $product_name = $row['P_productName'];
    $product_img_path = $row['P_imgpath'];
    $product_cat = $row['P_mainCategory'];
    $product_price = $row['P_price'];
    ?>

  <div class="single-product">
<div class="product-img">
<img class="img-fluid w-100" src="<?php echo $product_img_path;?>" alt="">
<div class="p_icon">
<a href="#">
<i class="far fa-eye"></i>
</a>
<a href="#">
<i class="far fa-heart"></i>
</a>
<?php
            if(isset($_SESSION["useremail"])){
            ?>
            <a href="layout/add_to_cart.php?uid=<?php echo $_SESSION['userid'];?>&pid=<?php echo $product_id;?>&cat=<?php echo $product_cat;?>&rtn=home"><i class="fas fa-cart-plus"></i></a>    
            <?php
            }
            else
            {
            ?>
            <a href="Login.php?msg=Plz Login To Add Item To The Cart"><i class="fas fa-cart-plus"></i></a>
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
    <?php
  }
  ?>

  </div>
  </section>

  <div class="section_heading" style="margin-top: 100px;">
  <h2>Our satisfied customer says</h2>
  <p style="width: 50%; text-align: center;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
  </div>
  <section class="our_customer" style="margin-bottom: 100px;">
    <div class="owl-carousel owl-theme cus_carousel">
<?php
  $result = mysqli_query($connect,"select * from feedback");
  while($row = mysqli_fetch_array($result)){
  ?>
  <div class="testimony-wrap p-4 pb-5">
      <div class="user-img mb-5">
      <img src="images/user.png" alt="">
      <span class="quote d-flex align-items-center justify-content-center">
      <i class="fas fa-quote-left"></i>
      </span>
      </div>
      <div class="text text-center">
      <p class="mb-5 pl-4 line"><?php echo $row['f_message'];?></p>
      <p class="name"><?php echo $row['f_name'];?></p>
      <span class="position"><?php echo $row['f_gender'];?></span>
    </div>
    </div>
<?php
  }
?>
        
</div>
  </section>
  <?php include 'layout/footer.php';?>

  <?php include 'layout/script_files_links.php';?>
  <?php include 'layout/msg_modal.php';?>
  </body>
</html>