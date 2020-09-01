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

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Pekerjaan</h2>
                    
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
<td>Tanggal</td>
<td>Pekerjaan</td>


<td>Keterangan</td>
<td>Gambar</td>
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
                       <a href="Laporan/pekerjaan.php"><button class="btn btn-default"><i class="fa fa-print"></i> PDF</button></a>
                         
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->