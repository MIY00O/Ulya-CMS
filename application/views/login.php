
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ULYAAAA</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= site_url('assets/skydash/') ?>vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= site_url('assets/skydash/') ?>vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= site_url('assets/skydash/') ?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= site_url('assets/skydash/') ?>css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= site_url('assets/skydash/') ?>images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h3>Welcome to CMS!</h3>
              <form class="pt-3" action="<?= base_url('auth/login') ?>" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Username</label>
                    <input 
                    type="text"
                    class="form-control"
                    name="username"
                    placeholder="Enter your username"
                    autofocus
                    />
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="input-group input-group-merge">
                    <input 
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                    />
                    </div>
                    <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                    </div>
                    <div id="menghilang">
	                    <?= $this->session->flashdata('alert') ?>
                    </div>
                </div>    
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= site_url('assets/skydash/') ?>vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= site_url('assets/skydash/') ?>js/off-canvas.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/hoverable-collapse.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/template.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/settings.js"></script>
  <script src="<?= site_url('assets/skydash/') ?>js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
