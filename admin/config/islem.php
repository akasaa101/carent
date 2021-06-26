<?php include 'Cache.php'; ?><?php 

ob_start();
session_start();
include 'fonksiyon.php';
include 'db.php';

//Admin Hesabinin guncellenmesi
if (isset($_POST['adminhesapguncelle'])) {
	
	$profilekaydet=$db->prepare("UPDATE user SET 

		user_name=:user_name,
		user_username=:user_username,
		user_mail=:user_mail
		WHERE user_id=1");

	$update=$profilekaydet->execute(array(

		'user_name' => $_POST['user_name'],
		'user_username' => $_POST['user_username'],
		'user_mail' => $_POST['user_mail']
	));

	if ($update) {
		header("Location:../hesabim?durum=ok");
	} else {

		header("Location:../hesabim?durum=no");
	}

}

//Admin Hesabinin sifre guncellenmesi
if (isset($_POST['adminpassguncelle'])) {
	if ($_POST['user_pass']==$_POST['user_pass2']) {
		$useryenipass=md5($_POST['user_pass']);
	} else {
		header('locotion:../hesabim?durum=sifreler-eslesmiyor');
	}
	$profilekaydet=$db->prepare("UPDATE user SET 
		user_pass=:user_pass
		WHERE user_id=1");
	$update=$profilekaydet->execute(array(
		'user_pass' => $useryenipass
	));

	if ($update) {
		header("Location:../hesabim?durum=ok");
	} else {

		header("Location:../hesabim?durum=no");
	}


}

//Admin Hesaplarinin guncellenmesi
if (isset($_POST['usersguncelle'])) {
	$user_id=$_POST['user_id'];
	$profilekaydet=$db->prepare("UPDATE user SET 

		user_name=:user_name,
		user_username=:user_username,
		user_durum=:user_durum,
		user_mail=:user_mail
		WHERE user_id={$_POST['user_id']}");

	$update=$profilekaydet->execute(array(

		'user_name' => $_POST['user_name'],
		'user_username' => $_POST['user_username'],
		'user_durum' => $_POST['user_durum'],
		'user_mail' => $_POST['user_mail']
	));

	if ($update) {
		header("Location:../users-duzenle?user_id=$user_id&durum=ok");
	} else {

		header("Location:../users-duzenle?user_id=$user_id&durum=no");
	}

}

//Admin Hesaplarinin sifre guncellenmesi
if (isset($_POST['userspassguncelle'])) {
	$user_id=$_POST['user_id'];
	if ($_POST['user_pass']==$_POST['user_pass2']) {
		$useryenipass=md5($_POST['user_pass']);
	} else {
		header('locotion:../hesabim?durum=sifreler-eslesmiyor');
	}
	$profilekaydet=$db->prepare("UPDATE user SET 
		user_pass=:user_pass
		WHERE user_id={$_POST['user_id']}");
	$update=$profilekaydet->execute(array(
		'user_pass' => $useryenipass
	));

	if ($update) {
		header("Location:../users-duzenle?user_id=$user_id&durum=ok");
	} else {

		header("Location:../users-duzenle?user_id=$user_id&durum=no");
	}


}
//Admin Hesaplarının Silinmesi
if ($_GET['userssil']=="ok") {
	$sil=$db->prepare("DELETE from user where user_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['user_id']
	));
	if ($kontrol) {
		header("Location:../users?sil=ok");
	} else {
		header("Location:../users?sil=no");
	}
}

//Admin Hesabi Ekle
if (isset($_POST['usersekle'])) {
	$user_pass=md5($_POST['user_pass']);

	$ayarekle=$db->prepare("INSERT INTO user SET
		user_name=:user_name,
		user_username=:user_username,
		user_mail=:user_mail,
		user_pass=:user_pass
		");
	$insert=$ayarekle->execute(array(
		'user_name' => $_POST['user_name'],
		'user_username' => $_POST['user_username'],
		'user_mail' => $_POST['user_mail'],
		'user_pass' => $user_pass
	));

	if ($insert) {
		header("Location:../users?durum=ok");
	} else {
		header("Location:../users?durum=no");
	}
}

//Ofis Ekle
if (isset($_POST['ofisekle'])) {

	$ayarekle=$db->prepare("INSERT INTO ofis SET
		ofis_ad=:ofis_ad,
		ofis_adres=:ofis_adres,
		ofis_tur=:ofis_tur
		");
	$insert=$ayarekle->execute(array(
		'ofis_ad' => $_POST['ofis_ad'],
		'ofis_adres' => $_POST['ofis_adres'],
		'ofis_tur' => $_POST['ofis_tur']
	));

	if ($insert) {
		header("Location:../ofis?durum=ok");
	} else {
		header("Location:../ofis?durum=no");
	}
}

//Ofis Silinmesi
if ($_GET['ofissil']=="ok") {
	$sil=$db->prepare("DELETE from ofis where ofis_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['ofis_id']
	));
	if ($kontrol) {
		header("Location:../ofis?sil=ok");
	} else {
		header("Location:../ofis?sil=no");
	}
}

//Ofis guncelle
if (isset($_POST['ofisguncelle'])) {
	$ofis_id=$_POST['ofis_id'];
	$profilekaydet=$db->prepare("UPDATE ofis SET 
		ofis_ad=:ofis_ad,
		ofis_adres=:ofis_adres,
		ofis_tur=:ofis_tur
		WHERE ofis_id={$_POST['ofis_id']}");

	$update=$profilekaydet->execute(array(
		'ofis_ad' => $_POST['ofis_ad'],
		'ofis_adres' => $_POST['ofis_adres'],
		'ofis_tur' => $_POST['ofis_tur']
	));

	if ($update) {
		header("Location:../ofis-duzenle?ofis_id=$ofis_id&durum=ok");
	} else {

		header("Location:../ofis-duzenle?ofis_id=$ofis_id&durum=no");
	}

}

//Marka Ekle
if (isset($_POST['markaekle'])) {

	$uploads_dir = '../../assets/images/marka';
	@$tmp_name = $_FILES['marka_logo']["tmp_name"];
	@$name = $_FILES['marka_logo']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$ayarekle=$db->prepare("INSERT INTO marka SET
		marka_ad=:marka_ad,
		marka_logo=:marka_logo
		");
	$insert=$ayarekle->execute(array(
		'marka_ad' => $_POST['marka_ad'],
		'marka_logo' => $refimgyol
	));

	if ($insert) {
		header("Location:../marka?durum=ok");
	} else {
		header("Location:../marka?durum=no");
	}
}

//Marka Silinmesi
if ($_GET['markasil']=="ok") {
	$sil=$db->prepare("DELETE from marka where marka_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['marka_id']
	));
	if ($kontrol) {
		header("Location:../marka?sil=ok");
	} else {
		header("Location:../marka?sil=no");
	}
}

//Marka Duzenle
if (isset($_POST['markaduzenle'])) {

	$uploads_dir = '../../assets/images/marka';
	@$tmp_name = $_FILES['marka_logo']["tmp_name"];
	@$name = $_FILES['marka_logo']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$marka_id=$_POST['marka_id'];

	$profilekaydet=$db->prepare("UPDATE marka SET 
		marka_ad=:marka_ad,
		marka_logo=:marka_logo
		WHERE marka_id={$_POST['marka_id']}");
	$update=$profilekaydet->execute(array(
		'marka_ad' => $_POST['marka_ad'],
		'marka_logo' => $refimgyol
	));

	if ($update) {
		header("Location:../marka-duzenle?marka_id=$marka_id&durum=ok");
	} else {

		header("Location:../marka-duzenle?marka_id=$marka_id&durum=no");
	}


}

//Arac Ekle
if (isset($_POST['aracekle'])) {
	$ayarekle=$db->prepare("INSERT INTO arac SET
		marka_id=:marka_id,
		ofis_alisid=:ofis_alisid,
		ofis_teslimid=:ofis_teslimid,
		arac_ad=:arac_ad,
		arac_fiyat=:arac_fiyat,
		arac_yildiz=:arac_yildiz,
		arac_yakit=:arac_yakit,
		arac_kisi=:arac_kisi,
		arac_klima=:arac_klima,
		arac_govde=:arac_govde,
		arac_motor=:arac_motor,
		arac_ehliyet=:arac_ehliyet,
		arac_vites=:arac_vites,
		arac_tuketim=:arac_tuketim,
		arac_sira=:arac_sira,
		arac_description=:arac_description,
		arac_keywords=:arac_keywords,
		arac_anasayfa=:arac_anasayfa
		");
	$insert=$ayarekle->execute(array(
		'marka_id' => $_POST['marka_id'],
		'ofis_alisid' => $_POST['ofis_alisid'],
		'ofis_teslimid' => $_POST['ofis_teslimid'],
		'arac_ad' => $_POST['arac_ad'],
		'arac_fiyat' => $_POST['arac_fiyat'],
		'arac_yildiz' => $_POST['arac_yildiz'],
		'arac_yakit' => $_POST['arac_yakit'],
		'arac_kisi' => $_POST['arac_kisi'],
		'arac_klima' => $_POST['arac_klima'],
		'arac_govde' => $_POST['arac_govde'],
		'arac_motor' => $_POST['arac_motor'],
		'arac_ehliyet' => $_POST['arac_ehliyet'],
		'arac_vites' => $_POST['arac_vites'],
		'arac_tuketim' => $_POST['arac_tuketim'],
		'arac_sira' => $_POST['arac_sira'],
		'arac_description' => $_POST['arac_description'],
		'arac_keywords' => $_POST['arac_keywords'],
		'arac_anasayfa' => $_POST['arac_anasayfa']
	));

	if ($insert) {
		header("Location:../arac?durum=ok");
	} else {
		header("Location:../arac?durum=no");
	}
}

//Arac Duzenle
if (isset($_POST['aracduzenle'])) {
	$arac_id=$_POST['arac_id'];

	$profilekaydet=$db->prepare("UPDATE arac SET 
		marka_id=:marka_id,
		ofis_alisid=:ofis_alisid,
		ofis_teslimid=:ofis_teslimid,
		arac_ad=:arac_ad,
		arac_fiyat=:arac_fiyat,
		arac_yildiz=:arac_yildiz,
		arac_yakit=:arac_yakit,
		arac_kisi=:arac_kisi,
		arac_klima=:arac_klima,
		arac_govde=:arac_govde,
		arac_motor=:arac_motor,
		arac_ehliyet=:arac_ehliyet,
		arac_vites=:arac_vites,
		arac_tuketim=:arac_tuketim,
		arac_sira=:arac_sira,
		arac_description=:arac_description,
		arac_keywords=:arac_keywords,
		arac_anasayfa=:arac_anasayfa
		WHERE arac_id={$_POST['arac_id']}");
	$update=$profilekaydet->execute(array(
		'marka_id' => $_POST['marka_id'],
		'ofis_alisid' => $_POST['ofis_alisid'],
		'ofis_teslimid' => $_POST['ofis_teslimid'],
		'arac_ad' => $_POST['arac_ad'],
		'arac_fiyat' => $_POST['arac_fiyat'],
		'arac_yildiz' => $_POST['arac_yildiz'],
		'arac_yakit' => $_POST['arac_yakit'],
		'arac_kisi' => $_POST['arac_kisi'],
		'arac_klima' => $_POST['arac_klima'],
		'arac_govde' => $_POST['arac_govde'],
		'arac_motor' => $_POST['arac_motor'],
		'arac_ehliyet' => $_POST['arac_ehliyet'],
		'arac_vites' => $_POST['arac_vites'],
		'arac_tuketim' => $_POST['arac_tuketim'],
		'arac_sira' => $_POST['arac_sira'],
		'arac_description' => $_POST['arac_description'],
		'arac_keywords' => $_POST['arac_keywords'],
		'arac_anasayfa' => $_POST['arac_anasayfa']
	));

	if ($update) {
		header("Location:../arac-duzenle?arac_id=$arac_id&durum=ok");
	} else {

		header("Location:../arac-duzenle?arac_id=$arac_id&durum=no");
	}


}

//Arac Resim Duzenle
if (isset($_POST['araclresimguncelle'])) {
	$uploads_dir = '../../assets/images/arac';
	@$tmp_name = $_FILES['arac_lresim']["tmp_name"];
	@$name = $_FILES['arac_lresim']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$arac_id=$_POST['arac_id'];

	$profilekaydet=$db->prepare("UPDATE arac SET 
		arac_lresim=:arac_lresim
		WHERE arac_id={$_POST['arac_id']}");
	$update=$profilekaydet->execute(array(
		'arac_lresim' => $refimgyol
	));

	if ($update) {
		header("Location:../arac-duzenle?arac_id=$arac_id&durum=ok");
	} else {

		header("Location:../arac-duzenle?arac_id=$arac_id&durum=no");
	}


}

//Arac Resim Duzenle
if (isset($_POST['aracresimbirguncelle'])) {
	$uploads_dir = '../../assets/images/arac';
	@$tmp_name = $_FILES['arac_resimbir']["tmp_name"];
	@$name = $_FILES['arac_resimbir']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$arac_id=$_POST['arac_id'];

	$profilekaydet=$db->prepare("UPDATE arac SET 
		arac_resimbir=:arac_resimbir
		WHERE arac_id={$_POST['arac_id']}");
	$update=$profilekaydet->execute(array(
		'arac_resimbir' => $refimgyol
	));

	if ($update) {
		header("Location:../arac-duzenle?arac_id=$arac_id&durum=ok");
	} else {

		header("Location:../arac-duzenle?arac_id=$arac_id&durum=no");
	}


}
//Arac Resim Duzenle
if (isset($_POST['aracresimikiguncelle'])) {
	$uploads_dir = '../../assets/images/arac';
	@$tmp_name = $_FILES['arac_resimiki']["tmp_name"];
	@$name = $_FILES['arac_resimiki']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$arac_id=$_POST['arac_id'];

	$profilekaydet=$db->prepare("UPDATE arac SET 
		arac_resimiki=:arac_resimiki
		WHERE arac_id={$_POST['arac_id']}");
	$update=$profilekaydet->execute(array(
		'arac_resimiki' => $refimgyol
	));

	if ($update) {
		header("Location:../arac-duzenle?arac_id=$arac_id&durum=ok");
	} else {

		header("Location:../arac-duzenle?arac_id=$arac_id&durum=no");
	}


}
//Arac Resim Duzenle
if (isset($_POST['aracresimucguncelle'])) {
	$uploads_dir = '../../assets/images/arac';
	@$tmp_name = $_FILES['arac_resimuc']["tmp_name"];
	@$name = $_FILES['arac_resimuc']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$arac_id=$_POST['arac_id'];

	$profilekaydet=$db->prepare("UPDATE arac SET 
		arac_resimuc=:arac_resimuc
		WHERE arac_id={$_POST['arac_id']}");
	$update=$profilekaydet->execute(array(
		'arac_resimuc' => $refimgyol
	));

	if ($update) {
		header("Location:../arac-duzenle?arac_id=$arac_id&durum=ok");
	} else {

		header("Location:../arac-duzenle?arac_id=$arac_id&durum=no");
	}


}

//Arac Silinmesi
if ($_GET['aracsil']=="ok") {
	$sil=$db->prepare("DELETE from arac where arac_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['arac_id']
	));
	if ($kontrol) {
		header("Location:../arac?sil=ok");
	} else {
		header("Location:../arac?sil=no");
	}
}

//Sayfa Ekle
if (isset($_POST['sayfaekle'])) {
	$sayfa_seourl=seo($_POST['sayfa_ad']);
	$ayarekle=$db->prepare("INSERT INTO sayfa SET
		sayfa_ad=:sayfa_ad,
		sayfa_icerik=:sayfa_icerik,
		sayfa_description=:sayfa_description,
		sayfa_keywords=:sayfa_keywords,
		sayfa_seourl=:sayfa_seourl,
		sayfa_durum=:sayfa_durum
		");
	$insert=$ayarekle->execute(array(
		'sayfa_ad' => $_POST['sayfa_ad'],
		'sayfa_icerik' => $_POST['sayfa_icerik'],
		'sayfa_description' => $_POST['sayfa_description'],
		'sayfa_keywords' => $_POST['sayfa_keywords'],
		'sayfa_seourl' => $sayfa_seourl,
		'sayfa_durum' => $_POST['sayfa_durum']
	));

	if ($insert) {
		header("Location:../sayfa?durum=ok");
	} else {
		header("Location:../sayfa?durum=no");
	}
}

//Ofis Silinmesi
if ($_GET['sayfasil']=="ok") {
	$sil=$db->prepare("DELETE from sayfa where sayfa_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['sayfa_id']
	));
	if ($kontrol) {
		header("Location:../sayfa?sil=ok");
	} else {
		header("Location:../sayfa?sil=no");
	}
}

//Ofis guncelle
if (isset($_POST['sayfaduzenle'])) {
	$sayfa_seourl=seo($_POST['sayfa_ad']);
	$sayfa_id=$_POST['sayfa_id'];
	$profilekaydet=$db->prepare("UPDATE sayfa SET 
		sayfa_ad=:sayfa_ad,
		sayfa_icerik=:sayfa_icerik,
		sayfa_description=:sayfa_description,
		sayfa_keywords=:sayfa_keywords,
		sayfa_seourl=:sayfa_seourl,
		sayfa_durum=:sayfa_durum
		WHERE sayfa_id={$_POST['sayfa_id']}");

	$update=$profilekaydet->execute(array(
		'sayfa_ad' => $_POST['sayfa_ad'],
		'sayfa_icerik' => $_POST['sayfa_icerik'],
		'sayfa_description' => $_POST['sayfa_description'],
		'sayfa_keywords' => $_POST['sayfa_keywords'],
		'sayfa_seourl' => $sayfa_seourl,
		'sayfa_durum' => $_POST['sayfa_durum']
	));

	if ($update) {
		header("Location:../sayfa-duzenle?sayfa_id=$sayfa_id&durum=ok");
	} else {

		header("Location:../sayfa-duzenle?sayfa_id=$sayfa_id&durum=no");
	}

}

//Randevu Silinmesi
if ($_GET['randevusil']=="ok") {
	$sil=$db->prepare("DELETE from randevu where randevu_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['randevu_id']
	));
	if ($kontrol) {
		header("Location:../randevu?sil=ok");
	} else {
		header("Location:../randevu?sil=no");
	}
}

//Ofis guncelle
if (isset($_POST['randevuguncelle'])) {
	$randevu_id=$_POST['randevu_id'];
	$profilekaydet=$db->prepare("UPDATE randevu SET 
		randevu_durum=:randevu_durum
		WHERE randevu_id={$_POST['randevu_id']}");

	$update=$profilekaydet->execute(array(
		'randevu_durum' => $_POST['randevu_durum']
	));

	if ($update) {
		header("Location:../randevu-duzenle?randevu_id=$randevu_id&durum=ok");
	} else {

		header("Location:../randevu-duzenle?randevu_id=$randevu_id&durum=no");
	}

}

//Ayar Logo Guncelle
if (isset($_POST['ayarlogoguncelle'])) {
	$uploads_dir = '../../assets/images/logo';
	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		ayar_logo=:ayar_logo
		WHERE ayar_id=0");
	$update=$profilekaydet->execute(array(
		'ayar_logo' => $refimgyol
	));

	if ($update) {
		header("Location:../genel-ayarlar?durum=ok");
	} else {
		header("Location:../genel-ayarlar?durum=no");
	}

}
//Ayar Favicon Guncelle
if (isset($_POST['ayarfaviconguncelle'])) {
	$uploads_dir = '../../assets/images/favicon';
	@$tmp_name = $_FILES['ayar_favicon']["tmp_name"];
	@$name = $_FILES['ayar_favicon']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		ayar_favicon=:ayar_favicon
		WHERE ayar_id=0");
	$update=$profilekaydet->execute(array(
		'ayar_favicon' => $refimgyol
	));

	if ($update) {
		header("Location:../genel-ayarlar?durum=ok");
	} else {
		header("Location:../genel-ayarlar?durum=no");
	}

}
//Genel ayar guncelle
if (isset($_POST['genelayarguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_bakim=:ayar_bakim,
		ayar_keywords=:ayar_keywords
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_bakim' => $_POST['ayar_bakim'],
		'ayar_keywords' => $_POST['ayar_keywords']
	));

	if ($update) {
		header("Location:../genel-ayarlar?durum=ok");
	} else {

		header("Location:../genel-ayarlar?durum=no");
	}

}
//NETGSM guncelle
if (isset($_POST['netgsmguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		netgsm_username=:netgsm_username,
		netgsm_baslik=:netgsm_baslik,
		netgsm_pass=:netgsm_pass
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'netgsm_username' => $_POST['netgsm_username'],
		'netgsm_baslik' => $_POST['netgsm_baslik'],
		'netgsm_pass' => $_POST['netgsm_pass']
	));

	if ($update) {
		header("Location:../netgsm-ayar?durum=ok");
	} else {

		header("Location:../netgsm-ayar?durum=no");
	}

}
//Paytr guncelle
if (isset($_POST['paytrguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		paytr_mid=:paytr_mid,
		paytr_mkey=:paytr_mkey,
		paytr_msalt=:paytr_msalt
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'paytr_mid' => $_POST['paytr_mid'],
		'paytr_mkey' => $_POST['paytr_mkey'],
		'paytr_msalt' => $_POST['paytr_msalt']
	));

	if ($update) {
		header("Location:../paytr-ayar?durum=ok");
	} else {

		header("Location:../paytr-ayar?durum=no");
	}

}
//Mail guncelle
if (isset($_POST['smtpguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		smtp_host=:smtp_host,
		smtp_port=:smtp_port,
		smtp_mail=:smtp_mail,
		smtp_ssl=:smtp_ssl,
		smtp_pass=:smtp_pass
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'smtp_host' => $_POST['smtp_host'],
		'smtp_port' => $_POST['smtp_port'],
		'smtp_mail' => $_POST['smtp_mail'],
		'smtp_ssl' => $_POST['smtp_ssl'],
		'smtp_pass' => $_POST['smtp_pass']
	));

	if ($update) {
		header("Location:../smtp-ayar?durum=ok");
	} else {

		header("Location:../smtp-ayar?durum=no");
	}

}
//İletisim ayar guncelle
if (isset($_POST['iletisimayarguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		ayar_tel=:ayar_tel,
		ayar_fax=:ayar_fax,
		ayar_mail=:ayar_mail,
		ayar_maps=:ayar_maps,
		ayar_calisma=:ayar_calisma,
		ayar_instagram=:ayar_instagram,
		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_youtube=:ayar_youtube
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_fax' => $_POST['ayar_fax'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_calisma' => $_POST['ayar_calisma'],
		'ayar_instagram' => $_POST['ayar_instagram'],
		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_youtube' => $_POST['ayar_youtube']
	));

	if ($update) {
		header("Location:../iletisim-ayar?durum=ok");
	} else {

		header("Location:../iletisim-ayar?durum=no");
	}

}
//Anasayfa ayar guncelle
if (isset($_POST['anasayfaguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		ana_bir=:ana_bir,
		ana_iki=:ana_iki,
		ana_neden=:ana_neden,
		ana_nedenalt=:ana_nedenalt,
		ana_nedenbir=:ana_nedenbir,
		ana_nedeniki=:ana_nedeniki,
		ana_nedenuc=:ana_nedenuc,
		ana_musteri=:ana_musteri,
		ana_musterialt=:ana_musterialt,
		ana_musterialtiki=:ana_musterialtiki,
		ana_pro=:ana_pro,
		ana_proalt=:ana_proalt,
		ana_probir=:ana_probir,
		ana_proiki=:ana_proiki,
		ana_prouc=:ana_prouc,
		ana_prodort=:ana_prodort,
		ana_siz=:ana_siz,
		ana_sizalt=:ana_sizalt
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'ana_bir' => $_POST['ana_bir'],
		'ana_iki' => $_POST['ana_iki'],
		'ana_neden' => $_POST['ana_neden'],
		'ana_nedenalt' => $_POST['ana_nedenalt'],
		'ana_nedenbir' => $_POST['ana_nedenbir'],
		'ana_nedeniki' => $_POST['ana_nedeniki'],
		'ana_nedenuc' => $_POST['ana_nedenuc'],
		'ana_musteri' => $_POST['ana_musteri'],
		'ana_musterialt' => $_POST['ana_musterialt'],
		'ana_musterialtiki' => $_POST['ana_musterialtiki'],
		'ana_pro' => $_POST['ana_pro'],
		'ana_proalt' => $_POST['ana_proalt'],
		'ana_probir' => $_POST['ana_probir'],
		'ana_proiki' => $_POST['ana_proiki'],
		'ana_prouc' => $_POST['ana_prouc'],
		'ana_prodort' => $_POST['ana_prodort'],
		'ana_siz' => $_POST['ana_siz'],
		'ana_sizalt' => $_POST['ana_sizalt']
	));

	if ($update) {
		header("Location:../ana-sayfa-ayar?durum=ok");
	} else {

		header("Location:../ana-sayfa-ayar?durum=no");
	}

}
//Footer ayar guncelle
if (isset($_POST['footerguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		footer_aciklama=:footer_aciklama,
		footer_altbir=:footer_altbir,
		footer_altiki=:footer_altiki
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'footer_aciklama' => $_POST['footer_aciklama'],
		'footer_altbir' => $_POST['footer_altbir'],
		'footer_altiki' => $_POST['footer_altiki']
	));

	if ($update) {
		header("Location:../footer-ayar?durum=ok");
	} else {

		header("Location:../footer-ayar?durum=no");
	}

}
//E-bulten ayar guncelle
if (isset($_POST['ebultenguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		e_bulten=:e_bulten,
		e_bultenalt=:e_bultenalt
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'e_bulten' => $_POST['e_bulten'],
		'e_bultenalt' => $_POST['e_bultenalt']
	));

	if ($update) {
		header("Location:../e-bulten-ayar?durum=ok");
	} else {

		header("Location:../e-bulten-ayar?durum=no");
	}

}

//İf guncelle
if (isset($_POST['iletisimformguncelle'])) {
	$if_id=$_POST['if_id'];
	$profilekaydet=$db->prepare("UPDATE iletisimformu SET 
		if_durum=:if_durum
		WHERE if_id={$_POST['if_id']}");

	$update=$profilekaydet->execute(array(
		'if_durum' => $_POST['if_durum']
	));

	if ($update) {
		header("Location:../iletisim-form-duzenle?if_id=$if_id&durum=ok");
	} else {

		header("Location:../iletisim-form-duzenle?if_id=$if_id&durum=no");
	}

}

//İf sil 
if ($_GET['iletisimformsil']=="ok") {
	$sil=$db->prepare("DELETE from iletisimformu where if_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['if_id']
	));
	if ($kontrol) {
		header("Location:../iletisim-form?sil=ok");
	} else {
		header("Location:../iletisim-form?sil=no");
	}
}

//Blog Ekle
if (isset($_POST['blogekle'])) {
	$uploads_dir = '../../assets/images/blog';
	@$tmp_name = $_FILES['blog_resim']["tmp_name"];
	@$name = $_FILES['blog_resim']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$blog_seourl=seo($_POST['blog_ad']);
	$ayarekle=$db->prepare("INSERT INTO blog SET
		blog_ad=:blog_ad,
		blog_icerik=:blog_icerik,
		blog_sira=:blog_sira,
		blog_seourl=:blog_seourl,
		blog_resim=:blog_resim,
		blog_description=:blog_description,
		blog_keywords=:blog_keywords,
		blog_date=:blog_date,
		blog_durum=:blog_durum
		");
	$insert=$ayarekle->execute(array(
		'blog_ad' => $_POST['blog_ad'],
		'blog_icerik' => $_POST['blog_icerik'],
		'blog_seourl' => $blog_seourl,
		'blog_sira' => $_POST['blog_sira'],
		'blog_resim' => $refimgyol,
		'blog_description' => $_POST['blog_description'],
		'blog_keywords' => $_POST['blog_keywords'],
		'blog_date' => date('d.m.Y H:i'),
		'blog_durum' => $_POST['blog_durum']
	));

	if ($insert) {
		header("Location:../blog?durum=ok");
	} else {
		header("Location:../blog?durum=no");
	}
}

//Blog silinmesi
if ($_GET['blogsil']=="ok") {
	$sil=$db->prepare("DELETE from blog where blog_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['blog_id']
	));
	if ($kontrol) {
		header("Location:../blog?sil=ok");
	} else {
		header("Location:../blog?sil=no");
	}
}

//Blog guncelle
if (isset($_POST['blogduzenle'])) {
	$sayfa_seourl=seo($_POST['blog_ad']);
	$blog_id=$_POST['blog_id'];
	$profilekaydet=$db->prepare("UPDATE blog SET 
		blog_ad=:blog_ad,
		blog_icerik=:blog_icerik,
		blog_sira=:blog_sira,
		blog_seourl=:blog_seourl,
		blog_description=:blog_description,
		blog_keywords=:blog_keywords,
		blog_durum=:blog_durum
		WHERE blog_id={$_POST['blog_id']}");

	$update=$profilekaydet->execute(array(
		'blog_ad' => $_POST['blog_ad'],
		'blog_icerik' => $_POST['blog_icerik'],
		'blog_seourl' => $blog_seourl,
		'blog_sira' => $_POST['blog_sira'],
		'blog_description' => $_POST['blog_description'],
		'blog_keywords' => $_POST['blog_keywords'],
		'blog_durum' => $_POST['blog_durum']
	));

	if ($update) {
		header("Location:../blog-duzenle?blog_id=$blog_id&durum=ok");
	} else {

		header("Location:../blog-duzenle?blog_id=$blog_id&durum=no");
	}

}

//Blog Resim guncelle
if (isset($_POST['blogresimguncelle'])) {
	$uploads_dir = '../../assets/images/blog';
	@$tmp_name = $_FILES['blog_resim']["tmp_name"];
	@$name = $_FILES['blog_resim']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$blog_id=$_POST['blog_id'];
	$profilekaydet=$db->prepare("UPDATE blog SET 
		blog_resim=:blog_resim
		WHERE blog_id={$_POST['blog_id']}");

	$update=$profilekaydet->execute(array(
		'blog_resim' => $refimgyol
	));

	if ($update) {
		header("Location:../blog-duzenle?blog_id=$blog_id&durum=ok");
	} else {

		header("Location:../blog-duzenle?blog_id=$blog_id&durum=no");
	}

}

//Renk guncelle
if (isset($_POST['renkduzenle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		ayar_temarenk=:ayar_temarenk,
		ayar_aciktemarenk=:ayar_aciktemarenk,
		ayar_kapalitemarenk=:ayar_kapalitemarenk
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'ayar_temarenk' => $_POST['ayar_temarenk'],
		'ayar_aciktemarenk' => $_POST['ayar_aciktemarenk'],
		'ayar_kapalitemarenk' => $_POST['ayar_kapalitemarenk']
	));

	if ($update) {
		header("Location:../tema-renk?durum=ok");
	} else {

		header("Location:../tema-renk?durum=no");
	}

}

//Blog Ekle
if (isset($_POST['aracozellikekle'])) {
	$ayarekle=$db->prepare("INSERT INTO ekstra SET
		ek_sira=:ek_sira,
		ek_ad=:ek_ad,
		ek_fiyat=:ek_fiyat,
		ek_durum=:ek_durum
		");
	$insert=$ayarekle->execute(array(
		'ek_sira' => $_POST['ek_sira'],
		'ek_ad' => $_POST['ek_ad'],
		'ek_fiyat' => $_POST['ek_fiyat'],
		'ek_durum' => $_POST['ek_durum']
	));

	if ($insert) {
		header("Location:../arac-ozellik?durum=ok");
	} else {
		header("Location:../arac-ozellik?durum=no");
	}
}

//Ekstra guncelle
if (isset($_POST['aracozellikguncelle'])) {
	$ek_id=$_POST['ek_id'];
	$profilekaydet=$db->prepare("UPDATE ekstra SET 
		ek_sira=:ek_sira,
		ek_ad=:ek_ad,
		ek_fiyat=:ek_fiyat,
		ek_durum=:ek_durum
		WHERE ek_id={$_POST['ek_id']}");

	$update=$profilekaydet->execute(array(
		'ek_sira' => $_POST['ek_sira'],
		'ek_ad' => $_POST['ek_ad'],
		'ek_fiyat' => $_POST['ek_fiyat'],
		'ek_durum' => $_POST['ek_durum']
	));

	if ($update) {
		header("Location:../arac-ozellik-duzenle?ek_id=$ek_id&durum=ok");
	} else {

		header("Location:../arac-ozellik-duzenle?ek_id=$ek_id&durum=no");
	}

}

//Blog silinmesi
if ($_GET['aracozelliksil']=="ok") {
	$sil=$db->prepare("DELETE from ekstra where ek_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['ek_id']
	));
	if ($kontrol) {
		header("Location:../arac-ozellik?sil=ok");
	} else {
		header("Location:../arac-ozellik?sil=no");
	}
}

//Foto Ekle
if (isset($_POST['fgekle'])) {
	$uploads_dir = '../../assets/images/fg';
	@$tmp_name = $_FILES['fg_link']["tmp_name"];
	@$name = $_FILES['fg_link']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$ayarekle=$db->prepare("INSERT INTO fg SET
		fg_sira=:fg_sira,
		fg_link=:fg_link,
		fg_durum=:fg_durum
		");
	$insert=$ayarekle->execute(array(
		'fg_sira' => $_POST['fg_sira'],
		'fg_link' => $refimgyol,
		'fg_durum' => $_POST['fg_durum']
	));

	if ($insert) {
		header("Location:../foto-galeri?durum=ok");
	} else {
		header("Location:../foto-galeri?durum=no");
	}
}

//Blog silinmesi
if ($_GET['fotogalerisil']=="ok") {
	$sil=$db->prepare("DELETE from fg where fg_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['fg_id']
	));
	if ($kontrol) {
		header("Location:../foto-galeri?sil=ok");
	} else {
		header("Location:../foto-galeri?sil=no");
	}
}

//Fg guncelle
if (isset($_POST['fgduzenle'])) {
	$fg_id=$_POST['fg_id'];
	$profilekaydet=$db->prepare("UPDATE fg SET 
		fg_sira=:fg_sira,
		fg_durum=:fg_durum
		WHERE fg_id={$_POST['fg_id']}");

	$update=$profilekaydet->execute(array(
		'fg_sira' => $_POST['fg_sira'],
		'fg_durum' => $_POST['fg_durum']
	));

	if ($update) {
		header("Location:../foto-galeri-duzenle?fg_id=$fg_id&durum=ok");
	} else {

		header("Location:../foto-galeri-duzenle?fg_id=$fg_id&durum=no");
	}

}

//Blog Resim guncelle
if (isset($_POST['fgresimguncelle'])) {
	$uploads_dir = '../../assets/images/fg';
	@$tmp_name = $_FILES['fg_link']["tmp_name"];
	@$name = $_FILES['fg_link']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$fg_id=$_POST['fg_id'];
	$profilekaydet=$db->prepare("UPDATE fg SET 
		fg_link=:fg_link
		WHERE fg_id={$_POST['fg_id']}");

	$update=$profilekaydet->execute(array(
		'fg_link' => $refimgyol
	));

	if ($update) {
		header("Location:../foto-galeri-duzenle?fg_id=$fg_id&durum=ok");
	} else {

		header("Location:../foto-galeri-duzenle?fg_id=$fg_id&durum=no");
	}

}

//Blog Resim guncelle
if (isset($_POST['bildirimguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		netgsm_tel=:netgsm_tel,
		b_if=:b_if,
		b_eb=:b_eb,
		b_r=:b_r
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'netgsm_tel' => $_POST['netgsm_tel'],
		'b_if' => $_POST['b_if'],
		'b_eb' => $_POST['b_eb'],
		'b_r' => $_POST['b_r']
	));

	if ($update) {
		header("Location:../bildirim-ayar?durum=ok");
	} else {

		header("Location:../bildirim-ayar?durum=no");
	}

}

//Foto Ekle
if (isset($_POST['vgekle'])) {
	$uploads_dir = '../../assets/images/vg';
	@$tmp_name = $_FILES['vg_link']["tmp_name"];
	@$name = $_FILES['vg_link']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$ayarekle=$db->prepare("INSERT INTO vg SET
		vg_sira=:vg_sira,
		vg_link=:vg_link,
		vg_durum=:vg_durum
		");
	$insert=$ayarekle->execute(array(
		'vg_sira' => $_POST['vg_sira'],
		'vg_link' => $refimgyol,
		'vg_durum' => $_POST['vg_durum']
	));

	if ($insert) {
		header("Location:../video-galeri?durum=ok");
	} else {
		header("Location:../video-galeri?durum=no");
	}
}

//Blog silinmesi
if ($_GET['videogalerisil']=="ok") {
	$sil=$db->prepare("DELETE from vg where vg_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['vg_id']
	));
	if ($kontrol) {
		header("Location:../video-galeri?sil=ok");
	} else {
		header("Location:../video-galeri?sil=no");
	}
}

//Fg guncelle
if (isset($_POST['vgduzenle'])) {
	$vg_id=$_POST['vg_id'];
	$profilekaydet=$db->prepare("UPDATE vg SET 
		vg_sira=:vg_sira,
		vg_durum=:vg_durum
		WHERE vg_id={$_POST['vg_id']}");

	$update=$profilekaydet->execute(array(
		'vg_sira' => $_POST['vg_sira'],
		'vg_durum' => $_POST['vg_durum']
	));

	if ($update) {
		header("Location:../video-galeri-duzenle?vg_id=$vg_id&durum=ok");
	} else {

		header("Location:../video-galeri-duzenle?vg_id=$vg_id&durum=no");
	}

}

//Blog Resim guncelle
if (isset($_POST['vgvideoguncelle'])) {
	$uploads_dir = '../../assets/images/vg';
	@$tmp_name = $_FILES['vg_link']["tmp_name"];
	@$name = $_FILES['vg_link']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$vg_id=$_POST['vg_id'];
	$profilekaydet=$db->prepare("UPDATE vg SET 
		vg_link=:vg_link
		WHERE vg_id={$_POST['vg_id']}");

	$update=$profilekaydet->execute(array(
		'vg_link' => $refimgyol
	));

	if ($update) {
		header("Location:../video-galeri-duzenle?vg_id=$vg_id&durum=ok");
	} else {

		header("Location:../video-galeri-duzenle?vg_id=$vg_id&durum=no");
	}

}

//Fg guncelle
if (isset($_POST['aracekstraguncelle'])) {

	$ekstralar = $_POST['arac_ekstralar'];

	$asd;

	foreach ($ekstralar as $c) {
		$asd = $asd . $c . ',';
	}


	$asd = rtrim($asd,',');

	$arac_id=$_POST['arac_id'];
	$profilekaydet=$db->prepare("UPDATE arac SET 
		arac_ekstralar=:arac_ekstralar
		WHERE arac_id={$_POST['arac_id']}");

	$update=$profilekaydet->execute(array(
		'arac_ekstralar' => $asd
	));

	if ($update) {
		header("Location:../arac-duzenle?arac_id=$arac_id&durum=ok");
	} else {

		header("Location:../arac-duzenle?arac_id=$arac_id&durum=no");
	}

}

//Fg guncelle
if (isset($_POST['randevuyaziguncelle'])) {
	$profilekaydet=$db->prepare("UPDATE ayarlar SET 
		randevu_bir=:randevu_bir,
		randevu_iki=:randevu_iki
		WHERE ayar_id=0");

	$update=$profilekaydet->execute(array(
		'randevu_bir' => $_POST['randevu_bir'],
		'randevu_iki' => $_POST['randevu_iki']
	));

	if ($update) {
		header("Location:../randevu-ayar?durum=ok");
	} else {

		header("Location:../randevu-ayar?durum=no");
	}

}

//E-bulten Ekle
if (isset($_POST['ebultenkayit'])) {
  $ayarekle=$db->prepare("INSERT INTO ebulten SET
    e_mail=:e_mail
    ");
  $insert=$ayarekle->execute(array(
    'e_mail' => $_POST['e_mail']
  ));

  if ($insert) {
    if ($ayarcek['b_eb']==1) {
      function sendsms($msg, $telno, $header, $username, $pass)
      {

        $startdate=date('d.m.Y H:i');
        $startdate=str_replace('.', '',$startdate );
        $startdate=str_replace(':', '',$startdate);
        $startdate=str_replace(' ', '',$startdate);

        $stopdate=date('d.m.Y H:i', strtotime('+1 day'));
        $stopdate=str_replace('.', '',$stopdate );
        $stopdate=str_replace(':', '',$stopdate);
        $stopdate=str_replace(' ', '',$stopdate);


        $url="http://api.netgsm.com.tr/bulkhttppost.asp?usercode=$username&password=$pass&gsmno=$telno&message=$msg&msgheader=$header&startdate=$startdate&stopdate=$stopdate";
  //echo $url;

        $ch = curl_init(); 
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false);
        $output=curl_exec($ch);
        curl_close($ch);
        return $output;

      }

      $mesaj='Yeni E-Bülten Kayıtı Mevcut. Tarih : '.date('d.m.Y H:i');
      $tel=$ayarcek['netgsm_tel']; 
      $baslik=$ayarcek['netgsm_baslik'];
      $username=$ayarcek['netgsm_username']; 
      $pass=$ayarcek['netgsm_pass'];


      $mesaj = html_entity_decode($mesaj, ENT_COMPAT, "UTF-8"); 
      $mesaj = rawurlencode($mesaj); 


      $baslik = html_entity_decode($baslik, ENT_COMPAT, "UTF-8"); 
      $baslik = rawurlencode($baslik); 


      echo sendsms($mesaj,$tel,$baslik,$username,$pass);
    }
    header('location:../../index?durum=ok');
  } else {
    header('location:../../index?durum=ok');
  }
}
?>