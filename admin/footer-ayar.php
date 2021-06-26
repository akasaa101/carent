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
                Footer Ayarları
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Footer Açıklama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="footer_aciklama" value="<?php echo $ayarcek['footer_aciklama'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Footer Alt Yazı-1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="footer_altbir" value="<?php echo $ayarcek['footer_altbir'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Footer Alt Yazı-2</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="footer_altiki" value="<?php echo $ayarcek['footer_altiki'] ?>" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="footerguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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