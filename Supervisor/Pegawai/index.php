<?php
include ('../koneksi.php');
$sql ="SELECT max(NIK) as terakhir from pegawai";
  $hasil = mysql_query($sql);
  $data = mysql_fetch_array($hasil);
  $lastID = $data['terakhir'];
  $lastNoUrut = substr($lastID, 3, 9);
  $nextNoUrut = $lastNoUrut + 1;
  $nextID = "A-".sprintf("%03s",$nextNoUrut);
?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman Pegawai</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>
            
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lihat Data Pegawai </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead align="center">
                          <tr align="center">

<td>NIK</td>
<td>Nama</td>
<td>Jabatan</td>
<td>Jenis Kelamin</td>
<td>Alamat</td>
<td>Tgl Lhr</td>
<td>No tlp</td>
<td>Foto</td>


</tr>
                        </thead>

                        <?php
				$a = $_SESSION['NIK'];
				$sql = mysql_query("SELECT * FROM pegawai where NIK='$a'");
				if(mysql_num_rows($sql) > 0){
					
					while($data = mysql_fetch_assoc($sql)){
						
						echo "<tr>
							
							<td align='center'>".$data['NIK']."</td>
							<td align='center'>".$data['Nama']."</td>
							<td align='center'>".$data['jabatan']."</td>
							<td align='center'>".$data['jk']."</td>
							<td align='center'>".$data['Alamat']."</td>
							<td align='center'>".$data['Tgl_lhr']."</td>
							<td align='center'>".$data['No_tlp']."</td>
              <td align='center'><img width='75' height='75' src=../assets/".$data['Foto']."></td>
							
							
						
							
							
							</tr>";
						
					}
				}else{
					echo '
					<tr >
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

