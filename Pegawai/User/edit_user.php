
<?php ob_start();
include "../../koneksi.php";

$id_user = $_POST['id_user'];
$Password = $_POST['Password'];





$query=mysql_query("update user set id_user='$id_user' ,Password='$Password' where id_user='$id_user'");
header('location:../index.php?admin=User');

?>