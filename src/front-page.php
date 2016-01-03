<?php get_header(); ?>

    <main role="main">
        <!-- section -->
        <section>

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
<?php endif; ?>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
