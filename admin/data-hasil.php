<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>

<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <!-- Content Header (Page header) -->
   <!--  <section class="content-header">
      <h1>
        Data Hasil
        <small>ARNA</small></br>
        <small>Arwana Citramulia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tabel</a></li>
        <li class="active">Data Hasil</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">  
        
        <!-- START CUSTOM TABS -->
        <!-- <h2 class="page-header">Arwana Citramulia</h2> -->

        <div class="row">
          <div class="col-md-12">
            <!-- Custom Tabs (Pulled to the right) -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right lead">
                <li><a href="#nilai5" data-toggle="tab">Tes 5</a></li>
                <li><a href="#nilai4" data-toggle="tab">Tes 4</a></li>
                <li><a href="#nilai3" data-toggle="tab">Tes 3</a></li>
                <li><a href="#nilai2" data-toggle="tab">Tes 2</a></li>
                <li class="active"><a href="#nilai1" data-toggle="tab">Tes 1</a></li>
                
                <li class="pull-left header"><i class="fa fa-th"></i> Hasil Ujian Pelamar</li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane " id="nilai5">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title ">Data Hasil Tes 5 Bahasa Inggris</h3>
                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="search_tes5" id="search_tes5" class="form-control pull-right" placeholder="Search">

                          <div class="input-group-btn">
                            <button type="submit" name="tes5" id="tes5" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                        <div class="tombol-kanan">
                          <!-- <a href="tambah-user.php" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg  fa-user"></i>&nbsp; Tambah User&nbsp;</a> -->
                          <!-- <a href="?page=tambah_penyakit" class="btn btn-danger btn-sm">&nbsp;<i class="fa fa-lg fa-plus"></i> Tambah Penyakit</a> -->
                        </div>
                    </div>
                   
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th   >No</th>
                          <th   >Nama</th>
                          <th   >Umur</th>
                          <th   >Email</th>                              
                          <th >Tanggal Tes</th>   
                          <!-- <th width="10%" >Pekerjaan</th> -->
                          <!-- <th width="10%" >Telepon</th> -->
                          <!-- <th width="15%" >Alamat</th> -->
                          <th class="align-middle text-center" width="20%" >Opsi</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        include '../config/koneksi.php';                   
                        // $query  = "SELECT * FROM hasil_diagnosis";
                        $query = "SELECT user.*, jawaban_tes5.*, soal5.* from user, jawaban_tes5, soal5 where user.id = jawaban_tes5.id_user and soal5.id = jawaban_tes5.id_soal group by jawaban_tes5.id_user";
                        $hasil  = mysqli_query($connect, $query);
                        $nomor = 1;
                        while($row = mysqli_fetch_array($hasil)){                     
                        ?>
                        <tr>
                          <td class="align-middle text-center"><?= $nomor++; ?></td>
                          <td><?= $row['nama']; ?></td>
                          <td><?= $row['umur']; ?></td>
                          <td><?= $row['email']; ?></td>
                          <td><?= $row['tanggal_tes']; ?></td>
                         <!--  <td><?= $row['pekerjaan']; ?></td> -->
                         <!--  <td><?= $row['no_telp']; ?></td> -->
                         <!--  <td><?= $row['alamat']; ?></td> -->
                          <td class="align-middle text-center">
                          <!-- <a href="?page=edit_user&email=<?= $row['email']; ?>"
                             class="btn btn-info btn-sm">&nbsp;<i class="fa fa-lg  fa-edit"></i> Edit</a>   -->                            
                          <!-- <a href="?page=edit_user&email=<?= $row['email']; ?>"
                             class="btn btn-success btn-sm">&nbsp;<i class="fa fa-lg fa-edit"></i> Edit</a> -->
                          <a href="lihat-hasil.php?page=hasil-tes-5&id_user=<?= $row['id_user']; ?>"
                             class="btn btn-danger btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a>
                          <!-- <a href="hapus-user.php?id_user=<?= $row['id_user']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" 
                             class="btn btn-danger btn-sm">&nbsp;<i class="fa fa-lg fa-trash-o"></i> Hapus</a> 
                           </td> -->
                        </tr>
                        <?php } ?>
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
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="nilai4">
                  <div class="box box-warning">
                    <div class="box-header with-border">
                      <h3 class="box-title ">Data Hasil Tes 4 Silogisme</h3>
                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="search_tes4" id="search_tes4" class="form-control pull-right" placeholder="Search">

                          <div class="input-group-btn">
                            <button type="submit" name="tes4" id="tes4" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                        <div class="tombol-kanan">
          
                        </div>
                    </div>
                   
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th   >No</th>
                          <th   >Nama</th>
                          <th   >Umur</th>
                          <th   >Email</th>                              
                          <th >Tanggal Tes</th>   
                         
                          <th class="align-middle text-center" width="20%" >Opsi</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        include '../config/koneksi.php';                   
                      
                        $query = "SELECT user.*, jawaban_tes4.*, soal4.* from user, jawaban_tes4, soal4 where user.id = jawaban_tes4.id_user and soal4.id = jawaban_tes4.id_soal group by jawaban_tes4.id_user";
                        $hasil  = mysqli_query($connect, $query);
                        $nomor = 1;
                        while($row = mysqli_fetch_array($hasil)){                     
                        ?>
                        <tr>
                          <td class="align-middle text-center"><?= $nomor++; ?></td>
                          <td><?= $row['nama']; ?></td>
                          <td><?= $row['umur']; ?></td>
                          <td><?= $row['email']; ?></td>
                          <td><?= $row['tanggal_tes']; ?></td>
                      
                          <td class="align-middle text-center">
                         
                            <a href="lihat-hasil.php?page=hasil-tes-4&id_user=<?= $row['id_user']; ?>"
                             class="btn btn-warning btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a>
                          </td>
                          
                        </tr>
                        <?php } ?>
                        </tbody>
                     
                      </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="nilai3">
                   <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title ">Data Hasil Tes 3 Deret Angka</h3>
                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="search_tes3" id="search_tes3" class="form-control pull-right" placeholder="Search">

                          <div class="input-group-btn">
                            <button type="submit" name="tes3" id="tes3" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                        <div class="tombol-kanan">
          
                        </div>
                    </div>
                   
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th   >No</th>
                          <th   >Nama</th>
                          <th   >Umur</th>
                          <th   >Email</th>                              
                          <th >Tanggal Tes</th>   
                         
                          <th class="align-middle text-center" width="20%" >Opsi</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        include '../config/koneksi.php';                   
                      
                        $query = "SELECT user.*, jawaban_tes3.*, soal3.* from user, jawaban_tes3, soal3 where user.id = jawaban_tes3.id_user and soal3.id = jawaban_tes3.id_soal group by jawaban_tes3.id_user";
                        $hasil  = mysqli_query($connect, $query);
                        $nomor = 1;
                        while($row = mysqli_fetch_array($hasil)){                     
                        ?>
                        <tr>
                          <td class="align-middle text-center"><?= $nomor++; ?></td>
                          <td><?= $row['nama']; ?></td>
                          <td><?= $row['umur']; ?></td>
                          <td><?= $row['email']; ?></td>
                          <td><?= $row['tanggal_tes']; ?></td>
                      
                          <td class="align-middle text-center">
                         
                            <a href="lihat-hasil.php?page=hasil-tes-3&id_user=<?= $row['id_user']; ?>"
                             class="btn btn-success btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a>
                          </td>
                          
                        </tr>
                        <?php } ?>
                        </tbody>
                     
                      </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="nilai2">
                   <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title ">Data Hasil Tes 2 Hubungan Kata</h3>
                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="search_tes2" id="search_tes2" class="form-control pull-right" placeholder="Search">

                          <div class="input-group-btn">
                            <button type="submit" name="tes2" id="tes2" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                        <div class="tombol-kanan">
          
                        </div>
                    </div>
                   
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th   >No</th>
                          <th   >Nama</th>
                          <th   >Umur</th>
                          <th   >Email</th>                              
                          <th >Tanggal Tes</th>   
                         
                          <th class="align-middle text-center" width="20%" >Opsi</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        include '../config/koneksi.php';                   
                      
                        $query = "SELECT user.*, jawaban_tes2.*, soal2.* from user, jawaban_tes2, soal2 where user.id = jawaban_tes2.id_user and soal2.id = jawaban_tes2.id_soal group by jawaban_tes2.id_user";
                        $hasil  = mysqli_query($connect, $query);
                        $nomor = 1;
                        while($row = mysqli_fetch_array($hasil)){                     
                        ?>
                        <tr>
                          <td class="align-middle text-center"><?= $nomor++; ?></td>
                          <td><?= $row['nama']; ?></td>
                          <td><?= $row['umur']; ?></td>
                          <td><?= $row['email']; ?></td>
                          <td><?= $row['tanggal_tes']; ?></td>
                      
                          <td class="align-middle text-center">
                         
                            <a href="lihat-hasil.php?page=hasil-tes-2&id_user=<?= $row['id_user']; ?>"
                             class="btn btn-info btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a>
                          </td>
                          
                        </tr>
                        <?php } ?>
                        </tbody>
                     
                      </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane active" id="nilai1">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title ">Data Hasil Tes 1 Matematika Dasar</h3>
                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="search_tes1" id="search_tes1" class="form-control pull-right" placeholder="Search">

                          <div class="input-group-btn">
                            <button type="submit" name="tes1" id="tes1" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                        <div class="tombol-kanan">
          
                        </div>
                    </div>
                   
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th   >No</th>
                          <th   >Nama</th>
                          <th   >Umur</th>
                          <th   >Email</th>                              
                          <th >Tanggal Tes</th>   
                         
                          <th class="align-middle text-center" width="20%" >Opsi</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        include '../config/koneksi.php';                   
                      
                        $query = "SELECT user.*, jawaban_tes1.*, soal1.* from user, jawaban_tes1, soal1 where user.id = jawaban_tes1.id_user and soal1.id = jawaban_tes1.id_soal group by jawaban_tes1.id_user";
                        $hasil  = mysqli_query($connect, $query);
                        $nomor = 1;
                        while($row = mysqli_fetch_array($hasil)){                     
                        ?>
                        <tr>
                          <td class="align-middle text-center"><?= $nomor++; ?></td>
                          <td><?= $row['nama']; ?></td>
                          <td><?= $row['umur']; ?></td>
                          <td><?= $row['email']; ?></td>
                          <td><?= $row['tanggal_tes']; ?></td>
                      
                          <td class="align-middle text-center">
                         
                            <a href="lihat-hasil.php?page=hasil-tes-1&id_user=<?= $row['id_user']; ?>"
                             class="btn btn-primary btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a>
                          </td>
                          
                        </tr>
                        <?php } ?>
                        </tbody>
                     
                      </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->


      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

<?php include 'templates/footer.php'; ?>