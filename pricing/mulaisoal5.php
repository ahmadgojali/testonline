<?php
	session_start(); 				//perintah agar file ini membaca/mengenal/memulai session
	// unset($_SESSION['user']);			// perintah menghapus semua session yg ada
	unset($_SESSION['mulai4']);
	header("location: soal5.php"); 	// mengalihkan halaman ke login.php
?>