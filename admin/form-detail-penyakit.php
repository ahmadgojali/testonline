<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>
 <?php

    include "../config/koneksi.php";

    $kd_penyakit   = $_GET['kd_penyakit'];

    $query  = "SELECT * FROM tb_penyakit WHERE kd_penyakit = '$kd_penyakit'";
    $hasil  = mysqli_query($connect, $query);
    $row    = mysqli_fetch_array($hasil);     

  ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Detail Data Penyakit Sapi
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Lihat Penyakit Sapi</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">

            <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <!-- <h3 class="box-title"></h3> -->
          <div>
            <a href="?page=penyakit" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
           <!--  <a href="print-penyakit.php?kd_penyakit=<?php echo $row['kd_penyakit']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a> -->
            <!-- <a href="?page=impor-jenis" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg fa-folder-open"></i>&nbsp; Cetak&nbsp;</a> -->
          </div>
          <!-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div> -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
                 <!--  <div class="mailbox-controls with-border">
                    <div class="btn-group">
                      <a type="submit" href="?page=penyakit" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Back">
                        <i class="fa  fa-chevron-left"></i></a>
                      <a type="submit" href="" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Next">
                        <i class="fa  fa-chevron-right"></i></a>&nbsp;&nbsp;&nbsp;
                    </div>
                      <a type="submit" href="" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                        <i class="fa fa-print"></i></a>
                  </div> -->
                <?php
                  $kd_penyakit = $_GET['kd_penyakit'];

                  $query = "SELECT * FROM tb_penyakit WHERE kd_penyakit='$kd_penyakit'";
                  $sql = mysqli_query($connect, $query);  
                  $data = mysqli_fetch_array($sql);
                  ?>
                <div class="box-body">
                  <h4><i><b>Detail Penyakit &nbsp;: &nbsp;<?php echo $data['nama_penyakit'];?></b></i></h4><hr>
                  <dl class="dl-horizontal">
                  
                    <dt>Kode &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['kd_penyakit'];?></dd>                   
                    <dt>Penyakit &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['nama_penyakit'];?></dd><br>
                    <dt>Keterangan &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['ket_penyakit'];?></dd>
                    <dt>Pengobatan &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['pengobatan'];?></dd>
                    <dt>Pencegahan &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['pencegahan'];?></dd></br>
                    <dt>Gejala &nbsp;&nbsp;: </dt>
                    <?php               
                       $query = "SELECT tb_penyakit.*, basis_aturan.*, tb_gejala.* 
                                FROM tb_penyakit, basis_aturan, tb_gejala
                                WHERE basis_aturan.kd_penyakit=tb_penyakit.kd_penyakit
                                AND basis_aturan.kd_gejala=tb_gejala.kd_gejala  
                                AND tb_penyakit.kd_penyakit='$kd_penyakit'";
                      $sql = mysqli_query($connect, $query);  
                      while($row = mysqli_fetch_array($sql)){                    
                      echo "<dd><i class='fa  fa-check-circle'></i>&nbsp;&nbsp;$row[nama_gejala]</dd>";
                      } ?>
                    </br>

                      <dd><a class="btn btn-success" href="?page=gejala_penyakit&kd_penyakit=<?php echo $data['kd_penyakit']; ?>"><i class="fa fa-plus-circle"></i> &nbsp;Tambah Gejala</a></dd>
                  </dl>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- <a class="btn btn-primary" href="javascript:history.back()"><i class="fa  fa-arrow-left"></i> &nbsp;Kembali</a> -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->