<?php 
include 'header.php';
$vgsor=$db->prepare("SELECT * FROM vg where vg_id=:vg_id");
$vgsor->execute(array(
  'vg_id' => $_GET['vg_id']
));
$vgcek=$vgsor->fetch(PDO::FETCH_ASSOC);
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
                Video Değiştirme
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Video</label>
                <div class="col-sm-10">
                  <video controls name="media" width="450" height="150">
                <source src="../<?php echo $vgcek['vg_link'] ?>" type="video/mp4"></video>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Video</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" required="" name="vg_link">
                </div>
              </div>
              <input type="hidden" name="vg_id" value="<?php echo $vgcek['vg_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="vgvideoguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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
                <label for="input-1" class="col-sm-2 col-form-label">Video Sıra</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="vg_sira" value="<?php echo $vgcek['vg_sira'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Video Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="vg_durum">
                    <option value="1" <?php echo $vgcek['vg_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                    <option value="2" <?php echo $vgcek['vg_durum'] == '2' ? 'selected=""' : ''; ?>>Pasif</option>
                  </select>
                </div>
              </div>
              <input type="hidden" name="vg_id" value="<?php echo $vgcek['vg_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="vgduzenle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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