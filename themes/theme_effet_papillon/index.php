<?php get_header(); //appel du template header.php  ?>

<div class="scrollbar"></div>
<div id="content">
    <h1>Contenu Principal</h1>
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <h1><?php the_title(); ?></h1>
            <h2>Posté le <?php the_time('F jS, Y') ?></h2>
            <p><?php the_content(); ?></p>
            <a href="<?php the_permalink()?>">GO TO ARTICLE</a>

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

<?php get_footer(); //appel du template footer.php ?>