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
$langmsg['menu'][1] = x("Haber G�ncelle");
$langmsg['menu'][2] = x("Arsiv");
$langmsg['menu'][3] = x("Yeni Mesaj");
$langmsg['menu'][4] = x("Gelen Kutusu");
$langmsg['menu'][5] = x("Giden Kutusu");
$langmsg['menu'][6] = x("Hesaplar");
$langmsg['menu'][7] = x("Giris Seviyeleri");
$langmsg['menu'][8] = x("Yasakli IPler");
$langmsg['menu'][9] = x("Kategoriler");
$langmsg['menu'][10] = x("Resim Y�kleme");
$langmsg['menu'][11] = x("Kisisel");
$langmsg['menu'][12] = x("Profil");
$langmsg['menu'][13] = x("RSS Besleme");
$langmsg['menu'][14] = x("Ifadeler");
$langmsg['menu'][15] = x("Sistem");
$langmsg['menu'][16] = x("Sablonlar");
$langmsg['menu'][17] = x("Kelime S�zgeci");
$langmsg['menu'][18] = x("Anasayfa");
$langmsg['menu'][19] = x("Haberler");
$langmsg['menu'][20] = x("Mesajlar");
$langmsg['menu'][21] = x("Ayarlar");
$langmsg['menu'][22] = x("Yardim");
$langmsg['menu'][23] = x("�ikis");
$langmsg['menu'][24] = x("Dosya Y�kleme");

#-----HOME MODULE
$langmsg['home'][0] = x("Genel haber istatistikleri");
$langmsg['home'][1] = x("Hosgeldiniz");
$langmsg['home'][2] = x("PHP Ayari \"magic_quotes_gpc\" a�ik. Bu �zelligi kapatmaniz �nerilmektedir.");
$langmsg['home'][3] = x("PHP Ayari \"register_globals\" a�ik. Hatalara ve g�venlik a�igina neden olmamasi i�in bu �zelligi kapatmaniz �nerilmektedir .");
$langmsg['home'][4] = x("Install.php tespit edildi. L�tfen bu dosyayi silin.Bu dosyayi otomatik olarak silmeyi denemek ister misiniz? ");
$langmsg['home'][5] = x("Install.php silinemedi, l�tfen bu dosyayi manual olarak siliniz");
$langmsg['home'][6] = x("Toplam Haber:");
$langmsg['home'][7] = x("Toplam Yorum:");
$langmsg['home'][8] = x("Toplam Kullanici:");
$langmsg['home'][9] = x("Toplam Ifade:");
$langmsg['home'][10] = x("Toplam S�zge�:");
$langmsg['home'][11] = x("Toplam Kategori:");
$langmsg['home'][12] = x("Toplam Sablon:");
$langmsg['home'][13] = x("Toplam Giris Seviyesi:");
$langmsg['home'][14] = x("Veritabani baglantisi:");
$langmsg['home'][15] = x("Tablolarin optimizasyonu:");
$langmsg['home'][16] = x("Su anki versiyon:");
$langmsg['home'][17] = x("Son versiyon:");
$langmsg['home'][18] = x("Giris kayitlarini incele");
$langmsg['home'][19] = x("Sorgu s�resi:");
$langmsg['home'][20] = x("Okunmamis mesajlar");
$langmsg['home'][22] = x(" Bu dosyay? otomatik olarak silmeyi dene?");
$langmsg['home'][22] = x("saniye");
$langmsg['home'][23] = x("Toplam Resim");
$langmsg['home'][24] = x("Toplam Dosyalar");
$langmsg['home'][25] = x("Toplam RSS");


#-----ADDNEWS MODULE
$langmsg['addnews'][0] = x("Haber �nizleme");
$langmsg['addnews'][1] = x("L�tfen bir baslik giriniz");
$langmsg['addnews'][2] = x("L�tfen bu g�nderinizde yorumlara izin verip vermediginizi se�iniz");
$langmsg['addnews'][3] = x("Haber ekle");
$langmsg['addnews'][4] = x("L�tfen bir kategori se�iniz");

#-----EDITNEWS MODULE
$langmsg['editnews'][0] = x("Haber D�zenle");
$langmsg['editnews'][1] = x("haber i�ersinden");
$langmsg['editnews'][2] = x("Ayarlar");
$langmsg['editnews'][3] = x("G�sterilecek adet");
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
$langmsg['editnews'][17] = x("Se�ilen g�nderiler silindi.");
$langmsg['editnews'][18] = x("Se�ilen g�nderiler g�ncellendi.");
$langmsg['editnews'][19] = x("Haber g�ncellendi.");
$langmsg['editnews'][20] = x("Pasiflestirildi");
$langmsg['editnews'][21] = x("tanesi g�sterilmekte.");
$langmsg['editnews'][22] = x("toplam");
$langmsg['editnews'][23] = x("Se�ilen article (s i�in 0 ila View count reset)");
$langmsg['editnews'][24] = x("Derecelendirme se�ilen madde (ler) sifirlama");
$langmsg['editnews'][25] = x("Filtre kategoriye g�re");

#-----NEWSFORM
$langmsg['newsform'][0] = x("Add your news post below.");
$langmsg['newsform'][1] = x("Baslik:");
$langmsg['newsform'][2] = x("Kategoriler:");
$langmsg['newsform'][3] = x("�zet:");
$langmsg['newsform'][4] = x("Haber:");
$langmsg['newsform'][5] = x("HTML Kapali");
$langmsg['newsform'][6] = x("HTML A�ik");
$langmsg['newsform'][7] = x("Yorumlar:");
$langmsg['newsform'][8] = x("Tarihi a� kapa");
$langmsg['newsform'][9] = x("�zeti a� kapa");
$langmsg['newsform'][16] = x("Tarih:");
$langmsg['newsform'][17] = x("Arsivi a� kapa");
$langmsg['newsform'][18] = x("Hi�bir zaman arsivleme");
$langmsg['newsform'][19] = x("Dosya y�kleme");
$langmsg['newsform'][20] = x("Dosya indirme");
$langmsg['newsform'][21] = x("Y�kleme tamamlandi");
$langmsg['newsform'][22] = x("Makale");
$langmsg['newsform'][23] = x("bir resim girin URL");
$langmsg['newsform'][24] = x("Eklemek");
$langmsg['newsform'][25] = x("Se� y�klenmis bir resim");

#-----COMMENTS MODULE
$langmsg['editcomments'][0] = x("Yorumlari D�zenle");
$langmsg['editcomments'][1] = x("Asagidaki yorumu d�zenle.");
$langmsg['editcomments'][2] = x("Yazar:");	
$langmsg['editcomments'][3] = x("Eposta:");
$langmsg['editcomments'][4] = x("Mesaj:");
$langmsg['editcomments'][5] = x("Yorum g�ncellendi.");
$langmsg['editcomments'][6] = x("adet yorum silindi.");
$langmsg['editcomments'][7] = x("adet yorum g�ncellendi.");
$langmsg['editcomments'][8] = x("Toplam adet yorum.");
$langmsg['editcomments'][9] = x("Mesaj");
$langmsg['editcomments'][10] = x("Tarih");
$langmsg['editcomments'][11] = x("Onay");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Onaylandi");
$langmsg['editcomments'][14] = x("Onaylanmadi");
$langmsg['editcomments'][15] = x("Yer:");

#-----PRIVATE MESSAGES MODUKE
$langmsg['privmsgs'][0] = x("�zel Mesaj");
$langmsg['privmsgs'][1] = x("Gelen Kutusu");
$langmsg['privmsgs'][2] = x("Giden Kutusu");
$langmsg['privmsgs'][3] = x("Yeni Mesaj");
$langmsg['privmsgs'][4] = x("Toplam");
$langmsg['privmsgs'][5] = x("Baslik");
$langmsg['privmsgs'][6] = x("Kimden");
$langmsg['privmsgs'][7] = x("G�nderildi");
$langmsg['privmsgs'][8] = x("Kime");
$langmsg['privmsgs'][9] = x("Bu mesaja cevap ver");
$langmsg['privmsgs'][10] = x("Yeni �zel mesaj.");
$langmsg['privmsgs'][11] = x("Kime:");
$langmsg['privmsgs'][12] = x("Baslik:");
$langmsg['privmsgs'][13] = x("Mesaj:");
$langmsg['privmsgs'][14] = x("�rnek 'user1, user2, user3'");
$langmsg['privmsgs'][15] = x("Mesaj �nizleme.");
$langmsg['privmsgs'][16] = x("Mesaj su kullanicilara g�nderildi.");
$langmsg['privmsgs'][17] = x("Bu mesaji g�ndermek i�in bir kullanici se�iniz.");
$langmsg['privmsgs'][18] = x("Bu mesaj i�in bir baslik yaziniz");
$langmsg['privmsgs'][19] = x("Bir mesaj yaziniz.");
$langmsg['privmsgs'][20] = x("Mesajlar silindi.");
$langmsg['privmsgs'][21] = x("adet mesaj i�ersinde.");
$langmsg['privmsgs'][22] = x("adet okunmamis mesajiniz var.");

#-----OPTIONS MODULE
$langmsg['options'][0] = x("Ayarlar");

#-----BANNED IPS MODULE
$langmsg['bannedips'][0] = x("Yasakli IPler");
$langmsg['bannedips'][1] = x("Yasakli IPler.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Engellenme sayisi");
$langmsg['bannedips'][4] = x("Yeni IP adresi gir.");
$langmsg['bannedips'][5] = x("Yasaklanmis mesaj. (html a�ik)");
$langmsg['bannedips'][6] = x("IP Adresi:");
$langmsg['bannedips'][7] = x("Bu IP adresi zaten yasaklanmis.");
$langmsg['bannedips'][8] = x("IP adresi yasaklandi.");
$langmsg['bannedips'][9] = x("IP adresi silindi.");
$langmsg['bannedips'][10] = x("IP adresi sifirlandi.");
$langmsg['bannedips'][11] = x("Yasakli mesaj g�ncellendi.");

#-----CATEGORIES MODULE
$langmsg['cats'][0] = x("Kategoriler");
$langmsg['cats'][1] = x("kategori g�steriliyor.");
$langmsg['cats'][2] = x("Isim");
$langmsg['cats'][3] = x("G�nderiler");
$langmsg['cats'][4] = x("Yeni kategori olustur.");
$langmsg['cats'][5] = x("Isim:");
$langmsg['cats'][6] = x("Bu kategoriler silindi:");
$langmsg['cats'][7] = x("Farkli bir isim se�iniz.");
$langmsg['cats'][8] = x("Kategori olusturuldu.");
$langmsg['cats'][9] = x("Kategori g�ncellendi.");
$langmsg['cats'][10] = x("Kategoriyi asagidan d�zenleyiniz.");
$langmsg['cats'][11] = x("Resimler");
$langmsg['cats'][12] = x("Dosyalar");
$langmsg['cats'][13] = x("Bu ad? ta??yan bir kategori zaten var, l�tfen ba?ka bir isim se�iniz..");

#-----IMAGE UPLOADS MODULE
$langmsg['img'][0] = x("Resim Y�klemeleri");
$langmsg['img'][1] = x("Yeni bir resim y�kle");
$langmsg['img'][2] = x("Dosya y�kle");
$langmsg['img'][3] = x("Toplam resimde");
$langmsg['img'][4] = x("Bir resim se�iniz:");
$langmsg['img'][5] = x("resim silindi.");
$langmsg['img'][6] = x("Resim aktarildi");
$langmsg['img'][7] = x("Dosya y�klenirken bir hata olustu, l�tfen tekrar deneyiniz.");
$langmsg['img'][8] = x("Ge�ersiz dosya uzantisi.");
$langmsg['img'][9] = x("Ge�ersiz resim.");
$langmsg['img'][10] = x("Resim kategoriden kaldirildi.");
$langmsg['img'][11] = x("resim kategoriye eklendi.");
$langmsg['img'][12] = x("Dosya adi:");
$langmsg['img'][13] = x("Kategori se�iniz:");
$langmsg['img'][14] = x("Resmi d�zenle");
$langmsg['img'][15] = x("Baslik:");
$langmsg['img'][16] = x("A�iklama:");
$langmsg['img'][17] = x("Resmi G�ncelle");
$langmsg['img'][18] = x("Ge�ersiz resim");
$langmsg['img'][19] = x("Resim g�ncellendi");
$langmsg['img'][20] = x("K���k resimler");
$langmsg['img'][21] = x("Detaylar");
$langmsg['img'][22] = x("Kategori:");
$langmsg['img'][23] = x("Dosya adi");
$langmsg['img'][24] = x("Dosya boyutu");
$langmsg['img'][25] = x("G�nderen");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("Kategoriye ekle");
$langmsg['img'][28] = x("Kategoriden kaldir");
$langmsg['img'][29] = x("Y�klenmis resimler");
$langmsg['img'][30] = x("Bu isimde bir dosya zaten mevcut.");
$langmsg['img'][31] = x("T�m kategoriler");
$langmsg['img'][32] = x("Y�klenenler dizinine yazma kurulamiyor. 777 Bu dizinin CHMOD");

#-----PERSONAL MODULE
$langmsg['personal'][0] = x("Kisisel Ayarlar");
$langmsg['personal'][1] = x("Hesap bilgilerinizi asagidan d�zenleyiniz.");
$langmsg['personal'][2] = x("Kisisel ayarlar");
$langmsg['personal'][3] = x("Avatar url:");
$langmsg['personal'][4] = x("Eposta adresi:");
$langmsg['personal'][5] = x("Mesaj uyarilari:");
$langmsg['personal'][6] = x("Giriste okunmamis mesaj uyarisi?");
$langmsg['personal'][7] = x("Yeni sifre:");
$langmsg['personal'][8] = x("(degistirmek istemiyorsaniz bos birakin)");
$langmsg['personal'][9] = x("Sifreyi dogrula:");
$langmsg['personal'][10] = x("Bir e-posta adresi girmeniz gerekmekte.");
$langmsg['personal'][11] = x("Ayarlar g�ncellendi.");
$langmsg['personal'][12] = x("Sifreler uyusmuyor.");
$langmsg['personal'][13] = x("Enable WYSIWYG edit�r�?");

#-----LOGIN MODULE
$langmsg['login'][0] = x("L�tfen Giris Yapin");
$langmsg['login'][1] = x("Isim:");
$langmsg['login'][2] = x("Sifre:");
$langmsg['login'][3] = x("Sifrenizi mi unuttunuz?");
$langmsg['login'][4] = x("Beni hatirla");
$langmsg['login'][5] = x("G�venlik Kodu:");
$langmsg['login'][6] = x("Giris");
$langmsg['login'][7] = x("Yanlis g�venlik kodu");
$langmsg['login'][8] = x("Yanlis kullanici adi veya sifre");
$langmsg['login'][9] = x("Bu kodu asagiya yaziniz");

#-----PROFILE MODULE
$langmsg['profile'][0] = x("Profili D�zenle");
$langmsg['profile'][1] = x("Profilinizi asagidan d�zenleyebilirsiniz.");
$langmsg['profile'][2] = x("Isim:");
$langmsg['profile'][3] = x("Yas:");
$langmsg['profile'][4] = x("Yer:");
$langmsg['profile'][5] = x("Cinsiyet:");
$langmsg['profile'][6] = x("Profil fotografi:");
$langmsg['profile'][7] = x("Anasayfa:");
$langmsg['profile'][8] = x("Ilgileri:");
$langmsg['profile'][9] = x("Hobileri:");
$langmsg['profile'][10] = x("Is:");
$langmsg['profile'][11] = x("Favori s�z�:");
$langmsg['profile'][12] = x("Erkek");
$langmsg['profile'][13] = x("Kadin");
$langmsg['profile'][14] = x("Profil g�ncellendi.");
$langmsg['profile'][15] = x("Hi�biri");

#-----ACCOUNTS MODULE
$langmsg['accounts'][0] = x("Hesaplar");
$langmsg['accounts'][1] = x("Hesaplar");
$langmsg['accounts'][2] = x("Kullanici adi");
$langmsg['accounts'][3] = x("Giris seviyesi");
$langmsg['accounts'][4] = x("G�nderi sayisi");
$langmsg['accounts'][5] = x("Yorum sayisi");
$langmsg['accounts'][6] = x("Yeni bir hesap olustur.");
$langmsg['accounts'][7] = x("Hesap adi:");
$langmsg['accounts'][8] = x("Eposta:");
$langmsg['accounts'][9] = x("Yeni sifre:");
$langmsg['accounts'][10] = x("Sifreyi dogrula:");
$langmsg['accounts'][11] = x("Giris seviyesi:");
$langmsg['accounts'][12] = x("Yeni hesap.");
$langmsg['accounts'][13] = x("Asagidaki hesabi d�zenle.");
$langmsg['accounts'][14] = x("Mail adresi girilmesi gerekiyor.");
$langmsg['accounts'][15] = x("Hesap g�ncellendi.");
$langmsg['accounts'][16] = x("Sifreler eslesmiyor.");
$langmsg['accounts'][17] = x("Hesap adi girilmesi gerekiyor.");
$langmsg['accounts'][18] = x("Hesap adi zaten var. L�tfen baska se�iniz.");
$langmsg['accounts'][19] = x("Sifre girmeniz gerekiyor.");
$langmsg['accounts'][20] = x("Hesap olusturuldu.");
$langmsg['accounts'][21] = x("Su hesaplar silindi:");
$langmsg['accounts'][22] = x("Kendi hesabinizi silemezsiniz.");
$langmsg['accounts'][23] = x("(Ayni kalmasini istiyorsaniz bos birakin)");
$langmsg['accounts'][24] = x("Bir hesap bu eposta adresini kullaniyor. L�tfen farkli bir eposta adresi ile deneyiniz.");
$langmsg['accounts'][25] = x("L�tfen bir hesap adi giriniz");

#----ACCESS MODULE
$langmsg['access'][0] = x("Giris Seviyeleri");
$langmsg['access'][1] = x("Yeni bir giris seviyesi olustur.");
$langmsg['access'][2] = x("Isim:");
$langmsg['access'][3] = x("Hangi b�l�mler bu seviyeye erisebilir?");
$langmsg['access'][4] = x("Hesaplar:");
$langmsg['access'][5] = x("Erisim Seviyeleri:");
$langmsg['access'][6] = x("Banlanmis IP'ler:");
$langmsg['access'][7] = x("Kategoriler:");
$langmsg['access'][8] = x("Yorumlar:");
$langmsg['access'][9] = x("Yardim:");
$langmsg['access'][10] = x("Resim Y�klemeleri:");
$langmsg['access'][11] = x("Haberler:");
$langmsg['access'][12] = x("Kisisel Se�enekler:");
$langmsg['access'][13] = x("�zel Mesajlar:");
$langmsg['access'][14] = x("Profil:");
$langmsg['access'][15] = x("RSS Beslemeleri:");
$langmsg['access'][16] = x("Ifadeler:");
$langmsg['access'][17] = x("Sistem Yapilandirma:");
$langmsg['access'][18] = x("Sablonlar:");
$langmsg['access'][19] = x("Kelime S�zgeci:");
$langmsg['access'][20] = x("Bu erisim seviyesi hangi kategorilere yollayabilir?");
$langmsg['access'][21] = x("Hepsi:");
$langmsg['access'][22] = x("Bu seviye hangi g�nderileri d�zenleyebilir?");
$langmsg['access'][23] = x("Admin (Hepsi):");
$langmsg['access'][24] = x("Mod (Kendi + �yeler):");
$langmsg['access'][25] = x("�ye (Kendi):");
$langmsg['access'][26] = x("Bu seviye tarafindan yapilan g�nderiler otomatik onaylanacak mi?");
$langmsg['access'][27] = x("Bu erisim seviyesi g�nderileri onaylayabilir mi?");
$langmsg['access'][28] = x("Bu erisim seviyesi HTML kullanabilir mi?");
$langmsg['access'][29] = x("Kategori se�meden g�nderi yollamaya izin verilsin mi?");
$langmsg['access'][30] = x("Silinen erisim seviyeleri:");
$langmsg['access'][31] = x("Su erisim seviyeleri silinemedi ��nk� kendilerine atanmis 1 ya da daha fazla hesap bulunmakta:");
$langmsg['access'][32] = x("Asagidaki erisim seviyesini d�zenle.");
$langmsg['access'][33] = x("Please enter a name for this access level.");
$langmsg['access'][34] = x("Erisim seviyesi g�ncellendi.");
$langmsg['access'][35] = x("Bu isimde bir erisim seviyesi bulunmaktadir, l�tfen baska bir isim se�iniz.");
$langmsg['access'][36] = x("L�tfen bu seviyenin hangi g�nderileri d�zenleyebilecegini se�iniz.");
$langmsg['access'][37] = x("L�tfen bu erisim seviyesinin g�nderilerinin otomatik onaylanip onaylanmayacagini se�iniz");
$langmsg['access'][38] = x("L�tfen bu erisim seviyesinin g�nderileri onaylayip onaylayamayacagini se�iniz");
$langmsg['access'][39] = x("L�tfen bu erisim seviyesinin HTML kullanip kullanamayacagini se�iniz");
$langmsg['access'][40] = x("L�tfen bu erisim seviyesinin kategori se�meden g�nderi yapip yapamayacagini se�iniz");
$langmsg['access'][41] = x("Erisim seviyesi olusturuldu.");
$langmsg['access'][42] = x("Giris Seviyeleri.");
$langmsg['access'][43] = x("Isim");
$langmsg['access'][44] = x("Erisim");
$langmsg['access'][45] = x("Hesaplar");
$langmsg['access'][46] = x("Member");
$langmsg['access'][47] = x("Moderat�r");
$langmsg['access'][48] = x("Administrator");
$langmsg['access'][49] = x("Dosya Y�klemeleri");
$langmsg['access'][50] = x(", Bu erisim d�zeyini g�r�nt�lemek kullanici IP adresleri?");
$langmsg['access'][51] = x("Hangi dosyalarin & Imajlar erisim d�zeyini d�zenleyebilir?");
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
$langmsg['filters'][0] = x("Kelime S�zgeci");
$langmsg['filters'][1] = x("S�zge� eklendi.");
$langmsg['filters'][2] = x("Filter removed.");
$langmsg['filters'][3] = x("Asagidaki t�m kelimeler t�m yorumlarda filtrelenecektir.");
$langmsg['filters'][4] = x("Filtrelenen Kelime");
$langmsg['filters'][5] = x("Sununla Degistir");
$langmsg['filters'][6] = x("Sil");

#-----RSS MODULE
$langmsg['rss'][0] = x("RSS Beslemeleri");
$langmsg['rss'][1] = x("RSS Besleme ayarlarinizi asagidan degistiriniz");
$langmsg['rss'][2] = x("Haber yeri haberlerinizi g�stereceginiz yerdir, �rnegin http://yourdomain.com/ veya http://yourdomain.com/index");
$langmsg['rss'][3] = x("Besleme ismi:");
$langmsg['rss'][4] = x("Haber yeri:");
$langmsg['rss'][5] = x("RSS beslemenizin basligi:");
$langmsg['rss'][6] = x("RSS beslemenizin a�iklamasi:");
$langmsg['rss'][7] = x("Karakter kodlamasi:");
$langmsg['rss'][8] = x("Dil:");
$langmsg['rss'][9] = x("G�sterilecek g�nderi adedi:");
$langmsg['rss'][10] = x("0 = hepsi");
$langmsg['rss'][11] = x("G�sterilecek kategoriler:");
$langmsg['rss'][12] = x("Bir kategoriye atanmamis g�nderiler g�sterilsin mi?");
$langmsg['rss'][13] = x("Rss Kodu:");
$langmsg['rss'][14] = x("Beslemenizin nasil g�sterilecegini d�zenleyin");
$langmsg['rss'][15] = x("Yazinin basligini g�sterir.");
$langmsg['rss'][16] = x("Haberlerin kisa yazisini g�sterir.");	
$langmsg['rss'][17] = x("Haberlerin yazisini g�sterir.");
$langmsg['rss'][18] = x("Her g�nderinin atandigi kategorileri g�sterir.");    
$langmsg['rss'][19] = x("Belirli g�nderi i�in URL'leri g�sterir.");
$langmsg['rss'][20] = x("Yazinin yayinlandigi tarihi g�sterir.");
$langmsg['rss'][21] = x("Saat dilimi ayarini g�sterir.");
$langmsg['rss'][22] = x("Her g�nderinin tarih bilgisini g�sterir.");
$langmsg['rss'][23] = x("Yazinin yazraini g�sterir.");
$langmsg['rss'][24] = x("Kullanicilarin eger varsa avatarini g�sterir.");
$langmsg['rss'][25] = x("Her yaziya ait �zg�n ID'yi g�sterir.");
$langmsg['rss'][26] = x("Her haber g�nderisi i�in yorum adedini g�sterir.");
$langmsg['rss'][27] = x("L�tfen besleme ismini giriniz");
$langmsg['rss'][28] = x("L�tfen haber yeri giriniz");
$langmsg['rss'][29] = x("L�tfen bir baslik giriniz");
$langmsg['rss'][30] = x("L�tfen bir a�iklama giriniz");
$langmsg['rss'][31] = x("L�tfen karakter kodlamasini giriniz");
$langmsg['rss'][32] = x("L�tfen dili giriniz");
$langmsg['rss'][33] = x("L�tfen g�sterilecek adedi se�iniz");
$langmsg['rss'][34] = x("RSS Beslemesi olusturuldu");
$langmsg['rss'][35] = x("Bu isimde bir besleme bulunmakta, l�tfen basak bir isim se�iniz");
$langmsg['rss'][36] = x("RSS Beslemesi g�ncellendi");
$langmsg['rss'][37] = x("RSS Beslemeleri");
$langmsg['rss'][38] = x("RSS beslemesi silindi.");
$langmsg['rss'][39] = x("Isim");
$langmsg['rss'][40] = x("Kategoriler");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Yeni bir RSS Besleme olustur.");
$langmsg['rss'][43] = x("Hikayenin dostu basligi g�sterir");

#-----SMILIES MODULE
$langmsg['smilies'][0] = x("Ifadeler");
$langmsg['smilies'][1] = x("B�t�n ifadelerinizi yerini tek seferde g�ncellemek istiyorsaniz bu yararlidir.");
$langmsg['smilies'][2] = x("Eger t�m ifadelerin yerini yeni bir konum ile degistirmek istiyorsaniz http://domain.com/oldlocation/smiliesadresinihttp://domain.com/newlocation/smiliesile veyasmilies/adresinihttp://domain.com/smilies/ile degistirmelisiniz");
$langmsg['smilies'][3] = x("Degistir:");
$langmsg['smilies'][4] = x("Sununla degistir:");
$langmsg['smilies'][5] = x("T�m yollar g�ncellendi.");
$langmsg['smilies'][6] = x("Yeni bir ifade olustur");
$langmsg['smilies'][7] = x("Yol:");
$langmsg['smilies'][8] = x("Tus kodu:");
$langmsg['smilies'][9] = x("L�tfen ifadenin yolunu giriniz.");
$langmsg['smilies'][10] = x("L�tfen bu ifade i�in bir tus kodu giriniz.");
$langmsg['smilies'][11] = x("Bu tus kodu kullanimda. L�tfen farkli bir tus kodu se�iniz.");
$langmsg['smilies'][12] = x("Ifade eklendi.");
$langmsg['smilies'][13] = x("Bu ifadeyi silmek istediginize emin misiniz?");
$langmsg['smilies'][14] = x("Ifade silindi.");
$langmsg['smilies'][15] = x("Asagidaki ifadeyi d�zenle");
$langmsg['smilies'][16] = x("Ifade:");
$langmsg['smilies'][17] = x("Ifade g�ncellendi.");
$langmsg['smilies'][18] = x("Ifadeler silindi");
$langmsg['smilies'][19] = x("L�tfen d�zenlemek istediginiz ifadeyi se�iniz.");
$langmsg['smilies'][20] = x("Ifade");
$langmsg['smilies'][21] = x("Yeni bir ifade ekle.");
$langmsg['smilies'][22] = x("T�m ifadelerin yolunu g�ncelle");

#-----SYSTEM MODULE
$langmsg['system'][0] = x("Sistem Yapilandirma");
$langmsg['system'][1] = x("Sistem yapilandirmalarini d�zenle.");
$langmsg['system'][2] = x("Haberler");
$langmsg['system'][3] = x("Sayfa basina haber adedi:");
$langmsg['system'][4] = x("Haberlerin hangi sirayla g�sterilecegi:");
$langmsg['system'][5] = x("Azalan");
$langmsg['system'][6] = x("Artan");
$langmsg['system'][7] = x("Haberler i�in tarih ve saat formati:");
$langmsg['system'][8] = x("Buraya bakiniz");
$langmsg['system'][9] = x("Avatarlari g�ster:");
$langmsg['system'][10] = x("Haberler g�sterilirken kategorileri ayirmak i�in ayirici:");
$langmsg['system'][11] = x("Yorumlar");
$langmsg['system'][12] = x("Sayfa basina yorum adedi:");
$langmsg['system'][13] = x("Yorumlarin maksimum uzunlugu:");
$langmsg['system'][14] = x("Yorumlar i�in tarih ve saat formati:");
$langmsg['system'][15] = x("Yorumlarun maksimum uzunlugu:");
$langmsg['system'][16] = x("Yorumlari yeni pencerede g�ster:");
$langmsg['system'][17] = x("Yorumlar arasi gecmesi gereken s�re (Spam koruma):");
$langmsg['system'][18] = x("Saniye");
$langmsg['system'][19] = x("Spam mesaji:");
$langmsg['system'][20] = x("Yeni yorum mesaji:");
$langmsg['system'][21] = x("Yeni yorum onay mesaji:");
$langmsg['system'][22] = x("Yorum formunda resim dogrulama kullan:");
$langmsg['system'][23] = x("Arama motoru dostu URL");
$langmsg['system'][24] = x("Aktif mi:");
$langmsg['system'][25] = x("Dosya uzantisi:");
$langmsg['system'][26] = x("�n ek:");
$langmsg['system'][27] = x("Klas�r dosya ismi:");
$langmsg['system'][28] = x("Kayit");
$langmsg['system'][29] = x("Kullanicilarin kaydolmasina izin ver:");
$langmsg['system'][30] = x("Yeni kullanicilar i�in erisim seviyesi:");
$langmsg['system'][31] = x("Diger");
$langmsg['system'][32] = x("Zaman dilimi:");
$langmsg['system'][33] = x("Y�klenen resimler i�in izin verilen dosya tipleri:");
$langmsg['system'][34] = x("Resim y�kleme yolu:");
$langmsg['system'][35] = x("Erisim yok hata mesaji:");
$langmsg['system'][36] = x("Ayarlar g�ncellendi.");
$langmsg['system'][37] = x("G�nder'den sonraki gecikme s�resi (Spam koruma):");
$langmsg['system'][38] = x("Hatirlatma");
$langmsg['system'][39] = x("Yeni yorumlar i�in e-posta hatirlatmasi al:");
$langmsg['system'][40] = x("Yeni kayitlar i�in e-posta hatirlatmasi al:");
$langmsg['system'][41] = x("Sadece kayitli kullanicilarin yorum yapmasina izin ver:");
$langmsg['system'][42] = x("Bu e-posta adresine hatirlatma g�nder:");
$langmsg['system'][43] = x("Y�klenen dosyalar i�in izin verilen dosya tipleri:");
$langmsg['system'][44] = x("Onaylanmamis haber g�nderileri i�in bilgilendirme maili al");
$langmsg['system'][45] = x("Genel anahtar");
$langmsg['system'][46] = x("�zel anahtar");
$langmsg['system'][47] = x("Script yolu");
$langmsg['system'][48] = x("Kendi yorum silmek i�in kayitli kullanici izin ver:");
$langmsg['system'][49] = x("K�t�g� giris formu kullanin g�r�nt� dogrulama:");
$langmsg['system'][50] = x("Kayit formu kullanin g�r�nt� dogrulama:");
$langmsg['system'][51] = x("Tarih ve dosyalar i�in zaman bi�imi:");
$langmsg['system'][52] = x("Show 'ile' haber asagida Powered:");

#-----RECOVERY MODULE
$langmsg['recover'][0] = x("Sifre Kurtarici");
$langmsg['recover'][1] = x("Sifresini sifirlamak istediginiz hesabin eposta adresini giriniz.");
$langmsg['recover'][2] = x("Eposta:");
$langmsg['recover'][3] = x("Siz ya da baska birisi sifrenizi sifirlama isteiginden bulundu, sifirlamak i�in asagidaki linki kullanin.");
$langmsg['recover'][4] = x("Sifrenizi sifirlamak i�in burayi tiklayin");
$langmsg['recover'][5] = x("Hesabiniza erismek i�in su adrese");
$langmsg['recover'][6] = x("Bu eposta adresine sahip bir hesap bulunamadi, l�tfen y�netici ile temasa ge�iniz.");
$langmsg['recover'][7] = x("yeni Sifre");
$langmsg['recover'][8] = x("L�tfen yeni sifrenizi asagiya giriniz.");
$langmsg['recover'][9] = x("Sifre kurtarma e-postasi yollanamadi, l�tfen sistem y�neticinizle iletisime ge�in.");
$langmsg['recover'][10] = x("Sifreyi Onayla:");
$langmsg['recover'][11] = x("Sifreler eslesmiyor.");
$langmsg['recover'][12] = x("Sifreniz g�ncellendi.");
$langmsg['recover'][13] = x("y�nergeleri i�eren e-posta yollanmistir.");

#-----TEMPLATES MODULE
$langmsg['templates'][0] = x("Sablonlar");
$langmsg['templates'][1] = x("Yeni sablon olustur.");
$langmsg['templates'][2] = x("Isim:");
$langmsg['templates'][3] = x("Haberlerinizin g�sterilem seklini degistirir.");
$langmsg['templates'][4] = x("Yazinin basligini g�sterir.");
$langmsg['templates'][5] = x("Haberlerin kisa yazisini g�sterir.");
$langmsg['templates'][6] = x("Haberlerin yazisini g�sterir.");
$langmsg['templates'][7] = x("Yazinin yayinlanma tarihini g�sterir.");
$langmsg['templates'][8] = x("Her g�nderinin atandigi kategoriyi g�sterir.");
$langmsg['templates'][9] = x("Yazinin yazarini g�sterir.");
$langmsg['templates'][10] = x("Kullanici avatarini varsa g�sterir.");
$langmsg['templates'][11] = x("Her yazinin �zg�n ID'sini g�sterir.");
$langmsg['templates'][12] = x("Yazarin IP adresini g�sterir. (Sadece log in iseniz g�sterir)");
$langmsg['templates'][13] = x("Yazinin t�m�n� oku linkini g�sterir");
$langmsg['templates'][14] = x("E-posta adresinizi g�sterecektir.");
$langmsg['templates'][15] = x("E-posta adresinize bir link olusturacaktir.");
$langmsg['templates'][16] = x("Profilinize bir link olusturacaktir.");
$langmsg['templates'][17] = x("Her bir g�nderi i�in yorum adedini g�sterir.");
$langmsg['templates'][18] = x("Yorumlara link olusturur.");
$langmsg['templates'][19] = x("Bu tag'lerin arasina konan sey sadece log in olunca g�sterilecek.");
$langmsg['templates'][20] = x("Ifadelerin yolu");
$langmsg['templates'][21] = x("Yorumlar");
$langmsg['templates'][22] = x("Yorumlarin g�sterilis seklini degistirir.");
$langmsg['templates'][23] = x("Yorumun yazarini g�sterir.");
$langmsg['templates'][24] = x("Mesaji g�sterir.");
$langmsg['templates'][25] = x("Kullanici avatarini varsa g�sterir.");
$langmsg['templates'][26] = x("Yazarin IP adresini g�sterir. (Sadece log in iseniz g�sterir)");
$langmsg['templates'][27] = x("Her yorumun �zg�n ID'sini g�sterir.");
$langmsg['templates'][28] = x("Yorumu yazan kullanicinin e-posta adresini g�sterir.");
$langmsg['templates'][29] = x("Kullanicinin e-posta adresine link olusturacaktir.");
$langmsg['templates'][30] = x("Yorumun yayinlandigi tarih g�sterir.");
$langmsg['templates'][31] = x("Bu tag'lerin arasina konan sey sadece log in olunca g�sterilecek.");
$langmsg['templates'][32] = x("Yorum Formu");
$langmsg['templates'][33] = x("B�t�n alanlarin isimlerini ve ID'leri ayni birakmaniz gerekmektedir. Aksi takdirde �alismayacaktir. Ayrica sunu aklinizda bulundurun; form onsubmit degeri olan useajax='', yes veya no olmasi kullanicilarin yorum g�nderdigi alanda ajax kullanilip kullanilmadigini belirler.");
$langmsg['templates'][34] = x("Haber g�nderisinin ID'sini g�sterir.");
$langmsg['templates'][35] = x("Haber g�nderisinin kategorisini g�sterir.");
$langmsg['templates'][36] = x("Log in olunca kullanici adinizi g�sterir.");
$langmsg['templates'][37] = x("Log in olunca e-posta adresinizi g�sterir.");
$langmsg['templates'][38] = x("Mesaji g�sterir.");
$langmsg['templates'][39] = x("T�m ifadeleri g�sterir.");
$langmsg['templates'][40] = x("Haber Sayfalandirma");
$langmsg['templates'][44] = x("Yorum Sayfalandirma");
$langmsg['templates'][45] = x("Eger varsa bir �nceki linki g�sterir.");
$langmsg['templates'][46] = x("Eger varsa bir sonraki linki g�sterir.");
$langmsg['templates'][47] = x("Sayfa sayisini g�sterir, �r: 1 2 3 4.");
$langmsg['templates'][48] = x("Profiller");
$langmsg['templates'][49] = x("Kullanici profillerinin nasil g�sterilecegini d�zenle.");
$langmsg['templates'][50] = x("Kullanicilarin kullanici adini g�sterir.");
$langmsg['templates'][51] = x("Kullanicinin adini g�sterir.");
$langmsg['templates'][52] = x("Kullanicin yasini g�sterir.");
$langmsg['templates'][53] = x("Kullanicin yerini g�sterir.");
$langmsg['templates'][54] = x("Kullanicin cinsiyetini g�sterir.");
$langmsg['templates'][55] = x("Kullanicinin web sitesine link olustur.");
$langmsg['templates'][56] = x("Kullanicinin ilgi alanlarini g�sterir.");
$langmsg['templates'][57] = x("Kullanicinin hobilerini g�sterir.");
$langmsg['templates'][58] = x("Kullanicinin meslegini g�sterir.");
$langmsg['templates'][59] = x("Kullanicinin favori s�z�n� g�sterir.");
$langmsg['templates'][60] = x("Kullanicinin profil resmini g�ster.");
$langmsg['templates'][61] = x("Yeni Yapi");
$langmsg['templates'][62] = x("Burasi haberler i�in siralama kistasini fiziksel olarak belirleyebileceginiz veya ka� tane g�sterilmesi gerektigini beliryebileceginiz alandir.");
$langmsg['templates'][63] = x("Haber g�nderilerinizi g�sterir.");
$langmsg['templates'][64] = x("Haber sayfalandirmasini g�sterir.");
$langmsg['templates'][65] = x("Yorum Yapisi");
$langmsg['templates'][66] = x("Burasi yorumlar i�in siralama kistasini fiziksel olarak belirleyebileceginiz veya ka� tane g�sterilmesi gerektigini beliryebileceginiz alandir.");
$langmsg['templates'][67] = x("Yorumlari g�r�nt�lerken tek haber g�nderilerini g�sterir");
$langmsg['templates'][68] = x("Yorumlarinizi g�sterir.");
$langmsg['templates'][69] = x("Yorum sayfalandirmasini g�sterir.");
$langmsg['templates'][70] = x("Yorum formunu g�sterir.");
$langmsg['templates'][71] = x("Kayit Formu");
$langmsg['templates'][72] = x("Burasi kullanicilara kayit olmasini kontrol edebileceginiz formdur. B�t�n alanlarin isimlerini ve ID'leri ayni birakmaniz gerekmektedir. Aksi takdirde �alismayacaktir.");
$langmsg['templates'][73] = x("Kullanicinin girdigi kullanici adi.");
$langmsg['templates'][74] = x("Kullanicinin girdigi sifre.");
$langmsg['templates'][75] = x("Bir alan bos birakildigindaki hata mesajini g�sterir.");
$langmsg['templates'][76] = x("L�tfen bir isim giriniz.");
$langmsg['templates'][77] = x("Sablon olusturuldu.");
$langmsg['templates'][78] = x("L�tfen baska bir isim se�iniz.");
$langmsg['templates'][79] = x("Haberlerinizin ve yorumlarinizin g�r�nt�lenme seklini degistirmek i�in l�tfen asagidaki sablonlari d�zenleyiniz.");
$langmsg['templates'][80] = x("Haberler");
$langmsg['templates'][81] = x("Sablon g�ncellendi.");
$langmsg['templates'][82] = x("Bu isimde bir sablon bulunmakta. L�tfen baska bir isim se�iniz");
$langmsg['templates'][83] = x("Kullanimda olan bir sablon silinemez");
$langmsg['templates'][84] = x("Se�ilen sablon(lar) silindi");
$langmsg['templates'][85] = x("Sablon(lar) kopyalandi");
$langmsg['templates'][86] = x("D�zenlemek i�in asagidan sablon ismi se�iniz.");
$langmsg['templates'][87] = x("Sablon se�ildi.");
$langmsg['templates'][88] = x("Isim");
$langmsg['templates'][89] = x("Se�ildi");
$langmsg['templates'][90] = x("Yeni sablon olustur.");
$langmsg['templates'][91] = x("Se�");
$langmsg['templates'][92] = x("Her yazinin g�r�nt�lenme sayisini g�sterir.");
$langmsg['templates'][93] = x("Rating yildiz resmini g�sterir.");
$langmsg['templates'][94] = x("Yazinin o anki ratingini g�sterir.");
$langmsg['templates'][95] = x("Yazinin oylanma sayisini g�sterir.");
$langmsg['templates'][96] = x("Oylama formunu g�sterir.");
$langmsg['templates'][98] = x("Forma g�nder'i g�sterir.");
$langmsg['templates'][99] = x("Kullanicinin yerini g�sterir");
$langmsg['templates'][100] = x("Y�klenen Dosyalar");
$langmsg['templates'][101] = x("Y�klenen dosyalarinizin nasil g�sterilecegini kontrol edin.");
$langmsg['templates'][102] = x("Dosyanin y�klenme tarihi.");
$langmsg['templates'][103] = x("Dosyanin basligi.");
$langmsg['templates'][104] = x("Dosyanin dosya ismi.");
$langmsg['templates'][105] = x("Dosyanin b�y�kl�g�.");
$langmsg['templates'][106] = x("Dosyayi indirme URL'si.");
$langmsg['templates'][107] = x("Y�kleyenin kullanici adi.");
$langmsg['templates'][108] = x("Dosyanin indirilme sayisi.");
$langmsg['templates'][109] = x("Haber g�nderilerine bagli olan dosyalari g�sterir.");
$langmsg['templates'][110] = x("Haber g�nderilerine bagli olan her dosyayi g�sterir.");
$langmsg['templates'][111] = x("Bir seferde sadece 3 sayfa g�sterir");
$langmsg['templates'][112] = x("Birinci sayfada bulunulmuyorsa birinci sayfaya link verir.");
$langmsg['templates'][113] = x("Son sayfada bulunulmuyorsa son sayfaya link verir.");
$langmsg['templates'][114] = x("Bu g�nderi i�in kelime sayisini g�sterir ");
$langmsg['templates'][115] = x("Hikayenin dostu basligi g�sterir");
$langmsg['templates'][116] = x("ReCAPTCHA eleman g�r�nt�ler");
$langmsg['templates'][117] = x("Yorumu silmek i�in bir baglanti olusturur.");
$langmsg['templates'][118] = x("G�r�nt�ler giris formu sadece giris gereklidir.");
$langmsg['templates'][119] = x("Giris Formu");
$langmsg['templates'][120] = x("Kontrol� nasil giris formu g�r�nt�lenir.");
$langmsg['templates'][121] = x("G�r�nt�ler e-posta kullanici girdi.");
$langmsg['templates'][122] = x("G�r�nt�ler giris hata mesaji.");
$langmsg['templates'][123] = x("G�r�nt�ler reCAPTCHA elemani.");
$langmsg['templates'][124] = x("G�r�nt�ler adi kullanici girdi.");
$langmsg['templates'][125] = x("g�r�nt�lerinde adi sisteme girdiyseniz.");
$langmsg['templates'][126] = x("G�r�nt�ler Arama formu. T�m isimleri ve kimlikleri ayni kalmalidir.");
$langmsg['templates'][127] = x("Her arama sonucu i�in g�r�nt�ler numarasi");
$langmsg['templates'][128] = x("Bi�imleri nasil arama sonu�larinin g�r�nt�lenecegi olsun. Her sonu� i�in yinelenir.");
$langmsg['templates'][129] = x("Her satir i�in bir ya da iki �ikis arasindaki Vekiller.");
$langmsg['templates'][130] = x("Ge�erli sayfa numarasi.");
$langmsg['templates'][131] = x("Bir �nceki sayfa numarasi.");
$langmsg['templates'][132] = x("Bir sonraki sayfa numarasi.");
$langmsg['templates'][133] = x("G�r�nt�ler haber makalenin dostu baslik.");
$langmsg['templates'][134] = x("Arama formu g�nder");
$langmsg['templates'][135] = x("Arama sonu�lari");
$langmsg['templates'][136] = x("Y�klenen dosyalar");


#-----UPLOADED FILES
$langmsg['uploadedfiles'][0] = x("Dosya Y�klemeleri");
$langmsg['uploadedfiles'][1] = x("Yeni dosya y�kle");
$langmsg['uploadedfiles'][2] = x("Dosya y�kle");
$langmsg['uploadedfiles'][4] = x("Bir dosya se�in:");
$langmsg['uploadedfiles'][5] = x("Dosya silindi.");
$langmsg['uploadedfiles'][6] = x("Dosya y�klendi");
$langmsg['uploadedfiles'][7] = x("Dosya y�klenirken bir hata olustu, l�tfen tekrar deneyiniz.");
$langmsg['uploadedfiles'][8] = x("Ge�ersiz dosya uzantisi.");
$langmsg['uploadedfiles'][9] = x("Ge�ersiz dosya.");
$langmsg['uploadedfiles'][10] = x("Dosya kategoriden kaldirildi.");
$langmsg['uploadedfiles'][11] = x("dosya kategoriye eklendi.");
$langmsg['uploadedfiles'][12] = x("Dosya adi");
$langmsg['uploadedfiles'][13] = x("Bir kategori se�in:");
$langmsg['uploadedfiles'][14] = x("Bir dosya d�zenle");
$langmsg['uploadedfiles'][15] = x("Baslik:");
$langmsg['uploadedfiles'][16] = x("A�iklama:");
$langmsg['uploadedfiles'][17] = x("Dosya g�ncelle");
$langmsg['uploadedfiles'][18] = x("Ge�ersiz dosya");
$langmsg['uploadedfiles'][19] = x("Dosya g�ncellendi");
$langmsg['uploadedfiles'][20] = x("K���k resimler");
$langmsg['uploadedfiles'][21] = x("Detaylar");
$langmsg['uploadedfiles'][22] = x("Kategori:");
$langmsg['uploadedfiles'][23] = x("Baslik");
$langmsg['uploadedfiles'][24] = x("Boyut");
$langmsg['uploadedfiles'][25] = x("Y�kleyen");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("Kategoriye ekle");
$langmsg['uploadedfiles'][28] = x("Kategoriden kaldir");
$langmsg['uploadedfiles'][29] = x("G�nderilmis dosyalar");
$langmsg['uploadedfiles'][30] = x("Bu isimde bir dosya zaten mevcut.");
$langmsg['uploadedfiles'][31] = x("Indirmeleri sifirla:");
$langmsg['uploadedfiles'][32] = x("T�m kategoriler");
$langmsg['uploadedfiles'][33] = x("y�klemeler");
$langmsg['uploadedfiles'][34] = x("Y�kledi");

#-----ADMIN DATA
$langmsg['admindata'][0] = x("Yardim");
$langmsg['admindata'][1] = x("Haber ekle");
$langmsg['admindata'][2] = x("�zel Mesajlar");
$langmsg['admindata'][3] = x("Haber D�zenle");
$langmsg['admindata'][4] = x("Yorum D�zenle");

#-----SUBMIT FIELDS
$langmsg['submitfield'][0] = x("TAMAM");
$langmsg['submitfield'][1] = x("�nizleme");
$langmsg['submitfield'][2] = x("Haber Ekle");
$langmsg['submitfield'][3] = x("Kaydet");
$langmsg['submitfield'][4] = x("G�nder");
$langmsg['submitfield'][5] = x("Olustur");
$langmsg['submitfield'][6] = x("G�ncelle");
$langmsg['submitfield'][7] = x("Ekle");
$langmsg['submitfield'][8] = x("Sil");
$langmsg['submitfield'][9] = x("Kurtar");

#-----SELECT FIELDS
$langmsg['selectfield'][0] = x("--Se�iniz--");
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
$langmsg['js'][1] = x("Se�ili resimleri silmek istedi?inize emin misiniz?");
$langmsg['js'][2] = x("Se�ili mesajlar? silmek istedi?inize emin misiniz?");
$langmsg['js'][3] = x("Se�ili ?ablonlar? silmek istedi?inize emin misiniz?");
$langmsg['js'][4] = x("Bu IP adreslerini silmek istedi?inize emin misiniz?");
$langmsg['js'][5] = x("Bu IP adreslerinin bloklanma say?s?n? s?f?rlamak istedi?inize emin misiniz?");
$langmsg['js'][6] = x("Bu eri?im seviyelerini silmek istedi?inize emin misiniz?");
$langmsg['js'][7] = x("Bu kategorileri silmek istedi?inize emin misiniz?");
$langmsg['js'][8] = x("Bu kategorileri ve i�erdikleri g�nderileri silmek istedi?inize emin misiniz?");
$langmsg['js'][9] = x("Bu kategorileri silmek istedi?inize emin misiniz?");
$langmsg['js'][10] = x("Bu hesaplar? silmek istedi?inize emin misiniz?");
$langmsg['js'][11] = x("Bu hesaplar? ve g�nderilerini silmek istedi?inize emin misiniz?");
$langmsg['js'][12] = x("Bu g�nderileri silmek istedi?inize emin misiniz?");
$langmsg['js'][13] = x("Bir metin giriniz");
$langmsg['js'][14] = x("Metin");
$langmsg['js'][15] = x("L�tfen -?ngilizce- bir renk yaz?n?z. �rnek, red, yellow, blue (veya renklerin hexadecimal de?erlerini de yazabilirsiniz)");
$langmsg['js'][16] = x("blue");
$langmsg['js'][17] = x("L�tfen ba?lant?n?n adresini giriniz");
$langmsg['js'][18] = x("L�tfen g�sterilecek metni giriniz");
$langmsg['js'][19] = x("Ba?lant?");
$langmsg['js'][20] = x("Yaz? tipi b�y�kl�?� giriniz");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("G�sterilecek metin?");
$langmsg['js'][23] = x("Eposta adresi");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Bana eposta g�nderin!");
$langmsg['js'][26] = x("Al?nt? metni?");
$langmsg['js'][27] = x("Al?nt?");
$langmsg['js'][28] = x("Se�ili yorumlar? silmek istedi?inize emin misiniz?");
$langmsg['js'][29] = x("Se�ili kategorileri silmek istedi?inize emin misiniz?");
$langmsg['js'][30] = x("?fadeler y�kleniyor... L�tfen bekleyiniz.");
$langmsg['js'][31] = x("Se�ili dosyalar? silmek istedi?inize emin misiniz?");
$langmsg['js'][32] = x("Se�ili ifadeleri silmek istedi?inize emin misiniz?");

#-----NEWS
$langmsg['news'][0] = x("L�tfen bir isim yaziniz.");
$langmsg['news'][1] = x("L�tfen bir mesaj yaziniz.");
$langmsg['news'][2] = x("Ge�ersiz g�venlik kodu.");
$langmsg['news'][3] = x("Farkli bir isim se�iniz.");
$langmsg['news'][4] = x("Ge�ersiz g�venlik kodu");
$langmsg['news'][5] = x("Bulunan sonu�:");
$langmsg['news'][6] = x("Kayit alimi kapali.");
$langmsg['news'][7] = x("Hesabiniz olusturuldu, <a href=\"{adminpath}\">buradan</a> giris yapabilirsiniz.");
$langmsg['news'][8] = x("L�tfen bir isim yaziniz.");
$langmsg['news'][9] = x("L�tfen bir mesaj yaziniz.");
$langmsg['news'][10] = x("Ge�ersiz g�venlik kodu");
$langmsg['news'][11] = x("Farkli bir isim se�iniz.");
$langmsg['news'][12] = x("Ge�ersiz g�venlik kodu");
$langmsg['news'][13] = x("Oy verdiginiz i�in tesekk�rler.");
$langmsg['news'][14] = x("Bu yaziyi daha �nce oylamissiniz.");
$langmsg['news'][15] = x("Isim");
$langmsg['news'][16] = x("Epostal:");
$langmsg['news'][17] = x("Arkadasinizin Epostasi:");
$langmsg['news'][18] = x("Message:");
$langmsg['news'][19] = x("Hey check out this article I found!");
$langmsg['news'][20] = x("Send to friend");
$langmsg['news'][21] = x("Email sent.");
$langmsg['news'][22] = x("L�tfen adinizi giriniz");
$langmsg['news'][23] = x("L�tfen eposta adersinizi giriniz");
$langmsg['news'][24] = x("L�tfen mesaj giriniz");
$langmsg['news'][25] = x("L�tfen arkadaslarinizin eposta adreslerini giriniz");
$langmsg['news'][27] = x("Ge�erli bir eposta adresi giriniz");
$langmsg['news'][28] = x("L�tfen arkadaslariniz i�in ge�erli eposta adresi giriniz");
$langmsg['news'][29] = x("L�tfen bir kullanici adi giriniz.");
$langmsg['news'][30] = x("Bu kullanici adi kullanimda, l�tfen farkli bir kullanici adi se�iniz.");
$langmsg['news'][31] = x("Bu e-posta adresi kullanimda, l�tfen farkli bir eposta adresi se�iniz.");
$langmsg['news'][32] = x("L�tfen bir mail adresi yaziniz.");
$langmsg['news'][33] = x("L�tfen ge�erli bir mail adresi yaziniz.");
$langmsg['news'][34] = x("L�tfen sifrenizi giriniz.");
$langmsg['news'][35] = x("L�tfen sifrenizi tekrar giriniz.");
$langmsg['news'][36] = x("Girdiginiz sifreler birbirine uymuyor.");
$langmsg['news'][37] = x("Ge�ersiz g�venlik kodu.");
$langmsg['news'][38] = x("L�tfen ikinci mesaji g�ndermeden �nce");
$langmsg['news'][39] = x("Mesajinizi g�nderirken bir hata olustu, l�tfen y�netici ile iletisime ge�iniz..");
$langmsg['news'][40] = x("Bir yorum g�ndermek i�in giris yapmalisiniz.");
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
$langmsg['news'][51] = x("�zet");
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
$langmsg['months'][8] = x("Eyl�l");
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
$langmsg['install'][9] = x("Veritabani se�imi:");
$langmsg['install'][10] = x("db.php dosyasi yazilabilir degil, l�tfen bu dosyanin CHMOD ayarlarini 777 yapiniz.");
$langmsg['install'][11] = x("Hesap bilgileri");
$langmsg['install'][12] = x("Hesap detaylarinizi asagiya giriniz. Bu bilgileri giris yaparken kullanacaksiniz.");
$langmsg['install'][13] = x("Eposta:");
$langmsg['install'][14] = x("Sifreyi dogrua:");
$langmsg['install'][15] = x("Devam et");
$langmsg['install'][16] = x("L�tfen bir kullanici adi giriniz");
$langmsg['install'][17] = x("L�tfen bir eposta adresi giriniz");
$langmsg['install'][18] = x("L�tfen sifrenizi giriniz");
$langmsg['install'][19] = x("Kurulumu bitirmek i�in Kur tusuna basiniz");
$langmsg['install'][20] = x("Sifreleriniz uyusmuyor");
$langmsg['install'][21] = x("Kur");
$langmsg['install'][22] = x("Kurulum tamamlaniyor");
$langmsg['install'][23] = x("BASARILI!");
$langmsg['install'][24] = x("N-13 News basarili bir sekilde kuruldu.");
$langmsg['install'][25] = x("Y�netici paneline giris."); 
$langmsg['install'][26] = x("Port:");
$langmsg['install'][27] = x("Soket:");
$langmsg['install'][28] = x("Eklenti:");
$langmsg['install'][29] = x("(varsayilan i�in bos birakin)");
$langmsg['install'][30] = x("Kurulumu ... L�tfen bekleyiniz.");
$langmsg['install'][31] = x("Mysqli_connect islevi bulunamadi.");
$langmsg['install'][32] = x("Pdo_Mysql islevi bulunamadi.");
?>