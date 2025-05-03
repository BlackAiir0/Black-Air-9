<?php get_header(); ?>

<div class="content-area">
    <main class="site-main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <h2><?php the_title(); ?></h2>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile;
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
