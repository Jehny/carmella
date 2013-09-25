<?php get_header(); ?>
				<div id="priGallery">
					<button class="buttons prev"></button>
						<div class="viewport">
							<ul class="overview">
								<?php query_posts( 'post_type=produto&posts_per_page=-1' ); ?>
								<?php if(have_posts()): while(have_posts()): the_post(); if(has_post_thumbnail()): ?>
								<li><a href="<?php bloginfo('url'); ?>/produtoseservicos"><?php the_post_thumbnail(array('150',150),array(title=>'')); ?></a></li>
								<?php endif; endwhile; endif;?>
							</ul>
						</div>
					<button class="buttons next"></button>
				</div>
				
				<div id="describe">
					<h3 class="headers">a empresa</h3>
										
					<?php query_posts( 'pagename=quemsomos' ); ?>
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<?php the_post_thumbnail( array('307',150) ); ?>
					<?php	global $more;	$more = 0; the_content(''); ?>
					<?php endwhile; endif;?>
					
					<span class="cls" />
				</div>
				
				<div id="iconList">
					<h3 class="headers">os clientes</h3>					
					<ul>
<?php
$args = array(
	'post_type' => 'attachment',
	'numberposts' => -1,
	'post_status' => null,
	'post_parent' => 29,
	'orderby' => 'name',
	'order' => 'ASC'
); 
$attachments = get_posts($args);
if ($attachments) {
	foreach ($attachments as $attachment) {
?>
					<li><img src="<?php echo wp_get_attachment_thumb_url($attachment->ID) ?>" /></li>
<?php
	}
}
?>					
					</ul>
				</div>
<?php get_footer(); ?>