<?php get_header(); ?>

<section>
	<div class="post">
		<h2>
			<?php 
				if (is_category()) { ?>
					<i class="fa fa-folder-o arch-color"></i>
				<?php 
					single_cat_title();
				}elseif (is_author()) { ?>
					<i class="fa fa-user arch-color"></i> 
				<?php
					echo "Author archives: " . get_the_author();
				}
			 ?>
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