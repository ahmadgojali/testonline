<?php
include '../config/koneksi.php';
?>
 
<table border="1">
  <tr>
    <th>No</th>
    <th>Jawaban</th>                         
    <th>Kunci Jawaban</th>                         
  </tr>
  <?php 
	$halaman = 10;
	$page    = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$mulai   = ($page>1) ? ($page * $halaman) - $halaman : 0;
	$result  = mysqli_query($connect, "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = 1");
	$total   = mysqli_num_rows($result);
	$pages   = ceil($total/$halaman);            
	$query   = mysqli_query($connect, "SELECT user.*, jawaban_tes1.*, soal1.* FROM `jawaban_tes1`, user, soal1 where jawaban_tes1.id_user = user.id and jawaban_tes1.id_soal = soal1.id and jawaban_tes1.id_user = 1 LIMIT $mulai, $halaman")or die(mysql_error);
	$no      = $mulai+1;
 
 
  while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>                  
      <td><?php echo $data['jawaban']; ?></td>              
      <td><?php echo $data['kunci_jawaban']; ?></td>              
                  
    </tr>
 
    <?php               
  } 
  ?>
  
 
</table>          
 
<div class="">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?>
 
</div>