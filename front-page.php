<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <h1>Welcome to Black Air Electric</h1>
        <p>This is your custom homepage template.</p>

        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
