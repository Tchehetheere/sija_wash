<?php 

$title = '';
if(isset($_GET['hal'])){
  global $halaman;
  $halaman=$_GET['hal'];
  switch ($halaman) {

//PENGGUNA

    case 'pengguna':
      $title='ADMINISTRATOR - Pengguna';
    break;
    case 'pengguna-create':
      $title='ADMINISTRATOR - Tambah Pengguna';
    break;
    case 'pengguna-edit':
      $title='ADMINISTRATOR - Edit Pengguna';
    break;



//PEGAWAI

    case 'pegawai':
      $title='ADMINISTRATOR - Pegawai';
    break;
    case 'pegawai-create':
      $title='ADMINISTRATOR - Tambah Pegawai';
    break;
    case 'pegawai-edit':
      $title='ADMINISTRATOR - Edit Pegawai';
    break;



//BARANG

    case 'barang':
      $title='ADMINISTRATOR - Barang';
    break;
    case 'barang-create':
      $title='ADMINISTRATOR - Tambah Barang';
    break;
    case 'barang-edit':
      $title='ADMINISTRATOR - Edit Barang';
    break;



//JASA

    case 'jasa':
      $title='SIJA WASH - Jasa';
    break;
    case 'jasa-create':
      $title='ADMINISTRATOR - Tambah Jasa';
    break;
        case 'jasa-edit':
      $title='ADMINISTRATOR - Edit Jasa';
    break;



//ORDER

    case 'order':
      $title='SIJA WASH - Order';
    break;

//LOG

    case 'log':
      $title='ADMIN - Log';
    break;

//DEFAULT

    default:
      $title='SIJA WASH';

  }
}else{
  include('dashboard.php');
}


// FOR ACTIVE NAVBAR

$exp = explode('-', $halaman, 2);
$active = $exp[0];



?>

<!-- MASTER -->

<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title;?></title>
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="css/examples.css" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <body>

<!-- Sidebar -->


    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <!-- <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div> -->
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link <?php if($active=='dashboard'){echo 'text-warning';} ;?>" href="index.php?hal=dashboard">
            <svg class="nav-icon">
              <use xlink:href="../bootstrap-icons/bootstrap-icons.svg#emoji-smile"></use>
            </svg> Dashboard</a></li>

<!-- USER -->

        <li class="nav-title">pengguna</li>
        <li class="nav-item"><a class="nav-link <?php if($active=='pengguna'){echo 'text-warning';} ;?>" href="index.php?hal=pengguna">
            <svg class="nav-icon">
              <use xlink:href="../bootstrap-icons/bootstrap-icons.svg#people"></use>
            </svg> Pengguna</a></li>
        <li class="nav-item"><a class="nav-link <?php if($active=='pegawai'){echo 'text-warning';} ;?>" href="index.php?hal=pegawai">
            <svg class="nav-icon">
              <use xlink:href="../bootstrap-icons/bootstrap-icons.svg#briefcase"></use>
            </svg> Pegawai</a></li>
  
<!-- STOK/BARANG -->

        <li class="nav-title">Stok Barang/jasa</li>
        <li class="nav-item"><a class="nav-link <?php if($active=='barang'){echo 'text-warning';} ;?>" href="index.php?hal=barang">
            <svg class="nav-icon">
              <use xlink:href="../bootstrap-icons/bootstrap-icons.svg#box-seam"></use>
            </svg> Barang</a>
        </li>
        <li class="nav-item"><a class="nav-link <?php if($active=='jasa'){echo 'text-warning';} ;?>" href="index.php?hal=jasa">
            <svg class="nav-icon">
              <use xlink:href="../bootstrap-icons/bootstrap-icons.svg#archive"></use>
            </svg> Jasa<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>

<!-- Activities -->

        <li class="nav-divider"></li>
        <li class="nav-title">Aktifitas</li>
        <li class="nav-item"><a class="nav-link <?php if($active=='log'){echo 'text-warning';} ;?>" href="index.php?hal=log">
            <svg class="nav-icon">
              <use xlink:href="../bootstrap-icons/bootstrap-icons.svg#clipboard"></use>
            </svg> Log Transaksi</a>
        </li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="../bootstrap-icons/bootstrap-icons.svg#list"></use>
            </svg>
          </button>
          <a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="../bootstrap-icons/bootstrap-icons.svg#emoji-smile"></use>
            </svg>
          </a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="index.php?hal=dashboard">Dashboard</a></li>
          </ul>
          <ul class="header-nav ms-auto">
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md">
                  <img class="avatar-img" src="../bootstrap-icons/person.svg" alt="user">
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="../bootstrap-icons/bootstrap-icons.svg#escape"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single-->
                <span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span><?php echo $halaman;?></span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">

      <?php
        if(isset($_GET['hal'])){
          $halaman=$_GET['hal'];
          switch ($halaman) {

//PEGAWAI

            case 'pegawai':
              include('pegawai/index.php');
            break;
            case 'pegawai-create':
              include('pegawai/create.php');
            break;
            case 'pegawai-edit':
              include('pegawai/edit.php');
            break;

//PENGGUNA

            case 'pengguna':
              include('pengguna/index.php');
            break;
            case 'pengguna-create':
              include('pengguna/create.php');
            break;
            case 'pengguna-edit':
              include('pengguna/edit.php');
            break;

//JASA

            case 'jasa':
              include('jasa/index.php');
            break;
            case 'jasa-create':
              include('jasa/create.php');
            break;
            case 'jasa-edit':
              include('jasa/edit.php');
            break;


//BARANG

            case 'barang':
              include('barang/index.php');
            break;
            case 'barang-create':
              include('barang/create.php');
            break;
            case 'barang-edit':
              include('barang/edit.php');
            break;


//ORDER

            case 'order':
              include('order/index.php');
            break;

//LOG

            case 'penggunaan':
              include('log/index.php');
            break;


//DEFAULT

            default:
              include('dashboard.php');  
            break;

          }
        }else{
          include('dashboard.php');
        }
    ?>
      </div>
      <footer class="footer">
      </footer>
    </div>

    
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script>
    </script>
  </body>
</html>