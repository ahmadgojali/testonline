    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gejala - Gejala Penyakit Pada Sapi
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Checkbox</a></li>
        <li class="active">Gejala Penyakit Sapi</li>
      </ol>
    </section>
    <?php
      $kd_penyakit = $_GET['kd_penyakit'];

      $query = "SELECT * FROM tb_penyakit WHERE kd_penyakit='$kd_penyakit'";
      $sql = mysqli_query($connect, $query);  
      $data = mysqli_fetch_array($sql);
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <!-- form start -->
            <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
              <div class="box-header with-border"><br>
                <?php echo "<center><h3 class='box-title'><b>Nama Penyakit &nbsp;&nbsp;: &nbsp;&nbsp;($data[kd_penyakit]) $data[nama_penyakit]</b> </h3></center>"; ?></br>
                <input type="hidden" name="kd_penyakit" value="<?php echo $data['kd_penyakit']; ?>" >
              </div>
              <div class="box-body">
                <table class="table table-striped mailbox-messages">
                  <thead>
                  <tr>
                    <th><button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button></th>
                    <!-- <th class="align-middle text-center" width="5px" ><input type="checkbox" class="flat-red" name="select-all" id="select-all" /></th> -->
                    <th width="15%" >Kode Gejala</th>
                    <th width="80%" >Gejala - Gejala Yang Timbul Pada Penyakit Sapi</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php
                                  
                    $query  = "SELECT * FROM tb_gejala";
                    $hasil  = mysqli_query($connect, $query);
                    while($data = mysqli_fetch_array($hasil)){

                     $query2  = "SELECT * FROM basis_aturan WHERE kd_penyakit ='$kd_penyakit' AND kd_gejala ='$data[kd_gejala]'";
                     $hasil2 = mysqli_query($connect, $query2);
                     $cocok = mysqli_num_rows($hasil2); 
                        if ($cocok == 1) {
                          $ceklis = " checked";
                         
                        }
                        else {
                          $ceklis = "";
                          
                        }                   
                  ?>

                  <tr>
                    <td class="align-middle text-center">
                      <input type="checkbox" value="<?php echo $data['kd_gejala'] ?>" name="gejala[]" <?php echo $ceklis; ?> />
                    </td>
                    <td><?php echo $data['kd_gejala']; ?></td>
                    <td><?php echo $data['nama_gejala']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>   
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a class="btn btn-default" href="javascript:history.back()"><i class="fa  fa-arrow-left"></i> &nbsp;Kembali</a>
                    <button type="submit" name="submit" class="btn btn-success pull-right"><i class="fa  fa-save"></i> &nbsp;Simpan</button>
                  </div>
                </form>
              </div>
              <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    <?php

      if (isset($_POST['submit'])) {

        $kd_penyakit      = $_POST['kd_penyakit'];
        $kd_gejala        = $_POST['gejala'];
     
        $jumlah  = count($kd_gejala);
        
         if ($jumlah == 0) {
         echo "<script language='javascript'>window.alert('Gejala belum dipilih, Coba ulangi kembali.'), window.location = '?page=gejala_penyakit&kd_penyakit=$kd_penyakit';</script>";
         }

          else {
         # UNTUK MENGHAPUS YANG TIDAK DIPILIH LAGI
            // Kode untuk mendata relasi
         $query = "SELECT * FROM basis_aturan WHERE kd_penyakit='$kd_penyakit'";
         $hasil = mysqli_query($connect, $query);
         while ($data=mysqli_fetch_array($hasil)){
            // Kode untuk mengurai Gejala yang dipilih
            for ($i = 0; $i < $jumlah; ++$i) { 
          // Perintah untuk menghapus Relasi
          if ($data['kd_gejala'] != $kd_gejala[$i]) {
             $sqldel  = "DELETE FROM basis_aturan WHERE kd_penyakit='$kd_penyakit' AND NOT kd_gejala IN ('$kd_gejala[$i]')";
             mysqli_query($connect, $sqldel);
            }
          }
         }
          
        # UNTUK DATA GEJALA TAMBAHAN
          for ($i = 0; $i < $jumlah; ++$i) { 
               // Perintah untuk mendapat relasi    
               $query  = "SELECT * FROM basis_aturan WHERE kd_penyakit='$kd_penyakit' AND kd_gejala='$kd_gejala[$i]'";
               $hasil  = mysqli_query($connect, $query);
               $cocok = mysqli_num_rows($hasil);
             
                   // Gejala yang baru akan disimpan
               if (! $cocok == 1) {
               $sql  = "INSERT INTO basis_aturan (kd_penyakit,kd_gejala) VALUES ('$kd_penyakit','$kd_gejala[$i]')";
               mysqli_query($connect, $sql) or die ("SQL Input Relasi Gagal".mysql_error());
             }
          }   
             echo "<script language='javascript'>window.alert('Update Complete, Gejala berhasil di Update.'), window.location = '?page=detail_penyakit&kd_penyakit=$kd_penyakit';</script>";
          
        }
      }
    ?>