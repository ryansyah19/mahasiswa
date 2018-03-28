								<?php
									include "pages/examples/koneksi.php";
									/*
									echo '<pre>';
									print_r($_FILES);
									echo '</pre>';
									
									if(!empty($_FILES['urlthumbnail']['name'])){
										echo 'Ada file Gambar';
									}else{
										echo 'gak ada gambar';
									}
									
									if(!empty($_FILES['pdf']['name'])){
										echo '<br>Ada file pdf';
									}else{
										echo '<br>gak ada pdf';
									}
									*/
									$dir='data/';
									@$id=$_POST['id'];
									@$deskripsi=$_POST['deskripsi'];
									$acak=rand(1,100);
									//$nama_gambarsimpan = $acak.$nama_tmp;
									@$nama_gambar=$acak.$_FILES['gambar']['name'];
									@$nama_tmp=$_FILES['gambar']['tmp_name'];
									$upload_gambar=$dir.$nama_gambar;
									$upload=move_uploaded_file($nama_tmp,$upload_gambar);
									@$nama_file=$acak.$_FILES['file']['name'];
									@$nama_tmps=$_FILES['file']['tmp_name'];
									$upload_file=$dir.$nama_file;
									$uploads=move_uploaded_file($nama_tmps,$upload_file);
									$query="";
									$query2="SELECT * FROM info WHERE id='$id'";
									$cekdata = mysqli_query($koneksi,$query2);
									$cdata = mysqli_fetch_array($cekdata);
									
									if(empty($nama_tmp) and empty($nama_tmps)){
										$query="UPDATE info SET deskripsi='$deskripsi'
											WHERE id='$id'";
									
									}
									//pdf saja
									else if(empty($nama_tmp) AND !empty($nama_tmps)){
										//hapus file pdf
										unlink($cdata['urlpdf']);
										
										$query="UPDATE info SET deskripsi='$deskripsi',
												pdf='$nama_file', 
												urlpdf='$upload_file' 
											WHERE id='$id'";
									}
									//gambar saja
									else if(empty($nama_tmps) AND !empty($nama_tmp)){
									//hapus file pdf
										unlink($cdata['urlthumbnail']);
										$query="UPDATE info SET deskripsi='$deskripsi',
												thumbnail='$nama_gambar',  
												urlthumbnail='$upload_gambar'
											WHERE id='$id'";		
									}
									
									else{
									$query="UPDATE info SET deskripsi='$deskripsi',
												thumbnail='$nama_gambar',  
												urlthumbnail='$upload_gambar',
												pdf='$nama_file', 
												urlpdf='$upload_file' 
											WHERE id='$id'";
									}
									$hasil=mysqli_query($koneksi,$query);
									if($hasil){
										echo "<a href='".$upload_gambar."'><img src='".$upload_gambar."'width='100' height='100'>";
										header ('location: index2.php?=#second');
									}else{
										echo "Gagal Update Data";
									}
								?>