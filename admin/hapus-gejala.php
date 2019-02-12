<?php
    include "../config/koneksi.php";

    $kd_gejala = $_GET['kd_gejala'];

    $query = ("SELECT * FROM tb_gejala WHERE kd_gejala='$kd_gejala'");
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql);

        $query2 = ("DELETE FROM tb_gejala WHERE kd_gejala='$kd_gejala'");
        $sql2 = mysqli_query($connect, $query2);

            if($sql2){

                header('location:index.php?page=gejala');
            }

            else {

                echo "<script language='javascript'>window.alert('Maaf, Data gagal dihapus '), window.location = 'index.php?page=gejala';</script>";
            }
?>
