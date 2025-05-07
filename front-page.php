<?php get_header(); ?>

<h1 style="color: red;">Front-page.php is loading</h1>

<div class="content-area">
  <main class="site-main">
    <h2>Latest Posts</h2>

    <div class="blog-posts">
      <?php
      $query = new WP_Query(array('posts_per_page' => 6));
      if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post(); ?>
              <article class="post">
                  <?php if (has_post_thumbnail()) : ?>
                      <div class="post-thumbnail">
                          <a href="<?php the_permalink(); ?>">
                              <?php the_post_thumbnail('medium'); ?>
                          </a>
                      </div>
                  <?php endif; ?>

                  <h3 class="post-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>

                  <div class="post-excerpt">
                      <?php the_excerpt(); ?>
                  </div>
              </article>
          <?php endwhile;
          wp_reset_postdata();
      else : ?>
          <p>No posts found.</p>
      <?php endif; ?>
    </div>
  </main>
</div>

<?php get_footer(); ?>
