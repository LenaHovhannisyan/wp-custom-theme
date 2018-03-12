<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
			if(is_page()){
				the_title();
			} else {
				bloginfo("name");
			}
		?>
	</title>
	<meta charset="<?php bloginfo("charset"); ?>">
	<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<main>
	<header class="<?php if(is_page("home")){echo "home_header";}else { echo "header";} ?>">
		<nav class="menu">
	        <?php
		        $args = array(
		            "theme_location" => "primary"
		        );
		        wp_nav_menu($args);
	        ?>
    	</nav>
    	<div class="site_search">
    		<?php get_search_form(); ?>
    	</div>
    	<h1 class="site_title">
            <a href="<?php echo home_url(); ?>">
                <?php bloginfo("name"); ?>
            </a>
        </h1>
	</header>

