  <?php 
  include 'Cache.php';
  include 'admin/config/db.php';
  include 'header.php';
  $sef=$_GET['sef'];
  if (empty($sef)) {
    header('location:index');
  }
  ?>
</div>
<div class="select-cars">
  <div class="container">
    <?php 
    $arac_alisid=$_GET['arac_alisid'];
    $arac_teslimid=$_GET['arac_teslimid'];
    $aracsor=$db->prepare("SELECT * FROM arac where arac_yakit=:arac_yakit order by arac_sira ASC");
    $aracsor->execute(array(
      'arac_yakit' => $_GET['sef']
    ));
    $say=$aracsor->rowCount();
    while ($araccek=$aracsor->fetch(PDO::FETCH_ASSOC)) {
      $marka_id=$araccek['marka_id'];
      $markasor=$db->prepare("SELECT * FROM marka where marka_id=:marka_id");
      $markasor->execute(array(
        'marka_id' => $marka_id
      ));
      $markacek=$markasor->fetch(PDO::FETCH_ASSOC)
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
<?php if ($say==0) { ?>
  <div class="text-center">
    <h2>İsteğinize Özel Araba bulunamadı ! <br>
    7 saniye sonra Tüm Araçlarımıza yönlendiriliceksiniz.</h2>
  </div>
<?php
header('Refresh: 7; url=../araclar');
 } ?>
<?php 
include 'footer.php';
?>