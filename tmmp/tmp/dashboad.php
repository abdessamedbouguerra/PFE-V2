<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="../template/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../template/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../template/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="../template/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../template/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="../template/assets/css/style.css" />
    <link rel="shortcut icon" href="../template/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- sidebar -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
                <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        <span class="menu-title">Basic UI Elements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/icons/mdi.html">
                        <i class="mdi mdi-contacts menu-icon"></i>
                        <span class="menu-title">Icons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        <span class="menu-title">Forms</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">
                        <i class="mdi mdi-chart-bar menu-icon"></i>
                        <span class="menu-title">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">
                        <i class="mdi mdi-table-large menu-icon"></i>
                        <span class="menu-title">Tables</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!--  -->
        <div class="container-fluid page-body-wrapper">
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
                  <span class="profile-name">Henry Klein</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        </div>
        
    </div>







    <!-- plugins:js -->
    <script src="../template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../template/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../template/assets/vendors/flot/jquery.flot.js"></script>
    <script src="../template/assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../template/assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../template/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../template/assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="../template/assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../template/assets/js/off-canvas.js"></script>
    <script src="../template/assets/js/hoverable-collapse.js"></script>
    <script src="../template/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../template/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>