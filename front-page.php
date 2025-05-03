<?php
echo "FRONT PAGE LOADED";
get_header();

<?php
echo "FRONT PAGE LOADED";
?>
<?php echo "Loaded: front-page.php"; ?>
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
<?php get_header(); ?>

<main class="main-home">
  <section class="hero">
    <h1>Welcome to Black Air Electric</h1>
    <p>Your one-stop destination for all electrical, plumbing & tech needs.</p>
  </section>

  <section class="categories">
    <h2>Our Product Categories</h2>
    <ul>
      <li><a href="<?php echo site_url('/electricals'); ?>">Electricals</a></li>
      <li><a href="<?php echo site_url('/hardware'); ?>">Hardware</a></li>
      <li><a href="<?php echo site_url('/plumbing'); ?>">Plumbing</a></li>
      <li><a href="<?php echo site_url('/electronics'); ?>">Electronics</a></li>
    </ul>
  </section>

  <section class="services">
    <h2>Our Services</h2>
    <ul>
      <li><a href="<?php echo site_url('/ac-installation'); ?>">AC Installation</a></li>
      <li><a href="<?php echo site_url('/tv-repair'); ?>">TV Repair</a></li>
      <li><a href="<?php echo site_url('/car-service'); ?>">Car Service</a></li>
    </ul>
  </section>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="home-banner">
    <h1>Welcome to Black Air Electric</h1>
    <p>Your one-stop shop for electricals, electronics, and services</p>
</div>

<div class="home-content">
    <h2>Latest Posts</h2>
    <?php if ( have_posts() ) : ?>
        <ul class="home-posts">
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
<section class="homepage-posts">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="homepage-post">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                </a>
            <?php endif; ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo get_the_excerpt(); ?></p>
        </article>
    <?php endwhile; else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</section>
<?php get_header(); ?>

<div class="blog-posts">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <div class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="excerpt">
          <?php the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile;
  else :
    echo '<p>No posts found.</p>';
  endif;
  ?>
</div>

<?php get_footer(); ?>