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
#   LANGUAGE    French                                  #
#   VERSION     4.0                                     #
#   AUTHOR      chris@network-13.com                    #
#                                                       #
#   Any words you see wrapped in { } braces,            #
#   for example {totalnews} need to be left like that.  #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

$langmsg['menu'][0] = x("Ajouter Nouvelles");
$langmsg['menu'][1] = x("Modifier Nouvelles");
$langmsg['menu'][2] = x("Archives");
$langmsg['menu'][3] = x("Nouveau message");
$langmsg['menu'][4] = x("Boîte de réception");
$langmsg['menu'][5] = x("Boîte d'envoi");
$langmsg['menu'][6] = x("Comptes");
$langmsg['menu'][7] = x("Niveaux d'accès");
$langmsg['menu'][8] = x("Banned IPs");
$langmsg['menu'][9] = x("Catégories");
$langmsg['menu'][10] = x("Mises à l'image");
$langmsg['menu'][11] = x("Personal");
$langmsg['menu'][12] = x("Profil");
$langmsg['menu'][13] = x("Fils RSS");
$langmsg['menu'][14] = x("Smileys");
$langmsg['menu'][15] = x("Système");
$langmsg['menu'][16] = x("Modèles");
$langmsg['menu'][17] = x("Word Filters");
$langmsg['menu'][18] = x("Accueil");
$langmsg['menu'][19] = x("Nouvelles");
$langmsg['menu'][20] = x("Messages");
$langmsg['menu'][21] = x("Options");
$langmsg['menu'][22] = x("Aider");
$langmsg['menu'][23] = x("Déconnexion");
$langmsg['menu'][24] = x("File Uploads");


$langmsg['home'][0] = x("Statistiques mondiales nouvelles ci-dessous.");
$langmsg['home'][1] = x("Bienvenue");
$langmsg['home'][2] = x("La mise en PHP 'magic_quotes_gpc' a été détecté comme activé. Il est recommandé de désactiver ce paramètre.");
$langmsg['home'][3] = x("La mise en PHP 'register_globals' a été détectée comme activé. Il est recommandé de désactiver cette car elle peut provoquer des problèmes de sécurité et les erreurs de se produire.");
$langmsg['home'][4] = x("Install.php a été détectée. S'il vous plaît supprimer ce fichier.");
$langmsg['home'][5] = x("Install.php peut pas être supprimé, s'il vous plaît supprimer ce fichier manuellement");
$langmsg['home'][6] = x("Total Nouvelles:");
$langmsg['home'][7] = x("Total Commentaires:");
$langmsg['home'][8] = x("Nombre total d'utilisateurs:");
$langmsg['home'][9] = x("Total Smileys:");
$langmsg['home'][10] = x("Total Filtres:");
$langmsg['home'][11] = x("Total des catégories:");
$langmsg['home'][12] = x("Total Templates:");
$langmsg['home'][13] = x("Total Niveaux d'accès:");
$langmsg['home'][14] = x("Raccordement à la base de données:");
$langmsg['home'][15] = x("Optimisation de tous les tableaux:");
$langmsg['home'][16] = x("Version actuelle:");
$langmsg['home'][17] = x("Dernière version:");
$langmsg['home'][18] = x("Voir les journaux d'accès");
$langmsg['home'][19] = x("Query time:");
$langmsg['home'][20] = x("Messages non lus");
$langmsg['home'][21] = x("Essayez de supprimer ce fichier automatiquement?");
$langmsg['home'][22] = x("seconde");
$langmsg['home'][23] = x("Nombre total d'images");
$langmsg['home'][24] = x("Total des Fichiers");
$langmsg['home'][25] = x("Total RSS");


$langmsg['addnews'][0] = x("Nouvelles Aperçu");
$langmsg['addnews'][1] = x("S'il vous plaît entrer un titre");
$langmsg['addnews'][2] = x("S'il vous plaît choisir si cet postes seront autoriser les commentaires ou non");
$langmsg['addnews'][3] = x("Ajouter Nouvelles");
$langmsg['addnews'][4] = x("S'il vous plaît choisir une catégorie");


$langmsg['editnews'][0] = x("Modifier Nouvelles");
$langmsg['editnews'][1] = x("Liste");
$langmsg['editnews'][2] = x("Options");
$langmsg['editnews'][3] = x("Montant à afficher");
$langmsg['editnews'][4] = x("Trier par");
$langmsg['editnews'][5] = x("Ordre");
$langmsg['editnews'][7] = x("Titre");
$langmsg['editnews'][8] = x("Auteur");
$langmsg['editnews'][9] = x("Catégories");
$langmsg['editnews'][10] = x("Date");
$langmsg['editnews'][11] = x("Approbation");
$langmsg['editnews'][12] = x("Commentaires");
$langmsg['editnews'][13] = x("[montrer]");
$langmsg['editnews'][14] = x("Approuvé");
$langmsg['editnews'][15] = x("Unapproved");
$langmsg['editnews'][16] = x("Nouvelles ajouté.");
$langmsg['editnews'][17] = x("Certains postes supprimés.");
$langmsg['editnews'][18] = x("Certains postes mis à jour.");
$langmsg['editnews'][19] = x("Nouvelles mises à jour.");
$langmsg['editnews'][20] = x("Mobilité Réduite");
$langmsg['editnews'][21] = x("Dernières nouvelles.");
$langmsg['editnews'][22] = x("au total.");
$langmsg['editnews'][23] = x("Voir Réinitialiser le compte à 0 pour l'article sélectionné (s)");
$langmsg['editnews'][24] = x("Effacer les votes pour l'article sélectionné (s)");
$langmsg['editnews'][25] = x("Filtrer par catégorie");


$langmsg['newsform'][0] = x("Donnez votre poster des nouvelles ci-dessous.");
$langmsg['newsform'][1] = x("Titre:");
$langmsg['newsform'][2] = x("Catégories:");
$langmsg['newsform'][3] = x("Short Story:");
$langmsg['newsform'][4] = x("Story:");
$langmsg['newsform'][5] = x("HTML handicapés");
$langmsg['newsform'][6] = x("HTML Activé");
$langmsg['newsform'][7] = x("Commentaires:");
$langmsg['newsform'][8] = x("Toggle date");
$langmsg['newsform'][9] = x("Toggle histoire courte");
$langmsg['newsform'][16] = x("Date:");
$langmsg['newsform'][17] = x("Toggle archive");
$langmsg['newsform'][18] = x("Jamais archive");
$langmsg['newsform'][19] = x("File Uploads");
$langmsg['newsform'][20] = x("Téléchargements");
$langmsg['newsform'][21] = x("Uploaded");
$langmsg['newsform'][22] = x("Article");
$langmsg['newsform'][23] = x("Entrez une URL de l'image");
$langmsg['newsform'][24] = x("Insérer");
$langmsg['newsform'][25] = x("Sélectionnez une image téléchargée");


$langmsg['editcomments'][0] = x("Edit Comments");
$langmsg['editcomments'][1] = x("Modifier le commentaire ci-dessous.");
$langmsg['editcomments'][2] = x("Auteur:");
$langmsg['editcomments'][3] = x("Email:");
$langmsg['editcomments'][4] = x("Message:");
$langmsg['editcomments'][5] = x("Commentaire mis à jour.");
$langmsg['editcomments'][6] = x("commentaires supprimés.");
$langmsg['editcomments'][7] = x("Commentaires mis à jour.");
$langmsg['editcomments'][8] = x("commentaires au total.");
$langmsg['editcomments'][9] = x("Message");
$langmsg['editcomments'][10] = x("Date");
$langmsg['editcomments'][11] = x("Approbation");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Approuvé");
$langmsg['editcomments'][14] = x("Unapproved");
$langmsg['editcomments'][15] = x("Lieu:");


$langmsg['privmsgs'][0] = x("Messages privés");
$langmsg['privmsgs'][1] = x("Boîte de réception");
$langmsg['privmsgs'][2] = x("Boîte d'envoi");
$langmsg['privmsgs'][3] = x("Nouveau message");
$langmsg['privmsgs'][4] = x("Vous avez");
$langmsg['privmsgs'][5] = x("Titre");
$langmsg['privmsgs'][6] = x("À partir de");
$langmsg['privmsgs'][7] = x("Envoyé");
$langmsg['privmsgs'][8] = x("À");
$langmsg['privmsgs'][9] = x("Répondre à ce message");
$langmsg['privmsgs'][10] = x("Nouveau message privé.");
$langmsg['privmsgs'][11] = x("Envoyer à:");
$langmsg['privmsgs'][12] = x("Titre:");
$langmsg['privmsgs'][13] = x("Message:");
$langmsg['privmsgs'][14] = x("Exemple 'user1, user2, user3'");
$langmsg['privmsgs'][15] = x("Message de prévisualisation.");
$langmsg['privmsgs'][16] = x("Message envoyé aux utilisateurs suivants.");
$langmsg['privmsgs'][17] = x("S'il vous plaît entrer un utilisateur d'envoyer ce message.");
$langmsg['privmsgs'][18] = x("S'il vous plaît entrer un titre pour ce message.");
$langmsg['privmsgs'][19] = x("S'il vous plaît entrer un message.");
$langmsg['privmsgs'][20] = x("Messages supprimés.");
$langmsg['privmsgs'][21] = x("les messages non lus.");
$langmsg['privmsgs'][22] = x("Messages au total.");


$langmsg['options'][0] = x("Options");
$langmsg['options'][1] = x("Nouveau");
$langmsg['options'][2] = x("Éditer");


$langmsg['bannedips'][0] = x("Banned IPs");
$langmsg['bannedips'][1] = x("Banned IPs.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Nombre de fois bloqué");
$langmsg['bannedips'][4] = x("Ajouter une nouvelle adresse IP.");
$langmsg['bannedips'][5] = x("Banned message. (le HTML est activé)");
$langmsg['bannedips'][6] = x("Adresse IP:");
$langmsg['bannedips'][7] = x("Cette adresse IP est déjà interdite.");
$langmsg['bannedips'][8] = x("Adresse IP interdite.");
$langmsg['bannedips'][9] = x("Les adresses IP supprimé.");
$langmsg['bannedips'][10] = x("Les adresses IP ont été réinitialisés.");
$langmsg['bannedips'][11] = x("Banned message mis à jour.");


$langmsg['cats'][0] = x("Catégories");
$langmsg['cats'][1] = x("Catégories.");
$langmsg['cats'][2] = x("Nom");
$langmsg['cats'][3] = x("Articles");
$langmsg['cats'][4] = x("Créer une nouvelle catégorie.");
$langmsg['cats'][5] = x("Nom:");
$langmsg['cats'][6] = x("Les catégories suivantes ont été supprimées:");
$langmsg['cats'][7] = x("S'il vous plaît choisir un autre nom.");
$langmsg['cats'][8] = x("Catégorie créée.");
$langmsg['cats'][9] = x("Catégorie mise à jour.");
$langmsg['cats'][10] = x("Modifier votre catégorie ci-dessous.");
$langmsg['cats'][11] = x("Images");
$langmsg['cats'][12] = x("Fichiers");
$langmsg['cats'][13] = x("Une catégorie portant ce nom existe déjà, s'il vous plaît choisir un autre.");


$langmsg['img'][0] = x("Mises à l'image");
$langmsg['img'][1] = x("Transférer une nouvelle image");
$langmsg['img'][2] = x("Envoyer un fichier");
$langmsg['img'][3] = x("Images au total");
$langmsg['img'][4] = x("Choisissez une image:");
$langmsg['img'][5] = x("image (s) supprimé.");
$langmsg['img'][6] = x("Image téléchargée");
$langmsg['img'][7] = x("Il ya eu une erreur de chargement du fichier, s'il vous plaît essayer de nouveau.");
$langmsg['img'][8] = x("Extension de fichier non valide.");
$langmsg['img'][9] = x("Image non valide.");
$langmsg['img'][10] = x("Image soit supprimée de la catégorie.");
$langmsg['img'][11] = x("Image (s) ajoutée à la catégorie.");
$langmsg['img'][12] = x("Nom du fichier:");
$langmsg['img'][13] = x("Sélectionnez une catégorie:");
$langmsg['img'][14] = x("Modifier une image");
$langmsg['img'][15] = x("Titre:");
$langmsg['img'][16] = x("Description:");
$langmsg['img'][17] = x("Mise à jour Image");
$langmsg['img'][18] = x("Image non valide");
$langmsg['img'][19] = x("Image mise à jour");
$langmsg['img'][20] = x("Vignettes");
$langmsg['img'][21] = x("Détails");
$langmsg['img'][22] = x("Catégorie:");
$langmsg['img'][23] = x("Nom du fichier");
$langmsg['img'][24] = x("Taille du fichier");
$langmsg['img'][25] = x("Uploader");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("Ajouter à catégorie");
$langmsg['img'][28] = x("Retirer de la catégorie");
$langmsg['img'][29] = x("Uploaded images");
$langmsg['img'][30] = x("Un fichier portant ce nom existe déjà.");
$langmsg['img'][31] = x("Toutes les catégories");
$langmsg['img'][32] = x("Impossible d'écrire sur le dossier de chargement. CHMOD de ce répertoire à 777");


$langmsg['personal'][0] = x("Options personnelles");
$langmsg['personal'][1] = x("Modifier vos informations de compte ci-dessous.");
$langmsg['personal'][2] = x("Paramètres personnels pour");
$langmsg['personal'][3] = x("Avatar url:");
$langmsg['personal'][4] = x("Adresse Email:");
$langmsg['personal'][5] = x("Message d'alertes:");
$langmsg['personal'][6] = x("Get alerté de messages non lus à la connexion initiale?");
$langmsg['personal'][7] = x("Nouveau mot de passe:");
$langmsg['personal'][8] = x("(laisser vide pour se tenir au courant)");
$langmsg['personal'][9] = x("Confirmer le mot de passe:");
$langmsg['personal'][10] = x("Une adresse e-mail doit être entré.");
$langmsg['personal'][11] = x("Paramètres de mise à jour.");
$langmsg['personal'][12] = x("Mots de passe ne correspondent pas.");
$langmsg['personal'][13] = x("Activer l'éditeur WYSIWYG?");


$langmsg['login'][0] = x("S'il vous plaît Login");
$langmsg['login'][1] = x("Nom:");
$langmsg['login'][2] = x("Mot de passe:");
$langmsg['login'][3] = x("Vous avez oublié votre mot de passe?");
$langmsg['login'][4] = x("Se souvenir de moi");
$langmsg['login'][5] = x("Clé de sécurité:");
$langmsg['login'][6] = x("Connexion");
$langmsg['login'][7] = x("Blancs de sécurité clés");
$langmsg['login'][8] = x("Nom incorrect ou mot de passe");
$langmsg['login'][9] = x("Tapez ce code ci-dessous");


$langmsg['profile'][0] = x("Modifiez votre profil");
$langmsg['profile'][1] = x("Modifier votre profil ci-dessous.");
$langmsg['profile'][2] = x("Nom:");
$langmsg['profile'][3] = x("Âge:");
$langmsg['profile'][4] = x("Lieu:");
$langmsg['profile'][5] = x("Sexe:");
$langmsg['profile'][6] = x("Profil image:");
$langmsg['profile'][7] = x("Page d'accueil:");
$langmsg['profile'][8] = x("Centres d'intérêt:");
$langmsg['profile'][9] = x("Loisirs:");
$langmsg['profile'][10] = x("Profession:");
$langmsg['profile'][11] = x("Citation préférée:");
$langmsg['profile'][12] = x("Mâle");
$langmsg['profile'][13] = x("Femelle");
$langmsg['profile'][14] = x("Profil mis à jour.");
$langmsg['profile'][15] = x("Aucun");


$langmsg['accounts'][0] = x("Comptes");
$langmsg['accounts'][1] = x("Comptes.");
$langmsg['accounts'][2] = x("Nom d'utilisateur");
$langmsg['accounts'][3] = x("Niveau d'accès");
$langmsg['accounts'][4] = x("Nombre de postes");
$langmsg['accounts'][5] = x("Nombre de commentaires");
$langmsg['accounts'][6] = x("Créer un nouveau compte.");
$langmsg['accounts'][7] = x("Nom du compte:");
$langmsg['accounts'][8] = x("Email:");
$langmsg['accounts'][9] = x("Nouveau mot de passe:");
$langmsg['accounts'][10] = x("Confirmer Mot de passe:");
$langmsg['accounts'][11] = x("Niveau d'accès:");
$langmsg['accounts'][12] = x("Nouveau compte.");
$langmsg['accounts'][13] = x("Modifiez le compte ci-dessous.");
$langmsg['accounts'][14] = x("Une adresse e-mail doit être entré.");
$langmsg['accounts'][15] = x("Compte mis à jour.");
$langmsg['accounts'][16] = x("Mots de passe ne correspondent pas.");
$langmsg['accounts'][17] = x("Un nom de compte doit être entré.");
$langmsg['accounts'][18] = x("Nom du compte existe déjà. S'il vous plaît choisir un autre.");
$langmsg['accounts'][19] = x("Un mot de passe doit être entré.");
$langmsg['accounts'][20] = x("Compte créé.");
$langmsg['accounts'][21] = x("Les comptes suivants ont été supprimées:");
$langmsg['accounts'][22] = x("Vous ne pouvez pas supprimer votre propre compte.");
$langmsg['accounts'][23] = x("(Laissez vide pour se tenir au courant)");
$langmsg['accounts'][24] = x("Un compte est déjà utiliser cette adresse e-mail, s'il vous plaît choisir un autre.");
$langmsg['accounts'][25] = x("S'il vous plaît entrer un nom de compte");
$langmsg['accounts'][26] = x("Fichiers");
$langmsg['accounts'][27] = x("Images");


$langmsg['access'][0] = x("Niveaux d'accès");
$langmsg['access'][1] = x("Créez un nouveau niveau d'accès.");
$langmsg['access'][2] = x("Nom:");
$langmsg['access'][3] = x("Quelles sections peut-il accéder à niveau?");
$langmsg['access'][4] = x("Comptes:");
$langmsg['access'][5] = x("Niveaux d'accès:");
$langmsg['access'][6] = x("Banned IPs:");
$langmsg['access'][7] = x("Catégories:");
$langmsg['access'][8] = x("Commentaires:");
$langmsg['access'][9] = x("Aide:");
$langmsg['access'][10] = x("Mises à Image:");
$langmsg['access'][11] = x("Nouvelles:");
$langmsg['access'][12] = x("Persional Options:");
$langmsg['access'][13] = x("Messages privés:");
$langmsg['access'][14] = x("Profil:");
$langmsg['access'][15] = x("RSS Feeds:");
$langmsg['access'][16] = x("Smileys:");
$langmsg['access'][17] = x("Configuration du système:");
$langmsg['access'][18] = x("Modèles:");
$langmsg['access'][19] = x("Filtres Word:");
$langmsg['access'][20] = x("Quelles catégories de personnes peuvent accéder à ce niveau post in?");
$langmsg['access'][21] = x("Tous:");
$langmsg['access'][22] = x("Les postes qui pourraient modifier ce niveau?");
$langmsg['access'][23] = x("Admin (tous):");
$langmsg['access'][24] = x("Mod (own + membres):");
$langmsg['access'][25] = x("Membre (propre):");
$langmsg['access'][26] = x("Sont les messages émanant de ce niveau d'accès automatiquement approuvé?");
$langmsg['access'][27] = x("Est-ce le niveau d'accès approuver les messages?");
$langmsg['access'][28] = x("Ce niveau d'accès peuvent utiliser le HTML?");
$langmsg['access'][29] = x("Autoriser l'affichage sans sélectionner une catégorie?");
$langmsg['access'][30] = x("Les niveaux d'accès supprimées:");
$langmsg['access'][31] = x("Les niveaux d'accès suivants n'ont pas été supprimés, car ils ont 1 ou plusieurs comptes qui leur sont assignées:");
$langmsg['access'][32] = x("Modifier le niveau d'accès ci-dessous.");
$langmsg['access'][33] = x("S'il vous plaît, entrez un nom pour ce niveau d'accès.");
$langmsg['access'][34] = x("Le niveau d'accès mis à jour.");
$langmsg['access'][35] = x("Un niveau d'accès de ce nom existe déjà, s'il vous plaît choisir un autre.");
$langmsg['access'][36] = x("S'il vous plaît choisir les postes de ce niveau peut modifier.");
$langmsg['access'][37] = x("S'il vous plaît choisir si les postes de ce niveau d'accès's get automobile agréé");
$langmsg['access'][38] = x("S'il vous plaît choisir si ce niveau d'accès peut approuver les messages");
$langmsg['access'][39] = x("S'il vous plaît choisir si ce niveau d'accès peuvent utiliser le HTML");
$langmsg['access'][40] = x("S'il vous plaît choisir si ce niveau d'accès peuvent poster sans sélectionner une catégorie");
$langmsg['access'][41] = x("Le niveau d'accès créé.");
$langmsg['access'][42] = x("Les niveaux d'accès.");
$langmsg['access'][43] = x("Nom");
$langmsg['access'][44] = x("Access");
$langmsg['access'][45] = x("Comptes");
$langmsg['access'][46] = x("Membres");
$langmsg['access'][47] = x("Modérateur");
$langmsg['access'][48] = x("Administrateur");
$langmsg['access'][49] = x("File Uploads");
$langmsg['access'][50] = x("Est-ce le niveau d'accès de vue des utilisateurs des adresses IP?");
$langmsg['access'][51] = x("Quels fichiers et d'images peuvent modifier ce niveau d'accès?");
$langmsg['access'][52] = x("Posséder");
$langmsg['access'][53] = x("Tous");


$langmsg['accesslogs'][0] = x("Journaux d'accès");
$langmsg['accesslogs'][1] = x("Nom d'utilisateur");
$langmsg['accesslogs'][2] = x("Tentative");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Date");
$langmsg['accesslogs'][5] = x("Pour accéder aux journaux");
$langmsg['accesslogs'][6] = x("Réussie");
$langmsg['accesslogs'][7] = x("Usuccessful");


$langmsg['filters'][0] = x("Word Filters");
$langmsg['filters'][1] = x("Filtre ajouté.");
$langmsg['filters'][2] = x("Filtre enlevé.");
$langmsg['filters'][3] = x("Tous les mots ci-dessous seront filtrées à partir de tous les commentaires.");
$langmsg['filters'][4] = x("Filtré Word");
$langmsg['filters'][5] = x("Remplacer");
$langmsg['filters'][6] = x("Supprimer");
$langmsg['filters'][7] = x("Ajouter un nouveau filtre");


$langmsg['rss'][0] = x("Fils RSS");
$langmsg['rss'][1] = x("Modifier votre flux RSS paramètres ci-dessous");
$langmsg['rss'][2] = x("Nouvelles est l'endroit où vous serez l'affichage de vos nouvelles, par exemple http://yourdomain.com/ ou http://yourdomain.com/index");
$langmsg['rss'][3] = x("Feed nom:");
$langmsg['rss'][4] = x("Nouvelles d'emplacement:");
$langmsg['rss'][5] = x("Titre de votre flux RSS:");
$langmsg['rss'][6] = x("Description de votre fil RSS:");
$langmsg['rss'][7] = x("Codage des caractères:");
$langmsg['rss'][8] = x("Langue:");
$langmsg['rss'][9] = x("Montant des messages à afficher:");
$langmsg['rss'][10] = x("0 = tous");
$langmsg['rss'][11] = x("Catégories à afficher:");
$langmsg['rss'][12] = x("Montrer les messages qui n'ont pas été classées dans une catégorie?");
$langmsg['rss'][13] = x("Code RSS:");
$langmsg['rss'][14] = x("Modifier la façon dont votre alimentation est affiché");
$langmsg['rss'][15] = x("Affiche le titre de l'histoire.");
$langmsg['rss'][16] = x("Montre la courte histoire des nouvelles.");
$langmsg['rss'][17] = x("Montre l'histoire des nouvelles.");
$langmsg['rss'][18] = x("Affiche les catégories de chaque poste a été affecté.");
$langmsg['rss'][19] = x("Montre l'URL d'un poste spécifique.");
$langmsg['rss'][20] = x("Affiche la date à laquelle l'histoire a été publiée suite.");
$langmsg['rss'][21] = x("Indique le réglage de fuseau horaire.");
$langmsg['rss'][22] = x("Montre l'horodatage de chaque poste.");
$langmsg['rss'][23] = x("Indique l'auteur de l'histoire.");
$langmsg['rss'][24] = x("Affiche les utilisateurs avatar s'ils en ont un.");
$langmsg['rss'][25] = x("Affiche l'identifiant unique de chaque histoire a.");
$langmsg['rss'][26] = x("Indique le montant de commentaires pour chaque poste de nouvelles.");
$langmsg['rss'][27] = x("S'il vous plaît entrer un feedname");
$langmsg['rss'][28] = x("S'il vous plaît entrer un emplacement nouvelles");
$langmsg['rss'][29] = x("S'il vous plaît entrer un titre");
$langmsg['rss'][30] = x("S'il vous plaît entrez une description");
$langmsg['rss'][31] = x("S'il vous plaît entrez le codage de caractères");
$langmsg['rss'][32] = x("S'il vous plaît entrer une langue");
$langmsg['rss'][33] = x("S'il vous plaît entrer un montant à afficher");
$langmsg['rss'][34] = x("RSS Feed créé");
$langmsg['rss'][35] = x("Un flux avec ce nom existe déjà, s'il vous plaît choisir un autre");
$langmsg['rss'][36] = x("Flux RSS mis à jour");
$langmsg['rss'][37] = x("Fils RSS");
$langmsg['rss'][38] = x("RSS feed (s) supprimé.");
$langmsg['rss'][39] = x("Nom");
$langmsg['rss'][40] = x("Catégories");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Créer un nouveau flux RSS.");
$langmsg['rss'][43] = x("Indique le titre amical de l'histoire");


$langmsg['smilies'][0] = x("Smileys");
$langmsg['smilies'][1] = x("Ceci est utile si vous souhaitez mettre à jour l'emplacement de tous vos smileys à la fois.");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("Remplacer:");
$langmsg['smilies'][4] = x("Remplacer par:");
$langmsg['smilies'][5] = x("Tous les chemins de mise à jour.");
$langmsg['smilies'][6] = x("Créer un nouveau smilie");
$langmsg['smilies'][7] = x("Path:");
$langmsg['smilies'][8] = x("Keycode:");
$langmsg['smilies'][9] = x("S'il vous plaît entrez le chemin jusqu'à la binette.");
$langmsg['smilies'][10] = x("S'il vous plaît entrer un code de touche pour ce smiley.");
$langmsg['smilies'][11] = x("Keycode déjà en usage. S'il vous plaît choisir un autre code.");
$langmsg['smilies'][12] = x("Smiley ajouté.");
$langmsg['smilies'][13] = x("Etes-vous sûr de vouloir supprimer ce smiley?");
$langmsg['smilies'][14] = x("Smiley supprimé.");
$langmsg['smilies'][15] = x("Modifier le smiley ci-dessous");
$langmsg['smilies'][16] = x("Smiley:");
$langmsg['smilies'][17] = x("Smiley mis à jour.");
$langmsg['smilies'][18] = x("Horoscope ont été supprimés");
$langmsg['smilies'][19] = x("S'il vous plaît sélectionner le smiley que vous souhaitez modifier.");
$langmsg['smilies'][20] = x("Smiley");
$langmsg['smilies'][21] = x("Insérer un smiley nouvelles.");
$langmsg['smilies'][22] = x("Chemin de mise à jour de tous les smiles");


$langmsg['system'][0] = x("Configuration du système");
$langmsg['system'][1] = x("Modifier les configurations système.");
$langmsg['system'][2] = x("Nouvelles");
$langmsg['system'][3] = x("Quantité de nouvelles par page:");
$langmsg['system'][4] = x("Dans quel ordre les nouvelles sont affichés en:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("Date et format de l'heure pour les nouvelles:");
$langmsg['system'][8] = x("Voir ici");
$langmsg['system'][9] = x("Afficher les avatars:");
$langmsg['system'][10] = x("Délimiteur à des catégories distinctes lors de l'affichage nouvelles:");
$langmsg['system'][11] = x("Commentaires");
$langmsg['system'][12] = x("Nombre de commentaires par page:");
$langmsg['system'][13] = x("Quels sont les commentaires sont affichés dans l'ordre:");
$langmsg['system'][14] = x("Date et format de l'heure pour les commentaires:");
$langmsg['system'][15] = x("Longueur maximum d'observations:");
$langmsg['system'][16] = x("Afficher les commentaires dans une nouvelle fenêtre:");
$langmsg['system'][17] = x("Temps de retard après l'affichage des commentaires (spam protection):");
$langmsg['system'][18] = x("Seconds");
$langmsg['system'][19] = x("Spam message:");
$langmsg['system'][20] = x("Nouveau commentaire message:");
$langmsg['system'][21] = x("Approbation de la nouvelle commentaire message:");
$langmsg['system'][22] = x("Utilisez l'image de vérification sur les commentaires de la forme:");
$langmsg['system'][23] = x("Friendly URLs");
$langmsg['system'][24] = x("Permettre à des URL conviviale:");
$langmsg['system'][25] = x("Extension du fichier:");
$langmsg['system'][26] = x("Prefix:");
$langmsg['system'][27] = x("Répertoire filename:");
$langmsg['system'][28] = x("Inscription");
$langmsg['system'][29] = x("Autoriser les utilisateurs à vous inscrire:");
$langmsg['system'][30] = x("Niveau d'accès pour les nouveaux utilisateurs:");
$langmsg['system'][31] = x("Autre");
$langmsg['system'][32] = x("Fuseau horaire:");
$langmsg['system'][33] = x("Admis types de fichiers d'images en ligne le:");
$langmsg['system'][34] = x("Mises Image path:");
$langmsg['system'][35] = x("Aucun message d'erreur d'accès:");
$langmsg['system'][36] = x("Paramètres de mise à jour.");
$langmsg['system'][37] = x("Temps de retard après avoir utilisé envoyer à (Spam protection):");
$langmsg['system'][38] = x("Alertes");
$langmsg['system'][39] = x("Avis par courriel des nouveaux commentaires:");
$langmsg['system'][40] = x("Obtenir des notifications par email des nouvelles immatriculations");
$langmsg['system'][41] = x("Autoriser uniquement les utilisateurs enregistrés de commenter:");
$langmsg['system'][42] = x("Envoyer des notifications à cette adresse email:");
$langmsg['system'][43] = x("Admis types de fichiers de fichiers téléchargés:");
$langmsg['system'][44] = x("Pour recevoir des notifications e-mail des messages non approuvés nouvelles:");
$langmsg['system'][45] = x("Clé publique");
$langmsg['system'][46] = x("Clé privée");
$langmsg['system'][47] = x("Chemin du script");
$langmsg['system'][48] = x("Autoriser les utilisateurs enregistrés de supprimer leurs propres commentaires:");
$langmsg['system'][49] = x("Utilisez l'image de vérification sur le formulaire de connexion d'index:");
$langmsg['system'][50] = x("Utilisez l'image de vérification sur le formulaire d'inscription:");
$langmsg['system'][51] = x("Date et format de l'heure pour les fichiers:");
$langmsg['system'][52] = x("Voir «Powered by» ci-dessous vos nouvelles:");


$langmsg['recover'][0] = x("Password Recovery");
$langmsg['recover'][1] = x("Entrez l'adresse e-mail du compte que vous souhaitez réinitialiser le mot de passe.");
$langmsg['recover'][2] = x("Email:");
$langmsg['recover'][3] = x("Vous, ou quelqu'un a demandé la réinitialisation de votre mot de passe suivez le lien ci-dessous pour le faire.");
$langmsg['recover'][4] = x("Cliquez ici pour réinitialiser votre mot de passe");
$langmsg['recover'][5] = x("Un courriel a été envoyé à");
$langmsg['recover'][6] = x("Un compte avec cet e-mail n'existe pas, s'il vous plaît contacter l'administrateur.");
$langmsg['recover'][7] = x("Nouveau mot de passe");
$langmsg['recover'][8] = x("S'il vous plaît entrez votre nouveau mot de passe ci-dessous.");
$langmsg['recover'][9] = x("Impossible d'envoyer un courrier électronique de récupération, s'il vous plaît contactez votre administrateur système.");
$langmsg['recover'][10] = x("Confirmer Mot de passe:");
$langmsg['recover'][11] = x("Mots de passe ne correspondent pas.");
$langmsg['recover'][12] = x("Votre mot de passe a été mis à jour.");
$langmsg['recover'][13] = x("avec d'autres instructions sur la récupération de votre compte.");


$langmsg['templates'][0] = x("Modèles");
$langmsg['templates'][1] = x("Créer un nouveau modèle.");
$langmsg['templates'][2] = x("Nom:");
$langmsg['templates'][3] = x("Comment les changements de vos nouvelles est affiché.");
$langmsg['templates'][4] = x("Affiche le titre de l'histoire.");
$langmsg['templates'][5] = x("Montre la courte histoire des nouvelles.");
$langmsg['templates'][6] = x("Montre l'histoire des nouvelles.");
$langmsg['templates'][7] = x("Affiche la date à laquelle l'histoire a été publiée suite.");
$langmsg['templates'][8] = x("Affiche les catégories de chaque poste a été affecté.");
$langmsg['templates'][9] = x("Indique l'auteur de l'histoire.");
$langmsg['templates'][10] = x("Affiche les utilisateurs avatar s'ils en ont un.");
$langmsg['templates'][11] = x("Affiche l'identifiant unique de chaque histoire a.");
$langmsg['templates'][12] = x("Indique l'adresse IP de l'auteur. (Spectacles Seulement si vous êtes connecté)");
$langmsg['templates'][13] = x("Montre le lien pour lire le post complet");
$langmsg['templates'][14] = x("Vous verrez votre adresse email.");
$langmsg['templates'][15] = x("Créera un lien vers votre adresse email.");
$langmsg['templates'][16] = x("Créera un lien vers votre profil.");
$langmsg['templates'][17] = x("Indique le montant de commentaires pour chaque poste de nouvelles.");
$langmsg['templates'][18] = x("Créera un lien vers les commentaires.");
$langmsg['templates'][19] = x("Rien mis entre ces balises n'apparaîtra que si logged in");
$langmsg['templates'][20] = x("Path to smiles");
$langmsg['templates'][21] = x("Commentaires");
$langmsg['templates'][22] = x("Changements dont les commentaires sont affichés.");
$langmsg['templates'][23] = x("Affiche de l'auteur du commentaire.");
$langmsg['templates'][24] = x("Affiche le message.");
$langmsg['templates'][25] = x("Affiche les utilisateurs avatar s'ils en ont un.");
$langmsg['templates'][26] = x("Indique l'adresse IP de l'auteur. (Spectacles Seulement si vous êtes connecté)");
$langmsg['templates'][27] = x("Affiche l'identifiant unique de chaque commentaire a.");
$langmsg['templates'][28] = x("Affiche l'adresse email de l'utilisateur ayant formulé des commentaires.");
$langmsg['templates'][29] = x("Créera un lien vers e-mail des utilisateurs.");
$langmsg['templates'][30] = x("Affiche la date à laquelle le commentaire a été publié sur.");
$langmsg['templates'][31] = x("Rien mis entre ces balises n'apparaîtra que si logged in");
$langmsg['templates'][32] = x("Formulaire de commentaires");
$langmsg['templates'][33] = x("Il est important lors de l'édition de ce à garder tous les noms de champ de saisie et les ID de la même sinon il ne fonctionnera pas. Notez également la forme onsubmit useajax attribut ='', oui ou non si détermine AJAX est utilisée lorsque l'utilisateur envoie un commentaire.");
$langmsg['templates'][34] = x("Affiche l'ID du poste de nouvelles.");
$langmsg['templates'][35] = x("Affiche l'ID de catégorie de la poste de nouvelles.");
$langmsg['templates'][36] = x("Vous verrez votre nom d'utilisateur si logged in");
$langmsg['templates'][37] = x("Vous verrez votre e-mail si logged in");
$langmsg['templates'][38] = x("Montrera le message.");
$langmsg['templates'][39] = x("Montrera tous les smileys.");
$langmsg['templates'][40] = x("Nouvelles Pagination");
$langmsg['templates'][44] = x("Commentaires Pagination");
$langmsg['templates'][45] = x("Montre le lien précédent, s'il ya lieu.");
$langmsg['templates'][46] = x("Montre le lien suivant si elle existe.");
$langmsg['templates'][47] = x("Montrera la quantité de pages, Ex: 1 2 3 4.");
$langmsg['templates'][48] = x("Profils");
$langmsg['templates'][49] = x("Modifier la façon dont les profils des utilisateurs sont affichées.");
$langmsg['templates'][50] = x("Indique le nom d'utilisateur utilisateurs.");
$langmsg['templates'][51] = x("Affiche le nom des utilisateurs.");
$langmsg['templates'][52] = x("Affiche les utilisateurs d'âge.");
$langmsg['templates'][53] = x("Montre la localisation des utilisateurs.");
$langmsg['templates'][54] = x("Montre le sexe des utilisateurs.");
$langmsg['templates'][55] = x("Créer un lien à la page d'accueil des utilisateurs.");
$langmsg['templates'][56] = x("Montre l'intérêt des utilisateurs.");
$langmsg['templates'][57] = x("Montre le passe-utilisateurs.");
$langmsg['templates'][58] = x("Montre l'occupation utilisateurs.");
$langmsg['templates'][59] = x("Affiche les utilisateurs citation favorite.");
$langmsg['templates'][60] = x("Afficher l'image des utilisateurs de profil.");
$langmsg['templates'][61] = x("Nouvelles Structure");
$langmsg['templates'][62] = x("C'est là que vous pouvez contrôler l'ordre phyiscal de la façon dont chaque élément nouvelles sont affichés, par exemple si vous voulez que le pagintation à être affiché au dessus de vos nouvelles, ainsi qu'au-dessous vous pouvez le faire ici.");
$langmsg['templates'][63] = x("Affiche vos postes nouvelles.");
$langmsg['templates'][64] = x("Affiche la pagintation nouvelles.");
$langmsg['templates'][65] = x("Commentaires Structure");
$langmsg['templates'][66] = x("C'est là que vous pouvez contrôler l'ordre phyiscal de la façon dont chaque élément nouvelles sont affichés lorsque des commentaires de visualisation, par exemple si vous voulez que le pagintation à être affiché au dessus de vos commentaires, ainsi qu'au-dessous vous pouvez le faire ici.");
$langmsg['templates'][67] = x("Affiche les messages nouvelles unique lors de l'affichage des commentaires");
$langmsg['templates'][68] = x("Affiche vos commentaires.");
$langmsg['templates'][69] = x("Affiche la pagintation commentaire.");
$langmsg['templates'][70] = x("Affiche le formulaire de commentaire.");
$langmsg['templates'][71] = x("Formulaire d'inscription");
$langmsg['templates'][72] = x("C'est là que vous contrôlez le formulaire qui permet aux utilisateurs de s'inscrire. Il est important de conserver l'ensemble des noms de champ de saisie et les ID de la même autrement ça ne marchera pas.");
$langmsg['templates'][73] = x("Nom de l'utilisateur entre.");
$langmsg['templates'][74] = x("Mot de passe de l'utilisateur entre.");
$langmsg['templates'][75] = x("Affiche le message d'erreur si un champ est laissé en blanc.");
$langmsg['templates'][76] = x("S'il vous plaît entrer un nom.");
$langmsg['templates'][77] = x("Template créé.");
$langmsg['templates'][78] = x("S'il vous plaît choisir un autre nom.");
$langmsg['templates'][79] = x("Modifier les modèles ci-dessous pour modifier la façon dont vos nouvelles et les commentaires sont affichés.");
$langmsg['templates'][80] = x("Nouvelles");
$langmsg['templates'][81] = x("Modèle mis à jour.");
$langmsg['templates'][82] = x("Un modèle avec ce nom existe déjà. S'il vous plaît choisir un autre nom");
$langmsg['templates'][83] = x("Impossible de supprimer le modèle thats en service");
$langmsg['templates'][84] = x("Modèle sélectionné (s) a effacé");
$langmsg['templates'][85] = x("Modèle (s) copied");
$langmsg['templates'][86] = x("Sélectionnez un nom de modèle ci-dessous pour modifier.");
$langmsg['templates'][87] = x("Modèle sélectionné.");
$langmsg['templates'][88] = x("Nom");
$langmsg['templates'][89] = x("Sélectionné");
$langmsg['templates'][90] = x("Créer un nouveau modèle.");
$langmsg['templates'][91] = x("Sélectionnez");
$langmsg['templates'][92] = x("Montre les points de vue chaque histoire a.");
$langmsg['templates'][93] = x("Montre les étoiles Evaluation de l'image.");
$langmsg['templates'][94] = x("Indique la cote actuelle de l'histoire.");
$langmsg['templates'][95] = x("Indique la quantité de fois que l'histoire a été évaluée.");
$langmsg['templates'][96] = x("Affiche le formulaire de notation.");
$langmsg['templates'][98] = x("Montre l'envoi à la forme.");
$langmsg['templates'][99] = x("Montre la localisation des utilisateurs");
$langmsg['templates'][100] = x("Fichiers téléchargés");
$langmsg['templates'][101] = x("Contrôler la façon dont vos fichiers téléchargés sont visibles.");
$langmsg['templates'][102] = x("Date à laquelle le fichier a été téléchargé.");
$langmsg['templates'][103] = x("Titre du fichier.");
$langmsg['templates'][104] = x("Nom du fichier du fichier.");
$langmsg['templates'][105] = x("Taille du fichier.");
$langmsg['templates'][106] = x("URL pour télécharger le fichier.");
$langmsg['templates'][107] = x("Nom d'utilisateur de l'uploader.");
$langmsg['templates'][108] = x("Nombre de fois où le fichier a été téléchargé.");
$langmsg['templates'][109] = x("Afficher les fichiers liés à la poste de nouvelles.");
$langmsg['templates'][110] = x("Montrez chaque fichier lié à la poste de nouvelles.");
$langmsg['templates'][111] = x("Montre que 3 pages à la fois");
$langmsg['templates'][112] = x("Lien vers la première page, indique si pas actuellement sur la première page.");
$langmsg['templates'][113] = x("Lien vers la dernière page, montre si elle n'est pas actuellement à la page la dernière page.");
$langmsg['templates'][114] = x("Indique le nombre de mots pour ce poste");
$langmsg['templates'][115] = x("Indique le titre amical de l'histoire");
$langmsg['templates'][116] = x("Affiche l'élément reCAPTCHA");
$langmsg['templates'][117] = x("Crée un lien pour supprimer le commentaire.");
$langmsg['templates'][118] = x("Affiche le formulaire de connexion que si login est nécessaire.");
$langmsg['templates'][119] = x("Login Form");
$langmsg['templates'][120] = x("Contrôler la façon dont le formulaire de connexion est affiché.");
$langmsg['templates'][121] = x("Affiche le courriel de l'utilisateur inscrit.");
$langmsg['templates'][122] = x("Affiche le message d'erreur de connexion.");
$langmsg['templates'][123] = x("Affiche l'élément reCAPTCHA.");
$langmsg['templates'][124] = x("Affiche le nom de l'utilisateur inscrit.");
$langmsg['templates'][125] = x("Si vous êtes connecté en affiche le nom d'utilisateur.");
$langmsg['templates'][126] = x("Affiche le formulaire de recherche. Tous les noms et les ID doivent rester les mêmes.");
$langmsg['templates'][127] = x("Affiche le nombre pour chaque résultat de recherche");
$langmsg['templates'][128] = x("Formats comment les résultats de recherche affichés obtenir. Sont répétés pour chaque résultat.");
$langmsg['templates'][129] = x("Alterne entre émettre un ou deux pour chaque ligne.");
$langmsg['templates'][130] = x("Affiche le numéro de page en cours.");
$langmsg['templates'][131] = x("Affiche le numéro de la page précédente.");
$langmsg['templates'][132] = x("Affiche le numéro de la page suivante.");
$langmsg['templates'][133] = x("Affiche le titre amical de l'article de nouvelles.");
$langmsg['templates'][134] = x("formulaire de recherche");
$langmsg['templates'][135] = x("Résultats de la recherche");
$langmsg['templates'][136] = x("Les fichiers téléchargés");


$langmsg['uploadedfiles'][0] = x("File Uploads");
$langmsg['uploadedfiles'][1] = x("Télécharger un nouveau fichier");
$langmsg['uploadedfiles'][2] = x("Envoyer un fichier");
$langmsg['uploadedfiles'][4] = x("Choisissez un fichier:");
$langmsg['uploadedfiles'][5] = x("Fichier (s) supprimé.");
$langmsg['uploadedfiles'][6] = x("Fichier uploadé");
$langmsg['uploadedfiles'][7] = x("Il ya eu une erreur de chargement du fichier, s'il vous plaît essayer de nouveau.");
$langmsg['uploadedfiles'][8] = x("Extension de fichier non valide.");
$langmsg['uploadedfiles'][9] = x("Fichier non valide.");
$langmsg['uploadedfiles'][10] = x("Dossier retiré de catégorie.");
$langmsg['uploadedfiles'][11] = x("Fichier (s) ajoutée à la catégorie.");
$langmsg['uploadedfiles'][12] = x("Nom du fichier");
$langmsg['uploadedfiles'][13] = x("Sélectionnez une catégorie:");
$langmsg['uploadedfiles'][14] = x("Editer un fichier");
$langmsg['uploadedfiles'][15] = x("Titre:");
$langmsg['uploadedfiles'][16] = x("Description:");
$langmsg['uploadedfiles'][17] = x("Mise à jour de fichiers");
$langmsg['uploadedfiles'][18] = x("Fichier non valide");
$langmsg['uploadedfiles'][19] = x("Fichier mis à jour");
$langmsg['uploadedfiles'][20] = x("Vignettes");
$langmsg['uploadedfiles'][21] = x("Détails");
$langmsg['uploadedfiles'][22] = x("Catégorie:");
$langmsg['uploadedfiles'][23] = x("Titre");
$langmsg['uploadedfiles'][24] = x("Taille du fichier");
$langmsg['uploadedfiles'][25] = x("Uploader");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("Ajouter à catégorie");
$langmsg['uploadedfiles'][28] = x("Retirer de la catégorie");
$langmsg['uploadedfiles'][29] = x("Téléchargé des fichiers");
$langmsg['uploadedfiles'][30] = x("Un fichier portant ce nom existe déjà.");
$langmsg['uploadedfiles'][31] = x("Reset téléchargements:");
$langmsg['uploadedfiles'][32] = x("Toutes les catégories");
$langmsg['uploadedfiles'][33] = x("Téléchargements");
$langmsg['uploadedfiles'][34] = x("Uploaded");


$langmsg['admindata'][0] = x("Aider");
$langmsg['admindata'][1] = x("Ajouter Nouvelles");
$langmsg['admindata'][2] = x("Messages privés");
$langmsg['admindata'][3] = x("Modifier Nouvelles");
$langmsg['admindata'][4] = x("Edit Comments");


$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("Preview");
$langmsg['submitfield'][2] = x("Ajouter Nouvelles");
$langmsg['submitfield'][3] = x("Sauver");
$langmsg['submitfield'][4] = x("Envoyer");
$langmsg['submitfield'][5] = x("Créer");
$langmsg['submitfield'][6] = x("Mettre à jour");
$langmsg['submitfield'][7] = x("Ajouter");
$langmsg['submitfield'][8] = x("Supprimer");
$langmsg['submitfield'][9] = x("Recover");


$langmsg['selectfield'][0] = x("- Choisissez l'option --");
$langmsg['selectfield'][1] = x("Oui");
$langmsg['selectfield'][2] = x("Non");
$langmsg['selectfield'][3] = x("Supprimer");
$langmsg['selectfield'][4] = x("Besoin de l'approbation");
$langmsg['selectfield'][5] = x("Autoriser les commentaires");
$langmsg['selectfield'][6] = x("Changement d'approbation");
$langmsg['selectfield'][7] = x("Approbation");
$langmsg['selectfield'][8] = x("Commentaires");
$langmsg['selectfield'][9] = x("Approuver");
$langmsg['selectfield'][10] = x("Unapprove");
$langmsg['selectfield'][11] = x("Date");
$langmsg['selectfield'][12] = x("Titre");
$langmsg['selectfield'][13] = x("Auteur");
$langmsg['selectfield'][14] = x("Catégorie");
$langmsg['selectfield'][15] = x("# Comments");
$langmsg['selectfield'][16] = x("Marquer comme lu");
$langmsg['selectfield'][17] = x("Marquer comme non lu");
$langmsg['selectfield'][18] = x("Reset bloqué count");
$langmsg['selectfield'][19] = x("Créer une copie");
$langmsg['selectfield'][20] = x("Reset View Count");
$langmsg['selectfield'][21] = x("Reset evaluations");


$langmsg['js'][0] = x("Êtes-vous sûr de vouloir supprimer cette image de la catégorie?");
$langmsg['js'][1] = x("Etes-vous sûr de vouloir supprimer l'image sélectionnée (s)?");
$langmsg['js'][2] = x("Etes-vous sûr de vouloir supprimer le message sélectionné (s)?");
$langmsg['js'][3] = x("Etes-vous sûr de vouloir supprimer le modèle sélectionné (s)?");
$langmsg['js'][4] = x("Etes-vous sûr de vouloir supprimer ces adresses IP?");
$langmsg['js'][5] = x("Êtes-vous sûr de vouloir réinitialiser le compteur bloqué pour ces adresses IP");
$langmsg['js'][6] = x("Etes-vous sûr de vouloir supprimer ces niveau d'accès (s)?");
$langmsg['js'][7] = x("Etes-vous sûr de vouloir supprimer ces catégories?");
$langmsg['js'][8] = x("Etes-vous sûr de vouloir supprimer ces catégories et que les postes en eux?");
$langmsg['js'][9] = x("Etes-vous sûr de vouloir supprimer ces catégories?");
$langmsg['js'][10] = x("Etes-vous sûr de vouloir supprimer ces compte (s)?");
$langmsg['js'][11] = x("Etes-vous sûr de vouloir supprimer ces compte (s) et les messages?");
$langmsg['js'][12] = x("Etes-vous sûr de vouloir supprimer ces post (s)?");
$langmsg['js'][13] = x("Entrez du texte");
$langmsg['js'][14] = x("Texte");
$langmsg['js'][15] = x("S'il vous plaît entrer une couleur. Par exemple, rouge, jaune, bleu, (ou même des valeurs hexadécimal)");
$langmsg['js'][16] = x("bleu");
$langmsg['js'][17] = x("Entrez l'url du lien");
$langmsg['js'][18] = x("Entrez le texte à afficher");
$langmsg['js'][19] = x("Lien");
$langmsg['js'][20] = x("Entrez une taille de police");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Texte à afficher?");
$langmsg['js'][23] = x("Adresse Email");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Ecrivez-moi!");
$langmsg['js'][26] = x("Citer un texte?");
$langmsg['js'][27] = x("Citer");
$langmsg['js'][28] = x("Etes-vous sûr de vouloir supprimer commentaire sélectionné (s)?");
$langmsg['js'][29] = x("Etes-vous sûr de vouloir supprimer les catégories sélectionnées?");
$langmsg['js'][30] = x("Obtenir les smiles ... S'il vous plaît attendre.");
$langmsg['js'][31] = x("Etes-vous sûr de vouloir supprimer le fichier sélectionné (s)?");
$langmsg['js'][32] = x("Etes-vous sûr de vouloir supprimer les smileys sélectionnés?");
$langmsg['js'][33] = x("Etes-vous sûr de vouloir supprimer le filtre sélectionné (s)?");


$langmsg['news'][0] = x("S'il vous plaît entrer un nom.");
$langmsg['news'][1] = x("S'il vous plaît entrer un message.");
$langmsg['news'][2] = x("Blancs de sécurité clés");
$langmsg['news'][3] = x("Choisissez un autre nom.");
$langmsg['news'][4] = x("Blancs de sécurité clés");
$langmsg['news'][5] = x("Résultats trouvés:");
$langmsg['news'][6] = x("Les nouvelles inscriptions sont désactivées.");
$langmsg['news'][7] = x("Votre compte a été créé, vous pouvez maintenant <a href=\"{adminpath}\">ouvrir une session ici.</a>");
$langmsg['news'][8] = x("S'il vous plaît entrer un nom.");
$langmsg['news'][9] = x("S'il vous plaît entrer un message.");
$langmsg['news'][10] = x("Blancs de sécurité clés");
$langmsg['news'][11] = x("Choisissez un autre nom.");
$langmsg['news'][12] = x("Blancs de sécurité clés");
$langmsg['news'][13] = x("Je vous remercie pour votre cote.");
$langmsg['news'][14] = x("Vous avez déjà noté cet article.");
$langmsg['news'][15] = x("Nom");
$langmsg['news'][16] = x("Email:");
$langmsg['news'][17] = x("Courriel de votre ami:");
$langmsg['news'][18] = x("Message:");
$langmsg['news'][19] = x("Hey check out this article que j'ai trouvé!");
$langmsg['news'][20] = x("Envoyer à un ami");
$langmsg['news'][21] = x("Mail envoyé.");
$langmsg['news'][22] = x("S'il vous plaît entrer votre nom");
$langmsg['news'][23] = x("S'il vous plaît, entrez votre adresse e-mail");
$langmsg['news'][24] = x("S'il vous plaît entrer un message");
$langmsg['news'][25] = x("S'il vous plaît entrer votre adresse e-mail ami");
$langmsg['news'][27] = x("S'il vous plaît entrer une adresse électronique valide");
$langmsg['news'][28] = x("S'il vous plaît entrer votre adresse de courriel valide amis");
$langmsg['news'][29] = x("S'il vous plaît entrer un nom d'utilisateur.");
$langmsg['news'][30] = x("Ce nom d'utilisateur a déjà été prises, s'il vous plaît choisir un autre.");
$langmsg['news'][31] = x("Cette adresse email est déjà en service, s'il vous plaît choisir un autre.");
$langmsg['news'][32] = x("S'il vous plaît entrer une adresse e-mail.");
$langmsg['news'][33] = x("S'il vous plaît entrer une adresse email valide.");
$langmsg['news'][34] = x("S'il vous plaît entrer un mot de passe.");
$langmsg['news'][35] = x("S'il vous plaît confirmer votre mot de passe.");
$langmsg['news'][36] = x("Les mots de passe entrés ne correspondent pas.");
$langmsg['news'][37] = x("Clé de sécurité non valide.");
$langmsg['news'][38] = x("S'il vous plaît patienter");
$langmsg['news'][39] = x("Il y avait un problème d'envoyer votre message, s'il vous plaît contacter l'administrateur.");
$langmsg['news'][40] = x("Vous devez être connecté pour poster un commentaire.");
$langmsg['news'][41] = x("Nouveau commentaire sur {domain}");
$langmsg['news'][42] = x("Nom: {name} \n Email / URL: {email} \n IP:{ip} Message: {message}");
$langmsg['news'][43] = x("Nouvel enregistrement sur {domain}");
$langmsg['news'][44] = x("Nom: {name} \n Email: {email} \n IP: {ip}");
$langmsg['news'][45] = x("secondes avant de transmettre un autre message.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Nom");
$langmsg['news'][48] = x("Email / Web");
$langmsg['news'][49] = x("Message");
$langmsg['news'][50] = x("Entrez un Titre de l'article");
$langmsg['news'][51] = x("Résumé");
$langmsg['news'][52] = x("Pas de catégories");
$langmsg['news'][53] = x("Date");
$langmsg['news'][54] = x("Date de cet article a été publié");
$langmsg['news'][55] = x("Archives");


$langmsg['shortmonths'][0] = x("Jan");
$langmsg['shortmonths'][1] = x("Février");
$langmsg['shortmonths'][2] = x("Mar");
$langmsg['shortmonths'][3] = x("Avril");
$langmsg['shortmonths'][4] = x("Mai");
$langmsg['shortmonths'][5] = x("Juin");
$langmsg['shortmonths'][6] = x("Juillet");
$langmsg['shortmonths'][7] = x("Août");
$langmsg['shortmonths'][8] = x("Septembre");
$langmsg['shortmonths'][9] = x("Octobre");
$langmsg['shortmonths'][10] = x("Novembre");
$langmsg['shortmonths'][11] = x("Décembre");


$langmsg['months'][0] = x("Janvier");
$langmsg['months'][1] = x("Février");
$langmsg['months'][2] = x("Mars");
$langmsg['months'][3] = x("Avril");
$langmsg['months'][4] = x("Mai");
$langmsg['months'][5] = x("Juin");
$langmsg['months'][6] = x("Juillet");
$langmsg['months'][7] = x("Août");
$langmsg['months'][8] = x("Septembre");
$langmsg['months'][9] = x("Octobre");
$langmsg['months'][10] = x("Novembre");
$langmsg['months'][11] = x("Décembre");


$langmsg['search'][0] = x("Active nouvelles");
$langmsg['search'][1] = x("Nouvelles archivées");
$langmsg['search'][2] = x("Plus récent en premier");
$langmsg['search'][3] = x("Plus ancien en premier");
$langmsg['search'][4] = x("Recherche");
$langmsg['search'][5] = x("Date de gamme");


$langmsg['install'][0] = x("Base de données Informations de connexion");
$langmsg['install'][1] = x("Entrez votre serveur MySQL infos ci-dessous.");
$langmsg['install'][2] = x("Serveur:");
$langmsg['install'][3] = x("(généralement localhost)");
$langmsg['install'][4] = x("Nom d&#39;utilisateur:");
$langmsg['install'][5] = x("Mot de passe:");
$langmsg['install'][6] = x("Base de données:");
$langmsg['install'][7] = x("Test de connexion");
$langmsg['install'][8] = x("Connexion au serveur:");
$langmsg['install'][9] = x("Sélection de la base:");
$langmsg['install'][10] = x("Impossible d&#39;écrire sur db.php, s&#39;il vous plaît CHMOD ce fichier à 777");
$langmsg['install'][11] = x("Informations du compte");
$langmsg['install'][12] = x("Entrez les détails de votre compte ci-dessous. Il sera utilisé pour vous connecter.");
$langmsg['install'][13] = x("Email:");
$langmsg['install'][14] = x("Confirmer Mot de passe:");
$langmsg['install'][15] = x("Continuer");
$langmsg['install'][16] = x("S&#39;il vous plaît entrer un nom d&#39;utilisateur");
$langmsg['install'][17] = x("S&#39;il vous plaît entrer une adresse e-mail");
$langmsg['install'][18] = x("S&#39;il vous plaît entrer votre mot de passe");
$langmsg['install'][19] = x("Appuyez sur Installer pour terminer l&#39;installation");
$langmsg['install'][20] = x("Vos mots de passe ne correspondent pas");
$langmsg['install'][21] = x("Installez");
$langmsg['install'][22] = x("Finaliser l&#39;installation");
$langmsg['install'][23] = x("SUCCÈS!");
$langmsg['install'][24] = x("Nouvelles N-13 a été installé.");
$langmsg['install'][25] = x("Se connecter sur le site d&#39;administration.");
$langmsg['install'][26] = x("Port:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Extension:");
$langmsg['install'][29] = x("(laisser vide pour défaut)");
$langmsg['install'][30] = x("Installation ... S'il vous plaît attendre.");
$langmsg['install'][31] = x("La fonction mysqli_connect n'a pas été trouvé.");
$langmsg['install'][32] = x("La fonction pdo_mysql n'a pas été trouvé.");
?>