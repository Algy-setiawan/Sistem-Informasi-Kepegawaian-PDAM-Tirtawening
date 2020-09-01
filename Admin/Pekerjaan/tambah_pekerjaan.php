
	<?php 
		include "../../koneksi.php";

		if(isset($_POST['tambah'])){
		
$NIK = $_POST['NIK'];
$pekerjaan = $_POST['pekerjaan'];
$keterangan = $_POST['keterangan'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/".$filefoto;
$tanggal = $_POST['tanggal'];
$tanggal = date('Y-m-d', strtotime($tanggal));
		
			
			if(move_uploaded_file($tmp, $path)){ 

			$query=mysql_query("insert into pekerjaan(NIK,pekerjaan,tanggal,keterangan,Foto) 
			values('$NIK','$pekerjaan','$tanggal','$keterangan','$filefoto')" ,$koneksi);
			
			
			if($query){
				echo "<br>";
				header('location:../index.php?admin=Pekerjaan');
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} }

			else{
			$query=mysql_query("insert into pekerjaan(NIK,pekerjaan,tanggal,keterangan,Foto) 
			values('$NIK','$pekerjaan','$tanggal','$keterangan','default.png')" ,$koneksi);
			

			header('location:../index.php?admin=Pekerjaan');
		}
		
		}else{
			unset($_POST['tambah']);
		}
		?>