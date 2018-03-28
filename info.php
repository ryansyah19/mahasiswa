<?php
    include "example/page/koneksi.php";
    @$query2="SELECT * FROM info";
    @$hasil=mysqli_query($koneksi,$query2);
?>
<div class="halaman">
    <h2>Tambah data</h2>
    <form method="post" enctype="multipart/form-data">
        <table align="center">
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td align="left"><input type="text" name="deskripsi" placeholder="deskripsi"></td>
                </tr>
				<tr>
					<td>Upload Gambar</td>
					<td>:</td>
					<td><input type="hidden" name="MAX_FILES_SIZE" value="100000000"><input name="gambar" type="file"></td>
				</tr>
				<tr>
					<td>Upload File PDF</td>
					<td>:</td>
					<td><input type="hidden" name="MAX_FILES_SIZE" value="100000000"><input name="file" type="file"></td>
				</tr>
                
                <tr>
                    <td><br></td>
                </tr>
        </table>
        <table align="center">
            <tr>
                <td><input type="submit" name="submit" id="submit" value="KIRIM"></td>
                <td><input type="reset" name="reset" id="reset" value="RESET"></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
        </table>
    </form>
    <a href="index3.php?page=info">Kembali Kelola</a>
</div>

 <?php
	$dir='data/';
    @$deskripsi=$_POST['deskripsi'];
	@$nama_gambar=$_FILES['gambar']['name'];
	@$nama_tmp=$_FILES['gambar']['tmp_name'];
	$upload_gambar=$dir.$nama_gambar;
	$upload=move_uploaded_file($nama_tmp,$upload_gambar);
	@$nama_file=$_FILES['file']['name'];
	@$nama_tmps=$_FILES['file']['tmp_name'];
	$upload_file=$dir.$nama_file;
	$upload=move_uploaded_file($nama_tmps,$upload_file);
	@$submit=$_POST['submit'];
        if($submit){
            $query="INSERT INTO `info`(`id`, `deskripsi`, `thumbnail`, `urlthumbnail`, `pdf`, `urlpdf`) VALUES ('','$deskripsi','$nama_gambar','$upload_gambar','$nama_file','$upload_file')";
            $hasil_insert=mysqli_query($koneksi,$query);
			echo "Deskripsi : $deskripsi";
			//$query1="select *from gambar";
			//$tampil=mysqli_query($koneksi,$query1);
        }
?>