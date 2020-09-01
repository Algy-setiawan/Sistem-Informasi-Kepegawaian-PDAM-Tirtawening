<?php
include ('../koneksi.php');
$sql ="SELECT max(kd_jabatan) as terakhir from jabatan";
  $hasil = mysql_query($sql);
  $data = mysql_fetch_array($hasil);
  $lastID = $data['terakhir'];
  $lastNoUrut = substr($lastID, 3, 9);
  $nextNoUrut = $lastNoUrut + 1;
  $nextID = "JB".sprintf("%03s",$nextNoUrut);
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
                    <h2>Tambah Data Jabatan </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="jabatan/tambah_jabatan.php"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="kd_jabatan" id="first-name" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?php echo  $nextID; ?>" 
                          >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="jabatan" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
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
                    <h2>Lihat Data Jabatan</h2>
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
                          <td>Kode Jabatan</td>
<td>Jabatan</td>
<td>Action</td>
                        </tr>
                      </thead>


                      <tbody>
                         <?php
        
        $sql = mysql_query("SELECT * FROM jabatan ORDER BY kd_jabatan Asc ");
        if(mysql_num_rows($sql) > 0){
          
          while($data = mysql_fetch_assoc($sql)){
            
            echo "<tr>
              
              <td align='center'>".$data['kd_jabatan']."</td>
              <td align='center'>".$data['jabatan']."</td>
              
              <td align='center'><button type='submit' class='btn btn-danger'><i class='fa fa-trash-o'><a href=jabatan/hapus_jabatan.php?kd_jabatan=".$data['kd_jabatan']."> Hapus</a></i></button>
              <button type='submit' class='btn btn-info'><i class='fa fa-pencil'><a href=index.php?admin=form_edit_jabatan&kd_jabatan=".$data['kd_jabatan']."> Edit</a></i>
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
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

