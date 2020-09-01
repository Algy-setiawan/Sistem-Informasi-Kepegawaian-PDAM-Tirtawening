
<?php ob_start();
include "../../koneksi.php";

$status = $_POST['status'];
$kd_cuti=$_GET['kd_cuti'];

$query=mysql_query("update cuti set kd_cuti='$kd_cuti' ,status='Diterima' where kd_cuti='$kd_cuti'");
header('location:../index.php?admin=Cuti');
?>