<?php get_header(); ?>

<section>
	<div class="post">
		<?php 
			if(have_posts()){
				while (have_posts()) {
					
					the_post();
						get_template_part("content");
					}
			}else {
				echo "no content found";
			}
		?>
	</div>
	<div class="sidebar-column">
		<?php dynamic_sidebar("sidebar1"); ?>
	</div>
</section>

<?php get_footer(); ?>