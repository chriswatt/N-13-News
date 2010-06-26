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
#   LANGUAGE    Portuguese                              #
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
$langmsg['menu'][0] = x("Adicionar Not�cia");
$langmsg['menu'][1] = x("Editar Not�cia");
$langmsg['menu'][2] = x("Arquivos");
$langmsg['menu'][3] = x("Nova Mensagem");
$langmsg['menu'][4] = x("Entrada");
$langmsg['menu'][5] = x("Sa�das");
$langmsg['menu'][6] = x("Contas");
$langmsg['menu'][7] = x("N�veis de Acesso");
$langmsg['menu'][8] = x("IPs Banidos");
$langmsg['menu'][9] = x("Categorias");
$langmsg['menu'][10] = x("Carregar Imagem");
$langmsg['menu'][11] = x("Pessoal");
$langmsg['menu'][12] = x("Perfil");
$langmsg['menu'][13] = x("RSS");
$langmsg['menu'][14] = x("Sorrisos");
$langmsg['menu'][15] = x("Sistema");
$langmsg['menu'][16] = x("Modelos");
$langmsg['menu'][17] = x("Filtro de palavras");
$langmsg['menu'][18] = x("Principal");
$langmsg['menu'][19] = x("Not�cias");
$langmsg['menu'][20] = x("Mensagens");
$langmsg['menu'][21] = x("Op��es");
$langmsg['menu'][22] = x("Ajuda");
$langmsg['menu'][23] = x("Sair");
$langmsg['menu'][24] = x("File Uploads");

#-----HOME MODULE
$langmsg['home'][0] = x("Estat�stica Geral das Not�cias.");
$langmsg['home'][1] = x("Bemvindo");
$langmsg['home'][2] = x("A configura��o PHP \"magic_quotes_gpc\" foi detectado e est� activado. � aconselh�vel que voc� desative esta configura��o.");
$langmsg['home'][3] = x("A configura��o PHP \"register_globals\" foi detectado e est� activado. � aconselh�vel que voc� a desative, pois ele pode causar problemas de seguran�a e erros.");
$langmsg['home'][4] = x( "install.php foi detectado. Por favor, remova esse ficheiro.   Tente apagar este arquivo automaticamente?");
$langmsg['home'][5] = x("install.php n�o pode ser removida, por favor, remova esse ficheiro manualmente");
$langmsg['home'][6] = x("N� Total de Not�cias:");
$langmsg['home'][7] = x("N� de Coment�rios:");
$langmsg['home'][8] = x("N� de Usu�rios:");
$langmsg['home'][9] = x("N� de Sorrisos:");
$langmsg['home'][10] = x("N� de Filtros:");
$langmsg['home'][11] = x("N� de Categorias:");
$langmsg['home'][12] = x("N� de Modelos:");
$langmsg['home'][13] = x("N� de N�veis de Acesso:");
$langmsg['home'][14] = x("Conectando a base de dados:");
$langmsg['home'][15] = x("Otimiza��o de todas as tabelas");
$langmsg['home'][16] = x("Vers�o atual:");
$langmsg['home'][17] = x("Vers�o mais recente:");
$langmsg['home'][18] = x("Ver o registo de acesso");
$langmsg['home'][19] = x("Tempo de busca:");
$langmsg['home'][20] = x("Mensagens Unread");
$langmsg['home'][21] = x("Tente apagar este arquivo automaticamente?");
$langmsg['home'][22] = x("segundo");
$langmsg['home'][23] = x("Total images");
$langmsg['home'][24] = x("Total de arquivos");
$langmsg['home'][25] = x("Total de RSS Feeds");

#-----ADDNEWS MODULE
$langmsg['addnews'][0] = x("Prever a Not�cia");
$langmsg['addnews'][1] = x("Por favor, indique um t�tulo");
$langmsg['addnews'][2] = x("Por favor, selecione se vai permitem coment�rios as Not�cias ou n�o");
$langmsg['addnews'][3] = x("Adicionar Not�cia");
$langmsg['addnews'][4] = x("Por favor, selecione uma categoria");

#-----EDITNEWS MODULE
$langmsg['editnews'][0] = x("Editar Not�cia");
$langmsg['editnews'][1] = x("Mostrando");
$langmsg['editnews'][2] = x("Op��es");
$langmsg['editnews'][3] = x("Quantidade para mostrar");
$langmsg['editnews'][4] = x("Ordenar por");
$langmsg['editnews'][5] = x("Ordem");
$langmsg['editnews'][7] = x("T�tulo");
$langmsg['editnews'][8] = x("Autor");
$langmsg['editnews'][9] = x("Categorias");
$langmsg['editnews'][10] = x("Data");
$langmsg['editnews'][11] = x("Aprova��o");
$langmsg['editnews'][12] = x("Coment�rios");
$langmsg['editnews'][13] = x("[show]");
$langmsg['editnews'][14] = x("Aprovado");
$langmsg['editnews'][15] = x("N�o aprovados");
$langmsg['editnews'][16] = x("News acrescentou.");
$langmsg['editnews'][17] = x("Selecionar not�cias apagadas");
$langmsg['editnews'][18] = x("Selecionar not�cias atualizados.");
$langmsg['editnews'][19] = x("Not�cia atualizada.");
$langmsg['editnews'][20] = x("Desativado");
$langmsg['editnews'][21] = x("not�cias.");
$langmsg['editnews'][22] = x("no total.");
$langmsg['editnews'][23] = x("Ver reset contagem a 0 para o artigo selecionado (s)");
$langmsg['editnews'][24] = x("Avalia��es de reset para o artigo selecionado (s)");
$langmsg['editnews'][25] = x("Filtrar por categoria");

#-----NEWSFORM
$langmsg['newsform'][0] = x("Escreva a sua not�cias abaixo.");
$langmsg['newsform'][1] = x("T�tulo:");
$langmsg['newsform'][2] = x("Categorias:");
$langmsg['newsform'][3] = x("Sum�rio (Emgeral o 1� paragrafo)");
$langmsg['newsform'][4] = x("Corpo (Not�cia inteira");
$langmsg['newsform'][5] = x("HTML Desativado");
$langmsg['newsform'][6] = x("HTML Activado");
$langmsg['newsform'][7] = x("Coment�rios:");
$langmsg['newsform'][8] = x("Expandir Data");
$langmsg['newsform'][9] = x("Expandir Sum�rio");
$langmsg['newsform'][16] = x("Data:");
$langmsg['newsform'][17] = x("Expandir Arquivo");
$langmsg['newsform'][18] = x("Nunca arquivar");
$langmsg['newsform'][19] = x("Agency:");
$langmsg['newsform'][20] = x("Transfer�ncias");
$langmsg['newsform'][21] = x("Transferido arquivos pela rede");
$langmsg['newsform'][22] = x("Artigo");
$langmsg['newsform'][23] = x("Digite uma URL de imagem");
$langmsg['newsform'][24] = x("Inserir");
$langmsg['newsform'][25] = x("Selecione uma imagem importada");

#-----COMMENTS MODULE
$langmsg['editcomments'][0] = x("Editar coment�rios");
$langmsg['editcomments'][1] = x("Editar o coment�rio abaixo.");
$langmsg['editcomments'][2] = x("Autor: ");
$langmsg['editcomments'][3] = x("Email:");
$langmsg['editcomments'][4] = x("Mensagem:");
$langmsg['editcomments'][5] = x("coment�rio atualizado.");
$langmsg['editcomments'][6] = x("coment�rios removidos.");
$langmsg['editcomments'][7] = x("coment�rios atualizados.");
$langmsg['editcomments'][8] = x("coment�rios no total.");
$langmsg['editcomments'][9] = x("Mensagem");
$langmsg['editcomments'][10] = x("Data");
$langmsg['editcomments'][11] = x("Aprova��o");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Aprovado");
$langmsg['editcomments'][14] = x("N�o aprovados");
$langmsg['editcomments'][15] = x("Localidade:");

#-----PRIVATE MESSAGES MODUKE
$langmsg['privmsgs'][0] = x("Mensagens Privadas");
$langmsg['privmsgs'][1] = x("Entrada");
$langmsg['privmsgs'][2] = x("Sa�das");
$langmsg['privmsgs'][3] = x("Nova Mensagem");
$langmsg['privmsgs'][4] = x("Voc� tem");
$langmsg['privmsgs'][5] = x("T�tulo");
$langmsg['privmsgs'][6] = x("De");
$langmsg['privmsgs'][7] = x("Enviadas");
$langmsg['privmsgs'][8] = x("Para");
$langmsg['privmsgs'][9] = x("Responder a esta mensagem");
$langmsg['privmsgs'][10] = x("Nova mensagem privada.");
$langmsg['privmsgs'][11] = x("Enviar para:");
$langmsg['privmsgs'][12] = x("T�tulo:");
$langmsg['privmsgs'][13] = x("Mensagem:");
$langmsg['privmsgs'][14] = x("Exemplo 'utilizador1, utilizador2, utilizador3'");
$langmsg['privmsgs'][15] = x("Vista previa.");
$langmsg['privmsgs'][16] = x("Mensagem enviada para os seguintes usu�rios.");
$langmsg['privmsgs'][17] = x("Por favor, Digite um usu�rio para enviar esta mensagem.");
$langmsg['privmsgs'][18] = x("Por favor, indique um t�tulo para essa mensagem.");
$langmsg['privmsgs'][19] = x("Digite uma mensagem.");
$langmsg['privmsgs'][20] = x("Mensagens apagadas.");
$langmsg['privmsgs'][21] = x("mensagens n�o lidas.");
$langmsg['privmsgs'][22] = x("blogs no total.");

#-----OPTIONS MODULE
$langmsg['options'][0] = x("Op��es");

#-----BANNED IPS MODULE
$langmsg['bannedips'][0] = x("IPs Banidos");
$langmsg['bannedips'][1] = x("IPs Banidos.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("N�mero de vezes bloqueada");
$langmsg['bannedips'][4] = x("Adicionar um novo endere�o IP.");
$langmsg['bannedips'][5] = x("Mensagem de banidos. (HTML est� activado)");
$langmsg['bannedips'][6] = x("Endere�o IP:");
$langmsg['bannedips'][7] = x("Este endere�o de IP j� � proibida.");
$langmsg['bannedips'][8] = x("Endere�o de IP banido.");
$langmsg['bannedips'][9] = x("endere�os IP exclu�do.");
$langmsg['bannedips'][10] = x("endere�os IP foi reposto.");
$langmsg['bannedips'][11] = x("Mensagem de IP Banida foi atualizada.");

#-----CATEGORIES MODULE
$langmsg['cats'][0] = x("Categorias");
$langmsg['cats'][1] = x("Categorias.");
$langmsg['cats'][2] = x("Nome");
$langmsg['cats'][3] = x("Not�cias atribu�das a esta categoria");
$langmsg['cats'][4] = x("Criar uma nova categoria.");
$langmsg['cats'][5] = x("Nome:");
$langmsg['cats'][6] = x("As seguintes categorias foram apagadas:");
$langmsg['cats'][7] = x("Por favor escolha outro nome.");
$langmsg['cats'][8] = x("categoria criada.");
$langmsg['cats'][9] = x("Categoria atualizada.");
$langmsg['cats'][10] = x("Editar a sua categoria abaixo.");
$langmsg['cats'][11] = x("Imagens");
$langmsg['cats'][12] = x("Limas");
$langmsg['cats'][13] = x("Uma categoria com esse nome j� existe, satisfaz escolhe outro.");

#-----IMAGE UPLOADS MODULE
$langmsg['img'][0] = x("Carregar Imagem");
$langmsg['img'][1] = x("Enviar uma imagem");
$langmsg['img'][2] = x("Carregar Ficheiro");
$langmsg['img'][3] = x("Total de Imagens");
$langmsg['img'][4] = x("Escolha uma imagem:");
$langmsg['img'][5] = x("Imagens apagadas.");
$langmsg['img'][6] = x("Imagem transferidas");
$langmsg['img'][7] = x("Houve um erro ao enviar o ficheiro, por favor, tente novamente.");
$langmsg['img'][8] = x("Extens�o do ficheiro inv�lido.");
$langmsg['img'][9] = x("Imagem inv�lida.");
$langmsg['img'][10] = x("Imagem removida da categoria.");
$langmsg['img'][11] = x("Imagens adicionadas � categoria.");
$langmsg['img'][12] = x("Nome de arquivo:");
$langmsg['img'][13] = x("Selecione uma categoria:");
$langmsg['img'][14] = x("Edite uma imagem");
$langmsg['img'][15] = x("T�tulo:");
$langmsg['img'][16] = x("Descri��o:");
$langmsg['img'][17] = x("Imagem da actualiza��o");
$langmsg['img'][18] = x("Imagem inv�lida");
$langmsg['img'][19] = x("Imagem actualizado");
$langmsg['img'][20] = x("Miniaturas");
$langmsg['img'][21] = x("Detalhes");
$langmsg['img'][22] = x("Categoria:");
$langmsg['img'][23] = x("Nome de arquivo");
$langmsg['img'][24] = x("Filesize");
$langmsg['img'][25] = x("Autor");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("Adicione � categoria");
$langmsg['img'][28] = x("Remova da categoria");
$langmsg['img'][29] = x("Images uploaded to");
$langmsg['img'][30] = x("Uma lima com esse nome j� existe.");
$langmsg['img'][31] = x("Todas as categorias");
$langmsg['img'][32] = x("Imposs�vel escrever para o diret�rio de uploads. CHMOD este diret�rio para 777");

#-----PERSONAL MODULE
$langmsg['personal'][0] = x("Op��es Pessoais");
$langmsg['personal'][1] = x("Edite a informa��o da sua conta abaixo.");
$langmsg['personal'][2] = x("Configura��es pessoais para");
$langmsg['personal'][3] = x("Url para Avatar");
$langmsg['personal'][4] = x("Endere�o de email: ");
$langmsg['personal'][5] = x("Alertas:");
$langmsg['personal'][6] = x("Seja alertado de mensagens n�o lidas quando entrar � 1� vez?");
$langmsg['personal'][7] = x("Nova Senha:");
$langmsg['personal'][8] = x("(deixe em branco para manter actualizado)");
$langmsg['personal'][9] = x("Confirme a senha:");
$langmsg['personal'][10] = x("Um endere�o de e-mail deve ser preenchido.");
$langmsg['personal'][11] = x("Configura��es atualizada.");
$langmsg['personal'][12] = x("As senhas n�o s�o iguais.");
$langmsg['personal'][13] = x("Habilitar editor WYSIWYG?");

#-----LOGIN MODULE
$langmsg['login'][0] = x("�rea Restrita");
$langmsg['login'][1] = x("Nome:");
$langmsg['login'][2] = x("Senha:");
$langmsg['login'][3] = x("Esqueceu-se da sua Senha?");
$langmsg['login'][4] = x("Recordar-me");
$langmsg['login'][5] = x("Codigo de Seguran�a:");
$langmsg['login'][6] = x("Entrar");
$langmsg['login'][7] = x("C�digo de Seguran�a Inv�lido");
$langmsg['login'][8] = x("Inv�lido ID ou Senha");
$langmsg['login'][9] = x("Digite esse c�digo abaixo");

#-----PROFILE MODULE
$langmsg['profile'][0] = x("Editar perfil");
$langmsg['profile'][1] = x("Editar seu perfil abaixo.");
$langmsg['profile'][2] = x("Nome:");
$langmsg['profile'][3] = x("Idade:");
$langmsg['profile'][4] = x("Localidade:");
$langmsg['profile'][5] = x("Sexo:");
$langmsg['profile'][6] = x("Foto de perfil:");
$langmsg['profile'][7] = x("Pagina Principal:");
$langmsg['profile'][8] = x("Interesses");
$langmsg['profile'][9] = x("Passatempo:");
$langmsg['profile'][10] = x("Profiss�o:");
$langmsg['profile'][11] = x("Prov�rbio preferido:");
$langmsg['profile'][12] = x("Masculino");
$langmsg['profile'][13] = x("Feminino");
$langmsg['profile'][14] = x("Perfil atualizado.");
$langmsg['profile'][15] = x("Nenhum");

#-----ACCOUNTS MODULE
$langmsg['accounts'][0] = x("Contas");
$langmsg['accounts'][1] = x("Contas.");
$langmsg['accounts'][2] = x("Nome ou ID");
$langmsg['accounts'][3] = x("N�vel de acesso");
$langmsg['accounts'][4] = x("N�mero de Not�cias");
$langmsg['accounts'][5] = x("N�mero de coment�rios");
$langmsg['accounts'][6] = x("Criar uma nova conta.");
$langmsg['accounts'][7] = x("Nome da conta:");
$langmsg['accounts'][8] = x("Email:");
$langmsg['accounts'][9] = x("Nova senha:");
$langmsg['accounts'][10] = x("Confirmar senha:");
$langmsg['accounts'][11] = x("N�vel de Acesso:");
$langmsg['accounts'][12] = x("Nova conta.");
$langmsg['accounts'][13] = x("Editar a conta abaixo.");
$langmsg['accounts'][14] = x("Um endere�o de e-mail deve ser digitado.");
$langmsg['accounts'][15] = x("Conta atualizada.");
$langmsg['accounts'][16] = x("As senhas n�o s�o iguais.");
$langmsg['accounts'][17] = x("O nome da conta deve ser digitado.");
$langmsg['accounts'][18] = x("Este nome da conta j� existe. Por favor escolha outro.");
$langmsg['accounts'][19] = x("A senha deve ser digitado.");
$langmsg['accounts'][20] = x("Conta criada.");
$langmsg['accounts'][21] = x("As contas seguintes foram eliminadas:");
$langmsg['accounts'][22] = x("Voc� n�o pode apagar a sua pr�pria conta.");
$langmsg['accounts'][23] = x("(Deixe em branco para manter actualizada)");
$langmsg['accounts'][24] = x("Um cliente j� est� usando esse email address, escolhe por favor outro.");
$langmsg['accounts'][25] = x("D� entrada com por favor um nome do cliente");

#----ACCESS MODULE
$langmsg['access'][0] = x("N�veis de Acesso");
$langmsg['access'][1] = x("Criar um novo n�vel de acesso.");
$langmsg['access'][2] = x("Nome:");
$langmsg['access'][3] = x("Que se��es podem acessar este n�vel?");
$langmsg['access'][4] = x("Contas");
$langmsg['access'][5] = x("N�veis de Acesso:");
$langmsg['access'][6] = x("IPS Banidos:");
$langmsg['access'][7] = x("Categorias:");
$langmsg['access'][8] = x("Coment�rios:");
$langmsg['access'][9] = x("Ajuda");
$langmsg['access'][10] = x("Carregar Imagem:");
$langmsg['access'][11] = x("Not�cias:");
$langmsg['access'][12] = x("Op��es pessoais:");
$langmsg['access'][13] = x("Mensagens Privadas");
$langmsg['access'][14] = x("Perfil");
$langmsg['access'][15] = x("RSS");
$langmsg['access'][16] = x("Sorrisos");
$langmsg['access'][17] = x("Configura��o do Sistema:");
$langmsg['access'][18] = x("Modelos:");
$langmsg['access'][19] = x("Filtro de Palavras:");
$langmsg['access'][20] = x("Quais as categorias que esse n�vel de acesso p�r not�cias?");
$langmsg['access'][21] = x("Todos");
$langmsg['access'][22] = x("Que not�cias este n�vel pode editar?");
$langmsg['access'][23] = x("Admin (Todas ):");
$langmsg['access'][24] = x("Moderador (Pr�prios + Membros):");
$langmsg['access'][25] = x("Membro (Pr�prios ):");
$langmsg['access'][26] = x("As not�cias postas por este n�vel de acesso s�o automaticamente aprovado?");
$langmsg['access'][27] = x("Este n�vel de acesso pode aprovar mensagens?");
$langmsg['access'][28] = x("Este n�vel de acesso pode usar HTML?");
$langmsg['access'][29] = x("Permitir not�cias sem selecionar uma categoria?");
$langmsg['access'][30] = x("N�veis de acesso apagado:");
$langmsg['access'][31] = x("Os seguintes n�veis de acesso n�o foram apagadas porque t�m um ou mais contas que lhes s�o atribu�das:");
$langmsg['access'][32] = x("Editar o n�vel de acesso abaixo.");
$langmsg['access'][33] = x("Por favor, digite um nome para esse n�vel de acesso.");
$langmsg['access'][34] = x("N�vel de acesso atualizado.");
$langmsg['access'][35] = x("Um n�vel de acesso com esse nome j� existe, escolha outro.");
$langmsg['access'][36] = x("Por favor, seleccione as not�cias que este n�vel pode editar.");
$langmsg['access'][37] = x("Por favor, selecione se as not�cias desse n�vel de acesso podem ser auto aprovado");
$langmsg['access'][38] = x("Por favor, selecione se este n�vel de acesso pode aprovar not�cias");
$langmsg['access'][39] = x("Por favor, selecione se este n�vel de acesso pode usar HTML");
$langmsg['access'][40] = x("Por favor, selecione se este n�vel de acesso pode adicionar not�cias sem selecionar uma categoria");
$langmsg['access'][41] = x("N�vel de acesso criado.");
$langmsg['access'][42] = x("N�veis de Acesso");
$langmsg['access'][43] = x("Nome");
$langmsg['access'][44] = x("Acesso");
$langmsg['access'][45] = x("Contas");
$langmsg['access'][46] = x("Membro");
$langmsg['access'][47] = x("Moderador");
$langmsg['access'][48] = x("Administrador");
$langmsg['access'][49] = x("Transfer�ncias de arquivo pela rede da lima");
$langmsg['access'][50] = x("Pode ver esse n�vel de acesso do usu�rio endere�os IP?");
$langmsg['access'][51] = x("Quais arquivos e imagens podem editar este n�vel de acesso?");
$langmsg['access'][52] = x("Pr�prio");
$langmsg['access'][53] = x("Todos");

#-----ACCESSLOGS MODULE
$langmsg['accesslogs'][0] = x("Registo de acesso");
$langmsg['accesslogs'][1] = x("Nome");
$langmsg['accesslogs'][2] = x("Tentativa");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Data");
$langmsg['accesslogs'][5] = x("Registo de acesso");
$langmsg['accesslogs'][6] = x("Com Sucesso");
$langmsg['accesslogs'][7] = x("Sem Sucesso");

#-----FILTERS MODULE
$langmsg['filters'][0] = x("Filtro de Palavra");
$langmsg['filters'][1] = x("Filtro adicionado.");
$langmsg['filters'][2] = x("Filter removido.");
$langmsg['filters'][3] = x("Todas as palavras abaixo ser�o filtradas de todos os coment�rios.");
$langmsg['filters'][4] = x("Palavra filtrada");
$langmsg['filters'][5] = x("Substituir com");
$langmsg['filters'][6] = x("Apagar");

#-----RSS MODULE
$langmsg['rss'][0] = x("RSS");
$langmsg['rss'][1] = x("Editar as configura��es de RSS abaixo");
$langmsg['rss'][2] = x("A localiza��o da not�cia � onde voc� vai exibir suas not�cias, por exemplo http://yourdomain.com/ ou http://yourdomain.com/index");
$langmsg['rss'][3] = x("Nome da Fonte:");
$langmsg['rss'][4] = x("Localiza��o das Not�cias");
$langmsg['rss'][5] = x("T�tulo do seu RSS:");
$langmsg['rss'][6] = x("Descri��o do seu RSS:");
$langmsg['rss'][7] = x("Codifica��o de caracteres:");
$langmsg['rss'][8] = x("Idioma:");
$langmsg['rss'][9] = x("N� de not�cias para mostrar:");
$langmsg['rss'][10] = x("0 = todas");
$langmsg['rss'][11] = x("Categorias a mostrar:");
$langmsg['rss'][12] = x("Mostrar not�cias que n�o foram atribu�das uma categoria?");
$langmsg['rss'][13] = x("Codogo de RSS:");
$langmsg['rss'][14] = x("Editar como o seu feed � exibido");
$langmsg['rss'][15] = x("Mostra o t�tulo da not�cia. ");
$langmsg['rss'][16] = x("Mostra o sum�rio da not�cia. ");
$langmsg['rss'][17] = x("Mostra a not�cia completa. ");
$langmsg['rss'][18] = x("Mostra as categorias a que foi atribu�do cada not�cia. ");
$langmsg['rss'][19] = x("Mostra a URL para cada not�cia espec�fica. ");
$langmsg['rss'][20] = x("Mostra a data em que a not�cia foi publicada. ");
$langmsg['rss'][21] = x("Exibe a configura��o de fuso hor�rio. ");
$langmsg['rss'][22] = x("Mostra a hora de cada not�cia. ");
$langmsg['rss'][23] = x("Mostra o autor da not�cia. ");
$langmsg['rss'][24] = x("Mostra o avatar do usu�rios se eles tiverem um. ");
$langmsg['rss'][25] = x("Mostra a identifica��o exclusiva de cada hist�ria tem. ");
$langmsg['rss'][26] = x("Mostra o N� de coment�rios para cada not�cia. ");
$langmsg['rss'][27] = x("Por favor, indique um nome da fonte");
$langmsg['rss'][28] = x("Por favor, indique um local de not�cias");
$langmsg['rss'][29] = x("Por favor, indique um t�tulo");
$langmsg['rss'][30] = x("Digite uma descri��o");
$langmsg['rss'][31] = x("Por favor, indique a codifica��o de caracteres");
$langmsg['rss'][32] = x("Por favor, indique um idioma");
$langmsg['rss'][33] = x("Digite o n�mero de not�cias para mostrar");
$langmsg['rss'][34] = x("RSS criado");
$langmsg['rss'][35] = x("Um RSS com esse nome j� existe, escolha outro");
$langmsg['rss'][36] = x("RSS atualizado");
$langmsg['rss'][37] = x("RSS");
$langmsg['rss'][38] = x("RSS (s) apagados.");
$langmsg['rss'][39] = x("Nome");
$langmsg['rss'][40] = x("Categorias");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Criar um novo RSS.");
$langmsg['rss'][43] = x("Mostra o t�tulo amig�vel da hist�ria");

#-----SMILIES MODULE
$langmsg['smilies'][0] = x("Sorrisos");
$langmsg['smilies'][1] = x("Isto � �til se voc� deseja actualizar a localiza��o de todos os seus sorrisos de uma s� vez.");
$langmsg['smilies'][2] = x("Se voc� quiser mudar todos os sorrisos para ter um novo local voc� substituiria http://domain.com/oldlocation/smilies com http://domain.com/newlocation/smilies ou smilies/ com http://domain.com/smilies/");
$langmsg['smilies'][3] = x("Substituir");
$langmsg['smilies'][4] = x("Substituir com:");
$langmsg['smilies'][5] = x("Todos os caminhos atualizados.");
$langmsg['smilies'][6] = x("Criar um novo smilie");
$langmsg['smilies'][7] = x("Caminhos:");
$langmsg['smilies'][8] = x("Codigo");
$langmsg['smilies'][9] = x("Por favor, indique o caminho para o sorriso.");
$langmsg['smilies'][10] = x("Digite uma senha para este sorriso.");
$langmsg['smilies'][11] = x("Codigo j� em uso. Por favor, escolha uma senha diferente.");
$langmsg['smilies'][12] = x("Sorriso adicionado.");
$langmsg['smilies'][13] = x("Voc� tem certeza que quer apagar este sorriso?");
$langmsg['smilies'][14] = x("Sorriso removido.");
$langmsg['smilies'][15] = x("Editar o sorriso abaixo");
$langmsg['smilies'][16] = x("Sorriso");
$langmsg['smilies'][17] = x("Sorriso atualizada.");
$langmsg['smilies'][18] = x("Os sorrisos foram apagados");
$langmsg['smilies'][19] = x("Por favor, selecione que sorriso voc� gostaria de editar.");
$langmsg['smilies'][20] = x("Sorriso");
$langmsg['smilies'][21] = x("Inserir um novo sorriso.");
$langmsg['smilies'][22] = x("Atualizar o caminho de todos os sorrisos");

#-----SYSTEM MODULE
$langmsg['system'][0] = x("Configura��o do Sistema");
$langmsg['system'][1] = x("Editar as configura��es do sistema.");
$langmsg['system'][2] = x("Not�cias");
$langmsg['system'][3] = x("N� de not�cias por p�gina:");
$langmsg['system'][4] = x("Em que ordem devem ser exibidas as not�cias:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("Formato da Data &  Tempo para as not�cias:");
$langmsg['system'][8] = x("Veja aqui");
$langmsg['system'][9] = x("Mostrar avatares");
$langmsg['system'][10] = x("Delimitador para separar as categorias ao exibir as not�cias:");
$langmsg['system'][11] = x("Coment�rios");
$langmsg['system'][12] = x("N� de coment�rios por p�gina");
$langmsg['system'][13] = x("Em que ordem devem ser exibidas os coment�rios:");
$langmsg['system'][14] = x("Formato da Data &  Tempo para os coment�rios:");
$langmsg['system'][15] = x("Extens�o m�ximo dos coment�rios:");
$langmsg['system'][16] = x("Mostrar coment�rios numa nova janela");
$langmsg['system'][17] = x("Demora de tempo depois de adicionar coment�rios (prote��o contra spam ):");
$langmsg['system'][18] = x("Segundos");
$langmsg['system'][19] = x("Mensagem de spam:");
$langmsg['system'][20] = x("Mensagem para novo coment�rio:");
$langmsg['system'][21] = x("Mensagem de aprova��o do coment�rio:");
$langmsg['system'][22] = x("Usar imagem de verifica��o em formul�rio de coment�rios:");
$langmsg['system'][23] = x("Favor�vel a URLs ");
$langmsg['system'][24] = x("Activar URLs favor�vel:");
$langmsg['system'][25] = x("Extens�o do ficheiro:");
$langmsg['system'][26] = x("Prefixo:");
$langmsg['system'][27] = x("Diret�rio do nome do ficheiro:");
$langmsg['system'][28] = x("Registo");
$langmsg['system'][29] = x("Permitir que os usu�rios se registrem:");
$langmsg['system'][30] = x("N�vel de acesso para novos usu�rios");
$langmsg['system'][31] = x("Outros");
$langmsg['system'][32] = x("Fuso hor�rio:");
$langmsg['system'][33] = x("Permitir os tipos de ficheiro para imagens carregadas:");
$langmsg['system'][34] = x("Caminho para imagens carregadas");
$langmsg['system'][35] = x("Nenhuma mensagem de erro de acesso");
$langmsg['system'][36] = x("Configura��o atualizada.");
$langmsg['system'][37] = x("O atraso de tempo ap�s a utiliza��o emite a (a prote��o do Spam):");
$langmsg['system'][38] = x("Notifica��es");
$langmsg['system'][39] = x("Come� notifica��es do email de coment�rios novos:");
$langmsg['system'][40] = x("Come� notifica��es do email de registos novos:");
$langmsg['system'][41] = x("Permita que somente os usu�rios registados comentem:");
$langmsg['system'][42] = x("Emita notifica��es a este email address:");
$langmsg['system'][43] = x("Tipos de lima permitidos de limas transferidas arquivos pela rede:");
$langmsg['system'][44] = x("Receba notifica��es por correio electr�nico de postos de not�cias aprovados:");
$langmsg['system'][45] = x("Chave p�blica");
$langmsg['system'][46] = x("Chave privada");
$langmsg['system'][47] = x("Script caminho");
$langmsg['system'][48] = x("Permitir que os usu�rios registrados para apagar seus coment�rios:");
$langmsg['system'][49] = x("Use a verifica��o da imagem no formul�rio de login �ndice:");
$langmsg['system'][50] = x("Use a verifica��o de imagem no formul�rio de inscri��o:");
$langmsg['system'][51] = x("Data e hora formato para arquivos:");
$langmsg['system'][52] = x("Show 'Powered by' abaixo da not�cia:");

#-----RECOVERY MODULE
$langmsg['recover'][0] = x("Recuperar Senha");
$langmsg['recover'][1] = x("Entre o seu e-mail abaixo para Receber mais Instru��es sobre como recuperar uma sua conta.");
$langmsg['recover'][2] = x("Email:");
$langmsg['recover'][3] = x("Voc� ou algu�m em seu nomme solicitou para redefinir sua senha, use o link abaixo para faz�-lo.");
$langmsg['recover'][4] = x("Clique aqui para redefinir sua senha");
$langmsg['recover'][5] = x("Um e-mail foi enviado para");
$langmsg['recover'][6] = x("N�o encontramos uma conta com este email, por favos contacte o Admnistrador.");
$langmsg['recover'][7] = x("Nova Senha");
$langmsg['recover'][8] = x("Digite sua nova senha abaixo.");
$langmsg['recover'][9] = x("N�o � poss�vel enviar e-mail de recupera��o, Por favor contate o seu administrador do sistema.");
$langmsg['recover'][10] = x("Confirma a senha:");
$langmsg['recover'][11] = x("As senhas n�o s�o iguais.");
$langmsg['recover'][12] = x("Sua senha foi atualizada.");
$langmsg['recover'][13] = x("com mais instru��es sobre como recuperar a sua conta.");

#-----TEMPLATES MODULE
$langmsg['templates'][0] = x("Templates");
$langmsg['templates'][1] = x("Criar um novo modelo.");
$langmsg['templates'][2] = x("Nome:");
$langmsg['templates'][3] = x("Muda como as not�cias s�o exibidas.");
$langmsg['templates'][4] = x("Exibe o t�tulo da hist�ria.");
$langmsg['templates'][5] = x("Mostra o sum�rio da not�cia.");
$langmsg['templates'][6] = x("Mostra a not�cia completa.");
$langmsg['templates'][7] = x("Mostra a data em que a not�cia foi publicada.");
$langmsg['templates'][8] = x("Mostra as categorias em que cada not�cia foi atribu�do.");
$langmsg['templates'][9] = x("Mostra o autor da not�cia.");
$langmsg['templates'][10] = x("Mostra o avatar do usu�rios se eles tiverem um.");
$langmsg['templates'][11] = x("Mostra a identifica��o exclusiva que cada not�cia tem.");
$langmsg['templates'][12] = x("Mostra o endere�o IP do autor. (Apenas mostra se voc� est� conectado)");
$langmsg['templates'][13] = x("Mostra o link para ler a not�cia completa.");
$langmsg['templates'][14] = x("Vai mostrar o seu endere�o de e-mail.");
$langmsg['templates'][15] = x("Ir� criar um link para o seu endere�o de e-mail.");
$langmsg['templates'][16] = x("ir� criar um link para seu perfil.");
$langmsg['templates'][17] = x("Mostra o n�mero de coment�rios em cada not�cias.");
$langmsg['templates'][18] = x("ir� criar um link para os coment�rios.");
$langmsg['templates'][19] = x("Qualquer coisa colocar entre essas tags s� ir� mostrar se estiver conectado");
$langmsg['templates'][20] = x("Caminho para os sorrisos");
$langmsg['templates'][21] = x("Coment�rios");
$langmsg['templates'][22] = x("Muda como os coment�rios s�o exibidos.");
$langmsg['templates'][23] = x("Exibe o autor do coment�rio.");
$langmsg['templates'][24] = x("Mostra a mensagem. ");
$langmsg['templates'][25] = x("Mostra o avatar do usu�rios se eles tiverem um.");
$langmsg['templates'][26] = x("Mostra o endere�o IP do autor. (Apenas mostra se voc� est� conectado)");
$langmsg['templates'][27] = x("Mostra a identifica��o exclusiva de cada coment�rio tem. ");
$langmsg['templates'][28] = x("Mostra o endere�o de email do usu�rio que comentou.");
$langmsg['templates'][29] = x("ir� criar um link para o e-mail usu�rios.");
$langmsg['templates'][30] = x("Mostra a data em que o coment�rio foi publicado.");
$langmsg['templates'][31] = x("Qualquer coisa colocar entre essas tags s� mostrar� polegadas se registrado ");
$langmsg['templates'][32] = x("Formul�rio de coment�rios");
$langmsg['templates'][33] = x("� importante que durante a edi��o disso, manter os campos todos os nomes e as identifica��es de entrada o mesmo, caso contr�rio isto n�o vai funcionar. Notar tamb�m, que o atributo do formul�ario useajax onsubmit='', sim ou n�o, determina se o Ajax � usado quando o usu�rio envia um coment�rio.");
$langmsg['templates'][34] = x("Exibe o ID das not�cias.");
$langmsg['templates'][35] = x("Exibe a ID da categoria da not�cias.");
$langmsg['templates'][36] = x("Vai mostrar o seu nome se estiver conectado.");
$langmsg['templates'][37] = x("Vai mostrar seu e-mail se estiver conectado.");
$langmsg['templates'][38] = x("Vai mostrar a mensagem.");
$langmsg['templates'][39] = x("Vai mostrar todos os sorrisos.");
$langmsg['templates'][40] = x("Pagina��o das not�cias");
$langmsg['templates'][44] = x("Pagina��o dos Coment�rios");
$langmsg['templates'][45] = x("Mostra o link anterior, se houver algum.");
$langmsg['templates'][46] = x("Mostra o link seguinte, se houver algum.");
$langmsg['templates'][47] = x("Vai mostrar o n�mero de p�ginas, Ex.: 1 2 3 4.");
$langmsg['templates'][48] = x("Perfis");
$langmsg['templates'][49] = x("Editar como os perfis dos usu�rios s�o exibidos.");
$langmsg['templates'][50] = x("Mostra o ID dos usu�rios.");
$langmsg['templates'][51] = x("Mostra o nome do usu�rio.");
$langmsg['templates'][52] = x("Mostra a idade do usu�rio.");
$langmsg['templates'][53] = x("Mostra a localiza��o do usu�rio.");
$langmsg['templates'][54] = x("Mostra o sexo dos usu�rios.");
$langmsg['templates'][55] = x("Cria um link para a p�gina principal do usu�rios.");
$langmsg['templates'][56] = x("Mostra os interesses dos usu�rios. ");
$langmsg['templates'][57] = x("Mostra o passatempo do usu�rio.");
$langmsg['templates'][58] = x("Mostra a ocupa��o usu�rios.");
$langmsg['templates'][59] = x("Mostra cita��o favorita dos usu�rios.");
$langmsg['templates'][60] = x("Mostrar a foto do perfil do usu�rio.");
$langmsg['templates'][61] = x("Estrutura das Not�cias");
$langmsg['templates'][62] = x("Aqui � onde voc� pode controlar a ordem fisica de como cada elemento das not�cias s�o exibidos, por exemplo, se voc� quiser que a pagina��o seja exibida acima da not�cia, bem como abaixo dela voc� pode fazer isso aqui.");
$langmsg['templates'][63] = x("Exibe suas not�cias.");
$langmsg['templates'][64] = x("Exibe a pagina��o das not�cias.");
$langmsg['templates'][65] = x("Estrutura dos Coment�rios");
$langmsg['templates'][66] = x("Aqui � onde voc� pode controlar a ordem fisica de como cada elemento de not�cias � exibida quando existem coment�rios, por exemplo, se voc� quiser que a pagina��o seja exibido acima de seus coment�rios, bem como abaixo, voc� pode fazer isso aqui.");
$langmsg['templates'][67] = x("Exibe a �nica not�cias quando houver coment�rios.");
$langmsg['templates'][68] = x("Exibe seus coment�rios.");
$langmsg['templates'][69] = x("Exibe a pagina��o dos coment�rio.");
$langmsg['templates'][70] = x("Mostra o formul�rio para coment�rios.");
$langmsg['templates'][71] = x("Formul�rio de Registo");
$langmsg['templates'][72] = x("Aqui � onde voc� controla o formul�rio que permite aos usu�rios registarem. � importante manter todos os campos de nomes e as identifica��es de entrada o mesmo, caso contr�rio n�o vai funcionar.");
$langmsg['templates'][73] = x("O ID que usu�rio entra.");
$langmsg['templates'][74] = x("A senha que usu�rio entra.");
$langmsg['templates'][75] = x("Mostra a mensagem de erro se um campo foi deixado em branco.");
$langmsg['templates'][76] = x("Por favor, digite um nome.");
$langmsg['templates'][77] = x("Modelo criado.");
$langmsg['templates'][78] = x("Por favor escolha outro nome.");
$langmsg['templates'][79] = x("Editar modelos abaixo para alterar a forma como as not�cias e coment�rios s�o apresentadas.");
$langmsg['templates'][80] = x("Not�cias");
$langmsg['templates'][81] = x("Modelos atualizado.");
$langmsg['templates'][82] = x("Um modelo com esse nome j� existe. Escolha outro nome");
$langmsg['templates'][83] = x("N�o � poss�vel remover o modelo que est� em uso");
$langmsg['templates'][84] = x("Os modelo (s) selecionado (s) foram removidos");
$langmsg['templates'][85] = x("Modelo (s) copiado");
$langmsg['templates'][86] = x("Escolha o nome de um modelo para editar abaixo.");
$langmsg['templates'][87] = x("Modelo selecionado.");
$langmsg['templates'][88] = x("Nome");
$langmsg['templates'][89] = x("Selecionado");
$langmsg['templates'][90] = x("Criar um novo modelo.");
$langmsg['templates'][91] = x("Selecionar");
$langmsg['templates'][92] = x("Mostra o n�mero de visita que cada not�cia teve.");
$langmsg['templates'][93] = x("Mostra a imagem das estrelas de classifica��o.");
$langmsg['templates'][94] = x("Mostra a classifica��o corrente da not�cia.");
$langmsg['templates'][95] = x("Mostra n�mero de vezes que a not�cia foi avaliada.");
$langmsg['templates'][96] = x("Mostra o formul�rio de avalia��o das not�cias.");
$langmsg['templates'][98] = x("Mostra o formul�rio para enviar a not�cia para alguem.");
$langmsg['templates'][99] = x("Mostra a localiza��o dos usu�rios.");
$langmsg['templates'][100] = x("Limas transferidas arquivos pela rede");
$langmsg['templates'][101] = x("Controle como suas limas transferidas arquivos pela rede s�o mostradas.");
$langmsg['templates'][102] = x("Date a lima foi transferido arquivos pela rede.");
$langmsg['templates'][103] = x("T�tulo da lima.");
$langmsg['templates'][104] = x("Nome de arquivo da lima.");
$langmsg['templates'][105] = x("Filesize da lima.");
$langmsg['templates'][106] = x("URL para transferir a lima.");
$langmsg['templates'][107] = x("Username do uploader.");
$langmsg['templates'][108] = x("A quantidade de tempo a lima foi transferida.");
$langmsg['templates'][109] = x("Mostre as limas lig ao borne da not�cia.");
$langmsg['templates'][110] = x("Mostre cada lima lig ao borne da not�cia.");
$langmsg['templates'][111] = x("Mostra somente 3 p�ginas de cada vez");
$langmsg['templates'][112] = x("Lig para paginar umas, mostras se n�o atualmente na p�gina uma.");
$langmsg['templates'][113] = x("Lig � �ltima p�gina, mostras se n�o atualmente na p�gina a �ltima p�gina.");
$langmsg['templates'][114] = x("Mostra o n�mero de palavras para este borne ");
$langmsg['templates'][115] = x("Mostra o t�tulo amig�vel da hist�ria");
$langmsg['templates'][116] = x("Mostra o elemento reCAPTCHA");
$langmsg['templates'][117] = x("Cria um link para apagar o coment�rio.");
$langmsg['templates'][118] = x("Mostra o formul�rio de login apenas se o login for necess�rio.");
$langmsg['templates'][119] = x("Login Form");
$langmsg['templates'][120] = x("Controlar a forma como o formul�rio de login � exibida.");
$langmsg['templates'][121] = x("Exibe o e-mail digitado pelo usu�rio.");
$langmsg['templates'][122] = x("Exibe a mensagem de erro de login.");
$langmsg['templates'][123] = x("Mostra o elemento reCAPTCHA.");
$langmsg['templates'][124] = x("Mostra ao usu�rio o nome de usu�rio inserido.");
$langmsg['templates'][125] = x("Se logado exibe o nome do usu�rio.");
$langmsg['templates'][126] = x("Exibe o formul�rio de busca. Todos os nomes e as identifica��es devem permanecer os mesmos.");
$langmsg['templates'][127] = x("Exibe o n�mero para cada resultado de pesquisa");
$langmsg['templates'][128] = x("Formatos como os resultados da pesquisa s�o exibidas. Se repete para cada resultado.");
$langmsg['templates'][129] = x("Alterna entre a sa�da de um ou dois para cada linha.");
$langmsg['templates'][130] = x("Exibe o n�mero da p�gina atual.");
$langmsg['templates'][131] = x("Exibe o n�mero da p�gina anterior.");
$langmsg['templates'][132] = x("Exibe o n�mero da p�gina seguinte.");
$langmsg['templates'][133] = x("Exibe o t�tulo amig�vel da not�cia.");
$langmsg['templates'][134] = x("Formul�rio de Busca");
$langmsg['templates'][135] = x("Resultados da pesquisa");
$langmsg['templates'][136] = x("Envio de arquivos");

#-----UPLOADED FILES
$langmsg['uploadedfiles'][0] = x("Transfer�ncias de arquivo pela rede da lima");
$langmsg['uploadedfiles'][1] = x("Transfira arquivos pela rede uma lima nova");
$langmsg['uploadedfiles'][2] = x("Lima da transfer�ncia de arquivo pela rede");
$langmsg['uploadedfiles'][4] = x("Escolha uma lima:");
$langmsg['uploadedfiles'][5] = x("As limas suprimiram.");
$langmsg['uploadedfiles'][6] = x("A lima transferiu arquivos pela rede");
$langmsg['uploadedfiles'][7] = x("Havia um erro que transfere arquivos pela rede a lima, tenta por favor outra vez.");
$langmsg['uploadedfiles'][8] = x("Extens�o de lima inv�lida.");
$langmsg['uploadedfiles'][9] = x("Inv�lido lima.");
$langmsg['uploadedfiles'][10] = x("Lima removida da categoria.");
$langmsg['uploadedfiles'][11] = x("Limas adicionadas � categoria.");
$langmsg['uploadedfiles'][12] = x("Nome de arquivo");
$langmsg['uploadedfiles'][13] = x("Selecione uma categoria:");
$langmsg['uploadedfiles'][14] = x("Edite uma lima");
$langmsg['uploadedfiles'][15] = x("T�tulo:");
$langmsg['uploadedfiles'][16] = x("Descri��o:");
$langmsg['uploadedfiles'][17] = x("Lima da actualiza��o");
$langmsg['uploadedfiles'][18] = x("Lima inv�lida");
$langmsg['uploadedfiles'][19] = x("Lima actualizado");
$langmsg['uploadedfiles'][20] = x("Miniaturas");
$langmsg['uploadedfiles'][21] = x("Detalhes");
$langmsg['uploadedfiles'][22] = x("Categoria:");
$langmsg['uploadedfiles'][23] = x("T�tulo");
$langmsg['uploadedfiles'][24] = x("Filesize");
$langmsg['uploadedfiles'][25] = x("Autor");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("Adicione � categoria");
$langmsg['uploadedfiles'][28] = x("Remova da categoria");
$langmsg['uploadedfiles'][29] = x("Limas transferidas arquivos pela rede");
$langmsg['uploadedfiles'][30] = x("Uma lima com esse nome j� existe.");
$langmsg['uploadedfiles'][31] = x("Restaure transfer�ncias:");
$langmsg['uploadedfiles'][32] = x("Todas as categorias");
$langmsg['uploadedfiles'][33] = x("Downloads");
$langmsg['uploadedfiles'][34] = x("Carregado");

#-----ADMIN DATA
$langmsg['admindata'][0] = x("Ajuda");
$langmsg['admindata'][1] = x("Adicionar Not�cia");
$langmsg['admindata'][2] = x("Mensagens Privadas");
$langmsg['admindata'][3] = x("Editar Not�cia");
$langmsg['admindata'][4] = x("Editar coment�rios");

#-----SUBMIT FIELDS
$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("Vista previa");
$langmsg['submitfield'][2] = x("Adicionar Not�cia");
$langmsg['submitfield'][3] = x("Salvar");
$langmsg['submitfield'][4] = x("Enviar");
$langmsg['submitfield'][5] = x("Criar");
$langmsg['submitfield'][6] = x("Actualizar");
$langmsg['submitfield'][7] = x("Adicionar");
$langmsg['submitfield'][8] = x("Apagar");
$langmsg['submitfield'][9] = x("Recuperar");

#-----SELECT FIELDS
$langmsg['selectfield'][0] = x("- Escolha a op��o -");
$langmsg['selectfield'][1] = x("Sim");
$langmsg['selectfield'][2] = x("N�o");
$langmsg['selectfield'][3] = x("Apagar");
$langmsg['selectfield'][4] = x("Precisa aprova��o");
$langmsg['selectfield'][5] = x("Permitir coment�rios");
$langmsg['selectfield'][6] = x("Mudan�a de aprova��o");
$langmsg['selectfield'][7] = x("Aprova��o");
$langmsg['selectfield'][8] = x("Coment�rios");
$langmsg['selectfield'][9] = x("Aprovar");
$langmsg['selectfield'][10] = x("Desaprovar");
$langmsg['selectfield'][11] = x("Data");
$langmsg['selectfield'][12] = x("T�tulo");
$langmsg['selectfield'][13] = x("Autor");
$langmsg['selectfield'][14] = x("Categoria");
$langmsg['selectfield'][15] = x("N� de Coment�rios");
$langmsg['selectfield'][16] = x("Marcar como lido");
$langmsg['selectfield'][17] = x("Marcar como n�o lidas");
$langmsg['selectfield'][18] = x("Repor contagem bloqueada");
$langmsg['selectfield'][19] = x("Criar c�pia");
$langmsg['selectfield'][20] = x("Redefinir contagem vista");
$langmsg['selectfield'][21] = x("Avalia��es Reset");

#-----Javascript
$langmsg['js'][0] = x("� voc� certo voc� quer remover esta imagem da categoria?");
$langmsg['js'][1] = x("� voc� certo voc� quer suprimir das imagens selecionadas?");
$langmsg['js'][2] = x("� voc� certo voc� quer suprimir das mensagens selecionadas?");
$langmsg['js'][3] = x("� voc� certo voc� quer suprimir dos moldes selecionados?");
$langmsg['js'][4] = x("� voc� certo voc� quer suprimir destes IP address?");
$langmsg['js'][5] = x("� voc� certo voc� quer restaurar a contagem obstru�da para estes IP address?");
$langmsg['js'][6] = x("� voc� certo voc� quer suprimir destes n�veis de acesso?");
$langmsg['js'][7] = x("� voc� certo voc� quer suprimir destas categorias?");
$langmsg['js'][8] = x("� voc� certo voc� quer suprimir destas categorias E dos bornes dentro deles?");
$langmsg['js'][9] = x("� voc� certo voc� quer suprimir destas categorias?");
$langmsg['js'][10] = x("� voc� certo voc� quer suprimir destes clientes?");
$langmsg['js'][11] = x("� voc� certo voc� quer suprimir destes clientes E bornes?");
$langmsg['js'][12] = x("� voc� certo voc� quer suprimir destes bornes?");
$langmsg['js'][13] = x("Incorpore algum texto");
$langmsg['js'][14] = x("Texto");
$langmsg['js'][15] = x("Incorpore por favor uma cor. Exemplo, vermelho, amarelo, azul (ou mesmo valores hexadecimais)");
$langmsg['js'][16] = x("azul");
$langmsg['js'][17] = x("Incorpore o URL da liga��o");
$langmsg['js'][18] = x("Incorpore o texto a ser indicado");
$langmsg['js'][19] = x("Liga��o");
$langmsg['js'][20] = x("Incorpore um tamanho de pia batismal");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Texto a indicar?");
$langmsg['js'][23] = x("Email address");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Envie-me!");
$langmsg['js'][26] = x("Texto das cita��es?");
$langmsg['js'][27] = x("Cita��es");
$langmsg['js'][28] = x("� voc� certo voc� quer suprimir de coment�rios selecionados?");
$langmsg['js'][29] = x("� voc� certo voc� quer suprimir das categorias selecionadas?");
$langmsg['js'][30] = x("Come� smilies� Espere por favor.");
$langmsg['js'][31] = x("� voc� certo voc� quer suprimir das limas selecionadas?");
$langmsg['js'][32] = x("� voc� certo voc� quer suprimir dos smilies selecionados?");


$langmsg['news'][0] = x("Por favor, digite um nome.");
$langmsg['news'][1] = x("Digite uma mensagem.");
$langmsg['news'][2] = x("Inv�lido chave de seguran�a");
$langmsg['news'][3] = x("Escolha outro nome.");
$langmsg['news'][4] = x("Inv�lido chave de seguran�a");
$langmsg['news'][5] = x("Resultados encontrados:");
$langmsg['news'][6] = x("Novas inscri��es est�o desativados.");
$langmsg['news'][7] = x("Sua conta foi criada, agora voc� pode <a href=\"{adminpath}\">login aqui.</a>");
$langmsg['news'][8] = x("Por favor, digite um nome.");
$langmsg['news'][9] = x("Digite uma mensagem.");
$langmsg['news'][10] = x("Inv�lido chave de seguran�a");
$langmsg['news'][11] = x("Escolha outro nome.");
$langmsg['news'][12] = x("Inv�lido chave de seguran�a");
$langmsg['news'][13] = x("Obrigado pela sua classifica��o.");
$langmsg['news'][14] = x("Voc� j� avaliou este artigo.");
$langmsg['news'][15] = x("Nome");
$langmsg['news'][16] = x("Email:");
$langmsg['news'][17] = x("Amigos E-mail:");
$langmsg['news'][18] = x("Mensagem:");
$langmsg['news'][19] = x("Hey confira este artigo que encontrei!");
$langmsg['news'][20] = x("Enviar a um amigo");
$langmsg['news'][21] = x("E-mail enviado.");
$langmsg['news'][22] = x("Digite seu nome");
$langmsg['news'][23] = x("Por favor, indique o endere�o de email");
$langmsg['news'][24] = x("Digite uma mensagem");
$langmsg['news'][25] = x("Por favor, indique seus amigos endere�o de email");
$langmsg['news'][27] = x("Por favor, indique um endere�o de email v�lido");
$langmsg['news'][28] = x("Por favor, indique seus amigos e-mail v�lido");
$langmsg['news'][29] = x("Por favor, indique um nome de usu�rio.");
$langmsg['news'][30] = x("Esse nome j� foi tomada, por favor escolha outro.");
$langmsg['news'][31] = x("O endere�o de email j� est� em uso, escolha outro.");
$langmsg['news'][32] = x("Por favor, indique um endere�o de email.");
$langmsg['news'][33] = x("Digite um endere�o de e-mail v�lido.");
$langmsg['news'][34] = x("Por favor, digite uma senha.");
$langmsg['news'][35] = x("Por favor, confirme sua senha.");
$langmsg['news'][36] = x("As senhas que voc� digitou n�o s�o iguais.");
$langmsg['news'][37] = x("Chave de seguran�a inv�lida.");
$langmsg['news'][38] = x("Por favor, aguarde");
$langmsg['news'][39] = x("Houve um problema ao enviar sua mensagem, entre em contato com o administrador.");
$langmsg['news'][40] = x("Voc� deve estar conectado para postar um coment�rio.");
$langmsg['news'][41] = x("New comment on {domain}");
$langmsg['news'][42] = x("Nome: {name} \n Email / URL: {email} \n IP: {ip} \n Message: {message");
$langmsg['news'][43] = x("Novo registo em {domain}");
$langmsg['news'][44] = x("Nome: {name} \n Email: {email} \n IP: {ip}");
$langmsg['news'][45] = x("segundos antes de enviar outra mensagem.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Nome");
$langmsg['news'][48] = x("Email / URL");
$langmsg['news'][49] = x("Mensagem");
$langmsg['news'][50] = x("Digite o t�tulo de um artigo");
$langmsg['news'][51] = x("Resumo");
$langmsg['news'][52] = x("N�o h� categorias");
$langmsg['news'][53] = x("Data");
$langmsg['news'][54] = x("Data este artigo foi publicado");
$langmsg['news'][55] = x("Arquivo");


$langmsg['shortmonths'][0] = x("Jan");
$langmsg['shortmonths'][1] = x("Fevereiro");
$langmsg['shortmonths'][2] = x("Mar");
$langmsg['shortmonths'][3] = x("Abril");
$langmsg['shortmonths'][4] = x("Poder");
$langmsg['shortmonths'][5] = x("Junho");
$langmsg['shortmonths'][6] = x("Julho");
$langmsg['shortmonths'][7] = x("Agosto");
$langmsg['shortmonths'][8] = x("Setembro");
$langmsg['shortmonths'][9] = x("Outubro");
$langmsg['shortmonths'][10] = x("Novembro");
$langmsg['shortmonths'][11] = x("Dezembro");


$langmsg['months'][0] = x("Janeiro");
$langmsg['months'][1] = x("Fevereiro");
$langmsg['months'][2] = x("Mar�o");
$langmsg['months'][3] = x("Abril");
$langmsg['months'][4] = x("Poder");
$langmsg['months'][5] = x("Junho");
$langmsg['months'][6] = x("Julho");
$langmsg['months'][7] = x("Agosto");
$langmsg['months'][8] = x("Setembro");
$langmsg['months'][9] = x("Outubro");
$langmsg['months'][10] = x("Novembro");
$langmsg['months'][11] = x("Dezembro");


$langmsg['search'][0] = x("Active News");
$langmsg['search'][1] = x("Not�cias em arquivo");
$langmsg['search'][2] = x("Novos primeiro");
$langmsg['search'][3] = x("Mais antigo primeiro");
$langmsg['search'][4] = x("Pesquisa");
$langmsg['search'][5] = x("Per�odo");


$langmsg['install'][0] = x("Database Connection Info");
$langmsg['install'][1] = x("Enter your MySQL server info abaixo.");
$langmsg['install'][2] = x("Servidor:");
$langmsg['install'][3] = x("(normalmente localhost)");
$langmsg['install'][4] = x("Nome de usu�rio:");
$langmsg['install'][5] = x("Senha:");
$langmsg['install'][6] = x("Base de dados:");
$langmsg['install'][7] = x("Teste de conex�o");
$langmsg['install'][8] = x("Conectando ao servidor:");
$langmsg['install'][9] = x("Selecionar banco de dados:");
$langmsg['install'][10] = x("Imposs�vel escrever para db.php, por favor, este arquivo para CHMOD 777");
$langmsg['install'][11] = x("Informa��o da conta");
$langmsg['install'][12] = x("Digite os dados da sua conta abaixo. Isso ser� usado para login.");
$langmsg['install'][13] = x("Email:");
$langmsg['install'][14] = x("Confirmar Senha:");
$langmsg['install'][15] = x("Continue");
$langmsg['install'][16] = x("Por favor, indique um nome de usu�rio");
$langmsg['install'][17] = x("Por favor, indique um endere�o de email");
$langmsg['install'][18] = x("Digite sua senha");
$langmsg['install'][19] = x("Pressione Install para finalizar a instala��o");
$langmsg['install'][20] = x("As senhas n�o coincidem");
$langmsg['install'][21] = x("Instalar");
$langmsg['install'][22] = x("Finalizando a instala��o");
$langmsg['install'][23] = x("SUCESSO!");
$langmsg['install'][24] = x("N-13 News foi instalado.");
$langmsg['install'][25] = x("Entrar para a �rea administrativa.");
$langmsg['install'][26] = x("Porto:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Extens�o:");
$langmsg['install'][29] = x("(deixar em branco por padr�o)");
$langmsg['install'][30] = x("Instalando ... Por favor, aguarde.");
$langmsg['install'][31] = x("A fun��o mysqli_connect n�o foi encontrado.");
$langmsg['install'][32] = x("A fun��o PDO_MYSQL n�o foi encontrado.");
?>