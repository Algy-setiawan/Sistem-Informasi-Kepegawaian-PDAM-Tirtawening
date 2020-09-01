<?php

 include "../../koneksi.php";

 $status    			= $_POST['status'];
$kd_cuti=$_GET['kd_cuti'];
$NIK=$_GET['NIK'];


 mysql_query("delete from cuti where kd_cuti='$_GET[kd_cuti]'");
$query=mysql_query("update pegawai set NIK='$NIK' ,Status='iya' where NIK='$NIK'");
 header('location:../index.php?admin=Cuti');

?>