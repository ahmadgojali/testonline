<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

      <!-- Content Header (Page header) -->
   <!--  <section class="content-header">
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
    </section> -->

   <!-- Main content -->
    <section class="content">

            <!-- SELECT2 EXAMPLE -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <!-- <h3 class="box-title">Hasil Diagnosa</h3> -->
          <div>
            <a href="data-hasil.php" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp; Kembali&nbsp;</a>
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
                
                <!-- data pelamar -->
                <?php

                  include "../config/koneksi.php";

                  $id_user   = $_GET['id_user'];

                  $query = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user";

                   // $query = "SELECT user.*, jawaban_tes1.*, soal1.* from user, jawaban_tes1, soal1 where soal1.id = jawaban_tes1.id_soal and user.id = $id_user ";

                  // SELECT user.*, jawaban_tes1.*, soal1.* from user, jawaban_tes1, soal1 where user.id = jawaban_tes1.id_user and soal1.id = jawaban_tes1.id_soal and jawaban_tes1.id_user = 1

                  $hasil = mysqli_query($connect, $query);
                  $data  = mysqli_fetch_array($hasil);     

                ?>

                <div class="box-body">
                  <!-- <div class="text-center "><b>Hasil Tes 1 Matematika Dasar</b></div><hr> -->
                  <div class="col-md-12 col-md-offset-0">
                  <div class=""><b><i>Data Pelamar</i></b></div><hr>
                  <table class="">                    
                    
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
                        $query2 = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user and jawaban_tes1.jawaban = soal1.kunci_jawaban";

                      // $query2 = "SELECT user.*, jawaban_tes1.*, soal1.* from user, jawaban_tes1, soal1 where soal1.id = jawaban_tes1.id_soal and jawaban_tes1.jawaban = soal1.kunci_jawaban and user.id = $id_user ";
                      $hasil2  = mysqli_query($connect, $query2);

                      $jml_benar = mysqli_num_rows($hasil2);

                      // var_dump($jml_benar);
                   ?>
                  <!-- row-tabel1 dan tabel2 -->
                  <div class="row">
                    <!-- col-tabel-tes1 -->
                    <div class="col-md-6">
                      <div class="text-center">Tabel Jawaban Tes 1</i></b></div>
                       <div class="">
                          <table>
                         <!--  <tr>
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
                            <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                            <td>:</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar; ?></td>
                          </tr>
                        </table>
                       </div>
                        <!-- <div class="text-center ">Tabel Tes 1 Matematika Dasar</i></b></div> -->
                        <table id="" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th class=" " width="10"  >No</th>
                            <th   class="">Jawaban</th>
                            <th  class="">Kunci Jawaban</th>
                            <th  class="text-center " >Keterangan</th>                              
                            <!-- <th >Tanggal Tes</th>    -->
                            <!-- <th width="10%" >Pekerjaan</th> -->
                            <!-- <th width="10%" >Telepon</th> -->
                            <!-- <th width="15%" >Alamat</th> -->
                            <!-- <th class="align-middle text-center" width="20%" >Opsi</th> -->
                            
                          </tr>
                          </thead>
                          <tbody>
                            <!-- tabel cocokin jawaban -->
                          <?php 
                         $query = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user";
                          
                          // $query = "SELECT user.*, jawaban_tes1.*, soal1.* from user, jawaban_tes1, soal1 where soal1.id = jawaban_tes1.id_soal and user.id = $id_user";

                          $hasil  = mysqli_query($connect, $query);

                            
                          $nomor = 1;
                          while($row = mysqli_fetch_array($hasil)){

                          $jawaban       = $row['jawaban'];
                          $kunci_jawaban = $row['kunci_jawaban'];
                          // $total = 0;


                            if ($jawaban == $kunci_jawaban ) {
                                $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                                // $total = count($ket);
                                // var_dump($total);
                                // echo "$ket";
                            }
                            else {
                                  $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                            }
                            
                         
                          
                          ?>
                          <tr>
                            <td class="text-center"><?= $nomor++; ?></td>
                            <td><?= $row['jawaban']; ?></td>
                            <td><?= $row['kunci_jawaban']; ?></td>
                            <td class="text-center"><?= $ket; ?></td>
                            <!-- <td><?= $row['tanggal_tes']; ?></td> -->
                           <!--  <td><?= $row['pekerjaan']; ?></td> -->
                           <!--  <td><?= $row['no_telp']; ?></td> -->
                           <!--  <td><?= $row['alamat']; ?></td> -->
                            <!-- <td class="align-middle text-center"> -->
                            <!-- <a href="?page=edit_user&email=<?= $row['email']; ?>"
                               class="btn btn-info btn-sm">&nbsp;<i class="fa fa-lg  fa-edit"></i> Edit</a>   -->                            
                            <!-- <a href="?page=edit_user&email=<?= $row['email']; ?>"
                               class="btn btn-success btn-sm">&nbsp;<i class="fa fa-lg fa-edit"></i> Edit</a> -->
                            <!-- <a href="lihat-user.php?id_user=<?= $row['id_user']; ?>" -->
                               <!-- class="btn btn-primary btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a> -->
                            <!-- <a href="hapus-user.php?id_user=<?= $row['id_user']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" 
                               class="btn btn-danger btn-sm">&nbsp;<i class="fa fa-lg fa-trash-o"></i> Hapus</a> -->
                          </tr>
                          <?php 
                            } 
                          ?>
                          </tbody>
                         <!--  <tfoot>
                            <tr>
                            <th class="align-middle text-center" >No</th>
                            <th class="align-middle text-center" >Kode Kategori</th>
                            <th class="align-middle text-center" >Kategori</th>
                            <th class="align-middle text-center" >Opsi</th>
                            
                          </tr>
                          </tfoot> -->
                        </table>
                         
                       <!--  <button class="btn btn-default" type="submit" name="submit"><i class='fa fa-print'></i>&nbsp; Cetak</button> -->
                      </div>
                      <!-- col-tabel-tes1 -->

                      <!-- col-tabel-tes2 -->
                      <div class="col-md-6">
                        <div class="text-center">Tabel Jawaban Tes 2</i></b></div>
                         <div class="">
                            <table>
                           <!--  <tr>
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
                              <td>Jumlah Benar &nbsp;&nbsp;&nbsp;&nbsp; </td>
                              <td>:</td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp; <?= $jml_benar; ?></td>
                            </tr>
                          </table>
                         </div>
                        <!-- <div class="text-center ">Tabel Tes 1 Matematika Dasar</i></b></div> -->
                        <table id="" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th class=" " width="10"  >No</th>
                            <th   class="">Jawaban</th>
                            <th  class="">Kunci Jawaban</th>
                            <th  class="text-center " >Keterangan</th>                              
                            <!-- <th >Tanggal Tes</th>    -->
                            <!-- <th width="10%" >Pekerjaan</th> -->
                            <!-- <th width="10%" >Telepon</th> -->
                            <!-- <th width="15%" >Alamat</th> -->
                            <!-- <th class="align-middle text-center" width="20%" >Opsi</th> -->
                            
                          </tr>
                          </thead>
                          <tbody>
                            <!-- tabel cocokin jawaban -->
                          <?php 
                         $query = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user";
                          
                          // $query = "SELECT user.*, jawaban_tes1.*, soal1.* from user, jawaban_tes1, soal1 where soal1.id = jawaban_tes1.id_soal and user.id = $id_user";

                          $hasil  = mysqli_query($connect, $query);

                            
                          $nomor = 1;
                          while($row = mysqli_fetch_array($hasil)){

                          $jawaban       = $row['jawaban'];
                          $kunci_jawaban = $row['kunci_jawaban'];
                          // $total = 0;


                            if ($jawaban == $kunci_jawaban ) {
                                $ket = ' <font color="green" &nbsp;<i class="fa fa-lg  fa-check"></i></font>';

                                // $total = count($ket);
                                // var_dump($total);
                                // echo "$ket";
                            }
                            else {
                                  $ket = '<font color="red" &nbsp;<i class="fa fa-lg  fa-close"></i></font>';
                            }
                            
                         
                          
                          ?>
                          <tr>
                            <td class="text-center"><?= $nomor++; ?></td>
                            <td><?= $row['jawaban']; ?></td>
                            <td><?= $row['kunci_jawaban']; ?></td>
                            <td class="text-center"><?= $ket; ?></td>
                            <!-- <td><?= $row['tanggal_tes']; ?></td> -->
                           <!--  <td><?= $row['pekerjaan']; ?></td> -->
                           <!--  <td><?= $row['no_telp']; ?></td> -->
                           <!--  <td><?= $row['alamat']; ?></td> -->
                            <!-- <td class="align-middle text-center"> -->
                            <!-- <a href="?page=edit_user&email=<?= $row['email']; ?>"
                               class="btn btn-info btn-sm">&nbsp;<i class="fa fa-lg  fa-edit"></i> Edit</a>   -->                            
                            <!-- <a href="?page=edit_user&email=<?= $row['email']; ?>"
                               class="btn btn-success btn-sm">&nbsp;<i class="fa fa-lg fa-edit"></i> Edit</a> -->
                            <!-- <a href="lihat-user.php?id_user=<?= $row['id_user']; ?>" -->
                               <!-- class="btn btn-primary btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a> -->
                            <!-- <a href="hapus-user.php?id_user=<?= $row['id_user']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" 
                               class="btn btn-danger btn-sm">&nbsp;<i class="fa fa-lg fa-trash-o"></i> Hapus</a> -->
                          </tr>
                          <?php 
                            } 
                          ?>
                          </tbody>
                         <!--  <tfoot>
                            <tr>
                            <th class="align-middle text-center" >No</th>
                            <th class="align-middle text-center" >Kode Kategori</th>
                            <th class="align-middle text-center" >Kategori</th>
                            <th class="align-middle text-center" >Opsi</th>
                            
                          </tr>
                          </tfoot> -->
                        </table>
                         
                       <!--  <button class="btn btn-default" type="submit" name="submit"><i class='fa fa-print'></i>&nbsp; Cetak</button> -->
                      </div>
                      <!-- col-tabel-tes2 -->
                      </div>
                      <!-- row-tabel1 dan tabel2 -->
                    

                    </div>
                  </div>


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