<?php
session_start();
if(!isset($_SESSION['NIK'])){
    die("Anda belum login");
}
if($_SESSION['lvl_akses']!="1"){
    die("Anda bukan Admin!!");
}
?>