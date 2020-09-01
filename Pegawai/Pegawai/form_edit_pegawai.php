<?php
include ('../koneksi.php');
$NIK=$_GET['NIK'];
$query=mysql_query("select * from pegawai where NIK='$NIK'");



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
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Data Pegawai </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="pegawai/edit_pegawai.php"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<?php
while($row=mysql_fetch_array($query)){
?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="NIK" id="first-name" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?php  echo $row['NIK'];?>" readonly >
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="Nama" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['Nama'];?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin <span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="jk" class="form-control" >
                            <option value="<?php  echo $row['jk'];?>" hidden=""><?php  echo $row['jk'];?></option>
                             <option value="Laki-Laki">Laki-Laki</option>
                             <option value="Perempuan">Perempuan</option>
                           
                           </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea name="Alamat" id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" 
                            data-parsley-validation-threshold="10" ><?php  echo $row['Alamat'];?></textarea>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="No_tlp" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['No_tlp'];?>">
                        </div>
                      </div>
                       
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                          <div class="control-group">
                            <div class="controls">
                             
                                <input type="text" name="Tgl_lhr" class="form-control has-feedback-left" id="single_cal1" placeholder="<?php 

  echo $row['Tgl_lhr']; ?>" 
  aria-describedby="inputSuccess2Status" required>
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            
                          </div>
                        </fieldset>
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
                      <img id="previewing" width="100" height="100" src="../assets/<?php  echo $row['Foto'];?>"  />

                      </div>
                      </div>
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          
                        </div>
                      </div>
 <?php } ?>
                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
         
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

