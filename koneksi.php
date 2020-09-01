<?php
error_reporting(0);
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "kepegawaian";

$koneksi = mysql_connect($host, $user, $password) or die("Koneksi gagal!");
mysql_select_db($database, $koneksi) or die("Tidak ada database yang dipilih!");
?>
