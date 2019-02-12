<?php
 include "../config/koneksi.php";

 $fileName = "DataPenyakit_(".date('d-m-Y').").xls";
 header("Content-Disposition: attachment; filename='$fileName'");
 header("Content-Type: application/vnd.ms-excel");
 ?>
 <table border="1px">
 	<tr>
 		<th>No</th>
    <th>Kode Penyakit</th>
    <th>Nama Penyakit</th>
    <th>Keterangan</th>
    <th>Pengobatan</th>
    <th>Pencegahan</th>
 	</tr>
 	<?php
	    include '../config/koneksi.php';                     
	    $query  = "SELECT * FROM tb_penyakit";
	    $hasil  = mysqli_query($connect, $query);
	    $nomor = 1;
	    while($row = mysqli_fetch_array($hasil)){                     
	  ?>
	  <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row['kd_penyakit']; ?></td> 
        <td><?php echo $row['nama_penyakit']; ?></td>
        <td><?php echo $row['ket_penyakit']; ?></td>
        <td><?php echo $row['pengobatan']; ?></td>
        <td><?php echo $row['pencegahan']; ?></td>
      </tr>
      <?php
  		}
      ?>
 </table>