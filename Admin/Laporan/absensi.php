<?php

include ('../../koneksi.php');
include ('../../session.php');
        $dari=$_GET['dari'];               
        $sampai=$_GET['sampai'];
        $Tanggal1 = date('Y-m-d', strtotime($dari));
        $Tanggal2 = date('Y-m-d', strtotime($sampai));
$query = mysql_query("SELECT DISTINCT pegawai.NIK, absensi.nik from pegawai INNER JOIN absensi on pegawai.NIK=absensi.NIK WHERE absensi.Tanggal BETWEEN '$Tanggal1' and '$Tanggal2' ");

?>
<!-- page content -->
<!DOCTYPE html>
<html>
<head>
  <title>Laporan Pekerjaan</title>
 
    <style>
 table{
 border: 1px solid black;
 border-collapse: collapse

 }
 table td{
  border: 1px solid black;
   border-collapse: collapse


 }
</style>
<script type="text/javascript">
  
  window.onload = function() { window.print(); }
</script>
</head>
<body>

 
<div id="parent" style="background: url("") repeat-x left top"> 
   <img src="../../Assets/Logo.png" style="float: left;" width="100" height="100"> 
   <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERUSAHAAN DAERAH AIR MINUM<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      "TIRTA WENING" KOTA BANDUNG<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      BAGIAN PRODUKSI II
   </h3>

    
</div>

 <hr><br>       
  
  <table style="width: 100%">
                            
                              <tr>
                                 

<td bgcolor="grey" align="center" width="100"><b>NIK</b></td>
<td bgcolor="grey" align="center" width="150"><b>Nama</b></td>
<td bgcolor="grey" align="center" width="100"><b>Dari</b></td>
<td bgcolor="grey" align="center" width="100"><b>Sampai</b></td>
<td bgcolor="grey" align="center" width="50"><b>Hadir</b></td>
<td bgcolor="grey" align="center" width="50"><b>Sakit</b></td>
<td bgcolor="grey" align="center" width="50"><b>Izin</b></td>
<td bgcolor="grey" align="center" width="50"><b>Cuti</b></td>
<td bgcolor="grey" align="center" width="50"><b>Alfa</b></td>

</tr>
        <?php

while($data = mysql_fetch_array($query)){
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
         while($nama1 = mysql_fetch_assoc($nama)){
?>
  <tr>
    
    <td align="center"><?php echo $data['NIK']; ?></td>
    <td align="center"><?php echo $nama1['Nama']; ?></td>
    <td align="center"><?php echo $Tanggal1; ?></td>
    <td align="center"><?php echo $Tanggal2 ?></td>
    <td align="center"><?php echo $hadir1 ?> Hari</td>
    <td align="center"><?php echo $Sakit1 ?> Hari</td>
    <td align="center"><?php echo $Izin1 ?> Hari</td>
    <td align="center"><?php echo $Cuti1 ?> Hari</td>
    <td align="center"><?php echo $Alfa1 ?> Hari</td>
    
    

 
 </td>
   </tr>
<?php
}
}
?>                
    
                          </table>     



<div align="right">
<br>
Bandung, <?php date_default_timezone_set("Asia/Bangkok");echo date("Y/m/d")?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
Kepala Seksi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br> 
(__________________)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<b>IWAN GUNAWAN,SE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br>
NIK 013116-A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   </div>

    
</body>
</html>
 
<script type="text/javascript"></script>