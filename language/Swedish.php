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

$langmsg['menu'][0] = x("Lägg till nyheter");
$langmsg['menu'][1] = x("Edit News");
$langmsg['menu'][2] = x("Arkiv");
$langmsg['menu'][3] = x("Nytt meddelande");
$langmsg['menu'][4] = x("Inkorg");
$langmsg['menu'][5] = x("Utkorg");
$langmsg['menu'][6] = x("Konton");
$langmsg['menu'][7] = x("Åtkomstnivåer");
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
$langmsg['menu'][22] = x("Hjälp");
$langmsg['menu'][23] = x("Logout");
$langmsg['menu'][24] = x("Filuppladdning");


$langmsg['home'][0] = x("Global Nyhetsstatistik nedan.");
$langmsg['home'][1] = x("Välkommen");
$langmsg['home'][2] = x("PHP-inställning 'magic_quotes_gpc' har konstaterats vara aktiverat. Vi rekommenderar att du inaktivera den här inställningen.");
$langmsg['home'][3] = x("PHP-inställning 'register_globals' 'har konstaterats vara aktiverat. Vi rekommenderar att du avaktiverar detta eftersom det kan orsaka säkerhetsproblem och felaktigheter förekommer.");
$langmsg['home'][4] = x("Install.php har upptäckts. Ta bort denna fil.");
$langmsg['home'][5] = x("Install.php kan inte tas bort, vänligen ta bort filen manuellt");
$langmsg['home'][6] = x("Total News:");
$langmsg['home'][7] = x("Kommentarer totalt:");
$langmsg['home'][8] = x("Total Users:");
$langmsg['home'][9] = x("Totalt Smilies:");
$langmsg['home'][10] = x("Totalt Filter:");
$langmsg['home'][11] = x("Totalt antal kategorier:");
$langmsg['home'][12] = x("Totalt Mallar:");
$langmsg['home'][13] = x("Total åtkomstnivåer:");
$langmsg['home'][14] = x("Ansluta till databasen:");
$langmsg['home'][15] = x("Optimera alla tabeller:");
$langmsg['home'][16] = x("Aktuell version:");
$langmsg['home'][17] = x("Senaste version:");
$langmsg['home'][18] = x("Se åtkomstloggar");
$langmsg['home'][19] = x("Query time:");
$langmsg['home'][20] = x("Olästa meddelanden");
$langmsg['home'][21] = x("Prova att ta bort filen automatiskt?");
$langmsg['home'][22] = x("sekunder");
$langmsg['home'][23] = x("Totalt antal bilder");
$langmsg['home'][24] = x("Totalt antal filer");
$langmsg['home'][25] = x("Totalt RSS-feed");


$langmsg['addnews'][0] = x("Nyheter Preview");
$langmsg['addnews'][1] = x("Ange en titel");
$langmsg['addnews'][2] = x("Vänligen välj om detta inlägg kommer att tillåta kommentarer eller inte");
$langmsg['addnews'][3] = x("Lägg till nyheter");
$langmsg['addnews'][4] = x("Välj kategori");


$langmsg['editnews'][0] = x("Edit News");
$langmsg['editnews'][1] = x("Visar");
$langmsg['editnews'][2] = x("Options");
$langmsg['editnews'][3] = x("Belopp visa");
$langmsg['editnews'][4] = x("Sortera");
$langmsg['editnews'][5] = x("Ordning");
$langmsg['editnews'][7] = x("Titel");
$langmsg['editnews'][8] = x("Författare");
$langmsg['editnews'][9] = x("Kategorier");
$langmsg['editnews'][10] = x("Datum");
$langmsg['editnews'][11] = x("Godkännande");
$langmsg['editnews'][12] = x("Kommentarer");
$langmsg['editnews'][13] = x("[visa]");
$langmsg['editnews'][14] = x("Godkänd");
$langmsg['editnews'][15] = x("Unapproved");
$langmsg['editnews'][16] = x("Nyheter la.");
$langmsg['editnews'][17] = x("Valda inlägg raderas.");
$langmsg['editnews'][18] = x("Valda inlägg uppdateras.");
$langmsg['editnews'][19] = x("Nyheter uppdateras.");
$langmsg['editnews'][20] = x("Disabled");
$langmsg['editnews'][21] = x("nyhetsartiklar.");
$langmsg['editnews'][22] = x("totalt.");
$langmsg['editnews'][23] = x("Visningantal återställas till 0 för den valda artikeln (s)");
$langmsg['editnews'][24] = x("Betyg återställa för den valda artikeln (s)");
$langmsg['editnews'][25] = x("Filtrera efter kategori");


$langmsg['newsform'][0] = x("Lägg till din nyhetsläsare post nedan.");
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
$langmsg['newsform'][25] = x("Välj en uppladdad bild");


$langmsg['editcomments'][0] = x("Edit Comments");
$langmsg['editcomments'][1] = x("Redigera kommentar nedan.");
$langmsg['editcomments'][2] = x("Författare:");
$langmsg['editcomments'][3] = x("Email:");
$langmsg['editcomments'][4] = x("Meddelande:");
$langmsg['editcomments'][5] = x("Kommentar uppdateras.");
$langmsg['editcomments'][6] = x("kommentarer utgå.");
$langmsg['editcomments'][7] = x("kommentarer uppdateras.");
$langmsg['editcomments'][8] = x("kommentarer totalt.");
$langmsg['editcomments'][9] = x("Message");
$langmsg['editcomments'][10] = x("Datum");
$langmsg['editcomments'][11] = x("Godkännande");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Godkänd");
$langmsg['editcomments'][14] = x("Unapproved");
$langmsg['editcomments'][15] = x("Ort:");


$langmsg['privmsgs'][0] = x("Privata meddelanden");
$langmsg['privmsgs'][1] = x("Inkorg");
$langmsg['privmsgs'][2] = x("Utkorg");
$langmsg['privmsgs'][3] = x("Nytt meddelande");
$langmsg['privmsgs'][4] = x("Ni");
$langmsg['privmsgs'][5] = x("Titel");
$langmsg['privmsgs'][6] = x("Från");
$langmsg['privmsgs'][7] = x("Skickat");
$langmsg['privmsgs'][8] = x("Till");
$langmsg['privmsgs'][9] = x("Svara på detta meddelande");
$langmsg['privmsgs'][10] = x("Nytt privat meddelande.");
$langmsg['privmsgs'][11] = x("Skicka till:");
$langmsg['privmsgs'][12] = x("Titel:");
$langmsg['privmsgs'][13] = x("Meddelande:");
$langmsg['privmsgs'][14] = x("Exempel 'user1, user2, user3'");
$langmsg['privmsgs'][15] = x("Message preview.");
$langmsg['privmsgs'][16] = x("Meddelande skickas till följande användare.");
$langmsg['privmsgs'][17] = x("Vänligen ange ett användarnamn för att skicka meddelandet till.");
$langmsg['privmsgs'][18] = x("Skriv in en rubrik för detta meddelande.");
$langmsg['privmsgs'][19] = x("Skriv in ett meddelande.");
$langmsg['privmsgs'][20] = x("Meddelanden raderas.");
$langmsg['privmsgs'][21] = x("olästa meddelanden.");
$langmsg['privmsgs'][22] = x("meddelanden totalt.");


$langmsg['options'][0] = x("Options");
$langmsg['options'][1] = x("Nya");
$langmsg['options'][2] = x("Redigera");


$langmsg['bannedips'][0] = x("Banned IPs");
$langmsg['bannedips'][1] = x("Banned IPs.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Antal gånger blockeras");
$langmsg['bannedips'][4] = x("Lägg till en ny IP-adress.");
$langmsg['bannedips'][5] = x("Banned meddelande. (HTML är tillåtet)");
$langmsg['bannedips'][6] = x("IP-adress:");
$langmsg['bannedips'][7] = x("Att IP-adress är redan förbjudet.");
$langmsg['bannedips'][8] = x("IP-adress förbjudna.");
$langmsg['bannedips'][9] = x("IP-adresser raderade.");
$langmsg['bannedips'][10] = x("IP-adresser har återställts.");
$langmsg['bannedips'][11] = x("Banned budskap uppdateras.");


$langmsg['cats'][0] = x("Kategorier");
$langmsg['cats'][1] = x("Kategorier.");
$langmsg['cats'][2] = x("Namn");
$langmsg['cats'][3] = x("Artiklar");
$langmsg['cats'][4] = x("Skapa en ny kategori.");
$langmsg['cats'][5] = x("Namn:");
$langmsg['cats'][6] = x("Följande kategorier har tagits bort:");
$langmsg['cats'][7] = x("Välj ett annat namn.");
$langmsg['cats'][8] = x("Kategori skapade.");
$langmsg['cats'][9] = x("Kategori uppdateras.");
$langmsg['cats'][10] = x("Redigera din kategori nedan.");
$langmsg['cats'][11] = x("Bilder");
$langmsg['cats'][12] = x("Filer");
$langmsg['cats'][13] = x("En kategori med det namnet finns redan, välj en annan.");


$langmsg['img'][0] = x("Uppladdning");
$langmsg['img'][1] = x("Ladda upp en ny bild");
$langmsg['img'][2] = x("Ladda upp fil");
$langmsg['img'][3] = x("Bilder totalt");
$langmsg['img'][4] = x("Välj en bild:");
$langmsg['img'][5] = x("bild (er) utgår.");
$langmsg['img'][6] = x("Image Uploaded");
$langmsg['img'][7] = x("Det uppstod ett fel uppladdning filen, försök igen.");
$langmsg['img'][8] = x("Ogiltig filtillägg.");
$langmsg['img'][9] = x("Ogiltig bild.");
$langmsg['img'][10] = x("Image bort från kategori.");
$langmsg['img'][11] = x("Image (s) läggs till kategori.");
$langmsg['img'][12] = x("Filnamn:");
$langmsg['img'][13] = x("Välj en kategori:");
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
$langmsg['img'][27] = x("Lägg till kategori");
$langmsg['img'][28] = x("Ta bort från kategori");
$langmsg['img'][29] = x("Uppladdade bilder");
$langmsg['img'][30] = x("En fil med det namnet finns redan.");
$langmsg['img'][31] = x("Alla kategorier");
$langmsg['img'][32] = x("Det gick inte att skriva till inlagda katalogen. CHMOD denna katalog till 777");


$langmsg['personal'][0] = x("Personliga Options");
$langmsg['personal'][1] = x("Redigera kontot info nedan.");
$langmsg['personal'][2] = x("Personliga inställningar för");
$langmsg['personal'][3] = x("Avatar URL:");
$langmsg['personal'][4] = x("E-postadress:");
$langmsg['personal'][5] = x("Meddelandesignaler:");
$langmsg['personal'][6] = x("Få varnas av olästa meddelanden på första inloggning?");
$langmsg['personal'][7] = x("Nytt lösenord:");
$langmsg['personal'][8] = x("(lämna tomt för att behålla nuvarande)");
$langmsg['personal'][9] = x("Bekräfta lösenord:");
$langmsg['personal'][10] = x("En e-postadress skall anges.");
$langmsg['personal'][11] = x("Inställningar uppdateras.");
$langmsg['personal'][12] = x("Lösenorden matchar inte.");
$langmsg['personal'][13] = x("Aktivera WYSIWYG editor?");


$langmsg['login'][0] = x("Vänligen Logga");
$langmsg['login'][1] = x("Namn:");
$langmsg['login'][2] = x("Lösenord:");
$langmsg['login'][3] = x("Har du glömt ditt lösenord?");
$langmsg['login'][4] = x("Kom ihåg mig");
$langmsg['login'][5] = x("Security Key:");
$langmsg['login'][6] = x("Logga in");
$langmsg['login'][7] = x("Ogiltig säkerhetsnyckeln");
$langmsg['login'][8] = x("Ogiltigt namn eller lösenord");
$langmsg['login'][9] = x("Typ den här koden nedan");


$langmsg['profile'][0] = x("Edit Profile");
$langmsg['profile'][1] = x("Redigera din profil nedan.");
$langmsg['profile'][2] = x("Namn:");
$langmsg['profile'][3] = x("Ålder");
$langmsg['profile'][4] = x("Ort:");
$langmsg['profile'][5] = x("Kön:");
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
$langmsg['accounts'][1] = x("Räkenskaper.");
$langmsg['accounts'][2] = x("Användarnamn");
$langmsg['accounts'][3] = x("Åtkomstnivå");
$langmsg['accounts'][4] = x("Antal tjänster");
$langmsg['accounts'][5] = x("Antal kommentarer");
$langmsg['accounts'][6] = x("Skapa ett nytt konto.");
$langmsg['accounts'][7] = x("Kontonamn:");
$langmsg['accounts'][8] = x("Email:");
$langmsg['accounts'][9] = x("Nytt lösenord:");
$langmsg['accounts'][10] = x("Bekräfta lösenord:");
$langmsg['accounts'][11] = x("Access Nivå:");
$langmsg['accounts'][12] = x("Nytt konto.");
$langmsg['accounts'][13] = x("Redigera kontot nedan.");
$langmsg['accounts'][14] = x("En e-postadress skall anges.");
$langmsg['accounts'][15] = x("Konto uppdateras.");
$langmsg['accounts'][16] = x("Lösenorden matchar inte.");
$langmsg['accounts'][17] = x("Ett konto namn tas upp.");
$langmsg['accounts'][18] = x("Kontonamn finns redan. Välj en annan.");
$langmsg['accounts'][19] = x("Ett lösenord måste anges.");
$langmsg['accounts'][20] = x("Konto skapat.");
$langmsg['accounts'][21] = x("Följande konton har tagits bort:");
$langmsg['accounts'][22] = x("Du kan inte radera ditt eget konto.");
$langmsg['accounts'][23] = x("(Lämna tomt för att behålla nuvarande)");
$langmsg['accounts'][24] = x("Ett konto är redan använder den e-postadress, välj en annan.");
$langmsg['accounts'][25] = x("Ange ett kontonamn");
$langmsg['accounts'][26] = x("Filer");
$langmsg['accounts'][27] = x("Bilder");


$langmsg['access'][0] = x("Åtkomstnivåer");
$langmsg['access'][1] = x("Skapa en ny åtkomstnivå.");
$langmsg['access'][2] = x("Namn:");
$langmsg['access'][3] = x("Vilka avsnitt kan detta få tillgång?");
$langmsg['access'][4] = x("Konton:");
$langmsg['access'][5] = x("Åtkomstnivåer:");
$langmsg['access'][6] = x("Förbjudna IP-adresser:");
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
$langmsg['access'][20] = x("Vilka kategorier kan denna åtkomstnivå tjänst i?");
$langmsg['access'][21] = x("Alla:");
$langmsg['access'][22] = x("Vilka tjänster kan denna nivå redigera?");
$langmsg['access'][23] = x("Admin (alla):");
$langmsg['access'][24] = x("Mod (egna + medlemmar):");
$langmsg['access'][25] = x("Medlem (egna):");
$langmsg['access'][26] = x("Är inlägg från denna åtkomstnivå automatiskt godkänd?");
$langmsg['access'][27] = x("Kan denna åtkomstnivå godkänna inlägg?");
$langmsg['access'][28] = x("Kan denna åtkomstnivå använda HTML?");
$langmsg['access'][29] = x("Tillåt meddelanden utan att välja en kategori?");
$langmsg['access'][30] = x("Åtkomstnivåer utgå:");
$langmsg['access'][31] = x("Följande åtkomstnivåer har inte tagits bort eftersom de har 1 eller flera konton som anges nedan:");
$langmsg['access'][32] = x("Redigera åtkomstnivå nedan.");
$langmsg['access'][33] = x("Ange ett namn för denna åtkomstnivå.");
$langmsg['access'][34] = x("Access nivå updated.");
$langmsg['access'][35] = x("Åtkomstnivå med det namnet finns redan, välj en annan.");
$langmsg['access'][36] = x("Välj vilka tjänster denna nivå kan redigera.");
$langmsg['access'][37] = x("Vänligen ange om denna åtkomstnivå inlägg få auto godkänd");
$langmsg['access'][38] = x("Vänligen ange om denna åtkomstnivå kan godkänna inlägg");
$langmsg['access'][39] = x("Vänligen ange om denna åtkomstnivå kan använda HTML");
$langmsg['access'][40] = x("Vänligen ange om denna åtkomstnivå kan skriva utan att välja en kategori");
$langmsg['access'][41] = x("Access nivå skapas.");
$langmsg['access'][42] = x("Åtkomstnivåer.");
$langmsg['access'][43] = x("Namn");
$langmsg['access'][44] = x("Access");
$langmsg['access'][45] = x("Konton");
$langmsg['access'][46] = x("Medlem");
$langmsg['access'][47] = x("Moderator");
$langmsg['access'][48] = x("Administrator");
$langmsg['access'][49] = x("Filuppladdning");
$langmsg['access'][50] = x("Kan denna åtkomstnivå se användarens IP-adresser?");
$langmsg['access'][51] = x("Vilka filer och bilder kan denna åtkomstnivå redigera?");
$langmsg['access'][52] = x("Egen");
$langmsg['access'][53] = x("Alla");



$langmsg['accesslogs'][0] = x("Åtkomstloggar");
$langmsg['accesslogs'][1] = x("Användarnamn");
$langmsg['accesslogs'][2] = x("Försök");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Datum");
$langmsg['accesslogs'][5] = x("Åtkomstloggar för");
$langmsg['accesslogs'][6] = x("Framgångsrik");
$langmsg['accesslogs'][7] = x("Usuccessful");


$langmsg['filters'][0] = x("Ordfilter");
$langmsg['filters'][1] = x("Filter added.");
$langmsg['filters'][2] = x("Filtrera bort.");
$langmsg['filters'][3] = x("Alla ord nedan kommer att filtreras bort från alla kommentarer.");
$langmsg['filters'][4] = x("Filtrerat Word");
$langmsg['filters'][5] = x("Ersätt med");
$langmsg['filters'][6] = x("Ta bort");
$langmsg['filters'][7] = x("Lägg till ett nytt filter");


$langmsg['rss'][0] = x("RSS-feed");
$langmsg['rss'][1] = x("Redigera dina RSS-flöde inställningar nedan");
$langmsg['rss'][2] = x("Nyheten är platsen där du ska visa dina nyheter, till exempel http://yourdomain.com/ eller http://yourdomain.com/index");
$langmsg['rss'][3] = x("Feed namn:");
$langmsg['rss'][4] = x("Nyheter location:");
$langmsg['rss'][5] = x("Namnet på ditt RSS-flöde:");
$langmsg['rss'][6] = x("Beskrivning av dina RSS-feed:");
$langmsg['rss'][7] = x("Teckenkodning:");
$langmsg['rss'][8] = x("Språk:");
$langmsg['rss'][9] = x("Mängd inlägg att visa:");
$langmsg['rss'][10] = x("0 = alla");
$langmsg['rss'][11] = x("Kategorier för att visa:");
$langmsg['rss'][12] = x("Visa inlägg som inte har tilldelats en kategori?");
$langmsg['rss'][13] = x("RSS-kod:");
$langmsg['rss'][14] = x("Ändra hur ditt flöde visas");
$langmsg['rss'][15] = x("Visar titeln på berättelsen.");
$langmsg['rss'][16] = x("Visar den novell av nyheterna.");
$langmsg['rss'][17] = x("Visar historien om nyheter.");
$langmsg['rss'][18] = x("Framgår vilka kategorier varje inlägg har tilldelats.");
$langmsg['rss'][19] = x("Visar webbadressen för en viss tjänst.");
$langmsg['rss'][20] = x("Visar datumet berättelsen publicerades på.");
$langmsg['rss'][21] = x("Visar tidszon inställningen.");
$langmsg['rss'][22] = x("Visar tidsstämpel varje inlägg.");
$langmsg['rss'][23] = x("Visar författaren historien.");
$langmsg['rss'][24] = x("Visar användare Avatar om de har en.");
$langmsg['rss'][25] = x("Visar unika ID varje historia har.");
$langmsg['rss'][26] = x("Visar hur mycket kommentarer till varje nyheter post.");
$langmsg['rss'][27] = x("Ange ett feedname");
$langmsg['rss'][28] = x("Ange en plats nyheter");
$langmsg['rss'][29] = x("Ange en titel");
$langmsg['rss'][30] = x("Ange en beskrivning");
$langmsg['rss'][31] = x("Ange teckenkodning");
$langmsg['rss'][32] = x("Ange ett språk");
$langmsg['rss'][33] = x("Ange ett belopp för att visa");
$langmsg['rss'][34] = x("RSS Feed skapade");
$langmsg['rss'][35] = x("En feed med det namnet finns redan, välj en annan");
$langmsg['rss'][36] = x("RSS Feed uppdaterad");
$langmsg['rss'][37] = x("RSS-feed");
$langmsg['rss'][38] = x("RSS feed (s) utgår.");
$langmsg['rss'][39] = x("Namn");
$langmsg['rss'][40] = x("Kategorier");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Skapa en ny RSS-feed.");
$langmsg['rss'][43] = x("Visar den vänliga titeln på berättelsen");


$langmsg['smilies'][0] = x("Smilies");
$langmsg['smilies'][1] = x("Detta är användbart om du vill uppdatera platsen för alla dina smilies på en gång.");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("Ersätt:");
$langmsg['smilies'][4] = x("Ersätt med:");
$langmsg['smilies'][5] = x("Alla uppdaterade sökvägar.");
$langmsg['smilies'][6] = x("Skapa en ny smilie");
$langmsg['smilies'][7] = x("Sökväg:");
$langmsg['smilies'][8] = x("Keycode:");
$langmsg['smilies'][9] = x("Ange sökvägen till smiley.");
$langmsg['smilies'][10] = x("Ange ett keycode för denna smiley.");
$langmsg['smilies'][11] = x("Tangentkoden redan. Välj en annan tangentkoden.");
$langmsg['smilies'][12] = x("Smiley la.");
$langmsg['smilies'][13] = x("Är du säker på att du vill ta bort denna smiley?");
$langmsg['smilies'][14] = x("Smiley utgå.");
$langmsg['smilies'][15] = x("Redigera smiley nedan");
$langmsg['smilies'][16] = x("Smiley:");
$langmsg['smilies'][17] = x("Smiley uppdateras.");
$langmsg['smilies'][18] = x("Smilies strukits");
$langmsg['smilies'][19] = x("Välj vilka smiley som du vill redigera.");
$langmsg['smilies'][20] = x("Smiley");
$langmsg['smilies'][21] = x("Sätt i en ny smiley.");
$langmsg['smilies'][22] = x("Uppdatering väg alla smilies");


$langmsg['system'][0] = x("Systemkonfiguration");
$langmsg['system'][1] = x("Redigera systemkonfigurationer.");
$langmsg['system'][2] = x("Nyheter");
$langmsg['system'][3] = x("Mängd nyheter per sida:");
$langmsg['system'][4] = x("Vilken ordning de nyheter visas i:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("Datum & tid format för nyheter:");
$langmsg['system'][8] = x("Se här");
$langmsg['system'][9] = x("Visa avatarer:");
$langmsg['system'][10] = x("Avgränsare till olika kategorier vid visning nyheter:");
$langmsg['system'][11] = x("Kommentarer");
$langmsg['system'][12] = x("Mängden kommentarer per sida:");
$langmsg['system'][13] = x("Vilken ordning kommentarer visas i:");
$langmsg['system'][14] = x("Datum & tid format för kommentarer:");
$langmsg['system'][15] = x("Maximal längd för kommentarer:");
$langmsg['system'][16] = x("Visa kommentarer i nytt fönster:");
$langmsg['system'][17] = x("Tidsfördröjning efter posta kommentarer (Spamskydd):");
$langmsg['system'][18] = x("Seconds");
$langmsg['system'][19] = x("Skräppostmeddelande:");
$langmsg['system'][20] = x("Ny kommentar meddelande:");
$langmsg['system'][21] = x("Ny kommentar godkännande meddelande:");
$langmsg['system'][22] = x("Använd bild kontroll på kommentarer form:");
$langmsg['system'][23] = x("Friendly URLs");
$langmsg['system'][24] = x("Aktivera friendly webbadresser:");
$langmsg['system'][25] = x("Filtillägg:");
$langmsg['system'][26] = x("Prefixet");
$langmsg['system'][27] = x("Directory filnamn:");
$langmsg['system'][28] = x("Registrering");
$langmsg['system'][29] = x("Tillåt användare att registrera:");
$langmsg['system'][30] = x("Åtkomstnivå för nya användare:");
$langmsg['system'][31] = x("Annan");
$langmsg['system'][32] = x("Tidszonen");
$langmsg['system'][33] = x("Tillåtna filtyper på uppladdade bilder:");
$langmsg['system'][34] = x("Uppladdning sökväg:");
$langmsg['system'][35] = x("Ingen åtkomst felmeddelande:");
$langmsg['system'][36] = x("Inställningar uppdateras.");
$langmsg['system'][37] = x("Tidsfördröjning efter användande skicka till (Spamskydd):");
$langmsg['system'][38] = x("Anmälningar");
$langmsg['system'][39] = x("Få e-postmeddelanden om nya kommentarer:");
$langmsg['system'][40] = x("Få e-postmeddelanden om nya registreringar:");
$langmsg['system'][41] = x("Tillåt endast registrerade användare att kommentera:");
$langmsg['system'][42] = x("Skicka meddelanden till den här adressen:");
$langmsg['system'][43] = x("Tillåtna filtyper på uppladdade filer:");
$langmsg['system'][44] = x("Få e-postmeddelanden om icke godkända nyheter inlägg:");
$langmsg['system'][45] = x("Publika nyckel");
$langmsg['system'][46] = x("Privat nyckel");
$langmsg['system'][47] = x("Skriptsökväg");
$langmsg['system'][48] = x("Tillåta registrerade användare att radera sina egna kommentarer:");
$langmsg['system'][49] = x("Använd bild kontroll på index inloggning form:");
$langmsg['system'][50] = x("Använd bild kontroll på anmälningsblanketten:");
$langmsg['system'][51] = x("Datum och tid format för filer:");
$langmsg['system'][52] = x("Visa \"Powered by\" nedanför nyheter:");


$langmsg['recover'][0] = x("Lösenordshämtning");
$langmsg['recover'][1] = x("Ange e-postadress för kontot du vill återställa lösenordet för.");
$langmsg['recover'][2] = x("Email:");
$langmsg['recover'][3] = x("Du eller någon har begärt att återställa ditt lösenord Följ länken nedan för att göra det.");
$langmsg['recover'][4] = x("Klicka här för att återställa ditt lösenord");
$langmsg['recover'][5] = x("Ett e-postmeddelande har skickats till");
$langmsg['recover'][6] = x("Ett konto med den e existerar inte, kontakta administratören.");
$langmsg['recover'][7] = x("Nytt lösenord");
$langmsg['recover'][8] = x("Ange ditt nya lösenord nedan.");
$langmsg['recover'][9] = x("Det gick inte att skicka en återhämtning kontaktar du din systemadministratör.");
$langmsg['recover'][10] = x("Bekräfta lösenord:");
$langmsg['recover'][11] = x("Lösenorden matchar inte.");
$langmsg['recover'][12] = x("Ditt lösenord har uppdaterats.");
$langmsg['recover'][13] = x("med vidare instruktioner för hämtning av ditt konto.");


$langmsg['templates'][0] = x("Mallar");
$langmsg['templates'][1] = x("Skapa en ny mall.");
$langmsg['templates'][2] = x("Namn:");
$langmsg['templates'][3] = x("Ändringar hur nyheterna visas.");
$langmsg['templates'][4] = x("Visar titeln på berättelsen.");
$langmsg['templates'][5] = x("Visar den novell av nyheterna.");
$langmsg['templates'][6] = x("Visar historien om nyheter.");
$langmsg['templates'][7] = x("Visar datumet berättelsen publicerades på.");
$langmsg['templates'][8] = x("Framgår vilka kategorier varje inlägg har tilldelats.");
$langmsg['templates'][9] = x("Visar författaren historien.");
$langmsg['templates'][10] = x("Visar användare Avatar om de har en.");
$langmsg['templates'][11] = x("Visar unika ID varje historia har.");
$langmsg['templates'][12] = x("Visar IP-adressen av författaren. (Endast visar om du är inloggad)");
$langmsg['templates'][13] = x("Visar länken för att läsa hela inlägget");
$langmsg['templates'][14] = x("Kommer att visa din e-postadress.");
$langmsg['templates'][15] = x("Kommer att skapa en länk till din e-postadress.");
$langmsg['templates'][16] = x("Kommer att skapa en länk till din profil.");
$langmsg['templates'][17] = x("Visar hur mycket kommentarer till varje nyheter post.");
$langmsg['templates'][18] = x("Kommer att skapa en länk till kommentarerna.");
$langmsg['templates'][19] = x("Anything sätta mellan dessa taggar visas bara om inloggad");
$langmsg['templates'][20] = x("Path to smilies");
$langmsg['templates'][21] = x("Kommentarer");
$langmsg['templates'][22] = x("Förändringar hur kommentarer visas.");
$langmsg['templates'][23] = x("Visar författaren av kommentaren.");
$langmsg['templates'][24] = x("Visar meddelandet.");
$langmsg['templates'][25] = x("Visar användare Avatar om de har en.");
$langmsg['templates'][26] = x("Visar IP-adressen av författaren. (Endast visar om du är inloggad)");
$langmsg['templates'][27] = x("Visar unika ID varje kommentar har.");
$langmsg['templates'][28] = x("Visar e-postadressen till användaren som kommenterade.");
$langmsg['templates'][29] = x("Kommer att skapa en länk till användarnas e-post.");
$langmsg['templates'][30] = x("Visar datumet kommentaren är publicerad.");
$langmsg['templates'][31] = x("Anything sätta mellan dessa taggar visas bara om inloggad");
$langmsg['templates'][32] = x("Kommentarer Form");
$langmsg['templates'][33] = x("Det är viktigt när du redigerar detta för att hålla alla namn inmatningsfält och ID samma annars kommer det inte att fungera. Lägg också märke form onsubmit attributet useajax ='', ja eller nej avgör om AJAX används när användaren lämnar en kommentar.");
$langmsg['templates'][34] = x("Visar ID nyheter post.");
$langmsg['templates'][35] = x("Visar kategori ID nyheter post.");
$langmsg['templates'][36] = x("Kommer att visa ditt användarnamn om loggat in");
$langmsg['templates'][37] = x("Kommer att visa din e-post om inloggad");
$langmsg['templates'][38] = x("Kommer att visa meddelandet.");
$langmsg['templates'][39] = x("Kommer att visa alla smilies.");
$langmsg['templates'][40] = x("Nyheter Pagination");
$langmsg['templates'][44] = x("Kommentarer Pagination");
$langmsg['templates'][45] = x("Visar föregående länk om det finns några.");
$langmsg['templates'][46] = x("Visar nästa länk om det finns några.");
$langmsg['templates'][47] = x("Kommer att visa så många sidor, Ex: 1 2 3 4.");
$langmsg['templates'][48] = x("Profiler");
$langmsg['templates'][49] = x("Ändra hur användare profiler visas.");
$langmsg['templates'][50] = x("Visar användarna användarnamn.");
$langmsg['templates'][51] = x("Visar användare namnet.");
$langmsg['templates'][52] = x("Visar användarnas ålder.");
$langmsg['templates'][53] = x("Visar användare platsen.");
$langmsg['templates'][54] = x("Visar användare kön.");
$langmsg['templates'][55] = x("Skapa en länk till användarna hemsida.");
$langmsg['templates'][56] = x("Visar användarnas intressen.");
$langmsg['templates'][57] = x("Visar användare fritidsintressen.");
$langmsg['templates'][58] = x("Visar användare ockupationen.");
$langmsg['templates'][59] = x("Visar användare favorit citat.");
$langmsg['templates'][60] = x("Visa användare profilbild.");
$langmsg['templates'][61] = x("Nyheter Struktur");
$langmsg['templates'][62] = x("Det är här du kan styra phyiscal ordning för hur varje del nyheter visas, till exempel om du vill att pagintation ska visas ovanför nyheter samt nedanför kan du göra det här.");
$langmsg['templates'][63] = x("Visar nyheter inlägg.");
$langmsg['templates'][64] = x("Visar nyheter pagintation.");
$langmsg['templates'][65] = x("Kommentarer Struktur");
$langmsg['templates'][66] = x("Det är här du kan styra phyiscal ordning för hur varje del nyheter ska visas när du tittar kommentarer, till exempel om du vill att pagintation ska visas ovanför dina kommentarer samt nedanför kan du göra det här.");
$langmsg['templates'][67] = x("Visar den enda nyheten inlägg när du tittar kommentarer");
$langmsg['templates'][68] = x("Visar dina kommentarer.");
$langmsg['templates'][69] = x("Visas kommentaren pagintation.");
$langmsg['templates'][70] = x("Visar kommentar form.");
$langmsg['templates'][71] = x("Anmälningsblankett");
$langmsg['templates'][72] = x("Det är här du styr form som tillåter användare att registrera sig. Det är viktigt att hålla alla namn inmatningsfält och ID samma annars inte kommer att fungera.");
$langmsg['templates'][73] = x("Användarnamn användaren anger.");
$langmsg['templates'][74] = x("Lösenord användaren anger.");
$langmsg['templates'][75] = x("Visar felmeddelandet om ett fält lämnas tomt.");
$langmsg['templates'][76] = x("Ange ett namn.");
$langmsg['templates'][77] = x("Mall skapas.");
$langmsg['templates'][78] = x("Välj ett annat namn.");
$langmsg['templates'][79] = x("Redigera mallarna nedan för att ändra hur nyheter och kommentarer visas.");
$langmsg['templates'][80] = x("Nyheter");
$langmsg['templates'][81] = x("Mall uppdateras.");
$langmsg['templates'][82] = x("En mall med det namnet finns redan. Välj ett annat namn");
$langmsg['templates'][83] = x("Kan inte ta bort mallen thats i bruk");
$langmsg['templates'][84] = x("Valda mallen (s) utgår");
$langmsg['templates'][85] = x("mall (s) kopieras");
$langmsg['templates'][86] = x("Välj en mall namn nedan för att redigera.");
$langmsg['templates'][87] = x("Valda mallen.");
$langmsg['templates'][88] = x("Namn");
$langmsg['templates'][89] = x("Valda");
$langmsg['templates'][90] = x("Skapa en ny mall.");
$langmsg['templates'][91] = x("Välj");
$langmsg['templates'][92] = x("Visar visningar varje historia har.");
$langmsg['templates'][93] = x("Visar rating stars bilden.");
$langmsg['templates'][94] = x("Visar aktuell rating för historien.");
$langmsg['templates'][95] = x("Visar det antal gånger historien har rankats.");
$langmsg['templates'][96] = x("Visar rating form.");
$langmsg['templates'][98] = x("Visar skicka till formuläret.");
$langmsg['templates'][99] = x("Visar användare location");
$langmsg['templates'][100] = x("Uppladdade filer");
$langmsg['templates'][101] = x("Kontrollera hur dina uppladdade filer visas.");
$langmsg['templates'][102] = x("Datum för när filen laddades upp.");
$langmsg['templates'][103] = x("Namnet på filen.");
$langmsg['templates'][104] = x("Filnamn för filen.");
$langmsg['templates'][105] = x("Filesize av filen.");
$langmsg['templates'][106] = x("URL för att ladda ner filen.");
$langmsg['templates'][107] = x("Användarnamn för uploader.");
$langmsg['templates'][108] = x("Belopp gånger filen har laddats ner.");
$langmsg['templates'][109] = x("Visa filer kopplade till nyheter post.");
$langmsg['templates'][110] = x("Visa alla filer kopplade till nyheter post.");
$langmsg['templates'][111] = x("Visar endast 3 sidor åt gången");
$langmsg['templates'][112] = x("Länk till sidan ett, visar om inte närvarande på sidan ett.");
$langmsg['templates'][113] = x("Länk till sista sidan, visar om inte närvarande på sidan den sista sidan.");
$langmsg['templates'][114] = x("Visar antalet ord för det här inlägget");
$langmsg['templates'][115] = x("Visar den vänliga titeln på berättelsen");
$langmsg['templates'][116] = x("Visar recaptcha element");
$langmsg['templates'][117] = x("Skapar en länk för att ta bort kommentaren.");
$langmsg['templates'][118] = x("Visar inloggningsformuläret bara om inloggning krävs.");
$langmsg['templates'][119] = x("Inloggningsformuläret");
$langmsg['templates'][120] = x("Kontrollera hur inloggningsformuläret visas.");
$langmsg['templates'][121] = x("Visar e användaren angav.");
$langmsg['templates'][122] = x("Visar inloggning felmeddelande.");
$langmsg['templates'][123] = x("Visar recaptcha element.");
$langmsg['templates'][124] = x("Visar användarnamn användaren angav.");
$langmsg['templates'][125] = x("Om inloggad visas användarnamnet.");
$langmsg['templates'][126] = x("Visar sökformuläret. Alla namn och ID, vara densamma.");
$langmsg['templates'][127] = x("Visar numret för varje sökresultat");
$langmsg['templates'][128] = x("Format hur sökresultaten få visas. Får upprepas för varje resultat.");
$langmsg['templates'][129] = x("Växlar mellan utskrift av en eller två för varje rad.");
$langmsg['templates'][130] = x("Visar det aktuella sidnumret.");
$langmsg['templates'][131] = x("Visar föregående sidnummer.");
$langmsg['templates'][132] = x("Visar nästa sidnummer.");
$langmsg['templates'][133] = x("Visar den vänliga titel nyhetsartikel.");
$langmsg['templates'][134] = x("Sökformulär");
$langmsg['templates'][135] = x("Sökresultat");
$langmsg['templates'][136] = x("Uppladdade filer");


$langmsg['uploadedfiles'][0] = x("Filuppladdning");
$langmsg['uploadedfiles'][1] = x("Ladda upp en ny fil");
$langmsg['uploadedfiles'][2] = x("Ladda upp fil");
$langmsg['uploadedfiles'][4] = x("Välj en fil:");
$langmsg['uploadedfiles'][5] = x("Fil (er) utgår.");
$langmsg['uploadedfiles'][6] = x("Filen upp");
$langmsg['uploadedfiles'][7] = x("Det uppstod ett fel uppladdning filen, försök igen.");
$langmsg['uploadedfiles'][8] = x("Ogiltig filtillägg.");
$langmsg['uploadedfiles'][9] = x("Ogiltig fil.");
$langmsg['uploadedfiles'][10] = x("File bort från kategori.");
$langmsg['uploadedfiles'][11] = x("Fil (er) läggs till kategori.");
$langmsg['uploadedfiles'][12] = x("Filnamn");
$langmsg['uploadedfiles'][13] = x("Välj en kategori:");
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
$langmsg['uploadedfiles'][27] = x("Lägg till kategori");
$langmsg['uploadedfiles'][28] = x("Ta bort från kategori");
$langmsg['uploadedfiles'][29] = x("Uppladdade filer");
$langmsg['uploadedfiles'][30] = x("En fil med det namnet finns redan.");
$langmsg['uploadedfiles'][31] = x("Reset nedladdningar:");
$langmsg['uploadedfiles'][32] = x("Alla kategorier");
$langmsg['uploadedfiles'][33] = x("nedladdningar");
$langmsg['uploadedfiles'][34] = x("UPPLADDAD");


$langmsg['admindata'][0] = x("Hjälp");
$langmsg['admindata'][1] = x("Lägg till nyheter");
$langmsg['admindata'][2] = x("Privata meddelanden");
$langmsg['admindata'][3] = x("Edit News");
$langmsg['admindata'][4] = x("Edit Comments");


$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("Förhandsgranska");
$langmsg['submitfield'][2] = x("Lägg till nyheter");
$langmsg['submitfield'][3] = x("Spara");
$langmsg['submitfield'][4] = x("Skicka");
$langmsg['submitfield'][5] = x("Skapa");
$langmsg['submitfield'][6] = x("Uppdatera");
$langmsg['submitfield'][7] = x("Lägg till");
$langmsg['submitfield'][8] = x("Ta bort");
$langmsg['submitfield'][9] = x("Recover");


$langmsg['selectfield'][0] = x("- Välj alternativ --");
$langmsg['selectfield'][1] = x("Ja");
$langmsg['selectfield'][2] = x("Nej");
$langmsg['selectfield'][3] = x("Ta bort");
$langmsg['selectfield'][4] = x("Needs godkännande");
$langmsg['selectfield'][5] = x("Tillåt kommentarer");
$langmsg['selectfield'][6] = x("Ändra godkännande");
$langmsg['selectfield'][7] = x("Godkännande");
$langmsg['selectfield'][8] = x("Kommentarer");
$langmsg['selectfield'][9] = x("Godkänn");
$langmsg['selectfield'][10] = x("Unapprove");
$langmsg['selectfield'][11] = x("Datum");
$langmsg['selectfield'][12] = x("Titel");
$langmsg['selectfield'][13] = x("Författare");
$langmsg['selectfield'][14] = x("Kategori");
$langmsg['selectfield'][15] = x("# Kommentera");
$langmsg['selectfield'][16] = x("Markera som läst");
$langmsg['selectfield'][17] = x("Markera som oläst");
$langmsg['selectfield'][18] = x("Återställ blockerade count");
$langmsg['selectfield'][19] = x("Skapa säkerhetskopior");
$langmsg['selectfield'][20] = x("Återställ Visningantal");
$langmsg['selectfield'][21] = x("Återställ ratings");


$langmsg['js'][0] = x("Är du säker på att du vill ta bort bilden från klassen?");
$langmsg['js'][1] = x("Är du säker på att du vill ta bort den valda bilden (s)?");
$langmsg['js'][2] = x("Är du säker på att du vill radera det valda meddelandet (s)?");
$langmsg['js'][3] = x("Är du säker på att du vill radera den valda mallen (s)?");
$langmsg['js'][4] = x("Är du säker på att du vill ta bort dessa IP-adresser?");
$langmsg['js'][5] = x("Är du säker på att du vill återställa de blockerade räknas med dessa IP-adresser");
$langmsg['js'][6] = x("Är du säker på att du vill ta bort dessa Access-nivå (er)?");
$langmsg['js'][7] = x("Är du säker på att du vill ta bort dessa kategorier?");
$langmsg['js'][8] = x("Är du säker på att du vill ta bort dessa kategorier och tjänster inom dem?");
$langmsg['js'][9] = x("Är du säker på att du vill ta bort dessa kategorier?");
$langmsg['js'][10] = x("Är du säker på att du vill ta bort dessa konto (n)?");
$langmsg['js'][11] = x("Är du säker på att du vill ta bort dessa konto (n) och inlägg?");
$langmsg['js'][12] = x("Är du säker på att du vill ta bort dessa inlägg (s)?");
$langmsg['js'][13] = x("Skriv något");
$langmsg['js'][14] = x("Text");
$langmsg['js'][15] = x("Vänligen ange en färg. Exempel, rött, gult, blått (eller hexadecimala värden)");
$langmsg['js'][16] = x("blå");
$langmsg['js'][17] = x("Ange webbadressen för länken");
$langmsg['js'][18] = x("Ange texten som ska visas");
$langmsg['js'][19] = x("Länk");
$langmsg['js'][20] = x("Ange en teckenstorlek");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Texten som ska visas?");
$langmsg['js'][23] = x("Emailadress");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Maila mig!");
$langmsg['js'][26] = x("Quote text?");
$langmsg['js'][27] = x("Offert");
$langmsg['js'][28] = x("Är du säker på att du vill ta bort markerade kommentar (er)?");
$langmsg['js'][29] = x("Är du säker på att du vill ta bort den valda kategorin?");
$langmsg['js'][30] = x("Getting smilies ... Please wait.");
$langmsg['js'][31] = x("Är du säker på att du vill ta bort markerad fil (er)?");
$langmsg['js'][32] = x("Är du säker på att du vill ta bort den valda smilies?");
$langmsg['js'][33] = x("Är du säker på att du vill radera det valda filtret (er)?");


$langmsg['news'][0] = x("Ange ett namn.");
$langmsg['news'][1] = x("Skriv in ett meddelande.");
$langmsg['news'][2] = x("Ogiltig säkerhetsnyckeln");
$langmsg['news'][3] = x("Välj ett annat namn.");
$langmsg['news'][4] = x("Ogiltig säkerhetsnyckeln");
$langmsg['news'][5] = x("Hittade:");
$langmsg['news'][6] = x("Nyregistreringar är avaktiverade.");
$langmsg['news'][7] = x("Ditt konto har skapats kan du nu <a href=\"{adminpath}\">logga in här.</a>");
$langmsg['news'][8] = x("Ange ett namn.");
$langmsg['news'][9] = x("Skriv in ett meddelande.");
$langmsg['news'][10] = x("Ogiltig säkerhetsnyckeln");
$langmsg['news'][11] = x("Välj ett annat namn.");
$langmsg['news'][12] = x("Ogiltig säkerhetsnyckeln");
$langmsg['news'][13] = x("Tack för ditt betyg.");
$langmsg['news'][14] = x("Du har redan betygsatt denna artikel.");
$langmsg['news'][15] = x("Namn");
$langmsg['news'][16] = x("Email:");
$langmsg['news'][17] = x("Friends Email:");
$langmsg['news'][18] = x("Meddelande:");
$langmsg['news'][19] = x("Hej kolla in den här artikeln jag hittade!");
$langmsg['news'][20] = x("Skicka till en vän");
$langmsg['news'][21] = x("Mail har skickats.");
$langmsg['news'][22] = x("Ange ditt namn");
$langmsg['news'][23] = x("Ange din e-postadress");
$langmsg['news'][24] = x("Skriv in ett meddelande");
$langmsg['news'][25] = x("Ange din väns e-postadress");
$langmsg['news'][27] = x("Ange en giltig e-postadress");
$langmsg['news'][28] = x("Ange dina vänner giltig e-postadress");
$langmsg['news'][29] = x("Ange ett användarnamn.");
$langmsg['news'][30] = x("Det användarnamnet har redan tagits, välj en annan.");
$langmsg['news'][31] = x("Den e-postadressen är redan i bruk, välj en annan.");
$langmsg['news'][32] = x("Ange en e-postadress.");
$langmsg['news'][33] = x("Ange en giltig e-postadress.");
$langmsg['news'][34] = x("Ange ett lösenord.");
$langmsg['news'][35] = x("Vänligen bekräfta ditt lösenord.");
$langmsg['news'][36] = x("De lösenord du uppgett överenstämmer inte.");
$langmsg['news'][37] = x("Ogiltig säkerhetsnyckel.");
$langmsg['news'][38] = x("Please wait");
$langmsg['news'][39] = x("Det uppstod ett problem att skicka ditt meddelande, kontakta administratören.");
$langmsg['news'][40] = x("Du måste vara inloggad för att skriva en kommentar.");
$langmsg['news'][41] = x("Ny kommentar till {domain}");
$langmsg['news'][42] = x("Namn: {name} Email \n URL: {email} \n IP: {ip} \n Meddelande: {message}");
$langmsg['news'][43] = x("Ny registrering på {domain}");
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
$langmsg['search'][2] = x("Nyaste först");
$langmsg['search'][3] = x("Äldsta först");
$langmsg['search'][4] = x("Söka");
$langmsg['search'][5] = x("Datumintervall");


$langmsg['install'][0] = x("Database Connection Info");
$langmsg['install'][1] = x("Ange din MySQL-server info nedan.");
$langmsg['install'][2] = x("Server:");
$langmsg['install'][3] = x("(oftast localhost)");
$langmsg['install'][4] = x("Användarnamn:");
$langmsg['install'][5] = x("Lösenord:");
$langmsg['install'][6] = x("Databas:");
$langmsg['install'][7] = x("Testa anslutning");
$langmsg['install'][8] = x("Ansluta till server:");
$langmsg['install'][9] = x("Välja databas:");
$langmsg['install'][10] = x("Inte skriva till db.php, please CHMOD denna fil till 777");
$langmsg['install'][11] = x("Kontoinformation");
$langmsg['install'][12] = x("Ange dina kontouppgifter nedan. Detta kommer att användas för att logga in.");
$langmsg['install'][13] = x("Email:");
$langmsg['install'][14] = x("Bekräfta lösenord:");
$langmsg['install'][15] = x("Fortsätt");
$langmsg['install'][16] = x("Ange ett användarnamn");
$langmsg['install'][17] = x("Ange en e-postadress");
$langmsg['install'][18] = x("Ange ditt lösenord");
$langmsg['install'][19] = x("Tryck på Installera för att slutföra installationen");
$langmsg['install'][20] = x("Dina lösenord matchar inte");
$langmsg['install'][21] = x("Installera");
$langmsg['install'][22] = x("Slutför installation");
$langmsg['install'][23] = x("FRAMGÅNG!");
$langmsg['install'][24] = x("N-13 News har installerats.");
$langmsg['install'][25] = x("Logga in till admin område.");
$langmsg['install'][26] = x("Port:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Extension:");
$langmsg['install'][29] = x("(lämna tomt för standard)");
$langmsg['install'][30] = x("Installera ... Var god vänta.");
$langmsg['install'][31] = x("Den mysqli_connect funktion hittades inte.");
$langmsg['install'][32] = x("Den pdo_mysql funktion hittades inte.");
?>