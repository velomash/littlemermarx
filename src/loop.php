<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<div class="container">
				<?php the_first_category_link(); ?>
				<h3><?php the_title(); ?></h3>
				<time><?php the_time('M j, Y'); ?></time>
			</div>
		</a>
		<?php edit_post_link(); ?>
	</article>

<?php endwhile; ?>

<?php else: ?>
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
<?php endif; ?>
