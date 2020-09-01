
<?php ob_start();
include "../../koneksi.php";
$kd_jabatan    			= $_POST['kd_jabatan'];
$jabatan    			= $_POST['jabatan'];


$query=mysql_query("update jabatan set kd_jabatan='$kd_jabatan' ,jabatan='$jabatan' where kd_jabatan='$kd_jabatan'");
header('location:../index.php?admin=jabatan');
?>