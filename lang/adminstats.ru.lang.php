<?php
defined('COT_CODE') or die('Wrong URL');

/**
 * Plugin Info
 */

//$L['adminstat'] = '';
$L['info_desc'] = 'Детализированная статистика доступная из любого шаблона админ-панели';

/**
 * Plugin Config
 */

//$L['cfg_code'] = '';

/**
 * Plugin Admin
 */
$L['adminstat_cot_version'] = &$L['Version'];
$L['adminstat_cot_defaulttheme'] = 'Тема оформления, по умолчанию';
$L['adminstat_cot_defaultscheme'] = 'Цветовая схема, по умолчанию';
$L['adminstat_cot_defaulticons'] = 'Пакет значков, по умолчанию';
$L['adminstat_cot_defaultlang'] = 'Язык, по умолчанию';
$L['adminstat_cot_admintheme'] = 'Тема оформления панели администрирования';
$L['adminstat_cot_cache'] = 'Кэширование данных';
$L['adminstat_cot_cache_drv'] = 'Кэш драйвер';
$L['adminstat_cot_cache_drv_Empty']= &$L['Gender_U'];
$L['adminstat_cot_xtpl_cache'] = 'Кэширование шаблонов';
$L['adminstat_cot_html_cleanup'] = 'Удаление пробелов и переносов в HTML';
$L['adminstat_cot_cache_index'] = 'Статическая кэш для гостей главной';
$L['adminstat_cot_cache_page'] = 'Статическая кэш для гостей страниц и категорий';
$L['adminstat_cot_cache_forums'] = 'Статическая кэш для гостей на форумах';
$L['adminstat_cot_check_updates'] = 'Автоматически проверять наличие обновлений';
$L['adminstat_cot_display_errors'] = 'Отображения сообщений об ошибках';
$L['adminstat_cot_ipcheck'] = 'Проверка IP при авторизации';
$L['adminstat_cot_authcache'] = 'Кэширование прав в SQL таблицы БД';
$L['adminstat_cot_useremailduplicate'] = 'Регистрация новых учетные записи с дублирующимся Email';
$L['adminstat_cot_debug_mode'] = 'Режим отладки';

$L['adminstat_modules'] = &$L['Modules'];
$L['adminstat_active_modules'] = 'Активные модули';
$L['adminstat_plugins'] = &$L['Plugins'];
$L['adminstat_active_plugins'] = 'Активные плагины';
$L['adminstat_hooks'] = &$L['Hooks'];
$L['adminstat_active_hooks'] = 'Активные хуки';

$L['adminstat_cot_database'] = &$L['Database'];
$L['adminstat_mysqlcharset'] = 'Кодировка БД SQL';

$L['adminstat_db_counts'] = 'БД SQL, таблиц';
$L['adminstat_db_rows'] = &$L['home_db_rows'];
$L['adminstat_db_indexsize'] = &$L['home_db_indexsize'];
$L['adminstat_db_datassize'] = &$L['home_db_datassize'];
$L['adminstat_db_totalsize'] = &$L['home_db_totalsize'];

$L['adminstat_cot_db_counts'] = 'БД SQL, таблиц Cotonti';
$L['adminstat_cot_db_rows'] = 'БД SQL, строк Cotonti';
$L['adminstat_cot_db_indexsize'] = 'БД SQL, размер индекса Cotonti (KB)';
$L['adminstat_cot_db_datassize'] = 'БД SQL, размер данных Cotonti (KB)';
$L['adminstat_cot_db_totalsize'] = 'БД SQL, общий размер Cotonti (KB)';

$L['adminstat_no_new_ver'] = 'Ваша версия актуальна';
$L['adminstat_new_ver'] = 'Возможность обновления';
$L['adminstat_update_revision'] = &$L['home_update_revision'];
$L['adminstat_new_ver_msg'] = 'Анонс новой версии';

$L['adminstat_error_type_disabled'] = 'Расширение %1$s не активно';
$L['adminstat_error_type_wrong'] = 'Указанно но поддерживаемое расширение';

/**
 * Plugin Admin
 */

//$L['adminstat_'] = '';