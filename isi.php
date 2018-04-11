<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Form Profil - Sistem Pendaftaran</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
    include "pages/examples/koneksi.php";
    @$query2="SELECT * FROM data";
    @$hasil=mysqli_query($koneksi,$query2);
?>
<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>Register</b></a>
        </div>
        <div class="card">
            <div class="body">
              <form id="sign_in" method="POST">
                    <div class="msg">ISI DATA</div>
                    <div class="input-group">
                        <span class="input-group-addon">
						Nama
                        </span>
                        <div class="form-line">
                            <input type="text" name="nama" class="form-control" required autofocus/>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
						NISN
                        </span>
                        <div class="form-line">
                           <input type="text" name="nisn" class="form-control" required/>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
						Kelas
                        </span>
                        <div class="form-line">
                            <input type="text" name="kelas" class="form-control" required/>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
						Sekolah
                        </span>
                        <div class="form-line">
                            <input type="text" name="sekolah" class="form-control" required/>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
						Alamat
                        </span>
                        <div class="form-line">
                            <input type="text" name="alamat" class="form-control" required/>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
						No.HP
                        </span>
                        <div class="form-line">
                            <input type="text" name="nohp" class="form-control" required/>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
						Nama Guru
                        </span>
                        <div class="form-line">
                            <input type="text" name="namaguru" class="form-control" required/>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
						No.HP Guru
                        </span>
                        <div class="form-line">
                            <input type="text" name="nohpguru" class="form-control" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <input class="btn btn-block bg-pink waves-effect" type="submit" name="submit"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
	
<?php
@session_start();
    @$nama=$_POST['nama'];
    @$nisn=$_POST['nisn'];
    @$kelas=$_POST['kelas'];
	@$sekolah=$_POST['sekolah'];
	@$alamat=$_POST['alamat'];
	@$nohp=$_POST['nohp'];
	@$namaguru=$_POST['namaguru'];
	@$nohpguru=$_POST['nohpguru'];
	@$submit=$_POST['submit'];
     
        if($submit){
            $query_insert="INSERT INTO data (`nama`, `nisn`, `kelas`,`sekolah`,`alamat`,`nohp`,`namaguru`,`nohpguru`) VALUES  ('$nama','$nisn','$kelas','$sekolah','$alamat','$nohp','$namaguru','$nohpguru')";
            $hasil_insert=mysqli_query($koneksi,$query_insert);
			$query2="SELECT data.id FROM data WHERE nisn='$nisn'";
			$hasil2=mysqli_query($koneksi,$query2);
			$data=mysqli_fetch_array($hasil2);
			$query3="UPDATE user SET id='$data[id]' WHERE username='$_SESSION[regisusername]'";
			$hasil3=mysqli_query($koneksi,$query3);
			$_SESSION[regisusername]='';
			?>
			
			<script> 
				//alert('xxxxxx');
				window.location.href='login.php';
			</script>
			<?php
        }
?>
</body>

</html>