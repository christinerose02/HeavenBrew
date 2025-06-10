<?php get_header(); ?>

<main id="main-content" role="main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
                    <h1><?php the_title(); ?></h1>
                </header>
                <section>
                    <div><?php the_content(); ?></div>
                </section>
            </article>

            <?php
                wp_link_pages( array(
                    'before'      => '<div class="page-links">' . esc_html__('Pages:', 'heaven-brew'),
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ) );
            ?>

            <?php
                // Load comments template if comments are open or there's at least one comment
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            ?>

        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No pages found.', 'heaven-brew'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
