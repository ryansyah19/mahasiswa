<?php
	session_start();
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Mahasiswa</title>
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

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
		
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>
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
                <a class="navbar-brand" href="index.php">User - Mahasiswa</a>
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
                    <?php
						include "pages/examples/koneksi.php";
						$dir='data/';
						$acak=rand(1,100);
						@$id=$_SESSION['id'];
						@$nama_foto=$acak.$_FILES['foto']['name'];
						@$nama_tmp=$_FILES['foto']['tmp_name'];
						$upload_foto=$dir.$nama_foto;
						$upload=move_uploaded_file($nama_tmp,$upload_foto);
						$query2="SELECT * FROM data WHERE id='$id'";
						$cekdata = mysqli_query($koneksi,$query2);
						$cdata = mysqli_fetch_array($cekdata);
						//print_r($cdata);
						if(empty($cdata['urlfoto'])){
							echo "<img src='images/user.png' width='40' height='40'>";
						}
						else{
						 echo "<a href='".$cdata['urlfoto']."'><img src='".$cdata['urlfoto']."'width='100' height='100'> </a>";
						}
					?>
					<div style="color:white; font-size:20px; padding:40px 40px; display:inline-block;"><?php echo $_SESSION['username'];?></div>
                </div>
				
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
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
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
					<li class="active">
                        <a href="daftar_info.php">
                            <i class="material-icons">info</i>
                            <span>Daftar Info</span>
                        </a>
                    </li>
					<li class="active">
                        <a href="profil.php">
                            <i class="material-icons">stars</i>
                            <span>Profile</span>
                        </a>
                    </li>
					<li class="active">
                        <a href="login.php">
                            <i class="material-icons">settings</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018<a href="javascript:void(0);">  Mahasiswa</a>.
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
                            <div class="number">Daftar Info</div>
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
                            <h2>Daftar Info</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
								<?php
								include "pages/examples/koneksi.php";
								$query="SELECT * FROM info ORDER BY id DESC LIMIT 0 , 1";
								$hasil=mysqli_query($koneksi,$query);
								$jum=mysqli_num_rows($hasil);
								@$deskripsi=$_POST['deskripsi'];
								$data=mysqli_fetch_array($hasil);
								?>
									<div class="xx">	
										<div class="zz bg-red">
											<?php 
											if(empty ($data['deskripsi'])){
												echo "Deskripsi None";
												echo "<br><br><br>";
											}
											else{ 
											echo "Deskripsi : ".$data['deskripsi']."<br>";
											echo "<br><br>";
											}
											?>
												<a style="text-decoration:none; color:blue;" class="btn bg-brown waves-effect" href="detail3.php?id=<?php echo $data['id'];?>">Detail</a>
										</div>
											<?php
											$query2="SELECT * FROM info ORDER BY id DESC LIMIT 1 , 2";
											$hasil=mysqli_query($koneksi,$query2);
											$jum=mysqli_num_rows($hasil);
											@$deskripsi=$_POST['deskripsi'];
											$data=mysqli_fetch_array($hasil);
											?>
											
										<div class="zz bg-lime">
											<?php 
											if(empty ($data['deskripsi'])){
												echo "Deskripsi None";
												echo "<br><br><br>";
											}
											else{ 
											echo "Deskripsi : ".$data['deskripsi']."<br>";
											echo "<br><br>";
											}
											?>
												<a style="text-decoration:none; color:blue;" class="btn bg-brown waves-effect" href="detail3.php?id=<?php echo $data['id'];?>">Detail</a>
										</div>
											<?php
											$query3="SELECT * FROM info ORDER BY id DESC LIMIT 2 , 3";
											$hasil=mysqli_query($koneksi,$query3);
											$jum=mysqli_num_rows($hasil);
											@$deskripsi=$_POST['deskripsi'];
											$data=mysqli_fetch_array($hasil);
											?>
											
											<div class="zz bg-cyan">
												<?php 
												if(empty ($data['deskripsi'])){
													echo "Deskripsi None";
													echo "<br><br><br>";
												}
												else{ 
												echo "Deskripsi : ".$data['deskripsi']."<br>";
												echo "<br><br>";
												}
												?>
													<a  style="text-decoration:none; color:blue;" class="btn bg-brown waves-effect" href="detail3.php?id=<?php echo $data['id'];?>">Detail</a>
											</div>

											<?php
											$query4="SELECT * FROM info ORDER BY id DESC LIMIT 3 , 4";
											$hasil=mysqli_query($koneksi,$query4);
											$jum=mysqli_num_rows($hasil);
											@$deskripsi=$_POST['deskripsi'];
											$data=mysqli_fetch_array($hasil);
											?>
											
											<div class="zz bg-amber">
												<?php
												if(empty ($data['deskripsi'])){
													echo "Deskripsi None";
													echo "<br><br><br>";
												}
												else{ 
												echo "Deskripsi : ".$data['deskripsi']."<br>";
												echo "<br><br>";
												}
												?>
													<a style="text-decoration:none; color:blue;" class="btn bg-purple waves-effect" href="detail3.php?id=<?php echo $data['id'];?>">Detail</a>
											</div>

											<?php
											$query5="SELECT * FROM info ORDER BY id DESC LIMIT 4 , 5";
											$hasil=mysqli_query($koneksi,$query5);
											$jum=mysqli_num_rows($hasil);
											@$deskripsi=$_POST['deskripsi'];
											$data=mysqli_fetch_array($hasil);
											?>
											
											<div class="zz bg-pink">
												<?php
												if(empty ($data['deskripsi'])){
													echo "Deskripsi None";
													echo "<br><br><br>";
												}
												else{ 
												echo "Deskripsi : ".$data['deskripsi']."<br>";
												echo "<br><br>";
												}
												?>
													<a style="text-decoration:none; color:blue;" class="btn bg-purple waves-effect" href="detail3.php?id=<?php echo $data['id'];?>">Detail</a>
											</div>
											
											<?php
											$query6="SELECT * FROM info ORDER BY id DESC LIMIT 5 , 6";
											$hasil=mysqli_query($koneksi,$query6);
											$jum=mysqli_num_rows($hasil);
											@$deskripsi=$_POST['deskripsi'];
											$data=mysqli_fetch_array($hasil);
											?>
											
											<div class="zz bg-blue-grey">
												<?php 
												if(empty ($data['deskripsi'])){
													echo "Deskripsi None";
													echo "<br><br><br>";
												}
												else{
												echo "Deskripsi : ".$data['deskripsi']."<br>";
												echo "<br><br>";
												}
												?>
													<a style="text-decoration:none; color:blue;" class="btn bg-purple waves-effect" href="detail3.php?id=<?php echo $data['id'];?>">Detail</a>
											</div>
											
											<?php
											$query7="SELECT * FROM info ORDER BY id DESC LIMIT 6 , 7";
											$hasil=mysqli_query($koneksi,$query7);
											$jum=mysqli_num_rows($hasil);
											@$deskripsi=$_POST['deskripsi'];
											$data=mysqli_fetch_array($hasil);
											?>
											
											<div class="zz bg-teal">
												<?php 
												if(empty ($data['deskripsi'])){
													echo "Deskripsi None";
													echo "<br><br><br>";
												}
												else{
												echo "Deskripsi : ".$data['deskripsi']."<br>";
												echo "<br><br>";
												}
												?>
													<a style="text-decoration:none; color:blue;" class="btn bg-deep-orange waves-effect" href="detail3.php?id=<?php echo $data['id'];?>">Detail</a>
											</div>
											
											<?php
											$query8="SELECT * FROM info ORDER BY id DESC LIMIT 7 , 8";
											$hasil=mysqli_query($koneksi,$query8);
											$jum=mysqli_num_rows($hasil);
											@$deskripsi=$_POST['deskripsi'];
											$data=mysqli_fetch_array($hasil);
											?>
											
											<div class="zz bg-indigo">
												<?php 
												if(empty ($data['deskripsi'])){
													echo "Deskripsi None";
													echo "<br><br><br>";
												}
												else{
												echo "Deskripsi : ".$data['deskripsi']."<br>";
												echo "<br><br>";
												}
												?>
													<a style="text-decoration:none; color:blue;"  class="btn bg-deep-orange waves-effect" href="detail3.php?id=<?php echo $data['id'];?>">Detail</a>
											</div>
											
											<?php
											$query9="SELECT * FROM info ORDER BY id DESC LIMIT 8 , 9";
											$hasil=mysqli_query($koneksi,$query9);
											$jum=mysqli_num_rows($hasil);
											@$deskripsi=$_POST['deskripsi'];
											$data=mysqli_fetch_array($hasil);
											?>
											
											<div class="zz bg-orange">
												<?php 
												if(empty ($data['deskripsi'])){
													echo "Deskripsi None";
													echo "<br><br><br>";
												}
												else{
												echo "Deskripsi : ".$data['deskripsi']."<br>";
												echo "<br><br>";
												}
												?>
													<a style="text-decoration:none; color:blue;" class="btn bg-deep-orange waves-effect" href="detail3.php?id=<?php echo $data['id'];?>">Detail</a>
											</div>
					</div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section> 
	

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

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
	
	<style>
		.xx{
			width:100%;
			text-align:center;
		}  
		  
		.zz{
			width:30%;
			display:inline-block;
			background-color:red;
			margin-bottom: 2%;
			margin-right:2%;
			padding: 3%;
			text-decoration:none;
			font-size:17px;
		}
	</style>
	
</body>

</html>