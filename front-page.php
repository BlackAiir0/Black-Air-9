<?php
get_header();
?>

<main class="main-home">

  <!-- Hero Section -->
  <section class="hero">
    <h1>Welcome to Black Air Electric</h1>
    <p>Your one-stop destination for all electrical, plumbing & tech needs.</p>
  </section>

  <!-- Product Categories -->
  <section class="categories">
    <h2>Our Product Categories</h2>
    <ul>
      <li><a href="<?php echo site_url('/electricals'); ?>">Electricals</a></li>
      <li><a href="<?php echo site_url('/hardware'); ?>">Hardware</a></li>
      <li><a href="<?php echo site_url('/plumbing'); ?>">Plumbing</a></li>
      <li><a href="<?php echo site_url('/electronics'); ?>">Electronics</a></li>
    </ul>
  </section>

  <!-- Services Section -->
  <section class="services">
    <h2>Our Services</h2>
    <ul>
      <li><a href="<?php echo site_url('/ac-installation'); ?>">AC Installation</a></li>
      <li><a href="<?php echo site_url('/tv-repair'); ?>">TV Repair</a></li>
      <li><a href="<?php echo site_url('/car-service'); ?>">Car Service</a></li>
    </ul>
  </section>

  <!-- Latest Blog Posts -->
  <section class="homepage-posts">
    <h2>Latest Posts</h2>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="homepage-post">
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
            </a>
          <?php endif; ?>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo get_the_excerpt(); ?></p>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>No posts found.</p>
    <?php endif; ?>
  </section>

</main>

<?php
get_sidebar();
get_footer();
?>
<div class="container">
    <h1>Welcome to Black Air Electric</h1>
    <p>Your one-stop destination for all electrical, plumbing & tech needs.</p>
</div>