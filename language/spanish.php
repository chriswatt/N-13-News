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
#   N-13 News Archivo de lenguaje                       #
#   LANGUAGE    Spanish                                 #
#   VERSION     3.7                                     #
#   AUTHOR      Sergio Avila	                        #
#                                                       #
#   Any words you see wrapped in { } braces,            #
#   for example {totalnews} need to be left like that.  #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

#-----MENUS
$langmsg['menu'][0] = x("A�adir Noticias");
$langmsg['menu'][1] = x("Edit News");
$langmsg['menu'][2] = x("Archivos");
$langmsg['menu'][3] = x("Nuevo mensaje");
$langmsg['menu'][4] = x("Bandeja de entrada");
$langmsg['menu'][5] = x("Bandeja de salida");
$langmsg['menu'][6] = x("Cuentas");
$langmsg['menu'][7] = x("Niveles de Acceso");
$langmsg['menu'][8] = x("Banned IPs");
$langmsg['menu'][9] = x("Categor�as");
$langmsg['menu'][10] = x("Cargas de la imagen");
$langmsg['menu'][11] = x("Personal");
$langmsg['menu'][12] = x("Perfil");
$langmsg['menu'][13] = x("Feeds RSS");
$langmsg['menu'][14] = x("Smilies");
$langmsg['menu'][15] = x("Sistema");
$langmsg['menu'][16] = x("Plantillas");
$langmsg['menu'][17] = x("Word Filtros");
$langmsg['menu'][18] = x("Inicio");
$langmsg['menu'][19] = x("Noticias");
$langmsg['menu'][20] = x("Mensajes");
$langmsg['menu'][21] = x("Opciones");
$langmsg['menu'][22] = x("Ayuda");
$langmsg['menu'][23] = x("Cerrar sesi�n");
$langmsg['menu'][24] = x("Carga de Archivos");

#-----HOME MODULE
$langmsg['home'][0] = x("Estad�sticas de noticias mundiales de abajo.");
$langmsg['home'][1] = x("Bienvenido");
$langmsg['home'][2] = x("La configuraci�n de PHP 'magic_quotes_gpc' se ha detectado como habilitado. Se recomienda deshabilitar esta opci�n.");
$langmsg['home'][3] = x("La configuraci�n de PHP 'register_globals' ha sido detectado como habilitado. Se recomienda deshabilitar esta, ya que puede causar problemas de seguridad y los errores que se produzca.");
$langmsg['home'][4] = x("Install.php ha sido detectado. Por favor, borre este archivo.");
$langmsg['home'][5] = x("Install.php no puede ser eliminado, por favor elimine este archivo manualmente");
$langmsg['home'][6] = x("Total de Noticias:");
$langmsg['home'][7] = x("Total de comentarios:");
$langmsg['home'][8] = x("Total de usuarios:");
$langmsg['home'][9] = x("Smilies Total:");
$langmsg['home'][10] = x("Filtros Total:");
$langmsg['home'][11] = x("Total de categor�as:");
$langmsg['home'][12] = x("Total Plantillas:");
$langmsg['home'][13] = x("Total de niveles de acceso:");
$langmsg['home'][14] = x("Conexi�n a la base de datos:");
$langmsg['home'][15] = x("Optimizaci�n de todas las tablas:");
$langmsg['home'][16] = x("Versi�n actual:");
$langmsg['home'][17] = x("�ltima versi�n:");
$langmsg['home'][18] = x("Ver los registros de acceso");
$langmsg['home'][19] = x("Query time:");
$langmsg['home'][20] = x("Los mensajes no le�dos");
$langmsg['home'][21] = x("Trate de eliminar este archivo de forma autom�tica?");
$langmsg['home'][22] = x("segundo");
$langmsg['home'][23] = x("Total de Im�genes");
$langmsg['home'][24] = x("Total Archivos");
$langmsg['home'][25] = x("Total de RSS Feeds");

#-----ADDNEWS MODULE
$langmsg['addnews'][0] = x("Noticias Preview");
$langmsg['addnews'][1] = x("Por favor, introduzca un t�tulo");
$langmsg['addnews'][2] = x("Por favor, seleccione si este puestos permitir� comentarios o no");
$langmsg['addnews'][3] = x("A�adir Noticias");
$langmsg['addnews'][4] = x("Por favor seleccione una categor�a");

#-----EDITNEWS MODULE
$langmsg['editnews'][0] = x("Edit News");
$langmsg['editnews'][1] = x("Listado");
$langmsg['editnews'][2] = x("Opciones");
$langmsg['editnews'][3] = x("Cantidad a mostrar");
$langmsg['editnews'][4] = x("Ordenar por");
$langmsg['editnews'][5] = x("Orden");
$langmsg['editnews'][7] = x("T�tulo");
$langmsg['editnews'][8] = x("Autor");
$langmsg['editnews'][9] = x("Categor�as");
$langmsg['editnews'][10] = x("Fecha");
$langmsg['editnews'][11] = x("Aprobaci�n");
$langmsg['editnews'][12] = x("Comentarios");
$langmsg['editnews'][13] = x("[Mostrar]");
$langmsg['editnews'][14] = x("Aprobado");
$langmsg['editnews'][15] = x("No aprobado");
$langmsg['editnews'][16] = x("Noticias a�adido.");
$langmsg['editnews'][17] = x("Selecci�n de los puestos eliminados.");
$langmsg['editnews'][18] = x("Puestos seleccionados actualizada.");
$langmsg['editnews'][19] = x("Noticias actualizadas.");
$langmsg['editnews'][20] = x("Personas de movilidad reducida");
$langmsg['editnews'][21] = x("noticias.");
$langmsg['editnews'][22] = x("en total.");
$langmsg['editnews'][23] = x("Perd� Ver cuenta a 0 para el art�culo seleccionado (s)");
$langmsg['editnews'][24] = x("Votaciones para restablecer el art�culo seleccionado (s)");
$langmsg['editnews'][25] = x("Filtrar por categor�a");

#-----NEWSFORM
$langmsg['newsform'][0] = x("A�ade tu publicar noticias a continuaci�n.");
$langmsg['newsform'][1] = x("T�tulo:");
$langmsg['newsform'][2] = x("Categor�as:");
$langmsg['newsform'][3] = x("Cuento:");
$langmsg['newsform'][4] = x("Historia:");
$langmsg['newsform'][5] = x("HTML personas de movilidad reducida");
$langmsg['newsform'][6] = x("HTML activado");
$langmsg['newsform'][7] = x("Comentarios:");
$langmsg['newsform'][8] = x("Cambiar fecha");
$langmsg['newsform'][9] = x("Activar el relato corto");
$langmsg['newsform'][16] = x("Fecha:");
$langmsg['newsform'][17] = x("Archivo Toggle");
$langmsg['newsform'][18] = x("Nunca archivo");
$langmsg['newsform'][19] = x("Carga de Archivos");
$langmsg['newsform'][20] = x("Descargas");
$langmsg['newsform'][21] = x("Uploaded");
$langmsg['newsform'][22] = x("Art�culo");
$langmsg['newsform'][23] = x("Ingrese una URL de la imagen");
$langmsg['newsform'][24] = x("Insertar");
$langmsg['newsform'][25] = x("Seleccione una imagen cargada");

#-----COMMENTS MODULE
$langmsg['editcomments'][0] = x("Modificar los comentarios");
$langmsg['editcomments'][1] = x("Editar el comentario a continuaci�n.");
$langmsg['editcomments'][2] = x("Autor:");
$langmsg['editcomments'][3] = x("Email:");
$langmsg['editcomments'][4] = x("Mensaje:");
$langmsg['editcomments'][5] = x("Comentario actualizado.");
$langmsg['editcomments'][6] = x("los comentarios eliminados.");
$langmsg['editcomments'][7] = x("comentarios actualizados.");
$langmsg['editcomments'][8] = x("observaciones en total.");
$langmsg['editcomments'][9] = x("Mensaje");
$langmsg['editcomments'][10] = x("Fecha");
$langmsg['editcomments'][11] = x("Aprobaci�n");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Aprobado");
$langmsg['editcomments'][14] = x("No aprobado");
$langmsg['editcomments'][15] = x("Ubicaci�n:");

#-----PRIVATE MESSAGES MODUKE
$langmsg['privmsgs'][0] = x("Mensajes Privados");
$langmsg['privmsgs'][1] = x("Bandeja de entrada");
$langmsg['privmsgs'][2] = x("Bandeja de salida");
$langmsg['privmsgs'][3] = x("Nuevo mensaje");
$langmsg['privmsgs'][4] = x("Ha");
$langmsg['privmsgs'][5] = x("T�tulo");
$langmsg['privmsgs'][6] = x("Desde");
$langmsg['privmsgs'][7] = x("Enviado");
$langmsg['privmsgs'][8] = x("Para");
$langmsg['privmsgs'][9] = x("Responder a este mensaje");
$langmsg['privmsgs'][10] = x("Nuevo mensaje privado.");
$langmsg['privmsgs'][11] = x("Enviar a:");
$langmsg['privmsgs'][12] = x("T�tulo:");
$langmsg['privmsgs'][13] = x("Mensaje:");
$langmsg['privmsgs'][14] = x("Ejemplo 'user1, user2, user3'");
$langmsg['privmsgs'][15] = x("Vista previa del mensaje.");
$langmsg['privmsgs'][16] = x("Mensaje enviado a los siguientes usuarios.");
$langmsg['privmsgs'][17] = x("Por favor, introduzca un usuario para enviar este mensaje.");
$langmsg['privmsgs'][18] = x("Por favor, introduzca un t�tulo para este mensaje.");
$langmsg['privmsgs'][19] = x("Por favor, introduzca un mensaje.");
$langmsg['privmsgs'][20] = x("Mensajes eliminados.");
$langmsg['privmsgs'][21] = x("mensajes no le�dos.");
$langmsg['privmsgs'][22] = x("Mensajes en total.");

#-----OPTIONS MODULE
$langmsg['options'][0] = x("Opciones");

#-----BANNED IPS MODULE
$langmsg['bannedips'][0] = x("Banned IPs");
$langmsg['bannedips'][1] = x("IPs Banned.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Cantidad de veces bloqueado");
$langmsg['bannedips'][4] = x("A�adir una nueva direcci�n IP.");
$langmsg['bannedips'][5] = x("Mensaje prohibidos. (HTML habilitado)");
$langmsg['bannedips'][6] = x("Direcci�n IP:");
$langmsg['bannedips'][7] = x("Esa direcci�n IP ya est� prohibido.");
$langmsg['bannedips'][8] = x("La direcci�n IP prohibidas.");
$langmsg['bannedips'][9] = x("Las direcciones IP eliminado.");
$langmsg['bannedips'][10] = x("Las direcciones IP se han restablecido.");
$langmsg['bannedips'][11] = x("Banned mensaje actualizado.");

#-----CATEGORIES MODULE
$langmsg['cats'][0] = x("Categor�as");
$langmsg['cats'][1] = x("Categor�as.");
$langmsg['cats'][2] = x("Nombre");
$langmsg['cats'][3] = x("Art�culos");
$langmsg['cats'][4] = x("Crear una nueva categor�a.");
$langmsg['cats'][5] = x("Nombre:");
$langmsg['cats'][6] = x("Las siguientes categor�as han sido suprimidas:");
$langmsg['cats'][7] = x("Por favor, elija otro nombre.");
$langmsg['cats'][8] = x("Categor�a creada.");
$langmsg['cats'][9] = x("Categor�a actualizada.");
$langmsg['cats'][10] = x("Modificar la categor�a de abajo.");
$langmsg['cats'][11] = x("Im�genes");
$langmsg['cats'][12] = x("Archivos");
$langmsg['cats'][13] = x("Una categor�a con ese nombre ya existe, elija otro.");

#-----IMAGE UPLOADS MODULE
$langmsg['img'][0] = x("Cargas de la imagen");
$langmsg['img'][1] = x("Cargar una nueva imagen");
$langmsg['img'][2] = x("Subir archivo");
$langmsg['img'][3] = x("Im�genes en total");
$langmsg['img'][4] = x("Elija una imagen:");
$langmsg['img'][5] = x("la imagen (s) deleted.");
$langmsg['img'][6] = x("Imagen cargada");
$langmsg['img'][7] = x("Hubo un error al subir el archivo, por favor, int�ntelo de nuevo.");
$langmsg['img'][8] = x("Extensi�n de archivo no v�lida.");
$langmsg['img'][9] = x("Imagen no v�lida.");
$langmsg['img'][10] = x("Imagen eliminado de la categor�a.");
$langmsg['img'][11] = x("Imagen (s) a�adido a la categor�a.");
$langmsg['img'][12] = x("Nombre del archivo:");
$langmsg['img'][13] = x("Seleccione una categor�a:");
$langmsg['img'][14] = x("Modificar una imagen");
$langmsg['img'][15] = x("T�tulo:");
$langmsg['img'][16] = x("Descripci�n:");
$langmsg['img'][17] = x("Actualizaci�n de la imagen");
$langmsg['img'][18] = x("Imagen no v�lida");
$langmsg['img'][19] = x("Imagen actualizada");
$langmsg['img'][20] = x("Miniaturas");
$langmsg['img'][21] = x("Detalles");
$langmsg['img'][22] = x("Categor�a:");
$langmsg['img'][23] = x("Nombre de archivo");
$langmsg['img'][24] = x("Tama�o del archivo");
$langmsg['img'][25] = x("Uploader");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("A�adir a la categor�a");
$langmsg['img'][28] = x("Eliminar de la categor�a de");
$langmsg['img'][29] = x("Las im�genes subidas");
$langmsg['img'][30] = x("Un archivo con ese nombre ya existe.");
$langmsg['img'][31] = x("Todas las categor�as");
$langmsg['img'][32] = x("No se puede escribir en el directorio de archivos subidos. CHMOD este directorio a 777");

#-----PERSONAL MODULE
$langmsg['personal'][0] = x("Opciones personales");
$langmsg['personal'][1] = x("Editar la informaci�n de su cuenta a continuaci�n.");
$langmsg['personal'][2] = x("Configuraciones personales para el");
$langmsg['personal'][3] = x("Url Avatar:");
$langmsg['personal'][4] = x("Correo electr�nico:");
$langmsg['personal'][5] = x("Alertas de mensajes:");
$langmsg['personal'][6] = x("Obtener alert� de mensajes no le�dos en la sesi�n inicial?");
$langmsg['personal'][7] = x("Nueva Contrase�a:");
$langmsg['personal'][8] = x("(dejar en blanco para mantener en curso)");
$langmsg['personal'][9] = x("Confirmar contrase�a:");
$langmsg['personal'][10] = x("Una direcci�n de correo electr�nico debe ser introducido.");
$langmsg['personal'][11] = x("Configuraci�n actualizada.");
$langmsg['personal'][12] = x("Las contrase�as no coinciden.");
$langmsg['personal'][13] = x("Activar el editor WYSIWYG?");

#-----LOGIN MODULE
$langmsg['login'][0] = x("Please Login");
$langmsg['login'][1] = x("Nombre:");
$langmsg['login'][2] = x("Contrase�a:");
$langmsg['login'][3] = x("�Olvidaste tu contrase�a?");
$langmsg['login'][4] = x("Recordarme");
$langmsg['login'][5] = x("Clave de seguridad:");
$langmsg['login'][6] = x("Inicio de sesi�n");
$langmsg['login'][7] = x("La clave de seguridad no v�lido");
$langmsg['login'][8] = x("Nombre no v�lido o contrase�a");
$langmsg['login'][9] = x("Escriba este c�digo de abajo");

#-----PROFILE MODULE
$langmsg['profile'][0] = x("Editar perfil");
$langmsg['profile'][1] = x("Editar su perfil a continuaci�n.");
$langmsg['profile'][2] = x("Nombre:");
$langmsg['profile'][3] = x("Edad:");
$langmsg['profile'][4] = x("Ubicaci�n:");
$langmsg['profile'][5] = x("Sexo:");
$langmsg['profile'][6] = x("Foto de perfil:");
$langmsg['profile'][7] = x("P�gina de inicio:");
$langmsg['profile'][8] = x("Intereses:");
$langmsg['profile'][9] = x("Aficiones:");
$langmsg['profile'][10] = x("Ocupaci�n:");
$langmsg['profile'][11] = x("Cita favorita:");
$langmsg['profile'][12] = x("Macho");
$langmsg['profile'][13] = x("Hembra");
$langmsg['profile'][14] = x("Perfil actualizado.");
$langmsg['profile'][15] = x("Ninguno");

#-----ACCOUNTS MODULE
$langmsg['accounts'][0] = x("Cuentas");
$langmsg['accounts'][1] = x("Cuentas.");
$langmsg['accounts'][2] = x("Nombre de usuario");
$langmsg['accounts'][3] = x("Nivel de acceso");
$langmsg['accounts'][4] = x("N�mero de puestos de");
$langmsg['accounts'][5] = x("N�mero de comentarios");
$langmsg['accounts'][6] = x("Crear una cuenta nueva.");
$langmsg['accounts'][7] = x("Nombre de cuenta:");
$langmsg['accounts'][8] = x("Email:");
$langmsg['accounts'][9] = x("Nueva Contrase�a:");
$langmsg['accounts'][10] = x("Confirmar Contrase�a:");
$langmsg['accounts'][11] = x("Nivel de acceso:");
$langmsg['accounts'][12] = x("Nueva cuenta.");
$langmsg['accounts'][13] = x("Editar la cuenta a continuaci�n.");
$langmsg['accounts'][14] = x("Una direcci�n de correo electr�nico debe ser introducido.");
$langmsg['accounts'][15] = x("Cuenta actualizado.");
$langmsg['accounts'][16] = x("Las contrase�as no coinciden.");
$langmsg['accounts'][17] = x("Un nombre de cuenta debe ser introducido.");
$langmsg['accounts'][18] = x("Nombre de la cuenta ya existe. Por favor, elija otro.");
$langmsg['accounts'][19] = x("Una contrase�a debe ser ingresado.");
$langmsg['accounts'][20] = x("Cuenta creada.");
$langmsg['accounts'][21] = x("Las siguientes cuentas han sido suprimidas:");
$langmsg['accounts'][22] = x("No se puede eliminar su propia cuenta.");
$langmsg['accounts'][23] = x("(Deja en blanco para mantener actualizada)");
$langmsg['accounts'][24] = x("Una cuenta de que ya est� utilizando la direcci�n de correo electr�nico, por favor, elija otra.");
$langmsg['accounts'][25] = x("Por favor, introduzca un nombre de cuenta");

#----ACCESS MODULE
$langmsg['access'][0] = x("Niveles de Acceso");
$langmsg['access'][1] = x("Crear un nuevo nivel de acceso.");
$langmsg['access'][2] = x("Nombre:");
$langmsg['access'][3] = x("�Qu� secciones puede acceder a este nivel?");
$langmsg['access'][4] = x("Cuentas:");
$langmsg['access'][5] = x("Niveles de acceso:");
$langmsg['access'][6] = x("IPs prohibidas:");
$langmsg['access'][7] = x("Categor�as:");
$langmsg['access'][8] = x("Comentarios:");
$langmsg['access'][9] = x("Ayuda:");
$langmsg['access'][10] = x("Cargas de la imagen:");
$langmsg['access'][11] = x("Noticias:");
$langmsg['access'][12] = x("Opciones Persional:");
$langmsg['access'][13] = x("Mensajes Privados:");
$langmsg['access'][14] = x("Perfil:");
$langmsg['access'][15] = x("Feeds RSS:");
$langmsg['access'][16] = x("Smilies:");
$langmsg['access'][17] = x("Configuraci�n del sistema:");
$langmsg['access'][18] = x("Plantillas:");
$langmsg['access'][19] = x("Filtros de palabras:");
$langmsg['access'][20] = x("�Qu� categor�as se puede acceder a este puesto de categor�a en?");
$langmsg['access'][21] = x("Todos:");
$langmsg['access'][22] = x("Que los puestos de este nivel pueden editar?");
$langmsg['access'][23] = x("Admin (Todos):");
$langmsg['access'][24] = x("Mod (propios + miembros):");
$langmsg['access'][25] = x("Miembros (propio):");
$langmsg['access'][26] = x("Son las publicaciones de este nivel de acceso autom�ticamente aprobado?");
$langmsg['access'][27] = x("�Puede este nivel de acceso de aprobar entradas?");
$langmsg['access'][28] = x("�Puede este nivel de acceso usar HTML?");
$langmsg['access'][29] = x("Permitir anuncio sin seleccionar una categor�a?");
$langmsg['access'][30] = x("Los niveles de acceso suprimido:");
$langmsg['access'][31] = x("Los siguientes niveles de acceso no se han eliminado porque no tienen 1 o m�s cuentas que se les asigna:");
$langmsg['access'][32] = x("Modificar el nivel de acceso a continuaci�n.");
$langmsg['access'][33] = x("Por favor, introduzca un nombre para este nivel de acceso.");
$langmsg['access'][34] = x("Nivel de acceso actualizada.");
$langmsg['access'][35] = x("Un nivel de acceso con ese nombre ya existe, elija otro.");
$langmsg['access'][36] = x("Por favor, seleccione el cual los puestos de este nivel se puede editar.");
$langmsg['access'][37] = x("Por favor, seleccione si los puestos de este nivel de acceso de obtener Approved Auto");
$langmsg['access'][38] = x("Por favor, seleccione si este nivel de acceso pueden aprobar entradas");
$langmsg['access'][39] = x("Por favor, seleccione si este nivel de acceso puede usar HTML");
$langmsg['access'][40] = x("Por favor, seleccione si este nivel de acceso de enviar sin seleccionar una categor�a de");
$langmsg['access'][41] = x("Nivel de acceso creado.");
$langmsg['access'][42] = x("Los niveles de acceso.");
$langmsg['access'][43] = x("Nombre");
$langmsg['access'][44] = x("Acceso");
$langmsg['access'][45] = x("Cuentas");
$langmsg['access'][46] = x("Miembros");
$langmsg['access'][47] = x("Moderador");
$langmsg['access'][48] = x("Administrador");
$langmsg['access'][49] = x("Carga de Archivos");
$langmsg['access'][50] = x("�Puede este nivel de acceso de usuario ver las direcciones IP?");
$langmsg['access'][51] = x("�Qu� archivos y las im�genes se pueden editar este nivel de acceso?");
$langmsg['access'][52] = x("Propio");
$langmsg['access'][53] = x("Todo");

#-----ACCESSLOGS MODULE
$langmsg['accesslogs'][0] = x("Registros de acceso");
$langmsg['accesslogs'][1] = x("Nombre de usuario");
$langmsg['accesslogs'][2] = x("Intento");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Fecha");
$langmsg['accesslogs'][5] = x("Acceso a los registros de");
$langmsg['accesslogs'][6] = x("�xito");
$langmsg['accesslogs'][7] = x("Usuccessful");

#-----FILTERS MODULE
$langmsg['filters'][0] = x("Word Filtros");
$langmsg['filters'][1] = x("Filtro agreg�.");
$langmsg['filters'][2] = x("Filtro eliminado.");
$langmsg['filters'][3] = x("Todas las palabras a continuaci�n se filtra de todos los comentarios.");
$langmsg['filters'][4] = x("Word filtrada");
$langmsg['filters'][5] = x("Reemplazar");
$langmsg['filters'][6] = x("Borrar");

#-----RSS MODULE
$langmsg['rss'][0] = x("Feeds RSS");
$langmsg['rss'][1] = x("Edita tus fuentes RSS configuraci�n debajo de la");
$langmsg['rss'][2] = x("La ubicaci�n de noticias es donde se estar�n desplegando sus noticias, por ejemplo, http://yourdomain.com/ o http://yourdomain.com/index");
$langmsg['rss'][3] = x("Nombre de la suscripci�n:");
$langmsg['rss'][4] = x("Localizaci�n Noticias:");
$langmsg['rss'][5] = x("T�tulo de tu feed RSS:");
$langmsg['rss'][6] = x("Descripci�n de tu feed RSS:");
$langmsg['rss'][7] = x("De codificaci�n de caracteres:");
$langmsg['rss'][8] = x("Idioma:");
$langmsg['rss'][9] = x("Cantidad de puestos a mostrar:");
$langmsg['rss'][10] = x("0 = todos");
$langmsg['rss'][11] = x("Categor�as a mostrar:");
$langmsg['rss'][12] = x("Mostrar mensajes que no han sido asignados a una categor�a?");
$langmsg['rss'][13] = x("C�digo RSS:");
$langmsg['rss'][14] = x("Editar c�mo se muestra su feed");
$langmsg['rss'][15] = x("Muestra el t�tulo de la historia.");
$langmsg['rss'][16] = x("Muestra la historia corta de la noticia.");
$langmsg['rss'][17] = x("Muestra la historia de la noticia.");
$langmsg['rss'][18] = x("Muestra las categor�as de cada puesto ha sido asignado.");
$langmsg['rss'][19] = x("Muestra la direcci�n URL para un puesto espec�fico.");
$langmsg['rss'][20] = x("Muestra la fecha en que la historia fue publicada en.");
$langmsg['rss'][21] = x("Muestra la configuraci�n de zona horaria.");
$langmsg['rss'][22] = x("Muestra la fecha y hora de cada puesto.");
$langmsg['rss'][23] = x("Muestra el autor de la historia.");
$langmsg['rss'][24] = x("Muestra los usuarios avatar, si lo tiene.");
$langmsg['rss'][25] = x("Muestra el identificador �nico de cada historia tiene.");
$langmsg['rss'][26] = x("Muestra la cantidad de comentarios para cada puesto de prensa.");
$langmsg['rss'][27] = x("Por favor, introduzca un feedname");
$langmsg['rss'][28] = x("Por favor, introduzca una ubicaci�n de noticias");
$langmsg['rss'][29] = x("Por favor, introduzca un t�tulo");
$langmsg['rss'][30] = x("Por favor, introduzca una descripci�n");
$langmsg['rss'][31] = x("Por favor, introduzca la codificaci�n de caracteres");
$langmsg['rss'][32] = x("Por favor, introduzca un idioma");
$langmsg['rss'][33] = x("Por favor, introduzca una cantidad para mostrar");
$langmsg['rss'][34] = x("RSS creado");
$langmsg['rss'][35] = x("Una fuente con ese nombre ya existe, elige otro");
$langmsg['rss'][36] = x("RSS actualizado");
$langmsg['rss'][37] = x("Feeds RSS");
$langmsg['rss'][38] = x("RSS feed (s) deleted.");
$langmsg['rss'][39] = x("Nombre");
$langmsg['rss'][40] = x("Categor�as");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Crear un nuevo feed de RSS.");
$langmsg['rss'][43] = x("Muestra el t�tulo f�cil de la historia");

#-----SMILIES MODULE
$langmsg['smilies'][0] = x("Smilies");
$langmsg['smilies'][1] = x("Esto es �til si desea actualizar la ubicaci�n de todos los emoticones a la vez.");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("Reemplazar:");
$langmsg['smilies'][4] = x("Reemplazar con:");
$langmsg['smilies'][5] = x("Todas las rutas de actualizaci�n.");
$langmsg['smilies'][6] = x("Crear un nuevo smilie");
$langmsg['smilies'][7] = x("Ruta de acceso:");
$langmsg['smilies'][8] = x("C�digo de clave:");
$langmsg['smilies'][9] = x("Por favor, escriba la ruta de la carita.");
$langmsg['smilies'][10] = x("Por favor, introduzca un c�digo clave para este sonriente.");
$langmsg['smilies'][11] = x("C�digo clave que ya est�n en uso. Por favor, elija un c�digo de clave diferente.");
$langmsg['smilies'][12] = x("Smiley agreg�.");
$langmsg['smilies'][13] = x("�Est�s seguro de que deseas eliminar este emoticono?");
$langmsg['smilies'][14] = x("Smiley eliminado.");
$langmsg['smilies'][15] = x("Editar el emoticono a continuaci�n");
$langmsg['smilies'][16] = x("Smiley:");
$langmsg['smilies'][17] = x("Smiley actualizado.");
$langmsg['smilies'][18] = x("Smilies se han suprimido");
$langmsg['smilies'][19] = x("Por favor seleccione el emoticono que desea editar.");
$langmsg['smilies'][20] = x("Smiley");
$langmsg['smilies'][21] = x("Inserta un emoticono nuevo.");
$langmsg['smilies'][22] = x("Ruta de actualizaci�n de todos los smilies");

#-----SYSTEM MODULE
$langmsg['system'][0] = x("Configuraci�n del sistema");
$langmsg['system'][1] = x("Editar las configuraciones del sistema.");
$langmsg['system'][2] = x("Noticias");
$langmsg['system'][3] = x("Cantidad de noticias por p�gina:");
$langmsg['system'][4] = x("�En qu� orden las noticias se muestra en:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("De fecha y formato de la hora para las noticias:");
$langmsg['system'][8] = x("Ver aqu�");
$langmsg['system'][9] = x("Mostrar avatares:");
$langmsg['system'][10] = x("Delimitador para separar la hora de mostrar las categor�as de noticias:");
$langmsg['system'][11] = x("Comentarios");
$langmsg['system'][12] = x("Cantidad de comentarios por p�gina:");
$langmsg['system'][13] = x("�Qu� comentarios se muestran en orden:");
$langmsg['system'][14] = x("Fecha y formato de la hora de los comentarios:");
$langmsg['system'][15] = x("La duraci�n m�xima de comentarios:");
$langmsg['system'][16] = x("Mostrar comentarios en una nueva ventana:");
$langmsg['system'][17] = x("Tiempo de retardo despu�s de publicar comentarios (Protecci�n anti-spam):");
$langmsg['system'][18] = x("Segundos");
$langmsg['system'][19] = x("Mensaje de spam:");
$langmsg['system'][20] = x("Mensaje Nuevo comentario:");
$langmsg['system'][21] = x("Aprobaci�n Nuevo Comentario mensaje:");
$langmsg['system'][22] = x("Utilizar la imagen de verificaci�n sobre los comentarios de la forma:");
$langmsg['system'][23] = x("Friendly URLs");
$langmsg['system'][24] = x("Activar URLs amigables:");
$langmsg['system'][25] = x("Extensi�n de archivo:");
$langmsg['system'][26] = x("Prefijo:");
$langmsg['system'][27] = x("Nombre de archivo del repertorio:");
$langmsg['system'][28] = x("Registro");
$langmsg['system'][29] = x("Permitir a los usuarios a registrarse:");
$langmsg['system'][30] = x("Nivel de acceso para los nuevos usuarios:");
$langmsg['system'][31] = x("Otro");
$langmsg['system'][32] = x("Timezone:");
$langmsg['system'][33] = x("Dom�sticos los tipos de archivos de im�genes subidas:");
$langmsg['system'][34] = x("Cargas ruta de la imagen:");
$langmsg['system'][35] = x("Ning�n mensaje de error de acceso:");
$langmsg['system'][36] = x("Configuraci�n actualizada.");
$langmsg['system'][37] = x("Tiempo de retardo despu�s de usar enviar a (Protecci�n anti-spam):");
$langmsg['system'][38] = x("Notificaciones");
$langmsg['system'][39] = x("Reciba notificaciones de correo electr�nico de los nuevos comentarios:");
$langmsg['system'][40] = x("Reciba notificaciones de correo electr�nico de nuevos registros:");
$langmsg['system'][41] = x("Permita que s�lo los usuarios registrados a comentar:");
$langmsg['system'][42] = x("Enviar notificaciones a esta direcci�n de correo electr�nico:");
$langmsg['system'][43] = x("Dom�sticos los tipos de archivo de los archivos subidos:");
$langmsg['system'][44] = x("Reciba notificaciones de correo electr�nico de los puestos de noticias no aprobados:");
$langmsg['system'][45] = x("Clave p�blica");
$langmsg['system'][46] = x("La clave privada");
$langmsg['system'][47] = x("Ruta de acceso de secuencias de comandos");
$langmsg['system'][48] = x("Permitir a los usuarios registrados para eliminar sus propios comentarios:");
$langmsg['system'][49] = x("Utilizar la imagen de verificaci�n en el formulario de acceso de �ndice:");
$langmsg['system'][50] = x("Utilizar la imagen de verificaci�n en el formulario de inscripci�n:");
$langmsg['system'][51] = x("Fecha y formato de la hora para los archivos:");
$langmsg['system'][52] = x("Show 'Powered by' debajo de la noticia:");

#-----RECOVERY MODULE
$langmsg['recover'][0] = x("Password Recovery");
$langmsg['recover'][1] = x("Introduzca la direcci�n de correo electr�nico de la cuenta que desea restablecer la contrase�a.");
$langmsg['recover'][2] = x("Email:");
$langmsg['recover'][3] = x("Usted o alguien ha solicitado restablecer su contrase�a en el v�nculo siguiente para hacerlo.");
$langmsg['recover'][4] = x("Haga clic aqu� para restablecer la contrase�a");
$langmsg['recover'][5] = x("Un correo electr�nico ha sido enviado a");
$langmsg['recover'][6] = x("Una cuenta con que el correo electr�nico no existe, por favor, p�ngase en contacto con el administrador.");
$langmsg['recover'][7] = x("Nueva Contrase�a");
$langmsg['recover'][8] = x("Por favor, introduzca su nueva contrase�a a continuaci�n.");
$langmsg['recover'][9] = x("No se puede enviar un correo electr�nico de recuperaci�n, por favor, p�ngase en contacto con el administrador del sistema.");
$langmsg['recover'][10] = x("Confirmar Contrase�a:");
$langmsg['recover'][11] = x("Las contrase�as no coinciden.");
$langmsg['recover'][12] = x("Su contrase�a ha sido actualizada.");
$langmsg['recover'][13] = x("con m�s instrucciones sobre c�mo recuperar su cuenta.");

#-----TEMPLATES MODULE
$langmsg['templates'][0] = x("Plantillas");
$langmsg['templates'][1] = x("Crear una nueva plantilla.");
$langmsg['templates'][2] = x("Nombre:");
$langmsg['templates'][3] = x("Cambios en c�mo se visualiza tus noticias.");
$langmsg['templates'][4] = x("Muestra el t�tulo de la historia.");
$langmsg['templates'][5] = x("Muestra la historia corta de la noticia.");
$langmsg['templates'][6] = x("Muestra la historia de la noticia.");
$langmsg['templates'][7] = x("Muestra la fecha en que la historia fue publicada en.");
$langmsg['templates'][8] = x("Muestra las categor�as de cada puesto ha sido asignado.");
$langmsg['templates'][9] = x("Muestra el autor de la historia.");
$langmsg['templates'][10] = x("Muestra los usuarios avatar, si lo tiene.");
$langmsg['templates'][11] = x("Muestra el identificador �nico de cada historia tiene.");
$langmsg['templates'][12] = x("Muestra la direcci�n IP del autor. (S�lo se muestra si est� conectado)");
$langmsg['templates'][13] = x("Muestra el enlace para leer el post completo");
$langmsg['templates'][14] = x("Mostrar� su direcci�n de correo electr�nico.");
$langmsg['templates'][15] = x("Se crear� un enlace a su direcci�n de correo electr�nico.");
$langmsg['templates'][16] = x("Crear� un enlace a su perfil.");
$langmsg['templates'][17] = x("Muestra la cantidad de comentarios para cada puesto de prensa.");
$langmsg['templates'][18] = x("Crear� un enlace a los comentarios.");
$langmsg['templates'][19] = x("Todo lo coloca entre estas etiquetas s�lo se mostrar� si logged in");
$langmsg['templates'][20] = x("Ruta de emoticones");
$langmsg['templates'][21] = x("Comentarios");
$langmsg['templates'][22] = x("Cambios en c�mo se muestran los comentarios.");
$langmsg['templates'][23] = x("Muestra el autor del comentario.");
$langmsg['templates'][24] = x("Muestra el mensaje.");
$langmsg['templates'][25] = x("Muestra los usuarios avatar, si lo tiene.");
$langmsg['templates'][26] = x("Muestra la direcci�n IP del autor. (S�lo se muestra si est� conectado)");
$langmsg['templates'][27] = x("Muestra el identificador �nico de cada comentario tiene.");
$langmsg['templates'][28] = x("Muestra la direcci�n de correo electr�nico del usuario que coment�.");
$langmsg['templates'][29] = x("Crear� un enlace al correo electr�nico de los usuarios.");
$langmsg['templates'][30] = x("Muestra la fecha en que se public� el comentario.");
$langmsg['templates'][31] = x("Todo lo coloca entre estas etiquetas s�lo se mostrar� si logged in");
$langmsg['templates'][32] = x("Formulario de Comentarios");
$langmsg['templates'][33] = x("Es importante cuando la edici�n de este para mantener todos los nombres de campo de entrada y los identificadores de la misma de lo contrario no funcionar�. Observe tambi�n la forma onsubmit useajax atributo ='', s� o no determina si AJAX se utiliza cuando el usuario env�a un comentario.");
$langmsg['templates'][34] = x("Muestra la identificaci�n del puesto de prensa.");
$langmsg['templates'][35] = x("Muestra el ID de la categor�a del puesto de prensa.");
$langmsg['templates'][36] = x("Mostrar� su nombre de usuario si logged in");
$langmsg['templates'][37] = x("Mostrar� su correo electr�nico si logged in");
$langmsg['templates'][38] = x("Mostrar� el mensaje.");
$langmsg['templates'][39] = x("Mostrar� todos los smilies.");
$langmsg['templates'][40] = x("Noticias paginaci�n");
$langmsg['templates'][44] = x("Comentarios Paginaci�n");
$langmsg['templates'][45] = x("Muestra el enlace anterior si hay alguna.");
$langmsg['templates'][46] = x("Muestra el siguiente enlace si hay alguna.");
$langmsg['templates'][47] = x(", Mostrar� la cantidad de p�ginas, Ex: 1 2 3 4.");
$langmsg['templates'][48] = x("Perfiles");
$langmsg['templates'][49] = x("Editar c�mo se muestran los perfiles de usuarios.");
$langmsg['templates'][50] = x("Muestra el nombre de usuario de los usuarios.");
$langmsg['templates'][51] = x("Muestra el nombre de los usuarios.");
$langmsg['templates'][52] = x("Muestra los usuarios mayores de edad.");
$langmsg['templates'][53] = x("Muestra la ubicaci�n de los usuarios.");
$langmsg['templates'][54] = x("Muestra el sexo a los usuarios.");
$langmsg['templates'][55] = x("Crea un enlace a la p�gina principal de los usuarios.");
$langmsg['templates'][56] = x("Muestra los intereses de los usuarios.");
$langmsg['templates'][57] = x("Muestra el aficiones usuarios.");
$langmsg['templates'][58] = x("Muestra la ocupaci�n de los usuarios.");
$langmsg['templates'][59] = x("Muestra los usuarios frase favorita.");
$langmsg['templates'][60] = x("Mostrar la imagen del perfil de los usuarios.");
$langmsg['templates'][61] = x("Noticias Estructura");
$langmsg['templates'][62] = x("Aqu� es donde usted puede controlar el orden phyiscal feature de c�mo se muestra cada elemento de noticias, por ejemplo, si desea que el pagintation que se muestra por encima de sus noticias, as� como debajo de ella, puede hacerlo aqu�.");
$langmsg['templates'][63] = x("Muestra tus mensajes de noticias.");
$langmsg['templates'][64] = x("Muestra el pagintation noticias.");
$langmsg['templates'][65] = x("Comentarios Estructura");
$langmsg['templates'][66] = x("Aqu� es donde usted puede controlar el orden phyiscal feature de c�mo cada elemento de noticias se muestra cuando los comentarios de visualizaci�n, por ejemplo, si desea que el pagintation que se muestra por encima de sus comentarios, as� como debajo de ella, puede hacerlo aqu�.");
$langmsg['templates'][67] = x("Muestra los mensajes de noticias solo cuando se ven los comentarios");
$langmsg['templates'][68] = x("Muestra sus comentarios.");
$langmsg['templates'][69] = x("Muestra el pagintation comentario.");
$langmsg['templates'][70] = x("Muestra el formulario de comentarios.");
$langmsg['templates'][71] = x("Formulario de Inscripci�n");
$langmsg['templates'][72] = x("Aqu� es donde usted controla la forma que permite a los usuarios a registrarse. Es importante mantener todos los nombres de campo de entrada y los identificadores de los mismos de otra manera no funcionar�.");
$langmsg['templates'][73] = x("Nombre de usuario que el usuario introduce.");
$langmsg['templates'][74] = x("Contrase�a que el usuario introduce.");
$langmsg['templates'][75] = x("Muestra el mensaje de error si se deja un campo en blanco.");
$langmsg['templates'][76] = x("Por favor, introduzca un nombre.");
$langmsg['templates'][77] = x("Plantilla creada.");
$langmsg['templates'][78] = x("Por favor, elija otro nombre.");
$langmsg['templates'][79] = x("Modificar las plantillas de abajo para cambiar la forma en que se publican sus noticias y comentarios.");
$langmsg['templates'][80] = x("Noticias");
$langmsg['templates'][81] = x("Plantilla actualizada.");
$langmsg['templates'][82] = x("Una plantilla con ese nombre ya existe. Por favor, elija otro nombre");
$langmsg['templates'][83] = x("No se puede eliminar de la plantilla thats en el uso de");
$langmsg['templates'][84] = x("Plantilla seleccionada (s) deleted");
$langmsg['templates'][85] = x("plantilla (s) copied");
$langmsg['templates'][86] = x("Seleccione un nombre de la plantilla de abajo para editar.");
$langmsg['templates'][87] = x("Plantilla seleccionada.");
$langmsg['templates'][88] = x("Nombre");
$langmsg['templates'][89] = x("Seleccionados");
$langmsg['templates'][90] = x("Crear una nueva plantilla.");
$langmsg['templates'][91] = x("Seleccione");
$langmsg['templates'][92] = x("Muestra los puntos de vista de cada historia tiene.");
$langmsg['templates'][93] = x("Muestra la imagen n�mero de estrellas.");
$langmsg['templates'][94] = x("Muestra la valoraci�n actual de la historia.");
$langmsg['templates'][95] = x("Muestra la cantidad de veces que la historia ha sido evaluado.");
$langmsg['templates'][96] = x("Muestra el formulario de evaluaci�n.");
$langmsg['templates'][98] = x("Muestra la enviar� a la forma.");
$langmsg['templates'][99] = x("Muestra la ubicaci�n de los usuarios de");
$langmsg['templates'][100] = x("Archivos subidos");
$langmsg['templates'][101] = x("Controlar c�mo se muestran los archivos subidos.");
$langmsg['templates'][102] = x("Fecha en que el archivo fue cargado.");
$langmsg['templates'][103] = x("T�tulo del archivo.");
$langmsg['templates'][104] = x("El nombre del archivo.");
$langmsg['templates'][105] = x("Tama�o del archivo del archivo.");
$langmsg['templates'][106] = x("URL para descargar el archivo.");
$langmsg['templates'][107] = x("Nombre de usuario de Google Uploader.");
$langmsg['templates'][108] = x("Cantidad de veces que el archivo se ha descargado.");
$langmsg['templates'][109] = x("Mostrar los archivos vinculados al puesto de prensa.");
$langmsg['templates'][110] = x("Mostrar cada archivo relacionado con el puesto de prensa.");
$langmsg['templates'][111] = x("S�lo muestra 3 p�ginas a la vez");
$langmsg['templates'][112] = x("Enlace a la p�gina uno, si no se muestra actualmente en la p�gina uno.");
$langmsg['templates'][113] = x("Enlace a la �ltima p�gina, si no se muestra actualmente en la p�gina la �ltima p�gina.");
$langmsg['templates'][114] = x("Muestra el n�mero de palabras para este post");
$langmsg['templates'][115] = x("Muestra el t�tulo f�cil de la historia");
$langmsg['templates'][116] = x("Muestra el elemento reCAPTCHA");
$langmsg['templates'][117] = x("Crea un enlace a eliminar el comentario.");
$langmsg['templates'][118] = x("Muestra el formulario de acceso s�lo si se requiere de conexi�n.");
$langmsg['templates'][119] = x("Login Form");
$langmsg['templates'][120] = x("Control de c�mo se muestra el formulario de acceso.");
$langmsg['templates'][121] = x("Muestra el correo electr�nico del usuario especificado.");
$langmsg['templates'][122] = x("Muestra el mensaje de error de conexi�n.");
$langmsg['templates'][123] = x("Muestra el elemento reCAPTCHA.");
$langmsg['templates'][124] = x("Muestra el nombre de usuario introducido por el usuario.");
$langmsg['templates'][125] = x("Si se conect� muestra el nombre de usuario.");
$langmsg['templates'][126] = x("Muestra el formulario de b�squeda. Todos los nombres y los identificadores debe seguir siendo la misma.");
$langmsg['templates'][127] = x("Muestra el n�mero de resultados de cada b�squeda");
$langmsg['templates'][128] = x("Formatos de c�mo obtener los resultados de b�squeda muestra. Se repite para cada resultado.");
$langmsg['templates'][129] = x("Alterna entre la salida de uno o dos para cada fila.");
$langmsg['templates'][130] = x("Muestra el n�mero de p�gina actual.");
$langmsg['templates'][131] = x("Muestra el n�mero de la p�gina anterior.");
$langmsg['templates'][132] = x("Muestra el n�mero de la p�gina siguiente.");
$langmsg['templates'][133] = x("Muestra el t�tulo descriptivo del reportaje.");
$langmsg['templates'][134] = x("Formulario de b�squeda");
$langmsg['templates'][135] = x("Resultados de la b�squeda");
$langmsg['templates'][136] = x("Archivos subidos");

#-----UPLOADED FILES
$langmsg['uploadedfiles'][0] = x("Carga de Archivos");
$langmsg['uploadedfiles'][1] = x("Subir un archivo nuevo");
$langmsg['uploadedfiles'][2] = x("Subir archivo");
$langmsg['uploadedfiles'][4] = x("Elija un archivo:");
$langmsg['uploadedfiles'][5] = x("Archivo (s) eliminado.");
$langmsg['uploadedfiles'][6] = x("Archivo cargado");
$langmsg['uploadedfiles'][7] = x("Hubo un error al subir el archivo, por favor, int�ntelo de nuevo.");
$langmsg['uploadedfiles'][8] = x("Extensi�n de archivo no v�lida.");
$langmsg['uploadedfiles'][9] = x("De archivo no v�lido.");
$langmsg['uploadedfiles'][10] = x("Archivo eliminado de la categor�a.");
$langmsg['uploadedfiles'][11] = x("Archivo (s) a�adido a la categor�a.");
$langmsg['uploadedfiles'][12] = x("Nombre de archivo");
$langmsg['uploadedfiles'][13] = x("Seleccione una categor�a:");
$langmsg['uploadedfiles'][14] = x("Editar un archivo");
$langmsg['uploadedfiles'][15] = x("T�tulo:");
$langmsg['uploadedfiles'][16] = x("Descripci�n:");
$langmsg['uploadedfiles'][17] = x("Actualizaci�n de archivo");
$langmsg['uploadedfiles'][18] = x("Archivo no v�lido");
$langmsg['uploadedfiles'][19] = x("Archivo actualizado");
$langmsg['uploadedfiles'][20] = x("Miniaturas");
$langmsg['uploadedfiles'][21] = x("Detalles");
$langmsg['uploadedfiles'][22] = x("Categor�a:");
$langmsg['uploadedfiles'][23] = x("T�tulo");
$langmsg['uploadedfiles'][24] = x("Tama�o del archivo");
$langmsg['uploadedfiles'][25] = x("Uploader");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("A�adir a la categor�a");
$langmsg['uploadedfiles'][28] = x("Eliminar de la categor�a de");
$langmsg['uploadedfiles'][29] = x("Los archivos subidos");
$langmsg['uploadedfiles'][30] = x("Un archivo con ese nombre ya existe.");
$langmsg['uploadedfiles'][31] = x("Reset descargas:");
$langmsg['uploadedfiles'][32] = x("Todas las categor�as");
$langmsg['uploadedfiles'][33] = x("nedladdningar");
$langmsg['uploadedfiles'][34] = x("Uploaded");

#-----ADMIN DATA
$langmsg['admindata'][0] = x("Ayuda");
$langmsg['admindata'][1] = x("A�adir Noticias");
$langmsg['admindata'][2] = x("Mensajes Privados");
$langmsg['admindata'][3] = x("Edit News");
$langmsg['admindata'][4] = x("Modificar los comentarios");

#-----SUBMIT FIELDS
$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("Prevista");
$langmsg['submitfield'][2] = x("A�adir Noticias");
$langmsg['submitfield'][3] = x("Salvar");
$langmsg['submitfield'][4] = x("Enviar");
$langmsg['submitfield'][5] = x("Crear");
$langmsg['submitfield'][6] = x("Actualizar");
$langmsg['submitfield'][7] = x("Agregar");
$langmsg['submitfield'][8] = x("Borrar");
$langmsg['submitfield'][9] = x("Recuperar");

#-----SELECT FIELDS
$langmsg['selectfield'][0] = x("- Seleccione opci�n --");
$langmsg['selectfield'][1] = x("S�");
$langmsg['selectfield'][2] = x("No");
$langmsg['selectfield'][3] = x("Borrar");
$langmsg['selectfield'][4] = x("Necesita la aprobaci�n");
$langmsg['selectfield'][5] = x("Permitir comentarios");
$langmsg['selectfield'][6] = x("Aprobaci�n de la modificaci�n");
$langmsg['selectfield'][7] = x("Aprobaci�n");
$langmsg['selectfield'][8] = x("Comentarios");
$langmsg['selectfield'][9] = x("Aprobar");
$langmsg['selectfield'][10] = x("Desaprobar");
$langmsg['selectfield'][11] = x("Fecha");
$langmsg['selectfield'][12] = x("T�tulo");
$langmsg['selectfield'][13] = x("Autor");
$langmsg['selectfield'][14] = x("Categor�a");
$langmsg['selectfield'][15] = x("Comentarios #");
$langmsg['selectfield'][16] = x("Marcar como le�do");
$langmsg['selectfield'][17] = x("Marcar como no le�do");
$langmsg['selectfield'][18] = x("Perd� mi cuenta bloqueada");
$langmsg['selectfield'][19] = x("Crear copia");
$langmsg['selectfield'][20] = x("Ver cuenta Perd� mi");
$langmsg['selectfield'][21] = x("Resetear los votos");

#-----Javascript
$langmsg['js'][0] = x("�Est�s seguro de que deseas eliminar esta imagen de la categor�a?");
$langmsg['js'][1] = x("�Est�s seguro de que desea eliminar la imagen seleccionada (s)?");
$langmsg['js'][2] = x("�Est�s seguro de que desea eliminar el mensaje seleccionado (s)?");
$langmsg['js'][3] = x("�Est� seguro de que desea borrar la plantilla seleccionada (s)?");
$langmsg['js'][4] = x("�Est�s seguro de que quieres eliminar estas direcciones IP?");
$langmsg['js'][5] = x("�Est�s seguro de que desea restablecer la cuenta bloqueada de estas direcciones IP");
$langmsg['js'][6] = x("�Est�s seguro de que deseas eliminar estos nivel de acceso (s)?");
$langmsg['js'][7] = x("�Est�s seguro de que quieres eliminar estas categor�as?");
$langmsg['js'][8] = x("�Est�s seguro de que quieres eliminar estas categor�as y los puestos dentro de ellos?");
$langmsg['js'][9] = x("�Est�s seguro de que quieres eliminar estas categor�as?");
$langmsg['js'][10] = x("�Est�s seguro de que deseas eliminar estos cuenta (s)?");
$langmsg['js'][11] = x("�Est�s seguro de que deseas eliminar estos cuenta (s) y los puestos?");
$langmsg['js'][12] = x("�Est�s seguro de que deseas eliminar estos post (s)?");
$langmsg['js'][13] = x("Introduzca un texto");
$langmsg['js'][14] = x("Texto");
$langmsg['js'][15] = x("Por favor, introduzca un color. Ejemplo, el rojo, amarillo, azul (o incluso valores hexadecimales)");
$langmsg['js'][16] = x("azul");
$langmsg['js'][17] = x("Introduzca la direcci�n URL del enlace");
$langmsg['js'][18] = x("Introduzca el texto que se mostrar�");
$langmsg['js'][19] = x("V�nculo");
$langmsg['js'][20] = x("Introduzca un tama�o de fuente");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Texto para mostrar?");
$langmsg['js'][23] = x("Direcci�n de correo electr�nico");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Mail me!");
$langmsg['js'][26] = x("Texto de la cita?");
$langmsg['js'][27] = x("Citar");
$langmsg['js'][28] = x("�Est�s seguro de que quieres eliminar comentario seleccionado (s)?");
$langmsg['js'][29] = x("�Est�s seguro de que quieres eliminar las categor�as seleccionadas?");
$langmsg['js'][30] = x("Smilies C�mo ... Por favor, espere.");
$langmsg['js'][31] = x("�Est�s seguro de que desea borrar el archivo seleccionado (s)?");
$langmsg['js'][32] = x("�Est�s seguro de que quieres eliminar las caritas seleccionado?");

$langmsg['news'][0] = x("Por favor, introduzca un nombre.");
$langmsg['news'][1] = x("Por favor, introduzca un mensaje.");
$langmsg['news'][2] = x("La clave de seguridad no v�lido");
$langmsg['news'][3] = x("Elija otro nombre.");
$langmsg['news'][4] = x("La clave de seguridad no v�lido");
$langmsg['news'][5] = x("Resultados encontrados:");
$langmsg['news'][6] = x("Nuevas inscripciones est�n desactivados.");
$langmsg['news'][7] = x("Su cuenta ha sido creada, ahora se puede <a href=\"{adminpath}\">iniciar sesi�n aqu�.</a>");
$langmsg['news'][8] = x("Por favor, introduzca un nombre.");
$langmsg['news'][9] = x("Por favor, introduzca un mensaje.");
$langmsg['news'][10] = x("La clave de seguridad no v�lido");
$langmsg['news'][11] = x("Elija otro nombre.");
$langmsg['news'][12] = x("La clave de seguridad no v�lido");
$langmsg['news'][13] = x("Gracias por su valoraci�n.");
$langmsg['news'][14] = x("Ya has calificado este art�culo.");
$langmsg['news'][15] = x("Nombre");
$langmsg['news'][16] = x("Email:");
$langmsg['news'][17] = x("Friends Email:");
$langmsg['news'][18] = x("Mensaje:");
$langmsg['news'][19] = x("Hola echa un vistazo a este art�culo que encontr�!");
$langmsg['news'][20] = x("Enviar a un amigo");
$langmsg['news'][21] = x("Correo enviado.");
$langmsg['news'][22] = x("Por favor, introduzca su nombre");
$langmsg['news'][23] = x("Por favor, introduzca su direcci�n de correo electr�nico");
$langmsg['news'][24] = x("Por favor, introduzca un mensaje");
$langmsg['news'][25] = x("Por favor, introduzca su direcci�n de correo electr�nico de amigos");
$langmsg['news'][27] = x("Por favor, introduzca una direcci�n de email v�lida");
$langmsg['news'][28] = x("Por favor, introduzca su direcci�n de correo electr�nico v�lida amigos");
$langmsg['news'][29] = x("Por favor, introduzca un nombre de usuario.");
$langmsg['news'][30] = x("Ese nombre de usuario ya se ha tomado, por favor, elija otro.");
$langmsg['news'][31] = x("Esa direcci�n de correo electr�nico ya est� en uso, por favor, elija otro.");
$langmsg['news'][32] = x("Por favor, introduzca una direcci�n de correo electr�nico.");
$langmsg['news'][33] = x("Por favor, introduzca una direcci�n de correo electr�nico v�lida.");
$langmsg['news'][34] = x("Por favor, introduzca una contrase�a.");
$langmsg['news'][35] = x("Por favor, confirme su contrase�a.");
$langmsg['news'][36] = x("Las contrase�as no coinciden.");
$langmsg['news'][37] = x("La clave de seguridad no v�lida.");
$langmsg['news'][38] = x("Por favor, espere");
$langmsg['news'][39] = x("Hubo un problema al enviar el mensaje, por favor, p�ngase en contacto con el administrador.");
$langmsg['news'][40] = x("Usted debe estar conectado para publicar un comentario.");
$langmsg['news'][41] = x("Nuevo comentario en {domain}");
$langmsg['news'][42] = x("Nombre: {name} \n Email {email} \n IP de correo electr�nico) {ip} IP del mensaje: {message}");
$langmsg['news'][43] = x("Nuevo registro de dominio en {domain}");
$langmsg['news'][44] = x("Nombre: {name} Email: {email} IP: {ip}");
$langmsg['news'][45] = x("segundos antes de enviar otro mensaje.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Nombre");
$langmsg['news'][48] = x("Correo electr�nico / URL");
$langmsg['news'][49] = x("Mensaje");
$langmsg['news'][50] = x("Escriba un art�culo de t�tulo");
$langmsg['news'][51] = x("Resumen");
$langmsg['news'][52] = x("No hay categor�as");
$langmsg['news'][53] = x("Fecha");
$langmsg['news'][54] = x("Fecha de este art�culo fue publicada");
$langmsg['news'][55] = x("Archivo");


$langmsg['shortmonths'][0] = x("Ene");
$langmsg['shortmonths'][1] = x("Febrero");
$langmsg['shortmonths'][2] = x("Mar");
$langmsg['shortmonths'][3] = x("Abril");
$langmsg['shortmonths'][4] = x("Mayo");
$langmsg['shortmonths'][5] = x("Junio");
$langmsg['shortmonths'][6] = x("Julio");
$langmsg['shortmonths'][7] = x("Agosto");
$langmsg['shortmonths'][8] = x("Septiembre");
$langmsg['shortmonths'][9] = x("Octubre");
$langmsg['shortmonths'][10] = x("Noviembre");
$langmsg['shortmonths'][11] = x("Diciembre");


$langmsg['months'][0] = x("Enero");
$langmsg['months'][1] = x("Febrero");
$langmsg['months'][2] = x("De marzo");
$langmsg['months'][3] = x("Abril");
$langmsg['months'][4] = x("Mayo");
$langmsg['months'][5] = x("Junio");
$langmsg['months'][6] = x("Julio");
$langmsg['months'][7] = x("Agosto");
$langmsg['months'][8] = x("Septiembre");
$langmsg['months'][9] = x("Octubre");
$langmsg['months'][10] = x("Noviembre");
$langmsg['months'][11] = x("Diciembre");


$langmsg['search'][0] = x("Noticias Active");
$langmsg['search'][1] = x("Noticias archivadas");
$langmsg['search'][2] = x("Lo nuevo primero");
$langmsg['search'][3] = x("M�s antiguos primero");
$langmsg['search'][4] = x("B�squeda");
$langmsg['search'][5] = x("Intervalo");


$langmsg['install'][0] = x("Informaci�n de base de datos de conexi�n");
$langmsg['install'][1] = x("Ingrese la informaci�n de su servidor MySQL a continuaci�n.");
$langmsg['install'][2] = x("Servidor:");
$langmsg['install'][3] = x("(generalmente localhost)");
$langmsg['install'][4] = x("Nombre de usuario:");
$langmsg['install'][5] = x("Contrase�a:");
$langmsg['install'][6] = x("Base de datos:");
$langmsg['install'][7] = x("La conexi�n de prueba");
$langmsg['install'][8] = x("Conectando con el servidor:");
$langmsg['install'][9] = x("Selecci�n de base de datos:");
$langmsg['install'][10] = x("No se puede escribir db.php, por favor, CHMOD este archivo a 777");
$langmsg['install'][11] = x("Informaci�n de la cuenta");
$langmsg['install'][12] = x("Introduzca los detalles de su cuenta a continuaci�n. Esto ser� utilizado para iniciar sesi�n.");
$langmsg['install'][13] = x("Email:");
$langmsg['install'][14] = x("Confirmar Contrase�a:");
$langmsg['install'][15] = x("Continuar");
$langmsg['install'][16] = x("Por favor, introduzca un nombre de usuario");
$langmsg['install'][17] = x("Por favor, introduzca una direcci�n de correo electr�nico");
$langmsg['install'][18] = x("Por favor, introduzca su contrase�a");
$langmsg['install'][19] = x("Pulse Instalar para finalizar la instalaci�n");
$langmsg['install'][20] = x("Las contrase�as no coinciden");
$langmsg['install'][21] = x("Instale");
$langmsg['install'][22] = x("Finalizando la instalaci�n");
$langmsg['install'][23] = x("�XITO!");
$langmsg['install'][24] = x("N-13 News ha sido instalado.");
$langmsg['install'][25] = x("Entrar al �rea de administraci�n.");
$langmsg['install'][26] = x("Puerto:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Extensi�n:");
$langmsg['install'][29] = x("(dejar en blanco para predeterminado)");
$langmsg['install'][30] = x("Instalaci�n de ... Por favor, espere.");
$langmsg['install'][31] = x("La funci�n mysqli_connect no fue encontrada.");
$langmsg['install'][32] = x("La funci�n pdo_mysql no fue encontrada.");
?>