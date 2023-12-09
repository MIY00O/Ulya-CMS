<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CMS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="<?= base_url('assets/skydash/') ?>css/vendor.bundle.base.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/skydash/') ?>css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/skydash/') ?>images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?= base_url(); ?>"><img src="<?= base_url('assets/skydash/') ?>images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>"><img src="<?= base_url('assets/skydash/') ?>images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
             <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?= base_url('assets/skydash/') ?>images/faces/face6.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <div class="flex-grow-1"><?= $this->session->userdata('nama') ?></span>
              <small class="text-muted"><?= $this->session->userdata('level') ?></small>
            </div>
              <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="<?= base_url('assets/skydash/') ?>img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php $menu = $this->uri->segment(2); ?>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item <?php if($menu=='home'){echo "active"; } ?>">
            <a class="nav-link" href="<?= site_url('admin/home') ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item <?php if($menu=='Caraousel'){echo "active"; } ?>">
            <a class="nav-link" href="<?= site_url('admin/caraousel') ?>" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Caraousel</span>
            </a>
          </li>
          <li class="nav-item <?php if($menu=='Kategori Konten'){echo "active"; } ?>">
            <a class="nav-link" href="<?= site_url('admin/kategori') ?>" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Kategori Konten</span>
            </a>
          </li>
          <li class="nav-item <?php if($menu=='Konten'){echo "active"; } ?>">
            <a class="nav-link" href="<?= site_url('admin/konten') ?>" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Konten</span>
            </a>
          </li>
          <?php if($this->session->userdata('level')=='Admin'){ ?>
          <li class="nav-item <?php if($menu=='User'){echo "active"; } ?>">
            <a class="nav-link" href="<?= site_url('admin/user') ?>" aria-expanded="false" aria-controls="tables">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <?php } ?>
          <?php if($this->session->userdata('level')=='Admin'){ ?>
          <li class="nav-item <?php if($menu=='Konfigurasi'){echo "active"; } ?>">
            <a class="nav-link" href="konfigurasi" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Konfigurasi</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                  <?= $contents; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
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
  <script src="<?= site_url('assets/skydash/') ?>vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= site_url('assets/skydash/') ?>vendors/chart.js/Chart.min.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= site_url('assets/skydash/') ?>js/off-canvas.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/hoverable-collapse.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/template.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/settings.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= site_url('assets/skydash/') ?>js/dashboard.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <script>
    $('#menghilang').delay('slow').slideDown('slow').delay(500).slideUp(400);
  </script>
</body>

</html>

