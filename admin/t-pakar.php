<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pakar
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tabel</a></li>
        <li class="active">Data Pakar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title ">Data Pakar</h3>
                <div class="tombol-kanan">
                  <a href="?page=tambah_pakar" class="btn btn-default btn-sm"><i class="fa fa-lg fa-plus"></i> &nbsp;Tambah&nbsp;</a>
                  <a href="ekspor-pakar.php" class="btn btn-default btn-sm"><i class="fa fa-lg fa-file-excel-o"></i>&nbsp; Eksport&nbsp;</a>
                  
                </div>
            </div>
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th  width="5%" >No</th>
                  <th  width="25%" >Nama Lengkap</th>
                  <th width="20%" >Jenis Kelamin</th>   
                  <th  width="30%" >Email</th>               
                  <!-- <th width="10%" >Pekerjaan</th> -->
                  <!-- <th width="10%" >Telepon</th> -->
                  <!-- <th width="15%" >Alamat</th> -->
                  <th class="align-middle text-center" width="20%" >Opsi</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php                    
                // $query  = "SELECT * FROM hasil_diagnosis";
                $query = "SELECT * FROM tb_admin ORDER BY nama ASC";
                $hasil  = mysqli_query($connect, $query);
                $nomor = 1;
                while($row = mysqli_fetch_array($hasil)){                     
                ?>
                <tr>
                  <td class="align-middle text-center"><?php echo $nomor++; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jenis_kelamin']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                 <!--  <td><?php echo $row['pekerjaan']; ?></td> -->
                 <!--  <td><?php echo $row['no_telp']; ?></td> -->
                 <!--  <td><?php echo $row['alamat']; ?></td> -->
                  <td class="align-middle text-center">
                  <!-- <a href="?page=edit_user&email=<?php echo $row['email']; ?>"
                     class="btn btn-info btn-sm">&nbsp;<i class="fa fa-lg  fa-edit"></i> Edit</a>   -->                            
                  <!-- <a href="?page=edit_user&email=<?php echo $row['email']; ?>"
                     class="btn btn-success btn-sm">&nbsp;<i class="fa fa-lg fa-edit"></i> Edit</a> -->
                  <a href="?page=detail_pakar&id=<?php echo $row['id']; ?>"
                     class="btn btn-info btn-sm">&nbsp;<i class="fa fa-lg  fa-user-md"></i> &nbsp;Lihat</a>
                  <a href="hapus-pakar.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" 
                     class="btn btn-danger btn-sm">&nbsp;<i class="fa fa-lg fa-trash-o"></i> &nbsp;Hapus</a>
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
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->