<?php
session_start();
include '../config/koneksi.php';
  if(isset($_SESSION['admin'])){
    $session = $_SESSION['admin'];
    $query   = mysqli_query($connect, "SELECT * FROM admin WHERE id ='$session'") or die (mysql_error());
    $data    = mysqli_fetch_array($query);
  }
  
  else{
    header("location:../login.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Administrator - Arwana Citra</title>
  <link rel="shortcut icon" href="../assets2/images/man.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets2/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
 <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
 <!-- FontAwesome-->
  <link rel="stylesheet" href="../assets2/bootstrap/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ionicons -->
 <!--  <link rel="stylesheet" href="../assets2/plugins/ionicons/docs/css/ionicons.min.css"> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets2/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets2/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets2/plugins/iCheck/flat/blue.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../assets2/plugins/iCheck/all.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../assets2/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../assets2/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../assets2/plugins/datepicker/datepicker3.css">
   <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../assets2/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../assets2/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../assets2/plugins/select2/select2.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets2/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../assets2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <style type="text/css">
  .img-circle {
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    /*opacity: 0.5;*/
    border-top: 2px solid #cf2031;
    border-right: 2px solid #0f7dc8;
    border-bottom: 2px solid #2eb31a;
    border-left: 2px solid#eab823;
    width:70px;
    height:70px;
  }
  </style>

  
  <!-- back to top css -->
  <style>
    .back-to-top {
      cursor: pointer;
      position: fixed;
      bottom: 20px;
      right: 20px;
      display:none;
  }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="?page=home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AD</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMINISTRATOR</b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets2/images/man.png" class="user-image" alt="User Image">
              
              <span class="hidden-xs"><?= $data['nama'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <img src="../assets2/images/man.png" class="img-circle" alt="User Image">                

                <p>
                  <?= $data['nama'] ?>
                  <small><?= $data['level'] ?></small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-info btn-flat"><i class="fa fa-lg fa-user"></i>&nbsp; Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-danger btn-flat"><i class="fa fa-lg fa-power-off"></i>&nbsp; Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>