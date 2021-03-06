<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Russian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2017/01/10 23:00:00
|
|        $Author: admin $
+---------------------------------------------------------------+
*/
define("LANINS_001", "Установка e107");
define("LANINS_002", "Этап");
define("LANINS_003", "<1>");
define("LANINS_004", "Выбор Языка");
define("LANINS_005", "Выберите язык для использования во время установки");

define("LANINS_007", "<4>");
define("LANINS_008", "Проверка версий PHP и MySQL / Проверка доступа к файлам");
define("LANINS_009", "Перетестировать доступ к файлам");
define("LANINS_010", "Файл без доступа к записи:");
define("LANINS_010a", "Папка без доступа к записи:");

define("LANINS_012", "Функции MySQL, кажется, не существует. Это скорее означает, что MySQL для PHP не установлен, или PHP небыл скомпилирован с поддержкой MySQL.");
define("LANINS_013", "Не удалось определить вашу версию MySQL. Это не критичная ошибка, поэтому можно продолжить установку, но имейте в виду, что e107 требует MySQL >= 3.23 для функционирования.");
define("LANINS_014", "Доступы к Файлам");
define("LANINS_015", "Версия PHP");

define("LANINS_017", "ПРОЙДЕНО");
define("LANINS_018", "Убедитесь, что все перечисленные файлы существуют и доступны для записи сервером. Это обычно делается с помощью CHMOD 777, но не во всех случаях - свяжитесь с вашим хостинг-провайдером если у вас есть проблемы.");
define("LANINS_019", "Установленная версия PHP на вашем сервере не способна поддерживать e107. e107 требует минимальную версию PHP \".MIN_PHP_VERSION.\" для корректной функции. Обновите вашу версию PHP, или свяжитесь с вашим хостинг-провайдером для обновления.");

define("LANINS_021", "<2>");
define("LANINS_022", "Подробности о MySQL сервере");
define("LANINS_023", "Пожалуйста, введите ваши MySQL настройки здесь.

Если у вас есть root доступ, можно создать новую базу данных, поставив флажок. Если нет, вы должны создать базу данных или использовать существующию.

Если у вас есть только одна база данных, используйте префикс, чтобы другие скрипты могли находится на той-же базе.
Если вы не знаете настроек вашего MySQL, свяжитесь с вашим хостинг-провайдером.");
define("LANINS_024", "MySQL Сервер:");
define("LANINS_025", "Пользователь MySQL:");
define("LANINS_026", "Пароль MySQL:");
define("LANINS_027", "База данных MySQL:");
define("LANINS_028", "Создать базу данных?");
define("LANINS_029", "Префикс таблиц:");
define("LANINS_030", "Адрес сервера MySQL для e107. Он также может содержать номер порта. Например 'hostname:port' или путь на локальный сокет, например \":/path/to/socket\" на локальном компьютере.");
define("LANINS_031", "Имя пользователя MySQL сервера, которое будет использовать e107, для подключения к базе данных");
define("LANINS_032", "Пароль для пользователя, которого вы только что ввели. Не должен содержать одинарные или двойные кавычки.");
define("LANINS_033", "База данных, где e107 находится. Иногда называется схемой. Должна начинаться с буквы. Если пользователь имеет права к созданию базы, вы можете выбрать создание базы данных автоматически, при случае, что она еще не существует.");
define("LANINS_034", "Префикс, который вы хотите чтобы e107 использовал при создании таблиц e107. Полезно для установки нескольких e107 в одной схеме базы данных.");

define("LANINS_036", "<3>");
define("LANINS_037", "Проверка подключения MySQL");
define("LANINS_038", "и создание базы данных");
define("LANINS_039", "Пожалуйста, убедитесь, что вы заполнили все поля. Самое главное - сервера MySQL, Имя пользователя MySQL и базы данных MySQL (это всегда требуется для сервера MySQL)");
define("LANINS_040", "Ошибки");
define("LANINS_041", "e107 не смог подключиться к серверу MySQL используя информацию, которую вы ввели. Пожалуйста, вернитесь на последнюю страницу и убедитесь, что информация является правильной.");
define("LANINS_042", "Подключение к серверу MySQL создано и проверено.");
define("LANINS_043", "Не удалось создать базу данных. Убедитесь, что у вас есть необходимые права для создание базы данных на вашем сервере.");
define("LANINS_044", "База данных создана успешно.");
define("LANINS_045", "Нажмите на кнопку, чтобы перейти на следующий этап.");
define("LANINS_046", "<5>");
define("LANINS_047", "Настройка Администратора");
define("LANINS_048", "Расширение EXIF");
define("LANINS_049", "Введенные пароли не совпадают. Пожалуйста, вернитесь назад и попробуйте еще раз.");
define("LANINS_050", "Расширение XML");
define("LANINS_051", "Установлено");
define("LANINS_052", "Не установлено");


define("LANINS_055", "Подтверждение установки");
define("LANINS_056", "<6>");
define("LANINS_057", "e107 теперь имеет всю информацию, необходимую для завершения установки.

Пожалуйста, нажмите на кнопку, чтобы создать таблицы в базе данных и сохранять все ваши настройки.");
define("LANINS_058", "<7>");
define("LANINS_060", "Не удается прочитать sql datafile. 

Пожалуйста убедитесь, что файл [b]core_sql.php[/b] существует в директории [b]/e107_core/sql[/b].");
define("LANINS_061", "e107 не смог создать все необходимые таблицы базы данных.
Пожалуйста очистите базу данных, и исправьте все ошибки до следующей попытки.");
define("LANINS_069", "e107 успешно установлен!

По причинам безопасности, вы теперь должны поставить права файла [b]e107_config.php[/b] обратно на 644.

Также, удалите install.php из вашего сервера после нажатия кнопки снизу.");
define("LANINS_070", "e107 не смог сохранить основной конфигурационный файл на ваш сервер.

Пожалуйста, убедитесь, что файл [b]e107_config.php[/b] имеет корректные права доступа");
define("LANINS_071", "Установка завершена");
define("LANINS_072", "Имя пользователя администратора");
define("LANINS_073", "Это имя будет использоваться для входа на сайт. Можете использовать его, также, как ваше отображаемое имя");
define("LANINS_074", "Отображаемое имя администратора");
define("LANINS_076", "Пароль администратора");
define("LANINS_077", "Пожалуйста, введите пароль администратора, которые вы хотите использовать здесь");
define("LANINS_078", "Подтверждение пароля администратора");
define("LANINS_079", "Пожалуйста, введите пароль администратора для подтверждения");
define("LANINS_080", "Адрес электронной почты администратора");
define("LANINS_081", "Введите свой адрес электронной почты");


define("LANINS_083", "MySQL сообщил об ошибке:");
define("LANINS_084", "Программа установки не смогла подключиться к базе данных");
define("LANINS_085", "Программа установки не может выбрать базу данных:");
define("LANINS_086", "Имя пользователя администратора, пароль администратора и адрес электронной почты администратора являются обязательными полями. Пожалуйста, вернитесь на последнюю страницу, и убедитесь, что информация правильно введена.");

define("LANINS_105", "Имя базы данных или префикс, которые начинаются с цифр, а затем следует 'e' или 'E' неприемлемы.");
define("LANINS_106", "ПРЕДУПРЕЖДЕНИЕ - e107 не имеет доступа на запись в перечисленные каталоги/файлы. Это не остановит инсталляцию e107, но будет означать, что некоторые функции не доступны. Вам нужно будет изменить права доступа этих файлов для использования этих функций");
define("LANINS_107", "Имя веб-сайта");
define("LANINS_108", "Мой веб-сайт");
define("LANINS_109", "Тема сайта");

define("LANINS_111", "Включить содержание/конфигурации");
define("LANINS_112", "Быстро воспроизвести внешний вид предварительного просмотра темы. (Если имеется)");
define("LANINS_113", "Пожалуйста, введите имя веб-сайта");
define("LANINS_114", "Пожалуйста, выберите тему");
define("LANINS_115", "Название темы");
define("LANINS_116", "Тип темы");
define("LANINS_117", "Настройки веб-сайта");
define("LANINS_118", "Установка плагинов");
define("LANINS_119", "Установить все плагины, которые может потребовать тема.");
define("LANINS_120", "<8>");
define("LANINS_121", "Внимание! Файл e107_config.php не пустой.");
define("LANINS_122", "Возможно система уже, была инсталлирована.");
define("LANINS_123", "Дополнительно: Ваше имя или псевдоним. Оставьте пустым, чтобы использовать имя пользователя");
define("LANINS_124", "Пожалуйста, выберите пароль, состоящий минимум из 8 символов");
define("LANINS_125", "e107 был успешно установлен!");
define("LANINS_126", "В целях безопасности, вы должны теперь поставить права файла e107_config.php обратно на 644.");
define("LANINS_127", "[x] база данных уже существует. Перезаписать ее? (все существующие данные будут удалены)");
define("LANINS_128", "Перезапись");
define("LANINS_129", "База данных не найдена.");

define("LANINS_134", "Установка");
define("LANINS_135", "из");
define("LANINS_136", "Текущая база данных удалена");
define("LANINS_137", "Найдена существующая база данных");

define("LANINS_141", "Пожалуйста, заполните форму ниже с вашими данными MySQL. Если вы не знаете эту информацию, пожалуйста свяжитесь с вашем хостинг-провайдером. Наведите курсор над полем для просмотра подробностей.");
define("LANINS_142", "ВАЖНО: Пожалуйста переименуйте e107.htaccess в .htaccess");
define("LANINS_144", "ВАЖНО: Пожалуйста скопируйте содержание [b]e107.htaccess[/b] в ваш [b].htaccess[/b] файл. Пожалуйста, позаботьтесь, чтобы не перезаписать существующие данные, которые могут там уже быть.");
define("LANINS_145", "e107 v2.x требует PHP [x]. Пожалуйста, обратитесь к вашему хостинг-провайдеру, или прочитате информацию в [y], прежде чем продолжить.");


?>