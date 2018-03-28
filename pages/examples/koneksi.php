<?php
//koneksi database mysqli
$host="localhost";
$user="root";
$password=""; //default kosong
$db="biodata";
$koneksi=mysqli_connect($host,$user,$password);
$db_koneksi=mysqli_select_db($koneksi,$db);
?>
