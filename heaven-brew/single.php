<?php get_header(); ?>

<main id="main-content" role="main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Display Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('single-post'); ?> <!-- Use 'single-post' size -->
                    </div>
                <?php endif; ?>

                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>

                <!-- Post Tags -->
                <div class="post-tags">
                    <?php the_tags('<strong>' . esc_html__('Tags:', 'heaven-brew') . '</strong> ', ', ', ''); ?>
                </div>

                <!-- Pagination for Next/Previous Post -->
                <div class="post-navigation">
                    <?php the_posts_navigation(); ?>
                </div>

            </article>

            <?php
                // Load comments template if comments are open or there's at least one comment
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'heaven-brew'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
