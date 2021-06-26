<?php 
include 'header.php';
$eksor=$db->prepare("SELECT * FROM ekstra where ek_id=:id");
$eksor->execute(array(
  'id' => $_GET['ek_id']
));
$ekcek=$eksor->fetch(PDO::FETCH_ASSOC);
echo $arac_resim=$ekcek['arac_resim'];
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
                Özellik Düzenle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Özellik Sıra</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input-1" name="ek_sira" value="<?php echo $ekcek['ek_sira'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Özellik Ad</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ek_ad" value="<?php echo $ekcek['ek_ad'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Özellik Fiyat</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input-1" name="ek_fiyat" value="<?php echo $ekcek['ek_fiyat'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Özellik Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="ek_durum" required>
                    <option value="1" <?php echo $ekcek['ek_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                    <option value="2" <?php echo $ekcek['ek_durum'] == '2' ? 'selected=""' : ''; ?>>Pasif</option>
                  </select>
                </div>
              </div>
              <input type="hidden" name="ek_id" value="<?php echo $ekcek['ek_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="aracozellikguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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