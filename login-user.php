<?php 
    session_start();
    date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
    // echo $timestamp = date('d M Y - H:i:s');//Menampilkan Jam Sekarang
    
    require "config/koneksi.php";

    if (isset($_POST['login'])) {
    
      $username = $_POST['username'];
      $password = $_POST['password'];
      $hasil    = mysqli_query($connect, "SELECT * from user where username ='$username' and password ='$password' or email ='$username' and password ='$password'");
      $data     = mysqli_fetch_array($hasil);
      $session  = $data['id'];
      $row      = mysqli_num_rows($hasil);
      
      if( $row >  0) {

        $percobaan = mysqli_query($connect, "SELECT * FROM user where validasi = 0 and id = $data[id]");
        // $data2     = mysqli_fetch_array($hasil);
        $row2     = mysqli_num_rows($percobaan);

        if ($row2 > 0) {

        // $query = mysqli_query($connect, "UPDATE user SET validasi = 1, tanggal_tes = now() WHERE id = $data[id]");

        $_SESSION['user'] = $session;

        header("location:user/index.php");

        }

        else {
          echo "<script language='javascript'>window.alert('Maaf, Anda sudah pernah login sebelumnya.'), window.location = 'index.php';</script>"; 
        }


      }else{
        
        echo "<script language='javascript'>window.alert('Login gagal, masukkan username dan password anda dengan benar.'), window.location = 'index.php';</script>"; 
      }
    }

  ?>