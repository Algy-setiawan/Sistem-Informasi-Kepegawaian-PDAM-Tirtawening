<?php 
		include "../../koneksi.php";

		if(isset($_POST['tambah'])){
	


$NIK = $_POST['NIK'];
$dari = $_POST['dari'];
$sampai = $_POST['sampai'];

$keterangan = $_POST['keterangan'];

$dari1 = date('Y-m-d', strtotime($dari));
$sisa1 = date('Y-m-d');
$lamaxx = (date(strtotime($sampai))-(date(strtotime($dari))))/(60*60*24);
$sisa = (date(strtotime($sampai))-(date(strtotime($sisa1))))/(60*60*24);
$status = $_POST['status'];
$jumlah = count($NIK);

$jenis_cuti = $_POST['jenis_cuti'];
if ($jenis_cuti=='Cuti Tahunan') {
	$lama ='10';
	$sampai1 = date('Y-m-d', strtotime('+10 days', strtotime($dari1)));
}
elseif ($jenis_cuti=='Cuti Hamil') {
	$lama ='90';
	$sampai1 = date('Y-m-d', strtotime('+90 days', strtotime($dari1)));
}




$query=mysql_query("insert into cuti(NIK,dari,sampai,jenis_cuti,lama,sisa,keterangan,status) values('$NIK','$dari1','$sampai1','$jenis_cuti','$lama','$sisa','$keterangan','Pending')" ,$koneksi);
$query=mysql_query("update pegawai set NIK='$NIK' ,status='Pending' where NIK='$NIK'");			
			
			
				header('location:../index.php?admin=Cuti');
				
		
}

		?>