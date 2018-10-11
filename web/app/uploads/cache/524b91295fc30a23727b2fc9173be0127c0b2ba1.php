<div class="main-cover">
        <?php if(has_post_thumbnail()): ?>
        <div class="featured">
           <img src="<?php echo App::thumbnail(); ?>" alt=" <?php echo App::title(); ?>" >
        </div>
        <?php endif; ?>
    <div class="content-cover">
        <p class="subtitle animated fadeInUp" data-wow-delay="0.2s">Hello, I'm Andrea. Welcome to Salvatori Agencies. </p>
        <h1 class="title animated fadeInUp" data-wow-delay="0.4s"><?php echo App::title(); ?></h1>
        <p class="excerpt  animated fadeInUp " data-wow-delay="0.6s"><?php echo App::excerpt(); ?></p>
    </div>
</div>
