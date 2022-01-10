<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php'; ?>
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
        margin-top: 30px;
        text-align: center;

    }

    .error {
        color: red;
        font-size: 15px;
        transition: .2s;
    }
    .accounts_section .Account_left{
        width: 20%!important;
    }
    .accounts_section .Account_right{
        width: 80%!important;
    }
</style>

<body>


    <?php include 'layout/navbar.php'; ?>
    <?php include 'layout/cart.php'; ?>

    <section class="accounts_section">
        <div class="Account_left"></div>
        <div class="Account_right">
            <form action="layout/user_info_add.php" method="post" class="account_form" onsubmit="return Login_Validation()" autocomplete='off'>
                <h2 style="text-align:center; text-transform:uppercase; margin-bottom:50px; color:#262626; letter-spacing:1px;">User Info</h2>
                <div class="container">
                <div class="row">
                <div class="col-md-6">
                <div class="input_box">
                    <span><i class="fas fa-user"></i></span>
                    <input type="text" placeholder="Name" autocomplete="off" name="username" value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username'];?>" readonly/>
                </div>
                    <div class="input_box">
                    <span><i class="far fa-envelope"></i></span>
                    <input id="emailInput" type="text" placeholder="Email" autocomplete="off" name="useremail" value="<?php if(isset($_SESSION['useremail'])) echo $_SESSION['useremail'];?>" readonly/>
                </div>
                <span class="error" id="emailError"></span>
                <div class="input_box">
                    <span><i class="fas fa-address-card"></i></span>
                    <input type="text" placeholder="Address" autocomplete="off" name="useradd" />
                </div>
               

                </div>

                <div class="col-md-6">
                <div class="input_box">
                    <span><i class="fas fa-phone"></i></span>
                    <input type="number" placeholder="Work Phone" autocomplete="off" name="userworkph" />
                </div>
                <div class="input_box">
                    <span><i class="fas fa-mobile-alt"></i></span>
                    <input type="number" placeholder="Cell Phone" autocomplete="off" name="usercell" />
                </div>
                

                <div class="input_box">
                    <span><i class="far fa-calendar-alt"></i></span>
                    <input type="date" placeholder="Date Of Birth" autocomplete="off" name="userdate" />
                </div>
                
                </div>
                
                </div>
                </div>


                <div class="account_btn">
                    <input type="submit" value="SEND" name="userinfo" />
                </div>

           
               
            </form>

        </div>
    </section>
    <?php include 'layout/footer.php';?>
    <?php include 'layout/script_files_links.php'; ?>
    <?php include 'layout/msg_modal.php';?>
</body>

</html>