<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'pages/bootstrap.php';
//check if already logged in move to home page
if ($user -> is_logged_in()) {
	//header('Location: index.php'); exit();
}

//process login form if submitted
if (isset($_POST['submit'])) {
	if (!isset($_POST['username']))
		$error[] = "Please fill out all fields";
	if (!isset($_POST['password']))
		$error[] = "Please fill out all fields";

	$username = $_POST['username'];
	//if ( $user->isValidUsername($username)){
	if (!isset($_POST['password'])) {
		$error[] = 'A password must be entered';
	}
	$password = $_POST['password'];
	if ($user -> login($username, $password)) {

		//header('Location: index.php');
		if (isset($_SESSION['username'])) {
			$roles = $user -> get_roles($_SESSION['username']);
		} else {

		}
	} else {
		$error[] = 'Wrong username or password or your account has not been activated.';
	}
}//end if submit

//define page title
$title = 'Login';
?>
<html>
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta
	content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"
	name="viewport">

	<!-- Site Properities -->
	<meta name="generator" content="Visual Studio 2015">
	<title>xCrud Pro</title>
	<meta name="description" content="Stagb Admin Template">
	<meta name="keywords"
	content="html5, ,semantic,ui, library, framework, javascript,jquery,template,blog,stagb,template">
	<link href="vendor/semantic/dist/semantic.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160326193-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-160326193-1');
		</script>
</head>
<div class="container background-image-css">

	<!--<div class="ui container" style="padding-top: 10%">
		<div class="ui grid center aligned two column">
		
		</div>
	</div>-->
	
	
	<div class="ui two column doubling stackable grid" style="margin: 124px;">
	  <div class="column">        
				<div class="tablet six wide computer column">
					<div class="ui form login-form-logo" style="text-align:center;">
						<img class="logo-width" src="img/evaluar.png" style='width:200px;'>
						<div class="intro-txt-div col-sm-6 col-xs-12">
							
							
							<h3 style="color: #076D94">______________</h3>
							<h3>Sistema de evaluación y seguimiento <br>de programas de formación</h3>
							<img src="img/piefooter.png" style='width:500px;'>
	
						</div>
					</div>
				</div>
	  </div>
	  <div class="column" style="text-align: center;">
	    
	    	<div class="tablet six wide computer column">
					<div id="form1" class="ui form login-form" style="text-align:center;">

						<form role="form" method="post" action="" autocomplete="off">
							<h2 style="text-align: center">Acceso</h2>

							<!-- <p>
							<a href='./'>Register</a>
							</p> -->

				<?php
					//check for any errors
					if (isset($error)) {
						foreach ($error as $error) {
							echo '<p class="bg-danger" style="color:black;">' . $error . '</p>';
						}
					}
	
					if (isset($_GET['action'])) {
	
						//check the action
						switch ($_GET['action']) {
							case 'active' :
								echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
								break;
							case 'reset' :
								echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
								break;
							case 'resetAccount' :
								echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
								break;
						}
	
					}
				?>

				<?php
					if(!isset($_SESSION['username'])){
				?>
							
							<div class="form-group">Escriba su usuario y contraseña
								                    </div>
							<div class="form-group">
								<input type="text" name="username" id="username"
								class="form-control input-lg" placeholder="User Name" value="admin"
								value="<?php if (isset($error)) { echo htmlspecialchars($_POST['username'], ENT_QUOTES); } ?>"
								tabindex="1">
							</div>

							<div class="form-group">
								<input type="password" name="password" id="password" value="abc123"
								class="form-control input-lg" placeholder="Password"
								tabindex="3">
							</div>
														

				<?php
				}
				?>

							<div class="form-group">

				<?php
					if(isset($_SESSION['username'])){
				?>
					   <select class="form-control input-lg" id="selectRoleVal" name="selectRoleVal" style="margin-top: 9px;width: 100%;">
							<?php
							$roles = $user -> get_roles($_SESSION['username']);
							foreach ($roles as $val) {

								if ($_SESSION['role'] == $val['sys_roles_id']) {
									echo "<option selected value=" . $val['sys_roles_id'] . ">" . $val['roles_name'] . "</option>";
								} else {
									echo "<option value=" . $val['sys_roles_id'] . ">" . $val['roles_name'] . "</option>";
								}

							}
							?>
						</select>
				<?php
				}
				?>
							</div>
							<div class="form-group">
								<div class="col-xs-6 col-md-6">
									<?php
									if(isset($_SESSION['username'])){
									?>

										<input type="button"  onclick="backToLogin()" value="Volver hacia atrás"
										class="ui button backtologin" tabindex="5">
	
										<input type="button"  onclick="selectRole()" value="Acceder"
										class="ui button selectrole" tabindex="5">

									<?php
									}else{
									?>

									<input type="submit" name="submit" value="Ingresar"
									class="ui button signin" tabindex="5">
									<?php
									}
									?>
								</div>
							</div>

							<div class="form-group">
								<div class="col-xs-9 col-sm-9 col-md-9">
									<a href='#' class="forgot-pass">¿Perdiste la contraseña?</a>
								</div>
							</div>
						</form>
					</div>
					
                    
				</div>		
	  </div>	  
	</div>	
</div>




<script src="js/login.js"></script>
</html>