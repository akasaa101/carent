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
                İletişim Ayarları
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Telefon Numarası</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Fax Numarası</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_fax" value="<?php echo $ayarcek['ayar_fax'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Harita Linki</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_maps" value="<?php echo $ayarcek['ayar_maps'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Çalışma Saatleri</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_calisma" value="<?php echo $ayarcek['ayar_calisma'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">İnstagram Kullanıcı Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Facebook Kullanıcı Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Twitter Kullanıcı Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Youtube Kullanıcı Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_youtube" value="<?php echo $ayarcek['ayar_youtube'] ?>" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="iletisimayarguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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