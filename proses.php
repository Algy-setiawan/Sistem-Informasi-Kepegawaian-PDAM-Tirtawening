<?php include 'koneksi.php';
$username = $_POST ['username'];
$password = $_POST ['password'];
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$login    = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'");

if (mysql_num_rows($login)) {
	
session_start();
header('location:isi.php');
}
else{
header('location:login.php');	
}
?>
