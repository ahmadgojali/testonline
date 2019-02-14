<?php
session_start();
include '../config/koneksi.php';
  if(isset($_SESSION['user'])){
    $session = $_SESSION['user'];
    $query   = mysqli_query($connect, "SELECT * FROM user WHERE id ='$session'") or die (mysql_error());
    $data    = mysqli_fetch_array($query);
  }
  
  else{
    header("location:../index.php");
  }

    
    $query = ("SELECT * from soal1");

    $hasil    = mysqli_query($connect, $query);       
    $jml_soal = mysqli_num_rows($hasil);

    $kd_soal = $_POST["id"];
    $pilihan = @$_POST["jawaban"];

    if(isset($_SESSION['user'])){
      $session = $_SESSION['user'];
      $query   = mysqli_query($connect, "SELECT * FROM jawaban_tes1 WHERE id_user ='$session'") or die (mysql_error());
      $data    = mysqli_fetch_array($query);
      
      if ($data['id_user'] == $session){
         echo "<script language='javascript'>window.alert('Maaf, Anda sudah mengerjakan tes ini sebelumnya.'), window.location = 'mulaisoal2.php';</script>";
      }

      else {

        for ($i = 1; $i <= $jml_soal; $i++)  {
         
         @$jawaban = $pilihan[$i];

        
          $query   = ("INSERT INTO jawaban_tes1 (id_user, id_soal, jawaban) VALUES ($session, $i, '$jawaban')");

          $hasil = mysqli_query($connect, $query);

        }

          header("location:mulaisoal2.php");
      }
    }



    var_dump($kd_soal);
    var_dump($pilihan);


   //  $query = ("SELECT * from soal2");

    // $hasil = mysqli_query($connect, $query);       
    // $cek   = mysqli_num_rows($hasil);
        
    // $jml_soal = $cek;
    // $score    = 0;
    // $benar    = 0;
    // $salah    = 0;
    // $kosong   = 0;
      
   //    for ($i = 0; $i < $jml_soal; $i++){
   //        //id nomor soal
   //        $nomor = $kd_soal[$i];
          
   //        //jika user tidak memilih jawaban
   //        if (empty($pilihan[$nomor])){
   //            $kosong++;

   //        }else{
   //            //jawaban dari user
   //            $jawaban = $pilihan[$nomor];
              
   //            //cocokan jawaban user dengan jawaban di database
   //            $query = ("SELECT * from soal2 where id ='$nomor'and jawaban ='$jawaban'");
   //            $hasil = mysqli_query($connect, $query);
              
   //            $cek = mysqli_num_rows($hasil);
              
   //            if($cek){

   //                //jika jawaban cocok (benar)
   //                $benar++;

   //            }else{

   //                //jika salah
   //                $salah++;
   //            }
              
   //        } 
         
   //        $score = round(100/$jml_soal * $benar);
   //        $nilai = $score;
   //    }

// var_dump('nilai', $nilai);
// var_dump('benar', $benar);
// var_dump('salah', $salah);
// var_dump('jumlah', $jml_soal);
// var_dump('tidak dijawab', $kosong);

   //  if(isset($_SESSION['user'])){
    //   $session = $_SESSION['user'];
    //   $query   = mysqli_query($connect, "SELECT * FROM jawaban_tes1 WHERE id_user ='$session'") or die (mysql_error());
    //   $data    = mysqli_fetch_array($query);
      
    //  if ($data['id_user'] == $session){
    //    $query = ("UPDATE jawaban_tes1 SET nilai='".$nilai."' WHERE id_user='".$session."'");
    //    $hasil = mysqli_query($connect, $query);

        

    //    // header("location:mulaisoal2.php");
    //    // var_dump($hasil);
    //  }

    //  else {
    //    $query = ("INSERT INTO jawaban_tes1 (id_user, nilai) VALUES ($session, $nilai)");
    //    $hasil = mysqli_query($connect, $query);


    //    // header("location:mulaisoal2.php");
    //    // var_dump($hasil);
    //  }
    // }

  ?>