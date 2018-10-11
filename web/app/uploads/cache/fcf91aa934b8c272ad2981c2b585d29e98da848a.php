<!doctype html>
<html class="" <?php language_attributes() ?>>
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body <?php body_class() ?>>
<?php do_action('get_header') ?>
<div id="app" role="document">
    
    <div id="barba-wrapper">
        <div class="barba-container">
        <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php if(App\display_sidebar()): ?>
            <aside class="sidebar">
                <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </aside>
        <?php endif; ?>
        </div>
    </div>    
</div>
<?php do_action('get_footer') ?>
<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php wp_footer() ?>
</body>
</html>
