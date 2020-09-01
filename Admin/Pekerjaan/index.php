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
                <h3>Halaman Pekerjaan</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

                     
           <div class="clearfix"></div>
               <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lihat Data Pekerjaan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 

                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30"> 
                    </p>
                    <table id="datatable" class="table table-striped jambo_table bulk_action">
                      <thead align="center">
                        <tr>

<td>NIK</td>
<td>Nama</td>
<td>Tanggal</td>
<td>Pekerjaan</td>
<td>Keterangan</td>
<td>Gambar</td>

<td>Action</td>

</tr>
                        </thead>

                        <?php
                       $kd_pekerjaan=$_GET['kd_pekerjaan'];
				
				$sql = mysql_query("SELECT pegawai.*,Pekerjaan.* from pegawai INNER JOIN pekerjaan on pegawai.NIK=pekerjaan.NIK");
        
				if(mysql_num_rows($sql) > 0){
					
					while($data = mysql_fetch_assoc($sql)){
						
						echo "<tr>
							
							<td align='center'>".$data['NIK']." </td>
							<td align='center'>".$data['Nama']." </td>
              <td align='center'>".$data['tanggal']."</td>
							<td align='center'>".$data['pekerjaan']."</td>
              <td align='center'>".$data['keterangan']."</td>
							<td align='center'><img width='250' height='200' src=../assets/".$data['foto']."></td>						
							
							
							
							<td align='center'>
							
              <button type='submit' class='btn btn-danger'><i class='fa fa-trash'><a href=pekerjaan/hapus_pekerjaan.php?kd_pekerjaan=".$data['kd_pekerjaan']."> Hapus</a></i>
              </button>
							</td>
						
							
							
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

