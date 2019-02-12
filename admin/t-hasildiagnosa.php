<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Hasil Diagnosa Penyakit Pada Sapi
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tabel</a></li>
        <li class="active">Hasil Diagnosa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Hasil Diagnosa</h3>
                <div class="tombol-kanan">
                  <a href="ekspor-hasil.php" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg fa-file-excel-o"></i>&nbsp; Eksport&nbsp;</a>
                  <!-- <a href="?page=tambah_penyakit" class="btn btn-primary btn-sm">&nbsp;<i class="fa fa-lg fa-plus"></i> Tambah Penyakit</a> -->
                </div>
            </div>
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th  width="5%" >No</th>
                  <th  width="20%" >Tanggal Diagnosa</th>
                  <th  width="20%" >Nama Pasien</th>
                  
                 <!--  <th  width="15%" >Pekerjaan</th> -->                  
                  <th  width="35%" >Penyakit Yang Mungkin Menyerang</th>
                  <th class="align-middle text-center" width="20%" >Opsi</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php                    
                // $query  = "SELECT * FROM hasil_diagnosa";
                $query = "SELECT tb_penyakit.*, tb_pasien.*, hasil_diagnosa.* 
                          FROM tb_penyakit, tb_pasien, hasil_diagnosa 
                          WHERE hasil_diagnosa.kd_penyakit=tb_penyakit.kd_penyakit 
                          AND hasil_diagnosa.no_daftar=tb_pasien.no_daftar
                          ORDER BY hasil_diagnosa.tanggal DESC";
                $hasil  = mysqli_query($connect, $query);
                $nomor = 1;
                while($row = mysqli_fetch_array($hasil)){                     
                ?>
                <tr>
                  <td class="align-middle text-center"><?php echo $nomor++; ?></td>
                   <?php $tanggal = $row['tanggal']; ?>
                  <td><?php echo date("d M y / G:i:s", strtotime($tanggal))  ?></td>
                  <td><?php echo $row['nama']; ?></td>
                 
                  <!-- <td><?php echo $row['pekerjaan']; ?></td> -->
                  <td><?php echo $row['nama_penyakit']; ?></td>
                  <td class="align-middle text-center">
                  <a href="?page=detail_pasien&id=<?php echo $row['id']; ?>"
                     class="btn btn-info btn-sm">&nbsp;<i class="fa fa-lg  fa-eye"></i> Lihat</a>                              
                  <!-- <a href="?page=edit_pasien&id=<?php echo $row['id']; ?>"
                     class="btn btn-success btn-sm">&nbsp;<i class="fa fa-lg fa-edit"></i> Edit</a> -->
                  <a href="hapus-pasien.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" 
                     class="btn btn-danger btn-sm">&nbsp;<i class="fa fa-lg fa-trash-o"></i> Hapus</a>
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