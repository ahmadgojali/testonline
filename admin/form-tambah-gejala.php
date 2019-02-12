    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Tambah Data Gejala Penyakit Sapi
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Gejala Penyakit Sapi</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Form Tambah Gejala</h3>

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
                $query = "SELECT max(kd_gejala) as maxKode FROM tb_gejala";
                $hasil = mysqli_query($connect, $query);
                $data = mysqli_fetch_array($hasil);
                $kode = $data['maxKode'];
                $nourut = (int) substr($kode, 1, 3);
                $nourut++;
                $char = "G";
                $kode = $char . sprintf("%03s", $nourut);
              ?>    
            <!-- form start -->
            <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Gejala</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="kd_gejala" name= "kd_gejala" value="<?php echo $kode; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Gejala</label>
                  <div class="col-sm-6">
                    <textarea class="form-control" rows="3" name="nama_gejala" id="nama_gejala"  required></textarea>
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

    $kd_gejala          = $_POST['kd_gejala'];
    $nama_gejala        = ucfirst($_POST['nama_gejala']);
 
      // Proses simpan data ke Database
      $query = ("INSERT INTO tb_gejala (kd_gejala, nama_gejala) VALUES ('$kd_gejala','$nama_gejala')");
      $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script language='javascript'>window.alert('Proses Complete, Data berhasil di simpan.'), window.location = '?page=gejala';</script>"; // Redirect ke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "<script language='javascript'>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'), window.location = '?page=gejala';</script>";
      }
    }
    ?>