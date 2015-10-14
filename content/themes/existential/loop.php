<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php edit_post_link(); ?>
			<time><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></time>
		</a>

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
	</article>

<?php endwhile; ?>

<?php else: ?>
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
<?php endif; ?>
