<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-snippet'); ?>>
		<h3 class="post-title">
			<div class="container">
				<a class="title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				<div class="info"><?php the_first_category_link(); ?><time><?php the_time('M j, Y'); ?></time></div>
			</div>
		</h3>
		<div class="image-container">
			<?php the_post_image_collage(); ?>
			<?php edit_post_link(); ?>
		</div>
	</article>

<?php endwhile; ?>

<?php else: ?>
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
<?php endif; ?>
