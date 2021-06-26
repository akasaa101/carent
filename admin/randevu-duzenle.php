<?php 
include 'header.php';
$randevusor=$db->prepare("SELECT * FROM randevu where randevu_id=:id");
$randevusor->execute(array(
  'id' => $_GET['randevu_id']
));
$randevucek=$randevusor->fetch(PDO::FETCH_ASSOC);
if ($randevucek['randevu_kk']==1) {
  $randevu_kk="Bireysel";
} elseif ($randevucek['randevu_kk']==2) {
  $randevu_kk="Kurumsal";
}
?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="config/islem">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Randevu Düzenleme
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Randevu NO</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_no" disabled value="<?php echo $randevucek['randevu_no'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Randevu Toplam Fiyatı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_total" disabled value="<?php echo $randevucek['randevu_total'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">TC Kimlik No</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_tc" disabled value="<?php echo $randevucek['randevu_tc'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Ad ve Soyad</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_ad" disabled value="<?php echo $randevucek['randevu_ad'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Telefon Numarası</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_tel" disabled value="<?php echo $randevucek['randevu_tel'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">E-mail Adresi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_mail" disabled value="<?php echo $randevucek['randevu_mail'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Adres Ülke</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_ulke" disabled value="<?php echo $randevucek['randevu_ulke'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Adres Şehir</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_sehir" disabled value="<?php echo $randevucek['randevu_sehir'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Adres İlçe</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_ilce" disabled value="<?php echo $randevucek['randevu_ilce'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Adres</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_adres" disabled value="<?php echo $randevucek['randevu_adres'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Doğum Tarihi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_dogum" disabled value="<?php echo $randevucek['randevu_dogum'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Bireysel/Kurumsal</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_kk" disabled value="<?php echo $randevu_kk ?>" required>
                </div>
              </div>
              <?php 
              if ($randevucek['randevu_kk']==2) { ?>
                <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Şirket Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_kurumsalad" disabled value="<?php echo $randevucek['randevu_kurumsalad'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Vergi NO</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_kurumsalvergino" disabled value="<?php echo $randevucek['randevu_kurumsalvergino'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Bireysel/Kurumsal</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_kurumsalvergidairesi" disabled value="<?php echo $randevucek['randevu_kurumsalvergidairesi'] ?>" required>
                </div>
              </div>
             <?php } ?>
             <?php 
             if ($randevucek['randevu_ordertur']==1) { ?>
               <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Ödeme Türü</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_odemetur" disabled value="PayTR - Kredi Kartı İle Ödeme" required>
                </div>
              </div>
            <?php } elseif ($randevucek['randevu_ordertur']==2) { ?>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Ödeme Türü</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="randevu_odemetur" disabled value="Ofiste Ödeme" required>
                </div>
              </div>
           <?php } ?>
             <?php 
              if ($randevucek['randevu_ordertur']==1) { ?>
                <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">PayTR - Ödeme Durumu</label>
                <div class="col-sm-10">
                  <select class="form-control" name="randev_orderdurum" disabled required>
                  <option value="1" <?php echo $randevucek['randev_orderdurum'] == '1' ? 'selected=""' : ''; ?>>Ödeme Bekleniyor</option>
                  <option value="2" <?php echo $randevucek['randev_orderdurum'] == '2' ? 'selected=""' : ''; ?>>Ödeme Alındı  </option>
                </select>
                </div>
              </div>
             <?php } ?>
             <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="randevu_durum" required>
                  <option value="1" <?php echo $randevucek['randevu_durum'] == '1' ? 'selected=""' : ''; ?>>Okunmadı</option>
                  <option value="2" <?php echo $randevucek['randevu_durum'] == '2' ? 'selected=""' : ''; ?>>Okundu  </option>
                </select>
                </div>
              </div>
              <input type="hidden" value="<?php echo $randevucek['randevu_id'] ?>" name="randevu_id">
              <div class="form-footer">
                <button type="submit" name="randevuguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php 
include 'footer.php';
?>