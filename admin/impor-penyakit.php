<style type="text/css"> .tombol-kanan {margin-top: 1px; margin-right: 5px; float: right;}</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Penyakit Pada Sapi
        <small>SIPAKMI</small></br>
        <small>Balai Besar Penelitian Veteriner</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Tabel</a></li>
        <li class="active">Penyakit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Import Data Excel</h3>
                <div class="tombol-kanan">
                  <a href="?page=tambah_penyakit" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg fa-plus"></i>&nbsp; Tambah&nbsp;</a>
                  <a href="?page=impor-penyakit" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg fa-folder-open"></i>&nbsp; Import&nbsp;</a>
                  <a href="ekspor-penyakit.php" class="btn btn-default btn-sm">&nbsp;<i class="fa fa-lg fa-file-excel-o"></i>&nbsp; Eksport&nbsp;</a>
                </div>
            </div>
           
            <!-- /.box-header -->
            <div class="box-body">
            	<div class="alert alert-success alert-dismissable">
            		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            		<h4>Pastikan Extensi File Excel yang digunakan Excel 2003 (.xls) untuk format excel anda bisa download <a href="Data_Penyakit.xls">di sini</a></h4>
            	</div>
              <!-- <h4>Import Data Excel</h4> -->
			<form name="myForm" id="myForm" onSubmit="return validateForm()" action="" enctype="multipart/form-data" method="POST">
				<div class="form-group">
                  <!-- <label for="impor">Pilih File Excel (.xls)</label> -->
                  <input type="file" class="form-control" id="filepegawaiall" name="filepegawaiall" required><br>

                  <p class="help-block">Nama File Harus Berextensi (.xls) <br>(Batas ukuran: 2,048KB)</p>
                </div>
				<button type="submit" name="submit" class="btn btn-success"><i class="fa  fa-save"></i> &nbsp;Import</button>
			</form>
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

    <script type="text/javascript">
//    validasi form (hanya file .xls yang diijinkan)
    function validateForm()
    {
        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }
 
        if(!hasExtension('filepegawaiall', ['.xls'])){
            alert("Hanya file XLS (Excel 2003-2007) yang di ijinkan.");
            return false;
        }
    }
	</script>

<?php

include "../config/koneksi.php";
//memanggil file excel_reader
require "excel_reader.php";
 
//jika tombol import ditekan
if(isset($_POST['submit'])){
 
    // $target = basename($_FILES['filepegawaiall']['name']) ;
    // move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);
    
    // membaca file excel yang diupload
	$data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['tmp_name']);
    
//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    
//    jika kosongkan data dicentang jalankan kode berikut
    // $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;
    // if($drop == 1){
//             kosongkan tabel pegawai
    //          $truncate ="TRUNCATE TABLE nilai";
    //          mysqli_query($connect, $truncate);
    // };
    
//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
    $kd_penyakit = $data->val($i, 1);
	 	$nama_penyakit = $data->val($i, 2);
    $ket_penyakit = $data->val($i, 3);
    $pengobatan = $data->val($i, 4);
    $pencegahan = $data->val($i, 5);

	 	$cari = mysqli_num_rows(mysqli_query($connect, "SELECT kd_penyakit FROM tb_penyakit WHERE kd_penyakit = '$kd_penyakit'"));

		if (empty($kd_penyakit)){
		  echo "<script language='javascript'>window.alert('Import Gagal, Kode Penyakit Tidak Boleh Kosong.'), window.location = '?page=impor-penyakit';</script>";
		 }
		 elseif ($cari > 0){
		  echo "<script language='javascript'>window.alert('Import Gagal, Kode Penyakit Ada Yang Sama.'), window.location = '?page=impor-penyakit';</script>";
		 }
		 else{
		  // setelah data dibaca, sisipkan ke dalam tabel tsukses
		  $hasil = mysqli_query($connect, "INSERT INTO tb_penyakit(kd_penyakit,nama_penyakit,ket_penyakit,pengobatan,pencegahan) 
        VALUES('$kd_penyakit','$nama_penyakit','$ket_penyakit','$pengobatan','$pencegahan')");
		 	 
		 }
    }
    
//    hapus file xls yang udah dibaca
    // unlink($_FILES['filepegawaiall']['name']);
echo "<script language='javascript'>window.alert('Import Complete, Data berhasil di tambah.'), window.location = '?page=penyakit';</script>";
}
 
?>
