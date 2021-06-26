<?php 
include 'header.php';
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
                  <input type="text" class="form-control" id="input-1" name="user_name" placeholder="Ad ve Soyad" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Kullanıcı Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-2" name="user_username" placeholder="Kullanıcı Adı" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="input-3" name="user_mail" placeholder="E-mail" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Şifre</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="input-3" name="user_pass" placeholder="Şifre" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="usersekle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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