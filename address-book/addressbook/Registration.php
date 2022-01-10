<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php';?>
<style>
     ::placeholder {
            color: #686868;
        }

        .account_btn {
            margin: 13px 0;
        }

            .account_btn input {
                background: var(--main-color);
                outline: none;
                width: 100%;
                padding: 15px 0;
                border: none;
                color: #fff;
                font-weight: bold;
            }

        .account_change {
            margin-top:30px;
            text-align: center;
            
        }
        .error{
            color:red;
            font-size:15px;
            transition:.2s;
        }
</style>
<body>
    <?php
    if(isset($_GET['msg']))
    {
    $msg = $_GET['msg'];
    echo "<script>alert('$msg')</script>";
    }
    ?>
<?php include 'layout/navbar.php';?>
<?php include 'layout/cart.php';?>  
<section class="accounts_section">
        <div class="Account_left"></div>
        <div class="Account_right">
            <form action="layout/registration_config.php" method="post" class="account_form" onsubmit="return Login_Validation()" autocomplete='off'>
                <h2 style="text-align:center; text-transform:uppercase; margin-bottom:50px; color:#262626; letter-spacing:1px;">Registration</h2>
                <div class="input_box">
                    <span><i class="fas fa-user"></i></span>
                    <input id="nameInput" type="text" placeholder="Username" autocomplete="off" name="username"/>
                </div>
                <div class="input_box">
                    <span><i class="far fa-envelope"></i></span>
                    <input id="emailInput" type="text" placeholder="Email" autocomplete="off" name="useremail"/>
                </div>
                <span class="error" id="emailError"></span>
                <div class="input_box">
                    <span><i class="fas fa-lock"></i></span>
                    <input id="passInput" type="password" placeholder="Password" autocomplete="off" name="userpass"/>
                </div>
                <span class="error" id="passError"></span>
                <div class="remember_box">
                    <input type="checkbox" /> <span>Remember Me</span>
                </div>

                <div class="account_btn">
                    <input type="submit" value="Register" name="userres"/>
                </div>


                <div class="account_change"><a style="text-decoration:none; color:#999999;" href="Login.php">Already a member? Sign in now</a></div>
            </form>

        </div>
    </section>
    <?php include 'layout/footer.php';?>
<?php include 'layout/script_files_links.php';?>
</body>
</html>