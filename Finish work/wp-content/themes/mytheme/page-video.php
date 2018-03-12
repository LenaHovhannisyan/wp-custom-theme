<?php 
get_header();

if(have_posts()){
	while (have_posts()) {
		the_post();
		?>
		<div class="pages">  
		<h1>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			</div>
		<article class="page-video">
			<?php the_content(); ?>
		</article>		

		<?php
	}
}else {
	echo "no content found";
}

get_footer();
?>
