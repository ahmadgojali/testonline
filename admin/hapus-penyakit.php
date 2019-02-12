<?php
    include "../config/koneksi.php";

    $kd_penyakit = $_GET['kd_penyakit'];

    $query = ("SELECT * FROM tb_penyakit WHERE kd_penyakit='$kd_penyakit'");
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql);

        $query2 = ("DELETE FROM tb_penyakit WHERE kd_penyakit='$kd_penyakit'");
        $sql2 = mysqli_query($connect, $query2);

            if($sql2){

                header('location:index.php?page=penyakit');
            }

            else {

                echo "<script language='javascript'>window.alert('Maaf, Data gagal dihapus '), window.location = 'index.php?page=penyakit';</script>";
            }
?>
