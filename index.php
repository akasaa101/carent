<?php include 'Cache.php'; ?>
<?php 

include 'admin/config/db.php';

$sef=$_GET['arac_alisid'];

$seff=$_GET['arac_teslimid'];
if (isset($sef)) {
  header('location:listele/'.$sef.'/'.$seff);
}
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
	<title><?php echo $ayarcek['ayar_title'] ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="icon" href="<?php echo $ayarcek['ayar_favicon'] ?>" type="image/x-icon" />
	<meta name="content-language" content="tr" />
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>" />
	<meta name="description" content="<?php echo $ayarcek['ayar_title'] ?>" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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
  <div class="head-bg">
    <div class="header header-index">
      <div class="container">
        <div class="col-md-3">
          <div class="logo"><a href="index"><img src="<?php echo $ayarcek['ayar_logo'] ?>"></a></div>
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
          <div class="col-md-12">
            <div class="header-index-text">
              <h1><?php echo $ayarcek['ana_bir'] ?></h1>
              <p><?php echo $ayarcek['ana_iki'] ?></p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="header-search">
              <form action="" method="get">
                <div class="input-group">
                  <span class="flaticon-location"></span>
                  <select name="arac_alisid">
                    <?php 
                    $ofissor=$db->prepare("SELECT * FROM ofis where ofis_tur=:ofis_tur");
                    $ofissor->execute(array(
                      'ofis_tur' => 1
                    ));
                    while ($ofiscek=$ofissor->fetch(PDO::FETCH_ASSOC)) { ?>
                      <option value="<?php echo $ofiscek['ofis_id'] ?>"><?php echo $ofiscek['ofis_ad'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="input-group">
                  <span class="flaticon-location"></span>
                  <select name="arac_teslimid">
                    <?php 
                    $ofissor=$db->prepare("SELECT * FROM ofis where ofis_tur=:ofis_tur");
                    $ofissor->execute(array(
                      'ofis_tur' => 2
                    ));
                    while ($ofiscek=$ofissor->fetch(PDO::FETCH_ASSOC)) { ?>
                      <option value="<?php echo $ofiscek['ofis_id'] ?>"><?php echo $ofiscek['ofis_ad'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="input-group">
                  <span class="flaticon-calendar"></span>
                  <input type="text" name="" placeholder="Alış Tarihinizi Seçin" data-toggle="datepicker">
                </div>
                <div class="input-group">
                  <span class="flaticon-calendar"></span>
                  <input type="text" name="" placeholder="Teslim Tarihinizi Seçin" data-toggle="datepicker">
                </div>
                <input type="submit" value="ARAÇLARI LİSTELE">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-index-car-img"><img src="assets/images/header-index-car-img.png"></div>
    <div class="clear"></div>
    <div class="header-bottom-brands">
      <div class="container">
        <ul>
          <?php 
          $markaasor=$db->prepare("SELECT * FROM marka order by marka_id ASC");
          $markaasor->execute();
          while ($markaacek=$markaasor->fetch(PDO::FETCH_ASSOC)) { ?>
            <li><a href="marka/<?php echo $markaacek['marka_ad'] ?>"><img src="<?php echo $markaacek['marka_logo'] ?>"></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="index-why-us">
      <div class="container">
        <div class="index-why-us-title">
          <h2><span><?php echo $ayarcek['ana_neden'] ?></span></h2>
          <p>
            <?php echo $ayarcek['ana_nedenalt'] ?>
          </p>
        </div>
        <div class="col-md-4">
          <div class="index-why-us-item">
            <div class="img"><img src="assets/images/why-us-img-1.png"></div>
            <h4>TEK TUŞLA ARABANI SEÇ</h4>
            <p><?php echo $ayarcek['ana_nedenbir'] ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="index-why-us-item">
            <div class="img"><img src="assets/images/why-us-img-2.png"></div>
            <h4>ONLINE OLARAK ÖDEMENİ YAP</h4>
            <p><?php echo $ayarcek['ana_nedeniki'] ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="index-why-us-item">
            <div class="img"><img src="assets/images/why-us-img-3.png"></div>
            <h4>ARABAN SENİ BEKLESİN</h4>
            <p><?php echo $ayarcek['ana_nedenuc'] ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="customer-comments">
      <div class="container">
        <div class="col-md-5">
          <div class="customer-comments-img"><img src="assets/images/car-img-4.png"></div>
        </div>
        <div class="col-md-7">
          <h2 class="customer-comments-title"><span><?php echo $ayarcek['ana_musteri'] ?></span></h2>
          <div class="customer-comments-text">
            <?php echo $ayarcek['ana_musterialt'] ?>
          </div>
          <div class="customer-comments-desc">
            <?php echo $ayarcek['ana_musterialtiki'] ?>          
          </div>
          <div class="customer-comments-button">
            <a href="iletisim">ARAMIZA KATILIN</a>
          </div>
          <div class="customer-comments-joins-img"><img src="assets/images/customer-comments-joins-img.png"></div>
        </div>
      </div>
    </div>
    <div class="professional-solutions">
      <div class="container">
        <div class="professional-solutions-title">
          <h2><span><?php echo $ayarcek['ana_pro'] ?></span></h2>
          <p>
            <?php echo $ayarcek['ana_proalt'] ?>
          </p>
        </div>
        <div class="professional-solutions-left">
          <div class="col-md-4">
            <div class="professional-solutions-item">
              <span class="flaticon-support"></span>
              <strong>24 Saat Destek</strong>
              <p><?php echo $ayarcek['ana_probir'] ?> </p>
            </div>
            <div class="professional-solutions-item">
              <span class="flaticon-shield"></span>
              <strong>Araç ve Sürücü Sigortası</strong>
              <p><?php echo $ayarcek['ana_proiki'] ?> </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="professional-solutions-center-img">
            <img src="assets/images/professional-solutions-center-img.png">
          </div>
        </div>
        <div class="professional-solutions-right">
          <div class="col-md-4">
            <div class="professional-solutions-item">
              <span class="flaticon-star"></span>
              <strong>Kaliteli Araç Filosu</strong>
              <p><?php echo $ayarcek['ana_prouc'] ?> </p>
            </div>
            <div class="professional-solutions-item">
              <span class="flaticon-pay"></span>
              <strong>Ödeme Kolaylığı</strong>
              <p><?php echo $ayarcek['ana_prodort'] ?> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="select-cars">
      <div class="container">
        <div class="select-cars-title">
          <h2>Aracınızı seçerek <span>başlayın!</span></h2>
          <a href="araclar">ARAÇLARI LİSTELE</a>
        </div>
        <?php 
        $aracsor=$db->prepare("SELECT * FROM arac where arac_anasayfa=:arac_anasayfa order by arac_sira ASC");
        $aracsor->execute(array(
          'arac_anasayfa' => 2
        ));
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
<div class="dealerships-maps">
  <div class="container">
    <div class="dealerships-maps-title">
      <h2><span><?php echo $ayarcek['ana_siz'] ?></span></h2>
      <p>
        <?php echo $ayarcek['ana_sizalt'] ?>
      </p>
    </div>
    <div class="dealerships-maps-img"><img src="assets/images/dealerships-maps-img.png"></div>
  </div>
</div>
<?php 
include 'footer.php';
?>