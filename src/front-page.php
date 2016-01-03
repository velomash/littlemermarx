<?php get_header(); ?>

    <main role="main">
        <!-- section -->
        <section>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('post-snippet'); ?>>
        <h3 class="post-title">
            <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <div class="info"><?php the_first_category_link(); ?><time><?php the_time('M j, Y'); ?></time></div>
        </h3>
        <div class="image-container">
            <?php
                $media = get_attached_media( 'image', get_the_ID() );
                $counter = 0;
                foreach($media as $image) {
                    if ($counter >= 3) {
                        break;
                    }
                    echo '<figure style="background-image:url(';
                    echo $image->guid;
                    echo ')"></figure>';
                    $counter++;
                }
            ?>
        </div>
    </article>
<?php endwhile; ?>
<?php endif; ?>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
