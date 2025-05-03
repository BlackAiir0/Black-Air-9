<footer>
    <p>&copy; <?php echo date('Y'); ?> Black Air Electric. All rights reserved.</p>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
    </nav>
</footer>

<?php wp_footer(); ?>
</body>
</html>
<nav class="footer-navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'menu_class' => 'footer-menu'
    ));
    ?>
</nav>