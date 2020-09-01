<?php
include ('../koneksi.php');
include ('../session.php');
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
                <h3>Halaman Cuti</h3>
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
                    <h2>Tambah Data Cuti </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="cuti/tambah_cuti.php"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="NIK" id="first-name" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?php 
                echo $_SESSION['NIK']; 
                 ?>" readonly
                          >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="Nama" id="first-name" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?php 
                echo $_SESSION['Nama']; 
                 ?>" readonly 
                          >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                          <div class="control-group">
                            <div class="controls">
                                <input type="text" name="dari" class="form-control has-feedback-left" id="single_cal1" placeholder="
                                " aria-describedby="inputSuccess2Status" required>
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                          </div>
                        </fieldset>
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Cuti <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="jenis_cuti" class="form-control" required="">
                            <option value="" hidden="">Pilih Jenis Cuti</option>
                             <option value="Cuti Tahunan">Cuti Tahunan 10 Hari</option>
                             <option value="Cuti Hamil">Cuti Hamil 90 Hari</option>
                             
                           
                           </select>
                        </div>
                      </div>


                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="tambah" class="btn btn-success">Submit</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          
                        </div>
                      </div>

                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="clearfix"></div>

           
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lihat Data Cuti </h2>
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
<td>Tanggal</td>
<td>S/d Tanggal</td>
<td>Jenis Cuti</td>
<td>Lama</td>
<td>Status</td>
<td>Keterangan</td>

<td>Action</td>

</tr>
                        </thead>

                        <?php
                       
				$a = $_SESSION['NIK'];
				$sql = mysql_query("SELECT pegawai.*,cuti.* from pegawai INNER JOIN cuti on pegawai.NIK=cuti.NIK WHERE pegawai.NIK='$a'");
				if(mysql_num_rows($sql) > 0){
					
					while($data = mysql_fetch_assoc($sql)){
						
						echo "<tr>
							
							<td align='center'>".$data['NIK']."</td>
							<td align='center'>".$data['Nama']."</td>
							<td align='center'>".$data['dari']."</td>
              <td align='center'>".$data['sampai']."</td>
							<td align='center'>".$data['jenis_cuti']."</td>
              <td align='center'>".$data['lama']." Hari</td>
              <td align='center'>".$data['status']."</td>
              <td align='center'>".$data['keterangan']."</td>
							
							
							
							
							<td align='center'>
              <button type='submit' class='btn btn-danger'><i class='fa fa-trash'><a href=cuti/hapus_cuti.php?kd_cuti=".$data['kd_cuti']."&NIK=".$data['NIK']."> Hapus</a></i>
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

