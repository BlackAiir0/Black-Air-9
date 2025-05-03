<?php get_header(); ?>

<div class="content-area">
    <main class="site-main">
        <h1><?php the_archive_title(); ?></h1>

        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
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

