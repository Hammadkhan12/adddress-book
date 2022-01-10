<div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Products <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <?php
                    require 'layout/dbcon.php';
                    $total_products = mysqli_num_rows(mysqli_query($connect,"select * from products"));
                    ?>
                    <h2 class="mb-5"><?php echo $total_products; ?></h2>
                    <h6 class="card-text">Cosmetics Jewwery Both</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php
                    $total_orders = mysqli_num_rows(mysqli_query($connect,"select * from orders"));
                    ?>
                    <h2 class="mb-5"><?php echo $total_orders; ?></h2>
                    <h6 class="card-text">Cash On Delivery</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Users<i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <?php
                    $total_users = mysqli_num_rows(mysqli_query($connect,"select * from users"));
                    ?>
                    <h2 class="mb-5"><?php echo $total_users; ?></h2>
                    <h6 class="card-text">Site Users</h6>
                  </div>
                </div>
              </div>
            </div>