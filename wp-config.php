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
define('DB_NAME', 'alpha');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Slhex%GPY>SBlI0Rm`+;`7;{1H99CvveHfMxwt1mg[7BSw<C/B{JOFi:MBY&WZ1L');
define('SECURE_AUTH_KEY',  'rtW.mTTbpMXJYrF_Z/~2rL0kRZLE.]*0}WX+RK1)g-g}i8<BaY/J$&CSa}`$x1aW');
define('LOGGED_IN_KEY',    's886p5cTI$?:1JHN>R.[P~Ead)m*<fXl2V{_a1OUYAtAQpm+-$Zmq~,e9=^TS#>`');
define('NONCE_KEY',        '&m(p@PQ@Gfvl7>0>2,qHB QLQ4G4vM8&poO^-(wP|6hD~zz,B|lw`-0?8*h^3=2_');
define('AUTH_SALT',        'U,2P0p.n%|ny&3?<R}1Gq%#,OmLYB>:aowT_8uL[?vh@wRBj{ltVUS-lEs[^ja I');
define('SECURE_AUTH_SALT', '^vZ;-rx8LZ!odXk,8T./id5i7j0n/[|%{g/iLvu<4+HHjl&4VhR5`$bQN6D`X$Dx');
define('LOGGED_IN_SALT',   '3bh$1Y@>--$d>G-0W6CsOHu:h2:FlAwm*?6.a&;EywR|x1_BWmS~96[o<121xB8a');
define('NONCE_SALT',       'kV+)7i`Ljb]TJ{,!dnf@)kcdx|iL{x6D98RbutPSA2S!F$l7.w%u/qaO67AW96Uj');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'al_';

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
