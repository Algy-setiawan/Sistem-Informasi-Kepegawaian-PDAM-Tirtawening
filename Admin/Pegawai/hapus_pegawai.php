<?php

 include "../../koneksi.php";
 mysql_query("delete from pegawai where NIK='$_GET[NIK]'");
 mysql_query("delete from login where NIK='$_GET[NIK]'");
 header('location:../index.php?admin=Pegawai');

?>