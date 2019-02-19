<?php include 'templates/header.php'; ?>
<?php include 'templates/sidebar.php'; ?>

<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

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
              <!-- <ul class="nav nav-tabs pull-right lead">
                <li><a href="#nilai5" data-toggle="tab">Tes 5</a></li>
                <li><a href="#nilai4" data-toggle="tab">Tes 4</a></li>
                <li><a href="#nilai3" data-toggle="tab">Tes 3</a></li>
                <li><a href="#nilai2" data-toggle="tab">Tes 2</a></li>
                <li class="active"><a href="#nilai1" data-toggle="tab">Tes 1</a></li>
                
                <li class="pull-left header"><i class="fa fa-th"></i> Hasil Ujian Pelamar</li>
              </ul> -->

                <div class="tab-pane active" id="nilai1">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title ">Data Hasil Tes Peserta</h3>

                      <!-- search -->
                      <!-- <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="search_tes1" id="search_tes1" class="form-control pull-right" placeholder="Search">
                          button search
                          <div class="input-group-btn">
                            <button type="submit" name="tes1" id="tes1" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div> -->
                       <!--  <div class="tombol-kanan">
                            <a href="export.php" class="btn btn-default btn-sm ">&nbsp;<i class="fa fa-download"></i>&nbsp; Download&nbsp;</a>
                        </div> -->
                    </div>
                   
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
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
                      
                        // $query = "SELECT user.*, jawaban_tes1.*, soal1.* from user, jawaban_tes1, soal1 where user.id = jawaban_tes1.id_user and soal1.id = jawaban_tes1.id_soal group by jawaban_tes1.id_user";

                        $query = "SELECT user.*, jawaban_tes1.*, soal1.* FROM jawaban_tes1, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id group by jawaban_tes1.id_user";

                        $hasil = mysqli_query($connect, $query);
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
                         
                            <a href="lihat-hasil.php?id_user=<?= $row['id_user']; ?>"
                             class="btn btn-primary btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a>
                          </td>
                          
                        </tr>
                        <?php } ?>
                        </tbody>
                     
                      </table>
                    </div>
                    <!-- /.box-body -->
                    <!-- pagination -->
                    <!-- <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div> -->
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


      <!-- </div> -->
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

<?php include 'templates/footer.php'; ?>