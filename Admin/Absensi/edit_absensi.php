<?php 
		include "../../koneksi.php";

		if(isset($_POST['update'])){
	
$kd_absensi = $_POST['kd_absensi'];
$Admin = $_POST['Admin'];
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Keterangan = $_POST['Keterangan'];
$status = $_POST['status'];
$Tanggal = $_POST['Tanggal'];
$Tanggal = date('Y-m-d', strtotime($Tanggal));
$jumlah = count($NIK);
for($i=0; $i<$jumlah; $i++){


$query=mysql_query("update absensi set Tanggal='$Tanggal' ,Keterangan='$Keterangan[$i]' where kd_absensi='$kd_absensi[$i]'");

		
			
			}
				header('location:../index.php?admin=Absensi');
				
		
}

		?>