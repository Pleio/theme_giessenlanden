<?php
	
$widget = elgg_extract("entity", $vars);

$num_display = 7;

$options = array(
	"type" => "object",
	"subtype" => "blog",
	"limit" => $num_display,
	"metadata_name_value_pairs" => array(
		array(
			"name" => "status",
			"value" => "published"
		),
		array(
			"name" => "tags",
			"value" => "insider"
		),
	),
	"metadata_case_sensitive" => false
);

$blogs = elgg_get_entities_from_metadata($options);

if (!empty($blogs)) {
	echo "<ul>";
	
	foreach ($blogs as $blog) {
		echo "<li>";
		echo elgg_view("output/url", array("text" => elgg_get_excerpt($blog->title, 30), "title" => $blog->title, "href" => $blog->getURL(), "is_trusted" => true));
		echo "</li>";
	}
	echo "</ul>";
} else {
	echo elgg_view("output/longtext", array("value" => elgg_echo("notfound")));
}
