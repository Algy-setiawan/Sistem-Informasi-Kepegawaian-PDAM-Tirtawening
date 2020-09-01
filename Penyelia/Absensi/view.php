<?php
include ('../koneksi.php');
$sql ="SELECT max(kd_jabatan) as terakhir from jabatan";
  $hasil = mysql_query($sql);
  $data = mysql_fetch_array($hasil);
  $lastID = $data['terakhir'];
  $lastNoUrut = substr($lastID, 3, 9);
  $nextNoUrut = $lastNoUrut + 1;
  $nextID = "JB".sprintf("%03s",$nextNoUrut);
$Tanggal=$_GET['Tanggal'];
$query=mysql_query("select * from Absensi where Tanggal='$Tanggal'");
?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman Absensi</h3>
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
                    <h2>Lihat Data Absensi </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
<div class="x_content">
                  <form action="Absensi/tambah_absensi.php"  method= "post" enctype="multipart/form-data">

                        <div class="form-group">  
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="Admin" value="<?php echo $_SESSION['Nama'];  ?>" required="required" class="form-control col-md-7 col-xs-12"
                          readonly="">

                        </div>
                      </div>

                       <div class="form-group">  
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="Admin" value="<?php echo $Tanggal;  ?>" required="required" class="form-control col-md-7 col-xs-12"
                          readonly="">

                        </div>
                      </div>
                     
                  <div class="x_content">

                      <div class="table-responsive">
                        
                      <table class="table table-striped jambo_table bulk_action">
                        <thead align="center">
                          <tr align="center">

<td>No</td>
<td>Nik</td>
<td>Nama</td>
<td>Jabatan</td>
<td>Keterangan</td>

</tr>
                        </thead>

                        <?php

        $no=1;
        $Tanggal=$_GET['Tanggal'];
       
        $sql = mysql_query(" SELECT pegawai.*,absensi.* from absensi INNER JOIN pegawai on pegawai.NIK=absensi.NIK where Tanggal='$Tanggal'");
        
        
        if(mysql_num_rows($sql) > 0){
          
          while($data = mysql_fetch_assoc($sql))
         
          {  
            
            
              echo "<tr>
              <td align='center'>$no</td>
              <input type='hidden' name='NIK[]' value='".$data['NIK']."'>
              <td align='center'>".$data['NIK']."</td>
              <td align='center'>".$data['Nama']."</td>
              <td align='center'>".$data['jabatan']."</td>
              <td align='center'>".$data['Keterangan']."</td>
              <input type='hidden' hidden name='status[]' value='".$data['status']."'>
              
              
              
               
              
              </tr>";
            
            
            
              $no++;
            
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
                  <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          

              </td>
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
          </div>
        </div>
        <!-- /page content -->

