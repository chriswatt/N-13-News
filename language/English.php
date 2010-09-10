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
#   LANGUAGE    English                                 #
#   VERSION     4.0                                     #
#   AUTHOR      chris@network-13.com                    #
#                                                       #
#   Any words you see wrapped in { } braces,            #
#   for example {totalnews} need to be left like that.  #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

#-----MENUS
$langmsg['menu'][0] = x("Add Article");
$langmsg['menu'][1] = x("Edit Articles");
$langmsg['menu'][2] = x("Archives");
$langmsg['menu'][3] = x("New Message");
$langmsg['menu'][4] = x("Inbox");
$langmsg['menu'][5] = x("Outbox");
$langmsg['menu'][6] = x("Accounts");
$langmsg['menu'][7] = x("Access Levels");
$langmsg['menu'][8] = x("Banned IPs");
$langmsg['menu'][9] = x("Categories");
$langmsg['menu'][10] = x("Image Uploads");
$langmsg['menu'][11] = x("Personal");
$langmsg['menu'][12] = x("Profile");
$langmsg['menu'][13] = x("RSS Feeds");
$langmsg['menu'][14] = x("Smilies");
$langmsg['menu'][15] = x("System");
$langmsg['menu'][16] = x("Templates");
$langmsg['menu'][17] = x("Word Filters");
$langmsg['menu'][18] = x("Home");
$langmsg['menu'][19] = x("Articles");
$langmsg['menu'][20] = x("Messages");
$langmsg['menu'][21] = x("Options");
$langmsg['menu'][22] = x("Help");
$langmsg['menu'][23] = x("Logout");
$langmsg['menu'][24] = x("File Uploads");

#-----HOME MODULE
$langmsg['home'][0] = x("Global news stats below.");
$langmsg['home'][1] = x("Welcome");
$langmsg['home'][2] = x("The PHP setting 'magic_quotes_gpc' has been detected as enabled. It's recommended you disable this setting.");
$langmsg['home'][3] = x("The PHP setting 'register_globals' has been detected as enabled. It's recommended you disable this as it can cause security issues and errors to occur.");
$langmsg['home'][4] = x("Install directory has been detected. Please delete this directory.");
$langmsg['home'][5] = x("The Install directory cannot be deleted, please delete this directory manually");
$langmsg['home'][6] = x("Total News:");
$langmsg['home'][7] = x("Total Comments:");
$langmsg['home'][8] = x("Total Users:");
$langmsg['home'][9] = x("Total Smilies:");
$langmsg['home'][10] = x("Total Filters:");
$langmsg['home'][11] = x("Total Categories:");
$langmsg['home'][12] = x("Total Templates:");
$langmsg['home'][13] = x("Total Access Levels:");
$langmsg['home'][14] = x("Connecting to database:");
$langmsg['home'][15] = x("Optimizing all tables:");
$langmsg['home'][16] = x("Current version:");
$langmsg['home'][17] = x("Latest version:");
$langmsg['home'][18] = x("View access logs");
$langmsg['home'][19] = x("Query time:");
$langmsg['home'][20] = x("Unread messages");
$langmsg['home'][21] = x("Try delete this directory automatically?");
$langmsg['home'][22] = x("seconds");
$langmsg['home'][23] = x("Total Images");
$langmsg['home'][24] = x("Total Files");
$langmsg['home'][25] = x("Total RSS Feeds");

#-----ADDNEWS MODULE
$langmsg['addnews'][0] = x("News Preview");
$langmsg['addnews'][1] = x("Please enter a title");
$langmsg['addnews'][2] = x("Please select if this posts will allow comments or not");
$langmsg['addnews'][3] = x("Add Article");
$langmsg['addnews'][4] = x("Please select a category");

#-----EDITNEWS MODULE
$langmsg['editnews'][0] = x("Edit Articles");
$langmsg['editnews'][1] = x("Showing");
$langmsg['editnews'][2] = x("Options");
$langmsg['editnews'][3] = x("Amount to display");
$langmsg['editnews'][4] = x("Sort by");
$langmsg['editnews'][5] = x("Order");
$langmsg['editnews'][7] = x("Title");
$langmsg['editnews'][8] = x("Author");
$langmsg['editnews'][9] = x("Categories");
$langmsg['editnews'][10] = x("Date");
$langmsg['editnews'][11] = x("Approval");
$langmsg['editnews'][12] = x("Comments");
$langmsg['editnews'][13] = x("[show]");
$langmsg['editnews'][14] = x("Approved");
$langmsg['editnews'][15] = x("Unapproved");
$langmsg['editnews'][16] = x("News added.");
$langmsg['editnews'][17] = x("Selected posts deleted.");
$langmsg['editnews'][18] = x("Selected posts updated.");
$langmsg['editnews'][19] = x("News updated.");
$langmsg['editnews'][20] = x("Disabled");
$langmsg['editnews'][21] = x("articles.");
$langmsg['editnews'][22] = x("in total.");
$langmsg['editnews'][23] = x("View count reset to 0 for the selected article(s)");
$langmsg['editnews'][24] = x("Ratings reset for the selected article(s)");
$langmsg['editnews'][25] = x("Filter by category");

#-----NEWSFORM
$langmsg['newsform'][0] = x("Add your news post below.");
$langmsg['newsform'][1] = x("Title");
$langmsg['newsform'][2] = x("Categories");
$langmsg['newsform'][3] = x("Short Story");
$langmsg['newsform'][4] = x("Story");
$langmsg['newsform'][5] = x("HTML Disabled");
$langmsg['newsform'][6] = x("HTML Enabled");
$langmsg['newsform'][7] = x("Comments");
$langmsg['newsform'][8] = x("Toggle date");
$langmsg['newsform'][9] = x("Toggle short story");
$langmsg['newsform'][16] = x("Date:");
$langmsg['newsform'][17] = x("Toggle archive");
$langmsg['newsform'][18] = x("Never archive this article");
$langmsg['newsform'][19] = x("File Uploads");
$langmsg['newsform'][20] = x("Downloads");
$langmsg['newsform'][21] = x("Uploaded");
$langmsg['newsform'][22] = x("Article");
$langmsg['newsform'][23] = x("Enter an image URL");
$langmsg['newsform'][24] = x("Insert");
$langmsg['newsform'][25] = x("Select an uploaded image");

#-----COMMENTS MODULE
$langmsg['editcomments'][0] = x("Edit Comments");
$langmsg['editcomments'][1] = x("Edit the comment below.");
$langmsg['editcomments'][2] = x("Author:");	
$langmsg['editcomments'][3] = x("Email:");
$langmsg['editcomments'][4] = x("Message:");
$langmsg['editcomments'][5] = x("Comment updated.");
$langmsg['editcomments'][6] = x("comments deleted.");
$langmsg['editcomments'][7] = x("comments updated.");
$langmsg['editcomments'][8] = x("comments in total.");
$langmsg['editcomments'][9] = x("Message");
$langmsg['editcomments'][10] = x("Date");
$langmsg['editcomments'][11] = x("Approval");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Approved");
$langmsg['editcomments'][14] = x("Unapproved");
$langmsg['editcomments'][15] = x("Location:");

#-----PRIVATE MESSAGES MODUKE
$langmsg['privmsgs'][0] = x("Private Messages");
$langmsg['privmsgs'][1] = x("Inbox");
$langmsg['privmsgs'][2] = x("Outbox");
$langmsg['privmsgs'][3] = x("New Message");
$langmsg['privmsgs'][4] = x("You have");
$langmsg['privmsgs'][5] = x("Title");
$langmsg['privmsgs'][6] = x("From");
$langmsg['privmsgs'][7] = x("Sent");
$langmsg['privmsgs'][8] = x("To");
$langmsg['privmsgs'][9] = x("Reply to this message");
$langmsg['privmsgs'][10] = x("New private message.");
$langmsg['privmsgs'][11] = x("Send to:");
$langmsg['privmsgs'][12] = x("Title:");
$langmsg['privmsgs'][13] = x("Message:");
$langmsg['privmsgs'][14] = x("Example 'user1, user2, user3'");
$langmsg['privmsgs'][15] = x("Message preview.");
$langmsg['privmsgs'][16] = x("Message sent to the following users.");
$langmsg['privmsgs'][17] = x("Please enter a user to send this message to.");
$langmsg['privmsgs'][18] = x("Please enter a title for this message.");
$langmsg['privmsgs'][19] = x("Please enter a message.");
$langmsg['privmsgs'][20] = x("Messages deleted.");
$langmsg['privmsgs'][21] = x("unread messages.");
$langmsg['privmsgs'][22] = x("messages in total.");

#-----OPTIONS MODULE
$langmsg['options'][0] = x("Options");
$langmsg['options'][1] = x("New");
$langmsg['options'][2] = x("Edit");

#-----BANNED IPS MODULE
$langmsg['bannedips'][0] = x("Banned IPs");
$langmsg['bannedips'][1] = x("Banned IPs.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Amount of times blocked");
$langmsg['bannedips'][4] = x("Add a new IP address.");
$langmsg['bannedips'][5] = x("Banned message. (html is enabled)");
$langmsg['bannedips'][6] = x("IP Address:");
$langmsg['bannedips'][7] = x("That IP address is already banned.");
$langmsg['bannedips'][8] = x("IP address banned.");
$langmsg['bannedips'][9] = x("IP addresses deleted.");
$langmsg['bannedips'][10] = x("IP addresses have been reset.");
$langmsg['bannedips'][11] = x("Banned message updated.");

#-----CATEGORIES MODULE
$langmsg['cats'][0] = x("Categories");
$langmsg['cats'][1] = x("Categories.");
$langmsg['cats'][2] = x("Name");
$langmsg['cats'][3] = x("Articles");
$langmsg['cats'][4] = x("Create a new category.");
$langmsg['cats'][5] = x("Name:");
$langmsg['cats'][6] = x("The following categories have been deleted:");
$langmsg['cats'][7] = x("Please choose another name.");
$langmsg['cats'][8] = x("Category created.");
$langmsg['cats'][9] = x("Category updated.");
$langmsg['cats'][10] = x("Edit your category below.");
$langmsg['cats'][11] = x("Images");
$langmsg['cats'][12] = x("Files");
$langmsg['cats'][13] = x("A category with that name already exists, please choose another.");

#-----IMAGE UPLOADS MODULE
$langmsg['img'][0] = x("Image Uploads");
$langmsg['img'][1] = x("Upload a new image");
$langmsg['img'][2] = x("Upload File");
$langmsg['img'][3] = x("Images in total");
$langmsg['img'][4] = x("Choose an image:");
$langmsg['img'][5] = x("image(s) deleted.");
$langmsg['img'][6] = x("Image uploaded");
$langmsg['img'][7] = x("There was an error uploading the file, please try again.");
$langmsg['img'][8] = x("Invalid file extension.");
$langmsg['img'][9] = x("Invalid image.");
$langmsg['img'][10] = x("Image removed from category.");
$langmsg['img'][11] = x("Image(s) added to category.");
$langmsg['img'][12] = x("Filename:");
$langmsg['img'][13] = x("Select a category:");
$langmsg['img'][14] = x("Edit an image");
$langmsg['img'][15] = x("Title:");
$langmsg['img'][16] = x("Description:");
$langmsg['img'][17] = x("Update Image");
$langmsg['img'][18] = x("Invalid image");
$langmsg['img'][19] = x("Image updated");
$langmsg['img'][20] = x("Thumbnails");
$langmsg['img'][21] = x("Details");
$langmsg['img'][22] = x("Category:");
$langmsg['img'][23] = x("Filename");
$langmsg['img'][24] = x("Filesize");
$langmsg['img'][25] = x("Uploader");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("Add to category");
$langmsg['img'][28] = x("Remove from category");
$langmsg['img'][29] = x("Uploaded images");
$langmsg['img'][30] = x("A file with that name already exists.");
$langmsg['img'][31] = x("All Categories");
$langmsg['img'][32] = x("Unable to write to the uploads directory. CHMOD this directory to 777");

#-----PERSONAL MODULE
$langmsg['personal'][0] = x("Personal Options");
$langmsg['personal'][1] = x("Edit your account info below.");
$langmsg['personal'][2] = x("Personal settings for");
$langmsg['personal'][3] = x("Avatar:");
$langmsg['personal'][4] = x("Email address:");
$langmsg['personal'][5] = x("Message alerts:");
$langmsg['personal'][6] = x("Get alerted of unread messages on initial login?");
$langmsg['personal'][7] = x("New Password:");
$langmsg['personal'][8] = x("(leave blank to keep current)");
$langmsg['personal'][9] = x("Confirm password:");
$langmsg['personal'][10] = x("An email address must be entered.");
$langmsg['personal'][11] = x("Settings updated.");
$langmsg['personal'][12] = x("Passwords don't match.");
$langmsg['personal'][13] = x("Enable WYSIWYG editor?");
$langmsg['personal'][14] = x("Default Options");

#-----LOGIN MODULE
$langmsg['login'][0] = x("Please Login");
$langmsg['login'][1] = x("Name:");
$langmsg['login'][2] = x("Password:");
$langmsg['login'][3] = x("Forgot your password?");
$langmsg['login'][4] = x("Remember me");
$langmsg['login'][5] = x("Security Key:");
$langmsg['login'][6] = x("Login");
$langmsg['login'][7] = x("Invalid security key");
$langmsg['login'][8] = x("Invalid name or password");
$langmsg['login'][9] = x("Type this code below");

#-----PROFILE MODULE
$langmsg['profile'][0] = x("Edit Profile");
$langmsg['profile'][1] = x("Edit your profile below.");
$langmsg['profile'][2] = x("Name:");
$langmsg['profile'][3] = x("Age:");
$langmsg['profile'][4] = x("Location:");
$langmsg['profile'][5] = x("Sex:");
$langmsg['profile'][6] = x("Profile picture:");
$langmsg['profile'][7] = x("Homepage:");
$langmsg['profile'][8] = x("Interests:");
$langmsg['profile'][9] = x("Hobbies:");
$langmsg['profile'][10] = x("Occupation:");
$langmsg['profile'][11] = x("Favourite Quote:");
$langmsg['profile'][12] = x("Male");
$langmsg['profile'][13] = x("Female");
$langmsg['profile'][14] = x("Profile updated.");
$langmsg['profile'][15] = x("None");

#-----ACCOUNTS MODULE
$langmsg['accounts'][0] = x("Accounts");
$langmsg['accounts'][1] = x("Accounts.");
$langmsg['accounts'][2] = x("Username");
$langmsg['accounts'][3] = x("Access level");
$langmsg['accounts'][4] = x("Articles");
$langmsg['accounts'][5] = x("Comments");
$langmsg['accounts'][6] = x("Create a new account.");
$langmsg['accounts'][7] = x("Account name:");
$langmsg['accounts'][8] = x("Email:");
$langmsg['accounts'][9] = x("New Password:");
$langmsg['accounts'][10] = x("Confirm Password:");
$langmsg['accounts'][11] = x("Access Level:");
$langmsg['accounts'][12] = x("New account.");
$langmsg['accounts'][13] = x("Edit the account below.");
$langmsg['accounts'][14] = x("An email address must be entered.");
$langmsg['accounts'][15] = x("Account updated.");
$langmsg['accounts'][16] = x("Passwords don't match.");
$langmsg['accounts'][17] = x("An account name must be entered.");
$langmsg['accounts'][18] = x("Account name already exists. Please choose another.");
$langmsg['accounts'][19] = x("A password must be entered.");
$langmsg['accounts'][20] = x("Account created.");
$langmsg['accounts'][21] = x("The following accounts have been deleted:");
$langmsg['accounts'][22] = x("You can't delete your own account.");
$langmsg['accounts'][23] = x("(Leave blank to keep current)");
$langmsg['accounts'][24] = x("An account is already using that email address, please choose another.");
$langmsg['accounts'][25] = x("Please enter an account name");
$langmsg['accounts'][26] = x("Files");
$langmsg['accounts'][27] = x("Images");

#----ACCESS MODULE
$langmsg['access'][0] = x("Access Levels");
$langmsg['access'][1] = x("Create a new access level.");
$langmsg['access'][2] = x("Name:");
$langmsg['access'][3] = x("Which sections can this level access?");
$langmsg['access'][4] = x("Accounts:");
$langmsg['access'][5] = x("Access Levels:");
$langmsg['access'][6] = x("Banned IPs:");
$langmsg['access'][7] = x("Categories:");
$langmsg['access'][8] = x("Comments:");
$langmsg['access'][9] = x("Help:");
$langmsg['access'][10] = x("Image Uploads:");
$langmsg['access'][11] = x("News:");
$langmsg['access'][12] = x("Persional Options:");
$langmsg['access'][13] = x("Private Messages:");
$langmsg['access'][14] = x("Profile:");
$langmsg['access'][15] = x("RSS Feeds:");
$langmsg['access'][16] = x("Smilies:");
$langmsg['access'][17] = x("System Configuration:");
$langmsg['access'][18] = x("Templates:");
$langmsg['access'][19] = x("Word Filters:");
$langmsg['access'][20] = x("Which categories can this access level use?");
$langmsg['access'][21] = x("All:");
$langmsg['access'][22] = x("Which posts can this level edit?");
$langmsg['access'][23] = x("Admin (All)");
$langmsg['access'][24] = x("Mod (Own + Members)");
$langmsg['access'][25] = x("Member (Own)");
$langmsg['access'][26] = x("Are posts made by this access level automatically approved?");
$langmsg['access'][27] = x("Can this access level approve posts?");
$langmsg['access'][28] = x("Can this access level use HTML?");
$langmsg['access'][29] = x("Allow posting without selecting a category?");
$langmsg['access'][30] = x("Access levels deleted:");
$langmsg['access'][31] = x("The following access levels have not been deleted because they have 1 or more accounts assigned to them:");
$langmsg['access'][32] = x("Edit the access level below.");
$langmsg['access'][33] = x("Please enter a name for this access level.");
$langmsg['access'][34] = x("Access level updated.");
$langmsg['access'][35] = x("An access level with that name already exists, please choose another.");
$langmsg['access'][36] = x("Please select which posts this level can edit.");
$langmsg['access'][37] = x("Please select if this access level's posts get auto approved");
$langmsg['access'][38] = x("Please select if this access level can approve posts");
$langmsg['access'][39] = x("Please select if this access level can use HTML");
$langmsg['access'][40] = x("Please select if this access level can post without selecting a category");
$langmsg['access'][41] = x("Access level created.");
$langmsg['access'][42] = x("Access levels.");
$langmsg['access'][43] = x("Name");
$langmsg['access'][44] = x("Access");
$langmsg['access'][45] = x("Accounts");
$langmsg['access'][46] = x("Member");
$langmsg['access'][47] = x("Moderator");
$langmsg['access'][48] = x("Administrator");
$langmsg['access'][49] = x("File Uploads");
$langmsg['access'][50] = x("Can this access level view user IP addresses?");
$langmsg['access'][51] = x("Which files & images can this access level edit?");
$langmsg['access'][52] = x("Own");
$langmsg['access'][53] = x("All");

#-----ACCESSLOGS MODULE
$langmsg['accesslogs'][0] = x("Access Logs");
$langmsg['accesslogs'][1] = x("Username");
$langmsg['accesslogs'][2] = x("Attempt");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Date");
$langmsg['accesslogs'][5] = x("Access logs for");
$langmsg['accesslogs'][6] = x("Successful");
$langmsg['accesslogs'][7] = x("Usuccessful");

#-----FILTERS MODULE
$langmsg['filters'][0] = x("Word Filters");
$langmsg['filters'][1] = x("Filter added.");
$langmsg['filters'][2] = x("Filters removed.");
$langmsg['filters'][3] = x("All words below will be filtered from all comments.");
$langmsg['filters'][4] = x("Filtered Word");
$langmsg['filters'][5] = x("Replace With");
$langmsg['filters'][6] = x("Delete");
$langmsg['filters'][7] = x("Add a new filter");

#-----RSS MODULE
$langmsg['rss'][0] = x("RSS Feeds");
$langmsg['rss'][1] = x("Edit your RSS feed settings below");
$langmsg['rss'][2] = x("The news location is where you will be displaying your news, for example http://yourdomain.com/ or http://yourdomain.com/index");
$langmsg['rss'][3] = x("Feed name:");
$langmsg['rss'][4] = x("News location:");
$langmsg['rss'][5] = x("Title of your RSS feed:");
$langmsg['rss'][6] = x("Description of your RSS feed:");
$langmsg['rss'][7] = x("Character encoding:");
$langmsg['rss'][8] = x("Language:");
$langmsg['rss'][9] = x("Amount of posts to display:");
$langmsg['rss'][10] = x("0 = all");
$langmsg['rss'][11] = x("Categories to display:");
$langmsg['rss'][12] = x("Display posts which haven't been assigned a category?");
$langmsg['rss'][13] = x("Rss Code:");
$langmsg['rss'][14] = x("Edit how your feed is displayed");
$langmsg['rss'][15] = x("Displays the title of the article.");
$langmsg['rss'][16] = x("Shows the summary.");	
$langmsg['rss'][17] = x("Shows the article.");
$langmsg['rss'][18] = x("Shows the categories each post has been assigned to.");    
$langmsg['rss'][19] = x("Shows the URL for a specific post.");
$langmsg['rss'][20] = x("Shows the date the article was published on.");
$langmsg['rss'][21] = x("Shows the timezone setting.");
$langmsg['rss'][22] = x("Shows the timestamp of each post.");
$langmsg['rss'][23] = x("Shows the author the article.");
$langmsg['rss'][24] = x("Shows the users avatar if they have one.");
$langmsg['rss'][25] = x("Shows the unique ID each article has.");
$langmsg['rss'][26] = x("Shows the amount of comments for each news post.");
$langmsg['rss'][27] = x("Please enter a feedname");
$langmsg['rss'][28] = x("Please enter a news location");
$langmsg['rss'][29] = x("Please enter a title");
$langmsg['rss'][30] = x("Please enter a description");
$langmsg['rss'][31] = x("Please enter the character encoding");
$langmsg['rss'][32] = x("Please enter a language");
$langmsg['rss'][33] = x("Please enter an amount to display");
$langmsg['rss'][34] = x("RSS Feed created");
$langmsg['rss'][35] = x("A feed with that name already exists, please choose another");
$langmsg['rss'][36] = x("RSS Feed updated");
$langmsg['rss'][37] = x("RSS Feeds");
$langmsg['rss'][38] = x("RSS feed(s) deleted.");
$langmsg['rss'][39] = x("Name");
$langmsg['rss'][40] = x("Categories");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Create a new RSS Feed.");
$langmsg['rss'][43] = x("Displays the friendly title of the article.");

#-----SMILIES MODULE
$langmsg['smilies'][0] = x("Smilies");
$langmsg['smilies'][1] = x("This is useful if you want to update the location of all your smilies at once.");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("Replace");
$langmsg['smilies'][4] = x("Replace with");
$langmsg['smilies'][5] = x("All paths updated.");
$langmsg['smilies'][6] = x("Create a new smilie");
$langmsg['smilies'][7] = x("Path:");
$langmsg['smilies'][8] = x("Keycode:");
$langmsg['smilies'][9] = x("Please enter the path to the smiley.");
$langmsg['smilies'][10] = x("Please enter a keycode for this smiley.");
$langmsg['smilies'][11] = x("Keycode already in use. Please choose a different keycode.");
$langmsg['smilies'][12] = x("Smiley added.");
$langmsg['smilies'][13] = x("Are you sure you want to delete this smiley?");
$langmsg['smilies'][14] = x("Smiley deleted.");
$langmsg['smilies'][15] = x("Edit the smiley below");
$langmsg['smilies'][16] = x("Smiley:");
$langmsg['smilies'][17] = x("Smiley updated.");
$langmsg['smilies'][18] = x("Smilies have been deleted");
$langmsg['smilies'][19] = x("Please select which smiley you would like to edit.");
$langmsg['smilies'][20] = x("Smiley");
$langmsg['smilies'][21] = x("Insert a new smiley.");
$langmsg['smilies'][22] = x("Update path of all smilies");

#-----SYSTEM MODULE
$langmsg['system'][0] = x("System Configuration");
$langmsg['system'][1] = x("Edit the system configurations.");
$langmsg['system'][2] = x("News");
$langmsg['system'][3] = x("Amount of news per page:");
$langmsg['system'][4] = x("What order the news is displayed in:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("Date & time format for news:");
$langmsg['system'][8] = x("See here");
$langmsg['system'][9] = x("Show avatars:");
$langmsg['system'][10] = x("Delimiter to separate categories when displaying news:");
$langmsg['system'][11] = x("Comments");
$langmsg['system'][12] = x("Amount of comments per page:");
$langmsg['system'][13] = x("What order comments are displayed in:");
$langmsg['system'][14] = x("Date & time format for comments:");
$langmsg['system'][15] = x("Maximum length of comments:");
$langmsg['system'][16] = x("Show comments in new window:");
$langmsg['system'][17] = x("Time delay after posting comments (Spam protection):");
$langmsg['system'][18] = x("Seconds");
$langmsg['system'][19] = x("Spam message:");
$langmsg['system'][20] = x("New comment message:");
$langmsg['system'][21] = x("New comment approval message:");
$langmsg['system'][22] = x("Use image verification on comments form:");
$langmsg['system'][23] = x("Friendly URLs");
$langmsg['system'][24] = x("Enable friendly URLs:");
$langmsg['system'][25] = x("File extension:");
$langmsg['system'][26] = x("Prefix:");
$langmsg['system'][27] = x("Directory filename:");
$langmsg['system'][28] = x("Registration");
$langmsg['system'][29] = x("Allow users to register:");
$langmsg['system'][30] = x("Access level for new users:");
$langmsg['system'][31] = x("Other");
$langmsg['system'][32] = x("Timezone:");
$langmsg['system'][33] = x("Allowed file types of uploaded images:");
$langmsg['system'][34] = x("Image uploads path:");
$langmsg['system'][35] = x("No access error message:");
$langmsg['system'][36] = x("Settings updated.");
$langmsg['system'][37] = x("Time delay after using send to (Spam protection):");
$langmsg['system'][38] = x("Notifications");
$langmsg['system'][39] = x("Get email notifications of new comments:");
$langmsg['system'][40] = x("Get email notifications of new registrations:");
$langmsg['system'][41] = x("Allow only registered users to comment:");
$langmsg['system'][42] = x("Send notifications to this email address:");
$langmsg['system'][43] = x("Allowed file types of uploaded files:");
$langmsg['system'][44] = x("Get email notifications of unapproved news posts:");
$langmsg['system'][45] = x("Public key");
$langmsg['system'][46] = x("Private key");
$langmsg['system'][47] = x("Script path");
$langmsg['system'][48] = x("Allow registered users to delete their own comments:");
$langmsg['system'][49] = x("Use image verification on the index login form:");
$langmsg['system'][50] = x("Use image verification on registration form:");
$langmsg['system'][51] = x("Date & time format for files:");
$langmsg['system'][52] = x("Show 'Powered by' below your news:");
	

#-----RECOVERY MODULE
$langmsg['recover'][0] = x("Password Recovery");
$langmsg['recover'][1] = x("Enter the email address of the account you'd like to reset the password for.");
$langmsg['recover'][2] = x("Email:");
$langmsg['recover'][3] = x("You or someone has requested to reset your password follow the link below to do so.");
$langmsg['recover'][4] = x("Click here to reset your password");
$langmsg['recover'][5] = x("An email has been sent to");
$langmsg['recover'][6] = x("An account with that email doesn't exist, please contact the administrator.");
$langmsg['recover'][7] = x("New Password");
$langmsg['recover'][8] = x("Please enter your new password below.");
$langmsg['recover'][9] = x("Unable to send a recovery email, please contact your system administrator.");
$langmsg['recover'][10] = x("Confirm Password:");
$langmsg['recover'][11] = x("Passwords don't match.");
$langmsg['recover'][12] = x("Your password has been updated.");
$langmsg['recover'][13] = x("with further instructions on retrieving your account.");

#-----TEMPLATES MODULE
$langmsg['templates'][0] = x("Templates");
$langmsg['templates'][1] = x("Create a new template.");
$langmsg['templates'][2] = x("Name:");
$langmsg['templates'][3] = x("Changes how your news is displayed.");
$langmsg['templates'][4] = x("Displays the title of the article.");
$langmsg['templates'][5] = x("Shows the summary.");
$langmsg['templates'][6] = x("Shows the article.");
$langmsg['templates'][7] = x("Shows the date the article was published on.");
$langmsg['templates'][8] = x("Shows the categories each post has been assigned to.");
$langmsg['templates'][9] = x("Shows the author the article.");
$langmsg['templates'][10] = x("Shows the users avatar if they have one.");
$langmsg['templates'][11] = x("Shows the unique ID each article has.");
$langmsg['templates'][12] = x("Shows the IP address of the author. (Only shows if you are logged in)");
$langmsg['templates'][13] = x("Shows the link to read the full post");
$langmsg['templates'][14] = x("Will show your email address.");
$langmsg['templates'][15] = x("Will create a link to your email address.");
$langmsg['templates'][16] = x("Will create a link to your profile.");
$langmsg['templates'][17] = x("Shows the amount of comments for each news post.");
$langmsg['templates'][18] = x("Will create a link to the comments.");
$langmsg['templates'][19] = x("Anything put between these tags will only show if logged in.");
$langmsg['templates'][20] = x("Path to smilies");
$langmsg['templates'][21] = x("Comments");
$langmsg['templates'][22] = x("Changes how the comments are displayed.");
$langmsg['templates'][23] = x("Displays the author of the comment.");
$langmsg['templates'][24] = x("Shows the message.");
$langmsg['templates'][25] = x("Shows the users avatar if they have one.");
$langmsg['templates'][26] = x("Shows the IP address of the author. (Only shows if you are logged in)");
$langmsg['templates'][27] = x("Shows the unique ID each comment has.");
$langmsg['templates'][28] = x("Shows the email address of the user who commented.");
$langmsg['templates'][29] = x("Will create a link to the users email.");
$langmsg['templates'][30] = x("Shows the date the comment was published on.");
$langmsg['templates'][31] = x("Anything put between these tags will only show if logged in.");
$langmsg['templates'][32] = x("Comments Form");
$langmsg['templates'][33] = x("It's important when editing this to keep all the input field names and IDs the same otherwise it won't work. Also notice the form onsubmit attribute useajax='', yes or no determines if ajax is used when the user submits a comment.");
$langmsg['templates'][34] = x("Displays the ID of the news post.");
$langmsg['templates'][35] = x("Displays the category ID of the news post.");
$langmsg['templates'][36] = x("Will show your username if logged in.");
$langmsg['templates'][37] = x("Will show your email if logged in.");
$langmsg['templates'][38] = x("Will show the message.");
$langmsg['templates'][39] = x("Will show all the smilies.");
$langmsg['templates'][40] = x("News Pagination");
$langmsg['templates'][44] = x("Comments Pagination");
$langmsg['templates'][45] = x("Shows the previous link if there is any.");
$langmsg['templates'][46] = x("Shows the next link if there is any.");
$langmsg['templates'][47] = x("Will show the amount of pages, Ex: 1 2 3 4.");
$langmsg['templates'][48] = x("Profiles");
$langmsg['templates'][49] = x("Edit how users profiles are displayed.");
$langmsg['templates'][50] = x("Shows the users username.");
$langmsg['templates'][51] = x("Shows the users name.");
$langmsg['templates'][52] = x("Shows the users age.");
$langmsg['templates'][53] = x("Shows the users location.");
$langmsg['templates'][54] = x("Shows the users sex.");
$langmsg['templates'][55] = x("Create a link to the users homepage.");
$langmsg['templates'][56] = x("Shows the users interests.");
$langmsg['templates'][57] = x("Shows the users hobbies.");
$langmsg['templates'][58] = x("Shows the users occupation.");
$langmsg['templates'][59] = x("Shows the users favourite quote.");
$langmsg['templates'][60] = x("Display the users profile picture.");
$langmsg['templates'][61] = x("News Structure");
$langmsg['templates'][62] = x("This is where you can control the phyiscal order of how each news element is displayed, for example if you want the pagintation to be displayed above your news aswell as below it you can do that here.");
$langmsg['templates'][63] = x("Displays your news posts.");
$langmsg['templates'][64] = x("Displays the news pagintation.");
$langmsg['templates'][65] = x("Comments Structure");
$langmsg['templates'][66] = x("This is where you can control the phyiscal order of how each news element is displayed when viewing comments, for example if you want the pagintation to be displayed above your comments aswell as below it you can do that here.");
$langmsg['templates'][67] = x("Displays the single news posts when viewing comments");
$langmsg['templates'][68] = x("Displays your comments.");
$langmsg['templates'][69] = x("Displays the comment pagintation.");
$langmsg['templates'][70] = x("Displays the comment form.");
$langmsg['templates'][71] = x("Registration Form");
$langmsg['templates'][72] = x("This is where you control the form that allows users to register. It's important to keep all the input field names and IDs the same otherwise this won't work.");
$langmsg['templates'][73] = x("Username the user enters.");
$langmsg['templates'][74] = x("Password the user enters.");
$langmsg['templates'][75] = x("Shows the error message if a field is left blank.");
$langmsg['templates'][76] = x("Please enter a name.");
$langmsg['templates'][77] = x("Template created.");
$langmsg['templates'][78] = x("Please choose another name.");
$langmsg['templates'][79] = x("Edit the templates below to change how your news and comments are displayed.");
$langmsg['templates'][80] = x("News");
$langmsg['templates'][81] = x("Template updated.");
$langmsg['templates'][82] = x("A template with that name already exists. Please choose another name");
$langmsg['templates'][83] = x("Can't delete the template thats in use");
$langmsg['templates'][84] = x("Selected template(s) deleted");
$langmsg['templates'][85] = x("template(s) copied");
$langmsg['templates'][86] = x("Select a template name below to edit.");
$langmsg['templates'][87] = x("Template selected.");
$langmsg['templates'][88] = x("Name");
$langmsg['templates'][89] = x("Selected");
$langmsg['templates'][90] = x("Create a new template.");
$langmsg['templates'][91] = x("Select");
$langmsg['templates'][92] = x("Shows the views each article has.");
$langmsg['templates'][93] = x("Shows the rating stars image.");
$langmsg['templates'][94] = x("Shows the current rating for the article.");
$langmsg['templates'][95] = x("Shows the amount of times the article has been rated.");
$langmsg['templates'][96] = x("Shows the rating form.");
$langmsg['templates'][98] = x("Shows the send to form.");
$langmsg['templates'][99] = x("Shows the users location");
$langmsg['templates'][100] = x("Uploaded Files");
$langmsg['templates'][101] = x("Control how your uploaded files are shown.");
$langmsg['templates'][102] = x("Date the file was uploaded.");
$langmsg['templates'][103] = x("Title of the file.");
$langmsg['templates'][104] = x("Filename of the file.");
$langmsg['templates'][105] = x("Filesize of the file.");
$langmsg['templates'][106] = x("URL to download the file.");
$langmsg['templates'][107] = x("Username of the uploader.");
$langmsg['templates'][108] = x("Amount of times the file has been downloaded.");
$langmsg['templates'][109] = x("Show files linked to the news post.");
$langmsg['templates'][110] = x("Show each file linked to the news post.");
$langmsg['templates'][111] = x("Only shows 3 pages at a time");
$langmsg['templates'][112] = x("Link to page one, shows if not currently on page one.");
$langmsg['templates'][113] = x("Link to the last page, shows if not currently on page the last page.");
$langmsg['templates'][114] = x("Shows the number of words for this post");
$langmsg['templates'][115] = x("Shows the friendly title of the article");
$langmsg['templates'][116] = x("Displays the reCAPTCHA element");
$langmsg['templates'][117] = x("Creates a link to delete the comment.");
$langmsg['templates'][118] = x("Displays the login form only if login is required.");
$langmsg['templates'][119] = x("Login Form");
$langmsg['templates'][120] = x("Control how the login form is displayed.");
$langmsg['templates'][121] = x("Displays the email the user entered.");
$langmsg['templates'][122] = x("Displays the login error message.");
$langmsg['templates'][123] = x("Displays the reCAPTCHA element.");
$langmsg['templates'][124] = x("Displays the username the user entered.");
$langmsg['templates'][125] = x("If logged in displays the username.");
$langmsg['templates'][126] = x("Displays the search form. All names and IDs must remain the same.");
$langmsg['templates'][127] = x("Displays the number for each search result");
$langmsg['templates'][128] = x("Formats how the search results get displayed. Gets repeated for each result.");
$langmsg['templates'][129] = x("Alternates between outputting one or two for each row.");
$langmsg['templates'][130] = x("Displays the current page number.");
$langmsg['templates'][131] = x("Displays the previous page number.");
$langmsg['templates'][132] = x("Displays the next page number.");
$langmsg['templates'][133] = x("Displays the unique ID of the news article.");
$langmsg['templates'][133] = x("Displays the friendly title of the news article.");
$langmsg['templates'][134] = x("Search form");
$langmsg['templates'][135] = x("Search results");
$langmsg['templates'][136] = x("Uploaded files");
$langmsg['templates'][137] = x("Import");
$langmsg['templates'][138] = x("Upload an exported template(s) file");
$langmsg['templates'][139] = x("Upload");
$langmsg['templates'][140] = x("Paste exported template(s)");
$langmsg['templates'][141] = x("Import");
$langmsg['templates'][142] = x("Template(s) imported");
$langmsg['templates'][143] = x("No templates have been imported");
$langmsg['templates'][144] = x("Export");
$langmsg['templates'][145] = x("Import templates.");

#-----UPLOADED FILES
$langmsg['uploadedfiles'][0] = x("File Uploads");
$langmsg['uploadedfiles'][1] = x("Upload a new file");
$langmsg['uploadedfiles'][2] = x("Upload File");
$langmsg['uploadedfiles'][4] = x("Choose a file:");
$langmsg['uploadedfiles'][5] = x("File(s) deleted.");
$langmsg['uploadedfiles'][6] = x("File uploaded");
$langmsg['uploadedfiles'][7] = x("There was an error uploading the file, please try again.");
$langmsg['uploadedfiles'][8] = x("Invalid file extension.");
$langmsg['uploadedfiles'][9] = x("Invalid file.");
$langmsg['uploadedfiles'][10] = x("File removed from category.");
$langmsg['uploadedfiles'][11] = x("File(s) added to category.");
$langmsg['uploadedfiles'][12] = x("Filename");
$langmsg['uploadedfiles'][13] = x("Select a category:");
$langmsg['uploadedfiles'][14] = x("Edit a file");
$langmsg['uploadedfiles'][15] = x("Title:");
$langmsg['uploadedfiles'][16] = x("Description:");
$langmsg['uploadedfiles'][17] = x("Update file");
$langmsg['uploadedfiles'][18] = x("Invalid file");
$langmsg['uploadedfiles'][19] = x("File updated");
$langmsg['uploadedfiles'][20] = x("Thumbnails");
$langmsg['uploadedfiles'][21] = x("Details");
$langmsg['uploadedfiles'][22] = x("Category:");
$langmsg['uploadedfiles'][23] = x("Title");
$langmsg['uploadedfiles'][24] = x("Filesize");
$langmsg['uploadedfiles'][25] = x("Uploader");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("Add to category");
$langmsg['uploadedfiles'][28] = x("Remove from category");
$langmsg['uploadedfiles'][29] = x("Uploaded files");
$langmsg['uploadedfiles'][30] = x("A file with that name already exists.");
$langmsg['uploadedfiles'][31] = x("Reset downloads:");
$langmsg['uploadedfiles'][32] = x("All Categories");
$langmsg['uploadedfiles'][33] = x("Downloads");
$langmsg['uploadedfiles'][34] = x("Uploaded");

#-----ADMIN DATA
$langmsg['admindata'][0] = x("Help");
$langmsg['admindata'][1] = x("Add News");
$langmsg['admindata'][2] = x("Private Messages");
$langmsg['admindata'][3] = x("Edit News");
$langmsg['admindata'][4] = x("Edit Comments");

#-----SUBMIT FIELDS
$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("Preview");
$langmsg['submitfield'][2] = x("Add News");
$langmsg['submitfield'][3] = x("Save");
$langmsg['submitfield'][4] = x("Send");
$langmsg['submitfield'][5] = x("Create");
$langmsg['submitfield'][6] = x("Update");
$langmsg['submitfield'][7] = x("Add");
$langmsg['submitfield'][8] = x("Delete");
$langmsg['submitfield'][9] = x("Recover");

#-----SELECT FIELDS
$langmsg['selectfield'][0] = x("--Choose option--");
$langmsg['selectfield'][1] = x("Yes");
$langmsg['selectfield'][2] = x("No");
$langmsg['selectfield'][3] = x("Delete");
$langmsg['selectfield'][4] = x("Needs approval");
$langmsg['selectfield'][5] = x("Allow comments");
$langmsg['selectfield'][6] = x("Change approval");
$langmsg['selectfield'][7] = x("Approval");
$langmsg['selectfield'][8] = x("Comments");
$langmsg['selectfield'][9] = x("Approve");
$langmsg['selectfield'][10] = x("Unapprove");
$langmsg['selectfield'][11] = x("Date");
$langmsg['selectfield'][12] = x("Title");
$langmsg['selectfield'][13] = x("Author");
$langmsg['selectfield'][14] = x("Category");
$langmsg['selectfield'][15] = x("# Comments");
$langmsg['selectfield'][16] = x("Mark as read");
$langmsg['selectfield'][17] = x("Mark as unread");
$langmsg['selectfield'][18] = x("Reset blocked count");
$langmsg['selectfield'][19] = x("Create copy");
$langmsg['selectfield'][20] = x("Reset view count");
$langmsg['selectfield'][21] = x("Reset ratings");
$langmsg['selectfield'][22] = x("Save & Continue");

#-----Javascript
$langmsg['js'][0] = x("Are you sure you want to remove this image from the category?");
$langmsg['js'][1] = x("Are you sure you want to delete the selected image(s)?");
$langmsg['js'][2] = x("Are you sure you want to delete the selected message(s)?");
$langmsg['js'][3] = x("Are you sure you want to delete the selected template(s)?");
$langmsg['js'][4] = x("Are you sure you want to delete these IP addresses?");
$langmsg['js'][5] = x("Are you sure you want to reset the blocked count for these IP addresses");
$langmsg['js'][6] = x("Are you sure you want to delete these Access level(s)?");
$langmsg['js'][7] = x("Are you sure you want to delete these categories?");
$langmsg['js'][8] = x("Are you sure you want to delete these categories AND the posts within them?");
$langmsg['js'][9] = x("Are you sure you want to delete these categories?");
$langmsg['js'][10] = x("Are you sure you want to delete these account(s)?");
$langmsg['js'][11] = x("Are you sure you want to delete these account(s) AND posts?");
$langmsg['js'][12] = x("Are you sure you want to delete these post(s)?");
$langmsg['js'][13] = x("Enter some text");
$langmsg['js'][14] = x("Text");
$langmsg['js'][15] = x("Please enter a color. Example, red, yellow, blue (or even hexadecimal values)");
$langmsg['js'][16] = x("blue");
$langmsg['js'][17] = x("Enter the url of the link");
$langmsg['js'][18] = x("Enter the text to be displayed");
$langmsg['js'][19] = x("Link");
$langmsg['js'][20] = x("Enter a font size");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Text to display?");
$langmsg['js'][23] = x("Email address");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Mail me!");
$langmsg['js'][26] = x("Quote text?");
$langmsg['js'][27] = x("Quote");
$langmsg['js'][28] = x("Are you sure you want to delete selected comment(s)?");
$langmsg['js'][29] = x("Are you sure you want to delete the selected categories?");
$langmsg['js'][30] = x("Getting smilies... Please wait.");
$langmsg['js'][31] = x("Are you sure you want to delete the selected file(s)?");
$langmsg['js'][32] = x("Are you sure you want to delete the selected smilies?");
$langmsg['js'][33] = x("Are you sure you want to delete the selected filter(s)?");

#-----NEWS
$langmsg['news'][0] = x("Please enter a name.");
$langmsg['news'][1] = x("Please enter a message.");
$langmsg['news'][2] = x("Invalid security key");
$langmsg['news'][3] = x("Choose another name.");
$langmsg['news'][4] = x("Invalid security key");
$langmsg['news'][5] = x("Results found:");
$langmsg['news'][6] = x("New registrations are disabled.");
$langmsg['news'][7] = x("Your account has been created, you can now <a href=\"{adminpath}\">login here</a>.");
$langmsg['news'][8] = x("Please enter a name.");
$langmsg['news'][9] = x("Please enter a message.");
$langmsg['news'][10] = x("Invalid security key");
$langmsg['news'][11] = x("Choose another name.");
$langmsg['news'][12] = x("Invalid security key");
$langmsg['news'][13] = x("Thank you for your rating.");
$langmsg['news'][14] = x("You have already rated this article.");
$langmsg['news'][15] = x("Name");
$langmsg['news'][16] = x("Email:");
$langmsg['news'][17] = x("Friends Email:");
$langmsg['news'][18] = x("Message:");
$langmsg['news'][19] = x("Hey check out this article I found!");
$langmsg['news'][20] = x("Send to friend");
$langmsg['news'][21] = x("Email sent.");
$langmsg['news'][22] = x("Please enter your name");
$langmsg['news'][23] = x("Please enter your email address");
$langmsg['news'][24] = x("Please enter a message");
$langmsg['news'][25] = x("Please enter your friends email address");
$langmsg['news'][27] = x("Please enter a valid email address");
$langmsg['news'][28] = x("Please enter your friends valid email address");
$langmsg['news'][29] = x("Please enter a username.");
$langmsg['news'][30] = x("That username has already been taken, please choose another.");
$langmsg['news'][31] = x("That email address is already in use, please choose another.");
$langmsg['news'][32] = x("Please enter an email address.");
$langmsg['news'][33] = x("Please enter a valid email address.");
$langmsg['news'][34] = x("Please enter a password.");
$langmsg['news'][35] = x("Please confirm your password.");
$langmsg['news'][36] = x("The passwords you entered don't match.");
$langmsg['news'][37] = x("Invalid security key.");
$langmsg['news'][38] = x("Please wait");
$langmsg['news'][39] = x("There was a problem sending your message, please contact the administrator.");
$langmsg['news'][40] = x("You must be logged in to post a comment.");
$langmsg['news'][41] = x("New comment on {domain}");
$langmsg['news'][42] = x("Name: {name} \nEmail/URL: {email} \nIP: {ip} \nMessage: {message}");
$langmsg['news'][43] = x("New registration on {domain}");
$langmsg['news'][44] = x("Name: {name} \nEmail: {email} \nIP: {ip}");
$langmsg['news'][45] = x("seconds before sending another message.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Name");
$langmsg['news'][48] = x("Email/URL");
$langmsg['news'][49] = x("Message");
$langmsg['news'][50] = x("Enter an article title");
$langmsg['news'][51] = x("Summary");
$langmsg['news'][52] = x("No categories");
$langmsg['news'][53] = x("Date");
$langmsg['news'][54] = x("Date this article was posted");
$langmsg['news'][55] = x("Archive");

#-----MONTHS
$langmsg['shortmonths'][0] = x("Jan");
$langmsg['shortmonths'][1] = x("Feb");
$langmsg['shortmonths'][2] = x("Mar");
$langmsg['shortmonths'][3] = x("Apr");
$langmsg['shortmonths'][4] = x("May");
$langmsg['shortmonths'][5] = x("Jun");
$langmsg['shortmonths'][6] = x("Jul");
$langmsg['shortmonths'][7] = x("Aug");
$langmsg['shortmonths'][8] = x("Sep");
$langmsg['shortmonths'][9] = x("Oct");
$langmsg['shortmonths'][10] = x("Nov");
$langmsg['shortmonths'][11] = x("Dec");

$langmsg['months'][0] = x("January");
$langmsg['months'][1] = x("February");
$langmsg['months'][2] = x("March");
$langmsg['months'][3] = x("April");
$langmsg['months'][4] = x("May");
$langmsg['months'][5] = x("June");
$langmsg['months'][6] = x("July");
$langmsg['months'][7] = x("August");
$langmsg['months'][8] = x("September");
$langmsg['months'][9] = x("October");
$langmsg['months'][10] = x("November");
$langmsg['months'][11] = x("December");

#-----SEARCH
$langmsg['search'][0] = x("Active news");
$langmsg['search'][1] = x("Archived news");
$langmsg['search'][2] = x("Newest first");
$langmsg['search'][3] = x("Oldest first");
$langmsg['search'][4] = x("Search");
$langmsg['search'][5] = x("Date range");

#-----INSTALL
$langmsg['install'][0] = x("Database Connection Info");
$langmsg['install'][1] = x("Enter your MySQL server info below.");
$langmsg['install'][2] = x("Server:");
$langmsg['install'][3] = x("(usually localhost)");
$langmsg['install'][4] = x("Username:");
$langmsg['install'][5] = x("Password:");
$langmsg['install'][6] = x("Database:");
$langmsg['install'][7] = x("Test Connection");
$langmsg['install'][8] = x("Connecting to server:");
$langmsg['install'][9] = x("Selecting database:");
$langmsg['install'][10] = x("Unable to write to db.php, please CHMOD this file to 777");
$langmsg['install'][11] = x("Account information");
$langmsg['install'][12] = x("Enter your account details below. This will be used to login.");
$langmsg['install'][13] = x("Email:");
$langmsg['install'][14] = x("Confirm Password:");
$langmsg['install'][15] = x("Continue");
$langmsg['install'][16] = x("Please enter a username");
$langmsg['install'][17] = x("Please enter an email address");
$langmsg['install'][18] = x("Please enter your password");
$langmsg['install'][19] = x("Press Install to finish the installation");
$langmsg['install'][20] = x("Your passwords don't match");
$langmsg['install'][21] = x("Install");
$langmsg['install'][22] = x("Finalizing installation");
$langmsg['install'][23] = x("SUCCESS!");
$langmsg['install'][24] = x("N-13 News has been installed.");
$langmsg['install'][25] = x("Login to the admin area.");
$langmsg['install'][26] = x("Port:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Extension:");
$langmsg['install'][29] = x("(leave blank for default)");
$langmsg['install'][30] = x("Installing... Please wait.");
$langmsg['install'][31] = x("The mysqli_connect function was not found.");
$langmsg['install'][32] = x("The pdo_mysql function was not found.");
?>