<?php
	session_start(); 				//perintah agar file ini membaca/mengenal/memulai session
	unset($_SESSION['user']);			// perintah menghapus semua session yg ada
	header("location:../index.php"); 	// mengalihkan halaman ke login.php
?>