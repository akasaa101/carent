<?php 
include 'header.php';
$markasor=$db->prepare("SELECT * FROM marka where marka_id=:id");
$markasor->execute(array(
  'id' => $_GET['marka_id']
));
$markacek=$markasor->fetch(PDO::FETCH_ASSOC);
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
                Marka Düzenle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Marka Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="marka_ad" value="<?php echo $markacek['marka_ad'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Logo</label>
                <div class="col-sm-10">
                  <img src="../<?php echo $markacek['marka_logo'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Yeni Marka Logo</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" name="marka_logo" placeholder="Marka Logo" required>
                </div>
              </div>
              <input type="hidden" name="marka_id" value="<?php echo $markacek['marka_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="markaduzenle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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