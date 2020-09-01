
<?php ob_start();
include "../../koneksi.php";

$kd_pekerjaan = $_POST['kd_pekerjaan'];
$NIK = $_POST['NIK'];
$pekerjaan = $_POST['pekerjaan'];
$tanggal = $_POST['tanggal'];
$tanggal = date('Y-m-d', strtotime($tanggal));
$keterangan = $_POST['keterangan'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/".$filefoto;

if(move_uploaded_file($tmp, $path)){ 

$query=mysql_query("update pekerjaan set kd_pekerjaan='$kd_pekerjaan' ,NIK='$NIK',pekerjaan='$pekerjaan' ,tanggal='$tanggal' ,keterangan='$keterangan' ,Foto='$filefoto' where kd_pekerjaan='$kd_pekerjaan'");
header('location:../index.php?admin=Pekerjaan');
}
else{
			$query=mysql_query("update pekerjaan set kd_pekerjaan='$kd_pekerjaan' ,NIK='$NIK',pekerjaan='$pekerjaan' ,tanggal='$tanggal' ,keterangan='$keterangan' ,Foto='default.png' where kd_pekerjaan='$kd_pekerjaan'");

			header('location:../index.php?admin=Pekerjaan');
}
?>