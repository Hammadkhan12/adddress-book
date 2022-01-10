<div class="shoping_cart" id="likeCart">
    <div class="cross" id="like_close">
    <i class="far fa-times-circle"></i>
</div>
<h2>Liked Products</h2>
<div class="cart_line"></div>
<div class="all_p_cart all_liked">
<?php
if(isset($_SESSION["useremail"])){
    $userid = $_SESSION['userid'];
    $user_cart_items = "select * from liked_items where L_userid=$userid";
    require 'layout/dbcon.php';
    if(mysqli_query($connect,$user_cart_items)){
        $result = mysqli_query($connect,$user_cart_items);
        while($row = mysqli_fetch_array($result)){
            ?>
            <div class="products_in_cart">
            <div class="img">
            <img src="<?php echo $row['L_productimg']; ?>" alt="">
            </div>
            <div class="products_info_cart">
            <p><?php echo $row['L_productname']; ?></p>
            <p>RS <?php echo $row['L_productprice']; ?></p>
            </div>
            <div class="quantity_delete_item">
            <a href="layout/delete_like.php?id=<?php echo $row['L_id']; ?>"><i style="color:var(--main-color);" class="fas fa-trash-alt"></i></a>
            </div>
            </div>
            <?php
            
        }
    }
}
?>
</div>
<center><a href="#" style="margin: 20px 0;" class="btn btn-danger">Check out</a></center>
</div>