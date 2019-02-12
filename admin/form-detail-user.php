    <style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

      <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pasien
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tabel</a></li>
        <li class="active">Data Pasien</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">

            <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <!-- <h3 class="box-title">Hasil Diagnosa</h3> -->
          <div>
            <a href="?page=user" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
            <!-- <a href="print-pasien.php?id=<?php echo $row['id']; ?>" target="_blank" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-lg fa-print"></i>&nbsp; Cetak&nbsp;</a> -->
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
                 
                 <?php

                  include "../config/koneksi.php";

                  $no_daftar   = $_GET['no_daftar'];

                  $query  = "SELECT * FROM tb_pasien WHERE no_daftar = '$no_daftar'";
                  $hasil  = mysqli_query($connect, $query);
                  $data    = mysqli_fetch_array($hasil);     

                ?>

                <div class="box-body">
                  <!-- <h4>Detail Data User</h4><hr> -->
                  <div class="col-md-12 col-md-offset-0">
                  <h4><b><i>Data Profile</i></b></h4><hr>
                  <dl class="dl-horizontal">                   
                    <dt>Nama Lengkap&nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['nama'];?></dd>
                    
                    <dt>Jenis Kelamin &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['jenis_kelamin'];?></dd>
                    <dt>Pekerjaan &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['pekerjaan'];?></dd>
                    <dt>No Telepon &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['no_telp'];?></dd>
                    <dt>Alamat &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['alamat'];?></dd>
                    <dt>Tanggal Gabung &nbsp;&nbsp;: </dt>
                    <?php $tanggal  = $data['tanggal'];?>
                    <dd><?php echo date("l, d F Y ", strtotime($tanggal))  ?></dd>
                    <dt>Foto &nbsp;&nbsp;: </dt>
                    <dd>
                      <div style="padding-top:10px">
                        <?php
                        if (($data['foto']) == NULL) {
                          echo ' <img src="../assets/images/pasien/kosong.png" width="50px" >';
                          
                        }else{
                          echo  "<img src='../assets/images/pasien/$data[foto]' width='50px' >";
                          
                        }
                        ?>  
                      </td>
                      </div>
                    </dd> 
                         
                    
                  </dl><hr>
                  <h4><b><i>Data Akun</i></b></h4><hr>
                  <dl class="dl-horizontal">                   
                    <dt>Email &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['email'];?></dd>
                    <dt>Username &nbsp;&nbsp;: </dt>
                    <dd><?php echo $data['username'];?></dd>
                    <dt>Password &nbsp;&nbsp;: </dt>
                    <dd>**********</dd>   
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