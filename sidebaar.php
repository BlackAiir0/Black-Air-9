<div id="sidebar">
    <h2>Sidebar</h2>
    <ul>
        <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'main-sidebar' ); ?>
        <?php else : ?>
            <li>Add some widgets to the sidebar!</li>
        <?php endif; ?>
    </ul>
</div>
