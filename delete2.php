<?php
include "pages/examples/koneksi.php";
$id=$_GET['id'];
$query="DELETE FROM info WHERE id='$id'";
$hasil=mysqli_query($koneksi,$query);
	if($hasil){
?>
<script language="javascript">document.location.href="index2.php";</script>
<?php
}else{
	echo "Gagal Menghapus Data";
}
?>