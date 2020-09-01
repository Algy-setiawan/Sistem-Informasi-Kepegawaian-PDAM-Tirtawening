<?php
include ('../../koneksi.php');
include ('../../session.php');
$NIK=$_GET['NIK'];
$query = mysql_query("SELECT pegawai.*,cuti.* from pegawai  INNER JOIN cuti on pegawai.NIK=cuti.NIK WHERE cuti.NIK='$NIK'");
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
 div.left{
 	position: relative;
left: 20%;
 }
 table td{
  border: 1px solid black;
   border-collapse: collapse


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
<div align="right">
  Bandung, <?php echo date('Y/m/d'); ?>
</div>
<div align="center">
  <u><h3>SURAT IZIN CUTI TAHUNAN<br>NOMOR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></u>
  
  </div>
 

         <?php

while($data = mysql_fetch_array($query)){
?>
<br>
1. Diberikan cuti tahunan untuk tahun <?php echo date('Y');?> kepada Pegawai Negeri Sipil:<br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama &nbsp;&nbsp;&nbsp; : <?php echo $data['Nama']; ?><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $data['NIK']; ?><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jabatan : <?php echo $data['jabatan']; ?><br>
  <br>
   Selama <?php echo $data['lama'];?> Hari, terhitung mulai tanggal <?php echo $data['dari'];?> sampai dengan tanggal <?php echo $data['sampai'];?> dengan ketentuan sebagai berikut: <br>
   a. Sebelum menjalankan cuti tahunan wajib menyerahkan pekerjaanya kepada atasannya langsung atau pejabat lain yang ditunjuk.<br>
   b. Setelah selesai menjalankan cuti tahunan wajib melaporkan diri kepada atasannya langsung dan bekerja kembali sebagaimana biasa.<br>
<br>
2. Demikianlah surat izin cuti tahunan ini dibuat untuk dapat digunakan sebagaimana mestinya<br> 
<?php

}
?>

<div>
	
<div align="right">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
Bandung, <?php date_default_timezone_set("Asia/Bangkok");echo date("Y/m/d")?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
Kepala Seksi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br> 
(__________________)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<b>IWAN GUNAWAN,SE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br>
NIK 013116-A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   </div>
<div align="left">

<h5>TEMBUSAN :</h5><br>
1. Kepala Bagian PDAM Tirtawening Cabang Mata Air Kota Bandung <br>
2. Kepala SDM PDAM Tirtawning Kota Bandung
</div>
</div>
</body>
</html>
   <?php

$content = ob_get_clean();
$tangal = date('Y-m-d h:i:s');
$filename= "cuti-".$tangal.".pdf";
require_once("../../html2pdf/html2pdf.class.php");
$pdf=new HTML2PDF('p','A4','fr','UTF-8');
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->output($filename);
?>
<script type="text/javascript"></script>