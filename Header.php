!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header style="background-color: black; color: white; padding: 20px;">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
</header>
<nav style="background-color: #111; padding: 10px;">
    <ul style="list-style: none; display: flex; gap: 20px; margin: 0; padding: 0;">
        <li><a href="/" style="color: white; text-decoration: none;">Home</a></li>
        <li><a href="/about" style="color: white; text-decoration: none;">About</a></li>
        <li><a href="/shop" style="color: white; text-decoration: none;">Shop</a></li>
        <li><a href="/contact" style="color: white; text-decoration: none;">Contact</a></li>
        <li><a href="/vendor-registration" style="color: white; text-decoration: none;">Sell on Black Air Electric</a></li>
    </ul>
</nav>