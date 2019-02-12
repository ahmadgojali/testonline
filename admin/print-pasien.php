<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Halaman Administrator - SIPAKMI</title>
    <link rel="shortcut icon" href="../assets/images/Bbalitvet.jpg">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="../assets/zontal/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../assets/zontal/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../assets/zontal/css/style.css" rel="stylesheet" />
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 7px; float: right;}</style>
</head>
<body  onload="window.print();">

   <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <!-- <h4 class="page-head-line">Hasil Diagnosa Penyakit Pada Sapi</h4> -->
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                 include "../config/koneksi.php";
                  $id = $_GET['id'];

                 $query = "SELECT tb_penyakit.*, tb_pasien.*, hasil_diagnosa.*, basis_aturan.*, tb_gejala.* 
                          FROM tb_penyakit, tb_pasien, hasil_diagnosa, basis_aturan, tb_gejala
                          WHERE hasil_diagnosa.no_daftar=tb_pasien.no_daftar
                          AND hasil_diagnosa.kd_penyakit=tb_penyakit.kd_penyakit 
                          AND tb_penyakit.kd_penyakit=basis_aturan.kd_penyakit
                          AND tb_gejala.kd_gejala=basis_aturan.kd_gejala 
                          AND hasil_diagnosa.id= '$id' ";
                  $sql = mysqli_query($connect, $query);  
                  $data = mysqli_fetch_array($sql);
                ?>
                <div class="box-body">
                  <!-- <div class="">
                     <a id="tombol-kanan" class="btn btn-warning btn-sm" href="javascript:history.back()">Kembali</a>
                  </div> -->
                  <div>
                    <?php $tanggal = $data['tanggal']; ?>
                  <h4><b><i>Tanggal Diagnosa : &nbsp;</i></b> <?php echo date("l, d F Y / G:i:s", strtotime($tanggal))  ?></h4>
                  </div><hr>
                  <div>
                    <p><i><h4><b>Data Pasien</b></h4></i></p>
                  </div><hr>    
                
                  <div class="col-md-12 col-md-offset-0">
                    <table>
                    <tr>                  
                    <td><b>Nama Lengkap</b> </td>
                    <td><b>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                    <td><?php echo $data['nama'];?></td>
                    </tr>
                    <tr>                  
                    <td><b>Email</b> </td>
                    <td><b>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                    <td><?php echo $data['email'];?></td>
                    </tr>
                    <tr>
                    <td><b>Jenis Kelamin</b> </td>
                    <td><b>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                    <td><?php echo $data['jenis_kelamin'];?></td>
                    </tr>
                    <tr>
                    <td><b>Pekerjaan</b> </td>
                    <td><b>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                    <td><?php echo $data['pekerjaan'];?></td>
                    </tr>
                    <tr>
                    <td><b>No Telepon</b> </td>
                    <td><b>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                    <td><?php echo $data['no_telp'];?></td>
                    </tr>   
                  </table><br>
                 <!--  <h4><b>Data Pasien</b></h4><hr> -->
                    <!-- <dl class="dl-horizontal">                   
                      <b>Nama Lengkap&nbsp;&nbsp;: </b><?php echo $data['nama'];?>
                      <dd></dd>
                      <b>Email &nbsp;&nbsp;: </b><?php echo $data['email'];?>
                      <dd></dd>
                      <b>Jenis Kelamin &nbsp;&nbsp;: </b><?php echo $data['jenis_kelamin'];?>
                      <dd></dd>
                      <b>Pekerjaan &nbsp;&nbsp;: </b><?php echo $data['pekerjaan'];?>
                      <dd></dd>
                      <b>No Telepon &nbsp;&nbsp;: </b><?php echo $data['no_telp'];?>
                      <dd></dd> -->
                      <!-- <b>Alamat &nbsp;&nbsp;: </b><?php echo $data['alamat'];?> -->
                      <!-- <dd></dd>
                    </dl> -->
                  </div>
               
                    <div>
                      <p><i><h4><b>Penyakit yang mungkin menyerang</b></h4></i></p>
                    </div><hr>
                    <!-- <h4><b>Penyakit yang mungkin menyerang</b></h4><hr> -->
                    <dl class="dl-horizontal">  
                      <dt><!-- Penyakit Pada Sapi &nbsp;&nbsp;: --> </dt>
                      
                      <dd><h4><b><font color='red'><?php echo $data['nama_penyakit'];?></font></b></h4></dd><br>
                      <dt>Informasi &nbsp;&nbsp;: </dt>
                       <dd><?php echo $data['ket_penyakit'];?></dd><br>
                       <dt>Pengobatan &nbsp;&nbsp;: </dt>
                       <dd><?php echo $data['pengobatan'];?></dd><br>
                       <dt>Pencegahan &nbsp;&nbsp;: </dt>
                       <dd><?php echo $data['pencegahan'];?></dd><br>
                      
                      <dt>Gejala &nbsp;&nbsp;: </dt>
                       <?php               
                      $query = "SELECT tb_penyakit.*, tb_pasien.*, hasil_diagnosa.*, basis_aturan.*, tb_gejala.* 
                                FROM tb_penyakit, tb_pasien, hasil_diagnosa, basis_aturan, tb_gejala
                                WHERE hasil_diagnosa.no_daftar=tb_pasien.no_daftar
                                AND hasil_diagnosa.kd_penyakit=tb_penyakit.kd_penyakit 
                                AND tb_penyakit.kd_penyakit=basis_aturan.kd_penyakit
                                AND tb_gejala.kd_gejala=basis_aturan.kd_gejala 
                                AND hasil_diagnosa.id= '$id'";
                      $sql = mysqli_query($connect, $query);  
                      while($data = mysqli_fetch_array($sql)){                    
                      echo "<dd><i class='fa  fa-check-circle'></i>&nbsp;&nbsp;$data[nama_gejala]</dd>";
                      } ?>
                      </br>
                    </dl>
                 
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>          
              
          </div>
      </div>
    </div>
    
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="../assets/zontal/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/zontal/js/bootstrap.js"></script>
    <!-- DataTables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <!-- iCheck 1.0.1 -->
    <script src="../assets/plugins/iCheck/icheck.min.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
      
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        });

        //Initialize Select2 Elements
        $(".select2").select2();

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
      });
    </script>
</body>
</html>
