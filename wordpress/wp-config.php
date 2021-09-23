<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'exampledb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'exampleuser' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'examplepass' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']l)e#QN[-LzcdF%JqEDXd(E]Q|WpAGkOIGNl]8](Ko7we$&O7&XULP!rUFywr&7O' );
define( 'SECURE_AUTH_KEY',  'bwi+J:E``t:P]>T(<igNYD*,tpDUKEr;@d1MTh pKpx=E7=l6b`4qL(#0E_$t:MX' );
define( 'LOGGED_IN_KEY',    '~o}[nOS:CA:+dC35P=mo_) /)RK]tk?~hdA^Eo-~2yC/j-/(Iqka6@f8r5;5m%]=' );
define( 'NONCE_KEY',        'pWx/F~UHJd(?1<@$=U`($:~ccTy^y>] ,Raoc;b2[P=15YrOc&|WU$:&rsjl>)^3' );
define( 'AUTH_SALT',        '%EW.r8-;HL&+oc*--*o$T)np#?2~F@WJSKd]j#cm=YRS|hxAe9`fy3k?TSu)SK$^' );
define( 'SECURE_AUTH_SALT', 'T5xyp^V4Y-Q<|TYwVW)DLJuOCmp/-{C,6=|4,^kAJ[&W_JB{5Usonadk1%w%W7b(' );
define( 'LOGGED_IN_SALT',   'uu[$QRVKw(4 {YiHb$+Mi9{7E1 uifEK.Y2dQ9IA6GSTYx_6>*`hQ?oPs@XL-z&u' );
define( 'NONCE_SALT',       'L}8tBY~WO?*FI(6qhr}^8l|s19aMDu_tb:#BK0p][kBsf-hhPB]99^;p5M5X<=_q' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
