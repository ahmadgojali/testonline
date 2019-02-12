    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Kategori Penyakit
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Kategori Penyakit</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Form Kategori Penyakit</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <?php
                $query = "SELECT max(kd_jenis) as maxKode FROM tb_jenispenyakit";
                $hasil = mysqli_query($connect, $query);
                $data = mysqli_fetch_array($hasil);
                $kode = $data['maxKode'];
                $nourut = (int) substr($kode, 1, 3);
                $nourut++;
                $char = "J";
                $kode = $char . sprintf("%03s", $nourut);
              ?>    
               <!-- form start -->
            <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Kategori</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="kd_jenis" name= "kd_jenis" value="<?php echo $kode; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kategori Penyakit</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="jenis_penyakit" name= "jenis_penyakit" required>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-default" href="javascript:history.back()"><i class="fa  fa-arrow-left"></i> &nbsp;Kembali</a>
                <button type="submit" name="submit" class="btn btn-info pull-right"><i class="fa  fa-save"></i> &nbsp;Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
              <!-- /.form-group -->    
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

        </div>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

    <?php

   if (isset($_POST['submit'])) {

    $kd_jenis          = $_POST['kd_jenis'];
    $jenis_penyakit    = ucwords($_POST['jenis_penyakit']);
 
      // Proses simpan data ke Database
      $query = ("INSERT INTO tb_jenispenyakit (kd_jenis, jenis_penyakit) VALUES ('$kd_jenis','$jenis_penyakit')");
      $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script language='javascript'>window.alert('Proses Complete, Data berhasil di simpan.'), window.location = '?page=jenis_penyakit';</script>"; // Redirect ke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "<script language='javascript'>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'), window.location = '?page=jenis_penyakit';</script>";
      }
    }
    ?>
