<?php 
include 'header.php';
$userssor=$db->prepare("SELECT * FROM user where user_id=:id");
$userssor->execute(array(
  'id' => $_GET['user_id']
));
$userscek=$userssor->fetch(PDO::FETCH_ASSOC);
?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="config/islem">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-user-circle-o"></i>
                Hesap Ayarları
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Ad ve Soyad</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="user_name" value="<?php echo $userscek['user_name'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Kullanıcı Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-2" name="user_username" value="<?php echo $userscek['user_username'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="input-3" name="user_mail" value="<?php echo $userscek['user_mail'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="user_durum" required>
                  <option value="1" <?php echo $userscek['user_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                  <option value="2" <?php echo $userscek['user_durum'] == '2' ? 'selected=""' : ''; ?>>Pasif</option>
                </select>
                </div>
              </div>
              <input type="hidden" value="<?php echo $userscek['user_id'] ?>" name="user_id">
              <div class="form-footer">
                <button type="submit" name="usersguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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
            <form method="post" action="config/islem">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-user-circle-o"></i>
                Şifre Değiştirme
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Şifre</label>
                <div class="col-sm-10">
                  <input type="password" placeholder="Yeni Şifre" class="form-control" name="user_pass" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Yeni Şifre Tekrarı</label>
                <div class="col-sm-10">
                  <input type="password" placeholder="Yeni Şifre Tekrarı" class="form-control" name="user_pass2" required>
                </div>
              </div>
              <input type="hidden" value="<?php echo $userscek['user_id'] ?>" name="user_id">
              <div class="form-footer">
                <button type="submit" name="userspassguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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