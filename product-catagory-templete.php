<?php
/* Template Name: Product Category */
get_header();
?>

<main style="padding: 40px;">
  <h2><?php the_title(); ?></h2>
  <p>Select a subcategory:</p>

  <ul>
    <li><a href="#">Wires</a></li>
    <li><a href="#">Fans</a></li>
    <li><a href="#">Switches</a></li>
    <li><a href="#">Sockets</a></li>
    <li><a href="#">Lights</a></li>
  </ul>
</main>

<?php get_footer(); ?>