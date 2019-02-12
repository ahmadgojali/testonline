<?php
 include "../config/koneksi.php";

 $fileName = "DataGejala_(".date('d-m-Y').").xls";
 header("Content-Disposition: attachment; filename='$fileName'");
 header("Content-Type: application/vnd.ms-excel");
 ?>
 <table border="1px">
 	<tr>
 		<th>No</th>
    <th>Kode Gejala</th>
    <th>Nama Gejala</th>
 	</tr>
 	<?php
	    include '../config/koneksi.php';                     
	    $query  = "SELECT * FROM tb_gejala";
	    $hasil  = mysqli_query($connect, $query);
	    $nomor = 1;
	    while($row = mysqli_fetch_array($hasil)){                     
	  ?>
	  <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row['kd_gejala']; ?></td> 
        <td><?php echo $row['nama_gejala']; ?></td>
      </tr>
      <?php
  		}
      ?>
 </table>