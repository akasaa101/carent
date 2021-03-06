-- Adminer 4.2.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `arac`;
CREATE TABLE `arac` (
  `arac_id` int(11) NOT NULL AUTO_INCREMENT,
  `arac_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `marka_id` int(11) NOT NULL,
  `ofis_alisid` int(11) NOT NULL,
  `arac_lresim` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_resimbir` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_resimiki` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_resimuc` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_yildiz` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `arac_fiyat` int(11) NOT NULL,
  `arac_yakit` int(11) NOT NULL,
  `arac_kisi` int(11) NOT NULL,
  `arac_klima` int(11) NOT NULL,
  `arac_vites` int(11) NOT NULL,
  `arac_date` datetime DEFAULT current_timestamp(),
  `arac_anasayfa` int(11) NOT NULL,
  `ofis_teslimid` int(11) NOT NULL,
  `arac_ehliyet` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_motor` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_govde` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_tuketim` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_sira` int(11) NOT NULL,
  `arac_description` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_ekstralar` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`arac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `arac` (`arac_id`, `arac_ad`, `marka_id`, `ofis_alisid`, `arac_lresim`, `arac_resimbir`, `arac_resimiki`, `arac_resimuc`, `arac_yildiz`, `arac_fiyat`, `arac_yakit`, `arac_kisi`, `arac_klima`, `arac_vites`, `arac_date`, `arac_anasayfa`, `ofis_teslimid`, `arac_ehliyet`, `arac_motor`, `arac_govde`, `arac_tuketim`, `arac_sira`, `arac_description`, `arac_keywords`, `arac_ekstralar`) VALUES
(2,	'Audi R8',	3,	3,	'assets/images/arac/24775240662567529487car-img-1.png',	'assets/images/arac/20147248823041829130car-img-1.png',	'',	'',	'5',	100,	2,	5,	1,	1,	'2019-04-17 15:00:57',	2,	4,	'Audi Audi Audi Audi Audi Audi',	'1000',	'1000',	'5.4',	1,	'Audi',	'Audi',	'2,3,4,5,6,7'),
(3,	'Bmw X5',	7,	3,	'assets/images/arac/21346214082597230388bmw.png',	'assets/images/arac/21189309352339621248bmw.png',	'',	'',	'5',	250,	2,	5,	1,	2,	'2019-04-18 20:51:29',	1,	4,	'B S??n??f?? / Min. S??r??c?? Ya???? : 21 / Min. Ehliyet Y??l?? : 1',	'1000',	'1000',	'5.4',	2,	'Bmw X5',	'Bmw X5',	'2,3,4,5,6,7'),
(4,	'Mercedes S 4.0',	4,	3,	'assets/images/arac/24981304612659427461mercedes.png',	'assets/images/arac/25951248083072126761mercedes.png',	'',	'',	'1',	300,	3,	5,	1,	1,	'2019-04-18 20:53:51',	2,	4,	'B S??n??f?? / Min. S??r??c?? Ya???? : 21 / Min. Ehliyet Y??l?? : 1',	'1000',	'1000',	'5.4',	3,	'Mercedes S 4.0',	'Mercedes S 4.0',	'2,3,4,5,6,7'),
(5,	'Porsche Panamera',	5,	3,	'assets/images/arac/26698304792740826361porsche.png',	'assets/images/arac/23209258862398223122porsche.png',	'',	'',	'5',	400,	3,	5,	1,	1,	'2019-04-18 20:55:13',	2,	4,	'B S??n??f?? / Min. S??r??c?? Ya???? : 21 / Min. Ehliyet Y??l?? : 1',	'1000',	'1000',	'5.4',	4,	'Porsche Panamera',	'Porsche Panamera',	'2,3,4,5,6,7'),
(6,	'Range Rover Sports',	6,	3,	'assets/images/arac/22782242162926831691rangerover.png',	'assets/images/arac/30637209822775730887rangerover.png',	'',	'',	'4',	500,	2,	5,	1,	1,	'2019-04-18 20:57:02',	2,	4,	'B S??n??f?? / Min. S??r??c?? Ya???? : 21 / Min. Ehliyet Y??l?? : 1',	'1000',	'1000',	'5.4',	5,	'Range Rover Sports',	'Range Rover Sports',	'2,3,4,5,6,7');

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_favicon` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fax` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_calisma` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` text COLLATE utf8_turkish_ci NOT NULL,
  `footer_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `footer_altbir` text COLLATE utf8_turkish_ci NOT NULL,
  `footer_altiki` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_bir` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_iki` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_araba` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_neden` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_nedenalt` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_nedenbir` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_nedeniki` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_nedenuc` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_musteri` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_musterialt` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_musterialtiki` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_musteriresim` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_pro` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_proalt` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_probir` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_proiki` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_prouc` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_prodort` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_siz` text COLLATE utf8_turkish_ci NOT NULL,
  `ana_sizalt` text COLLATE utf8_turkish_ci NOT NULL,
  `e_bulten` text COLLATE utf8_turkish_ci NOT NULL,
  `e_bultenalt` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_temarenk` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_aciktemarenk` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_kapalitemarenk` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `netgsm_username` text COLLATE utf8_turkish_ci NOT NULL,
  `netgsm_pass` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `netgsm_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `netgsm_tel` text COLLATE utf8_turkish_ci NOT NULL,
  `paytr_mid` text COLLATE utf8_turkish_ci NOT NULL,
  `paytr_mkey` text COLLATE utf8_turkish_ci NOT NULL,
  `paytr_msalt` text COLLATE utf8_turkish_ci NOT NULL,
  `b_eb` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `b_if` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `b_r` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `smtp_host` text COLLATE utf8_turkish_ci NOT NULL,
  `smtp_port` text COLLATE utf8_turkish_ci NOT NULL,
  `smtp_mail` text COLLATE utf8_turkish_ci NOT NULL,
  `smtp_pass` text COLLATE utf8_turkish_ci NOT NULL,
  `smtp_ssl` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_bir` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_iki` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ayar_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `ayarlar` (`ayar_id`, `ayar_logo`, `ayar_favicon`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_tel`, `ayar_adres`, `ayar_mail`, `ayar_maps`, `ayar_fax`, `ayar_calisma`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_youtube`, `footer_aciklama`, `footer_altbir`, `footer_altiki`, `ana_bir`, `ana_iki`, `ana_araba`, `ana_neden`, `ana_nedenalt`, `ana_nedenbir`, `ana_nedeniki`, `ana_nedenuc`, `ana_musteri`, `ana_musterialt`, `ana_musterialtiki`, `ana_musteriresim`, `ana_pro`, `ana_proalt`, `ana_probir`, `ana_proiki`, `ana_prouc`, `ana_prodort`, `ana_siz`, `ana_sizalt`, `e_bulten`, `e_bultenalt`, `ayar_temarenk`, `ayar_aciktemarenk`, `ayar_kapalitemarenk`, `netgsm_username`, `netgsm_pass`, `ayar_bakim`, `netgsm_baslik`, `netgsm_tel`, `paytr_mid`, `paytr_mkey`, `paytr_msalt`, `b_eb`, `b_if`, `b_r`, `smtp_host`, `smtp_port`, `smtp_mail`, `smtp_pass`, `smtp_ssl`, `randevu_bir`, `randevu_iki`) VALUES
(0,	'assets/images/logo/30768315262360431723logo.png',	'assets/images/favicon/21644279743070431123favicon.png',	'OCTOCAR - Rent a Car',	'OCTOCAR - Rent a Car',	'OCTOCAR - Rent a Car',	'0212 444 44 00',	'Ey??psultan Mah. G??nce Sk. No:44                     Kemer Apartman?? D:22 B Blok                   Ey??psultan - ??stanbul',	'info@creatic.me',	'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3187.0032979312587!2d35.285964114746946!3d36.98585447991075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288615ee1d4c15%3A0x3d3a00c7726ca168!2zQWRhbmEgxZ5ha2lycGHFn2EgSGF2YWxpbWFuxLE!5e0!3m2!1str!2str!4v1555541272580!5m2!1str!2str',	'0212 444 44 01',	'Pazartesi - Cumartesi 09:00 - 19:00',	'rentacar',	'rentacar',	'rentacar',	'rentacar',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum laoreet nisl. Cras erat eros, ullamcorper vitae velit in, semper interdum risus.',	'Size en uygun arac?? birlikte bulal??m. 0850 333 44 55 ya da iletisim@octocar.com',	'?? Octocar.com 2019. T??m Haklar?? Sakl??d??r',	'OCTOCAR ??LE YOLLAR DAHA KEY??FL??',	'??stanbul Sabiha G??k??en Havaliman??\'ndan ara?? kiralamak i??in Octo Rent A Car\'??n ara?? kiralama f??rsatlar??ndan yararlanabilirsiniz. Octo Rent A Car tecr??beli personeli, geni?? ara?? filosu ve i??-d???? hatlar olmak ??zere iki ofisiyle hizmetinizdedir.',	'',	'Neden bizi tercih etmelisiniz ?',	'Siz daha yere ayak basmadan arac??n??z bir telefonla sizi bekliyor olacakt??r.  ??ki dakikan??z?? ay??r??p i??lemleri hallettikten sonra arac??n??z kullanabilirsiniz. ??ptal etmek i??in bir alo demeniz yeterlidir.',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut placerat justo sed enim tristique tempor elementum',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut placerat justo sed enim tristique tempor elementum',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut placerat justo sed enim tristique tempor elementum',	'M????teri memnuniyeti ??ok ??nemli',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium bibendum leo at finibus. Ut rhoncus, quam a feugiat mollis, massa ex accumsan lectus, sit amet suscipit enim dolor non enim. Praesent laoreet erat lacus, nec malesuada magna pretium id. Aliquam pretium neque eu odio pulvinar eleifend.',	'*Octocar????? tercih eden 400+ m????terimize te??ekk??r ederiz.',	'',	'M????terilerimiz i??in profesyonel ????z??mlerimiz',	'Kaliteli personel ve ara?? filomuzla yurdun d??rt bir yan??nda sizlere hizmet vermek i??in bulunuyoruz.  Deneyimli personel, kaliteli ara??lar ile hizmetimiz yedi yirmi d??rt devam etmektedir.',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum laoreet nisl. Cras erat eros',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum laoreet nisl. Cras erat eros',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum laoreet nisl. Cras erat eros',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum laoreet nisl. Cras erat eros',	'Siz nerede isterseniz araban??z orada!',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum laoreet nisl.  Cras erat eros, ullamcorper vitae velit in, semper interdum risus.',	'Octocar E-B??lten???e Kay??t Olun!',	'Octocar e-b??lten???e kay??t olarak g??ncel kampanyalar??m??zdan ve yeniliklerimizden ilk sizin haberiniz olsun! Octocar ile yollar daha keyifli!',	'#5093ef',	'#56b7f6',	'#1541e8',	'08508407787',	'SEKTOREL41',	'0',	'08508407787',	'05318118008',	'101057',	'76XtPP4AOgxjaiZS',	'0GCAbry9JesUG5TS',	'1',	'1',	'1',	'smtp.yandex.com',	'25',	'sosyalsistem@yandex.com',	'kralbaba01',	'1',	'<p>Hemen &ouml;de y&ouml;ntemini se&ccedil;tiniz. &Ouml;deme mutlaka kendi ad??n??za kay??tl?? bir kredi kart?? ile al??nacakt??r. Rezervasyonunuzu kesinle??tirmek i&ccedil;in kredi kart?? bilgilerinizi girebilirsiniz. Provizyon miktar?? ara&ccedil; tesliminde al??nmaktad??r. Firmam??zda kiralama yapabilmeniz i&ccedil;in finansal analizinizin Demcar kiralama kriterlerine uygun olmas?? gerekmektedir. Finansal analiziniz <a href=\"#\">www.findeks.com</a> &uuml;zerinden ofislerimizde yetkililerimiz taraf??ndan yap??lmaktad??r.&nbsp;</p>\r\n',	'<p>(Bana &ouml;zel kampanya ve tekliflerden yararlanmak i&ccedil;in M.N.B. Oto Kiralama ve Nakliyat A.?? (Demcar)&nbsp;taraf??ndan g&ouml;nderilecek bilgilendirme mesajlar??n??, E-posta, Sms, MMS ve benzeri elektronik iletileri&nbsp; ve aramalar?? almay?? kabul ediyorum.)</p>\r\n');

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `blog_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `blog_durum` int(2) NOT NULL,
  `blog_sira` int(11) NOT NULL,
  `blog_seourl` text COLLATE utf8_turkish_ci NOT NULL,
  `blog_resim` text COLLATE utf8_turkish_ci NOT NULL,
  `blog_description` text COLLATE utf8_turkish_ci NOT NULL,
  `blog_keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `blog_date` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `blog` (`blog_id`, `blog_ad`, `blog_icerik`, `blog_durum`, `blog_sira`, `blog_seourl`, `blog_resim`, `blog_description`, `blog_keywords`, `blog_date`) VALUES
(3,	'Hangisi daha avantajl??: Dizel mi, benzinli mi?',	'<h2>Hangisi daha avantajl??: Dizel mi, benzinli mi?</h2>\r\n\r\n<p>Dizel mi benzinli mi? Son y??llar??n trend sorular??ndan biri olarak hala tart??????l??yor. O halde bu konuya buyurun beraber bakal??m.&nbsp;&nbsp;<br />\r\nT&uuml;rkiye, d&uuml;nyan??n en pahal?? yak??t??n?? kullanan &uuml;lkelerin ba????nda geliyor. Bu a&ccedil;??dan bak??ld??????nda yak??t tasarrufuna &ouml;nem vermek, ??srarl?? bir ??ekilde bu konunun &uuml;zerinde durmak &ouml;n&uuml;m&uuml;zdeki y??llar a&ccedil;??s??ndan kritik olabilir.<br />\r\nBir ara&ccedil; sat??n almadan &ouml;nce ak??llara gelen ilk soru, dizel ara&ccedil;lar??n m?? yoksa benzinli ara&ccedil;lar??n m?? daha avantajl?? oldu??udur. Ara&ccedil; piyasas??nda dizel ara&ccedil;lar benzinli ara&ccedil;lardan %10-%20 &nbsp;seviyelerinde daha pahal??d??r. &Uuml;stelik dizel ara&ccedil;lar??n bak??m masraflar?? daha y&uuml;ksektir. &Ccedil;&uuml;nk&uuml; dizel motorlu ara&ccedil;lar, daha y&uuml;ksek bir teknolojiye sahiptir.</p>\r\n\r\n<h2>Periyodik bak??m masraflar?? daha y&uuml;ksek</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dizel motorlu ara&ccedil;lar??n periyodik bak??m masraflar??, benzinli ara&ccedil;lar??n masraflar??ndan daha y&uuml;ksek seviyelerdedir. &Uuml;cretlendirme ara&ccedil;lar??n markas??na ve modeline g&ouml;re de??i??kenlik g&ouml;sterir.<br />\r\nBak??m masraflar??n??n y&uuml;ksek olmas??na birden fazla etken mevcut. &Ouml;zellikle bak??mlardaki s??kl??k masraflar??n y&uuml;kselmesine neden oluyor. Benzinli bir ara&ccedil; i&ccedil;in 20 bin kilometrede bir bak??m gerekirken, dizel ara&ccedil;larda bu seviye 15 bin kilometre seviyelerine kadar inebiliyor.<br />\r\nDizel motorlu bir arac??n bak??m masraflar?? d&uuml;??&uuml;n&uuml;ld&uuml;??&uuml;nde benzinli ara&ccedil;lar bu nedenle bir ad??m daha &ouml;ne &ccedil;??k??yor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Yak??t tasarrufu i&ccedil;in dizel ara&ccedil;lar bir ad??m &ouml;nde</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dizel ara&ccedil;lar, benzinli ara&ccedil;lara g&ouml;re adeta birer yak??t cimrisi olarak d&uuml;??&uuml;n&uuml;lebilir. Bu da dizel ara&ccedil;lar??n bir ad??m &ouml;nde olmas??n?? sa??l??yor.<br />\r\nY&uuml;ksek teknolojiyle &uuml;retilen dizel ara&ccedil;lar, yak??t kullan??m??n?? minimuma indirecek bir sistemle donat??lm????. &Ouml;n&uuml;m&uuml;zdeki y??llarda yak??t tasarrufu a&ccedil;??s??ndan daha ba??ar??l?? projeler ortaya konabilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>??kinci el piyasas??nda dizel ara&ccedil;lar daha avantajl??</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sat??n ald??????n??z takdirde ilerleyen d&ouml;nemde daha rahat bir ??ekilde satabilece??iniz bir ara&ccedil; m?? ar??yorsunuz? O halde dizel ara&ccedil;lar??n bu konuda daha elveri??li oldu??unu akl??n??zdan &ccedil;??karmay??n.<br />\r\nDizel ara&ccedil;lar??n ikinci el piyasas??nda daha &ouml;nde oldu??u bilinen bir ger&ccedil;ek. Piyasada daha az de??er kaybeden, y&uuml;ksek talep oran??na sahip dizel ara&ccedil;lar, bu sayede sat??lmak istendi??i takdirde daha k??sa bir s&uuml;rede ve kolay bir ??ekilde elden &ccedil;??kar??labiliyor.</p>\r\n',	1,	1,	'hangisi-daha-avantajli-dizel-mi-benzinli-mi',	'assets/images/blog/209632769726044204111531465374-a.jpg',	'Hangisi daha avantajl??: Dizel mi, benzinli mi?',	'Hangisi daha avantajl??: Dizel mi, benzinli mi?',	'18.04.2019 21:08'),
(4,	'Ara?? Kiralarken Dikkat Edilmesi Gereken 7 ??ey',	'<p>Bug&uuml;nk&uuml; yaz??m??zda size&nbsp;<strong>ara&ccedil; kiralarken dikkat edilmesi gereken 7 ??eyden</strong>&nbsp;bahsedece??iz. &Ouml;zellikle tatil d&ouml;nemlerinde ve i?? programlar??m??zda, ara&ccedil; kiralama ihtiyac?? duyabiliyoruz. Ula????m ara&ccedil;lar??nda yorulmak veya taksilere para ya??d??rmak yerine, ara&ccedil; kiralamak hem konforlu hem de daha hesapl?? olmas??ndan dolay?? b&uuml;y&uuml;k bir avantaj. Yo??un talep olan bir sekt&ouml;r oldu??u i&ccedil;in internette ve merkezi b&ouml;lgelerde onlarca farkl?? ara&ccedil; kiralama ??irketi bulman??z m&uuml;mk&uuml;n. Bu noktada kendinize en uygun arac?? kiralamak i&ccedil;in dikkat etmeniz gereken baz?? noktalar bulunmaktad??r.</p>\r\n\r\n<h2>1)??htiya&ccedil;lar??n??z??n Fark??nda Olun</h2>\r\n\r\n<p>Ara&ccedil; kiralarken mutlaka ara&ccedil;ta&nbsp;<strong>ka&ccedil; ki??i olaca????n??za</strong>, arac?? uzun yolda m?? yoksa ??ehir i&ccedil;inde mi kullanaca????n??za, yak??t b&uuml;t&ccedil;enize veya i?? programlar??n??za dikkat ediniz. Bu sayede i??inizi g&ouml;rmeyecek bir arac?? kiralamam???? veya size fazla gelecek bir arac?? kiralayarak yok yere fazladan para kaybetmemi?? olursunuz.</p>\r\n\r\n<p>&Ouml;rnek vermek gerekirse; i??leriniz gere??i ??ehir i&ccedil;inde kullanaca????n??z k&uuml;&ccedil;&uuml;k motorlu ve az yak??t t&uuml;keten ara&ccedil;lar?? veya da??l??k bir b&ouml;lgeye tatile gidiyorsan??z SUV ara&ccedil;lar?? tercih edebilirsiniz. Seyahatlerinizde gerekli olabilecek bebek koltu??u, HGS ve navigasyon gibi&nbsp;<strong>ek &ouml;zelliklerin &uuml;cretli olabilece??ini de unutmay??n.</strong></p>\r\n\r\n<h3>2)Size Yak??n Lokasyonlardan Kiralama Yap??n</h3>\r\n\r\n<p>???? veya tatil programlar?? sebebiyle seyahat eden ziyaret&ccedil;ilerin, mutlaka ??ehre giri?? yapt??klar?? ve tekrar d&ouml;n&uuml;?? i&ccedil;in kullanacaklar?? lokasyondan kiralama yapmalar??n?? &ouml;neriyoruz. Bu detaya dikkat etmeyen bir&ccedil;ok ziyaret&ccedil;i, ??ehir merkezinden kiralama yapmakta ve d&ouml;n&uuml;?? i&ccedil;in otogara veya havaalan??na ula????m ara&ccedil;lar??n?? kullanarak gitmek zorunda kalmaktad??r.</p>\r\n\r\n<h3>3)Fiyat Avantajlar??ndan Faydalan??n</h3>\r\n\r\n<p><strong>Ara&ccedil; kiralama</strong>&nbsp;sekt&ouml;r&uuml;ne yo??un talep oldu??u i&ccedil;in markalar daha fazla m&uuml;??teriye hitap edebilmek ad??na s&uuml;rekli kampanya d&uuml;zenlemekteler. Tatil d&ouml;nemlerinde dahi bu kampanyalara rastlamak m&uuml;mk&uuml;n. Asla tek bir firman??n kampanyas??n?? dikkate alarak ara&ccedil; kiralamay??n.</p>\r\n\r\n<p>Y&uuml;ksek fiyat iyi hizmet, d&uuml;??&uuml;k fiyatta k&ouml;t&uuml; hizmet manas??na gelmez. Bir ara&ccedil; kiralama firmas??n??n kalitesini tecr&uuml;besi, kurumsall??????, hizmet s&uuml;recinde m&uuml;??teriye yakla????m?? ve ara&ccedil; filosunun niteli??i belirler. Karar vermeden &ouml;nce, t&uuml;m ihtiya&ccedil;lar??n??z i&ccedil;in kiral??k ara&ccedil; &ccedil;&ouml;z&uuml;mleri sunan Cizgi Rent A Car&rsquo;??n&nbsp;<strong>uygun fiyatlar??na ve kilometre s??n??r?? olmamas??</strong>&nbsp;gibi dikkat &ccedil;eken avantajlar??na bir g&ouml;z at??n.</p>\r\n\r\n<h3>4)Erken Rezervasyon F??rsatlar??n?? Ka&ccedil;??rmay??n</h3>\r\n\r\n<p>Bir&ccedil;ok sekt&ouml;rde firmalar, erken rezervasyon yapan m&uuml;??terilerine fiyat avantaj?? sunarlar. Ara&ccedil; kiralarken de ge&ccedil;erli olan bu f??rsat?? iyi de??erlendirmelisiniz. &Ouml;zellikle tatil yapaca????n??z tarihlerin veya i?? toplant??lar??n??z??n tarihinin belli oldu??u durumlarda, o tarih i&ccedil;in erken ara&ccedil; kiralama rezervasyonu yaparak piyasa fiyatlar??n??n &ccedil;ok alt??nda ara&ccedil; kiralayabilirsiniz. Ankara, ??zmir, Antalya veya ??stanbul gibi b&uuml;y&uuml;k ??ehirlerde &ccedil;ok fazla kiral??k ara&ccedil; bulundu??u i&ccedil;in, bu ??ehirlerde erken rezervasyon kampanyalar?? daha s??k uygulanmaktad??r</p>\r\n\r\n<h2>5)Eski Ara&ccedil;lardan Uzak Durun</h2>\r\n\r\n<p>Kiral??k ara&ccedil;lar, maalesef hor kullan??lan ve bu y&uuml;zden de &ccedil;abuk eskiyen ara&ccedil;lard??r. Uzun yol veya ??ehir i&ccedil;i ihtiya&ccedil;lar??n??z i&ccedil;in ara&ccedil; kiralarken&nbsp;<strong>3 ya????ndan daha b&uuml;y&uuml;k ara&ccedil;lardan uzak durun.</strong>&nbsp;Bu sayede yolda kalma, teknik sorun ya??ama veya en k&ouml;t&uuml;s&uuml; kaza yapma ihtimaliniz d&uuml;??er. S??f??ra yak??n veya 1-2 ya????ndaki ara&ccedil;lar hem daha g&uuml;venli hem de konforlu olacakt??r.</p>\r\n\r\n<h3>6)Sigorta ve S&ouml;zle??meyi Dikkatli Okuyun</h3>\r\n\r\n<p>Sigortas??z veya kaskosu olmayan ara&ccedil;lar?? kesinlikle kiralamay??n. &Ouml;zellikle sigortas?? hi&ccedil; yat??r??lmam???? veya yenilenmemi?? ara&ccedil;lar olas?? bir kazada size b&uuml;y&uuml;k bedeller &ouml;detebilir.&nbsp;<a href=\"https://rentacar047.demokontrol.com/blog/hangisi-daha-avantajli-dizel-mi-benzinli-mi\">Ara&ccedil; kiralama s&ouml;zle??meleri</a>&nbsp;ise &ccedil;o??u zaman g&ouml;z ard?? edilen fakat tamam??n??n okunmas?? gereken resmi evraklard??r. Bu s&ouml;zle??mede firman??n sizden beklentileri ve ara&ccedil; teslimat??na ili??kin maddeler bulunur. Ma??dur olduktan sonra okumak yerine, s&ouml;zle??meyi imzalamadan okumak yarar??n??za olacakt??r. Arac?? ne zaman teslim etmeniz gerekti??ini ve gecikmeler dolay??s?? ile &ouml;demek durumunda kalaca????n??z cezalar?? dikkatle okuyun.</p>\r\n\r\n<h3>7)Kiralayaca????n??z Arac?? Detayl?? Kontrol Edin</h3>\r\n\r\n<p>Acentede evrak i??leri bittikten sonra, firma yetkilisi bir &ccedil;al????an size arac?? teslim edecektir. &Ouml;ncelikle arac??n etraf??nda gezerek, &ouml;nemli bir &ccedil;arp??k veya g&ouml;&ccedil;&uuml;k olup olmad??????n?? tespit edin. Sonras??nda t&uuml;m kap??lar??, bagaj?? ve motor kaputunu a&ccedil;arak kap??lar??n mekanizmas??nda sorun olup olmad??????n?? g&ouml;r&uuml;n. Arabay?? sanki kiral??yormu?? gibi de??il de sat??n al??yormu?? gibi ciddi bir kontrol yap??n. G&ouml;revlinin sizi beklemesini dert etmeyin, rahat rahat kontrollerinizi yap??n.</p>\r\n\r\n<p>Arac??n i&ccedil;ine girerek h??zl??ca&nbsp;<strong>koltuklara, &ouml;n aksesuarlara ve aynalara</strong>&nbsp;g&ouml;z at??n. Arac?? &ccedil;al????t??rarak ekranda bir&nbsp;<strong>ar??za ??????????n??n yan??p yanmad??????n?? kontrol edin.</strong>&nbsp;Arac?? &ccedil;al????t??rd??ktan sonra yak??t seviyesini kontrol edip not al??n, arac?? teslim ederken de ayn?? seviyede b??rak??n. Yak??t?? fazladan alman??z durumunda ise hi&ccedil;bir firma fazladan ald??????n??z yak??t??n &ouml;demesini yapmayacakt??r. Bu kontroller esnas??nda dikkatinizi &ccedil;eken en ufak hasarlar?? bile arac?? size getiren g&ouml;revliye belirterek, not almas??n?? isteyin. B&ouml;ylece arac?? teslim etti??inizde, belirtmi?? oldu??unuz hasarlar??n hi&ccedil;birisinden sorumlu tutulmazs??n??z.</p>\r\n\r\n<p>Bu 7 maddeye dikkat etti??iniz takdirde kiralad??????n??z ara&ccedil; ile yolculu??unuz s??ras??nda veya teslim edece??iniz vakit hi&ccedil; bir sorun ya??amayacaks??n??zd??r. Umar??z faydal?? olmu??tur.</p>\r\n',	1,	2,	'arac-kiralarken-dikkat-edilmesi-gereken-7-sey',	'assets/images/blog/258042425326197308391540586904-a.jpg',	'Ara?? Kiralarken Dikkat Edilmesi Gereken 7 ??ey',	'Ara?? Kiralarken Dikkat Edilmesi Gereken 7 ??ey',	'18.04.2019 21:10'),
(5,	'??stanbul Havaliman??na Ta????nma Devam Ediyor',	'<p>7 Havaliman?? ofisi ve 9 ??ehir ofisi olmak &uuml;zere, 16 lokasyonda hizmet vermekte olan Cizgi Rent a Car, uygun fiyat, ko??ulsuz misafir memnuniyeti ve 7/ 24 hizmet anlay?????? ile, T&uuml;rkiye&#39;de g&uuml;nl&uuml;k ara&ccedil; kiralalama pazar??n??n yakla????k % 10&#39;unu elinde bulunduruyor. &Ouml;zellikle ??zmir ve Antalya ara&ccedil; kiralama hizmeti i&ccedil;in filosunu geni??leten Cizgi Rent a Car lokasyon ve ara&ccedil; park?? yat??r??mlar?? ile birlikte, &ouml;n&uuml;m&uuml;zdeki 2 y??l i&ccedil;erisinde pazar pay??n?? % 15&#39;e &ccedil;??karmay?? hedefliyor.</p>\r\n\r\n<p>??stanbul Atat&uuml;rk Havaliman??ndaki (IST) operasyonlar??n??, ??stanbul Havaliman??n??n(ISL) a&ccedil;??l??????n??n ard??ndan ??stanbul Havaliman??&#39;na ta????yacak olan Cizgi Rent a Car, yerel saat ile 05 Nisan 201903:00 &ndash; 07 Nisan 2019 00:00 aras??nda yap??lacak olan havaliman?? ta????nma i??lemleri a&ccedil;??s??ndan bir duyuru yay??nlayarak, bu tarihler aras??nda u&ccedil;u??lar?? olan m&uuml;??terilerinin, u&ccedil;u?? numaralar??n?? yak??ndan takip etmelerini ve havayolu firmalar?? taraf??ndan iletilecek di??er bilgilendirmeler i&ccedil;in dikkatli olmalar?? y&ouml;n&uuml;nde bilgi verdi.</p>\r\n',	1,	3,	'istanbul-havalimanina-tasinma-devam-ediyor',	'assets/images/blog/247182235925528262161554224123-a.jpg',	'??stanbul Havaliman??na Ta????nma Devam Ediyor',	'??stanbul Havaliman??na Ta????nma Devam Ediyor',	'18.04.2019 21:10');

DROP TABLE IF EXISTS `ebulten`;
CREATE TABLE `ebulten` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_mail` text COLLATE utf8_turkish_ci NOT NULL,
  `e_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `ebulten` (`e_id`, `e_mail`, `e_date`) VALUES
(4,	'deneme@gmail.cm',	'2019-04-16 02:24:27'),
(5,	'denemqsadfas@asdfasdf.sc',	'2019-04-17 14:57:40'),
(6,	'test@test.com12',	'2019-04-17 14:58:36'),
(7,	'test@sadasdas.com',	'2019-04-17 14:59:19'),
(8,	'denemqsadfas@asdfasdf.sc',	'2019-04-17 14:59:19'),
(9,	'test@1231231.com',	'2019-04-17 14:59:37'),
(10,	'test@test.com',	'2019-04-18 00:28:41'),
(11,	'asdfasdfasdf@asdfasdf.c.casfd',	'2019-04-18 00:29:00'),
(12,	'test@test.com',	'2019-04-18 00:29:00'),
(13,	'test@test.com',	'2019-04-18 00:29:37'),
(14,	'asdfasdfasdf@asdfasdf.c.casfd',	'2019-04-18 00:29:54'),
(15,	'asdfasdfasdf@asdfasdf.c.casfd',	'2019-04-18 00:30:45'),
(16,	'asdfasdfasdf@asdfasdf.c.casfd',	'2019-04-18 00:31:10'),
(17,	'deneme@gmail.cm',	'2019-04-18 00:31:20'),
(18,	'denemqsadfas@asdfasdf.sc',	'2019-04-18 00:32:13'),
(19,	'asdfasdfasdf@asdfasdf.c.casfd',	'2019-04-18 00:35:15'),
(20,	'test@test.com',	'2019-04-19 00:11:49'),
(21,	'asdfasdfasdf@asdfasdf.c.casfd',	'2019-04-19 00:15:25'),
(22,	'asdfasdf',	'2019-04-19 00:15:57'),
(23,	'asdfadsf',	'2019-04-19 00:16:24'),
(24,	'Jnb',	'2019-04-19 09:07:20');

DROP TABLE IF EXISTS `ekstra`;
CREATE TABLE `ekstra` (
  `ek_id` int(11) NOT NULL AUTO_INCREMENT,
  `ek_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `ek_fiyat` text COLLATE utf8_turkish_ci NOT NULL,
  `ek_durum` text COLLATE utf8_turkish_ci NOT NULL,
  `ek_sira` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ek_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `ekstra` (`ek_id`, `ek_ad`, `ek_fiyat`, `ek_durum`, `ek_sira`) VALUES
(2,	'Mini Hasar G??vencesi',	'19.00',	'1',	'1'),
(3,	'Navigasyon',	'19.00',	'1',	'2'),
(4,	'??ocuk Koltu??u',	'19.00',	'1',	'3'),
(5,	'Ek S??r??c??',	'19.00',	'1',	'4'),
(6,	'Kar Lasti??i',	'19.00',	'1',	'5'),
(7,	'S??per Hava G??vencesi',	'19.00',	'1',	'6');

DROP TABLE IF EXISTS `fg`;
CREATE TABLE `fg` (
  `fg_id` int(11) NOT NULL AUTO_INCREMENT,
  `fg_link` text COLLATE utf8_turkish_ci NOT NULL,
  `fg_sira` int(11) NOT NULL,
  `fg_durum` int(11) NOT NULL,
  PRIMARY KEY (`fg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `fg` (`fg_id`, `fg_link`, `fg_sira`, `fg_durum`) VALUES
(8,	'assets/images/fg/20029272742120021102images (2).jpg',	1,	1),
(3,	'assets/images/fg/29160277202843823779images (1).jpg',	2,	1),
(4,	'assets/images/fg/22400233722526724576rent-a-car-a??mak-1024x572.jpeg',	3,	1),
(5,	'assets/images/fg/20735259662898320624images.jpg',	4,	1),
(6,	'assets/images/fg/26156210542601525457indir.jpg',	5,	1),
(7,	'assets/images/fg/30292318942212826527indir (1).jpg',	6,	1);

DROP TABLE IF EXISTS `iletisimformu`;
CREATE TABLE `iletisimformu` (
  `if_id` int(11) NOT NULL AUTO_INCREMENT,
  `if_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `if_tel` text COLLATE utf8_turkish_ci NOT NULL,
  `if_mail` text COLLATE utf8_turkish_ci NOT NULL,
  `if_mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `if_durum` int(2) NOT NULL,
  `if_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`if_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `iletisimformu` (`if_id`, `if_ad`, `if_tel`, `if_mail`, `if_mesaj`, `if_durum`, `if_date`) VALUES
(1,	'23523',	'23523',	'info@deneme.com',	'asdfasdf',	0,	'2019-04-17 13:45:51'),
(2,	'deneme deneme',	'05425081889',	'info@deneme.com',	'asdfadsf',	0,	'2019-04-17 14:56:40'),
(3,	'hami',	'05318118008',	'hami@hami.com',	'test',	0,	'2019-04-17 15:08:33'),
(4,	'deneme deneme',	'235235',	'info@deneme.com',	'asdfasdf',	0,	'2019-04-18 00:28:43'),
(5,	'deneme deneme',	'23523',	'info@deneme.com',	'asdfasdf',	0,	'2019-04-19 00:11:26'),
(6,	'deneme deneme',	'23523',	'info@deneme.com',	'asdfasdf',	0,	'2019-04-19 00:12:06'),
(7,	'23523',	'235',	'info@deneme.com',	'adsfasdf',	0,	'2019-04-19 00:13:44'),
(8,	'deneme deneme',	'235',	'info@deneme.com',	'asdfsdf',	0,	'2019-04-19 00:15:00');

DROP TABLE IF EXISTS `marka`;
CREATE TABLE `marka` (
  `marka_id` int(11) NOT NULL AUTO_INCREMENT,
  `marka_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `marka_logo` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`marka_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `marka` (`marka_id`, `marka_ad`, `marka_logo`) VALUES
(3,	'Audi',	'assets/images/marka/23927293463052025108audi.png'),
(4,	'Mercedes',	'assets/images/marka/23504245152581831359mercedes_logos_PNG3.png'),
(5,	'Porsche',	'assets/images/marka/29748265652381928355Porsche-logo-2008-1920x1080.png'),
(6,	'Range Rover',	'assets/images/marka/25236237092243720220Range-Rover-Logo.png'),
(7,	'BMW',	'assets/images/marka/31041246732692228657BMW-logo-2000-2048x2048.png');

DROP TABLE IF EXISTS `ofis`;
CREATE TABLE `ofis` (
  `ofis_id` int(11) NOT NULL AUTO_INCREMENT,
  `ofis_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ofis_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `ofis_tur` enum('1','2') COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ofis_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `ofis` (`ofis_id`, `ofis_ad`, `ofis_adres`, `ofis_tur`) VALUES
(3,	'Deneme Al???? Ofis',	'deneme mahallesi deneme sokak deneme apt no : 3',	'1'),
(4,	'Deneme Teslim Ofisi',	'deneme mahallesi deneme sokak deneme apt no : 3',	'2');

DROP TABLE IF EXISTS `randevu`;
CREATE TABLE `randevu` (
  `randevu_id` int(11) NOT NULL AUTO_INCREMENT,
  `randevu_tc` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_tel` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_mail` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_sehir` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_ilce` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_ulke` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_dogum` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_no` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_date` datetime NOT NULL DEFAULT current_timestamp(),
  `arac_id` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_fiyat` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_durum` int(11) NOT NULL DEFAULT 1,
  `randevu_alistarih` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_teslimtarih` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_kk` int(11) NOT NULL,
  `randevu_kurumsalad` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_kurumsalvergino` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_kurumsalvergidairesi` text COLLATE utf8_turkish_ci NOT NULL,
  `randevu_ordertur` int(11) NOT NULL,
  `randevu_orderdurum` int(11) NOT NULL,
  `randevu_total` int(11) NOT NULL,
  `randevu_ekstralar` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`randevu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `randevu` (`randevu_id`, `randevu_tc`, `randevu_ad`, `randevu_tel`, `randevu_mail`, `randevu_sehir`, `randevu_ilce`, `randevu_ulke`, `randevu_dogum`, `randevu_adres`, `randevu_no`, `randevu_date`, `arac_id`, `arac_fiyat`, `randevu_durum`, `randevu_alistarih`, `randevu_teslimtarih`, `randevu_kk`, `randevu_kurumsalad`, `randevu_kurumsalvergino`, `randevu_kurumsalvergidairesi`, `randevu_ordertur`, `randevu_orderdurum`, `randevu_total`, `randevu_ekstralar`) VALUES
(1,	'621312312312',	'asd',	'51231231231',	'asda@asdas.com',	'asd',	'asd',	'asd',	'20/04/2019',	'asdasdasdas',	'TR7400519',	'2019-04-17 15:06:20',	'',	'100',	1,	'25/04/2019',	'25/04/2019',	1,	'',	'',	'',	1,	0,	110,	''),
(2,	'123123123',	'asd',	'21312312',	'asd@asdas.com',	'asd',	'asd',	'asd',	'19/04/2019',	'asd',	'TR6900914',	'2019-04-17 15:11:59',	'',	'100',	1,	'20/04/2019',	'25/04/2019',	1,	'',	'',	'',	2,	0,	100,	''),
(3,	'235235',	'235',	'35235',	'info@sosyalsistem.com',	'235235',	'taner',	'452345',	'24/04/2019',	'asdvasdfvasdfvasdfv',	'TR8841822',	'2019-04-17 15:38:28',	'',	'100',	1,	'17/04/2019',	'17/04/2019',	1,	'',	'',	'',	1,	0,	110,	''),
(4,	'236453',	'123',	'45645',	'emin63211@gmail.com',	'adsfasd44565',	'45645',	'1',	'19/04/2019',	'456456456',	'TR9929316',	'2019-04-18 00:27:35',	'',	'100',	1,	'19/04/2019',	'25/04/2019',	1,	'',	'',	'',	1,	0,	110,	''),
(5,	'677658765',	'asd',	'65486548',	'glkj@asdas.com',	'asd',	'asd',	'asd',	'27/04/2019',	'test',	'TR2877489',	'2019-04-18 00:28:29',	'',	'100',	1,	'25/04/2019',	'19/04/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(6,	'552255555222',	'dddd',	'5067235878',	'de@gmail.com',	'ddd',	'ddd',	'ddddd',	'26/04/2020',	'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd',	'TR9817687',	'2019-04-26 18:46:45',	'',	'300',	1,	'26/04/2019',	'26/04/2019',	1,	'',	'',	'',	1,	0,	357,	''),
(7,	'93',	'Autem aliqua Quia p',	'87',	'huri@mailinator.net',	'Labore error vero nu',	'Enim facere et magna',	'Mollitia sed ut quis',	'Repellendus Distinc',	'Sed ullamco dolor su',	'TR5595749',	'2019-04-27 15:36:30',	'',	'300',	1,	'Nemo aliquip vero am',	'Veritatis consequunt',	2,	'Impedit illum blan',	'Ut tenetur sequi qui',	'Id voluptatum offic',	2,	0,	262,	''),
(8,	'5',	'qwe123',	'234234234234',	'qwed@asdads',	'qwe',	'asd',	'qwe',	'05/05/2019',	'adsdq',	'TR3188984',	'2019-04-28 00:34:57',	'',	'400',	1,	'30/04/2019',	'30/04/2019',	1,	'',	'',	'',	1,	0,	400,	''),
(9,	'2222222222222222',	'sadadasdas asda',	'54444554444',	'basdasadsda@gmail.com',	'Ankara',	'Ankara',	'T??rkiye',	'15/05/2019',	'dssdfsdfsdsfd',	'TR9387592',	'2019-05-02 21:13:57',	'',	'100',	1,	'17/05/2019',	'21/05/2019',	1,	'',	'',	'',	1,	0,	1,	''),
(10,	'141341',	'qe',	'1414124124',	'we@adgad.de',	'we',	'qwe',	'qwe',	'07/06/2019',	'fdafadfadgad',	'TR5625798',	'2019-05-16 17:41:12',	'',	'300',	1,	'18/05/2019',	'22/05/2019',	1,	'',	'',	'',	1,	0,	338,	''),
(11,	'41124124',	'gadgadg',	'35251531',	'qeafa@adgads.de',	'gadg',	'fasfgadgad',	'adgad',	'24/05/2019',	'afadgadgad',	'TR7455731',	'2019-05-20 19:27:41',	'',	'100',	1,	'31/05/2019',	'31/05/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(12,	'1232131312312312323',	'sasadasd dsadsaads',	'31232123132132',	'1321@fgfs.ds',	'adsadsads',	'adsads',	'dasads',	'29/05/2019',	'asdasd',	'TR7835821',	'2019-05-26 12:43:09',	'',	'400',	1,	'27/05/2019',	'30/05/2019',	1,	'',	'',	'',	1,	0,	400,	''),
(13,	'123123123',	'awda',	'123123',	'12123@123.com',	'123',	'123',	'123',	'15/06/2019',	'123',	'TR1102552',	'2019-06-01 07:08:25',	'',	'100',	1,	'01/06/2019',	'08/06/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(14,	'32132112',	'awda',	'213321',	'12123@123.com',	'123',	'123',	'123',	'07/06/2019',	'123213',	'TR2352246',	'2019-06-01 18:06:39',	'',	'250',	1,	'13/06/2019',	'12/06/2019',	1,	'',	'',	'',	1,	0,	250,	''),
(15,	'14681508875',	'dgfsdgf',	'5425652222',	'seee@s.com',	'fsdsdfs',	'fsdf',	'sdfsdf',	'20/06/2019',	'fsdfsf',	'TR3893811',	'2019-06-20 17:45:02',	'',	'100',	1,	'29/06/2019',	'30/06/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(16,	'98',	'uuuhj',	'677676767676767',	'jhj@hotmail.com',	'jhj',	'mkj',	'jh',	'27/06/2019',	'bvb',	'TR6164899',	'2019-06-24 14:42:29',	'',	'300',	1,	'25/06/2019',	'26/06/2019',	1,	'',	'',	'',	1,	0,	338,	''),
(17,	'123131312312',	'asd',	'12312312313',	'asdasdasd@live.in',	'sdasd',	'asdasd',	'asda',	'27/07/2019',	'32123',	'TR6166178',	'2019-06-27 04:07:12',	'',	'100',	1,	'27/06/2019',	'29/06/2019',	2,	'asd',	'a11',	'231',	2,	0,	138,	''),
(18,	'11111111111',	'Svas',	'5075075007',	'savasdersimcelik@gmail.com',	'asdasd',	'as',	'asdas',	'29/06/2019',	'',	'TR1143530',	'2019-06-27 18:12:23',	'',	'100',	1,	'28/06/2019',	'28/06/2019',	1,	'',	'',	'',	1,	0,	157,	''),
(19,	'435345345345345',	'afsfdaadg',	'45455232355',	'asdas@gmail.com',	'ist',	'yt',	'tr',	'19/07/2020',	'',	'TR6790156',	'2019-07-15 09:59:18',	'',	'100',	1,	'20/07/2019',	'27/07/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(20,	'1',	'dasda das',	'1',	's@a.com',	'd',	'da',	'ds',	'23/02/2020',	'dasas',	'TR2150824',	'2019-07-16 14:15:30',	'',	'100',	1,	'18/07/2019',	'19/07/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(21,	'1919191919191919',	'Test',	'5324444444',	's@s.co',	'Adana',	'Merkez',	'T??rkiye',	'19/07/2019',	'Test',	'TR4958320',	'2019-07-16 21:35:53',	'',	'250',	1,	'17/07/2019',	'18/07/2019',	1,	'',	'',	'',	1,	0,	250,	''),
(22,	'4444444444',	'4444444444',	'4444444444',	'444444@44444.COM',	'44444',	'444444',	'444444',	'26/07/2019',	'44444444',	'TR9662497',	'2019-07-21 17:37:39',	'',	'100',	1,	'21/07/2019',	'23/07/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(23,	'11111111',	'dsad',	'22',	'222321@ee.eqw',	'dsa',	'sda',	'dsa',	'29/08/2019',	'',	'TR5545958',	'2019-08-26 12:02:31',	'',	'100',	1,	'29/08/2019',	'28/08/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(24,	'12312312312',	'qwe da',	'5435435454',	'123@gas.com',	'asd',	'asd',	'asss',	'12/09/2019',	'as',	'TR2804863',	'2019-09-12 08:46:19',	'',	'300',	1,	'12/09/2019',	'14/09/2019',	1,	'',	'',	'',	1,	0,	414,	''),
(25,	'12312',	'123213',	'123123',	'213213@123123',	'123123',	'123123',	'123123',	'16/09/2019',	'123123',	'TR2754035',	'2019-09-16 17:44:10',	'',	'500',	1,	'16/09/2019',	'17/09/2019',	1,	'',	'',	'',	2,	0,	557,	''),
(26,	'312333',	'dqqd dddd',	'333333333333333333',	'denemee@hotmail.com',	'denemee',	'denemee',	'deneme',	'18/07/2020',	'denemee',	'TR2803776',	'2019-10-14 02:23:33',	'',	'300',	1,	'24/10/2019',	'31/10/2019',	1,	'',	'',	'',	2,	0,	300,	''),
(27,	'1231231234',	'1321231',	'212335345344',	'adas12313@sadsad',	'123',	'312313',	'13123',	'17/10/2019',	'gaz??',	'TR1627739',	'2019-10-16 20:13:25',	'',	'250',	1,	'16/10/2019',	'18/10/2019',	1,	'',	'',	'',	1,	0,	250,	''),
(28,	'12345678911',	'asdf',	'5444444444',	'asd@asd.com',	'Ant',	'Demre',	'T??r',	'21/12/2019',	'asd',	'TR1947127',	'2019-10-21 22:14:28',	'',	'250',	1,	'30/10/2019',	'10/11/2019',	1,	'',	'',	'',	1,	0,	250,	''),
(29,	'1111111',	'er',	'555555555',	'f@ff',	'er',	'er',	'er',	'05/12/2019',	'asd',	'TR6271692',	'2019-12-02 07:06:36',	'',	'100',	1,	'05/12/2019',	'05/12/2019',	1,	'',	'',	'',	2,	0,	100,	''),
(30,	'11111111',	'er',	'55555',	'f@ff',	'er',	'er',	'er',	'05/12/2019',	'er',	'TR2710577',	'2019-12-02 07:07:24',	'',	'100',	1,	'12/12/2019',	'11/12/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(31,	'1111111111111111111111111111',	'111111111',	'111111111111111111',	'1111111111111111@sdfs.saa',	'111111111',	'111111111',	'111111111',	'23/12/2019',	'1111111',	'TR1875795',	'2019-12-03 11:05:13',	'',	'400',	1,	'13/12/2019',	'28/12/2019',	1,	'',	'',	'',	1,	0,	400,	''),
(32,	'1145879678',	'm etdftg',	'535455',	'gurbet_elena@hotmail.com',	'turkiye',	'antakya',	't??rkiye',	'14/12/2019',	'',	'TR4463103',	'2019-12-13 09:47:02',	'',	'100',	1,	'14/12/2019',	'29/12/2019',	1,	'',	'',	'',	1,	0,	176,	''),
(33,	'255886',	'm etdftg',	'5354988741656',	'gurbet_elena@hotmail.com',	'hatay',	'antakya',	't??rkiye',	'14/12/2019',	'',	'TR1496392',	'2019-12-14 13:07:44',	'',	'500',	1,	'15/12/2019',	'29/12/2019',	1,	'',	'',	'',	1,	0,	614,	''),
(34,	'00000000000000000',	'asd',	'0000000000000000',	'000000000@hotmail.com',	'asd',	'asd',	'asd',	'26/12/2019',	'asdasddas',	'TR8017265',	'2019-12-17 18:21:07',	'',	'100',	1,	'26/12/2019',	'31/12/2019',	1,	'',	'',	'',	1,	0,	100,	''),
(35,	'56456454646546545',	'asda',	'464545664',	'gsdfsdf@gmail.com',	'asdas',	'dasda',	'sdasd',	'29/12/2019',	'asdasdasda',	'TR9077587',	'2019-12-22 13:10:37',	'',	'100',	1,	'29/12/2019',	'24/12/2019',	1,	'',	'',	'',	1,	0,	214,	''),
(36,	'56456454646546545',	'asda',	'464545664',	'gsdfsdf@gmail.com',	'asdas',	'dasda',	'sdasd',	'28/12/2019',	'asdasdasda',	'TR3392249',	'2019-12-22 13:10:51',	'',	'100',	1,	'22/12/2019',	'24/12/2019',	1,	'',	'',	'',	2,	0,	100,	''),
(37,	'2222222222222222',	'Yyyy yyyy',	'55555555522',	'ggg@gg.com',	'Hhh',	'Ggg',	'Tuuu',	'31/12/2019',	'',	'TR8824252',	'2019-12-29 04:02:50',	'',	'300',	1,	'29/12/2019',	'01/01/2020',	1,	'',	'',	'',	1,	0,	319,	''),
(38,	'1111111111',	'yok',	'5322222222',	'yok@yok.com',	'yok',	'yok',	'yok',	'31/12/2019',	'',	'TR2027013',	'2019-12-31 14:47:47',	'',	'100',	1,	'02/01/2020',	'17/01/2020',	1,	'',	'',	'',	1,	0,	119,	''),
(39,	'11111111111',	'1111',	'1111111111',	'111@111.111',	'1111',	'1111111',	'111',	'06/02/2020',	'1111111111111111',	'TR2027261',	'2020-01-05 15:30:53',	'',	'500',	1,	'16/01/2020',	'24/01/2020',	1,	'',	'',	'',	1,	0,	614,	''),
(40,	'11111111111',	'1111',	'1111111111',	'dene@me.com',	'1111',	'1111111',	'111',	'09/01/2020',	'1111111111111111',	'TR8854612',	'2020-01-05 15:31:25',	'',	'500',	1,	'05/01/2020',	'26/01/2020',	1,	'',	'',	'',	1,	0,	500,	''),
(41,	'33333333',	'asdasd ',	'44444444',	'3eeeee@hotmail.com',	'asdasd',	'qweqwe',	'trrrrr',	'24/01/2020',	'',	'TR4889672',	'2020-01-19 01:01:44',	'',	'100',	1,	'19/01/2020',	'24/01/2020',	1,	'',	'',	'',	1,	0,	214,	''),
(42,	'6545676565',	'murat',	'5656765654',	'ulusoymrt@gmail.com',	'Gvv',	'Hhcv',	'Jbcv',	'15/03/2020',	'',	'TR9329703',	'2020-01-28 13:10:34',	'',	'400',	1,	'30/01/2020',	'31/01/2020',	1,	'',	'',	'',	1,	0,	495,	''),
(43,	'111111111111111',	'Hdd',	'55255555555',	'dfgg@dff.com',	'Ddd',	'Ssd',	'Ddd',	'19/03/2020',	'',	'TR4508900',	'2020-01-31 14:04:32',	'',	'100',	1,	'27/03/2020',	'09/03/2020',	1,	'',	'',	'',	1,	0,	214,	''),
(44,	'1234567890',	'sssss',	'5444444444',	'test@test.com',	'ddd',	'ksksks',	'dddd',	'01/02/2020',	'sssssssss',	'TR9538843',	'2020-02-01 14:46:56',	'',	'250',	1,	'01/02/2020',	'07/02/2020',	1,	'',	'',	'',	1,	0,	1,	''),
(45,	'1234567890',	'sssss',	'5444444444',	'test@test.com',	'ddd',	'ksksks',	'dddd',	'01/02/2020',	'sssssssss',	'TR1294693',	'2020-02-01 14:47:45',	'',	'250',	1,	'08/02/2020',	'21/02/2020',	1,	'',	'',	'',	1,	0,	1,	''),
(46,	'43234242424',	'dawdawd',	'3424242424',	'muratulusoy55@hotmail.com',	'wadawdwad',	'awdawd',	'dwadawd',	'02/06/2021',	'',	'TR3442675',	'2020-02-01 19:20:24',	'',	'250',	1,	'08/02/2020',	'14/02/2020',	1,	'',	'',	'',	2,	0,	250,	''),
(47,	'43234242424',	'dawdawd',	'3424242424',	'muratulusoy55@hotmail.com',	'wadawdwad',	'awdawd',	'dwadawd',	'13/02/2020',	'',	'TR876448',	'2020-02-01 19:20:38',	'',	'250',	1,	'07/02/2020',	'21/02/2020',	1,	'',	'',	'',	1,	0,	250,	''),
(48,	'2324234234',	'qwdad',	'343353453',	'fsfdsfs@wdrwerwer.net',	'asda',	'asdad',	'wdaew',	'13/03/2020',	'sdffsfdsfsf',	'TR979987',	'2020-03-10 16:56:06',	'',	'100',	1,	'10/03/2020',	'11/03/2020',	1,	'',	'',	'',	2,	0,	138,	''),
(49,	'22222222',	'Arif A??cakaya',	'555555',	'caddewebdizayn@gmail.com',	'istanbul',	'deneme',	't??rkiye',	'14/03/2020',	'deneme',	'TR3864137',	'2020-03-13 21:29:47',	'',	'250',	1,	'15/03/2020',	'26/03/2020',	1,	'',	'',	'',	1,	0,	250,	''),
(50,	'5555555555',	'dsds',	'05231452314',	'me@gmail.com',	'fsdfds',	'dfsdf',	'ddsf',	'27/03/2020',	'ffsfdsfsfdsfsfwerwer',	'TR9550466',	'2020-03-23 09:53:14',	'',	'250',	1,	'29/03/2020',	'23/03/2020',	1,	'',	'',	'',	2,	0,	250,	''),
(51,	'646464',	'Aghwyw',	'61616494',	'hwhwh@ahshs.com',	'Ahhw',	'Abbaa',	'Sbhsa',	'03/05/2020',	'Bzbsbshsh',	'TR4130497',	'2020-04-19 13:08:29',	'',	'100',	1,	'20/04/2020',	'26/04/2020',	1,	'',	'',	'',	1,	0,	100,	''),
(52,	'21312',	'123123',	'213123123',	'1231@tes.com',	'31231',	'2312',	'312',	'01/05/2020',	'asdas',	'TR2774977',	'2020-04-19 20:10:28',	'',	'100',	1,	'24/04/2020',	'29/04/2020',	1,	'',	'',	'',	1,	0,	100,	''),
(53,	'11111111111111111111',	'd',	'222222222222222',	'ddsa@dds.com',	'd',	'd',	'd',	'17/05/2020',	'fdsfffdas',	'TR202548',	'2020-05-15 01:32:48',	'',	'250',	1,	'16/05/2020',	'29/05/2020',	1,	'',	'',	'',	1,	0,	364,	''),
(54,	'56413216574894321',	'Mehmet Said Kayac??k',	'53255497515616',	'asd@asda.com',	'kahramanmara??',	'oniki subat',	't??rkite',	'01/04/2001',	'Mhem asd ',	'TR785066',	'2020-05-25 14:43:30',	'',	'100',	1,	'28/05/2020',	'30/05/2020',	1,	'',	'',	'',	1,	0,	100,	''),
(55,	'56413216574894321',	'Mehmet Said Kayac??k',	'53255497515616',	'asd@asda.com',	'kahramanmara??',	'oniki subat',	't??rkite',	'28/05/2020',	'Mhem asd ',	'TR877318',	'2020-05-25 14:44:25',	'',	'100',	1,	'29/05/2020',	'31/05/2020',	1,	'',	'',	'',	2,	0,	100,	''),
(56,	'12345678901',	'Test Et',	'5411234567',	'mail@cem.com',	'??zmir',	'Konak',	'T??rkiye',	'29/05/2020',	'',	'TR7742070',	'2020-05-29 14:50:03',	'',	'100',	1,	'29/05/2020',	'31/05/2020',	1,	'',	'',	'',	1,	0,	100,	''),
(57,	'12345678901',	'Test Et',	'5411234567',	'mail@cem.com',	'??zmir',	'Konak',	'T??rkiye',	'29/05/2020',	'',	'TR2304598',	'2020-05-29 14:50:20',	'',	'100',	1,	'29/05/2020',	'31/05/2020',	1,	'',	'',	'',	2,	0,	100,	''),
(58,	'111',	'Hsh',	'111',	'w@q',	'Bb',	'B',	'Bb',	'04/06/2020',	'',	'TR5280337',	'2020-06-04 10:56:05',	'',	'100',	1,	'08/06/2020',	'08/06/2020',	1,	'',	'',	'',	1,	0,	157,	''),
(59,	'11',	'tt',	'11',	'a@dd',	't',	't',	't',	'11/06/2020',	'',	'TR8740272',	'2020-06-04 13:29:30',	'',	'100',	1,	'18/06/2020',	'25/06/2020',	1,	'',	'',	'',	1,	0,	176,	''),
(60,	'35423159654',	'sdfdsfds dsfdsfds',	'5325123624',	'sdsadsa@gmail.com',	'sdfdsfds',	'xcfdfs',	'dfdsfsd',	'11/06/2020',	'dsfdsfdsfdsfsfsf fdsfs',	'TR6236263',	'2020-06-04 20:02:38',	'',	'500',	1,	'19/06/2020',	'13/06/2020',	1,	'',	'',	'',	1,	0,	500,	''),
(61,	'465755757657657',	'sdfdsfds dsfdsfds',	'534545424242',	'sdsadsa@gmail.com',	'sdfdsfds',	'xcfdfs',	'dfdsfsd',	'27/06/2020',	'fsdfdsfdss',	'TR9940131',	'2020-06-14 14:05:24',	'',	'100',	1,	'27/06/2020',	'28/06/2020',	1,	'',	'',	'',	1,	0,	100,	''),
(62,	'465755757657657',	'sdfdsfds dsfdsfds',	'534545424242',	'sdsadsa@gmail.com',	'sdfdsfds',	'xcfdfs',	'dfdsfsd',	'27/06/2020',	'fsdfdsfdss',	'TR5270167',	'2020-06-14 14:05:47',	'',	'100',	1,	'22/06/2020',	'27/06/2020',	1,	'',	'',	'',	1,	0,	214,	''),
(63,	'13654390321',	'test',	'5555555555',	'akmali34@gmail.com',	'istanbul',	'fatih',	'tr',	'10/07/2020',	'',	'TR1367472',	'2020-07-01 22:03:03',	'',	'100',	1,	'02/07/2020',	'05/07/2020',	1,	'',	'',	'',	1,	0,	100,	''),
(64,	'13654390321',	'test',	'5555555555',	'akmali34@gmail.com',	'istanbul',	'fatih',	'tr',	'09/07/2020',	'',	'TR9436245',	'2020-07-01 22:03:46',	'',	'100',	1,	'02/07/2020',	'05/07/2020',	1,	'',	'',	'',	2,	0,	100,	''),
(65,	'222222222222222222222222222222222222',	'sss',	'211111111111111111111',	'11111111111@qasda.com',	'2',	'2',	'2',	'04/07/2020',	'qq',	'TR8718861',	'2020-07-03 09:21:17',	'',	'500',	1,	'03/07/2020',	'04/07/2020',	1,	'',	'',	'',	1,	0,	519,	''),
(66,	'10490204550',	'asd',	'536363353',	'asdasdas@hotmail.com',	'asd',	'asd',	'asd',	'16/07/2020',	'p????',	'TR8888673',	'2020-07-11 22:12:25',	'',	'100',	1,	'25/07/2020',	'23/07/2020',	1,	'',	'',	'',	1,	0,	100,	''),
(67,	'14252536362',	'brbtrbtr',	'5533217858',	'tb@gmasil.com',	'rbtrbt',	'rbtrbtrbtt',	'btrbtbtrb',	'14/08/2020',	'',	'TR9453720',	'2020-07-13 08:48:40',	'',	'500',	1,	'16/07/2020',	'24/07/2020',	1,	'',	'',	'',	1,	0,	538,	''),
(68,	'14252536362',	'brbtrbtr',	'5533217858',	'tb@gmail.com',	'rbtrbt',	'rbtrbtrbtt',	'btrbtbtrb',	'24/07/2020',	'btrbrtbtrbrtb',	'TR5333766',	'2020-07-13 08:49:15',	'',	'500',	1,	'15/07/2020',	'22/07/2020',	1,	'',	'',	'',	1,	0,	500,	''),
(69,	'236588845788888888888',	'Bjdjdj bbdjdb',	'25888484848',	'admin@admin.com',	'Tr',	'Tr',	'Tr',	'22/07/2020',	'Nbsbsjs.  Shudhd djdud. Jje d j',	'TR4392060',	'2020-07-18 04:16:47',	'',	'300',	1,	'26/07/2020',	'31/07/2020',	1,	'',	'',	'',	2,	0,	357,	''),
(70,	'101010101010',	'e',	'55555555',	'sfsa@gsgs.com',	'2',	'52',	't',	'25/07/2020',	'',	'TR3519292',	'2020-07-25 03:28:08',	'',	'100',	1,	'31/07/2020',	'31/07/2020',	1,	'',	'',	'',	2,	0,	214,	''),
(71,	'101010101010',	'e',	'55555555',	'sfsa@gsgs.com',	'2',	'52',	't',	'26/07/2020',	'',	'TR2148632',	'2020-07-25 03:28:31',	'',	'100',	1,	'31/07/2020',	'30/07/2020',	1,	'',	'',	'',	1,	0,	100,	''),
(72,	'65651662136132',	'wefwef',	'3212331331',	'3213@hotmail.coom',	'wefwefdc',	'wesxswc',	'fewfcd',	'31/07/2020',	'',	'TR5515842',	'2020-07-29 14:26:20',	'',	'400',	1,	'30/07/2020',	'30/07/2020',	1,	'',	'',	'',	1,	0,	419,	'');

DROP TABLE IF EXISTS `sayfa`;
CREATE TABLE `sayfa` (
  `sayfa_id` int(11) NOT NULL AUTO_INCREMENT,
  `sayfa_ad` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_seourl` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_durum` int(11) NOT NULL,
  `sayfa_title` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_description` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_keywords` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`sayfa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `sayfa` (`sayfa_id`, `sayfa_ad`, `sayfa_seourl`, `sayfa_icerik`, `sayfa_durum`, `sayfa_title`, `sayfa_description`, `sayfa_keywords`) VALUES
(2,	'Ara?? Kiralama S??zle??mesi',	'arac-kiralama-sozlesmesi',	'<p><strong>ARA&Ccedil; K??RALAMA</strong></p>\r\n\r\n<p><strong>S&Uuml;R&Uuml;C&Uuml; BELGES?? VE K??RALAMA YA??I</strong><br />\r\nEn az 20 ya????nda, minimum 2 y??ll??k s&uuml;r&uuml;c&uuml; belgesine sahip ve ara&ccedil; kullanmada deneyimli olmak gerekmektedir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>K??RALAMA S&Uuml;RES??</strong><br />\r\nEn az kiralama s&uuml;resi 24 saattir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>UZUN S&Uuml;REL?? K??RALAMA</strong><br />\r\nEn az kiralama s&uuml;resi 30 g&uuml;nd&uuml;r. Kiralama fiyat?? ve ko??ullar??na ili??kin bilgi i&ccedil;in bizi aray??n??z.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>F??YATLARA DAH??L OLAN VE OLMAYAN HUSUSLAR</strong><br />\r\nFiyatlara ara&ccedil;lar??n s??n??rs??z kilometre kullan??m hakk??, ya??lama ve teknik bak??m giderleri ile kasko dahildir. Fiyatlar??m??za KDV dahil de??ildir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>TEK Y&Ouml;NL&Uuml; K??RALAMALAR</strong><br />\r\nBir g&uuml;n s&uuml;reli kiralamalarda ve arac??n ba??ka bir ??ehirde iadesi durumunda Tek Y&ouml;n &uuml;creti uygulan??r. Uzun s&uuml;reli kiralamalarda bu &uuml;cret uygulanmaz.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>??LAVE S&Uuml;R&Uuml;C&Uuml;LER</strong><br />\r\nArac??n, kiralayan ??ah??s d??????ndaki ki??i/ki??ilerce kullan??labilmesi ; ilave s&uuml;r&uuml;c&uuml;/s&uuml;r&uuml;c&uuml;lere ait S&uuml;r&uuml;c&uuml; Belgesi bilgilerinin , Kira S&ouml;zle??mesinin &uuml;zerinde g&ouml;sterilmesi ile m&uuml;mk&uuml;nd&uuml;r. Aksi durumun belirlenmesi ve/veya her hangi kaza durumunda t&uuml;m sigortalar ge&ccedil;ersiz say??larak gerek kiralayan ve gerekse arac?? kullanan ki??i/ki??iler ayr??,ayr?? ve m&uuml;??tereken sorumlu tutulurlar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>TESL??M ETME VE TESL??M ALMA</strong><br />\r\n1-7 g&uuml;n aras??ndaki kiralamalarda ayr??ca di??er ??ehirde teslim etme ve/veya teslim alma &uuml;creti al??n??r. Ancak kiralama &uuml;creti 7 g&uuml;n&uuml;n &uuml;zerine &ccedil;??karsa herhangi bir ek &uuml;cret talep edilmez.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>TESL??M GEC??KMELER??</strong><br />\r\nAra&ccedil;lar??n geriye tesliminde 3 saate kadar olan gecikmelerde, her saat i&ccedil;in , s&ouml;zle??meye uygulanan kira fiyat??n??n 1/3&#39;&uuml; , 3 saati a??an gecikmelerde 1 g&uuml;nl&uuml;k kira fiyat?? al??n??r.</p>\r\n\r\n<p>&nbsp;</p>\r\n',	1,	'',	'Ara?? Kiralama S??zle??mesi',	'Ara?? Kiralama S??zle??mesi'),
(4,	'Misyon-Vizyon',	'misyon-vizyon',	'<p><strong>Misyon</strong><br />\r\n<br />\r\nM&uuml;??terilerinin k??sa ve uzun d&ouml;nemli ara&ccedil; kiralama ihtiya&ccedil;lar??n?? T&uuml;rkiye genelinde kar????layan Rent a Car firmam??z, i?? ortaklar?? ve toplum i&ccedil;in de??er olu??turarak s&uuml;rekli geli??en kurumsal ve g&uuml;venilir bir ara&ccedil; kiralama ??irketidir.<br />\r\n<br />\r\n<strong>Vizyon</strong><br />\r\n<br />\r\n&Ccedil;a????m??z??n gere??i bizi daha &ccedil;ok araba kullanmaya, daha &ccedil;evik ve at??lgan olmaya zorluyor. Baz?? gerekler nedeni ile araba ihtiyac?? do??du??unda formalitesi az zaman??nda teslim ara&ccedil;lara ihtiya&ccedil; duyuyoruz.Rich Rent A Car vizyonunu bu &ccedil;er&ccedil;evede geli??tirmi??tir.<br />\r\n<strong>&nbsp;&nbsp;</strong><br />\r\n*Kaliteden &ouml;d&uuml;n vermeden yola &ccedil;??kan firmam??z, g&uuml;ler y&uuml;zl&uuml; &ccedil;al????anlar?? ile m&uuml;??terilerine g&uuml;venli, rahat ve ekonomik ara&ccedil; kiralama hizmeti vermeyi ilke olarak benimsemi??tir.<br />\r\n<br />\r\n*Uzman ve tecrubeli kadrosuyla, yerli ve yabanc?? m&uuml;??terilerine makul fiyat ve yeni ara&ccedil; filosuyla sorunsuz otomobil kiralaman??n avantajlar??n?? sunmaktad??r.</p>\r\n',	1,	'',	'Misyon-Vizyon',	'Misyon-Vizyon'),
(5,	'Hakk??m??zda',	'hakkimizda',	'<p><br />\r\nBundan b&ouml;yle sekt&ouml;rdeki uzun y??llar??n verdi??i tecr&uuml;be ile oto kiralama, filo kiralama, uzun d&ouml;nem ara&ccedil; kiralama, hava alan?? transfer, organizasyon, helikopter kiralama, yat kiralama organizasyon ??&ouml;f&ouml;rl&uuml; ara&ccedil; kiralama, rent a car, ara&ccedil; kiralama, kiral??k araba, ucuz ara&ccedil; kiralama, ara&ccedil; kiralama Kocaeli, ??stanbul, Ankara, ??zmir,Antalya, Bodrum kiral??k otomobil. L&uuml;x ara&ccedil; kiralama, ekonomik ara&ccedil; kiralama, vip ara&ccedil; kiralama, filo kiralama, otomobil kiralama fiyatlar?? ??&ouml;f&ouml;rl&uuml; transfer, havaliman?? &nbsp;Kocaeli transfer ve ara&ccedil; kiralama, havaliman?? misafir kar????lama ve ara&ccedil; temin etme gibi konularda en h??zl?? operasyonu yapma tecr&uuml;besine sahip olmu??tur ve tecr&uuml;besini siz de??erli m&uuml;??terilerine yans??tmaktad??r.</p>\r\n\r\n<p>Bundan sonrada kaliteli hizmet anlay?????? ve en iyi yeni model ara&ccedil; filolar?? ile deneyimli personelleriyle siz m&uuml;??terilerinin hizmetindedir.</p>\r\n',	1,	'',	'Hakk??m??zda,',	'hakk??m??zda');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_username` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_pass` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_yetki` varchar(11) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `user_durum` varchar(11) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `user_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `user` (`user_id`, `user_name`, `user_username`, `user_mail`, `user_pass`, `user_yetki`, `user_durum`, `user_date`) VALUES
(1,	'Ne ',	'ne',	'ne@ne.com',	'aca25d624cf863f786f67137c62aa11d',	'5',	'1',	'2019-04-08 23:46:46');

DROP TABLE IF EXISTS `vg`;
CREATE TABLE `vg` (
  `vg_id` int(11) NOT NULL AUTO_INCREMENT,
  `vg_link` text COLLATE utf8_turkish_ci NOT NULL,
  `vg_sira` int(11) NOT NULL,
  `vg_durum` int(11) NOT NULL,
  PRIMARY KEY (`vg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `vg` (`vg_id`, `vg_link`, `vg_sira`, `vg_durum`) VALUES
(1,	'assets/images/vg/283112964028343230331 MB Video.mp4',	1,	1),
(2,	'assets/images/vg/299042704020924248931 MB Video.mp4',	2,	1),
(3,	'assets/images/vg/248662759928752224571 MB Video.mp4',	3,	1),
(4,	'assets/images/vg/319922619527268315111 MB Video.mp4',	4,	1),
(5,	'assets/images/vg/211002750330392288091 MB Video.mp4',	5,	1),
(6,	'assets/images/vg/270523098928358314401 MB Video.mp4',	6,	1);

-- 2020-08-25 19:53:29
