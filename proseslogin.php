<?php
include "koneksi.php";

$NIK = $_POST['NIK'];
$Password     = $_POST['Password'];

$NIK      = mysql_real_escape_string($NIK);
$Password = mysql_real_escape_string($Password);
$login    = mysql_query("SELECT * FROM user WHERE NIK='$NIK' AND Password='$Password'");
$login1    = mysql_query("SELECT * FROM pegawai WHERE NIK='$NIK'");
$ketemu   = mysql_num_rows($login);
$ketemu1   = mysql_num_rows($login1);
$r        = mysql_fetch_array($login);
$r1        = mysql_fetch_array($login1);

if (($ketemu > 0) && ($ketemu1 > 0)){
  session_start();
  $_SESSION[NIK]     = $r[NIK];
  $_SESSION[Password] = $r[Password];
  $_SESSION[lvl_akses] = $r[lvl_akses];
  $_SESSION[Nama]     = $r1[Nama];
  $_SESSION[Foto]     = $r1[Foto];
  $_SESSION[jabatan]     = $r1[jabatan];

  if(($_SESSION[lvl_akses]==Admin)&&($_SESSION[jabatan]=='KEPALA SEKSI')){
    header('location:Admin/index.php?admin=home');
  } 
elseif ($_SESSION[jabatan]=='PENYELIA'){
    header('location:/PDAM/Penyelia/');
  }
elseif ($_SESSION[jabatan]==SUPERVISOR){
    header('location:/PDAM/Supervisor/');
  }
else {
    header('location:/PDAM/Pegawai/');
  } 
}
else{
echo "<script>window.alert('Username Atau Password Salah !!!')
    window.location='index.php'</script>";
}
?>
