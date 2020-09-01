
<?php ob_start();
include "../../koneksi.php";

$status  = $_POST['status'];
$kd_cuti=$_POST['kd_cuti'];
$NIK=$_POST['NIK'];
$keterangan=$_POST['keterangan'];

$query=mysql_query("update cuti set kd_cuti='$kd_cuti' ,status='tidak',keterangan='$keterangan' where kd_cuti='$kd_cuti'");
$query=mysql_query("update pegawai set NIK='$NIK' ,Status='iya' where NIK='$NIK'");
header('location:../index.php?admin=Cuti');
?>