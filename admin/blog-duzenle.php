<?php 
include 'header.php';
$blogsor=$db->prepare("SELECT * FROM blog where blog_id=:id");
$blogsor->execute(array(
  'id' => $_GET['blog_id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);
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
                Blog Resim Değiştirme
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yüklü Resim</label>
                <div class="col-sm-10">
                  <img width="150" src="../<?php echo $blogcek['blog_resim'] ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Yeni Resim</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" required="" name="blog_resim">
                </div>
              </div>
              <input type="hidden" name="blog_id" value="<?php echo $blogcek['blog_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="blogresimguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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
                <i class="fa fa-newspaper-o"></i>
                Blog Düzenle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Blog Sıra</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input-1" name="blog_sira" value="<?php echo $blogcek['blog_sira'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Blog Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="blog_ad" value="<?php echo $blogcek['blog_ad'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Blog Açıklaması (SEO)</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="blog_description" value="<?php echo $blogcek['blog_description'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Blog için Anahtar Kelimeler</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="blog_keywords" value="<?php echo $blogcek['blog_keywords'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Blog İçeriği</label>
                <div class="col-sm-10">
                  <textarea class="ckeditor" id="editör1" rows="4" name="blog_icerik" required><?php echo $blogcek['blog_icerik'] ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Blog Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="blog_durum">
                    <option value="1" <?php echo $blogcek['blog_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                    <option value="2" <?php echo $blogcek['blog_durum'] == '2' ? 'selected=""' : ''; ?>>Pasif</option>
                  </select>
                </div>
              </div>
              <input type="hidden" name="blog_id" value="<?php echo $blogcek['blog_id'] ?>">
              <div class="form-footer">
                <button type="submit" name="blogduzenle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Düzenle</button>
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