<?php
session_start();
include "pages/examples/koneksi.php";
$username = $_POST['username'];
$password = $_POST['pass'];
$query = "SELECT * FROM user WHERE username ='$username'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$pengacak ="p3ng4c4k";
$passmd =md5($pengacak.md5($password));
	if($passmd == $data['password'])
	{
	$_SESSION['level']=$data['level'];
	$_SESSION['username']=$data['username'];
	$_SESSION['id']=$data['id'];
	if ($_SESSION['level']=="admin"){
		echo "<h2>Login Suskes</h2>";
			header('location: index2.php');
	}
	else if ($_SESSION['level']=="user"){
		echo "<h2>Login Suskes</h2>";
			header('location: index.php');
	}
	}	
		else echo "<h2>Login Gagal</h2>";
			echo "<a href='daftar.php'>Daftar Dulu</a><br>";
?>