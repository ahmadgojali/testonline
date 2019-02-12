    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Edit Data Penyakit Sapi
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Penyakit Sapi</li>
      </ol>
    </section>

    <?php
    $kd_penyakit = $_GET['kd_penyakit'];

    $query = "SELECT * FROM tb_penyakit WHERE kd_penyakit='$kd_penyakit'";
    $sql = mysqli_query($connect, $query);  
    $row = mysqli_fetch_array($sql);
    ?>

   <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Form Edit Penyakit</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
               <!-- form start -->
            <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Penyakit</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="kd_penyakit" name= "kd_penyakit" value="<?php echo $row['kd_penyakit']; ?>" readonly>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Penyakit</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="jenis_penyakit" id="jenis_penyakit" style="width: 100%;" required>
                      <option value="" selected="selected">- Pilih -</option>
                      <?php               

                        $query  = "SELECT * FROM tb_jenispenyakit";
                        $hasil  = mysqli_query($connect, $query);
                        while($data = mysqli_fetch_array($hasil)){

                           if ($data['kd_jenis']== $kd_jenis) {
                           $selected ="selected";
                            }
                            else {
                               $selected ="";
                            }
                        echo " <option value= $data[kd_jenis] $selected> ($data[kd_jenis]) $data[jenis_penyakit]</option>";     
                        }           
                      ?>
                    </select>
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Penyakit</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_penyakit" name= "nama_penyakit" value="<?php echo $row['nama_penyakit']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <input class="form-control" placeholder="Keterangan :" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <textarea class="ckeditor" rows="3" name="ket_penyakit" id="ket_penyakit" required><?php echo $row['ket_penyakit']; ?></textarea>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="ket_penyakit" id="ket_penyakit" required><?php echo $row['ket_penyakit']; ?></textarea>
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <input class="form-control" placeholder="Pengobatan :" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <textarea class="ckeditor" rows="3" name="pengobatan" id="pengobatan" required><?php echo $row['pengobatan']; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <input class="form-control" placeholder="Pencegahan :" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-8">
                    <textarea class="ckeditor" rows="3" name="pencegahan" id="pencegahan" required><?php echo $row['pencegahan']; ?></textarea>
                  </div>
                </div>
              </div>
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

    $kd_penyakit        = $_GET['kd_penyakit'];
    $nama_penyakit      = ucwords($_POST['nama_penyakit']);
    $ket_penyakit       = $_POST['ket_penyakit'];
    $pengobatan         = $_POST['pengobatan'];
    $pencegahan         = $_POST['pencegahan'];
    // $jenis_penyakit     = $_POST['jenis_penyakit'];
 
 
      // Proses simpan data ke Database
      $query = "UPDATE tb_penyakit SET nama_penyakit='".$nama_penyakit."', ket_penyakit='".$ket_penyakit."', pengobatan='".$pengobatan."', pencegahan='".$pencegahan."' WHERE kd_penyakit='".$kd_penyakit."'";
      $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script language='javascript'>window.alert('Update Complete, Data berhasil di Update.'), window.location = '?page=penyakit';</script>"; // Redirect ke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "<script language='javascript'>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'), window.location = '?page=penyakit';</script>";
      }
    }
    ?>