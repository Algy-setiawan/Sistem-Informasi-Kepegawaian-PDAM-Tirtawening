<?php

 include "../../koneksi.php";
 mysql_query("delete from pekerjaan where kd_pekerjaan='$_GET[kd_pekerjaan]'");

 header('location:../index.php?admin=Pekerjaan');

?>