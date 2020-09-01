	<?php 
		include "../../koneksi.php";

		if(isset($_POST['kd_jabatan'])){
		
$kd_jabatan = $_POST['kd_jabatan'];
$jabatan = $_POST['jabatan'];

 $sql = mysql_query("SELECT kd_jabatan FROM jabatan where kd_jabatan ='$kd_jabatan'") or die (mysql_error());
		
		if ($_POST['kd_jabatan'] === 'kd_jabatan') {
				$kd_jabatan = 100;
				while($data = mysql_fetch_assoc($sql)){
						$kd_jabatan++;
					}
		}


			$query=mysql_query("insert into jabatan(kd_jabatan,jabatan) 
			values('$kd_jabatan','$jabatan')" ,$koneksi);
			
			
			if($query){
				echo "<br>";
				header('location:../index.php?admin=jabatan');
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} 
		}else{
			unset($_POST['kd_jabatan']);
		}


		?>

		<?php

		function tampil (){

			$$sql = mysql_query("SELECT * FROM jabatan ORDER BY kd_jabatan Asc ");
				if(mysql_num_rows($sql) > 0){
					
					while($data = mysql_fetch_assoc($sql)){
					}
				}
		}
		?>