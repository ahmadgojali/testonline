<?php
    include "../config/koneksi.php";

    $id = $_GET['id'];

    $query = ("SELECT * FROM user WHERE id='$id'");
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql);

        $query2 = ("DELETE FROM user WHERE id='$id'");
        $sql2 = mysqli_query($connect, $query2);

            if($sql2){

                header('location:data-user.php');
            }

            else {

                echo "<script language='javascript'>window.alert('Maaf, Data gagal dihapus '), window.location = 'data-user.php';</script>";
            }
?>
