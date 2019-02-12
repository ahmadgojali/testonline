<?php
 include "../config/koneksi.php";

 $fileName = "DataJenis_(".date('d-m-Y').").xls";
 header("Content-Disposition: attachment; filename='$fileName'");
 header("Content-Type: application/vnd.ms-excel");
 ?>
 <table border="1px">
 	<tr>
 		<th>No</th>
    <th>Kode Jenis</th>
    <th>Jenis Penyakit</th>
 	</tr>
 	<?php
	    include '../config/koneksi.php';                     
	    $query  = "SELECT * FROM tb_jenispenyakit";
	    $hasil  = mysqli_query($connect, $query);
	    $nomor = 1;
	    while($row = mysqli_fetch_array($hasil)){                     
	  ?>
	  <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row['kd_jenis']; ?></td> 
        <td><?php echo $row['jenis_penyakit']; ?></td>
      </tr>
      <?php
  		}
      ?>
 </table>