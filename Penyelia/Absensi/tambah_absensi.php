<?php 
		include "../../koneksi.php";

		if(isset($_POST['tambah'])){
	

$Admin = $_POST['Admin'];
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Keterangan = $_POST['Keterangan'];
$status = $_POST['status'];
$Tanggal = $_POST['Tanggal'];
$Tanggal = date('Y-m-d', strtotime($Tanggal));
$jumlah = count($NIK);
for($i=0; $i<$jumlah; $i++){


$query=mysql_query("insert into absensi(Admin,NIK,Keterangan,Tanggal,status) values('$Admin','$NIK[$i]','$Keterangan[$i]','$Tanggal','$status[$i]')" ,$koneksi);			
			
			}
				header('location:../index.php?admin=Absensi');
				
		
}

		?>