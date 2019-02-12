<?php
 include "../config/koneksi.php";

 $fileName = "HasilDiagnosa_(".date('d-m-Y').").xls";
 header("Content-Disposition: attachment; filename='$fileName'");
 header("Content-Type: application/vnd.ms-excel");
 ?>
 <table border="1px">
 	<tr>
 		<th>No</th>
    <th>Tanggal Diagnosa</th>
    <th>Kode Penyakit</th>
    <th>No Pendaftaran Pasien</th>
 	</tr>
 	<?php
	    include '../config/koneksi.php';                     
	    $query  = "SELECT * FROM hasil_diagnosis ORDER BY tanggal DESC";
	    $hasil  = mysqli_query($connect, $query);
	    $nomor = 1;
	    while($row = mysqli_fetch_array($hasil)){                     
	  ?>
	  <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['kd_penyakit']; ?></td>
        <td><?php echo $row['no_daftar']; ?></td> 
        
      </tr>
      <?php
  		}
      ?>
 </table>