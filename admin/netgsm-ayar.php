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
                NetGSM (SMS) Ayarları
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">NetGSM - Kullanıcı Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="netgsm_username" value="<?php echo $ayarcek['netgsm_username'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">NetGSM - Başlık</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="netgsm_baslik" value="<?php echo $ayarcek['netgsm_baslik'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">NetGSM - Şifre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="netgsm_pass" value="<?php echo $ayarcek['netgsm_pass'] ?>" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="netgsmguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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