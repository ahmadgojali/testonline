<?php 
    session_start();
    require "config/koneksi.php";

    if (isset($_POST['login'])) {
    
      $username = $_POST['username'];
      $password = $_POST['password'];
      $hasil    = mysqli_query($connect, "SELECT * from user where username ='$username' and password ='$password' or email ='$username' and password ='$password'");
      $data     = mysqli_fetch_array($hasil);
      $session  = $data['id'];
      $row      = mysqli_num_rows($hasil);
      
      if( $row >  0) {
        $_SESSION['user'] = $session;

        header("location:user/index.php");

      }else{
        
        echo "<script language='javascript'>window.alert('Login gagal, masukkan username dan password anda dengan benar.'), window.location = 'index.php';</script>"; 
      }
    }

  ?>