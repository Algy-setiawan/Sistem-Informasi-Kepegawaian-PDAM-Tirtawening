<?php

 include "../../koneksi.php";

$Tanggal = $_GET['Tanggal'];

 mysql_query("delete from absensi where Tanggal='$_GET[Tanggal]'");

 header('location:../index.php?admin=Absensi');

?>