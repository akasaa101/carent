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
                Randevu Ayarları
              </h4>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Randevu Yazı - 1</label>
                <div class="col-sm-10">
                  <textarea class="ckeditor" id="editör1" rows="4" name="randevu_bir" required><?php echo $ayarcek['randevu_bir'] ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Randevu Yazı - 2</label>
                <div class="col-sm-10">
                  <textarea class="ckeditor" id="editör1" rows="4" name="randevu_iki" required><?php echo $ayarcek['randevu_iki'] ?></textarea>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="randevuyaziguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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