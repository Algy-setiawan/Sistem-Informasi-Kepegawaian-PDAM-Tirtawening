
<?php ob_start();
include "../../koneksi.php";

$NIK = $_POST['NIK'];
$id_user = $_POST['id_user'];
$Password = $_POST['Password'];
$status = $_POST['status'];
$lvl_akses = $_POST['lvl_akses'];




$query=mysql_query("update user set id_user='$id_user' ,Password='$Password' ,lvl_akses='$lvl_akses' where id_user='$id_user'");
$query=mysql_query("update pegawai set status='$status' where NIK='$NIK'");
header('location:../index.php?admin=User');

?>