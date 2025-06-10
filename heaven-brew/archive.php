<?php get_header(); ?>

<main>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- Display Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('blog-thumbnail'); ?> <!-- Use 'blog-thumbnail' size -->
                    </a>
                </div>
            <?php endif; ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div><?php the_excerpt(); ?></div>

        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php esc_html_e('No posts found.', 'heaven-brew'); ?></p>
<?php endif; ?>

</main>

<?php get_footer(); ?>