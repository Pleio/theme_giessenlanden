<?php
?>
/* <style> */

/* Theme Specific */

.theme-giessenlanden-header-gradient {
	position: absolute;
	top: 0px;
	right: 0px;
}

.theme-giessenlanden-header-lieke {
	position: absolute;
	top: 10px;
	left: 10px;
}

.theme-giessenlanden-header-giessenlanden {
	position: absolute;
	right: 10px;
	top: 10px;
}

.theme-giessenlanden-widget-glz-news-header {
	position: relative;
}

.theme-giessenlanden-widget-glz-news-header img {
	width: 100%;
}

.theme-giessenlanden-widgets-glz-news-news {
	position: absolute;
	bottom: 4px;
	width: 100%;
}

.theme-giessenlanden-widgets-glz-news-text {
	color: white;
	padding: 5px;
	position: relative;
}

.theme-giessenlanden-widgets-glz-news-overlay {
	background: black;
	opacity: 0.6;
	position: absolute;
	width: 100%;
	color: transparent;
	padding: 5px 0;
}

.theme-giessenlanden-widget-giessenlanden {
	background-color: #<?php echo THEME_COLOR_3;?>;
}

.theme-giessenlanden-widget-giessenlanden > .elgg-head {
	background: #<?php echo THEME_COLOR_3;?> url(<?php echo THEME_GRAPHICS; ?>widgets/glz_news/giessenlanden.png) top right no-repeat;
}

.theme-giessenlanden-widget-giessenlanden {
	background-color: #<?php echo THEME_COLOR_5;?>;
}

.theme-giessenlanden-widget-giessenlanden > .elgg-head {
	background: #<?php echo THEME_COLOR_5;?> url(<?php echo THEME_GRAPHICS; ?>widgets/glz_news/giessenlanden.png) top right no-repeat;
}

.theme-giessenlanden-widget-giessenlanden {
	background-color: #<?php echo THEME_COLOR_4;?>;
}

.theme-giessenlanden-widget-giessenlanden > .elgg-head {
	background: #<?php echo THEME_COLOR_4;?> url(<?php echo THEME_GRAPHICS; ?>widgets/glz_news/giessenlanden.png) top right no-repeat;
}

.elgg-widget-instance-glz_news .elgg-widget-content {
	padding: 0px;
}

.elgg-widget-instance-glz_news .elgg-output {
	margin: 0 0 0 5px;
}

.elgg-widget-instance-glz_news .elgg-output ul {
	margin: 0px;
}
.elgg-widget-instance-glz_news .elgg-output ul a{
	color: #<?php echo THEME_COLOR_6; ?>;
}
.elgg-widget-instance-glz_news .elgg-menu-item-collapse {
	display: none;
}
.elgg-widget-instance-glz_news > .elgg-head h3 {
	padding-left: 4px;
}

/* special blog widget header */
.theme-giessenlanden-widgets-blog {
	overflow: visible;
}

.theme-giessenlanden-widgets-blog.elgg-module-widget > .elgg-head {
	background-color: white;
}

.theme-giessenlanden-widgets-blog .elgg-menu-item-collapse {
	display: none;
}

.theme-giessenlanden-widgets-blog.elgg-module-widget > .elgg-head h3 {
	background: url(<?php echo THEME_GRAPHICS; ?>widgets/widgets-blog.png) top center no-repeat;
	color: transparent;
	font-size: 0px;
	padding: 0;
	float: none;
	width: 100%;
	height: 40px;
	position: absolute;
	top: -7px;
}

.elgg-list,
.elgg-list .elgg-item {
	border: none;
}

.elgg-list .elgg-item {
	padding: 5px;
}

.elgg-list-entity .elgg-item:nth-child(odd) {
	background: #ececec;
}
.elgg-list-entity .elgg-item:nth-child(even) {
	background: #f4f4f4;
}

#elgg-widget-col-1.elgg-col-1of3 {
	width: 20%;
}

#elgg-widget-col-1.elgg-col-1of3 .elgg-module-widget {
	margin-bottom: 0px;
	background: #<?php echo THEME_COLOR_1; ?>;
}
#elgg-widget-col-1.elgg-col-1of3 .elgg-module-widget > .elgg-body {
	background: #<?php echo THEME_COLOR_8; ?>;
}
#elgg-widget-col-1.elgg-col-1of3 .elgg-module-widget > .elgg-head {
	background: #<?php echo THEME_COLOR_1; ?>;
}

#elgg-widget-col-1.elgg-col-1of3 .elgg-widget-instance-index_login > .elgg-body {
	background: #<?php echo THEME_COLOR_1; ?>;
}

.elgg-widget-instance-index_login label {
	color: white;
}

.elgg-widget-instance-index_login .elgg-menu-general > li, 
.elgg-widget-instance-index_login .elgg-menu-general > li > a {
	color: #<?php echo THEME_COLOR_6; ?>;
}

#elgg-widget-col-2.elgg-col-1of3 {
	width: 26%;
	margin-right: 2%;
}
#elgg-widget-col-3.elgg-col-1of3 {
	width: 50%;
	margin-right: 2%;
}

#elgg-widget-col-1.elgg-col-1of2 {
	width: 49%;
	margin-left: 1%;
}
#elgg-widget-col-2.elgg-col-1of2 {
	width: 49%;
	margin-right: 1%;
}

.elgg-widget-instance-search .elgg-widget-content .elgg-button {
	display: block;
	float: right;
	margin-top: 5px;
	background: #<?php echo THEME_COLOR_5; ?>;
	border-color: #<?php echo THEME_COLOR_5; ?>;
	color: #FFF;
}

.elgg-widget-instance-search .elgg-widget-content .elgg-menu-entity {
	display: none;
}

.theme-giessenlanden-nieuws-listing .elgg-tags,
.theme-giessenlanden-nieuws-listing .elgg-image {
	display: none;
}

.theme-giessenlanden-nieuws-listing .blog_tools_blog_image {
	border: none;
	padding: 0;
	margin: 3px 5px 0 0;
}

.theme-giessenlanden-nieuws-listing .elgg-content img {
    height: 60px;
    width: 60px;
}

.elgg-widget-instance-index_members .elgg-gallery-users > li {
	margin: 0 3px 0 0;
}

.elgg-widget-instance-birthdays .elgg-list-entity .elgg-item {
	margin: 0 -10px;
	padding: 5px 10px;
}

.elgg-widget-instance-birthdays .elgg-list-entity .elgg-item:nth-child(odd) {
	background: transparent;
}
.elgg-widget-instance-birthdays .elgg-list-entity .elgg-item:nth-child(even) {
	background: #61b9e1;
}

.elgg-widget-instance-rss .elgg-widget-collapse-button,
.elgg-widget-instance-birthdays .elgg-widget-collapse-button,
.elgg-widget-instance-index_members .elgg-widget-collapse-button,
.elgg-widget-instance-search .elgg-widget-collapse-button {
	display: none;
}

.theme-giessenlanden-rss-listing .elgg-widget-content > div > a:before {
	content: "\25BA";
	padding-right: 5px;
}

.elgg-sidebar a,
.elgg-sidebar .elgg-head h3,
.elgg-sidebar .elgg-head h3 a {
	color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-sidebar a:hover {
	color: white;
}

.elgg-sidebar .elgg-subtext {
	color: #<?php echo THEME_COLOR_7; ?>;
}

.profile {
	width: 78%;
}

.profile .elgg-inner {
	margin: 0;
	border: none;
}

#profile-owner-block {
	background: #<?php echo THEME_COLOR_3; ?>;
	border: none;
}

#profile-details .odd,
#profile-details .even {
	background: #efefef;
}

#profile-details h3,
#profile-details #custom_fields_userdetails .ui-accordion-header {
	border: none;
	background: transparent;
	color: #<?php echo THEME_COLOR_6; ?>;
	padding: 5px 0px;
}

#profile-details a {
	color: #<?php echo THEME_COLOR_3; ?>;
}

.elgg-widget-instance-glz_news .elgg-list-entity .elgg-item {
	background: white;
}

.elgg-widget-instance-glz_news .elgg-list-entity li:before {
	content: "\25BA";
	padding-right: 5px;
}

.elgg-widget-instance-glz_news .elgg-list-entity a {
	color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-main > .elgg-content:after {
	clear: both;
    content: ".";
    display: block;
    height: 0;
    visibility: hidden;
}

.elgg-list-entity .elgg-item:nth-child(2n) {
	background: #FFF;
}

.elgg-list-entity .elgg-item:nth-child(2n+1) {
	background: #<?php echo THEME_COLOR_7; ?>;
}

.elgg-widget-instance-image_slider .flex-caption {
	background: white;
	color: black;
	top: 0;
	bottom: auto;
	font-size: 11px;
}

.elgg-widget-instance-image_slider .flex-caption h1 {
	color: black;
	font-size: 16px;
	padding-bottom: 10px;
}

.elgg-widget-instance-insider {
	background: url(<?php echo THEME_GRAPHICS; ?>insider.png) top right no-repeat;
	background-size: cover;
	height: 175px;
}

.elgg-widget-instance-insider > .elgg-head {
	background: transparent;
}

.elgg-widget-instance-insider > .elgg-body {
	background: rgba(255,255,255,0.4);
}

.elgg-widget-instance-insider .elgg-body li:before {
    content: "\25BA";
    padding-right: 5px;
}

.elgg-widget-instance-insider > .elgg-body a {
	color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-module.theme-giessenlanden-icon-paperclip,
#elgg-widget-col-1.elgg-col-1of3 .elgg-widget-instance-index_members {
	overflow: visible;
}

.elgg-module.theme-giessenlanden-icon-paperclip:before,
#elgg-widget-col-1.elgg-col-1of3 .elgg-widget-instance-index_members:before {
	background: url(<?php echo THEME_GRAPHICS; ?>paperclip_009bc2_50.png) top right no-repeat;
	content: "";
	display: block;
    height: 50px;
    margin-top: -10px;
	position: absolute;
    right: 0;
    width: 50px;
}

.elgg-module.theme-giessenlanden-icon-gift,
#elgg-widget-col-1.elgg-col-1of3 .elgg-widget-instance-birthdays {
	overflow: visible;
}

.elgg-module.theme-giessenlanden-icon-gift:before,
#elgg-widget-col-1.elgg-col-1of3 .elgg-widget-instance-birthdays:before {
	background: url(<?php echo THEME_GRAPHICS; ?>gift_009bc2_50.png) top right no-repeat;
	content: "";
	display: block;
    height: 50px;
    margin-top: -10px;
	position: absolute;
    right: 0;
    width: 50px;
}

.elgg-module.theme-giessenlanden-icon-thumb-tack {
	overflow: visible;
}

.elgg-module.theme-giessenlanden-icon-thumb-tack:before {
	background: url(<?php echo THEME_GRAPHICS; ?>thumb-tack_009bc2_50.png) top right no-repeat;
	content: "";
	display: block;
    height: 50px;
    margin-top: -10px;
	position: absolute;
    right: 0;
    width: 50px;
}

.elgg-form-widgets-save .elgg-input-access {
	max-width: 150px;
}