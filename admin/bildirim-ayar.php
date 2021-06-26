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
                Bildirim Ayarları
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Bildirimin Gideceği Telefon Numarası</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="netgsm_tel" value="<?php echo $ayarcek['netgsm_tel'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">İletişim Formu Bildirimi</label>
                <div class="col-sm-10">
                  <select class="form-control" name="b_if" required>
                    <option value="0" <?php echo $ayarcek['b_if'] == '0' ? 'selected=""' : ''; ?>>Pasif</option>
                    <option value="1" <?php echo $ayarcek['b_if'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">E-Bülten Bildirimi</label>
                <div class="col-sm-10">
                  <select class="form-control" name="b_eb" required>
                    <option value="0" <?php echo $ayarcek['b_eb'] == '0' ? 'selected=""' : ''; ?>>Pasif</option>
                    <option value="1" <?php echo $ayarcek['b_eb'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Randevu Bildirimi</label>
                <div class="col-sm-10">
                  <select class="form-control" name="b_r" required>
                    <option value="0" <?php echo $ayarcek['b_r'] == '0' ? 'selected=""' : ''; ?>>Pasif</option>
                    <option value="1" <?php echo $ayarcek['b_r'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                  </select>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="bildirimguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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