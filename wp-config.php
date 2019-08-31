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
define( 'DB_NAME', 'wordpress1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Sergey' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1K?aDw}]0h8] ISqj4@2e/?35,USF:i$qoILoOOJnD1rfwE7-_m(Y5|Q@c8Md)X%' );
define( 'SECURE_AUTH_KEY',  '#|:9Z7Jz-|ki;E$@tB xDnMuj#5S4D#TmVvUS2l^Z9v9uudz0K)Iq}P[0GZ9;o2Y' );
define( 'LOGGED_IN_KEY',    'r)BAxh6JMct,.snL-G:BenbuKi1J.Z{_gjp{V3%jw:w;47Rk^e!Z`&RU1g/(|4TW' );
define( 'NONCE_KEY',        'BL6-$-(IuG]qqvM]xeB/5,|!![^77hP2-R3>r53VS(lb}?@SE]X.}o6Xn7Qc1v=V' );
define( 'AUTH_SALT',        'm+rAg8_IMF#0.6M|w6:|Y|VI?W(98[9<IR#z3O<L|%0fS-c$>aGZ<VUkTLG,!0,c' );
define( 'SECURE_AUTH_SALT', 'sM?#s4zzEgi^UPt&yRe3C><;3eGBc`!1dYoX[IT:J~uFIl=b;Lcludo[GT{yf#5/' );
define( 'LOGGED_IN_SALT',   'B+8CA[F?w=4)h((s_3$9SP%)vb(1g,!zFC3~tZ0!#4)#}9#j)1Mvg$x_]vv3(gQl' );
define( 'NONCE_SALT',       '6^~9)MR K,mkOQ1q>IuMI`:ai6uJ],.:hSa+^gV>lyt|{]k%,QWJ 9EdK]4DfT5K' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
