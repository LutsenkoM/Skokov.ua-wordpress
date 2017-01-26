<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'Skokov');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E-FQ]=]atZVu+<.lD.<7s<=0OD<|pywpEZ(ejqng;T_|g&dZ,-^DOTyre[1;zv&E');
define('SECURE_AUTH_KEY',  '`+x^o=^ASk+F=(,OR0~QL0Xu72W(qqYVHH1O5TisL|Ter^/@Pd%Z.+sh.t8(?Vf;');
define('LOGGED_IN_KEY',    '!)K5[_(/)A5:m/8K_`NGpk</|9Czw:+@0sRO_5@obr:+6%++(-8C=pO)d^+vvyEU');
define('NONCE_KEY',        '|d{+ua[k-rBfAUyH`7jz9f,ZhHw~ivr-9EjL}-h|oCx<c..kxlV$7wtr3k#VbfIX');
define('AUTH_SALT',        'jZW]wANs%e-mTeK>d3b`1FEs0?J1HO6+N]qUuA,Fb1e9OK{._$m<g+@8i $[!]-1');
define('SECURE_AUTH_SALT', 'y.SO>!hUmn tJKL~Eu8|[9<OAD}@PAtU-aLC5~$?9V(S-*-.+$HcRO97H5Rdl*+B');
define('LOGGED_IN_SALT',   'B!%|6a=w_Xwrq}pT-Na!Y3%!+bsTIxE6-uI&^P<Q@ XOGpElyr+5OLU{M-<m3Xwq');
define('NONCE_SALT',       '-p]?+H-sDJ+,uzI dZ=8> 2~`t6j1Ei~CUtFm^CGeNdn)/.VxG?$?zHyHmWau?$U');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
