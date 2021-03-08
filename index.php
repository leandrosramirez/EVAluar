<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED);
require_once 'pages/bootstrap.php';

$code = "";
//echo $_SESSION['role'];
//check if already logged in move to home page
if( !$user->is_logged_in() ){
	 header('Location: login.php'); exit(); 
}

require_once ('pages/menu_admin.php');	

//echo $_SESSION['default_level2_name'];
if(isset($_SESSION['username'])){
	$roles = $user->get_roles($_SESSION['username']);
}

Xcrud_config::$theme = 'bootstrap4';//Set theme to bootstrap 4
if(isset($_GET['level1'])){
	$level1= $_GET['level1'];
}else{
	
	//echo $_SESSION['default_level_name'];	
	if(isset($_SESSION['default_level1_name'])){
		$level1 = $_SESSION['default_level1_name'];
	}else{
		$level1 = false;
	}
}

if(isset($_GET['level2'])){
	$level2 = $_GET['level2'];
}else{
	if(isset($_SESSION['default_level2_name'])){
	    $level2 = $_SESSION['default_level2_name'];
		
	}else{
		$level2 = false;
	}
}

if($level1 != false && $level2 != false){
	if (array_key_exists($level2, $pagedata[$level1])) {	
		extract($pagedata[$level1][$level2]);
	}else{
			$level1 = false;
			$level2 = false;
			$code = "Page Not found";	
	}
}

if($level1 == false || $level2 == false){
	
}else{
		
	$file = dirname(__file__) . '/pages/' . $filename;
	try{
	
		if(file_exists($file)){
			$code = file_get_contents($file);
		}else{
			$code = "File Not Found";
		}
		
	}catch(Exception $e){
		$code = "File Not Found";
		exit;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EVAluar | DNFC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <!--<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">-->
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link href="lib/xcrud/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="lib/xcrud/plugins/tabulator-master/dist/css/bootstrap/tabulator_bootstrap4.css" rel="stylesheet">
  <link href="lib/xcrud/plugins/timepicker/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
	
  <script src="lib/xcrud/plugins/jquery-3.5.1.min.js"></script> 
  <script src="lib/xcrud/plugins/jquery-migrate-3.0.0.min.js"></script>
  <script src="lib/xcrud/plugins/tabulator-master/dist/js/tabulator.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
   
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    

    SEARCH FORM 
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->
    <br />
    <li>
    	<div class="input-group input-group-sm">
					<select onchange="selectRole();" name="selectRoleVal" id="selectRoleVal" class="form-control select2 select2-hidden-accessible" style="height: 40px;
margin-left: 0px;">
					<?php
					//print_r($roles);
					foreach ( $roles as $val ) {
						
						if($_SESSION['role'] == $val['sys_roles_id']){
							echo "<option selected value=" . $val['sys_roles_id']  . ">" . $val['roles_name'] . "</option>";	
						}else{
							echo "<option value=" . $val['sys_roles_id']  . ">" . $val['roles_name'] . "</option>";	
						}								
					}
					?>
					</select>
					</div>
				</li>
      </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
          
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="img/escudo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="width: 2.1rem; opacity: .8; margin-top: 0px !important; box-shadow: none !important;">
      <span class="brand-text font-weight-light"> <img src="img/evaluar2.png" alt="EVAluar" class="" style="width: 150px"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> 
                        <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] ?>                   
                     <br>
                       <!-- <?php// echo "Usuario: " . $_SESSION['username']; ?> -->                      
         </a>
<br>

<button type="button" class="btn btn-block btn-info btn-sm"><a href="logout.php">Salir</a></button>

		 
		
		 
		<!-- <a href="index.html">
			Paginas del tema original
		</a> -->
		 
        </div>


       
       

      </div>

 
      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="menu-ul">
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0">Dashboard</h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>-->
    <!-- /.content-header -->

    <!-- Main content -->
        
    <section class="content">
						
			<?php 
			
			if($level1 == false || $level2 == false){
				
				if($code == ""){
					echo "tu no tienes permisos";
				}else{
					echo $code;
				}
				     
					//exit;
			}else{
				try{	
					if(file_exists($file)){
						include($file);
					}else{
						$code = "Archivo no encontrado";
						echo $code;
					}
					
				}catch(Exception $e){
					$code = "Archivo no encontrado";
					echo $code;
					
				}
			}
			
			?>
			
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
     <img src="img/pieevaluar.png" alt="Dirección Nacional de Formación Cultural" class="" style="height: 50px;">
    <div class="float-right d-none d-sm-inline-block">
      <img src="img/evaversion.png" alt="EVAluacion V1.0" class="" style="height: 50px;">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!--<script src="plugins/jquery/jquery.min.js"></script>-->
<!-- jQuery UI 1.11.4 -->


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!--<script src="lib/xcrud/plugins/bootstrap/js/bootstrap.min.js"
		type="text/javascript"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="js/main.js"></script><!--not a theme folder -->
</body>
</html>
