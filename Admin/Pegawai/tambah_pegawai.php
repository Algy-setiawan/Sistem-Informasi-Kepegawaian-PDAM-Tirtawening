
	<?php 
		include "../../koneksi.php";

		if(isset($_POST['NIK'])){
		
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$jabatan = $_POST['jabatan'];
$jk = $_POST['jk'];
$Tgl_lhr = $_POST['Tgl_lhr'];
$Tgl_lhr = date('Y-m-d', strtotime($Tgl_lhr));
$Alamat = $_POST['Alamat'];
$No_tlp = $_POST['No_tlp'];
$Status = $_POST['Status'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/".$filefoto;

		
			
			if(move_uploaded_file($tmp, $path)){ 

			$query=mysql_query("insert into pegawai(NIK,Nama,jabatan,jk,Tgl_lhr,Alamat,No_tlp,Foto,Status) 
			values('$NIK','$Nama','$jabatan','$jk','$Tgl_lhr','$Alamat','$No_tlp','$filefoto','iya')" ,$koneksi);
			$query=mysql_query("insert into user(NIK,Password,lvl_akses) values('$NIK','$NIK','Pegawai')" ,$koneksi);
			
			if($query){
				echo "<br>";
				header('location:../index.php?admin=Pegawai');
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} }

			else{
			$query=mysql_query("insert into pegawai(NIK,Nama,jabatan,jk,Tgl_lhr,Alamat,No_tlp,Foto,Status) 
			values('$NIK','$Nama','$jabatan','$jk','$Tgl_lhr','$Alamat','$No_tlp','user.png','iya')" ,$koneksi);
			$query=mysql_query("insert into user(NIK,Password,lvl_akses) values('$NIK','$NIK','Pegawai')" ,$koneksi);

			header('location:../index.php?admin=Pegawai');
		}
		
		}else{
			unset($_POST['NIK']);
		}
		?>