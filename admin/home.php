<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SIPAKMI
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
   <!--  <section class="content">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Selamat Datang <i><?php echo $data['nama']; ?></i> di <strong>Aplikasi SIMAKSI </strong></h4>
        Sistem Pakar Untuk Mendiagnosa Penyakit Sapi
      </div>
    </section> -->

     <?php                     
                       
      $query1  = "SELECT count(*) AS jumlah1 FROM tb_penyakit";
      $hasil  = mysqli_query($connect, $query1);
      $row = mysqli_fetch_array($hasil);
      $jmlpenyakit = $row['jumlah1'];
                          
      $query2  = "SELECT count(*) AS jumlah2 FROM tb_gejala";
      $hasil  = mysqli_query($connect, $query2);
      $row = mysqli_fetch_array($hasil);
      $jmlgejala = $row['jumlah2'];
                          
      $query3  = "SELECT count(*) AS jumlah3 FROM tb_admin";
      $hasil  = mysqli_query($connect, $query3);
      $row = mysqli_fetch_array($hasil);
      $jmlpakar = $row['jumlah3'];

      $query3  = "SELECT count(*) AS jumlah3 FROM tb_pasien";
      $hasil  = mysqli_query($connect, $query3);
      $row = mysqli_fetch_array($hasil);
      $jmlpasien = $row['jumlah3'];

      $query3  = "SELECT count(*) AS jumlah3 FROM hasil_diagnosa";
      $hasil  = mysqli_query($connect, $query3);
      $row = mysqli_fetch_array($hasil);
      $hasil = $row['jumlah3'];
      
      ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- <div class="col-lg-3 col-xs-6">
          small box
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jmljns;?></h3>

              <p>Kategori Penyakit</p>
            </div>
            <div class="icon">
              <i class="fa fa-arrow-circle-right"></i>
            </div>
            <a href="?page=jenis_penyakit" class="small-box-footer"> Selengkapnya&nbsp; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $jmlpenyakit;?></h3>

              <p>Data Penyakit</p>
            </div>
            <div class="icon">
              <i class="fa fa-database"></i>
            </div>
            <a href="?page=penyakit" class="small-box-footer"> Selengkapnya&nbsp; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $jmlgejala;?></h3>

              <p>Data Gejala</p>
            </div>
            <div class="icon">
              <i class="fa fa fa-database"></i>
            </div>
            <a href="?page=gejala" class="small-box-footer"> Selengkapnya&nbsp; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $jmlpakar;?></h3>

              <p>Data Pakar</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users"></i>
            </div>
            <a href="?page=pakar" class="small-box-footer"> Selengkapnya&nbsp; <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

          <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
                    <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Diagnosa Terbaru</h3>

              <div class="box-tools pull-right">
                <span class="label label-info">Total Data&nbsp;<?php echo $hasil;?></span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Tanggal Diagnosa</th>
                    <th>Nama Pasien</th>
                    <th>Terserang Penyakit</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php                    
                
                    $query = "SELECT tb_penyakit.*, tb_pasien.*, hasil_diagnosa.* 
                              FROM tb_penyakit, tb_pasien, hasil_diagnosa 
                              WHERE hasil_diagnosa.kd_penyakit=tb_penyakit.kd_penyakit 
                              AND hasil_diagnosa.no_daftar=tb_pasien.no_daftar
                              ORDER BY hasil_diagnosa.tanggal DESC LIMIT 5";
                    $hasil  = mysqli_query($connect, $query);
                    $nomor = 1;
                    while($row = mysqli_fetch_array($hasil)){                     
                    ?>
                  <tr>
                    <?php $tanggal = $row['tanggal']; ?>
                    <td><a href="?page=detail_pasien&id=<?php echo $row['id']; ?>"><?php echo date("d M y / G:i:s", strtotime($tanggal))  ?></a></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nama_penyakit']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
             <!--  <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a> -->
              <a href="?page=hasil_diagnosa" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua Hasil</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <div class="row">
            <div class="col-md-6">
        
            </div>
            <!-- /.col 6-->

            <div class="col-md-6">
        
            </div>
            <!-- /.col 6-->
          </div>
          <!-- /.row 6-8-->


        </div>
        <!-- /.col 8 -->

        <div class="col-md-4">
                <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Pasien Baru</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">Total Data&nbsp;<?php echo $jmlpasien;?></span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <?php                    
                    
                    $query = "SELECT * FROM tb_pasien ORDER BY tanggal DESC LIMIT 8";
                    $hasil  = mysqli_query($connect, $query);
                    $nomor = 1;
                    while($row = mysqli_fetch_array($hasil)){                     
                    ?>
                    <li>
                      <?php
                      if (($row['foto']) == NULL) {
                        echo '<img src="../assets/images/pasien/kosong.png" class="user-image" alt="User Image">';
                        
                      }else{
                          echo  "<img src='../assets/images/pasien/$row[foto]' class='user-image' alt='User Image'>";
                        
                      }
                      ?>
                      
                      <a class="users-list-name" href="?page=detail_user&no_daftar=<?php echo $row['no_daftar']; ?>"><?php echo $row['nama']; ?></a>
                      <?php $tanggal = $row['tanggal']; ?>
                      <span class="users-list-date"><?php echo date("d M Y", strtotime($tanggal))  ?></span>
                    </li>
                     <?php } ?>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="?page=user" class="uppercase">Lihat Semua Pasien</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
        </div>
        <!-- /.col 4-->
      </div>
      <!-- /.row all-->
    </section>
