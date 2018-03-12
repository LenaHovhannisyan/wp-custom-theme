<?php 
get_header();

if(have_posts()){
	while (have_posts()) {
		the_post();
		?>

		<div class="pages <?php if(is_page(232)){echo "order";} if(is_page(227)){echo "order_now";} if(is_page(11)){echo "contact";}?>">
			<h1>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<?php the_content(); ?>
		</div>	

		<?php
		if(is_page(126)){ ?>

		<div>
			<div class="one">
				<div class="opacity_box">
					<h1 class="page_title">
            			<a href="<?php the_permalink(130); ?>">
                			Museums and Galleries >>
            			</a>
        			</h1>
				</div>
			</div>
			<div class="two">
				<div class="opacity_box">
					<h1 class="page_title">
            			<a href="<?php the_permalink(132); ?>">
                			Churches >>
            			</a>
        			</h1>
				</div>
			</div>
			<div class="three">
				<div class="opacity_box">
					<h1 class="page_title">
            			<a href="<?php the_permalink(227); ?>">
                			Tour Agencies >>
            			</a>
        			</h1>
				</div>
			</div>
		
		</div>

		<?php }

		if(is_page(130) || is_page(132)){ 
			$children = wp_list_pages( 'title_li=&child_of='.$post->ID.'&echo=0' );
				if ( $children ) : ?>
					<div class="pages">
					    <?php echo $children; ?>
					</div>
					<?php endif;
		 }
	}
}else {
	echo "no content found";
}

get_footer();
?>
