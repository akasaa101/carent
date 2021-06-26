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
                Mail Ayarları
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">SMTP - Host</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="smtp_host" value="<?php echo $ayarcek['smtp_host'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">SMTP - Port</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="smtp_port" value="<?php echo $ayarcek['smtp_port'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">SMTP - SSL</label>
                <div class="col-sm-10">
                  <select class="form-control" name="smtp_ssl">
                    <option value="1" <?php echo $vgcek['smtp_ssl'] == '1' ? 'selected=""' : ''; ?>>SSL</option>
                    <option value="2" <?php echo $vgcek['smtp_ssl'] == '2' ? 'selected=""' : ''; ?>>TLS</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">SMTP - Email Adresi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="smtp_mail" value="<?php echo $ayarcek['smtp_mail'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">SMTP - Şifre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="smtp_pass" value="<?php echo $ayarcek['smtp_pass'] ?>" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="smtpguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Guncelle</button>
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