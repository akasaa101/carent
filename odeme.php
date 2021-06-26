<?php 
include 'Cache.php';
include 'admin/config/db.php';
$araccsor=$db->prepare("SELECT * FROM arac");
$araccsor->execute();
$say=$araccsor->rowCount();
include 'admin/config/fonksiyon.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:ayar_id");
$ayarsor->execute(array(
  'ayar_id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
$sef=$_GET['sef'];
$aasor=$db->prepare("SELECT * FROM arac where arac_id=:arac_id");
$aasor->execute(array(
  'arac_id' => $sef
));
$araccccek=$aasor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo $araccccek['arac_ad'] ?> - <?php echo $ayarcek['ayar_title'] ?></title>
  <base href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" href="<?php echo $ayarcek['ayar_favicon'] ?>" type="image/x-icon" />
  <meta name="content-language" content="tr" />
  <meta name="robots" content="index,follow" />
  <meta name="author" content="sektörel tema.,info@sektörel tema.net" />
  <meta name="keywords" content="<?php echo $araccccek['arac_keywords'] ?>" />
  <meta name="description" content="<?php echo $araccccek['arac_description'] ?>" />
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
            <h1 style="color: white;"><?php echo $araccccek['arac_ad'] ?></h1>
          </center>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="payment-list">
  <div class="payment-left-bars">
    <div class="payment-left-bars-content-title"><h3><span><?php echo $say ?></span>Araç Listeleniyor</h3></div>
    <div class="payment-left-bars-content">
      <?php 
      while ($aracccek=$araccsor->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="payment-left-bars-content-item">
          <div class="payment-left-bars-content-item-title">
            <h3><?php echo $aracccek['arac_ad'] ?></h3>
            <span><?php echo $aracccek['arac_ehliyet'] ?></span>
          </div>
          <div class="payment-left-bars-content-item-img"><img src="<?php echo $aracccek['arac_lresim'] ?>"></div>
          <div class="payment-left-bars-content-item-price">
            <h3><?php echo $aracccek['arac_fiyat'] ?> TL</h3>
            <span>Günlük Fiyat   [7-13] Gün</span>
          </div>
          <div class="payment-left-bars-content-item-button"><a href="odeme/<?php echo $aracccek['arac_id'] ?>">Kirala</a></div>
        </div>
      <?php } ?>
    </div>
  </div>
  <?php 
  $sef=$_GET['sef'];
  $asor=$db->prepare("SELECT * FROM arac where arac_id=:arac_id");
  $asor->execute(array(
    'arac_id' => $sef
  ));
  $araccek=$asor->fetch(PDO::FETCH_ASSOC);
  ?>
  <div class="payment-right-bars">
    <div class="payment-right-bars-content">
      <div class="col-md-6">
        <div class="payment-right-bars-content-img">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <?php if (isset($araccek['arac_resimbir'])) { ?>
  <div class="item active">
    <img src="<?php echo $araccek['arac_resimbir'] ?>" alt="Rent a Car">
  </div>
<?php } elseif (isset($araccek['arac_resimiki'])) { ?>
  <div class="item">
  <img src="<?php echo $araccek['arac_resimiki'] ?>" alt="Rent a Car">
</div>
<?php } elseif (isset($araccek['arac_resimuc'])) { ?>
  <div class="item">
  <img src="<?php echo $araccek['arac_resimuc'] ?>" alt="Rent a Car">
</div>
<?php } ?>
              </div>
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fas fa-arrow-left"></i>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        <div class="payment-right-bars-content-cars-properties">          <div><i class="flaticon-male"></i><span><?php echo $araccek['arac_kisi'] ?> Kişilik</span></div>          <div class="no-margin"><i class="flaticon-bag"></i><span>Bagaj 3</span></div>          <div><i class="flaticon-fuel"></i><span><?php if ($araccek['arac_yakit']==2) {            echo "Dizel";          } elseif ($araccek['arac_yakit']==3) {            echo "Benzin";          } ?></span></div>          <div class="no-margin"><i class="flaticon-car"></i><span>4 Kapılı</span></div>          <div><i class="flaticon-gearshift"></i><span><?php if ($araccek['arac_vites']==1) {            echo "Manuel";          } elseif ($araccek['arac_vites']==2) {            echo "Otomatik";          } ?></span></div>          <div class="no-margin"><i class="flaticon-airscrew"></i><span><?php if ($araccek['arac_klima']==1) {            echo "Klima Var";          } elseif ($araccek['arac_klima']==2) {            echo "Klima Yok";          } ?></span></div>        </div>
      </div>
      <div class="col-md-6">
        <div class="payment-right-bars-content-title">
          <h3><?php echo $araccek['arac_ad'] ?></h3>
          <span><?php echo $araccek['ehliyet'] ?></span>
        </div>
        <form action="randevu" method="POST">
          <div class="payment-right-bars-content-options">
            <?php 


            $ekstralar = $araccek['arac_ekstralar'];
            $ekstralar = explode(",", $ekstralar);


            foreach ($ekstralar as $v) {
              if ($v) {

             
              $eksor=$db->prepare("SELECT * FROM ekstra where ek_id=:ek_id");
              $eksor->execute(array(
                'ek_id' => $v
              ));
              $ekcek=$eksor->fetch(PDO::FETCH_ASSOC);
              ?>
              <label>
                <input name="randevu_ekstralar" value="<?php echo $v ?>" onclick="fiyatEkle(<?php echo $ekcek['ek_fiyat'] ?>, this);" type="checkbox">
                <span class="title"><?php echo $ekcek['ek_ad'] ?> <i class="fas fa-info"></i></span>
                <span class="price">+<?php echo $ekcek['ek_fiyat'] ?> TL</span>
                <span class="checkmark"></span>
              </label>

           <?php  }}
            ?>

          </div>
        </div>
        <div class="col-md-12">
          <div class="payment-right-bars-total-price">
            Kiralama Fiyatı (1 Gün): <span id="toplamfiyat"><?php echo $araccek['arac_fiyat'] ?> TL</span>
          </div>
        </div>
      </div>
      <input type="hidden" name="randevu_total" id="randevu_total" value="<?php echo $araccek['arac_fiyat']+$nagivasyon ?>">
      <div class="payment-user-information">
        <h3 class="payment-user-information-title">Kullanıcı Bilgilerinizi Giriniz</h3>
        <div class="payment-user-information-form">
          <div class="col-md-6">
            <div class="input-group"><input type="number" required name="randevu_tc" placeholder="T.C No"></div>
            <div class="input-group phone"><span>+90</span><input required type="number" name="randevu_tel" placeholder="Cep Telefonu"></div>
            <div class="input-group"><input type="email" required name="randevu_mail" placeholder="E-Mail"></div>
            <div class="input-group"><input type="text" onkeypress="return false;" autocomplete="off" data-toggle="datepicker" class="datepicker-input" required name="randevu_dogum" placeholder="Doğum Tarihi"></div>
            <div class="input-group"><input type="text" onkeypress="return false;" autocomplete="off" placeholder="Araç'ı kiralamak istediğiniz tarihi seçiniz" data-toggle="datepicker" required name="randevu_alistarih"></div>
          </div>
          <div class="col-md-6">
            <div class="input-group"><input type="text" required name="randevu_ad" placeholder="Ad Soyad"></div>
            <div class="input-group"><input type="text" required name="randevu_ulke" placeholder="Ülke"></div>
            <div class="input-group"><input type="text" required name="randevu_sehir" placeholder="Şehir"></div>
            <div class="input-group"><input type="text" required name="randevu_ilce" placeholder="İlçe"></div>
            <div class="input-group"><input type="text" data-toggle="datepicker" autocomplete="off" placeholder="Araç'ı teslim ediceğiniz tarihi seçiniz" class="datepicker-input" required name="randevu_teslimtarih" onkeypress="return false;"></div>
          </div>
        </div>
        <div class="payment-user-billing-information">
          <div class="payment-user-billing-information-title">Fatura Bilgilerinizi Giriniz</div>
          <div class="payment-user-billing-information-checkbox">
            <label><input type="radio" value="1" name="randevu_kk" onclick="openInput();"><span class="informationchecbox"></span>Bireysel</label>
            <label><input type="radio" value="2" name="randevu_kk" onclick="openInput();" id="kurumsal-check"><span class="informationchecbox"></span>Kurumsal</label>
          </div>
          <div class="payment-user-billing-information-textarea">		  		  <div class="input-group kurumsal-input"><input type="text"  name="randevu_kurumsalad" placeholder="Şirket Adı"></div>          <div class="input-group kurumsal-input"><input type="text"  name="randevu_kurumsalvergino" placeholder="Vergi NO"></div>					  <div class="input-group kurumsal-input"><input type="text"  name="randevu_kurumsalvergidairesi" placeholder="Vergi Dairesi"></div>
          <textarea name="randevu_adres" placeholder="Fatura Adresi"></textarea>
        </div>
      </div>
    </div>
    <div class="payment-buy-information">
      <h3 class="payment-buy-information-title">Ödeme Bilgileri</h3>
      <div class="payment-buy-information-content">
        <div class="payment-buy-information-content-text">
          <?php echo $ayarcek['randevu_bir'] ?>
        </div>
        <div class="payment-buy-company-information">
          <?php echo $ayarcek['randevu_iki'] ?>
        </div>
        <?php 
        $randevu_no="TR".rand(100000,9999999);
        ?>
        <input type="hidden" name="randevu_no" value="<?php echo $randevu_no ?>">
        <input type="hidden" name="arac_id" value="<?php echo $araccek['arad_id'] ?>">
        <input type="hidden" name="arac_fiyat" value="<?php echo $araccek['arac_fiyat'] ?>">
        <div class="payment-user-information">
          <div class="payment-user-billing-information">
            <div class="payment-user-billing-information-checkbox2">
              <label><input type="radio" value="1" required="" name="randevu_ordertur" ><span class="informationchecbox"></span>Kredi Kartı ile Ödeme</label>
              <label><input type="radio" value="2" required="" name="randevu_ordertur" ><span class="informationchecbox"></span>Ofiste Ödeme</label>
            </div>
          </div>
        </div>
        <div class="payment-buy-information-content-button">
          <input name="randevutamamla" type="submit" value="Rezervasyonu Tamamla">
        </div>
      </form>
    </div>
  </div>
</div>
</div>


<script>
  var fiyat = <?php echo $araccek['arac_fiyat'] ?>;

  function fiyatEkle(t,b) {

    if (b.checked == true) {
      fiyat= fiyat + t;
    } else {
      fiyat= fiyat - t;
    }

    document.getElementById('toplamfiyat').innerHTML = fiyat + " TL";
    document.getElementById('randevu_total').value = fiyat;
  }
</script>

<?php 
include 'footer.php';
?>