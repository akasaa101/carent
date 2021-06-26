<?php 
include 'header.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:ayar_id");
$ayarsor->execute(array(
  'ayar_id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" enctype="multipart/form-data" data-parsley-validate action="config/islem">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Ana Sayfa Ayarları
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Üst Kısım 1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_bir" value="<?php echo $ayarcek['ana_bir'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Üst Kısım 1 Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_iki" value="<?php echo $ayarcek['ana_iki'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Neden Biz Başlık</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_neden" value="<?php echo $ayarcek['ana_neden'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Neden Biz Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_nedenalt" value="<?php echo $ayarcek['ana_nedenalt'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Tek Tuşla Arabanı Seç Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_nedenbir" value="<?php echo $ayarcek['ana_nedenbir'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Online Olarak Ödeme Yap Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_nedeniki" value="<?php echo $ayarcek['ana_nedeniki'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Araban Seni Beklesin Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_nedenuc" value="<?php echo $ayarcek['ana_nedenuc'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Müşteri Memnuniyeti Başlık</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_musteri" value="<?php echo $ayarcek['ana_musteri'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Müşteri Memnuniyeti Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_musterialt" value="<?php echo $ayarcek['ana_musterialt'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Müşteri Memnuniyeti Açıklama-2</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_musterialtiki" value="<?php echo $ayarcek['ana_musterialtiki'] ?>" required>
                </div>
              </div>  
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Profesyonel Çözümler Başlık</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_pro" value="<?php echo $ayarcek['ana_pro'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Profesyonel Çözümler Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_proalt" value="<?php echo $ayarcek['ana_proalt'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Profesyonel Çözümler - 24 Saat Destek</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_probir" value="<?php echo $ayarcek['ana_probir'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Profesyonel Çözümler - Araç ve Sürücü Sigortası</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_proiki" value="<?php echo $ayarcek['ana_proiki'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Profesyonel Çözümler - Kaliteli Araç Filosu</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_prouc" value="<?php echo $ayarcek['ana_prouc'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Profesyonel Çözümler - Ödeme Kolaylığı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_prodort" value="<?php echo $ayarcek['ana_prodort'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Siz nerede isterseniz arabanız orada</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_siz" value="<?php echo $ayarcek['ana_siz'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Anasayfa - Siz nerede isterseniz arabanız orada Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ana_sizalt" value="<?php echo $ayarcek['ana_sizalt'] ?>" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="anasayfaguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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