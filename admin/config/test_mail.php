<?php
require("class.phpmailer.php");
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:ayar_id");
$ayarsor->execute(array(
  'ayar_id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
if (isset($_POST['mailmesajgonder'])) {
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = if ($ayarcek['smtp_ssl']==1) {
	echo "ssl";
} elseif ($ayarcek['smtp_ssl']==2) {
	echo "tls";
}; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
$mail->Host = $ayarcek['smtp_host']; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = $ayarcek['smtp_port']; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = $ayarcek['smtp_mail']; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = $ayarcek['smtp_pass']; // Mail adresimizin sifresi
$mail->SetFrom($ayarcek['smtp_mail'], $ayarcek['smtp_mail']); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress($_POST['mailadres']); // Mailin gönderileceği alıcı adres
$mail->Subject = $_POST['mailbaslik']; // Email konu başlığı
$mail->Body = $_POST['mailmesaj']; // Mailin içeriği
if(!$mail->Send()){
	echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
} else {
	header('location:../iletisim-form-duzenle?durum=ok');
}
}
?>