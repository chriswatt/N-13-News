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

$langmsg['menu'][0] = x("Добавить новость");
$langmsg['menu'][1] = x("Изменить Новости");
$langmsg['menu'][2] = x("Архивы");
$langmsg['menu'][3] = x("Новое сообщение");
$langmsg['menu'][4] = x("Входящие");
$langmsg['menu'][5] = x("Исходящие");
$langmsg['menu'][6] = x("Счета");
$langmsg['menu'][7] = x("Уровни доступа");
$langmsg['menu'][8] = x("Banned IPs");
$langmsg['menu'][9] = x("Категория");
$langmsg['menu'][10] = x("Загрузку изображений");
$langmsg['menu'][11] = x("Личное");
$langmsg['menu'][12] = x("Профиль");
$langmsg['menu'][13] = x("RSS-каналы");
$langmsg['menu'][14] = x("Смайлики");
$langmsg['menu'][15] = x("Система");
$langmsg['menu'][16] = x("Шаблоны");
$langmsg['menu'][17] = x("Слова Фильтры");
$langmsg['menu'][18] = x("Дом");
$langmsg['menu'][19] = x("Новости");
$langmsg['menu'][20] = x("Сообщений");
$langmsg['menu'][21] = x("Функции");
$langmsg['menu'][22] = x("Помощь");
$langmsg['menu'][23] = x("Выйти");
$langmsg['menu'][24] = x("File Uploads");


$langmsg['home'][0] = x("Глобальная статистика Новости ниже.");
$langmsg['home'][1] = x("Добро пожаловать");
$langmsg['home'][2] = x("Настройка PHP 'magic_quotes_gpc' была обнаружена как включен. Это рекомендуется отключить эту опцию.");
$langmsg['home'][3] = x("Настройка PHP 'register_globals' были обнаружены как включено. Это рекомендуется отключить как это может вызвать проблемы безопасности и ошибки имеют место.");
$langmsg['home'][4] = x("Install.php был обнаружен. Пожалуйста, удалите этот файл.");
$langmsg['home'][5] = x("Install.php не может быть удалена, пожалуйста удалите этот файл вручную");
$langmsg['home'][6] = x("Всего новостей:");
$langmsg['home'][7] = x("Всего комментариев:");
$langmsg['home'][8] = x("Всего пользователей:");
$langmsg['home'][9] = x("Всего Смайлики:");
$langmsg['home'][10] = x("Всего фильтры:");
$langmsg['home'][11] = x("Всего категорий:");
$langmsg['home'][12] = x("Всего шаблонов:");
$langmsg['home'][13] = x("Всего уровней доступа:");
$langmsg['home'][14] = x("Подключение к базе данных:");
$langmsg['home'][15] = x("Оптимизация всех таблицах:");
$langmsg['home'][16] = x("Текущая версия:");
$langmsg['home'][17] = x("Последняя версия:");
$langmsg['home'][18] = x("Логи Открыть доступ");
$langmsg['home'][19] = x("Время запроса:");
$langmsg['home'][20] = x("Непрочитанные сообщения");
$langmsg['home'][21] = x("Попробуйте удалить этот файл автоматически?");
$langmsg['home'][22] = x("секунд");
$langmsg['home'][23] = x("Всего изображений");
$langmsg['home'][24] = x("Всего файлов");
$langmsg['home'][25] = x("Всего RSS-каналы");


$langmsg['addnews'][0] = x("Новости Превью");
$langmsg['addnews'][1] = x("Пожалуйста, введите название");
$langmsg['addnews'][2] = x("Пожалуйста, выберите, если эта должность позволит комментариев или нет");
$langmsg['addnews'][3] = x("Добавить новость");
$langmsg['addnews'][4] = x("Пожалуйста, выберите категорию");


$langmsg['editnews'][0] = x("Изменить Новости");
$langmsg['editnews'][1] = x("Показаны");
$langmsg['editnews'][2] = x("Функции");
$langmsg['editnews'][3] = x("Сумма для отображения");
$langmsg['editnews'][4] = x("Сортировка по");
$langmsg['editnews'][5] = x("Заказ");
$langmsg['editnews'][7] = x("Название");
$langmsg['editnews'][8] = x("Автор");
$langmsg['editnews'][9] = x("Категория");
$langmsg['editnews'][10] = x("Свидание");
$langmsg['editnews'][11] = x("Утверждение");
$langmsg['editnews'][12] = x("Комментариев");
$langmsg['editnews'][13] = x("[показать]");
$langmsg['editnews'][14] = x("Утвержденный");
$langmsg['editnews'][15] = x("Неподтвержденные");
$langmsg['editnews'][16] = x("Новости добавили.");
$langmsg['editnews'][17] = x("Выбранный Сообщения удалены.");
$langmsg['editnews'][18] = x("Выбранный сообщений обновляется.");
$langmsg['editnews'][19] = x("Новости обновляются.");
$langmsg['editnews'][20] = x("Инвалиды");
$langmsg['editnews'][21] = x("новостей.");
$langmsg['editnews'][22] = x("в общей сложности.");
$langmsg['editnews'][23] = x("Открыть кол сбрасывается в 0 для выбранного статью (статьи)");
$langmsg['editnews'][24] = x("Оценки для сброса выбранных статью (статьи)");
$langmsg['editnews'][25] = x("Фильтр по категориям");


$langmsg['newsform'][0] = x("Добавить новость пост ниже.");
$langmsg['newsform'][1] = x("Название:");
$langmsg['newsform'][2] = x("Категории:");
$langmsg['newsform'][3] = x("Рассказ:");
$langmsg['newsform'][4] = x("Story:");
$langmsg['newsform'][5] = x("HTML инвалидов");
$langmsg['newsform'][6] = x("HTML Enabled");
$langmsg['newsform'][7] = x("Комментарии:");
$langmsg['newsform'][8] = x("Toggle дате");
$langmsg['newsform'][9] = x("Toggle Рассказ");
$langmsg['newsform'][16] = x("Дата:");
$langmsg['newsform'][17] = x("Toggle архив");
$langmsg['newsform'][18] = x("Никогда Архив");
$langmsg['newsform'][19] = x("File Uploads");
$langmsg['newsform'][20] = x("Загрузки");
$langmsg['newsform'][21] = x("Загружено");
$langmsg['newsform'][22] = x("Статья");
$langmsg['newsform'][23] = x("Введите URL изображения");
$langmsg['newsform'][24] = x("Вставить");
$langmsg['newsform'][25] = x("Выберите загруженного изображения");


$langmsg['editcomments'][0] = x("Изменить Комментарии");
$langmsg['editcomments'][1] = x("Изменить комментарий ниже.");
$langmsg['editcomments'][2] = x("Автор:");
$langmsg['editcomments'][3] = x("Электронная почта:");
$langmsg['editcomments'][4] = x("Сообщение:");
$langmsg['editcomments'][5] = x("Комментарии обновляться.");
$langmsg['editcomments'][6] = x("Комментарий удален.");
$langmsg['editcomments'][7] = x("Комментарии обновляться.");
$langmsg['editcomments'][8] = x("Комментарии в общей сложности.");
$langmsg['editcomments'][9] = x("Сообщение");
$langmsg['editcomments'][10] = x("Свидание");
$langmsg['editcomments'][11] = x("Утверждение");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("Утвержденный");
$langmsg['editcomments'][14] = x("Неподтвержденные");
$langmsg['editcomments'][15] = x("Расположение:");


$langmsg['privmsgs'][0] = x("Личные сообщения");
$langmsg['privmsgs'][1] = x("Входящие");
$langmsg['privmsgs'][2] = x("Исходящие");
$langmsg['privmsgs'][3] = x("Новое сообщение");
$langmsg['privmsgs'][4] = x("Вы");
$langmsg['privmsgs'][5] = x("Название");
$langmsg['privmsgs'][6] = x("От");
$langmsg['privmsgs'][7] = x("Отправленный");
$langmsg['privmsgs'][8] = x("К");
$langmsg['privmsgs'][9] = x("Ответ на это сообщение");
$langmsg['privmsgs'][10] = x("Новые частные сообщения.");
$langmsg['privmsgs'][11] = x("Отправить:");
$langmsg['privmsgs'][12] = x("Название:");
$langmsg['privmsgs'][13] = x("Сообщение:");
$langmsg['privmsgs'][14] = x("Example 'user1, user2, user3'");
$langmsg['privmsgs'][15] = x("Просмотр сообщения.");
$langmsg['privmsgs'][16] = x("Сообщение, отправленное на следующих пользователей.");
$langmsg['privmsgs'][17] = x("Пожалуйста, введите пользователю отправить это сообщение.");
$langmsg['privmsgs'][18] = x("Пожалуйста, введите название для этого сообщения.");
$langmsg['privmsgs'][19] = x("Введите сообщение.");
$langmsg['privmsgs'][20] = x("Сообщения удалены.");
$langmsg['privmsgs'][21] = x("непрочитанных сообщений.");
$langmsg['privmsgs'][22] = x("Сообщения в общей сложности.");


$langmsg['options'][0] = x("Функции");


$langmsg['bannedips'][0] = x("Banned IPs");
$langmsg['bannedips'][1] = x("Banned IP-адресов.");
$langmsg['bannedips'][2] = x("IP");
$langmsg['bannedips'][3] = x("Количество раз заблокировали");
$langmsg['bannedips'][4] = x("Добавить новый IP адрес.");
$langmsg['bannedips'][5] = x("Banned сообщении. включена (HTML)");
$langmsg['bannedips'][6] = x("IP-адрес:");
$langmsg['bannedips'][7] = x("Этот адрес IP уже запретили.");
$langmsg['bannedips'][8] = x("IP адреса запрещен.");
$langmsg['bannedips'][9] = x("Адреса удалены ИС.");
$langmsg['bannedips'][10] = x("IP адреса были сброшены.");
$langmsg['bannedips'][11] = x("Banned сообщений обновляется.");


$langmsg['cats'][0] = x("Категория");
$langmsg['cats'][1] = x("Категории.");
$langmsg['cats'][2] = x("Имя");
$langmsg['cats'][3] = x("Статьи");
$langmsg['cats'][4] = x("Создать новую категорию.");
$langmsg['cats'][5] = x("Имя:");
$langmsg['cats'][6] = x("Следующим категориям должны быть удалены:");
$langmsg['cats'][7] = x("Пожалуйста, выберите другое имя.");
$langmsg['cats'][8] = x("Категории создан.");
$langmsg['cats'][9] = x("Категории обновлены.");
$langmsg['cats'][10] = x("Измените вашу категорию ниже.");
$langmsg['cats'][11] = x("Изображения");
$langmsg['cats'][12] = x("Файлы");
$langmsg['cats'][13] = x("Категория с таким именем уже существует, выберите другой.");


$langmsg['img'][0] = x("Загрузку изображений");
$langmsg['img'][1] = x("Добавить новое изображение");
$langmsg['img'][2] = x("Загрузить файл");
$langmsg['img'][3] = x("Всего изображений");
$langmsg['img'][4] = x("Выберите картинку:");
$langmsg['img'][5] = x("Image (ы) удален.");
$langmsg['img'][6] = x("Image Uploaded");
$langmsg['img'][7] = x("Был Ошибка загрузки файла, пожалуйста, попробуйте еще раз.");
$langmsg['img'][8] = x("Неверное расширение файла.");
$langmsg['img'][9] = x("Неверное изображение.");
$langmsg['img'][10] = x("Удаления изображения из категорий.");
$langmsg['img'][11] = x("Image (ы) добавил к категории.");
$langmsg['img'][12] = x("Имя файла:");
$langmsg['img'][13] = x("Выберите категорию:");
$langmsg['img'][14] = x("Изменить изображение");
$langmsg['img'][15] = x("Название:");
$langmsg['img'][16] = x("Описание:");
$langmsg['img'][17] = x("Обновления изображения");
$langmsg['img'][18] = x("Неверное изображение");
$langmsg['img'][19] = x("Image Updated");
$langmsg['img'][20] = x("Миниатюрные");
$langmsg['img'][21] = x("Подробности");
$langmsg['img'][22] = x("Категория:");
$langmsg['img'][23] = x("Имя файла");
$langmsg['img'][24] = x("Размер файла");
$langmsg['img'][25] = x("Uploader");
$langmsg['img'][26] = x("URL");
$langmsg['img'][27] = x("Добавить в категорию");
$langmsg['img'][28] = x("Удалить из категории");
$langmsg['img'][29] = x("Загруженные изображения");
$langmsg['img'][30] = x("Файл с таким именем уже существует.");
$langmsg['img'][31] = x("Все категории");
$langmsg['img'][32] = x("Не удается записать в папке для закачанных файлов. CHMOD этого каталога 777");


$langmsg['personal'][0] = x("Личный Функции");
$langmsg['personal'][1] = x("Изменить ваши регистрационные данные ниже.");
$langmsg['personal'][2] = x("Персональные настройки для");
$langmsg['personal'][3] = x("Аватар URL:");
$langmsg['personal'][4] = x("Адрес электронной почты:");
$langmsg['personal'][5] = x("Оповещения о сообщениях:");
$langmsg['personal'][6] = x("Получить предупреждены о непрочитанных сообщениях о первоначальных Логин?");
$langmsg['personal'][7] = x("Новый пароль:");
$langmsg['personal'][8] = x("(оставьте пустым, чтобы сохранить текущий)");
$langmsg['personal'][9] = x("Подтвердите пароль:");
$langmsg['personal'][10] = x("Адрес электронной почты должен быть введен.");
$langmsg['personal'][11] = x("Настройка обновления.");
$langmsg['personal'][12] = x("Пароли не совпадают.");
$langmsg['personal'][13] = x("Включить WYSIWYG редактор?");


$langmsg['login'][0] = x("Пожалуйста, Войти");
$langmsg['login'][1] = x("Имя:");
$langmsg['login'][2] = x("Пароль:");
$langmsg['login'][3] = x("Забыли пароль?");
$langmsg['login'][4] = x("Запомнить меня");
$langmsg['login'][5] = x("Ключ безопасности:");
$langmsg['login'][6] = x("Войти");
$langmsg['login'][7] = x("Недействительный ключ безопасности");
$langmsg['login'][8] = x("Неверное имя или пароль");
$langmsg['login'][9] = x("Введите этот код");


$langmsg['profile'][0] = x("Изменить профиль");
$langmsg['profile'][1] = x("Изменить профиль ниже.");
$langmsg['profile'][2] = x("Имя:");
$langmsg['profile'][3] = x("Возраст:");
$langmsg['profile'][4] = x("Расположение:");
$langmsg['profile'][5] = x("Пол:");
$langmsg['profile'][6] = x("Профиль фото:");
$langmsg['profile'][7] = x("Домашняя страница:");
$langmsg['profile'][8] = x("Интересы:");
$langmsg['profile'][9] = x("Увлечения:");
$langmsg['profile'][10] = x("Род занятий:");
$langmsg['profile'][11] = x("Любимая Цитата:");
$langmsg['profile'][12] = x("Мужчина");
$langmsg['profile'][13] = x("Женщина");
$langmsg['profile'][14] = x("Профиль обновляется.");
$langmsg['profile'][15] = x("Никто");


$langmsg['accounts'][0] = x("Счета");
$langmsg['accounts'][1] = x("Счетам.");
$langmsg['accounts'][2] = x("Имя пользователя");
$langmsg['accounts'][3] = x("Уровень доступа");
$langmsg['accounts'][4] = x("Количество должностей");
$langmsg['accounts'][5] = x("Количество комментариев");
$langmsg['accounts'][6] = x("Создать новую учетную запись.");
$langmsg['accounts'][7] = x("Имя учетной записи:");
$langmsg['accounts'][8] = x("Электронная почта:");
$langmsg['accounts'][9] = x("Новый пароль:");
$langmsg['accounts'][10] = x("Подтвердите пароль:");
$langmsg['accounts'][11] = x("Уровень доступа:");
$langmsg['accounts'][12] = x("Новая учетная запись.");
$langmsg['accounts'][13] = x("Изменение учетной записи.");
$langmsg['accounts'][14] = x("Адрес электронной почты должен быть введен.");
$langmsg['accounts'][15] = x("Счет обновляется.");
$langmsg['accounts'][16] = x("Пароли не совпадают.");
$langmsg['accounts'][17] = x("Имя учетной записи должно быть введено.");
$langmsg['accounts'][18] = x("Счет именем уже существует. Пожалуйста, выберите другое.");
$langmsg['accounts'][19] = x("Пароль должен быть введен.");
$langmsg['accounts'][20] = x("Учетная запись создана.");
$langmsg['accounts'][21] = x("Следующие счета должны быть удалены:");
$langmsg['accounts'][22] = x("Вы не можете удалять свои собственные счета.");
$langmsg['accounts'][23] = x("(Оставьте пустым, чтобы сохранить текущий)");
$langmsg['accounts'][24] = x("Счету уже использует этот адрес, пожалуйста, выберите другое.");
$langmsg['accounts'][25] = x("Пожалуйста, введите имя учетной записи");
$langmsg['accounts'][26] = x("Файлы");
$langmsg['accounts'][27] = x("Изображение");


$langmsg['access'][0] = x("Уровни доступа");
$langmsg['access'][1] = x("Создать новый уровень доступа.");
$langmsg['access'][2] = x("Имя:");
$langmsg['access'][3] = x("Какие статьи может этого уровня доступа?");
$langmsg['access'][4] = x("Зарегистрировано:");
$langmsg['access'][5] = x("Уровни доступа:");
$langmsg['access'][6] = x("Banned IPs:");
$langmsg['access'][7] = x("Категории:");
$langmsg['access'][8] = x("Комментарии:");
$langmsg['access'][9] = x("Справка:");
$langmsg['access'][10] = x("Загрузку изображений:");
$langmsg['access'][11] = x("Новости:");
$langmsg['access'][12] = x("Persional Функции:");
$langmsg['access'][13] = x("Личные сообщения:");
$langmsg['access'][14] = x("Профиль:");
$langmsg['access'][15] = x("RSS-каналы:");
$langmsg['access'][16] = x("Смайлики:");
$langmsg['access'][17] = x("Конфигурация:");
$langmsg['access'][18] = x("Шаблоны:");
$langmsg['access'][19] = x("Слова фильтры:");
$langmsg['access'][20] = x("Какие категории могут этот пост в уровне доступа?");
$langmsg['access'][21] = x("Все:");
$langmsg['access'][22] = x("Какую должность этого уровня может изменить?");
$langmsg['access'][23] = x("Admin (Все):");
$langmsg['access'][24] = x("Моделирование (собственные + Members):");
$langmsg['access'][25] = x("Член (собственная):");
$langmsg['access'][26] = x("Есть сообщения этого уровня доступа автоматического одобрения?");
$langmsg['access'][27] = x("Может ли этот уровень доступа утвердить должности?");
$langmsg['access'][28] = x("Может ли этот уровень доступа использовать HTML?");
$langmsg['access'][29] = x("Разрешить проводки без выбора категории?");
$langmsg['access'][30] = x("Уровни доступа удалены:");
$langmsg['access'][31] = x("Следующие уровни доступа, которые не были удалены, потому что они имеют 1 или более счетов, возложенные на них:");
$langmsg['access'][32] = x("Изменить уровень доступа ниже.");
$langmsg['access'][33] = x("Пожалуйста, введите название для этого уровня доступа.");
$langmsg['access'][34] = x("Уровень доступа обновляется.");
$langmsg['access'][35] = x("Уровень доступа с таким именем уже существует, выберите другой.");
$langmsg['access'][36] = x("Пожалуйста, выберите, какие должности этого уровня может редактировать каждый.");
$langmsg['access'][37] = x("Пожалуйста, выберите эту должность, если уровень доступа's Get Auto утвержденной");
$langmsg['access'][38] = x("Пожалуйста, выберите Если этого уровня доступа могут одобрять сообщения");
$langmsg['access'][39] = x("Пожалуйста, выберите Если этого уровня доступа можно использовать HTML");
$langmsg['access'][40] = x("Пожалуйста, выберите, если это уровень доступа отправлять без выбора категорий");
$langmsg['access'][41] = x("Уровень доступа создана.");
$langmsg['access'][42] = x("Уровни доступа.");
$langmsg['access'][43] = x("Имя");
$langmsg['access'][44] = x("Доступ");
$langmsg['access'][45] = x("Счета");
$langmsg['access'][46] = x("Пользователь");
$langmsg['access'][47] = x("Модератор");
$langmsg['access'][48] = x("Администратор");
$langmsg['access'][49] = x("File Uploads");
$langmsg['access'][50] = x("Может ли этот уровень доступа зрения пользователей IP-адресов?");
$langmsg['access'][51] = x("Какие файлы & Образы могут этого уровня доступа править?");
$langmsg['access'][52] = x("Собственный");
$langmsg['access'][53] = x("Все");



$langmsg['accesslogs'][0] = x("Журналы доступа");
$langmsg['accesslogs'][1] = x("Имя пользователя");
$langmsg['accesslogs'][2] = x("Попытка");
$langmsg['accesslogs'][3] = x("IP");
$langmsg['accesslogs'][4] = x("Свидание");
$langmsg['accesslogs'][5] = x("Доступ к журналам");
$langmsg['accesslogs'][6] = x("Успешная");
$langmsg['accesslogs'][7] = x("Usuccessful");


$langmsg['filters'][0] = x("Слова Фильтры");
$langmsg['filters'][1] = x("Добавлен фильтр.");
$langmsg['filters'][2] = x("Фильтр удаляется.");
$langmsg['filters'][3] = x("Все слова ниже, будут удалены из всех комментариев.");
$langmsg['filters'][4] = x("Отфильтровано Word");
$langmsg['filters'][5] = x("Заменить");
$langmsg['filters'][6] = x("Удалить");
$langmsg['filters'][7] = x("Добавить новый фильтр");


$langmsg['rss'][0] = x("RSS-каналы");
$langmsg['rss'][1] = x("Изменить ваш RSS Feed ниже настройки");
$langmsg['rss'][2] = x("Новости места где вы будете показаны ваши новости, например http://yourdomain.com/ или http://yourdomain.com/index");
$langmsg['rss'][3] = x("Название ленты:");
$langmsg['rss'][4] = x("Новости Расположение:");
$langmsg['rss'][5] = x("Название Вашей RSS Feed:");
$langmsg['rss'][6] = x("Описание Вашего RSS Feed:");
$langmsg['rss'][7] = x("Кодировка:");
$langmsg['rss'][8] = x("Язык:");
$langmsg['rss'][9] = x("Количество сообщений для отображения:");
$langmsg['rss'][10] = x("0 = все");
$langmsg['rss'][11] = x("Категория для отображения:");
$langmsg['rss'][12] = x("Показать сообщения, которые не были присвоены категории?");
$langmsg['rss'][13] = x("Rss код:");
$langmsg['rss'][14] = x("Изменить способ отображения Вашего канала");
$langmsg['rss'][15] = x("Отображает название рассказа.");
$langmsg['rss'][16] = x("Показывает рассказа о событиях.");
$langmsg['rss'][17] = x("Показывает историю новости.");
$langmsg['rss'][18] = x("Показывает категорий каждую должность был назначен.");
$langmsg['rss'][19] = x("Показывает URL для конкретной должности.");
$langmsg['rss'][20] = x("Отображение даты история была опубликована.");
$langmsg['rss'][21] = x("Показывает часового пояса.");
$langmsg['rss'][22] = x("Показывает метку каждой должности.");
$langmsg['rss'][23] = x("Показывает автора рассказа.");
$langmsg['rss'][24] = x("Показывает аватары пользователей, если они есть.");
$langmsg['rss'][25] = x("Показывает уникальный идентификатор каждого рассказа.");
$langmsg['rss'][26] = x("Показывает количество комментариев к каждой новости посту.");
$langmsg['rss'][27] = x("Пожалуйста, введите feedname");
$langmsg['rss'][28] = x("Пожалуйста, введите Новости месте");
$langmsg['rss'][29] = x("Пожалуйста, введите название");
$langmsg['rss'][30] = x("Введите описание");
$langmsg['rss'][31] = x("Пожалуйста, введите кодировки");
$langmsg['rss'][32] = x("Пожалуйста, введите язык");
$langmsg['rss'][33] = x("Пожалуйста, введите сумму для отображения");
$langmsg['rss'][34] = x("RSS канал, созданный");
$langmsg['rss'][35] = x("Канал с таким именем уже существует, пожалуйста, выберите другое");
$langmsg['rss'][36] = x("Обновлен RSS Feed");
$langmsg['rss'][37] = x("RSS-каналы");
$langmsg['rss'][38] = x("RSS Feed (ы) удален.");
$langmsg['rss'][39] = x("Имя");
$langmsg['rss'][40] = x("Категория");
$langmsg['rss'][41] = x("URL");
$langmsg['rss'][42] = x("Создайте новую RSS-канала.");
$langmsg['rss'][43] = x("Показывает дружественные Название рассказа");


$langmsg['smilies'][0] = x("Смайлики");
$langmsg['smilies'][1] = x("Это полезно, если вы хотите обновить расположения всех ваших смайликов сразу.");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("Замените:");
$langmsg['smilies'][4] = x("Заменить на:");
$langmsg['smilies'][5] = x("Все пути обновления.");
$langmsg['smilies'][6] = x("Создать новый Смайл");
$langmsg['smilies'][7] = x("Путь:");
$langmsg['smilies'][8] = x("Кей-код:");
$langmsg['smilies'][9] = x("Пожалуйста, введите путь к смайлик.");
$langmsg['smilies'][10] = x("Пожалуйста, введите коды для этого смайлика.");
$langmsg['smilies'][11] = x("Кей уже используется. Пожалуйста, выберите другой код.");
$langmsg['smilies'][12] = x("Smiley добавил.");
$langmsg['smilies'][13] = x("Вы уверены, что хотите удалить этот смайлик?");
$langmsg['smilies'][14] = x("Smiley удалены.");
$langmsg['smilies'][15] = x("Изменить смайлик ниже");
$langmsg['smilies'][16] = x("Smiley:");
$langmsg['smilies'][17] = x("Smiley обновляется.");
$langmsg['smilies'][18] = x("Смайлики были удалены");
$langmsg['smilies'][19] = x("Пожалуйста, выберите смайлик которой вы хотели бы изменить.");
$langmsg['smilies'][20] = x("Smiley");
$langmsg['smilies'][21] = x("Включить новый смайлик.");
$langmsg['smilies'][22] = x("Обновление пути всех смайликов");


$langmsg['system'][0] = x("Конфигурация системы");
$langmsg['system'][1] = x("Изменение конфигурации систем.");
$langmsg['system'][2] = x("Новости");
$langmsg['system'][3] = x("Количество новостей на странице:");
$langmsg['system'][4] = x("В каком порядке новость отображается в:");
$langmsg['system'][5] = x("DESC");
$langmsg['system'][6] = x("ASC");
$langmsg['system'][7] = x("Дата & время формат новостей:");
$langmsg['system'][8] = x("Смотрите здесь");
$langmsg['system'][9] = x("Показать аватары:");
$langmsg['system'][10] = x("Разделитель для отдельных категорий при отображении новостей:");
$langmsg['system'][11] = x("Комментариев");
$langmsg['system'][12] = x("Количество комментариев на странице:");
$langmsg['system'][13] = x("В каком порядке комментария отображаются:");
$langmsg['system'][14] = x("Дата & время формат для комментариев:");
$langmsg['system'][15] = x("Максимальная длина комментария:");
$langmsg['system'][16] = x("Показать комментарии в новом окне:");
$langmsg['system'][17] = x("Время задержки после публикации комментариев (Защита от спама):");
$langmsg['system'][18] = x("Секунды");
$langmsg['system'][19] = x("Спам сообщения:");
$langmsg['system'][20] = x("Новый комментарий в сообщении:");
$langmsg['system'][21] = x("Новый комментарий утверждения сообщения:");
$langmsg['system'][22] = x("Использовать рисунок проверка на комментарии вида:");
$langmsg['system'][23] = x("Дружественные URL-адресов");
$langmsg['system'][24] = x("Включите дружественные URL:");
$langmsg['system'][25] = x("Расширение файла:");
$langmsg['system'][26] = x("Префикс:");
$langmsg['system'][27] = x("Каталог файла:");
$langmsg['system'][28] = x("Регистрация");
$langmsg['system'][29] = x("Разрешить пользователям регистрировать:");
$langmsg['system'][30] = x("Уровень доступа для новых пользователей:");
$langmsg['system'][31] = x("Другой");
$langmsg['system'][32] = x("Часовой пояс:");
$langmsg['system'][33] = x("Разрешенные типы файлов загруженных изображений:");
$langmsg['system'][34] = x("Путем добавления изображений:");
$langmsg['system'][35] = x("Нет доступа к сообщениям об ошибке:");
$langmsg['system'][36] = x("Настройка обновления.");
$langmsg['system'][37] = x("Время задержки после использования Отправить (Защита от спама):");
$langmsg['system'][38] = x("Notifications");
$langmsg['system'][39] = x("Получать уведомления по электронной почте о новых комментариях:");
$langmsg['system'][40] = x("Получать уведомления по почте о новых регистраций:");
$langmsg['system'][41] = x("Разрешить только зарегистрированные пользователи комментарий:");
$langmsg['system'][42] = x("Отправки уведомлений по этому электронному адресу:");
$langmsg['system'][43] = x("Разрешенные типы файлов загруженных файлов:");
$langmsg['system'][44] = x("Получать уведомления по почте о несанкционированных сообщений Новости:");
$langmsg['system'][45] = x("Открытый ключ");
$langmsg['system'][46] = x("Закрытый ключ");
$langmsg['system'][47] = x("Сценарий пути");
$langmsg['system'][48] = x("Разрешить зарегистрированным пользователям удалять свои комментарии:");
$langmsg['system'][49] = x("Проверка использования изображения на бланке Логин индекс:");
$langmsg['system'][50] = x("Использовать рисунок проверки на регистрационную форму:");
$langmsg['system'][51] = x("Дата и время для файлов формата:");
$langmsg['system'][52] = x("Show \"Работает на\" под вашей новости:");


$langmsg['recover'][0] = x("Password Recovery");
$langmsg['recover'][1] = x("Введите электронный адрес учетной записи, вы хотите, чтобы сбросить пароль.");
$langmsg['recover'][2] = x("Электронная почта:");
$langmsg['recover'][3] = x("Вы или кто-то просил для сброса пароля перейдите по ссылке ниже, чтобы сделать это.");
$langmsg['recover'][4] = x("Нажмите здесь, чтобы изменить свой пароль");
$langmsg['recover'][5] = x("Электронной почты было отправлено");
$langmsg['recover'][6] = x("Счет, что электронная почта не существует, пожалуйста, обращайтесь к администратору.");
$langmsg['recover'][7] = x("Новый пароль");
$langmsg['recover'][8] = x("Пожалуйста, введите ваш новый пароль.");
$langmsg['recover'][9] = x("Невозможно отправить письмо для восстановления, пожалуйста, свяжитесь с вашим системным администратором.");
$langmsg['recover'][10] = x("Подтвердите пароль:");
$langmsg['recover'][11] = x("Пароли не совпадают.");
$langmsg['recover'][12] = x("Ваш пароль был обновлен.");
$langmsg['recover'][13] = x("с дальнейшими инструкциями о получении вашей учетной записи.");


$langmsg['templates'][0] = x("Шаблоны");
$langmsg['templates'][1] = x("Создать новый шаблон.");
$langmsg['templates'][2] = x("Имя:");
$langmsg['templates'][3] = x("Изменение способа отображения вашей новости.");
$langmsg['templates'][4] = x("Отображает название рассказа.");
$langmsg['templates'][5] = x("Показывает рассказа о событиях.");
$langmsg['templates'][6] = x("Показывает историю новости.");
$langmsg['templates'][7] = x("Отображение даты история была опубликована.");
$langmsg['templates'][8] = x("Показывает категорий каждую должность был назначен.");
$langmsg['templates'][9] = x("Показывает автора рассказа.");
$langmsg['templates'][10] = x("Показывает аватары пользователей, если они есть.");
$langmsg['templates'][11] = x("Показывает уникальный идентификатор каждого рассказа.");
$langmsg['templates'][12] = x("Показывает IP адрес автора. (Показывает только, если вы вошли в систему)");
$langmsg['templates'][13] = x("Показывает ссылки на Читайте полный пост");
$langmsg['templates'][14] = x("Покажет ваш адрес электронной почты.");
$langmsg['templates'][15] = x("Будет ли создать ссылку на адрес электронной почты.");
$langmsg['templates'][16] = x("Будет ли создать ссылку на свой профиль.");
$langmsg['templates'][17] = x("Показывает количество комментариев к каждой новости посту.");
$langmsg['templates'][18] = x("Будет ли создать ссылку на комментарии.");
$langmsg['templates'][19] = x("Все положил между этими тегами, будет показываться только если прошли идентификацию");
$langmsg['templates'][20] = x("Путь к смайлы");
$langmsg['templates'][21] = x("Комментариев");
$langmsg['templates'][22] = x("Изменение способа отображения комментариев.");
$langmsg['templates'][23] = x("Отображает автора комментария.");
$langmsg['templates'][24] = x("Показывает сообщение.");
$langmsg['templates'][25] = x("Показывает аватары пользователей, если они есть.");
$langmsg['templates'][26] = x("Показывает IP адрес автора. (Показывает только, если вы вошли в систему)");
$langmsg['templates'][27] = x("Показывает уникальный идентификатор каждый комментарий.");
$langmsg['templates'][28] = x("Показывает адрес электронной почты пользователя, который комментирует.");
$langmsg['templates'][29] = x("Будет ли создать ссылку на пользователей электронной почты.");
$langmsg['templates'][30] = x("Показывает дату комментарий был опубликован.");
$langmsg['templates'][31] = x("Все положил между этими тегами, будет показываться только если прошли идентификацию");
$langmsg['templates'][32] = x("Комментариев форма");
$langmsg['templates'][33] = x("Это важно при редактировании этого держать все в поле ввода имен и идентификаторов же иначе оно не будет работать. Также обратите внимание на форму onsubmit атрибутом useajax ='', да или нет определяет, AJAX используется, когда пользователь отправляет комментарии.");
$langmsg['templates'][34] = x("Отображение идентификатора новости посту.");
$langmsg['templates'][35] = x("Отображает категории идентификатор Новости должность.");
$langmsg['templates'][36] = x("Покажет свое имя пользователя, если прошли идентификацию");
$langmsg['templates'][37] = x("Будет ли показывать ваше сообщение, если прошли идентификацию");
$langmsg['templates'][38] = x("Появится сообщение.");
$langmsg['templates'][39] = x("Будут показаны все смайлы.");
$langmsg['templates'][40] = x("Новости Pagination");
$langmsg['templates'][44] = x("Комментариев Pagination");
$langmsg['templates'][45] = x("Показывает предыдущее ссылку, если оно есть.");
$langmsg['templates'][46] = x("Показывает следующую ссылку, если оно есть.");
$langmsg['templates'][47] = x("Покажет количество страниц, например: 1 2 3 4.");
$langmsg['templates'][48] = x("Профили");
$langmsg['templates'][49] = x("Изменить способ отображения профилями пользователей.");
$langmsg['templates'][50] = x("Показывает пользователей Имя пользователя.");
$langmsg['templates'][51] = x("Показывает имя пользователя.");
$langmsg['templates'][52] = x("Показывает возраст пользователей.");
$langmsg['templates'][53] = x("Показывает места пользователей.");
$langmsg['templates'][54] = x("Показывает секс-бизнеса.");
$langmsg['templates'][55] = x("Создайте ссылку на главную страницу пользователи.");
$langmsg['templates'][56] = x("Показывает пользователей интересы.");
$langmsg['templates'][57] = x("Показывает пользователей хобби.");
$langmsg['templates'][58] = x("Показывает пользователей оккупации.");
$langmsg['templates'][59] = x("Показывает пользователей любимая цитата.");
$langmsg['templates'][60] = x("Показать фотографию профиля пользователя.");
$langmsg['templates'][61] = x("Новости Структура");
$langmsg['templates'][62] = x("Здесь вы можете управлять phyiscal тем, как отображается каждая новость элемента, например, если вы хотите, чтобы pagintation будет отображаться над вашим новости, а также под ним вы можете сделать это здесь.");
$langmsg['templates'][63] = x("Отображения сообщений Новости.");
$langmsg['templates'][64] = x("Отображает Новости pagintation.");
$langmsg['templates'][65] = x("Комментариев структура");
$langmsg['templates'][66] = x("Здесь вы можете управлять phyiscal тем, как каждая новость элемента отображается при просмотре комментариев, например, если вы хотите, чтобы pagintation будет отображаться над вашим замечаниям, а также под ним вы можете сделать это здесь.");
$langmsg['templates'][67] = x("Отображает одну должность новостей при просмотре комментариев");
$langmsg['templates'][68] = x("Отображает ваши замечания.");
$langmsg['templates'][69] = x("Отображает комментарий pagintation.");
$langmsg['templates'][70] = x("Отображает комментарий форме.");
$langmsg['templates'][71] = x("Регистрационная форма");
$langmsg['templates'][72] = x("Здесь вы контролировать форму, что позволяет пользователям регистрироваться. Важно, чтобы держать всех в поле ввода имен и идентификаторов же в противном случае это не будет работать.");
$langmsg['templates'][73] = x("Имя пользователя, когда пользователь вводит.");
$langmsg['templates'][74] = x("Пароль пользователь вводит.");
$langmsg['templates'][75] = x("Появляется сообщение об ошибке, если остается пустым.");
$langmsg['templates'][76] = x("Пожалуйста, введите имя.");
$langmsg['templates'][77] = x("Шаблоны созданы.");
$langmsg['templates'][78] = x("Пожалуйста, выберите другое имя.");
$langmsg['templates'][79] = x("Изменение шаблонов для ее изменения, как будут отображаться Ваши новости и комментарии.");
$langmsg['templates'][80] = x("Новости");
$langmsg['templates'][81] = x("Template обновляется.");
$langmsg['templates'][82] = x("Шаблон с таким именем уже существует. Пожалуйста, выберите другое имя");
$langmsg['templates'][83] = x("Не удается удалить шаблон Thats в использовании");
$langmsg['templates'][84] = x("Выбранный шаблон (ы) удалены");
$langmsg['templates'][85] = x("шаблон (ы) скопирован");
$langmsg['templates'][86] = x("Выберите имя шаблона ниже, чтобы править.");
$langmsg['templates'][87] = x("Выбранный шаблон.");
$langmsg['templates'][88] = x("Имя");
$langmsg['templates'][89] = x("Закладки");
$langmsg['templates'][90] = x("Создать новый шаблон.");
$langmsg['templates'][91] = x("Выберите");
$langmsg['templates'][92] = x("Показывает просмотра каждого рассказа.");
$langmsg['templates'][93] = x("Показывает изображение рейтинге звезд.");
$langmsg['templates'][94] = x("Показывает текущий рейтинг за историю.");
$langmsg['templates'][95] = x("Показывает количество раз в истории была оценена.");
$langmsg['templates'][96] = x("Показывает рейтингов форме.");
$langmsg['templates'][98] = x("Показывает отправить форму.");
$langmsg['templates'][99] = x("Показывает места пользователей");
$langmsg['templates'][100] = x("Закачанных файлов");
$langmsg['templates'][101] = x("Контроль Как показали загруженных файлов.");
$langmsg['templates'][102] = x("Дата, когда файл был загружен.");
$langmsg['templates'][103] = x("Название файла.");
$langmsg['templates'][104] = x("Имя файла.");
$langmsg['templates'][105] = x("Размер этого файла.");
$langmsg['templates'][106] = x("URL, чтобы загрузить файл.");
$langmsg['templates'][107] = x("Имя пользователя в Uploader.");
$langmsg['templates'][108] = x("Количество раз, что файл был загружен.");
$langmsg['templates'][109] = x("Показать файлы, связанные с должностями Новости.");
$langmsg['templates'][110] = x("Показать всех файлов, связанных с должностями Новости.");
$langmsg['templates'][111] = x("Показывает только 3 страницах в то время,");
$langmsg['templates'][112] = x("Ссылка на первой странице, показывает, если в настоящее время не на первой странице.");
$langmsg['templates'][113] = x("Ссылка на последнюю страницу, свидетельствует если не в настоящее время на странице последней странице.");
$langmsg['templates'][114] = x("Показывает количество слов для этого поста");
$langmsg['templates'][115] = x("Показывает дружественные Название рассказа");
$langmsg['templates'][116] = x("Отображает reCAPTCHA элемента");
$langmsg['templates'][117] = x("Создает ссылку удалить комментарии.");
$langmsg['templates'][118] = x("Отображает Логин форме, только если это необходимо Войти.");
$langmsg['templates'][119] = x("Логин форма");
$langmsg['templates'][120] = x("Контроль как это отображено Логин форме.");
$langmsg['templates'][121] = x("Отображает электронной почте пользователь вошел.");
$langmsg['templates'][122] = x("Логин отображает сообщение об ошибке.");
$langmsg['templates'][123] = x("Отображает reCAPTCHA элемента.");
$langmsg['templates'][124] = x("Отображает имя пользователя, введенное пользователем.");
$langmsg['templates'][125] = x("Если войти в систему, отображается имя пользователя.");
$langmsg['templates'][126] = x("Отображает форму поиска. Все имена и идентификаторы должен оставаться неизменным.");
$langmsg['templates'][127] = x("Отображает количество для каждого результата поиска");
$langmsg['templates'][128] = x("Форматы, как получить результаты поиска отображаются. Получить повторяется для каждого результата.");
$langmsg['templates'][129] = x("Заместители между выводом 1 и 2 для каждой строки.");
$langmsg['templates'][130] = x("Отображает текущий номер страницы.");
$langmsg['templates'][131] = x("Отображает предыдущий номер страницы.");
$langmsg['templates'][132] = x("Отображает следующий номер страницы.");
$langmsg['templates'][133] = x("Отображает дружественных название нашей статьи.");
$langmsg['templates'][134] = x("Форма поиска");
$langmsg['templates'][135] = x("Результаты поиска");
$langmsg['templates'][136] = x("Загруженные файлы");


$langmsg['uploadedfiles'][0] = x("File Uploads");
$langmsg['uploadedfiles'][1] = x("Загрузить новый файл");
$langmsg['uploadedfiles'][2] = x("Загрузить файл");
$langmsg['uploadedfiles'][4] = x("Выберите файл:");
$langmsg['uploadedfiles'][5] = x("Файл (ы) удален.");
$langmsg['uploadedfiles'][6] = x("Дата файла");
$langmsg['uploadedfiles'][7] = x("Был Ошибка загрузки файла, пожалуйста, попробуйте еще раз.");
$langmsg['uploadedfiles'][8] = x("Неверное расширение файла.");
$langmsg['uploadedfiles'][9] = x("Неверный файл.");
$langmsg['uploadedfiles'][10] = x("Файлы удалены из категорий.");
$langmsg['uploadedfiles'][11] = x("Файл (ы) добавил к категории.");
$langmsg['uploadedfiles'][12] = x("Имя файла");
$langmsg['uploadedfiles'][13] = x("Выберите категорию:");
$langmsg['uploadedfiles'][14] = x("Изменить файла");
$langmsg['uploadedfiles'][15] = x("Название:");
$langmsg['uploadedfiles'][16] = x("Описание:");
$langmsg['uploadedfiles'][17] = x("Обновление файла");
$langmsg['uploadedfiles'][18] = x("Неверный файл");
$langmsg['uploadedfiles'][19] = x("Обновление файла");
$langmsg['uploadedfiles'][20] = x("Миниатюрные");
$langmsg['uploadedfiles'][21] = x("Подробности");
$langmsg['uploadedfiles'][22] = x("Категория:");
$langmsg['uploadedfiles'][23] = x("Название");
$langmsg['uploadedfiles'][24] = x("Размер файла");
$langmsg['uploadedfiles'][25] = x("Uploader");
$langmsg['uploadedfiles'][26] = x("URL");
$langmsg['uploadedfiles'][27] = x("Добавить в категорию");
$langmsg['uploadedfiles'][28] = x("Удалить из категории");
$langmsg['uploadedfiles'][29] = x("Загруженные файлы");
$langmsg['uploadedfiles'][30] = x("Файл с таким именем уже существует.");
$langmsg['uploadedfiles'][31] = x("Сбросить загрузки:");
$langmsg['uploadedfiles'][32] = x("Все категории");
$langmsg['uploadedfiles'][33] = x("Загрузки");
$langmsg['uploadedfiles'][34] = x("Загружено");


$langmsg['admindata'][0] = x("Помощь");
$langmsg['admindata'][1] = x("Добавить новость");
$langmsg['admindata'][2] = x("Личные сообщения");
$langmsg['admindata'][3] = x("Изменить Новости");
$langmsg['admindata'][4] = x("Изменить Комментарии");


$langmsg['submitfield'][0] = x("OK");
$langmsg['submitfield'][1] = x("Preview");
$langmsg['submitfield'][2] = x("Добавить новость");
$langmsg['submitfield'][3] = x("Сохранить");
$langmsg['submitfield'][4] = x("Отправлять");
$langmsg['submitfield'][5] = x("Создать");
$langmsg['submitfield'][6] = x("Обновление");
$langmsg['submitfield'][7] = x("Добавить");
$langmsg['submitfield'][8] = x("Удалить");
$langmsg['submitfield'][9] = x("Восстановления");


$langmsg['selectfield'][0] = x("- Выбрать опцию --");
$langmsg['selectfield'][1] = x("Да");
$langmsg['selectfield'][2] = x("Нет");
$langmsg['selectfield'][3] = x("Удалить");
$langmsg['selectfield'][4] = x("Потребности утверждения");
$langmsg['selectfield'][5] = x("Разрешить комментарии");
$langmsg['selectfield'][6] = x("Утверждения изменений");
$langmsg['selectfield'][7] = x("Утверждение");
$langmsg['selectfield'][8] = x("Комментариев");
$langmsg['selectfield'][9] = x("Утвердить");
$langmsg['selectfield'][10] = x("Unapprove");
$langmsg['selectfield'][11] = x("Свидание");
$langmsg['selectfield'][12] = x("Название");
$langmsg['selectfield'][13] = x("Автор");
$langmsg['selectfield'][14] = x("Категории");
$langmsg['selectfield'][15] = x("# Комментариев");
$langmsg['selectfield'][16] = x("Отметить как прочитанные");
$langmsg['selectfield'][17] = x("Отметить как непрочитанное");
$langmsg['selectfield'][18] = x("Сбросить заблокировали кол");
$langmsg['selectfield'][19] = x("Создать копию");
$langmsg['selectfield'][20] = x("Сброс счетчика просмотров");
$langmsg['selectfield'][21] = x("Сбросить оценку");


$langmsg['js'][0] = x("Вы уверены, что хотите удалить это изображение из категории?");
$langmsg['js'][1] = x("Вы уверены, что хотите удалить выбранное изображение (ы)?");
$langmsg['js'][2] = x("Вы уверены, что хотите удалить выбранные сообщения (ы)?");
$langmsg['js'][3] = x("Вы уверены, что хотите удалить выбранный шаблон (ы)?");
$langmsg['js'][4] = x("Вы уверены, что хотите удалить эти IP-адреса?");
$langmsg['js'][5] = x("Вы уверены, что хотите сбросить заблокировали кол для этих адресов");
$langmsg['js'][6] = x("Вы уверены, что хотите удалить эти уровень доступа (ы)?");
$langmsg['js'][7] = x("Вы уверены, что хотите удалить эти категории?");
$langmsg['js'][8] = x("Вы уверены, что хотите удалить эти категории и должности в них?");
$langmsg['js'][9] = x("Вы уверены, что хотите удалить эти категории?");
$langmsg['js'][10] = x("Вы уверены, что хотите удалить эти счета (-ов)?");
$langmsg['js'][11] = x("Вы уверены, что хотите удалить эти счета (ов) и должностей?");
$langmsg['js'][12] = x("Вы уверены, что хотите удалить эти должности (ей)?");
$langmsg['js'][13] = x("Введите текст");
$langmsg['js'][14] = x("Текст");
$langmsg['js'][15] = x("Пожалуйста, введите цвета. Например, красный, желтый, синий (или даже шестнадцатеричные значения)");
$langmsg['js'][16] = x("синий");
$langmsg['js'][17] = x("Введите адрес ссылки");
$langmsg['js'][18] = x("Введите текст, который будет отображаться");
$langmsg['js'][19] = x("Ссылка");
$langmsg['js'][20] = x("Введите размер шрифта");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("Текст для показа?");
$langmsg['js'][23] = x("Адрес электронной почты");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("Пишите мне!");
$langmsg['js'][26] = x("Цитировать текст?");
$langmsg['js'][27] = x("Цитата");
$langmsg['js'][28] = x("Вы уверены, что хотите удалить выбранные комментарии (ы)?");
$langmsg['js'][29] = x("Вы уверены, что хотите удалить выбранные категории?");
$langmsg['js'][30] = x("Начало смайликов ... Пожалуйста, подождите.");
$langmsg['js'][31] = x("Вы уверены, что хотите удалить выбранный файл (ы)?");
$langmsg['js'][32] = x("Вы уверены, что хотите удалить выбранные смайлики?");
$langmsg['js'][33] = x("Вы уверены, что хотите удалить выбранный фильтр (ы)?");

$langmsg['news'][0] = x("Пожалуйста, введите имя.");
$langmsg['news'][1] = x("Введите сообщение.");
$langmsg['news'][2] = x("Недействительный ключ безопасности");
$langmsg['news'][3] = x("Выберите другое имя.");
$langmsg['news'][4] = x("Недействительный ключ безопасности");
$langmsg['news'][5] = x("Результаты поиска:");
$langmsg['news'][6] = x("Новая регистрация отключена.");
$langmsg['news'][7] = x("Ваша учетная запись была создана, теперь вы можете <a href=\"{adminpath}\">Логин здесь.</a>");
$langmsg['news'][8] = x("Пожалуйста, введите имя.");
$langmsg['news'][9] = x("Введите сообщение.");
$langmsg['news'][10] = x("Недействительный ключ безопасности");
$langmsg['news'][11] = x("Выберите другое имя.");
$langmsg['news'][12] = x("Недействительный ключ безопасности");
$langmsg['news'][13] = x("Спасибо за ваш рейтинг.");
$langmsg['news'][14] = x("Вы уже оценили эту статью.");
$langmsg['news'][15] = x("Имя");
$langmsg['news'][16] = x("Электронная почта:");
$langmsg['news'][17] = x("Друзей Email:");
$langmsg['news'][18] = x("Сообщение:");
$langmsg['news'][19] = x("Эй прочтите эту статью я нашел!");
$langmsg['news'][20] = x("Отправить другу");
$langmsg['news'][21] = x("Письмо отправлено.");
$langmsg['news'][22] = x("Пожалуйста, введите свое имя");
$langmsg['news'][23] = x("Пожалуйста, введите Ваш адрес электронной почты");
$langmsg['news'][24] = x("Введите сообщение");
$langmsg['news'][25] = x("Пожалуйста, введите Ваш адрес электронной почты друзей");
$langmsg['news'][27] = x("Пожалуйста, введите правильный адрес электронной почты");
$langmsg['news'][28] = x("Пожалуйста, введите ваши друзья действительный адрес электронной почты");
$langmsg['news'][29] = x("Пожалуйста, введите имя пользователя.");
$langmsg['news'][30] = x("Это имя пользователя уже были приняты, пожалуйста, выберите другое.");
$langmsg['news'][31] = x("Этот адрес уже используется, выберите другой.");
$langmsg['news'][32] = x("Пожалуйста, введите адрес электронной почты.");
$langmsg['news'][33] = x("Пожалуйста, введите адрес электронной почты.");
$langmsg['news'][34] = x("Пожалуйста, введите пароль.");
$langmsg['news'][35] = x("Пожалуйста, подтвердите свой пароль.");
$langmsg['news'][36] = x("Введенные вами пароли не совпадают.");
$langmsg['news'][37] = x("Неправильный ключ безопасности.");
$langmsg['news'][38] = x("Пожалуйста, подождите");
$langmsg['news'][39] = x("Был проблема отправки вашего сообщения, пожалуйста, обращайтесь к администратору.");
$langmsg['news'][40] = x("Вы должны войти в систему, чтобы оставить комментарий.");
$langmsg['news'][41] = x("Новый комментарий в домене {domain}");
$langmsg['news'][42] = x("Название: {name} \n Email / URL: {email} \n IP: {ip} сообщение: {message}");
$langmsg['news'][43] = x("Новая регистрация домена на {domain}");
$langmsg['news'][44] = x("Название: {name} \n имя: {email} \n IP: {ip}");
$langmsg['news'][45] = x("секунд перед отправкой письма.");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("Имя");
$langmsg['news'][48] = x("Email / URL");
$langmsg['news'][49] = x("Сообщение");
$langmsg['news'][50] = x("Введите название статьи");
$langmsg['news'][51] = x("Резюме");
$langmsg['news'][52] = x("Нет категорий");
$langmsg['news'][53] = x("День");
$langmsg['news'][54] = x("Дата эта статья была размещена");
$langmsg['news'][55] = x("Архив");



$langmsg['shortmonths'][0] = x("Янв");
$langmsg['shortmonths'][1] = x("Февраль");
$langmsg['shortmonths'][2] = x("Мар");
$langmsg['shortmonths'][3] = x("Апрель");
$langmsg['shortmonths'][4] = x("Мочь");
$langmsg['shortmonths'][5] = x("Июнь");
$langmsg['shortmonths'][6] = x("Июль");
$langmsg['shortmonths'][7] = x("Август");
$langmsg['shortmonths'][8] = x("Сентябрь");
$langmsg['shortmonths'][9] = x("Октябрь");
$langmsg['shortmonths'][10] = x("Ноябрь");
$langmsg['shortmonths'][11] = x("Декабрь");


$langmsg['months'][0] = x("Январь");
$langmsg['months'][1] = x("Февраль");
$langmsg['months'][2] = x("Март");
$langmsg['months'][3] = x("Апрель");
$langmsg['months'][4] = x("Мочь");
$langmsg['months'][5] = x("Июнь");
$langmsg['months'][6] = x("Июль");
$langmsg['months'][7] = x("Август");
$langmsg['months'][8] = x("Сентябрь");
$langmsg['months'][9] = x("Октябрь");
$langmsg['months'][10] = x("Ноябрь");
$langmsg['months'][11] = x("Декабрь");


$langmsg['search'][0] = x("Текущие новости");
$langmsg['search'][1] = x("Архив новостей");
$langmsg['search'][2] = x("Сначала новые");
$langmsg['search'][3] = x("Старые первым");
$langmsg['search'][4] = x("Поиск");
$langmsg['search'][5] = x("Диапазон дат");


$langmsg['install'][0] = x("Подключения к базе данных информация");
$langmsg['install'][1] = x("Введите ваше данные сервера MySQL ниже.");
$langmsg['install'][2] = x("Сервер:");
$langmsg['install'][3] = x("(как правило Localhost)");
$langmsg['install'][4] = x("Имя пользователя:");
$langmsg['install'][5] = x("Пароль:");
$langmsg['install'][6] = x("База данных:");
$langmsg['install'][7] = x("Проверить подключение");
$langmsg['install'][8] = x("Подключение к серверу:");
$langmsg['install'][9] = x("Выбор базы данных:");
$langmsg['install'][10] = x("Не удается записать в DB.php, пожалуйста, этот файл CHMOD 777");
$langmsg['install'][11] = x("Информация об учетной записи");
$langmsg['install'][12] = x("Введите Ваши данные ниже. Эта информация будет использоваться для Логин.");
$langmsg['install'][13] = x("Электронная почта:");
$langmsg['install'][14] = x("Подтвердите пароль:");
$langmsg['install'][15] = x("Продолжить");
$langmsg['install'][16] = x("Введите имя пользователя");
$langmsg['install'][17] = x("Пожалуйста, введите адрес электронной почты");
$langmsg['install'][18] = x("Пожалуйста, введите пароль");
$langmsg['install'][19] = x("Пресса Установить, чтобы завершить установку");
$langmsg['install'][20] = x("Ваши пароли не совпадают");
$langmsg['install'][21] = x("Установить");
$langmsg['install'][22] = x("Завершение установки");
$langmsg['install'][23] = x("УСПЕХ!");
$langmsg['install'][24] = x("N-13 новостей был установлен.");
$langmsg['install'][25] = x("Войти в админку.");
$langmsg['install'][26] = x("Порт:");
$langmsg['install'][27] = x("Socket:");
$langmsg['install'][28] = x("Расширение:");
$langmsg['install'][29] = x("(оставьте пустым, по умолчанию)");
$langmsg['install'][30] = x("Установка ... Пожалуйста, подождите.");
$langmsg['install'][31] = x("Mysqli_connect функции не был найден.");
$langmsg['install'][32] = x("Pdo_mysql функции не был найден.");
?>