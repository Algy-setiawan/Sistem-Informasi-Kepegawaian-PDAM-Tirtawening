
<?php
error_reporting(0);
	session_start();
	//mengecek apakah session username kosong atau tidak
	if (!isset($_SESSION['NIK']) || empty($_SESSION['NIK'])) {
		//redirect ke halaman login
		header('location:page_404.html');
	}
?>