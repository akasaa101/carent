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
            <form method="post" action="config/islem" enctype="multipart/form-data" data-parsley-validate>
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Logo Değiştirme
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Logo</label>
                <div class="col-sm-10">
                  <img width="150" src="../<?php echo $ayarcek['ayar_logo'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Logo</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" required="" name="ayar_logo">
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="ayarlogoguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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
                Favicon Değiştirme
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Favicon</label>
                <div class="col-sm-10">
                  <img width="150" src="../<?php echo $ayarcek['ayar_favicon'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Favicon</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" required="" name="ayar_favicon">
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="ayarfaviconguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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
                Genel Ayarlar
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Site Başlık</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_title" value="<?php echo $ayarcek['ayar_title'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Site Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_description" value="<?php echo $ayarcek['ayar_description'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Site Kelimeler</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Bakım Modu</label>
                <div class="col-sm-10">
                  <select class="form-control" name="ayar_bakim">
                    <option value="0" <?php echo $ayarcek['ayar_bakim'] == '0' ? 'selected=""' : ''; ?>>Pasif</option>
                    <option value="1" <?php echo $ayarcek['ayar_bakim'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                  </select>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="genelayarguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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