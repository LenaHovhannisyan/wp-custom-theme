<?php get_header(); ?>

<section>
	<div class="post">
		<h2>
			Search result for: <span><?php the_search_query(); ?></span>
		</h2>
		<?php 
			if(have_posts()){
				while (have_posts()) {
					the_post();
					
					get_template_part("content", get_post_format());
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