<?php
include ('../koneksi.php');
$kd_cuti=$_GET['kd_cuti'];
$NIK=$_GET['NIK'];
$query=mysql_query("select * from cuti where kd_cuti='$kd_cuti'");




?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman cuti</h3>
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
                    <h2>Tolak Data Cuti</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="Cuti/ditolak_cuti.php"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<?php
while($row=mysql_fetch_array($query))
{

?>


                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Cuti<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jenis_cuti" id="first-name" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?php  echo $row['jenis_cuti'];?>" readonly>

                          <input type="hidden" name="kd_cuti"value="<?php  echo $row['kd_cuti'];?>">
                          <input type="hidden" name="NIK"value="<?php  echo $row['NIK'];?>">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="dari" required="required" class="form-control col-md-7 col-xs-12" readonly value="<?php 

echo $row['dari']; 
        
        ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea name="keterangan" id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" 
                            data-parsley-validation-threshold="10" ><?php  echo $row['keterangan'];?></textarea>
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
              
                  
        <!-- /page content -->

