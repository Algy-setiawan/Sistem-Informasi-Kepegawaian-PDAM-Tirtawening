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

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Data Pekerjaan </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="Pekerjaan/tambah_pekerjaan.php"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NIK <span class=>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="NIK" class="form-control" required="">
                            <option value=" "hidden=" <?php echo $row['NIK'];?>" selected="selected" >Pilih NIK</option>
              <?php 
      
      $query=mysql_query("select * from pegawai order by NIK asc",$koneksi);
      
      while($var=mysql_fetch_array($query))
      {
        ?>
              <option value="<?php  echo $var['NIK']; ?>">
              <?php  echo $var['NIK']; echo ' - ';  echo $var['Nama']; ?>
              </option>
              <?php 
      }
      ?>
  </select>
                        </div>
                      </div>


                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pekerjaan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="pekerjaan" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                          <div class="control-group">
                            <div class="controls">
                             
                                <input type="text" name="tanggal" class="form-control has-feedback-left" id="single_cal1" placeholder="<?php 

echo date('Y/m/d'); ?>
                                " aria-describedby="inputSuccess2Status" required>
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            
                          </div>
                        </fieldset>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea name="keterangan" id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                      </div>

                       
                       
                       

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Foto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="file" name="filefoto"  class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <img id="previewing" width="100" height="100" src="../assets/default.png"  />

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

