<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>

<?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
 
    switch ($page) {
      case 'hasil-tes-1':
        include "lihat-hasil/tes-1.php";
        break;
      case 'hasil-tes-2':
        include "lihat-hasil/tes-2.php";
        break;
      case 'hasil-tes-3':
        include "lihat-hasil/tes-3.php";
        break; 
      case 'hasil-tes-4':
        include "lihat-hasil/tes-4.php";
        break;
      case 'hasil-tes-5':
        include "lihat-hasil/tes-5.php";
        break;       
      default:
        echo "<script language='javascript'>window.alert('Maaf. Halaman tidak di temukan !'), window.location = 'data-hasil.php';</script>";
        break;
    }

  }else{
    echo "<script language='javascript'>window.alert('Maaf. Halaman tidak di temukan !'), window.location = 'data-hasil.php';</script>";
    // header("location:admin/data-hasil.php");
    // include "halaman/home.php";
  }
 
   ?>

<?php include 'templates/footer.php'; ?>