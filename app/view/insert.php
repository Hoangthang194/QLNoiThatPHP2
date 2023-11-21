<?php
require_once "../controller/getData.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../admin/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../admin/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NS Luxury</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="display: flex; justify-content: center; align-items: center;">
          <i class="fa-solid fa-user img-circle elevation-2" style="color: white;"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý sản phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="./index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./insert.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sản phẩm</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="./chat.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Hộp thư
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container">
  <h2 class="mb-4">Thêm sản phẩm</h2>

  <!-- Add Item Form -->
  <form id="addItemForm" method="post" action="" enctype="multipart/form-data">
  <div class="mb-3">
  
  <div class="row gx-5">
    <div class="col">
      <label for="nameproduct" class="form-label">Tên sản phẩm</label>
      <input type="text" class="form-control" id="nameproduct" placeholder="Tên sản phẩm" required name="Title">
    </div>
    <div class="col">
      <label for="materialproduct" class="form-label">Chất liệu</label>
      <input type="text" class="form-control" id="materialproduct" placeholder="Chất liệu" required name="Material">
    </div>
  </div>
</div>
<div class="mb-3">
  <label for="des" class="form-label">Mô tả</label>
  <textarea class="form-control" id="des" rows="3" name="Des"></textarea>
</div>

<div class="mb-3">
<div class="row gx-5">
    <div class="col">
    <label for="materialproduct" class="form-label">Loại sản phẩm</label>
      <select class="form-select" aria-label=".form-select-lg example" name="TypeProduct" id="TypeProduct">
        <option selected>Loại sản phẩm</option>
        <option value="1">Sofa and Armchair</option>
        <option value="2">Bàn</option>
        <option value="3">Ghế</option>
        <option value="4">Giường ngủ</option>
      </select>
    </div>
    <div class="col">
    <label for="materialproduct" class="form-label">Loại phòng</label>
    <select class="form-select" aria-label=".form-select-lg example" name="TypeRoom" id="TypeRoom">
        <option selected>Loại phòng</option>
        <option value="1">Phòng ăn</option>
        <option value="2">Phòng ngủ</option>
        <option value="3">Phòng khách</option>
      </select>
    </div>
  </div>
</div>
<div class="mb-3">
<div class="row gx-5">
    <div class="col">
      <label for="priceproduct" class="form-label">Giá</label>
      <input type="number" class="form-control" id="priceproduct" placeholder="Giá" required name="Priceold" >
    </div>
    <div class="col">
      <label for="saleoff" class="form-label">Ưu đãi</label>
      <input type="text" class="form-control" id="saleoff" placeholder="Ưu đãi" required name="SaleOff">
    </div>
  </div>
</div>

<div class="mb-3">
  <div class="row gx-5">
    <div class="col">
      <label for="Acreage" class="form-label">Kích thước</label>
      <input type="text" class="form-control" id="acreage" placeholder="Kích thước" required name="Acreage">
    </div>
    <div class="col">
      <label for="State" class="form-label">Tình trạng</label>
    <div class="row gx-5" style="display: flex; align-items: center;">
      <div class="col">
      <div class="form-check">
      <input class="form-check-input" type="radio" id="flexRadioDefault1" name="state" value="Còn trống">
      <label class="form-check-label" for="flexRadioDefault1">
        Còn hàng
      </label>
</div>
      </div>

      <div class="col">
      <div class="form-check">
      <input class="form-check-input" type="radio" id="flexRadioDefault2" name="state" value="Đã đặt">
      <label class="form-check-label" for="flexRadioDefault1">
        Đã hết hàng
      </label>
</div>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="mb-3">
  <label for="image" class="form-label">Thêm hình ảnh</label>
      <input type="file" class="form-control" id="saleoff" placeholder="Ưu đãi" required name="images[]" multiple>
</div>
<div class="mb-3">
  <?php
  $receivedId = isset($_GET['id']) ? $_GET['id'] : '';
  $receivedIsUpdate = isset($_GET['isUpdate']) ? $_GET['isUpdate'] : '';
  if($receivedIsUpdate == "1"){
    $getData = new Getdata();
    $result = $getData->getProductByid($receivedId);
    echo '<button class="btn btn-primary visually-hidden" type="submit">Thêm sản phẩm</button>
    <button class="btn btn-primary " type="submit">Cập nhật sản phẩm</button>
    <button class="btn btn-secondary" type="button"><a href="../view/index.php" style="text-decoration: none; color:#fff;">Hủy</a></button>';
    echo '<script>
    var form = document.getElementById("addItemForm");
    form.action = "../controller/update.php?id='.$receivedId.'";
    document.getElementById("nameproduct").value = "'.$result[0]["Title"].'";
    document.getElementById("materialproduct").value = "'.$result[0]["Material"].'";
    document.getElementById("des").value = "'.$result[0]["Des"].'";
    document.getElementById("TypeProduct").value = "'.$result[0]["TypeID"].'";
    document.getElementById("TypeRoom").value = "'.$result[0]["RoomID"].'";
    document.getElementById("priceproduct").value = "'.$result[0]["Priceold"].'";
    document.getElementById("saleoff").value = "'.$result[0]["SaleOff"].'";
    document.getElementById("acreage").value = "'.$result[0]["Acreage"].'";
    
  </script>';
  ?>
  
  <?php

  }
  else{
    echo '<button class="btn btn-primary" type="submit">Thêm sản phẩm</button>
    <button class="btn btn-primary visually-hidden" type="submit">Cập nhật sản phẩm</button>
    <button class="btn btn-secondary" type="button">Hủy</button>';
    echo '<script>
    var form = document.getElementById("addItemForm")
    form.action = "../controller/insert.php";
  </script>';
  }
   ?>
</div>
  </form>

  <hr>

  <!-- Item List -->
  <ul id="itemList" class="list-group">
    <!-- Item will be dynamically added here -->
  </ul>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../admin/plugins/moment/moment.min.js"></script>
<script src="../../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../admin/dist/js/pages/dashboard.js"></script>
</body>
</html>