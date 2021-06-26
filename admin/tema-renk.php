<?php 
include 'header.php';
$renksor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:id");
$renksor->execute(array(
  'id' => 0
));
$renkcek=$renksor->fetch(PDO::FETCH_ASSOC);
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
                Tema Renk Düzenle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Tema Renk </label>
                <div class="col-sm-10">
                  <input type="color" class="form-control" id="input-1" name="ayar_temarenk" value="<?php echo $renkcek['ayar_temarenk'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Tema Alt Renk</label>
                <div class="col-sm-10">
                  <input type="color" class="form-control" id="input-1" name="ayar_aciktemarenk" value="<?php echo $renkcek['ayar_aciktemarenk'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Tema Diğer Renk</label>
                <div class="col-sm-10">
                  <input type="color" class="form-control" id="input-1" name="ayar_kapalitemarenk" value="<?php echo $renkcek['ayar_kapalitemarenk'] ?>" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="renkduzenle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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