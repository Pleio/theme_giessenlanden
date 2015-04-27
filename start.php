<?php

define("THEME_GRAPHICS", elgg_get_site_url() . "mod/theme_giessenlanden/_graphics/");
define("THEME_COLOR_1", "98bf0c"); // green
define("THEME_COLOR_2", "edc52e"); // yellow
define("THEME_COLOR_3", "dd7652"); // red
define("THEME_COLOR_4", "98bf0c"); // green
define("THEME_COLOR_5", "009bc2"); // blue
define("THEME_COLOR_6", "58595b"); // dark grey (text)
define("THEME_COLOR_7", "ccebf3"); // light blue (background)
define("THEME_COLOR_8", "abcf5f"); // green widget background
define("THEME_COLOR_9", "b7d677"); // light green widget background

define("GLZ_SITE_GUID", 5118402);

require_once(dirname(__FILE__) . "/lib/hooks.php");

function theme_giessenlanden_init() {

	require_once(elgg_get_plugins_path() . "widget_manager/widgets/rss/vendors/simplepie/autoloader.php");

	elgg_register_widget_type("glz_news", elgg_echo("theme_giessenlanden:widgets:glz_news:title"), elgg_echo("theme_giessenlanden:widgets:glz_news:description"), "index", true);
	elgg_register_widget_type("giessenlanden_index", elgg_echo("theme_giessenlanden:widgets:giessenlanden_index:title"), elgg_echo("theme_giessenlanden:widgets:giessenlanden_index:description"), "index");
	elgg_register_widget_type("insider", elgg_echo("theme_giessenlanden:widgets:insider:title"), elgg_echo("theme_giessenlanden:widgets:insider:description"), "index");
	elgg_extend_view("css/elgg", "css/theme_giessenlanden");
	
	elgg_unextend_view("page/elements/header", "search/header");
	
	// plugin hooks
	elgg_register_plugin_hook_handler("access:collections:read", "user", "theme_giessenlanden_access_read_hook");
}

elgg_register_event_handler('init', 'system', 'theme_giessenlanden_init');
