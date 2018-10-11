<header class="banner">
    <nav class="nav-primary">
    <a href="<?php echo e(home_url('/')); ?>"><img class="logo" src="<?php echo e(get_field('imagen_menu', 'options')); ?>"></a>
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
</header>
