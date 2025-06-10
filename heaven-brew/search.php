<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <h1><?php printf(esc_html__('Search Results for: %s', 'heaven-brew'), get_search_query()); ?></h1>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No results found.', 'heaven-brew'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>