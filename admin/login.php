<?php 

include 'config/db.php';

ob_start();
session_start();

// Giriş İşlemi
if (isset($_POST['user_login'])) {

	$username=$_POST['user_username'];
	$pass=md5($_POST['user_pass']);

	$usersor=$db->prepare("SELECT * FROM user where user_username=:user and user_pass=:pass and user_yetki=:yetki");
	$usersor->execute(array(
		'user' => $username,
		'pass' => $pass,
		'yetki' => 5
	));

	$say=$usersor->rowCount();

	if ($say==1) {


		$_SESSION['user_username']=$username;
		header("Location:index");

	} else {

		$durumno="Giriş İşlemi Başarısız.";

	}

}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="widTH=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="description" content="<?php echo $ayarcek['description'] ?>"/>
	<meta name="author" content="www.sosyalsistem.com/info@sosyalsistem.com"/>
	<title>Yönetim Paneli - Giriş Yap</title>
	<!-- /*CSS -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/app-style.css" rel="stylesheet"/>
	<!-- CSS*/ -->

</head>

<body class="bg-dark">
	<!-- /*GİRİS -->
	<div id="wrapper">
		<div class="card card-authentication1 mx-auto my-5">
			<div class="card-body">
				<div class="card-content p-2">
					<div class="card-title text-uppercase text-center py-3">GİRİŞ YAP</div>
					<form action="" method="post">
						<div class="form-group">
							<label for="exampleInputUsername" class="">KULLANICI ADI</label>
							<div class="position-relative has-icon-right">
								<input type="text" name="user_username" class="form-control input-shadow" placeholder="KULLANICI ADI">
								<div class="form-control-position">
									<i class="icon-user"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword" class="">ŞİFRE</label>
							<div class="position-relative has-icon-right">
								<input type="password" name="user_pass" class="form-control input-shadow" placeholder="ŞİFRE">
								<div class="form-control-position">
									<i class="icon-lock"></i>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-6">
								<div class="icheck-material-primary">
									<input type="checkbox" id="user-checkbox" checked="" />
									<label for="user-checkbox">Beni Hatırla</label>
								</div>
							</div>
						</div>
						<button type="submit" name="user_login" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">giriş yap</button>

					</form>
					<br>
					<center><h3><font color="red"><?php echo $durumno ?></font></h3></center>
		 		</div>
		 	</div>
		 </div>
		 <!-- GİRİS*/ -->
		 <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
		</div>

		<!-- /*JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- JS*/ -->

	</body>
	</html>
