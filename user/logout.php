<?php
	session_start(); 				//perintah agar file ini membaca/mengenal/memulai session
	unset($_SESSION['user']);			// perintah menghapus semua session yg ada
	unset($_SESSION['mulai1']);
	unset($_SESSION['mulai2']);
	unset($_SESSION['mulai3']);
	unset($_SESSION['mulai4']);
	unset($_SESSION['mulai5']);
	header("location:../index.php"); 	// mengalihkan halaman ke login.php
?>