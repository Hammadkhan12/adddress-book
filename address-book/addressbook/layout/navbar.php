<!-- Top Navbar Starts -->
 <div class="full-nav">
        <div class="top-nav-first">
            <div class="logo">
            Address<span>Book</span>
            </div>
            <form action="shop.php" method="get" class="searh" style="width: 60%; display: flex; justify-content: center; align-items: center;">
            <div class="search-bar">
                <input type="search" placeholder="Search" name="search">
                <button type="submit"><i style="cursor: pointer;" class="fas fa-search"></i></button>
            </div>
            </form>
            <div class="cart-profile">
                <div class="cart">
                    <?php
                    
                    if(isset($_SESSION["useremail"]))
                    {
                    echo '<a href="Logout.php">Log Out</a>';
                    }
                    else
                    {
                    echo '<a href="Login.php">Log in</a>';    
                    }
                ?>
                </div>
            </div>
            <div class="myham_burger" style="display: none;">
            <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="top-nav-second">
            <nav> 
            <ul class="second-nav-links">
                <li><a href="index.php">Home</a></li>
                <li class="link-has-a-child"><a href="shop.php?mcat=cosmetics">Cosmetics <i style="margin-left: 5px;" class="fas fa-angle-down"></i></a>
                <div class="sub-menu">
                    <div class="product-div">
                        <div class="product-links">
                    <ol>
                        <?php
                        require 'layout/dbcon.php';
                        $sql = "select * from products_sub_category where mcat='cosmetics'";
                        $result = mysqli_query($connect,$sql);
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <li><a href="shop.php?mcat=cosmetics&scat=<?php echo $row['categoryName']; ?>"><?php echo $row['categoryName']; ?></a></li>
                        <?php
                        }
                        ?>
                    </ol>
                </div>

               

         



                </div>
                </div>
                </li>
                </li>

                <li class="link-has-a-child"><a href="shop.php?mcat=jewellery">Jewellery <i style="margin-left: 5px;" class="fas fa-angle-down"></i></a>
                <div class="sub-menu">
                    <div class="product-div">
                        <div class="product-links">
                        <ol>
                        <?php
                        require 'layout/dbcon.php';
                        $sql = "select * from products_sub_category where mcat='jewellery'";
                        $result = mysqli_query($connect,$sql);
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <li><a href="shop.php?mcat=jewellery&scat=<?php echo $row['categoryName']; ?>"><?php echo $row['categoryName']; ?></a></li>
                        <?php
                        }
                        ?>
                    </ol>
                </div>

               
         



                </div>
                </div>
                </li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="Feedback.php">Feedback</a></li>
                <?php
                if(isset($_SESSION["useremail"])){
                    $uemail = $_SESSION["useremail"];
                    if($uemail == "hunain@gmail.com"){
                        ?>
                        <li><a href="adminindex.php">Admin Panel</a></li>
                        <?php
                    }
                }
                ?>
                
            </ul>
                <div class="s-nav-option">
                    <div class="like" id="like_btn">
                        <i class="fas fa-heart"></i>
                        <span class="like_total">0</span>
                    </div>
                    <div class="cart" id="cart_btn">
                        <i class="fas fa-cart-arrow-down"></i>
                        <span class="cart_total">0</span>
                    </div>
                </div>

                <div class="m-logout" style="display: none;">
                <div class="cart">
                    <?php
                    
                    if(isset($_SESSION["useremail"]))
                    {
                    echo '<a href="Logout.php">Log Out</a>';
                    }
                    else
                    {
                    echo '<a href="Login.php">Log in</a>';    
                    }
                ?>
                </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Top Navbar Ends -->
    <div class="overlay"></div>