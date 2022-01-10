<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Fount Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Google Fonts (Dancing Script) -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet"/>
    <!-- (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">

    <!-- google fonts lobster -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
    <!--Animate css cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.css">
    <title>Address Book</title>
    <style>
    .select2-selection{
        outline: none!important;
        border: none!important;
    }
    </style>
    <!--===============================================================================================-->
</head>

<body>
<?php include 'layout/navbar.php';?>
  <?php include 'layout/cart.php';?>
  <?php include 'layout/like.php';?>

    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="layout/add_feedback.php" method="POST">
                <span class="contact100-form-title">
					Send Us A Message
				</span>


                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <label class="label-input100" for="name">Full name</label>
                    <input id="name" class="input100" type="text" name="name" placeholder="Enter your name..." value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?>">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <label class="label-input100" for="email">Email Address</label>
                    <input id="email" class="input100" type="text" name="email" placeholder="Enter your email..." value="<?php if(isset($_SESSION['useremail'])) echo $_SESSION['useremail']; ?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Gender?</div>
                    <div>
                        <select class="js-select2" name="gender">
							<option>Male</option>
							<option>Female</option>
						</select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <label class="label-input100" for="message">Message</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn" name="feedbtn">
						Send
					</button>
                </div>

                <div class="contact100-form-social flex-c-m">
                    <a href="#" class="contact100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="contact100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="contact100-form-social-item flex-c-m bg3">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
                </div>
            </form>

            <div class="contact100-more flex-col-c-m" style="background-image: url('images/img1.jpg">
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
        $(".js-select2").each(function() {
            $(this).on('select2:open', function(e) {
                $(this).parent().next().addClass('eff-focus-selection');
            });
        });
        $(".js-select2").each(function() {
            $(this).on('select2:close', function(e) {
                $(this).parent().next().removeClass('eff-focus-selection');
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!-- Global site tag gtag.js - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- ajax cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- owl carosel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
    <!-- custom jquery -->
    <script src="js/myjq.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.js"></script>
    
    <?php include 'layout/footer.php';?>
    <?php include 'layout/msg_modal.php'; ?>
</body>

</html>