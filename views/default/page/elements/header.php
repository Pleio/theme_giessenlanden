<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

// link back to main site.
echo elgg_view('page/elements/header_logo', $vars);

// drop-down login
// echo elgg_view('core/account/login_dropdown');

// insert site-wide navigation
echo "<div class='theme-giessenlanden-main-nav'>";
if (elgg_is_logged_in()) {
	echo "<span class='theme-giessenlanden-main-nav-home'><a href='" . elgg_get_site_url() . "'>" . elgg_echo("theme_giessenlanden:menu:home") . "</a></span>";
	echo elgg_view_menu('site');
}
echo "</div>";