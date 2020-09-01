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
                    <h2>Tambah Data Absensi </h2>
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
                          <fieldset>
                          <div class="control-group">
                            <div class="controls">
                             
                                <input type="text" name="Tanggal" class="form-control has-feedback-left" id="single_cal1"
                                " aria-describedby="inputSuccess2Status" required>
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            
                          </div>
                        </fieldset>
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
<td>Aktif</td>
<td>Keterangan</td>

</tr>
                        </thead>

                        <?php

        $no=1;
        $status='tidak';
        $sql = mysql_query("SELECT * from pegawai");
    
        if(mysql_num_rows($sql) > 0){
          
          while($data = mysql_fetch_assoc($sql))

         
          {

            
            
            $tanggal= date('Y-m-d');
            $tanggallhr = $data['Tgl_lhr']; 
            if ($data['Status']==tidak) {
              echo "<tr>
              <td align='center'>$no</td>
              <input type='hidden' name='NIK[]' value='".$data['NIK']."'>
              <td align='center'>".$data['NIK']."</td>

              <td align='center'>".$data['Nama']."</td>
              <td align='center'>".$data['jabatan']."</td>
              <td align='center'>".$data['Status']."</td>
              <input type='hidden' hidden name='status[]' value='".$data['status']."'>
              
              <td align='center'>

              <select name='Keterangan[]' class='form-control' readonly required='required'>
                            <option value='Cuti' hidden=''>Cuti</option>
                             
                             
                            
                           </select>

              </td>
              
               
              
              </tr>";
            } else {
              echo "<tr>
              <td align='center'>$no</td>
              <input type='hidden' name='NIK[]' value='".$data['NIK']."'>
              <td align='center'>".$data['NIK']."</td>
              <td align='center'>".$data['Nama']."</td>
              <td align='center'>".$data['jabatan']."</td>
              <td align='center'>".$data['Status']."</td>
              <input type='hidden' hidden name='status[]' value='".$data['status']."'>
              
              <td align='center'>

              <select name='Keterangan[]' class='form-control' required='required'>
                            <option value='' hidden=''>Keterangan</option>
                             <option value='Hadir'>Hadir</option>
                             <option value='Sakit'>Sakit</option>
                             <option value='Izin'>Izin</option>
                             <option value='Cuti'>Cuti</option>
                             <option value='Alfa'>Alfa</option>
                           </select>

              </td>
              
               
              
              </tr>";
            }
            
            
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
                          
                          <td align='center'><button name="tambah" type='submit' class='btn btn-danger'><i class='fa fa-check'> Simpan</a></i></button>
                          <button type='Reset' class='btn btn-success'><i class='fa fa-close'> Reset</a></i></button>

              </td>
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
<td>Nama Admin</td>
<td>Action</td>

</tr>
                        </thead>

                        <?php
        $no=1;
        $sql = mysql_query("SELECT * FROM absensi GROUP BY Tanggal ORDER BY Tanggal DESC ");
        if(mysql_num_rows($sql) > 0){
          
          while($data = mysql_fetch_assoc($sql)){
            
            echo "<tr>
              <td align='center'>$no</td>
              <td align='center'>".$data['Tanggal']."</td>
              <td align='center'>".$data['Admin']."</td>
              
              <td align='center'><button type='submit' class='btn btn-success'><i class='fa fa-eye'><a href=index.php?admin=view&Tanggal=".$data['Tanggal']."> View</a></i></button>
              <button type='submit' class='btn btn-warning'><i class='fa fa-pencil'><a href=index.php?admin=form_edit_absensi&Tanggal=".$data['Tanggal']."> Edit</a></i></button>
              <button type='submit' class='btn btn-danger'><i class='fa fa-trash-o'><a href=absensi/hapus_absensi.php?kd_absensi=".$data['kd_absensi']."&Tanggal=".$data['Tanggal']."> Hapus</a></i></button>
              </td>
            
               
              
              </tr>"; $no++;
            
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

