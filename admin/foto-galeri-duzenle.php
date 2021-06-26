<?php 
include 'header.php';
$fgsor=$db->prepare("SELECT * FROM fg where fg_id=:fg_id");
$fgsor->execute(array(
  'fg_id' => $_GET['fg_id']
));
$fgcek=$fgsor->fetch(PDO::FETCH_ASSOC);
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
                Resim Değiştirme
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Resim</label>
                <div class="col-sm-10">
                  <img width="150" src="../<?php echo $fgcek['fg_link'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Resim</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" required="" name="fg_link">
                </div>
              </div>
              <input type="hidden" name="fg_id" value="<?php echo $fgcek['fg_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="fgresimguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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
                <label for="input-1" class="col-sm-2 col-form-label">Foto Sıra</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="fg_sira" value="<?php echo $fgcek['fg_sira'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Foto Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="fg_durum">
                    <option value="1" <?php echo $fgcek['fg_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                    <option value="2" <?php echo $fgcek['fg_durum'] == '2' ? 'selected=""' : ''; ?>>Pasif</option>
                  </select>
                </div>
              </div>
              <input type="hidden" name="fg_id" value="<?php echo $fgcek['fg_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="fgduzenle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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