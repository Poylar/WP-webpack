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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'taximus' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '3*=q^CW:Zc8%8SuB`tc<mD+r_9w|Lbv@:b$.,$QO>[#rTpRN4$V-PanO[rL~U%J8' );
define( 'SECURE_AUTH_KEY',  'v,PA<^rcA>hm2+~kG!t44i:!Z:*MP_oT{b}<xHS7XVO74$^ ?fe}+CP9bAlBJJ`A' );
define( 'LOGGED_IN_KEY',    '@5W<_L/V:E: ;]s<~Nz$x_RsE,{vM_3>T2Isl$9+}1kOfVTgkQG_SX/5*FTTbn8}' );
define( 'NONCE_KEY',        'k~g3 {^5-71J.Voc9tPPR*` `WB_P4qSh?Hy,Fo4=hlq[@+TI8k|mrmAJ>4AX:%#' );
define( 'AUTH_SALT',        '2.<y14AVUHl2YoYp*U?OR>W)_)_5g)WGisnt!Wmc&lxjBOs8J/%_+i:l_qMZ{U~q' );
define( 'SECURE_AUTH_SALT', '7V[?E%km:J>#4CABH1b=c9SjJ&m9$E4<5]>i<KK/[cSBX+UBO%JY&Q`#.;(^FqD]' );
define( 'LOGGED_IN_SALT',   '7Vt)BrQQJwr+UQ=4K-yr|]D}>SQ5mgkKM`(J-5?W0DO.%Ckvxh(Wq=oh6P-k!NP*' );
define( 'NONCE_SALT',       'NcgzEf{Wq:s]]%<}hwm &vR;wH>rR,?ZZR6@/VA:Y`a+O4&ZUoq#vKREHQTrDx4E' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */
define('FS_METHOD', 'direct');


/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
