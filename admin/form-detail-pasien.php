    <style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <?php

    include "../config/koneksi.php";

    $id   = $_GET['id'];

    $query  = "SELECT * FROM hasil_diagnosa WHERE id = '$id'";
    $hasil  = mysqli_query($connect, $query);
    $row    = mysqli_fetch_array($hasil);     

  ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hasil Diagnosa Penyakit Pada Sapi
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Hasil Diagnosa</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">

            <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <!-- <h3 class="box-title">Hasil Diagnosa</h3> -->
          <div>
            <a href="?page=hasil_diagnosa" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
            <a href="print-pasien.php?id=<?php echo $row['id']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a>
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
                  <!-- <div class="mailbox-controls with-border">
                    <div class="btn-group">
                      <a type="submit" href="javascript:history.back()" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Back">
                        <i class="fa  fa-chevron-left"></i></a>
                      <a type="submit" href="" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Next">
                        <i class="fa  fa-chevron-right"></i></a>&nbsp;&nbsp;&nbsp;
                    </div>
                      <a type="submit" href="" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                        <i class="fa fa-print"></i></a>
                  </div> -->
                <?php
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
                  <?php $tanggal = $data['tanggal']; ?>
                  <h4><b><i>Tanggal Diagnosa : &nbsp;</i></b> <?php echo date("l, d F Y / G:i:s", strtotime($tanggal))  ?></h4><hr>
                  <div class="col-md-12 col-md-offset-0">
                  <h4><b><i>Data Pasien</i></b></h4><hr>
                  <dl class="dl-horizontal">                   
                    <dt>Nama Lengkap &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['nama'];?></dd>
                    <dt>Email &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['email'];?></dd>
                    <dt>Jenis Kelamin &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['jenis_kelamin'];?></dd>
                    <dt>Pekerjaan &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['pekerjaan'];?></dd>
                    <dt>No Telepon &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['no_telp'];?></dd><hr>
                    <!-- <dt>Alamat &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['alamat'];?></dd><hr>   -->
                  <br>
                    
                  
                  <h4><b><i>Penyakit yang mungkin menyerang</i></b></h4><hr> 
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
                 <!--  <button class="btn btn-default" type="submit" name="submit"><i class='fa fa-print'></i>&nbsp; Cetak</button> -->
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