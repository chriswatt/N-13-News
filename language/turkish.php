<?php
/***********************************************************************
  N-13 News is a free news publishing system
  Copyright (C) 2010 Chris Watt
  
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.
  
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.
  
  You should have received a copy of the GNU General Public License
  along with this program.If not, see <http://www.gnu.org/licenses/>.
***********************************************************************/

#########################################################
#                                                       #
#   N-13 News Language File                             #
#   LANGUAGE    Turkish                                  #
#   VERSION     3.7                                     #
#   AUTHOR      chris@network-13.com                    #
#                                                       #
#   Any words you see wrapped in { } braces,            #
#   for example {totalnews} need to be left like that.  #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

#-----MENUS
$langmsg['menu'][0] = x("Haber Ekle");
$langmsg['menu'][1] = x("Haber Güncelle");
$langmsg['menu'][2] = x("Arsiv");
$langmsg['menu'][3] = x("Yeni Mesaj");
$langmsg['menu'][4] = x("Gelen Kutusu");
$langmsg['menu'][5] = x("Giden Kutusu");
$langmsg['menu'][6] = x("Hesaplar");
$langmsg['menu'][7] = x("Giris Seviyeleri");
$langmsg['menu'][8] = x("Yasakli IPler");
$langmsg['menu'][9] = x("Kategoriler");
$langmsg['menu'][10] = x("Resim Yükleme");
$langmsg['menu'][11] = x("Kisisel");
$langmsg['menu'][12] = x("Profil");
$langmsg['menu'][13] = x("RSS Besleme");
$langmsg['menu'][14] = x("Ifadeler");
$langmsg['menu'][15] = x("Sistem");
$langmsg['menu'][16] = x("Sablonlar");
$langmsg['menu'][17] = x("Kelime Süzgeci");
$langmsg['menu'][18] = x("Anasayfa");
$langmsg['menu'][19] = x("Haberler");
$langmsg['menu'][20] = x("Mesajlar");
$langmsg['menu'][21] = x("Ayarlar");
$langmsg['menu'][22] = x("Yardim");
$langmsg['menu'][23] = x("Çikis");
$langmsg['menu'][24] = x("Dosya Yükleme");

#-----HOME MODULE
$langmsg['home'][0] = x("Genel haber istatistikleri");
$langmsg['home'][1] = x("Hosgeldiniz");
$langmsg['home'][2] = x("PHP Ayari \"magic_quotes_gpc\" açik. Bu özelligi kapatmaniz önerilmektedir.");
$langmsg['home'][3] = x("PHP Ayari \"register_globals\" açik. Hatalara ve güvenlik açigina neden olmamasi için bu özelligi kapatmaniz önerilmektedir .");
$langmsg['home'][4] = x("Install.php tespit edildi. Lütfen bu dosyayi silin.Bu dosyayi otomatik olarak silmeyi denemek ister misiniz? ");
$langmsg['home'][5] = x("Install.php silinemedi, lütfen bu dosyayi manual olarak siliniz");
$langmsg['home'][6] = x("Toplam Haber:");
$langmsg['home'][7] = x("Toplam Yorum:");
$langmsg['home'][8] = x("Toplam Kullanici:");
$langmsg['home'][9] = x("Toplam Ifade:");
$langmsg['home'][10] = x("Toplam Süzgeç:");
$langmsg['home'][11] = x("Toplam Kategori:");
$langmsg['home'][12] = x("Toplam Sablon:");
$langmsg['home'][13] = x("Toplam Giris Seviyesi:");
$langmsg['home'][14] = x("Veritabani baglantisi:");
$langmsg['home'][15] = x("Tablolarin optimizasyonu:");
$langmsg['home'][16] = x("Su anki versiyon:");
$langmsg['home'][17] = x("Son versiyon:");
$langmsg['home'][18] = x("Giris kayitlarini incele");
$langmsg['home'][19] = x("Sorgu süresi:");
$langmsg['home'][20] = x("Okunmamis mesajlar");
$langmsg['home'][22] = x(" Bu dosyay? otomatik olarak silmeyi dene?");
$langmsg['home'][22] = x("saniye");
$langmsg['home'][23] = x("Toplam Resim");
$langmsg['home'][24] = x("Toplam Dosyalar");
$langmsg['home'][25] = x("Toplam RSS");


#-----ADDNEWS MODULE
$langmsg['addnews'][0] = x("Haber önizleme");
$langmsg['addnews'][1] = x("Lütfen bir baslik giriniz");
$langmsg['addnews'][2] = x("Lütfen bu gönderinizde yorumlara izin verip vermediginizi seçiniz");
$langmsg['addnews'][3] = x("Haber ekle");
$langmsg['addnews'][4] = x("Lütfen bir kategori seçiniz");

#-----EDITNEWS MODULE
$langmsg['editnews'][0] = x("Haber Düzenle");
$langmsg['editnews'][1] = x("haber içersinden");
$langmsg['editnews'][2] = x("Ayarlar");
$langmsg['editnews'][3] = x("Gösterilecek adet");
$langmsg['editnews'][4] = x("Siralama");
$langmsg['editnews'][5] = x("Sira");
$langmsg['editnews'][7] = x("Baslik");
$langmsg['editnews'][8] = x("Yazar");
$langmsg['editnews'][9] = x("Kategoriler");
$langmsg['editnews'][10] = x("Tarih");
$langmsg['editnews'][11] = x("Onay");
$langmsg['editnews'][12] = x("Yorumlar");
$langmsg['editnews'][13] = x("[show]");
$langmsg['editnews'][14] = x("Onaylanmis");
$langmsg['editnews'][15] = x("Onaylanmamis");
$langmsg['editnews'][16] = x("Haber eklendi.");
$langmsg['editnews'][17] = x("Seçilen gönderiler silindi.");
$langmsg['editnews'][18] = x("Seçilen gönderiler güncellendi.");
$langmsg['editnews'][19] = x("Haber güncellendi.");
$langmsg['editnews'][20] = x("Pasiflestirildi");
$langmsg['editnews'][21] = x("tanesi gösterilmekte.");
$langmsg['editnews'][22] = x("toplam");
$langmsg['editnews'][23] = x("Seçilen article (s için 0 ila View count reset)");
$langmsg['editnews'][24] = x("Derecelendirme seçilen madde (ler) sifirlama");
$langmsg['editnews'][25] = x("Filtre kategoriye göre");

#-----NEWSFORM
$langmsg['newsform'][0] = x("Add your news post below.");
$langmsg['newsform'][1] = x("Baslik:");
$langmsg['newsform'][2] = x("Kategoriler:");
$langmsg['newsform'][3] = x("Özet:");
$langmsg['newsform'][4] = x("Haber:");
$langmsg['newsform'][5] = x("HTML Kapali");
$langmsg['newsform'][6] = x("HTML Açik");
$langmsg['newsform'][7] = x("Yorumlar:");
$langmsg['newsform'][8] = x("Tarihi aç kapa");
$langmsg['newsform'][9] = x("Özeti aç kapa");
$langmsg['newsform'][16] = x("Tarih:");
$langmsg['newsform'][17] = x("Arsivi aç kapa");
$langmsg['newsform'][18] = x("Hiçbir zaman arsivleme");
$langmsg['newsform'][19] = x("Dosya yükleme");
$langmsg['newsform'][20] = x("Dosya indirme");
$langmsg['newsform'][21] = x("Yükleme tamamlandi");
$langmsg['newsform'][22] = x("Makale");
$langmsg['newsform'][23] = x("bir resim girin URL");
$langmsg['newsform'][24] = x("Eklemek");
$langmsg['newsform'][25] = x("Seç yüklenmis bir resim");

#-----COMMENTS MODULE
$langmsg['editcomments'][0] = x("Yorumlari Düzenle");
$langmsg['editcomments'][1] = x("Asagidaki yorumu düzenle.");
$langmsg['editcomments'][2] = x("Yazar:");	
$langmsg['editcomments'][3] = x("Eposta:");
$langmsg['editcomments'][4] = x("Mesaj:");
$langmsg['editcomments'][5] = x("Yorum güncellendi.");
$langmsg['editcomments'][6] = x("adet yorum silindi.");
$langmsg['editcomments'][7] = x("adet yorum güncellendi.");
$langmsg['editcomments'][8] = x("Toplam adet yorum.");
$langmsg['editcomments'][9] = x("Mesaj");
$langmsg['editcomments'][10] = x("Tarih");
$langmsg['editcomments'][11] = x("Onay");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Onaylandi");
$langmsg['editcomments'][14] = x("Onaylanmadi");
$langmsg['editcomments'][15] = x("Yer:");

#-----PRIVATE MESSAGES MODUKE
$langmsg['privmsgs'][0] = x("Özel Mesaj");
$langmsg['privmsgs'][1] = x("Gelen Kutusu");
$langmsg['privmsgs'][2] = x("Giden Kutusu");
$langmsg['privmsgs'][3] = x("Yeni Mesaj");
$langmsg['privmsgs'][4] = x("Toplam");
$langmsg['privmsgs'][5] = x("Baslik");
$langmsg['privmsgs'][6] = x("Kimden");
$langmsg['privmsgs'][7] = x("Gönderildi");
$langmsg['privmsgs'][8] = x("Kime");
$langmsg['privmsgs'][9] = x("Bu mesaja cevap ver");
$langmsg['privmsgs'][10] = x("Yeni özel mesaj.");
$langmsg['privmsgs'][11] = x("Kime:");
$langmsg['privmsgs'][12] = x("Baslik:");
$langmsg['privmsgs'][13] = x("Mesaj:");
$langmsg['privmsgs'][14] = x("Örnek 'user1, user2, user3'");
$langmsg['privmsgs'][15] = x("Mesaj önizleme.");
$langmsg['privmsgs'][16] = x("Mesaj su kullanicilara gönderildi.");
$langmsg['privmsgs'][17] = x("Bu mesaji göndermek için bir kullanici seçiniz.");
$langmsg['privmsgs'][18] = x("Bu mesaj için bir baslik yaziniz");
$langmsg['privmsgs'][19] = x("Bir mesaj yaziniz.");
$langmsg['privmsgs'][20] = x("Mesajlar silindi.");
$langmsg['privmsgs'][21] = x("adet mesaj içersinde.");
$langmsg['privmsgs'][22] = x("adet okunmamis mesajiniz var.");

#-----OPTIONS MODULE
$langmsg['options'][0] = x("Ayarlar");

#-----BANNED IPS MODULE
$langmsg['bannedips'][0] = x("Yasakli IPler");
$langmsg['bannedips'][1] = x("Yasakli IPler.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Engellenme sayisi");
$langmsg['bannedips'][4] = x("Yeni IP adresi gir.");
$langmsg['bannedips'][5] = x("Yasaklanmis mesaj. (html açik)");
$langmsg['bannedips'][6] = x("IP Adresi:");
$langmsg['bannedips'][7] = x("Bu IP adresi zaten yasaklanmis.");
$langmsg['bannedips'][8] = x("IP adresi yasaklandi.");
$langmsg['bannedips'][9] = x("IP adresi silindi.");
$langmsg['bannedips'][10] = x("IP adresi sifirlandi.");
$langmsg['bannedips'][11] = x("Yasakli mesaj güncellendi.");

#-----CATEGORIES MODULE
$langmsg['cats'][0] = x("Kategoriler");
$langmsg['cats'][1] = x("kategori gösteriliyor.");
$langmsg['cats'][2] = x("Isim");
$langmsg['cats'][3] = x("Gönderiler");
$langmsg['cats'][4] = x("Yeni kategori olustur.");
$langmsg['cats'][5] = x("Isim:");
$langmsg['cats'][6] = x("Bu kategoriler silindi:");
$langmsg['cats'][7] = x("Farkli bir isim seçiniz.");
$langmsg['cats'][8] = x("Kategori olusturuldu.");
$langmsg['cats'][9] = x("Kategori güncellendi.");
$langmsg['cats'][10] = x("Kategoriyi asagidan düzenleyiniz.");
$langmsg['cats'][11] = x("Resimler");
$langmsg['cats'][12] = x("Dosyalar");
$langmsg['cats'][13] = x("Bu ad? ta??yan bir kategori zaten var, lütfen ba?ka bir isim seçiniz..");

#-----IMAGE UPLOADS MODULE
$langmsg['img'][0] = x("Resim Yüklemeleri");
$langmsg['img'][1] = x("Yeni bir resim yükle");
$langmsg['img'][2] = x("Dosya yükle");
$langmsg['img'][3] = x("Toplam resimde");
$langmsg['img'][4] = x("Bir resim seçiniz:");
$langmsg['img'][5] = x("resim silindi.");
$langmsg['img'][6] = x("Resim aktarildi");
$langmsg['img'][7] = x("Dosya yüklenirken bir hata olustu, lütfen tekrar deneyiniz.");
$langmsg['img'][8] = x("Geçersiz dosya uzantisi.");
$langmsg['img'][9] = x("Geçersiz resim.");
$langmsg['img'][10] = x("Resim kategoriden kaldirildi.");
$langmsg['img'][11] = x("resim kategoriye eklendi.");
$langmsg['img'][12] = x("Dosya adi:");
$langmsg['img'][13] = x("Kategori seçiniz:");
$langmsg['img'][14] = x("Resmi düzenle");
$langmsg['img'][15] = x("Baslik:");
$langmsg['img'][16] = x("Açiklama:");
$langmsg['img'][17] = x("Resmi Güncelle");
$langmsg['img'][18] = x("Geçersiz resim");
$langmsg['img'][19] = x("Resim güncellendi");
$langmsg['img'][20] = x("Küçük resimler");
$langmsg['img'][21] = x("Detaylar");
$langmsg['img'][22] = x("Kategori:");
$langmsg['img'][23] = x("Dosya adi");
$langmsg['img'][24] = x("Dosya boyutu");
$langmsg['img'][25] = x("Gönderen");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("Kategoriye ekle");
$langmsg['img'][28] = x("Kategoriden kaldir");
$langmsg['img'][29] = x("Yüklenmis resimler");
$langmsg['img'][30] = x("Bu isimde bir dosya zaten mevcut.");
$langmsg['img'][31] = x("Tüm kategoriler");
$langmsg['img'][32] = x("Yüklenenler dizinine yazma kurulamiyor. 777 Bu dizinin CHMOD");

#-----PERSONAL MODULE
$langmsg['personal'][0] = x("Kisisel Ayarlar");
$langmsg['personal'][1] = x("Hesap bilgilerinizi asagidan düzenleyiniz.");
$langmsg['personal'][2] = x("Kisisel ayarlar");
$langmsg['personal'][3] = x("Avatar url:");
$langmsg['personal'][4] = x("Eposta adresi:");
$langmsg['personal'][5] = x("Mesaj uyarilari:");
$langmsg['personal'][6] = x("Giriste okunmamis mesaj uyarisi?");
$langmsg['personal'][7] = x("Yeni sifre:");
$langmsg['personal'][8] = x("(degistirmek istemiyorsaniz bos birakin)");
$langmsg['personal'][9] = x("Sifreyi dogrula:");
$langmsg['personal'][10] = x("Bir e-posta adresi girmeniz gerekmekte.");
$langmsg['personal'][11] = x("Ayarlar güncellendi.");
$langmsg['personal'][12] = x("Sifreler uyusmuyor.");
$langmsg['personal'][13] = x("Enable WYSIWYG editörü?");

#-----LOGIN MODULE
$langmsg['login'][0] = x("Lütfen Giris Yapin");
$langmsg['login'][1] = x("Isim:");
$langmsg['login'][2] = x("Sifre:");
$langmsg['login'][3] = x("Sifrenizi mi unuttunuz?");
$langmsg['login'][4] = x("Beni hatirla");
$langmsg['login'][5] = x("Güvenlik Kodu:");
$langmsg['login'][6] = x("Giris");
$langmsg['login'][7] = x("Yanlis güvenlik kodu");
$langmsg['login'][8] = x("Yanlis kullanici adi veya sifre");
$langmsg['login'][9] = x("Bu kodu asagiya yaziniz");

#-----PROFILE MODULE
$langmsg['profile'][0] = x("Profili Düzenle");
$langmsg['profile'][1] = x("Profilinizi asagidan düzenleyebilirsiniz.");
$langmsg['profile'][2] = x("Isim:");
$langmsg['profile'][3] = x("Yas:");
$langmsg['profile'][4] = x("Yer:");
$langmsg['profile'][5] = x("Cinsiyet:");
$langmsg['profile'][6] = x("Profil fotografi:");
$langmsg['profile'][7] = x("Anasayfa:");
$langmsg['profile'][8] = x("Ilgileri:");
$langmsg['profile'][9] = x("Hobileri:");
$langmsg['profile'][10] = x("Is:");
$langmsg['profile'][11] = x("Favori sözü:");
$langmsg['profile'][12] = x("Erkek");
$langmsg['profile'][13] = x("Kadin");
$langmsg['profile'][14] = x("Profil güncellendi.");
$langmsg['profile'][15] = x("Hiçbiri");

#-----ACCOUNTS MODULE
$langmsg['accounts'][0] = x("Hesaplar");
$langmsg['accounts'][1] = x("Hesaplar");
$langmsg['accounts'][2] = x("Kullanici adi");
$langmsg['accounts'][3] = x("Giris seviyesi");
$langmsg['accounts'][4] = x("Gönderi sayisi");
$langmsg['accounts'][5] = x("Yorum sayisi");
$langmsg['accounts'][6] = x("Yeni bir hesap olustur.");
$langmsg['accounts'][7] = x("Hesap adi:");
$langmsg['accounts'][8] = x("Eposta:");
$langmsg['accounts'][9] = x("Yeni sifre:");
$langmsg['accounts'][10] = x("Sifreyi dogrula:");
$langmsg['accounts'][11] = x("Giris seviyesi:");
$langmsg['accounts'][12] = x("Yeni hesap.");
$langmsg['accounts'][13] = x("Asagidaki hesabi düzenle.");
$langmsg['accounts'][14] = x("Mail adresi girilmesi gerekiyor.");
$langmsg['accounts'][15] = x("Hesap güncellendi.");
$langmsg['accounts'][16] = x("Sifreler eslesmiyor.");
$langmsg['accounts'][17] = x("Hesap adi girilmesi gerekiyor.");
$langmsg['accounts'][18] = x("Hesap adi zaten var. Lütfen baska seçiniz.");
$langmsg['accounts'][19] = x("Sifre girmeniz gerekiyor.");
$langmsg['accounts'][20] = x("Hesap olusturuldu.");
$langmsg['accounts'][21] = x("Su hesaplar silindi:");
$langmsg['accounts'][22] = x("Kendi hesabinizi silemezsiniz.");
$langmsg['accounts'][23] = x("(Ayni kalmasini istiyorsaniz bos birakin)");
$langmsg['accounts'][24] = x("Bir hesap bu eposta adresini kullaniyor. Lütfen farkli bir eposta adresi ile deneyiniz.");
$langmsg['accounts'][25] = x("Lütfen bir hesap adi giriniz");

#----ACCESS MODULE
$langmsg['access'][0] = x("Giris Seviyeleri");
$langmsg['access'][1] = x("Yeni bir giris seviyesi olustur.");
$langmsg['access'][2] = x("Isim:");
$langmsg['access'][3] = x("Hangi bölümler bu seviyeye erisebilir?");
$langmsg['access'][4] = x("Hesaplar:");
$langmsg['access'][5] = x("Erisim Seviyeleri:");
$langmsg['access'][6] = x("Banlanmis IP'ler:");
$langmsg['access'][7] = x("Kategoriler:");
$langmsg['access'][8] = x("Yorumlar:");
$langmsg['access'][9] = x("Yardim:");
$langmsg['access'][10] = x("Resim Yüklemeleri:");
$langmsg['access'][11] = x("Haberler:");
$langmsg['access'][12] = x("Kisisel Seçenekler:");
$langmsg['access'][13] = x("Özel Mesajlar:");
$langmsg['access'][14] = x("Profil:");
$langmsg['access'][15] = x("RSS Beslemeleri:");
$langmsg['access'][16] = x("Ifadeler:");
$langmsg['access'][17] = x("Sistem Yapilandirma:");
$langmsg['access'][18] = x("Sablonlar:");
$langmsg['access'][19] = x("Kelime Süzgeci:");
$langmsg['access'][20] = x("Bu erisim seviyesi hangi kategorilere yollayabilir?");
$langmsg['access'][21] = x("Hepsi:");
$langmsg['access'][22] = x("Bu seviye hangi gönderileri düzenleyebilir?");
$langmsg['access'][23] = x("Admin (Hepsi):");
$langmsg['access'][24] = x("Mod (Kendi + Üyeler):");
$langmsg['access'][25] = x("Üye (Kendi):");
$langmsg['access'][26] = x("Bu seviye tarafindan yapilan gönderiler otomatik onaylanacak mi?");
$langmsg['access'][27] = x("Bu erisim seviyesi gönderileri onaylayabilir mi?");
$langmsg['access'][28] = x("Bu erisim seviyesi HTML kullanabilir mi?");
$langmsg['access'][29] = x("Kategori seçmeden gönderi yollamaya izin verilsin mi?");
$langmsg['access'][30] = x("Silinen erisim seviyeleri:");
$langmsg['access'][31] = x("Su erisim seviyeleri silinemedi çünkü kendilerine atanmis 1 ya da daha fazla hesap bulunmakta:");
$langmsg['access'][32] = x("Asagidaki erisim seviyesini düzenle.");
$langmsg['access'][33] = x("Please enter a name for this access level.");
$langmsg['access'][34] = x("Erisim seviyesi güncellendi.");
$langmsg['access'][35] = x("Bu isimde bir erisim seviyesi bulunmaktadir, lütfen baska bir isim seçiniz.");
$langmsg['access'][36] = x("Lütfen bu seviyenin hangi gönderileri düzenleyebilecegini seçiniz.");
$langmsg['access'][37] = x("Lütfen bu erisim seviyesinin gönderilerinin otomatik onaylanip onaylanmayacagini seçiniz");
$langmsg['access'][38] = x("Lütfen bu erisim seviyesinin gönderileri onaylayip onaylayamayacagini seçiniz");
$langmsg['access'][39] = x("Lütfen bu erisim seviyesinin HTML kullanip kullanamayacagini seçiniz");
$langmsg['access'][40] = x("Lütfen bu erisim seviyesinin kategori seçmeden gönderi yapip yapamayacagini seçiniz");
$langmsg['access'][41] = x("Erisim seviyesi olusturuldu.");
$langmsg['access'][42] = x("Giris Seviyeleri.");
$langmsg['access'][43] = x("Isim");
$langmsg['access'][44] = x("Erisim");
$langmsg['access'][45] = x("Hesaplar");
$langmsg['access'][46] = x("Member");
$langmsg['access'][47] = x("Moderatör");
$langmsg['access'][48] = x("Administrator");
$langmsg['access'][49] = x("Dosya Yüklemeleri");
$langmsg['access'][50] = x(", Bu erisim düzeyini görüntülemek kullanici IP adresleri?");
$langmsg['access'][51] = x("Hangi dosyalarin & Imajlar erisim düzeyini düzenleyebilir?");
$langmsg['access'][52] = x("Sahip olmak");
$langmsg['access'][53] = x("Hepsi");

#-----ACCESSLOGS MODULE
$langmsg['accesslogs'][0] = x("Erisim Loglari");
$langmsg['accesslogs'][1] = x("Kullanici Adi");
$langmsg['accesslogs'][2] = x("Girisim");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Tarih");
$langmsg['accesslogs'][5] = x("Erisim loglari");
$langmsg['accesslogs'][6] = x("Basarili");
$langmsg['accesslogs'][7] = x("Basarisiz");

#-----FILTERS MODULE
$langmsg['filters'][0] = x("Kelime Süzgeci");
$langmsg['filters'][1] = x("Süzgeç eklendi.");
$langmsg['filters'][2] = x("Filter removed.");
$langmsg['filters'][3] = x("Asagidaki tüm kelimeler tüm yorumlarda filtrelenecektir.");
$langmsg['filters'][4] = x("Filtrelenen Kelime");
$langmsg['filters'][5] = x("Sununla Degistir");
$langmsg['filters'][6] = x("Sil");

#-----RSS MODULE
$langmsg['rss'][0] = x("RSS Beslemeleri");
$langmsg['rss'][1] = x("RSS Besleme ayarlarinizi asagidan degistiriniz");
$langmsg['rss'][2] = x("Haber yeri haberlerinizi göstereceginiz yerdir, örnegin http://yourdomain.com/ veya http://yourdomain.com/index");
$langmsg['rss'][3] = x("Besleme ismi:");
$langmsg['rss'][4] = x("Haber yeri:");
$langmsg['rss'][5] = x("RSS beslemenizin basligi:");
$langmsg['rss'][6] = x("RSS beslemenizin açiklamasi:");
$langmsg['rss'][7] = x("Karakter kodlamasi:");
$langmsg['rss'][8] = x("Dil:");
$langmsg['rss'][9] = x("Gösterilecek gönderi adedi:");
$langmsg['rss'][10] = x("0 = hepsi");
$langmsg['rss'][11] = x("Gösterilecek kategoriler:");
$langmsg['rss'][12] = x("Bir kategoriye atanmamis gönderiler gösterilsin mi?");
$langmsg['rss'][13] = x("Rss Kodu:");
$langmsg['rss'][14] = x("Beslemenizin nasil gösterilecegini düzenleyin");
$langmsg['rss'][15] = x("Yazinin basligini gösterir.");
$langmsg['rss'][16] = x("Haberlerin kisa yazisini gösterir.");	
$langmsg['rss'][17] = x("Haberlerin yazisini gösterir.");
$langmsg['rss'][18] = x("Her gönderinin atandigi kategorileri gösterir.");    
$langmsg['rss'][19] = x("Belirli gönderi için URL'leri gösterir.");
$langmsg['rss'][20] = x("Yazinin yayinlandigi tarihi gösterir.");
$langmsg['rss'][21] = x("Saat dilimi ayarini gösterir.");
$langmsg['rss'][22] = x("Her gönderinin tarih bilgisini gösterir.");
$langmsg['rss'][23] = x("Yazinin yazraini gösterir.");
$langmsg['rss'][24] = x("Kullanicilarin eger varsa avatarini gösterir.");
$langmsg['rss'][25] = x("Her yaziya ait özgün ID'yi gösterir.");
$langmsg['rss'][26] = x("Her haber gönderisi için yorum adedini gösterir.");
$langmsg['rss'][27] = x("Lütfen besleme ismini giriniz");
$langmsg['rss'][28] = x("Lütfen haber yeri giriniz");
$langmsg['rss'][29] = x("Lütfen bir baslik giriniz");
$langmsg['rss'][30] = x("Lütfen bir açiklama giriniz");
$langmsg['rss'][31] = x("Lütfen karakter kodlamasini giriniz");
$langmsg['rss'][32] = x("Lütfen dili giriniz");
$langmsg['rss'][33] = x("Lütfen gösterilecek adedi seçiniz");
$langmsg['rss'][34] = x("RSS Beslemesi olusturuldu");
$langmsg['rss'][35] = x("Bu isimde bir besleme bulunmakta, lütfen basak bir isim seçiniz");
$langmsg['rss'][36] = x("RSS Beslemesi güncellendi");
$langmsg['rss'][37] = x("RSS Beslemeleri");
$langmsg['rss'][38] = x("RSS beslemesi silindi.");
$langmsg['rss'][39] = x("Isim");
$langmsg['rss'][40] = x("Kategoriler");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Yeni bir RSS Besleme olustur.");
$langmsg['rss'][43] = x("Hikayenin dostu basligi gösterir");

#-----SMILIES MODULE
$langmsg['smilies'][0] = x("Ifadeler");
$langmsg['smilies'][1] = x("Bütün ifadelerinizi yerini tek seferde güncellemek istiyorsaniz bu yararlidir.");
$langmsg['smilies'][2] = x("Eger tüm ifadelerin yerini yeni bir konum ile degistirmek istiyorsaniz http://domain.com/oldlocation/smiliesadresinihttp://domain.com/newlocation/smiliesile veyasmilies/adresinihttp://domain.com/smilies/ile degistirmelisiniz");
$langmsg['smilies'][3] = x("Degistir:");
$langmsg['smilies'][4] = x("Sununla degistir:");
$langmsg['smilies'][5] = x("Tüm yollar güncellendi.");
$langmsg['smilies'][6] = x("Yeni bir ifade olustur");
$langmsg['smilies'][7] = x("Yol:");
$langmsg['smilies'][8] = x("Tus kodu:");
$langmsg['smilies'][9] = x("Lütfen ifadenin yolunu giriniz.");
$langmsg['smilies'][10] = x("Lütfen bu ifade için bir tus kodu giriniz.");
$langmsg['smilies'][11] = x("Bu tus kodu kullanimda. Lütfen farkli bir tus kodu seçiniz.");
$langmsg['smilies'][12] = x("Ifade eklendi.");
$langmsg['smilies'][13] = x("Bu ifadeyi silmek istediginize emin misiniz?");
$langmsg['smilies'][14] = x("Ifade silindi.");
$langmsg['smilies'][15] = x("Asagidaki ifadeyi düzenle");
$langmsg['smilies'][16] = x("Ifade:");
$langmsg['smilies'][17] = x("Ifade güncellendi.");
$langmsg['smilies'][18] = x("Ifadeler silindi");
$langmsg['smilies'][19] = x("Lütfen düzenlemek istediginiz ifadeyi seçiniz.");
$langmsg['smilies'][20] = x("Ifade");
$langmsg['smilies'][21] = x("Yeni bir ifade ekle.");
$langmsg['smilies'][22] = x("Tüm ifadelerin yolunu güncelle");

#-----SYSTEM MODULE
$langmsg['system'][0] = x("Sistem Yapilandirma");
$langmsg['system'][1] = x("Sistem yapilandirmalarini düzenle.");
$langmsg['system'][2] = x("Haberler");
$langmsg['system'][3] = x("Sayfa basina haber adedi:");
$langmsg['system'][4] = x("Haberlerin hangi sirayla gösterilecegi:");
$langmsg['system'][5] = x("Azalan");
$langmsg['system'][6] = x("Artan");
$langmsg['system'][7] = x("Haberler için tarih ve saat formati:");
$langmsg['system'][8] = x("Buraya bakiniz");
$langmsg['system'][9] = x("Avatarlari göster:");
$langmsg['system'][10] = x("Haberler gösterilirken kategorileri ayirmak için ayirici:");
$langmsg['system'][11] = x("Yorumlar");
$langmsg['system'][12] = x("Sayfa basina yorum adedi:");
$langmsg['system'][13] = x("Yorumlarin maksimum uzunlugu:");
$langmsg['system'][14] = x("Yorumlar için tarih ve saat formati:");
$langmsg['system'][15] = x("Yorumlarun maksimum uzunlugu:");
$langmsg['system'][16] = x("Yorumlari yeni pencerede göster:");
$langmsg['system'][17] = x("Yorumlar arasi gecmesi gereken süre (Spam koruma):");
$langmsg['system'][18] = x("Saniye");
$langmsg['system'][19] = x("Spam mesaji:");
$langmsg['system'][20] = x("Yeni yorum mesaji:");
$langmsg['system'][21] = x("Yeni yorum onay mesaji:");
$langmsg['system'][22] = x("Yorum formunda resim dogrulama kullan:");
$langmsg['system'][23] = x("Arama motoru dostu URL");
$langmsg['system'][24] = x("Aktif mi:");
$langmsg['system'][25] = x("Dosya uzantisi:");
$langmsg['system'][26] = x("Ön ek:");
$langmsg['system'][27] = x("Klasör dosya ismi:");
$langmsg['system'][28] = x("Kayit");
$langmsg['system'][29] = x("Kullanicilarin kaydolmasina izin ver:");
$langmsg['system'][30] = x("Yeni kullanicilar için erisim seviyesi:");
$langmsg['system'][31] = x("Diger");
$langmsg['system'][32] = x("Zaman dilimi:");
$langmsg['system'][33] = x("Yüklenen resimler için izin verilen dosya tipleri:");
$langmsg['system'][34] = x("Resim yükleme yolu:");
$langmsg['system'][35] = x("Erisim yok hata mesaji:");
$langmsg['system'][36] = x("Ayarlar güncellendi.");
$langmsg['system'][37] = x("Gönder'den sonraki gecikme süresi (Spam koruma):");
$langmsg['system'][38] = x("Hatirlatma");
$langmsg['system'][39] = x("Yeni yorumlar için e-posta hatirlatmasi al:");
$langmsg['system'][40] = x("Yeni kayitlar için e-posta hatirlatmasi al:");
$langmsg['system'][41] = x("Sadece kayitli kullanicilarin yorum yapmasina izin ver:");
$langmsg['system'][42] = x("Bu e-posta adresine hatirlatma gönder:");
$langmsg['system'][43] = x("Yüklenen dosyalar için izin verilen dosya tipleri:");
$langmsg['system'][44] = x("Onaylanmamis haber gönderileri için bilgilendirme maili al");
$langmsg['system'][45] = x("Genel anahtar");
$langmsg['system'][46] = x("Özel anahtar");
$langmsg['system'][47] = x("Script yolu");
$langmsg['system'][48] = x("Kendi yorum silmek için kayitli kullanici izin ver:");
$langmsg['system'][49] = x("Kütügü giris formu kullanin görüntü dogrulama:");
$langmsg['system'][50] = x("Kayit formu kullanin görüntü dogrulama:");
$langmsg['system'][51] = x("Tarih ve dosyalar için zaman biçimi:");
$langmsg['system'][52] = x("Show 'ile' haber asagida Powered:");

#-----RECOVERY MODULE
$langmsg['recover'][0] = x("Sifre Kurtarici");
$langmsg['recover'][1] = x("Sifresini sifirlamak istediginiz hesabin eposta adresini giriniz.");
$langmsg['recover'][2] = x("Eposta:");
$langmsg['recover'][3] = x("Siz ya da baska birisi sifrenizi sifirlama isteiginden bulundu, sifirlamak için asagidaki linki kullanin.");
$langmsg['recover'][4] = x("Sifrenizi sifirlamak için burayi tiklayin");
$langmsg['recover'][5] = x("Hesabiniza erismek için su adrese");
$langmsg['recover'][6] = x("Bu eposta adresine sahip bir hesap bulunamadi, lütfen yönetici ile temasa geçiniz.");
$langmsg['recover'][7] = x("yeni Sifre");
$langmsg['recover'][8] = x("Lütfen yeni sifrenizi asagiya giriniz.");
$langmsg['recover'][9] = x("Sifre kurtarma e-postasi yollanamadi, lütfen sistem yöneticinizle iletisime geçin.");
$langmsg['recover'][10] = x("Sifreyi Onayla:");
$langmsg['recover'][11] = x("Sifreler eslesmiyor.");
$langmsg['recover'][12] = x("Sifreniz güncellendi.");
$langmsg['recover'][13] = x("yönergeleri içeren e-posta yollanmistir.");

#-----TEMPLATES MODULE
$langmsg['templates'][0] = x("Sablonlar");
$langmsg['templates'][1] = x("Yeni sablon olustur.");
$langmsg['templates'][2] = x("Isim:");
$langmsg['templates'][3] = x("Haberlerinizin gösterilem seklini degistirir.");
$langmsg['templates'][4] = x("Yazinin basligini gösterir.");
$langmsg['templates'][5] = x("Haberlerin kisa yazisini gösterir.");
$langmsg['templates'][6] = x("Haberlerin yazisini gösterir.");
$langmsg['templates'][7] = x("Yazinin yayinlanma tarihini gösterir.");
$langmsg['templates'][8] = x("Her gönderinin atandigi kategoriyi gösterir.");
$langmsg['templates'][9] = x("Yazinin yazarini gösterir.");
$langmsg['templates'][10] = x("Kullanici avatarini varsa gösterir.");
$langmsg['templates'][11] = x("Her yazinin özgün ID'sini gösterir.");
$langmsg['templates'][12] = x("Yazarin IP adresini gösterir. (Sadece log in iseniz gösterir)");
$langmsg['templates'][13] = x("Yazinin tümünü oku linkini gösterir");
$langmsg['templates'][14] = x("E-posta adresinizi gösterecektir.");
$langmsg['templates'][15] = x("E-posta adresinize bir link olusturacaktir.");
$langmsg['templates'][16] = x("Profilinize bir link olusturacaktir.");
$langmsg['templates'][17] = x("Her bir gönderi için yorum adedini gösterir.");
$langmsg['templates'][18] = x("Yorumlara link olusturur.");
$langmsg['templates'][19] = x("Bu tag'lerin arasina konan sey sadece log in olunca gösterilecek.");
$langmsg['templates'][20] = x("Ifadelerin yolu");
$langmsg['templates'][21] = x("Yorumlar");
$langmsg['templates'][22] = x("Yorumlarin gösterilis seklini degistirir.");
$langmsg['templates'][23] = x("Yorumun yazarini gösterir.");
$langmsg['templates'][24] = x("Mesaji gösterir.");
$langmsg['templates'][25] = x("Kullanici avatarini varsa gösterir.");
$langmsg['templates'][26] = x("Yazarin IP adresini gösterir. (Sadece log in iseniz gösterir)");
$langmsg['templates'][27] = x("Her yorumun özgün ID'sini gösterir.");
$langmsg['templates'][28] = x("Yorumu yazan kullanicinin e-posta adresini gösterir.");
$langmsg['templates'][29] = x("Kullanicinin e-posta adresine link olusturacaktir.");
$langmsg['templates'][30] = x("Yorumun yayinlandigi tarih gösterir.");
$langmsg['templates'][31] = x("Bu tag'lerin arasina konan sey sadece log in olunca gösterilecek.");
$langmsg['templates'][32] = x("Yorum Formu");
$langmsg['templates'][33] = x("Bütün alanlarin isimlerini ve ID'leri ayni birakmaniz gerekmektedir. Aksi takdirde çalismayacaktir. Ayrica sunu aklinizda bulundurun; form onsubmit degeri olan useajax='', yes veya no olmasi kullanicilarin yorum gönderdigi alanda ajax kullanilip kullanilmadigini belirler.");
$langmsg['templates'][34] = x("Haber gönderisinin ID'sini gösterir.");
$langmsg['templates'][35] = x("Haber gönderisinin kategorisini gösterir.");
$langmsg['templates'][36] = x("Log in olunca kullanici adinizi gösterir.");
$langmsg['templates'][37] = x("Log in olunca e-posta adresinizi gösterir.");
$langmsg['templates'][38] = x("Mesaji gösterir.");
$langmsg['templates'][39] = x("Tüm ifadeleri gösterir.");
$langmsg['templates'][40] = x("Haber Sayfalandirma");
$langmsg['templates'][44] = x("Yorum Sayfalandirma");
$langmsg['templates'][45] = x("Eger varsa bir önceki linki gösterir.");
$langmsg['templates'][46] = x("Eger varsa bir sonraki linki gösterir.");
$langmsg['templates'][47] = x("Sayfa sayisini gösterir, Ör: 1 2 3 4.");
$langmsg['templates'][48] = x("Profiller");
$langmsg['templates'][49] = x("Kullanici profillerinin nasil gösterilecegini düzenle.");
$langmsg['templates'][50] = x("Kullanicilarin kullanici adini gösterir.");
$langmsg['templates'][51] = x("Kullanicinin adini gösterir.");
$langmsg['templates'][52] = x("Kullanicin yasini gösterir.");
$langmsg['templates'][53] = x("Kullanicin yerini gösterir.");
$langmsg['templates'][54] = x("Kullanicin cinsiyetini gösterir.");
$langmsg['templates'][55] = x("Kullanicinin web sitesine link olustur.");
$langmsg['templates'][56] = x("Kullanicinin ilgi alanlarini gösterir.");
$langmsg['templates'][57] = x("Kullanicinin hobilerini gösterir.");
$langmsg['templates'][58] = x("Kullanicinin meslegini gösterir.");
$langmsg['templates'][59] = x("Kullanicinin favori sözünü gösterir.");
$langmsg['templates'][60] = x("Kullanicinin profil resmini göster.");
$langmsg['templates'][61] = x("Yeni Yapi");
$langmsg['templates'][62] = x("Burasi haberler için siralama kistasini fiziksel olarak belirleyebileceginiz veya kaç tane gösterilmesi gerektigini beliryebileceginiz alandir.");
$langmsg['templates'][63] = x("Haber gönderilerinizi gösterir.");
$langmsg['templates'][64] = x("Haber sayfalandirmasini gösterir.");
$langmsg['templates'][65] = x("Yorum Yapisi");
$langmsg['templates'][66] = x("Burasi yorumlar için siralama kistasini fiziksel olarak belirleyebileceginiz veya kaç tane gösterilmesi gerektigini beliryebileceginiz alandir.");
$langmsg['templates'][67] = x("Yorumlari görüntülerken tek haber gönderilerini gösterir");
$langmsg['templates'][68] = x("Yorumlarinizi gösterir.");
$langmsg['templates'][69] = x("Yorum sayfalandirmasini gösterir.");
$langmsg['templates'][70] = x("Yorum formunu gösterir.");
$langmsg['templates'][71] = x("Kayit Formu");
$langmsg['templates'][72] = x("Burasi kullanicilara kayit olmasini kontrol edebileceginiz formdur. Bütün alanlarin isimlerini ve ID'leri ayni birakmaniz gerekmektedir. Aksi takdirde çalismayacaktir.");
$langmsg['templates'][73] = x("Kullanicinin girdigi kullanici adi.");
$langmsg['templates'][74] = x("Kullanicinin girdigi sifre.");
$langmsg['templates'][75] = x("Bir alan bos birakildigindaki hata mesajini gösterir.");
$langmsg['templates'][76] = x("Lütfen bir isim giriniz.");
$langmsg['templates'][77] = x("Sablon olusturuldu.");
$langmsg['templates'][78] = x("Lütfen baska bir isim seçiniz.");
$langmsg['templates'][79] = x("Haberlerinizin ve yorumlarinizin görüntülenme seklini degistirmek için lütfen asagidaki sablonlari düzenleyiniz.");
$langmsg['templates'][80] = x("Haberler");
$langmsg['templates'][81] = x("Sablon güncellendi.");
$langmsg['templates'][82] = x("Bu isimde bir sablon bulunmakta. Lütfen baska bir isim seçiniz");
$langmsg['templates'][83] = x("Kullanimda olan bir sablon silinemez");
$langmsg['templates'][84] = x("Seçilen sablon(lar) silindi");
$langmsg['templates'][85] = x("Sablon(lar) kopyalandi");
$langmsg['templates'][86] = x("Düzenlemek için asagidan sablon ismi seçiniz.");
$langmsg['templates'][87] = x("Sablon seçildi.");
$langmsg['templates'][88] = x("Isim");
$langmsg['templates'][89] = x("Seçildi");
$langmsg['templates'][90] = x("Yeni sablon olustur.");
$langmsg['templates'][91] = x("Seç");
$langmsg['templates'][92] = x("Her yazinin görüntülenme sayisini gösterir.");
$langmsg['templates'][93] = x("Rating yildiz resmini gösterir.");
$langmsg['templates'][94] = x("Yazinin o anki ratingini gösterir.");
$langmsg['templates'][95] = x("Yazinin oylanma sayisini gösterir.");
$langmsg['templates'][96] = x("Oylama formunu gösterir.");
$langmsg['templates'][98] = x("Forma gönder'i gösterir.");
$langmsg['templates'][99] = x("Kullanicinin yerini gösterir");
$langmsg['templates'][100] = x("Yüklenen Dosyalar");
$langmsg['templates'][101] = x("Yüklenen dosyalarinizin nasil gösterilecegini kontrol edin.");
$langmsg['templates'][102] = x("Dosyanin yüklenme tarihi.");
$langmsg['templates'][103] = x("Dosyanin basligi.");
$langmsg['templates'][104] = x("Dosyanin dosya ismi.");
$langmsg['templates'][105] = x("Dosyanin büyüklügü.");
$langmsg['templates'][106] = x("Dosyayi indirme URL'si.");
$langmsg['templates'][107] = x("Yükleyenin kullanici adi.");
$langmsg['templates'][108] = x("Dosyanin indirilme sayisi.");
$langmsg['templates'][109] = x("Haber gönderilerine bagli olan dosyalari gösterir.");
$langmsg['templates'][110] = x("Haber gönderilerine bagli olan her dosyayi gösterir.");
$langmsg['templates'][111] = x("Bir seferde sadece 3 sayfa gösterir");
$langmsg['templates'][112] = x("Birinci sayfada bulunulmuyorsa birinci sayfaya link verir.");
$langmsg['templates'][113] = x("Son sayfada bulunulmuyorsa son sayfaya link verir.");
$langmsg['templates'][114] = x("Bu gönderi için kelime sayisini gösterir ");
$langmsg['templates'][115] = x("Hikayenin dostu basligi gösterir");
$langmsg['templates'][116] = x("ReCAPTCHA eleman görüntüler");
$langmsg['templates'][117] = x("Yorumu silmek için bir baglanti olusturur.");
$langmsg['templates'][118] = x("Görüntüler giris formu sadece giris gereklidir.");
$langmsg['templates'][119] = x("Giris Formu");
$langmsg['templates'][120] = x("Kontrolü nasil giris formu görüntülenir.");
$langmsg['templates'][121] = x("Görüntüler e-posta kullanici girdi.");
$langmsg['templates'][122] = x("Görüntüler giris hata mesaji.");
$langmsg['templates'][123] = x("Görüntüler reCAPTCHA elemani.");
$langmsg['templates'][124] = x("Görüntüler adi kullanici girdi.");
$langmsg['templates'][125] = x("görüntülerinde adi sisteme girdiyseniz.");
$langmsg['templates'][126] = x("Görüntüler Arama formu. Tüm isimleri ve kimlikleri ayni kalmalidir.");
$langmsg['templates'][127] = x("Her arama sonucu için görüntüler numarasi");
$langmsg['templates'][128] = x("Biçimleri nasil arama sonuçlarinin görüntülenecegi olsun. Her sonuç için yinelenir.");
$langmsg['templates'][129] = x("Her satir için bir ya da iki çikis arasindaki Vekiller.");
$langmsg['templates'][130] = x("Geçerli sayfa numarasi.");
$langmsg['templates'][131] = x("Bir önceki sayfa numarasi.");
$langmsg['templates'][132] = x("Bir sonraki sayfa numarasi.");
$langmsg['templates'][133] = x("Görüntüler haber makalenin dostu baslik.");
$langmsg['templates'][134] = x("Arama formu gönder");
$langmsg['templates'][135] = x("Arama sonuçlari");
$langmsg['templates'][136] = x("Yüklenen dosyalar");


#-----UPLOADED FILES
$langmsg['uploadedfiles'][0] = x("Dosya Yüklemeleri");
$langmsg['uploadedfiles'][1] = x("Yeni dosya yükle");
$langmsg['uploadedfiles'][2] = x("Dosya yükle");
$langmsg['uploadedfiles'][4] = x("Bir dosya seçin:");
$langmsg['uploadedfiles'][5] = x("Dosya silindi.");
$langmsg['uploadedfiles'][6] = x("Dosya yüklendi");
$langmsg['uploadedfiles'][7] = x("Dosya yüklenirken bir hata olustu, lütfen tekrar deneyiniz.");
$langmsg['uploadedfiles'][8] = x("Geçersiz dosya uzantisi.");
$langmsg['uploadedfiles'][9] = x("Geçersiz dosya.");
$langmsg['uploadedfiles'][10] = x("Dosya kategoriden kaldirildi.");
$langmsg['uploadedfiles'][11] = x("dosya kategoriye eklendi.");
$langmsg['uploadedfiles'][12] = x("Dosya adi");
$langmsg['uploadedfiles'][13] = x("Bir kategori seçin:");
$langmsg['uploadedfiles'][14] = x("Bir dosya düzenle");
$langmsg['uploadedfiles'][15] = x("Baslik:");
$langmsg['uploadedfiles'][16] = x("Açiklama:");
$langmsg['uploadedfiles'][17] = x("Dosya güncelle");
$langmsg['uploadedfiles'][18] = x("Geçersiz dosya");
$langmsg['uploadedfiles'][19] = x("Dosya güncellendi");
$langmsg['uploadedfiles'][20] = x("Küçük resimler");
$langmsg['uploadedfiles'][21] = x("Detaylar");
$langmsg['uploadedfiles'][22] = x("Kategori:");
$langmsg['uploadedfiles'][23] = x("Baslik");
$langmsg['uploadedfiles'][24] = x("Boyut");
$langmsg['uploadedfiles'][25] = x("Yükleyen");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("Kategoriye ekle");
$langmsg['uploadedfiles'][28] = x("Kategoriden kaldir");
$langmsg['uploadedfiles'][29] = x("Gönderilmis dosyalar");
$langmsg['uploadedfiles'][30] = x("Bu isimde bir dosya zaten mevcut.");
$langmsg['uploadedfiles'][31] = x("Indirmeleri sifirla:");
$langmsg['uploadedfiles'][32] = x("Tüm kategoriler");
$langmsg['uploadedfiles'][33] = x("yüklemeler");
$langmsg['uploadedfiles'][34] = x("Yükledi");

#-----ADMIN DATA
$langmsg['admindata'][0] = x("Yardim");
$langmsg['admindata'][1] = x("Haber ekle");
$langmsg['admindata'][2] = x("Özel Mesajlar");
$langmsg['admindata'][3] = x("Haber Düzenle");
$langmsg['admindata'][4] = x("Yorum Düzenle");

#-----SUBMIT FIELDS
$langmsg['submitfield'][0] = x("TAMAM");
$langmsg['submitfield'][1] = x("Önizleme");
$langmsg['submitfield'][2] = x("Haber Ekle");
$langmsg['submitfield'][3] = x("Kaydet");
$langmsg['submitfield'][4] = x("Gönder");
$langmsg['submitfield'][5] = x("Olustur");
$langmsg['submitfield'][6] = x("Güncelle");
$langmsg['submitfield'][7] = x("Ekle");
$langmsg['submitfield'][8] = x("Sil");
$langmsg['submitfield'][9] = x("Kurtar");

#-----SELECT FIELDS
$langmsg['selectfield'][0] = x("--Seçiniz--");
$langmsg['selectfield'][1] = x("Evet");
$langmsg['selectfield'][2] = x("Hayir");
$langmsg['selectfield'][3] = x("Sil");
$langmsg['selectfield'][4] = x("Onay gerekli");
$langmsg['selectfield'][5] = x("Yorumlara izin ver");
$langmsg['selectfield'][6] = x("Onaylamayi degistir");
$langmsg['selectfield'][7] = x("Onaylamak");
$langmsg['selectfield'][8] = x("Yorumlar");
$langmsg['selectfield'][9] = x("Onayla");
$langmsg['selectfield'][10] = x("Onaylama");
$langmsg['selectfield'][11] = x("Tarih");
$langmsg['selectfield'][12] = x("Baslik");
$langmsg['selectfield'][13] = x("Yazar");
$langmsg['selectfield'][14] = x("Kategori");
$langmsg['selectfield'][15] = x("# Yorum");
$langmsg['selectfield'][16] = x("Okunmus olarak isaretle");
$langmsg['selectfield'][17] = x("Okunmamis olarak isaretle");
$langmsg['selectfield'][18] = x("Engellenme sayisini sifirla");
$langmsg['selectfield'][19] = x("Kopya olustur");
$langmsg['selectfield'][20] = x("Reset View Count");
$langmsg['selectfield'][21] = x("Reset derecelendirme");

#-----Javascript
$langmsg['js'][0] = x("Bu resmi kategoriden kald?rmak istedi?inize emin misiniz?");
$langmsg['js'][1] = x("Seçili resimleri silmek istedi?inize emin misiniz?");
$langmsg['js'][2] = x("Seçili mesajlar? silmek istedi?inize emin misiniz?");
$langmsg['js'][3] = x("Seçili ?ablonlar? silmek istedi?inize emin misiniz?");
$langmsg['js'][4] = x("Bu IP adreslerini silmek istedi?inize emin misiniz?");
$langmsg['js'][5] = x("Bu IP adreslerinin bloklanma say?s?n? s?f?rlamak istedi?inize emin misiniz?");
$langmsg['js'][6] = x("Bu eri?im seviyelerini silmek istedi?inize emin misiniz?");
$langmsg['js'][7] = x("Bu kategorileri silmek istedi?inize emin misiniz?");
$langmsg['js'][8] = x("Bu kategorileri ve içerdikleri gönderileri silmek istedi?inize emin misiniz?");
$langmsg['js'][9] = x("Bu kategorileri silmek istedi?inize emin misiniz?");
$langmsg['js'][10] = x("Bu hesaplar? silmek istedi?inize emin misiniz?");
$langmsg['js'][11] = x("Bu hesaplar? ve gönderilerini silmek istedi?inize emin misiniz?");
$langmsg['js'][12] = x("Bu gönderileri silmek istedi?inize emin misiniz?");
$langmsg['js'][13] = x("Bir metin giriniz");
$langmsg['js'][14] = x("Metin");
$langmsg['js'][15] = x("Lütfen -?ngilizce- bir renk yaz?n?z. Örnek, red, yellow, blue (veya renklerin hexadecimal de?erlerini de yazabilirsiniz)");
$langmsg['js'][16] = x("blue");
$langmsg['js'][17] = x("Lütfen ba?lant?n?n adresini giriniz");
$langmsg['js'][18] = x("Lütfen gösterilecek metni giriniz");
$langmsg['js'][19] = x("Ba?lant?");
$langmsg['js'][20] = x("Yaz? tipi büyüklü?ü giriniz");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Gösterilecek metin?");
$langmsg['js'][23] = x("Eposta adresi");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Bana eposta gönderin!");
$langmsg['js'][26] = x("Al?nt? metni?");
$langmsg['js'][27] = x("Al?nt?");
$langmsg['js'][28] = x("Seçili yorumlar? silmek istedi?inize emin misiniz?");
$langmsg['js'][29] = x("Seçili kategorileri silmek istedi?inize emin misiniz?");
$langmsg['js'][30] = x("?fadeler yükleniyor... Lütfen bekleyiniz.");
$langmsg['js'][31] = x("Seçili dosyalar? silmek istedi?inize emin misiniz?");
$langmsg['js'][32] = x("Seçili ifadeleri silmek istedi?inize emin misiniz?");

#-----NEWS
$langmsg['news'][0] = x("Lütfen bir isim yaziniz.");
$langmsg['news'][1] = x("Lütfen bir mesaj yaziniz.");
$langmsg['news'][2] = x("Geçersiz güvenlik kodu.");
$langmsg['news'][3] = x("Farkli bir isim seçiniz.");
$langmsg['news'][4] = x("Geçersiz güvenlik kodu");
$langmsg['news'][5] = x("Bulunan sonuç:");
$langmsg['news'][6] = x("Kayit alimi kapali.");
$langmsg['news'][7] = x("Hesabiniz olusturuldu, <a href=\"{adminpath}\">buradan</a> giris yapabilirsiniz.");
$langmsg['news'][8] = x("Lütfen bir isim yaziniz.");
$langmsg['news'][9] = x("Lütfen bir mesaj yaziniz.");
$langmsg['news'][10] = x("Geçersiz güvenlik kodu");
$langmsg['news'][11] = x("Farkli bir isim seçiniz.");
$langmsg['news'][12] = x("Geçersiz güvenlik kodu");
$langmsg['news'][13] = x("Oy verdiginiz için tesekkürler.");
$langmsg['news'][14] = x("Bu yaziyi daha önce oylamissiniz.");
$langmsg['news'][15] = x("Isim");
$langmsg['news'][16] = x("Epostal:");
$langmsg['news'][17] = x("Arkadasinizin Epostasi:");
$langmsg['news'][18] = x("Message:");
$langmsg['news'][19] = x("Hey check out this article I found!");
$langmsg['news'][20] = x("Send to friend");
$langmsg['news'][21] = x("Email sent.");
$langmsg['news'][22] = x("Lütfen adinizi giriniz");
$langmsg['news'][23] = x("Lütfen eposta adersinizi giriniz");
$langmsg['news'][24] = x("Lütfen mesaj giriniz");
$langmsg['news'][25] = x("Lütfen arkadaslarinizin eposta adreslerini giriniz");
$langmsg['news'][27] = x("Geçerli bir eposta adresi giriniz");
$langmsg['news'][28] = x("Lütfen arkadaslariniz için geçerli eposta adresi giriniz");
$langmsg['news'][29] = x("Lütfen bir kullanici adi giriniz.");
$langmsg['news'][30] = x("Bu kullanici adi kullanimda, lütfen farkli bir kullanici adi seçiniz.");
$langmsg['news'][31] = x("Bu e-posta adresi kullanimda, lütfen farkli bir eposta adresi seçiniz.");
$langmsg['news'][32] = x("Lütfen bir mail adresi yaziniz.");
$langmsg['news'][33] = x("Lütfen geçerli bir mail adresi yaziniz.");
$langmsg['news'][34] = x("LÜtfen sifrenizi giriniz.");
$langmsg['news'][35] = x("Lütfen sifrenizi tekrar giriniz.");
$langmsg['news'][36] = x("Girdiginiz sifreler birbirine uymuyor.");
$langmsg['news'][37] = x("Geçersiz güvenlik kodu.");
$langmsg['news'][38] = x("Lütfen ikinci mesaji göndermeden önce");
$langmsg['news'][39] = x("Mesajinizi gönderirken bir hata olustu, lütfen yönetici ile iletisime geçiniz..");
$langmsg['news'][40] = x("Bir yorum göndermek için giris yapmalisiniz.");
$langmsg['news'][41] = x("{domain} adresindeki yeni yorum");
$langmsg['news'][42] = x("Isim: {name} \nEposta/URL: {email} \nIP: {ip} \nMesaj: {message}");
$langmsg['news'][43] = x("{domain} adresinde yeni kayit");
$langmsg['news'][44] = x("Isim: {name} \nEposta: {email} \nIP: {ip}");
$langmsg['news'][45] = x("saniye bekleyiniz.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Ad");
$langmsg['news'][48] = x("Email / URL");
$langmsg['news'][49] = x("Mesaj");
$langmsg['news'][50] = x("Girin bir makale basligi");
$langmsg['news'][51] = x("Özet");
$langmsg['news'][52] = x("Hayir kategoriler");
$langmsg['news'][53] = x("Tarih");
$langmsg['news'][54] = x("Tarih Bu yazi yayinlanmistir");
$langmsg['news'][55] = x("Arsiv");

#-----MONTHS
$langmsg['shortmonths'][0] = x("Oca");
$langmsg['shortmonths'][1] = x("Sub");
$langmsg['shortmonths'][2] = x("Mar");
$langmsg['shortmonths'][3] = x("Nis");
$langmsg['shortmonths'][4] = x("May");
$langmsg['shortmonths'][5] = x("Haz");
$langmsg['shortmonths'][6] = x("Tem");
$langmsg['shortmonths'][7] = x("Agu");
$langmsg['shortmonths'][8] = x("Eyl");
$langmsg['shortmonths'][9] = x("Eki");
$langmsg['shortmonths'][10] = x("Kas");
$langmsg['shortmonths'][11] = x("Ara");

$langmsg['months'][0] = x("Ocak");
$langmsg['months'][1] = x("Subat");
$langmsg['months'][2] = x("Mart");
$langmsg['months'][3] = x("Nisan");
$langmsg['months'][4] = x("Mayis");
$langmsg['months'][5] = x("Haziran");
$langmsg['months'][6] = x("Temmuz");
$langmsg['months'][7] = x("Agustos");
$langmsg['months'][8] = x("Eylül");
$langmsg['months'][9] = x("Ekim");
$langmsg['months'][10] = x("Kasim");
$langmsg['months'][11] = x("Aralik");

#-----SEARCH
$langmsg['search'][0] = x("Aktif haberler");
$langmsg['search'][1] = x("Arsivlenmis haberlr");
$langmsg['search'][2] = x("Yeniden eskiye");
$langmsg['search'][3] = x("Eskiden yeniye");
$langmsg['search'][4] = x("Arama");
$langmsg['search'][5] = x("Tarih araligi");

#-----INSTALL
$langmsg['install'][0] = x("Veritabani baglanti bilgisi");
$langmsg['install'][1] = x("MYSQL sunucu bilgilerinizi asagiya giriniz.");
$langmsg['install'][2] = x("Sunucu adresi:");
$langmsg['install'][3] = x("(genellikle localhost)");
$langmsg['install'][4] = x("Kulanici adi:");
$langmsg['install'][5] = x("Sifre:");
$langmsg['install'][6] = x("veritabani:");
$langmsg['install'][7] = x("Baglantiyi kontrol et");
$langmsg['install'][8] = x("Sunucuya baglaniyor:");
$langmsg['install'][9] = x("Veritabani seçimi:");
$langmsg['install'][10] = x("db.php dosyasi yazilabilir degil, lütfen bu dosyanin CHMOD ayarlarini 777 yapiniz.");
$langmsg['install'][11] = x("Hesap bilgileri");
$langmsg['install'][12] = x("Hesap detaylarinizi asagiya giriniz. Bu bilgileri giris yaparken kullanacaksiniz.");
$langmsg['install'][13] = x("Eposta:");
$langmsg['install'][14] = x("Sifreyi dogrua:");
$langmsg['install'][15] = x("Devam et");
$langmsg['install'][16] = x("Lütfen bir kullanici adi giriniz");
$langmsg['install'][17] = x("Lütfen bir eposta adresi giriniz");
$langmsg['install'][18] = x("Lütfen sifrenizi giriniz");
$langmsg['install'][19] = x("Kurulumu bitirmek için Kur tusuna basiniz");
$langmsg['install'][20] = x("Sifreleriniz uyusmuyor");
$langmsg['install'][21] = x("Kur");
$langmsg['install'][22] = x("Kurulum tamamlaniyor");
$langmsg['install'][23] = x("BASARILI!");
$langmsg['install'][24] = x("N-13 News basarili bir sekilde kuruldu.");
$langmsg['install'][25] = x("Yönetici paneline giris."); 
$langmsg['install'][26] = x("Port:");
$langmsg['install'][27] = x("Soket:");
$langmsg['install'][28] = x("Eklenti:");
$langmsg['install'][29] = x("(varsayilan için bos birakin)");
$langmsg['install'][30] = x("Kurulumu ... Lütfen bekleyiniz.");
$langmsg['install'][31] = x("Mysqli_connect islevi bulunamadi.");
$langmsg['install'][32] = x("Pdo_Mysql islevi bulunamadi.");
?>