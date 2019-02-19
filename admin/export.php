<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data Hasil Tes.xls");
?>

<!-- // Tambahkan table -->
<table id="example1" class="table table-bordered table-striped "  border="1">
	<thead>
	<tr>
	  <th rowspan="2" class="text-center">No</th>
	  <th rowspan="2" class="text-center">Nama</th>
	  <th colspan="5" class="text-center">Sub Tes</th>
	  <th rowspan="2" class="text-center">Total</th>
	  	<tr>
            <td><center><b>1</b></center></td>
            <td><center><b>2</b></center></td>
            <td><center><b>3</b></center></td>
            <td><center><b>4</b></center></td>
            <td><center><b>5</b></center></td>
        </tr>                             	  
	</tr>
	</thead>
	<tbody>

	<?php 
	include '../config/koneksi.php';

	 $id_user   = $_GET['id_user'];


	//jumlah benar1
	 $tes1 = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = 		user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user and jawaban_tes1.jawaban = soal1.kunci_jawaban";
	  $hasil  = mysqli_query($connect, $tes1);
	  $jml_benar1 = mysqli_num_rows($hasil);

	  //jumlah benar2
	  $tes2 = "SELECT user.*, jawaban_tes2.*, soal2.* FROM `jawaban_tes2`, user, soal2 where jawaban_tes2.id_user = 		user.id and jawaban_tes2.id_soal = soal2.id and jawaban_tes2.id_user = $id_user and jawaban_tes2.jawaban = soal2.kunci_jawaban";
	  $hasil  = mysqli_query($connect, $tes2);
	  $jml_benar2 = mysqli_num_rows($hasil);

	  //jumlah benar3
	  $tes3 = "SELECT user.*, jawaban_tes3.*, soal3.* FROM jawaban_tes3, user, soal3 where jawaban_tes3.id_user = user.id and jawaban_tes3.id_soal = soal3.id and jawaban_tes3.id_user = $id_user and jawaban_tes3.jawaban1 = soal3.kunci_jawaban1 and jawaban_tes3.jawaban2 = soal3.kunci_jawaban2";
	  $hasil  = mysqli_query($connect, $tes3);
	  $jml_benar3 = mysqli_num_rows($hasil);

	  //jumlah benar4
	  $tes4 = "SELECT user.*, jawaban_tes4.*, soal4.* FROM `jawaban_tes4`, user, soal4 where jawaban_tes4.id_user = 		user.id and jawaban_tes4.id_soal = soal4.id and jawaban_tes4.id_user = $id_user and jawaban_tes4.jawaban = soal4.kunci_jawaban";
	  $hasil  = mysqli_query($connect, $tes4);
	  $jml_benar4 = mysqli_num_rows($hasil);

	  //jumlah benar5
	  $tes5 = "SELECT user.*, jawaban_tes5.*, soal5.* FROM `jawaban_tes5`, user, soal5 where jawaban_tes5.id_user = 		user.id and jawaban_tes5.id_soal = soal5.id and jawaban_tes5.id_user = $id_user and jawaban_tes5.jawaban = soal5.kunci_jawaban";
	  $hasil  = mysqli_query($connect, $tes5);
	  $jml_benar5 = mysqli_num_rows($hasil);

	  //hitung total benar dari tes1 - tes5
	  $total = 0;
	  $total = ($jml_benar1 + $jml_benar2 + $jml_benar3 + $jml_benar4 + $jml_benar5);

	  //tampilkan nama user berdasarkan id
	  $query = "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = $id_user group by jawaban_tes1.id_user";                   

	$hasil = mysqli_query($connect, $query);
	$nomor = 1;
	while($row = mysqli_fetch_array($hasil)){                     
	?>
	<tr>
	  <td><center> <?= $nomor++; ?> </center></td>
	  <td><center> <?= $row['nama']; ?> </center></td>
	  <td><center> <?= $jml_benar1; ?> </center></td>
	  <td><center> <?= $jml_benar2; ?> </center></td> 
	  <td><center> <?= $jml_benar3; ?> </center></td> 
	  <td><center> <?= $jml_benar4; ?> </center></td> 
	  <td><center> <?= $jml_benar5; ?> </center></td> 
	  <td><center> <?= $total; ?> </center></td> 
	</tr>
	<?php } ?>
	</tbody>

</table>
