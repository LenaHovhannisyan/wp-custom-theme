<article class="post <?php if(has_post_thumbnail()){ echo "has-thumbnail";} ?>">
			<h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>

			<div class="post-date">
				<i class="fa fa-calendar"></i>
				<a href="<?php the_permalink(); ?>">
					<?php the_time("F j, Y");?>
				</a> /
				<i class="fa fa-user"></i> 
				<a href="<?php echo get_author_posts_url(get_the_author_meta("ID")) ?>">
					<?php the_author();?>
				</a> / 
				<i class="fa fa-folder-o"></i> <?php the_category(); ?>
			</div>

			<div class="post-thumbnail">
				<?php the_post_thumbnail("small-img"); ?>
			</div>
			
			<div class="text">
				<?php if(is_single()){
					the_content();
				}else{
					the_excerpt(); ?>
					
				<div class="more_box">
					<a href="<?php the_permalink(); ?>">
						More...
					</a>
				</div>	
				<?php } ?>		
			</div>
		
		</article>