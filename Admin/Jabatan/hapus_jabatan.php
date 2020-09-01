<?php

 include "../../koneksi.php";
 mysql_query("delete from jabatan where kd_jabatan='$_GET[kd_jabatan]'");

 header('location:../index.php?admin=jabatan');

?>