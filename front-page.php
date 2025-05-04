<?php get_header(); ?>

<div class="blog-posts">
    <?php
    $query = new WP_Query(array('posts_per_page' => 6));
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="post">
                <div class="post-thumbnail">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?>
                </div>
                <div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="post-excerpt"><?php the_excerpt(); ?></div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
