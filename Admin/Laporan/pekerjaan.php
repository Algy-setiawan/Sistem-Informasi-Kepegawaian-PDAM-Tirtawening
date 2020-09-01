<?php

include ('../../koneksi.php');
include ('../../session.php');
$query = mysql_query("SELECT pegawai.*,Pekerjaan.* from pegawai INNER JOIN pekerjaan on pegawai.NIK=pekerjaan.NIK");
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
 .text1 {
position: relative;
    right: 0px;
    display: block;
}
.text2 {
position: relative;
    top: 20px;
    display: block;
}
</style>
</head>
<body>
  <div id="parent" style="background: url("") repeat-x left top"> 
   <img src="../../Assets/Logo.png" style="float: left;" width="100" height="100"> 
   <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERUSAHAAN DAERAH AIR MINUM<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      "TIRTAWENING" KOTA BANDUNG<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      BAGIAN PRODUKSI II
   </h3>

    
</div>

 <hr><br>
  <table style="width: 100%">
                            
                              <tr>
                                 

<td bgcolor="grey" align="center" width="80"><b>NIK</b></td>
<td bgcolor="grey" align="center" width="125"><b>Nama</b></td>
<td bgcolor="grey" align="center" width="80"><b>Tanggal</b></td>
<td bgcolor="grey" align="center" width="100"><b>Pekerjaan</b></td>
<td bgcolor="grey" align="center" width="150"><b>Keterangan</b></td>
<td bgcolor="grey" align="center" width="150"><b>Gambar</b></td>
</tr>
        <?php

while($data = mysql_fetch_array($query)){
?>
  <tr>
    
    <td align="center"><?php echo $data['NIK']; ?></td>
    <td align="center"><?php echo $data['Nama']; ?></td>
    <td align="center"><?php echo $data['tanggal']; ?></td>
    <td align="center"><?php echo $data['pekerjaan']; ?></td>
    <td align="center"><?php echo $data['keterangan']; ?></td>
    <td align="center"><img src="../../assets/<?php echo $data['foto']; ?>" width="175" height="125"></td>
    
   </tr>
<?php

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
   <?php

$content = ob_get_clean();
$tangal = date('Y-m-d h:i:s');
$filename= "pekerjaan-".$tangal.".pdf";
require_once("../../html2pdf/html2pdf.class.php");
$pdf=new HTML2PDF('p','A4','fr','UTF-8');
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->output($filename);
?>
<script type="text/javascript"></script>