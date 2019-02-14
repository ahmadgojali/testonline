<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

   <!-- Main content -->
    <section class="content">

            <!-- SELECT2 EXAMPLE -->
      <div class="box box-primary">
        <div class="box-header with-border">
      
          <div>
            <a href="data-hasil.php" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
           
          </div>
        
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
                 
                <?php

                  include "../config/koneksi.php";

                  $id_user   = $_GET['id_user'];

                   $query = "SELECT user.*, jawaban_tes3.*, soal3.* from user, jawaban_tes3, soal3 where soal3.id = jawaban_tes3.id_soal and user.id = $id_user ";
                  $hasil  = mysqli_query($connect, $query);
                  $data    = mysqli_fetch_array($hasil);     

                ?>

                <div class="box-body">
                  <div class="text-center lead"><b>Hasil Tes 3 Deret Angka</b></div><hr>
                  <div class="col-md-12 col-md-offset-0">
                  <div class="lead"><b><i>Data Pelamar</i></b></div><hr>
                  <table class=" lead">                    
                    
                    <tr>
                      <td>Nama &nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nama'];?></td>
                    </tr>

                    <tr>
                      <td>Umur &nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['umur'];?></td>
                    </tr>

                    <tr>
                      <td>Email &nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['email'];?></td>
                    </tr>

                    <tr>
                      <td>No Hp &nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['no_telp'];?></td>
                    </tr>

                     <tr>
                      <td>Tanggal Tes &nbsp;&nbsp;&nbsp;&nbsp;</td>
                      <td>:</td> 
                      <td> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['tanggal_tes'];?></td>
                    </tr>
                    
                  </table><hr>

                   <?php 
                       //hitung jumlah jawaban benar
                      $query2 = "SELECT user.*, jawaban_tes3.*, soal3.* from user, jawaban_tes3, soal3 where soal3.id = jawaban_tes3.id_soal and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2 and user.id = $id_user ";
                      $hasil2  = mysqli_query($connect, $query2);

                      $jml_benar = mysqli_num_rows($hasil2);

                      // var_dump($jml_benar);
                   ?>

                  <div class="lead"><b><i>Jawaban Pelamar</i></b></div><hr>
                   <div class="lead">
                      <table>
                      <!-- <tr>
                        <td>Keterangan &nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>:</td>
                        <td> &nbsp;&nbsp;&nbsp;&nbsp; Benar <font color="green" >&nbsp;&nbsp;<i class="fa fa-lg  fa-check"></i></font></td>
                      </tr>
                      <tr>
                        <td> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td></td>
                        <td> &nbsp;&nbsp;&nbsp;&nbsp; Salah <font color="red" >&nbsp;&nbsp;<i class="fa fa-lg  fa-close"></i></font></td> 
                      </tr> -->
                      <tr>
                        <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </b></td>
                        <td>:</b></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar; ?></b></td>
                      </tr>
                    </table>
                   </div>

                   <div class="text-center lead"><b><i>Tabel Tes 3 Deret Angka</i></b></div>

                  <table id="" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th class="lead " width="10"  >No</th>
                      <th   class="lead">Jawaban 1</th>
                      <th   class="lead">Jawaban 2</th>
                      <th  class="lead">Kunci Jawaban 1</th>
                      <th  class="lead">Kunci Jawaban 2</th>
                      <th  class="text-center lead" >Keterangan</th>                                                   
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    include '../config/koneksi.php';                   
                   
                    $query = "SELECT user.*, jawaban_tes3.*, soal3.* from user, jawaban_tes3, soal3 where soal3.id = jawaban_tes3.id_soal and user.id = $id_user";
                    $hasil  = mysqli_query($connect, $query);

                      
                    $nomor = 1;
                    while($row = mysqli_fetch_array($hasil)){

                    $jawaban1       = $row['jawaban1'];
                    $jawaban2       = $row['jawaban2'];
                    $kunci_jawaban1 = $row['kunci_jawaban1'];
                    $kunci_jawaban2 = $row['kunci_jawaban2'];


                      if ($jawaban1 == $kunci_jawaban1 and $jawaban2 == $kunci_jawaban2) {
                          $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';
                      }
                      else {
                            $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                      }
                      
                   
                    
                    ?>
                    <tr>
                      <td class="text-center"><?= $nomor++; ?></td>
                      <td><?= $row['jawaban1']; ?></td>
                      <td><?= $row['jawaban2']; ?></td>
                      <td><?= $row['kunci_jawaban1']; ?></td>
                      <td><?= $row['kunci_jawaban2']; ?></td>
                      <td class="text-center"><?= $ket; ?></td>
                    </tr>

                    <?php 
                      } 
                    ?>

                    </tbody>
                  </table>
                   
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