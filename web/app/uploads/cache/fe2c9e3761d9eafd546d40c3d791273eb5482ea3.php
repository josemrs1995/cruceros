<div class="animate fadeInUp">
<?php the_content() ?>
<?php echo wp_link_pages(['echo' => 0, 'before' => '<nav><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

</div>