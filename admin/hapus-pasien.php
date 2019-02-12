<?php
    include "../config/koneksi.php";

    $id = $_GET['id'];

    $query = ("SELECT * FROM hasil_diagnosis WHERE id='$id'");
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql);

        $query2 = ("DELETE FROM hasil_diagnosis WHERE id='$id'");
        $sql2 = mysqli_query($connect, $query2);

            if($sql2){

                header('location:index.php?page=hasil_diagnosa');
            }

            else {

                echo "<script language='javascript'>window.alert('Maaf, Data gagal dihapus '), window.location = 'index.php?page=hasil_diagnosa';</script>";
            }
?>
