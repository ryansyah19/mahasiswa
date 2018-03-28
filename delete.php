<?php
include "pages/examples/koneksi.php";
$id=$_GET['id'];
$query="DELETE FROM data WHERE id='$id'";
$hasil=mysqli_query($koneksi,$query);
	if($hasil){
?>
<script language="javascript">document.location.href="profil.php";</script>
<?php
}else{
	echo "Gagal Menghapus Data";
}
?>