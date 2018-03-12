<?php 
function connect_resources()
{
    wp_enqueue_style("style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "connect_resources");

function custom_excerpt_length(){
	return 15;
}

add_filter("excerpt_length", "custom_excerpt_length");

function widgetsInit(){
	register_sidebar(array(
			"id" => "sidebar1",
			"name" => "Sidebar",
			"before_widget" => "<div>",
			"after_widget" => "</div>"
			)
		);
}

add_action("widgets_init", "widgetsInit");

function custom_theme_setup(){
	//Navigation menu
	register_nav_menus(array(
    "primary" => __("Primary menu"),
    "footer" => __("Footer menu")
	));

	//Featured image
	add_theme_support("post-thumbnails");
	add_image_size("small-img", 350, 200,true);
	add_image_size("big-img", 500, 350,true);

	//Post formats
	add_theme_support("post-formats", array('video'));

}

add_action("after_setup_theme", "custom_theme_setup");

?>