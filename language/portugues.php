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
$langmsg['menu'][0] = x("Adicionar Notícia");
$langmsg['menu'][1] = x("Editar Notícia");
$langmsg['menu'][2] = x("Arquivos");
$langmsg['menu'][3] = x("Nova Mensagem");
$langmsg['menu'][4] = x("Entrada");
$langmsg['menu'][5] = x("Saídas");
$langmsg['menu'][6] = x("Contas");
$langmsg['menu'][7] = x("Níveis de Acesso");
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
$langmsg['menu'][19] = x("Notícias");
$langmsg['menu'][20] = x("Mensagens");
$langmsg['menu'][21] = x("Opções");
$langmsg['menu'][22] = x("Ajuda");
$langmsg['menu'][23] = x("Sair");
$langmsg['menu'][24] = x("File Uploads");

#-----HOME MODULE
$langmsg['home'][0] = x("Estatística Geral das Notícias.");
$langmsg['home'][1] = x("Bemvindo");
$langmsg['home'][2] = x("A configuração PHP \"magic_quotes_gpc\" foi detectado e está activado. É aconselhável que você desative esta configuração.");
$langmsg['home'][3] = x("A configuração PHP \"register_globals\" foi detectado e está activado. É aconselhável que você a desative, pois ele pode causar problemas de segurança e erros.");
$langmsg['home'][4] = x( "install.php foi detectado. Por favor, remova esse ficheiro.   Tente apagar este arquivo automaticamente?");
$langmsg['home'][5] = x("install.php não pode ser removida, por favor, remova esse ficheiro manualmente");
$langmsg['home'][6] = x("Nº Total de Notícias:");
$langmsg['home'][7] = x("Nº de Comentários:");
$langmsg['home'][8] = x("Nº de Usuários:");
$langmsg['home'][9] = x("Nº de Sorrisos:");
$langmsg['home'][10] = x("Nº de Filtros:");
$langmsg['home'][11] = x("Nº de Categorias:");
$langmsg['home'][12] = x("Nº de Modelos:");
$langmsg['home'][13] = x("Nº de Níveis de Acesso:");
$langmsg['home'][14] = x("Conectando a base de dados:");
$langmsg['home'][15] = x("Otimização de todas as tabelas");
$langmsg['home'][16] = x("Versão atual:");
$langmsg['home'][17] = x("Versão mais recente:");
$langmsg['home'][18] = x("Ver o registo de acesso");
$langmsg['home'][19] = x("Tempo de busca:");
$langmsg['home'][20] = x("Mensagens Unread");
$langmsg['home'][21] = x("Tente apagar este arquivo automaticamente?");
$langmsg['home'][22] = x("segundo");
$langmsg['home'][23] = x("Total images");
$langmsg['home'][24] = x("Total de arquivos");
$langmsg['home'][25] = x("Total de RSS Feeds");

#-----ADDNEWS MODULE
$langmsg['addnews'][0] = x("Prever a Notícia");
$langmsg['addnews'][1] = x("Por favor, indique um título");
$langmsg['addnews'][2] = x("Por favor, selecione se vai permitem comentários as Notícias ou não");
$langmsg['addnews'][3] = x("Adicionar Notícia");
$langmsg['addnews'][4] = x("Por favor, selecione uma categoria");

#-----EDITNEWS MODULE
$langmsg['editnews'][0] = x("Editar Notícia");
$langmsg['editnews'][1] = x("Mostrando");
$langmsg['editnews'][2] = x("Opções");
$langmsg['editnews'][3] = x("Quantidade para mostrar");
$langmsg['editnews'][4] = x("Ordenar por");
$langmsg['editnews'][5] = x("Ordem");
$langmsg['editnews'][7] = x("Título");
$langmsg['editnews'][8] = x("Autor");
$langmsg['editnews'][9] = x("Categorias");
$langmsg['editnews'][10] = x("Data");
$langmsg['editnews'][11] = x("Aprovação");
$langmsg['editnews'][12] = x("Comentários");
$langmsg['editnews'][13] = x("[show]");
$langmsg['editnews'][14] = x("Aprovado");
$langmsg['editnews'][15] = x("Não aprovados");
$langmsg['editnews'][16] = x("News acrescentou.");
$langmsg['editnews'][17] = x("Selecionar notícias apagadas");
$langmsg['editnews'][18] = x("Selecionar notícias atualizados.");
$langmsg['editnews'][19] = x("Notícia atualizada.");
$langmsg['editnews'][20] = x("Desativado");
$langmsg['editnews'][21] = x("notícias.");
$langmsg['editnews'][22] = x("no total.");
$langmsg['editnews'][23] = x("Ver reset contagem a 0 para o artigo selecionado (s)");
$langmsg['editnews'][24] = x("Avaliações de reset para o artigo selecionado (s)");
$langmsg['editnews'][25] = x("Filtrar por categoria");

#-----NEWSFORM
$langmsg['newsform'][0] = x("Escreva a sua notícias abaixo.");
$langmsg['newsform'][1] = x("Título:");
$langmsg['newsform'][2] = x("Categorias:");
$langmsg['newsform'][3] = x("Sumário (Emgeral o 1º paragrafo)");
$langmsg['newsform'][4] = x("Corpo (Notícia inteira");
$langmsg['newsform'][5] = x("HTML Desativado");
$langmsg['newsform'][6] = x("HTML Activado");
$langmsg['newsform'][7] = x("Comentários:");
$langmsg['newsform'][8] = x("Expandir Data");
$langmsg['newsform'][9] = x("Expandir Sumário");
$langmsg['newsform'][16] = x("Data:");
$langmsg['newsform'][17] = x("Expandir Arquivo");
$langmsg['newsform'][18] = x("Nunca arquivar");
$langmsg['newsform'][19] = x("Agency:");
$langmsg['newsform'][20] = x("Transferências");
$langmsg['newsform'][21] = x("Transferido arquivos pela rede");
$langmsg['newsform'][22] = x("Artigo");
$langmsg['newsform'][23] = x("Digite uma URL de imagem");
$langmsg['newsform'][24] = x("Inserir");
$langmsg['newsform'][25] = x("Selecione uma imagem importada");

#-----COMMENTS MODULE
$langmsg['editcomments'][0] = x("Editar comentários");
$langmsg['editcomments'][1] = x("Editar o comentário abaixo.");
$langmsg['editcomments'][2] = x("Autor: ");
$langmsg['editcomments'][3] = x("Email:");
$langmsg['editcomments'][4] = x("Mensagem:");
$langmsg['editcomments'][5] = x("comentário atualizado.");
$langmsg['editcomments'][6] = x("comentários removidos.");
$langmsg['editcomments'][7] = x("comentários atualizados.");
$langmsg['editcomments'][8] = x("comentários no total.");
$langmsg['editcomments'][9] = x("Mensagem");
$langmsg['editcomments'][10] = x("Data");
$langmsg['editcomments'][11] = x("Aprovação");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Aprovado");
$langmsg['editcomments'][14] = x("Não aprovados");
$langmsg['editcomments'][15] = x("Localidade:");

#-----PRIVATE MESSAGES MODUKE
$langmsg['privmsgs'][0] = x("Mensagens Privadas");
$langmsg['privmsgs'][1] = x("Entrada");
$langmsg['privmsgs'][2] = x("Saídas");
$langmsg['privmsgs'][3] = x("Nova Mensagem");
$langmsg['privmsgs'][4] = x("Você tem");
$langmsg['privmsgs'][5] = x("Título");
$langmsg['privmsgs'][6] = x("De");
$langmsg['privmsgs'][7] = x("Enviadas");
$langmsg['privmsgs'][8] = x("Para");
$langmsg['privmsgs'][9] = x("Responder a esta mensagem");
$langmsg['privmsgs'][10] = x("Nova mensagem privada.");
$langmsg['privmsgs'][11] = x("Enviar para:");
$langmsg['privmsgs'][12] = x("Título:");
$langmsg['privmsgs'][13] = x("Mensagem:");
$langmsg['privmsgs'][14] = x("Exemplo 'utilizador1, utilizador2, utilizador3'");
$langmsg['privmsgs'][15] = x("Vista previa.");
$langmsg['privmsgs'][16] = x("Mensagem enviada para os seguintes usuários.");
$langmsg['privmsgs'][17] = x("Por favor, Digite um usuário para enviar esta mensagem.");
$langmsg['privmsgs'][18] = x("Por favor, indique um título para essa mensagem.");
$langmsg['privmsgs'][19] = x("Digite uma mensagem.");
$langmsg['privmsgs'][20] = x("Mensagens apagadas.");
$langmsg['privmsgs'][21] = x("mensagens não lidas.");
$langmsg['privmsgs'][22] = x("blogs no total.");

#-----OPTIONS MODULE
$langmsg['options'][0] = x("Opções");

#-----BANNED IPS MODULE
$langmsg['bannedips'][0] = x("IPs Banidos");
$langmsg['bannedips'][1] = x("IPs Banidos.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Número de vezes bloqueada");
$langmsg['bannedips'][4] = x("Adicionar um novo endereço IP.");
$langmsg['bannedips'][5] = x("Mensagem de banidos. (HTML está activado)");
$langmsg['bannedips'][6] = x("Endereço IP:");
$langmsg['bannedips'][7] = x("Este endereço de IP já é proibida.");
$langmsg['bannedips'][8] = x("Endereço de IP banido.");
$langmsg['bannedips'][9] = x("endereços IP excluído.");
$langmsg['bannedips'][10] = x("endereços IP foi reposto.");
$langmsg['bannedips'][11] = x("Mensagem de IP Banida foi atualizada.");

#-----CATEGORIES MODULE
$langmsg['cats'][0] = x("Categorias");
$langmsg['cats'][1] = x("Categorias.");
$langmsg['cats'][2] = x("Nome");
$langmsg['cats'][3] = x("Notícias atribuídas a esta categoria");
$langmsg['cats'][4] = x("Criar uma nova categoria.");
$langmsg['cats'][5] = x("Nome:");
$langmsg['cats'][6] = x("As seguintes categorias foram apagadas:");
$langmsg['cats'][7] = x("Por favor escolha outro nome.");
$langmsg['cats'][8] = x("categoria criada.");
$langmsg['cats'][9] = x("Categoria atualizada.");
$langmsg['cats'][10] = x("Editar a sua categoria abaixo.");
$langmsg['cats'][11] = x("Imagens");
$langmsg['cats'][12] = x("Limas");
$langmsg['cats'][13] = x("Uma categoria com esse nome já existe, satisfaz escolhe outro.");

#-----IMAGE UPLOADS MODULE
$langmsg['img'][0] = x("Carregar Imagem");
$langmsg['img'][1] = x("Enviar uma imagem");
$langmsg['img'][2] = x("Carregar Ficheiro");
$langmsg['img'][3] = x("Total de Imagens");
$langmsg['img'][4] = x("Escolha uma imagem:");
$langmsg['img'][5] = x("Imagens apagadas.");
$langmsg['img'][6] = x("Imagem transferidas");
$langmsg['img'][7] = x("Houve um erro ao enviar o ficheiro, por favor, tente novamente.");
$langmsg['img'][8] = x("Extensão do ficheiro inválido.");
$langmsg['img'][9] = x("Imagem inválida.");
$langmsg['img'][10] = x("Imagem removida da categoria.");
$langmsg['img'][11] = x("Imagens adicionadas à categoria.");
$langmsg['img'][12] = x("Nome de arquivo:");
$langmsg['img'][13] = x("Selecione uma categoria:");
$langmsg['img'][14] = x("Edite uma imagem");
$langmsg['img'][15] = x("Título:");
$langmsg['img'][16] = x("Descrição:");
$langmsg['img'][17] = x("Imagem da actualização");
$langmsg['img'][18] = x("Imagem inválida");
$langmsg['img'][19] = x("Imagem actualizado");
$langmsg['img'][20] = x("Miniaturas");
$langmsg['img'][21] = x("Detalhes");
$langmsg['img'][22] = x("Categoria:");
$langmsg['img'][23] = x("Nome de arquivo");
$langmsg['img'][24] = x("Filesize");
$langmsg['img'][25] = x("Autor");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("Adicione à categoria");
$langmsg['img'][28] = x("Remova da categoria");
$langmsg['img'][29] = x("Images uploaded to");
$langmsg['img'][30] = x("Uma lima com esse nome já existe.");
$langmsg['img'][31] = x("Todas as categorias");
$langmsg['img'][32] = x("Impossível escrever para o diretório de uploads. CHMOD este diretório para 777");

#-----PERSONAL MODULE
$langmsg['personal'][0] = x("Opções Pessoais");
$langmsg['personal'][1] = x("Edite a informação da sua conta abaixo.");
$langmsg['personal'][2] = x("Configurações pessoais para");
$langmsg['personal'][3] = x("Url para Avatar");
$langmsg['personal'][4] = x("Endereço de email: ");
$langmsg['personal'][5] = x("Alertas:");
$langmsg['personal'][6] = x("Seja alertado de mensagens não lidas quando entrar á 1ª vez?");
$langmsg['personal'][7] = x("Nova Senha:");
$langmsg['personal'][8] = x("(deixe em branco para manter actualizado)");
$langmsg['personal'][9] = x("Confirme a senha:");
$langmsg['personal'][10] = x("Um endereço de e-mail deve ser preenchido.");
$langmsg['personal'][11] = x("Configurações atualizada.");
$langmsg['personal'][12] = x("As senhas não são iguais.");
$langmsg['personal'][13] = x("Habilitar editor WYSIWYG?");

#-----LOGIN MODULE
$langmsg['login'][0] = x("Área Restrita");
$langmsg['login'][1] = x("Nome:");
$langmsg['login'][2] = x("Senha:");
$langmsg['login'][3] = x("Esqueceu-se da sua Senha?");
$langmsg['login'][4] = x("Recordar-me");
$langmsg['login'][5] = x("Codigo de Segurança:");
$langmsg['login'][6] = x("Entrar");
$langmsg['login'][7] = x("Código de Segurança Inválido");
$langmsg['login'][8] = x("Inválido ID ou Senha");
$langmsg['login'][9] = x("Digite esse código abaixo");

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
$langmsg['profile'][10] = x("Profissão:");
$langmsg['profile'][11] = x("Provórbio preferido:");
$langmsg['profile'][12] = x("Masculino");
$langmsg['profile'][13] = x("Feminino");
$langmsg['profile'][14] = x("Perfil atualizado.");
$langmsg['profile'][15] = x("Nenhum");

#-----ACCOUNTS MODULE
$langmsg['accounts'][0] = x("Contas");
$langmsg['accounts'][1] = x("Contas.");
$langmsg['accounts'][2] = x("Nome ou ID");
$langmsg['accounts'][3] = x("Nível de acesso");
$langmsg['accounts'][4] = x("Número de Notícias");
$langmsg['accounts'][5] = x("Número de comentários");
$langmsg['accounts'][6] = x("Criar uma nova conta.");
$langmsg['accounts'][7] = x("Nome da conta:");
$langmsg['accounts'][8] = x("Email:");
$langmsg['accounts'][9] = x("Nova senha:");
$langmsg['accounts'][10] = x("Confirmar senha:");
$langmsg['accounts'][11] = x("Nível de Acesso:");
$langmsg['accounts'][12] = x("Nova conta.");
$langmsg['accounts'][13] = x("Editar a conta abaixo.");
$langmsg['accounts'][14] = x("Um endereço de e-mail deve ser digitado.");
$langmsg['accounts'][15] = x("Conta atualizada.");
$langmsg['accounts'][16] = x("As senhas não são iguais.");
$langmsg['accounts'][17] = x("O nome da conta deve ser digitado.");
$langmsg['accounts'][18] = x("Este nome da conta já existe. Por favor escolha outro.");
$langmsg['accounts'][19] = x("A senha deve ser digitado.");
$langmsg['accounts'][20] = x("Conta criada.");
$langmsg['accounts'][21] = x("As contas seguintes foram eliminadas:");
$langmsg['accounts'][22] = x("Você não pode apagar a sua própria conta.");
$langmsg['accounts'][23] = x("(Deixe em branco para manter actualizada)");
$langmsg['accounts'][24] = x("Um cliente já está usando esse email address, escolhe por favor outro.");
$langmsg['accounts'][25] = x("Dê entrada com por favor um nome do cliente");

#----ACCESS MODULE
$langmsg['access'][0] = x("Níveis de Acesso");
$langmsg['access'][1] = x("Criar um novo nível de acesso.");
$langmsg['access'][2] = x("Nome:");
$langmsg['access'][3] = x("Que seções podem acessar este nível?");
$langmsg['access'][4] = x("Contas");
$langmsg['access'][5] = x("Níveis de Acesso:");
$langmsg['access'][6] = x("IPS Banidos:");
$langmsg['access'][7] = x("Categorias:");
$langmsg['access'][8] = x("Comentários:");
$langmsg['access'][9] = x("Ajuda");
$langmsg['access'][10] = x("Carregar Imagem:");
$langmsg['access'][11] = x("Notícias:");
$langmsg['access'][12] = x("Opções pessoais:");
$langmsg['access'][13] = x("Mensagens Privadas");
$langmsg['access'][14] = x("Perfil");
$langmsg['access'][15] = x("RSS");
$langmsg['access'][16] = x("Sorrisos");
$langmsg['access'][17] = x("Configuração do Sistema:");
$langmsg['access'][18] = x("Modelos:");
$langmsg['access'][19] = x("Filtro de Palavras:");
$langmsg['access'][20] = x("Quais as categorias que esse nível de acesso pôr notícias?");
$langmsg['access'][21] = x("Todos");
$langmsg['access'][22] = x("Que notícias este nível pode editar?");
$langmsg['access'][23] = x("Admin (Todas ):");
$langmsg['access'][24] = x("Moderador (Próprios + Membros):");
$langmsg['access'][25] = x("Membro (Próprios ):");
$langmsg['access'][26] = x("As notícias postas por este nível de acesso são automaticamente aprovado?");
$langmsg['access'][27] = x("Este nível de acesso pode aprovar mensagens?");
$langmsg['access'][28] = x("Este nível de acesso pode usar HTML?");
$langmsg['access'][29] = x("Permitir notícias sem selecionar uma categoria?");
$langmsg['access'][30] = x("Níveis de acesso apagado:");
$langmsg['access'][31] = x("Os seguintes níveis de acesso não foram apagadas porque têm um ou mais contas que lhes são atribuídas:");
$langmsg['access'][32] = x("Editar o nível de acesso abaixo.");
$langmsg['access'][33] = x("Por favor, digite um nome para esse nível de acesso.");
$langmsg['access'][34] = x("Nível de acesso atualizado.");
$langmsg['access'][35] = x("Um nível de acesso com esse nome já existe, escolha outro.");
$langmsg['access'][36] = x("Por favor, seleccione as notícias que este nível pode editar.");
$langmsg['access'][37] = x("Por favor, selecione se as notícias desse nível de acesso podem ser auto aprovado");
$langmsg['access'][38] = x("Por favor, selecione se este nível de acesso pode aprovar notícias");
$langmsg['access'][39] = x("Por favor, selecione se este nível de acesso pode usar HTML");
$langmsg['access'][40] = x("Por favor, selecione se este nível de acesso pode adicionar notícias sem selecionar uma categoria");
$langmsg['access'][41] = x("Nível de acesso criado.");
$langmsg['access'][42] = x("Níveis de Acesso");
$langmsg['access'][43] = x("Nome");
$langmsg['access'][44] = x("Acesso");
$langmsg['access'][45] = x("Contas");
$langmsg['access'][46] = x("Membro");
$langmsg['access'][47] = x("Moderador");
$langmsg['access'][48] = x("Administrador");
$langmsg['access'][49] = x("Transferências de arquivo pela rede da lima");
$langmsg['access'][50] = x("Pode ver esse nível de acesso do usuário endereços IP?");
$langmsg['access'][51] = x("Quais arquivos e imagens podem editar este nível de acesso?");
$langmsg['access'][52] = x("Próprio");
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
$langmsg['filters'][3] = x("Todas as palavras abaixo serão filtradas de todos os comentários.");
$langmsg['filters'][4] = x("Palavra filtrada");
$langmsg['filters'][5] = x("Substituir com");
$langmsg['filters'][6] = x("Apagar");

#-----RSS MODULE
$langmsg['rss'][0] = x("RSS");
$langmsg['rss'][1] = x("Editar as configurações de RSS abaixo");
$langmsg['rss'][2] = x("A localização da notícia é onde você vai exibir suas notícias, por exemplo http://yourdomain.com/ ou http://yourdomain.com/index");
$langmsg['rss'][3] = x("Nome da Fonte:");
$langmsg['rss'][4] = x("Localização das Notícias");
$langmsg['rss'][5] = x("Título do seu RSS:");
$langmsg['rss'][6] = x("Descrição do seu RSS:");
$langmsg['rss'][7] = x("Codificação de caracteres:");
$langmsg['rss'][8] = x("Idioma:");
$langmsg['rss'][9] = x("Nº de notícias para mostrar:");
$langmsg['rss'][10] = x("0 = todas");
$langmsg['rss'][11] = x("Categorias a mostrar:");
$langmsg['rss'][12] = x("Mostrar notícias que não foram atribuídas uma categoria?");
$langmsg['rss'][13] = x("Codogo de RSS:");
$langmsg['rss'][14] = x("Editar como o seu feed é exibido");
$langmsg['rss'][15] = x("Mostra o título da notícia. ");
$langmsg['rss'][16] = x("Mostra o sumário da notícia. ");
$langmsg['rss'][17] = x("Mostra a notícia completa. ");
$langmsg['rss'][18] = x("Mostra as categorias a que foi atribuído cada notícia. ");
$langmsg['rss'][19] = x("Mostra a URL para cada notícia específica. ");
$langmsg['rss'][20] = x("Mostra a data em que a notícia foi publicada. ");
$langmsg['rss'][21] = x("Exibe a configuração de fuso horário. ");
$langmsg['rss'][22] = x("Mostra a hora de cada notícia. ");
$langmsg['rss'][23] = x("Mostra o autor da notícia. ");
$langmsg['rss'][24] = x("Mostra o avatar do usuários se eles tiverem um. ");
$langmsg['rss'][25] = x("Mostra a identificação exclusiva de cada história tem. ");
$langmsg['rss'][26] = x("Mostra o Nº de comentários para cada notícia. ");
$langmsg['rss'][27] = x("Por favor, indique um nome da fonte");
$langmsg['rss'][28] = x("Por favor, indique um local de notícias");
$langmsg['rss'][29] = x("Por favor, indique um título");
$langmsg['rss'][30] = x("Digite uma descrição");
$langmsg['rss'][31] = x("Por favor, indique a codificação de caracteres");
$langmsg['rss'][32] = x("Por favor, indique um idioma");
$langmsg['rss'][33] = x("Digite o número de notícias para mostrar");
$langmsg['rss'][34] = x("RSS criado");
$langmsg['rss'][35] = x("Um RSS com esse nome já existe, escolha outro");
$langmsg['rss'][36] = x("RSS atualizado");
$langmsg['rss'][37] = x("RSS");
$langmsg['rss'][38] = x("RSS (s) apagados.");
$langmsg['rss'][39] = x("Nome");
$langmsg['rss'][40] = x("Categorias");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Criar um novo RSS.");
$langmsg['rss'][43] = x("Mostra o título amigável da história");

#-----SMILIES MODULE
$langmsg['smilies'][0] = x("Sorrisos");
$langmsg['smilies'][1] = x("Isto é útil se você deseja actualizar a localização de todos os seus sorrisos de uma só vez.");
$langmsg['smilies'][2] = x("Se você quiser mudar todos os sorrisos para ter um novo local você substituiria http://domain.com/oldlocation/smilies com http://domain.com/newlocation/smilies ou smilies/ com http://domain.com/smilies/");
$langmsg['smilies'][3] = x("Substituir");
$langmsg['smilies'][4] = x("Substituir com:");
$langmsg['smilies'][5] = x("Todos os caminhos atualizados.");
$langmsg['smilies'][6] = x("Criar um novo smilie");
$langmsg['smilies'][7] = x("Caminhos:");
$langmsg['smilies'][8] = x("Codigo");
$langmsg['smilies'][9] = x("Por favor, indique o caminho para o sorriso.");
$langmsg['smilies'][10] = x("Digite uma senha para este sorriso.");
$langmsg['smilies'][11] = x("Codigo já em uso. Por favor, escolha uma senha diferente.");
$langmsg['smilies'][12] = x("Sorriso adicionado.");
$langmsg['smilies'][13] = x("Você tem certeza que quer apagar este sorriso?");
$langmsg['smilies'][14] = x("Sorriso removido.");
$langmsg['smilies'][15] = x("Editar o sorriso abaixo");
$langmsg['smilies'][16] = x("Sorriso");
$langmsg['smilies'][17] = x("Sorriso atualizada.");
$langmsg['smilies'][18] = x("Os sorrisos foram apagados");
$langmsg['smilies'][19] = x("Por favor, selecione que sorriso você gostaria de editar.");
$langmsg['smilies'][20] = x("Sorriso");
$langmsg['smilies'][21] = x("Inserir um novo sorriso.");
$langmsg['smilies'][22] = x("Atualizar o caminho de todos os sorrisos");

#-----SYSTEM MODULE
$langmsg['system'][0] = x("Configuração do Sistema");
$langmsg['system'][1] = x("Editar as configurações do sistema.");
$langmsg['system'][2] = x("Notícias");
$langmsg['system'][3] = x("Nº de notícias por página:");
$langmsg['system'][4] = x("Em que ordem devem ser exibidas as notícias:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("Formato da Data &  Tempo para as notícias:");
$langmsg['system'][8] = x("Veja aqui");
$langmsg['system'][9] = x("Mostrar avatares");
$langmsg['system'][10] = x("Delimitador para separar as categorias ao exibir as notícias:");
$langmsg['system'][11] = x("Comentários");
$langmsg['system'][12] = x("Nº de comentários por página");
$langmsg['system'][13] = x("Em que ordem devem ser exibidas os comentários:");
$langmsg['system'][14] = x("Formato da Data &  Tempo para os comentários:");
$langmsg['system'][15] = x("Extensão máximo dos comentários:");
$langmsg['system'][16] = x("Mostrar comentários numa nova janela");
$langmsg['system'][17] = x("Demora de tempo depois de adicionar comentários (proteção contra spam ):");
$langmsg['system'][18] = x("Segundos");
$langmsg['system'][19] = x("Mensagem de spam:");
$langmsg['system'][20] = x("Mensagem para novo comentário:");
$langmsg['system'][21] = x("Mensagem de aprovação do comentário:");
$langmsg['system'][22] = x("Usar imagem de verificação em formulário de comentários:");
$langmsg['system'][23] = x("Favorável a URLs ");
$langmsg['system'][24] = x("Activar URLs favorável:");
$langmsg['system'][25] = x("Extensão do ficheiro:");
$langmsg['system'][26] = x("Prefixo:");
$langmsg['system'][27] = x("Diretório do nome do ficheiro:");
$langmsg['system'][28] = x("Registo");
$langmsg['system'][29] = x("Permitir que os usuários se registrem:");
$langmsg['system'][30] = x("Nível de acesso para novos usuários");
$langmsg['system'][31] = x("Outros");
$langmsg['system'][32] = x("Fuso horário:");
$langmsg['system'][33] = x("Permitir os tipos de ficheiro para imagens carregadas:");
$langmsg['system'][34] = x("Caminho para imagens carregadas");
$langmsg['system'][35] = x("Nenhuma mensagem de erro de acesso");
$langmsg['system'][36] = x("Configuração atualizada.");
$langmsg['system'][37] = x("O atraso de tempo após a utilização emite a (a proteção do Spam):");
$langmsg['system'][38] = x("Notificações");
$langmsg['system'][39] = x("Começ notificações do email de comentários novos:");
$langmsg['system'][40] = x("Começ notificações do email de registos novos:");
$langmsg['system'][41] = x("Permita que somente os usuários registados comentem:");
$langmsg['system'][42] = x("Emita notificações a este email address:");
$langmsg['system'][43] = x("Tipos de lima permitidos de limas transferidas arquivos pela rede:");
$langmsg['system'][44] = x("Receba notificações por correio electrónico de postos de notícias aprovados:");
$langmsg['system'][45] = x("Chave pública");
$langmsg['system'][46] = x("Chave privada");
$langmsg['system'][47] = x("Script caminho");
$langmsg['system'][48] = x("Permitir que os usuários registrados para apagar seus comentários:");
$langmsg['system'][49] = x("Use a verificação da imagem no formulário de login índice:");
$langmsg['system'][50] = x("Use a verificação de imagem no formulário de inscrição:");
$langmsg['system'][51] = x("Data e hora formato para arquivos:");
$langmsg['system'][52] = x("Show 'Powered by' abaixo da notícia:");

#-----RECOVERY MODULE
$langmsg['recover'][0] = x("Recuperar Senha");
$langmsg['recover'][1] = x("Entre o seu e-mail abaixo para Receber mais Instruções sobre como recuperar uma sua conta.");
$langmsg['recover'][2] = x("Email:");
$langmsg['recover'][3] = x("Você ou alguém em seu nomme solicitou para redefinir sua senha, use o link abaixo para fazê-lo.");
$langmsg['recover'][4] = x("Clique aqui para redefinir sua senha");
$langmsg['recover'][5] = x("Um e-mail foi enviado para");
$langmsg['recover'][6] = x("Não encontramos uma conta com este email, por favos contacte o Admnistrador.");
$langmsg['recover'][7] = x("Nova Senha");
$langmsg['recover'][8] = x("Digite sua nova senha abaixo.");
$langmsg['recover'][9] = x("Não é possível enviar e-mail de recuperação, Por favor contate o seu administrador do sistema.");
$langmsg['recover'][10] = x("Confirma a senha:");
$langmsg['recover'][11] = x("As senhas não são iguais.");
$langmsg['recover'][12] = x("Sua senha foi atualizada.");
$langmsg['recover'][13] = x("com mais instruções sobre como recuperar a sua conta.");

#-----TEMPLATES MODULE
$langmsg['templates'][0] = x("Templates");
$langmsg['templates'][1] = x("Criar um novo modelo.");
$langmsg['templates'][2] = x("Nome:");
$langmsg['templates'][3] = x("Muda como as notícias são exibidas.");
$langmsg['templates'][4] = x("Exibe o título da história.");
$langmsg['templates'][5] = x("Mostra o sumário da notícia.");
$langmsg['templates'][6] = x("Mostra a notícia completa.");
$langmsg['templates'][7] = x("Mostra a data em que a notícia foi publicada.");
$langmsg['templates'][8] = x("Mostra as categorias em que cada notícia foi atribuído.");
$langmsg['templates'][9] = x("Mostra o autor da notícia.");
$langmsg['templates'][10] = x("Mostra o avatar do usuários se eles tiverem um.");
$langmsg['templates'][11] = x("Mostra a identificação exclusiva que cada notícia tem.");
$langmsg['templates'][12] = x("Mostra o endereço IP do autor. (Apenas mostra se você está conectado)");
$langmsg['templates'][13] = x("Mostra o link para ler a notícia completa.");
$langmsg['templates'][14] = x("Vai mostrar o seu endereço de e-mail.");
$langmsg['templates'][15] = x("Irá criar um link para o seu endereço de e-mail.");
$langmsg['templates'][16] = x("irá criar um link para seu perfil.");
$langmsg['templates'][17] = x("Mostra o número de comentários em cada notícias.");
$langmsg['templates'][18] = x("irá criar um link para os comentários.");
$langmsg['templates'][19] = x("Qualquer coisa colocar entre essas tags só irá mostrar se estiver conectado");
$langmsg['templates'][20] = x("Caminho para os sorrisos");
$langmsg['templates'][21] = x("Comentários");
$langmsg['templates'][22] = x("Muda como os comentários são exibidos.");
$langmsg['templates'][23] = x("Exibe o autor do comentário.");
$langmsg['templates'][24] = x("Mostra a mensagem. ");
$langmsg['templates'][25] = x("Mostra o avatar do usuários se eles tiverem um.");
$langmsg['templates'][26] = x("Mostra o endereço IP do autor. (Apenas mostra se você está conectado)");
$langmsg['templates'][27] = x("Mostra a identificação exclusiva de cada comentário tem. ");
$langmsg['templates'][28] = x("Mostra o endereço de email do usuário que comentou.");
$langmsg['templates'][29] = x("irá criar um link para o e-mail usuários.");
$langmsg['templates'][30] = x("Mostra a data em que o comentário foi publicado.");
$langmsg['templates'][31] = x("Qualquer coisa colocar entre essas tags só mostrará polegadas se registrado ");
$langmsg['templates'][32] = x("Formulário de comentários");
$langmsg['templates'][33] = x("É importante que durante a edição disso, manter os campos todos os nomes e as identificações de entrada o mesmo, caso contrário isto não vai funcionar. Notar também, que o atributo do formuláario useajax onsubmit='', sim ou não, determina se o Ajax é usado quando o usuário envia um comentário.");
$langmsg['templates'][34] = x("Exibe o ID das notícias.");
$langmsg['templates'][35] = x("Exibe a ID da categoria da notícias.");
$langmsg['templates'][36] = x("Vai mostrar o seu nome se estiver conectado.");
$langmsg['templates'][37] = x("Vai mostrar seu e-mail se estiver conectado.");
$langmsg['templates'][38] = x("Vai mostrar a mensagem.");
$langmsg['templates'][39] = x("Vai mostrar todos os sorrisos.");
$langmsg['templates'][40] = x("Paginação das notícias");
$langmsg['templates'][44] = x("Paginação dos Comentários");
$langmsg['templates'][45] = x("Mostra o link anterior, se houver algum.");
$langmsg['templates'][46] = x("Mostra o link seguinte, se houver algum.");
$langmsg['templates'][47] = x("Vai mostrar o número de páginas, Ex.: 1 2 3 4.");
$langmsg['templates'][48] = x("Perfis");
$langmsg['templates'][49] = x("Editar como os perfis dos usuários são exibidos.");
$langmsg['templates'][50] = x("Mostra o ID dos usuários.");
$langmsg['templates'][51] = x("Mostra o nome do usuário.");
$langmsg['templates'][52] = x("Mostra a idade do usuário.");
$langmsg['templates'][53] = x("Mostra a localização do usuário.");
$langmsg['templates'][54] = x("Mostra o sexo dos usuários.");
$langmsg['templates'][55] = x("Cria um link para a página principal do usuários.");
$langmsg['templates'][56] = x("Mostra os interesses dos usuários. ");
$langmsg['templates'][57] = x("Mostra o passatempo do usuário.");
$langmsg['templates'][58] = x("Mostra a ocupação usuários.");
$langmsg['templates'][59] = x("Mostra citação favorita dos usuários.");
$langmsg['templates'][60] = x("Mostrar a foto do perfil do usuário.");
$langmsg['templates'][61] = x("Estrutura das Notícias");
$langmsg['templates'][62] = x("Aqui é onde você pode controlar a ordem fisica de como cada elemento das notícias são exibidos, por exemplo, se você quiser que a paginação seja exibida acima da notícia, bem como abaixo dela você pode fazer isso aqui.");
$langmsg['templates'][63] = x("Exibe suas notícias.");
$langmsg['templates'][64] = x("Exibe a paginação das notícias.");
$langmsg['templates'][65] = x("Estrutura dos Comentários");
$langmsg['templates'][66] = x("Aqui é onde você pode controlar a ordem fisica de como cada elemento de notícias é exibida quando existem comentários, por exemplo, se você quiser que a paginação seja exibido acima de seus comentários, bem como abaixo, você pode fazer isso aqui.");
$langmsg['templates'][67] = x("Exibe a única notícias quando houver comentários.");
$langmsg['templates'][68] = x("Exibe seus comentários.");
$langmsg['templates'][69] = x("Exibe a paginação dos comentário.");
$langmsg['templates'][70] = x("Mostra o formulário para comentários.");
$langmsg['templates'][71] = x("Formulário de Registo");
$langmsg['templates'][72] = x("Aqui é onde você controla o formulário que permite aos usuários registarem. É importante manter todos os campos de nomes e as identificações de entrada o mesmo, caso contrário não vai funcionar.");
$langmsg['templates'][73] = x("O ID que usuário entra.");
$langmsg['templates'][74] = x("A senha que usuário entra.");
$langmsg['templates'][75] = x("Mostra a mensagem de erro se um campo foi deixado em branco.");
$langmsg['templates'][76] = x("Por favor, digite um nome.");
$langmsg['templates'][77] = x("Modelo criado.");
$langmsg['templates'][78] = x("Por favor escolha outro nome.");
$langmsg['templates'][79] = x("Editar modelos abaixo para alterar a forma como as notícias e comentários são apresentadas.");
$langmsg['templates'][80] = x("Notícias");
$langmsg['templates'][81] = x("Modelos atualizado.");
$langmsg['templates'][82] = x("Um modelo com esse nome já existe. Escolha outro nome");
$langmsg['templates'][83] = x("Não é possível remover o modelo que está em uso");
$langmsg['templates'][84] = x("Os modelo (s) selecionado (s) foram removidos");
$langmsg['templates'][85] = x("Modelo (s) copiado");
$langmsg['templates'][86] = x("Escolha o nome de um modelo para editar abaixo.");
$langmsg['templates'][87] = x("Modelo selecionado.");
$langmsg['templates'][88] = x("Nome");
$langmsg['templates'][89] = x("Selecionado");
$langmsg['templates'][90] = x("Criar um novo modelo.");
$langmsg['templates'][91] = x("Selecionar");
$langmsg['templates'][92] = x("Mostra o número de visita que cada notícia teve.");
$langmsg['templates'][93] = x("Mostra a imagem das estrelas de classificação.");
$langmsg['templates'][94] = x("Mostra a classificação corrente da notícia.");
$langmsg['templates'][95] = x("Mostra número de vezes que a notícia foi avaliada.");
$langmsg['templates'][96] = x("Mostra o formulário de avaliação das notícias.");
$langmsg['templates'][98] = x("Mostra o formulário para enviar a notícia para alguem.");
$langmsg['templates'][99] = x("Mostra a localização dos usuários.");
$langmsg['templates'][100] = x("Limas transferidas arquivos pela rede");
$langmsg['templates'][101] = x("Controle como suas limas transferidas arquivos pela rede são mostradas.");
$langmsg['templates'][102] = x("Date a lima foi transferido arquivos pela rede.");
$langmsg['templates'][103] = x("Título da lima.");
$langmsg['templates'][104] = x("Nome de arquivo da lima.");
$langmsg['templates'][105] = x("Filesize da lima.");
$langmsg['templates'][106] = x("URL para transferir a lima.");
$langmsg['templates'][107] = x("Username do uploader.");
$langmsg['templates'][108] = x("A quantidade de tempo a lima foi transferida.");
$langmsg['templates'][109] = x("Mostre as limas lig ao borne da notícia.");
$langmsg['templates'][110] = x("Mostre cada lima lig ao borne da notícia.");
$langmsg['templates'][111] = x("Mostra somente 3 páginas de cada vez");
$langmsg['templates'][112] = x("Lig para paginar umas, mostras se não atualmente na página uma.");
$langmsg['templates'][113] = x("Lig à última página, mostras se não atualmente na página a última página.");
$langmsg['templates'][114] = x("Mostra o número de palavras para este borne ");
$langmsg['templates'][115] = x("Mostra o título amigável da história");
$langmsg['templates'][116] = x("Mostra o elemento reCAPTCHA");
$langmsg['templates'][117] = x("Cria um link para apagar o comentário.");
$langmsg['templates'][118] = x("Mostra o formulário de login apenas se o login for necessário.");
$langmsg['templates'][119] = x("Login Form");
$langmsg['templates'][120] = x("Controlar a forma como o formulário de login é exibida.");
$langmsg['templates'][121] = x("Exibe o e-mail digitado pelo usuário.");
$langmsg['templates'][122] = x("Exibe a mensagem de erro de login.");
$langmsg['templates'][123] = x("Mostra o elemento reCAPTCHA.");
$langmsg['templates'][124] = x("Mostra ao usuário o nome de usuário inserido.");
$langmsg['templates'][125] = x("Se logado exibe o nome do usuário.");
$langmsg['templates'][126] = x("Exibe o formulário de busca. Todos os nomes e as identificações devem permanecer os mesmos.");
$langmsg['templates'][127] = x("Exibe o número para cada resultado de pesquisa");
$langmsg['templates'][128] = x("Formatos como os resultados da pesquisa são exibidas. Se repete para cada resultado.");
$langmsg['templates'][129] = x("Alterna entre a saída de um ou dois para cada linha.");
$langmsg['templates'][130] = x("Exibe o número da página atual.");
$langmsg['templates'][131] = x("Exibe o número da página anterior.");
$langmsg['templates'][132] = x("Exibe o número da página seguinte.");
$langmsg['templates'][133] = x("Exibe o título amigável da notícia.");
$langmsg['templates'][134] = x("Formulário de Busca");
$langmsg['templates'][135] = x("Resultados da pesquisa");
$langmsg['templates'][136] = x("Envio de arquivos");

#-----UPLOADED FILES
$langmsg['uploadedfiles'][0] = x("Transferências de arquivo pela rede da lima");
$langmsg['uploadedfiles'][1] = x("Transfira arquivos pela rede uma lima nova");
$langmsg['uploadedfiles'][2] = x("Lima da transferência de arquivo pela rede");
$langmsg['uploadedfiles'][4] = x("Escolha uma lima:");
$langmsg['uploadedfiles'][5] = x("As limas suprimiram.");
$langmsg['uploadedfiles'][6] = x("A lima transferiu arquivos pela rede");
$langmsg['uploadedfiles'][7] = x("Havia um erro que transfere arquivos pela rede a lima, tenta por favor outra vez.");
$langmsg['uploadedfiles'][8] = x("Extensão de lima inválida.");
$langmsg['uploadedfiles'][9] = x("Inválido lima.");
$langmsg['uploadedfiles'][10] = x("Lima removida da categoria.");
$langmsg['uploadedfiles'][11] = x("Limas adicionadas à categoria.");
$langmsg['uploadedfiles'][12] = x("Nome de arquivo");
$langmsg['uploadedfiles'][13] = x("Selecione uma categoria:");
$langmsg['uploadedfiles'][14] = x("Edite uma lima");
$langmsg['uploadedfiles'][15] = x("Título:");
$langmsg['uploadedfiles'][16] = x("Descrição:");
$langmsg['uploadedfiles'][17] = x("Lima da actualização");
$langmsg['uploadedfiles'][18] = x("Lima inválida");
$langmsg['uploadedfiles'][19] = x("Lima actualizado");
$langmsg['uploadedfiles'][20] = x("Miniaturas");
$langmsg['uploadedfiles'][21] = x("Detalhes");
$langmsg['uploadedfiles'][22] = x("Categoria:");
$langmsg['uploadedfiles'][23] = x("Título");
$langmsg['uploadedfiles'][24] = x("Filesize");
$langmsg['uploadedfiles'][25] = x("Autor");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("Adicione à categoria");
$langmsg['uploadedfiles'][28] = x("Remova da categoria");
$langmsg['uploadedfiles'][29] = x("Limas transferidas arquivos pela rede");
$langmsg['uploadedfiles'][30] = x("Uma lima com esse nome já existe.");
$langmsg['uploadedfiles'][31] = x("Restaure transferências:");
$langmsg['uploadedfiles'][32] = x("Todas as categorias");
$langmsg['uploadedfiles'][33] = x("Downloads");
$langmsg['uploadedfiles'][34] = x("Carregado");

#-----ADMIN DATA
$langmsg['admindata'][0] = x("Ajuda");
$langmsg['admindata'][1] = x("Adicionar Notícia");
$langmsg['admindata'][2] = x("Mensagens Privadas");
$langmsg['admindata'][3] = x("Editar Notícia");
$langmsg['admindata'][4] = x("Editar comentários");

#-----SUBMIT FIELDS
$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("Vista previa");
$langmsg['submitfield'][2] = x("Adicionar Notícia");
$langmsg['submitfield'][3] = x("Salvar");
$langmsg['submitfield'][4] = x("Enviar");
$langmsg['submitfield'][5] = x("Criar");
$langmsg['submitfield'][6] = x("Actualizar");
$langmsg['submitfield'][7] = x("Adicionar");
$langmsg['submitfield'][8] = x("Apagar");
$langmsg['submitfield'][9] = x("Recuperar");

#-----SELECT FIELDS
$langmsg['selectfield'][0] = x("- Escolha a opção -");
$langmsg['selectfield'][1] = x("Sim");
$langmsg['selectfield'][2] = x("Não");
$langmsg['selectfield'][3] = x("Apagar");
$langmsg['selectfield'][4] = x("Precisa aprovação");
$langmsg['selectfield'][5] = x("Permitir comentários");
$langmsg['selectfield'][6] = x("Mudança de aprovação");
$langmsg['selectfield'][7] = x("Aprovação");
$langmsg['selectfield'][8] = x("Comentários");
$langmsg['selectfield'][9] = x("Aprovar");
$langmsg['selectfield'][10] = x("Desaprovar");
$langmsg['selectfield'][11] = x("Data");
$langmsg['selectfield'][12] = x("Título");
$langmsg['selectfield'][13] = x("Autor");
$langmsg['selectfield'][14] = x("Categoria");
$langmsg['selectfield'][15] = x("Nº de Comentários");
$langmsg['selectfield'][16] = x("Marcar como lido");
$langmsg['selectfield'][17] = x("Marcar como não lidas");
$langmsg['selectfield'][18] = x("Repor contagem bloqueada");
$langmsg['selectfield'][19] = x("Criar cópia");
$langmsg['selectfield'][20] = x("Redefinir contagem vista");
$langmsg['selectfield'][21] = x("Avaliações Reset");

#-----Javascript
$langmsg['js'][0] = x("É você certo você quer remover esta imagem da categoria?");
$langmsg['js'][1] = x("É você certo você quer suprimir das imagens selecionadas?");
$langmsg['js'][2] = x("É você certo você quer suprimir das mensagens selecionadas?");
$langmsg['js'][3] = x("É você certo você quer suprimir dos moldes selecionados?");
$langmsg['js'][4] = x("É você certo você quer suprimir destes IP address?");
$langmsg['js'][5] = x("É você certo você quer restaurar a contagem obstruída para estes IP address?");
$langmsg['js'][6] = x("É você certo você quer suprimir destes níveis de acesso?");
$langmsg['js'][7] = x("É você certo você quer suprimir destas categorias?");
$langmsg['js'][8] = x("É você certo você quer suprimir destas categorias E dos bornes dentro deles?");
$langmsg['js'][9] = x("É você certo você quer suprimir destas categorias?");
$langmsg['js'][10] = x("É você certo você quer suprimir destes clientes?");
$langmsg['js'][11] = x("É você certo você quer suprimir destes clientes E bornes?");
$langmsg['js'][12] = x("É você certo você quer suprimir destes bornes?");
$langmsg['js'][13] = x("Incorpore algum texto");
$langmsg['js'][14] = x("Texto");
$langmsg['js'][15] = x("Incorpore por favor uma cor. Exemplo, vermelho, amarelo, azul (ou mesmo valores hexadecimais)");
$langmsg['js'][16] = x("azul");
$langmsg['js'][17] = x("Incorpore o URL da ligação");
$langmsg['js'][18] = x("Incorpore o texto a ser indicado");
$langmsg['js'][19] = x("Ligação");
$langmsg['js'][20] = x("Incorpore um tamanho de pia batismal");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Texto a indicar?");
$langmsg['js'][23] = x("Email address");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Envie-me!");
$langmsg['js'][26] = x("Texto das citações?");
$langmsg['js'][27] = x("Citações");
$langmsg['js'][28] = x("É você certo você quer suprimir de comentários selecionados?");
$langmsg['js'][29] = x("É você certo você quer suprimir das categorias selecionadas?");
$langmsg['js'][30] = x("Começ smilies… Espere por favor.");
$langmsg['js'][31] = x("É você certo você quer suprimir das limas selecionadas?");
$langmsg['js'][32] = x("É você certo você quer suprimir dos smilies selecionados?");


$langmsg['news'][0] = x("Por favor, digite um nome.");
$langmsg['news'][1] = x("Digite uma mensagem.");
$langmsg['news'][2] = x("Inválido chave de segurança");
$langmsg['news'][3] = x("Escolha outro nome.");
$langmsg['news'][4] = x("Inválido chave de segurança");
$langmsg['news'][5] = x("Resultados encontrados:");
$langmsg['news'][6] = x("Novas inscrições estão desativados.");
$langmsg['news'][7] = x("Sua conta foi criada, agora você pode <a href=\"{adminpath}\">login aqui.</a>");
$langmsg['news'][8] = x("Por favor, digite um nome.");
$langmsg['news'][9] = x("Digite uma mensagem.");
$langmsg['news'][10] = x("Inválido chave de segurança");
$langmsg['news'][11] = x("Escolha outro nome.");
$langmsg['news'][12] = x("Inválido chave de segurança");
$langmsg['news'][13] = x("Obrigado pela sua classificação.");
$langmsg['news'][14] = x("Você já avaliou este artigo.");
$langmsg['news'][15] = x("Nome");
$langmsg['news'][16] = x("Email:");
$langmsg['news'][17] = x("Amigos E-mail:");
$langmsg['news'][18] = x("Mensagem:");
$langmsg['news'][19] = x("Hey confira este artigo que encontrei!");
$langmsg['news'][20] = x("Enviar a um amigo");
$langmsg['news'][21] = x("E-mail enviado.");
$langmsg['news'][22] = x("Digite seu nome");
$langmsg['news'][23] = x("Por favor, indique o endereço de email");
$langmsg['news'][24] = x("Digite uma mensagem");
$langmsg['news'][25] = x("Por favor, indique seus amigos endereço de email");
$langmsg['news'][27] = x("Por favor, indique um endereço de email válido");
$langmsg['news'][28] = x("Por favor, indique seus amigos e-mail válido");
$langmsg['news'][29] = x("Por favor, indique um nome de usuário.");
$langmsg['news'][30] = x("Esse nome já foi tomada, por favor escolha outro.");
$langmsg['news'][31] = x("O endereço de email já está em uso, escolha outro.");
$langmsg['news'][32] = x("Por favor, indique um endereço de email.");
$langmsg['news'][33] = x("Digite um endereço de e-mail válido.");
$langmsg['news'][34] = x("Por favor, digite uma senha.");
$langmsg['news'][35] = x("Por favor, confirme sua senha.");
$langmsg['news'][36] = x("As senhas que você digitou não são iguais.");
$langmsg['news'][37] = x("Chave de segurança inválida.");
$langmsg['news'][38] = x("Por favor, aguarde");
$langmsg['news'][39] = x("Houve um problema ao enviar sua mensagem, entre em contato com o administrador.");
$langmsg['news'][40] = x("Você deve estar conectado para postar um comentário.");
$langmsg['news'][41] = x("New comment on {domain}");
$langmsg['news'][42] = x("Nome: {name} \n Email / URL: {email} \n IP: {ip} \n Message: {message");
$langmsg['news'][43] = x("Novo registo em {domain}");
$langmsg['news'][44] = x("Nome: {name} \n Email: {email} \n IP: {ip}");
$langmsg['news'][45] = x("segundos antes de enviar outra mensagem.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Nome");
$langmsg['news'][48] = x("Email / URL");
$langmsg['news'][49] = x("Mensagem");
$langmsg['news'][50] = x("Digite o título de um artigo");
$langmsg['news'][51] = x("Resumo");
$langmsg['news'][52] = x("Não há categorias");
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
$langmsg['months'][2] = x("Março");
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
$langmsg['search'][1] = x("Notícias em arquivo");
$langmsg['search'][2] = x("Novos primeiro");
$langmsg['search'][3] = x("Mais antigo primeiro");
$langmsg['search'][4] = x("Pesquisa");
$langmsg['search'][5] = x("Período");


$langmsg['install'][0] = x("Database Connection Info");
$langmsg['install'][1] = x("Enter your MySQL server info abaixo.");
$langmsg['install'][2] = x("Servidor:");
$langmsg['install'][3] = x("(normalmente localhost)");
$langmsg['install'][4] = x("Nome de usuário:");
$langmsg['install'][5] = x("Senha:");
$langmsg['install'][6] = x("Base de dados:");
$langmsg['install'][7] = x("Teste de conexão");
$langmsg['install'][8] = x("Conectando ao servidor:");
$langmsg['install'][9] = x("Selecionar banco de dados:");
$langmsg['install'][10] = x("Impossível escrever para db.php, por favor, este arquivo para CHMOD 777");
$langmsg['install'][11] = x("Informação da conta");
$langmsg['install'][12] = x("Digite os dados da sua conta abaixo. Isso será usado para login.");
$langmsg['install'][13] = x("Email:");
$langmsg['install'][14] = x("Confirmar Senha:");
$langmsg['install'][15] = x("Continue");
$langmsg['install'][16] = x("Por favor, indique um nome de usuário");
$langmsg['install'][17] = x("Por favor, indique um endereço de email");
$langmsg['install'][18] = x("Digite sua senha");
$langmsg['install'][19] = x("Pressione Install para finalizar a instalação");
$langmsg['install'][20] = x("As senhas não coincidem");
$langmsg['install'][21] = x("Instalar");
$langmsg['install'][22] = x("Finalizando a instalação");
$langmsg['install'][23] = x("SUCESSO!");
$langmsg['install'][24] = x("N-13 News foi instalado.");
$langmsg['install'][25] = x("Entrar para a área administrativa.");
$langmsg['install'][26] = x("Porto:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Extensão:");
$langmsg['install'][29] = x("(deixar em branco por padrão)");
$langmsg['install'][30] = x("Instalando ... Por favor, aguarde.");
$langmsg['install'][31] = x("A função mysqli_connect não foi encontrado.");
$langmsg['install'][32] = x("A função PDO_MYSQL não foi encontrado.");
?>