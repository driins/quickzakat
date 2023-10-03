<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | QuickZakat</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-qn29vFs4eJ8MvLfhGA9i+2+BCaMWi5vaHM/00vcYmDZkk2yWvRSTqF10bUp2q3rK" crossorigin="anonymous">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.svg" />
    <style>
      .center {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
      }
      .form-group .fa {
        position: absolute;
        right: 10px;
        top: calc(50% - 8px);
      }
      .btn-login {
        border: 1px solid #ccc;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo center">
                  <img src="images/logo_qz.png">
                </div>
                <h6 class="font-weight-light center">Silahkan login untuk dapat mengakses seluruh fitur QuickZakat.</h6>
                <form method="post" action="login.php" class="login-form">
                  <?php if (isset($login_error)) : ?>
                    <div class="alert alert-danger"><?php echo $login_error; ?></div>
                  <?php endif; ?>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputText" placeholder="Username" name="username">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <div class="mt-3 center">
                    <button type="submit" name="submit" class="btn btn-primary rounded border submit p-3 px-5 btn-login">
                      <i class="fa fa-sign-in"></i> Login
                    </button>
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>
