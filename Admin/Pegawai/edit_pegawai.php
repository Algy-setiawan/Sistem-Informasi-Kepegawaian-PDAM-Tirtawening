
<?php ob_start();
include "../../koneksi.php";
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$jabatan = $_POST['jabatan'];
$jk = $_POST['jk'];
$Tgl_lhr = $_POST['Tgl_lhr'];
$Tgl_lhr = date('Y-m-d', strtotime($Tgl_lhr));
$Alamat = $_POST['Alamat'];
$No_tlp = $_POST['No_tlp'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/".$filefoto;

if(move_uploaded_file($tmp, $path)){ 

$query=mysql_query("update pegawai set NIK='$NIK' ,Nama='$Nama' ,jabatan='$jabatan' ,jk='$jk' ,Tgl_lhr='$Tgl_lhr' ,Alamat='$Alamat' ,No_tlp='$No_tlp' ,Foto='$filefoto' where NIK='$NIK'");
header('location:../index.php?admin=Pegawai');
}
else{
			$query=mysql_query("update pegawai set NIK='$NIK' ,Nama='$Nama' ,jabatan='$jabatan' ,jk='$jk' ,Tgl_lhr='$Tgl_lhr' ,Alamat='$Alamat' ,No_tlp='$No_tlp' where NIK='$NIK'");

			header('location:../index.php?admin=Pegawai');
}
?>