<?php
include ('../koneksi.php');
$kd_jabatan=$_GET['kd_jabatan'];
$query=mysql_query("select * from jabatan where kd_jabatan='$kd_jabatan'");



?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman Jabatan</h3>
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
                    <h2>Edit Data Jabatan </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="jabatan/edit_jabatan.php"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<?php
while($row=mysql_fetch_array($query)){
?>

                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="kd_jabatan" id="first-name" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?php  echo $row['kd_jabatan'];?>" readonly>
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="jabatan" required="required" class="form-control col-md-7 col-xs-12" value="<?php 

echo $row['jabatan']; 
        
        ?>">
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

