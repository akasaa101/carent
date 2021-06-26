<?php 
include 'Cache.php';
ob_start();
session_start();
include 'config/db.php';
include 'config/veri.php';
include 'config/fonksiyon.php';
$usersor=$db->prepare("SELECT * FROM user where user_username=:username");
$usersor->execute(array(
  'username' => $_SESSION['user_username']
));
$say=$usersor->rowCount();
$usercek=$usersor->fetch(PDO::FETCH_ASSOC);


if ($say==0) {
  header("Location:login");
  exit;
}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <!-- /*META -->
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <!-- META*/ -->
  <!-- /*TİTLE -->
  <title>Yönetim Paneli - Anasayfa</title>
  <!-- TİTLE*/ -->
  <!-- /*FAVİCON -->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- FAVİCON*/ -->
  <!-- /*CSS -->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <!-- CSS*/ -->
</head>
<body class="bg-dark">
 <div id="wrapper">
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" class="border-right border-light-3 shadow-none">
     <div class="brand-logo border-light-3">
      <a href="index">
       <h5 class="logo-text">YÖNETİM PANELİ</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
    <li>
      <a href="index" class="waves-effect">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Anasayfa</span>
      </a>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="fa fa-cogs"></i>
        <span>Site Ayarları</span>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="genel-ayarlar"><i class="zmdi zmdi-star-outline"></i> Genel Ayarlar</a></li>
        <li><a href="iletisim-ayar"><i class="zmdi zmdi-star-outline"></i> İletisim Ayarları  </a></li>
        <li><a href="netgsm-ayar"><i class="zmdi zmdi-star-outline"></i> NETGSM (SMS) Ayarları  </a></li>
        <li><a href="smtp-ayar"><i class="zmdi zmdi-star-outline"></i> Mail Ayarları  </a></li>
        <li><a href="paytr-ayar"><i class="zmdi zmdi-star-outline"></i> PayTR Ayarları  </a></li>
        <li><a href="bildirim-ayar"><i class="zmdi zmdi-star-outline"></i> Bildirim Ayarları  </a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="fa fa-cogs"></i>
        <span>Tema Ayarları</span>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="tema-renk"><i class="zmdi zmdi-star-outline"></i> Tema Renk Ayarları</a></li>
        <li><a href="ana-sayfa-ayar"><i class="zmdi zmdi-star-outline"></i> Ana Sayfa Ayarları</a></li>
        <li><a href="footer-ayar"><i class="zmdi zmdi-star-outline"></i> Footer Ayarları</a></li>
        <li><a href="e-bulten-ayar"><i class="zmdi zmdi-star-outline"></i> E-Bülten Ayarları</a></li>
        <li><a href="randevu-ayar"><i class="zmdi zmdi-star-outline"></i> Randevu Ayarları</a></li>
      </ul>
    </li>
    <li>
      <a href="iletisim-form" class="waves-effect">
        <i class="fa fa-phone"></i><span>İletişim Formları</span>
        <small class="badge float-right badge-info"><?php echo $toplamiletisimform ?></small>
      </a>
    </li>
    <li>
      <a href="e-bulten" class="waves-effect">
        <i class="fa fa-phone"></i><span>E-Bülten</span>
        <small class="badge float-right badge-info"><?php echo $toplamebulten ?></small>
      </a>
    </li>
    <li>
      <a href="users" class="waves-effect">
        <i class="fa fa-user"></i><span>Admin Yönetimi</span>
        <small class="badge float-right badge-info"><?php echo $toplamuser ?></small>
      </a>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-car"></i>
        <span>Araç Yönetimi</span>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="arac"><i class="zmdi zmdi-star-outline"></i> Araçlar</a></li>
        <li><a href="arac-ozellik"><i class="zmdi zmdi-star-outline"></i> Araç Özellikleri</a></li>
        <li><a href="marka"><i class="zmdi zmdi-star-outline"></i> Marka İşlemleri</a></li>
        <li><a href="ofis"><i class="zmdi zmdi-star-outline"></i> Ofis İşlemleri</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="fa fa-photo"></i>
        <span>Galeri Yönetimi</span>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="foto-galeri"><i class="zmdi zmdi-star-outline"></i> Foto Galeri</a></li>
        <li><a href="video-galeri"><i class="zmdi zmdi-star-outline"></i> Video Galeri</a></li>
      </ul>
    </li>
    <li>
      <a href="blog" class="waves-effect">
        <i class="fa fa-newspaper-o"></i><span>Blog Yönetimi</span>
        <small class="badge float-right badge-info"><?php echo $toplamblog ?></small>
      </a>
    </li>
    <li>
      <a href="sayfa" class="waves-effect">
        <i class="fa fa-newspaper-o"></i><span>Sayfa Yönetimi</span>
        <small class="badge float-right badge-info"><?php echo $toplamsayfa ?></small>
      </a>
    </li>
    <li>
      <a href="randevu" class="waves-effect">
        <i class="fa fa-check"></i><span>Randevu Yönetimi</span>
        <small class="badge float-right badge-info"><?php echo $toplamrandevu ?></small>
      </a>
    </li>
  </ul>
</div>
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top bg-dark border-bottom border-light-3">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon text-white"></i>
     </a>
   </li>
</ul>
<ul class="navbar-nav align-items-center right-nav-link">
<li class="nav-item">
  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
    <span class="user-profile"><img src="assets/images/user.png" class="img-circle" alt="user avatar"></span>
  </a>
  <ul class="dropdown-menu dropdown-menu-right">
   <li class="dropdown-item user-details">
    <a href="javaScript:void();">
     <div class="media">
       <div class="avatar"><img class="align-self-start mr-3" src="assets/images/user.png" alt="user avatar"></div>
       <div class="media-body">
        <h6 class="mt-2 user-title"><?php echo $usercek['user_name'] ?></h6>
        <p class="user-subtitle"><?php echo $usercek['user_mail'] ?></p>
      </div>
    </div>
  </a>
</li>
<li class="dropdown-divider"></li>
<li class="dropdown-item"><a href="hesabim"><font color="black"><i class="icon-user mr-2"></i> Hesap Ayarları</font></a></li>
<li class="dropdown-divider"></li>
<li class="dropdown-item"><a href="logout"><font color="black"><i class="icon-power mr-2"></i> Güvenli Çıkış</font></a></li>
</ul>
</li>
</ul>
</nav>
</header>