								<?php
									include "pages/examples/koneksi.php";
									$dir='data/';
									$acak=rand(1,100);
									
									@$id=$_POST['id'];
									@$nama=$_POST['nama'];
									@$nisn=$_POST['nisn'];
									@$kelas=$_POST['kelas'];
									@$sekolah=$_POST['sekolah'];
									@$alamat=$_POST['alamat'];
									@$nohp=$_POST['nohp'];
									@$namaguru=$_POST['namaguru'];
									@$nohpguru=$_POST['nohpguru'];
									@$nama_foto=$acak.$_FILES['foto']['name'];
									@$nama_tmp=$_FILES['foto']['tmp_name'];
									$upload_foto=$dir.$nama_foto;
									$upload=move_uploaded_file($nama_tmp,$upload_foto);
									$query="";
									$query2="SELECT * FROM data WHERE id='$id'";
									$cekdata = mysqli_query($koneksi,$query2);
									$cdata = mysqli_fetch_array($cekdata);
									
									if(empty($nama_tmp)){
									$query="UPDATE data SET nama='$nama', nisn='$nisn', kelas='$kelas', sekolah='$sekolah', alamat='$alamat', nohp='$nohp', namaguru='$namaguru', nohpguru='$nohpguru' WHERE id='$id'";
									}
									else{
										unlink($cdata['urlfoto']);
									$query="UPDATE data SET nama='$nama', nisn='$nisn', kelas='$kelas', sekolah='$sekolah', alamat='$alamat', nohp='$nohp', namaguru='$namaguru', nohpguru='$nohpguru', foto='$nama_foto',  
												urlfoto='$upload_foto' WHERE id='$id'";
									}
									$hasil=mysqli_query($koneksi,$query);
									if($hasil){
										echo "<a href='".$upload_foto."'><img src='".$upload_foto."'width='100' height='100'>";
										header ('location: profil.php');
									}else{
										echo "Gagal Update Data";
									}
								?>