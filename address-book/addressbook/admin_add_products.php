<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
     <?php include 'layout/admin_navbar.php';?>
      <div class="container-fluid page-body-wrapper">
      <?php include 'layout/admin_side_nav.php';?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard > Products > Add
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Products Details</h4>
                    <p class="card-description">For Upload </p>
                    <form class="forms-sample" action="layout/products/insert.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="P_name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Product Price</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Price" name="P_price">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Main Category</label>
                        <select class="form-control" id="exampleSelectGender" name="m_category">
                        <?php
                        require 'layout/dbcon.php';
                    $main_cat ="SELECT * FROM products_main_category";
                    $result =mysqli_query($connect,$main_cat);
                    while($row = mysqli_fetch_assoc($result)){
                      ?>
                      <option name="m_category" value="<?php echo $row['categoryName']; ?>"><?php echo $row['categoryName']; ?></option>
                      <?php
                    }
                    ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" class="form-control file-upload-info"  name="product_img"> 
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Sub Category</label>
                        <select class="form-control" id="exampleSelectGender" name="s_category">
                        <?php
                    $sub_cat ="SELECT * FROM  products_sub_category";
                    $result =mysqli_query($connect,$sub_cat);
                    while($row = mysqli_fetch_assoc($result)){
                      ?>
                      <option name="s_category" value="<?php echo $row['categoryName']; ?>"><?php echo $row['categoryName']; ?></option>
                      <?php
                    }
                    ?>
                        </select>
                      </div>
                   
                      <button type="submit" class="btn btn-gradient-primary mr-2" name="product_upload_btn">Submit</button>
                      <a href="admin_products.php" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>