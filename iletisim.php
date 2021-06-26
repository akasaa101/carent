<?php 
include 'Cache.php';
include 'admin/config/db.php';
// Ayar Verilerini Çekme İşlemi
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:id");
$ayarsor->execute(array(
  'id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
$netgsmusername=$ayarcek['netgsm_username'];
$netgsmpass=$ayarcek['netgsm_pass'];
//İletisim Formu Ekle
if (isset($_POST['iletisimformugonder'])) {
  $ayarekle=$db->prepare("INSERT INTO iletisimformu SET
    if_ad=:if_ad,
    if_tel=:if_tel,
    if_mail=:if_mail,
    if_mesaj=:if_mesaj
    ");
  $insert=$ayarekle->execute(array(
    'if_ad' => $_POST['if_ad'],
    'if_tel' => $_POST['if_tel'],
    'if_mail' => $_POST['if_mail'],
    'if_mesaj' => $_POST['if_mesaj']
  ));

  if ($insert) {
    if ($ayarcek['b_if']==1) {
      function sendsms($msg, $telno, $header, $username, $pass)
      {

        $startdate=date('d.m.Y H:i');
        $startdate=str_replace('.', '',$startdate );
        $startdate=str_replace(':', '',$startdate);
        $startdate=str_replace(' ', '',$startdate);

        $stopdate=date('d.m.Y H:i', strtotime('+1 day'));
        $stopdate=str_replace('.', '',$stopdate );
        $stopdate=str_replace(':', '',$stopdate);
        $stopdate=str_replace(' ', '',$stopdate);


        $url="http://api.netgsm.com.tr/bulkhttppost.asp?usercode=$username&password=$pass&gsmno=$telno&message=$msg&msgheader=$header&startdate=$startdate&stopdate=$stopdate";
  //echo $url;

        $ch = curl_init(); 
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false);
        $output=curl_exec($ch);
        curl_close($ch);
        return $output;

      }

      $mesaj='Yeni İletişim Talebi Mevcut. Tarih : '.date('d.m.Y H:i');
      $tel=$ayarcek['netgsm_tel']; 
      $baslik=$ayarcek['netgsm_baslik'];
      $username=$ayarcek['netgsm_username']; 
      $pass=$ayarcek['netgsm_pass'];


      $mesaj = html_entity_decode($mesaj, ENT_COMPAT, "UTF-8"); 
      $mesaj = rawurlencode($mesaj); 


      $baslik = html_entity_decode($baslik, ENT_COMPAT, "UTF-8"); 
      $baslik = rawurlencode($baslik); 


      echo sendsms($mesaj,$tel,$baslik,$username,$pass);
    }
    header("Location:iletisim?durum=ok");
  } else {
    header("Location:iletisim?durum=no");
  }
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
  <title>İletişim - <?php echo $ayarcek['ayar_title'] ?></title>
  <base href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" href="<?php echo $ayarcek['ayar_favicon'] ?>" type="image/x-icon" />
  <meta name="content-language" content="tr" />
  <meta name="robots" content="index,follow" />
  <meta name="author" content="sektörel tema.,info@sektörel tema.net" />
  <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>" />
  <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>" />
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
            <h1 style="color: white;">İletişim</h1>
            <h4 style="color: white;">İletişim Sayfası Üzerinden Yetkili Departmanlarımıza 7/24 Ulaşabilirsiniz.</h4>
            <?php 
            if ($_GET['durum']=="ok") { ?>
              <h3 style="color: green;">İletişim formu başarıyla alındı !</h3>
            <?php } elseif ($_GET['durum']=="no") { ?>
              <h3 style="color: black;">İletişim formu hata ile sonuçlandı !</h3>
            <?php  } ?>
          </center>
        </div>
      </div>
    </div>

  </div>
</div>

<section id="iletisim">

  <div class="container">

    <div class="row">
      <div class="iletisimTopContent" style="margin-top: 150px">
        <div class="iletisimTitle">
          <h2>BİZE ULAŞIN</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="iletisimAreaLeft">
          <div class="iletisimAreaLeftTitle">
            <h3>İletişim Bilgilerimiz</h3>
          </div>
          <div class="iletisimAreaLeftContent">
            <div class="iletisimAreaLeftContentText">
              <div class="row">
                <div class="col-md-4">
                  <span class="iletisimAreaLeftLeft">Telefon</span>
                </div>
                <div class="col-md-8">
                  <span class="iletisimAreaLeftRight"><?php echo $ayarcek['ayar_tel'] ?></span>
                </div>
              </div>
            </div>
            <div class="iletisimAreaLeftContentText">
              <div class="row">
                <div class="col-md-4">
                  <span class="iletisimAreaLeftLeft">Fax</span>
                </div>
                <div class="col-md-8">
                  <span class="iletisimAreaLeftRight"><?php echo $ayarcek['ayar_fax'] ?></span>
                </div>
              </div>
            </div>
            <div class="iletisimAreaLeftContentText">
              <div class="row">
                <div class="col-md-4">
                  <span class="iletisimAreaLeftLeft">Çalışma Saatleri</span>
                </div>
                <div class="col-md-8">
                  <span class="iletisimAreaLeftRight"><?php echo $ayarcek['ayar_calisma'] ?></span>
                </div>
              </div>
            </div>
            <div class="iletisimAreaLeftContentText">
              <div class="row">
                <div class="col-md-4">
                  <span class="iletisimAreaLeftLeft">E-posta</span>
                </div>
                <div class="col-md-8">
                  <span class="iletisimAreaLeftRight"><?php echo $ayarcek['ayar_mail'] ?></span>
                </div>
              </div>
            </div>
            <div class="iletisimAreaLeftContentText">
              <div class="row">
                <div class="col-md-4">
                  <span class="iletisimAreaLeftLeft">Adres</span>
                </div>
                <div class="col-md-8">
                  <span class="iletisimAreaLeftRight"><?php echo $ayarcek['ayar_adres'] ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="iletisimAreaRight">
          <div class="iletisimAreaRightTitle">
            <h3>Bize Mesaj Gönderin</h3>
          </div>
          <div class="iletisimAreaRightText">
            <p>Aşağıda ki formu kullanarak bize ulaşabilirsiniz.</p>
          </div>
          <form id="form" method="post" action="">
            <div class="iletisimAreaRightContentText">
              <div class="row">
                <div class="col-md-4">
                  <span class="iletisimAreaRightLeft">Adınız Soyadınız</span>
                </div>
                <div class="col-md-8"><input name="if_ad" required type="text"></div>
              </div>
            </div>
            <div class="iletisimAreaRightContentText">
              <div class="row">
                <div class="col-md-4">
                  <span class="iletisimAreaRightLeft">Telefon</span>
                </div>
                <div class="col-md-8"><input name="if_tel" required type="number"></div>
              </div>
            </div>
            <div class="iletisimAreaRightContentText">
              <div class="row">
                <div class="col-md-4">
                  <span class="iletisimAreaRightLeft">E-Posta</span>
                </div>
                <div class="col-md-8"><input name="if_mail" required type="email"></div>
              </div>
            </div>
            <div class="iletisimAreaRightContentText">
              <div class="row">
                <div class="col-md-4">
                  <span class="iletisimAreaRightLeft">Mesajınız</span>
                </div>
                <div class="col-md-8"><textarea required name="if_mesaj"></textarea></div>
              </div>
            </div>
            <div class="iletisimAreaRightContentText">
              <div class="row">
                <div class="col-md-12">
                  <div class="iletisimAreRightButton">
                    <button type="submit" name="iletisimformugonder" class="gonder"> GÖNDER</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="maps">
          <iframe
          src="<?php echo $ayarcek['ayar_maps'] ?>"
          width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
include 'footer.php';
?>