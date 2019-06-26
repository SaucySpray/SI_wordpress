<?php get_header(); //appel du template header.php  ?>

<div class="home">
    <div class="nav-bar">
        <div class="search-bar">
            <img src="<?= IMAGES_URL.'/loupe.svg'?>" alt="">
        </div>
        <div class="hamburger-menu">
            <img src="<?= IMAGES_URL.'/menu.svg'?>" alt="">
        </div>
    </div>
    <h1 class="post-title"><?php bloginfo('name'); ?></h1>
    <div class="round"></div>
    <div class="content" id="content">
        <?php
        // boucle WordPress
        if (have_posts()){
            while (have_posts()){
                the_post();
                ?>
        <div class="canvas-container">
            <canvas></canvas>
        </div>
        <div class="article">

            <div class="info">
                <h2><?php the_title(); ?></h2>
                <h3><?php the_category(); ?></h3>
            </div>
            <div class="to-article">
                <a href="<?php the_permalink()?>">
                    <img src="<?= IMAGES_URL.'/arrow-back.svg'?>">
                </a>
            </div>
        </div>
        <?php
        }
        }
        else {
        ?>
        Nous n'avons pas trouvé d'article répondant à votre recherche
        <?php
        }
        ?>
    </div>
</div>

<?php get_footer(); //appel du template footer.php ?>