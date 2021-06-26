<?php 
include 'header.php';
$userssor=$db->prepare("SELECT * FROM iletisimformu where if_id=:id");
$userssor->execute(array(
  'id' => $_GET['if_id']
));
$formcek=$userssor->fetch(PDO::FETCH_ASSOC);
?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <?php 
      if ($_GET['sms']=="ok") { ?>
         <center><h2><font color="green">SMS gönderimi Başarılı</font></h2></center>
       <?php } ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="config/islem">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-user-circle-o"></i>
                İletişim Formu Duzenle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Ad ve Soyad</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" disabled id="input-1" name="if_ad" value="<?php echo $formcek['if_ad'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Telefon Numarası</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" disabled id="input-2" name="if_tel" value="<?php echo $formcek['if_tel'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" disabled id="input-3" name="if_mail" value="<?php echo $formcek['if_mail'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                  <textarea rows="4" class="form-control" id="basic-textarea" disabled=""><?php echo $formcek['if_mesaj'] ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="if_durum" required>
                  <option value="0" <?php echo $formcek['if_durum'] == '0' ? 'selected=""' : ''; ?>>Okunmadı</option>
                  <option value="1" <?php echo $formcek['if_durum'] == '1' ? 'selected=""' : ''; ?>>Okundu</option>
                </select>
                </div>
              </div>
              <input type="hidden" value="<?php echo $formcek['if_id'] ?>" name="if_id">
              <div class="form-footer">
                <button type="submit" name="iletisimformguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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
            <form method="post" action="config/sms">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Alakalı Telefon Numarasına SMS Gönder
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Telefon Numarası</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" disabled name="netgsmtelefon" value="<?php echo $formcek['if_tel'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Mesajınız</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" placeholder="Mesajınız" name="netgsmmesaj" required></textarea>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="netgsmmesajgonder" class="btn btn-success"><i class="fa fa-check-square-o"></i> Gönder</button>
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
            <form method="post" action="config/mail">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Alakalı Mail Adresine MAİL Gönder
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Mail Adresi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" disabled name="mailadres" value="<?php echo $formcek['if_mail'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Mail Başlık</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" required name="mailbaslik" placeholder="Mail Başlık">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Mesajınız</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" placeholder="Mesajınız" name="mailmesaj" required></textarea>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="mailmesajgonder" class="btn btn-success"><i class="fa fa-check-square-o"></i> Gönder</button>
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