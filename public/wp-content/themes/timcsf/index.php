<?php get_header();
echo "index.php";

// barre latérale gauche - non utilisé
if(is_active_sidebar("gauche")){?>
<aside id="gauche" class="barregauche">
    <?php get_sidebar("gauche")?>
</aside>
<?php } ?>

<main class="page">
    <?php
    if(have_posts()){
        while (have_posts()){
            the_post(); ?>
            <article class="article">
                <header class="article_entete">
                    <h2 class="article_titre">
                        <a class="article_lien" href="<?php the_permalink(); ?>"><?php the_title() ?> </a>
                    </h2>
                </header>
                <p class="article_texte">
                    <?php the_content(); ?>
                </p>
            </article>
        <?php  }
    }?>
</main>


<?php
// barre latérale droite - non utilisé
if(is_active_sidebar("droite")){?>
<aside id="droite" class="barredroite">
    <?php get_sidebar("droite")?>
</aside>
<?php } ?>

<?php get_footer(); ?>
