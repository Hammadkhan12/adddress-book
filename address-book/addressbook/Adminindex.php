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
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
              <?php include 'layout/admin_total_info.php'; ?>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Orders</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Order id </th>
                            <th> User id </th>
                            <th> Product id </th>
                            <th> Product </th>
                            <th> Product Name </th>
                            <th> Price </th>
                            <th> Category</th>
                            <th> Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        $result = mysqli_query($connect,"select * from orders ORDER BY O_id DESC");
                        while($row = mysqli_fetch_array($result)){
                        ?>
                          <tr>
                          <td><?php echo $row['O_id']; ?></td>
                          <td><?php echo $row['O_userid']; ?></td>
                          <td><?php echo $row['O_productid']; ?></td>
                          <td><img src="<?php echo $row['O_pimg']; ?>" class="mr-2" alt="image"></td>
                          <td><?php echo $row['O_pname']; ?></td>
                          <td>RS <?php echo $row['O_pprice']; ?></td>
                          <td><?php echo $row['O_pcat']; ?></td>
                            <td>
                              <a class="badge badge-gradient-success" href="layout/orders/delete.php?id=<?php echo $row['O_id']; ?>">Confirm</a>
                              <a class="badge badge-gradient-danger" href="layout/orders/delete.php?id=<?php echo $row['O_id']; ?>">Cancel</a>
                            </td>
                          </tr>
                     <?php
                        }
                     ?>
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="row">
                  <div class="col">
                    <h4 class="card-title">Main Categories</h4>
                    </div>
                    <div class="col">
                    <a href="admin_add_mcat.php" class="btn btn-gradient-primary btn-sm" style="float: right;">Add New</a>
                    </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> id </th>
                            <th> Category </th>
                            <th> Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        $result = mysqli_query($connect,"select * from products_main_category");
                        while($row = mysqli_fetch_array($result)){
                        ?>
                          <tr>
                          <td><?php echo $row['pm_id']; ?></td>
                          <td><?php echo $row['categoryName']; ?></td>
                            <td>
                              <a class="badge badge-gradient-danger" href="layout/mcat/delete.php?id=<?php echo $row['pm_id']; ?>">Delete</a>
                            </td>
                          </tr>
                     <?php
                        }
                     ?>
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="row">
                  <div class="col">
                    <h4 class="card-title">Sub Categories</h4>
                    </div>
                    <div class="col">
                    <a href="admin_add_scat.php" class="btn btn-gradient-primary btn-sm" style="float: right;">Add New</a>
                    </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> id </th>
                            <th> Category </th>
                            <th> Main Category</th>
                            <th> Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        $result = mysqli_query($connect,"select * from products_sub_category");
                        while($row = mysqli_fetch_array($result)){
                        ?>
                          <tr>
                          <td><?php echo $row['ps_id']; ?></td>
                          <td><?php echo $row['categoryName']; ?></td>
                          <td><?php echo $row['mcat']; ?></td>
                          
                            <td>
                              <a class="badge badge-gradient-danger" href="layout/scat/delete.php?id=<?php echo $row['ps_id']; ?>">Delete</a>
                            </td>
                          </tr>
                     <?php
                        }
                     ?>
                       
                        </tbody>
                      </table>
                    </div>
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