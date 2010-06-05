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
#   LANGUAGE    Italian                                 #
#   VERSION     3.6                                     #
#   AUTHOR      chris@network-13.com                    #
#                                                       #
#   Any words you see wrapped in { } braces,            #
#   for example {totalnews} need to be left like that.  #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

$langmsg['menu'][0] = x("Aggiungi News");
$langmsg['menu'][1] = x("Modifica News");
$langmsg['menu'][2] = x("Archivi");
$langmsg['menu'][3] = x("Nuovo messaggio");
$langmsg['menu'][4] = x("Posta in arrivo");
$langmsg['menu'][5] = x("In uscita");
$langmsg['menu'][6] = x("Conti");
$langmsg['menu'][7] = x("Livelli di accesso");
$langmsg['menu'][8] = x("Banned IPs");
$langmsg['menu'][9] = x("Categorie");
$langmsg['menu'][10] = x("Image Upload");
$langmsg['menu'][11] = x("Personale");
$langmsg['menu'][12] = x("Profilo");
$langmsg['menu'][13] = x("Feed RSS");
$langmsg['menu'][14] = x("Smilies");
$langmsg['menu'][15] = x("Sistema");
$langmsg['menu'][16] = x("Modelli");
$langmsg['menu'][17] = x("Word Filtri");
$langmsg['menu'][18] = x("Casa");
$langmsg['menu'][19] = x("News");
$langmsg['menu'][20] = x("Messaggio");
$langmsg['menu'][21] = x("Opzioni");
$langmsg['menu'][22] = x("Aiuto");
$langmsg['menu'][23] = x("Logout");
$langmsg['menu'][24] = x("File Upload");


$langmsg['home'][0] = x("Stats news globale al di sotto.");
$langmsg['home'][1] = x("Benvenuto");
$langmsg['home'][2] = x("L'impostazione PHP 'magic_quotes_gpc' è stato rilevato come attivata. Si consiglia di disattivare questa impostazione.");
$langmsg['home'][3] = x("L'impostazione PHP 'register_globals' è stato rilevato come attivata. Si consiglia di disattivare questa in quanto può causare problemi di sicurezza e gli errori si verificano.");
$langmsg['home'][4] = x("Install.php è stato rilevato. Si prega di cancellare questo file.");
$langmsg['home'][5] = x("Install.php non possono essere eliminati, si prega di cancellare questo file manualmente");
$langmsg['home'][6] = x("Total News:");
$langmsg['home'][7] = x("Totale Commenti:");
$langmsg['home'][8] = x("Totale Utenti:");
$langmsg['home'][9] = x("Totale Smilies:");
$langmsg['home'][10] = x("Totale Filtri:");
$langmsg['home'][11] = x("Numero totale di categorie:");
$langmsg['home'][12] = x("Totale Modelli:");
$langmsg['home'][13] = x("Totale Livelli di accesso:");
$langmsg['home'][14] = x("La connessione al database:");
$langmsg['home'][15] = x("Ottimizzare tutte le tabelle:");
$langmsg['home'][16] = x("Versione corrente:");
$langmsg['home'][17] = x("Ultima versione:");
$langmsg['home'][18] = x("Visualizza i log di accesso");
$langmsg['home'][19] = x("Query-time:");
$langmsg['home'][20] = x("Messaggi non letti");
$langmsg['home'][21] = x("Provare a cancellare questo file automaticamente?");
$langmsg['home'][22] = x("secondo");
$langmsg['home'][23] = x("Totale Immagini");
$langmsg['home'][24] = x("Total Files");
$langmsg['home'][25] = x("Totale Feed RSS");


$langmsg['addnews'][0] = x("Anteprima news");
$langmsg['addnews'][1] = x("Inserisci un titolo");
$langmsg['addnews'][2] = x("Si prega di scegliere se questo post permetterà commenti o non");
$langmsg['addnews'][3] = x("Aggiungi News");
$langmsg['addnews'][4] = x("Si prega di selezionare una categoria");


$langmsg['editnews'][0] = x("Modifica News");
$langmsg['editnews'][1] = x("Risultati");
$langmsg['editnews'][2] = x("Opzioni");
$langmsg['editnews'][3] = x("Importo per visualizzare");
$langmsg['editnews'][4] = x("Ordina per");
$langmsg['editnews'][5] = x("Ordine");
$langmsg['editnews'][7] = x("Titolo");
$langmsg['editnews'][8] = x("Autore");
$langmsg['editnews'][9] = x("Categorie");
$langmsg['editnews'][10] = x("Data");
$langmsg['editnews'][11] = x("Approvazione");
$langmsg['editnews'][12] = x("Commenti");
$langmsg['editnews'][13] = x("[show]");
$langmsg['editnews'][14] = x("Approvato");
$langmsg['editnews'][15] = x("Unapproved");
$langmsg['editnews'][16] = x("News ha aggiunto.");
$langmsg['editnews'][17] = x("Selected posti soppressi.");
$langmsg['editnews'][18] = x("Posti selezionati aggiornato.");
$langmsg['editnews'][19] = x("Notizie aggiornate.");
$langmsg['editnews'][20] = x("Disabili");
$langmsg['editnews'][21] = x("News Stories.");
$langmsg['editnews'][22] = x("in totale.");
$langmsg['editnews'][23] = x("Reset View count a 0 per l'articolo selezionato (s)");
$langmsg['editnews'][24] = x("Valutazioni di reset per l'articolo selezionato (s)");


$langmsg['newsform'][0] = x("Aggiungi il tuo post news qui di seguito.");
$langmsg['newsform'][1] = x("Titolo:");
$langmsg['newsform'][2] = x("Categorie:");
$langmsg['newsform'][3] = x("Short Story:");
$langmsg['newsform'][4] = x("Storia:");
$langmsg['newsform'][5] = x("HTML Disabled");
$langmsg['newsform'][6] = x("HTML Abilitato");
$langmsg['newsform'][7] = x("Commenti:");
$langmsg['newsform'][8] = x("Toggle data");
$langmsg['newsform'][9] = x("Toggle racconto breve");
$langmsg['newsform'][16] = x("Data:");
$langmsg['newsform'][17] = x("Toggle archivio");
$langmsg['newsform'][18] = x("Mai archivio");
$langmsg['newsform'][19] = x("File Upload");
$langmsg['newsform'][20] = x("Download");
$langmsg['newsform'][21] = x("Caricato");


$langmsg['editcomments'][0] = x("Modifica Commenti");
$langmsg['editcomments'][1] = x("Modificare il commento qui sotto.");
$langmsg['editcomments'][2] = x("Autore:");
$langmsg['editcomments'][3] = x("Email:");
$langmsg['editcomments'][4] = x("Messaggio:");
$langmsg['editcomments'][5] = x("Commento aggiornato.");
$langmsg['editcomments'][6] = x("commenti eliminati.");
$langmsg['editcomments'][7] = x("commenti aggiornati.");
$langmsg['editcomments'][8] = x("commenti in totale.");
$langmsg['editcomments'][9] = x("Messaggio");
$langmsg['editcomments'][10] = x("Data");
$langmsg['editcomments'][11] = x("Approvazione");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Approvato");
$langmsg['editcomments'][14] = x("Unapproved");
$langmsg['editcomments'][15] = x("Location:");


$langmsg['privmsgs'][0] = x("Messaggi Privati");
$langmsg['privmsgs'][1] = x("Posta in arrivo");
$langmsg['privmsgs'][2] = x("In uscita");
$langmsg['privmsgs'][3] = x("Nuovo messaggio");
$langmsg['privmsgs'][4] = x("Hai");
$langmsg['privmsgs'][5] = x("Titolo");
$langmsg['privmsgs'][6] = x("Da");
$langmsg['privmsgs'][7] = x("Inviato");
$langmsg['privmsgs'][8] = x("A");
$langmsg['privmsgs'][9] = x("Rispondi a questo messaggio");
$langmsg['privmsgs'][10] = x("Nuovo messaggio privato.");
$langmsg['privmsgs'][11] = x("Inviare a:");
$langmsg['privmsgs'][12] = x("Titolo:");
$langmsg['privmsgs'][13] = x("Messaggio:");
$langmsg['privmsgs'][14] = x("Esempio 'user1, user2, user3'");
$langmsg['privmsgs'][15] = x("L'anteprima del messaggio.");
$langmsg['privmsgs'][16] = x("Messaggio inviato agli utenti che seguono.");
$langmsg['privmsgs'][17] = x("Si prega di inserire un utente di inviare questo messaggio.");
$langmsg['privmsgs'][18] = x("Si prega di inserire un titolo per questo messaggio.");
$langmsg['privmsgs'][19] = x("Si prega di inserire un messaggio.");
$langmsg['privmsgs'][20] = x("Messaggi eliminati.");
$langmsg['privmsgs'][21] = x("messaggi non letti.");
$langmsg['privmsgs'][22] = x("messaggi in totale.");


$langmsg['options'][0] = x("Opzioni");


$langmsg['bannedips'][0] = x("Banned IPs");
$langmsg['bannedips'][1] = x("Banned IPs.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Quantità di volte bloccato");
$langmsg['bannedips'][4] = x("Aggiungere un nuovo indirizzo IP.");
$langmsg['bannedips'][5] = x("Banned messaggio. (html è attivata)");
$langmsg['bannedips'][6] = x("Indirizzo IP:");
$langmsg['bannedips'][7] = x("Tale indirizzo IP è già vietato.");
$langmsg['bannedips'][8] = x("Indirizzo IP vietato.");
$langmsg['bannedips'][9] = x("Indirizzi IP soppresso.");
$langmsg['bannedips'][10] = x("Gli indirizzi IP sono state ripristinate.");
$langmsg['bannedips'][11] = x("Messaggio Banned aggiornato.");


$langmsg['cats'][0] = x("Categorie");
$langmsg['cats'][1] = x("Categorie.");
$langmsg['cats'][2] = x("Nome");
$langmsg['cats'][3] = x("Articoli");
$langmsg['cats'][4] = x("Creare una nuova categoria.");
$langmsg['cats'][5] = x("Nome:");
$langmsg['cats'][6] = x("Le seguenti categorie sono stati eliminati:");
$langmsg['cats'][7] = x("Scegliere un altro nome.");
$langmsg['cats'][8] = x("Categoria creato.");
$langmsg['cats'][9] = x("Categoria aggiornato.");
$langmsg['cats'][10] = x("Modificare la vostra categoria di seguito.");
$langmsg['cats'][11] = x("Immagini");
$langmsg['cats'][12] = x("Files");
$langmsg['cats'][13] = x("Una voce con questo nome esiste già, si prega di scegliere un altro.");


$langmsg['img'][0] = x("Image Upload");
$langmsg['img'][1] = x("Carica una nuova immagine");
$langmsg['img'][2] = x("Carica File");
$langmsg['img'][3] = x("Immagini in totale");
$langmsg['img'][4] = x("Scegli un'immagine:");
$langmsg['img'][5] = x("image (s) ha cancellato.");
$langmsg['img'][6] = x("Image Uploaded");
$langmsg['img'][7] = x("Si è verificato un errore durante il caricamento del file, si prega di riprovare.");
$langmsg['img'][8] = x("Estensione del file non valido.");
$langmsg['img'][9] = x("Non valido di immagine.");
$langmsg['img'][10] = x("Immagine rimossa dalla categoria.");
$langmsg['img'][11] = x("Image (s) aggiunto alla categoria.");
$langmsg['img'][12] = x("Nome file:");
$langmsg['img'][13] = x("Seleziona una categoria:");
$langmsg['img'][14] = x("Modificare un'immagine");
$langmsg['img'][15] = x("Titolo:");
$langmsg['img'][16] = x("Descrizione:");
$langmsg['img'][17] = x("Aggiornamento Immagine");
$langmsg['img'][18] = x("Non valido di immagine");
$langmsg['img'][19] = x("Immagine aggiornata");
$langmsg['img'][20] = x("Miniature");
$langmsg['img'][21] = x("Dettagli");
$langmsg['img'][22] = x("Categoria:");
$langmsg['img'][23] = x("Filename");
$langmsg['img'][24] = x("Dimensioni");
$langmsg['img'][25] = x("Uploader");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("Aggiungi alla categoria");
$langmsg['img'][28] = x("Rimuovi dalla categoria");
$langmsg['img'][29] = x("Caricato le immagini");
$langmsg['img'][30] = x("Un file con quel nome esiste già.");
$langmsg['img'][31] = x("Tutte le categorie");
$langmsg['img'][32] = x("In grado di scrivere nella directory di upload. CHMOD questa directory a 777");


$langmsg['personal'][0] = x("Opzioni personali");
$langmsg['personal'][1] = x("Modifica le tue informazioni account qui di seguito.");
$langmsg['personal'][2] = x("Personal impostazioni per");
$langmsg['personal'][3] = x("Avatar:");
$langmsg['personal'][4] = x("Indirizzo e-mail:");
$langmsg['personal'][5] = x("Messaggio di avviso:");
$langmsg['personal'][6] = x("Get avvertiti dei messaggi non letti il login iniziale?");
$langmsg['personal'][7] = x("Nuova Password:");
$langmsg['personal'][8] = x("(lasciare vuoto per mantenere in corso)");
$langmsg['personal'][9] = x("Conferma password:");
$langmsg['personal'][10] = x("Un indirizzo e-mail deve essere inserito.");
$langmsg['personal'][11] = x("Impostazioni aggiornate.");
$langmsg['personal'][12] = x("Le password non corrispondono.");


$langmsg['login'][0] = x("Entra nel sito");
$langmsg['login'][1] = x("Nome:");
$langmsg['login'][2] = x("Password:");
$langmsg['login'][3] = x("Hai dimenticato la password?");
$langmsg['login'][4] = x("Ricordati di me");
$langmsg['login'][5] = x("Chiave di sicurezza:");
$langmsg['login'][6] = x("Accesso");
$langmsg['login'][7] = x("Chiave di sicurezza non valido");
$langmsg['login'][8] = x("Nome non valido o password");
$langmsg['login'][9] = x("Questo tipo di codice qui sotto");


$langmsg['profile'][0] = x("Modifica profilo");
$langmsg['profile'][1] = x("Modifica il tuo profilo qui di seguito.");
$langmsg['profile'][2] = x("Nome:");
$langmsg['profile'][3] = x("Età:");
$langmsg['profile'][4] = x("Location:");
$langmsg['profile'][5] = x("Sesso:");
$langmsg['profile'][6] = x("Profilo di foto:");
$langmsg['profile'][7] = x("Homepage:");
$langmsg['profile'][8] = x("Interessi:");
$langmsg['profile'][9] = x("Hobby:");
$langmsg['profile'][10] = x("Occupazione:");
$langmsg['profile'][11] = x("Citazione preferita:");
$langmsg['profile'][12] = x("Maschile");
$langmsg['profile'][13] = x("Femminile");
$langmsg['profile'][14] = x("Profilo aggiornato.");


$langmsg['accounts'][0] = x("Conti");
$langmsg['accounts'][1] = x("Conti.");
$langmsg['accounts'][2] = x("Username");
$langmsg['accounts'][3] = x("Accesso a livello di");
$langmsg['accounts'][4] = x("Numero di posti");
$langmsg['accounts'][5] = x("Numero di commenti");
$langmsg['accounts'][6] = x("Creare un nuovo account.");
$langmsg['accounts'][7] = x("Nome account:");
$langmsg['accounts'][8] = x("Email:");
$langmsg['accounts'][9] = x("Nuova Password:");
$langmsg['accounts'][10] = x("Conferma Password:");
$langmsg['accounts'][11] = x("Livello di accesso:");
$langmsg['accounts'][12] = x("Nuovo account.");
$langmsg['accounts'][13] = x("Modificare l'account di seguito.");
$langmsg['accounts'][14] = x("Un indirizzo e-mail deve essere inserito.");
$langmsg['accounts'][15] = x("Conto aggiornato.");
$langmsg['accounts'][16] = x("Le password non corrispondono.");
$langmsg['accounts'][17] = x("Un nome di account deve essere inserito.");
$langmsg['accounts'][18] = x("Nome account già esistente. Si prega di scegliere un altro.");
$langmsg['accounts'][19] = x("La password deve essere immessa.");
$langmsg['accounts'][20] = x("Account creato.");
$langmsg['accounts'][21] = x("I conti sono stati soppressi i seguenti:");
$langmsg['accounts'][22] = x("Non è possibile cancellare il proprio account.");
$langmsg['accounts'][23] = x("(Lascia in bianco per mantenere in corso)");
$langmsg['accounts'][24] = x("Un conto è già utilizzando l'indirizzo e-mail, si prega di scegliere un altro.");
$langmsg['accounts'][25] = x("Si prega di inserire un nome account");


$langmsg['access'][0] = x("Livelli di accesso");
$langmsg['access'][1] = x("Creare un nuovo livello di accesso.");
$langmsg['access'][2] = x("Nome:");
$langmsg['access'][3] = x("Che le sezioni possono accedere questo livello?");
$langmsg['access'][4] = x("Conti:");
$langmsg['access'][5] = x("Livelli di accesso:");
$langmsg['access'][6] = x("Banned IPs:");
$langmsg['access'][7] = x("Categorie:");
$langmsg['access'][8] = x("Commenti:");
$langmsg['access'][9] = x("Aiuto:");
$langmsg['access'][10] = x("Image Upload:");
$langmsg['access'][11] = x("News:");
$langmsg['access'][12] = x("Persional Opzioni:");
$langmsg['access'][13] = x("Messaggi Privati:");
$langmsg['access'][14] = x("Profilo:");
$langmsg['access'][15] = x("Feed RSS:");
$langmsg['access'][16] = x("Smilies:");
$langmsg['access'][17] = x("Di configurazione di sistema:");
$langmsg['access'][18] = x("Modelli:");
$langmsg['access'][19] = x("Word Filtri:");
$langmsg['access'][20] = x("Quali categorie possono questo post nel livello di accesso?");
$langmsg['access'][21] = x("Tutti:");
$langmsg['access'][22] = x("Che distacca questo livello può modificare?");
$langmsg['access'][23] = x("Admin (tutto):");
$langmsg['access'][24] = x("Mod (Own + deputati):");
$langmsg['access'][25] = x("Membri (proprie):");
$langmsg['access'][26] = x("Sono i post di questo livello di accesso automaticamente approvato?");
$langmsg['access'][27] = x("Questo livello di accesso può approvare i post?");
$langmsg['access'][28] = x("È possibile utilizzare questo livello di accesso HTML?");
$langmsg['access'][29] = x("Consentire distacco senza selezionare una categoria?");
$langmsg['access'][30] = x("Livelli di accesso da:");
$langmsg['access'][31] = x("I seguenti livelli di accesso non sono stati eliminati perché hanno 1 o più conti loro assegnati:");
$langmsg['access'][32] = x("Modificare il livello di accesso di seguito.");
$langmsg['access'][33] = x("Si prega di inserire un nome per questo livello di accesso.");
$langmsg['access'][34] = x("Il livello di accesso aggiornato.");
$langmsg['access'][35] = x("Un livello di accesso con questo nome esiste già, si prega di scegliere un altro.");
$langmsg['access'][36] = x("Si prega di selezionare i post di questo livello può modificare.");
$langmsg['access'][37] = x("Si prega di selezionare se i post di questo livello di accesso get auto omologato");
$langmsg['access'][38] = x("Si prega di scegliere se questo livello di accesso può approvare i post");
$langmsg['access'][39] = x("Si prega di scegliere se questo livello di accesso è possibile utilizzare HTML");
$langmsg['access'][40] = x("Si prega di scegliere se questo livello di accesso di poter postare senza selezionare una categoria");
$langmsg['access'][41] = x("Il livello di accesso creato.");
$langmsg['access'][42] = x("Livelli di accesso.");
$langmsg['access'][43] = x("Nome");
$langmsg['access'][44] = x("Access");
$langmsg['access'][45] = x("Conti");
$langmsg['access'][46] = x("Membri");
$langmsg['access'][47] = x("Moderatore");
$langmsg['access'][48] = x("Administrator");
$langmsg['access'][49] = x("File Upload");
$langmsg['access'][50] = x("Questo livello di accesso è possibile visualizzare gli indirizzi IP degli utenti?");
$langmsg['access'][51] = x("Quali file e immagini possono questo livello di accesso modifica?");
$langmsg['access'][52] = x("Proprio");
$langmsg['access'][53] = x("Tutto");


$langmsg['accesslogs'][0] = x("Accedere ai registri");
$langmsg['accesslogs'][1] = x("Username");
$langmsg['accesslogs'][2] = x("Tentativo");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Data");
$langmsg['accesslogs'][5] = x("Accedere ai registri per");
$langmsg['accesslogs'][6] = x("Successo");
$langmsg['accesslogs'][7] = x("Usuccessful");


$langmsg['filters'][0] = x("Word Filtri");
$langmsg['filters'][1] = x("Filtro aggiunto.");
$langmsg['filters'][2] = x("Filtro rimosso.");
$langmsg['filters'][3] = x("Tutte le parole qui di seguito saranno filtrati da tutti i commenti.");
$langmsg['filters'][4] = x("Filtrata Word");
$langmsg['filters'][5] = x("Sostituire con");
$langmsg['filters'][6] = x("Eliminare");


$langmsg['rss'][0] = x("Feed RSS");
$langmsg['rss'][1] = x("Modificare le impostazioni feed RSS qui sotto");
$langmsg['rss'][2] = x("La posizione notizia è dove si metterà in mostra le vostre notizie, per esempio http://yourdomain.com/ o http://yourdomain.com/index");
$langmsg['rss'][3] = x("Feed nome:");
$langmsg['rss'][4] = x("News location:");
$langmsg['rss'][5] = x("Titolo del tuo feed RSS:");
$langmsg['rss'][6] = x("Descrizione del vostro feed RSS:");
$langmsg['rss'][7] = x("Codifica dei caratteri:");
$langmsg['rss'][8] = x("Lingua:");
$langmsg['rss'][9] = x("Quantità di post da visualizzare:");
$langmsg['rss'][10] = x("0 = tutte");
$langmsg['rss'][11] = x("Categorie per visualizzare:");
$langmsg['rss'][12] = x("Mostra i messaggi che non sono stati assegnati una categoria?");
$langmsg['rss'][13] = x("Rss Codice:");
$langmsg['rss'][14] = x("Modifica come il vostro feed è visualizzato");
$langmsg['rss'][15] = x("Visualizza il titolo della storia.");
$langmsg['rss'][16] = x("Mostra la storia breve della notizia.");
$langmsg['rss'][17] = x("Mostra la storia delle notizie.");
$langmsg['rss'][18] = x("Mostra le categorie di ogni post è stato assegnato.");
$langmsg['rss'][19] = x("Mostra l'URL di un determinato posto.");
$langmsg['rss'][20] = x("Mostra la data in cui il racconto è stato pubblicato il.");
$langmsg['rss'][21] = x("Mostra l'impostazione del fuso orario.");
$langmsg['rss'][22] = x("Mostra il timestamp di ogni post.");
$langmsg['rss'][23] = x("Mostra l'autore della storia.");
$langmsg['rss'][24] = x("Mostra gli utenti avatar se ne hanno uno.");
$langmsg['rss'][25] = x("Mostra l'ID univoco ogni storia ha.");
$langmsg['rss'][26] = x("Mostra la quantità di commenti per ogni post news.");
$langmsg['rss'][27] = x("Si prega di inserire un feedname");
$langmsg['rss'][28] = x("Si prega di inserire una posizione di notizie");
$langmsg['rss'][29] = x("Inserisci un titolo");
$langmsg['rss'][30] = x("Si prega di inserire una descrizione");
$langmsg['rss'][31] = x("Si prega di inserire la codifica dei caratteri");
$langmsg['rss'][32] = x("Si prega di inserire una lingua");
$langmsg['rss'][33] = x("Si prega di inserire un importo per la visualizzazione");
$langmsg['rss'][34] = x("Feed RSS creato");
$langmsg['rss'][35] = x("Un feed con questo nome esiste già, si prega di scegliere un altro");
$langmsg['rss'][36] = x("Feed RSS aggiornati");
$langmsg['rss'][37] = x("Feed RSS");
$langmsg['rss'][38] = x("Feed RSS (s) ha cancellato.");
$langmsg['rss'][39] = x("Nome");
$langmsg['rss'][40] = x("Categorie");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Creare un nuovo feed RSS.");
$langmsg['rss'][43] = x("Si vede il titolo amichevole della storia");


$langmsg['smilies'][0] = x("Smilies");
$langmsg['smilies'][1] = x("Questo è utile se si desidera aggiornare la posizione di tutte le faccine in una sola volta.");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("Sostituire:");
$langmsg['smilies'][4] = x("Sostituire con:");
$langmsg['smilies'][5] = x("Tutti i percorsi aggiornati.");
$langmsg['smilies'][6] = x("Creare un nuovo smilie");
$langmsg['smilies'][7] = x("Percorso:");
$langmsg['smilies'][8] = x("Keycode:");
$langmsg['smilies'][9] = x("Si prega di inserire il percorso per lo smiley.");
$langmsg['smilies'][10] = x("Si prega di inserire un keycode per questo smiley.");
$langmsg['smilies'][11] = x("Keycode già in uso. Scegliere un keycode diverso.");
$langmsg['smilies'][12] = x("Smiley ha aggiunto.");
$langmsg['smilies'][13] = x("Sei sicuro di voler cancellare questo smiley?");
$langmsg['smilies'][14] = x("Smiley soppresso.");
$langmsg['smilies'][15] = x("Modificare lo smiley di seguito");
$langmsg['smilies'][16] = x("Smiley:");
$langmsg['smilies'][17] = x("Smiley aggiornato.");
$langmsg['smilies'][18] = x("Smilies sono stati eliminati");
$langmsg['smilies'][19] = x("Si prega di selezionare quale smiley che si desidera modificare.");
$langmsg['smilies'][20] = x("Smiley");
$langmsg['smilies'][21] = x("Inserire un nuovo smiley.");
$langmsg['smilies'][22] = x("Percorso di aggiornamento di tutte le faccine");


$langmsg['system'][0] = x("System Configuration");
$langmsg['system'][1] = x("Modificare le configurazioni di sistema.");
$langmsg['system'][2] = x("News");
$langmsg['system'][3] = x("Quantità di notizie per pagina:");
$langmsg['system'][4] = x("Quale ordine la notizia viene visualizzato in:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("Data e formato ora per le notizie:");
$langmsg['system'][8] = x("Vedi qui");
$langmsg['system'][9] = x("Show avatars:");
$langmsg['system'][10] = x("Delimitatore per separare le categorie per la visualizzazione news:");
$langmsg['system'][11] = x("Commenti");
$langmsg['system'][12] = x("Quantità di commenti per pagina:");
$langmsg['system'][13] = x("Quali sono i commenti sono visualizzati in ordine:");
$langmsg['system'][14] = x("Data e formato ora per i commenti:");
$langmsg['system'][15] = x("La lunghezza massima dei commenti:");
$langmsg['system'][16] = x("Mostra commenti in una nuova finestra:");
$langmsg['system'][17] = x("Tempo di ritardo dopo la pubblicazione di commenti (protezione antispam):");
$langmsg['system'][18] = x("Secondi");
$langmsg['system'][19] = x("Spam messaggio:");
$langmsg['system'][20] = x("Nuovo messaggio commento:");
$langmsg['system'][21] = x("Messaggio di approvazione Nuovo commento:");
$langmsg['system'][22] = x("Immagine di controllo Usa il modulo commenti:");
$langmsg['system'][23] = x("Friendly URLs");
$langmsg['system'][24] = x("Consentire URL friendly:");
$langmsg['system'][25] = x("Estensione del file:");
$langmsg['system'][26] = x("Prefisso:");
$langmsg['system'][27] = x("Directory filename:");
$langmsg['system'][28] = x("Registrazione");
$langmsg['system'][29] = x("Consentire agli utenti di registrarsi:");
$langmsg['system'][30] = x("Il livello di accesso per i nuovi utenti:");
$langmsg['system'][31] = x("Altro");
$langmsg['system'][32] = x("Fuso orario:");
$langmsg['system'][33] = x("Ammessi i tipi di file di immagini caricate:");
$langmsg['system'][34] = x("Percorso Image Upload:");
$langmsg['system'][35] = x("Nessun messaggio di errore di accesso:");
$langmsg['system'][36] = x("Impostazioni aggiornate.");
$langmsg['system'][37] = x("Ritardo di tempo dopo l'utilizzo di inviare a (protezione antispam):");
$langmsg['system'][38] = x("Notifiche");
$langmsg['system'][39] = x("Ricevere notifiche email di nuovi commenti:");
$langmsg['system'][40] = x("Ricevere notifiche e-mail delle nuove immatricolazioni:");
$langmsg['system'][41] = x("Consentire solo agli utenti registrati di commentare:");
$langmsg['system'][42] = x("Inviare le notifiche a questo indirizzo email:");
$langmsg['system'][43] = x("Ammessi i tipi di file dei file caricati:");
$langmsg['system'][44] = x("Ricevere notifiche e-mail di posti di notizie non approvate:");
$langmsg['system'][45] = x("Chiave pubblica");
$langmsg['system'][46] = x("Chiave privata");
$langmsg['system'][47] = x("Script percorso");
$langmsg['system'][48] = x("Consentire agli utenti registrati di cancellare i propri commenti:");
$langmsg['system'][49] = x("Verifica Usa immagine sul form di login indice:");
$langmsg['system'][50] = x("Immagine di controllo Usa il modulo di iscrizione:");
$langmsg['system'][51] = x("Formato data e ora per i file:");
$langmsg['system'][52] = x("Mostra 'Powered by' sotto la vostra news:");


$langmsg['recover'][0] = x("Password Recovery");
$langmsg['recover'][1] = x("Inserisci l'indirizzo email dell'account che si desidera reimpostare la password.");
$langmsg['recover'][2] = x("Email:");
$langmsg['recover'][3] = x("Voi o qualcuno ha chiesto di reimpostare la password, segui il link qui sotto per farlo.");
$langmsg['recover'][4] = x("Clicca qui per reimpostare la password");
$langmsg['recover'][5] = x("Una e-mail è stata inviata a");
$langmsg['recover'][6] = x("Un account con e-mail che non esiste, si prega di contattare l'amministratore.");
$langmsg['recover'][7] = x("Nuova Password");
$langmsg['recover'][8] = x("Inserisci la tua nuova password qui sotto.");
$langmsg['recover'][9] = x("In grado di inviare una e-mail di recupero, si prega di contattare l'amministratore di sistema.");
$langmsg['recover'][10] = x("Conferma Password:");
$langmsg['recover'][11] = x("Le password non corrispondono.");
$langmsg['recover'][12] = x("La tua password è stata aggiornata.");
$langmsg['recover'][13] = x("con ulteriori istruzioni su come recuperare il tuo account.");


$langmsg['templates'][0] = x("Modelli");
$langmsg['templates'][1] = x("Creare un nuovo modello.");
$langmsg['templates'][2] = x("Nome:");
$langmsg['templates'][3] = x("Cambiamenti come la vostra news viene visualizzato.");
$langmsg['templates'][4] = x("Visualizza il titolo della storia.");
$langmsg['templates'][5] = x("Mostra la storia breve della notizia.");
$langmsg['templates'][6] = x("Mostra la storia delle notizie.");
$langmsg['templates'][7] = x("Mostra la data in cui il racconto è stato pubblicato il.");
$langmsg['templates'][8] = x("Mostra le categorie di ogni post è stato assegnato.");
$langmsg['templates'][9] = x("Mostra l'autore della storia.");
$langmsg['templates'][10] = x("Mostra gli utenti avatar se ne hanno uno.");
$langmsg['templates'][11] = x("Mostra l'ID univoco ogni storia ha.");
$langmsg['templates'][12] = x("Mostra l'indirizzo IP dell'autore. (Mostra solo se si è effettuato l'accesso)");
$langmsg['templates'][13] = x("Mostra i link per leggere l'intero post");
$langmsg['templates'][14] = x("Mostrerà il tuo indirizzo e-mail.");
$langmsg['templates'][15] = x("Creerà un link al tuo indirizzo email.");
$langmsg['templates'][16] = x("Creerà un link al tuo profilo.");
$langmsg['templates'][17] = x("Mostra la quantità di commenti per ogni post news.");
$langmsg['templates'][18] = x("Creerà un link ai commenti.");
$langmsg['templates'][19] = x("Niente messo tra questi tag verranno visualizzati solo se logged");
$langmsg['templates'][20] = x("Path to smilies");
$langmsg['templates'][21] = x("Commenti");
$langmsg['templates'][22] = x("Cambia il modo i commenti sono visualizzati.");
$langmsg['templates'][23] = x("Consente di visualizzare l'autore del commento.");
$langmsg['templates'][24] = x("Mostra il messaggio.");
$langmsg['templates'][25] = x("Mostra gli utenti avatar se ne hanno uno.");
$langmsg['templates'][26] = x("Mostra l'indirizzo IP dell'autore. (Mostra solo se si è effettuato l'accesso)");
$langmsg['templates'][27] = x("Mostra l'ID univoco ogni commento è.");
$langmsg['templates'][28] = x("Mostra l'indirizzo email dell'utente che ha commentato.");
$langmsg['templates'][29] = x("Creerà un collegamento alla posta elettronica degli utenti.");
$langmsg['templates'][30] = x("Mostra la data in cui il commento è stato pubblicato il.");
$langmsg['templates'][31] = x("Niente messo tra questi tag verranno visualizzati solo se logged");
$langmsg['templates'][32] = x("Commenti Form");
$langmsg['templates'][33] = x("E 'importante quando si modifica questo per mantenere tutti i nomi dei campi di input e gli ID lo stesso altrimenti non funzionerà. Da notare anche la forma onsubmit useajax attributo ='', sì o no, se determina AJAX viene utilizzato quando l'utente invia un commento.");
$langmsg['templates'][34] = x("Mostra l'ID del post news.");
$langmsg['templates'][35] = x("Consente di visualizzare l'ID di categoria del post news.");
$langmsg['templates'][36] = x("Mostrerà il tuo nome utente, se logged");
$langmsg['templates'][37] = x("Mostrerà la tua email se logged");
$langmsg['templates'][38] = x("Mostrerà il messaggio.");
$langmsg['templates'][39] = x("Mostrerà tutte le faccine.");
$langmsg['templates'][40] = x("News Impaginazione");
$langmsg['templates'][44] = x("Commenti Impaginazione");
$langmsg['templates'][45] = x("Mostra il link precedente, se non vi è alcuna.");
$langmsg['templates'][46] = x("Mostra il collegamento successivo, se non vi è alcuna.");
$langmsg['templates'][47] = x("Mostrerà la quantità di pagine, Ex: 1 2 3 4.");
$langmsg['templates'][48] = x("Profili");
$langmsg['templates'][49] = x("Come modificare i profili degli utenti vengono visualizzati.");
$langmsg['templates'][50] = x("Mostra il nome degli utenti.");
$langmsg['templates'][51] = x("Mostra il nome degli utenti.");
$langmsg['templates'][52] = x("Mostra il età degli utenti.");
$langmsg['templates'][53] = x("Mostra la posizione degli utenti.");
$langmsg['templates'][54] = x("Indica il sesso degli utenti.");
$langmsg['templates'][55] = x("Creare un link alla home page di utenti.");
$langmsg['templates'][56] = x("Mostra gli interessi degli utenti.");
$langmsg['templates'][57] = x("Mostra l'hobby degli utenti.");
$langmsg['templates'][58] = x("Mostra l'occupazione utenti.");
$langmsg['templates'][59] = x("Mostra gli utenti citazione preferita.");
$langmsg['templates'][60] = x("Visualizzare l'immagine utenti profilo.");
$langmsg['templates'][61] = x("Structure news");
$langmsg['templates'][62] = x("Questo è dove si può controllare l'ordine phyiscal di come ogni elemento di novità è visualizzata, ad esempio, se si desidera che il pagintation essere visualizzato sopra la notizia come anche sotto di esso si può fare qui.");
$langmsg['templates'][63] = x("Visualizza i tuoi post news.");
$langmsg['templates'][64] = x("Visualizza il pagintation news.");
$langmsg['templates'][65] = x("Commenti Struttura");
$langmsg['templates'][66] = x("Questo è dove si può controllare l'ordine phyiscal di come ogni elemento di novità viene visualizzato quando commenti di visualizzazione, per esempio, se si desidera che il pagintation essere visualizzato sopra i tuoi commenti così come sotto di esso si può fare qui.");
$langmsg['templates'][67] = x("Visualizza il post unica notizia durante la visualizzazione di commenti");
$langmsg['templates'][68] = x("Consente di visualizzare i tuoi commenti.");
$langmsg['templates'][69] = x("Visualizza il pagintation commento.");
$langmsg['templates'][70] = x("Visualizza il modulo di commento.");
$langmsg['templates'][71] = x("Modulo di Registrazione");
$langmsg['templates'][72] = x("Qui è possibile controllare la forma che consente agli utenti di registrarsi. È importante tenere tutti i nomi dei campi di input e gli ID lo stesso altrimenti non funzionerà.");
$langmsg['templates'][73] = x("Username l'utente inserisce.");
$langmsg['templates'][74] = x("L'utente inserisce la password.");
$langmsg['templates'][75] = x("Mostra il messaggio di errore se un campo viene lasciato vuoto.");
$langmsg['templates'][76] = x("Si prega di inserire un nome.");
$langmsg['templates'][77] = x("Template creato.");
$langmsg['templates'][78] = x("Scegliere un altro nome.");
$langmsg['templates'][79] = x("Modificare i modelli di seguito per modificare la modalità di vostre notizie e commenti vengono visualizzati.");
$langmsg['templates'][80] = x("News");
$langmsg['templates'][81] = x("Modello aggiornato.");
$langmsg['templates'][82] = x("Un modello con quel nome esiste già. Si prega di scegliere un altro nome");
$langmsg['templates'][83] = x("Non può eliminare il modello in uso");
$langmsg['templates'][84] = x("Modello selezionato (s) ha cancellato");
$langmsg['templates'][85] = x("template (s) copied");
$langmsg['templates'][86] = x("Selezionare un nome di modello di seguito per modificare.");
$langmsg['templates'][87] = x("Modello selezionato.");
$langmsg['templates'][88] = x("Nome");
$langmsg['templates'][89] = x("Selected");
$langmsg['templates'][90] = x("Creare un nuovo modello.");
$langmsg['templates'][91] = x("Seleziona");
$langmsg['templates'][92] = x("Mostra il punto di vista di ogni storia ha.");
$langmsg['templates'][93] = x("Mostra l'immagine di stelle di rating.");
$langmsg['templates'][94] = x("Mostra la corrente nominale per la storia.");
$langmsg['templates'][95] = x("Mostra la quantità di volte che il racconto è stato valutato.");
$langmsg['templates'][96] = x("Mostra il form di votazione.");
$langmsg['templates'][98] = x("Mostra la invia al modulo.");
$langmsg['templates'][99] = x("Mostra la posizione degli utenti");
$langmsg['templates'][100] = x("File caricati");
$langmsg['templates'][101] = x("Controllare come i file caricati vengono visualizzati.");
$langmsg['templates'][102] = x("Data in cui il file è stato caricato.");
$langmsg['templates'][103] = x("Titolo del file.");
$langmsg['templates'][104] = x("Il nome del file.");
$langmsg['templates'][105] = x("Dimensioni del file.");
$langmsg['templates'][106] = x("URL per scaricare il file.");
$langmsg['templates'][107] = x("Nome utente del uploader.");
$langmsg['templates'][108] = x("Quantità di volte che il file è stato scaricato.");
$langmsg['templates'][109] = x("Visualizza file collegati al posto di notizie.");
$langmsg['templates'][110] = x("Mostra tutti i file collegati al posto di notizie.");
$langmsg['templates'][111] = x("Mostra solo 3 pagine alla volta");
$langmsg['templates'][112] = x("Link alla pagina uno, spettacoli, se non è attualmente in prima pagina.");
$langmsg['templates'][113] = x("Link alla pagina precedente, se non mostra attualmente in pagina l'ultima pagina.");
$langmsg['templates'][114] = x("Mostra il numero di parole per questo post");
$langmsg['templates'][115] = x("Si vede il titolo amichevole della storia");
$langmsg['templates'][116] = x("Visualizza l'elemento reCAPTCHA");
$langmsg['templates'][117] = x("Crea un link per cancellare il commento.");
$langmsg['templates'][118] = x("Visualizza il modulo di accesso solo se il login è necessario.");
$langmsg['templates'][119] = x("Login Form");
$langmsg['templates'][120] = x("Di controllo come il form di login viene visualizzato.");
$langmsg['templates'][121] = x("Visualizza l'email l'utente iscritto.");
$langmsg['templates'][122] = x("Visualizza il messaggio di errore di login.");
$langmsg['templates'][123] = x("Visualizza l'elemento reCAPTCHA.");
$langmsg['templates'][124] = x("Visualizza il nome utente immesso dall'utente.");
$langmsg['templates'][125] = x("Se il login viene visualizzato il nome utente.");
$langmsg['templates'][126] = x("Visualizza il modulo di ricerca. Tutti i nomi e gli ID devono rimanere gli stessi.");
$langmsg['templates'][127] = x("Visualizza il numero per ogni risultato di ricerca");
$langmsg['templates'][128] = x("Formati come ottenere i risultati della ricerca visualizzati. Vengono ripetuti per ogni risultato.");
$langmsg['templates'][129] = x("Si alterna tra l'output di uno o due per ogni riga.");
$langmsg['templates'][130] = x("Consente di visualizzare il numero della pagina corrente.");
$langmsg['templates'][131] = x("Consente di visualizzare il numero della pagina precedente.");
$langmsg['templates'][132] = x("Consente di visualizzare il numero della pagina successiva.");
$langmsg['templates'][133] = x("Visualizza il titolo amichevole articolo di notizie.");



$langmsg['uploadedfiles'][0] = x("File Upload");
$langmsg['uploadedfiles'][1] = x("Carica un nuovo file");
$langmsg['uploadedfiles'][2] = x("Carica File");
$langmsg['uploadedfiles'][4] = x("Scegli un file:");
$langmsg['uploadedfiles'][5] = x("File (s) ha cancellato.");
$langmsg['uploadedfiles'][6] = x("File caricato");
$langmsg['uploadedfiles'][7] = x("Si è verificato un errore durante il caricamento del file, si prega di riprovare.");
$langmsg['uploadedfiles'][8] = x("Estensione del file non valido.");
$langmsg['uploadedfiles'][9] = x("File non valido.");
$langmsg['uploadedfiles'][10] = x("File rimosso dalla categoria.");
$langmsg['uploadedfiles'][11] = x("File (s) aggiunto alla categoria.");
$langmsg['uploadedfiles'][12] = x("Filename");
$langmsg['uploadedfiles'][13] = x("Seleziona una categoria:");
$langmsg['uploadedfiles'][14] = x("Modificare un file");
$langmsg['uploadedfiles'][15] = x("Titolo:");
$langmsg['uploadedfiles'][16] = x("Descrizione:");
$langmsg['uploadedfiles'][17] = x("File di aggiornamento");
$langmsg['uploadedfiles'][18] = x("File non valido");
$langmsg['uploadedfiles'][19] = x("File aggiornato");
$langmsg['uploadedfiles'][20] = x("Miniature");
$langmsg['uploadedfiles'][21] = x("Dettagli");
$langmsg['uploadedfiles'][22] = x("Categoria:");
$langmsg['uploadedfiles'][23] = x("Titolo");
$langmsg['uploadedfiles'][24] = x("Dimensioni");
$langmsg['uploadedfiles'][25] = x("Uploader");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("Aggiungi alla categoria");
$langmsg['uploadedfiles'][28] = x("Rimuovi dalla categoria");
$langmsg['uploadedfiles'][29] = x("File caricati");
$langmsg['uploadedfiles'][30] = x("Un file con quel nome esiste già.");
$langmsg['uploadedfiles'][31] = x("Reset download:");
$langmsg['uploadedfiles'][32] = x("Tutte le categorie");
$langmsg['uploadedfiles'][33] = x("Download");
$langmsg['uploadedfiles'][34] = x("Caricato");

$langmsg['admindata'][0] = x("Aiuto");
$langmsg['admindata'][1] = x("Aggiungi News");
$langmsg['admindata'][2] = x("Messaggi Privati");
$langmsg['admindata'][3] = x("Modifica News");
$langmsg['admindata'][4] = x("Modifica Commenti");


$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("Anteprima");
$langmsg['submitfield'][2] = x("Aggiungi News");
$langmsg['submitfield'][3] = x("Salvare");
$langmsg['submitfield'][4] = x("Inviare");
$langmsg['submitfield'][5] = x("Crea");
$langmsg['submitfield'][6] = x("Aggiornamento");
$langmsg['submitfield'][7] = x("Aggiungere");
$langmsg['submitfield'][8] = x("Eliminare");
$langmsg['submitfield'][9] = x("Recuperare");


$langmsg['selectfield'][0] = x("- Scegli l'opzione --");
$langmsg['selectfield'][1] = x("Sì");
$langmsg['selectfield'][2] = x("No");
$langmsg['selectfield'][3] = x("Eliminare");
$langmsg['selectfield'][4] = x("Richiede l'approvazione");
$langmsg['selectfield'][5] = x("Permetti commenti");
$langmsg['selectfield'][6] = x("Cambia l'approvazione");
$langmsg['selectfield'][7] = x("Approvazione");
$langmsg['selectfield'][8] = x("Commenti");
$langmsg['selectfield'][9] = x("Approva");
$langmsg['selectfield'][10] = x("Unapprove");
$langmsg['selectfield'][11] = x("Data");
$langmsg['selectfield'][12] = x("Titolo");
$langmsg['selectfield'][13] = x("Autore");
$langmsg['selectfield'][14] = x("Categoria");
$langmsg['selectfield'][15] = x("# Comments");
$langmsg['selectfield'][16] = x("Segna come letto");
$langmsg['selectfield'][17] = x("Segna come da leggere");
$langmsg['selectfield'][18] = x("Reset bloccato count");
$langmsg['selectfield'][19] = x("Crea copia");
$langmsg['selectfield'][20] = x("Count Reset vista");
$langmsg['selectfield'][21] = x("Reset voti");


$langmsg['js'][0] = x("Sei sicuro di voler rimuovere l'immagine della categoria?");
$langmsg['js'][1] = x("Sei sicuro di voler cancellare l'immagine selezionata (s)?");
$langmsg['js'][2] = x("Sei sicuro di voler cancellare il messaggio selezionato (s)?");
$langmsg['js'][3] = x("Sei sicuro di voler eliminare il modello selezionato (s)?");
$langmsg['js'][4] = x("Sei sicuro di voler eliminare questi indirizzi IP?");
$langmsg['js'][5] = x("Sei sicuro di voler azzerare il contatore bloccato per questi indirizzi IP");
$langmsg['js'][6] = x("Sei sicuro di voler eliminare queste livello di accesso (s)?");
$langmsg['js'][7] = x("Sei sicuro di voler eliminare queste categorie?");
$langmsg['js'][8] = x("Sei sicuro di voler eliminare queste categorie ei posti al loro interno?");
$langmsg['js'][9] = x("Sei sicuro di voler eliminare queste categorie?");
$langmsg['js'][10] = x("Sei sicuro di voler eliminare questi account (s)?");
$langmsg['js'][11] = x("Sei sicuro di voler eliminare questi account (s) e dei posti?");
$langmsg['js'][12] = x("Sei sicuro di voler eliminare questi post (s)?");
$langmsg['js'][13] = x("Inserisci il testo");
$langmsg['js'][14] = x("Testo");
$langmsg['js'][15] = x("Si prega di inserire un colore. Ad esempio, rosso, giallo, blu (o anche valori esadecimali)");
$langmsg['js'][16] = x("blu");
$langmsg['js'][17] = x("Inserire l'URL del link");
$langmsg['js'][18] = x("Inserisci il testo da visualizzare");
$langmsg['js'][19] = x("Collegamento");
$langmsg['js'][20] = x("Entrare in una dimensione di carattere");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Testo da visualizzare?");
$langmsg['js'][23] = x("Indirizzo e-mail");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Mail me!");
$langmsg['js'][26] = x("Quote di testo?");
$langmsg['js'][27] = x("Citare");
$langmsg['js'][28] = x("Sei sicuro di voler eliminare commento selezionato (s)?");
$langmsg['js'][29] = x("Sei sicuro di voler eliminare le categorie selezionate?");
$langmsg['js'][30] = x("Smilies ricevendo ... Attendere prego.");
$langmsg['js'][31] = x("Sei sicuro di voler eliminare il file selezionato (s)?");
$langmsg['js'][32] = x("Sei sicuro di voler eliminare il smilies selezionati?");

$langmsg['news'][0] = x("Si prega di inserire un nome.");
$langmsg['news'][1] = x("Si prega di inserire un messaggio.");
$langmsg['news'][2] = x("Chiave di sicurezza non valido");
$langmsg['news'][3] = x("Scegliere un altro nome.");
$langmsg['news'][4] = x("Chiave di sicurezza non valido");
$langmsg['news'][5] = x("Risultati trovati:");
$langmsg['news'][6] = x("Le nuove immatricolazioni sono disabilitati.");
$langmsg['news'][7] = x("Il tuo account è stato creato, ora è possibile <a href=\"{adminpath}\">effettuare il login qui.</a>");
$langmsg['news'][8] = x("Si prega di inserire un nome.");
$langmsg['news'][9] = x("Si prega di inserire un messaggio.");
$langmsg['news'][10] = x("Chiave di sicurezza non valido");
$langmsg['news'][11] = x("Scegliere un altro nome.");
$langmsg['news'][12] = x("Chiave di sicurezza non valido");
$langmsg['news'][13] = x("Grazie per il vostro gradimento.");
$langmsg['news'][14] = x("Hai già votato questo articolo.");
$langmsg['news'][15] = x("Nome");
$langmsg['news'][16] = x("Email:");
$langmsg['news'][17] = x("Friends Email:");
$langmsg['news'][18] = x("Messaggio:");
$langmsg['news'][19] = x("Hey check out questo articolo che ho trovato!");
$langmsg['news'][20] = x("Invia ad un amico");
$langmsg['news'][21] = x("E-mail inviati.");
$langmsg['news'][22] = x("Inserisci il tuo nome");
$langmsg['news'][23] = x("Inserisci il tuo indirizzo e-mail");
$langmsg['news'][24] = x("Si prega di inserire un messaggio");
$langmsg['news'][25] = x("Inserisci il tuo indirizzo e-mail gli amici");
$langmsg['news'][27] = x("Si prega di inserire un indirizzo email valido");
$langmsg['news'][28] = x("Inserisci il tuo indirizzo e-mail valido amici");
$langmsg['news'][29] = x("Si prega di inserire un nome utente.");
$langmsg['news'][30] = x("Che nome utente è già stata presa, si prega di scegliere un altro.");
$langmsg['news'][31] = x("Che l'indirizzo e-mail è già in uso, si prega di scegliere un altro.");
$langmsg['news'][32] = x("Si prega di inserire un indirizzo e-mail.");
$langmsg['news'][33] = x("Si prega di inserire un indirizzo email valido.");
$langmsg['news'][34] = x("Si prega di inserire una password.");
$langmsg['news'][35] = x("Si prega di confermare la tua password.");
$langmsg['news'][36] = x("Le password inserite non corrispondono.");
$langmsg['news'][37] = x("Chiave di sicurezza non valido.");
$langmsg['news'][38] = x("Attendere prego");
$langmsg['news'][39] = x("C'è stato un problema di invio del messaggio, si prega di contattare l'amministratore.");
$langmsg['news'][40] = x("Devi essere registrato per inviare un commento.");
$langmsg['news'][41] = x("Nuovo commento su {domain}");
$langmsg['news'][42] = x("Nome: {name} Email / URL: {email} IP: {ip} IP: {message}");
$langmsg['news'][43] = x("Nuova registrazione su {domain}");
$langmsg['news'][44] = x("Nome: {name} Email {email} IP: {ip}");
$langmsg['news'][45] = x("secondi prima di inviare un altro messaggio.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Nome");
$langmsg['news'][48] = x("Email / URL");
$langmsg['news'][49] = x("Messaggio");



$langmsg['shortmonths'][0] = x("Gennaio");
$langmsg['shortmonths'][1] = x("Febbraio");
$langmsg['shortmonths'][2] = x("Marzo");
$langmsg['shortmonths'][3] = x("Aprile");
$langmsg['shortmonths'][4] = x("Maggio");
$langmsg['shortmonths'][5] = x("Giugno");
$langmsg['shortmonths'][6] = x("Luglio");
$langmsg['shortmonths'][7] = x("Agosto");
$langmsg['shortmonths'][8] = x("Settembre");
$langmsg['shortmonths'][9] = x("Ottobre");
$langmsg['shortmonths'][10] = x("Novembre");
$langmsg['shortmonths'][11] = x("Dicembre");


$langmsg['months'][0] = x("Gennaio");
$langmsg['months'][1] = x("Febbraio");
$langmsg['months'][2] = x("Marzo");
$langmsg['months'][3] = x("Aprile");
$langmsg['months'][4] = x("Maggio");
$langmsg['months'][5] = x("Giugno");
$langmsg['months'][6] = x("Luglio");
$langmsg['months'][7] = x("Agosto");
$langmsg['months'][8] = x("Settembre");
$langmsg['months'][9] = x("Ottobre");
$langmsg['months'][10] = x("Novembre");
$langmsg['months'][11] = x("Dicembre");


$langmsg['search'][0] = x("Attiva news");
$langmsg['search'][1] = x("Archived News");
$langmsg['search'][2] = x("Newest first");
$langmsg['search'][3] = x("Più antico prima");
$langmsg['search'][4] = x("Ricerca");
$langmsg['search'][5] = x("Intervallo di date");


$langmsg['install'][0] = x("Connessione al database Info");
$langmsg['install'][1] = x("Inserisci il tuo info server MySQL sotto.");
$langmsg['install'][2] = x("Server:");
$langmsg['install'][3] = x("(solitamente localhost)");
$langmsg['install'][4] = x("Username:");
$langmsg['install'][5] = x("Password:");
$langmsg['install'][6] = x("Database:");
$langmsg['install'][7] = x("Test connessione");
$langmsg['install'][8] = x("La connessione al server:");
$langmsg['install'][9] = x("Selezione del database:");
$langmsg['install'][10] = x("In grado di scrivere a db.php, si prega di CHMOD questo file a 777");
$langmsg['install'][11] = x("Informazioni account");
$langmsg['install'][12] = x("Inserisci il tuo numero di conto qui di seguito. Questo sarà usato per effettuare il login.");
$langmsg['install'][13] = x("Email:");
$langmsg['install'][14] = x("Conferma Password:");
$langmsg['install'][15] = x("Continua");
$langmsg['install'][16] = x("Si prega di inserire un nome utente");
$langmsg['install'][17] = x("Si prega di inserire un indirizzo e-mail");
$langmsg['install'][18] = x("Inserisci la tua password");
$langmsg['install'][19] = x("Premere Installa per completare l'installazione");
$langmsg['install'][20] = x("Le password non corrispondono");
$langmsg['install'][21] = x("Installare");
$langmsg['install'][22] = x("Finalizzazione di installazione");
$langmsg['install'][23] = x("SUCCESSO!");
$langmsg['install'][24] = x("N-13 News è stato installato.");
$langmsg['install'][25] = x("Login per l'area admin.");
$langmsg['install'][26] = x("Porto:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Estensione:");
$langmsg['install'][29] = x("(lasciare vuoto per default)");
$langmsg['install'][30] = x("Installazione di ... Si prega di attendere.");
$langmsg['install'][31] = x("La funzione mysqli_connect non è stato trovato.");
$langmsg['install'][32] = x("La funzione pdo_mysql non è stato trovato.");
?>