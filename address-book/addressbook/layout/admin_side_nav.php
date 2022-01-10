        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="images/user.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Jenny | Maria</span>
                  <span class="text-secondary text-small">Site Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">ALL Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="adminindex.php">Dashboard</a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin_products.php">Products</a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin_users.php">Users</a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin_user_info.php">Users Info</a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin_feedback.php">Feedbacks</a></li>
                </ul>
              </div>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->

        <?php include 'layout/msg_modal.php'; ?>