﻿<?php
	session_start();
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
	
	<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index2.php">Admin</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></div>
                    <div class="btn-group user-helper-dropdown">
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index2.php?=#first">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
					<li class="active">
                        <a href="index2.php?=#second">
                            <i class="material-icons">info</i>
                            <span>Manage Info</span>
                        </a>
                    </li>
					<li class="active">
                        <a href="index2.php?=#third">
                            <i class="material-icons">person</i>
                            <span>Data User</span>
                        </a>
                    </li>
					<li class="active">
                        <a href="login.php">
                            <i class="material-icons">input</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">Admin</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="number" id="first">Input Info</div>
                        </div>
                    </div>
                </div>
            </div>
			
            <!-- #END# Widgets -->
			<?php
				include "pages/examples/koneksi.php";
				@$query2="SELECT * FROM info";
				@$hasil=mysqli_query($koneksi,$query2);
			?>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>INPUT INFO</h2>
						</div>
                        <div class="body">
                            <div class="table-responsive">
								<form method="post" enctype="multipart/form-data" action="index2.php?=#second">
								<div class="form-group form-float"><br>
									<div class="form-line">
										<input type="text" name="deskripsi" class="form-control" required/>
											<label class="form-label">Deskripsi</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line"><br><br>
										<input type="hidden" name="MAX_FILES_SIZE" value="100000000"/><input name="gambar" type="file" required/>
											<label class="form-label">Upload Gambar</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line"><br><br>
										<input type="hidden" name="MAX_FILES_SIZE" value="100000000"/><input name="file" type="file" required/>
											<label class="form-label">Upload File PDF</label>
									</div>
								</div>									
								<input type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect"></input>
										 <input type="reset" name="reset" class="btn btn-primary m-t-15 waves-effect"></input>
									
								</form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
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
							//$query1="select *from gambar";
							//$tampil=mysqli_query($koneksi,$query1);
						}
				?>
		
		 <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-lime hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="number" id="second">Manage</div>
                        </div>
                    </div>
                </div>
            </div>
			
			            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>MANAGE INFO</h2>
						</div>
                        <div class="body">
                            <div class="table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable ">								
									<thead>
										<tr>
										<th style="text-align:center;">No</th>
										<th style="text-align:center;">Deskripsi</th>
										<th style="text-align:center;">Thumbnail</th>
										<th style="text-align:center;">Url-Thumbnail</th>
										<th style="text-align:center;">PDF</th>
										<th style="text-align:center;">Url-PDF</th>
										<th style="text-align:center;">Action</th>
									</tr>	
									</thead>
									
									<tbody>
									
										<?php
										include "pages/examples/koneksi.php";
										$query="SELECT * FROM info";
										$hasil=mysqli_query($koneksi,$query);
										$no=1;
										$jum=mysqli_num_rows($hasil);
										$urlkonten = "";
										while ($data=mysqli_fetch_array($hasil)){
										?>	
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['deskripsi'] ?></td>
											<td><?php echo $data['thumbnail'] ?></td>
											<td><?php echo $data['urlthumbnail'] ?></td>
											<td><?php echo $data['pdf'] ?></td>
											<td><?php $urlkonten=$data['urlpdf']; echo $data['urlpdf'] ?></td>
											<td><a class="btn bg-lime btn-xs" href="detail2.php?id=<?php echo $data['id'];?>">Detail</a><br>
											<a class="btn btn-primary btn-xs" href="form_update2.php?id=<?php echo $data['id'];?>">Edit</a><br>
											<a class="btn btn-danger btn-xs" href="delete2.php?id=<?php echo $data['id'];?>"onclick="return confirm ('Apakah Anda Yakin ?')">Delete</a></td>
										</tr>
										<?php
										}
										?>	
										</tbody>
								</table>
							</div>
                        </div>
                    </div>
                </div>
				</div>
                <!-- #END# Task Info -->
				            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="number" id="third">Edit Profile</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
           
         
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Data User</h2>
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
								<thead>		
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>NISN</th>
									<th>Kelas</th>
									<th>Sekolah</th>
									<th>Alamat</th>
									<th>No.HP</th>
									<th>Nama Guru</th>
									<th>No.HP Guru</th>
									<th>Action</th>
								</tr>
								</thead>	
<tbody>								
<?php
include "pages/examples/koneksi.php";
$query="SELECT * FROM data";
$hasil=mysqli_query($koneksi,$query);
$no=1;
$jum=mysqli_num_rows($hasil);
while ($data=mysqli_fetch_array($hasil)){
?>	
<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $data['nama'] ?></td>
	<td><?php echo $data['nisn'] ?></td>
	<td><?php echo $data['kelas'] ?></td>
	<td><?php echo $data['sekolah'] ?></td>
	<td><?php echo $data['alamat'] ?></td>
	<td><?php echo $data['nohp'] ?></td>
	<td><?php echo $data['namaguru'] ?></td>
	<td><?php echo $data['nohpguru'] ?></td>
	<td><a class="btn bg-lime btn-xs" href="detail4.php?id=<?php echo $data['id'];?>">Detail</a></td>
</tr>
<?php
}
?>	
</tbody>	
</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- #END# Task Info -->
				
            </div>
			</div>
    </section>
	
	

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
   <!-- <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script> -->

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
	
	
	<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
	
	<script>
		$('.js-basic-example').DataTable({
        responsive: true
    });
	</script>
	
</body>

</html>