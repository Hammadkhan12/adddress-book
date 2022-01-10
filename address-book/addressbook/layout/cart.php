<div class="shoping_cart" id="shopingCart">
    <div class="cross" id="cart_close">
    <i class="far fa-times-circle"></i>
</div>
<h2>Shoping Cart</h2>
<div class="cart_line"></div>
<div class="all_p_cart">
<?php
if(isset($_SESSION["useremail"])){
    $userid = $_SESSION['userid'];
    $user_cart_items = "select * from cart_items where C_userid=$userid";
    require 'layout/dbcon.php';
    if(mysqli_query($connect,$user_cart_items)){
        $result = mysqli_query($connect,$user_cart_items);
        while($row = mysqli_fetch_array($result)){
            ?>
            <div class="products_in_cart">
            <div class="img">
            <img src="<?php echo $row['C_productimg']; ?>" alt="">
            </div>
            <div class="products_info_cart">
            <p><?php echo $row['C_productname']; ?></p>
            <p>RS <?php echo $row['C_productprice']; ?></p>
            </div>
            <div class="quantity_delete_item">
            <a href="layout/delete_cart.php?id=<?php echo $row['C_id']; ?>"><i style="color:var(--main-color);" class="fas fa-trash-alt"></i></a>
            </div>
            </div>
            <?php
            
        }
    }
}
?>
</div>

<?php
if(isset($_SESSION["useremail"])){
$userid = $_SESSION['userid'];
$user_cart_items = "select * from cart_items where C_userid=$userid";
if(mysqli_num_rows(mysqli_query($connect,$user_cart_items)) > 0){
    ?>
    <center>
    <form action="layout/place_order.php" method="post">
    <button type="submit" style="margin: 20px 0;" class="btn btn-danger" name="placeorder">Check out</button>
    </form>
    </center>    
    <?php
}
else{
    ?>
    <center>
<h4>No Products</h4>
</center>
<?php
}
}
?>


</div>