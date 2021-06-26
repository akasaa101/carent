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
            <form method="post" action="config/islem" enctype="multipart/form-data" data-parsley-validate>
              <h4 class="form-header text-uppercase">
                <i class="fa fa-newspaper-o"></i>
                Blog Ekle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Blog Sıra</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input-1" name="blog_sira" placeholder="Blog Sırası" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Blog Ad</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="blog_ad" placeholder="Blog Adı" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Blog Açıklaması (SEO)</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="blog_description" placeholder="Blog Açıklaması (SEO)" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Blog için Anahtar Kelimeler</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="blog_keywords" placeholder="Blog için Anahtar Kelimeler" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Blog İçeriği</label>
                <div class="col-sm-10">
                  <textarea class="ckeditor" id="editör1" rows="4" placeholder="Blog İçeriği" name="blog_icerik" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Blog Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="blog_durum">
                    <option value="1">Aktif</option>
                    <option value="2">Pasif</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Blog Resim</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" name="blog_resim" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="blogekle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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