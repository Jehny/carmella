<?php get_header(); ?>			
				<div id="prodGallery">
					<h3 class="headers">os produtos</h3>
					<div class="infoProd">
						<ul class="access">
								<?php query_posts( 'post_type=produto&posts_per_page=-1' ); ?>
								<?php if(have_posts()): $i=0; while(have_posts()): the_post(); if(has_post_thumbnail()): ?>
								<li<?php if($i == 0){echo " class=\"active\"";}$i++;?>>- <?php the_title(); ?></li>
								<?php endif; endwhile; endif;?>
						</ul>
						

								<?php query_posts( 'post_type=produto&posts_per_page=-1' ); ?>
								<?php if(have_posts()): $ii=0; while(have_posts()): the_post(); if(has_post_thumbnail()): ?>
						<div class="Desc"<?php if($ii > 0){echo " style=\"display:none;\"";}$ii++; ?>>
							<?php the_post_thumbnail( array('150',150) ); ?>
							<?php the_content();?>
						</div>
								<?php endif; endwhile; endif;?>						
						

						<span class="cls" />
					</div>
				</div>
			
				<div id="describe">
					<h3 class="headers">os servi&ccedil;os</h3>
					<?php query_posts( 'pagename=produtoseservicos' ); ?>
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<?php the_post_thumbnail( array('307',150) ); ?>
					<?php	the_content(); ?>
					<?php endwhile; endif;?>
					<span class="cls" />
				</div>
<?php get_footer(); ?>