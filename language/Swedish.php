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
#   LANGUAGE    Swedish                                 #
#   VERSION     4.0                                     #
#   AUTHOR      chris@network-13.com                    #
#                                                       #
#   Any words you see wrapped in { } braces,            #
#   for example {totalnews} need to be left like that.  #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

$langmsg['menu'][0] = x("L�gg till nyheter");
$langmsg['menu'][1] = x("Edit News");
$langmsg['menu'][2] = x("Arkiv");
$langmsg['menu'][3] = x("Nytt meddelande");
$langmsg['menu'][4] = x("Inkorg");
$langmsg['menu'][5] = x("Utkorg");
$langmsg['menu'][6] = x("Konton");
$langmsg['menu'][7] = x("�tkomstniv�er");
$langmsg['menu'][8] = x("Banned IPs");
$langmsg['menu'][9] = x("Kategorier");
$langmsg['menu'][10] = x("Uppladdning");
$langmsg['menu'][11] = x("Personligt");
$langmsg['menu'][12] = x("Profil");
$langmsg['menu'][13] = x("RSS-feed");
$langmsg['menu'][14] = x("Smilies");
$langmsg['menu'][15] = x("System");
$langmsg['menu'][16] = x("Mallar");
$langmsg['menu'][17] = x("Ordfilter");
$langmsg['menu'][18] = x("Hem");
$langmsg['menu'][19] = x("Nyheter");
$langmsg['menu'][20] = x("Meddelanden");
$langmsg['menu'][21] = x("Options");
$langmsg['menu'][22] = x("Hj�lp");
$langmsg['menu'][23] = x("Logout");
$langmsg['menu'][24] = x("Filuppladdning");


$langmsg['home'][0] = x("Global Nyhetsstatistik nedan.");
$langmsg['home'][1] = x("V�lkommen");
$langmsg['home'][2] = x("PHP-inst�llning 'magic_quotes_gpc' har konstaterats vara aktiverat. Vi rekommenderar att du inaktivera den h�r inst�llningen.");
$langmsg['home'][3] = x("PHP-inst�llning 'register_globals' 'har konstaterats vara aktiverat. Vi rekommenderar att du avaktiverar detta eftersom det kan orsaka s�kerhetsproblem och felaktigheter f�rekommer.");
$langmsg['home'][4] = x("Install.php har uppt�ckts. Ta bort denna fil.");
$langmsg['home'][5] = x("Install.php kan inte tas bort, v�nligen ta bort filen manuellt");
$langmsg['home'][6] = x("Total News:");
$langmsg['home'][7] = x("Kommentarer totalt:");
$langmsg['home'][8] = x("Total Users:");
$langmsg['home'][9] = x("Totalt Smilies:");
$langmsg['home'][10] = x("Totalt Filter:");
$langmsg['home'][11] = x("Totalt antal kategorier:");
$langmsg['home'][12] = x("Totalt Mallar:");
$langmsg['home'][13] = x("Total �tkomstniv�er:");
$langmsg['home'][14] = x("Ansluta till databasen:");
$langmsg['home'][15] = x("Optimera alla tabeller:");
$langmsg['home'][16] = x("Aktuell version:");
$langmsg['home'][17] = x("Senaste version:");
$langmsg['home'][18] = x("Se �tkomstloggar");
$langmsg['home'][19] = x("Query time:");
$langmsg['home'][20] = x("Ol�sta meddelanden");
$langmsg['home'][21] = x("Prova att ta bort filen automatiskt?");
$langmsg['home'][22] = x("sekunder");
$langmsg['home'][23] = x("Totalt antal bilder");
$langmsg['home'][24] = x("Totalt antal filer");
$langmsg['home'][25] = x("Totalt RSS-feed");


$langmsg['addnews'][0] = x("Nyheter Preview");
$langmsg['addnews'][1] = x("Ange en titel");
$langmsg['addnews'][2] = x("V�nligen v�lj om detta inl�gg kommer att till�ta kommentarer eller inte");
$langmsg['addnews'][3] = x("L�gg till nyheter");
$langmsg['addnews'][4] = x("V�lj kategori");


$langmsg['editnews'][0] = x("Edit News");
$langmsg['editnews'][1] = x("Visar");
$langmsg['editnews'][2] = x("Options");
$langmsg['editnews'][3] = x("Belopp visa");
$langmsg['editnews'][4] = x("Sortera");
$langmsg['editnews'][5] = x("Ordning");
$langmsg['editnews'][7] = x("Titel");
$langmsg['editnews'][8] = x("F�rfattare");
$langmsg['editnews'][9] = x("Kategorier");
$langmsg['editnews'][10] = x("Datum");
$langmsg['editnews'][11] = x("Godk�nnande");
$langmsg['editnews'][12] = x("Kommentarer");
$langmsg['editnews'][13] = x("[visa]");
$langmsg['editnews'][14] = x("Godk�nd");
$langmsg['editnews'][15] = x("Unapproved");
$langmsg['editnews'][16] = x("Nyheter la.");
$langmsg['editnews'][17] = x("Valda inl�gg raderas.");
$langmsg['editnews'][18] = x("Valda inl�gg uppdateras.");
$langmsg['editnews'][19] = x("Nyheter uppdateras.");
$langmsg['editnews'][20] = x("Disabled");
$langmsg['editnews'][21] = x("nyhetsartiklar.");
$langmsg['editnews'][22] = x("totalt.");
$langmsg['editnews'][23] = x("Visningantal �terst�llas till 0 f�r den valda artikeln (s)");
$langmsg['editnews'][24] = x("Betyg �terst�lla f�r den valda artikeln (s)");
$langmsg['editnews'][25] = x("Filtrera efter kategori");


$langmsg['newsform'][0] = x("L�gg till din nyhetsl�sare post nedan.");
$langmsg['newsform'][1] = x("Titel:");
$langmsg['newsform'][2] = x("Kategorier:");
$langmsg['newsform'][3] = x("Short Story:");
$langmsg['newsform'][4] = x("Story:");
$langmsg['newsform'][5] = x("HTML Disabled");
$langmsg['newsform'][6] = x("HTML Enabled");
$langmsg['newsform'][7] = x("Kommentarer:");
$langmsg['newsform'][8] = x("Toggle datum");
$langmsg['newsform'][9] = x("Toggle novell");
$langmsg['newsform'][16] = x("Datum:");
$langmsg['newsform'][17] = x("Toggle arkiv");
$langmsg['newsform'][18] = x("Aldrig arkiv");
$langmsg['newsform'][19] = x("Filuppladdning");
$langmsg['newsform'][20] = x("Downloads");
$langmsg['newsform'][21] = x("Uploaded");
$langmsg['newsform'][22] = x("Artikel");
$langmsg['newsform'][23] = x("Ange en bild-URL");
$langmsg['newsform'][24] = x("Infoga");
$langmsg['newsform'][25] = x("V�lj en uppladdad bild");


$langmsg['editcomments'][0] = x("Edit Comments");
$langmsg['editcomments'][1] = x("Redigera kommentar nedan.");
$langmsg['editcomments'][2] = x("F�rfattare:");
$langmsg['editcomments'][3] = x("Email:");
$langmsg['editcomments'][4] = x("Meddelande:");
$langmsg['editcomments'][5] = x("Kommentar uppdateras.");
$langmsg['editcomments'][6] = x("kommentarer utg�.");
$langmsg['editcomments'][7] = x("kommentarer uppdateras.");
$langmsg['editcomments'][8] = x("kommentarer totalt.");
$langmsg['editcomments'][9] = x("Message");
$langmsg['editcomments'][10] = x("Datum");
$langmsg['editcomments'][11] = x("Godk�nnande");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Godk�nd");
$langmsg['editcomments'][14] = x("Unapproved");
$langmsg['editcomments'][15] = x("Ort:");


$langmsg['privmsgs'][0] = x("Privata meddelanden");
$langmsg['privmsgs'][1] = x("Inkorg");
$langmsg['privmsgs'][2] = x("Utkorg");
$langmsg['privmsgs'][3] = x("Nytt meddelande");
$langmsg['privmsgs'][4] = x("Ni");
$langmsg['privmsgs'][5] = x("Titel");
$langmsg['privmsgs'][6] = x("Fr�n");
$langmsg['privmsgs'][7] = x("Skickat");
$langmsg['privmsgs'][8] = x("Till");
$langmsg['privmsgs'][9] = x("Svara p� detta meddelande");
$langmsg['privmsgs'][10] = x("Nytt privat meddelande.");
$langmsg['privmsgs'][11] = x("Skicka till:");
$langmsg['privmsgs'][12] = x("Titel:");
$langmsg['privmsgs'][13] = x("Meddelande:");
$langmsg['privmsgs'][14] = x("Exempel 'user1, user2, user3'");
$langmsg['privmsgs'][15] = x("Message preview.");
$langmsg['privmsgs'][16] = x("Meddelande skickas till f�ljande anv�ndare.");
$langmsg['privmsgs'][17] = x("V�nligen ange ett anv�ndarnamn f�r att skicka meddelandet till.");
$langmsg['privmsgs'][18] = x("Skriv in en rubrik f�r detta meddelande.");
$langmsg['privmsgs'][19] = x("Skriv in ett meddelande.");
$langmsg['privmsgs'][20] = x("Meddelanden raderas.");
$langmsg['privmsgs'][21] = x("ol�sta meddelanden.");
$langmsg['privmsgs'][22] = x("meddelanden totalt.");


$langmsg['options'][0] = x("Options");
$langmsg['options'][1] = x("Nya");
$langmsg['options'][2] = x("Redigera");


$langmsg['bannedips'][0] = x("Banned IPs");
$langmsg['bannedips'][1] = x("Banned IPs.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Antal g�nger blockeras");
$langmsg['bannedips'][4] = x("L�gg till en ny IP-adress.");
$langmsg['bannedips'][5] = x("Banned meddelande. (HTML �r till�tet)");
$langmsg['bannedips'][6] = x("IP-adress:");
$langmsg['bannedips'][7] = x("Att IP-adress �r redan f�rbjudet.");
$langmsg['bannedips'][8] = x("IP-adress f�rbjudna.");
$langmsg['bannedips'][9] = x("IP-adresser raderade.");
$langmsg['bannedips'][10] = x("IP-adresser har �terst�llts.");
$langmsg['bannedips'][11] = x("Banned budskap uppdateras.");


$langmsg['cats'][0] = x("Kategorier");
$langmsg['cats'][1] = x("Kategorier.");
$langmsg['cats'][2] = x("Namn");
$langmsg['cats'][3] = x("Artiklar");
$langmsg['cats'][4] = x("Skapa en ny kategori.");
$langmsg['cats'][5] = x("Namn:");
$langmsg['cats'][6] = x("F�ljande kategorier har tagits bort:");
$langmsg['cats'][7] = x("V�lj ett annat namn.");
$langmsg['cats'][8] = x("Kategori skapade.");
$langmsg['cats'][9] = x("Kategori uppdateras.");
$langmsg['cats'][10] = x("Redigera din kategori nedan.");
$langmsg['cats'][11] = x("Bilder");
$langmsg['cats'][12] = x("Filer");
$langmsg['cats'][13] = x("En kategori med det namnet finns redan, v�lj en annan.");


$langmsg['img'][0] = x("Uppladdning");
$langmsg['img'][1] = x("Ladda upp en ny bild");
$langmsg['img'][2] = x("Ladda upp fil");
$langmsg['img'][3] = x("Bilder totalt");
$langmsg['img'][4] = x("V�lj en bild:");
$langmsg['img'][5] = x("bild (er) utg�r.");
$langmsg['img'][6] = x("Image Uploaded");
$langmsg['img'][7] = x("Det uppstod ett fel uppladdning filen, f�rs�k igen.");
$langmsg['img'][8] = x("Ogiltig filtill�gg.");
$langmsg['img'][9] = x("Ogiltig bild.");
$langmsg['img'][10] = x("Image bort fr�n kategori.");
$langmsg['img'][11] = x("Image (s) l�ggs till kategori.");
$langmsg['img'][12] = x("Filnamn:");
$langmsg['img'][13] = x("V�lj en kategori:");
$langmsg['img'][14] = x("Redigera en bild");
$langmsg['img'][15] = x("Titel:");
$langmsg['img'][16] = x("Beskrivning:");
$langmsg['img'][17] = x("Uppdatera bild");
$langmsg['img'][18] = x("Ogiltig bild");
$langmsg['img'][19] = x("Image uppdaterad");
$langmsg['img'][20] = x("Thumbnails");
$langmsg['img'][21] = x("Detaljer");
$langmsg['img'][22] = x("Kategori");
$langmsg['img'][23] = x("Filnamn");
$langmsg['img'][24] = x("Filstorlek");
$langmsg['img'][25] = x("Uploader");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("L�gg till kategori");
$langmsg['img'][28] = x("Ta bort fr�n kategori");
$langmsg['img'][29] = x("Uppladdade bilder");
$langmsg['img'][30] = x("En fil med det namnet finns redan.");
$langmsg['img'][31] = x("Alla kategorier");
$langmsg['img'][32] = x("Det gick inte att skriva till inlagda katalogen. CHMOD denna katalog till 777");


$langmsg['personal'][0] = x("Personliga Options");
$langmsg['personal'][1] = x("Redigera kontot info nedan.");
$langmsg['personal'][2] = x("Personliga inst�llningar f�r");
$langmsg['personal'][3] = x("Avatar URL:");
$langmsg['personal'][4] = x("E-postadress:");
$langmsg['personal'][5] = x("Meddelandesignaler:");
$langmsg['personal'][6] = x("F� varnas av ol�sta meddelanden p� f�rsta inloggning?");
$langmsg['personal'][7] = x("Nytt l�senord:");
$langmsg['personal'][8] = x("(l�mna tomt f�r att beh�lla nuvarande)");
$langmsg['personal'][9] = x("Bekr�fta l�senord:");
$langmsg['personal'][10] = x("En e-postadress skall anges.");
$langmsg['personal'][11] = x("Inst�llningar uppdateras.");
$langmsg['personal'][12] = x("L�senorden matchar inte.");
$langmsg['personal'][13] = x("Aktivera WYSIWYG editor?");


$langmsg['login'][0] = x("V�nligen Logga");
$langmsg['login'][1] = x("Namn:");
$langmsg['login'][2] = x("L�senord:");
$langmsg['login'][3] = x("Har du gl�mt ditt l�senord?");
$langmsg['login'][4] = x("Kom ih�g mig");
$langmsg['login'][5] = x("Security Key:");
$langmsg['login'][6] = x("Logga in");
$langmsg['login'][7] = x("Ogiltig s�kerhetsnyckeln");
$langmsg['login'][8] = x("Ogiltigt namn eller l�senord");
$langmsg['login'][9] = x("Typ den h�r koden nedan");


$langmsg['profile'][0] = x("Edit Profile");
$langmsg['profile'][1] = x("Redigera din profil nedan.");
$langmsg['profile'][2] = x("Namn:");
$langmsg['profile'][3] = x("�lder");
$langmsg['profile'][4] = x("Ort:");
$langmsg['profile'][5] = x("K�n:");
$langmsg['profile'][6] = x("Profil bild:");
$langmsg['profile'][7] = x("Hemsida:");
$langmsg['profile'][8] = x("Intressen");
$langmsg['profile'][9] = x("Hobbies:");
$langmsg['profile'][10] = x("Yrke:");
$langmsg['profile'][11] = x("Favourite Quote:");
$langmsg['profile'][12] = x("Manlig");
$langmsg['profile'][13] = x("Kvinna");
$langmsg['profile'][14] = x("Profil uppdaterad.");
$langmsg['profile'][15] = x("Ingen");


$langmsg['accounts'][0] = x("Konton");
$langmsg['accounts'][1] = x("R�kenskaper.");
$langmsg['accounts'][2] = x("Anv�ndarnamn");
$langmsg['accounts'][3] = x("�tkomstniv�");
$langmsg['accounts'][4] = x("Antal tj�nster");
$langmsg['accounts'][5] = x("Antal kommentarer");
$langmsg['accounts'][6] = x("Skapa ett nytt konto.");
$langmsg['accounts'][7] = x("Kontonamn:");
$langmsg['accounts'][8] = x("Email:");
$langmsg['accounts'][9] = x("Nytt l�senord:");
$langmsg['accounts'][10] = x("Bekr�fta l�senord:");
$langmsg['accounts'][11] = x("Access Niv�:");
$langmsg['accounts'][12] = x("Nytt konto.");
$langmsg['accounts'][13] = x("Redigera kontot nedan.");
$langmsg['accounts'][14] = x("En e-postadress skall anges.");
$langmsg['accounts'][15] = x("Konto uppdateras.");
$langmsg['accounts'][16] = x("L�senorden matchar inte.");
$langmsg['accounts'][17] = x("Ett konto namn tas upp.");
$langmsg['accounts'][18] = x("Kontonamn finns redan. V�lj en annan.");
$langmsg['accounts'][19] = x("Ett l�senord m�ste anges.");
$langmsg['accounts'][20] = x("Konto skapat.");
$langmsg['accounts'][21] = x("F�ljande konton har tagits bort:");
$langmsg['accounts'][22] = x("Du kan inte radera ditt eget konto.");
$langmsg['accounts'][23] = x("(L�mna tomt f�r att beh�lla nuvarande)");
$langmsg['accounts'][24] = x("Ett konto �r redan anv�nder den e-postadress, v�lj en annan.");
$langmsg['accounts'][25] = x("Ange ett kontonamn");
$langmsg['accounts'][26] = x("Filer");
$langmsg['accounts'][27] = x("Bilder");


$langmsg['access'][0] = x("�tkomstniv�er");
$langmsg['access'][1] = x("Skapa en ny �tkomstniv�.");
$langmsg['access'][2] = x("Namn:");
$langmsg['access'][3] = x("Vilka avsnitt kan detta f� tillg�ng?");
$langmsg['access'][4] = x("Konton:");
$langmsg['access'][5] = x("�tkomstniv�er:");
$langmsg['access'][6] = x("F�rbjudna IP-adresser:");
$langmsg['access'][7] = x("Kategorier:");
$langmsg['access'][8] = x("Kommentarer:");
$langmsg['access'][9] = x("Help:");
$langmsg['access'][10] = x("Bild Uppladdningar:");
$langmsg['access'][11] = x("Nyheter:");
$langmsg['access'][12] = x("Persional Alternativ:");
$langmsg['access'][13] = x("Privata meddelanden:");
$langmsg['access'][14] = x("Profil:");
$langmsg['access'][15] = x("RSS Feeds:");
$langmsg['access'][16] = x("Smilies:");
$langmsg['access'][17] = x("System Configuration:");
$langmsg['access'][18] = x("Mallar:");
$langmsg['access'][19] = x("Word Filter:");
$langmsg['access'][20] = x("Vilka kategorier kan denna �tkomstniv� tj�nst i?");
$langmsg['access'][21] = x("Alla:");
$langmsg['access'][22] = x("Vilka tj�nster kan denna niv� redigera?");
$langmsg['access'][23] = x("Admin (alla):");
$langmsg['access'][24] = x("Mod (egna + medlemmar):");
$langmsg['access'][25] = x("Medlem (egna):");
$langmsg['access'][26] = x("�r inl�gg fr�n denna �tkomstniv� automatiskt godk�nd?");
$langmsg['access'][27] = x("Kan denna �tkomstniv� godk�nna inl�gg?");
$langmsg['access'][28] = x("Kan denna �tkomstniv� anv�nda HTML?");
$langmsg['access'][29] = x("Till�t meddelanden utan att v�lja en kategori?");
$langmsg['access'][30] = x("�tkomstniv�er utg�:");
$langmsg['access'][31] = x("F�ljande �tkomstniv�er har inte tagits bort eftersom de har 1 eller flera konton som anges nedan:");
$langmsg['access'][32] = x("Redigera �tkomstniv� nedan.");
$langmsg['access'][33] = x("Ange ett namn f�r denna �tkomstniv�.");
$langmsg['access'][34] = x("Access niv� updated.");
$langmsg['access'][35] = x("�tkomstniv� med det namnet finns redan, v�lj en annan.");
$langmsg['access'][36] = x("V�lj vilka tj�nster denna niv� kan redigera.");
$langmsg['access'][37] = x("V�nligen ange om denna �tkomstniv� inl�gg f� auto godk�nd");
$langmsg['access'][38] = x("V�nligen ange om denna �tkomstniv� kan godk�nna inl�gg");
$langmsg['access'][39] = x("V�nligen ange om denna �tkomstniv� kan anv�nda HTML");
$langmsg['access'][40] = x("V�nligen ange om denna �tkomstniv� kan skriva utan att v�lja en kategori");
$langmsg['access'][41] = x("Access niv� skapas.");
$langmsg['access'][42] = x("�tkomstniv�er.");
$langmsg['access'][43] = x("Namn");
$langmsg['access'][44] = x("Access");
$langmsg['access'][45] = x("Konton");
$langmsg['access'][46] = x("Medlem");
$langmsg['access'][47] = x("Moderator");
$langmsg['access'][48] = x("Administrator");
$langmsg['access'][49] = x("Filuppladdning");
$langmsg['access'][50] = x("Kan denna �tkomstniv� se anv�ndarens IP-adresser?");
$langmsg['access'][51] = x("Vilka filer och bilder kan denna �tkomstniv� redigera?");
$langmsg['access'][52] = x("Egen");
$langmsg['access'][53] = x("Alla");



$langmsg['accesslogs'][0] = x("�tkomstloggar");
$langmsg['accesslogs'][1] = x("Anv�ndarnamn");
$langmsg['accesslogs'][2] = x("F�rs�k");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Datum");
$langmsg['accesslogs'][5] = x("�tkomstloggar f�r");
$langmsg['accesslogs'][6] = x("Framg�ngsrik");
$langmsg['accesslogs'][7] = x("Usuccessful");


$langmsg['filters'][0] = x("Ordfilter");
$langmsg['filters'][1] = x("Filter added.");
$langmsg['filters'][2] = x("Filtrera bort.");
$langmsg['filters'][3] = x("Alla ord nedan kommer att filtreras bort fr�n alla kommentarer.");
$langmsg['filters'][4] = x("Filtrerat Word");
$langmsg['filters'][5] = x("Ers�tt med");
$langmsg['filters'][6] = x("Ta bort");
$langmsg['filters'][7] = x("L�gg till ett nytt filter");


$langmsg['rss'][0] = x("RSS-feed");
$langmsg['rss'][1] = x("Redigera dina RSS-fl�de inst�llningar nedan");
$langmsg['rss'][2] = x("Nyheten �r platsen d�r du ska visa dina nyheter, till exempel http://yourdomain.com/ eller http://yourdomain.com/index");
$langmsg['rss'][3] = x("Feed namn:");
$langmsg['rss'][4] = x("Nyheter location:");
$langmsg['rss'][5] = x("Namnet p� ditt RSS-fl�de:");
$langmsg['rss'][6] = x("Beskrivning av dina RSS-feed:");
$langmsg['rss'][7] = x("Teckenkodning:");
$langmsg['rss'][8] = x("Spr�k:");
$langmsg['rss'][9] = x("M�ngd inl�gg att visa:");
$langmsg['rss'][10] = x("0 = alla");
$langmsg['rss'][11] = x("Kategorier f�r att visa:");
$langmsg['rss'][12] = x("Visa inl�gg som inte har tilldelats en kategori?");
$langmsg['rss'][13] = x("RSS-kod:");
$langmsg['rss'][14] = x("�ndra hur ditt fl�de visas");
$langmsg['rss'][15] = x("Visar titeln p� ber�ttelsen.");
$langmsg['rss'][16] = x("Visar den novell av nyheterna.");
$langmsg['rss'][17] = x("Visar historien om nyheter.");
$langmsg['rss'][18] = x("Framg�r vilka kategorier varje inl�gg har tilldelats.");
$langmsg['rss'][19] = x("Visar webbadressen f�r en viss tj�nst.");
$langmsg['rss'][20] = x("Visar datumet ber�ttelsen publicerades p�.");
$langmsg['rss'][21] = x("Visar tidszon inst�llningen.");
$langmsg['rss'][22] = x("Visar tidsst�mpel varje inl�gg.");
$langmsg['rss'][23] = x("Visar f�rfattaren historien.");
$langmsg['rss'][24] = x("Visar anv�ndare Avatar om de har en.");
$langmsg['rss'][25] = x("Visar unika ID varje historia har.");
$langmsg['rss'][26] = x("Visar hur mycket kommentarer till varje nyheter post.");
$langmsg['rss'][27] = x("Ange ett feedname");
$langmsg['rss'][28] = x("Ange en plats nyheter");
$langmsg['rss'][29] = x("Ange en titel");
$langmsg['rss'][30] = x("Ange en beskrivning");
$langmsg['rss'][31] = x("Ange teckenkodning");
$langmsg['rss'][32] = x("Ange ett spr�k");
$langmsg['rss'][33] = x("Ange ett belopp f�r att visa");
$langmsg['rss'][34] = x("RSS Feed skapade");
$langmsg['rss'][35] = x("En feed med det namnet finns redan, v�lj en annan");
$langmsg['rss'][36] = x("RSS Feed uppdaterad");
$langmsg['rss'][37] = x("RSS-feed");
$langmsg['rss'][38] = x("RSS feed (s) utg�r.");
$langmsg['rss'][39] = x("Namn");
$langmsg['rss'][40] = x("Kategorier");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Skapa en ny RSS-feed.");
$langmsg['rss'][43] = x("Visar den v�nliga titeln p� ber�ttelsen");


$langmsg['smilies'][0] = x("Smilies");
$langmsg['smilies'][1] = x("Detta �r anv�ndbart om du vill uppdatera platsen f�r alla dina smilies p� en g�ng.");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("Ers�tt:");
$langmsg['smilies'][4] = x("Ers�tt med:");
$langmsg['smilies'][5] = x("Alla uppdaterade s�kv�gar.");
$langmsg['smilies'][6] = x("Skapa en ny smilie");
$langmsg['smilies'][7] = x("S�kv�g:");
$langmsg['smilies'][8] = x("Keycode:");
$langmsg['smilies'][9] = x("Ange s�kv�gen till smiley.");
$langmsg['smilies'][10] = x("Ange ett keycode f�r denna smiley.");
$langmsg['smilies'][11] = x("Tangentkoden redan. V�lj en annan tangentkoden.");
$langmsg['smilies'][12] = x("Smiley la.");
$langmsg['smilies'][13] = x("�r du s�ker p� att du vill ta bort denna smiley?");
$langmsg['smilies'][14] = x("Smiley utg�.");
$langmsg['smilies'][15] = x("Redigera smiley nedan");
$langmsg['smilies'][16] = x("Smiley:");
$langmsg['smilies'][17] = x("Smiley uppdateras.");
$langmsg['smilies'][18] = x("Smilies strukits");
$langmsg['smilies'][19] = x("V�lj vilka smiley som du vill redigera.");
$langmsg['smilies'][20] = x("Smiley");
$langmsg['smilies'][21] = x("S�tt i en ny smiley.");
$langmsg['smilies'][22] = x("Uppdatering v�g alla smilies");


$langmsg['system'][0] = x("Systemkonfiguration");
$langmsg['system'][1] = x("Redigera systemkonfigurationer.");
$langmsg['system'][2] = x("Nyheter");
$langmsg['system'][3] = x("M�ngd nyheter per sida:");
$langmsg['system'][4] = x("Vilken ordning de nyheter visas i:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("Datum & tid format f�r nyheter:");
$langmsg['system'][8] = x("Se h�r");
$langmsg['system'][9] = x("Visa avatarer:");
$langmsg['system'][10] = x("Avgr�nsare till olika kategorier vid visning nyheter:");
$langmsg['system'][11] = x("Kommentarer");
$langmsg['system'][12] = x("M�ngden kommentarer per sida:");
$langmsg['system'][13] = x("Vilken ordning kommentarer visas i:");
$langmsg['system'][14] = x("Datum & tid format f�r kommentarer:");
$langmsg['system'][15] = x("Maximal l�ngd f�r kommentarer:");
$langmsg['system'][16] = x("Visa kommentarer i nytt f�nster:");
$langmsg['system'][17] = x("Tidsf�rdr�jning efter posta kommentarer (Spamskydd):");
$langmsg['system'][18] = x("Seconds");
$langmsg['system'][19] = x("Skr�ppostmeddelande:");
$langmsg['system'][20] = x("Ny kommentar meddelande:");
$langmsg['system'][21] = x("Ny kommentar godk�nnande meddelande:");
$langmsg['system'][22] = x("Anv�nd bild kontroll p� kommentarer form:");
$langmsg['system'][23] = x("Friendly URLs");
$langmsg['system'][24] = x("Aktivera friendly webbadresser:");
$langmsg['system'][25] = x("Filtill�gg:");
$langmsg['system'][26] = x("Prefixet");
$langmsg['system'][27] = x("Directory filnamn:");
$langmsg['system'][28] = x("Registrering");
$langmsg['system'][29] = x("Till�t anv�ndare att registrera:");
$langmsg['system'][30] = x("�tkomstniv� f�r nya anv�ndare:");
$langmsg['system'][31] = x("Annan");
$langmsg['system'][32] = x("Tidszonen");
$langmsg['system'][33] = x("Till�tna filtyper p� uppladdade bilder:");
$langmsg['system'][34] = x("Uppladdning s�kv�g:");
$langmsg['system'][35] = x("Ingen �tkomst felmeddelande:");
$langmsg['system'][36] = x("Inst�llningar uppdateras.");
$langmsg['system'][37] = x("Tidsf�rdr�jning efter anv�ndande skicka till (Spamskydd):");
$langmsg['system'][38] = x("Anm�lningar");
$langmsg['system'][39] = x("F� e-postmeddelanden om nya kommentarer:");
$langmsg['system'][40] = x("F� e-postmeddelanden om nya registreringar:");
$langmsg['system'][41] = x("Till�t endast registrerade anv�ndare att kommentera:");
$langmsg['system'][42] = x("Skicka meddelanden till den h�r adressen:");
$langmsg['system'][43] = x("Till�tna filtyper p� uppladdade filer:");
$langmsg['system'][44] = x("F� e-postmeddelanden om icke godk�nda nyheter inl�gg:");
$langmsg['system'][45] = x("Publika nyckel");
$langmsg['system'][46] = x("Privat nyckel");
$langmsg['system'][47] = x("Skripts�kv�g");
$langmsg['system'][48] = x("Till�ta registrerade anv�ndare att radera sina egna kommentarer:");
$langmsg['system'][49] = x("Anv�nd bild kontroll p� index inloggning form:");
$langmsg['system'][50] = x("Anv�nd bild kontroll p� anm�lningsblanketten:");
$langmsg['system'][51] = x("Datum och tid format f�r filer:");
$langmsg['system'][52] = x("Visa \"Powered by\" nedanf�r nyheter:");


$langmsg['recover'][0] = x("L�senordsh�mtning");
$langmsg['recover'][1] = x("Ange e-postadress f�r kontot du vill �terst�lla l�senordet f�r.");
$langmsg['recover'][2] = x("Email:");
$langmsg['recover'][3] = x("Du eller n�gon har beg�rt att �terst�lla ditt l�senord F�lj l�nken nedan f�r att g�ra det.");
$langmsg['recover'][4] = x("Klicka h�r f�r att �terst�lla ditt l�senord");
$langmsg['recover'][5] = x("Ett e-postmeddelande har skickats till");
$langmsg['recover'][6] = x("Ett konto med den e existerar inte, kontakta administrat�ren.");
$langmsg['recover'][7] = x("Nytt l�senord");
$langmsg['recover'][8] = x("Ange ditt nya l�senord nedan.");
$langmsg['recover'][9] = x("Det gick inte att skicka en �terh�mtning kontaktar du din systemadministrat�r.");
$langmsg['recover'][10] = x("Bekr�fta l�senord:");
$langmsg['recover'][11] = x("L�senorden matchar inte.");
$langmsg['recover'][12] = x("Ditt l�senord har uppdaterats.");
$langmsg['recover'][13] = x("med vidare instruktioner f�r h�mtning av ditt konto.");


$langmsg['templates'][0] = x("Mallar");
$langmsg['templates'][1] = x("Skapa en ny mall.");
$langmsg['templates'][2] = x("Namn:");
$langmsg['templates'][3] = x("�ndringar hur nyheterna visas.");
$langmsg['templates'][4] = x("Visar titeln p� ber�ttelsen.");
$langmsg['templates'][5] = x("Visar den novell av nyheterna.");
$langmsg['templates'][6] = x("Visar historien om nyheter.");
$langmsg['templates'][7] = x("Visar datumet ber�ttelsen publicerades p�.");
$langmsg['templates'][8] = x("Framg�r vilka kategorier varje inl�gg har tilldelats.");
$langmsg['templates'][9] = x("Visar f�rfattaren historien.");
$langmsg['templates'][10] = x("Visar anv�ndare Avatar om de har en.");
$langmsg['templates'][11] = x("Visar unika ID varje historia har.");
$langmsg['templates'][12] = x("Visar IP-adressen av f�rfattaren. (Endast visar om du �r inloggad)");
$langmsg['templates'][13] = x("Visar l�nken f�r att l�sa hela inl�gget");
$langmsg['templates'][14] = x("Kommer att visa din e-postadress.");
$langmsg['templates'][15] = x("Kommer att skapa en l�nk till din e-postadress.");
$langmsg['templates'][16] = x("Kommer att skapa en l�nk till din profil.");
$langmsg['templates'][17] = x("Visar hur mycket kommentarer till varje nyheter post.");
$langmsg['templates'][18] = x("Kommer att skapa en l�nk till kommentarerna.");
$langmsg['templates'][19] = x("Anything s�tta mellan dessa taggar visas bara om inloggad");
$langmsg['templates'][20] = x("Path to smilies");
$langmsg['templates'][21] = x("Kommentarer");
$langmsg['templates'][22] = x("F�r�ndringar hur kommentarer visas.");
$langmsg['templates'][23] = x("Visar f�rfattaren av kommentaren.");
$langmsg['templates'][24] = x("Visar meddelandet.");
$langmsg['templates'][25] = x("Visar anv�ndare Avatar om de har en.");
$langmsg['templates'][26] = x("Visar IP-adressen av f�rfattaren. (Endast visar om du �r inloggad)");
$langmsg['templates'][27] = x("Visar unika ID varje kommentar har.");
$langmsg['templates'][28] = x("Visar e-postadressen till anv�ndaren som kommenterade.");
$langmsg['templates'][29] = x("Kommer att skapa en l�nk till anv�ndarnas e-post.");
$langmsg['templates'][30] = x("Visar datumet kommentaren �r publicerad.");
$langmsg['templates'][31] = x("Anything s�tta mellan dessa taggar visas bara om inloggad");
$langmsg['templates'][32] = x("Kommentarer Form");
$langmsg['templates'][33] = x("Det �r viktigt n�r du redigerar detta f�r att h�lla alla namn inmatningsf�lt och ID samma annars kommer det inte att fungera. L�gg ocks� m�rke form onsubmit attributet useajax ='', ja eller nej avg�r om AJAX anv�nds n�r anv�ndaren l�mnar en kommentar.");
$langmsg['templates'][34] = x("Visar ID nyheter post.");
$langmsg['templates'][35] = x("Visar kategori ID nyheter post.");
$langmsg['templates'][36] = x("Kommer att visa ditt anv�ndarnamn om loggat in");
$langmsg['templates'][37] = x("Kommer att visa din e-post om inloggad");
$langmsg['templates'][38] = x("Kommer att visa meddelandet.");
$langmsg['templates'][39] = x("Kommer att visa alla smilies.");
$langmsg['templates'][40] = x("Nyheter Pagination");
$langmsg['templates'][44] = x("Kommentarer Pagination");
$langmsg['templates'][45] = x("Visar f�reg�ende l�nk om det finns n�gra.");
$langmsg['templates'][46] = x("Visar n�sta l�nk om det finns n�gra.");
$langmsg['templates'][47] = x("Kommer att visa s� m�nga sidor, Ex: 1 2 3 4.");
$langmsg['templates'][48] = x("Profiler");
$langmsg['templates'][49] = x("�ndra hur anv�ndare profiler visas.");
$langmsg['templates'][50] = x("Visar anv�ndarna anv�ndarnamn.");
$langmsg['templates'][51] = x("Visar anv�ndare namnet.");
$langmsg['templates'][52] = x("Visar anv�ndarnas �lder.");
$langmsg['templates'][53] = x("Visar anv�ndare platsen.");
$langmsg['templates'][54] = x("Visar anv�ndare k�n.");
$langmsg['templates'][55] = x("Skapa en l�nk till anv�ndarna hemsida.");
$langmsg['templates'][56] = x("Visar anv�ndarnas intressen.");
$langmsg['templates'][57] = x("Visar anv�ndare fritidsintressen.");
$langmsg['templates'][58] = x("Visar anv�ndare ockupationen.");
$langmsg['templates'][59] = x("Visar anv�ndare favorit citat.");
$langmsg['templates'][60] = x("Visa anv�ndare profilbild.");
$langmsg['templates'][61] = x("Nyheter Struktur");
$langmsg['templates'][62] = x("Det �r h�r du kan styra phyiscal ordning f�r hur varje del nyheter visas, till exempel om du vill att pagintation ska visas ovanf�r nyheter samt nedanf�r kan du g�ra det h�r.");
$langmsg['templates'][63] = x("Visar nyheter inl�gg.");
$langmsg['templates'][64] = x("Visar nyheter pagintation.");
$langmsg['templates'][65] = x("Kommentarer Struktur");
$langmsg['templates'][66] = x("Det �r h�r du kan styra phyiscal ordning f�r hur varje del nyheter ska visas n�r du tittar kommentarer, till exempel om du vill att pagintation ska visas ovanf�r dina kommentarer samt nedanf�r kan du g�ra det h�r.");
$langmsg['templates'][67] = x("Visar den enda nyheten inl�gg n�r du tittar kommentarer");
$langmsg['templates'][68] = x("Visar dina kommentarer.");
$langmsg['templates'][69] = x("Visas kommentaren pagintation.");
$langmsg['templates'][70] = x("Visar kommentar form.");
$langmsg['templates'][71] = x("Anm�lningsblankett");
$langmsg['templates'][72] = x("Det �r h�r du styr form som till�ter anv�ndare att registrera sig. Det �r viktigt att h�lla alla namn inmatningsf�lt och ID samma annars inte kommer att fungera.");
$langmsg['templates'][73] = x("Anv�ndarnamn anv�ndaren anger.");
$langmsg['templates'][74] = x("L�senord anv�ndaren anger.");
$langmsg['templates'][75] = x("Visar felmeddelandet om ett f�lt l�mnas tomt.");
$langmsg['templates'][76] = x("Ange ett namn.");
$langmsg['templates'][77] = x("Mall skapas.");
$langmsg['templates'][78] = x("V�lj ett annat namn.");
$langmsg['templates'][79] = x("Redigera mallarna nedan f�r att �ndra hur nyheter och kommentarer visas.");
$langmsg['templates'][80] = x("Nyheter");
$langmsg['templates'][81] = x("Mall uppdateras.");
$langmsg['templates'][82] = x("En mall med det namnet finns redan. V�lj ett annat namn");
$langmsg['templates'][83] = x("Kan inte ta bort mallen thats i bruk");
$langmsg['templates'][84] = x("Valda mallen (s) utg�r");
$langmsg['templates'][85] = x("mall (s) kopieras");
$langmsg['templates'][86] = x("V�lj en mall namn nedan f�r att redigera.");
$langmsg['templates'][87] = x("Valda mallen.");
$langmsg['templates'][88] = x("Namn");
$langmsg['templates'][89] = x("Valda");
$langmsg['templates'][90] = x("Skapa en ny mall.");
$langmsg['templates'][91] = x("V�lj");
$langmsg['templates'][92] = x("Visar visningar varje historia har.");
$langmsg['templates'][93] = x("Visar rating stars bilden.");
$langmsg['templates'][94] = x("Visar aktuell rating f�r historien.");
$langmsg['templates'][95] = x("Visar det antal g�nger historien har rankats.");
$langmsg['templates'][96] = x("Visar rating form.");
$langmsg['templates'][98] = x("Visar skicka till formul�ret.");
$langmsg['templates'][99] = x("Visar anv�ndare location");
$langmsg['templates'][100] = x("Uppladdade filer");
$langmsg['templates'][101] = x("Kontrollera hur dina uppladdade filer visas.");
$langmsg['templates'][102] = x("Datum f�r n�r filen laddades upp.");
$langmsg['templates'][103] = x("Namnet p� filen.");
$langmsg['templates'][104] = x("Filnamn f�r filen.");
$langmsg['templates'][105] = x("Filesize av filen.");
$langmsg['templates'][106] = x("URL f�r att ladda ner filen.");
$langmsg['templates'][107] = x("Anv�ndarnamn f�r uploader.");
$langmsg['templates'][108] = x("Belopp g�nger filen har laddats ner.");
$langmsg['templates'][109] = x("Visa filer kopplade till nyheter post.");
$langmsg['templates'][110] = x("Visa alla filer kopplade till nyheter post.");
$langmsg['templates'][111] = x("Visar endast 3 sidor �t g�ngen");
$langmsg['templates'][112] = x("L�nk till sidan ett, visar om inte n�rvarande p� sidan ett.");
$langmsg['templates'][113] = x("L�nk till sista sidan, visar om inte n�rvarande p� sidan den sista sidan.");
$langmsg['templates'][114] = x("Visar antalet ord f�r det h�r inl�gget");
$langmsg['templates'][115] = x("Visar den v�nliga titeln p� ber�ttelsen");
$langmsg['templates'][116] = x("Visar recaptcha element");
$langmsg['templates'][117] = x("Skapar en l�nk f�r att ta bort kommentaren.");
$langmsg['templates'][118] = x("Visar inloggningsformul�ret bara om inloggning kr�vs.");
$langmsg['templates'][119] = x("Inloggningsformul�ret");
$langmsg['templates'][120] = x("Kontrollera hur inloggningsformul�ret visas.");
$langmsg['templates'][121] = x("Visar e anv�ndaren angav.");
$langmsg['templates'][122] = x("Visar inloggning felmeddelande.");
$langmsg['templates'][123] = x("Visar recaptcha element.");
$langmsg['templates'][124] = x("Visar anv�ndarnamn anv�ndaren angav.");
$langmsg['templates'][125] = x("Om inloggad visas anv�ndarnamnet.");
$langmsg['templates'][126] = x("Visar s�kformul�ret. Alla namn och ID, vara densamma.");
$langmsg['templates'][127] = x("Visar numret f�r varje s�kresultat");
$langmsg['templates'][128] = x("Format hur s�kresultaten f� visas. F�r upprepas f�r varje resultat.");
$langmsg['templates'][129] = x("V�xlar mellan utskrift av en eller tv� f�r varje rad.");
$langmsg['templates'][130] = x("Visar det aktuella sidnumret.");
$langmsg['templates'][131] = x("Visar f�reg�ende sidnummer.");
$langmsg['templates'][132] = x("Visar n�sta sidnummer.");
$langmsg['templates'][133] = x("Visar den v�nliga titel nyhetsartikel.");
$langmsg['templates'][134] = x("S�kformul�r");
$langmsg['templates'][135] = x("S�kresultat");
$langmsg['templates'][136] = x("Uppladdade filer");


$langmsg['uploadedfiles'][0] = x("Filuppladdning");
$langmsg['uploadedfiles'][1] = x("Ladda upp en ny fil");
$langmsg['uploadedfiles'][2] = x("Ladda upp fil");
$langmsg['uploadedfiles'][4] = x("V�lj en fil:");
$langmsg['uploadedfiles'][5] = x("Fil (er) utg�r.");
$langmsg['uploadedfiles'][6] = x("Filen upp");
$langmsg['uploadedfiles'][7] = x("Det uppstod ett fel uppladdning filen, f�rs�k igen.");
$langmsg['uploadedfiles'][8] = x("Ogiltig filtill�gg.");
$langmsg['uploadedfiles'][9] = x("Ogiltig fil.");
$langmsg['uploadedfiles'][10] = x("File bort fr�n kategori.");
$langmsg['uploadedfiles'][11] = x("Fil (er) l�ggs till kategori.");
$langmsg['uploadedfiles'][12] = x("Filnamn");
$langmsg['uploadedfiles'][13] = x("V�lj en kategori:");
$langmsg['uploadedfiles'][14] = x("Redigera en fil");
$langmsg['uploadedfiles'][15] = x("Titel:");
$langmsg['uploadedfiles'][16] = x("Beskrivning:");
$langmsg['uploadedfiles'][17] = x("Uppdateringsfil");
$langmsg['uploadedfiles'][18] = x("Ogiltig fil");
$langmsg['uploadedfiles'][19] = x("File uppdaterad");
$langmsg['uploadedfiles'][20] = x("Thumbnails");
$langmsg['uploadedfiles'][21] = x("Detaljer");
$langmsg['uploadedfiles'][22] = x("Kategori");
$langmsg['uploadedfiles'][23] = x("Titel");
$langmsg['uploadedfiles'][24] = x("Filstorlek");
$langmsg['uploadedfiles'][25] = x("Uploader");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("L�gg till kategori");
$langmsg['uploadedfiles'][28] = x("Ta bort fr�n kategori");
$langmsg['uploadedfiles'][29] = x("Uppladdade filer");
$langmsg['uploadedfiles'][30] = x("En fil med det namnet finns redan.");
$langmsg['uploadedfiles'][31] = x("Reset nedladdningar:");
$langmsg['uploadedfiles'][32] = x("Alla kategorier");
$langmsg['uploadedfiles'][33] = x("nedladdningar");
$langmsg['uploadedfiles'][34] = x("UPPLADDAD");


$langmsg['admindata'][0] = x("Hj�lp");
$langmsg['admindata'][1] = x("L�gg till nyheter");
$langmsg['admindata'][2] = x("Privata meddelanden");
$langmsg['admindata'][3] = x("Edit News");
$langmsg['admindata'][4] = x("Edit Comments");


$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("F�rhandsgranska");
$langmsg['submitfield'][2] = x("L�gg till nyheter");
$langmsg['submitfield'][3] = x("Spara");
$langmsg['submitfield'][4] = x("Skicka");
$langmsg['submitfield'][5] = x("Skapa");
$langmsg['submitfield'][6] = x("Uppdatera");
$langmsg['submitfield'][7] = x("L�gg till");
$langmsg['submitfield'][8] = x("Ta bort");
$langmsg['submitfield'][9] = x("Recover");


$langmsg['selectfield'][0] = x("- V�lj alternativ --");
$langmsg['selectfield'][1] = x("Ja");
$langmsg['selectfield'][2] = x("Nej");
$langmsg['selectfield'][3] = x("Ta bort");
$langmsg['selectfield'][4] = x("Needs godk�nnande");
$langmsg['selectfield'][5] = x("Till�t kommentarer");
$langmsg['selectfield'][6] = x("�ndra godk�nnande");
$langmsg['selectfield'][7] = x("Godk�nnande");
$langmsg['selectfield'][8] = x("Kommentarer");
$langmsg['selectfield'][9] = x("Godk�nn");
$langmsg['selectfield'][10] = x("Unapprove");
$langmsg['selectfield'][11] = x("Datum");
$langmsg['selectfield'][12] = x("Titel");
$langmsg['selectfield'][13] = x("F�rfattare");
$langmsg['selectfield'][14] = x("Kategori");
$langmsg['selectfield'][15] = x("# Kommentera");
$langmsg['selectfield'][16] = x("Markera som l�st");
$langmsg['selectfield'][17] = x("Markera som ol�st");
$langmsg['selectfield'][18] = x("�terst�ll blockerade count");
$langmsg['selectfield'][19] = x("Skapa s�kerhetskopior");
$langmsg['selectfield'][20] = x("�terst�ll Visningantal");
$langmsg['selectfield'][21] = x("�terst�ll ratings");


$langmsg['js'][0] = x("�r du s�ker p� att du vill ta bort bilden fr�n klassen?");
$langmsg['js'][1] = x("�r du s�ker p� att du vill ta bort den valda bilden (s)?");
$langmsg['js'][2] = x("�r du s�ker p� att du vill radera det valda meddelandet (s)?");
$langmsg['js'][3] = x("�r du s�ker p� att du vill radera den valda mallen (s)?");
$langmsg['js'][4] = x("�r du s�ker p� att du vill ta bort dessa IP-adresser?");
$langmsg['js'][5] = x("�r du s�ker p� att du vill �terst�lla de blockerade r�knas med dessa IP-adresser");
$langmsg['js'][6] = x("�r du s�ker p� att du vill ta bort dessa Access-niv� (er)?");
$langmsg['js'][7] = x("�r du s�ker p� att du vill ta bort dessa kategorier?");
$langmsg['js'][8] = x("�r du s�ker p� att du vill ta bort dessa kategorier och tj�nster inom dem?");
$langmsg['js'][9] = x("�r du s�ker p� att du vill ta bort dessa kategorier?");
$langmsg['js'][10] = x("�r du s�ker p� att du vill ta bort dessa konto (n)?");
$langmsg['js'][11] = x("�r du s�ker p� att du vill ta bort dessa konto (n) och inl�gg?");
$langmsg['js'][12] = x("�r du s�ker p� att du vill ta bort dessa inl�gg (s)?");
$langmsg['js'][13] = x("Skriv n�got");
$langmsg['js'][14] = x("Text");
$langmsg['js'][15] = x("V�nligen ange en f�rg. Exempel, r�tt, gult, bl�tt (eller hexadecimala v�rden)");
$langmsg['js'][16] = x("bl�");
$langmsg['js'][17] = x("Ange webbadressen f�r l�nken");
$langmsg['js'][18] = x("Ange texten som ska visas");
$langmsg['js'][19] = x("L�nk");
$langmsg['js'][20] = x("Ange en teckenstorlek");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Texten som ska visas?");
$langmsg['js'][23] = x("Emailadress");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Maila mig!");
$langmsg['js'][26] = x("Quote text?");
$langmsg['js'][27] = x("Offert");
$langmsg['js'][28] = x("�r du s�ker p� att du vill ta bort markerade kommentar (er)?");
$langmsg['js'][29] = x("�r du s�ker p� att du vill ta bort den valda kategorin?");
$langmsg['js'][30] = x("Getting smilies ... Please wait.");
$langmsg['js'][31] = x("�r du s�ker p� att du vill ta bort markerad fil (er)?");
$langmsg['js'][32] = x("�r du s�ker p� att du vill ta bort den valda smilies?");
$langmsg['js'][33] = x("�r du s�ker p� att du vill radera det valda filtret (er)?");


$langmsg['news'][0] = x("Ange ett namn.");
$langmsg['news'][1] = x("Skriv in ett meddelande.");
$langmsg['news'][2] = x("Ogiltig s�kerhetsnyckeln");
$langmsg['news'][3] = x("V�lj ett annat namn.");
$langmsg['news'][4] = x("Ogiltig s�kerhetsnyckeln");
$langmsg['news'][5] = x("Hittade:");
$langmsg['news'][6] = x("Nyregistreringar �r avaktiverade.");
$langmsg['news'][7] = x("Ditt konto har skapats kan du nu <a href=\"{adminpath}\">logga in h�r.</a>");
$langmsg['news'][8] = x("Ange ett namn.");
$langmsg['news'][9] = x("Skriv in ett meddelande.");
$langmsg['news'][10] = x("Ogiltig s�kerhetsnyckeln");
$langmsg['news'][11] = x("V�lj ett annat namn.");
$langmsg['news'][12] = x("Ogiltig s�kerhetsnyckeln");
$langmsg['news'][13] = x("Tack f�r ditt betyg.");
$langmsg['news'][14] = x("Du har redan betygsatt denna artikel.");
$langmsg['news'][15] = x("Namn");
$langmsg['news'][16] = x("Email:");
$langmsg['news'][17] = x("Friends Email:");
$langmsg['news'][18] = x("Meddelande:");
$langmsg['news'][19] = x("Hej kolla in den h�r artikeln jag hittade!");
$langmsg['news'][20] = x("Skicka till en v�n");
$langmsg['news'][21] = x("Mail har skickats.");
$langmsg['news'][22] = x("Ange ditt namn");
$langmsg['news'][23] = x("Ange din e-postadress");
$langmsg['news'][24] = x("Skriv in ett meddelande");
$langmsg['news'][25] = x("Ange din v�ns e-postadress");
$langmsg['news'][27] = x("Ange en giltig e-postadress");
$langmsg['news'][28] = x("Ange dina v�nner giltig e-postadress");
$langmsg['news'][29] = x("Ange ett anv�ndarnamn.");
$langmsg['news'][30] = x("Det anv�ndarnamnet har redan tagits, v�lj en annan.");
$langmsg['news'][31] = x("Den e-postadressen �r redan i bruk, v�lj en annan.");
$langmsg['news'][32] = x("Ange en e-postadress.");
$langmsg['news'][33] = x("Ange en giltig e-postadress.");
$langmsg['news'][34] = x("Ange ett l�senord.");
$langmsg['news'][35] = x("V�nligen bekr�fta ditt l�senord.");
$langmsg['news'][36] = x("De l�senord du uppgett �verenst�mmer inte.");
$langmsg['news'][37] = x("Ogiltig s�kerhetsnyckel.");
$langmsg['news'][38] = x("Please wait");
$langmsg['news'][39] = x("Det uppstod ett problem att skicka ditt meddelande, kontakta administrat�ren.");
$langmsg['news'][40] = x("Du m�ste vara inloggad f�r att skriva en kommentar.");
$langmsg['news'][41] = x("Ny kommentar till {domain}");
$langmsg['news'][42] = x("Namn: {name} Email \n URL: {email} \n IP: {ip} \n Meddelande: {message}");
$langmsg['news'][43] = x("Ny registrering p� {domain}");
$langmsg['news'][44] = x("Namn: {name} \n E-post: {email} \n IP: {ip}");
$langmsg['news'][45] = x("sekunder innan du skickar ett meddelande.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Namn");
$langmsg['news'][48] = x("Email / URL");
$langmsg['news'][49] = x("Meddelande");
$langmsg['news'][50] = x("Skriv en artikel titel");
$langmsg['news'][51] = x("Sammanfattning");
$langmsg['news'][52] = x("Inga kategorier");
$langmsg['news'][53] = x("Datum");
$langmsg['news'][54] = x("Datum Denna artikel var postat");
$langmsg['news'][55] = x("Arkiv");



$langmsg['shortmonths'][0] = x("Jan");
$langmsg['shortmonths'][1] = x("Februari");
$langmsg['shortmonths'][2] = x("Mar");
$langmsg['shortmonths'][3] = x("April");
$langmsg['shortmonths'][4] = x("Kan");
$langmsg['shortmonths'][5] = x("Juni");
$langmsg['shortmonths'][6] = x("Juli");
$langmsg['shortmonths'][7] = x("Augusti");
$langmsg['shortmonths'][8] = x("September");
$langmsg['shortmonths'][9] = x("Oktober");
$langmsg['shortmonths'][10] = x("November");
$langmsg['shortmonths'][11] = x("December");


$langmsg['months'][0] = x("Januari");
$langmsg['months'][1] = x("Februari");
$langmsg['months'][2] = x("Mars");
$langmsg['months'][3] = x("April");
$langmsg['months'][4] = x("Kan");
$langmsg['months'][5] = x("Juni");
$langmsg['months'][6] = x("Juli");
$langmsg['months'][7] = x("Augusti");
$langmsg['months'][8] = x("September");
$langmsg['months'][9] = x("Oktober");
$langmsg['months'][10] = x("November");
$langmsg['months'][11] = x("December");


$langmsg['search'][0] = x("Aktiv nyheter");
$langmsg['search'][1] = x("Arkiverade nyheter");
$langmsg['search'][2] = x("Nyaste f�rst");
$langmsg['search'][3] = x("�ldsta f�rst");
$langmsg['search'][4] = x("S�ka");
$langmsg['search'][5] = x("Datumintervall");


$langmsg['install'][0] = x("Database Connection Info");
$langmsg['install'][1] = x("Ange din MySQL-server info nedan.");
$langmsg['install'][2] = x("Server:");
$langmsg['install'][3] = x("(oftast localhost)");
$langmsg['install'][4] = x("Anv�ndarnamn:");
$langmsg['install'][5] = x("L�senord:");
$langmsg['install'][6] = x("Databas:");
$langmsg['install'][7] = x("Testa anslutning");
$langmsg['install'][8] = x("Ansluta till server:");
$langmsg['install'][9] = x("V�lja databas:");
$langmsg['install'][10] = x("Inte skriva till db.php, please CHMOD denna fil till 777");
$langmsg['install'][11] = x("Kontoinformation");
$langmsg['install'][12] = x("Ange dina kontouppgifter nedan. Detta kommer att anv�ndas f�r att logga in.");
$langmsg['install'][13] = x("Email:");
$langmsg['install'][14] = x("Bekr�fta l�senord:");
$langmsg['install'][15] = x("Forts�tt");
$langmsg['install'][16] = x("Ange ett anv�ndarnamn");
$langmsg['install'][17] = x("Ange en e-postadress");
$langmsg['install'][18] = x("Ange ditt l�senord");
$langmsg['install'][19] = x("Tryck p� Installera f�r att slutf�ra installationen");
$langmsg['install'][20] = x("Dina l�senord matchar inte");
$langmsg['install'][21] = x("Installera");
$langmsg['install'][22] = x("Slutf�r installation");
$langmsg['install'][23] = x("FRAMG�NG!");
$langmsg['install'][24] = x("N-13 News har installerats.");
$langmsg['install'][25] = x("Logga in till admin omr�de.");
$langmsg['install'][26] = x("Port:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Extension:");
$langmsg['install'][29] = x("(l�mna tomt f�r standard)");
$langmsg['install'][30] = x("Installera ... Var god v�nta.");
$langmsg['install'][31] = x("Den mysqli_connect funktion hittades inte.");
$langmsg['install'][32] = x("Den pdo_mysql funktion hittades inte.");
?>