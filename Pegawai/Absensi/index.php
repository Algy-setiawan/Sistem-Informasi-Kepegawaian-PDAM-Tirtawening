<?php
include ('../koneksi.php');
$sql ="SELECT max(kd_jabatan) as terakhir from jabatan";
  $hasil = mysql_query($sql);
  $data = mysql_fetch_array($hasil);
  $lastID = $data['terakhir'];
  $lastNoUrut = substr($lastID, 3, 9);
  $nextNoUrut = $lastNoUrut + 1;
  $nextID = "JB".sprintf("%03s",$nextNoUrut);
$NIK=$_GET['NIK'];
$query=mysql_query("select * from Absensi where NIK='$NIK'");
?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman Absensi</h3>
              </div>

              <div class="title_right">
                
                </div>
              </div>
            </div>


 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hitung Data Absensi </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                       <form action="?admin=Absensi"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dari<span class="required">*</span>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sampai<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                          <div class="control-group">
                            <div class="controls">
                                <input type="text" name="sampai" class="form-control has-feedback-left" id="single_cal3" placeholder="
                                " aria-describedby="inputSuccess2Status" required>
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                          </div>
                        </fieldset>
                        </div>
                      </div>

                    
                     
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="tambah" class="btn btn-success">Submit</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          
                        </div>
                      </div>
<div class="row">
                        <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead align="center">
                          <tr align="center">

<td>NIK</td>
<td>Nama</td>
<td>Dari</td>
<td>Sampai</td>
<td>Hadir</td>
<td>Sakit</td>
<td>Izin</td>
<td>Cuti</td>
<td>Alfa</td>



</tr>
                        </thead>

                        <?php

        $dari=$_POST['dari'];               
        $sampai=$_POST['sampai'];
        $Tanggal1 = date('Y-m-d', strtotime($dari));
        $Tanggal2 = date('Y-m-d', strtotime($sampai));
        
        $a = $_SESSION['NIK'];
        $sql = mysql_query("SELECT DISTINCT pegawai.NIK, absensi.nik from pegawai INNER JOIN absensi on pegawai.NIK=absensi.NIK WHERE absensi.NIK='$a' AND absensi.Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");

       

        if(mysql_num_rows($sql) > 0){
          
          while($data = mysql_fetch_assoc($sql)) 
          { 

        $NIK=$data['NIK'];
        $hadir = mysql_query("SELECT * from absensi WHERE NIK='$NIK' AND Keterangan='Hadir' AND Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");
        $hadir1=mysql_num_rows($hadir);

        $Sakit = mysql_query("SELECT * from absensi WHERE NIK='$NIK' AND Keterangan='Sakit' AND Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");
        $Sakit1=mysql_num_rows($Sakit);

        $Izin = mysql_query("SELECT * from absensi WHERE NIK='$NIK' AND Keterangan='Izin' AND Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");
        $Izin1=mysql_num_rows($Izin);

        $Cuti = mysql_query("SELECT * from absensi WHERE NIK='$NIK' AND Keterangan='Cuti' AND Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");
        $Cuti1=mysql_num_rows($Cuti);

        $Alfa = mysql_query("SELECT * from absensi WHERE NIK='$NIK' AND Keterangan='Alfa' AND Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");
        $Alfa1=mysql_num_rows($Alfa);

        $nama = mysql_query("SELECT * from pegawai WHERE NIK='$NIK'");
         while($nama1 = mysql_fetch_assoc($nama))
        

           
         
          
            echo "<tr>
              
              <td align='center'>".$data['NIK']."</td>
              <td align='center'>".$nama1['Nama']."</td>
              <td align='center'>".$Tanggal1."</td>
              <td align='center'>".$Tanggal2."</td>
              <td align='center'>".$hadir1." Hari</td>
              <td align='center'>".$Sakit1." Hari</td>
              <td align='center'>".$Izin1." Hari</td>
              <td align='center'>".$Cuti1." Hari</td>
              <td align='center'>".$Alfa1." Hari</td>
              
              
              
              
              
             
            
              
              
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
                        <!-- /.col -->
                      </div>
                    </form>
                  </div>
                </div>
            

            <div class="clearfix"></div>
               <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lihat Data Absensi</h2>
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

<td>No</td>
<td>Tanggal</td>
<td>Nik</td>
<td>Nama</td>

<td>Keterangan</td>

</tr>
                        </thead>

                        <?php

        $no=1;
        
        $NIK= $_SESSION['NIK'];
        $sql = mysql_query(" SELECT * from absensi WHERE NIK='$NIK' ORDER BY Tanggal desc");
        
        
        if(mysql_num_rows($sql) > 0){
          
          while($data = mysql_fetch_assoc($sql))
         
          {  
            
            
              echo "<tr>
              <td align='center'>$no</td>
              <input type='hidden' name='NIK[]' value='".$data['NIK']."'>
              <td align='center'>".$data['Tanggal']."</td>
              <td align='center'>".$data['NIK']."</td>
              
              <td align='center'>".$_SESSION['Nama']."</td>
              
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

