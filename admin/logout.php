<?php
	session_start(); 				//perintah agar file ini membaca/mengenal/memulai session
	unset($_SESSION['admin']);			// perintah menghapus semua session yg ada
	header("location:../login.php"); 	// mengalihkan halaman ke login.php
?>