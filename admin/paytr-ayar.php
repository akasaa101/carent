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
                PayTR Ayarları
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Paytr - Merchant İD</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="paytr_mid" value="<?php echo $ayarcek['paytr_mid'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Paytr - Merchant Key</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="paytr_mkey" value="<?php echo $ayarcek['paytr_mkey'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Paytr - Merchant Salt</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="paytr_msalt" value="<?php echo $ayarcek['paytr_msalt'] ?>" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="paytrguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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