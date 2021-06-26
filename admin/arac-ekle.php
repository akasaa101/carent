<?php 
include 'header.php';
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
                Arac Ekleme
              </h4>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Araç Marka</label>
                <div class="col-sm-10">
                  <?php  

                  $arac_id=$araccek['marka_id']; 

                  $markasor=$db->prepare("select * from marka order by marka_id ASC");
                  $markasor->execute();

                  ?>

                  <select class="form-control" name="marka_id" required>
                    <?php 

                    while($markacek=$markasor->fetch(PDO::FETCH_ASSOC)) {

                     $marka_id=$markacek['marka_id'];

                     ?>

                     <option <?php if ($marka_id==$arac_id) { echo "selected='select'"; } ?> value="<?php echo $markacek['marka_id']; ?>"><?php echo $markacek['marka_ad']; ?></option>
                   <?php } ?>
                 </select>
               </div>
             </div>
             <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Araç Alış Ofisi</label>
                <div class="col-sm-10">
                  <?php  

                  $arac_id=$araccek['ofis_id']; 

                  $ofissor=$db->prepare("select * from ofis where ofis_tur=:ofis_tur order by ofis_id ASC");
                  $ofissor->execute(array(
                    'ofis_tur' => 1
                  ));

                  ?>

                  <select class="form-control" name="ofis_alisid" required>
                    <?php 

                    while($ofiscek=$ofissor->fetch(PDO::FETCH_ASSOC)) {

                     $ofis_id=$ofiscek['ofis_id'];

                     ?>

                     <option <?php if ($ofis_id==$arac_id) { echo "selected='select'"; } ?> value="<?php echo $ofiscek['ofis_id']; ?>"><?php echo $ofiscek['ofis_ad']; ?></option>
                   <?php } ?>
                 </select>
               </div>
             </div>
             <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Araç Teslim Ofisi</label>
                <div class="col-sm-10">
                  <?php  

                  $arac_id=$araccek['ofis_id']; 

                  $ofissor=$db->prepare("select * from ofis where ofis_tur=:ofis_tur order by ofis_id ASC");
                  $ofissor->execute(array(
                    'ofis_tur' => 2
                  ));

                  ?>

                  <select class="form-control" name="ofis_teslimid" required>
                    <?php 

                    while($ofiscek=$ofissor->fetch(PDO::FETCH_ASSOC)) {

                     $ofis_id=$ofiscek['ofis_id'];

                     ?>

                     <option <?php if ($ofis_id==$arac_id) { echo "selected='select'"; } ?> value="<?php echo $ofiscek['ofis_id']; ?>"><?php echo $ofiscek['ofis_ad']; ?></option>
                   <?php } ?>
                 </select>
               </div>
             </div>
             <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Sıra</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="input-1" name="arac_sira" placeholder="Araç Sıra Numarası" required>
              </div>
            </div>
             <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Adı</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input-1" name="arac_ad" placeholder="Araç Adı" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Açıklaması</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input-1" name="arac_description" placeholder="Araç Açıklaması (SEO)" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç için Anahtar Kelimeler</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input-1" name="arac_keywords" placeholder="Araç için Anahtar Kelimeler" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Fiyat</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="input-1" name="arac_fiyat" placeholder="Araç Fiyat" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç için Gereken Ehliyet</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input-1" name="arac_ehliyet" placeholder="B Sınıfı / Min. Sürücü Yaşı : 21 / Min. Ehliyet Yılı : 1" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Motor Gücü</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input-1" name="arac_motor" placeholder="Araç Motor Gücü" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Arac Gövde</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input-1" name="arac_govde" placeholder="Hashbag veya Sedan" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Arac Yakıt Tüketimi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input-1" name="arac_tuketim" placeholder="Yakıt Tüketimi" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Yıldız Sayısı</label>
              <div class="col-sm-10">
                <select class="form-control" name="arac_yildiz" required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Yakıt Türü</label>
              <div class="col-sm-10">
                <select class="form-control" name="arac_yakit" required>
                  <option value="2">Dizel</option>
                  <option value="3">Benzin</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Kaç Kişilik</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="input-1" name="arac_kisi" placeholder="Araç Kaç Kişilik" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç'ta Klima Varmı</label>
              <div class="col-sm-10">
                <select class="form-control" name="arac_klima" required>
                  <option value="1">Evet</option>
                  <option value="2">Hayır</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Vites Türü</label>
              <div class="col-sm-10">
                <select class="form-control" name="arac_vites" required>
                  <option value="1">Manuel</option>
                  <option value="2">Otomatik</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Araç Anasayfa'da Gözüksünmü</label>
              <div class="col-sm-10">
                <select class="form-control" name="arac_anasayfa" required>
                  <option value="1">Hayır</option>
                  <option value="2">Evet</option>
                </select>
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" name="aracekle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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