<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QuickZakat | Aplikasi Zakat Fitrah BAZ Al-Falah</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.svg" />
  </head>
  <body>

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="images/favicon.svg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Administrator
                  </p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Log out </a>
              </div> 
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="home.php" class="nav-link">

                <div class="nav-profile-text d-flex flex-column">
                  <img src="images/logo_qz.png" height=100px alt="QuickZakat">
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <span class="menu-title">
                  <i class="mdi mdi-home menu-icon"></i>
                  <b>DASHBOARD</b>
                </span>
              </a>
            </li>
            <li class="nav-item">
                <span class="menu-title"><b>MASTER DATA</b></span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="muzakki.php">
                <span class="menu-title">
                  <i class="mdi mdi-arrow-right menu-icon"></i>
                  Master Data Muzakki
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mustahik.php">
              <span class="menu-title">
                <i class="mdi mdi-arrow-right menu-icon"></i>
                Master Data Mustahik
              </span>
              </a>
            </li>
            <li class="nav-item">
                <span class="menu-title"><b>KELOLA ZAKAT FITRAH</b></span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_pengumpulan.php">
              <span class="menu-title">
                <i class="mdi mdi-arrow-right menu-icon"></i>
                Data Pengumpulan
              </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="distribusi_warga.php" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">
                  <i class="mdi mdi-arrow-right menu-icon"></i>
                  Distribusi Mustahik Warga
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="distribusi_lainnya.php" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">
                  <i class="mdi mdi-arrow-right menu-icon"></i>
                  Distribusi Mustahik Lainnya
                </span>
              </a>
            </li>
            <li class="nav-item">
                <span class="menu-title"><b>LAPORAN ZAKAT FITRAH</b></span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laporan_pengumpulan.php">
              <span class="menu-title">
                <i class="mdi mdi-arrow-right menu-icon"></i>
                Unduh Laporan Pengumpulan
              </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="laporan_distribusi.php" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">
                  <i class="mdi mdi-arrow-right menu-icon"></i>
                  Unduh Laporan Distribusi
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
              <span class="menu-title">
                <i class="mdi mdi-logout menu-icon"></i>
                <b>Log Out</b></span>
              </a>
            </li>
          </ul>
        </nav>