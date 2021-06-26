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
                <i class="fa fa-newspaper-o"></i>
                Sayfa Ekle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Sayfa Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="sayfa_ad" placeholder="Sayfa Adı" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Sayfa Açıklaması (SEO)</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="sayfa_description" placeholder="Sayfa Açıklaması (SEO)" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Sayfa için Anahtar Kelimeler</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="sayfa_keywords" placeholder="Sayfa için Anahtar Kelimeler" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Sayfa İçeriği</label>
                <div class="col-sm-10">
                  <textarea class="ckeditor" id="editör1" rows="4" placeholder="Sayfa İçeriği" name="sayfa_icerik" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Sayfa Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="sayfa_durum">
                    <option value="1">Aktif</option>
                    <option value="2">Pasif</option>
                  </select>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="sayfaekle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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