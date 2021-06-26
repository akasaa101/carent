<?php 
include 'header.php';
$sayfasor=$db->prepare("SELECT * FROM sayfa where sayfa_id=:id");
$sayfasor->execute(array(
  'id' => $_GET['sayfa_id']
));
$sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC);
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
                <i class="fa fa-newspaper-o"></i>
                Sayfa Ekle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Sayfa Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="sayfa_ad" value="<?php echo $sayfacek['sayfa_ad'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Sayfa Açıklaması (SEO)</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="sayfa_description" value="<?php echo $sayfacek['sayfa_description'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Sayfa için Anahtar Kelimeler</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="sayfa_keywords" value="<?php echo $sayfacek['sayfa_keywords'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Sayfa İçeriği</label>
                <div class="col-sm-10">
                  <textarea class="ckeditor" id="editör1" rows="4" name="sayfa_icerik" required><?php echo $sayfacek['sayfa_icerik'] ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Sayfa Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="sayfa_durum">
                    <option value="1" <?php echo $sayfacek['sayfa_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                    <option value="2" <?php echo $sayfacek['sayfa_durum'] == '2' ? 'selected=""' : ''; ?>>Pasif</option>
                  </select>
                </div>
              </div>
              <input type="hidden" name="sayfa_id" value="<?php echo $sayfacek['sayfa_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="sayfaduzenle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Düzenle</button>
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