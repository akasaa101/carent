<?php 
include 'header.php';
$aracsor=$db->prepare("SELECT * FROM arac where arac_id=:id");
$aracsor->execute(array(
  'id' => $_GET['arac_id']
));
$araccek=$aracsor->fetch(PDO::FETCH_ASSOC);
?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="config/islem" enctype="multipart/form-data" data-parsley-validate>
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Araç Listeme Resmi
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Araç Resim</label>
                <div class="col-sm-10">
                  <img width="150" src="../<?php echo $araccek['arac_lresim'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Araç Resim</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" required="" name="arac_lresim" value="<?php echo $araccek[''] ?>">
                </div>
              </div>
              <input type="hidden" name="arac_id" value="<?php echo $araccek['arac_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="araclresimguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="config/islem" enctype="multipart/form-data" data-parsley-validate>
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Araç Detay Resim-1
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Araç Resim</label>
                <div class="col-sm-10">
                  <img width="150" src="../<?php echo $araccek['arac_resimbir'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Araç Resim</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" required="" name="arac_resimbir" value="<?php echo $araccek[''] ?>">
                </div>
              </div>
              <input type="hidden" name="arac_id" value="<?php echo $araccek['arac_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="aracresimbirguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="config/islem" enctype="multipart/form-data" data-parsley-validate>
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Araç Detay Resim-2
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Araç Resim</label>
                <div class="col-sm-10">
                  <img width="150" src="../<?php echo $araccek['arac_resimiki'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Araç Resim</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" required="" name="arac_resimiki" value="<?php echo $araccek[''] ?>">
                </div>
              </div>
              <input type="hidden" name="arac_id" value="<?php echo $araccek['arac_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="aracresimikiguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="config/islem" enctype="multipart/form-data" data-parsley-validate>
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Araç Detay Resim-3
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Araç Resim</label>
                <div class="col-sm-10">
                  <img width="150" src="../<?php echo $araccek['arac_resimuc'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Araç Resim</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" required="" name="arac_resimuc" value="<?php echo $araccek[''] ?>">
                </div>
              </div>
              <input type="hidden" name="arac_id" value="<?php echo $araccek['arac_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="aracresimucguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="config/islem" enctype="multipart/form-data" data-parsley-validate>
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Araç Ekstra Ekle
              </h4>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Araç Ekstraları</label>
                <div class="col-sm-10">
                    <?php  

                    $arac_id=$araccek['arac_id']; 

                    $eksor=$db->prepare("select * from ekstra order by ek_id ASC");
                    $eksor->execute();
                    while ($ekcek=$eksor->fetch(PDO::FETCH_ASSOC)) { ?>
                        <input type="checkbox" value="<?php echo $ekcek['ek_id'] ?>" name="arac_ekstralar[]" <?php 
                        $acsor=$db->prepare("SELECT * FROM arac where arac_id=:arac_id");
                        $acsor->execute(array(
                          'arac_id' => $_GET['arac_id']
                        ));
                        $accek=$acsor->fetch(PDO::FETCH_ASSOC);


                        $ekstralar = $accek['arac_ekstralar'];
                        $ekstralar = explode(",", $ekstralar);

                        if (in_array($ekcek['ek_id'], $ekstralar)) {
                          echo "checked";
                        }?>>
                        <?php echo $ekcek['ek_ad'] ?><br>

                    <?php } ?>

                </div>
              </div>
              <input type="hidden" name="arac_id" value="<?php echo $araccek['arac_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="aracekstraguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" enctype="multipart/form-data" data-parsley-validate action="config/islem">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Araç Düzenle
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
            <input type="number" class="form-control" id="input-1" name="arac_sira" value="<?php echo $araccek['arac_sira'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç Adı</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input-1" name="arac_ad" value="<?php echo $araccek['arac_ad'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç Açıklaması</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input-1" name="arac_description" value="<?php echo $araccek['arac_description'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç için Anahtar Kelimeler</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input-1" name="arac_keywords" value="<?php echo $araccek['arac_keywords'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç Fiyat</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="input-1" name="arac_fiyat" value="<?php echo $araccek['arac_fiyat'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç için Gereken Ehliyet</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input-1" name="arac_ehliyet" value="<?php echo $araccek['arac_ehliyet'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç Motor Gücü</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input-1" name="arac_motor" value="<?php echo $araccek['arac_motor'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Arac Gövde</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input-1" name="arac_govde" value="<?php echo $araccek['arac_govde'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Arac Yakıt Tüketimi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input-1" name="arac_tuketim" value="<?php echo $araccek['arac_tuketim'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç Yıldız Sayısı</label>
          <div class="col-sm-10">
            <select class="form-control" name="arac_yildiz" required>
              <option value="1" <?php echo $araccek['arac_yildiz'] == '1' ? 'selected=""' : ''; ?>>1</option>
              <option value="2" <?php echo $araccek['arac_yildiz'] == '2' ? 'selected=""' : ''; ?>>2</option>
              <option value="3" <?php echo $araccek['arac_yildiz'] == '3' ? 'selected=""' : ''; ?>>3</option>
              <option value="4" <?php echo $araccek['arac_yildiz'] == '4' ? 'selected=""' : ''; ?>>4</option>
              <option value="5" <?php echo $araccek['arac_yildiz'] == '5' ? 'selected=""' : ''; ?>>5</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç Yakıt Türü</label>
          <div class="col-sm-10">
            <select class="form-control" name="arac_yakit" required>
              <option value="2" <?php echo $araccek['arac_yakit'] == '2' ? 'selected=""' : ''; ?>>Dizel</option>
              <option value="3" <?php echo $araccek['arac_yakit'] == '3' ? 'selected=""' : ''; ?>>Benzin</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç Kaç Kişilik</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="input-1" name="arac_kisi" value="<?php echo $araccek['arac_kisi'] ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç'ta Klima Varmı</label>
          <div class="col-sm-10">
            <select class="form-control" name="arac_klima" required>
              <option value="1" <?php echo $araccek['arac_klima'] == '1' ? 'selected=""' : ''; ?>>Evet</option>
              <option value="2" <?php echo $araccek['arac_klima'] == '2' ? 'selected=""' : ''; ?>>Hayır</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç Vites Türü</label>
          <div class="col-sm-10">
            <select class="form-control" name="arac_vites" required>
              <option value="1" <?php echo $araccek['arac_vites'] == '1' ? 'selected=""' : ''; ?>>Manuel</option>
              <option value="2" <?php echo $araccek['arac_vites'] == '2' ? 'selected=""' : ''; ?>>Otomatik</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Araç Anasayfa'da Gözüksünmü</label>
          <div class="col-sm-10">
            <select class="form-control" name="arac_anasayfa" required>
              <option value="1" <?php echo $araccek['arac_anasayfa'] == '1' ? 'selected=""' : ''; ?>>Hayır</option>
              <option value="2" <?php echo $araccek['arac_anasayfa'] == '2' ? 'selected=""' : ''; ?>>Evet</option>
            </select>
          </div>
        </div>
        <input type="hidden" name="arac_id" value="<?php echo $araccek['arac_id'] ?>">
        <div class="form-footer">
          <button type="submit" name="aracduzenle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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