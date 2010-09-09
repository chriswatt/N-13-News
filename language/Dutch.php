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
#   LANGUAGE    Netherlands / Dutch                     #
#   VERSION     4.0                                     #
#   AUTHOR      Ronald                                  #
#                                                       #
#   Alle worden tussen deze{ } tekens,                  #
#   bijvoorbeeld {totalnews} moeten zo gelaten worden ! #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

#-----MENUS
$langmsg['menu'][0] = x("Toevoegen");
$langmsg['menu'][1] = x("Bewerken");
$langmsg['menu'][2] = x("Archief");
$langmsg['menu'][3] = x("Nieuw bericht");
$langmsg['menu'][4] = x("Inbox");
$langmsg['menu'][5] = x("Outbox");
$langmsg['menu'][6] = x("Accounts");
$langmsg['menu'][7] = x("Beheer functies");
$langmsg['menu'][8] = x("Gebande IPs");
$langmsg['menu'][9] = x("Categories");
$langmsg['menu'][10] = x("Afbeelding uploaden");
$langmsg['menu'][11] = x("Persoonlijk");
$langmsg['menu'][12] = x("Profiel");
$langmsg['menu'][13] = x("RSS Feeds");
$langmsg['menu'][14] = x("Smilies");
$langmsg['menu'][15] = x("Instellingen");
$langmsg['menu'][16] = x("Templates");
$langmsg['menu'][17] = x("Woorden filter");
$langmsg['menu'][18] = x("Home");
$langmsg['menu'][19] = x("Nieuws");
$langmsg['menu'][20] = x("Berichten");
$langmsg['menu'][21] = x("Opties");
$langmsg['menu'][22] = x("Help");
$langmsg['menu'][23] = x("Loguit");
$langmsg['menu'][24] = x("Bestand uploaden");

#-----HOME MODULE
$langmsg['home'][0] = x("Globale nieuws statestieken N-13 News.");
$langmsg['home'][1] = x("Welkom");
$langmsg['home'][2] = x("De PHP setting \"magic_quotes_gpc\" staat aan, het wordt aangeraden deze te deactiveren.");
$langmsg['home'][3] = x("De PHP setting \"<b>register_globals</b>\" staat aan, het word aangeraden deze te deactiveren in verband met de beveiliging.");
$langmsg['home'][4] = x("Install.php is geconstateerd verwijder deze.");
$langmsg['home'][5] = x("Install.php kan niet worden verwijderd doe dit handmatig !");
$langmsg['home'][6] = x("Totaal aantal berichten:");
$langmsg['home'][7] = x("totaal aantal reacties:");
$langmsg['home'][8] = x("Totaal aantal gebruikers:");
$langmsg['home'][9] = x("Totaal aantal Smilies:");
$langmsg['home'][10] = x("Totaal aantal woord filters:");
$langmsg['home'][11] = x("Totaal aantal categories:");
$langmsg['home'][12] = x("Totaal aantal Websjablonen:");
$langmsg['home'][13] = x("Totaal aantal beheer functies:");
$langmsg['home'][14] = x("Database connectie:");
$langmsg['home'][15] = x("Controle database tabellen:");
$langmsg['home'][16] = x("Versie:");
$langmsg['home'][17] = x("Laatste versie:");
$langmsg['home'][18] = x("Bekijk logbestanden");
$langmsg['home'][19] = x("Aanvraag snelheid:");
$langmsg['home'][20] = x("Ongelezen berichten");
$langmsg['home'][21] = x("proberen te verwijderen?"); 
$langmsg['home'][22] = x("seconden");
$langmsg['home'][23] = x("Totaal aantal foto's");
$langmsg['home'][24] = x("Totaal bestanden");
$langmsg['home'][25] = x("Totaal aantal RSS-feeds");

#-----ADDNEWS MODULE
$langmsg['addnews'][0] = x("Nieuws voorbeeld");
$langmsg['addnews'][1] = x("Vul een titel in");
$langmsg['addnews'][2] = x("Mogen gebruikers reacties geven of niet ?");
$langmsg['addnews'][3] = x("Post nieuws !");
$langmsg['addnews'][4] = x("Kies een categorie");

#-----EDITNEWS MODULE
$langmsg['editnews'][0] = x("Bewerk nieuws");
$langmsg['editnews'][1] = x("Resultaat");
$langmsg['editnews'][2] = x("Opties");
$langmsg['editnews'][3] = x("Aantal te tonen posts");
$langmsg['editnews'][4] = x("Sorteren op");
$langmsg['editnews'][5] = x("Uitvoeren");
$langmsg['editnews'][7] = x("Titel");
$langmsg['editnews'][8] = x("Auteur");
$langmsg['editnews'][9] = x("Categories");
$langmsg['editnews'][10] = x("Datum");
$langmsg['editnews'][11] = x("Toegestaan");
$langmsg['editnews'][12] = x("Reacties");
$langmsg['editnews'][13] = x("[Getoond]");
$langmsg['editnews'][14] = x("Akkoord");
$langmsg['editnews'][15] = x("Niet akkoord");
$langmsg['editnews'][16] = x("Nieuws gepost");
$langmsg['editnews'][17] = x("Geselecteerde posts verwijderd.");
$langmsg['editnews'][18] = x("Geselecteerde posts geupdate.");
$langmsg['editnews'][19] = x("Nieuws updated.");
$langmsg['editnews'][20] = x("Disabled");
$langmsg['editnews'][21] = x("nieuwsartikelen.");
$langmsg['editnews'][22] = x("in totaal.");
$langmsg['editnews'][23] = x("View count teruggezet naar 0 voor het geselecteerde artikel (s)");
$langmsg['editnews'][24] = x("Waardering reset voor de geselecteerde artikel (s)");
$langmsg['editnews'][25] = x("Filter op categorie");

#-----NEWSFORM
$langmsg['newsform'][0] = x("Vul je artikel hieronder in");
$langmsg['newsform'][1] = x("Titel:");
$langmsg['newsform'][2] = x("Categories:");
$langmsg['newsform'][3] = x("Samenvatting ( Verplicht):");
$langmsg['newsform'][4] = x("Artikel:");
$langmsg['newsform'][5] = x("HTML niet toegestaan");
$langmsg['newsform'][6] = x("HTML toegestaan (div, ect");
$langmsg['newsform'][7] = x("Reacties:");
$langmsg['newsform'][8] = x("Toggle date");
$langmsg['newsform'][9] = x("Toggle samenvatting");
$langmsg['newsform'][16] = x("Datum:");
$langmsg['newsform'][17] = x("Toggle archief");
$langmsg['newsform'][18] = x("Noit archief");
$langmsg['newsform'][19] = x("File upload");
$langmsg['newsform'][20] = x("Downloads");
$langmsg['newsform'][21] = x("Geupload");
$langmsg['newsform'][22] = x("Artikel");
$langmsg['newsform'][23] = x("Voer een afbeeldings-URL");
$langmsg['newsform'][24] = x("Invoegen");
$langmsg['newsform'][25] = x("Selecteer een afbeelding geüpload");

#-----COMMENTS MODULE
$langmsg['editcomments'][0] = x("Bewerk reacties");
$langmsg['editcomments'][1] = x("bewerk de reactie hieronder");
$langmsg['editcomments'][2] = x("Auteur:");	
$langmsg['editcomments'][3] = x("Email:");
$langmsg['editcomments'][4] = x("Bericht:");
$langmsg['editcomments'][5] = x("Reactie updated.");
$langmsg['editcomments'][6] = x("reacties verwijderd.");
$langmsg['editcomments'][7] = x("reacties geupdate.");
$langmsg['editcomments'][8] = x("reacties in totaal.");
$langmsg['editcomments'][9] = x("Bericht");
$langmsg['editcomments'][10] = x("Datum");
$langmsg['editcomments'][11] = x("Toegestaan");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("akkoord");
$langmsg['editcomments'][14] = x("niet akkoord");
$langmsg['editcomments'][15] = x("Locatie:");

#-----PRIVATE MESSAGES MODUKE
$langmsg['privmsgs'][0] = x("Privé berichten");
$langmsg['privmsgs'][1] = x("Inbox");
$langmsg['privmsgs'][2] = x("Outbox");
$langmsg['privmsgs'][3] = x("Nieuw bericht");
$langmsg['privmsgs'][4] = x("Je hebt");
$langmsg['privmsgs'][5] = x("Titel");
$langmsg['privmsgs'][6] = x("Van");
$langmsg['privmsgs'][7] = x("Zend");
$langmsg['privmsgs'][8] = x("Naar");
$langmsg['privmsgs'][9] = x("Beantwoord dit bericht");
$langmsg['privmsgs'][10] = x("Nieuw privé bericht.");
$langmsg['privmsgs'][11] = x("Verzenden naar:");
$langmsg['privmsgs'][12] = x("Titel:");
$langmsg['privmsgs'][13] = x("Bericht:");
$langmsg['privmsgs'][14] = x("Voorbeeld 'Ronald, Jaap, Tktrekker'");
$langmsg['privmsgs'][15] = x("Bericht voorbeeld.");
$langmsg['privmsgs'][16] = x("Bericht verzonden naar de volgende gebruikers.");
$langmsg['privmsgs'][17] = x("Vul een gebruiker in om dit bericht naar toe te sturen.");
$langmsg['privmsgs'][18] = x("Vul een titel van het bericht in.");
$langmsg['privmsgs'][19] = x("Vul een bericht in.");
$langmsg['privmsgs'][20] = x("Bericht verwijderd.");
$langmsg['privmsgs'][21] = x("ongelezen berichten.");
$langmsg['privmsgs'][22] = x("berichten in totaal.");

#-----OPTIONS MODULE
$langmsg['options'][0] = x("Opties");
$langmsg['options'][1] = x("Nieuw");
$langmsg['options'][2] = x("Edit");

#-----BANNED IPS MODULE
$langmsg['bannedips'][0] = x("Gebande IPs");
$langmsg['bannedips'][1] = x("Gebande IPs");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Aantal malen geblokkeerd");
$langmsg['bannedips'][4] = x("Voeg een nieuw ip toe om te blokeren.");
$langmsg['bannedips'][5] = x("Bericht voor verbande. (html is toegestaand)");
$langmsg['bannedips'][6] = x("IP Addres:");
$langmsg['bannedips'][7] = x("Dit IP adres is al eens verbannen.");
$langmsg['bannedips'][8] = x("IP adressen verbannen.");
$langmsg['bannedips'][9] = x("IP adressen verwijderd.");
$langmsg['bannedips'][10] = x("IP adressen gereset.");
$langmsg['bannedips'][11] = x("Verbannen bericht geupdate.");

#-----CATEGORIES MODULE
$langmsg['cats'][0] = x("Categorie");
$langmsg['cats'][1] = x("Categorie.");
$langmsg['cats'][2] = x("Naam");
$langmsg['cats'][3] = x("Artikels");
$langmsg['cats'][4] = x("voeg een nieuwe categorie toe.");
$langmsg['cats'][5] = x("Naam:");
$langmsg['cats'][6] = x("De volgende categorie(n) zijn verwijderd:");
$langmsg['cats'][7] = x("Kies een andere naam.");
$langmsg['cats'][8] = x("Categorie aangemaakt.");
$langmsg['cats'][9] = x("Categorie geupdate.");
$langmsg['cats'][10] = x("Pas de categorie aan.");
$langmsg['cats'][11] = x("Afbeeldingen ");
$langmsg['cats'][12] = x("Bestanden");
$langmsg['cats'][13] = x("Een categorie met die naam bestaat reeds, te kiezen gelieve een andere.");

#-----IMAGE UPLOADS MODULE
$langmsg['img'][0] = x("Afbeelding uploaden");
$langmsg['img'][1] = x("Upload een nieuwe afbeelding");
$langmsg['img'][2] = x("Uploaden");
$langmsg['img'][3] = x("Beelden in totaal");
$langmsg['img'][4] = x("Kies een afbeelding:");
$langmsg['img'][5] = x("Afbeeldingen verwijderd.");
$langmsg['img'][6] = x("Afbeelding geupload");
$langmsg['img'][7] = x("Er trad een error op tijdens het uploaden, probeer het opnieuw.");
$langmsg['img'][8] = x("Ongeldige extensie.");
$langmsg['img'][9] = x("Verkeerde afbeelding.");
$langmsg['img'][10] = x("Afbeelding verwijderd uit categorie.");
$langmsg['img'][11] = x("Afbeelding(en) toegevoegd aan de categorie");
$langmsg['img'][12] = x("Filenaam:");
$langmsg['img'][13] = x("Kies een categorie:");
$langmsg['img'][14] = x("Bewerk een afbeelding");
$langmsg['img'][15] = x("Titel:");
$langmsg['img'][16] = x("Beschrijving:");
$langmsg['img'][17] = x("Update afbeelding");
$langmsg['img'][18] = x("Invalid afbeelding");
$langmsg['img'][19] = x("Afbeelding geupdate.");
$langmsg['img'][20] = x("Thumbnails");
$langmsg['img'][21] = x("Details");
$langmsg['img'][22] = x("Categorie:");
$langmsg['img'][23] = x("Filenaam");
$langmsg['img'][24] = x("Filesize");
$langmsg['img'][25] = x("Uploader");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("Voeg toe aan categorie");
$langmsg['img'][28] = x("Verwijder van categorie");
$langmsg['img'][29] = x("Upgeloade afbeelding");
$langmsg['img'][30] = x("Een afbeelding met deze naam bestaat al.");
$langmsg['img'][31] = x("AAlle categorien");
$langmsg['img'][32] = x("Kan niet schrijven naar de upload directory. CHMOD deze map naar 777");

#-----PERSONAL MODULE
$langmsg['personal'][0] = x("Persoonlijke informatie");
$langmsg['personal'][1] = x("Bewerk je account hieronder.");
$langmsg['personal'][2] = x("Persoonlijke instellingen");
$langmsg['personal'][3] = x("Afbeelding url:");
$langmsg['personal'][4] = x("Email addres:");
$langmsg['personal'][5] = x("Bericht alerten:");
$langmsg['personal'][6] = x("Gewaarschuwd worden als er een nieuw lid is?");
$langmsg['personal'][7] = x("Nieuw Paswoord:");
$langmsg['personal'][8] = x("(Laat leeg om hem zo te houden)");
$langmsg['personal'][9] = x("Bevestig paswoord:");
$langmsg['personal'][10] = x("Een email adres moet worden ingevuld.");
$langmsg['personal'][11] = x("Inestellingen aangepast.");
$langmsg['personal'][12] = x("Passwoord komt niet overeen.");
$langmsg['personal'][13] = x("Activeer WYSIWYG editor?");
$langmsg['personal'][14] = x("Standaard opties");

#-----LOGIN MODULE
$langmsg['login'][0] = x("Login");
$langmsg['login'][1] = x("Naam:");
$langmsg['login'][2] = x("Paswoord:");
$langmsg['login'][3] = x("Paswoord vergeten?");
$langmsg['login'][4] = x("Onthoud mij");
$langmsg['login'][5] = x("Security Key:");
$langmsg['login'][6] = x("Login");
$langmsg['login'][7] = x("Ongeldige security key");
$langmsg['login'][8] = x("Ongeldige naam of wachtwoord");
$langmsg['login'][9] = x("Typ deze code hieronder");

#-----PROFILE MODULE
$langmsg['profile'][0] = x("Bewerk profiel");
$langmsg['profile'][1] = x("Bewerk je account hieronder.");
$langmsg['profile'][2] = x("Naam:");
$langmsg['profile'][3] = x("Leeftijd:");
$langmsg['profile'][4] = x("Locatie:");
$langmsg['profile'][5] = x("Sex:");
$langmsg['profile'][6] = x("Profiel afbeelding:");
$langmsg['profile'][7] = x("Homepage:");
$langmsg['profile'][8] = x("Intresses:");
$langmsg['profile'][9] = x("Hobbies:");
$langmsg['profile'][10] = x("Occupation:");
$langmsg['profile'][11] = x("Favourite Quote:");
$langmsg['profile'][12] = x("Man");
$langmsg['profile'][13] = x("Vrouw");
$langmsg['profile'][14] = x("Profiel geupdate.");
$langmsg['profile'][15] = x("Geen");

#-----ACCOUNTS MODULE
$langmsg['accounts'][0] = x("Leden");
$langmsg['accounts'][1] = x("Leden.");
$langmsg['accounts'][2] = x("Gebruikersnaam");
$langmsg['accounts'][3] = x("Level");
$langmsg['accounts'][4] = x("Aantal posts");
$langmsg['accounts'][5] = x("Aantal reacties");
$langmsg['accounts'][6] = x("Nieuw account aanmaken.");
$langmsg['accounts'][7] = x("Gebruikersnaam:");
$langmsg['accounts'][8] = x("Email:");
$langmsg['accounts'][9] = x("Nieuw wachtwoord:");
$langmsg['accounts'][10] = x("Bevestig wachtwoord:");
$langmsg['accounts'][11] = x("Level:");
$langmsg['accounts'][12] = x("Nieuwe gebruikersnaam.");
$langmsg['accounts'][13] = x("Verander de gebruikersnaam.");
$langmsg['accounts'][14] = x("Het email adres moet worden ingevuld.");
$langmsg['accounts'][15] = x("Gebruikersnaam geupdate.");
$langmsg['accounts'][16] = x("Wachtwoorden zijn niet hetzelfde.");
$langmsg['accounts'][17] = x("Een gebruikersnaam moet worden ingevuld.");
$langmsg['accounts'][18] = x("Deze gebruikersnaam bestaat al, kies een nieuwe.");
$langmsg['accounts'][19] = x("Een wachtwoord moet worden ingevuld.");
$langmsg['accounts'][20] = x("Gebruikers naam aangemaakt.");
$langmsg['accounts'][21] = x("De volgende gebruikersnamen zijn verwijderd:");
$langmsg['accounts'][22] = x("Je kan dit account niet verwijderen.");
$langmsg['accounts'][23] = x("(Leeg laten om te behouden)");
$langmsg['accounts'][24] = x("Een gebruikersnaam gebruikt dit email adres al, kies een andere.");
$langmsg['accounts'][25] = x("Vul een gebruikersnaam in.");
$langmsg['accounts'][26] = x("Archief");
$langmsg['accounts'][27] = x("Afbeeldingen");

#----ACCESS MODULE
$langmsg['access'][0] = x("Toegangsniveaus");
$langmsg['access'][1] = x("Maak een nieuw gebruikerslevel aan");
$langmsg['access'][2] = x("Naam:");
$langmsg['access'][3] = x("Welke secties kan deze gebruiker gebruiken?");
$langmsg['access'][4] = x("Gebruikersnamen:");
$langmsg['access'][5] = x("Gebruikerslevels:");
$langmsg['access'][6] = x("Gebande ip's:");
$langmsg['access'][7] = x("Categories:");
$langmsg['access'][8] = x("Reacties:");
$langmsg['access'][9] = x("Help:");
$langmsg['access'][10] = x("Afbeelding uploaden:");
$langmsg['access'][11] = x("Nieuws:");
$langmsg['access'][12] = x("Persoonlijke opties:");
$langmsg['access'][13] = x("Prive berichten:");
$langmsg['access'][14] = x("Profiel:");
$langmsg['access'][15] = x("RSS Feeds:");
$langmsg['access'][16] = x("Smilies:");
$langmsg['access'][17] = x("Systeem Instellingen:");
$langmsg['access'][18] = x("Templates:");
$langmsg['access'][19] = x("Woorden filter:");
$langmsg['access'][20] = x("In welke categories kan deze gebruiker posten?");
$langmsg['access'][21] = x("Alles:");
$langmsg['access'][22] = x("Welke posts kunnen worden bewerkt.?");
$langmsg['access'][23] = x("Admin (Alles):");
$langmsg['access'][24] = x("Mod (Eigen + Leden):");
$langmsg['access'][25] = x("Leden (Eigen):");
$langmsg['access'][26] = x("Posts gemaakt door deze gebruikers automatisch goed keuren ?");
$langmsg['access'][27] = x("Kan deze gebruikers posts goed keuren?");
$langmsg['access'][28] = x("Kan dit gebruikerslevel html gebruiken?");
$langmsg['access'][29] = x("Posten zonder categorie toestaan?");
$langmsg['access'][30] = x("Gebruikerslevels verwijderd:");
$langmsg['access'][31] = x("De volgende gebruikersnamen zijn niet verwijderd omdat ze 1 of meer leden tot hun beschikking hebben:");
$langmsg['access'][32] = x("Bewerk deze level hieronder.");
$langmsg['access'][33] = x("Vul een naam in voor de gebruikerslevel.");
$langmsg['access'][34] = x("Gebruikerslevels geupdate.");
$langmsg['access'][35] = x("Een gebruikerslevel met deze naam bestaat al, kies een ander.");
$langmsg['access'][36] = x("Selecteer post die door de gebruiker kunnen worden gebruikt.");
$langmsg['access'][37] = x("Selecteer of posts door deze gebruiker automatisch worden goedgekeurd");
$langmsg['access'][38] = x("Selecteer of deze gebruikers posts kan goedkeuren");
$langmsg['access'][39] = x("Selecteer of de gebruikers HTML mag gebruiken");
$langmsg['access'][40] = x("Selecteer of de gebruiker kan posten zonder html");
$langmsg['access'][41] = x("Gebruikerslevel is aangemaakt.");
$langmsg['access'][42] = x("Los niveles de acceso.");
$langmsg['access'][43] = x("Naam");
$langmsg['access'][44] = x("Gebruikerslevel");
$langmsg['access'][45] = x("Gebruikersnamen");
$langmsg['access'][46] = x("Lid");
$langmsg['access'][47] = x("Moderator");
$langmsg['access'][48] = x("Administrator");
$langmsg['access'][49] = x("Bestand uploaden");
$langmsg['access'][50] = x("Kan dit toegangsniveau van de gebruiker vanuit IP-adressen?");
$langmsg['access'][51] = x("Welke bestanden en afbeeldingen kunnen deze toegang niveau bewerken?");
$langmsg['access'][52] = x("Bezitten");
$langmsg['access'][53] = x("Alle");

#-----ACCESSLOGS MODULE
$langmsg['accesslogs'][0] = x("Acces logs");
$langmsg['accesslogs'][1] = x("Naam");
$langmsg['accesslogs'][2] = x("Toegang");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Datum");
$langmsg['accesslogs'][5] = x("Access logs voor");
$langmsg['accesslogs'][6] = x("Voltooid");
$langmsg['accesslogs'][7] = x("Niet voltooid");

#-----FILTERS MODULE
$langmsg['filters'][0] = x("Woorden filters");
$langmsg['filters'][1] = x("Filter toegevoegd.");
$langmsg['filters'][2] = x("Filter verwijderd.");
$langmsg['filters'][3] = x("Alle woorden hieronder worden gefilterd");
$langmsg['filters'][4] = x("Gefilterd woord");
$langmsg['filters'][5] = x("Vervang door");
$langmsg['filters'][6] = x("Verwijder");
$langmsg['filters'][7] = x("Voeg een nieuw filter");

#-----RSS MODULE
$langmsg['rss'][0] = x("RSS Feeds");
$langmsg['rss'][1] = x("Verander de RSS Feeds instellingen hieronder");
$langmsg['rss'][2] = x("De nieuws locatie is de locatie waar je nieuws word getoond, bijvoorbeeld http://yourdomain.com/ of http://yourdomain.com/index");
$langmsg['rss'][3] = x("Feed naam:");
$langmsg['rss'][4] = x("Nieuws locatie:");
$langmsg['rss'][5] = x("Titel of de RSS feed:");
$langmsg['rss'][6] = x("Beschrijving van de RSS feed:");
$langmsg['rss'][7] = x("Karakter gedecoded:");
$langmsg['rss'][8] = x("Taal:");
$langmsg['rss'][9] = x("Aantal getoonde nieuws items:");
$langmsg['rss'][10] = x("0 = alles");
$langmsg['rss'][11] = x("Categories die worden weer gegeven:");
$langmsg['rss'][12] = x("Postst zonder categorie tonen?");
$langmsg['rss'][13] = x("Rss Code:");
$langmsg['rss'][14] = x("Verander hoe de RSS feed moet worden weer gegeven");
$langmsg['rss'][15] = x("Toont de titel van de post.");
$langmsg['rss'][16] = x("Toont de samenvatting van de post.");	
$langmsg['rss'][17] = x("Toont de gehele post.");
$langmsg['rss'][18] = x("Toont de categorie waar de post mee in verband staat.");    
$langmsg['rss'][19] = x("Toont de URL van de post.");
$langmsg['rss'][20] = x("Toont de datum van posten.");
$langmsg['rss'][21] = x("Toont de tijdinstelling.");
$langmsg['rss'][22] = x("Toont de timestamp of elke post.");
$langmsg['rss'][23] = x("Toont de auteur of elke post.");
$langmsg['rss'][24] = x("Toont de avatar van elke auteur als er 1 tot de beschikking is.");
$langmsg['rss'][25] = x("Shows the unique ID each story has.");
$langmsg['rss'][26] = x("Toont het aantal reacties pop de post.");
$langmsg['rss'][27] = x("Vul een Feed naam in");
$langmsg['rss'][28] = x("Vul een locatie in");
$langmsg['rss'][29] = x("Vul een titel in");
$langmsg['rss'][30] = x("vul een beschrijving in");
$langmsg['rss'][31] = x("Vul de encoding in");
$langmsg['rss'][32] = x("Vul een taal in");
$langmsg['rss'][33] = x("Vul het aantal posts dat getoont moet worden in");
$langmsg['rss'][34] = x("RSS Feed aangemaakt");
$langmsg['rss'][35] = x("Er bestaal al een Feed met deze naam.");
$langmsg['rss'][36] = x("RSS Feed geupdate");
$langmsg['rss'][37] = x("RSS Feeds");
$langmsg['rss'][38] = x("RSS feed(s) verwijderd.");
$langmsg['rss'][39] = x("Naam");
$langmsg['rss'][40] = x("Categorie");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Maak een nieuwe RSS Feed aan.");
$langmsg['rss'][43] = x("Toont de vriendelijke titel van het verhaal");

#-----SMILIES MODULE
$langmsg['smilies'][0] = x("Smilies");
$langmsg['smilies'][1] = x("Handig als u alle locaties in 1 keer wilt veranderen.");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("Vervang:");
$langmsg['smilies'][4] = x("Vervang door:");
$langmsg['smilies'][5] = x("Alle locaties geupdate.");
$langmsg['smilies'][6] = x("Maak een nieuwe smilie aan.");
$langmsg['smilies'][7] = x("Locatie:");
$langmsg['smilies'][8] = x("Snelcode:");
$langmsg['smilies'][9] = x("Vul de locatie van de smilie in.");
$langmsg['smilies'][10] = x("Vul de snelcode voor de smiley in.");
$langmsg['smilies'][11] = x("Deze snelcode is al in gebruik, kies een andere.");
$langmsg['smilies'][12] = x("Smilie toegevoegd.");
$langmsg['smilies'][13] = x("Deze smilie echt verwijderen ?");
$langmsg['smilies'][14] = x("Smilie verwijderd.");
$langmsg['smilies'][15] = x("Vernader de smiley hieronder");
$langmsg['smilies'][16] = x("Smilie:");
$langmsg['smilies'][17] = x("Smilie geupdate.");
$langmsg['smilies'][18] = x("Smilie is verwijderd");
$langmsg['smilies'][19] = x("Kies de smilie die je wilt bewerken.");
$langmsg['smilies'][20] = x("Smilie");
$langmsg['smilies'][21] = x("Voeg een smilie toe.");
$langmsg['smilies'][22] = x("Update de locatie van alle smilies");

#-----SYSTEM MODULE
$langmsg['system'][0] = x("Systeem Instellingen");
$langmsg['system'][1] = x("Verander de systeem instellingen.");
$langmsg['system'][2] = x("Nieuws");
$langmsg['system'][3] = x("Aantal posts per pagina:");
$langmsg['system'][4] = x("Welke volgorde moeten de posts worden weergegeven:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("Datum en tijd instellingen:");
$langmsg['system'][8] = x("Bekijk hier");
$langmsg['system'][9] = x("Toon afbeeldingen:");
$langmsg['system'][10] = x("Scheiding tussen de categories:");
$langmsg['system'][11] = x("Reacties");
$langmsg['system'][12] = x("Aantal reacties per pagina:");
$langmsg['system'][13] = x("Welke volgorde moeten de posts worden weeregegeven:");
$langmsg['system'][14] = x("Datum en tijd instellingen reacties:");
$langmsg['system'][15] = x("Maximale lengte reacties:");
$langmsg['system'][16] = x("Toon reacties in nieuwe pagina");
$langmsg['system'][17] = x("Tijd tussen tussen het geven van een reactie (SPAM):");
$langmsg['system'][18] = x("Seconden");
$langmsg['system'][19] = x("SPAM bericht:");
$langmsg['system'][20] = x("Nieuwe reactie bericht:");
$langmsg['system'][21] = x("Nieuwe reactie akkoord bericht:");
$langmsg['system'][22] = x("Gebruik beveligings code voor posten reacties (SPAM):");
$langmsg['system'][23] = x("Friendly URLs");
$langmsg['system'][24] = x("Toepassen van friendly URLs:");
$langmsg['system'][25] = x("Bestand uitgang:");
$langmsg['system'][26] = x("Voorvoegsel:");
$langmsg['system'][27] = x("Directory bestandnaam:");
$langmsg['system'][28] = x("Registratie");
$langmsg['system'][29] = x("Registratie toestaan:");
$langmsg['system'][30] = x("Gebruikerslevel voor nieuwe leden:");
$langmsg['system'][31] = x("Anders");
$langmsg['system'][32] = x("Tijdzone:");
$langmsg['system'][33] = x("Toegestane bestand of afbeelding uitgangen (JPG):");
$langmsg['system'][34] = x("Upload locatie afbeeldingen:");
$langmsg['system'][35] = x("Geen toegang melding:");
$langmsg['system'][36] = x("Instellingen geupdate.");
$langmsg['system'][37] = x("Tijd vertraging tussen zenden:");
$langmsg['system'][38] = x("Meldingen");
$langmsg['system'][39] = x("Melding mail voor nieuwe reacties:");
$langmsg['system'][40] = x("Melding mail voor nieuwe registraties:");
$langmsg['system'][41] = x("Alleen leden toestaan op te reageren:");
$langmsg['system'][42] = x("Meldingen zenden naar:");
$langmsg['system'][43] = x("Toegestane uitgangen voor bestanden:");
$langmsg['system'][44] = x("Ontvang e-mailberichten van niet-goedgekeurde nieuws berichten:");
$langmsg['system'][45] = x("Publieke sleutel");
$langmsg['system'][46] = x("Private sleutel");
$langmsg['system'][47] = x("Script pad");
$langmsg['system'][48] = x("Laat geregistreerde gebruikers te verwijderen van hun eigen commentaar:");
$langmsg['system'][49] = x("Gebruik afbeelding controle op de index login formulier:");
$langmsg['system'][50] = x("Gebruik image controle over de registratie formulier:");
$langmsg['system'][51] = x("Datum & tijd-formaat voor bestanden:");
$langmsg['system'][52] = x("Toon 'Powered by' onder uw nieuws:");

#-----RECOVERY MODULE
$langmsg['recover'][0] = x("Recuperar Senha");
$langmsg['recover'][1] = x("Entre o seu e-mail abaixo para receber mais instruções sobre como recuperar a sua conta.");
$langmsg['recover'][2] = x("Email:");
$langmsg['recover'][3] = x("Jij of iemand anders heeft een aanvraag gedaan om je wachtwoord te resetten");
$langmsg['recover'][4] = x("Klik hier op je wachtwoord te resetten");
$langmsg['recover'][5] = x("Een email is verzonden naar");
$langmsg['recover'][6] = x("Não encontramos uma conta com este email, por favos contacte o Admnistrador.");
$langmsg['recover'][7] = x("Nieuw Password");
$langmsg['recover'][8] = x("Vul je nieuwe wachtwoord hieronder in.");
$langmsg['recover'][9] = x("Verzenden van een reset mail is niet gelukt, neem contact op met de site beheerder..");
$langmsg['recover'][10] = x("Bevestig wachtwoord:");
$langmsg['recover'][11] = x("Wachtwoorden komen niet overeen.");
$langmsg['recover'][12] = x("Je wachtwoord ie geupdate.");
$langmsg['recover'][13] = x("met verdere instructies voor het ophalen van uw account.");

#-----TEMPLATES MODULE
$langmsg['templates'][0] = x("Templates");
$langmsg['templates'][1] = x("Maak een nieuwe template aan.");
$langmsg['templates'][2] = x("Naam:");
$langmsg['templates'][3] = x("Verander hier hoe het nieuws moet worden weergegeven.");
$langmsg['templates'][4] = x("Toont de titel van de post.");
$langmsg['templates'][5] = x("Toont de samenvatting van de post.");
$langmsg['templates'][6] = x("Toont het gehele verhaal.");
$langmsg['templates'][7] = x("Toont de datum van posten.");
$langmsg['templates'][8] = x("Toont de categorie(s) waar de post mee verbonden is.");
$langmsg['templates'][9] = x("Toont de auteur of de post.");
$langmsg['templates'][10] = x("Toont de avater of de auteur als deze ter beschikking is.");
$langmsg['templates'][11] = x("Toont de unieke id van de post.");
$langmsg['templates'][12] = x("Toont de IP van de auteut. (Alleen als er ingelogd is)");
$langmsg['templates'][13] = x("Link naar de gehele post vanaf de samenvatting");
$langmsg['templates'][14] = x("Toont het email adres.");
$langmsg['templates'][15] = x("De link naar het email adres.");
$langmsg['templates'][16] = x("Link naar het profiel.");
$langmsg['templates'][17] = x("Aantal reacties op de post.");
$langmsg['templates'][18] = x("Link naar de reacties.");
$langmsg['templates'][19] = x("Alles tussen deze tags zal worden getoond als er is ingelogd.");
$langmsg['templates'][20] = x("Locatie naar smilies");
$langmsg['templates'][21] = x("Comments");
$langmsg['templates'][22] = x("Verander hier hoe de reacties moeten worden weergegeven.");
$langmsg['templates'][23] = x("Toont de auteur van de reactie.");
$langmsg['templates'][24] = x("Toont het bericht.");
$langmsg['templates'][25] = x("Toont de avater als deze ter beschikking is.");
$langmsg['templates'][26] = x("Toont de ip adres van de auteur. (alleen als er is ingelogd)");
$langmsg['templates'][27] = x("Toont de unieke id van de reactie.");
$langmsg['templates'][28] = x("Toont het email adres van de auteur van de reactie.");
$langmsg['templates'][29] = x("Link naar het email adres.");
$langmsg['templates'][30] = x("Datum van de reactie.");
$langmsg['templates'][31] = x("Alles tussen deze tags zal worden getoond als er is ingelogd.");
$langmsg['templates'][32] = x("Comments Form");
$langmsg['templates'][33] = x("Laat alle id's in deze hetzelfde als zal de template niet werken let op:  Notice the form onsubmit attribute useajax='', yes or no determines if ajax is used when the user submits a comment.");
$langmsg['templates'][34] = x("Toont de id van de nieuws post.");
$langmsg['templates'][35] = x("Toont de unieke id van de post.");
$langmsg['templates'][36] = x("Toont de naam als er is ingelofd.");
$langmsg['templates'][37] = x("Toont het email adres als er is ingelogd.");
$langmsg['templates'][38] = x("Toont het bericht.");
$langmsg['templates'][39] = x("Toont alle smilies.");
$langmsg['templates'][40] = x("News Pagination");
$langmsg['templates'][44] = x("Comments Pagination");
$langmsg['templates'][45] = x("Toont de vorige pagina als deze er is.");
$langmsg['templates'][46] = x("Toont de volgende pagina als deze er is.");
$langmsg['templates'][47] = x("Toont het aantal pagina's, Ex: 1 2 3 4.");
$langmsg['templates'][48] = x("Profielen");
$langmsg['templates'][49] = x("Verander hier hoe het profiel moet worden weergegeven.");
$langmsg['templates'][50] = x("Toont de naam van het lid.");
$langmsg['templates'][51] = x("Toont de echte naam van het lid.");
$langmsg['templates'][52] = x("Toont de leeftijd.");
$langmsg['templates'][53] = x("Toont de plaats.");
$langmsg['templates'][54] = x("Toont de geaardheid.");
$langmsg['templates'][55] = x("Link naar de homepage van de gebruiker.");
$langmsg['templates'][56] = x("Toont de intresses van de gebruiker.");
$langmsg['templates'][57] = x("Toont de hobbies.");
$langmsg['templates'][58] = x("Toont de occupatie van de gebruiker.");
$langmsg['templates'][59] = x("Toont de quote van de gebruiker.");
$langmsg['templates'][60] = x("Toont de avater van de gebruiker.");
$langmsg['templates'][61] = x("Nieuws Structuur");
$langmsg['templates'][62] = x("Verander hier hoe alles getoond moet worden in welke volgorde B.V: if you want the pagintation to be displayed above your news aswell as below it you can do that here.");
$langmsg['templates'][63] = x("Toont jouw posts.");
$langmsg['templates'][64] = x("Toont de pagina.");
$langmsg['templates'][65] = x("Reactie structuur");
$langmsg['templates'][66] = x("Verander hier hoe alles moet worden getoont kwa reacties B.V:  if you want the pagintation to be displayed above your comments aswell as below it you can do that here.");
$langmsg['templates'][67] = x("Toont de posts als als er gevraagd word om de reacties");
$langmsg['templates'][68] = x("Toont de reacties.");
$langmsg['templates'][69] = x("Aantal paginas reactie.");
$langmsg['templates'][70] = x("Toont het reactie formulier.");
$langmsg['templates'][71] = x("Registratie formulier");
$langmsg['templates'][72] = x("Hier kan je de instellingen verander om leden te laten registreren. Laat alle input velden hetzelfde anders zal deze niet meer werken !.");
$langmsg['templates'][73] = x("Naam die de gebruiker gaat gebruiken.");
$langmsg['templates'][74] = x("Wachtwoord die de gebuiker gaan gebruiken.");
$langmsg['templates'][75] = x("Toont de foutmelding als deze er is.");
$langmsg['templates'][76] = x("Vul een naam in.");
$langmsg['templates'][77] = x("Template gemaakt.");
$langmsg['templates'][78] = x("Kies een andere naam.");
$langmsg['templates'][79] = x("Verander de templates hieronder hoe jij wil dat je nieuws wordt getoont !.");
$langmsg['templates'][80] = x("Niews");
$langmsg['templates'][81] = x("Template geupdate.");
$langmsg['templates'][82] = x("De naam van deze template bestaat al kies een andere");
$langmsg['templates'][83] = x("De template kan niet worden verwijderd, deze word gebruikt !");
$langmsg['templates'][84] = x("De geselecteerde templates zijn verwijderd");
$langmsg['templates'][85] = x("De Templates zijn gecopieerd");
$langmsg['templates'][86] = x("Selecteer een template om te veranderen.");
$langmsg['templates'][87] = x("Template geselecteerd.");
$langmsg['templates'][88] = x("Naam");
$langmsg['templates'][89] = x("Geselecteerd");
$langmsg['templates'][90] = x("Maak een nieuwe template aan.");
$langmsg['templates'][91] = x("Selecteer");
$langmsg['templates'][92] = x("Toont het aantal maal bekeken.");
$langmsg['templates'][93] = x("Toont de rating van de post.");
$langmsg['templates'][94] = x("Toont de huidige rating.");
$langmsg['templates'][95] = x("Toont het aantal maal dat er is gerate.");
$langmsg['templates'][96] = x("Shows the rating form.");
$langmsg['templates'][98] = x("Toont de zend naar box.");
$langmsg['templates'][99] = x("Toont de locatie van de gebruiker");
$langmsg['templates'][100] = x("Bestanden geupload");
$langmsg['templates'][101] = x("Verander hier hoe je bestanden worden getoond.");
$langmsg['templates'][102] = x("Datum van uploaden.");
$langmsg['templates'][103] = x("Titel van het bestand.");
$langmsg['templates'][104] = x("Bestandnaam van het bestand.");
$langmsg['templates'][105] = x("Bestandgroote.");
$langmsg['templates'][106] = x("URL om het bestand te downloaden.");
$langmsg['templates'][107] = x("Naam van de uploader.");
$langmsg['templates'][108] = x("Aantal maal dat er is gedownload");
$langmsg['templates'][109] = x("Toont gerelateerde bestanden aan de post.");
$langmsg['templates'][110] = x("Toont elk bestand dat aan de post vast zit.");
$langmsg['templates'][111] = x("Toont 3 pagina's per keer");
$langmsg['templates'][112] = x("Link naar de eerste pagina");
$langmsg['templates'][113] = x("Link naar de laatste pagina");
$langmsg['templates'][114] = x("Toont het aantal woorden voor dit bericht");
$langmsg['templates'][115] = x("Toont de vriendelijke titel van het verhaal");
$langmsg['templates'][116] = x("Geeft de reCAPTCHA element");
$langmsg['templates'][117] = x("Maakt een link naar de reactie te verwijderen.");
$langmsg['templates'][118] = x("Geeft het login formulier alleen als login is vereist.");
$langmsg['templates'][119] = x("Login Form");
$langmsg['templates'][120] = x("Bepalen hoe het aanmeldingsformulier wordt weergegeven.");
$langmsg['templates'][121] = x("Geeft de e-mail de gebruiker heeft ingevoerd.");
$langmsg['templates'][122] = x("Geeft de login foutmelding.");
$langmsg['templates'][123] = x("Geeft de reCAPTCHA element.");
$langmsg['templates'][124] = x("Geeft de gebruikersnaam van de gebruiker opgegeven.");
$langmsg['templates'][125] = x("Als u bent ingelogd verschijnt in de gebruikersnaam.");
$langmsg['templates'][126] = x("Geeft u het zoekformulier. Alle namen en id's moet hetzelfde blijven.");
$langmsg['templates'][127] = x("Geeft het aantal voor elk zoekresultaat");
$langmsg['templates'][128] = x("Formaten hoe de zoekresultaten weergegeven. Wordt herhaald voor elk resultaat.");
$langmsg['templates'][129] = x("Wisselt tussen het uitsturen van een of twee voor elke rij.");
$langmsg['templates'][130] = x("Geeft de huidige pagina nummer.");
$langmsg['templates'][131] = x("Geeft de vorige pagina nummer.");
$langmsg['templates'][132] = x("Geeft de volgende pagina nummer.");
$langmsg['templates'][133] = x("Geeft de vriendelijke titel van het nieuwsbericht.");
$langmsg['templates'][134] = x("Zoekformulier");
$langmsg['templates'][135] = x("Zoekresultaten");
$langmsg['templates'][136] = x("Geüploade bestanden");

#-----UPLOADED FILES
$langmsg['uploadedfiles'][0] = x("Bestand uploaden");
$langmsg['uploadedfiles'][1] = x("Upload een nieuw bestand");
$langmsg['uploadedfiles'][2] = x("Upload bestand");
$langmsg['uploadedfiles'][4] = x("Kies een bestand:");
$langmsg['uploadedfiles'][5] = x("Bestande(n) verwijderd.");
$langmsg['uploadedfiles'][6] = x("Bestand geupload");
$langmsg['uploadedfiles'][7] = x("Er is een fout opgetreden tijdens het uploaden van het bestand.");
$langmsg['uploadedfiles'][8] = x("Ongeldige bestands uitgang.");
$langmsg['uploadedfiles'][9] = x("Ongeldig bestand.");
$langmsg['uploadedfiles'][10] = x("Bestand verwijderd uit de categorie.");
$langmsg['uploadedfiles'][11] = x("Bestanden aan de categorie toegevoegd.");
$langmsg['uploadedfiles'][12] = x("Bestandsnaam");
$langmsg['uploadedfiles'][13] = x("Kies een categorie:");
$langmsg['uploadedfiles'][14] = x("Bewerk een bestand");
$langmsg['uploadedfiles'][15] = x("Titel:");
$langmsg['uploadedfiles'][16] = x("Beschrijving:");
$langmsg['uploadedfiles'][17] = x("Bestand geupdate");
$langmsg['uploadedfiles'][18] = x("Ongeldig bestand");
$langmsg['uploadedfiles'][19] = x("File updated");
$langmsg['uploadedfiles'][20] = x("Thumbnails");
$langmsg['uploadedfiles'][21] = x("Details");
$langmsg['uploadedfiles'][22] = x("Categorie:");
$langmsg['uploadedfiles'][23] = x("Titel");
$langmsg['uploadedfiles'][24] = x("Bestandgroote");
$langmsg['uploadedfiles'][25] = x("Uploader");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("Voeg toe aan een categorie");
$langmsg['uploadedfiles'][28] = x("Verwijder uit een categorie");
$langmsg['uploadedfiles'][29] = x("Geuploade bestanden");
$langmsg['uploadedfiles'][30] = x("Een bestand met die naam bestaat al.");
$langmsg['uploadedfiles'][31] = x("Reset downloads:");
$langmsg['uploadedfiles'][32] = x("Alle categorie(s)");
$langmsg['uploadedfiles'][33] = x("downloadss");
$langmsg['uploadedfiles'][34] = x("Uploaded");

#-----ADMIN DATA
$langmsg['admindata'][0] = x("Help");
$langmsg['admindata'][1] = x("Nieuws toevoegen");
$langmsg['admindata'][2] = x("Prive berichten");
$langmsg['admindata'][3] = x("Verwijder nieuws");
$langmsg['admindata'][4] = x("Verander reacties");

#-----SUBMIT FIELDS
$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("Voorbeeld(zover mogelijk)");
$langmsg['submitfield'][2] = x("Voeg post toe");
$langmsg['submitfield'][3] = x("Opslaan");
$langmsg['submitfield'][4] = x("Zenden");
$langmsg['submitfield'][5] = x("Aanmaken");
$langmsg['submitfield'][6] = x("Update");
$langmsg['submitfield'][7] = x("Voeg toe");
$langmsg['submitfield'][8] = x("Verwijder");
$langmsg['submitfield'][9] = x("Herstel");

#-----SELECT FIELDS
$langmsg['selectfield'][0] = x("--Kies een optie--");
$langmsg['selectfield'][1] = x("Ja");
$langmsg['selectfield'][2] = x("Nee");
$langmsg['selectfield'][3] = x("Verwijder");
$langmsg['selectfield'][4] = x("Toestemming nodig");
$langmsg['selectfield'][5] = x("Toestaan van reacties");
$langmsg['selectfield'][6] = x("Verander goedkeuring");
$langmsg['selectfield'][7] = x("Goedkeuring");
$langmsg['selectfield'][8] = x("Reacties");
$langmsg['selectfield'][9] = x("Toestaan");
$langmsg['selectfield'][10] = x("Niet toegestaan");
$langmsg['selectfield'][11] = x("Datum");
$langmsg['selectfield'][12] = x("Title");
$langmsg['selectfield'][13] = x("Author");
$langmsg['selectfield'][14] = x("Category");
$langmsg['selectfield'][15] = x("# Comments");
$langmsg['selectfield'][16] = x("Mark as read");
$langmsg['selectfield'][17] = x("Mark as unread");
$langmsg['selectfield'][18] = x("Reset blocked count");
$langmsg['selectfield'][19] = x("Create copy");
$langmsg['selectfield'][20] = x("Reset View Count");
$langmsg['selectfield'][21] = x("Reset beoordelingen");
$langmsg['selectfield'][22] = x("Opslaan en doorgaan");

#-----Javascript
$langmsg['js'][0] = x("Weet u zeker dat u deze afbeelding uit de categorie wilt verwijderen?");
$langmsg['js'][1] = x("Weet u zeker dat u deze afbeelding wilt verwijderen?");
$langmsg['js'][2] = x("Weet u zeker dat u dit bericht wilt verwijderen?");
$langmsg['js'][3] = x("Weet u zeker dat u dit wilt wissen?");
$langmsg['js'][4] = x("weet u zeker dat u deze IP adressen wilt wissen?");
$langmsg['js'][5] = x("Weet u zeker dat u de IP adressen wilt resetten");
$langmsg['js'][6] = x("weet u zeker dat u dit wilt verwijderen?");
$langmsg['js'][7] = x("Weet u zeker dat u deze categorie wilt verwijderen?");
$langmsg['js'][8] = x("Weet u zeker dat u deze categorie en de daarbijhorende posten wilt verwijderen?");
$langmsg['js'][9] = x("Weet u zeker dat u deze catgerorieën wilt verwijderen?");
$langmsg['js'][10] = x("Weet u zeker dat u deze wilt wissen?");
$langmsg['js'][11] = x("Weet u zeker dat u deze acounts en posten wilt verwijderen?");
$langmsg['js'][12] = x("Wilt u zeker dat u deze posten wilt verwijderen?");
$langmsg['js'][13] = x("Vul een tekst in");
$langmsg['js'][14] = x("Tekst");
$langmsg['js'][15] = x("Gelieve een kleur in te vullen. Voorbeeld, rood, geel, blauwe (of zelfs hexadecimale waarden)");
$langmsg['js'][16] = x("blauw");
$langmsg['js'][17] = x("Voer de URL in");
$langmsg['js'][18] = x("Voer de tekst in die getoond moet worden.");
$langmsg['js'][19] = x("Link");
$langmsg['js'][20] = x("Lettertype grootte ?");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Tekst die getoond moet worden?");
$langmsg['js'][23] = x("E-mail adres");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Mail me!");
$langmsg['js'][26] = x("De tekst van het citaat?");
$langmsg['js'][27] = x("Citaat");
$langmsg['js'][28] = x("Weet u zeker dat u de reactie wilt verwijderen?");
$langmsg['js'][29] = x("Weet u zeker dat u de geselecteerde categorieën wilt verwijderen?");
$langmsg['js'][30] = x("Binnen halen van de smilies, even geduld.");
$langmsg['js'][31] = x("Weet u zeker dat u de geselecteerde bestanden wilt verwijderen?");
$langmsg['js'][32] = x("Weet u zeker dat u de geselecteerde smilies wilt verwijderen?");
$langmsg['js'][33] = x("Weet u zeker dat u de geselecteerde filter (s) te verwijderen?");


$langmsg['news'][0] = x("Geef een naam.");
$langmsg['news'][1] = x("Vul een bericht in.");
$langmsg['news'][2] = x("Ongeldige beveiligingssleutel");
$langmsg['news'][3] = x("Kies een andere naam.");
$langmsg['news'][4] = x("Ongeldige beveiligingssleutel");
$langmsg['news'][5] = x("Gevonden resultaten:");
$langmsg['news'][6] = x("Nieuwe registraties zijn uitgeschakeld.");
$langmsg['news'][7] = x("Uw account is aangemaakt, kunt u nu <a href=\"{adminpath}\">hier inloggen.</a>");
$langmsg['news'][8] = x("Geef een naam.");
$langmsg['news'][9] = x("Vul een bericht.");
$langmsg['news'][10] = x("Ongeldige beveiligingssleutel");
$langmsg['news'][11] = x("Kies een andere naam.");
$langmsg['news'][12] = x("Ongeldige beveiligingssleutel");
$langmsg['news'][13] = x("Dank u voor uw beoordeling.");
$langmsg['news'][14] = x("Je hebt al beoordeeld dit artikel.");
$langmsg['news'][15] = x("Naam");
$langmsg['news'][16] = x("E-mail:");
$langmsg['news'][17] = x("Vrienden E-mail:");
$langmsg['news'][18] = x("Bericht:");
$langmsg['news'][19] = x("Hey check out dit artikel heb ik gevonden!");
$langmsg['news'][20] = x("Stuur naar vriend");
$langmsg['news'][21] = x("E-mail verzonden.");
$langmsg['news'][22] = x("Vul uw naam in");
$langmsg['news'][23] = x("Vul uw e-mailadres in");
$langmsg['news'][24] = x("Geef een bericht");
$langmsg['news'][25] = x("Vul je vrienden e-mail adres");
$langmsg['news'][27] = x("Geef een geldig e-mailadres");
$langmsg['news'][28] = x("Vul uw vrienden geldig e-mailadres");
$langmsg['news'][29] = x("Voer een gebruikersnaam in.");
$langmsg['news'][30] = x("Deze gebruikersnaam is al genomen, kies dan een andere.");
$langmsg['news'][31] = x("Dat e-mailadres is al in gebruik, kies dan een andere.");
$langmsg['news'][32] = x("Geef een e-mailadres.");
$langmsg['news'][33] = x("Geef een geldig e-mailadres.");
$langmsg['news'][34] = x("Voer een wachtwoord.");
$langmsg['news'][35] = x("Bevestig uw wachtwoord.");
$langmsg['news'][36] = x("De ingevoerde wachtwoorden komen niet overeen.");
$langmsg['news'][37] = x("Ongeldige beveiligingssleutel.");
$langmsg['news'][38] = x("Even geduld");
$langmsg['news'][39] = x("Er was een probleem verzenden van uw bericht, neem contact op met de beheerder.");
$langmsg['news'][40] = x("Je moet ingelogd zijn om een reactie te plaatsen.");
$langmsg['news'][41] = x("Nieuwe reactie op {domain}");
$langmsg['news'][42] = x("Naam: {name} E-mail / URL: {email} IP: {ip} Bericht: {message}");
$langmsg['news'][43] = x("Nieuwe registratie op {domain}");
$langmsg['news'][44] = x("Naam: {name} E-mail: {email} IP: {ip} ");
$langmsg['news'][45] = x("seconden voor het verzenden van een ander bericht.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Naam");
$langmsg['news'][48] = x("E-mail / URL");
$langmsg['news'][49] = x("Bericht");
$langmsg['news'][50] = X("Voer een titel van het artikel");
$langmsg['news'][51] = x("Samenvatting");
$langmsg['news'][52] = x("Geen categorieën");
$langmsg['news'][53] = x("datum");
$langmsg['news'][54] = x("Datum dit artikel werd gepost");
$langmsg['news'][55] = x("Archief");

$langmsg['shortmonths'][0] = x("Jan");
$langmsg['shortmonths'][1] = x("Febr");
$langmsg['shortmonths'][2] = x("Mar");
$langmsg['shortmonths'][3] = x("April");
$langmsg['shortmonths'][4] = x("Kan");
$langmsg['shortmonths'][5] = x("Juni");
$langmsg['shortmonths'][6] = x("Juli");
$langmsg['shortmonths'][7] = x("Aug");
$langmsg['shortmonths'][8] = x("Sepr");
$langmsg['shortmonths'][9] = x("Okt");
$langmsg['shortmonths'][10] = x("Novr");
$langmsg['shortmonths'][11] = x("Dec");


$langmsg['months'][0] = x("Januari");
$langmsg['months'][1] = x("Februari");
$langmsg['months'][2] = x("Maart");
$langmsg['months'][3] = x("April");
$langmsg['months'][4] = x("Kan");
$langmsg['months'][5] = x("Juni");
$langmsg['months'][6] = x("Juli");
$langmsg['months'][7] = x("Augustus");
$langmsg['months'][8] = x("September");
$langmsg['months'][9] = x("Oktober");
$langmsg['months'][10] = x("November");
$langmsg['months'][11] = x("December");


$langmsg['search'][0] = x("Actieve nieuws");
$langmsg['search'][1] = x("Nieuws archief");
$langmsg['search'][2] = x("Nieuwste eerst");
$langmsg['search'][3] = x("Oudste eerst");
$langmsg['search'][4] = x("Zoeken");
$langmsg['search'][5] = x("Datumbereik");


$langmsg['install'][0] = x("Database Connection Info");
$langmsg['install'][1] = x("Voer uw MySQL server info hieronder.");
$langmsg['install'][2] = x("Server:");
$langmsg['install'][3] = x("(Meestal localhost)");
$langmsg['install'][4] = x("Gebruikersnaam:");
$langmsg['install'][5] = x("Wachtwoord:");
$langmsg['install'][6] = x("Database:");
$langmsg['install'][7] = x("Verbinding testen");
$langmsg['install'][8] = x("Verbinding maken met server:");
$langmsg['install'][9] = x("Selecteren van database:");
$langmsg['install'][10] = x("Kan niet schrijven naar db.php, CHMOD dit bestand naar 777");
$langmsg['install'][11] = x("Accountgegevens");
$langmsg['install'][12] = x("Vul uw account gegevens hieronder. Deze zullen worden worden gebruikt om in te loggen.");
$langmsg['install'][13] = x("E-mail:");
$langmsg['install'][14] = x("Bevestig wachtwoord:");
$langmsg['install'][15] = x("Doorgaan");
$langmsg['install'][16] = x("Voer een gebruikersnaam in");
$langmsg['install'][17] = x("Vul een e-mailadres");
$langmsg['install'][18] = x("Geef uw wachtwoord");
$langmsg['install'][19] = x("Druk op Install om de installatie te voltooien");
$langmsg['install'][20] = x("Uw wachtwoorden komen niet overeen");
$langmsg['install'][21] = x("Installeer");
$langmsg['install'][22] = x("Finaliseren installatie");
$langmsg['install'][23] = x("SUCCES!");
$langmsg['install'][24] = x("");
$langmsg['install'][25] = x("Inloggen op de admin gebied.");
$langmsg['install'][26] = x("Port:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Extension:");
$langmsg['install'][29] = x("(leeg laten voor standaard)");
$langmsg['install'][30] = x("Het installeren van ... Even geduld aub.");
$langmsg['install'][31] = x("De mysqli_connect functie werd niet gevonden.");
$langmsg['install'][32] = x("De pdo_mysql functie werd niet gevonden.");
?>