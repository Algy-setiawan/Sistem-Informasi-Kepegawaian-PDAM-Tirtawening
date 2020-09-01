<?php
include ('../koneksi.php');

?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                    </span>
                  </div>
                </div>
              </div>
            </div>



 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cari Data Absensi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="?admin=Laporan_absensi"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      
                      
                      
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

                  
                  </div>
                </div>
              </div>
            </div>
          </div>



            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Absensi</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                                           PDAM TIRTAWENING KOTA BANDUNG
                                          <small class="pull-right">Tanggal: <?php 
                                          date_default_timezone_set("Asia/Bangkok");
                                          echo date("Y/m/d")
                                           ?></small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                         
                          <address>
                                          
                                          Jl. Sersan Bajuri No 5. 
                                          <br>Isola, Sukasari
                                          <br>Kota Bandung, Jawa Barat 40154
                                          <br>Phone:(022) 2509030
                                         <br> <br><strong>NIK : <?php echo $_SESSION['NIK'];  ?> 
                                         <br>Nama : <?php echo $_SESSION['Nama'];  ?></strong>
                                      </address>
                        </div>
                        <!-- /.col -->
                        
                        <!-- /.col -->
                        
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead align="center">
                              <tr>
                                 

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
        

        $sql = mysql_query("SELECT DISTINCT pegawai.NIK, absensi.nik from pegawai INNER JOIN absensi on pegawai.NIK=absensi.NIK WHERE absensi.Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");

       

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

        $Alfa = mysql_query("SELECT * from absensi WHERE NIK='$NIK' AND Keterangan='Alfa' AND Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");
        $Alfa1=mysql_num_rows($Alfa);

        $Cuti = mysql_query("SELECT * from absensi WHERE NIK='$NIK' AND Keterangan='Cuti' AND Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");
        $Cuti1=mysql_num_rows($Cuti);

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
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                       
                        <!-- /.col -->
                        
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                           
                          <a href="Laporan/absensi.php?dari=<?php echo $dari ?>&sampai=<?php echo $sampai ?>"><i class="fa fa-print"></i> PDF</a>
                        </div>
                      </div>
                    </section>  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->