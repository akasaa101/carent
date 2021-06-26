<?php 
include 'admin/config/db.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:ayar_id");
$ayarsor->execute(array(
'ayar_id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
 ?>
<div class="footer">
  <div class="footer-top">
    <div class="footer-top-newsletter">
        <div class="footer-top-newsletter-title">
        <h2><?php echo $ayarcek['e_bulten'] ?></h2>
        <p>
          <?php echo $ayarcek['e_bultenalt'] ?>
        </p>
         </div>
         <div class="footer-top-newsletter-form">
           <form action="admin/config/islem" method="POST">
            <span></span>
             <input type="text" name="e_mail" required="" placeholder="E-Posta Adresiniz:">
             <input type="submit" name="ebultenkayit" value="ABONE OL">
           </form>
         </div>
      </div>
  <div class="footer-top-img"><img src="assets/images/footer-top-img.png"></div>
</div>
<div class="footer-center">
      <div class="container">
      <div class="col-md-4">
        <div class="footer-logo"><img src="assets/images/logo.png"></div>
        <div class="footer-center-text">
          <p><?php echo $ayarcek['footer_aciklama'] ?></p>
        </div>				  <div class="footer-top-social">        <ul>          <li><a target="_blank" href="https://instagram.com/<?php echo $ayarcek['ayar_instagram'] ?>"><i class="fab fa-instagram"></i></a></li>          <li><a target="_blank" href="https://facebook.com/<?php echo $ayarcek['ayar_facebook'] ?>"><i class="fab fa-facebook-f"></i></a></li>          <li><a target="_blank" href="https://twitter.com/<?php echo $ayarcek['ayar_twitter'] ?>"><i class="fab fa-twitter"></i></a></li>          <li><a target="_blank" href="https://youtube.com/<?php echo $ayarcek['ayar_youtube'] ?>"><i class="fab fa-youtube"></i></a></li>        </ul>      </div>
      </div>
      <div class="col-md-8">
        <div class="footer-center-menu">
          <ul>
            <h4>Markalar</h4>
            <?php 
            $markasor=$db->prepare("SELECT * FROM marka order by marka_id ASC");
            $markasor->execute();
            while ($markacek=$markasor->fetch(PDO::FETCH_ASSOC)) { ?>
            <li><a href="marka/<?php echo $markacek['marka_ad'] ?>"><?php echo $markacek['marka_ad'] ?></a></li>
            <?php } ?>
          </ul>
          <ul>
            <h4>Sayfalar</h4>
            <?php 
            $sayfasor=$db->prepare("SELECT * FROM sayfa order by sayfa_id ASC");
            $sayfasor->execute();
            while ($sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC)) { ?>
              <li><a href="sayfa/<?php echo $sayfacek['sayfa_seourl'] ?>"><?php echo $sayfacek['sayfa_ad'] ?></a></li>
            <?php } ?>
          </ul>
          <ul>
            <h4>OCTOCAR</h4>
            <li><a href="iletisim">İletişim