<?php get_header(); ?>
<div class="main single">
    <a href="#">
        <img class="back-arrow" src="<?= IMAGES_URL.'/arrow-back.svg'?>" alt="">
    </a>
    <div class="scrollbar">
        <div class="scroll-bg"></div>
        <div class="scroll-inner"></div>
    </div>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post">
    <div class="canvas-container">
        <canvas></canvas>
        <h1 class="post-title"><?php the_title(); ?></h1>
    </div>
    <div class="container-article">
        <div class="round"></div>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <h2>Catégorie <?php the_category(', '); ?></h2>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
        <div class="post-comments">
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>