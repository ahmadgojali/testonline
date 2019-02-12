<?php 
include '../config/koneksi.php';

$id 	= $_POST['id'];
$foto 	= $_FILES['foto']['name'];
$tmp 	= $_FILES['foto']['tmp_name'];

$path = "../assets/images/pakar/".$foto;


if(move_uploaded_file($tmp, $path)){ 
	$query = "SELECT * FROM tb_admin WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); 
		if(is_file("../assets/images/pakar/".$data['foto'])) // Jika foto ada
			unlink("../assets/images/pakar/".$data['foto']);

		$query = "UPDATE tb_admin SET foto='".$foto."' WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ 
			// Jika Sukses, Lakukan :
			 echo "<script language='javascript'>window.alert('Upload Complete, Foto berhasil di Upload.'), window.location = 'index.php?page=profile';</script>"; 
		}
		else{
			// Jika Gagal, Lakukan :
			echo "<script language='javascript'>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'), window.location = 'index.php?page=profile';</script>";
		}
	}
	else{
		// Jika gambar gagal diupload, Lakukan :
		echo "<script language='javascript'>window.alert('Maaf, Foto gagal untuk diupload.'), window.location = 'index.php?page=profile';</script>";
	}
?>
