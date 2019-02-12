<?php
    include "../config/koneksi.php";

    $kd_jenis = $_GET['kd_jenis'];

    $query = ("SELECT * FROM tb_jenispenyakit WHERE kd_jenis='$kd_jenis'");
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql);

        $query2 = ("DELETE FROM tb_jenispenyakit WHERE kd_jenis='$kd_jenis'");
        $sql2 = mysqli_query($connect, $query2);

            if($sql2){

                header('location:index.php?page=jenis_penyakit');
            }

            else {

                echo "<script language='javascript'>window.alert('Maaf, Data gagal dihapus '), window.location = 'index.php?page=jenis_penyakit';</script>";
            }
?>
