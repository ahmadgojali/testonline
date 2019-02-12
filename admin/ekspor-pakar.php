<?php
 include "../config/koneksi.php";

 $fileName = "DataPakar_(".date('d-m-Y').").xls";
 header("Content-Disposition: attachment; filename='$fileName'");
 header("Content-Type: application/vnd.ms-excel");
 ?>
 <table border="1px">
 	<tr>
 	<th>No</th>
    <th>Nama Lengkap</th>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Status</th>
    <th>No Telepon</th>
    <th>Alamat</th>
    <th>Tanggal Gabung</th>
    <th>Foto</th>
 	</tr>
 	<?php
	    include '../config/koneksi.php';                     
	    $query  = "SELECT * FROM tb_admin ORDER BY nama ASC";
	    $hasil  = mysqli_query($connect, $query);
	    $nomor = 1;
	    while($row = mysqli_fetch_array($hasil)){                     
	  ?>
	  <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row['nama']; ?></td>      
        <td><?php echo $row['username']; ?></td>  
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['tempat_lahir']; ?></td>
        <td><?php echo $row['tanggal_lahir']; ?></td>
        <td><?php echo $row['jenis_kelamin']; ?></td>
        <td><?php echo $row['status']; ?></td>        
        <td><?php echo $row['no_telp']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['foto']; ?></td>
      </tr>
      <?php
  		}
      ?>
 </table>