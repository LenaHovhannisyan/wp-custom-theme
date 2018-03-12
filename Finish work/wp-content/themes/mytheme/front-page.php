<?php 
get_header();

if(have_posts()){
	while (have_posts()) {
		the_post();
		?>

		<div class="home_page">
			<?php the_content(); ?>
		</div>	

		<?php
	}
}else {
	echo "no content found";
}

get_footer();
?>
