<?php 
include 'Cache.php';
include 'admin/config/db.php';
include 'admin/config/fonksiyon.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:ayar_id");
$ayarsor->execute(array(
  'ayar_id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
if ($ayarcek['ayar_bakim']==1) {
  header('location:bakim');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Araçlar - <?php echo $ayarcek['ayar_title'] ?></title>
  <base href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" href="<?php echo $ayarcek['ayar_favicon'] ?>" type="image/x-icon" />
  <meta name="content-language" content="tr" />
  <meta name="robots" content="index,follow" />
  <meta name="author" content="sektörel tema.,info@sektörel tema.net" />
  <meta name="keywords" content="araclar,arac,kiralik arac,rentacar" />
  <meta name="description" content="Araçlarımız" />
  <meta name="copyright" content="(c) 2018 Rent a car Tüm Hakları Saklıdır." />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
  integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/datapicker.css">
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/theme.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/datapicker.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Proxima+Nova" rel="stylesheet">
  <style>
    :root {
      --tema-rengi: <?php echo $ayarcek['ayar_temarenk'] ?>;
      /* TEMA RENGI */
      --tema-acik-rengi: <?php echo $ayarcek['ayar_aciktemarenk'] ?>;
      /* TEMA ACIK RENGI */
      --tema-kapali-rengi: <?php echo $ayarcek['ayar_kapalitemarenk'] ?>;
      /* TEMA KAPALI RENGI */
    }
  </style>
</head>

<body>
  <div class="header header-style-2">
    <div class="container">
      <div class="col-md-3">
        <div class="logo"><a href="#"><img src="<?php echo $ayarcek['ayar_logo'] ?>"></a></div>
      </div>
      <div class="col-md-9">
        <div class="menu">
          <div class="m-menu"><i class="fas fa-bars"></i></div>
          <ul>
            <li><a href="index">ANASAYFA</a></li>
            <li><a class="dropbtn" onclick="openDropdown('kurumsaldrop');">KURUMSAL</a>                
              <ul class="dropdown-r" id="kurumsaldrop">                  <?php                   
              $sayfasor=$db->prepare("SELECT * FROM sayfa where sayfa_durum=1");                  
              $sayfasor->execute();      
              $sayfasay=$sayfasor->rowCount();            
              while ($sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC)) { ?>
                <li><a href="sayfa/<?php echo $sayfacek['sayfa_seourl'] ?>"><?php echo $sayfacek['sayfa_ad'] ?></a></li>
              <?php } ?>
              <?php if ($sayfasay==0) { ?>
                <li>Aktif Sayfa Bulunamadı !!</li>
              <?php } ?>                
            </ul></li>
            <li><a href="araclar">ARAÇLAR</a></li>
            <li><a href="blogs">BLOG</a></li>
            <li><a class="dropbtn" onclick="openDropdown('galeridrop');">GALERİ</a>                
              <ul class="dropdown-r" id="galeridrop">
                <li><a href="foto-galeri">Foto Galeri</a></li>
                <li><a href="video-galeri">Video Galeri</a></li>
              </ul></li>
            </ul>
          </div>
          <div class="menu-join-us"><a href="iletisim">BİZE ULAŞIN</a></div>
        </div>

      </div>
      <div class="col-md-12">
        <div class="iletisim2">
          <center>
            <h1 style="color: white;">Araçlarımız</h1>
          </center>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
<div class="cars-list">
      <div class="cars-list-property">
        <a href="araclar" class="active">Tümünü Göster</a>
        <a href="arac-vites/2">Otomatik Vites</a>
        <a href="arac-vites/1">Manual Vites</a>
      </div>
      <div class="cars-list-property pull-right">
        <a href="araclar" class="active">Tümünü Göster</a>
        <a href="arac-benzin/2">Dizel</a>
        <a href="arac-benzin/3">Benzin</a>
      </div>
    </div>
<div class="select-cars">
  <div class="container">
    <?php 
    $aracsor=$db->prepare("SELECT * FROM arac order by arac_sira ASC");
    $aracsor->execute();
    $say=$aracsor->rowCount();
    while ($araccek=$aracsor->fetch(PDO::FETCH_ASSOC)) {
      $marka_id=$araccek['marka_id'];
      $markasor=$db->prepare("SELECT * FROM marka where marka_id=:marka_id");
      $markasor->execute(array(
        'marka_id' => $marka_id
      ));
      $markacek=$markasor->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="col-md-6">
        <div class="select-cars-item">
          <a href="odeme/<?php echo $araccek['arac_id'] ?>">
            <div class="select-cars-item-name">
              <div class="select-cars-item-name-img"><img src="<?php echo $markacek['marka_logo'] ?>"></div>
              <div class="name">
                <strong><?php echo $araccek['arac_ad'] ?></strong>
                <div class="stars">
                  <?php 
                  if ($araccek['arac_yildiz']==1) { ?>
                    <i class="flaticon-star-1"></i>
                  <?php } elseif ($araccek['arac_yildiz']==2) { ?>
                    <i class="flaticon-star-1"></i>
                    <i class="flaticon-star-1"></i>
                  <?php } elseif ($araccek['arac_yildiz']==3) { ?>
                   <i class="flaticon-star-1"></i>
                   <i class="flaticon-star-1"></i>
                   <i class="flaticon-star-1"></i>
                 <?php } elseif ($araccek['arac_yildiz']==4) { ?>
                  <i class="flaticon-star-1"></i>
                  <i class="flaticon-star-1"></i>
                  <i class="flaticon-star-1"></i>
                  <i class="flaticon-star-1"></i>
                <?php } elseif ($araccek['arac_yildiz']==5) { ?>
                 <i class="flaticon-star-1"></i>
                 <i class="flaticon-star-1"></i>
                 <i class="flaticon-star-1"></i>
                 <i class="flaticon-star-1"></i>
                 <i class="flaticon-star-1"></i>
               <?php } ?>
             </div>
           </div>
         </div>
         <div class="price">
          <strong><?php echo $araccek['arac_fiyat'] ?> TL</strong>
          <span>/günlük</span>
        </div>
        <div class="car-img"><img src="<?php echo $araccek['arac_lresim'] ?>"></div>
        <div class="car-property">
          <div><strong>Yakıt</strong><span><?php if ($araccek['arac_yakit']==2) {
            echo "Dizel";
          } elseif ($araccek['arac_yakit']==3) {
            echo "Benzin";
          } ?></span></div>
          <div><strong>Kişi Sayısı</strong><span><?php echo $araccek['arac_kisi'] ?> Kişilik</span></div>
          <div><strong>Klima</strong><span><?php if ($araccek['arac_klima']==1) {
            echo "Evet";
          } elseif ($araccek['arac_klima']==2) {
            echo "Yok";
          } ?></span></div>
          <div><strong>Vites</strong><span><?php if ($araccek['arac_vites']==1) {
           echo "Manuel";
         } elseif ($araccek['arac_vites']==2) {
          echo "Otomatik";
        } ?></span></div>
      </div>
    </a>
  </div>
</div>
<?php } ?>
</div>
</div>
<?php 
if ($say==0) { ?>
  <h3><center><p>Henüz bir aracımız bulunmamaktadır.</p></center></h3>
<?php } ?>
<?php 
include 'footer.php';
?>