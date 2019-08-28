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
define( 'DB_NAME', 'wp_dev' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '!6MTiyS4&BX1u7&j{576S|}iQb7RgcRE9}qgF*86N.5r}V&?z9g#Sw5e.q0h|4=;' );
define( 'SECURE_AUTH_KEY',  'acQbM^0Ug!Djeug< !x_;}6Tk7-C@jJZvWx6OuaT2[y`Tfv95iv7q(L894kl9FHL' );
define( 'LOGGED_IN_KEY',    '[ZPj#%ELEh2H_R<5 (s^&:Dr>OLTQEpC[:A4<@(gS@w~JY{92)|~O|}, `^ @g$]' );
define( 'NONCE_KEY',        '41PYaHI1+V:s>v4yYk!}RS:X8T(v7E;do8B-CJ=-y1|@3S1PBf,M1r~d{Tu5u/Wd' );
define( 'AUTH_SALT',        'Q(QMGf{U+2@;,DU25?8$wJ{#J}5y2!DcFjHdBOj:H~zrd$|<ia2y[zWj2xojE3fF' );
define( 'SECURE_AUTH_SALT', 'XCS5fso)xN4N_|>3WT_MWx<JO)65eFP_-4-?4{aFM.k#16/wQe05+CaZ_rL$H.*/' );
define( 'LOGGED_IN_SALT',   '!@22p(>vY57Ux)9DFU#I`JlHv@qGE@DDRyV*+#MspDC:ZMg_hP%&4 TU6W2j`R[F' );
define( 'NONCE_SALT',       'rk5dwGcWIx<h3FFp0,On(&.ps_&4LB}*1B]G;s@9(|#:HqlK*3>sfS+N;-_7^vzQ' );

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
